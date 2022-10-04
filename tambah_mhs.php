<?php
  include('koneksi.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>DATA MAHASISWA</title>
    <style type="text/css">
      * {
        font-family: "Optima";
      }
      h1 {
        text-transform: uppercase;
        color: blue;
      }
    button {
          background-color: blue;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: blue;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1 align center>Tambah Data Mahasiswa</h1>
        <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
      <div>
          <label>NIM</label>
          <input type="text" name="nim" required="" />
        </div>
        <div>
          <label>Nama</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>E-mail</label>
         <input type="text" name="email" />
        </div>
        <div>
          <label>Jurusan</label>
         <input type="text" name="jurusan" required="" />
        </div>
        <div>
          <label>Fakultas</label>
         <input type="text" name="fakultas" required="" />
        </div>
        <div>
          <label>Gambar </label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit">Simpan</button>
        </div>
        </section>
      </form>
  </body>
</html>