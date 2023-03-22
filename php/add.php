<?php
require '../inc/connection.php';

if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['tel']) && isset($_POST['gender']) && isset($_POST['select'])) {

        if (empty($_POST['username'])) {
            header("Location:../php/addUser.php?error=Username field is empty");
            exit();
        } else if (empty($_POST['age'])) {
            header("Location:../php/addUser.php?error=Age field is empty");
            exit();
        }
        // else if (empty($_POST['email'])) {
        //     header("Location:../php/addUser.php?error=Email field is empty");
        //     exit();
        // }
        else if (empty($_POST['password'])) {
            header("Location:../php/addUser.php?error=Password field is empty");
            exit();
        } else if (empty($_POST['tel'])) {
            header("Location:../php/addUser.php?error=Phone field is empty");
            exit();
        } else if (empty($_POST['gender'])) {
            header("Location:../php/addUser.php?error=Gender field is empty");
            exit();
        } else {

            include "../inc/connection.php";

            $userName = mysqli_real_escape_string($connection, $_POST['username']);
            $age = mysqli_real_escape_string($connection, $_POST['age']);
            // $email = mysqli_real_escape_string($connection, $_POST['email']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);
            $phone = mysqli_real_escape_string($connection, $_POST['tel']);
            $gender = mysqli_real_escape_string($connection, $_POST['gender']);
            $position = mysqli_real_escape_string($connection, $_POST['select']);

            $sql = "SELECT * FROM users WHERE name = '$userName'";
            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) > 0) {
                header("Location:../addUser.php?error=User already exists");
                exit();
            } else {
                $sql1 = "INSERT INTO users(name, age, password,phone, gender, position) VALUES('$userName','$age','$password','$phone','$gender', '$position')";
                // die('wdawdaw');
                $result1 = mysqli_query($connection, $sql1);

                if ($result1) {
                    header("Location:../index.php?succ=User was created");
                    exit();
                } else {
                    echo "data is incorrect";
                }
            }
        }
    } else {
        header("Loacation:../php/addUser.php");
        exit();
    }
};
