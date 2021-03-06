@extends('layouts.app')

@section('content')

    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">Modules</h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="" class="btn btn-sm btn-primary" data-toggle="modal"
                                           data-target="#exampleModal1">Ajouter un module</a>
                                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un
                                                            Module</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('configuration.store_modules')}}"
                                                          method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="example-text-input"
                                                                       class="form-control-label">Module</label>
                                                                <input class="form-control" type="text" name="module"
                                                                       value="John Snow" id="example-text-input">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fermer
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">Enregistrer
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12"></div>

                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Module</th>
                                        <th scope="col">Supprimer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($modules as $module)
                                        <tr>
                                            <td>{{$module->id}}</td>
                                            <td>{{$module->libelle_module}}</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#suppressionModuleModal1{{$module->id}}">Supprimer
                                                </button>
                                                <div class="modal fade" id="suppressionModuleModal1{{$module->id}}"
                                                     tabindex="-1" role="dialog"
                                                     aria-labelledby="suppressionModuleModal1" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Supprimer ?</div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Fermer
                                                                </button>
                                                                <a href="{{route('delete',['id'=>$module->id])}}"
                                                                   type="button" class="btn btn-danger">Supprimer</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer py-4">
                                <nav class="d-flex justify-content-end" aria-label="...">

                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">Horaires</h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="" class="btn btn-sm btn-primary" data-toggle="modal"
                                           data-target="#exampleModal">Ajouter un horaire</a>

                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un
                                                            horaire</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('configuration.store_horaires')}}"
                                                          method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="example-time-input"
                                                                       class="form-control-label">Date Debut
                                                                    seance</label>
                                                                <input class="form-control" type="time"
                                                                       name="heure_debut" value="10:30:00"
                                                                       id="example-time-input">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="example-time-input"
                                                                       class="form-control-label">Date fin
                                                                    seance</label>
                                                                <input class="form-control" type="time" name="heure_fin"
                                                                       value="10:30:00" id="example-time-input">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fermer
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">Enregistrer
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12"></div>

                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Horaire</th>
                                        <th scope="col">Supprimer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($horaires as $horaire)
                                        <tr>
                                            <td>{{$horaire->id}}</td>
                                            <td>De {{$horaire->heure_debut}} a {{$horaire->heure_fin}}</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#suppressionHoraireModal1">Supprimer
                                                </button>

                                                <div class="modal fade" id="suppressionHoraireModal1" tabindex="-1"
                                                     role="dialog" aria-labelledby="suppressionHoraireModal1"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Supprimer ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Fermer
                                                                </button>
                                                                <a href="{{route('delete_horaire',['id'=>$horaire->id])}}"
                                                                   type="button" class="btn btn-danger">Supprimer</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer py-4">
                                <nav class="d-flex justify-content-end" aria-label="...">

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">Professeur</h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="" class="btn btn-sm btn-primary" data-toggle="modal"
                                           data-target="#exampleModal3">Ajouter Professeur</a>
                                        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un
                                                            Professeur</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('configuration.store_prof')}}" method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="example-text-input"
                                                                       class="form-control-label">Nom</label>
                                                                <input class="form-control" type="text" name="nom_prof"
                                                                       value="" id="example-text-input">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="example-text-input"
                                                                       class="form-control-label">Prenom</label>
                                                                <input class="form-control" type="text"
                                                                       name="prenom_prof" value=""
                                                                       id="example-text-input">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="example-text-input"
                                                                       class="form-control-label">Email</label>
                                                                <input class="form-control" type="email"
                                                                       name="email_prof" value=""
                                                                       id="example-text-input">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fermer
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">Enregistrer
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12"></div>

                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Supprimer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->nom}}</td>
                                            <td>{{$user->prenom}}</td>
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#suppressionModuleModal1{{$user->id}}">Supprimer
                                                </button>
                                                <div class="modal fade" id="suppressionModuleModal1{{$user->id}}"
                                                     tabindex="-1" role="dialog"
                                                     aria-labelledby="suppressionModuleModal1" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Supprimer ?</div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Fermer
                                                                </button>
                                                                <a href="{{route('delete_user',['id' => $user->id])}}"
                                                                   type="button" class="btn btn-danger">Supprimer</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer py-4">
                                <nav class="d-flex justify-content-end" aria-label="...">

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script type="text/javascript" charset="utf8"
                src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap-datatables/js/datatables-buttons.min.js"></script>
        <script type="text/javascript" charset="utf8"
                src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
        <script type="text/javascript" charset="utf8"
                src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" charset="utf8"
                src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" charset="utf8"
                src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" charset="utf8"
                src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
        <script type="text/javascript" charset="utf8"
                src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

        <script>
            $(document).ready(function () {
                var table = $('#table').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [1, 2, 3, 4, 5, 6, 7, 8]
                            },
                        },
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: [1, 2, 3, 4, 5, 6, 7, 8]
                            }
                        }
                    ]
                });
            });

        </script>
    @endpush

    <div class="container-fluid mt--7 pr-0 pl-0">

        @include('layouts.footers.auth')
    </div>
@endsection