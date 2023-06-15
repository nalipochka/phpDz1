<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Example</div>
    <?
    $colors=["red","green","blue","yellow","pink","gray","purple","cyan","saddlebrown"];
    $usedColors =[];
    $value ="";
    for($i=0;$i<4;$i++){
        do{
            $res = false;
            $index = rand(0,8);
            $value = $colors[$index];
            if(!in_array($value, $usedColors)){
                $usedColors[] = $value;
                $res = true;
            }
        }while(!$res);

        echo "<div style='background-color:$value'>$i</div>";
    }
    ?>
</body>
</html>