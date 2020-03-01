@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Role
                </div>

                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input
                                    id="role"
                                    type="text"
                                    class="form-control @error('role') is-invalid @enderror"
                                    name="role"
                                    value="{{ old('role') }}"
                                    required
                                    autofocus
                                    autocomplete="off"
                                >

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Role') }}
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
