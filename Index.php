<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<title>Dom tree example</title>
	
    <link href="css/stylesheet_global.css" rel="stylesheet">
	<link href="css/stylesheet_frontpage.css" rel="stylesheet">
	
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
</head>

<body>

    <?php include 'includes/header.php';?>
    
    <section id="frontpage" class="frontpage">
        <h1 class="frontpage__header">We modify our products to match your<br>needs the best way possible</h1>
        <div class="frontpage__content">
            <h1><b>25</b><br><div></div>years of experience in X-ray sources.</h1>
            <img src="img/frontpage/pic1.gif">
            <h1><b>3000</b><br><div></div>X-ray sources we have supplied the industry with.</h1>
        </div>
    </section>
    
    <section id="product" class="product nodisplay">
        <h1>Application Areas</h1>
        <div class="product__categories">
            <button id="category_1">Industrial measuring and analysis</button>
            <button id="category_2">Medical Research</button>
            <button id="category_3">Non-destructive testing and measuring</button>
            <button id="category_4">Electronics circuit board inspection</button>
            <button id="category_5">Security screening</button>
            <button id="category_6">Food inspection & sorting</button>
        </div>
    </section>
    
    <section class="product_button">
        <button id="product_button" onclick="Open_product()">SEE PRODUCTS</button>
    </section>
    
    <?php include 'includes/footer.php';?>
    
</body>

<script src="js/script.js"></script>

<script>
    var Underline = document.createElement("DIV");
    var Linebreak = document.createElement("BR");
    document.getElementById("menubutton_1").appendChild(Linebreak);
    document.getElementById("menubutton_1").appendChild(Underline);
    
    var Onpage = document.getElementById("menubutton_1");
    Onpage.classList.add("onpage");
</script>    
    
</html>
