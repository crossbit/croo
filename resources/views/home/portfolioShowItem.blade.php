@extends('layout')
@section('content')
<!-- Wrapper -->
<div class="wrapper">
    <div class="container">
        <div class="row">
            @foreach ($image as $img)
            <div class="col-sm-6">
                <div class="portfolio-slideshow">
                    <!-- Image Carousel -->
                    <div id="portfolio-slideshow" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#portfolio-slideshow" data-slide-to="0" class="active"></li>
                            <li data-target="#portfolio-slideshow" data-slide-to="1"></li>
                            <li data-target="#portfolio-slideshow" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{$img->img_path}}" class="img-responsive" alt="...">
                            </div>
                            <div class="item">
                                <img src="{{$img->img_path2}}" class="img-responsive" alt="...">
                            </div>
                            <div class="item">
                                <img src="img/general-3.jpg" class="img-responsive" alt="...">
                            </div>
                            <div class="item">
                                <img src="img/general-4.jpg" class="img-responsive" alt="...">
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="carousel-arrow carousel-arrow-prev" href="#portfolio-slideshow" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-arrow carousel-arrow-next" href="#portfolio-slideshow" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-sm-6">

                <h3 class="headline second-child"><span>Pellentesque elementum dolor</span></h3>
                <p>Integer sodales, lectus et elementum volutpat, ipsum purus tristique dolor, non scelerisque diam sem id neque. Etiam sit amet eros magna. Mauris purus nunc, venenatis vitae erat ac, sagittis consectetur dolor.</p>
                <br />
                <h4 class="headline"><span>File Info</span></h4>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Category<td>
                            <td>Modernism</td>
                        </tr>
                        <tr>
                            <td>File Size<td>
                            <td>1Mb</td>
                        </tr>
                        <tr>
                            <td>License<td>
                            <td>All Rights Reserved</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-12">
                <h3 class="headline"><span>Latest Items</span></h3>
            </div>
            <div class="col-sm-3">
                <div class="portfolio-item">
                    <div class="portfolio-thumbnail">
                        <img class="img-responsive" src="img/general-1.jpg" alt="...">
                        <div class="mask">
                            <p>
                                <a href="img/general-1.jpg" data-lightbox="template_showcase"><i class="fa fa-search-plus fa-2x"></i></a>
                                <a href="portfolio-item.html"><i class="fa fa-info-circle fa-2x"></i></a>
                            </p>
                        </div>
                    </div>
                </div> <!-- / .portfolio-item -->
            </div>
            <div class="col-sm-3">
                <div class="portfolio-item">
                    <div class="portfolio-thumbnail">
                        <img class="img-responsive" src="img/general-2.jpg" alt="...">
                        <div class="mask">
                            <p>
                                <a href="img/general-2.jpg" data-lightbox="template_showcase"><i class="fa fa-search-plus fa-2x"></i></a>
                                <a href="portfolio-item.html"><i class="fa fa-info-circle fa-2x"></i></a>
                            </p>
                        </div>
                    </div>
                </div> <!-- / .portfolio-item -->
            </div>
            <div class="col-sm-3">
                <div class="portfolio-item">
                    <div class="portfolio-thumbnail">
                        <img class="img-responsive" src="img/general-3.jpg" alt="...">
                        <div class="mask">
                            <p>
                                <a href="img/general-3.jpg" data-lightbox="template_showcase"><i class="fa fa-search-plus fa-2x"></i></a>
                                <a href="portfolio-item.html"><i class="fa fa-info-circle fa-2x"></i></a>
                            </p>
                        </div>
                    </div>
                </div> <!-- / .portfolio-item -->
            </div>
            <div class="col-sm-3 isotope-item">
                <div class="portfolio-item">
                    <div class="portfolio-thumbnail">
                        <img class="img-responsive" src="img/general-4.jpg" alt="...">
                        <div class="mask">
                            <p>
                                <a href="img/general-2.jpg" data-lightbox="template_showcase"><i class="fa fa-search-plus fa-2x"></i></a>
                                <a href="portfolio-item.html"><i class="fa fa-info-circle fa-2x"></i></a>
                            </p>
                        </div>
                    </div>
                </div> <!-- / .portfolio-item -->
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->

</div> <!-- / .wrapper -->
@endsection