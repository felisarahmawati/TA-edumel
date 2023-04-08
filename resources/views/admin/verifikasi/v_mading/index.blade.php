@extends('admin.layouts.main')
@section('title', 'Verifikasi Mading')

@section('content')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Table</a></li>
            <li class="breadcrumb-item active" aria-current="page">Verifikasi Mading</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Verifikasi Mading</h6>
                    <br>
                    <div class="table-responsive">
                        @if (session('berhasil'))
                            <div class="alert alert-success">
                                {{ session('berhasil')}}
                            </div>
                        @endif
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Mading</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

<script src="{{ url('') }}/assets/admin/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="{{ url('') }}/assets/admin/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
<script src="{{ url('') }}/assets/admin/js/data-table.js"></script>
<script type="text/javascript">

</script>
@endsection
