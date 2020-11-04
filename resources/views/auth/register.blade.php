@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Rôle') }}</label>

                            <div class="col-md-6">
                                <select type="text" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required autocomplete="role_id" autofocus>
                                {{-- @foreach($role as $roles)
                                    <option value="{{$roles->role_id}}">{{$roles->role}}</option>
                                @endforeach --}}
                                <option value="2">Conducteur</option>
                                <option value="3">Propriétaire</option>
                                <option value="4">Passager</option>

                                </select>                                
                                @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail du propriétaire') }}</label>

                            <div class="col-md-6">
                                {{-- <select id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" pattern="[^\s]" autocomplete="email">
                                    <option value=""></option>
                                    {{-- <option selected value=""></option>
                                @foreach($proprietaire as $proprio)
                                    <option value="{{$proprio->proprietaire_id}}">{{$proprio->email}}</option>
                                @endforeach --}}
                                {{-- <option value="1">dianesandrineoued@gmail.com</option>
                                <option value="2">desse.maryvonne@gmail.com</option>
                                </select>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail du passager') }}</label>

                            <div class="col-md-6">
                                <select id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" pattern="[^\s]" autocomplete="email">
                                    {{-- <option selected value=""></option>
                                @foreach($passager as $client)
                                    <option value="{{$client->passager_id}}">{{$client->email}}</option>
                                @endforeach --}}
                                {{-- <option value=""></option>
                                <option value="1">dianesandrineoued@gmail.com</option>
                                <option value="3">devwebfullstack@gmail.com</option>
                                </select>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}
{{-- 
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail du conducteur') }}</label>

                            <div class="col-md-6">
                                <select id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" pattern="[^\s]" autocomplete="email">
                                    {{-- <option selected value=""></option>
                                @foreach($conducteur as $chauffeur)
                                    <option value="{{$chauffeur->conducteur_id}}">{{$chauffeur->email}}</option>
                                @endforeach --}}
                                {{-- <option value=""></option>
                                <option value="1">dianesandrineoued@gmail.com</option>
                                <option value="1">felicitemaryvonne@gmail.com</option>
                                </select>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
