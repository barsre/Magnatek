<!doctype html>
<html lang="en">


<head>

    <!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="description" content="Magnatek offers a wide range of highly stabilized, high frequency, high voltage portable x-ray generators for industrial and medical applications.">
	<meta name="keywords" content="x-ray, x-ray inspection, x-ray generators, x-ray medical researh, x-ray Industrial measuring and analysis, x-ray electronics circuit board inspection,
              x-ray non-destructive testing, x-ray food inspection and sorting, x-ray security screening, x-ray ndt">
	<meta name="author" content="Jacob barsøe, Katrine Nielsen, Jeevith Mohanakumar">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Meta/Logo.png">

	<title>X-Ray Generators for Industrial & Medical Use | Magnatek</title>

    <!-- Stylesheets -->
    <link href="css/stylesheet_global.css" rel="stylesheet">
	<link href="css/stylesheet_frontpage.css" rel="stylesheet">

    <!-- Fonts and Logos -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
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
            <div class="frontpage__product__tags">
                <a href="index.php#Integrated_X-ray_sources" onclick="loadDoc('ajax/Category/Tag1.html', ProductFunction)"><h1>Integrated X-ray sources</h1></a>
                <a href="index.php#Generators_for_Microfocus_X-ray_tube_heads" onclick="loadDoc('ajax/Category/Tag2.html', ProductFunction)"><h1>Generators for Microfocus X-ray tube heads</h1></a>
                <a href="index.php#Auxillary" onclick="loadDoc('ajax/Category/Tag3.html', ProductFunction)"><h1>Auxillary</h1></a>
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
    if (window.location.hash.substr(1) === "Industrial_Measuring_and_Analysis") {
        loadDoc('ajax/Category/Category1.html', ProductFunction)
    } else if (window.location.hash.substr(1) === "Medical_research") {
        loadDoc('ajax/Category/Category2.html', ProductFunction)
    } else if (window.location.hash.substr(1) === "Non-Destructive_Testing_and_Measuring") {
        loadDoc('ajax/Category/Category3.html', ProductFunction)
    } else if (window.location.hash.substr(1) === "Electronics_Circuit_Board_Inspection") {
        loadDoc('ajax/Category/Category4.html', ProductFunction)
    } else if (window.location.hash.substr(1) === "Security_Screening") {
        loadDoc('ajax/Category/Category5.html', ProductFunction)
    } else if (window.location.hash.substr(1) === "Food_Inspection_&_Sorting") {
        loadDoc('ajax/Category/Category6.html', ProductFunction)
    } else if (window.location.hash.substr(1) === "Integrated_X-ray_sources") {
        loadDoc('ajax/Category/Tag1.html', ProductFunction)
    } else if (window.location.hash.substr(1) === "Generators_for_Microfocus_X-ray_tube_heads") {
        loadDoc('ajax/Category/Tag2.html', ProductFunction)
    } else if (window.location.hash.substr(1) === "Auxillary") {
        loadDoc('ajax/Category/Tag3.html', ProductFunction)
    }
</script>

</html>
