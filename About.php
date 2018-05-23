<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<title>Dom tree example</title>
	
	<link href="css/stylesheet_global.css" rel="stylesheet">
	
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
</head>

<body>

    <?php include 'includes/header.php';?>

</body>

<script src="js/script.js"></script>

<script>
    var Underline = document.createElement("DIV");
    var Linebreak = document.createElement("BR");
    document.getElementById("menubutton_3").appendChild(Linebreak);
    document.getElementById("menubutton_3").appendChild(Underline);
    
    var Onpage = document.getElementById("menubutton_3");
    Onpage.classList.add("onpage");
</script>
    
</html>
