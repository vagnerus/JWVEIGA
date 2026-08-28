<HTML>

<head><title> Batch </title>

<link rel="shortcut icon" type="image/x-icon" href="\cpd\IMG\favicon.ico">

</head>

<body bgcolor="CAFFFF">

</div>

<br>

<td style="text-align: right;"></td>

</tr>

<tr >

<td></td>
<td align="center" width="15%">
<fieldset><legend><img style="width: 78px; height: 35px;" alt="" src="\cpd\IMG\cpd2.png" align="middle">&nbsp;Filial 023 - Campinas&nbsp;</legend>
<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">

<tbody> 



       <p><i><u>Passo 1</u></i></p>
       <ul type="circle">
       <li>No Servidor DB 
       <li> df -h							
       <li> Verificar /fs1 - (não dever ser > 80%) - Se constar esse valor abrir um chamado</ul><br>
       
       <p><i><u>Passo 2</u></i></p>
       <ul type="circle">
       <li>Aplicativo NetBackup </li>
       <li>Media</li>
       <li>Fitas a serem verificadas "Antes" e "Após" 												
Media Status” tem que estar ACTIVE, senão botão direito mouse Ativar Obs.: Se estiver como FROZEN(Full) tem que ser trocado a fita
       <li>obs.caso vc troque a fita e mesmo assim a salva nao inicia ja da X vermelho no active monitor,vá em Device Monitor olhe se Robo não esta down Drive se estiver entre no putty servidor srvbck ip 172.20.8.218 sudo shutdown -r now
	
       <p><i><u>Passo 3</u></i></p>
       <ul type="circle">
       <li><mark>Não Executar Sem A Liberação Do RM Trava RM dar Entradas De Notas</mark>
       <li>No Servidor DB
       <li>dfrun exe sabou02
       <li>Filial: 23
       <li>SJBPEDI</li></ul><br>

       <p><i><u>Passo 4</u></i></p>
       <ul type="circle">
       <li>No Servidor DB</li>
       <li>recebidos
Conferir se todos relatórios estão OK, se não tiver dar duplo clique para copiar + botão direito para colar(fazer isso um a um)
sudo attransf.sh
[F] Servidor | srvsave | [R] Receber (botão direito do mouse para colar os arquivos copiados anteriormente)</li></ul><br>
	
       <p><i><u>Passo 5</u></i></p>
       <ul type="circle">
	   <li><mark>Não Executar Sem a Lireração da Frente De Caixa</mark>
       <li>No tplinux Web Desatualizado
       <li>tplcampinas.atacadao.com.br 
  WEBAPP BASICAS SOD/EOD Status
  Login e Senha Após iniciar teclar ENTER algumas vezes(4x) para prosseguir, ao término ficará com a tela preta e em cima escrito “ Servidor não ativo”</li></ul><br>	
	
	   <p><i><u>Passo 6</u></i></p>
       <ul type="circle">
       <li>No Servidor DB
       <li>dfrun exe SASOI60
