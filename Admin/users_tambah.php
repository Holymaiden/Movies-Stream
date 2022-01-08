<?php $title = "Tambah | Users";
require_once("./Templates/header.php");
if (isset($_POST['submit'])) {
        tambah_users($_POST);
}
?>
<!-- Content -->
<div class="content ">

        <div class="page-header d-md-flex justify-content-between">
                <div>
                        <h3>Tambah Users</h3>
                </div>
        </div>

        <div class="row">
                <div class="col-md-12">

                        <div class="card">
                                <div class="card-body">
                                        <form action="" method="POST">
                                                <div class="form-group">
                                                        <label for="tambahUsername">Username</label>
                                                        <input name="username" type="text" class="form-control" id="tambahUsername" placeholder="Enter Username">
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahRole">Role</label>
                                                        <select name="role" id="tambahRole" class="form-control">
                                                                <option value="1">Admin</option>
                                                                <option value="2">User</option>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahPassword">Password</label>
                                                        <input name="password" type="password" class="form-control" id="tambahPassword" placeholder="Enter Passwors">
                                                </div>
                                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>

</div>
<!-- ./ Content -->

<?php require_once("./Templates/footer.php") ?>