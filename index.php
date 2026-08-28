<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>..:: Portal Pessoal Veiga ::..</title>

<link rel="shortcut icon" type="image/x-icon" href="IMG/cpd2.png"/>

<!-- FONT AWESOME ICONS CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>

body{
margin:0;
background:#000 url("IMG/Tema%201.webp") no-repeat center center fixed;
background-size:cover;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
min-height: 100vh;
}

/* DARK PROFISSIONAL */

body::before{
content:"";
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,0.68);
z-index:-1;
}

/* ==================== TELA DE LOGIN & CADASTRO ==================== */

#tela-auth {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.88);
backdrop-filter: blur(10px);
z-index: 9999;
display: flex;
justify-content: center;
align-items: center;
}

.auth-card {
background: #040D16;
border: 2px solid #00ffcc;
border-radius: 14px;
padding: 28px 25px;
width: 90%;
max-width: 420px;
box-shadow: 0 0 35px rgba(0, 255, 204, 0.6), inset 0 0 15px rgba(0, 234, 255, 0.2);
text-align: center;
animation: surgirAuth 0.4s ease-out;
}

@keyframes surgirAuth {
from { transform: scale(0.85); opacity: 0; }
to { transform: scale(1); opacity: 1; }
}

.auth-logo {
width: 65px;
height: auto;
margin-bottom: 8px;
filter: drop-shadow(0 0 10px #00eaff);
}

.auth-titulo {
color: #00eaff;
font-size: 20px;
font-weight: bold;
letter-spacing: 2px;
margin-bottom: 4px;
text-shadow: 0 0 12px #00eaff;
text-transform: uppercase;
}

.auth-subtitulo {
color: #ACFCFB;
font-size: 12px;
margin-bottom: 16px;
opacity: 0.8;
}

/* ABAS DE LOGIN / CADASTRO */

.auth-abas {
display: flex;
border-bottom: 1px solid #00eaff;
margin-bottom: 18px;
}

.auth-aba {
flex: 1;
padding: 10px 4px;
color: #6d8a9c;
font-size: 12px;
font-weight: bold;
cursor: pointer;
transition: 0.3s;
border-bottom: 2px solid transparent;
}

.auth-aba.ativa {
color: #39ff14;
border-bottom: 2px solid #39ff14;
text-shadow: 0 0 8px #39ff14;
}

.auth-grupo {
margin-bottom: 14px;
text-align: left;
}

.auth-grupo label {
display: block;
color: #00ffcc;
font-size: 11px;
font-weight: bold;
margin-bottom: 5px;
letter-spacing: 1px;
}

.auth-grupo input {
width: 100%;
box-sizing: border-box;
background: #000;
border: 1px solid #00eaff;
color: #fff;
padding: 10px 12px;
border-radius: 7px;
font-size: 13px;
outline: none;
transition: 0.3s;
}

.auth-grupo input:focus {
border-color: #39ff14;
box-shadow: 0 0 12px #39ff14;
}

.btn-auth-submit {
width: 100%;
background: #00ffcc;
color: #040D16;
border: none;
padding: 11px;
font-weight: bold;
font-size: 13px;
border-radius: 7px;
cursor: pointer;
margin-top: 8px;
transition: 0.3s;
letter-spacing: 1.2px;
text-transform: uppercase;
box-shadow: 0 0 15px rgba(0, 255, 204, 0.4);
display: flex;
align-items: center;
justify-content: center;
gap: 8px;
}

.btn-auth-submit:hover {
background: #39ff14;
box-shadow: 0 0 25px #39ff14;
transform: scale(1.02);
}

.btn-visitante-rapido {
width: 100%;
background: transparent;
color: #ffaa00;
border: 2px dashed #ffaa00;
padding: 11px;
font-weight: bold;
font-size: 12px;
border-radius: 7px;
cursor: pointer;
margin-top: 14px;
transition: 0.3s;
letter-spacing: 1px;
text-transform: uppercase;
display: flex;
align-items: center;
justify-content: center;
gap: 8px;
}

.btn-visitante-rapido:hover {
background: #ffaa00;
color: #040D16;
box-shadow: 0 0 20px #ffaa00;
transform: scale(1.02);
}

.auth-msg {
font-size: 12px;
font-weight: bold;
margin-top: 12px;
display: none;
padding: 8px;
border-radius: 6px;
}

.auth-msg.erro {
color: #ff3366;
background: rgba(255, 51, 102, 0.15);
border: 1px solid #ff3366;
display: block;
}

.auth-msg.sucesso {
color: #39ff14;
background: rgba(57, 255, 20, 0.15);
border: 1px solid #39ff14;
display: block;
}

/* ==================== PORTAL PRINCIPAL ==================== */

#portal-conteudo {
display: none;
}

/* TOPO */

.topo{
position:fixed;
top:0;
left:0;
width:100%;
height:55px;
overflow:hidden;
display:flex;
justify-content: space-between;
align-items:center;
background:rgba(0,0,0,0.75);
border-bottom:2px solid #00eaff;
z-index: 100;
padding: 0 20px;
box-sizing: border-box;
}

.marquee{
white-space:nowrap;
display:inline-block;
animation: deslizar 18s linear infinite;
flex: 1;
}

.texto-eletrico{
font-size:14px;
font-weight:bold;
color:#ACFCFB;
letter-spacing:2px;
padding-right:100px;

text-shadow:
0 0 5px #00eaff,
0 0 10px #00eaff,
0 0 20px #00eaff;
}

.topo-usuario {
display: flex;
align-items: center;
gap: 8px;
z-index: 101;
background: rgba(4, 13, 22, 0.85);
padding: 4px 12px;
border-radius: 20px;
border: 1px solid #00ffcc;
box-shadow: 0 0 10px rgba(0, 255, 204, 0.3);
}

.usuario-tag {
color: #39ff14;
font-size: 12px;
font-weight: bold;
letter-spacing: 1px;
display: flex;
align-items: center;
gap: 6px;
cursor: pointer;
transition: 0.2s;
padding: 2px 6px;
border-radius: 6px;
}

.usuario-tag:hover {
background: rgba(0, 255, 204, 0.15);
}

.timer-demo-badge {
background: rgba(255, 170, 0, 0.2);
border: 1px solid #ffaa00;
color: #ffaa00;
font-size: 11px;
font-weight: bold;
padding: 3px 8px;
border-radius: 12px;
display: none;
align-items: center;
gap: 5px;
animation: piscarAlerta 1.5s infinite;
}

@keyframes piscarAlerta {
0%, 100% { box-shadow: 0 0 5px rgba(255, 170, 0, 0.3); }
50% { box-shadow: 0 0 15px rgba(255, 170, 0, 0.8); }
}

.admin-badge {
background: #ffcc00;
color: #000;
font-size: 10px;
font-weight: bold;
padding: 2px 6px;
border-radius: 10px;
margin-left: 4px;
}

.btn-topo-acao {
background: transparent;
color: #00eaff;
border: 1px solid #00eaff;
border-radius: 6px;
padding: 4px 9px;
font-size: 11px;
font-weight: bold;
cursor: pointer;
transition: 0.3s;
display: inline-flex;
align-items: center;
gap: 5px;
}

.btn-topo-acao:hover {
background: #00eaff;
color: #040D16;
box-shadow: 0 0 10px #00eaff;
}

.btn-admin-painel {
background: #00eaff;
color: #040D16;
border: none;
border-radius: 6px;
padding: 4px 10px;
font-size: 11px;
font-weight: bold;
cursor: pointer;
transition: 0.3s;
display: none;
align-items: center;
gap: 5px;
}

.btn-admin-painel:hover {
background: #39ff14;
box-shadow: 0 0 12px #39ff14;
}

.btn-logout {
background: #ff0055;
color: #fff;
border: none;
border-radius: 6px;
padding: 4px 10px;
font-size: 11px;
font-weight: bold;
cursor: pointer;
transition: 0.3s;
display: flex;
align-items: center;
gap: 5px;
}

.btn-logout:hover {
background: #ff3366;
box-shadow: 0 0 12px #ff0055;
transform: scale(1.05);
}

/* ANIMAÇÕES */

@keyframes deslizar{
0%{ transform: translateX(100%); }
100%{ transform: translateX(-100%); }
}

/* LINKS SUPERIORES */

.links-container{
display:flex;
flex-wrap:wrap;
justify-content:center;
gap:10px;
background:rgba(0,0,0,0.6);
padding:14px;
border:2px solid #00ffcc;
border-radius:10px;
box-shadow:0 0 20px #00ffcc;
margin: 75px auto 0 auto;
max-width: 90%;
}

/* BOTÕES LINKS */

.link-neon{
background:#040D16;
padding:7px 12px;
border:2px solid #00ffcc;
border-radius:6px;
transition:0.3s;
position: relative;
display: inline-flex;
align-items: center;
gap: 6px;
cursor: pointer;
}

.link-neon a.link-clique{
color:#ACFCFB;
text-decoration:none;
font-weight:bold;
font-size:12px;
display:flex;
align-items: center;
gap: 8px;
cursor: pointer;
}

