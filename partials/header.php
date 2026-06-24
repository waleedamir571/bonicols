<?php include 'assets/includes/functions.php' ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<title>
		<?php echo $title_name; ?>
	</title>
	<meta name="description" content="<?php echo $description; ?>">

	<meta name="google-site-verification" content="ezHJTyLZttx9lw_5D7JnzmE2qNQIx8KNknGLuXAUuVY" />
	<meta name="google-site-verification" content="aQbA0ZDhFH3CL1CbFOittnS04EPb2PeGZXgLLfj7eaQ" />
	<!-- Stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
	<!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
	<link href="assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
	<!-- REVOLUTION SETTINGS STYLES -->
	<link href="assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
	<!-- REVOLUTION LAYERS STYLES -->

	<link id="theme-color-file" href="assets/css/color-themes/blue-theme.css" rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap"
		rel="stylesheet">
	<meta name="google-site-verification" content="MfZyRwrn0r7AVEZi2Ctrfo_LP5rhMED_H_uI3rb7Rvg" />

	<link href="assets/css/style-2.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">

	<!-- begin super lawyers badge -->
	<link rel="stylesheet" href="https://www.superlawyers.com/static/sl-paid-badge/v4/sl_badge.min.css?1779375713"
		crossorigin="anonymous">
	<div class="slbadge slbadge-v4-embed"
		data-badge-url="https://api.superlawyers.com/v1/badges/v4/html?type=atty-milestone-20&template=atty-milestone&name=John%20%26%23039%3BBo%26%23039%3B%20Nichols&year=20&profile_link=aHR0cHM6Ly9wcm9maWxlcy5zdXBlcmxhd3llcnMuY29tL3RleGFzL2hvdXN0b24vbGF3eWVyL2pvaG4tYm8tbmljaG9scy82MDYyZTk2OS03OTMyLTRmYTMtODljNC1iMWM4Njg3NDU4ODkuaHRtbD9ucGNtcD1zbGI6YmFkZ2U6c2xfYmFkZ2VfdjQ6NjA2MmU5NjktNzkzMi00ZmEzLTg5YzQtYjFjODY4NzQ1ODg5Om1haW4mdXRtX3NvdXJjZT02MDYyZTk2OS03OTMyLTRmYTMtODljNC1iMWM4Njg3NDU4ODkmdXRtX2NhbXBhaWduPXY0LWF0dHktbWlsZXN0b25lLTIwJnV0bV9jb250ZW50PXByb2ZpbGU%3D&link_text=View%20the%20profile%20of%20Texas%20Family%20Law%20Attorney%20John%20%26%23039%3BBo%26%23039%3B%20Nichols%20%3A%20Super%20Lawyers%20Selectee%2020%20Years&color=sl&rs=0&line1=&line2=&region=&toplist_type=&hash=13d6b205d6f2837796c379c3e76700c142ee7f58893c2645fc0f859ede1c7c5e">
		<div
			style="width:180px;height:150px;border-radius:12px;font-family:arial, sans-serif;color:gray;text-align:center">
			Rated by Super Lawyers<br /><br /><br />loading ...</div>
	</div>
	<script src="https://www.superlawyers.com/static/sl-paid-badge/v4/sl_badge.min.js?1779375713"
		crossorigin="anonymous"></script><!-- end super lawyers badge -->


	<link rel="canonical" href="<?php echo $url; ?>" />


	<meta property="og:type" content="website" />
	<meta property="og:title" content="Bo Nichols | Expert Family Law Attorney in Houston" />
	<meta property="og:description"
		content="Looking for the best family attorney in Houston? Get legal aid from Bo Nichols in matters of divorce, child custody and support, and asset division." />
	<meta name="Expert Family Law Attorney in Houston" content="" />
	<meta property="og:url" content="https://bonicholslaw.com/" />
	<meta property="og:image" content="https://bonicholslaw.com/assets/images/logo-light.png" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:site_name" content="bonicholslaw" />


	<!-- TWITTER CARD TAG -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="bonicholslaw">
	<meta name="twitter:creator" content="@bonicholslaw">
	<meta name="twitter:title" content=" Bo Nichols | Expert Family Law Attorney in Houston ">
	<meta name="twitter:description"
		content=" Looking for the best family attorney in Houston? Get legal aid from Bo Nichols in matters of divorce, child custody and support, and asset division.">
	<meta name="twitter:image" content=" https://bonicholslaw.com/assets/images/logo-light.png ">

	<!-- Color Themes -->


	<link href="assets/falt/font/flaticon.css" rel="stylesheet">
	<link href="assets/flati/flaticon.css" rel="stylesheet">
	<link href="assets/fancybox-master/dist/jquery.fancybox.css" rel="stylesheet">
	<link href="assets/css/custom.css" rel="stylesheet">
	<link rel="icon" href="assets/images/fav.png">


	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<style>
		.fancybox-slide>* {
			padding: 0;
			max-width: 1000px;
		}
	</style>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-17PV9LHTCM"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-17PV9LHTCM');
	</script>


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-374GR47KHK"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-374GR47KHK');
	</script>

	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Attorney",
  "name": "Bo Nichols Law",
  "image": "https://www.bonicholslaw.com/assets/images/logo-light.png",
  "@id": "",
  "url": "https://www.bonicholslaw.com",
  "telephone": "(713) 351-0681",
  "priceRange": "$$$",
  "address": {
	"@type": "PostalAddress",
	"streetAddress": "1201 Shepherd Dr,",
	"addressLocality": "Houston",
	"addressRegion": "TX",
	"postalCode": "77007",
	"addressCountry": "US"
  },
  "geo": {
	"@type": "GeoCoordinates",
	"latitude": 29.7720809,
	"longitude": -95.4098065
  },
  "openingHoursSpecification": {
	"@type": "OpeningHoursSpecification",
	"dayOfWeek": [
	  "Monday",
	  "Tuesday",
	  "Wednesday",
	  "Thursday",
	  "Friday"
	],
	"opens": "08:00",
	"closes": "18:00"
  },
  "sameAs": "https://www.facebook.com/bonicholslaw/" 
}
</script>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-M2XBKWG0B0"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', 'G-M2XBKWG0B0');
	</script>


</head>

<div class="preloader"></div>