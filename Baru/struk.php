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
    <title>Struk</title>
  </head>
  <body>
  <?php if($bayar < $totalbayar) : ?>
    <center>
        <div class="card" style="width: 40rem; margin-top: 1rem;">
            <h4 style="margin-top: 1rem;">Pembayaran Gagal, tidak bisa di proses !</h4>
            <h4><button style="border-radius: 10px; margin-bottom: 1rem; margin-top: 0.5rem;"><a href="index.php" style="text-decoration: none; color: black; ">Home</a></button></h4>
        </div>
    </center>
    <?php else : ?>
        <center>
        <div class="card" style="width: 40rem; margin-top: 1rem;">
            <h4 style="margin-top: 1rem;">Transaksi Berhasil !</h4>
            <table align="center">
                <tr>
                    <td><h4>Total Ongkir</h4></td>
                    <td><h4>&nbsp;&nbsp; <input type="text" value="<?= $totalbayar ?>" style="width: 10rem;"></h4></td>
                </tr>
                <tr>
                    <td><h4>Uang Masuk</h4></td>
                    <td><h4>&nbsp;&nbsp; <input type="text" value="<?= $bayar ?>" style="width: 10rem;"></h4></td>
                </tr>
                <tr>
                    <td><h4>Kembalian</h4></td>
                    <td><h4>&nbsp;&nbsp; <input type="text" value="<?= $kembalian ?>" style="width: 10rem;"></h4></td>
                </tr>
            </table>
            <h4><button style="border-radius: 10px; margin-bottom: 1rem; margin-top: 0.5rem;"><a href="index.php" style="text-decoration: none; color: black; ">Home</a></button></h4>
        </div>
        </center>

    <?php endif?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>