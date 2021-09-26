<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="css1/dashboard.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                    <ul class="nav justify-content-end nav-home">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid main-dashboard">
            <div class="row bg-light">
                <h1>Dash board</h1>
                <div class="col-md-3 col-board">
                    <div class="card-body card">
                        <h2>4</h2>
                        <p class="card-text food-text">Categories</p>
                    </div>
                </div>
                <div class="col-md-3 col-board">
                    <div class="card-body card">
                        <h2>6</h2>
                        <p class="card-text food-text">Foods</p>
                    </div>
                </div>
                <div class="col-md-3 col-board">
                    <div class="card-body card">
                        <h2>3</h2>
                        <p class="card-text food-text">Total order</p>
                    </div>
                </div>
                <div class="col-md-3 col-board">
                    <div class="card-body card">
                        <h2>$36.00</h2>
                        <p class="card-text food-text">Revenue Generated</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid div-footer">
            <div class="row">
                <div class="col-md-12">
                    <p class="footer-text">2020 All right reserved, Food House. Developed By - <a href="">CSE485</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>