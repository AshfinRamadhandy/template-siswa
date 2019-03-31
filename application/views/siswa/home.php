<div class="container">
<section class="content">
<div class="jumbotron text-center">
  <h1>Selamat Datang Siswa</h1>
</div>
<!-- <div class="row">
        <div class="col-sm-4">
          <h3><p align=center><b>DATA SISWA</b></h3>
              <p> <p align=center> blm isi.</p> 
							<body>-->
<html>
  
<table width="100%">
				<br><h2 align="center">Biodata Siswa</h2>
					<thead>
					<tr align="center">
		<img src="<?php echo base_url() ?>foto/CHA_0318.jpg" alt="foto" width="150">
    <br>
		<br>
		<!-- <a href='<?php echo base_url("siswa/ubah"); ?>'>Ubah Data</a><br><br> -->



		</div>

			<table width="100%">
				<br><h2 align="center">Data Siswa</h2>
					<thead>
					<tr align="center">
						<th><font face ="Calibri"> NIS </font></th>
						<th><font face ="Calibri"> PASSWORD </font></th>
						<th><font face ="Calibri"> NAMA </font></th>
						<th><font face ="Calibri"> TANGGAL LAHIR </font></th>
						<th><font face ="Calibri"> GENDER </font></th>
						<th><font face ="Calibri"> JURUSAN </font></th>
						<th><font face ="Calibri"> KELAS </font></th>
						<th><font face ="Calibri"> KOTA ASAL </font></th>
						<th><font face ="Calibri"> ALAMAT </font></th>
						<th><font face ="Calibri"> NO TELP </font></th>
						<th><font face ="Calibri"> MENU </font></th>

						</tr>
					<tbody>
								<?php 
								foreach($siswa  as $murid):
								?>
						<tr>
							<td><p><?=  $murid->nis?></p></td>
							<td><p><?=  $murid->password?></p></td>
							<td><p><?=  $murid->nama?></p></td>
							<td><p><?=  $murid->tgl_lahir?></p></td>
							<td><p><?=  $murid->gender?></p></td>
							<td><p><?=  $murid->id_jurusan?></p></td>
							<td><p><?=  $murid->kelas?></p></td>
							<td><p><?=  $murid->kota_asl?></p></td>
							<td><p><?=  $murid->alamat?></p></td>
							<td><p><?=  $murid->no_telp?></p></td>
							<td>
							<?php echo anchor('C_siswa/edit/'.$murid->id,'Edit'); ?>
              <?php echo anchor('C_siswa/delete/'.$murid->id,'Hapus'); ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>	
			</table>

			
    <!-- <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
												<th>NIS</th>
                        <th>Nama</th>
												<th>Jenis Kelamin</th>
												<th>Telepon</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Foto</th>
                    </tr>
                </thead>
            </table>
        </section>
    </div>


      <!-?php
      if( ! empty($siswa)){
        foreach($siswa as $data){
          echo "<tr>
          <td>".$data->nis."</td>
          <td>".$data->nama."</td>
          <td>".$data->jenis_kelamin."</td>
          <td>".$data->telp."</td>
					<td>".$data->alamat."</td>
					<td>".$data->tanggal_lahir."</td>
					<td>".$data->foto."</td>
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
</html> -->
