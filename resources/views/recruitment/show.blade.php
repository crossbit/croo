<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Creative - Start Bootstrap Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset ('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset ('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="{{ asset ('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="{{ asset ('css/creative.css')}}" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" style="background-color: #C60113;">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color: #fff; ">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <img src="{{ asset ('img/logo.png')}}" style="width:80%; height:auto;">
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" style="color:#222222;">
                        <li>
                            <a  href="/" style="color:#222222;">Home</a>
                        </li>
                        <li>
                            <a  href="/about" style="color:#222222 !important;">O nas</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/portfolio" style="color:#222222 !important;">Portfolio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/career" style="color:#222222 !important;">Kariera</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/contact" style="color:#222222 !important;">Kontakt</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <section class="no-padding">

            @foreach ($recruitment as $recruit)
            <div class="container-fluid">
                <div class="row no-gutter " style="padding-top:1%;">
                    <div class="col-sm-6" >
                        <div id= "photo" class="item active">

                        </div> 
                    </div>
                    <div class="col-sm-6 header-content-inner" style="padding-left:1%; padding-right:1%; color:rgba(255, 255, 255, 0.7);">
                        <a href="/recruitment"  style="margin-left:90%; "> <i class="fa fa-4x fa fa-times text-primary sr-icons" style="margin-top:7%;"></i></a>
                        <h1 id="portfolioName" style="padding-top:3%; ">{{$recruit->name}}</h1>

                        <h2 style="text-align: justify; padding-top:2%; padding-bottom: 1%; color:white;">Wymagania:</h2>
                        @foreach($recruit->needs as $need)
                        <li style="font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif; list-style-type: none;">{{$need->name}}</li>
                        @endforeach

                        <h2 style="text-align: justify; padding-top:1%; padding-bottom: 1%; color:white;">Zadania:</h2>
                        @foreach($recruit->tasks as $task)
                        <li style="font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif; list-style-type: none;">{{$task->name}}</li>
                        @endforeach


                        <h2 style="text-align: justify; padding-top:1%; padding-bottom: 1%; color:white;">Oferujemy:</h2>
                        @foreach($recruit->offers as $offer)
                        <li style="font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif; list-style-type: none;">{{$offer->name}}</li>
                        @endforeach

                        <p style="text-align: justify; padding-top:7%; padding-bottom: 1%; font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;">Osoby zainteresowane prosimy o 
                            przesłanie swojego CV na adres rekrutacja@croo.com.pl. Prosimy o zwarcie klauzuli: 
                            Wyrażam zgodę na przetwarzanie przez CROO SA moich danych osobowych zawartych w mojej ofercie pracy dla potrzeb niezbędnych do realizacji 
                            procesu rekrutacji zgodnie z ustawą z dnia 29 sierpnia 1997 r. o ochronie danych osobowych (tj. Dz. U. z 2014 r. poz. 1182, 1662). </p>
                    </div>
                </div> <!-- / .row -->

            </div> <!-- / .container -->

        </section>


        @endforeach
        <aside class="bg-dark">
            <div class="container text-center">
                <div class="call-to-action">
                    <h2>Chcesz zrealiować projekt?</h2>
                    <a href="/portfolio" class="btn btn-default btn-xl sr-button">skontaktuj się</a>
                </div>
            </div>
        </aside>

        <footer class="footer-distributed">

            <div class="footer-left">

                <p class="footer-links">
                    <a href="#">Home</a>
                    <a href="#">O nas</a>
                    <a href="#">Portfolio</a>
                    <a href="#">Kariera</a>
                    <a href="#">Kontakt</a>
                </p>

                <p>CROO S.A. &copy; 2017</p>
            </div>

        </footer>

        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/creative.min.js"></script>

    </body>

</html>


