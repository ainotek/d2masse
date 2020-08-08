@extends('admin.template')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <a href="#" class="text-warning">
                        <strong> {{__('Modification')}}</strong>
                    </a>
                </div>
                <form action="{{ route('causes.update', ['cause' => $cause->id]) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="parish_id">{{__('Paroisse')}}</label>
                            <select name="parish_id" id="parish_id" class="form-control">
                                <option value="">----{{ __('Choisir la paroisse') }}----</option>
                                @foreach($parishes as $parish)
                                    <option value="{{ $parish->id }}" {{ $parish->id == $cause->parish_id ? 'selected' : '' }}>{{ $parish->name }}</option>
                                @endforeach
                            </select>
                            @error('parish_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">{{__('Nom')}}</label>
                            <div class="input-group">
                                <input required type="text" id="name" value="{{ $cause->name }}" name="name" class="form-control" placeholder="{{__('Nommer la cause')}}">
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">{{__('Description')}}</label>
                            <div class="input-group">
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Vous pouvez donner une description">{{ $cause->description }}</textarea>
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="text-right">
                            <a href="{{ route('causes.index') }}" class="btn btn-dark" data-dismiss="modal">Annuler</a>
                            <button type="submit" class="btn btn-warning">Créer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
