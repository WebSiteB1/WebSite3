<?php
$file=fopen("datos.txt","a") or die("Problemas");
  fputs($file,"primera linea");
  fputs($file,"\n");
  fputs($file,"segunda linea");
  fputs($file,"\n");
  fputs($file,"tercera linea");
  fclose($file);
 
echo "Se creo correctamente el archivo";


?>