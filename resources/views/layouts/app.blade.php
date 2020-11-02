<!DOCTYPE html>
<html>
<head>
    <title>Inventory App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
</head>
<body>
    <div class="container">
        <div class="navbar navbar-light">
            <a class="navbar-brand" href="/products">InventoryApp</a>
            <ul class="nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/products">List products</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/products/create">Add product</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="text-center footer">
        <p>Contact</p>
        <p>+36-70/414-9202</p>
        <p>nagypeti222@gmail.com</p>
    </div>
</body>
