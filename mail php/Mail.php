<?php

if(isset($_POST['mailform'])){


// paramettre d'encodage 
$header="MIME-Version: 1.0\r\n";
$header.='From:"poson.alan@gmail.com"<poson.alan@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';


$message='
<html>
	<body>
		<div align="center">
		
			J\'ai envoyé ce mail avec PHP !
		</div>
	</body>
</html>
';

mail("alan.poson@gmail.com", "Salut tout le monde !", $message, $header);
}
?>
<form method="POST" action="">
	<input type="submit" value="Recevoir un mail !" name="mailform"/>
</form>
