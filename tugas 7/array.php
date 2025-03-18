<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>latihan array</h2>
    <?php
      echo "contoh pertama";
      $team=["saber","grok","clode","mia","uodora"];
      print_r($team);

      echo "<h3> contoh2 </h3>";

      echo "total team".count($team);
      echo "<ol>";
      echo "<li>".$team[0]."</ul>";
      echo "<li>".$team[1]."</ul>";
      echo "<li>".$team[2]."</ul>";
      echo "<li>".$team[3]."</ul>";
      echo "<li>".$team[4]."</ul>";

      echo "<h3>------ tugas3---- </h3>";
         
      $biodata=[
    [ "nama"=>"saber","umur"=> 25,"materi"=> "laravel"],
    [ "nama"=>"selena","umur"=> 22,"materi"=> "vue"],
    [ "nama"=>"eudora","umur"=> 22,"materi"=> "angular"],
  
    
      ];
      echo "<pre>";
    print_r($biodata );
    echo "<pre>";
    ?>
</body>
</html>