<!DOCTYPE html>
<html>
<head>
    <title>Inventory App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
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
