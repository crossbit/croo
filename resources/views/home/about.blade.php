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
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="css/creative.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color: #fff;">
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
                    <ul class="nav navbar-nav navbar-right" >
                        <li>
                            <a  href="/" style="color:#222222 !important;">Home</a>
                        </li>
                        <li>
                            <a  href="/about" style="color:#222222 !important;">O nas</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/portfolio" style="color:#222222 !important;">Portfolio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/recruitment" style="color:#222222 !important;">Kariera</a>
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


        <aside class="bg-white">

        </aside>


        <section class="bg-primary" id="about">
            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="col-lg-6 text-center image">

                    </div>
                    <div class="col-lg-6  div-padding text-center">
                        <h2 class="section-heading">JESTEŚMY AGENCJĄ KREATYWNĄ</h2>
                        <hr class="light">
                        <p class="text-faded margin">Oferujemy pełne wsparcie dla Twojego bizneu. Nasze projekty to połączenie wielkich ideii i cyfrowych technik 
                            stosowanych do ich realizacji. Tworzymy dedykowane rozwiązania- aplikacje www, kampanie marketingowe, aplikacje mobilne... i wiele więcej.</p>
                        <a href="/about" class="page-scroll btn btn-default btn-xl sr-button">Poznaj nas!</a>
                    </div>
                </div>
            </div>
        </section>


        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Tworzymy dla najlepszych</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div>
            <div class="container clients-logo">
                <div class="row no-padding">
                    <div class="col-lg-2  text-center">
                        <div class="service-box">
                            <img src="img/clients/adamed.png">
                        </div>
                    </div>
                    <div class="col-lg-2  text-center">
                        <div class="service-box">
                            <img src="img/clients/raiffeisen.png">
                        </div>
                    </div>
                    <div class="col-lg-2  text-center">
                        <div class="service-box">
                            <img src="img/clients/glenmark.jpg">
                        </div>
                    </div>
                    <div class="col-lg-2  text-center">
                        <div class="service-box">
                            <img src="img/clients/sawa.svg">
                        </div>
                    </div>
                    <div class="col-lg-2  text-center">
                        <div class="service-box">
                            <img src="img/clients/creo.png">
                        </div>
                    </div>
                     <div class="col-lg-2  text-center">
                        <div class="service-box">
                            <img src="img/clients/alvogen.svg">
                        </div>
                    </div>
                </div> 
            </div>
        </section>

        <aside class="bg-dark">
            <div class="container text-center">
                <div class="call-to-action">

                </div>
            </div>
        </aside>

        <section class="no-padding" id="portfolio">
            <div class="container-fluid">
                <div class="row no-gutter ">
                    @foreach ($categories as $category)
                    <div class="col-lg-4 col-sm-6">
                        <a href="/portfolio/category/{{$category->id}}" class="portfolio-box">
                            <img src="../img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-name">
                                        {{$category->name}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>

        <aside class="bg-dark">
            <div class="container text-center">
                <div class="call-to-action">
                    <h2>Zobacz wszystkie nasze projekty</h2>
                    <a href="/portfolio" class="btn btn-default btn-xl sr-button">portfolio</a>
                </div>
            </div>
        </aside>

        <footer class="footer-distributed">
            <div class="footer-left">
                <p class="footer-links">
                    <a href="/">Home</a>
                    <a href="/about">O nas</a>
                    <a href="/portfolio">Portfolio</a>
                    <a href="/recruitment">Kariera</a>
                    <a href="/contact">Kontakt</a>
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