@extends('admin.template')
@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('parishes.create') }}" class="btn btn-primary rounded">
                        <i class="fa fa-plus-circle"></i> <strong>{{__('Ajouter une paroisse')}}</strong>
                    </a>
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
                            @foreach($parishes as $key => $parish)
                                <tr class="text-center">
                                    <td width="200px">{{ $parish->name }}</td>
                                    <td nowrap="">{{ $parish->city->name ?? ''}}</td>
                                    <td nowrap>{{ $parish->diocese->name ?? '' }}</td>
                                    <td>{{ $parish->registration }}</td>
                                    <td width="100px">{{$parish->parishioners->count()}}</td>
                                    <td>{{ $parish->phone }}</td>
                                    <td>{{ $parish->email }}</td>
                                    <td width="300px">
                                        <a class="btn btn-info" href="#">
                                            <i class="fa fa-eye "></i>
                                        </a>
                                        <a href="{{ route('parishes.edit', ['parish' => $parish->id]) }}" class="btn btn-warning" href="#">
                                            <i class="fa fa-edit "></i>
                                        </a>
                                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#smallModal-{{ $key }}">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                        <div class="modal fade" id="smallModal-{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-danger" role="document">
                                                <form action="{{ route('parishes.destroy', ['parish' => $parish->id]) }}" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Supprimer {{ $parish->name }}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <strong>Cette action est irréversible, ête-vous sûr ?</strong>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                                                                @csrf
                                                                @method('delete')
                                                            <button class="btn btn-danger">Oui, supprimer</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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

