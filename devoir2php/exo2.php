<?php
    $f=fopen("exercice2.txt","r");
   
    
            while($ligne=fgets($f)){
                if(preg_match('/CLI1001/',$ligne)){  
                    $f1=fopen("1.txt","w");     
                        fwrite($f1,$ligne." ");
                        fwrite($f1,"\n");
            }
                elseif(preg_match('/CLI1004/',$ligne)){
                    $f2=fopen("4.txt","w");
                        fwrite($f2,$ligne." ");
                        fwrite($f2,"\n");
            
        }       
     }
?>