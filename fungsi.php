<?php
include ("koneksi.php");


//get list pemohon dari database
function getPemohon(){
    $query = "SELECT * FROM pemohon";
    $execute_query = conn()->query($query);

    $datas = [];

    while ($row = mysqli_fetch_assoc($execute_query)){
                $datas[] = $row;
    }
    
    return $datas; 
}


function tipePpd(){
    $query = "SELECT * FROM type_ppd";
    $execute_query = conn()->query($query);

    $datas = [];

    while ($row = mysqli_fetch_assoc($execute_query)){
                $datas[] = $row;
    }
    
    return $datas;
}

function getMetode(){
    $query = "SELECT * FROM metode";
    $execute_query = conn()->query($query);

    $datas = [];

    while ($row = mysqli_fetch_assoc($execute_query)){
                $datas[] = $row;
    }
    
    return $datas;
}

function tambahPpd(){
    $tanggal = $_POST['tanggal'];
    $pemohon = $_POST['pemohon'];
    $tipe = $_POST['tipe'];
    $metode = $_POST['metode'];
    $norek = $_POST['norek'];
    $penerima = $_POST['penerima'];
    $ket = $_POST['keterangan'];
    $infak = $_POST['infak'];
    $ketinfak = $_POST['ketinfak'];
    $amil = $_POST['amil'];
    $ketamil = $_POST['ketmail'];
    $lampiran = $_POST['lampiran'];
    $total =  $infak + $amil;
    
    $query = "INSERT INTO history_ppd  (tanggal, id_pemohon, id_type_ppd, id_metode, no_rek, penerima, keterangan_penerima, kas_sf_infak, kas_sf_amil, ket_kas_infak, lampiran, total) VALUES ('$tanggal', $pemohon, $tipe, $metode, '$norek', '$penerima', '$ket', '$infak', $amil, '$ketinfak', '$lampiran', '$total')";
   
    var_dump($_POST);
    if(conn()->query($query)){
        ?>
             <script>alert("PPD BERHASIL DI BUAT"); window.location="index.php";</script>
        <?php
     } else {
        echo "gagalllllllll";

     }  
    

    
}
//ini belum berhasil
function checkLampiran(){
    $allowed = array('jpg', 'jpeg', 'pdf', 'doc', 'docx', 'xls', 'xlxs', 'zip');
    $lampiran = $_FILES['video_file']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        ?>
        <script>alert("Lampiran gagal di upload!!!"); window.location="index.php";</script>
        <?php
    }
}


?>