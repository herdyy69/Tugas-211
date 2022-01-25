<?php
$pilih = $_POST['pilih'];
$pemesan;
$hargatiket;
$destinasi;
$jumlahtiket;

$totalharga;
$diskon;
$totalbayar;

if($pilih == 'tiket'){
    $pemesan = $_POST['pemesan'];
    $destinasi = $_POST['destinasi'];
    $hargatiket = $_POST['hargatiket'];
    $jumlahtiket = $_POST['jumlah'];
    $totalharga = $hargatiket * $jumlahtiket;
    
    if($jumlahtiket >= 5 && $jumlahtiket < 10){
        $diskon = (10/100) * $totalharga;
        $totalbayar = $totalharga - $diskon;
    }
    elseif($jumlahtiket >= 6 && $jumlahtiket < 16){
        $diskon = (15/100) * $totalharga;
        $totalbayar = $totalharga - $diskon;
    }
    elseif($jumlahtiket >= 16 && $jumlahtiket < 21){
        $diskon = (20/100) * $totalharga;
        $totalbayar = $totalharga - $diskon;
    }
    else{
        $diskon = 0;
    }
    $totalbayar = $totalharga - $diskon;
    }
    else{
        $makanan = $_POST['makanan'];
        $minuman = $_POST['minuman'];
        $porsi = $_POST['porsi'];
        $gelas = $_POST['gelas'];
        if($makanan == "Nasi Padang"){
            $hargamakanan = 10000;
        }
        elseif($makanan == "Nasi Ayam"){
            $hargamakanan = 15000;
        }
        elseif($makanan == "Nasi Kuning"){
            $hargamakanan = 8000;
        }
        elseif($makanan == "Nasi Timbel"){
            $hargamakanan = 9000;
        }
        elseif($makanan == "Nasi Goreng"){
            $hargamakanan = 12000;
        }
        else{
            $hargamakanan = 0;
        }
        if($minuman == "Air Putih"){
            $hargaminuman = 3000;
        }
        elseif($minuman == "Juice Jeruk"){
            $hargaminuman = 5000;
        }
        elseif($minuman == "Juice Lainnya"){
            $hargaminuman = 6000;
        }
        else{
            $hargaminuman = 0;
        }
        $total = ($hargamakanan * $porsi) + ($hargaminuman * $gelas);
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
    <div class="card" style="width: 50rem;">
        <?php if($pilih == 'tiket'):?>
            <table align="center">
                <tr>
                    <td><h4>Nama Pemesan</h4></td>
                    <td><h4>&nbsp;: <?= $pemesan ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Tempat Destinasi</h4></td>
                    <td><h4>&nbsp;: <?= $destinasi ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Harga Tiket</h4></td>
                    <td><h4>&nbsp;: <?= $hargatiket ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Jumlah Tiket Dibeli</h4></td>
                    <td><h4>&nbsp;: <?= $jumlahtiket ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Total Harga</h4></td>
                    <td><h4>&nbsp;: <?= $totalharga ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Diskon</h4></td>
                    <td><h4>&nbsp;: <?= $diskon ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Total Bayar</h4></td>
                    <td><h4>&nbsp;: <?= $totalbayar ?></h4></td>
                </tr>
            </table>
            <form action="struk.php" method="post">
                <label for="inputbayar" style="margin-top: 1rem;"><h5>Bayar : </h5></label>
                <input type="number" name="bayar" id="bayar">
                <input type="hidden" name="totalbayar" value="<?= $totalbayar?>">
                <button type="submit">Bayar</button>
            </form>
    </div>
    </center>
    <center>
    <div class="card" style="width: 50rem;">
    <?php else : ?>
        <table align="center">
                <tr>
                    <td><h4>Makanan Dipesan</h4></td>
                    <td><h4>&nbsp;: <?= $makanan ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Harga Makanan/porsi</h4></td>
                    <td><h4>&nbsp;: <?= $hargamakanan ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Jumlah Dipesan</h4></td>
                    <td><h4>&nbsp;: <?= $porsi ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Minuman Dipesan</h4></td>
                    <td><h4>&nbsp;: <?= $minuman ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Harga Minuman/gelas</h4></td>
                    <td><h4>&nbsp;: <?= $hargaminuman ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Jumlah Dipesan</h4></td>
                    <td><h4>&nbsp;: <?= $gelas ?></h4></td>
                </tr>
                <tr>
                    <td><h4>Total harga</h4></td>
                    <td><h4>&nbsp;: <?= $total ?></h4></td>
                </tr>
        </table>
        <form action="struk.php" method="post">
                <label for="inputbayar" style="margin-top: 1rem;"><h5>Bayar : </h5></label>
                <input type="number" name="bayar" id="bayar">
                <input type="hidden" name="totalbayar" value="<?= $total?>">
                <button type="submit">Bayar</button>
            </form>
    </div>
    
    </center>

    <?php endif?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>