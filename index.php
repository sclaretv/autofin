<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Autofin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS personalizado -->
    <link rel="stylesheet" type="text/css" href="assets/css/style-main.css"  >

    <!--<script type="text/javascript" src="assets/js/index.js"></script>-->
  </head>
  <body>

    <!-- menu -->
    <?php  include 'menu.php'; ?>
    
    <!-- contenido -->
    
    <section class="container-fluid" id="main">
        <?php include 'main.php'; ?>
    </section>
    

    <section class="container-fluid" id="comencemos">
        <?php include 'comencemos.php'; ?>
    </section>        

    <!-- secciones de productos -->
    <section class="container-fluid sections" id="portal-ces">
        <?php include 'portal-ces.php'; ?>
    </section>        
    <section class="container-fluid sections" id="trinidad">
        <?php //include 'sections.php'; ?>
    </section>        
    <section class="container-fluid sections" id="panal">
        <?php include 'panal.php'; ?>
    </section>        
    <section class="container-fluid sections" id="araña">
        <?php //include 'sections.php'; ?>
    </section>        
    <section class="container-fluid sections" id="mi-autofin">
        <?php include 'mi-autofin.php'; ?>
    </section>        
    <section class="container-fluid sections" id="fuerza">
        <?php //include 'sections.php'; ?>
    </section>        

    <section class="container-fluid sections" id="footer">
        <?php //include 'footer.php'; ?>
    </section>        
    

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() { 

           $('.carousel').carousel({
              interval: 7000
            });


            function fullscreen (e){
                  if (e.webkitRequestFullScreen) {
                    e.webkitRequestFullScreen();
                  } else if(e.mozRequestFullScreen) {
                    e.mozRequestFullScreen();
                  }
              }
            document.getElementById('botonparaactivar').onclick = function(){
                fullscreen(document.getElementById('video-autofin'));
            }

        });
    </script>
  </body>
</html>