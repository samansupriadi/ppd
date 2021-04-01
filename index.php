<?php
    include ("fungsi.php");
    if(isset($_POST['tambah'])){
        tambahPpd();
    }
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Permintaan Pengeluaran Dana</title>
  </head>
  <body>
    
  <div class="card">
  <div class="card-body">
    PERMINTAAN PENGELUARAN DANA
    <div class="card">
        <div class="card-body">
            INFO
            <div class="card">
                <div class="card-body">
            
            
                    <!--start here -->


                    <form method="POST" action="">

                    <div class="form-group">
                        <label for="inputAddress">* Tanggal</label>
                            <input type="date" class="form-control" id="inputAddress" name="tanggal" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputAddress">* Pemohon</label>
                        <select class="custom-select" name="pemohon">
                        <option value="" disabled selected>Pemohon</option>
                            <?php
                            $datas = getPemohon();
                            foreach ($datas as $data) :
                            ?>
                            <option value="<?=  $data['id_pemohon'] ;?>">  <?=  $data["pemohon"] ;?>  </option>
                            <?php endforeach; ?>
                        </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="divisi">Divisi</label>
                            <input type="text" class="form-control" id="divisi" disabled>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="inputAddress">* Tipe PPD</label>
                        <select class="custom-select" name="tipe">
                        <option value="" disabled selected>Tipe PPD</option>
                        <?php
                        $ppds = tipePpd();
                        foreach ($ppds as $ppd) :
                        ?>
                            <option value="<?=  $ppd['id_type_ppd'] ;?>">  <?=  $ppd["type_ppd"] ;?>  </option>

                        <?php endforeach; ?>
                        </select>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputAddress">* Metode</label>
                        <select class="custom-select" name="metode">
                        <option value="" disabled selected>Metode</option>
                        <?php
                         $metodes = getMetode();
                        foreach ($metodes as $metode) :
                        ?>
                            <option value="<?=  $metode['id_metode'] ;?>">  <?=  $metode["metode"] ;?>  </option>
                        <?php endforeach; ?>
                        </select>   
                        </div>
                        <div class="form-group col-md-6">
                            <label for="divisi">No.Rekening</label>
                            <input type="text" class="form-control" name="norek" placeholder="No.Rekening">
                        </div>
                     </div>

                     <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputAddress">* Penerima</label>
                            <input type="text" class="form-control" name="penerima" placeholder="Penerima">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="divisi">* Keterangan</label>
                            <input type="text" class="form-control"  name="keterangan" placeholder="Keterangan"> 
                        </div>
                     </div>


  
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Lampiran</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="lampiran" accept=".jpg, .jpeg, .pdf, .doc, .docx, .xls, .xlsx, .zip">
                        <label for="exampleFormControlFile1">Only jpg/jpeg/pdf/doc/excel/zip files</label>
                     </div>                   
                </div>
             </div>
        </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-body">
    URAIAN
    <div class="card">
        <div class="card-body">
            PILIH ANGGARAN
            <div class="card">
                <div class="card-body">

                 <!--start here -->       
                 <div class="form-row">
                    <div class="form-group col-md-2">
                     <label>ANGGARAN</label>
                     
                    </div>

                    <div class="form-group col-md-5">
                     <label>JUMLAH</label>
                     
                    </div>

                    <div class="form-group col-md-5">
                     <label>KETERANGAN</label>
                     
                    </div>

                </div>

                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Kas SF Infak</label>
                     <div class="col-sm-5">
                         <input type="text"  class="form-control" name="infak" placeholder="0.00">
                    </div>
                            
                     <div class="col-sm-5">
                      <input type="text"  class="form-control"  name="ketinfak" placeholder="Keterangan">
                    </div>

                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kas SF Amil</label>
                    

                     <div class="col-sm-5">
                         <input type="text"  class="form-control" name="amil" placeholder="0.00">
                    </div>
                            
                     <div class="col-sm-5">
                      <input type="text"  class="form-control" name="ketmail" placeholder="Keterangan">
                    </div>

                </div>
                </div>
                </div>
             </div>
        </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-body">
    SUMMARY
    <div class="card">
        <div class="card-body">
            
            <div class="card">
                <div class="card-body">

                <div class="form-row">
                    <div class="form-group col-md-5">
                    </div>

                    <div class="form-group col-md-6">
                    </div>

                    <div class="form-group col-md-1">
                     <label for="inputCity">Total</label>
                     
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-2">
                    </div>

                    <div class="form-group col-md-5">
                    </div>

                    <div class="form-group col-md-5">
                    <input type="text"  class="form-control" name="ketmail" placeholder="0">
                     
                    </div>
                    
                </div>

                    <!-- end here -->

                </div>
             </div>
        </div>
    </div>
  </div>
</div>


<div class="card">
  <div class="card-body">
  <div class="form-row">
                    <div class="form-group col-md-1">
                    <button type="reset" class="btn btn-primary"> KEMBALI </button>
                    </div>
                    <div class="form-group col-md-9">
                    </div>
                    <div class="form-group col-md-2">
                    <button type="reset" class="btn btn-primary"> RESET </button>
                    <button type="submit" class="btn btn-primary" name="tambah"> SIMPAN </button>
                    </div>    
                </div>
  </div>
</div>
</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>