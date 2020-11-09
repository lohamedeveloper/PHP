<?php 

require_once 'write_file.php';

$file = md5(time());

/**/
$write = new Write_file($file);

$write->write('First line');
$write->write('Second line');

$content = 'First line
Second line
';

if($content === file_get_contents($file)){

	echo "Sucess tests";
}
else echo "Error tests";