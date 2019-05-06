<?php
 
$fich = $_GET['fichero'];
chmod ($fich, 0777);  // Le damos todos los permisos.
 
if (is_dir($fich)) { //detectamos si es carpeta o fichero
echo rmdir($fich); //borraria la carpeta, debe estar vacia.
   }else{
     echo unlink($fich);
}
 
?>