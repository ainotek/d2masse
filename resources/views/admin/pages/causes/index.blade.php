@extends('admin.template')
@section('content')
    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#largeModal">
                        <i class="fa fa-plus-circle"></i> <strong>{{__('Cause')}}</strong>
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                        <tr>
                            <th>Paroisse</th>
                            <th>Nom</th>
                            <th>description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($causes as $key => $cause)
                                <tr>
                                    <td>{{ $cause->parish->name }}</td>
                                    <td>{{ $cause->name }}</td>
                                    <td>{{ (strlen($cause->description) > 50) ? substr($cause->description, 0, 50) . '...' : $cause->description }}</td>
                                    <td>
                                        <a href="{{ route('causes.edit', ['cause' => $cause->id]) }}" class="btn btn-warning" href="#">
                                            <i class="fa fa-edit "></i>
                                        </a>
                                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#smallModal-{{ $key }}">
                                            <i class="fa fa-trash-o "></i>
                                        </button>
                                        <div class="modal fade" id="smallModal-{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-danger" role="document">
                                                <form action="{{ route('causes.destroy', ['cause' => $cause->id]) }}" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Supprimer {{ $cause->name }}</h4>
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
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog modal-info" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Création d'une cause</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('causes.store') }}" method="post">
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
                                <input required type="text" id="name" name="name" class="form-control" placeholder="{{__('Nommer la cause')}}">
                            </div>
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">{{__('Description')}}</label>
                            <div class="input-group">
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Vous pouvez donner une description"></textarea>
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

@stop

