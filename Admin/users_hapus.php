<?php
require_once("./koneksi.php");
if (isset($_GET['v'])) {
        hapus($_GET['v'], "users");
}
