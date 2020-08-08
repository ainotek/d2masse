@extends('admin.template')
@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#largeModal">
                        <i class="fa fa-plus-circle"></i> <strong>{{__('superviseurs')}}</strong>
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénoms</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>role</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($supervisors as $key => $supervisor)
                            <tr>
                                <td>{{ $supervisor->first_name }}</td>
                                <td>{{ $supervisor->last_name }}</td>
                                <td>{{ $supervisor->email }}</td>
                                <td>{{ $supervisor->phone }}</td>
                                <td>
                                    <span class="badge badge-success">{{ $supervisor->role }}</span>
                                </td>
                                <td>
                                    {{-- <a class="btn btn-success" href="#">
                                        <i class="fa fa-search-plus "></i>
                                    </a> --}}
                                    <a href="{{ route('supervisors.edit', ['supervisor' => $supervisor->id]) }}" class="btn btn-warning">
                                        <i class="fa fa-edit "></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#smallModal-{{ $key }}">
                                        <i class="fa fa-trash-o "></i>
                                    </button>
                                    <div class="modal fade" id="smallModal-{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-danger" role="document">
                                            <form action="{{ route('supervisors.destroy', ['supervisor' => $supervisor->id]) }}" method="post">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Supprimer {{ $supervisor->name }}</h4>
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
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog modal-info" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Création d'un supervisoristrateur</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('supervisors.store') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="first_name">{{__('Nom')}}</label>
                            <input type="text" required class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}">
                            @error('first_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="last_name">{{__('Prénoms')}}</label>
                            <input type="text" required class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}">
                            @error('last_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">{{__('Téléphone')}}</label>
                            <input type="text" required class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">{{__('Email')}}</label>
                            <input type="email" required class="form-control" name="email" id="email" value="{{ old('email') }}">
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">{{__('Mot de passe')}}</label>
                            <input type="password" required class="form-control" name="password" id="password">
                            @error('password')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">{{__('Reécrivez le mot de passe')}}</label>
                            <input type="password" required class="form-control" name="password_confirmation" id="password_confirmation">
                            @error('password_confirmation')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="text-right">
                            <button type="reset" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-success">Créer</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- /.conainer-fluid -->
@stop

