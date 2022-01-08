<?php $title = "Tambah | Movies";
require_once("./Templates/header.php");
$category = many("SELECT * FROM `categorys`");
if (isset($_POST['submit'])) {
        tambah_movies($_POST, $_FILES['image'], $_FILES['movie']);
}
?>
<!-- Content -->
<div class="content ">

        <div class="page-header d-md-flex justify-content-between">
                <div>
                        <h3>Tambah Movies</h3>
                </div>
        </div>

        <div class="row">
                <div class="col-md-12">

                        <div class="card">
                                <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                        <label for="tambahName">Name</label>
                                                        <input type="text" name="name" class="form-control" id="tambahName">
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahCategory">Category</label>
                                                        <select name="category" id="tambahCategory" class="form-control">
                                                                <?php foreach ($category as $v) : ?>
                                                                        <option value="<?= $v['id'] ?>"><?= $v['name'] ?></option>
                                                                <?php endforeach ?>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahStory">Story</label>
                                                        <textarea name="story" class="form-control" id="tembahStory"></textarea>
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahDirector">Director</label>
                                                        <input type="text" name="director" class="form-control" id="tambahDirector">
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahCountry">Country</label>
                                                        <input type="text" name="country" class="form-control" id="tambahCountry">
                                                </div>
                                                <div class="form-group">
                                                        <label for="releaseDate">Release Date</label>
                                                        <input type="text" name="date" class="form-control" id="releaseDate">
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahImage">Image</label>
                                                        <input type="file" name="image" class="form-control" id="tambahImage">
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahMovie">Movie</label>
                                                        <input type="file" name="movie" class="form-control" id="tambahMovie">
                                                </div>
                                                <div class="form-group">
                                                        <label for="tambahStatus">Status</label>
                                                        <select name="status" id="tambahStatus" class="form-control">
                                                                <option value="upcoming">Upcoming</option>
                                                                <option value="release">Release</option>
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