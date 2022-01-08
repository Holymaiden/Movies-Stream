<?php $title = "Home | Images";
require_once("./Templates/header.php");
$images = many("SELECT `images`.*,`movies`.`name` FROM `images` LEFT JOIN `movies` ON `images`.`movie_id`=`movies`.`id`");
?>

<!-- Content -->
<div class="content ">

        <div class="page-header d-md-flex justify-content-between">
                <div>
                        <h3>Images</h3>
                </div>
                <div class="mt-2 mt-md-0">
                        <a href="images_tambah.php"><button type="button" class="btn btn-primary">
                                        Baru
                                </button></a>
                </div>
        </div>

        <div class="row">
                <div class="col-md-12">

                        <div class="card">
                                <div class="card-body">
                                        <div class="table-responsive">
                                                <table id="user-list" class="table table-lg">
                                                        <thead>
                                                                <tr>
                                                                        <th>
                                                                                <div class="custom-control custom-checkbox">
                                                                                        <input type="checkbox" class="custom-control-input" id="user-list-select-all">
                                                                                        <label class="custom-control-label" for="user-list-select-all"></label>
                                                                                </div>
                                                                        </th>
                                                                        <th>ID</th>
                                                                        <th>Movies</th>
                                                                        <th>Gambar</th>
                                                                        <th>Alt</th>
                                                                        <th class="text-right">Action</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <?php foreach ($images as $i => $v) : ?>
                                                                        <tr>
                                                                                <td></td>
                                                                                <td><?= ++$i ?></td>
                                                                                <td><?= $v['name'] ?></td>
                                                                                <td>
                                                                                        <figure class="avatar avatar-lg mr-2">
                                                                                                <img src="../images/<?= $v['source'] ?>" class="rounded" alt="avatar">
                                                                                        </figure>
                                                                                </td>
                                                                                <td><?= $v['alt'] ?></td>
                                                                                <td class="text-right">
                                                                                        <div class="dropdown">
                                                                                                <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                                                                        <i class="ti-more-alt"></i>
                                                                                                </a>
                                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                                        <a href="images_edit.php?v=<?= $v['id'] ?>" class="dropdown-item">Edit</a>
                                                                                                        <a href="images_hapus.php?v=<?= $v['id'] ?>" class="dropdown-item text-danger">Delete</a>
                                                                                                </div>
                                                                                        </div>
                                                                                </td>
                                                                        </tr>
                                                                <?php endforeach ?>
                                                        </tbody>
                                                </table>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

</div>
<!-- ./ Content -->

<?php require_once("./Templates/footer.php") ?>