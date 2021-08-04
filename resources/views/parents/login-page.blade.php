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
			 	{!! Form::open(['method' => 'POST', 'route' => 'parents.login', 'class' => 'form-horizontal']) !!}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label('email', 'Email address') !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eg: foo@bar.com']) !!}
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    <small class="text-danger">{{ $errors->first('password') }}</small>
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