.link-neon i.icone-link{
font-size: 13px;
color: #00ffcc;
transition: 0.3s;
}

.link-neon:hover{
border:2px solid #39ff14;
box-shadow:
0 0 5px #39ff14,
0 0 10px #39ff14,
0 0 20px #39ff14;
transform: translateY(-2px);
}

.link-neon:hover i.icone-link{
color: #39ff14;
transform: scale(1.15);
}

/* PAINEL DE BOTÕES DE AÇÃO */

.painel-acoes {
display: flex;
justify-content: center;
gap: 15px;
margin: 20px auto 0 auto;
flex-wrap: wrap;
}

.btn-acao{
background:#040D16;
padding:8px 18px;
border-radius:8px;
font-weight:bold;
font-size:13px;
cursor:pointer;
transition:0.3s;
display:inline-flex;
align-items:center;
gap:8px;
}

.btn-add{
color:#39ff14;
border:2px solid #39ff14;
box-shadow:0 0 10px rgba(57, 255, 20, 0.3);
}

.btn-add:hover{
background:#39ff14;
color:#040D16;
box-shadow:0 0 20px #39ff14;
transform: scale(1.05);
}

.btn-edit-mode {
color: #00eaff;
border: 2px solid #00eaff;
box-shadow: 0 0 10px rgba(0, 234, 255, 0.3);
}

.btn-edit-mode.ativo {
background: #00eaff;
color: #040D16;
box-shadow: 0 0 20px #00eaff;
}

.btn-edit-mode:hover {
box-shadow: 0 0 20px #00eaff;
transform: scale(1.05);
}

/* BLOCOS */

.container{
display:flex;
justify-content:center;
gap:26px;
flex-wrap:wrap;
margin-top:20px;
padding-bottom: 50px;
}

.bloco{
background:rgba(0,0,0,0.65);
padding:14px;
border:2px solid #00ffcc;
border-radius:9px;
box-shadow:0 0 18px #00ffcc;
width:245px;
min-height: 180px;
display: flex;
flex-direction: column;
}

.bloco-header {
display: flex;
justify-content: space-between;
align-items: center;
margin-bottom: 10px;
padding-bottom: 6px;
border-bottom: 1px solid rgba(0, 255, 204, 0.3);
}

.bloco-titulo{
color:#39ff14;
font-size:13px;
font-weight:bold;
text-shadow:0 0 8px #39ff14;
text-transform:uppercase;
letter-spacing:1px;
display: flex;
align-items: center;
gap: 6px;
}

.btn-bloco-add {
background: transparent;
color: #39ff14;
border: 1px dashed #39ff14;
border-radius: 4px;
font-size: 11px;
padding: 2px 7px;
cursor: pointer;
transition: 0.2s;
display: flex;
align-items: center;
gap: 4px;
}

.btn-bloco-add:hover {
background: #39ff14;
color: #040D16;
}

.bloco-conteudo {
flex: 1;
display: flex;
flex-direction: column;
gap: 6px;
}

/* BOTÕES DOS BLOCOS */

.botao-neon{
background:#040D16;
padding:8px 12px;
border:2px solid #00ffcc;
border-radius:6px;
text-align:left;
position: relative;
transition:0.3s;
display: flex;
align-items: center;
justify-content: space-between;
cursor: pointer;
}

.botao-neon a.link-clique{
color:#ACFCFB;
text-decoration:none;
font-weight:bold;
display:flex;
align-items: center;
gap: 10px;
font-size:12px;
flex: 1;
text-align: left;
cursor: pointer;
}

.botao-neon i.icone-link{
font-size: 14px;
color: #00ffcc;
width: 18px;
text-align: center;
transition: 0.3s;
}

.botao-neon:hover{
border:2px solid #39ff14;
box-shadow:
0 0 5px #39ff14,
0 0 10px #39ff14,
0 0 20px #39ff14;
transform: translateX(3px);
}

.botao-neon:hover i.icone-link{
color: #39ff14;
transform: scale(1.2);
}

/* BOTOES DE CONTROLE (EDITAR / EXCLUIR) */

.acoes-item {
display: none;
gap: 5px;
align-items: center;
margin-left: 6px;
}

.modo-edicao-ativo .acoes-item {
display: flex;
}

.btn-item-edit {
background: rgba(0, 234, 255, 0.85);
color: #040D16;
border: none;
border-radius: 4px;
width: 22px;
height: 22px;
font-size: 11px;
cursor: pointer;
display: flex;
align-items: center;
justify-content: center;
font-weight: bold;
transition: 0.2s;
}

.btn-item-edit:hover {
background: #00eaff;
box-shadow: 0 0 8px #00eaff;
transform: scale(1.1);
}

.btn-item-delete {
background: rgba(255, 0, 85, 0.85);
color: #fff;
border: none;
border-radius: 4px;
width: 22px;
height: 22px;
font-size: 11px;
cursor: pointer;
display: flex;
align-items: center;
justify-content: center;
font-weight: bold;
transition: 0.2s;
}

.btn-item-delete:hover {
background: #ff0055;
box-shadow: 0 0 8px #ff0055;
transform: scale(1.1);
}

/* ==================== POPUP DE MINIATURA / PREVIEW ==================== */

.preview-overlay {
display: none;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.78);
backdrop-filter: blur(8px);
z-index: 3000;
justify-content: center;
align-items: center;
}

.preview-overlay.ativo {
display: flex;
}

.preview-card {
background: #040D16;
border: 2px solid #00ffcc;
box-shadow: 0 0 40px rgba(0, 255, 204, 0.5), inset 0 0 15px rgba(0, 234, 255, 0.2);
border-radius: 12px;
width: 90%;
max-width: 480px;
overflow: hidden;
animation: surgirPreview 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
display: flex;
flex-direction: column;
}

@keyframes surgirPreview {
from { transform: scale(0.85); opacity: 0; }
to { transform: scale(1); opacity: 1; }
}

.preview-header {
padding: 12px 16px;
background: rgba(0, 234, 255, 0.1);
border-bottom: 1px solid #00ffcc;
display: flex;
justify-content: space-between;
align-items: center;
}

.preview-titulo-box {
display: flex;
align-items: center;
gap: 10px;
overflow: hidden;
}

.preview-icone {
color: #39ff14;
font-size: 18px;
filter: drop-shadow(0 0 6px #39ff14);
}

.preview-nome {
color: #00eaff;
font-size: 16px;
font-weight: bold;
letter-spacing: 0.5px;
text-shadow: 0 0 8px #00eaff;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
}

.preview-btn-fechar {
background: transparent;
border: none;
color: #ff3366;
font-size: 18px;
cursor: pointer;
transition: 0.2s;
padding: 2px 6px;
border-radius: 4px;
}

.preview-btn-fechar:hover {
background: rgba(255, 51, 102, 0.2);
transform: scale(1.15);
}

.preview-corpo {
padding: 14px;
background: #02070c;
display: flex;
flex-direction: column;
gap: 10px;
}

.preview-miniatura-box {
width: 100%;
height: 220px;
border: 1px solid #00eaff;
border-radius: 8px;
background: #000;
overflow: hidden;
position: relative;
box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.9);
}

.preview-iframe {
width: 200%;
height: 200%;
transform: scale(0.5);
transform-origin: top left;
border: none;
background: #fff;
pointer-events: none;
}

.preview-fallback {
width: 100%;
height: 100%;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
color: #ACFCFB;
text-align: center;
padding: 20px;
box-sizing: border-box;
gap: 8px;
}

.preview-fallback i {
font-size: 36px;
color: #00ffcc;
filter: drop-shadow(0 0 10px #00ffcc);
margin-bottom: 4px;
}

.preview-url-tag {
color: #6d8a9c;
font-size: 11px;
word-break: break-all;
background: rgba(0, 0, 0, 0.6);
padding: 6px 10px;
border-radius: 5px;
border: 1px solid rgba(0, 234, 255, 0.2);
}

.preview-rodape-acoes {
padding: 12px 16px;
background: #040D16;
border-top: 1px solid rgba(0, 255, 204, 0.3);
display: flex;
gap: 8px;
flex-wrap: wrap;
justify-content: space-between;
}

.btn-preview-abrir {
flex: 2;
background: #00ffcc;
color: #040D16;
border: none;
padding: 10px 14px;
font-weight: bold;
border-radius: 6px;
cursor: pointer;
transition: 0.3s;
font-size: 13px;
display: flex;
align-items: center;
justify-content: center;
gap: 6px;
text-decoration: none;
box-shadow: 0 0 12px rgba(0, 255, 204, 0.4);
}

.btn-preview-abrir:hover {
background: #39ff14;
box-shadow: 0 0 20px #39ff14;
transform: scale(1.03);
}

.btn-preview-secundario {
flex: 1;
background: transparent;
color: #ACFCFB;
border: 1px solid #00eaff;
padding: 10px 10px;
font-weight: bold;
border-radius: 6px;
cursor: pointer;
transition: 0.3s;
font-size: 12px;
display: flex;
align-items: center;
justify-content: center;
gap: 5px;
}

.btn-preview-secundario:hover {
background: rgba(0, 234, 255, 0.2);
box-shadow: 0 0 10px #00eaff;
color: #fff;
}

/* ==================== MODAL DE PERFIL ==================== */

.perfil-overlay {
display: none;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.85);
backdrop-filter: blur(8px);
z-index: 4500;
justify-content: center;
align-items: center;
}

