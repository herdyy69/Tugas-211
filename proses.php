<?php
$pemesan = $_POST['pemesan'];
$destinasi = $_POST['destinasi'];
$hargatiket;

if($destinasi == "Bukit Bintang"){
    $hargatiket = 10000;
}
elseif($destinasi == "Pantai Sadranan"){
    $hargatiket = 15000;
}
elseif($destinasi == "Candi Borobudur"){
    $hargatiket = 50000;
}
elseif($destinasi == "Candi Prambanan"){
    $hargatiket = 50000;
}
elseif($destinasi == "Keraton Yogyakarta"){
    $hargatiket = 5000;
}
elseif($destinasi == "Malioboro"){
    $hargatiket = 5000;
}
elseif($destinasi == "Goa Pindul"){
    $hargatiket = 100000;
}



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Index</title>
  </head>
  <body>
    <?php if($destinasi == 'Pendopo Lawas') : ?>
        <center>
        <div class="card" style="width: 50rem; margin-top: 2rem;">
        <h1>Warung Pendopo Lawas</h1>
    <form action="pembayaran.php" method="post">
    <table align="center">
        <tr>
            <td><h4>Makanan</h4></td>
            <td><h4>
            &nbsp;: <select name="makanan" id="">
                        <option value="Nasi Padang">Nasi Padang - Rp.10.000/porsi</option>
                        <option value="Nasi Ayam">Nasi Ayam - Rp.15.000/porsi</option>
                        <option value="Nasi Kuning">Nasi Kuning - Rp.8.000/porsi</option>
                        <option value="Nasi Timbel">Nasi Timbel - Rp.9.000/porsi</option>
                        <option value="Nasi Goreng">Nasi Goreng - Rp.12.000/porsi</option>
                    </select>
                    <input type="text" name="porsi" style="width:4rem;" placeholder="Porsi">
            </h4></td>
        </tr>
        <tr>
            <td><h4>Minuman</h4></td>
            <td><h4>
            &nbsp;: <select name="minuman" id="">
                        <option value="Air Putih">Air Putih - Rp.3.000/gelas</option>
                        <option value="Juice Jeruk">Juice Jeruk - Rp.5.000/gelas</option>
                        <option value="Juice Lainnya">Juice Lainnya - Rp.6.000/gelas</option>
                        
                    </select>
                    <input type="text" name="gelas" style="width:4rem;" placeholder="Gelas">
            </h4></td>
        </tr>
        <tr>
                <td></td>
                <td><h4>&nbsp;&nbsp;&nbsp;<input type="submit" value="Proses" name="proses"></h4></td>
            </tr>
    </table>
    <input type="hidden" name="pilih" value="warung">
</form>
        </div>
    </center>
    <?php else : ?>
    <center>
        <div class="card" style="width: 50rem;">
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
            </table>
            <form action="pembayaran.php" method="POST">
                <label for="jumlah" style="margin-top: 1rem;"><h5>Masukkan Jumlah tiket :</h5></label>
                <input type="number" name="jumlah" id="jumlah">
                <input type="hidden" name="pemesan" value="<?=$pemesan?>">
                <input type="hidden" name="destinasi" value="<?=$destinasi?>">
                <input type="hidden" name="hargatiket" value="<?=$hargatiket?>">
                <input type="hidden" name="pilih" value="tiket">
                <button type="submit">Beli</button>
            </form>
        </div>
    </center>
    <?php endif?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php
?>