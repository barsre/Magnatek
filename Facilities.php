<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<title>Facilities Page</title>

	<link href="css/stylesheet_global.css" rel="stylesheet">
    <link href="css/stylesheet_facilities.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>

<body>

    <?php include 'includes/header.php';?>
    
    <?php include 'includes/aboutmenu.php';?>

<section class="info">
    <h1 class="info__heading">Facilities</h1>
    <div class="info__content">
        <p class="info__content__txt">Magnatek has expanded our facilities from 375m² to more than 1000m² and it includes space for development, production, storage, test and administration.
        <br><br>At our facilities, we can test the performance of new X-ray sources together with different kinds of X-ray sensitive detectors and PC controlled scanning devices.
        <br><br>The first feasibility studies of several of our customers successful projects, have been started in our laboratory.</p>
        <div class="info__content__images">
            <div id="pic1" class="info__content__images__pic">
            </div>
            <div id="pic2" class="info__content__images__pic"></div>
        </div>
    </div>
</section>

    <?php include 'includes/footer.php';?>

</body>

<script src="js/script.js"></script>
    
<script>
    // Menu Button
    document.getElementById("menubutton_3").classList.add("onpage");
    
    // Aboutmenu Button
    document.getElementById("aboutmenu_3").classList.add("on");
</script>

</html>
