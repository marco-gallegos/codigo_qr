<?php

	require 'phpqrcode/qrlib.php';

	$dir = 'temp/';

	if(!file_exists($dir))
		mkdir($dir);

	$filename = $dir.'test.png';

	$tamanio = 15;
	$level = 'L';
	$frameSize = 1;
	$contenido = "procesador : i3 3300\nram : 4GB\nusuario: marco gallegos\nDominio: ascencio.corp";

	$codeContents  = 'BEGIN:VCARD'."\n";
  $codeContents .= 'FN:'."marco gallegos"."\n";
  $codeContents .= 'TEL;WORK;VOICE:'."3311313131"."\n";
  $codeContents .= 'END:VCARD';

	QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);

	echo '<img src="'.$filename.'" width="100px" height="100px"/>';

?>
