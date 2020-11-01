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
                <a class="navbar-brand" href="/products">InventoryApp</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/products">List products</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="products/create">Add product</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="text-center footer">
        <h5>Contact</h5>
        <h5>+36-70/414-9202</h5>
        <h5>nagypeti222@gmail.com</h5>
    </div>
</body>
