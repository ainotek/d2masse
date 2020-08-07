@extends('admin.template')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <a href="#" class="text-warning">
                        <strong> {{__('Modification de la Messe : ') . $mass->name}}</strong>
                    </a>
                </div>
                <form action="{{ route('masses.update', ['mass' => $mass->id]) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="parish_id">{{__('Paroisse')}}</label>
                            <select name="parish_id" id="parish_id" class="form-control">
                                <option value="">----{{ __('Choisir la paroisse') }}----</option>
                                @foreach($parishes as $parish)
                                    <option value="{{ $parish->id }}" {{ $parish->id == $mass->parish_id ? 'selected' : '' }}>{{ $parish->name }}</option>
                                @endforeach
                            </select>
                            @error('parish_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">{{__('Nom')}}</label>
                            <div class="input-group">
                                <input required value="{{ $mass->name }}" type="text" id="name" name="name" class="form-control" placeholder="{{__('Nom de la Messe')}}">
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="start_day">{{__('Date')}}</label>
                            <div class="input-group">
                                <input required value="{{ $mass->start_day }}" type="date" id="start_day" name="start_day" class="form-control" placeholder="{{__('Date')}}">
                            </div>
                            @error('start_day')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="start_at">{{__('Heure')}}</label>
                            <div class="input-group">
                                <input required value="{{ $mass->start_at }}" type="time" id="start_at" name="start_at" class="form-control" placeholder="{{__('Heure')}}">
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
                                <input required value="{{ $mass->request_closed_at }}" type="time" id="request_closed_at" name="request_closed_at" class="form-control">
                            </div>
                            @error('request_closed_at')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="text-right">
                            <button type="reset" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-warning">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
