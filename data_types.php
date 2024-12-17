<!-- String : use to stote textual data.

eg : $name = "Netizens technology";


Integer : it is use to store whole numeric value that is without decimal num.(1,2,3,4,5,etc).

eg : $num = 12;
echo "num is $num"

Floating value : we will store decimal number as well like 12.2, 10.12 etc.


Boolean : we will just store true and falsy value.

$bool = true;
echo var_dump($bool)




NULL : it is like void value means right now there is nothing available in variable.

$name = null;

var_dump($name);


Array : it  is use to store multiple value into it. like we will store cart price , product name etc.

 


-->


<?php 


$friends   = ["Hasmi","Malay","Amit","palak mam"];

foreach ($friends as $friend){
  echo "$friend <br/>";
}



?>