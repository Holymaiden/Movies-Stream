<?php $title = "Home | Movies";
require_once("./Templates/header.php");
$movies = many("SELECT `movies`.*,`categorys`.`name` as `category_name` FROM `movies` LEFT JOIN `categorys` ON `movies`.`category_id`=`categorys`.`id`");
?>

<!-- Content -->
<div class="content ">

        <div class="page-header d-md-flex justify-content-between">
                <div>
                        <h3>Movies</h3>
                </div>
                <div class="mt-2 mt-md-0">
                        <a href="movies_tambah.php"><button type="button" class="btn btn-primary">
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
                                                                        <th>Image</th>
                                                                        <th>Movie</th>
                                                                        <th>Nama</th>
                                                                        <th>Category</th>
                                                                        <th>Story</th>
                                                                        <th>Release Date</th>
                                                                        <th>Director</th>
                                                                        <th>Country</th>
                                                                        <th>Status</th>
                                                                        <th class="text-right">Action</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <?php foreach ($movies as $i => $v) : ?>
                                                                        <tr>
                                                                                <td></td>
                                                                                <td><?= ++$i ?></td>
                                                                                <td>
                                                                                        <figure class="avatar avatar-lg mr-2">
                                                                                                <img src="../images/<?= $v['image'] ?>" class="rounded" alt="avatar">
                                                                                        </figure>
                                                                                </td>
                                                                                <td>
                                                                                        <div class="embed-responsive embed-responsive-16by9">
                                                                                                <iframe class="embed-responsive-item" src="../videos/<?= $v['video'] ?>" allowfullscreen></iframe>
                                                                                        </div>
                                                                                </td>
                                                                                <td><?= $v['video'] ?></td>
                                                                                <td><?= $v['name'] ?></td>
                                                                                <td><?= $v['category_name'] ?></td>
                                                                                <td><?= substr($v['story'], 0, 20) ?></td>
                                                                                <td><?= $v['release_date'] ?></td>
                                                                                <td><?= $v['director'] ?></td>
                                                                                <td><?= $v['country'] ?></td>
                                                                                <td><?= $v['status'] ?></td>
                                                                                <td class="text-right">
                                                                                        <div class="dropdown">
                                                                                                <a href="#" data-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                                                                        <i class="ti-more-alt"></i>
                                                                                                </a>
                                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                                        <a href="movies_edit.php?v=<?= $v['id'] ?>" class="dropdown-item">Edit</a>
                                                                                                        <a href="movies_hapus.php?v=<?= $v['id'] ?>" class="dropdown-item text-danger">Delete</a>
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