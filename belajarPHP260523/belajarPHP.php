<!DOCTYPE html>
<html>
    <body>
        <?php echo "Hello world! <br>"?>
        <?php
        $color = "red";
        echo "My car is ". $color . "<br>";
        echo "My house is (Error)". $COLOR . "<br>";
        echo "My boat is (Error)". $coLOR . "<br>";
        ?>
        <?php
        $txt = "php";
        $x = 5;
        $y = 5.5;

        echo "$txt marakna budreg, tapi aku suka!"."<br>";

        echo $x."<br>";
        echo $y."<br>";

        echo $x + $y."<br>";

        echo strlen($txt)."<br>";

        echo str_word_count($txt)."<br>";

        echo strrev("kasur rusaak")."<br>";

        echo strpos("Hello world","z");
        ?>
    </body>
</html>