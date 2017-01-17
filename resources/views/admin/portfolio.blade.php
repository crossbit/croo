@extends('admin')

@section('content')
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <!-- Categories -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Kategorie
                    </div>
                    <div class="panel-body">
                        <ul id="filters">
                            @foreach ($categories as $category)


                            {{dump($category->id)}}

                            <li><a href="/admin/portfolio/category/show/{{$category->id}}" data-filter="*">{{$category->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="row" id="isotope-container">
                    <div class="col-sm-6 col-md-6 col-lg-4 isotope-item grafika">

                        @foreach($images as $img)
                        <div class="portfolio-item">
                            <div class="portfolio-thumbnail">
                                <img class="img-responsive" src="{{$img->img_path}}" alt="">
                                <div class="mask">
                                    <p>
                                        <!-- / .delete and edit -->
                                        <a href="img/produkty/grafika/Picture8.png" data-lightbox="template_showcase"><i class="fa fa-search-plus fa-2x"></i></a>
                                        <a href="grafika-boccard.html"><i class="fa fa-info-circle fa-2x"></i></a>
                                    </p>
                                </div>
                            </div> 
                        </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->

</div> <!-- / .wrapper -->

@endsection





