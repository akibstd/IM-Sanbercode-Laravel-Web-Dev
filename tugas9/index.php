<?php
 require('./animal.php');
 require('./ape.php');
 require('./frog.php');
   
 $sheep = new Animal("shaun");
  
 echo "nama :".$sheep->get_name()."<br>";
 echo "legs :".$sheep->get_legs()."<br>";
 echo "cold :".$sheep->cold_blooded()."<br><br>";

 $wukong=new monyet('sunggokong');
  
 echo "nama:".$wukong->get_name()."<br>";
 echo "legs :".$wukong->get_legs()."<br>";
 echo "cold :".$wukong->cold_blooded()."<br>";
 echo "ulti :".$wukong->yell()."<br> <br> <br>";



   

  $kodok=new Frog('kodok bangkong');
  
  echo "nama :".$kodok->get_name()."<br>";
  echo "legs :".$kodok->get_legs()."<br>";
  echo "cold :".$kodok->cold_blooded()."<br>";
  echo "ulti :".$kodok->jump()."<br>";



 

 

 


?>