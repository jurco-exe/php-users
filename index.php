<?php
$actualPage = 'Crud | Users';
include 'inc/header.php'; ?>

<body>
  <h1></h1>
  <div class="container">
    <div class="row mt-5">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="display-5">USERS</h3>
            <a href="./php/addUser.php" class="btn btn-success h-50">Add User</a>
          </div>
          <div class="card-body">
            <table class="table table-striped table-bordered border-primary rounded">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Age</th>
                  <th scope="col">Password</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Position</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                <?php include './inc/connection.php';

                $sql = "SELECT * FROM users";

                $result = mysqli_query($connection, $sql);

                while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <th scope="row">1</th>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['age'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['position'] ?></td>
                    <td><a href="#" class="btn btn-info">View</a> <a href="#" class="btn btn-warning">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'inc/footer.php'; ?>
</body>

</html>