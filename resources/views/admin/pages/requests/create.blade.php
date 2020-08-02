@extends('admin.template')

@section('content')
    <div class="container-fluid" id="app">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                      <div class="card-header">
                        Formulaire de création d'une demande de Messe
                      </div>
                      <form id="requestForm" action="{{ route('parishioners-request.store') }}" method="post"  data-masses-url="{{route('getMassesByParish', ["id"=> "#id"])}}">
                        @csrf
                        @method('post')
                        <div class="modal-body">
                            <fieldset class="form-group">
                                <label for="select2-2">{{__('Paroisse')}}</label>
                                <select @change="updateParishioner" name="parish_id" id="select2-2" class="select2-single form-control" >
                                    <option value="">---Choisir la Paroisse---</option>
                                    @foreach($parishes as $parish)
                                        <option value="{{ $parish->id }}">{{ $parish->name }}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="select2-1">{{__('Paroissien')}}</label>
                                <select name="parishioner_id" id="select2-1" class="select2-single form-control">
                                    <option value="">---{{ __('Choisir le paroissien') }}---</option>
                                    @foreach($parishioners as $parishioner)
                                        <option value="{{ $parishioner->parishioner_id }}">{{ $parishioner->first_name . ' ' . $parishioner->last_name }}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                            <div class="form-group">
                                <label for="receiver">{{__('Demandeur')}} <small>{{ __('(Si vous n\'êtes pas le demandeur direct de Messe.)') }}</small>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="receiver" class="form-control" id="receiver" placeholder="Nom et Prénoms">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="request_type_id">{{__('Type de demande')}}
                                </label>
                                <div class="input-group">
                                    <select name="request_type_id" id="request_type_id" class="form-control">
                                        <option value="">---{{ __('Type de demande') }}---</option>
                                        @foreach($requestsType as $requestType)
                                            <option value="{{ $requestType->id }}">{{ $requestType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hour">{{__('Messe')}}
                                </label>
                                <div class="input-group">
                                    <select name="masse_id" id="masse_id" class="form-control" autocomplete="off">
                                        <option value="" selected>---Choisir la Messe---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">{{__('Message')}}</label>
                                <div class="input-group">
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="{{ __('Ecrire la demande') }}"></textarea>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="reset" class="btn btn-dark">Annuler</button>
                                <button type="submit" class="btn btn-success">Créer</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/customVue.js') }}"></script>

    <!-- Plugins and scripts required by this views -->
    <script src="{{ asset('vendors/js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('vendors/js/moment.min.js') }}"></script>
    <script src="{{ asset('vendors/js/daterangepicker.min.js') }}"></script>

    <!-- Custom scripts required by this view -->
    <script src="{{ asset('js/views/advanced-forms.js') }}"></script>
@endsection
