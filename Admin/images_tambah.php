<?php $title = "Tambah | Image";
require_once("./Templates/header.php");
$movies = many("SELECT * FROM `movies`");
if (isset($_POST['submit'])) {
        tambah_images($_POST, $_FILES['image']);
}
?>
<!-- Content -->
<div class="content ">

        <div class="page-header d-md-flex justify-content-between">
                <div>
                        <h3>Tambah Images</h3>
                </div>
        </div>

        <div class="row">
                <div class="col-md-12">

                        <div class="card">
                                <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                        <label for="tambahMovie">Movie</label>
                                                        <select name="movie" id="tambahMovie" class="form-control">
                                                                <?php foreach ($movies as $v) : ?>
                                                                        <option value="<?= $v['id'] ?>"><?= $v['name'] ?></option>
                                                                <?php endforeach ?>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahAlt">Alt</label>
                                                        <input name="alt" type="text" class="form-control" id="tambahAlt" placeholder="Enter Alt">
                                                </div>
                                                <div class="form-group">
                                                        <label for="customFileUpdate">Gambar</label>
                                                        <div class="custom-file">
                                                                <input name="image" type="file" class="custom-file-input" id="customFileUpdate">
                                                                <label class="custom-file-label" for="customFileUpdate">Choose Image</label>
                                                        </div>
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