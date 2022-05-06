<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul</title>
</head>
<body>
    <div class="w3-border" style="margin:10% 25% 0 25%;">
    <div class="w3-container w3-teal w3-center">
            <h2>Voici le resultat !</h2>
    </div>
    <?php 
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    sum_array($nombre1, $nombre2);
    function sum_array( $nombre1, $nombre2 ){
        $resultat = 0;
        $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
        if ($nombre1 < 0 && $nombre2 < 0){
            echo "<div class='w3-pale-red w3-hover-shadow w3-center'style='margin:auto 40% auto 40%;'>
        <p style = font-size:30px;>-1</p>
      </div>";
        }else if ($nombre2 < $nombre1){
            echo "<div class='w3-pale-red w3-hover-shadow w3-center'style='margin:auto 40% auto 40%;'>
        <p style = font-size:30px;>Erreur 0 : Nombre 2 supérieur à Nombre1</p>
      </div>";
        }else if ($nombre1 > 100){
            echo "<div class='w3-pale-red w3-hover-shadow w3-center'style='margin:auto 40% auto 40%;'>
        <p style = font-size:30px;>Erreur 0 : Nombre1 supérieur à 100</p>
      </div>";
        }else{
            foreach($array as $i){
                if($i >= $nombre1 && $i <= $nombre2){
                        $resultat = $resultat + $i;
                }
            }
        echo "<div class='w3-blue-grey w3-hover-shadow w3-center'style='margin:auto 40% auto 40%;'>
        <p style = font-size:30px;>$resultat</p>
      </div>";
        }
    }
?>
    </div>

</body>
</html>
