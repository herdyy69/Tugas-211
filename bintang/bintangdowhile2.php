<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <table>
            <tr>
                <td><h4 style="font-family: Arial, Helvetica, sans-serif;">Jumlah bintang yang diinginkan</h4></td>
                <td><h4><input type="text" name="bintang"></h4></td>
                <td><h4><input type="submit" value="Proses"></h4></td>
            </tr>
        </table>
</form>
<h4 style="margin-top: -20px; margin-left: 5px;">
    <?php
        $v = $_POST['bintang'];
        $i=1;
        do{
            $s = 1;
            do{
                echo "&nbsp";
                $s++;
            }while($s <= $i);
            $a=$v;
            do{
                echo $v-$a+1;
                $a--;
            }while($a >= $i);
            echo "<br>";
            $i++;
        }while($i <= $v);

       
    ?>
</h4>
</body>
</html>







