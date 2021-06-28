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
<h3 class="page-title">Les Niveaux</h3>
<p>Modifier un niveau</p>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="head">
                    <h5 class="mb-2">Toutes les catégories</h5>
                    <p>Liste de toutes les catégories ajoutées</p>  
                </div>
                <br>

                <div class="table-responsive">
                    <table id="dataTableExample" class="table categories">
                        <thead>
                            <tr>
                                <th width="30%">Libellé</th>
                                <th width="30%">Code</th>
                                <th width="20%">Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody> 
                                            
                        <tr>
                            <td>       
                               <span class="text">{{$niveau->libelle}}</span>
                            </td>
                            <td>{{$niveau->libelle}}</td>
                             <td>{{$niveau->active == 1 ? 'Actif' : 'Inactif'}}</td>
                            <td>
                             <form action="{{ route('niveau.destroy',$niveau) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                   {{--  <a href="{{ route('niveau.edit',$niveau) }}" class="btn btn-dark btn-xs"> <i class="mdi mdi-pencil"></i>edit</a> --}}
                                    <button class="btn btn-danger btn-xs delete"><i class="mdi mdi-delete"></i>delete</button>
                            </form>

                            </td>
                        </tr>
                                                                 
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
                    <h5 class="mb-2">Modifier un niveau</h5>
                    <p>Modifier le  niveau <strong>{{$niveau->libelle}}</strong></p>
                </div>
                <br>
                <form class="forms-sample" method="POST" action="{{ route('niveau.update',$niveau) }}">
                    @csrf
                    @method('PATCH')
                    <label for="libelle">Libellé</label>
                    <div class="input-group mb-4">
                            <input type="text" name="libelle" value="{{$niveau->libelle}}" class="form-control" placeholder=".." aria-label="switch">
                    </div>
                    <div class="input-group mb-4">
                      <select name="active" class="form-control" id="active">
                          <option value="1">actif</option>
                          <option value="2">Inactif</option>
                      </select>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
                    <button type="reset" class="btn btn-light">Annuler</button>
                </form>
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
        $('.categories').on('click', '.delete', function (event) {
            event.preventDefault();

            let href = $(this).attr('href');
            if(confirm('Voulez-vous supprimer cette catégorie?')){
                window.location = href;
            }
        });
    });
</script>
@endsection


 