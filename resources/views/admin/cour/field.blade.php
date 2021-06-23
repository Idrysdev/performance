<div class="row">

	<div class="col-md-12">
		<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
		    {!! Form::label('title', 'Titre') !!}
		    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required','placeholder' => 'Titre du cours ']) !!}
		    <small class="text-danger">{{ $errors->first('title') }}</small>
		</div>
	</div>

	<div class="col-md-6">
		<div class="form-group{{ $errors->has('matiere_id') ? ' has-error' : '' }}">
		    {!! Form::label('matiere_id', 'Matière ') !!}
		  	<select name="matiere_id" id="matiere_id">
		  		<option value="">Anglais</option>
		  		<option value="">Français</option>
		  	</select>
		    <small class="text-danger">{{ $errors->first('matiere_id') }}</small>
		</div>
	</div>


</div>
