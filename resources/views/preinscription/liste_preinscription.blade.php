@extends('layouts.app')

@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body table-responsive">
            <!-- Card stats -->
            <table class="table">
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
                        <th class="text-right">Actions</th>
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
                          <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm btn-simple" data-original-title="" title="">
                            <i class="ni ni-circle-08 pt-1"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm btn-simple" data-original-title="" title="">
                            <i class="ni ni-settings-gear-65 pt-1"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm btn-simple" data-original-title="" title="">
                            <i class="ni ni-fat-remove pt-1"></i>
                            </button>
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