@extends('layouts.app')

@section('content')

<h1>@lang('layout.add')</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <strong>@lang('products.image')</strong>
        <input type="file" name="image" placeholder="Image">
    </div>
    <div class="form-row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>@lang('products.name')</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>@lang('products.price')</strong>
                <input class="form-control" name="price" placeholder="Price">
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">@lang('form.submit')</button>
    </div>
</form>

@endsection

