<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<title>Contact Page</title>

	<link href="css/stylesheet_global.css" rel="stylesheet">
    <link href="css/stylesheet_contact.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>

<body>
    <?php include 'includes/header.php';?>

		<section class="headline">
			<h1> Contact </h1>
		</section>
		<div class="contact">
		<section class="contact__logo">
			<img class="contact__logo__email" src="img/contact/email.png" alt="email logo">
			<h2>E-mail us</h2>
			<h3>info@magnatek.dk<h3>
		</section>
		<section class="contact__logo">
			<img class="contact__logo__phone" src="img/contact/phone.png" alt="phone logo">
			<h2>Call us</h2>
			<h3>+45 38 86 01 42	<h3>
		</section>
		<section class="contact__logo">
			<img class="contact__logo__email" src="img/contact/fax.png" alt="fax logo">
			<h2>FAX us</h2>
			<h3>+45 38 86 06 39 <h3>
		</section>
</div>

<div class="maps">
<section class="maps__header">
	<h1 class="maps__header__headline"> Find us here</h1>
	<h3>Magnatek aps</h3>
	<h3>Bjødstrup 6B </h3>
	<h3>8270 Hoejbjerg </h3>
	<h3>Denmark </h3>
</section>
<section class="maps__logo">
	<img class="maps__logo__pointer" src="img/contact/pointer.png" alt="pointer logo">
</section>
</div>
<section class="maps__map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2224.6068879099284!2d10.166039815944549!3d56.112019680650945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c403afc596077%3A0xa32e55fb63dd70!2sMagnatek+ApS!5e0!3m2!1sda!2sdk!4v1527071146102" width="100%" height="500vw" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>



    <?php include 'includes/footer.php';?>

</body>

<script src="js/script.js"></script>

<script>
    var Underline = document.createElement("DIV");
    var Linebreak = document.createElement("BR");
    document.getElementById("menubutton_4").appendChild(Linebreak);
    document.getElementById("menubutton_4").appendChild(Underline);

    var Onpage = document.getElementById("menubutton_4");
    Onpage.classList.add("onpage");
</script>

</html>
