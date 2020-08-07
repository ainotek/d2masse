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
                <form action="{{ route('request-types.update', ['request_type' => $requestType->id]) }}" method="post">
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
                                <input value="{{ $requestType->name }}" type="text" name="name" class="form-control" placeholder="{{__('Nom')}}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{__('Description')}}
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"></i></span>
                                </div>
                                <input value="{{ $requestType->description }}" type="text" name="description" class="form-control" placeholder="{{__('Description')}}">
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('request-types.index') }}" class="btn btn-dark">Annuler</a>
                        <button type="submit" class="btn btn-warning">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
