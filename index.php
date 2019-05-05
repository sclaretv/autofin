<!DOCTYPE html>
<?php  $version = date('YmdHis'); ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Autofin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css?<?php echo $version ?>" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS personalizado -->
    <link rel="stylesheet" type="text/css" href="assets/css/style-main.css?<?php echo $version ?>"  >

  </head>
  <body>

    <!-- menu -->
    <?php  include 'menu.php'; ?>
    
    <!-- contenido -->
        <section id="main" class="full-bg">
            <?php include 'main.php'; ?>
        </section>
    
        <section  id="comencemos" class="full-bg">
            <?php include 'comencemos.php'; ?>
        </section>        

        <!-- secciones de productos -->
        <section class=" full-bg sections" id="portal-ces">
            <?php include 'portal-ces.php'; ?>
        </section>        
        <section class=" full-bg sections" id="trinidad">
            <?php include 'trinidad.php'; ?>
        </section>        
        <section class=" full-bg sections" id="panal">
            <?php include 'panal.php'; ?>
        </section>        
        <section class=" full-bg sections" id="araña">
            <?php include 'spider.php'; ?>
        </section>        
        <section class=" full-bg sections" id="mi-autofin">
            <?php include 'mi-autofin.php'; ?>
        </section>

        

        <section class=" full-bg sections d-none" id="mi-autofingps">
            <?php include 'novedades/mi-autofingps.php'; ?>
        </section>

        <section class=" full-bg sections d-none" id="buho">
            <?php include 'novedades/buho.php'; ?>
        </section>

        <section class=" full-bg sections" id="fuerza">
            <?php include 'fuerza.php'; ?>
        </section>        

        <section class=" full-bg" id="fuerza-fin">
            <?php include 'footer.php'; ?>
        </section>      
    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() { 

            /*$('.carousel').carousel({
              interval: false
            });*/

            $('#carousel-main').carousel({
              interval: 7000
            });

            $('.carousel_productos').carousel({
              interval: 5000
            });

            $('#carouselnovedades').carousel({
              interval: 5000
            });

            $("#btn-novedades").click(function() {
              
              $("#mi-autofingps").removeClass("d-none");
              
            });

            $("#prev-miautofingps").click(function() {
              $("#mi-autofingps").addClass("d-none");
              $("#buho").removeClass("d-none");
            });

            $("#next-miautofingps").click(function() {
              $("#mi-autofingps").addClass("d-none");
              $("#buho").removeClass("d-none");
            });

            $("#prev-buho").click(function() {
              $("#buho").addClass("d-none");
              $("#mi-autofingps").removeClass("d-none");
            });

            $("#next-buho").click(function() {
              $("#buho").addClass("d-none");
              $("#mi-autofingps").removeClass("d-none");
            });

            /*$("#prev-buho").click(function(){
                $("#mi-autofingps").fadeIn();
            });*/
            
            /*$(".btn2").click(function(){
                $("p").fadeIn();
            });*/
            /*

            $(window).scroll(function() {
                
                //console.log('hola');
                var main = document.getElementById('main');
                var comencemos = document.getElementById('comencemos');
               /* if (esVisible(main)) {
                    detectar_scroll('#main');
                }
                if (esVisible(comencemos)) {
                    //detectar_scroll('#comencemos');
                    detectar_scroll();
                }*/
                /*console.log(esVisible(main));
                if (esVisible(main)) {
                    //console.log('hey');
                    $('html, body').animate({
                        scrollTop: $('#comencemos').offset().top - 20 //#DIV_ID is an example. Use the id of your destination on the page
                    }, 'slow');
                }
                
              /*$("span").css("display", "inline").fadeOut("slow");*/
            /*});


            function esVisible(elem){
                /* Ventana de Visualización*/
            /*    var posTopView = $(window).scrollTop();
                var posButView = posTopView + $(window).height();
                /* Elemento a validar*/
            /*    var elemTop = $(elem).offset().top;
                var elemBottom = elemTop + $(elem).height();
                /* Comparamos los dos valores tanto del elemento como de la ventana*/
            /*    return ((elemBottom < posButView && elemBottom > posTopView) || (elemTop >posTopView && elemTop< posButView));
            }


/*            function detectar_scroll() {
                var obj = $("#portal-ces");    //objeto sobre el que quiero detectar scroll
                //console.log(obj);
                var obj_top = obj.scrollTop()   //scroll vertical inicial del objeto
                obj.scroll(function(){
                    var obj_act_top = $(this).scrollTop();
                    console.log(obj_top, obj_act_top);  //obtener scroll top instantaneo
                    if(obj_act_top > obj_top){
                        //scroll hacia abajo
                        
                        console.log('Abajo'+section_id);
                        
                    }else{
                        //scroll hacia arriba
                        
                        console.log('Arriba'+section_id);
                        
                    }

                    obj_top = obj_act_top;                  //almacenar scroll top anterior
                });
            }*/


            

            /*var myFullpage = new fullpage('#fullpage', {
                continuousVertical: true,
                //anchors: ['main', 'comencemos', 'portal-ces','panal','araña','mi-autofin','novedades','fuerza'],

                afterLoad: function(anchorLink, index) {
                    if (index == 0) {
                        $('#carousel-main').carousel({
                          interval: 7000
                        });
                    }
                    //console.log(anchorLink, index);
                },

               afterRender: function(){
            
                },
              
            });*/


            /*function fullscreen (e){
            if (e.webkitRequestFullScreen) {
                e.webkitRequestFullscreen();
              } else if(e.mozRequestFullScreen) {
                e.mozRequestFullscreen();
              }
            }

            document.getElementById('botonparaactivar').onclick = function(){
                fullscreen(document.getElementById('video-autofin'));
            }*/


              var videoElement = document.getElementById("video-autofin");

    
              function toggleFullScreen() {
                if (!document.mozFullScreen && !document.webkitFullScreen) {
                  if (videoElement.mozRequestFullScreen) {
                    videoElement.mozRequestFullScreen();
                  } else {
                    videoElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                  }
                } else {
                  if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                  } else {
                    document.webkitCancelFullScreen();
                  }
                }
              }

              document.getElementById('video-autofin').onclick = function(){
               
                toggleFullScreen();
                if (videoElement.paused) {
                    videoElement.play(); 
                }  else  {
                    videoElement.pause(); 
                    videoElement.width = 560; 
                }

              }
              
              document.addEventListener("keydown", function(e) {
                if (e.keyCode == 13) {
                  toggleFullScreen();
                }
              }, false);

        });
    </script>
  </body>
</html>