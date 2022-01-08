<?php

$connect = mysqli_connect("localhost", "root", "", "movie_stream");

function single($query)
{
        global $connect;
        $data = mysqli_query($connect, $query);
        $data = mysqli_fetch_assoc($data);
        return $data;
}

function many($query)
{
        global $connect;
        $hasil = mysqli_query($connect, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($hasil)) {
                $rows[] = $row;
        }
        return $rows;
}

function rows($query)
{
        global $connect;
        $data = mysqli_query($connect, $query);
        $data = mysqli_num_rows($data);
        return $data;
}

function login($data)
{
        $name = $data['username'];
        $pass = $data['password'];

        $sql = many("SELECT * FROM users WHERE username='" . $name . "' AND pass='" . $pass . "'");
        if ($sql > 0) {
                session_start();
                $data = single("SELECT * FROM users WHERE username='" . $name . "' AND pass='" . $pass . "'");
                $_SESSION['username'] = $data['username'];
                $_SESSION['l'] = $data['role'];
                $_SESSION['i'] = $data['id'];
                if ($sql) {
                        if ($data['role'] != 1) {
                                echo "<script>window.location.replace('index.php');</script>";
                        } else {
                                echo "<script>window.location.replace('Admin/index.php');</script>";
                        }
                } else {
                        echo "<script>alert('Username atau Password Salah')</script>";
                }
        } else {
                echo "<script>alert('Username atau Password Salah')</script>";
        }
}

function register($data)
{
        global $connect;
        $username = $data['username'];
        $pass = $data['password'];

        $sql = many("SELECT * FROM users WHERE username='" . $username . "'");
        if (count($sql) == 0) {
                session_start();
                $data = mysqli_query($connect, "INSERT INTO `users` (`username`, `pass`, `role`) VALUES ('" . $username . "','" . $pass . "','2')");
                $v = single("SELECT * FROM users WHERE username='" . $username . "'");
                $_SESSION['username'] = $username;
                $_SESSION['i'] = $v['id'];
                $_SESSION['l'] = 2;
                if ($data) {
                        echo "<script>window.location.replace('index.php');</script>";
                } else {
                        echo "<script>alert('Tidak Dapat Register')</script>";
                }
        } else {
                echo "<script>alert('Username Sudah Ada')</script>";
        }
}
