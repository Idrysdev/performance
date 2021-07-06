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
<h3 class="page-title">Les Details du Cours</h3>
<p>Créer un nouveau cours</p>
<div class="row">
    <!-- COL-MD-8  -->
    <div class="col-md-8">
        <div class="card mt-4">
            <div class="card-body">
                @if($cour->video_intro)
                <video controls width="100%">
                <source src="{{ asset($cour->video_intro) }}"type="video/{{pathinfo($cour->video_intro ,PATHINFO_EXTENSION)}}">
                </video>
                @endif
                {!! Form::open(['method' => 'POST', 'route' => ['cour.add_video',$cour], 'class' => 'form-horizontal' ,'files' => true]) !!}
                @method('PATCH')
                <div class="form-group">
                        <label>Charger la video introductive du cours :</label>
                        <input type="file" name="video_intro" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">charger</button>
                                </span>
                        </div>
                </div>
            
                <div class="">
                   <button class="btn btn-primary">Charger/Modifier</button>
                </div>
            
            {!! Form::close() !!}
            </div>
            
        </div>
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
                    <div class="col-md-4 mb-4">
                        <select name="active" id="">
                            <option value="1" {{$cour->active == 1 ? 'selected' : ''}}>active</option>
                            <option value="0" {{$cour->active == 0 ? 'selected' : ''}}>inactif</option>
                        </select>
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

<div id="accordion">
@foreach($cour->chapitres as $chapitre)
  <div class="card">
    <div class="card-header" id="heading{{$chapitre->id}}">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$chapitre->id}}" aria-expanded="true" aria-controls="collapse{{$chapitre->id}}">
        <span style="text-transform: uppercase;"> {{$chapitre->title}}</span>

         <button type="button" class="btn btn-primary btn-xs float-right" data-toggle="modal" data-target="#exampleModal{{$chapitre->id}}" data-whatever="@mdo"><i class="fa fa-plus"></i></button>

        </button>
      </h5>
    </div>

    <div id="collapse{{$chapitre->id}}" class="collapse " aria-labelledby="heading{{$chapitre->id}}" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-responsive">
            <thead>
                <th width="50%">Titre</th>
                <th width="10%">Video</th>
                <th width="10%">cours en pdf</th>
                <th width="10%">actions</th>
            </thead>
            <tbody>
            @foreach($chapitre->lecons as $lecon)
                <tr>
                    <td><i class="fa fa-play-circle"></i>  {{$lecon->title}}</td>
                    <td>
                        @if($lecon->video) 
                        <a href="{{ asset($lecon->video) }}"><i class="fa fa-play"></i></a>
                        @else
                        <span>N/A</span>
                        @endif
                    </td>

                    <td>
                        @if($lecon->video) 
                         <a href="{{ asset($lecon->pdf) }}"><i class="fa fa-file"></i></a>
                        @else
                        <span>N/A</span>
                        @endif
                    </td>
                    <td>
                       <a href="{{ route('chapitre.lecon.delete',[$chapitre->id,$lecon->id]) }}" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>


<div class="modal fade" id="exampleModal{{$chapitre->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une leçon a ce chapitre : {{$chapitre->title}}  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       {!! Form::open(['method' => 'POST', 'route' => ['chapitre.add_lecon',$chapitre], 'class' => 'form-horizontal' , 'files' => true]) !!}
         
          {!! Form::hidden('chapitre_id', $chapitre->id) !!}

          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
              {!! Form::label('title', 'Titre de la Leçon :') !!}
              {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'le title de la leçon']) !!}
              <small class="text-danger">{{ $errors->first('title') }}</small>
          </div>
          <div class="form-group{{ $errors->has('descriptif') ? ' has-error' : '' }}">
              {!! Form::label('descriptif', 'Descriptif de la Leçon :') !!}
              {!! Form::textarea('descriptif', null, ['class' => 'form-control', 'placeholder' => 'descriptif de la leçon']) !!}
              <small class="text-danger">{{ $errors->first('descriptif') }}</small>
          </div>
          <div class="row">
              <div class="col-md-6">
                 <div class="form-group{{ $errors->has('video') ? ' has-error' : '' }}">
                      <label>Charger la Video</label>
                        <input type="file" name="video" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">charger</button>
                                </span>
                        </div>
                     <small class="text-danger">{{ $errors->first('video') }}</small>
                 </div>
              </div>
              
              <div class="col-md-6">
                  <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                      <label>File upload</label>
                        <input type="file" name="pdf" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload pdf">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">charger</button>
                                </span>
                        </div>
                      <small class="text-danger">{{ $errors->first('pdf') }}</small>
                  </div>
              </div>
          </div>

            <button class="btn btn-success mt-4" type="submit">ajouter</button>
       {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
 

 @endforeach

</div>


    



    </div>
     <!-- COL-MD-8  -->

    <!-- COL-MD-4  -->
    <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="head">
              <h5 class="mb-2">Image de couverture</h5>
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
              {!! Form::open(['method' => 'POST', 'route' => ['cour.update_image',$cour], 'class' => 'form-horizontal', 'files' =>true]) !!}
                    @method('PATCH')
                    <div class="form-group">
                        <label>Changer l'image de couverture :</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">charger</button>
                                </span>
                        </div>
                    </div>
                    {{-- <input type="file" name="image"  class="border" required /> --}}

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
                 <div class="form-group">
                        <label>Changer la video introductive :</label>
                        <input type="file" name="video_intro" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload video">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">charger</button>
                                </span>
                        </div>
                    </div>
            
                <div class="">
                   <button class="btn btn-primary">Charger/Modifier</button>
                </div>
            
            {!! Form::close() !!}
           </div>
        </div>


        <div class="card mt-4">
            <div class="card-header">
                <h5>Ajouter des objectifs au cours</h5>
            </div>
            <div class="card-body">
               {!! Form::open(['method' => 'POST', 'route' => ['cour.add_objectif' , $cour], 'class' => 'form-horizontal']) !!}
                    {!! Form::hidden('cour_id', $cour->id) !!}
                <div class="form-group{{ $errors->has('libelle') ? ' has-error' : '' }}">
                    {!! Form::label('libelle', 'Libelle :') !!}
                    {!! Form::text('libelle', null, ['class' => 'form-control', 'required' => 'required','placeholder' => 'Libelle']) !!}
                    <small class="text-danger">{{ $errors->first('libelle') }}</small>
                </div>
                <div class="">
                   <button class="btn btn-primary">Créer</button>
                </div>
               {!! Form::close() !!}
            </div>
        </div>
       @if($cour->objectifs == true)
        <div class="card">
            <div class="card-header">
                <h5>Ce que vous apprendrez a la fin du cours :</h5>
            </div>
            <div class="card-body">

                <table>
                    @foreach($cour->objectifs as $objectif)
                    <tr>
                        <td width="95%">{{$objectif->libelle}}.</td>
                        <td width="5%">
                            <a href="{{ route('cour.dell_objectif',[$cour,$objectif]) }}"> <i class="fa fa-trash color-danger"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
        
            </div>
        </div>
       @endif

  

    


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
<script>
    $(function() {
  'use strict';
  $(function() {
    $('.file-upload-browse').on('click', function(e) {
      var file = $(this).parent().parent().parent().find('.file-upload-default');
      file.trigger('click');
    });
    $('.file-upload-default').on('change', function() {
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
  });
});
</script>

@endsection

