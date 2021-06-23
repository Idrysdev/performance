@extends('layouts.default')

@section('styles')

@endsection

@section('content')
<br>
<h3 class="page-title">Mes Cours</h3>
<p>Créer un nouvel article</p>
<div class="row">
    <!-- COL MD 8 -->
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
               <div class="head">
                    <h5 class="">Ajouter un cours</h5>
                    <p class="mb-3">Remplissez le formulaire pour ajouter un nouvel article à la plateforme</p>
                </div>
                {!! Form::open(['method' => 'POST', 'route' => 'cour.store', 'class' => 'form-horizontal']) !!}
                    @include('admin.cour.field')
                {!! Form::close() !!}

            </div>
        </div>
    </div>

     <!-- COL MD 4 -->
     <div class="col-md-4">
         

     </div>

</div>      
@endsection

@section('scripts')

@endsection

