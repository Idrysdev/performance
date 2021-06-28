@extends('layouts.default')

@section('styles')
<style>
    .dataTables_length label{ width: 100%; }
    .dataTables_length label *{
        display: inline-block;
        /*vertical-align: middle;*/
    }
    .dataTables_wrapper.dt-bootstrap4 .dataTables_length select{
        width: 50% !important;
    }
    .dataTables_wrapper > .row:nth-child(1){ margin-bottom: 15px; }
    .dataTables_wrapper > .row:nth-child(3){ margin-top: 25px; }

    .color,
    .text{
        display: inline-block;
        vertical-align: middle;
    }
    .color{
        width: 25px;
        height: 25px;
        border: 2px solid #fff;
        border-radius: 100%;
    }
</style>
@endsection

@section('content')
<br>
<h3 class="page-title">Les Matières</h3>
<p>Créer une nouvelle matière</p>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="head">
                    <h5 class="mb-2">Toutes les Matières</h5>
                    <p>Liste de toutes les Matières ajoutées</p>  
                </div>
                <br>

                <div class="table-responsive">
                    <table id="dataTableExample" class="table matierex">
                        <thead>
                            <tr>
                                <th width="30%">Libellés</th>
                                <th width="30%">Icons</th>
                                <th width="20%">Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody> 
                         @foreach($matieres as $matiere)                          
                        <tr>
                            <td>       
                               <span class="text">{{$matiere->libelle}}</span>
                            </td>
                            <td><img src="{{ asset($matiere->icon) }}" alt="" style="background: #ccc; width: 50px ; height: 50px"></td>
                             <td>{{$matiere->active == 1 ? 'Actif' : 'Inactif'}}</td>
                            <td>
                             <form action="{{ route('matiere.destroy',$matiere) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <a href="{{ route('matiere.edit',$matiere) }}" class="btn btn-primary btn-xs"> <i class="mdi mdi-pencil"></i>edit</a>
                                    <button class="btn btn-danger btn-xs delete"><i class="mdi mdi-delete"></i>delete</button>
                            </form>

                            </td>
                        </tr>
                        @endforeach                                                
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="head">
                    <h5 class="mb-2">Ajouter une Matière</h5>
                    <p>Créez une nouvelle Matière pour des cours figurants sur le site</p>
                </div>
                <br>
                {!! Form::open(['method' => 'POST', 'route' => 'matiere.store', 'class' => 'form-horizontal', 'files' => true]) !!}
                    <label for="libelle">Libellé</label>
                    <div class="input-group mb-4">
                            <input type="text" name="libelle" class="form-control" placeholder="Titre de la Matière" aria-label="switch">
                    </div>
                    <label for="libelle">Status</label>
                    <div class="input-group mb-4">
                      <select name="active" class="form-control" id="active">
                          <option value="1">actif</option>
                          <option value="2">Inactif</option>
                      </select>
                     </div>
                     <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }} mb-4">
                         {!! Form::label('icon', 'Icons') !!}
                         {!! Form::file('icon') !!}
                         <small class="text-danger">{{ $errors->first('icon') }}</small>
                     </div>

                    <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
                    <button type="reset" class="btn btn-light">Annuler</button>
             {!! Form::close() !!}
            </div>
        </div>
    </div>

</div>




@endsection

@section('scripts')
 <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('js/datatable.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.matiere').on('click', '.delete', function (event) {
            event.preventDefault();

            let href = $(this).attr('href');
            if(confirm('Voulez-vous supprimer cette catégorie?')){
                window.location = href;
            }
        });
    });
</script>
@endsection


 