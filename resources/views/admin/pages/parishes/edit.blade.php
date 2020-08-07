@extends('admin.template')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <a href="#" class="text-warning">
                        <strong> {{__('Modification de la paroisse ') . $parish->name}}</strong>
                    </a>
                </div>
                <form action="{{ route('parishes.update', ['parish' => $parish->id]) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="city_id">{{__('Ville')}}</label>
                            <div class="input-group">
                                <select name="city_id" id="city_id" class="form-control">
                                    <option value="">----{{ __('Choisir une ville') }}----</option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}" {{ $city->id == $parish->city_id ? 'selected' : '' }}>{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="diocese_id">{{__('Diocèses')}}</label>
                            <div class="input-group">
                                <select name="diocese_id" id="diocese_id" class="form-control">
                                    <option value="">----{{ __('Choisir un Diocèse') }}----</option>
                                    @foreach($dioceses as $diocese)
                                        <option value="{{ $diocese->id }}" {{ $diocese->id == $parish->diocese_id ? 'selected' : '' }}>{{ $diocese->name }}</option>
                                    @endforeach
                                </select>
                                @error('diocese_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">{{__('Nom')}}</label>
                            <div class="input-group">
                                <input type="text" id="name" value="{{ $parish->name }}" name="name" class="form-control" placeholder="{{__('Nom')}}">
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="longitude">{{__('Longitude')}}</label>
                            <div class="input-group">
                                <input type="text" id="longitude" value="{{ $parish->longitude }}" name="longitude" class="form-control" placeholder="{{__('Longitude')}}">
                            </div>
                            @error('longitude')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="latitude">{{__('Latitude')}}</label>
                            <div class="input-group">
                                <input type="text" id="latitude" value="{{ $parish->latitude }}" name="latitude" class="form-control" placeholder="{{__('Latitude')}}">
                            </div>
                            @error('latitude')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="registration">{{__('Registration')}}</label>
                            <div class="input-group">
                                <input type="text" id="registration" value="{{ $parish->registration }}" name="registration" class="form-control" placeholder="{{__('Registration')}}">
                            </div>
                            @error('registration')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">{{__('Téléphone')}}</label>
                            <div class="input-group">
                                <input type="text" id="phone" value="{{ $parish->phone }}" name="phone" class="form-control" placeholder="{{__('Téléphone')}}">
                            </div>
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">{{__('Email')}}</label>
                            <div class="input-group">
                                <input type="text" id="email" value="{{ $parish->email }}" name="email" class="form-control" placeholder="{{__('Adresse email')}}">
                            </div>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="text-right">
                            <a href="{{ route('parishes.index') }}" class="btn btn-dark">Annuler</a>
                            <button type="submit" class="btn btn-warning">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
