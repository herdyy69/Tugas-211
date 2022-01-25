<?php
$bayar = $_POST['bayar'];
$totalbayar = $_POST['totalbayar'];
$kembalian = $bayar - $totalbayar;

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
  <?php if($bayar < $totalbayar) : ?>
    <div class="card" style="width: 50rem; margin-left: 20rem;">
            <h2 style="color: red;" align="center">Transaksi Gagal, Uang Tidak Mencukupi!</h2>
            <a href="index.php" class="text-end" style="text-decoration: none;"><button>Home</button></a>
    </div>
            <?php else : ?>
                <div class="card" style="width: 50rem; margin-left: 20rem;">
                <h2 align="center" style="padding-bottom: 2rem;">Transaksi Berhasil</h2>
            <table align="center">
                <tr>
                    <td><h4>Total yang harus di bayar</h4></td>
                    <td><h4>&nbsp;: Rp. <?= $totalbayar?></h4></td>
                </tr>
                <tr>
                    <td><h4>Uang Anda</h4></td>
                    <td><h4>&nbsp;: Rp. <?= $bayar?></h4></td>
                </tr>
                <tr>
                    <td><h4>Kembalian</h4></td>
                    <td><h4>&nbsp;: Rp. <?= $kembalian?></h4></td>
                </tr>
            </table>
            <a href="index.php" class="text-end" style="text-decoration: none;"><button>Home</button></a>
            
            <?php endif?>
                </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>