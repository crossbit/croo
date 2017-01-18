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

        <header style="height:80vh;">
            <div class="header-content">
                <!-- Wrapper -->
                <div class="wrapper">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6" style="text-align: left;">

                                {!! Form:: open(array()) !!} 

                                <ul class="errors">
                                    @foreach($errors->all('<li>:message</li>') as $message)
                                    {{ $message }}
                                    @endforeach
                                </ul>

                                <div class="form-group">
                                    {!! Form::label('Imię') !!}
                                    {!! Form::text('name', null, 
                                    array('required', 
                                    'class'=>'form-control', 
                                    'placeholder'=>'Imię')) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('E-mail') !!}
                                    {!! Form::text('email', null, 
                                    array('required', 
                                    'class'=>'form-control', 
                                    'placeholder'=>'E-mail ')) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('Wiadomość') !!}
                                    {!! Form::textarea('message', null, 
                                    array('required', 
                                    'class'=>'form-control', 
                                    'placeholder'=>'Wiadomość')) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::submit('Wyślij!', 
                                    array('class'=>'btn btn-primary')) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>        

                            <div class="col-sm-offset-1 col-sm-4" style="background: rgba(255,0,0, 0.1); margin-top:3.5%;  ">
                                <div class='col-sm-12'>
                                    <div class="row">
                                        <h3 class="headline second-child">Zadzwoń</h3>
                                        <p>
                                            Telefon: +48 518 966 632<br />
                                            Email: <a href="#">kontakt@croo.com.pl</a>
                                        </p>
                                    </div>
                                    <br/>
                                    <br/>
                                    <div class="row">
                                        <h3 class="headline second-child" >Dane firmy</h3>
                                        <p>
                                            San Francisco, CA 94101<br />
                                            1987 Lincoln Street<br />
                                            Phone: +0 000 000 00 00<br />
                                            Fax: +0 000 000 00 00<br />
                                            Email: <a href="#">admin@mysite.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- / .row -->
                </div> <!-- / .container -->

            </div> <!-- / .wrapper -->          
        </div>
    </header>
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
