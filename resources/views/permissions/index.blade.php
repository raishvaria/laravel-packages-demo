@extends('layouts.app')

@section('styles')
<style>

</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        Permission
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('permissions.create') }}" >
                            {{ __('Create Permission') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class=>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $key => $permission)
                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>
                                <td>
                                    {{ $permission->name }}
                                </td>
                                <td>
                                    @foreach ($permission->roles as $role)
                                        {{ $role->name }} |
                                    @endforeach
                                </td>
                                 <td>
                                    <a
                                        class="btn btn-primary"
                                        href="{{ route('permissions.edit', $permission->id)}}"
                                    >
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
