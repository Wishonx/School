<?php
    echo '<form method="POST">
    Počet slov ve větě: <input type="number" name="word" id="word"> 
    Počet vět v odstavci: <input type="number" name="sentence" id="sentence"> 
    Počet odstavců: <input type="number" name="paragraph" id="paragraph"> 
    <input type="submit" name="btn" id="btn" value="generuj">
    </form>
    <button onclick="location.reload();">obnovit</button> <br> <br>';
error_reporting(E_ALL ^ E_NOTICE);  
class blabot {
    public function generate($slova, $vety, $odstavce){
        $csv = fgetcsv(fopen("slova.csv", "r"), 999999, ";");

        for($x = 0; $x < $odstavce; $x++){

            for($y = 0; $y < $vety; $y++){

                for($z = 0; $z < $slova; $z++){

                    if($z == $slova-1){
                        echo $csv[rand(0, count($csv)-1)] . ". ";
                      } else {
                        echo $csv[rand(0, count($csv)-1)]. " ";
                      }
                }
            }
            echo "<br> <br>";
        }
    }
}

$word  = $_POST["word"];
$sentence  = $_POST["sentence"];
$paragraph  = $_POST["paragraph"];

$output = new blabot();
echo $output->generate($word, $sentence, $paragraph);          // počet slov, počet vět, počet odstavců
