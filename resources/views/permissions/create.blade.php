@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Permission
                </div>

                <div class="card-body">
                    <form action="{{ route('permissions.store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="permission" class="col-md-4 col-form-label text-md-right">
                                {{ __('Permission Name') }}
                            </label>

                            <div class="col-md-6">
                                <input id="permission" type="text" class="form-control @error('permission') is-invalid @enderror" name="permission" value="{{ old('permission') }}" required autofocus autocomplete="off">

                                @error('permission')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="parent" class="col-md-4 col-form-label text-md-right">
                                {{ __('Roles') }}
                            </label>

                            <div class="col-md-6">
                                <select
                                    multiple
                                    id="role"
                                    class="form-control @error('roles') is-invalid @enderror"
                                    name="roles[]"
                                    autofocus
                                >
                                    <option>None</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
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
                                    {{ __('Save Permission') }}
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
