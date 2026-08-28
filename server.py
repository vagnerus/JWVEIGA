import http.server
import socketserver
import os
import json
import urllib.parse
from datetime import datetime, timedelta

PORT = 8080
BASE_DIR = os.path.dirname(os.path.abspath(__file__))
DB_FILE = os.path.join(BASE_DIR, 'database.json')

def carregar_db():
    if not os.path.exists(DB_FILE):
        db_inicial = {
            "usuarios": [
                {
                    "usuario": "veiga",
                    "senha": "123456",
                    "perfil": "admin",
                    "status": "ativo",
                    "expiracao": None,
                    "criadoEm": datetime.now().isoformat()
                }
            ],
            "menus": {
                "veiga": {
                    "topo": [
                        { "nome": "Gmail", "url": "https://mail.google.com/", "icone": "fa-solid fa-envelope" },
                        { "nome": "YouTube", "url": "https://www.youtube.com/", "icone": "fa-brands fa-youtube" },
                        { "nome": "Chat GPT", "url": "https://chatgpt.com/", "icone": "fa-solid fa-robot" },
                        { "nome": "Fiserv", "url": "https://sitef2.softwareexpress.com.br/", "icone": "fa-solid fa-credit-card" },
                        { "nome": "Laurenti", "url": "https://laurentiepdltda.zendesk.com/", "icone": "fa-solid fa-headset" },
                        { "nome": "Bradesco", "url": "https://banco.bradesco/", "icone": "fa-solid fa-building-columns" },
                        { "nome": "Caixa", "url": "https://www.caixa.gov.br/", "icone": "fa-solid fa-vault" },
                        { "nome": "I love PDF", "url": "https://www.ilovepdf.com/pt", "icone": "fa-solid fa-file-pdf" }
                    ],
                    "sistemas": [
                        { "nome": "Agenda", "url": "Caminhos/Agenda.html", "icone": "fa-solid fa-calendar-days" },
                        { "nome": "Senha", "url": "Caminhos/Senhas.html", "icone": "fa-solid fa-key" },
                        { "nome": "Estações Hosts / IP", "url": "Caminhos/Micros.html", "icone": "fa-solid fa-network-wired" },
                        { "nome": "Reinicialização 15/15 Servidores", "url": "Caminhos/Servidores.html", "icone": "fa-solid fa-server" },
                        { "nome": "Relatórios Batch", "url": "Caminhos/RelatoriosBatch.html", "icone": "fa-solid fa-chart-line" },
                        { "nome": "Telas RM", "url": "Caminhos/Telas RM.html", "icone": "fa-solid fa-desktop" },
                        { "nome": "Calcular Jornada", "url": "Caminhos/calcular_jornada.php.html", "icone": "fa-solid fa-clock" },
                        { "nome": "Gertec Busca Preço", "url": "Caminhos/Gertec.html", "icone": "fa-solid fa-barcode" }
                    ],
                    "meuslinks": [],
                    "outros": [
                        { "nome": "Relógio Biométrico", "url": "Caminhos/Biometrico.html", "icone": "fa-solid fa-fingerprint" }
                    ]
                }
            }
        }
        salvar_db(db_inicial)
        return db_inicial
    try:
        with open(DB_FILE, 'r', encoding='utf-8') as f:
            return json.load(f)
    except Exception:
        return {"usuarios": [], "menus": {}}

def salvar_db(dados):
    with open(DB_FILE, 'w', encoding='utf-8') as f:
        json.dump(dados, f, ensure_ascii=False, indent=2)

def limpar_visitantes_expirados(db):
    agora = datetime.now()
    alterou = False
    novos_usuarios = []
    for u in db.get("usuarios", []):
        if u.get("perfil") == "visitante" and u.get("expiracao"):
            try:
                exp = datetime.fromisoformat(u["expiracao"])
                if agora > exp:
                    if u["usuario"].lower() in db.get("menus", {}):
                        del db["menus"][u["usuario"].lower()]
                    alterou = True
                    continue
            except Exception:
                pass
        novos_usuarios.append(u)
    
    if alterou:
        db["usuarios"] = novos_usuarios
        salvar_db(db)
    return db

