<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>
fullPage.js Demo Page</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
<meta name="description" content="A Simple Full Page Scroll"> 


<link rel="stylesheet" href="assets/web/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/web/css/main.css">

<!--[if lt IE 9]>
    <script src="/assets/web/js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
<![endif]-->


<script src="assets/web/js/vendor/jquery-1.11.2.min.js"></script>
<script src="assets/web/js/vendor/bootstrap.min.js"></script>
<script src="assets/web/js/vendor/fullPage.min.js"></script> 




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
                <?php //include 'panal.php'; ?>
            </section>        
            <section class="  section " id="araña">
                <?php //include 'spider.php'; ?>
            </section>        
            <section class="  section " id="mi-autofin">
                <?php include 'mi-autofin.php'; ?>
            </section>

            

            <section class="  section  hide" id="mi-autofingps">
                <?php include 'novedades/mi-autofingps.php'; ?>
            </section>

            <section class="  section  " id="buho">
                <?php include 'novedades/buho.php'; ?>
            </section>

            <section class="  section " id="fuerza">
                <?php //include 'fuerza.php'; ?>
            </section>        

            <section class="  section" id="fuerza-fin">
                <?php //include 'footer.php'; ?>
            </section>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#cover-page').fadeOut();
    var page = new FullPage("#main-content",{
         pagination: true,  
         animationDuration: 800,
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


             $("#btn-novedades").click(function() {
              
              $("#mi-autofingps").removeClass("hide");

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


      }});

    
  });
</script>

</body> 
</html>