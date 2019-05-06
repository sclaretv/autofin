<!DOCTYPE html>
<?php  $version = date('YmdHis'); ?>
<html lang="pt-br">
<head>
  <title> </title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="A Simple Full Page Scroll"> 


<link rel="stylesheet" href="assets/web/css/bootstrap.min.css?<?php echo $version ?>">
<link rel="stylesheet" href="assets/web/css/main.css?<?php echo $version ?>">

<!--[if lt IE 9]>
    <script src="assets/web/js/vendor/html5-3.6-respond-1.4.2.min.js?<?php echo $version ?>"></script>
<![endif]-->


<script src="assets/web/js/vendor/jquery-1.11.2.min.js?<?php echo $version ?>"></script>
<script src="assets/web/js/vendor/bootstrap.min.js?<?php echo $version ?>"></script>
<script src="assets/web/js/vendor/fullPage.min.js?<?php echo $version ?>"></script> 




</head>
<body>

  <div id="cover-page"></div>

  <header class="header">
    
  </header>
  <div id="main-content">


            <section id="main" class="section">
              <?php include 'main.php'; ?>

              <?php include 'comencemos.php'; ?>
            </section>        

            <!-- secciones de productos -->
            <section class="  section " id="portal-ces">
                <?php include 'portal-ces.php'; ?>
            </section>        
            <section class="  section " id="trinidad">
                <?php include 'trinidad.php'; ?>
            </section>        
            <section class="  section " id="panal">
                <?php include 'panal.php'; ?>
            </section>        
            <section class="  section " id="araña">
                <?php include 'spider.php'; ?>
            </section>        
            <section class="  section " id="mi-autofin">
                <?php include 'mi-autofin.php'; ?>
            </section>

            <section class="  section " id="mi-autofingps">
                <?php include 'novedades/mi-autofingps.php'; ?>
            </section>

            <section class="  section " id="fuerza">
                <?php include 'fuerza.php'; ?>
            </section>        

            <section class="  section" id="fuerza-fin">
                <?php include 'footer.php'; ?>
            </section>
</div>
<div class="footer" id="footer" >
  <div class="container-fluid ">
        <div class="row bg-black" id="footer-contact">
            <div class="col-lg-9 col-md-12" >
              <div class="imagen-autofin">
                <img src="assets/img/logotipo-autofin-blanco.svg" width="160" height="60" alt="">  
              </div>
            </div>
            <div class="col-lg-2 col-sm-12">
              <div class="contact-autofin">
                <p class="">Contáctanos</p>
                <p class="text-yellow ">+562 2235 0850</p>
                <p class="">Lunes a Viernes de 09:00 a 18:00 hrs.</p>
                <p class="">Rosario Norte 532. Oficina 1503, piso 15. Las Condes.</p>
              </div>
              
            </div>
        </div>

        <div class="row bg-yellow" id="footer-social">
          <nav class="navbar col-lg-12 ">
            <div class="container">
              <ul class="navbar-nav ">
                <li class="nav-item li-footer">
                  <a class="navbar-brand" href="http://www.autoﬁn.cl/blog/" target="_blank"><img src="assets/icons/icono-blog.svg"  width="25" height="25" alt=""></a>
                </li>
                <li class="nav-item li-footer">
                  <a class="navbar-brand" href="https://www.facebook.com/autoﬁnchile" target="_blank"><img src="assets/icons/icono-facebook.svg"  width="25" height="25" alt=""></a>
                </li>
                <li class="nav-item li-footer">
                  <a class="navbar-brand" href="https://www.instagram.com/autofin_chile/?hl=es-la" target="_blank"><img src="assets/icons/icono-instagram.svg"  width="25" height="25" alt=""></a>
                </li>
              </ul>
          </div>
          </nav>       
        </div>
      </div> 
</div>

<div class="modal fade" id="my_video_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">  
      <div class="modal-body"> 
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>         
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
          </div> 
      </div> 
    </div>
  </div>
</div> 

<script type="text/javascript">
  $(document).ready(function(){
    $('#cover-page').fadeOut();
    var page = new FullPage("#main-content",{
         pagination: true,  
         animationDuration: 800,

         onLeave: function(a, b){
          console.log(a,b);
          /*if ($( "#fuerza-fin" ).hasClass( "is-active" )) {
            $("#footer").fadeIn();
          } else {
            $("#footer").hide();
          }*/

           



         },
         afterLoad:function(e){ 

          $("#control-auto").click(function() {
              $("#box-y-moto").addClass("hide");
              $("#box-y-auto").removeClass("hide");
              $(".btn-moto").removeClass("active");
              $(".btn-auto").addClass("active");
              
            });

            $("#control-moto").click(function() {
              $("#box-y-auto").addClass("hide");
              $("#box-y-moto").removeClass("hide");
              $(".btn-auto").removeClass("active");
              $(".btn-moto").addClass("active");

            });

             $(".btn-comencemos").click(function() {
              $("#main").addClass("comencemos");

            });

             $(".btn-comencemos-volver").click(function() {
              $("#main").removeClass("comencemos");

            });

             $('.carousel_productos').carousel({
              interval: 5000
            });


             var buho = false;


           

            $(".control-novedades").click(function(e) {
              e.preventDefault();
              if (buho==false) {
                $("#novedades-miautofingps").addClass("hide");
                $("#novedades-buho").removeClass("hide");
                buho=true;
              } else {
                 $("#novedades-buho").addClass("hide");
                $("#novedades-miautofingps").removeClass("hide");
                buho=false;
              }
              
            });


      }});

    $("#btn-novedades").click(function(e) {
              e.preventDefault();
              page.moveTo(5);
              
            });


    var $videoSrc;  
    $('.link-video').click(function(e) {

        e.preventDefault();
        $videoSrc = $(this).attr( "href" );
        console.log($videoSrc);
        $('#my_video_modal').modal('show');
    });


    $('#my_video_modal').on('shown.bs.modal', function (e) { 
      $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
    }).on('hide.bs.modal', function (e) { 
        $("#video").attr('src',$videoSrc); 
    }) 

  });
</script>

</body> 
</html>