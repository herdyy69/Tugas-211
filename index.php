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
        <div class="card" style="width: 50rem;">
        <h1>Destinasi Wisata</h1>
        <form action="proses.php" method="POST">
            <table align="center">
            <tr>
                <td><h4>Nama Pemesan</h4></td>
                <td><h4>&nbsp;: <input type="text" name="pemesan"></h4></td>
            </tr>
            <tr>
                <td><h4>Tempat Destinasi</h4></td>
                <td><h4>
                &nbsp;: <select name="destinasi" id="">
                        <option value="Bukit Bintang">Bukit Bintang - Rp.10.000/orang</option>
                        <option value="Pantai Sadranan">Pantai Sadranan - Rp.15.000/orang</option>
                        <option value="Candi Borobudur">Candi Borobudur - Rp.50.000/orang</option>
                        <option value="Candi Prambanan">Candi Prambanan - Rp.50.000/orang</option>
                        <option value="Keraton Yogyakarta">Keraton Yogyakarta - Rp.5.000/orang</option>
                        <option value="Malioboro">Malioboro - Rp.5.000/orang</option>
                        <option value="Goa Pindul">Goa Pindul - Rp.100.000/orang</option>
                        <option value="Pendopo Lawas">Pendopo Lawas - Cafe</option>
                    </select>
                </h4></td>
            </tr>
            <tr>
                <td></td>
                <td><h4>&nbsp;&nbsp;&nbsp;<input type="submit" value="Proses" name="proses"></h4></td>
            </tr>
            </table>
        </form>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php
?>