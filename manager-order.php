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
    <link rel="stylesheet" href="css/manager-order.css">
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
        <div class="container-fluid main">
            <h1>Manager Order</h1>
            <div class="row">
                <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.N.</th>
                            <th scope="col">Food</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total</th>
                            <th scope="col">Order date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Customer name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mixed pizza</td>
                            <td>10.00</td>
                            <td>2</td>
                            <td>20.000</td>
                            <td>2020-11-30 04:07:17</td>
                            <td class="status-deli">Delivered</td>
                            <td>Jana Bush</td>
                            <td>+1 (562) 101-2028</td>
                            <td>tydujy@mailinator.com</td>
                            <td>Minima iure ducimus</td>
                            <td><p class="update-order">Update Order</p> </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                            <td>Best Burger</td>
                            <td>4.00</td>
                            <td>4</td>
                            <td>16.000</td>
                            <td>2020-11-30 03:52:43</td>
                            <td class="status-deli">Delivered</td>
                            <td>Kenny Dillard</td>
                            <td>+1 (908) 914-3106</td>
                            <td>fexekihor@mailinator.com</td>
                            <td>Incidunt ipsum ad d</td>
                            <td><p class="update-order">Update Order</p> </td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                            <td>Sadeko Momo</td>
                            <td>6.00</td>
                            <td>3</td>
                            <td>18.000</td>
                            <td>2020-11-30 03:49:48</td>
                            <td class="status-can">Cancelled</td>
                            <td>Bradley Farrell</td>
                            <td>+1 (576) 101-2028</td>
                            <td>zuhafiq@mailinator.com</td>
                            <td>Duis aliqua Qui lor</td>
                            <td> <p class="update-order">Update Order</p> </td>
                        </tr>
                    </tbody>
                </table>
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