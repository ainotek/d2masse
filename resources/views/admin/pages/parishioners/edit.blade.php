@extends('admin.template')
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <h5 class="modal-title">{{__('Création d\'un nouveau paroissien')}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{route("parishioners.update", ['parishioner' => $parishioner->id])}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="modal-body ">
                            <div class="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="">
                                            <fieldset class="form-group">
                                                <label for="first_name">{{__('Nom')}}</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                        </span>
                                                    </span>
                                                    <input type="text" class="form-control" id="first_name"
                                                           name="first_name"
                                                           value="{{ $parishioner->first_name }}"
                                                           placeholder="{{__('Nom')}}" required>
                                                        </div>
                                                        @error('first_name')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="last_name">{{__('Prénom')}}</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                    </span>
                                                    <input type="text" class="form-control"
                                                            value="{{ $parishioner->last_name }}"
                                                            name="last_name" id="last_name"
                                                           placeholder="{{__('Prénom')}}" required>
                                                        </div>
                                                        @error('last_name')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                            </fieldset>
                                        </div>
                                        <div class="row">

                                            <fieldset class="form-group col-6">
                                                <label for="email">{{__('Email')}}</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                    </span>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                           placeholder="{{__('Email')}}" required
                                                           value="{{ $parishioner->email }}">
                                                        </div>
                                                        @error('email')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                            </fieldset>

                                            <fieldset class="form-group col-6">
                                                <label for="phone">{{__('Téléphone')}}</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-phone"></i>
                                                        </span>
                                                    </span>
                                                    <input type="tel" class="form-control" name="phone" id="phone"
                                                           placeholder="{{__('Téléphone')}}" min="8" max="13" required
                                                           value="{{ $parishioner->phone }}">
                                                        </div>
                                                        @error('phone')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                            </fieldset>
                                        </div>

                                        <fieldset class="form-group">
                                            <label for="password">{{__('Mot de passe')}}</label>
                                            <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-lock"></i>
                                                        </span>
                                                    </span>
                                                <input type="password" class="form-control" name="password" id="password"
                                                       placeholder="{{__('Mot de passe')}}">
                                                    </div>
                                                    @error('password')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label for="password_confirmation">{{__('Confirmer le mot de passe')}}</label>
                                            <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-lock"></i>
                                                        </span>
                                                    </span>
                                                <input type="password" class="form-control" name="password_confirmation"
                                                       id="password_confirmation"
                                                       placeholder="{{__('Confirmation')}}">
                                                    </div>
                                                    @error('password_confirmation')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                        </fieldset>
                                        <div class="row">
                                            <fieldset class="form-group col-md-6">
                                                <label for="parish_id">{{__('Selectionner la paroisse')}}</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-home"></i>
                                                        </span>
                                                    </span>
                                                    <select name="parish_id" id="parish_id" class="form-control">
                                                        <option value="">---Choisir une paroisse---</option>
                                                        @foreach($parishes as $parish)
                                                            <option {{ $parishioner->parish_id == $parish->id ? 'selected' : '' }} value="{{$parish->id}}">{{$parish->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('parish_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </fieldset>
                                            <fieldset class="form-group col-md-6">
                                                <label for="city_id">{{__('Selectionner la ville')}}</label>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-map-marker"></i>
                                                        </span>
                                                    </span>
                                                    <select name="city_id" id="city_id" class="form-control">
                                                        <option value="">---Choisir une ville---</option>
                                                        @foreach($cities as $city)
                                                            <option {{ $parishioner->city_id == $city->id ? 'selected' : '' }} value="{{$city->id}}">{{$city->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('city_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </fieldset>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-4 mr-0">
                                                <label>{{__('Détails')}}</label>
                                                <div class="col-md-6">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" {{ $parishioner->is_baptized ? 'checked' : '' }} class="custom-control-input" id="is_baptized"
                                                               name="is_baptized">
                                                        <label class="custom-control-label"
                                                               for="is_baptized">{{__('Bâptisé')}}
                                                        </label>
                                                        @error('is_baptized')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="is_confirmed" {{ $parishioner->is_confirmed ? 'checked' : '' }} name="is_confirmed">
                                                        <label class="custom-control-label"
                                                               for="is_confirmed">{{__('Confirmé')}}
                                                        </label>
                                                        @error('is_confirmed')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="is_catechumen" {{ $parishioner->is_catechumen ? 'checked' : '' }} name="is_catechumen">
                                                        <label class="custom-control-label"
                                                               for="is_catechumen">{{__('Catechumen')}}
                                                        </label>
                                                        @error('is_catechumen')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3 mr-0">
                                                <label>{{__('Genre')}}</label>
                                                <div class="col-md-6">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input"
                                                               id="male" name="gender" {{ $parishioner->gender == 'M' ? 'checked' : '' }} value="M" checked required>
                                                        <label class="custom-control-label"
                                                               for="male">{{__('Homme')}}
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input"
                                                               id="female" {{ $parishioner->gender == 'F' ? 'checked' : '' }} name="gender" value="F">
                                                        <label class="custom-control-label"
                                                               for="female">{{__('Femme')}}
                                                        </label>
                                                    </div>
                                                </div>
                                                @error('gender')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group col-md-4 mr-1">
                                                <label for="birthday">{{__('Date de naissance')}}</label>
                                                <div class="input-group date">
                                                    <input type="date" class="form-control" id="birthday" name="birthday"
                                                           value="{{ $parishioner->birthday }}" min="1920-01-01" max="2020-01-01">
                                                        </div>
                                                        @error('birthday')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-right m-0 p-3">
                            <button type="submit"
                                    class="btn btn-info text-light font-weight-bold rounded">{{__('Enregistrer')}}
                            </button>
                            <input type="reset" value="{{__('Annuler')}}" class="btn btn-danger font-weight-bold text-light rounded" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.conainer-fluid -->
@stop
