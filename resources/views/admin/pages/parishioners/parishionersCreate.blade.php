@extends('admin.template')
@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <!-- /.conainer-fluid -->
            <div class="m-auto m-0 p-0">
                <div class="modal-dialog" role="document">
                    <div class="modal-content rounded m-0 p-0">
                        <form action="{{route("parishioners.store")}}" method="post">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">{{__('Creer un paroissien')}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
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
                                                               placeholder="{{__('Nom')}}" required>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <label for="last_name">{{__('Prénom')}}</label>
                                                    <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </span>
                                                        <input type="text" class="form-control" name="last_name"
                                                               id="last_name"
                                                               placeholder="{{__('Prénom')}}" required>
                                                    </div>
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
                                                               placeholder="{{__('Email')}}" required>
                                                    </div>
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
                                                               placeholder="{{__('Téléphone')}}" min="8" max="13"
                                                               required>
                                                    </div>
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
                                                    <input type="password" class="form-control" name="password"
                                                           id="password"
                                                           placeholder="{{__('Mot de passe')}}" required>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label
                                                    for="password_confirmation">{{__('Confirmer le mot de passe')}}</label>
                                                <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-lock"></i>
                                                    </span>
                                                </span>
                                                    <input type="password" class="form-control"
                                                           name="password_confirmation"
                                                           id="password_confirmation"
                                                           placeholder="{{__('Confirmation')}}" required>
                                                </div>
                                            </fieldset>
                                            <div class="row">
                                                <fieldset class="form-group col-auto">
                                                    <label for="parish_id">{{__('Selectionner la paroisse')}}</label>
                                                    <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-home"></i>
                                                    </span>
                                                </span>
                                                        <select name="parish_id" id="parish_id">
                                                            @foreach($parishes as $parish)
                                                                <option
                                                                    value="{{$parish->id}}">{{$parish->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group col-auto">
                                                    <label for="city_id">{{__('Selectionner la ville')}}</label>
                                                    <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-map-marker"></i>
                                                    </span>
                                                </span>
                                                        <select name="city_id" id="city_id">
                                                            @foreach($cities as $city)
                                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-4 mr-0">
                                                    <label>{{__('Détails')}}</label>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="is_baptized"
                                                                   name="is_baptized">
                                                            <label class="custom-control-label"
                                                                   for="is_baptized">{{__('Bâptisé')}}
                                                            </label>
                                                        </div>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="is_catechumen" name="is_catechumen">
                                                            <label class="custom-control-label"
                                                                   for="is_catechumen">{{__('Confirmé')}}
                                                            </label>
                                                        </div>

                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="is_confirmed" name="is_confirmed">
                                                            <label class="custom-control-label"
                                                                   for="is_confirmed">{{__('Catechumen')}}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3 mr-0">
                                                    <label>{{__('Genre')}}</label>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                   id="male" name="gender" value="M" checked required>
                                                            <label class="custom-control-label"
                                                                   for="male">{{__('Homme')}}
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input"
                                                                   id="female" name="gender" value="F">
                                                            <label class="custom-control-label"
                                                                   for="female">{{__('Femme')}}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-4 mr-1">
                                                    <label for="birthday">{{__('Date de naissance')}}</label>
                                                    <div class="input-group date">
                                                        <input type="date" id="birthday" name="birthday"
                                                               value="1990-01-01" min="1920-01-01" max="2020-01-01">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer m-0 p-2">
                                <button type="submit"
                                        class="btn btn-info text-light font-weight-bold rounded">{{__('Enregistrer')}}
                                </button>
                                <button type="button" class="btn btn-danger font-weight-bold text-light rounded"
                                        data-dismiss="modal">{{__('Annuler')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop