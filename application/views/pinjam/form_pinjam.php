<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perpustakaan</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
    <script src="<?= base_url('assets/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/bootstrap.bundle.min.js')?>"></script>
</head>
<body>
    
    <div class="container mt-5">

        <div class="row">
            <?php if($this->session->flashdata('pesan') !== null): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <h3> <strong> <?= $this->session->flashdata('pesan') ?> </strong></h3>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
            <div class="col-md-10">
    
                <form class="forms-sample" method="POST" action="<?= base_url('pinjam/save_pinjam')?>" id="form" enctype="multipart/form-data">
                     
                    <div class="form-group">
                        <label>Buku</label> 
                        <select name="buku" id="">
                            <option value="">[Pilih Buku]</option>
                            <?php foreach($buku as $val): ?>
                            <option value="<?= $val->id ?>"> <?= $val->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <small class="help-block text-danger" id="pesan"></small>
                    </div>
                    <div class="form-group">
                        <label>Nama</label> 
                        <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama">
                        <small class="help-block text-danger" id="pesan"></small>
                    </div>
                    <div class="form-group">
                        <label>No. HP</label> 
                        <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama">
                        <small class="help-block text-danger" id="pesan"></small>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Kembali</label> 
                        <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama">
                        <small class="help-block text-danger" id="pesan"></small>
                    </div>

                     
                     <button  type="submit" class="btn btn-sm btn-primary ">Simpan</button>
                 </form>
    
            </div>
            <div class="col-md-2">
                <form class="forms-sample" method="POST" action="<?= base_url('pinjam/book_save')?>" id="form" enctype="multipart/form-data">
                     
                    <div class="form-group">
                        <label>Nama Buku</label> 
                        <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama">
                        <small class="help-block text-danger" id="pesan"></small>
                    </div>
                    
                    <button  type="submit" class="btn btn-sm btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>

    </div>

</body>
</html>