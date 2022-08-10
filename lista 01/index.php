<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id = "caixa" class="caixa">
    <?php
        $vermelhos = 1;
        $verdes = 1;
        $azuis = 1;
        for($i=0;$i<100;$i++){
            $j = rand(1,10);
            if($j==1){
                if($vermelhos<=10){
                    $cor = "#F08080";
                    $vermelhos++;
                }
            }else if($j==2){
                if($azuis<=10){
                    $cor = "#ADD8E6";
                    $azuis++;
                }
            }else if($j==3){
                if($verdes<=10){
                    $cor = "#90EE90";
                    $verdes++;
                }
            }else{
                $cor = "#FFFFE0";
            }
            echo "<div style = 'background-color:";
            echo $cor;
            echo ";'>";
            echo $i+1;
            echo "</div>";
        }
    ?>
    </div>
</body>
</html>