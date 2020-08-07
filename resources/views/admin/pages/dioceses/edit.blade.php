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
                <form action="{{ route('dioceses.update', ['diocese' => $diocese->id]) }}" method="post">
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
                                <input value="{{ $diocese->name }}" type="text" name="name" class="form-control" placeholder="{{__('Nom')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{__('Localisation')}}
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"></i></span>
                                </div>
                                <input value="{{ $diocese->location }}" type="text" name="location" class="form-control" placeholder="{{__('Localisation')}}">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('dioceses.index') }}" class="btn btn-dark">Annuler</a>
                        <button class="btn btn-warning">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