.perfil-overlay.ativo {
display: flex;
}

.perfil-card {
background: #040D16;
border: 2px solid #00ffcc;
border-radius: 12px;
box-shadow: 0 0 45px rgba(0, 255, 204, 0.6);
width: 90%;
max-width: 420px;
padding: 24px;
animation: surgirPreview 0.3s ease-out;
text-align: left;
}

.perfil-header {
display: flex;
justify-content: space-between;
align-items: center;
margin-bottom: 18px;
padding-bottom: 10px;
border-bottom: 1px solid #00ffcc;
}

.perfil-titulo {
color: #00eaff;
font-size: 18px;
font-weight: bold;
letter-spacing: 1px;
display: flex;
align-items: center;
gap: 8px;
text-shadow: 0 0 8px #00eaff;
}

/* ==================== PAINEL ADMIN MODAL ==================== */

.admin-overlay {
display: none;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.85);
backdrop-filter: blur(8px);
z-index: 4000;
justify-content: center;
align-items: center;
}

.admin-overlay.ativo {
display: flex;
}

.admin-card {
background: #040D16;
border: 2px solid #00ffcc;
border-radius: 12px;
box-shadow: 0 0 45px rgba(0, 255, 204, 0.6);
width: 95%;
max-width: 780px;
max-height: 88vh;
display: flex;
flex-direction: column;
overflow: hidden;
animation: surgirPreview 0.3s ease-out;
}

.admin-header {
padding: 16px 20px;
background: rgba(0, 234, 255, 0.12);
border-bottom: 1px solid #00ffcc;
display: flex;
justify-content: space-between;
align-items: center;
}

.admin-titulo {
color: #00eaff;
font-size: 18px;
font-weight: bold;
letter-spacing: 1px;
display: flex;
align-items: center;
gap: 10px;
text-shadow: 0 0 10px #00eaff;
}

.admin-corpo {
padding: 20px;
overflow-y: auto;
flex: 1;
}

.admin-stats {
display: grid;
grid-template-columns: repeat(3, 1fr);
gap: 12px;
margin-bottom: 20px;
}

.admin-stat-card {
background: #000;
border: 1px solid #00eaff;
padding: 12px;
border-radius: 8px;
text-align: center;
}

.stat-numero {
font-size: 20px;
font-weight: bold;
color: #39ff14;
text-shadow: 0 0 8px #39ff14;
}

.stat-label {
font-size: 11px;
color: #6d8a9c;
margin-top: 4px;
text-transform: uppercase;
}

.admin-tabela {
width: 100%;
border-collapse: collapse;
margin-top: 10px;
font-size: 12px;
}

.admin-tabela th {
background: #000;
color: #00ffcc;
padding: 10px 8px;
text-align: left;
border-bottom: 2px solid #00ffcc;
}

.admin-tabela td {
padding: 10px 8px;
border-bottom: 1px solid rgba(0, 234, 255, 0.2);
color: #ACFCFB;
}

.admin-tabela tr:hover td {
background: rgba(0, 234, 255, 0.05);
}

.badge-status {
padding: 3px 8px;
border-radius: 10px;
font-size: 10px;
font-weight: bold;
}

.status-ativo {
background: rgba(57, 255, 20, 0.2);
color: #39ff14;
border: 1px solid #39ff14;
}

.status-demo {
background: rgba(255, 170, 0, 0.2);
color: #ffaa00;
border: 1px solid #ffaa00;
}

.status-bloqueado {
background: rgba(255, 51, 102, 0.2);
color: #ff3366;
border: 1px solid #ff3366;
}

.status-expirado {
background: rgba(255, 204, 0, 0.2);
color: #ffcc00;
border: 1px solid #ffcc00;
}

.btn-admin-acao {
background: transparent;
border: 1px solid #00eaff;
color: #00eaff;
padding: 3px 7px;
border-radius: 4px;
font-size: 11px;
cursor: pointer;
transition: 0.2s;
margin-right: 4px;
}

.btn-admin-acao:hover {
background: #00eaff;
color: #040D16;
}

.btn-admin-excluir {
border-color: #ff3366;
color: #ff3366;
}

.btn-admin-excluir:hover {
background: #ff3366;
color: #fff;
}

/* ==================== MODAL DE ADICIONAR / EDITAR LINK ==================== */

.modal-overlay{
display:none;
position:fixed;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,0.82);
backdrop-filter: blur(7px);
z-index:3500;
justify-content:center;
align-items:center;
}

.modal-overlay.ativo{
display:flex;
}

.modal-conteudo{
background:#040D16;
border:2px solid #00ffcc;
box-shadow:0 0 35px #00ffcc;
border-radius:12px;
padding:24px;
width:90%;
max-width:420px;
text-align:center;
animation: surgir 0.3s ease-out;
}

@keyframes surgir{
from { transform: scale(0.85); opacity: 0; }
to { transform: scale(1); opacity: 1; }
}

.modal-titulo{
color:#00eaff;
font-size:18px;
font-weight:bold;
margin-bottom:18px;
text-shadow:0 0 10px #00eaff;
text-transform: uppercase;
letter-spacing: 1px;
display: flex;
align-items: center;
justify-content: center;
gap: 8px;
}

.modal-campo{
margin-bottom:14px;
text-align:left;
}

.modal-campo label{
color:#ACFCFB;
font-size:12px;
font-weight:bold;
display:block;
margin-bottom:5px;
}

.modal-campo input,
.modal-campo select{
width:100%;
box-sizing:border-box;
background:#000;
border:1px solid #00ffcc;
color:#fff;
padding:9px 12px;
border-radius:6px;
font-size:13px;
outline:none;
transition:0.3s;
}

.modal-campo input:focus,
.modal-campo select:focus{
border-color:#39ff14;
box-shadow:0 0 10px #39ff14;
}

/* SELETOR RÁPIDO DE ÍCONES */
.icones-grid {
display: grid;
grid-template-columns: repeat(8, 1fr);
gap: 6px;
margin-top: 6px;
background: #000;
padding: 8px;
border-radius: 6px;
border: 1px solid #00eaff;
max-height: 100px;
overflow-y: auto;
}

.icone-opcao {
padding: 6px;
color: #00ffcc;
font-size: 15px;
text-align: center;
border-radius: 4px;
cursor: pointer;
transition: 0.2s;
}

.icone-opcao:hover,
.icone-opcao.selecionado {
background: #00ffcc;
color: #040D16;
box-shadow: 0 0 8px #00ffcc;
}

.modal-botoes{
display:flex;
justify-content:space-between;
gap:10px;
margin-top:22px;
}

.btn-modal-salvar{
flex:1;
background:#00ffcc;
color:#040D16;
border:none;
padding:10px;
font-weight:bold;
border-radius:6px;
cursor:pointer;
transition:0.3s;
font-size:13px;
display: flex;
align-items: center;
justify-content: center;
gap: 6px;
}

.btn-modal-salvar:hover{
background:#39ff14;
box-shadow:0 0 15px #39ff14;
}

.btn-modal-cancelar{
flex:1;
background:transparent;
color:#ff5555;
border:1px solid #ff5555;
padding:10px;
font-weight:bold;
border-radius:6px;
cursor:pointer;
transition:0.3s;
font-size:13px;
}

.btn-modal-cancelar:hover{
background:rgba(255, 85, 85, 0.2);
box-shadow:0 0 10px #ff5555;
}

</style>
</head>

<body>

<!-- ==================== TELA DE LOGIN & CADASTRO ==================== -->
<div id="tela-auth">
<div class="auth-card">
<img src="IMG/cpd2.png" alt="Logo" class="auth-logo">
<div class="auth-titulo"><i class="fa-solid fa-shield-halved"></i> Portal Veiga</div>
<div class="auth-subtitulo">Acesso ao Sistema Corporativo</div>

<div class="auth-abas">
<div class="auth-aba ativa" id="abaLogin" onclick="alternarAbaAuth('login')">
<i class="fa-solid fa-right-to-bracket"></i> ENTRAR
</div>
<div class="auth-aba" id="abaCadastro" onclick="alternarAbaAuth('cadastro')">
<i class="fa-solid fa-user-plus"></i> CRIAR CONTA
</div>
</div>

<!-- FORMULÁRIO DE LOGIN -->
<form id="formLogin" onsubmit="realizarLogin(event)">
<div class="auth-grupo">
<label for="loginUsuario"><i class="fa-solid fa-user"></i> USUÁRIO:</label>
<input type="text" id="loginUsuario" placeholder="Digite seu usuário" required autofocus autocomplete="username">
</div>

