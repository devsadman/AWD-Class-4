<?php
$locations=[

    'mirpur'=> 'rahim',
    'tejgaon'=> ['sadman','joshim','salman'],
    'banani'=> 'karim'
];

 foreach ($locations as $keys => $val) {
     if ($keys == 'tejgaon') {
        
            echo "Hello,I am {$val[0]} I live in {$keys} <br>";
         
       
     } 
     
 }
?>