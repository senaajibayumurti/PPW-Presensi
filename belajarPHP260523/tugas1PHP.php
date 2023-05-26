<!DOCTYPE html>
<html>
    <body>
        <?php
        $nama = "SenahehoSenahehoSenaheho";
        $date = date("d");
        if(strlen($nama) == ($date-2)){
            echo "Berhasil!";
        }
        else if(strlen($nama) < ($date)){
            echo "Sedikit lagi!";
        }
        else{
            echo "Coba lagi!";
        }
        ?>
    </body>
</html>