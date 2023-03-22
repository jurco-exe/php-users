<?php
$actualPage = 'Crud | Users';
include('../inc/header.php'); ?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud | Add Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/main.css">
</head> -->


<body>
    <h1></h1>
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 mx-auto">
                <div class="card border border-dark p-2 rounded">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="display-5">ADD USER</h3>
                        <a href="../index.php" class="btn btn-light border border-dark">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="add.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name<span>*</span></label>
                                <input type="text" class="form-control border border-dark" id="username" aria-describedby="namehelp" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Age<span>*</span></label>
                                <input type="text" class="form-control border border-dark" id="age" aria-describedby="agehelp" name="age">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email<span>*</span></label>
                                <input type="email" class="form-control border border-dark" id="age" aria-describedby="agehelp" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password<span>*</span></label>
                                <input type="password" class="form-control border border-dark" id="password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Phone<span>*</span></label>
                                <input type="tel" class="form-control border border-dark" id="tel" name="tel">
                            </div>
                            <div class="mb-3 row">
                                <div class="col-4">
                                    <h5>Gender*</h5>
                                    <div class="mb-3 form-check">
                                        <input type="radio" class="form-check-input border border-dark" id="radio" name="gender">
                                        <label class="form-check-label " for="radio">Male</label>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="radio" class="form-check-input border border-dark" id="radio" name="gender">
                                        <label class="form-check-label " for="radio">Female</label>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="radio" class="form-check-input border border-dark" id="radio" name="gender">
                                        <label class="form-check-label " for="radio">Other</label>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <select class="form-select" aria-label="Default select example" name="select">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="submit" class="btn btn-dark">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>