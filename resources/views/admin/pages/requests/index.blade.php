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
                            <th>Paroisse</th>
                            <th>Messe</th>
                            <th>Type de demande</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($requests as $request)
                                <tr>
                                    <td>{{ $request->receiver }}</td>
                                    <td>
                                        TODO
                                    </td>
                                    <td>{{ $request->masse->name }}</td>
                                    <td>
                                        {{ $request->requestType->name }}
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.conainer-fluid -->
@stop

