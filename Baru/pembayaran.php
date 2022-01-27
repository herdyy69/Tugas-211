<?php
$np = $_POST['np'];
$jenis_barang = $_POST['jenis_barang'];
$harga_barang = $_POST['harga_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$berat_barang = $_POST['berat_barang'];
$kota_asal = $_POST['kota_asal'];
$kota_tujuan = $_POST['kota_tujuan'];

if($kota_asal == "Bandung"){
    if($kota_tujuan == "Bandung"){
        $ongkir = 8000;
        if($berat_barang <= 1){
            $hbb = 2000;
        }
        elseif($berat_barang >= 2 && $berat_barang <= 5){
            $hbb = 4000;
        }
        elseif($berat_barang >= 6){
            $hbb = 6000;
        }
    }
    elseif($kota_tujuan == "Jakarta"){
        $ongkir = 12000;
        if($berat_barang <= 1){
            $hbb = 2000;
        }
        elseif($berat_barang >= 2 && $berat_barang <= 5){
            $hbb = 4000;
        }
        elseif($berat_barang >= 6){
            $hbb = 6000;
        }
    }
    elseif($kota_tujuan == "Surabaya"){
        $ongkir = 16000;
        if($berat_barang <= 1){
            $hbb = 2000;
        }
        elseif($berat_barang >= 2 && $berat_barang <= 5){
            $hbb = 4000;
        }
        elseif($berat_barang >= 6){
            $hbb = 6000;
        }
    }
    else{
        null;
    }
    $total_harga = $ongkir * $jumlah_barang + $hbb;
}
elseif($kota_asal == "Jakarta"){
    if($kota_tujuan == "Bandung"){
        $ongkir = 12000;
        if($berat_barang <= 1){
            $hbb = 2000;
        }
        elseif($berat_barang >= 2 && $berat_barang <= 5){
            $hbb = 4000;
        }
        elseif($berat_barang >= 6){
            $hbb = 6000;
        }
    }
    elseif($kota_tujuan == "Jakarta"){
        $ongkir = 8000;
        if($berat_barang <= 1){
            $hbb = 2000;
        }
        elseif($berat_barang >= 2 && $berat_barang <= 5){
            $hbb = 4000;
        }
        elseif($berat_barang >= 6){
            $hbb = 6000;
            if($berat_barang <= 1){
                $hbb = 2000;
            }
            elseif($berat_barang >= 2 && $berat_barang <= 5){
                $hbb = 4000;
            }
            elseif($berat_barang >= 6){
                $hbb = 6000;
            }
        }
    }
    elseif($kota_tujuan == "Surabaya"){
        $ongkir = 16000;
    }
    else{
        null;
    }
    $total_harga = $ongkir * $jumlah_barang + $hbb;
}
elseif($kota_asal == "Surabaya"){
    if($kota_tujuan == "Bandung"){
        $ongkir = 16000;
        if($berat_barang <= 1){
            $hbb = 2000;
        }
        elseif($berat_barang >= 2 && $berat_barang <= 5){
            $hbb = 4000;
            if($berat_barang <= 1){
                $hbb = 2000;
            }
            elseif($berat_barang >= 2 && $berat_barang <= 5){
                $hbb = 4000;
            }
            elseif($berat_barang >= 6){
                $hbb = 6000;
            }
        }
        elseif($berat_barang >= 6){
            $hbb = 6000;
            if($berat_barang <= 1){
                $hbb = 2000;
            }
            elseif($berat_barang >= 2 && $berat_barang <= 5){
                $hbb = 4000;
            }
            elseif($berat_barang >= 6){
                $hbb = 6000;
            }
        }
    }
    elseif($kota_tujuan == "Jakarta"){
        $ongkir = 12000;
    }
    elseif($kota_tujuan == "Surabaya"){
        $ongkir = 8000;
    }
    else{
        null;
    }
    $total_harga = $ongkir * $jumlah_barang + $hbb;
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
      <center>
      <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: bold; margin-top: 2rem; margin-bottom: 2rem;">pembayaran</h2>
      <h4>
        <table>
            <tr>
                <td>Nama Pemesan</td>
                <td>&nbsp;: <?= $np ?></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td>&nbsp;: <?= $jenis_barang ?></td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td>&nbsp;: <?= $harga_barang ?></td>
            </tr>
            <tr>
                <td>Berat Barang</td>
                <td>&nbsp;: <?= $berat_barang ?>&nbsp;Kg</td>
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td>&nbsp;: <?= $jumlah_barang ?>&nbsp;Pcs</td>
            </tr>
            <tr>
                <td>Kota Asal</td>
                <td>&nbsp;: <?= $kota_asal ?></td>
            </tr>
            <tr>
                <td>Kota Tujuan</td>
                <td>&nbsp;: <?= $kota_tujuan ?></td>
            </tr>
            <tr>
                <td colspan="2">----------------------------------------</td>
            </tr>
            <tr>
                <td>Ongkos Kirim</td>
                <td colspan="2">&nbsp;&nbsp; <input type="text" value="<?= $total_harga ?>" style="width: 10rem;"></td>
            </tr>
                <form action="struk.php" method="post">
                <input type="hidden" name="totalbayar" value="<?= $total_harga ?>">
                    <tr>
                        <td>Bayar</td>
                        <td>&nbsp;&nbsp; <input type="text" name="bayar" style="width: 10rem;"></td>
                    </tr>
            <tr>
                <td></td>
                <td><h4>&nbsp;&nbsp;&nbsp;<input type="submit" value="Bayar" name="proses"></h4></td>
            </tr>
                </form>
        </table>
      </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>