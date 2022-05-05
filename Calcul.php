<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule</title>
</head>
<body>
    <div style = "margin:10% 25% 0 25%;" class="w3-border">
        <div class="w3-container w3-teal">
            <h2>Mon calculateur</h2>
        </div>
        <form class="w3-container" action="resCalcul.php" method="post">
            <label class="w3-text-teal"><b>Nombre 1</b></label>
            <input class="w3-input w3-border w3-light-grey" type="number" name="nombre1" placeholder="entrer votre premier nombre" required>
        
            <label class="w3-text-teal"><b>Nombre 2</b></label>
            <input class="w3-input w3-border w3-light-grey" type="number" name="nombre2" placeholder="entrer votre deuxieme nombre" required>
        
            <input class="w3-btn w3-border w3-blue-grey w3-centered" style="margin: 20px 0 10px 0"; type="submit" value="Valider">
        </form>
    </div>
</body>
</html>
