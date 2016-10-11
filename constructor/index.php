<?php
require_once "Join.php";
$Dtv=new Join (2,3);
echo $Dtv->a;
echo $Dtv->b;
$Dtv->sum();
echo $Dtv->res;
?>