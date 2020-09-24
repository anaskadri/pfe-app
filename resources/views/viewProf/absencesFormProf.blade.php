@extends('viewProf.layouts.appProf')

@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body table-responsive">
            <div class="tab-content">
                <div id="html5-inputs-component" class="tab-pane tab-example-result fade active show" role="tabpanel" aria-labelledby="html5-inputs-component-tab">
                    <h2>Ajouter une fiche d'absence</h2>
                  <form>
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nom Prenom</label>
                      <select class="form-control">
                        <option>Default select</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="example-search-input" class="form-control-label">Heure de la Seance</label>
                      <select class="form-control">
                        <option>de 10h a 12h</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="example-email-input" class="form-control-label">Module</label>
                      <select class="form-control">
                        <option>de 10h a 12h</option>
                      </select>
                    </div>
                    <button type="button" class="btn btn-primary">Enregistrer</button>
                  </form>
                </div>
              </div>
        </div>
    </div>
</div>

@push('js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap-datatables/js/datatables-buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

<script>
    $(document).ready( function () {
        var table = $('#table').DataTable({
            dom: 'Bfrtip',
            buttons: [ 
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4]
                    }, 
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4]
                    }
                }
            ]
        });
    } );
 
</script>
@endpush
    
    <div class="container-fluid mt--7 pr-0 pl-0">
        
        @include('layouts.footers.auth')
    </div>
@endsection