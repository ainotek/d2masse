@extends('admin.template')

@section('content')
    <div class="container-fluid" id="app">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                      <div class="card-header">
                          <h5 class="modal-title">{{__('Création d\'une demande de Messe')}}</h5>
                      </div>
                        <form id="requestForm" action="{{ route('parishioners-request.store') }}" method="post"
                              data-masses-url="{{route('getMassesByParish', ["id"=> "#id"])}}"
                              data-templates-url="{{route('getTemplatesById', ["id"=> "#id"])}}">
                            @csrf
                            <div class="modal-body">
                                <fieldset class="form-group">
                                    <div>
                                        <label for="select2-2">{{__('Paroisse')}}</label>
                                    </div>
                                    <select name="parish_id" id="select2-2" class="select2-single form-control">
                                        <option value="">---Choisir la Paroisse---</option>
                                        @foreach($parishes as $parish)
                                            <option value="{{ $parish->id }}">{{ $parish->name }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                                <div class="form-group">
                                    <label for="receiver">{{__('Demandeur')}}
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="receiver" class="form-control" id="receiver"
                                               placeholder="Nom et Prénoms">
                                        <input type="hidden" name="return_url" class="form-control" id="receiver"
                                               value="{{route('home')}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="request_type_id">{{__('Type de demande')}}
                                    </label>
                                    <div class="input-group">
                                        <select name="request_type_id" id="request_type_id" class="form-control">
                                            <option value="">---{{ __('Type de demande') }}---</option>
                                            @foreach($requestTypes as $requestType)
                                                <option value="{{ $requestType->id }}">{{ $requestType->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mass_id">{{__('Messe')}}
                                    </label>
                                    <div class="input-group">
                                        <select name="mass_id" id="mass_id" class="form-control" autocomplete="off">
                                            <option value="" selected>---Choisir la Messe---</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <label class="mr-2" for="use-template">{{__('Utiliser un Template?')}}</label>
                                        <input class="ml-2 mt-1" id="use-template" type="checkbox">
                                    </div>
                                </div>
                                <div id="template-select-div" class="form-group d-none">
                                    <label for="template-select-input">{{__('Template')}}
                                    </label>
                                    <div class="input-group">
                                        <select name="request_template_id" id="template-select-input" class="form-control">
                                            <option value="">---{{ __('Template de demande') }}---</option>
                                            @foreach($requestTemplates as $requestTemplate)
                                                <option value="{{ $requestTemplate->id }}">{{ $requestTemplate->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message-textarea">{{__('Message')}}</label>
                                    <div class="input-group">
                                        <textarea name="message" id="message-textarea" cols="30" rows="5" class="form-control"
                                                  placeholder="{{ __('Ecrire la demande (texte limité à 120 charactere)') }}"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right m-0 p-3">
                                    <button type="submit"
                                            class="btn btn-primary text-light font-weight-bold rounded">{{__('Enregistrer')}}
                                    </button>
                                    <button type="reset"
                                            class="btn btn-danger font-weight-bold text-light rounded">{{__('Annuler')}}
                                    </button>
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
