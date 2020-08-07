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
                    <table class="table table-striped table-bordered datatable table-responsive nowrap text-center">
                        <thead>
                        <tr>
                            <th>{{__('Paroisse')}}</th>
                            <th>{{__('Receveur')}}</th>
                            <th>{{__('Demandeur')}}</th>
                            <th>{{__('Messe')}}</th>
                            <th>{{__('Heure de la messe')}}</th>
                            <th>{{__('Type de demande')}}</th>
                            <th>{{__('Message')}}</th>
                            <th>{{__('Date de creation')}}</th>
                            <th>{{__('Date de modification')}}</th>
                            <th>{{__('Actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($masses as $mass)
                            @foreach($mass->massRequests as $massRequest)
                                <tr class="text-center">
                                    <td nowrap>{{$mass->parish->name}}</td>
                                    <td nowrap>{{$massRequest->receiver}}</td>
                                    <td nowrap>{{$massRequest->parishioner->first_name ?? $massRequest->receiver}} {{$massRequest->parishioner->last_name ?? '-'}}</td>
                                    <td nowrap>{{$mass->name}}</td>
                                    <td nowrap>{{$mass->start_at}}</td>
                                    <td nowrap>{{$massRequest->requestType->name}}</td>
                                    <td nowrap width="250">{{substr($massRequest->message,0, 60)}}...</td>

                                    <td nowrap>{{$massRequest->created_at->format('d/m/Y H:i:s')}}</td>
                                    <td nowrap>{{$massRequest->updated_at->format('d/m/Y H:i:s')}}</td>

                                    <td nowrap>
                                        <a class="btn btn-success rounded" href="#">
                                            <i class="fa fa-search-plus "></i>
                                        </a>
                                        <a class="btn btn-info text-light rounded" href="#">
                                            <i class="fa fa-edit "></i>
                                        </a>
                                        <a class="btn btn-danger rounded" href="#">
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

