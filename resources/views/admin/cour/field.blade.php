<div class="row">

	<div class="col-md-12">
		<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
		    {!! Form::label('title', 'Titre') !!}
		    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required','placeholder' => 'Titre du cours ']) !!}
		    <small class="text-danger">{{ $errors->first('title') }}</small>
		</div>
	</div>

	<div class="col-md-4">
		<div class="form-group{{ $errors->has('matiere_id') ? ' has-error' : '' }}">
		    {!! Form::label('matiere_id', 'Matière ') !!}
		  	<select name="matiere_id" id="matiere_id">
		  		@foreach($matieres as $matiere)
		  		<option value="{{$matiere->id}}">{{$matiere->libelle}}</option>
		  		@endforeach
		  	</select>
		    <small class="text-danger">{{ $errors->first('matiere_id') }}</small>
		</div>
	</div>

	<div class="col-md-4">
		<div class="form-group{{ $errors->has('matiere_id') ? ' has-error' : '' }}">
		    {!! Form::label('classe_id', 'Classes ') !!}
		  	<select name="classe_id" id="classe_id">
		  		@foreach($classes as $classe)
		  		<option value="{{$classe->id}}">{{$classe->niveau->libelle.' ('.$classe->libelle.' )'}}</option>
		  		@endforeach
		  	</select>
		    <small class="text-danger">{{ $errors->first('matiere_id') }}</small>
		</div>
	</div>
	 
	<div class="col-md-4">
	<div class="form-group{{ $errors->has('heure') ? ' has-error' : '' }}">
	    {!! Form::label('heure', 'Durée du cours ( en Heure)') !!}
	    {!! Form::number('heure', null, ['class' => 'form-control', 'placeholder' => 'Durée en heure']) !!}
	    <small class="text-danger">{{ $errors->first('heure') }}</small>
	</div>
	</div>

	<div class="col-md-12">
		<label for="myDropify">Image du cours</label>
		<input type="file" name="image" id="myDropify" class="border" required />
	</div>



	<div class="col-md-12">
		<div class="form-group">
			<label for="description">Description</label>
				<textarea placeholder="Ajouter une description brève" required name="description" class="form-control" id="description" rows="10"></textarea>
		</div>
	</div>

	<div class="col-md-4">
		<select name="active" id="">
			<option value="1">active</option>
			<option value="0">inactif</option>
		</select>
	</div>

	<div class="col-md-12 mt-4">
		<button type="submit" class="btn btn-primary mr-2">Ajouter</button>
		<a href="" class="btn btn-light">Annuler</a>
	</div>

	


</div>
