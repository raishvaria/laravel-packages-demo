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
                        Category
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('category.create') }}" >
                            {{ __('Create Category') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class=>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Ancestors</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $category)
                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>
                                <td>
                                    {{ $category->name }}
                                </td>
                                <td>
                                    @foreach ($category->ancestors as $item)
                                        {{ $item->name }},
                                    @endforeach
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
