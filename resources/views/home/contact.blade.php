@extends('layout')

@section('content')
<!-- Wrapper -->
<div class="wrapper">

    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                {!! Form:: open(array()) !!} 

                <ul class="errors">
                    @foreach($errors->all('<li>:message</li>') as $message)
                    {{ $message }}
                    @endforeach
                </ul>

                <div class="form-group">
                    {!! Form::label('Your Name') !!}
                    {!! Form::text('name', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Your name')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Your E-mail Address') !!}
                    {!! Form::text('email', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Your e-mail address')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Your Message') !!}
                    {!! Form::textarea('message', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Your message')) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Contact Us!', 
                    array('class'=>'btn btn-primary')) !!}
                </div>
                {!! Form::close() !!}
            </div>        

            <div class="col-sm-4">
                <div class='col-sm-12'>
                    <div class="row">
                        <h3 class="headline second-child"><span>Zadzwoń</span></h3>
                        <p>
                            Telefon: +48 518 966 632<br />
                            Email: <a href="#">kontakt@croo.com.pl</a>
                        </p>
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <h3 class="headline second-child"><span>Dane firmy</span></h3>
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

@endsection
