<!DOCTYPE html>
<?php  $version = date('YmdHis'); ?>
<html lang="pt-br">
<head>
  <title>Autofin </title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="Autofin"> 


<link rel="stylesheet" href="assets/web/css/bootstrap.min.css?<?php echo $version ?>">
<link rel="stylesheet" href="assets/web/css/animate.css?<?php echo $version ?>">
<link rel="stylesheet" href="assets/web/css/main.css?<?php echo $version ?>">

<!--[if lt IE 9]>
    <script src="assets/web/js/vendor/html5-3.6-respond-1.4.2.min.js?<?php echo $version ?>"></script>
<![endif]-->
<link rel="icon" href="assets/icons/favicon-autofin.ico" type="image/x-icon" />
<link rel="shortcut icon" href="assets/icons/favicon-autofin.ico" type="image/x-icon">

<script src="assets/web/js/vendor/jquery-1.11.2.min.js?<?php echo $version ?>"></script>
<script src="assets/web/js/vendor/bootstrap.min.js?<?php echo $version ?>"></script>
<script src="assets/web/js/vendor/fullPage.min.js?<?php echo $version ?>"></script> 




</head>
<body>

  <div id="cover-page"></div>

  <header class="header animated fadeInDown">

    <div class="my-container" id="menu">
      <a class="nav-item " data-key="2" href="#portal-ces"> PORTAL CES </a>
      <a class="nav-item " data-key="3" href="#trinidad"> TRINIDAD </a>
      <a class="nav-item " data-key="4" href="#panal"> PANAL </a>
      <a class="nav-item  logo" data-key="0" href="#main"> <img src="assets/img/logotipo-autofin-blanco.svg" width="155" height="55" alt=""> </a>
      <a class="nav-item " data-key="5" href="#araña"> ARAÑA </a>
      <a class="nav-item " data-key="6" href="#mi-autofin"> MI AUTOFIN </a>
      <a class="nav-item " data-key="7" href="#fuerza"> FUERZA </a>
    </div>

    <div id="menu-responsive" class="">
      <div class="row">
        <div class="col-sm-6 col-xs-6">
          <a class="" data-key="0" href="#main"> <img src="assets/img/logotipo-autofin-blanco.svg" width="155" height="55" alt=""> </a>
        </div>

        <div class="col-sm-6 col-xs-6">
          <a class="a-menu-res2" href="#"> <img class="img-menu-res2" src="assets/icons/menu-responsive.svg" width="35" alt=""> </a>
        </div>

        <div class="col-sm-12 col-xs-12 animated fadeIn" id="ul-menu-res2">
          <ul>
            <li class="li-menu-res2">
              <a class="" data-key="2" href="#portal-ces"> PORTAL CES </a>
            </li>
            <li class="li-menu-res2">
              <a class="" data-key="3" href="#trinidad"> TRINIDAD </a>
            </li>
            <li class="li-menu-res2">
              <a class="" data-key="4" href="#panal"> PANAL </a>
            </li>
            <li class="li-menu-res2">
              <a class="" data-key="5" href="#araña"> ARAÑA </a>
            </li>
            <li class="li-menu-res2">
              <a class="" data-key="6" href="#mi-autofin"> MI AUTOFIN </a>
            </li>
            <li class="li-menu-res2">
              <a class="" data-key="7" href="#fuerza"> FUERZA </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
  </header>


  <div id="main-content">


            <section id="main" class="section">
              <?php include 'main.php'; ?>
            </section> 

            <section id="comencemos" class="section">
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

            <section class="  section " id="fuerza">
                <?php include 'fuerza.php'; ?>
            </section>        

</div>

<div class="footer animated fadeInUp" style="display: none;" id="footer" >

      <div class="bg-black"  id="footer-contact">

        <div class="my-container ">
          <div class="row ">
              <div class="col-lg-5 col-xs-6" >
                  <img src="assets/img/logotipo-autofin-blanco.svg" width="160" height="60" alt="">  
              </div>
              <div class="col-lg-7 col-xs-6">
                  <p class="">Contáctanos</p>
                  <p class="text-yellow ">+562 2235 0850</p>
                  <p class="">Lunes a Viernes de 09:00 a 18:00 hrs.</p>
                  <p class="">Rosario Norte 532. Oficina 1503, piso 15. Las Condes.</p>                
              </div>
          </div>
        </div>
      </div>
      <div class="bg-yellow" id="footer-social">
            
              <div class="my-container text-right">
                <ul>
                  <li class=" li-footer">
                    <a class="" href="http://www.autoﬁn.cl/blog/" target="_blank"><img src="assets/icons/icono-blog.svg"  width="25" height="25" alt=""></a>
                  </li>
                  <li class=" li-footer">
                    <a class="" href="https://www.facebook.com/autoﬁnchile" target="_blank"><img src="assets/icons/icono-facebook.svg"  width="25" height="25" alt=""></a>
                  </li>
                  <li class=" li-footer">
                    <a class="" href="https://www.instagram.com/autofin_chile/?hl=es-la" target="_blank"><img src="assets/icons/icono-instagram.svg"  width="25" height="25" alt=""></a>
                  </li>
                </ul>
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
    onLeave: function(index){
    if(index == 7){
        $("#footer").hide();
        $("#fuerza").removeClass("fin");
      }
    },
    afterLoad:function(index){ 

      if(index != 7){
        $("#footer").hide();
        $("#fuerza").removeClass("fin");
      } else {
        setTimeout(function() {
          $("#fuerza").addClass("fin");
          $("#footer").show();
        }, 1200);
        
      }

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

      $('.carousel_productos').carousel({
        interval: 5000
      });

    }});

    $(".btn-comencemos").click(function(e) {
      e.preventDefault();
      page.moveTo(1);
      
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

    $(".control-to-miautofin").click(function(e) {
      e.preventDefault();
        $("#novedades-div").addClass("hide");
        $("#mi-autofin-div").removeClass("hide");              
    });

    $("#btn-novedades").click(function(e) {
      e.preventDefault();
      $("#mi-autofin-div").addClass("hide");
      $("#novedades-div").removeClass("hide");
    });


    $(".nav-item").click(function(e) {
      e.preventDefault();

      var num = parseInt($(this).data('key'));
      page.moveTo(num);
      $("#main").removeClass("comencemos");
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

    $(".a-menu-res2").click(function(e) {
      e.preventDefault();
      $("#ul-menu-res2").toggle();
    });


   

    

  });
</script>

</body> 
</html>