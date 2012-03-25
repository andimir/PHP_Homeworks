<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Krasimir Trendafilov" />
	<title>HomeWork_1</title>    
</head>

<body>

<form action="homework_1.php" method="get">
<label for="number">Enter number:</label>
<input type="text" name="number" />
<br />
<input type="submit" value="Submit" />
</form>


</body>
</html>

<?php
require_once("functions.php");

if (isset($_GET["number"])) {
numProcess($_GET["number"]);
}
