<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>ini contoh soal loping</h1>
    <?php
    echo "<h1>ini contoh soal loping 1</h1>";
    
    for($i=0; $i<21; $i++){
     echo $i." ilove php <br>";
    };

    echo "<h3>ini contoh soal loping 2</h3>";

    for($a=21; $a>1; $a--){
        echo $a." ilove php <br>";
    }

    echo "<h3> soal no2  </h3>";
    $numbers = [18, 45, 29, 61, 47, 34];
        echo "<br>";
        echo "array numbers: ";
        echo "<br>";
        print_r($numbers)."<br>";

        foreach($numbers as $nilai){
         $rest[]=$nilai % 5;
        }
        echo "<br>";
        echo "array module: ";
        echo "<br>";
       print_r($rest);

       echo "<h3> Soal No 3 Looping Asociative Array </h3>";

       $multidimensi = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];
        foreach($multidimensi as $arraydata){
            $items=[
                 [ "id" => 001, "name " => "Keyboard Logitek", "price "=> "60000 ","description" => "Keyboard yang mantap untuk kantoran ","source" => "logitek.jpeg" ], 
                 [ "id" => 002, "name " => "Keyboard MSI", "price "=> "30000 ","description" => "Keyboard gaming MSI mekanik ","source" => "msi.jpeg" ], 
                 [ "id" => 003, "name " => "Mouse Genius", "price "=> "50000 ","description" => "Mouse Genius biar lebih pinter ","source" => "genius.jpeg" ], 
                 [ "id" => 004, "name " => "Mouse Jerry", "price "=> "30000 ","description" => " Mouse yang disukai kucing","source" => "jerry.jpeg" ], 

            ];
        }
      print_r($items);

      echo "<h3>Soal No 4 Asterix </h3>";
       
      for($j=0; $j <=5; $j++ ){
        for($k=$j;$k<=5;$k++){
            echo "*";
        }
        echo "<br>";
      };
    ?>
</body>
</html>