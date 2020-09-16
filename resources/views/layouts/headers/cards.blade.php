<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>mr ou mme</th>
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
    $('#table_id').DataTable();
} );
</script>
@endpush