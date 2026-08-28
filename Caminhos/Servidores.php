<HTML>

<head><title> Servidores </title>

<link rel="shortcut icon" type="image/x-icon" href="\cpd\IMG\favicon.ico">

</head>

<body bgcolor="CAFFFF">

<td></td>
<td align="center" width="15%">
<fieldset><legend><img style="width: 78px; height: 35px;" alt="" src="\cpd\IMG\cpd2.png" align="middle">&nbsp;Filial 023 - Campinas&nbsp;</legend>
<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">

<tbody> 



       <p><i><u></u></i></p>
       <ul type="circle">
       <li><font color="FF0000">Após O Término Da Salva Diária Antes</font color="FF0000"><br></br>
       <li>Abra o TplinuxWeb, abra qualquer relatório e veja se na frente da data está escrito EOP se estiver ok,se não estiver não reinicialize o tplinux</li></ul><br>
		
       <p><i><u></u></i></p>
       <ul type="circle">
	   <li>No servidor DB</li>
       <li>Entre no <mark>Diretório BK</mark> de o comando ll confira se está zerado pronto conferência feita comesse a reiniciar os servidores</li></ul><br>
	   
	   <p><i><u></u></i></p>
       <ul type="circle">
	   <li>Entre no <mark>Tplinux</mark> via <mark>Putty</mark></li>
	   <li>No menu opção 8 Reiniciar Servidor Tplinux, Vai abrir outra janela selecione 1 Reiniciar o Servidor, Se quiser acompanhar o andamento olhe no VMware <mark>Atenção:VMware Tplinux só pode olhar nunca Reiniciar por lá</mark>, Apareceu a tela de loguin se quiser conferir se deu certo comando top primeira linha já vai aparecer a quanto tempo está no ar</li>
       <li>De o camando <mark>date</mark> veja se o dia e horario do servidor estam correto </li>
       <li>Vá para o Proximo.</li></ul><br>
	   
	   <p><i><u></u></i></p>
       <ul type="circle">
       <li><mark>Vmware</mark></li>
       <li>Click no Servidor <mark>Rub</mark> com botão direito para Selecionar,click com botão esquerdo vá em Power,Vá em Restart Guest OS,Acompanhelhe pelo monitor virtual o andamento tela apareceu para efetuar Loguin</li>
	   <li>De o camando <mark>date</mark> veja se o dia e horario do servidor estam correto </li>
	   <li>Vá para o Proximo.</li></ul><br>
       
	   <p><i><u></u></i></p>
       <ul type="circle">
	   <li><mark>Vmware</mark></li>
       <li>Click no Servidor <mark>SRVSAVE</mark> com botão direito para Selecionar,click com botão esquerdo vá em Power,Vá em Restart Guest OS,Acompanhelhe pelo monitor virtual o andamento tela apareceu para efetuar Loguin</li>	
	   <li>De o camando <mark>date</mark> veja se o dia e horario do servidor estam correto </li>
	   <li>Vá para o Proximo.</li></ul><br>
	   
	   <p><i><u></u></i></p>
       <ul type="circle">
	   <li><mark>Vmware</mark></li>
       <li>Click no Servidor <mark>DB</mark> com botão direito para Selecionar,click com botão esquerdo vá em Power,Vá em Restart Guest OS,Acompanhelhe pelo monitor virtual o andamento tela apareceu para efetuar Loguin</li>
	   <li>De o camando <mark>date</mark> veja se o dia e horario do servidor estam correto </li>
	   <li>Vá para o Proximo.</li></ul><br>
	   
	   <p><i><u></u></i></p>
       <ul type="circle">
	   <li><mark>Vmware</mark></li>
       <li>Click no Servidor <mark>APP</mark> com botão direito para Selecionar,click com botão esquerdo vá em Power,Vá em Restart Guest OS,Acompanhelhe pelo monitor virtual o andamento tela apareceu para efetuar Loguin,Entre com seu usuario e senha AD, de o comando <mark>sudo service tomcat stop</mark>,Tela voltou? De o comando <mark>sudo service tomcat start</li>
	   <li>De o camando <mark>date</mark> veja se o dia e horario do servidor estam correto </li></ul><br>
	   
	   <p><i><u></u></i></p>
       <ul type="circle">
	   <li><mark>SaveWeb</mark></li>
	   <li>Tela <mark>sadou059</mark>,Click no botão ||Pausar</li>
	   <li>Tela <mark>sadou072</mark>,O campo <mark>Estatus De Sistema</mark> Deve estar Bloqueado,Caso estiver Siga,Caso estiver Desbloqueado click no botão Bloquear
	   <li>Confira se todos os arquivos Necessarios para o batch estão como ok no shell antesbatch023 no servidor DB</li>
	   <li>Confira se o dia no tplinux realmente continua com EOP na frente de qualquer relatorio.</li>
	   <li>No servidor DB Diretorio Bk de o comando ll e veja se esta zerado</li><br></br>
	   
	   <p><i><u></u></i></p>
       <ul type="circle">
	   <li><mark>Ok Voçê Chegou Ao Fim Siga Com Sua Rotina Batch Normalmente Apartir Do SJBDD01 Em Frente.</mark></li><br></br>
	   
	   <p><i><u></u></i></p>
       <ul type="circle">
	   <li>***********************************************************************************************************************************</li><br></br>
	   
	   
	   <p><i><u></u></i></p>
       <ul type="circle">
	   <li><font color="FF0000">APOS FINALIZAR O BATCH MANDAR CARGA PDVS E BALANÇAS FAÇA ESSA CONFERÊNÇIA</font color="FF0000"></li><br></br>
	   <li><mark>SaveWeb</mark></li>
	   <li>Tela <mark>sadou059</mark>,Confirme se as Task estão em execução caso não esteja,Click no botão >Continuar</li>
	   <li>Tela <mark>sadou072</mark>,O campo <mark>Estatus De Sistema</mark> Deve estar Desbloqueado,Caso estiver Bloqueado click no botão Desbloquear </li>
	   <li>Confira se o dia Anterior no tplinux realmente continua com EOP na frente de qualquer relatorio , e o dia atual está em branco. </li>
	   
	   
</body>

</HTML>