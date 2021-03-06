
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
                            <a  href="/">Home</a>
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

        <section style="background-color: #E30713; min-height: 40vh">
            <div class="container">
                <div class="row">
                    <h1 id="portfolioName" style="padding-top:5%; text-align: center;">{{$category->name}}</h1>
                </div>
            </div>
        </section>
        <section class="no-padding" id="portfolio" style="padding-top:1%; ">
            <div class="container-fluid">
                <div class="row no-gutter ">

                    @foreach ($portfolios as $portfolio)
                    @foreach($portfolio->photos->slice(0, 1) as $photo)
                    <div class="col-lg-4 col-sm-6" style="min-height:36.8vh; background-image:url('{{$photo->thumbnail}}'); background-size: cover;">
                        <a href="/portfolio/{{$portfolio->id}}" class="portfolio-box" style="min-height:36.8vh;">
                            <div class="portfolio-box-caption" >
                                <div class="portfolio-box-caption-content">
                                    <div class="project-name">
                                        {{$portfolio->name}}
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    @endforeach
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

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">

                    </div>
                    <div class="col-lg-4 col-lg-offset-2 text-center">
                        <i class="fa fa-phone fa-3x sr-contact"></i>
                        <p>123-456-6789</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                        <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                    </div>
                </div>
            </div>
        </section>

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
