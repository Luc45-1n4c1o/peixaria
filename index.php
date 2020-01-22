<!doctype html>

<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
        <link rel="stylesheet" href="style/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/hover.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />

        <title>Início - Josimar Pescados</title>
    </head>

    <body>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">

            <div class="container">

                <?php include 'view/menu.php'; ?>

            </div>

        </nav>

        <!--Carousel Slider Show-->
        <?php include 'view/carousel.php'; ?>

        <!--container principal do site - relativo ao main-->
        <div class="container">

            <div class="row">
                <div class="col-12 text-center my-5 text-primary">
                <h1 class="display-3"><i class="fas fa-fish"></i>Josimar Pescados</h1>
                <p class="lead text-dark">PEIXARIA COM OS MELHORES FRUTOS DO MAR SEMPRE FRESQUINHOS PARA VOCÊ NOSSO CLIENTE ;)</p>
                </div>
            </div>

            <div class="row mb-5">
                <!--navbar menu esquerdo-->
                <div class="col-sm-6 col-md-4 mb-3">
                    
                    <?php include 'view/historia.php'; ?>

                </div>

                <div class="col-sm-6 col-md-8 col-lg-8">
                    
                    <?php include 'view/localizacao.php'; ?>
                    
                </div>

            </div>

            <hr>

            <!--cards-->
            <?php include 'view/products_cards.php'; ?>

        </div>

        <!--Jumbotron-->
        <div class="jumbotron jumbotron-fluid">

            <div class="container">

                <?php include 'view/jumbotron_content.php'; ?>

            </div>

        </div>

        <!--Formulario de Contato-->
        <div class="container">

            <div class="row">

                <div class="col-12 text-center my-5">

                    <?php include 'view/form/form_title.php'; ?>

                </div>

            </div>

            <div class="row justify-content-center mb-5">

                <div class="col-sm-12 col-md-10 col-lg-8">

                    <?php include 'view/form/form_body.php'; ?>

                </div>

            </div>

            <!--footer-->
            <?php include 'view/footer.php'; ?>

        </div>

        <!--botao whatsapp-->
        <?php include 'view/buttons/btn_whatsapp.php'; ?>

        <!--botao de volta ao topo-->
        <?php include 'view/buttons/btn_back_to_up.php'; ?>

        <!--modal-popup--> 
        <?php include 'view/modal_popup.php'; ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>

        <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        });

        $(document).ready(function() {
            $('#subir').click(function(){
            $('html, body').animate({scrollTop:0}, 'slow');
            return false;
            });
        });
        </script>

        <script>
        window.onload=function(){
            $('.slider').slick({
            autoplay:true,
            autoplaySpeed:1500,
            arrows:true,
            prevArrow:'<button type="button" class="slick-prev"></button>',
            nextArrow:'<button type="button" class="slick-next"></button>',
            centerMode:true,
            slidesToShow:4,
            slidesToScroll:1
            });
        };
        </script>

  </body>

</html>