<div class="auth-grupo">
<label for="loginSenha"><i class="fa-solid fa-lock"></i> SENHA:</label>
<input type="password" id="loginSenha" placeholder="Digite sua senha" required autocomplete="current-password">
</div>

<button type="submit" class="btn-auth-submit"><i class="fa-solid fa-arrow-right-to-bracket"></i> ENTRAR NO SISTEMA</button>

<button type="button" class="btn-visitante-rapido" onclick="entrarComoVisitante()">
<i class="fa-solid fa-stopwatch"></i> ENTRAR COMO VISITANTE (DEMO 10 MIN)
</button>
</form>

<!-- FORMULÁRIO DE CADASTRO -->
<form id="formCadastro" style="display: none;" onsubmit="realizarCadastro(event)">
<div class="auth-grupo">
<label for="cadUsuario"><i class="fa-solid fa-user-plus"></i> ESCOLHA UM USUÁRIO:</label>
<input type="text" id="cadUsuario" placeholder="Ex: joao, maria" required autocomplete="username">
</div>

<div class="auth-grupo">
<label for="cadSenha"><i class="fa-solid fa-lock"></i> ESCOLHA UMA SENHA:</label>
<input type="password" id="cadSenha" placeholder="Digite uma senha" required autocomplete="new-password">
</div>

<div class="auth-grupo">
<label for="cadSenhaConfirma"><i class="fa-solid fa-check-double"></i> CONFIRME A SENHA:</label>
<input type="password" id="cadSenhaConfirma" placeholder="Repita sua senha" required autocomplete="new-password">
</div>

<button type="submit" class="btn-auth-submit" style="background: #39ff14;"><i class="fa-solid fa-circle-check"></i> FINALIZAR CADASTRO</button>
</form>

<div id="authMsg" class="auth-msg"></div>
</div>
</div>

<!-- ==================== CONTEÚDO DO PORTAL ==================== -->
<div id="portal-conteudo">

<div class="topo">
<div class="marquee">
<span class="texto-eletrico">
..:: Portal Pessoal Veiga ::..
</span>
</div>

<div class="topo-usuario">
<span class="timer-demo-badge" id="badgeTimerDemo">
<i class="fa-solid fa-hourglass-half"></i> <span id="lblTempoRestante">10:00</span>
</span>
<span class="usuario-tag" id="usuarioTag" onclick="abrirModalPerfil()" title="Clique para editar seu perfil">
<i class="fa-solid fa-circle-user"></i> <span id="lblNomeUsuario">veiga</span>
</span>
<button class="btn-topo-acao" onclick="abrirModalPerfil()">
<i class="fa-solid fa-user-gear"></i> Perfil
</button>
<button class="btn-admin-painel" id="btnAdminPainel" onclick="abrirPainelAdmin()">
<i class="fa-solid fa-gear"></i> Painel Admin
</button>
<button class="btn-logout" onclick="fazerLogout()">
<i class="fa-solid fa-power-off"></i> Sair
</button>
</div>
</div>

<!-- LINKS SUPERIORES -->
<div class="links-container" id="lista-links-topo">
<!-- Links do Topo Renderizados via JS -->
</div>

<!-- PAINEL DE AÇÕES -->
<div class="painel-acoes">
<button class="btn-acao btn-add" onclick="abrirModalAdicionar()">
<i class="fa-solid fa-circle-plus"></i> Adicionar Novo Link
</button>
<button class="btn-acao btn-edit-mode" id="btnModoEdicao" onclick="alternarModoEdicao()">
<i class="fa-solid fa-pen-to-square"></i> Modo Edição (Editar / Excluir)
</button>
</div>

<!-- BLOCOS CENTRAIS -->
<div class="container" id="container-blocos">

<!-- BLOCO 1: SISTEMAS CPD -->
<div class="bloco" id="bloco-sistemas">
<div class="bloco-header">
<div class="bloco-titulo"><i class="fa-solid fa-server"></i> Sistemas CPD</div>
<button class="btn-bloco-add" onclick="abrirModalAdicionar('sistemas')"><i class="fa-solid fa-plus"></i> Add</button>
</div>
<div class="bloco-conteudo" id="lista-bloco-sistemas"></div>
</div>

<!-- BLOCO 2: MEUS LINKS / CENTRAL -->
<div class="bloco" id="bloco-meuslinks">
<div class="bloco-header">
<div class="bloco-titulo"><i class="fa-solid fa-star"></i> Meus Links</div>
<button class="btn-bloco-add" onclick="abrirModalAdicionar('meuslinks')"><i class="fa-solid fa-plus"></i> Add</button>
</div>
<div class="bloco-conteudo" id="lista-bloco-meuslinks"></div>
</div>

<!-- BLOCO 3: EQUIPAMENTOS / BIOMÉTRICO -->
<div class="bloco" id="bloco-outros">
<div class="bloco-header">
<div class="bloco-titulo"><i class="fa-solid fa-microchip"></i> Equipamentos & Outros</div>
<button class="btn-bloco-add" onclick="abrirModalAdicionar('outros')"><i class="fa-solid fa-plus"></i> Add</button>
</div>
<div class="bloco-conteudo" id="lista-bloco-outros"></div>
</div>

</div>

</div>

<!-- ==================== MODAL MEU PERFIL ==================== -->
<div class="perfil-overlay" id="modalPerfil" onclick="fecharPerfilFora(event)">
<div class="perfil-card">
<div class="perfil-header">
<div class="perfil-titulo">
<i class="fa-solid fa-user-gear"></i> Meu Perfil & Senha
</div>
<button class="preview-btn-fechar" onclick="fecharModalPerfil()"><i class="fa-solid fa-xmark"></i></button>
</div>

<form onsubmit="salvarAlteracoesPerfil(event)">
<div class="modal-campo">
<label for="perfilNovoUsuario"><i class="fa-solid fa-user"></i> Nome de Usuário:</label>
<input type="text" id="perfilNovoUsuario" required autocomplete="username">
</div>

<div class="modal-campo">
<label for="perfilNovaSenha"><i class="fa-solid fa-lock"></i> Nova Senha (deixe em branco se não quiser mudar):</label>
<input type="password" id="perfilNovaSenha" placeholder="Digite uma nova senha" autocomplete="new-password">
</div>

<div class="modal-campo">
<label for="perfilConfirmaSenha"><i class="fa-solid fa-check-double"></i> Confirmar Nova Senha:</label>
<input type="password" id="perfilConfirmaSenha" placeholder="Repita a nova senha" autocomplete="new-password">
</div>

<div id="perfilMsg" class="auth-msg" style="margin-bottom: 12px;"></div>

<div class="modal-botoes" style="margin-top: 15px;">
<button type="button" class="btn-modal-cancelar" onclick="fecharModalPerfil()">Cancelar</button>
<button type="submit" class="btn-modal-salvar"><i class="fa-solid fa-floppy-disk"></i> Salvar Alterações</button>
</div>
</form>
</div>
</div>

<!-- ==================== POPUP DE MINIATURA / PREVIEW ==================== -->
<div class="preview-overlay" id="modalPreview" onclick="fecharPreviewFora(event)">
<div class="preview-card">
<div class="preview-header">
<div class="preview-titulo-box">
<i class="fa-solid fa-link preview-icone" id="previewIcone"></i>
<span class="preview-nome" id="previewNome">Título do Link</span>
</div>
<button class="preview-btn-fechar" onclick="fecharPreview()"><i class="fa-solid fa-xmark"></i></button>
</div>

<div class="preview-corpo">
<div class="preview-miniatura-box" id="previewMiniaturaContainer"></div>
<div class="preview-url-tag" id="previewUrlTexto">https://exemplo.com</div>
</div>

<div class="preview-rodape-acoes">
<a href="#" target="_blank" class="btn-preview-abrir" id="btnPreviewAbrirNovaAba">
<i class="fa-solid fa-arrow-up-right-from-square"></i> Abrir Página
</a>
<button class="btn-preview-secundario" onclick="copiarLinkPreview()">
<i class="fa-solid fa-copy"></i> Copiar
</button>
<button class="btn-preview-secundario" onclick="fecharPreview()">
Fechar
</button>
</div>
</div>
</div>

<!-- ==================== PAINEL ADMIN MODAL ==================== -->
<div class="admin-overlay" id="modalAdmin" onclick="fecharAdminFora(event)">
<div class="admin-card">
<div class="admin-header">
<div class="admin-titulo">
<i class="fa-solid fa-user-shield"></i> Painel de Administração de Usuários
</div>
<button class="preview-btn-fechar" onclick="fecharPainelAdmin()"><i class="fa-solid fa-xmark"></i></button>
</div>

