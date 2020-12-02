        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
          
          </div>

          <a href="#form" data-toggle="modal" class="btn btn-sm btn-success mb-4"><i class="fas fa-plus"></i>Tambah Data</a>



          <table class="table table-bordered table-striped">

          	<tr>
          		<th class="text-center">No</th>
          		<th class="text-center">Nama Jabatan</th>
              <th class="text-center">Gaji Pokok</th>
          		<th class="text-center">Tj. Transport</th>
          		<th class="text-center">Uang Makan</th>
          		<th class="text-center">Total</th>
          		<th class="text-center">Action</th>
 
          	</tr>
                  <!-- foreah untuk pengulangan berdsr query di datajbtn-->
          	<?php $no=1; foreach($jabatan as $j) : ?>
          		<tr>
          			<td><?php echo $no++ ?></td>
          			<td><?php echo $j->nama_jabatan ?></td>
          			<td>Rp. <?php echo number_format($j->gaji_pokok,0,',','.') ?></td>
          			<td>Rp. <?php echo number_format($j->tj_transport,0,',','.') ?></td>
                <td>Rp. <?php echo number_format($j->uang_makan,0,',','.') ?></td>

          			<td>Rp. <?php echo number_format($j->gaji_pokok + $j->tj_transport + $j->uang_makan,0,',','.') ?></td>

          			<td>
          				<center>
          					<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataJabatan/updateData/'.$j->id_jabatan) ?>"><i class="fas fa-edit"></i></a>
          					<a onclick="return confirm('YAKIN HAPUS?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataJabatan/deleteData/'.$j->id_jabatan) ?>"><i class="fas fa-trash"></i></a>
          				</center>
          			</td>
          			
          		</tr>
          	<?php endforeach;  ?>
          </table>

          <div class="modal fade" id="form" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                
                <div class="modal-header">
                  <h1>Data Jabatan</h1>

                </div>

                <table class="table"> 
                  <tr>
                    <td>Nama Jabatan</td>
                    <td><input type="text" name="nama_jabatan" placeholder="nama jabatan" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Gaji Pokok</td>
                    <td><input type="text" name="gaji_pokok" placeholder="gaji pokok" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Tj. Transport</td>
                    <td><input type="text" name="tj_transport" placeholder="transport" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Uang Makan</td>
                    <td><input type="text" name="uang_makan" placeholder="uang makan" class="form-control"></td>
                  </tr>
                 <td></td>
                 <td>
                <button type="button" id="btn-tambah" onclick="tambahData()" class="btn btn-sm btn-success mb-4">Tambah</button>
                <button type="button" data-dismiss="modal" class="btn btn-sm btn-success mb-4">Batal</button>


                 </td>
                </table>


                function tambahData(){
                
              }


              </div>
            </div>
          </div>

              <!--menambah data dengan ajax-->


        

        </script>

        </div>


         