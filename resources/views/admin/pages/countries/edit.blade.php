@extends('admin.template')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <a href="#" class="text-warning">
                        <strong> {{__('Modification')}}</strong>
                    </a>
                </div>
                <form action="{{ route('countries.update', ['country' => $country->id]) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
                        <div class="form-group">
                            <label>{{__('Nom')}}
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"></i></span>
                                </div>
                                <input value="{{ $country->name }}" type="text" name="name" class="form-control" placeholder="{{__('Nom')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{__('Code ISO')}}
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"></i></span>
                                </div>
                                <input value="{{ $country->iso }}" type="text" name="iso" class="form-control" placeholder="{{__('Excemple : CI')}}">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('countries.index') }}" class="btn btn-dark">Annuler</a>
                        <button class="btn btn-warning">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
