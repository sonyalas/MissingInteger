function solution($A) {
   sort($A);
   $num=1;   
   foreach($A as $item)
   {
      if($item == $num)
      {
         $num++;
      }
   }    
   return $num;   
}
