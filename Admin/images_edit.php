<?php $title = "Edit | Images";
require_once("./Templates/header.php");
$movies = many("SELECT * FROM `movies`");
$images = single("SELECT * FROM `images` WHERE id=" . $_GET['v'] . "");

if (isset($_POST['submit'])) {
        edit_images($_POST, $_FILES['image']);
}
?>
<!-- Content -->
<div class="content ">

        <div class="page-header d-md-flex justify-content-between">
                <div>
                        <h3>Edit Images</h3>
                </div>
        </div>

        <div class="row">
                <div class="col-md-12">

                        <div class="card">
                                <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                                <input name="id" type="hidden" value="<?= $_GET['v'] ?>">
                                                <div class="form-group">
                                                        <label for="updateMovie">Movie</label>
                                                        <select name="movie" id="updateMovie" class="form-control">
                                                                <?php foreach ($movies as $v) : ?>
                                                                        <option <?php if ($images['movie_id'] == $v['id']) echo 'selected'  ?> value="<?= $v['id'] ?>"><?= $v['name'] ?></option>
                                                                <?php endforeach ?>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                        <label for="updateAlt">Alt</label>
                                                        <input name="alt" type="text" class="form-control" id="updateAlt" placeholder="Enter Alt" value="<?= $images['alt'] ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label for="customFileUpdate">Gambar</label>
                                                        <div class="custom-file">
                                                                <input name="image" type="file" class="custom-file-input" id="customFileUpdate" value="<?= $images['source'] ?>">
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