<div class="admin-corpo">
<div class="admin-stats">
<div class="admin-stat-card">
<div class="stat-numero" id="statTotalUsuarios">0</div>
<div class="stat-label">Total de Contas</div>
</div>
<div class="admin-stat-card">
<div class="stat-numero" id="statAtivos" style="color: #00ffcc;">0</div>
<div class="stat-label">Contas Ativas</div>
</div>
<div class="admin-stat-card">
<div class="stat-numero" id="statAdmins" style="color: #ffcc00;">1</div>
<div class="stat-label">Administrador</div>
</div>
</div>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; gap: 8px; flex-wrap: wrap;">
<div style="color: #00ffcc; font-weight: bold; font-size: 14px;"><i class="fa-solid fa-users"></i> Gerenciar Contas</div>
<div style="display: flex; gap: 8px;">
<button class="btn-admin-acao" onclick="abrirCriarVisitanteAdmin()" style="border-color: #ffaa00; color: #ffaa00; padding: 6px 12px;">
<i class="fa-solid fa-stopwatch"></i> Criar Visitante (Demo)
</button>
<button class="btn-admin-acao" onclick="abrirCriarUsuarioAdmin()" style="border-color: #39ff14; color: #39ff14; padding: 6px 12px;">
<i class="fa-solid fa-plus"></i> Criar Nova Conta
</button>
</div>
</div>

<div style="overflow-x: auto;">
<table class="admin-tabela">
<thead>
<tr>
<th>Usuário</th>
<th>Perfil</th>
<th>Status</th>
<th>Tempo / Expiração</th>
<th>Ações</th>
</tr>
</thead>
<tbody id="tabelaUsuariosCorpo">
<!-- Linhas inseridas dinamicamente pelo backend -->
</tbody>
</table>
</div>
</div>
</div>
</div>

<!-- ==================== MODAL DE ADICIONAR / EDITAR LINK ==================== -->
<div class="modal-overlay" id="modalLink" onclick="fecharModalFora(event)">
<div class="modal-conteudo">
<div class="modal-titulo" id="modalTitulo"><i class="fa-solid fa-link"></i> Adicionar Novo Link</div>

<input type="hidden" id="editandoMenu">
<input type="hidden" id="editandoIndex">
<input type="hidden" id="inputIconeSelecionado" value="fa-solid fa-link">

<div class="modal-campo">
<label for="selectMenuDestino"><i class="fa-solid fa-folder-tree"></i> Menu de Destino:</label>
<select id="selectMenuDestino">
<option value="topo">Barra Superior (Links Rápidos)</option>
<option value="sistemas">Bloco 1 (Sistemas CPD)</option>
<option value="meuslinks" selected>Bloco 2 (Meus Links - Meio)</option>
<option value="outros">Bloco 3 (Equipamentos & Outros)</option>
</select>
</div>

<div class="modal-campo">
<label for="inputNome"><i class="fa-solid fa-tag"></i> Nome do Link / Sistema:</label>
<input type="text" id="inputNome" placeholder="Ex: Portal Veiga" autocomplete="off" oninput="sugerirIconePorNome(this.value)">
</div>

<div class="modal-campo">
<label for="inputUrl"><i class="fa-solid fa-globe"></i> Endereço (URL ou Caminho):</label>
<input type="text" id="inputUrl" placeholder="Ex: https://google.com ou Caminhos/Agenda.html" autocomplete="off">
</div>

<div class="modal-campo">
<label><i class="fa-solid fa-icons"></i> Escolha o Ícone:</label>
<div class="icones-grid" id="gridIcones"></div>
</div>

<div class="modal-botoes">
<button class="btn-modal-cancelar" onclick="fecharModal()">Cancelar</button>
<button class="btn-modal-salvar" onclick="salvarLink()"><i class="fa-solid fa-floppy-disk"></i> Salvar</button>
</div>
</div>
</div>

<script>
// ==================== GERENCIAMENTO MULTI-USUÁRIO & BACKEND API ====================
const SESSAO_STORAGE_KEY = 'portal_veiga_sessao_servidor';
let timerIntervalVisitante = null;
let menusAtuaisMemoria = null;

function obterSessao() {
    const s = localStorage.getItem(SESSAO_STORAGE_KEY);
    if (!s) return null;
    try { return JSON.parse(s); } catch (e) { return null; }
}

function salvarSessao(dados) {
    localStorage.setItem(SESSAO_STORAGE_KEY, JSON.stringify(dados));
}

function alternarAbaAuth(aba) {
    const abaLogin = document.getElementById('abaLogin');
    const abaCadastro = document.getElementById('abaCadastro');
    const formLogin = document.getElementById('formLogin');
    const formCadastro = document.getElementById('formCadastro');
    const msg = document.getElementById('authMsg');
    msg.style.display = 'none';

    if (aba === 'login') {
        abaLogin.classList.add('ativa');
        abaCadastro.classList.remove('ativa');
        formLogin.style.display = 'block';
        formCadastro.style.display = 'none';
        document.getElementById('loginUsuario').focus();
    } else {
        abaLogin.classList.remove('ativa');
        abaCadastro.classList.add('ativa');
        formLogin.style.display = 'none';
        formCadastro.style.display = 'block';
        document.getElementById('cadUsuario').focus();
    }
}

function exibirMsgAuth(texto, tipo = 'erro') {
    const msg = document.getElementById('authMsg');
    msg.textContent = texto;
    msg.className = 'auth-msg ' + tipo;
    msg.style.display = 'block';
}

// 1. LOGIN
async function realizarLogin(e) {
    e.preventDefault();
    const usuario = document.getElementById('loginUsuario').value.trim().toLowerCase();
    const senha = document.getElementById('loginSenha').value.trim();

    try {
        const res = await fetch('/api/login', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ usuario, senha })
        });
        const dados = await res.json();

        if (!dados.sucesso) {
            exibirMsgAuth(dados.mensagem || 'Usuário ou senha incorretos.', 'erro');
            return;
        }

        salvarSessao({
            usuario: dados.usuario,
            perfil: dados.perfil,
            expiracao: dados.expiracao
        });

        verificarSessao();
    } catch (err) {
        exibirMsgAuth('Erro ao conectar ao servidor.', 'erro');
    }
}

// 2. CADASTRO DE CONTA
async function realizarCadastro(e) {
    e.preventDefault();
    const usuario = document.getElementById('cadUsuario').value.trim();
    const senha = document.getElementById('cadSenha').value.trim();
    const senhaConfirma = document.getElementById('cadSenhaConfirma').value.trim();

    if (!usuario || !senha) {
        exibirMsgAuth('Por favor, preencha todos os campos.', 'erro');
        return;
    }

    if (usuario.length < 3) {
        exibirMsgAuth('O usuário deve ter pelo menos 3 caracteres.', 'erro');
        return;
    }

    if (senha !== senhaConfirma) {
        exibirMsgAuth('As senhas digitadas não coincidem.', 'erro');
        return;
    }

    try {
        const res = await fetch('/api/cadastro', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ usuario, senha })
        });
        const dados = await res.json();

        if (!dados.sucesso) {
            exibirMsgAuth(dados.mensagem || 'Erro ao criar conta.', 'erro');
            return;
        }

        exibirMsgAuth('✅ Conta criada com sucesso no servidor! Você já pode entrar.', 'sucesso');
        setTimeout(() => {
            alternarAbaAuth('login');
            document.getElementById('loginUsuario').value = usuario;
            document.getElementById('loginSenha').value = senha;
        }, 1200);
    } catch (err) {
        exibirMsgAuth('Erro ao conectar ao servidor.', 'erro');
    }
}

// 3. VISITANTE DEMO (10 MINUTOS)
async function entrarComoVisitante() {
    try {
        const res = await fetch('/api/visitante', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' }
        });
        const dados = await res.json();

        if (!dados.sucesso) {
            exibirMsgAuth('Erro ao gerar sessão de visitante.', 'erro');
            return;
        }

        salvarSessao({
            usuario: dados.usuario,
            perfil: 'visitante',
            expiracao: dados.expiracao
        });

        verificarSessao();
    } catch (err) {
        exibirMsgAuth('Erro ao conectar ao servidor.', 'erro');
    }
}

function iniciarTimerVisitante(expiracaoIso) {
    if (timerIntervalVisitante) clearInterval(timerIntervalVisitante);
    const badge = document.getElementById('badgeTimerDemo');
    const lblTempo = document.getElementById('lblTempoRestante');
    badge.style.display = 'inline-flex';

    function atualizar() {
        const agora = new Date().getTime();
        const fim = new Date(expiracaoIso).getTime();
        const restanteMs = fim - agora;

        if (restanteMs <= 0) {
            clearInterval(timerIntervalVisitante);
            badge.style.display = 'none';
            localStorage.removeItem(SESSAO_STORAGE_KEY);
            alert('⏰ O seu tempo de visitante (10 minutos) expirou!\nA conta temporária foi excluída.');
            verificarSessao();
            return;
        }

        const minutos = Math.floor(restanteMs / (1000 * 60));
        const segundos = Math.floor((restanteMs % (1000 * 60)) / 1000);
        lblTempo.textContent = `${String(minutos).padStart(2, '0')}:${String(segundos).padStart(2, '0')}`;
    }

    atualizar();
    timerIntervalVisitante = setInterval(atualizar, 1000);
}

