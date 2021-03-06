<div class="wrapper">

    {!! Form::open(array('action' => 'PortfolioController@store', 'class'=>'form-horizontal', 'files'=>true)) !!}
    <ul class="errors">
        @foreach($errors->all(':message') as $message)
        {{ $message }}
        @endforeach
    </ul>
    <div class='form-group'>
        <div class='col-md-2'>
            {!!Form::label('name', 'Nazwa portfolio')!!}
        </div>

        <div class='col-md-10'>
            {!!Form::text('name', null)!!}
        </div>
        
        <div class='col-md-2'>
            {!!Form::label('description', 'Opis')!!}
        </div>
        <div class='col-md-10'>
            {!! Form::textarea('description', null)!!}
        </div>

        <div class='col-md-2'>
            {!!Form::label('category_id', 'Kategoria')!!}
        </div>
        <div class='col-md-10'>
            {!! Form::select('category_id', $categories, null)!!}
        </div>

        <div class='col-md-offset-2 col-md-3'>
            {!! Form::submit('Dodaj', ['class'=>'btn btn-danger'])!!}
        </div>
    </div>      
</div>

{!! Form::close() !!}

