<?php $title = "Edit | Transaksi";
require_once("./Templates/header.php");
$category = many("SELECT * FROM `categorys`");
$movies = single("SELECT * FROM `movies` WHERE id=" . $_GET['v'] . "");

if (isset($_POST['submit'])) {
        edit_movies($_POST, $_FILES['image'], $_FILES['movie']);
}
?>
<!-- Content -->
<div class="content ">

        <div class="page-header d-md-flex justify-content-between">
                <div>
                        <h3>Edit Movies</h3>
                </div>
        </div>

        <div class="row">
                <div class="col-md-12">

                        <div class="card">
                                <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                                <input name="id" type="hidden" value="<?= $_GET['v'] ?>">
                                                <div class="form-group">
                                                        <label for="updateName">Name</label>
                                                        <input type="text" name="name" class="form-control" id="updateName" value="<?= $movies['name'] ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label for="updateCategory">Category</label>
                                                        <select name="category" id="updateCategory" class="form-control">
                                                                <?php foreach ($category as $v) : ?>
                                                                        <option <?php if ($movies['category_id'] == $v['id']) echo 'selected' ?> value="<?= $v['id'] ?>"><?= $v['name'] ?></option>
                                                                <?php endforeach ?>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                        <label for="updateStory">Story</label>
                                                        <textarea name="story" class="form-control" id="tembahStory"><?= $movies['story'] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                        <label for="updateDirector">Director</label>
                                                        <input type="text" name="director" class="form-control" id="updateDirector" value="<?= $movies['director'] ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label for="updateCountry">Country</label>
                                                        <input type="text" name="country" class="form-control" id="updateCountry" value="<?= $movies['country'] ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label for="releaseDate">Release Date</label>
                                                        <input type="text" name="date" class="form-control" id="releaseDate"">
                                                </div>
                                                <div class=" form-group">
                                                        <label for="updateImage">Image</label>
                                                        <input type="file" name="image" class="form-control" id="updateImage" value="<?= $movies['image'] ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label for="updateMovie">Movie</label>
                                                        <input type="file" name="movie" class="form-control" id="updateMovie" value="<?= $movies['video'] ?>">
                                                </div>
                                                <div class="form-group">
                                                        <label for="updateStatus">Status</label>
                                                        <select name="status" id="updateStatus" class="form-control">
                                                                <option <?php if ($movies['status'] == 'upcoming') echo 'selected' ?> value="upcoming">Upcoming</option>
                                                                <option <?php if ($movies['status'] == 'release') echo 'selected' ?> value="release">Release</option>
                                                        </select>
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

<script>
        $('input[name="date"]').daterangepicker({
                timePicker: true,
                singleDatePicker: true,
                showDropdowns: true
        });
</script>