function fazerLogout() {
    if (confirm('Deseja realmente sair da sua conta?')) {
        localStorage.removeItem(SESSAO_STORAGE_KEY);
        if (timerIntervalVisitante) clearInterval(timerIntervalVisitante);
        verificarSessao();
    }
}

async function verificarSessao() {
    const sessao = obterSessao();

    if (sessao && sessao.usuario) {
        document.getElementById('tela-auth').style.display = 'none';
        document.getElementById('portal-conteudo').style.display = 'block';

        const ehAdmin = sessao.perfil === 'admin' || sessao.usuario.toLowerCase() === 'veiga';
        const ehVisitante = sessao.perfil === 'visitante';
        const btnAdmin = document.getElementById('btnAdminPainel');
        const usuarioTag = document.getElementById('usuarioTag');
        const badgeTimer = document.getElementById('badgeTimerDemo');

        if (ehAdmin) {
            btnAdmin.style.display = 'inline-flex';
            badgeTimer.style.display = 'none';
            usuarioTag.innerHTML = `<i class="fa-solid fa-crown" style="color: #ffcc00;"></i> <span>${sessao.usuario}</span> <span class="admin-badge">ADMIN</span>`;
        } else if (ehVisitante) {
            btnAdmin.style.display = 'none';
            usuarioTag.innerHTML = `<i class="fa-solid fa-stopwatch" style="color: #ffaa00;"></i> <span>${sessao.usuario}</span> <span style="background: #ffaa00; color: #000; font-size: 10px; font-weight: bold; padding: 2px 6px; border-radius: 10px; margin-left: 4px;">DEMO</span>`;
            if (sessao.expiracao) iniciarTimerVisitante(sessao.expiracao);
        } else {
            btnAdmin.style.display = 'none';
            badgeTimer.style.display = 'none';
            usuarioTag.innerHTML = `<i class="fa-solid fa-circle-user"></i> <span>${sessao.usuario}</span>`;
        }

        await carregarTodosMenus();
    } else {
        if (timerIntervalVisitante) clearInterval(timerIntervalVisitante);
        document.getElementById('badgeTimerDemo').style.display = 'none';
        document.getElementById('tela-auth').style.display = 'flex';
        document.getElementById('portal-conteudo').style.display = 'none';
        document.getElementById('loginUsuario').focus();
    }
}

// ==================== MODAL MEU PERFIL ====================
function abrirModalPerfil() {
    const sessao = obterSessao();
    if (!sessao) return;
    document.getElementById('perfilNovoUsuario').value = sessao.usuario;
    document.getElementById('perfilNovaSenha').value = '';
    document.getElementById('perfilConfirmaSenha').value = '';
    const msg = document.getElementById('perfilMsg');
    msg.style.display = 'none';
    document.getElementById('modalPerfil').classList.add('ativo');
}

function fecharModalPerfil() {
    document.getElementById('modalPerfil').classList.remove('ativo');
}

function fecharPerfilFora(e) {
    if (e.target.id === 'modalPerfil') fecharModalPerfil();
}

async function salvarAlteracoesPerfil(e) {
    e.preventDefault();
    const sessao = obterSessao();
    if (!sessao) return;

    const novoUsuario = document.getElementById('perfilNovoUsuario').value.trim();
    const novaSenha = document.getElementById('perfilNovaSenha').value.trim();
    const confirmaSenha = document.getElementById('perfilConfirmaSenha').value.trim();
    const msg = document.getElementById('perfilMsg');

    if (!novoUsuario || novoUsuario.length < 3) {
        msg.textContent = 'O nome de usuário deve ter no mínimo 3 caracteres.';
        msg.className = 'auth-msg erro';
        msg.style.display = 'block';
        return;
    }

    if (novaSenha && novaSenha !== confirmaSenha) {
        msg.textContent = 'As novas senhas digitadas não coincidem.';
        msg.className = 'auth-msg erro';
        msg.style.display = 'block';
        return;
    }

    try {
        const res = await fetch('/api/perfil/atualizar', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                usuarioAtual: sessao.usuario,
                novoUsuario: novoUsuario,
                novaSenha: novaSenha
            })
        });
        const dados = await res.json();

        if (!dados.sucesso) {
            msg.textContent = dados.mensagem || 'Erro ao atualizar perfil.';
            msg.className = 'auth-msg erro';
            msg.style.display = 'block';
            return;
        }

        salvarSessao({
            ...sessao,
            usuario: dados.usuario,
            perfil: dados.perfil
        });

        msg.textContent = '✅ Perfil atualizado com sucesso!';
        msg.className = 'auth-msg sucesso';
        msg.style.display = 'block';

        setTimeout(() => {
            fecharModalPerfil();
            verificarSessao();
        }, 1200);
    } catch (err) {
        msg.textContent = 'Erro de comunicação com o servidor.';
        msg.className = 'auth-msg erro';
        msg.style.display = 'block';
    }
}

// ==================== MENUS & PERSISTÊNCIA NO SERVIDOR ====================
async function carregarTodosMenus() {
    const sessao = obterSessao();
    if (!sessao) return;

    try {
        const res = await fetch(`/api/menus?usuario=${encodeURIComponent(sessao.usuario)}`);
        const dados = await res.json();
        if (dados.sucesso && dados.menus) {
            menusAtuaisMemoria = dados.menus;
        }
    } catch (e) {
        console.error('Erro ao carregar menus:', e);
    }

    if (!menusAtuaisMemoria) return;

    // 1. Topo
    const topoContainer = document.getElementById('lista-links-topo');
    topoContainer.innerHTML = '';
    (menusAtuaisMemoria.topo || []).forEach((item, index) => {
        const iconeClass = item.icone || 'fa-solid fa-link';
        const div = document.createElement('div');
        div.className = 'link-neon';
        div.onclick = (e) => lidarCliqueLink(e, item.nome, item.url, iconeClass);
        div.innerHTML = `
            <a class="link-clique">
                <i class="${iconeClass} icone-link"></i>
                <span>${item.nome}</span>
            </a>
            <div class="acoes-item" onclick="event.stopPropagation()">
                <button class="btn-item-edit" title="Editar" onclick="abrirModalEditar('topo', ${index})"><i class="fa-solid fa-pencil"></i></button>
                <button class="btn-item-delete" title="Excluir" onclick="excluirLink('topo', ${index})"><i class="fa-solid fa-xmark"></i></button>
            </div>
        `;
        topoContainer.appendChild(div);
    });

    // 2. Blocos
    renderBloco('sistemas', menusAtuaisMemoria.sistemas, 'lista-bloco-sistemas', 'Nenhum sistema adicionado.<br>Clique em + Add para inserir.');
    renderBloco('meuslinks', menusAtuaisMemoria.meuslinks, 'lista-bloco-meuslinks', 'Nenhum link adicionado ainda.<br>Clique em + Add para inserir.');
    renderBloco('outros', menusAtuaisMemoria.outros, 'lista-bloco-outros', 'Nenhum item cadastrado.<br>Clique em + Add para inserir.');
}

function renderBloco(menuKey, itens, containerId, msgVazio = 'Nenhum item') {
    const container = document.getElementById(containerId);
    container.innerHTML = '';

    if (!itens || itens.length === 0) {
        container.innerHTML = `<div style="color: #6d8a9c; font-size: 11px; text-align: center; padding: 15px 0;">${msgVazio}</div>`;
        return;
    }

    itens.forEach((item, index) => {
        const iconeClass = item.icone || 'fa-solid fa-link';
        const div = document.createElement('div');
        div.className = 'botao-neon';
        div.onclick = (e) => lidarCliqueLink(e, item.nome, item.url, iconeClass);
        div.innerHTML = `
            <a class="link-clique">
                <i class="${iconeClass} icone-link"></i>
                <span>${item.nome}</span>
            </a>
            <div class="acoes-item" onclick="event.stopPropagation()">
                <button class="btn-item-edit" title="Editar" onclick="abrirModalEditar('${menuKey}', ${index})"><i class="fa-solid fa-pencil"></i></button>
                <button class="btn-item-delete" title="Excluir" onclick="excluirLink('${menuKey}', ${index})"><i class="fa-solid fa-xmark"></i></button>
            </div>
        `;
        container.appendChild(div);
    });
}

async function salvarMenusServidor(novosMenus) {
    const sessao = obterSessao();
    if (!sessao) return;
    try {
        await fetch('/api/menus', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ usuario: sessao.usuario, menus: novosMenus })
        });
        menusAtuaisMemoria = novosMenus;
        carregarTodosMenus();
    } catch (e) {
        alert('Erro ao salvar dados no servidor.');
    }
}

function lidarCliqueLink(e, nome, url, icone) {
    if (modoEdicao) return;
    e.preventDefault();
    abrirPreview(nome, url, icone);
}

