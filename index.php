<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PPF</title>
	<link rel="stylesheet" href="style.css">
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  	<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
</head>

<body>
	<!-- header start -->
	<header id="top">
		<div class="header_bg">
			<img src="imgs/logo.png" height="103" width="205" alt="">
		</div>
	</header>
	<!-- header end -->

	<!-- navigation start -->
	<div class="wrapper">
		<nav class="container">
			<ul>
				<li><a href="#who">Who We Are</a></li>
				<li><a href="#what">What We Do</a></li>
				<li><a href="javascript:" onClick="window.location.href='project.php';return false">Pervious Projects</a></li>
				<li><a href="javascript:" onClick="window.location.href='faq.php';return false">FAQS</a></li>
				<li><a href="#contact">Contact Us</a></li>
			</ul>
			<div class="top"><a href="#top">Top</a></div>
		</nav>
	</div>
	<!-- navigation end -->

	<!-- who we are start -->
	<div class="wrapper who_bg" id="who">
		<section class="container">
			<h2>Who We Are</h2>
			<div class="staffs">
				<img src="imgs/gary.png" >
				<div class="who_names">Gary Hey</div>
				<div class="who_titles">Director</div>
				<div class="who_des">
					<p>Gary has been in the property finance industry for over 20 years, 14 of these as an adviser in the commercial sector of the New Zealand market.</p>
					<p>Gary specialises in the structuring and management of residential and commercial development loans and has relationships with all the prominent funders in New Zealand today.</p>
					<p>Gary’s ability to convert vision and relevant information into a successful structured funding proposal, leaves him unparalleled in the industry, and highly respected by both his clients and other related professionals in New Zealand and abroad.</p>
				</div>
			</div>
			<div class="staffs">
				<img src="imgs/angela.png" >
				<div class="who_names">Angela Peters</div>
				<div class="who_titles">Registered Financial Adviser</div>
				<div class="who_des">
					<p>If there’s a funding solution, Angela will find it! With more than 14 years’ experience as an adviser, Angela can assist clients with a variety of funding challenges, from young first home buyers to astute property investors, developers and commercial purchasers, to create the perfect solution from the correct finance provider.</p>
					<p>What sets Angela apart is her love for what she does, and her ability to champion the cause of her clients.</p>
					<p>This coupled with the fantastic relationships she has formed with lenders over the years, and her honesty and integrity, make her one of the most successful advisers in the industry today.</p>
				</div>
			</div>
			<div class="staffs">
				<img src="imgs/austin.png" >
				<div class="who_names">Austin Chang</div>
				<div class="who_titles">Registered Financial Adviser</div>
				<div class="who_des">
					<p>Austin has a Bachelor of Business from Massey University, majoring in Finance.  His qualifications and his practical experience gained working in various finance positions within New Zealand, makes him a great asset to the team.</p>
					<p>He values the trust his clients have in him to the utmost, which ensures that he provides a professional, quality service at all times.</p>
					<p>Austin is fluent in English, Mandarin and Cantonese and has a wide group of contacts in New Zealand as well as overseas, which enables him to provide the widest reach when seeking a solution to your financial challenge.</p>
				</div>
			</div>
		</section>
	</div>
	<!-- who we are end -->

	<!-- what we do start -->
	<div class="wrapper what_bg" id="what">
		<section class="container">
			<h2>What We Do</h2>
			<div class="what_title">Residential</div>
			<div class="what_des">
				<p>Whether you’re buying for the first time, buying again, looking to refinance or considering an investment property, our team of highly experienced mortgage advisers will use their many years in the industry to negotiate the best deal for you, while holding your hand through the entire process</p>
				<p>We have connections at most retail banks and a number of non-bank lenders so  you can be assured that every stone will be turned to find the best solution for you.</p>
			</div>
			<div class="what_title">Commercial</div>
			<div class="what_des">
				<p>From small commercial premises to large residential developments, apartment blocks or shopping complexes, our commercial team are one of the leaders in the industry in New Zealand, and have been for 12 years.</p>
				<p>Our reputation and business relationships with retail banks and non-bank lenders, have been gained over many years of successful business dealings, which means there is most likely a funder to suit your requirements, and we know who they are.</p>
			</div>
		</section>
	</div>
	<!-- what we do end -->

	<!-- contact start -->
	<div class="wrapper contact_bg" id="contact">
		<section class="container">
			<h2>Contact Us</h2>
			<address>
				<p>Level 1, 30 Ponsonby Road, Ponsonby</p>
				<p>P O Box 47218, Ponsonby, Auckland</p>
				<p>Tel. +64 9 360 5620</p>
				<p>Fax. +64 9 523 8011</p>
				<p>amanda.hey@peoplelimited.co.nz</p>
			</address>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.6708709407058!2d174.73900221506736!3d-36.85035778730175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d479a971d41ff%3A0xc46a42c8f588dcc0!2s30+Ponsonby+Terrace%2C+Ponsonby%2C+Auckland+1011!5e0!3m2!1sen!2snz!4v1445818173073" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="copy">Copyright &copy; 2015 Citron Created by <a href="javascript:" onClick="window.open('http://www.3a.co.nz')">3A web solution</a></div>
		</section>
	</div>
	<!-- contact end -->

	<script type="text/javascript">
	$(function(){
	  $("nav a").click(function(e){
	    e.preventDefault();
	    $('html,body').scrollTo(this.hash,this.hash);
	  });
	});
	</script>
</body>
</html>