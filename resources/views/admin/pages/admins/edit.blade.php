@extends('admin.template')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <a href="#" class="text-warning">
                        <strong> {{__('Modification de ') . $admin->first_name . ' ' . $admin->last_name}}</strong>
                    </a>
                </div>
                <form action="{{ route('admins.update', ['admin' => $admin->id]) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="first_name">{{__('Nom')}}</label>
                            <input type="text" required class="form-control" name="first_name" id="first_name" value="{{ $admin->first_name }}">
                            @error('first_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="last_name">{{__('Prénoms')}}</label>
                            <input type="text" required class="form-control" name="last_name" id="last_name" value="{{ $admin->last_name }}">
                            @error('last_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">{{__('Téléphone')}}</label>
                            <input type="text" required class="form-control" name="phone" id="phone" value="{{ $admin->phone }}">
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">{{__('Email')}}</label>
                            <input type="email" required class="form-control" name="email" id="email" value="{{ $admin->email }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">{{__('Mot de passe')}}</label>
                            <input type="password" class="form-control" name="password" id="password">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">{{__('Reécrivez le mot de passe')}}</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                            @error('password_confirmation')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="text-right">
                            <button type="reset" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-warning">Créer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
