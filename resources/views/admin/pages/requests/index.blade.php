@extends('admin.template')
@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('parishioners-request.create') }}" class="btn btn-primary rounded">
                        <i class="fa fa-plus-circle"></i> <strong>{{__('Nouvelle demande de messe')}}</strong>
                    </a>
                    {{-- <a href="{{ route('parishionersRequest.create') }}" class="btn btn-primary rounded"> <i class="fa fa-plus-circle"></i> <strong> {{__('Demandes de messe')}}</strong></a>
                    <div class="card-actions">
                        <a href="https://datatables.net">
                            <small class="text-muted">docs</small>
                        </a>
                    </div> --}}
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                        <tr>
                            <th>Demandeur</th>
                            <th>Date</th>
                            <th>Heure</th>
                            <th>Type de demande</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Anton Phunihel</td>
                                <td>2012/01/01</td>
                                <td>Member</td>
                                <td>
                                    Ok
                                    {{-- {{ $requests->parishioner->first_name . ' ' . $requests->parishioner->last_name }} --}}
                                </td>
                                <td>
                                    <a class="btn btn-success" href="#">
                                        <i class="fa fa-search-plus "></i>
                                    </a>
                                    <a class="btn btn-info" href="#">
                                        <i class="fa fa-edit "></i>
                                    </a>
                                    <a class="btn btn-danger" href="#">
                                        <i class="fa fa-trash-o "></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.conainer-fluid -->
@stop

