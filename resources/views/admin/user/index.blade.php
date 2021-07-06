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
<h3 class="page-title">Les Utilisateurs</h3>
{{-- <p>Créer un nouveau cours</p> --}}
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="head">
                    <h5 class="mb-2">Tous les compts</h5>
                    <p>Liste de toutes les personnes inscrites</p>  
                </div>
                <br>

                <div class="table-responsive">
                    <table id="dataTableExample" class="table cours">
                        <thead>
                            <tr>
                                <th width="30%">Nom & prénoms</th>
                                <th width="30%">Titre</th>
                                <th width="30%">email</th>
                                <th width="20%">Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody> 
                         @foreach($accounts as $account)                          
                        <tr>
                            <td><img src="{{ asset($account->image) }}" alt="" style="background: #ccc; width: 50px ; height: 50px"></td>
                            <td><span class="text">{{$account->name}}</span></td>
                            <td><span class="text">{{$account->email}}</span></td>
                             <td>{{$account->active == 1 ? 'Actif' : 'Inactif'}}</td>


                            <td>
                             <form action="{{ route('account.destroy',$account) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <a href="{{ route('account.edit',$account) }}" class="btn btn-primary btn-xs"> <i class="mdi mdi-pencil"></i>details</a>
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
   
</div>




@endsection

@section('scripts')
 <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('js/datatable.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.cour').on('click', '.delete', function (event) {
            event.preventDefault();

            let href = $(this).attr('href');
            if(confirm('Voulez-vous supprimer cette catégorie?')){
                window.location = href;
            }
        });
    });
</script>
@endsection


 