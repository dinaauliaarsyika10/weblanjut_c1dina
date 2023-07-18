<?php
require "../model/functions.php";

$id_produk = $_POST["id_produk"];

$hapus_produk = mysqli_query(
  koneksi(),
  "DELETE FROM produk WHERE id = '$id_produk'"
);

if ($hapus_produk) {
  echo "berhasil";
} else {
  echo "gagal";
}