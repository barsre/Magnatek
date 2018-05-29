<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="description" content="Magnatek offers a wide range of highly stabilized, high frequency, high voltage portable x-ray generators for industrial and medical applications.">
	<meta name="keywords" content="x-ray generators, x-ray sources, x-ray non-destructive testing, x-ray equipment, x-ray microfocus">
	<meta name="author" content="Jacob barsøe, Katrine Nielsen, Jeevith Mohanakumar">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>X-Ray Generators for Industrial & Medical Use | Magnatek</title>

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
                <img src="img/frontpage/pic1.gif" alt="Camera x-ray">
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
