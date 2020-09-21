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
                    <tr>
                        <td>1</td>
                        <td>Mr</td>
                        <td>Zernoun</td>
                        <td>Mohssine</td>
                        <td>test@gmail.com</td>
                        <td>0928321</td>
                        <td>KZDQSLDKQS</td>
                        <td>QSKDJQS</td>
                        <td>Kenitra</td>
                        <td>
                            <button class="btn btn-primary btn-fab btn-icon btn-round">
                                <i class="ni ni-active-40"></i> cv
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-fab btn-icon btn-round">
                                <i class="ni ni-active-40"></i> CIN
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-fab btn-icon btn-round">
                                <i class="ni ni-active-40"></i> BAC
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-fab btn-icon btn-round">
                                <i class="ni ni-active-40"></i> Diplome
                            </button>
                        </td>
                        <td class="td-actions text-right">
                            <label class="custom-toggle">
                                <input data-toggle="modal" data-target="#exampleModal" type="checkbox" checked>
                                <span class="custom-toggle-slider rounded-circle"></span>
                            </label>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </td>
                    </tr>
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