<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Index</title>
  </head>
  <body>
    <center>
        <h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: bold; margin-top: 2rem;">Si Cepat Ngabret</h1>
        <form action="pembayaran.php" method="POST">
            <table>
                <tr>
                    <td><h4>Nama Pengirim</h4></td>
                    <td><h4>&nbsp; <input type="text" name="np"></h4></td>
                </tr>
                <tr>
                    <td><h4>Jenis Barang</h4></td>
                    <td><h4>&nbsp; <input type="text" name="jenis_barang"></h4></td>
                </tr>
                <tr>
                    <td><h4>Harga Barang</h4></td>
                    <td><h4>&nbsp; <input type="text" name="harga_barang"></h4></td>
                </tr>
                <tr>
                    <td><h4>Berat Barang</h4></td>
                    <td><h4>&nbsp; <input type="number" name="berat_barang" style="width: 4rem;">&nbsp;Kg</h4></td>
                </tr>
                <tr>
                    <td><h4>Jumlah Barang</h4></td>
                    <td><h4>&nbsp; <input type="text" name="jumlah_barang" style="width: 4rem;">&nbsp;Pcs</h4></td>
                </tr>
                <tr>
                    <td><h4>Kota Asal</h4></td>
                    <td><h4>&nbsp;
                        <select name="kota_asal" id="">
                            <option value="Bandung">Bandung</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Surabaya">Surabaya</option>
                        </select>
                    </h4></td>
                </tr>
                <tr>
                    <td><h4>Kota Tujuan</h4></td>
                    <td><h4>&nbsp;
                        <select name="kota_tujuan" id="">
                            <option value="Bandung">Bandung</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Surabaya">Surabaya</option>
                        </select>
                    </h4></td>
                </tr>
                <tr>
                <td></td>
                <td><h4>&nbsp;&nbsp;<input type="submit" value="Proses" name="proses"></h4></td>
            </tr>
            </table>
        </form>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>