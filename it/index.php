<!DOCTYPE html>
<html>
  <head>
      <title>ITS Tullio Buzzi</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	     <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />

      <link rel="stylesheet" type="text/css" href="../assets/common/css/style.css">
      <link rel="stylesheet" type="text/css" href="../assets/common/css/header.css">
      <link rel="stylesheet" type="text/css" href="../assets/common/css/menu.css">
      <link rel="stylesheet" type="text/css" href="../assets/common/css/main.css">
      <link rel="stylesheet" type="text/css" href="../assets/common/css/leftside.css">
      <link rel="stylesheet" type="text/css" href="../assets/common/css/calendar.css" >
      <link rel="stylesheet" type="text/css" href="../assets/common/css/rightside.css">
      <link rel="stylesheet" type="text/css" href="../assets/common/css/footer.css">


      <!-- script importanti in fondo alla pagina -->
  </head>
  <body>

    <div class="top-header">
        <header>

            <div class="container-lt">
              <div class="logo">
                <img  src = "../assets/common/img/logo_nuovo.svg" alt="logo" width="120">
              </div>

              <div class="title">
                <h2>its tullio buzzi</h2>
                <p>Istitiuto tecnico statale - Settore Tecnologico</p>
              </div>

            </div>

        </header>

    <div class="menu">

			<!-- NAV BAR -->
			<div class="nav">
				<a class="nav_title" href=""><img src="../assets/common/img/logo_nuovo.svg" style="width: 80px; height: 80px;line-height: 4em;float: left;margin: 0.5em;"/></a>
				<ul>
					<li>
						<a id="log">Area Riservata</a>
					</li>
					<li>
						<a>Contatti</a>
					</li>
					<li>
						<a>Dipartimenti</a>
						<ul class="dropdown">
              <li id="child"><a href="javascript:void(0);">Informatica</a></li>
              <li id="child"><a href="javascript:void(0);">Elettronica</a></li>
							<li id="child"><a href="javascript:void(0);">Meccanica</a></li>
							<li id="child"><a href="javascript:void(0);">Energia</a></li>
							<li id="child"><a href="javascript:void(0);">Chimica</a></li>
              <li id="child"><a href="javascript:void(0);">Tessile</a></li>
						</ul>
					</li>
					<li>
						<a>Documenti</a>
						<ul class="dropdown">
							<li id="child"><a>UAN</a></li>
							<li id="child"><a>CIU</a></li>
							<li id="child"><a>TRI</a></li>
						</ul>
					</li>
					<li>
						<a>Istituto</a>
						<ul class="dropdown">
							<li id="child"><a>UAN</a></li>
							<li id="child"><a>CIU</a></li>
						</ul>
					</li>
					<li><a>Home</a></li>
				</ul>
			</div>


          <!-- INIZIO MODAL LOGIN -->
          <div id="simpleModal" class="modal">
            <div class="modal-content">
              <img src="../assets/common/img/logo_nuovo.svg" />
              <span class="closeBtn">&times;</span>
              <form action="../assets/common/php/login.php" method="POST" class="login_form">
                <div id="field">
                  <input type="text" name="user" placeholder="Username" required>
                </div>
                <div id="field">
                  <input type="password" name="psw" placeholder="Password" required>
                </div>
                <div id="field">
                  <input type="radio" name="access_mode" value="studente" required> Studente
                  <input type="radio" name="access_mode" value="docente"> Docente
                </div>
                <input class="submit" type="submit" name="submit" value="login">
              </form>
            </div>
          </div>
          <!-- FINE MODAL LOGIN -->

          </div>

        </div>
    </div>

       <div class="main">
      				<div class="left-side">

               <p class="title_calendar">Controlla i nostri eventi</p>

                <div class="container">
              		<div class="cal">
              			<div class="cal__header">
              				<button class="btn btn-action btn-link btn-lg" data-calendar-toggle="previous"><svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              				<path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path></svg></button>
              				<div class="cal__header__label" data-calendar-label="month">
              					March 2017
              				</div><button class="btn btn-action btn-link btn-lg" data-calendar-toggle="next"> <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              				<path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path></svg></button>
              			</div>
              			<div class="cal__week">
              				<span>Lun</span> <span>Mar</span> <span>Mer</span> <span>Gio</span> <span>Ven</span> <span>Sab</span> <span>Dom</span>
              			</div>
              			<div class="cal__body" data-calendar-area="month"></div>
              		</div>
              		<p class="demo-picked">
              			<h3><span data-calendar-label="picked" id="pp"></span></h3>
              		</p>


                  <!-- INIZIO MODAL CALENDARIO -->
                    <div class="modalCal" id="modalCal">
                      <div class="modalCalcontent">
                        <span class="closeBtnCal">&times;</span>
                        <div id="modalEvents"></div>
                      </div>
                    </div>
                  <!-- FINE MODAL CALENDARIO -->

              	</div>

              	<script>
              		window.addEventListener('load', function () {
              		  vanillacalendar.init();
              		})

              	</script>

                 <div style="margin-bottom: 3em;">
                  <a class="twitter-timeline" href="https://twitter.com/TullioBuzzi1?ref_src=twsrc%5Etfw" height="300px" width="90%" >Tweets di TullioBuzzi1</a>
                  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

                <a class="AmmTrs" target="_blank" href="http://ww2.gazzettaamministrativa.it/opencms/opencms/_gazzetta_amministrativa/amministrazione_trasparente/_toscana/_istituto_tecnico_statale_tullio_buzzi_di_prato"><img src="../assets/common/img/AmministrazioneTrasparente.png" alt="AmministrazioneTrasparente">
                </img></a>

                  <a href="http://www.itistulliobuzzi.it/buzziwebsite/home/PDF/piano_trasparenza.pdf" target="_blank" class="PTTI"> <p>Documento PTTI</p> </a>
      		    </div>

      		<div class="right-side">
              <div class="news">
                  <h1 class="news_title"> ISCRIZIONI PRIME A.S. 2018/19 E CRITERI ACCOGLIENZA </h1>
                  <p class="news_date"> 20 Dicembre 2017 </p>
                  <p class="news_text"> I genitori dovranno registrarsi sul portale <a href="http://www.istruzione.it/iscrizionionline/" target="_blank">"Iscrizioni on Line"</a> a partire dal 9/1/18 per ottenere le credenziali di accesso al servizio.

