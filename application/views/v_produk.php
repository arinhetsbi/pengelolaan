<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>List Produk</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
</head>
<body>
<div class="container">
    <!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Data
                <small>Produk</small>
                <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Produk</a></div>
            </h1>
        </div>
    <div class="row">
        <div id="reload">
        <table class="table table-striped" id="mydata">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th style="text-align: right;">Aksi</th>
                </tr>
            </thead>
            <tbody id="show_data">
                 
            </tbody>
        </table>
        </div>
    </div>
</div>
 
        <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Produk</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Produk</label>
                        <div class="col-xs-9">
                            <input name="kopro" id="kode_produk" class="form-control" type="text" placeholder="ID menambah otomatis" style="width:335px;" required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Produk</label>
                        <div class="col-xs-9">
                            <input name="napro" id="nama_produk" class="form-control" type="text" placeholder="Nama Produk" style="width:335px;" required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input name="harga" id="harga" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->
 
        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Produk</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Produk</label>
                        <div class="col-xs-9">
                            <input name="kopro_edit" id="kode_produk2" class="form-control" type="text" placeholder="ID menambah otomatis" style="width:335px;" readonly>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Produk</label>
                        <div class="col-xs-9">
                            <input name="napro_edit" id="nama_produk2" class="form-control" type="text" placeholder="Nama Produk" style="width:335px;" required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input name="harga_edit" id="harga2" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->
 
        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Produk</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                           
                            <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus Produk ini?</p></div>
                                         
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->
 
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">

    $(document).ready(function(){
        tampil_data_produk();   //pemanggilan fungsi tampil produk.
         
        $('#mydata').dataTable();
          
        //fungsi tampil produk 
        function tampil_data_produk(){
            $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url()?>admin/produk/data_produk',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].produk_kode+'</td>'+
                                '<td>'+data[i].produk_nama+'</td>'+
                                '<td>'+data[i].produk_harga+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].produk_kode+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].produk_kode+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('admin/produk/get_produk')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(produk_kode, produk_nama, produk_harga){
                        $('#ModalaEdit').modal('show');
                        $('[name="kopro_edit"]').val(data.produk_kode);
                        $('[name="napro_edit"]').val(data.produk_nama);
                        $('[name="harga_edit"]').val(data.produk_harga);
                    });
                }
            });
            return false;
        });
 
 
        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });
 
        //Simpan produk
        $('#btn_simpan').on('click',function(){
            var kopro=$('#kode_produk').val();
            var napro=$('#nama_produk').val();
            var harga=$('#harga').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('admin/produk/simpan_produk')?>",
                dataType : "JSON",
                data : {kobar:kopro , nabar:nabar, harga:harga},
                success: function(data){
                    $('[name="kobar"]').val("");
                    $('[name="nabar"]').val("");
                    $('[name="harga"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_produk();
                }
            });
            return false;
        });
 
        //Update produk
        $('#btn_update').on('click',function(){
            var kopro=$('#kode_produk2').val();
            var napro=$('#nama_produk2').val();
            var harga=$('#harga2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('admin/produk/update_produk')?>",
                dataType : "JSON",
                data : {kopro:kopro , napro:napro, harga:harga},
                success: function(data){
                    $('[name="kopro_edit"]').val("");
                    $('[name="napro_edit"]').val("");
                    $('[name="harga_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_produk();
                }
            });
            return false;
        });
 
        //Hapus produk
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('admin/produk/hapus_produk')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_produk();
                    }
                });
                return false;
            });
 
    });
 
</script>
</body>
</html>