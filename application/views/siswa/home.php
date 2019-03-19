<div class="container">
<section class="content">
<div class="jumbotron text-center">
  <h1>Selamat Datang Siswa</h1>
</div>
<!-- <div class="row">
        <div class="col-sm-4">
          <h3><p align=center><b>DATA SISWA</b></h3>
              <p> <p align=center> blm isi.</p> -->
							<body>
<html>
  <body>
    <h1>Data siswa</h1>
    <hr>

    <a href='<?php echo base_url("siswa/ubah"); ?>'>Ubah Data</a><br><br>

    <table border="2" cellpadding="50">
      <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th colspan="12">Aksi</th>
      </tr>

      <?php
      if( ! empty($siswa)){
        foreach($siswa as $data){
          echo "<tr>
          <td>".$data->nis."</td>
          <td>".$data->nama."</td>
          <td>".$data->jenis_kelamin."</td>
          <td>".$data->telp."</td>
          <td>".$data->alamat."</td>
          <td><a href='".base_url("siswa/ubah/".$data->nis)."'>Ubah</a></td>
          <td><a href='".base_url("siswa/hapus/".$data->nis)."'>Hapus</a></td>
          </tr>";
        }
      }else{ 
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </body>
</html>
