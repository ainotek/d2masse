@extends('admin.template')
@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#largeModal">
                        <i class="fa fa-plus-circle"></i> <strong>{{__('Type de demande')}}</strong>
                    </button>
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog modal-info" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Création d'un type de demande de Messe</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form action="{{ route('request-types.store') }}" method="post">
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
                                            <label for="description">{{__('Description')}}</label>
                                            <div class="input-group">
                                                <input type="text" id="description" name="description" class="form-control" placeholder="{{__('Entrer une petite description')}}">
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
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($requestsType as $requestType)
                                <tr>
                                    <td>{{ $requestType->name }}</td>
                                    <td>{{ $requestType->description }}</td>
                                    <td>
                                        <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#smallModal-{{ $requestType->id + 1 }}">
                                            <i class="fa fa-edit "></i>
                                        </button>
                                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#smallModal-{{ $requestType->id }}">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                        <div class="modal fade" id="smallModal-{{ $requestType->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-danger" role="document">
                                                <form action="{{ route('request-types.delete', ['request_type' => $requestType->id]) }}" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Supprimer {{ $requestType->name }}</h4>
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

                                        <div class="modal fade" id="smallModal-{{ $requestType->id + 1 }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-md modal-warning" role="document">
                                                <form action="{{ route('request-types.update', ['request_type' => $requestType->id]) }}" method="post">
                                                    @csrf
                                                    @method('patch')
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Modifier {{ $requestType->name }}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                              <label for="name">{{__('Nom')}}
                                                              </label>
                                                              <div class="input-group">
                                                                  <div class="input-group-prepend">
                                                                      <span class="input-group-text"><i class="fa fa-edit"></i></span>
                                                                  </div>
                                                                  <input value="{{ $requestType->name }}" type="text" id="name" name="name" class="form-control" placeholder="{{__('Nom')}}">
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                              <label for="description">{{__('Description')}}
                                                              </label>
                                                              <div class="input-group">
                                                                  <div class="input-group-prepend">
                                                                      <span class="input-group-text"><i class="fa fa-edit"></i></span>
                                                                  </div>
                                                                  <input value="{{ $requestType->description }}" type="text" id="description" name="description" class="form-control" placeholder="{{__('Description')}}">
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                                                            <button class="btn btn-warning">Modifier</button>
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

