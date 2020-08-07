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
                <form action="{{ route('cities.update', ['city' => $city->id]) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
                        <div class="form-group">
                            <label>{{__('Pays')}}
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"></i></span>
                                </div>
                                <select name="country_id" id="country_id" class="form-control">
                                    <option value="">----{{ __('Choisir le pays') }}----</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}" {{ $country->id == $city->country_id ? 'selected' : '' }}>{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                @error('country_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{__('Nom')}}
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-edit"></i></span>
                                </div>
                                <input value="{{ $city->name }}" type="text" name="name" class="form-control" placeholder="{{__('Nom')}}">
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('cities.index') }}" class="btn btn-dark">Annuler</a>
                        <button class="btn btn-warning">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
