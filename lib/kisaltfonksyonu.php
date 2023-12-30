<?php 

function kisalt ($onyazi, $limit=40){   
    $parcala    =  explode(" ",$onyazi);
    $kelimesay  = count($parcala); 
    if($kelimesay>$limit){  
 
        for($x=0; $x<=$limit; $x++){ 
            $kisayazi .= $parcala[$x].' '; 
        }
            $kisayazi .="...";  
        } else { 
            $kisayazi   = $onyazi;     
        }

    return $kisayazi;
}  
  







?>