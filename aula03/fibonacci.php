
<?php
$sequence = array();

 for ($i = 1; $i <= 100; $i++) {
    if ($i <= 2) {
        $sequence[$i] = $i;
    } else{
        $sequence[$i] = $sequence[$i - 1] + $sequence[$i - 2];
    } 
}

   function fibonacci ($n){
    global $sequence;
    echo $sequence[$n];

   };
   fibonacci(100);

?>