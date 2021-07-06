<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<style>
	.col-8{
		margin-top: 90px;
	}


	</style>
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-8">
			 <div class="row">
			 	{!! Form::open(['method' => 'POST', 'route' => 'parents.store', 'class' => 'form-horizontal']) !!}

			 	    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			 	        {!! Form::label('name', 'Nom') !!}
			 	        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
			 	        <small class="text-danger">{{ $errors->first('name') }}</small>
			 	    </div>
			 	    <div class="form-group{{ $errors->has('prenoms') ? ' has-error' : '' }}">
			 	        {!! Form::label('prenoms', 'Prenoms') !!}
			 	        {!! Form::text('prenoms', null, ['class' => 'form-control', 'required' => 'required']) !!}
			 	        <small class="text-danger">{{ $errors->first('prenoms') }}</small>
			 	    </div>
			 	    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			 	        {!! Form::label('email', 'Email address') !!}
			 	        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'eg: foo@bar.com']) !!}
			 	        <small class="text-danger">{{ $errors->first('email') }}</small>
			 	    </div>
			 	    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
			 	        {!! Form::label('phone', 'Telephone') !!}
			 	        {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
			 	        <small class="text-danger">{{ $errors->first('phone') }}</small>
			 	    </div>



                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                        {!! Form::label('password-confirm', 'password-confirm') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('password-confirm') }}</small>
                    </div>





			 	    <div class="btn-group pull-right">
			 	        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
			 	        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
			 	    </div>

			 	{!! Form::close() !!}
			 </div>
		</div>
	</div>
</div>


</body>
</html>
