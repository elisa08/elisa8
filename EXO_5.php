<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  
        <h1 class="text-center"><?php echo "salut" . "</br>" . "</br>";?></h1>

       <p class="text-center"><?php $x=15;
        $t="texte" . "</br>";
        echo $x . "texte";?></p>

    <?php
        $tableau=['un','deux','trois','quatre','cinq','six','sept','huit','neuf'];

       ?><p  class="text-center"><?php echo " " . $tableau[0] . "</br>";
        echo " " . $tableau[6] . "</br>";
        echo " " . $tableau[4] . "</br>";
        ?></p>
    <?php
        $tableauasso=['fruit'=>'poire','legume'=>'carotte','epice'=>'poivre'];

       ?><p  class="text-center"><?php echo " " . $tableauasso['fruit']. "</br>";
        echo " " . $tableauasso['legume'] . "</br>";
        echo " " . $tableauasso['epice'] . "</br>";
        ?></p>
    <?php
        $x=15;
        $y=4;
        $z=-123;

        $a=x/y;
        $b=y/z;
        $c=x/z;

        echo $a . $b . $c;
    ?>
    
</body>
</html>