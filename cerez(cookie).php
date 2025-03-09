<?php
setcookie("cerez","Çisem",time()+(60*60*24*365));
if(isset($_COOKIE["cerez"]))
{
    echo "Çerezin adı: ".$_COOKIE["cerez"];
}
else
{
    echo "Böyle bir çerez yok";
}
?>
