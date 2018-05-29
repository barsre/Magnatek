<!doctype html>
<html> 

<head>

	<meta charset="utf-8">
	<title>Dom tree example</title>
	
    <! Stylesheets !>
    <link href="css/stylesheet_global.css" rel="stylesheet">
	<link href="css/stylesheet_frontpage.css" rel="stylesheet">
	 
    <! Fonts and Logos !>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
</head>

<body>

    <?php include 'includes/header.php';?>
    
    <section id="ProductMore" class="ProductMore nodisplay"></section>
    
    <section id="frontpage" class="frontpage">
        <div class="frontpage__landingpage">
            <h1 class="frontpage__landingpage__header">We modify our products to match your<br>needs the best way possible</h1>
            <div class="frontpage__landingpage__content">
                <h1><b>25</b><br><div></div>years of experience in X-ray sources.</h1>
                <img src="img/frontpage/pic1.gif">
                <h1><b>3000</b><br><div></div>X-ray sources we have supplied the industry with.</h1>
            </div>
        </div>

        <div class="frontpage__product_button">
            <button id="product_button" onclick="loadDoc('ajax/Productpage.html', OpenProductFunction)">SEE PRODUCTS</button>
        </div>
    </section>
    
    
    
    <?php include 'includes/footer.php';?>
    
</body>

<script src="js/script.js"></script>

<script>
    // Menu Button
    document.getElementById("menubutton_1").classList.add("onpage");
    
    if (window.location.hash.substr(1) === "products") {
        loadDoc('ajax/Productpage.html', OpenProductFunction)
    }
</script>    
    
</html>
