@extends('admin.template')
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <h5 class="modal-title">{{__('Création d\'une nouvelle paroisse')}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('parishes.store') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="city_id">{{__('Ville')}}</label>
                                <div class="input-group">
                                    <select name="city_id" id="city_id" class="form-control">
                                        <option value="">----{{ __('Choisir une ville') }}----</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="diocese_id">{{__('Diocèses')}}</label>
                                <div class="input-group">
                                    <select name="diocese_id" id="diocese_id" class="form-control">
                                        <option value="">----{{ __('Choisir un Diocèse') }}----</option>
                                        @foreach($dioceses as $diocese)
                                            <option value="{{ $diocese->id }}">{{ $diocese->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">{{__('Nom')}}</label>
                                <div class="input-group">
                                    <input type="text" id="name" value="{{ old('name') }}" name="name" class="form-control" placeholder="{{__('Nom')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="longitude">{{__('Longitude')}}</label>
                                <div class="input-group">
                                    <input type="text" id="longitude" value="{{ old('longitude') }}" name="longitude" class="form-control" placeholder="{{__('Longitude')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="latitude">{{__('Latitude')}}</label>
                                <div class="input-group">
                                    <input type="text" id="latitude" value="{{ old('latitude') }}" name="latitude" class="form-control" placeholder="{{__('Latitude')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="registration">{{__('Registration')}}</label>
                                <div class="input-group">
                                    <input type="text" id="registration" value="{{ old('registration') }}" name="registration" class="form-control" placeholder="{{__('Registration')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">{{__('Téléphone')}}</label>
                                <div class="input-group">
                                    <input type="text" id="phone" value="{{ old('phone') }}" name="phone" class="form-control" placeholder="{{__('Téléphone')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">{{__('Email')}}</label>
                                <div class="input-group">
                                    <input type="text" id="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="{{__('Adresse email')}}">
                                </div>
                            </div>
                            <div class="text-right">
                                <a href="{{ route('parishes.index') }}" class="btn btn-dark">Annuler</a>
                                <button type="submit" class="btn btn-success">Créer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.conainer-fluid -->
@stop
