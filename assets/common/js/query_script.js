<!--

  $(document).ready(function(){

      //prendo il modal per la chiusura
      var modal = document.getElementById('simpleModal');
      var modalCal = document.getElementById('modalCal');

      //cambiare cursore quando ci vado sopra
      $(".login").hover(function(){
          $(this).css('cursor','pointer');
      });

      /*
      //vado nella pagina di login
      $("div.login").click(function(){
          //Aggiungere Apertura Quadrato Per Login,
          //Dopo Premere accedi per entrare nella pagina
          window.location = "url";
      });
      //Modifica Ingrandimento Accesso Area Riservata

      var open;

      $("div.login").click(function() {
        $("div.login").css("display","none");
        $("div.log").css("margin-top","0em");
        if(open) { //true già aperto
          $("div.log").animate({width: '100px', opacity: '0.8'}, "slow");
          $("div.log").animate({height: '50px', opacity: '0.3'}, "slow");
          //Si Blocca per un sec
          $("div.log").slideUp();

          open = false;
        }else { //false chiuso
          $("div.log").slideDown();
          $("div.log").animate({height: '250px', opacity: '0.6'}, "slow");
          $("div.log").animate({width: '300px', opacity: '0.8'}, "slow");

          open = true;
        }
      });
      $("#accedi").click(function () {
        window.location = "login.html";
      });
      $("button.butt_form").click(function () {
        $("div.log").animate({width: '100px', opacity: '0.8'}, "slow");
        $("div.log").animate({height: '50px', opacity: '0'}, "slow");
        $("div.log").slideUp();

        setTimeout(function(){
          $("div.login").css("display","block");
        }, 1000);
      });
      */

      /*var height = $('nav').offset().top;

      $(window).scroll(function() {
        $("div.login").css("display","block");

        if ($(window).scrollTop() > height) {
            $('#nb').addClass('affix');
        }
        else {
            $('#nb').removeClass('affix');
        }
      });*/




      //apertura modal login
      $("#log").click(function(){
          //se non ha effettuato il logout lo reindirizzo all' area Riservata
          $.ajax({
            type : 'get',
            url : '../assets/common/php/check-login.php',
            success :  function (data) {
              if (data == "not valid") {
                $("#simpleModal").css("display","block");
              } else if (data == "valid") {
                //NOTE: se sono già loggato
                window.location = "../../../it/areaRiservata";
              }
            }
          });
      });

      //controllo login
      $(".submit").click(function(){
        var user = document.getElementsByName('user');
        var psw = document.getElementsByName('psw');

        console.log(user+psw);
      });

      //chiusura modal login con bottone
      $(".closeBtn").click(function(){
        $("#simpleModal").css("display","none");
      });

      //chiusura modal click esterno
      window.addEventListener('click', clickOutside);

      function clickOutside( e ) {
        if ( e.target == modal ) {
          $("#simpleModal").css("display","none");
        }
        if ( e.target == modalCal ) {
          $(".modalCal").css("display","none");
        }
      }

      //chiusura modal calendario con bottone
      $(".closeBtnCal").click(function(){
        $(".modalCal").css("display","none");
      });

  });

  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementsByClassName("btn-s")[0].style.display = "block";
      } else {
          document.getElementsByClassName("btn-s")[0].style.display = "none";
      }
  }


  function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
  }
