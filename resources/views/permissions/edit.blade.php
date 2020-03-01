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
                    <form
                        action="{{ route('permissions.update', $permission->id) }}"
                        method="post"
                    >
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="permission" class="col-md-4 col-form-label text-md-right">
                                {{ __('Permission Name') }}
                            </label>

                            <div class="col-md-6">
                                <input
                                    id="permission"
                                    type="text"
                                    class="form-control
                                    @error('permission') is-invalid @enderror"
                                    name="permission"
                                    value="{{ $permission->name }}"
                                    required
                                    autofocus
                                    autocomplete="off"
                                >

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
                                    id="role"
                                    class="form-control
                                    @error('roles') is-invalid @enderror"
                                    name="roles[]"
                                    autofocus
                                    multiple
                                >
                                    @foreach ($roles as $role)
                                        <option
                                            value="{{ $role->id }}"
                                            @if(in_array($role->id, $permission->roles->pluck('id')->toArray()))
                                            selected
                                            @endif
                                        >
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
                        <div class="form-group row">
                            <div class="form-check col-md-6 offset-md-4">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="remove_permission"
                                    id="remove_permission"
                                >
                                <label class="form-check-label" for="remove_permission">
                                    Remove Roles
                                </label>
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
