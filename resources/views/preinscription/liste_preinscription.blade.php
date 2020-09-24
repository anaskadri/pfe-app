@extends('layouts.app')

@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body table-responsive">
            <!-- Card stats -->
            <table id="table" class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Civilité</th>
                        <th>Nom</th>
                        <th>prenom</th>
                        <th>email</th>
                        <th>telephone</th>
                        <th>cne / apogee</th>
                        <th>CIN</th>
                        <th>Ville</th>
                        <th>File CV</th>
                        <th>file CIN</th>
                        <th>file BAC</th>
                        <th>file DIPLOME</th>
                        <th>Validation</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($presincriptions as $preinscription)
                    <tr>
                        <td>{{ $preinscription->id }}</td>
                        <td>{{ $preinscription->civilite }}</td>
                        <td>{{ $preinscription->nom }}</td>
                        <td>{{ $preinscription->prenom }}</td>
                        <td>{{ $preinscription->email }}</td>
                        <td>{{ $preinscription->telephone }}</td>
                        <td>{{ $preinscription->cne }}</td>
                        <td>{{ $preinscription->cin }}</td>
                        <td>{{ $preinscription->ville }}</td>
                        <td>
                            <a class="btn btn-primary btn-fab btn-icon btn-round" href="http://localhost/pfe-siteweb/Storage/{{$preinscription->file_cv}}" download>
                                <i class="ni ni-active-40"></i> cv
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-fab btn-icon btn-round" href="http://localhost/pfe-siteweb/Storage/{{ $preinscription->file_cin}}" download>
                                <i class="ni ni-active-40"></i> CIN
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-fab btn-icon btn-round" href="http://localhost/pfe-siteweb/Storage/{{ $preinscription->file_bac}}" download>
                                <i class="ni ni-active-40"></i> BAC
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-fab btn-icon btn-round" href="http://localhost/pfe-siteweb/Storage/{{ $preinscription->file_diplome}}" download>
                                <i class="ni ni-active-40"></i> Diplome
                            </a>
                        </td>
                        <td class="td-actions text-right">
                            {{--@if($etat_inscription === 1 )--}}
                                <label class="custom-toggle">
                                    <input data-toggle="modal" data-target="#exampleModal{{ $preinscription->id }}" type="checkbox" checked>
                                    <span class="custom-toggle-slider rounded-circle"></span>
                                </label>
                        {{--  @else
                          <label class="custom-toggle">
                              <input data-toggle="modal" data-target="#exampleModal" type="checkbox"  checked>
                              <span class="custom-toggle-slider rounded-circle"></span>
                          </label>
                      @endif
                      --}}
                            <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $preinscription->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">SURE ?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                        ...
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                                        <a class="btn btn-primary" href="{{ route('creation_compte',['id' => $preinscription->id]) }}">Save changes</a>
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
    </div>
</div>

@push('js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#table').DataTable();
    } );
</script>
@endpush
    
    <div class="container-fluid mt--7 pr-0 pl-0">
        
        @include('layouts.footers.auth')
    </div>
@endsection