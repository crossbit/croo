@extends('admin')
@section('content')
<div class="wrapper">
    <div class='col-md-7'>
        <h3>Lista kategorii menu</h3>

        @foreach ($categories as $category)
        <p>{{$category->name}}</p>
        <a href='/admin/portfolio/category/edit/{{$category->id}}'> Edytuj</a>
        <a href='/admin/portfolio/category/delete/{{$category->id}}'>Usuń</a>
        @endforeach

    </div>

    <div class='col-md-5'> 

        <h3>Dodaj kategorie</h3>
        {!! Form::open(['url' => '/admin/portfolio/category', 'class'=>'form-horizontal', 'files'=>true]) !!}
        <div class='form-group'>
            <div class='col-md-2'>
                {!!Form::label('name', 'Nazwa kategorii')!!}
            </div>

            <div class='col-md-10'>
                {!!Form::text('name')!!}
            </div>

            <div class='col-md-offset-2 col-md-3'>
                {!! Form::submit('Dodaj', ['class'=>'btn btn-danger'])!!}
            </div>
        </div>      
    </div>
</div>

{!! Form::close() !!}
</div>
@endsection


