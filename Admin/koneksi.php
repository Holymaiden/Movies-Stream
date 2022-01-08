<?php
require_once("../koneksi.php");

function tambah_users($data)
{
        global $connect;
        $username = $data['username'];
        $role = $data['role'];
        $password = $data['password'];

        $sql = mysqli_query($connect, "INSERT INTO `users` (`username`, `pass`, `role`) VALUES ('" . $username . "','" . $password . "'," . $role . ")");
        if ($sql) {
                echo "<script>window.location.replace('users.php');</script>";
        } else {
                echo "<script>alert('Gagal Tambah Data')</script>";
        }
}

function edit_users($data)
{
        global $connect;
        $username = $data['username'];
        $role = $data['role'];
        $password = $data['password'];

        $sql = mysqli_query($connect, "UPDATE `users` SET `username`='" . $username . "', `role`='" . $role . "', `pass`='" . $password . "' WHERE id=" . $data['id'] . "");
        if ($sql) {
                echo "<script>window.location.replace('users.php');</script>";
        } else {
                echo "<script>alert('Gagal Edit Data')</script>";
        }
}

function hapus($data, $tb)
{
        global $connect;

        $sql = mysqli_query($connect, "DELETE FROM $tb WHERE id=" . $data . "");
        if ($sql) {
                if ($tb == "users")
                        echo "<script>window.location.replace('users.php');</script>";
                else if ($tb == "tbl_kamar")
                        echo "<script>window.location.replace('kamar.php');</script>";
                else
                        echo "<script>window.location.replace('movies.php');</script>";
        } else {
                echo "<script>alert('Gagal Hapus Data')</script>";
        }
}

function tambah_kamar($data, $file)
{
        global $connect;
        $no_kamar = $data['no_kamar'];
        $jenis = $data['jenis'];
        $harga = $data['harga'];

        $filename = date('Y-m-d') . $file['name'];
        $tempname =  $file['tmp_name'];
        $folder = "image/" . $filename;


        $sql = mysqli_query($connect, "INSERT INTO `tbl_kamar` (`no_kamar`, `jenis`, `harga`, `image`) VALUES (" . $no_kamar . ",'" . $jenis . "','" . $harga . "','" . $filename . "')");
        if ($sql) {
                if (move_uploaded_file($tempname, $folder)) {
                        echo "<script>window.location.replace('kamar.php');</script>";
                } else {
                        echo "<script>alert('Gagal Tambah Image')</script>";
                }
        } else {
                echo "<script>alert('Gagal Tambah Data')</script>";
        }
}

function edit_kamar($data, $file)
{
        global $connect;
        $no_kamar = $data['no_kamar'];
        $jenis = $data['jenis'];
        $harga = $data['harga'];

        $filename = date('Y-m-d') . $file['name'];
        $tempname =  $file['tmp_name'];
        $folder = "image/" . $filename;


        $sql = mysqli_query($connect, "INSERT INTO `tbl_kamar` (`no_kamar`, `jenis`, `harga`, `image`) VALUES (" . $no_kamar . ",'" . $jenis . "','" . $harga . "','" . $filename . "')");
        if ($sql) {
                if (move_uploaded_file($tempname, $folder)) {
                        echo "<script>window.location.replace('kamar.php');</script>";
                } else {
                        echo "<script>alert('Gagal Tambah Image')</script>";
                }
        } else {
                echo "<script>alert('Gagal Tambah Data')</script>";
        }
}

function tambah_movies($data, $image, $movie)
{
        global $connect;
        $name = $data['name'];
        $category = $data['category'];
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
        $story = $data['story'];
        $date = $data['date'];
        $director = $data['director'];
        $country = $data['country'];
        $status = $data['status'];

        $filename = date('Y-m-d') . $image['name'];
        $tempname =  $image['tmp_name'];
        $folder = "../images/" . $filename;

        $moviename = date('Y-m-d') . $movie['name'];
        $tempmovie =  $movie['tmp_name'];
        $foldermovie = "../videos/" . $moviename;

        $date = strtotime($date);
        $date = date('Y-m-d', $date);

        $sql = mysqli_query($connect, "INSERT INTO `movies` (`name`, `slug`, `category_id`,`story`,`release_date`,`director`,`country`,`image`,`video`,`status`) VALUES ('" . $name . "','" . $slug . "'," . $category . ",'" . $story . "','" . $date . "','" . $director . "','" . $country . "','" . $filename . "','" . $moviename . "','" . $status . "')");
        if ($sql) {
                if (move_uploaded_file($tempname, $folder) && move_uploaded_file($tempmovie, $foldermovie)) {
                        echo "<script>window.location.replace('movies.php');</script>";
                } else {
                        echo "<script>alert('Gagal Tambah Image atau Video')</script>";
                }
        } else {
                echo "<script>alert('Gagal Tambah Data')</script>";
        }
}

function edit_movies($data, $image, $movie)
{
        global $connect;
        $name = $data['name'];
        $category = $data['category'];
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
        $story = $data['story'];
        $date = $data['date'];
        $director = $data['director'];
        $country = $data['country'];
        $status = $data['status'];

        $filename = date('Y-m-d') . $image['name'];
        $tempname =  $image['tmp_name'];
        $folder = "../images/" . $filename;

        $moviename = date('Y-m-d') . $movie['name'];
        $tempmovie =  $movie['tmp_name'];
        $foldermovie = "../videos/" . $moviename;

        $date = strtotime($date);
        $date = date('Y-m-d', $date);

        $sql = mysqli_query($connect, "UPDATE `movies` SET `name`='" . $name . "', `slug`='" . $slug . "', `category_id`=" . $category . ",`story`='" . $story . "',`release_date`='" . $date . "',`director`='" . $director . "',`country`='" . $country . "',`image`='" . $filename . "',`video`='" . $moviename . "',`status`='" . $status . "' WHERE id=" . $data['id'] . "");
        if ($sql) {
                if (move_uploaded_file($tempname, $folder) && move_uploaded_file($tempmovie, $foldermovie)) {
                        echo "<script>window.location.replace('movies.php');</script>";
                } else {
                        echo "<script>alert('Image atau Video Gagal Diedit')</script>";
                }
        } else {
                echo "<script>alert('Data Gagal Diedit')</script>";
        }
}
