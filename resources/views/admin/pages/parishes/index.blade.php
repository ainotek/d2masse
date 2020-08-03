@extends('admin.template')
@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('parishes.create') }}" class="btn btn-primary rounded"> <i class="fa fa-plus-circle"></i> <strong> {{__('Ajouter une Paroisse')}}</strong></a>
                    {{-- <div class="card-actions">
                        <a href="https://datatables.net">
                            <small class="text-muted">docs</small>
                        </a>
                    </div> --}}
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Ville</th>
                            <th>Diocèse</th>
                            <th>Registration</th>
                            <th>Nombre paroissiens</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($parishes as $parish)
                                <tr class="text-center">
                                    <td width="200px">{{ $parish->name }}</td>
                                    <td nowrap="">{{ $parish->city->name }}</td>
                                    <td nowrap>{{ $parish->diocese->name }}</td>
                                    <td>{{ $parish->registration }}</td>
                                    <td>{{$parish->parishioners->count()}}</td>
                                    <td>{{ $parish->phone }}</td>
                                    <td>{{ $parish->email }}</td>
                                    <td width="200px">
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

