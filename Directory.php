<!DOCTYPE html>
<html>
<body>
<?php
function download($patch = 'inne')
{
    $katalog = @dir($patch) or die ('Can't read selected folder ');
	while ($plik_kat = $katalog->read())
	IF(is_file($patch.'/'.$plik_kat))
		{
		echo '- <a href="'.$patch.'/'.$plik_kat.'">'.$plik_kat.'</a><br>';
		}
	elseIF(is_dir($patch.'/'.$plik_kat))
		{
		echo '- <a href="bug.php?patch='.$patch.'/'.$plik_kat.'"><b>'.$plik_kat.'</b></a><br>';
		}
	$katalog->close();
	}

IF(!isset($_GET['patch']))
	{
	download();
	}
else
	{
	download($_GET['patch']);
	}
	?>
</body>
</html>