// ==================== ÍCONES ====================
const LISTA_ICONES = [
    'fa-solid fa-link', 'fa-solid fa-globe', 'fa-solid fa-star', 'fa-solid fa-calendar-days',
    'fa-solid fa-key', 'fa-solid fa-network-wired', 'fa-solid fa-server', 'fa-solid fa-chart-line',
    'fa-solid fa-desktop', 'fa-solid fa-clock', 'fa-solid fa-barcode', 'fa-solid fa-fingerprint',
    'fa-solid fa-building-columns', 'fa-solid fa-vault', 'fa-solid fa-file-pdf', 'fa-solid fa-envelope',
    'fa-brands fa-youtube', 'fa-solid fa-robot', 'fa-solid fa-credit-card', 'fa-solid fa-headset',
    'fa-solid fa-database', 'fa-solid fa-shield-halved', 'fa-solid fa-gear', 'fa-solid fa-box-archive'
];

function montarGridIcones(iconeSelecionado = 'fa-solid fa-link') {
    const grid = document.getElementById('gridIcones');
    grid.innerHTML = '';
    LISTA_ICONES.forEach(iconeClass => {
        const div = document.createElement('div');
        div.className = 'icone-opcao' + (iconeClass === iconeSelecionado ? ' selecionado' : '');
        div.innerHTML = `<i class="${iconeClass}"></i>`;
        div.onclick = () => {
            document.querySelectorAll('.icone-opcao').forEach(el => el.classList.remove('selecionado'));
            div.classList.add('selecionado');
            document.getElementById('inputIconeSelecionado').value = iconeClass;
        };
        grid.appendChild(div);
    });
    document.getElementById('inputIconeSelecionado').value = iconeSelecionado;
}

function sugerirIconePorNome(nome) {
    if (!nome) return;
    const n = nome.toLowerCase();
    let icone = 'fa-solid fa-link';

    if (n.includes('agenda') || n.includes('calendario')) icone = 'fa-solid fa-calendar-days';
    else if (n.includes('senha') || n.includes('acesso') || n.includes('login')) icone = 'fa-solid fa-key';
    else if (n.includes('ip') || n.includes('host') || n.includes('rede') || n.includes('estac')) icone = 'fa-solid fa-network-wired';
    else if (n.includes('servidor') || n.includes('server')) icone = 'fa-solid fa-server';
    else if (n.includes('relatorio') || n.includes('batch')) icone = 'fa-solid fa-chart-line';
    else if (n.includes('tela') || n.includes('rm') || n.includes('pc') || n.includes('micro')) icone = 'fa-solid fa-desktop';
    else if (n.includes('jornada') || n.includes('hora') || n.includes('tempo')) icone = 'fa-solid fa-clock';
    else if (n.includes('gertec') || n.includes('preco') || n.includes('preço') || n.includes('codigo')) icone = 'fa-solid fa-barcode';
    else if (n.includes('biometrico') || n.includes('biométrico') || n.includes('ponto') || n.includes('digital')) icone = 'fa-solid fa-fingerprint';
    else if (n.includes('bradesco') || n.includes('banco')) icone = 'fa-solid fa-building-columns';
    else if (n.includes('caixa')) icone = 'fa-solid fa-vault';
    else if (n.includes('pdf')) icone = 'fa-solid fa-file-pdf';
    else if (n.includes('gmail') || n.includes('email') || n.includes('mail')) icone = 'fa-solid fa-envelope';
    else if (n.includes('youtube') || n.includes('video')) icone = 'fa-brands fa-youtube';
    else if (n.includes('gpt') || n.includes('chat') || n.includes('ia') || n.includes('ai')) icone = 'fa-solid fa-robot';
    else if (n.includes('fiserv') || n.includes('cartao') || n.includes('cartão') || n.includes('pagamento')) icone = 'fa-solid fa-credit-card';
    else if (n.includes('laurenti') || n.includes('suporte') || n.includes('chamado')) icone = 'fa-solid fa-headset';

    montarGridIcones(icone);
}

// ==================== MODO EDIÇÃO ====================
let modoEdicao = false;

function alternarModoEdicao() {
    modoEdicao = !modoEdicao;
    const btn = document.getElementById('btnModoEdicao');
    const portal = document.getElementById('portal-conteudo');

    if (modoEdicao) {
        btn.classList.add('ativo');
        btn.innerHTML = '<i class="fa-solid fa-check"></i> Concluir Edição';
        portal.classList.add('modo-edicao-ativo');
    } else {
        btn.classList.remove('ativo');
        btn.innerHTML = '<i class="fa-solid fa-pen-to-square"></i> Modo Edição (Editar / Excluir)';
        portal.classList.remove('modo-edicao-ativo');
    }
    carregarTodosMenus();
}

// ==================== PREVIEW MINIATURA ====================
let urlAtualPreview = '';

function abrirPreview(nome, url, icone) {
    urlAtualPreview = url;
    document.getElementById('previewNome').textContent = nome;
    document.getElementById('previewIcone').className = icone + ' preview-icone';
    document.getElementById('previewUrlTexto').textContent = url;
    document.getElementById('btnPreviewAbrirNovaAba').href = url;

    const container = document.getElementById('previewMiniaturaContainer');
    container.innerHTML = '';

    const ehInternoOuLiberado = !url.startsWith('http://') && !url.startsWith('https://') || url.includes('localhost') || url.includes('127.0.0.1');

    if (ehInternoOuLiberado) {
        const iframe = document.createElement('iframe');
        iframe.className = 'preview-iframe';
        iframe.src = url;
        iframe.sandbox = "allow-same-origin allow-scripts";
        container.appendChild(iframe);
    } else {
        container.innerHTML = `
            <div class="preview-fallback">
                <i class="${icone}"></i>
                <div style="font-weight: bold; font-size: 15px; color: #00eaff;">${nome}</div>
                <div style="font-size: 11px; opacity: 0.7;">Site Externo Seguro</div>
                <div style="font-size: 11px; color: #39ff14; margin-top: 4px;">Clique em "Abrir Página" abaixo para acessar</div>
            </div>
        `;
    }

    document.getElementById('modalPreview').classList.add('ativo');
}

function fecharPreview() {
    document.getElementById('modalPreview').classList.remove('ativo');
    document.getElementById('previewMiniaturaContainer').innerHTML = '';
}

function fecharPreviewFora(e) {
    if (e.target.id === 'modalPreview') fecharPreview();
}

function copiarLinkPreview() {
    if (!urlAtualPreview) return;
    navigator.clipboard.writeText(urlAtualPreview).then(() => {
        const el = document.getElementById('previewUrlTexto');
        const original = el.textContent;
        el.textContent = '✅ Link copiado para a área de transferência!';
        el.style.color = '#39ff14';
        setTimeout(() => {
            el.textContent = original;
            el.style.color = '#6d8a9c';
        }, 1800);
    });
}

// ==================== PAINEL DE ADMIN (USUÁRIO VEIGA) ====================
async function abrirPainelAdmin() {
    await carregarTabelaAdmin();
    document.getElementById('modalAdmin').classList.add('ativo');
}

function fecharPainelAdmin() {
    document.getElementById('modalAdmin').classList.remove('ativo');
}

function fecharAdminFora(e) {
    if (e.target.id === 'modalAdmin') fecharPainelAdmin();
}

function formatarDataExp(dataIso, perfil) {
    if (!dataIso) return '<span style="color: #39ff14;">Ilimitado (Sem expiração)</span>';
    const data = new Date(dataIso);
    const agora = new Date();
    if (agora > data) {
        return `<span style="color: #ff3366;">Expirou em ${data.toLocaleDateString('pt-BR')} ${data.toLocaleTimeString('pt-BR', {hour: '2-digit', minute:'2-digit'})}</span>`;
    }
    
    if (perfil === 'visitante') {
        const minRestantes = Math.ceil((data.getTime() - agora.getTime()) / (1000 * 60));
        return `<span style="color: #ffaa00; font-weight: bold;"><i class="fa-solid fa-stopwatch"></i> ${minRestantes} min restantes</span>`;
    }

    return `<span style="color: #00eaff;">Válido até ${data.toLocaleDateString('pt-BR')} ${data.toLocaleTimeString('pt-BR', {hour: '2-digit', minute:'2-digit'})}</span>`;
}

