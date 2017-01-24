{!! \Form::open(['route' => 'admin.postLogin']) !!}

{!! \Form::text('email') !!}
{!! \Form::password('password') !!}
{!! \Form::submit() !!}

{!! \Form::close() !!}
