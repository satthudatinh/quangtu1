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
    <link rel="stylesheet" href="css/manager-category.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
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
            <h1>Manage Category</h1>
            <a class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Add Category</a>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.N.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Feature</th>
                            <th scope="col">Active</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Pizza</td>
                            <td><img src="./img/pizza.jpg" alt="" class="img-main"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button class="update">Update Admin</button>
                                <button class="delete">Delete Admin</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope=" row">2</th>
                            <td>Burger</td>
                            <td><img src="./img/burger.jpg" alt="" class="img-main"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button class="update">Update Admin</button>
                                <button class="delete">Delete Admin</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope=" row">3</th>
                            <td>Momo</td>
                            <td><img src="./img/momo.jpg" alt="" class="img-main"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button class="update">Update Admin</button>
                                <button class="delete">Delete Admin</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope=" row">4</th>
                            <td>Quia est ipsum id id</td>
                            <td><img src="./img/momo.jpg" alt="" class="img-main"></td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>
                                <button class="update">Update Admin</button>
                                <button class="delete">Delete Admin</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

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
</body>

</html>