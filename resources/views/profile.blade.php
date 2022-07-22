@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{__('User Profile')}}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Current Photo') }}</label>
                    <div class="col-md-6">
                        <img class="profile" src="{{ asset('storage/profiles/'.Auth::user()->profile) }}" alt="Not found.">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('New Photo') }}</label>

                    <div class="col-md-6">
                        <input id="profile" type="file" class="@error('profile') is-invalid @enderror" name="profile" autocomplete="profile" autofocus>

                        @error('profile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection