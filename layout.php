<?php
//sample header and footer functions
function page_header(){

echo 
<<<END

	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="content/css/styles.css" type="text/css">
		<title>hello world</title>
	</head>
	<body>

END;
}

function page_footer(){

echo 
<<<END

</body>
</html>

END;
}

?>