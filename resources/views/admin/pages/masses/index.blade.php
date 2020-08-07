@extends('admin.template')
@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#largeModal">
                        <i class="fa fa-plus-circle"></i> <strong>{{__('Messe')}}</strong>
                    </button>
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog modal-info" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Création d'une Messe</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form action="{{ route('masses.store') }}" method="post">
                                    @csrf
                                    @method('post')
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="parish_id">{{__('Paroisse')}}</label>
                                            <select name="parish_id" id="parish_id" class="form-control">
                                                <option value="">----{{ __('Choisir la paroisse') }}----</option>
                                                @foreach($parishes as $parish)
                                                    <option value="{{ $parish->id }}">{{ $parish->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('parish_id')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="name">{{__('Nom')}}</label>
                                            <div class="input-group">
                                                <input required type="text" id="name" name="name" class="form-control" placeholder="{{__('Nom de la Messe')}}">
                                            </div>
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="start_day">{{__('Date')}}</label>
                                            <div class="input-group">
                                                <input required type="date" id="start_day" name="start_day" class="form-control" placeholder="{{__('Date')}}">
                                            </div>
                                            @error('start_day')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="start_at">{{__('Heure')}}</label>
                                            <div class="input-group">
                                                <input required type="time" id="start_at" name="start_at" class="form-control" placeholder="{{__('Heure')}}">
                                            </div>
                                            @error('start_at')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="request_closed_at">
                                                {{__('Fermetture')}} <small class="text-primary">{{ __('(Heure de fermeture des demandes pour cette Messe)') }}</small>
                                            </label>
                                            <div class="input-group">
                                                <input required type="time" id="request_closed_at" name="request_closed_at" class="form-control">
                                            </div>
                                            @error('request_closed_at')
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
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                        <tr>
                            <th>Paroisse</th>
                            <th>Date</th>
                            <th>Heure</th>
                            <th>Heure fermetture demandes</th>
                            <th>Nom</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($masses as $key => $mass)
                            <tr>
                                <td>{{ $mass->parish->name }}</td>
                                <td>{{ $mass->start_day }}</td>
                                <td>{{ $mass->request_closed_at }}</td>
                                <td>{{ $mass->start_at }}</td>
                                <td>{{ $mass->name }}</td>
                                <td>
                                    {{-- <a class="btn btn-info" href="#">
                                        <i class="fa fa-search-plus "></i>
                                    </a> --}}
                                    <a href="{{ route('masses.edit', ['mass' => $mass->id]) }}" class="btn btn-warning" href="#">
                                        <i class="fa fa-edit "></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#smallModal-{{ $key }}">
                                        <i class="fa fa-trash-o "></i>
                                    </button>
                                    <div class="modal fade" id="smallModal-{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-danger" role="document">
                                            <form action="{{ route('masses.destroy', ['mass' => $mass->id]) }}" method="post">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Supprimer {{ $mass->name }}</h4>
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

