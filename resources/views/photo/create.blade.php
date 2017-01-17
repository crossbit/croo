<div class="wrapper">

    {!! Form::open(array('action' => 'PhotoController@store', 'class'=>'form-horizontal', 'files'=>true)) !!}
    <ul class="errors">
        @foreach($errors->all(':message') as $message)
        {{ $message }}
        @endforeach
    </ul>
    <div class='form-group'>

        <div class='col-md-2'>
            {!!Form::label('img', 'Zdjęcie')!!}
        </div>
        <div class='col-md-10'>
            {!! Form::file('img')!!}
        </div>

        <div class='col-md-2'>
            {!!Form::label('portfolio_id', 'Portfolio')!!}
        </div>
        <div class='col-md-10'>
            {!! Form::select('portfolio_id', $portfolios, null)!!}
        </div>

        <div class='col-md-offset-2 col-md-3'>
            {!! Form::submit('Dodaj', ['class'=>'btn btn-danger'])!!}
        </div>
    </div>      
</div>

{!! Form::close() !!}

