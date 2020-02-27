@extends('layouts.app')

@section('styles')
<style>
    .logo {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .heading {
        text-align: center;
        margin-top: 20px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    User Profile
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="logo">
                        <img
                            src="{{ asset(auth()->user()->profile) }}"
                            alt="user-profile"
                            width="150"
                            height="150"
                        >
                    </div>
                    <h3 class="heading">
                       Welcome {{ auth()->user()->name }}!
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
