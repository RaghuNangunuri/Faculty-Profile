<?php
$server="localhost";
$uname="";
$pass="";
$dbname="";




  function funexp($exp)	
{
     $datetime1=$exp;
        $datetime2=date("Y-m-d");
        
        $date1=date_create($datetime1);
        $date2=date_create($datetime2);
        $diff=date_diff($date1,$date2);
        //echo $diff->format('%y years %m months and %d days');
        if($diff->format('%y')==0 && $diff->format('%m')==0 && $diff->format('%d')==0)
        return 'NA';
        else
        return $diff->format('%y years %m months');
}


?>
