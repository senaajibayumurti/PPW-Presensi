<!DOCTYPE html>
<html>
    <body>
        <?php
        $kelompok = array(
            array("Nama"=>"Sena Aji Bayu Murti","NIM"=>"21751"),
            array("Nama"=>"Murti Sena Aji Bayu","NIM"=>"15712"),
            array("Nama"=>"Bayu Murti Sena Aji","NIM"=>"75121"),
            array("Nama"=>"Aji Bayu Murti Sena","NIM"=>"12175"),
            array("Nama"=>"Bayu Murti Aji Sena","NIM"=>"17512")
        );
        $banyakAnggota = count($kelompok);
        for ($i = 0; $i < $banyakAnggota; $i++){
            $anggota = $kelompok[$i];
            $nama = $anggota['Nama'];
            $nim = $anggota['NIM'];
            if ($nim % 2 == 0){
                echo "Nama: $nama <br>";
                echo "NIM: $nim <br>";
                echo "Peran: Backend Developer<br><br>";
            }
            else {
                echo "Nama: $nama <br>";
                echo "NIM: $nim <br>";
                echo "Peran: Frontend Developer<br><br>";
            }
        }
        ?>
    </body>
</html>