Inserir data do dia e filial
Conferir todas as "REDUÇÃO Z" uma por uma, campo “venda líquida”
Anotar valor final e inserir no Passo 11 em SASOI60 F10 Salvar</li></ul><br>

       <p><i><u>Passo 7</u></i></p>
       <ul type="circle">
       <li>No Servidor DB 
       <li>quem
       <li>sudo kill -9 + Número de processos</li></ul><br>
	
   	   <p><i><u>Passo 8</u></i></p>
       <ul type="circle">
       <li><mark>Não Eecutar Se Alguem Na Loja Ainda For Usar Algum Sistema</mark>
       <li>No Servidor DB 
	   <li>dfrun exe SJBOU02 
	   <li>Filial:23 
	   <li>SJBDD00</li></ul><br>
		
       <p><i><u>Passo 9</i></p>
       <ul type="circle">
       <li>No Aplicativo Netbackup Faça a Salva Diaria Antes 
       <li>Policies  
       <li>Diario_Antes botão direito mouse 
       <li>Manual Backup
	   <li>OK 
       <li>Activity Monitor Verificar se bonequinho verde está "correndo" </li></ul><br>
		
       <p><i><u>Passo 10</i></p>
       <ul type="circle">
	   <li><mark>PONTO DE ATENÇÃO:Sempre antes de iniciar o sjbdd01 entre no tplinux Monitor Relatorisos De Vendas,Vendas Por PDV olhe se o dia do seu batch esta com texto [EOP] na frente da data se estiver ok pode seguir.</mark>
       <li><mark>COLOQUE ESTA CHECAGEM NA SUA ROTINA !!! CRIE O HABITO DE REALIZAR ESTA CONFERÊNÇIA.</mark>       
	   <li>dfrun exe sjbou02 
       <li>sjbdd01
	   <li>Sequençia 725 anote o valor na segunda linha sasbu24 passo 11 
	   <li>Sequençia 750 anote o valor na terceira linha sasbi08 passo 11
	   <li>Sequençia 1200 note a rentabilidade ultima linha passo 12
	   <li>Sequençia 1525 anote passo 13 obs. passou de 50,00 positivo ou negativo ligue na produção </ul><br>
		
	   <p><i><u>Passo 11</i></p>
       <ul type="circle">
       <li>Primeira linha a Soma de todas as reduçoes Z que vc touce da frente de caixa confrontado com tela sasoi60
       <li>Segunda linha sera a mesma da linha decima apresentado a voçe na sequecia 725 do Sjbdd01
	   <li>Terceira linha sera a mesma da linha decima apresentado a voçe na sequecia 750 do Sjbdd01</li></ul><br>
		
	   <p><i><u>Passo 12</i></p>
       <ul type="circle">
       <li>Faça conta tirando a devolução do caixa Empresa e some com a venda dos PDVS
       <li>dfrun exe svdoi70
	   <li>Anotar valor da 1ª linha “REMESSA PARA FORA DO ESTABELECIMENTO” e inserir na 1ª linha do Passo 12 em Total R$- (menos)
