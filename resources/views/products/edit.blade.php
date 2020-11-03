@extends('layouts.app')

@section('content')

<h2>@lang('layout.edit')</h2>

<form action="{{ route('products.destroy', $product->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" title="delete">
        <i class="fas fa-trash fa-lg text-danger"></i>
    </button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Something went wrong.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>@lang('products.name')</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>@lang('products.price')</strong>
                <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">@lang('form.submit')</button>
        </div>
    </div>
</form>


@endsection
