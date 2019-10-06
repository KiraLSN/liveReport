<?php

if(isset($_GET['codigo'])){
    $codigo = $_GET['codigo'];
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>CheckList - AGV</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">
    <!-- ICONE DE ATALHOS -->
    <link rel="apple-touch-icon" href="images/ICONETRAI.png" type="image/x-icon" />
    <link rel="shortcut icon" href="images/ICONETRAI.png" type="image/x-icon" />

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.php" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php">
                        <h2>AGV CheckList</h2>
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="current-item"><a href="./index.php">Home</a></li>


                                <li><a href="#">Reatórios</a>
                                    <ul class="dropdown">

                                        <li><a href="report-diario.php">Reatório Diario </a></li>
                                        <li><a href="report-mensal.php">- Relatorio Mensal</a></li>
                                        <li><a href="report.php">- Relatorio Geral</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Intruções</a>
                                    <ul class="dropdown">
                                        <li><a href="./blog.html">- Uso do Sistema</a></li>
                                        <li><a href="./single-blog.html">- Procedimentos de Manutenção do AGV</a></li>
                                    </ul>
                                </li>
                                <li><a href="./contact.html">Contatos</a></li>
                            </ul>




                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">



        <!-- Single Welcome Slide -->

        <!-- Background Curve -->
        <div class="background-curve">
            <img src="./img/core-img/curve-1.png" alt="" width="300">
        </div>








    </section>
    <!-- ***** Welcome Area End ***** -->








    <!-- ***** Blog Area Start ***** -->
    <section class="uza-blog-area">

        <!-- Background Curve -->

        <div class="blog-bg-curve">
            <img src="./img/core-img/curve-4.png">
        </div>




        <div class="container">








            <?php 
                                    
                                    ?>
            <div class="row">

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">

                    <!-- Post Content -->

                    <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/8.jpg);">

                        <div id="formulario" class="post-content">
                            <form method="post" action="formCheck.php">
                                <span class="post-date" id="datou">23</span>
                                <h3 id="numcar">
                                    <label>Check List Carro <?php echo $codigo; ?></label>
                                </h3>
                                <input type="text" id="codigo" name="codigo" value="<?php echo $codigo; ?>" hidden>
                                <div>
                                    <input type="checkbox" id="alimentacao" checked name="alimentacao" onclick="justify()">
                                    <label for="alimentacao">Verifique se a bateria, carregador e cabos estão funcionando adequadamente.</label>
                                    <input type="text" id="justali" name="justali" placeholder="Justifique: " style=" display= none">
                                </div>
                                <div>
                                    <input type="checkbox" id="otico" checked name="otico" onclick="justify()">
                                    <label for="otico">Verifique se os sensores óticos estão funcionando adequadamente (sensor de presença).</label>
                                    <input type="text" id="justotic" name="justotic" placeholder="Justifique: " style=" display= none">
                                </div>
                                <div>
                                    <input type="checkbox" id="mecanico" checked name="mecanico" onclick="justify()">
                                    <label for="mecanico">Verifique se os sensores mecânicos estão funcionando adequadamente (barramecânica).</label>
                                    <input type="text" id="justmecanic" name="justmecanic" placeholder="Justifique: " style=" display= none">
                                </div>
                                <div>
                                    <input type="checkbox" id="fita" checked name="fita" onclick="justify()">
                                    <label for="fita">Verifique se o caminho da fita reflexiva que devem estar completos e em ótimas condições.</label>
                                    <input type="text" id="justfita" name="justfita" placeholder="Justifique: " style=" display= none">
                                </div>
                                <div>
                                    <input type="checkbox" id="integridade" checked name="integridade" onclick="justify()">
                                    <label for="integridade">Revise o AGV. Ele precisa estar com os parafusos, botões e identificações completas.</label>
                                    <input type="text" id="justintegro" name="justintegro" placeholder="Justifique: " style=" display= none">
                                </div>
                                <div>
                                    <input type="checkbox" id="sinalizacao" checked name="sinalizacao" onclick="justify()">
                                    <label for="sinalizacao">Sinalização sonora deve estar funcionando adequadamente.</label>
                                    <input type="text" id="justsinal" name="justsinal" placeholder="Justifique: " style=" display= none">
                                </div>
                                <div>
                                    <input type="checkbox" id="conservacao" checked name="conservacao" onclick="justify()">
                                    <label for="conservacao">Verifique o estado de conservação do AGV.</label>
                                    <input type="text" id="justconserv" name="justconserv" placeholder="Justifique: " style=" display= none">
                                </div>

                                <div class="col-12">
                                    <button id="btnSend" name="btnSend" type="submit" class="btn uza-btn btn-3 mt-15">Enviar Check List</button>
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>


        <span id="teste"></span>

    </section>
    <!-- ***** Blog Area End ***** -->

    <script>
        document.getElementById("datou").value = new Date().getFullYear();

        var alimentacao = document.getElementById("alimentacao");
        var otico = document.getElementById("otico");
        var mecanico = document.getElementById("mecanico");
        var fita = document.getElementById("fita");
        var integridade = document.getElementById("integridade");
        var sinalizacao = document.getElementById("sinalizacao");
        var conservacao = document.getElementById("conservacao");

        document.getElementById("justali").style.display = "none";
        document.getElementById("justotic").style.display = "none";
        document.getElementById("justmecanic").style.display = "none";
        document.getElementById("justfita").style.display = "none";
        document.getElementById("justintegro").style.display = "none";
        document.getElementById("justsinal").style.display = "none";
        document.getElementById("justconserv").style.display = "none";

        function justify() {
            if (alimentacao.checked) {
                document.getElementById("justali").style.display = "none";
            } else {
                document.getElementById("justali").style.display = "block";
            }

            if (otico.checked) {
                document.getElementById("justotic").style.display = "none";
            } else {
                document.getElementById("justotic").style.display = "block";
            }

            if (mecanico.checked) {
                document.getElementById("justmecanic").style.display = "none";
            } else {
                document.getElementById("justmecanic").style.display = "block";
            }

            if (fita.checked) {
                document.getElementById("justfita").style.display = "none";
            } else {
                document.getElementById("justfita").style.display = "block";
            }

            if (integridade.checked) {
                document.getElementById("justintegro").style.display = "none";
            } else {
                document.getElementById("justintegro").style.display = "block";
            }

            if (sinalizacao.checked) {
                document.getElementById("justsinal").style.display = "none";
            } else {
                document.getElementById("justsinal").style.display = "block";
            }

            if (conservacao.checked) {
                document.getElementById("justconserv").style.display = "none";
            } else {
                document.getElementById("justconserv").style.display = "block";
            }

        }

    </script>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">

            <div class="row" style="margin-bottom: 30px;">

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());

                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>

        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/jquery-ui.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/main.js"></script>
    <script src="js/check.js"></script>




</body>

</html>