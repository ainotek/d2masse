@extends('admin.template')
@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#largeModal">
                        <i class="fa fa-plus-circle"></i> <strong>{{__('Diocèse')}}</strong>
                    </button>
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog modal-info" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Ajout d'un nouveau Diocèse</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form action="{{ route('dioceses.store') }}" method="post">
                                    @csrf
                                    @method('post')
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="name">{{__('Nom')}}</label>
                                            <div class="input-group">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="{{__('Nom')}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">{{__('Localisation')}}</label>
                                            <div class="input-group">
                                                <input type="text" id="location" name="location" class="form-control" placeholder="{{__('Localisation')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-success">Créer</button>
                                    </div>
                                </form>
                            </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
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
                            <th>Nom</th>
                            <th>Localisation</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($dioceses as $key => $diocese)
                                <tr>
                                    <td>{{ $diocese->name }}</td>
                                    <td>{{ $diocese->location }}</td>
                                    <td>
                                        <a href="{{ route('dioceses.edit', ['diocese' => $diocese->id]) }}" class="btn btn-warning">
                                            <i class="fa fa-edit "></i>
                                        </a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#smallModal-{{ $diocese->id + 2 }}">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                        <div class="modal fade" id="smallModal-{{ $diocese->id + 2 }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-{{ $diocese->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-danger" role="document">
                                                <form action="{{ route('dioceses.destroy', ['diocese' => $diocese->id]) }}" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel-{{ $diocese->id }}">Suppression du diocèse de {{ $diocese->name }}</h4>
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

