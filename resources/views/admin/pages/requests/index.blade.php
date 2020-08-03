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
                            <th>{{__('Paroisse')}}</th>
                            <th>{{__('Receveur')}}</th>
                            <th>{{__('Demandeur')}}</th>
                            <th>{{__('Messe')}}</th>
                            <th>{{__('Type de demande')}}</th>
                            <th>{{__('Message')}}</th>
                            <th>{{__('Actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($masses as $mass)
                            @foreach($mass->massRequests as $massRequest)
                                <tr class="text-center">
                                    <td nowrap>{{$mass->parish->name}}</td>
                                    <td nowrap>{{$massRequest->receiver}}</td>
                                    <td nowrap>{{$massRequest->parishioner->first_name ?? '-'}} {{$massRequest->parishioner->last_name ?? '-'}}</td>
                                    <td nowrap>{{$mass->name}}</td>
                                    <td nowrap>{{$massRequest->requestType->name}}</td>
                                    <td>{{substr($massRequest->message,0, 60)}}...                                                                    </td>
                                    <td nowrap>
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
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.conainer-fluid -->
@stop

