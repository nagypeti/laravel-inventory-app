@extends('layouts.app')

@section('content')

<h1>@lang('layout.products')</h1>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>@lang('products.id')</td>
        <td>@lang('products.name')</td>
        <td>@lang('products.price')</td>
        <td>@lang('layout.actions')</td>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">
                    <i class="fas fa-edit fa-lg"></i>
                </a>
                <a href="{{ route('products.show', $product->id) }}" title="show">
                    <i class="fas fa-eye text-success fa-lg"></i>
                </a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="delete">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
