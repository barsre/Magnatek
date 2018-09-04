<!doctype html>
<html lang="en">
 

<head>
 
    <!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="description" content="Magnatek offers a wide range of highly stabilized, high frequency, high voltage portable x-ray generators for industrial and medical applications.">
	<meta name="keywords" content="x-ray generators, x-ray sources, x-ray non-destructive testing, x-ray equipment, x-ray microfocus">
	<meta name="author" content="Jacob barsøe, Katrine Nielsen, Jeevith Mohanakumar">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Meta/Fane_logo.jpg">
    
	<title>X-Ray Generators for Industrial & Medical Use | Magnatek</title>

    <!-- Stylesheets -->
    <link href="css/stylesheet_global.css" rel="stylesheet">
	<link href="css/stylesheet_frontpage.css" rel="stylesheet">

    <!-- Fonts and Logos -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>

<body>
    
    <!-- Header -->
    <?php include 'includes/header.php';?>

    <!-- Product Section -->
    <section id="ProductMore" class="ProductMore nodisplay"></section>
    
    <!-- Frontpage Section -->
    <section id="frontpage" class="frontpage">
        <div id="product" class="frontpage__product">
            <h1 class="frontpage__product__header">High frequency X-ray sources and high voltage X-ray generators</h1>
            <h1 class="frontpage__product__header2">We make our products match your needs</h1>
            
            <h1 class="frontpage__product__category-header">Application Areas</h1>
            <div class="frontpage__product__categories">
                <button onclick="loadDoc('ajax/Category/Category1.html', ProductFunction)" id="category_1"><h1>Industrial measuring and analysis</h1></button>
                <button onclick="loadDoc('ajax/Category/Category2.html', ProductFunction)" id="category_2"><h1>Medical research</h1></button>
                <button onclick="loadDoc('ajax/Category/Category3.html', ProductFunction)" id="category_3"><h1>Non-destructive testing and measuring</h1></button>
                <button onclick="loadDoc('ajax/Category/Category4.html', ProductFunction)" id="category_4"><h1>Electronics circuit board inspection</h1></button>
                <button onclick="loadDoc('ajax/Category/Category5.html', ProductFunction)" id="category_5"><h1>Security screening</h1></button>
                <button onclick="loadDoc('ajax/Category/Category6.html', ProductFunction)" id="category_6"><h1>Food inspection & sorting</h1></button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php';?>

</body>

<!-- Javascript -->
<script src="js/script.js"></script>

<script>
    // For On-page Animation
    document.getElementById("menubutton_1").classList.add("onpage");

    // For Product link in menu
    if (window.location.hash.substr(1) === "products") {
        loadDoc('ajax/Productpage.html', OpenProductFunction)
    } 
</script>

</html>