Dal 16/1/18 fino al 6/2/18 i genitori potranno accedere allo stesso portale per l'inserimento e inoltro della domanda  di iscrizione

Criteri di accoglienza delle iscrizioni alle classi prime per l'a.s. 2018/19, aggiornato

Si ricorda, oltre all'iscrizione da effettuare on line, di produrre all'Istituto copia cartacea o digitale via mail della pagella finale di seconda media </p>
                  <a class="news_link"> Criteri </a>
              </div>
              <div class="news">
                  <h1 class="news_title"> CORSI INGLESE GRUPPI E CALENDARIO
 </h1>
                  <p class="news_date"> 20 Dicembre 2017 </p>
                  <p class="news_text"> Di seguito i gruppi classe e il calendario dei corsi di Inglese </p>
                  <a class="news_link"> Leggi </a>
              </div>
              <div class="news">
                  <h1 class="news_title"> TORNEO DI BASKET 3 CONTRO 3 </h1>
                  <p class="news_date"> 14 Dicembre 2017 </p>
                  <p class="news_text"> Sabato 16 dicembre 2017 dalle ore 8.30 alle ore 12.00 il Dipartimento di Scienze Motorie organizza nella palestra dell’Istituto un torneo di Basket 3 contro 3 riservato agli studenti e alle studentesse del triennio.

Il Basket 3 vs 3 è una nuova disciplina che, per la spettacolarità sportiva e per il crescente numero di praticanti,  è stata di recente ufficializzata dal CIO e sarà presente alle Olimpiadi di Tokio del 2020 sia in campo maschile sia in quello femminile.

L’evento è, inoltre,  finalizzato alla partecipazione degli alunni del Buzzi ai Campionati Studenteschi della Provincia di Prato. </p>
                  <a class="news_link"> Leggi </a>
              </div>
              <div class="news">
                  <h1 class="news_title"> Titolo </h1>
                  <p class="news_date"> Data </p>
                  <p class="news_text"> Testo </p>
                  <a class="news_link"> Link </a>
              </div>
              <div class="news">
                  <h1 class="news_title"> Titolo </h1>
                  <p class="news_date"> Data </p>
                  <p class="news_text"> Testo </p>
                  <a class="news_link"> Link </a>
              </div>
              <div class="news">
                <h1 class="news_title"> Titolo </h1>
                <p class="news_date"> Data </p>
                <p class="news_text"> Testo </p>
                <a class="news_link"> Link </a>
              </div>
              <div class="news">
                <h1 class="news_title"> Titolo </h1>
                <p class="news_date"> Data </p>
                <p class="news_text"> Testo </p>
                <a class="news_link"> Link </a>
              </div>
              <div class="news">
                  <h1 class="news_title"> Titolo </h1>
                  <p class="news_date"> Data </p>
                  <p class="news_text"> Testo </p>
                  <a class="news_link"> Link </a>
              </div>

      		</div>
	   </div>
     <button onclick="topFunction()" class="btn-s">
       <i class="fa fa-arrow-up" aria-hidden="true" id="btn-icon"></i>
     </button>

	   <footer class="footer">
       <div class="div-one">
         <ul class="list-social">
           <a href="javascript:void(0);"><img src="../assets/common/img/facebook2.svg" alt="Facebook">
             </img></a>
           <a href="javascript:void(0);"><img src="../assets/common/img/twitter1.svg" alt="Twitter">
             </img></a>
           <a href="javascript:void(0);"><img src="../assets/common/img/youtube2.svg" alt="YouTube">
             </img></a>
         </ul>
       </div>
       <div class="div-two">
         <span>All rights reserved -- &copy; 2017-<?php echo date('Y'); ?> -- Per informazioni contattare Email: <a href="mailto:es@buzzi.it">es@buzzi.it</a> </span>
       </div>
	   </footer>

     <script>
   		//con questo if controllo se il dispositivo è mobile
   		  /*if (/Mobi/.test(navigator.userAgent)) {
   			  $('link[href="../assets/common/css/style.css"]').attr('href','../assets/common/css/style_mobile.css');
   		  }else {
   			  $('link[href="../assets/common/css/style.css"]').attr('href','../assets/common/css/style.css');
   		  }*/

   	</script>
    <script src="../assets/common/javascript/calendar.js" type="text/javascript"></script>
    <script src="../assets/common/javascript/query_script.js" charset="utf-8"></script>
  </body>
</html>
