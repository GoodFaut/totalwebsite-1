<?php
 echo "Instalación de TotalWebsite";
echo "Vamos a instalar TotalWebsite.Asegurate de tener por lo menos 115 MB en tu proveedor de hosting";
     $zip = new ZipArchive;

     $comprimido= $zip->open('https://docs.google.com/u/0/uc?export=download&confirm=4Vjb&id=1Jst1_WbeSPBSSA3rTixG83vU67Q8_B_B');
     if ($comprimido=== TRUE) {

         $zip->extractTo('public_html/');
         $zip->close();

         echo 'Los archivos se establecieron correctamente! Ahora solo tienes que ejecutar el sitio web para configurar Wordpress y a DRPL para configurar Drupal';
     } else {

         echo 'Error estableciendo los archivos';
     }
  echo 'Instalador hecho por PHPinstall';
?>
