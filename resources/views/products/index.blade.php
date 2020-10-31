<!DOCTYPE html>
<html>
<head>
    <title>Inventory App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('products') }}">InventoryApp</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('products') }}">List products</a></li>
        </ul>
    </nav>

    <h1>Products</h1>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
