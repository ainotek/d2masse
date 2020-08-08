@extends('admin.template')
@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#largeModal">
                        <i class="fa fa-plus-circle"></i> <strong>{{__('Ville')}}</strong>
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Ville</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($cities as $key => $city)
                                <tr>
                                    <td>{{ $city->country->name }}</td>
                                    <td>{{ $city->name }}</td>
                                    <td class="right">
                                        <a href="{{ route('cities.edit', ['city' => $city->id]) }}" class="btn btn-warning" href="#">
                                            <i class="fa fa-edit "></i>
                                        </a>
                                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#smallModal-{{ $key }}">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
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
                    <h4 class="modal-title">Création d'une ville</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('cities.store') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="country_id">{{__('Pays')}}</label>
                            <select name="country_id" id="country_id" class="form-control">
                                <option value="">----{{ __('Choisir le pays de la ville') }}----</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('country_id')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">{{__('Nom')}}</label>
                            <div class="input-group">
                                <input required type="text" id="name" name="name" class="form-control" placeholder="{{__('Nom')}}">
                            </div>
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
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
    @foreach($cities as $key => $city)
        <div class="modal fade" id="smallModal-{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-danger" role="document">
            <form action="{{ route('cities.destroy', ['city' => $city->id]) }}" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Supprimer {{ $city->name }}</h4>
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
    @endforeach

    <!-- /.conainer-fluid -->
@stop

