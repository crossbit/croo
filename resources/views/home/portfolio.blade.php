@extends('layout')

@section('content')
<div class="wrapper">

    <div class="container">
        <div class="row">
            
            <div class="col-sm-3">
                <!-- Categories -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul id="filters">
                            @foreach ($categories as $category)
                            <li><a href="#" data-filter="*">{{$category->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="row" id="isotope-container">
                    @foreach ($images as $image)
                    <div class="col-sm-6 col-md-6 col-lg-4 isotope-item grafika">
                        <div class="portfolio-item">
                            <div class="portfolio-thumbnail">
                                <img class="img-responsive" src="{{$image->img_path}}" alt="...">
                                <div class="mask">
                                    <p>
                                        <a href= "{{$image->img_path}}" data-lightbox="template_showcase"><i class="fa fa-search-plus fa-2x"></i></a>
                                        <a href="/portfolio/show/{{$image->id}}"><i class="fa fa-info-circle fa-2x"></i></a>
                                    </p>
                                </div>
                            </div> 
                        </div> 
                    </div>
                    @endforeach

                </div>
            </div>

        </div> <!-- / .row -->
    </div> <!-- / .container -->

</div> <!-- / .wrapper -->

@endsection



