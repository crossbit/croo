

{!! Form::open(array('action' => 'CategoryController@store', 'class'=>'form-horizontal')) !!}

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


    <div class='col-md-offset-2 col-md-3'>
        {!! Form::submit('Dodaj', ['class'=>'btn btn-danger'])!!}
    </div>
</div>      

{!! Form::close() !!}





