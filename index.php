<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jeu d'échecs</title>
</head>
<body>

<?php

$piecesB = ["tour",
"cavalier",
"fou", 
"reine",
"roi", 
"fou", 
"cavalier", 
"tour", 
"pion",   "pion",   "pion",   "pion",   "pion",   "pion",   "pion",   "pion"];

$piecesN = array_reverse($piecesB);
[$piecesN[12],$piecesN[11]]=[$piecesN[11],$piecesN[12]]
?>


<div id="container">
<?php

    $color = "blanc";
    for ($i=0; $i < 8; $i++) {
        
        $color = $color == "noir" ? "blanc" : "noir";
        
        
        for ($j=0; $j < 8; $j++){ 
               
            $color = $color == "noir" ? "blanc" : "noir";
            
            echo "<div class=\"case  $color\">";
            if (isset($piecesB[$j+(8*$i)])) {
                    echo $piecesB[$j+(8*$i)]." NOIR";

            }
            if ($i == 6) {
                echo $piecesN[$j+(8*$i)]." BLANC";
            }
            echo "</div>";

                
            
        }
    }

?>
</div>
</body>
</html>