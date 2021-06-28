@extends('layouts.default')

@section('styles')
<!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-tags-input/jquery.tagsinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/dropzone/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/dropify/dist/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}">
    <!-- end plugin css for this page -->

@endsection

@section('content')
<br>
<h3 class="page-title">Les Cours</h3>
<p>Créer un nouveau cours</p>
<div class="row">
    <!-- COL-MD-8  -->
    <div class="col-md-8">
        <!-- first card of md-8 -->
      <div class="card">
          <div class="card-body">
               <div class="row mt-5">
                {!! Form::open(['method' => 'POST', 'route' => ['cour.update',$cour], 'class' => 'form-horizontal' , 'files' =>true]) !!}
                    @method("PATCH")
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                {!! Form::label('title', 'Titre') !!}
                                {!! Form::text('title', $cour->title, ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('title') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
                                {!! Form::label('inputname', 'Matière') !!}
                                <select name="matiere_id" id="">
                                @foreach($matieres as $matiere)
                                <option value="{{$matiere->id}}" {{$cour->matiere_id == $matiere->id ? 'selected' : ''}}>{{$matiere->libelle}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group{{ $errors->has('classe') ? ' has-error' : '' }}">
                                {!! Form::label('inputname', 'classe') !!}
                                <select name="classe_id" id="">
                                  @foreach($classes as $classe)
                                <option value="{{$classe->id}}" {{$cour->classe_id == $classe->id ? 'selected' : ''}}>{{$classe->niveau->libelle.' ('.$classe->libelle.' )'}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                {!! Form::label('image', 'Appuyer pour remplacer l\'image de couverture') !!}
                                {!! Form::file('image') !!}
                                <small class="text-danger">{{ $errors->first('image') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('duree') ? ' has-error' : '' }}">
                                {!! Form::label('duree', 'La durée du cours ( en Heure )') !!}
                                {!! Form::number('duree', $cour->duree, ['class' => 'form-control', 'required' => 'required']) !!}
                                <small class="text-danger">{{ $errors->first('duree') }}</small>
                            </div>
                        </div>  
                    </div>
                   

                   <div class="col-md-12">
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            {!! Form::label('description', 'Brève description du cours') !!}
                            {!! Form::textarea('description', $cour->description, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button class="btn btn-primary"> sauvegader</button>
                    </div>
                 {!! Form::close() !!}
            </div> 
          </div>
      </div>

       <!-- first card of md-8 -->
        <div class="card mt-4 mb-2">
           <div class="card-body">
            {!! Form::open(['method' => 'POST', 'route' => ['cour.add_chapitre',$cour], 'class' => 'form-horizontal']) !!}
               <div class="form-group{{ $errors->has('titre') ? ' has-error' : '' }}">
                   {!! Form::label('titre', 'Ajouter un chapitre au cours  :') !!}
                   {!! Form::text('titre', null, ['class' => 'form-control', 'required' => 'required','placeholder' => 'Titre du chapitre']) !!}
                   <small class="text-danger">{{ $errors->first('titre') }}</small>
               </div>
               {!! Form::hidden('cours_id', $cour->id) !!}
               <button class="btn btn-primary">Ajouter</button>
            
            {!! Form::close() !!}

           </div>
       </div>


        <div class="card mt-4 mb-2">
           <div class="card-body">
            <table class="table table-responsive">
                <thead>
                    <th width="80%">Titre du chapitre</th>
                    <th width="20%">Actions</th>
                </thead>
                <tbody>
                    @foreach($cour->chapitres as $chapitre)
                    <tr>
                        <td>{{$chapitre->title}}</td>
                        <td>
                            <a href="#" class="btn btn-primary"> <i class="fa fa-movi"></i> ajouter une leçon</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           </div>
       </div>



    </div>
     <!-- COL-MD-8  -->

    <!-- COL-MD-4  -->
    <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="head">
              <h5 class="mb-2">Images</h5>
          </div>
            <br>
            <style>
              .choose .image{
                height: 180px;
                position: relative;
              }
              .choose .image img{
                width: 100%;
                height: 100%;

                object-fit: cover;
                object-position: center;
              }
            </style>
            <div class="row choose">
              <div class="col-md-12">
                <div class="image">
                <img src="{{ asset($cour->image) }}" class="card-img-top" alt=""></div>
                <br>
              </div>
              {!! Form::open(['method' => 'POST', 'route' => ['cour.update_image',$cour], 'class' => 'form-horizontal']) !!}
                    @method('PATCH')
                    <input type="file" name="image"  class="border" required />

                <div class="mt-2">
                   <button class="btn btn-primary">Charger/Modifier</button>
                </div>
              
              
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        @if($cour->video_intro)
        <div class="card mt-4">
           <video controls width="100%">
            <source src="{{ asset($cour->video_intro) }}"
                type="video/{{pathinfo($cour->video_intro ,PATHINFO_EXTENSION)}}">
            </video>
        </div>
        @endif

        <div class="card mt-4">
           <div class="card-body">
            {!! Form::open(['method' => 'POST', 'route' => ['cour.add_video',$cour], 'class' => 'form-horizontal' ,'files' => true]) !!}
                @method('PATCH')
                <label for="myDropify">Charger la video introductive du cours :</label>
                <input type="file" name="video_intro"  class="border" required />
            
                <div class="">
                   <button class="btn btn-primary mt-4">Charger/Modifier</button>
                </div>
            
            {!! Form::close() !!}
           </div>
        </div>
    </div>

</div>




     
@endsection

@section('scripts')
<!-- plugin js for this page -->
    <script src="{{ asset('assets/vendors/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/dropify/dist/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
    <!-- end plugin js for this page -->
<!-- custom js for this page -->
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/js/inputmask.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/js/tags-input.js') }}"></script>
    <script src="{{ asset('assets/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('assets/js/timepicker.js') }}"></script>
<!-- end custom js for this page -->

@endsection