class CPDRequestHandler(http.server.SimpleHTTPRequestHandler):
    def __init__(self, *args, **kwargs):
        super().__init__(*args, directory=BASE_DIR, **kwargs)

    extensions_map = http.server.SimpleHTTPRequestHandler.extensions_map.copy()
    extensions_map.update({
        '.php': 'text/html; charset=utf-8',
        '.html': 'text/html; charset=utf-8',
        '.webp': 'image/webp',
        '.json': 'application/json; charset=utf-8'
    })

    def enviar_json(self, status_code, dados):
        corpo = json.dumps(dados, ensure_ascii=False).encode('utf-8')
        self.send_response(status_code)
        self.send_header('Content-Type', 'application/json; charset=utf-8')
        self.send_header('Content-Length', str(len(corpo)))
        self.send_header('Access-Control-Allow-Origin', '*')
        self.send_header('Access-Control-Allow-Methods', 'GET, POST, DELETE, OPTIONS')
        self.send_header('Access-Control-Allow-Headers', 'Content-Type, X-Usuario')
        self.end_headers()
        self.wfile.write(corpo)

    def do_OPTIONS(self):
        self.send_response(200)
        self.send_header('Access-Control-Allow-Origin', '*')
        self.send_header('Access-Control-Allow-Methods', 'GET, POST, DELETE, OPTIONS')
        self.send_header('Access-Control-Allow-Headers', 'Content-Type, X-Usuario')
        self.end_headers()

    def ler_json_body(self):
        try:
            content_length = int(self.headers.get('Content-Length', 0))
            if content_length == 0:
                return {}
            body = self.rfile.read(content_length).decode('utf-8')
            return json.loads(body)
        except Exception:
            return {}

    def do_GET(self):
        url_parsed = urllib.parse.urlparse(self.path)
        path = url_parsed.path

        if path == '/api/admin/usuarios':
            db = carregar_db()
            db = limpar_visitantes_expirados(db)
            self.enviar_json(200, { "sucesso": True, "usuarios": db.get("usuarios", []) })
            return

        elif path == '/api/menus':
            query = urllib.parse.parse_qs(url_parsed.query)
            usuario = query.get('usuario', [''])[0].lower()
            db = carregar_db()
            menus_usuario = db.get("menus", {}).get(usuario)
            if not menus_usuario:
                menus_usuario = {
                    "topo": [
                        { "nome": "Gmail", "url": "https://mail.google.com/", "icone": "fa-solid fa-envelope" },
                        { "nome": "YouTube", "url": "https://www.youtube.com/", "icone": "fa-brands fa-youtube" },
                        { "nome": "Chat GPT", "url": "https://chatgpt.com/", "icone": "fa-solid fa-robot" },
                        { "nome": "Fiserv", "url": "https://sitef2.softwareexpress.com.br/", "icone": "fa-solid fa-credit-card" },
                        { "nome": "Laurenti", "url": "https://laurentiepdltda.zendesk.com/", "icone": "fa-solid fa-headset" },
                        { "nome": "Bradesco", "url": "https://banco.bradesco/", "icone": "fa-solid fa-building-columns" },
                        { "nome": "Caixa", "url": "https://www.caixa.gov.br/", "icone": "fa-solid fa-vault" },
                        { "nome": "I love PDF", "url": "https://www.ilovepdf.com/pt", "icone": "fa-solid fa-file-pdf" }
                    ],
                    "sistemas": [],
                    "meuslinks": [],
                    "outros": []
                }
                if usuario == "veiga":
                    menus_usuario["sistemas"] = db.get("menus", {}).get("veiga", {}).get("sistemas", [])
                    menus_usuario["outros"] = [{ "nome": "Relógio Biométrico", "url": "Caminhos/Biometrico.html", "icone": "fa-solid fa-fingerprint" }]
            
            self.enviar_json(200, { "sucesso": True, "menus": menus_usuario })
            return

        if path == '/' or path == '/index.php':
            self.path = '/index.html'

        return super().do_GET()

    def do_POST(self):
        url_parsed = urllib.parse.urlparse(self.path)
        path = url_parsed.path
        dados = self.ler_json_body()

        if path == '/api/login':
            usuario = str(dados.get('usuario', '')).strip().lower()
            senha = str(dados.get('senha', '')).strip()

            db = carregar_db()
            db = limpar_visitantes_expirados(db)

            conta = next((u for u in db.get("usuarios", []) if u["usuario"].lower() == usuario), None)
            if not conta or conta.get("senha") != senha:
                self.enviar_json(401, { "sucesso": False, "mensagem": "Usuário ou senha incorretos." })
                return

            if conta.get("status") == "bloqueado":
                self.enviar_json(403, { "sucesso": False, "mensagem": "Esta conta está bloqueada pelo Administrador." })
                return

            if conta.get("expiracao"):
                try:
                    exp = datetime.fromisoformat(conta["expiracao"])
                    if datetime.now() > exp:
                        self.enviar_json(403, { "sucesso": False, "mensagem": "O tempo de acesso desta conta expirou." })
                        return
                except Exception:
                    pass

            self.enviar_json(200, {
                "sucesso": True,
                "usuario": conta["usuario"],
                "perfil": conta["perfil"],
                "expiracao": conta.get("expiracao")
            })
            return

        elif path == '/api/cadastro':
            usuario = str(dados.get('usuario', '')).strip()
            senha = str(dados.get('senha', '')).strip()

            if len(usuario) < 3 or len(senha) == 0:
                self.enviar_json(400, { "sucesso": False, "mensagem": "Usuário deve ter pelo menos 3 caracteres." })
                return

            db = carregar_db()
            if any(u["usuario"].lower() == usuario.lower() for u in db.get("usuarios", [])):
                self.enviar_json(400, { "sucesso": False, "mensagem": "Este usuário já está cadastrado." })
                return

            novo_usuario = {
                "usuario": usuario,
                "senha": senha,
                "perfil": "usuario",
                "status": "ativo",
                "expiracao": None,
                "criadoEm": datetime.now().isoformat()
            }
            db.setdefault("usuarios", []).append(novo_usuario)
            db.setdefault("menus", {})[usuario.lower()] = {
                "topo": [
                    { "nome": "Gmail", "url": "https://mail.google.com/", "icone": "fa-solid fa-envelope" },
                    { "nome": "YouTube", "url": "https://www.youtube.com/", "icone": "fa-brands fa-youtube" },
                    { "nome": "Chat GPT", "url": "https://chatgpt.com/", "icone": "fa-solid fa-robot" },
                    { "nome": "Fiserv", "url": "https://sitef2.softwareexpress.com.br/", "icone": "fa-solid fa-credit-card" },
                    { "nome": "Laurenti", "url": "https://laurentiepdltda.zendesk.com/", "icone": "fa-solid fa-headset" },
                    { "nome": "Bradesco", "url": "https://banco.bradesco/", "icone": "fa-solid fa-building-columns" },
                    { "nome": "Caixa", "url": "https://www.caixa.gov.br/", "icone": "fa-solid fa-vault" },
                    { "nome": "I love PDF", "url": "https://www.ilovepdf.com/pt", "icone": "fa-solid fa-file-pdf" }
                ],
                "sistemas": [],
                "meuslinks": [],
                "outros": []
            }
            salvar_db(db)
            self.enviar_json(200, { "sucesso": True, "mensagem": "Conta criada com sucesso!" })
            return

        elif path == '/api/perfil/atualizar':
            usuario_atual = str(dados.get('usuarioAtual', '')).strip().lower()
            novo_usuario = str(dados.get('novoUsuario', '')).strip()
            nova_senha = str(dados.get('novaSenha', '')).strip()

            if len(novo_usuario) < 3:
                self.enviar_json(400, { "sucesso": False, "mensagem": "O novo nome de usuário deve ter pelo menos 3 caracteres." })
                return

            db = carregar_db()
            conta = next((u for u in db.get("usuarios", []) if u["usuario"].lower() == usuario_atual), None)
            if not conta:
                self.enviar_json(404, { "sucesso": False, "mensagem": "Usuário atual não encontrado." })
                return

            # Se trocou de nome de usuário, verificar se já existe
            if novo_usuario.lower() != usuario_atual:
                if any(u["usuario"].lower() == novo_usuario.lower() for u in db.get("usuarios", [])):
                    self.enviar_json(400, { "sucesso": False, "mensagem": "Este novo nome de usuário já está em uso." })
                    return
                # Migrar menus
                if usuario_atual in db.get("menus", {}):
                    db["menus"][novo_usuario.lower()] = db["menus"].pop(usuario_atual)

            conta["usuario"] = novo_usuario
            if nova_senha:
                conta["senha"] = nova_senha

            salvar_db(db)
            self.enviar_json(200, {
                "sucesso": True,
                "usuario": novo_usuario,
                "perfil": conta["perfil"],
                "mensagem": "Perfil atualizado com sucesso!"
            })
            return

        elif path == '/api/visitante':
            import random
            random_id = random.randint(1000, 9999)
            nome_visitante = f"visitante_{random_id}"
            expiracao = (datetime.now() + timedelta(minutes=10)).isoformat()

            db = carregar_db()
            novo_visitante = {
                "usuario": nome_visitante,
                "senha": "",
                "perfil": "visitante",
                "status": "ativo",
                "expiracao": expiracao,
                "criadoEm": datetime.now().isoformat()
            }
            db.setdefault("usuarios", []).append(novo_visitante)
            db.setdefault("menus", {})[nome_visitante.lower()] = {
                "topo": [
                    { "nome": "Gmail", "url": "https://mail.google.com/", "icone": "fa-solid fa-envelope" },
                    { "nome": "YouTube", "url": "https://www.youtube.com/", "icone": "fa-brands fa-youtube" },
                    { "nome": "Chat GPT", "url": "https://chatgpt.com/", "icone": "fa-solid fa-robot" },
                    { "nome": "Fiserv", "url": "https://sitef2.softwareexpress.com.br/", "icone": "fa-solid fa-credit-card" },
                    { "nome": "Laurenti", "url": "https://laurentiepdltda.zendesk.com/", "icone": "fa-solid fa-headset" },
                    { "nome": "Bradesco", "url": "https://banco.bradesco/", "icone": "fa-solid fa-building-columns" },
                    { "nome": "Caixa", "url": "https://www.caixa.gov.br/", "icone": "fa-solid fa-vault" },
                    { "nome": "I love PDF", "url": "https://www.ilovepdf.com/pt", "icone": "fa-solid fa-file-pdf" }
                ],
                "sistemas": [],
                "meuslinks": [],
                "outros": []
            }
            salvar_db(db)
            self.enviar_json(200, {
                "sucesso": True,
                "usuario": nome_visitante,
                "perfil": "visitante",
                "expiracao": expiracao
            })
            return

        elif path == '/api/menus':
            usuario = str(dados.get('usuario', '')).strip().lower()
            menus = dados.get('menus', {})
            if usuario:
                db = carregar_db()
                db.setdefault("menus", {})[usuario] = menus
                salvar_db(db)
                self.enviar_json(200, { "sucesso": True })
                return
            self.enviar_json(400, { "sucesso": False, "mensagem": "Usuário não especificado." })
            return

        elif path == '/api/admin/usuario/tempo':
            usuario = str(dados.get('usuario', '')).strip().lower()
            minutos = dados.get('minutos')
            
            db = carregar_db()
            for u in db.get("usuarios", []):
                if u["usuario"].lower() == usuario:
                    if minutos is None or minutos <= 0:
                        u["expiracao"] = None
                        if u.get("perfil") == "visitante":
                            u["perfil"] = "usuario"
                    else:
                        u["expiracao"] = (datetime.now() + timedelta(minutes=int(minutos))).isoformat()
                    u["status"] = "ativo"
                    salvar_db(db)
                    self.enviar_json(200, { "sucesso": True })
                    return
            self.enviar_json(404, { "sucesso": False, "mensagem": "Usuário não encontrado." })
            return

        elif path == '/api/admin/usuario/status':
            usuario = str(dados.get('usuario', '')).strip().lower()
            db = carregar_db()
            for u in db.get("usuarios", []):
                if u["usuario"].lower() == usuario:
                    u["status"] = "bloqueado" if u.get("status") == "ativo" else "ativo"
                    salvar_db(db)
                    self.enviar_json(200, { "sucesso": True, "status": u["status"] })
                    return
            self.enviar_json(404, { "sucesso": False, "mensagem": "Usuário não encontrado." })
            return

        elif path == '/api/admin/usuario/criar':
            usuario = str(dados.get('usuario', '')).strip()
            senha = str(dados.get('senha', '')).strip()
            perfil = str(dados.get('perfil', 'usuario')).strip()
            minutos = dados.get('minutos')

            db = carregar_db()
            if any(u["usuario"].lower() == usuario.lower() for u in db.get("usuarios", [])):
                self.enviar_json(400, { "sucesso": False, "mensagem": "Usuário já existe." })
                return

            expiracao = None
            if minutos:
                expiracao = (datetime.now() + timedelta(minutes=int(minutos))).isoformat()

            novo = {
                "usuario": usuario,
                "senha": senha,
                "perfil": perfil,
                "status": "ativo",
                "expiracao": expiracao,
                "criadoEm": datetime.now().isoformat()
            }
            db.setdefault("usuarios", []).append(novo)
            db.setdefault("menus", {})[usuario.lower()] = {
                "topo": [
                    { "nome": "Gmail", "url": "https://mail.google.com/", "icone": "fa-solid fa-envelope" },
                    { "nome": "YouTube", "url": "https://www.youtube.com/", "icone": "fa-brands fa-youtube" },
                    { "nome": "Chat GPT", "url": "https://chatgpt.com/", "icone": "fa-solid fa-robot" },
                    { "nome": "Fiserv", "url": "https://sitef2.softwareexpress.com.br/", "icone": "fa-solid fa-credit-card" },
                    { "nome": "Laurenti", "url": "https://laurentiepdltda.zendesk.com/", "icone": "fa-solid fa-headset" },
                    { "nome": "Bradesco", "url": "https://banco.bradesco/", "icone": "fa-solid fa-building-columns" },
                    { "nome": "Caixa", "url": "https://www.caixa.gov.br/", "icone": "fa-solid fa-vault" },
                    { "nome": "I love PDF", "url": "https://www.ilovepdf.com/pt", "icone": "fa-solid fa-file-pdf" }
                ],
                "sistemas": [],
                "meuslinks": [],
                "outros": []
            }
            salvar_db(db)
            self.enviar_json(200, { "sucesso": True })
            return

        self.send_error(404, "Endpoint não encontrado")

    def do_DELETE(self):
        url_parsed = urllib.parse.urlparse(self.path)
        path = url_parsed.path

        if path == '/api/admin/usuario':
            query = urllib.parse.parse_qs(url_parsed.query)
            usuario = query.get('usuario', [''])[0].lower()
            if usuario == 'veiga':
                self.enviar_json(400, { "sucesso": False, "mensagem": "Não é permitido excluir a conta principal do administrador." })
                return

            db = carregar_db()
            db["usuarios"] = [u for u in db.get("usuarios", []) if u["usuario"].lower() != usuario]
            if usuario in db.get("menus", {}):
                del db["menus"][usuario]
            salvar_db(db)
            self.enviar_json(200, { "sucesso": True })
            return

        self.send_error(404, "Endpoint não encontrado")

if __name__ == '__main__':
    carregar_db()
    socketserver.TCPServer.allow_reuse_address = True
    with socketserver.TCPServer(('127.0.0.1', PORT), CPDRequestHandler) as httpd:
        print(f"Servidor CPD rodando em http://localhost:{PORT}")
        httpd.serve_forever()