async function carregarTabelaAdmin() {
    try {
        const res = await fetch('/api/admin/usuarios');
        const dados = await res.json();
        const usuarios = dados.usuarios || [];

        const tbody = document.getElementById('tabelaUsuariosCorpo');
        tbody.innerHTML = '';

        let total = usuarios.length;
        let ativos = 0;

        usuarios.forEach((user) => {
            const ehAdmin = user.perfil === 'admin' || user.usuario.toLowerCase() === 'veiga';
            const ehVisitante = user.perfil === 'visitante';
            const expirado = user.expiracao && new Date() > new Date(user.expiracao);
            
            let statusBadge = '';
            if (user.status === 'bloqueado') {
                statusBadge = '<span class="badge-status status-bloqueado">Bloqueado</span>';
            } else if (expirado) {
                statusBadge = '<span class="badge-status status-expirado">Expirado</span>';
            } else if (ehVisitante) {
                statusBadge = '<span class="badge-status status-demo">Demo 10min</span>';
                ativos++;
            } else {
                statusBadge = '<span class="badge-status status-ativo">Ativo</span>';
                ativos++;
            }

            let perfilBadge = '';
            if (ehAdmin) {
                perfilBadge = '<span style="color: #ffcc00; font-weight: bold;"><i class="fa-solid fa-crown"></i> Admin</span>';
            } else if (ehVisitante) {
                perfilBadge = '<span style="color: #ffaa00; font-weight: bold;"><i class="fa-solid fa-stopwatch"></i> Visitante</span>';
            } else {
                perfilBadge = '<span style="color: #6d8a9c;">Usuário</span>';
            }

            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td><b>${user.usuario}</b></td>
                <td>${perfilBadge}</td>
                <td>${statusBadge}</td>
                <td>${formatarDataExp(user.expiracao, user.perfil)}</td>
                <td>
                    ${!ehAdmin ? `
                        <button class="btn-admin-acao" title="Definir Tempo de Acesso" onclick="definirTempoAcesso('${user.usuario}')"><i class="fa-solid fa-clock"></i> Tempo</button>
                        <button class="btn-admin-acao" title="Bloquear / Desbloquear" onclick="alternarStatusUsuario('${user.usuario}')">${user.status === 'bloqueado' ? '<i class="fa-solid fa-unlock"></i> Desbloquear' : '<i class="fa-solid fa-ban"></i> Bloquear'}</button>
                        <button class="btn-admin-acao btn-admin-excluir" title="Excluir Conta" onclick="excluirContaUsuario('${user.usuario}')"><i class="fa-solid fa-trash"></i></button>
                    ` : '<span style="color: #6d8a9c; font-size: 11px;">Conta Principal</span>'}
                </td>
            `;
            tbody.appendChild(tr);
        });

        document.getElementById('statTotalUsuarios').textContent = total;
        document.getElementById('statAtivos').textContent = ativos;
    } catch (e) {
        console.error('Erro ao carregar lista de usuários:', e);
    }
}

async function definirTempoAcesso(usuario) {
    const opcao = prompt(
        `Definir tempo de acesso para "${usuario}":\n\n` +
        `1 = Acesso Ilimitado\n` +
        `2 = 10 Minutos (Demo)\n` +
        `3 = 1 Hora\n` +
        `4 = 24 Horas (1 Dia)\n` +
        `5 = 7 Dias\n` +
        `6 = 30 Dias\n` +
        `7 = 90 Dias\n\n` +
        `Digite o número da opção:`
    );

    if (!opcao) return;

    let minutos = null;
    if (opcao === '1') minutos = null;
    else if (opcao === '2') minutos = 10;
    else if (opcao === '3') minutos = 60;
    else if (opcao === '4') minutos = 1440;
    else if (opcao === '5') minutos = 10080;
    else if (opcao === '6') minutos = 43200;
    else if (opcao === '7') minutos = 129600;
    else { alert('Opção inválida.'); return; }

    try {
        await fetch('/api/admin/usuario/tempo', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ usuario, minutos })
        });
        carregarTabelaAdmin();
    } catch (e) {
        alert('Erro ao atualizar tempo.');
    }
}

async function alternarStatusUsuario(usuario) {
    try {
        await fetch('/api/admin/usuario/status', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ usuario })
        });
        carregarTabelaAdmin();
    } catch (e) {
        alert('Erro ao alterar status.');
    }
}

async function excluirContaUsuario(usuario) {
    if (confirm(`Tem certeza que deseja EXCLUIR permanentemente a conta de "${usuario}" do servidor?`)) {
        try {
            await fetch(`/api/admin/usuario?usuario=${encodeURIComponent(usuario)}`, {
                method: 'DELETE'
            });
            carregarTabelaAdmin();
        } catch (e) {
            alert('Erro ao excluir conta.');
        }
    }
}

async function abrirCriarUsuarioAdmin() {
    const usuario = prompt('Digite o nome de usuário para a nova conta:');
    if (!usuario || usuario.trim().length < 3) {
        if (usuario !== null) alert('Nome de usuário deve ter no mínimo 3 caracteres.');
        return;
    }

    const senha = prompt(`Digite a senha para "${usuario}":`);
    if (!senha) return;

    try {
        const res = await fetch('/api/admin/usuario/criar', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ usuario: usuario.trim(), senha: senha.trim() })
        });
        const dados = await res.json();
        if (!dados.sucesso) {
            alert(dados.mensagem || 'Erro ao criar usuário.');
            return;
        }
        carregarTabelaAdmin();
    } catch (e) {
        alert('Erro ao criar usuário.');
    }
}

async function abrirCriarVisitanteAdmin() {
    try {
        const res = await fetch('/api/visitante', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' }
        });
        const dados = await res.json();
        if (dados.sucesso) {
            carregarTabelaAdmin();
            alert(`✅ Visitante "${dados.usuario}" criado com sucesso no servidor! Duração de 10 minutos.`);
        }
    } catch (e) {
        alert('Erro ao gerar visitante.');
    }
}

// ==================== MODAL ADICIONAR / EDITAR LINKS ====================
function abrirModalAdicionar(menuPadrao = 'meuslinks') {
    document.getElementById('modalTitulo').innerHTML = '<i class="fa-solid fa-circle-plus"></i> Adicionar Novo Link';
    document.getElementById('editandoMenu').value = '';
    document.getElementById('editandoIndex').value = '';
    document.getElementById('selectMenuDestino').value = menuPadrao;
    document.getElementById('selectMenuDestino').disabled = false;
    document.getElementById('inputNome').value = '';
    document.getElementById('inputUrl').value = '';
    
    montarGridIcones('fa-solid fa-link');
    document.getElementById('modalLink').classList.add('ativo');
    document.getElementById('inputNome').focus();
}

function abrirModalEditar(menuKey, index) {
    if (!menusAtuaisMemoria) return;
    const item = menusAtuaisMemoria[menuKey][index];
    if (!item) return;

    document.getElementById('modalTitulo').innerHTML = '<i class="fa-solid fa-pen-to-square"></i> Editar Link';
    document.getElementById('editandoMenu').value = menuKey;
    document.getElementById('editandoIndex').value = index;
    document.getElementById('selectMenuDestino').value = menuKey;
    document.getElementById('selectMenuDestino').disabled = false;
    document.getElementById('inputNome').value = item.nome;
    document.getElementById('inputUrl').value = item.url;

    montarGridIcones(item.icone || 'fa-solid fa-link');
    document.getElementById('modalLink').classList.add('ativo');
    document.getElementById('inputNome').focus();
}

function fecharModal() {
    document.getElementById('modalLink').classList.remove('ativo');
}

function fecharModalFora(e) {
    if (e.target.id === 'modalLink') fecharModal();
}

function salvarLink() {
    const nome = document.getElementById('inputNome').value.trim();
    let url = document.getElementById('inputUrl').value.trim();
    const icone = document.getElementById('inputIconeSelecionado').value || 'fa-solid fa-link';
    const destinoMenu = document.getElementById('selectMenuDestino').value;
    const editandoMenu = document.getElementById('editandoMenu').value;
    const editandoIndex = document.getElementById('editandoIndex').value;

    if (!nome) {
        alert('Por favor, informe o nome do link.');
        document.getElementById('inputNome').focus();
        return;
    }

    if (!url) {
        alert('Por favor, informe a URL ou caminho do link.');
        document.getElementById('inputUrl').focus();
        return;
    }

    if (!/^https?:\/\//i.test(url) && !url.startsWith('/') && !url.startsWith('.') && !url.startsWith('Caminhos/')) {
        url = 'https://' + url;
    }

    const dados = JSON.parse(JSON.stringify(menusAtuaisMemoria || {}));

    if (editandoMenu !== '' && editandoIndex !== '') {
        const idx = parseInt(editandoIndex);
        if (editandoMenu !== destinoMenu) {
            dados[editandoMenu].splice(idx, 1);
            if (!dados[destinoMenu]) dados[destinoMenu] = [];
            dados[destinoMenu].push({ nome, url, icone });
        } else {
            dados[editandoMenu][idx] = { nome, url, icone };
        }
    } else {
        if (!dados[destinoMenu]) dados[destinoMenu] = [];
        dados[destinoMenu].push({ nome, url, icone });
    }

    salvarMenusServidor(dados);
    fecharModal();
}

function excluirLink(menuKey, index) {
    if (!menusAtuaisMemoria) return;
    const item = menusAtuaisMemoria[menuKey][index];
    if (confirm(`Deseja realmente excluir o link "${item.nome}"?`)) {
        const dados = JSON.parse(JSON.stringify(menusAtuaisMemoria));
        dados[menuKey].splice(index, 1);
        salvarMenusServidor(dados);
    }
}

// Atalhos do Teclado
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        fecharPreview();
        fecharModal();
        fecharPainelAdmin();
        fecharModalPerfil();
    }
});

// Inicialização
document.addEventListener('DOMContentLoaded', verificarSessao);
</script>

</body>
</html>