Na última linha em “TOTAL DEVOLUÇÃO” também anotar e inserir na 2ª linha da Passo nº 12 em TOTAL DEVOLUÇÃO R$	=
Subtrair os dois valores e inserir na 3ª linha em Total R$	+ SOSOI60 = Fazer o cálculo que será o resultado de Total venda R$ </li></ul><br>
		
	   <p><i><u>Passo 13</i></p>
       <ul type="circle">
       <li>Anote o valor sendo acima de R$50,00 positivo ligue na produção matriz
       <li>Esse valor ira aparecer pra voçê Durante execução SJBDD01 sequecia 1525 </li></ul><br>
		
	   <p><i><u>Passo 14</i></p>
       <ul type="circle">
       <li>dfrun exe sbou02
       <li>sjbdd02
	   <li>S Enter Ate o final </li></ul><br>
		
	   <p><i><u>Passo 15</i></p>
       <ul type="circle">
       <li>dfrun exe sjbou02
       <li>Na sequecia 403 a data ira mudar altomatico so voçe conferir se esta certo proximo dia e dar S enter </li></ul><br>
		
	   <p><i><u>Passo 16</i></p>
       <ul type="circle">
       <li>A data mudou automatica no passo acima apenas Confira,anote e siga</li></ul><br>
		
	   <p><i><u>Passo 17</i></p>
       <ul type="circle">
       <li>dfrun exe sjbou02
       <li>Só S enter ate o fim </li></ul><br>
		
	   <p><i><u>Passo 18</i></p>
       <ul type="circle">
       <li>Relarotio SRMBI50 que é impresso no comesso do sjbdd04</li></ul><br>
		
	   <p><i><u>Passo 19</i></p>
       <ul type="circle">
       <li>Relarotio SRMBI50 que é impresso no comesso do sjbdd04</li></ul><br>
		
	   <p><i><u>Passo 20</i></p>
       <ul type="circle">
       <li>Pule este passo só é executado quando a loja não abre no dia seguinte</li></ul><br>
		
	   <p><i><u>Passo 21</i></p>
       <ul type="circle">
       <li>Pule este passo só é executado quando a loja não abre no dia seguinte caso</li></ul><br>
		
	   <p><i><u>Passo 22</i></p>
       <ul type="circle">
       <li>No Aplicativo Netbackup Faça a Salva Diaria Apos 
       <li>Policies  
	   <li>Diario_Apos botão direito mouse 
	   <li>Manual Backup
	   <li>OK 
	   <li>Activity Monitor Verificar se bonequinho verde está "correndo"</li></ul><br>
		
	   <p><i><u>Passo 23</i></p>
       <ul type="circle">
       <li>Pule não faz mais parte da rotina batch feita altomaticamente durante o dia</li></ul><br>
		
	   <p><i><u>Passo 24</i></p>
       <ul type="circle">
       <li>Confira se todos os arquivos foram transmitidos para servidor matriz
       <li>No Servidor DB
	   <li>cd /fs1/integra/ftp/naoenviado 
	   <li>ll
	   <li>Caso aparece algum arquivo 
	   <li>mv * /fs1/integra/ftp/enviar 
	   <li>cd /fs1/integra/sftp/naoenviado
	   <li>ll
	   <li>Caso aparece algum arquivo
	   <li>mv * /fs1/integra/sftp/enviar </ul><br>
		
	   <p><i><u>Passo 25</i></p>
       <ul type="circle">
       <li>São 3 Linhas para ser executado so fara as 2 primeiras linhas 
       <li>Habilitar Programas De Notas 
	   <li><mark>Caso tenha tido inventario no seu batch seram apenas 2 proramas</mark>
	   <li>dfrun exe svdou23
	   <li>Filial:23
	   <li>sasou46
	   <li>sasou47</ul><br>
	   
	   <ul type="circle">
	   <li><mark>Caso NÃO tenha tido INVENTARIO seram 7 Programas</mark>  
	   <li>dfrun exe svdou23
	   <li>Filial:23
	   <li>sasou25
	   <li>sasou39
	   <li>sasou43
	   <li>sasou46
	   <li>sasou47
	   <li>svdou25
	   <li>scdou27</li></ul><br>
	   
	   <ul type="circle">
	   <li>Segunda Linha no servidor DB Liberar o sitema  
	   <li>dfrun exe sadbu02 1 23</li></ul><br>
	   
	   <ul type="circle">
	   <li>Terceira Linha SAVEweb: Iniciar -Task Manager 
	   <li>Desconcidere NÃO faz mas parte da rotina bacht</li></ul><br>
		
       <p><i><u>Passo 26</i></p>
       <ul type="circle">
       <li>Validar se no pacote de dados ente ativo
       <li>No servodor DB 
	   <li>ping srvsave
	   <li>Taxa baixa esta com taxa alto esta ruim tome providencia cabivel </li></ul><br>
		
	   <p><i><u>Passo 27</i></p>
       <ul type="circle">
       <li>Inicie o dia dos pdv
       <li>No tplinux Web Desatualizado
       <li>tplcampinas.atacadao.com.br 
          WEBAPP BASICAS SOD/EOD Status
       <li>click em Iniciar SOD
	   <li>Aguarde Telinha Precisa ficar Azul Pedindo loguin e Senha</li></ul><br>
		
	   <p><i><u>Passo 28</i></p>
       <ul type="circle">
       <li>No tplinux Web
	   <li>Atacadão
	   <li>Configurações
	   <li>Importação De Produtos
	   <li>Executar 
	   <li><mark>Tome Cuidado Para Não Esbarrar ou Tera Transtornos</mark></ul><br>
	  
	   <ul type="circle">
	   <li>Entre no MVG6 Programa das Balanças  
	   <li>Mande Cargas nas balanças </ul><br>
	  
	   <p><i><u>Passo 00</i></p>
       <ul type="circle">
       <li><mark>COLOQUE ESTA CHECAGEM NA SUA ROTINA !!! CRIE O HABITO DE REALIZAR ESTA CONFERÊNÇIA</mark> 
	   <li>Entre No tplinux Web vá em Monitor,Relatorios De Vendas,Vendas Por PDV e confica se na frente da data do dia que vc iniciou nao a nem um texto Exemplo [EOP],o correto é estar em branco se tiver qualquer texto na frente da data ligue na produção urgente e explique a situação.</ul><br>
	  

</body>


</HTML>