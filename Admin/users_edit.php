<?php $title = "Edit | Users";
require_once("./Templates/header.php");
$users = single("SELECT * FROM `users` WHERE `id`=" . $_GET['v'] . "");
if (isset($_POST['submit'])) {
        edit_users($_POST);
}
?>

<!-- Content -->
<div class="content ">
        <div class="page-header d-md-flex justify-content-between">
                <div>
                        <h3>Edit Users</h3>
                </div>
        </div>

        <div class="row">
                <div class="col-md-12">

                        <div class="card">
                                <div class="card-body">
                                        <form action="" method="POST">
                                                <input name="id" type="hidden" value="<?= $_GET['v'] ?>">
                                                <div class="form-group">
                                                        <label for="tambahUsers">Username</label>
                                                        <input type="text" name="username" id="tambahUsers" class="form-control" value="<?= $users['username'] ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahRole">Role</label>
                                                        <select name="role" id="tambahRole" class="form-control">
                                                                <option <?php if ($users['role'] == '1') echo 'selected' ?> value="1">Admin</option>
                                                                <option <?php if ($users['role'] == '2') echo 'selected' ?> value="2">User</option>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahPassword">Password</label>
                                                        <input name="password" type="password" class="form-control" id="tambahPassword" placeholder="Enter Password">
                                                </div>
                                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
</div>
<!-- ./ Content -->