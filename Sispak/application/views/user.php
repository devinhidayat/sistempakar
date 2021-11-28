<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Constructive HTML Template</title>
<!--

Template 2102 Constructive

http://www.tooplate.com/view/2102-constructive

-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
	<link rel="stylesheet" href="<?php echo base_url('assets/assets_user/') ?>css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/assets_user/') ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_user/') ?>css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_user/') ?>slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_user/') ?>slick/slick-theme.css"/>
	<link rel="stylesheet" href="<?php echo base_url('assets/assets_user/') ?>css/tooplate-style.css">

	<script>
		var renderPage = true;

	if(navigator.userAgent.indexOf('MSIE')!==-1
		|| navigator.appVersion.indexOf('Trident/') > 0){
   		/* Microsoft Internet Explorer detected in. */
   		alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   		renderPage = false;
	}
	</script>
</head>

<body>
	<!-- Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	
	<!-- Page Content -->
	<div class="container-fluid tm-main">
		<div class="row tm-main-row">

			<!-- Sidebar -->
			<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

				<button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

				<div class="inner">
					<nav id="tmMainNav" class="tm-main-nav">
						<ul>
							<li>
								<a href="#intro" id="tmNavLink1" class="scrolly active" data-bg-img="constructive_bg_01.jpg" data-page="#tm-section-1">
									<i class="fas fa-home tm-nav-fa-icon"></i>
									<span>Home</span>
								</a>
							</li>
							<li>
								<a href="#products" id="tmNavLink2" class="scrolly" data-bg-img="constructive_bg_02.jpg" data-page="#tm-section-2">
									<i class="fas fa-map tm-nav-fa-icon"></i>
									<span>User Data</span>
								</a>
							</li>							
							<li>
								<a href="#company" class="scrolly" data-bg-img="constructive_bg_03.jpg" data-page="#tm-section-3">
									<i class="fas fa-users tm-nav-fa-icon"></i>
									<span>Hasil Pemeriksaan</span>
								</a>
							</li>
							<li>
								<a href="#contact" class="scrolly" data-bg-img="constructive_bg_04.jpg" data-page="#tm-section-4">
									<i class="fas fa-comments tm-nav-fa-icon"></i>
									<span>Feedback</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">

					<!-- section 1 -->
					<section id="tm-section-1" class="tm-section">
						<div class="ml-auto">
							<header class="mb-4"><h1 class="tm-text-shadow">Diabetes</h1></header>
							<p class="tm-font-big">Jenis-jenis Diabetes: </p>
							<div class="row">
								<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
									<div class="media tm-bg-transparent-black tm-border-white">
										<div class="media-body">
											<h3>Diabetes Tipe 1</h3>
											<p style="text-align: justify">penyakit gangguan metabolik yang ditandai oleh adanya kenaikan kadar gula darah akibat kerusakan pada sel beta pankreas yang menyebabkan produksi insulin tidak ada sama sekali.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
									<div class="media tm-bg-transparent-black tm-border-white">
										<div class="media-body">
											<h3>Diabetes Tipe 2</h3>
											<p style="text-align: justify">penyakit gangguan metabolik yang ditandai oleh kenaikan kadar gula darah akibat penurunan sekresi insulin oleh sel beta pankreas dan atau fungsi insulin (resistensi insulin).</p>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
									<div class="media tm-bg-transparent-black tm-border-white">
										<div class="media-body">
											<h3>Diabetes Gestasional</h3>
											<p style="text-align: justify">penyakit gangguan metabolik yang ditandai oleh kenaikan kadar gula darah yang terjadi pada wanita hamil, biasanya terjadi pada usia 24 minggu masa kehamilan, dan setelah melahirkan maka kadar gula darah akan kembali normal.</p>
										</div>
									</div>
								</div>	          		
							</div>
							<a href="#" class="btn tm-btn tm-font-big" data-nav-link="#tmNavLink2">Cek Diabetes</a> 
							<!-- data-nav-link holds the ID of nav item, which means this link should behave the same as that nav item  -->
						</div>
					</section>

					<!-- section 2 -->
					<section id="tm-section-2" class="tm-section tm-section-carousel">
						<div>
							<header class="mb-4"><h2 class="tm-text-shadow">User Data</h2></header>		            
							<div class="tm-img-container">
								<form method="POST" action="<?php echo base_url('index.php/dashboard_user/tambah_userdata') ?>" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Nama</label><br>
												<input type="text" name="nama" required>
											</div>
											<div class="form-group">
												<label>Umur</label><br>
												<input type="number" step="any" name="umur" min="1" required>
											</div>
											<div class="form-group">
												<label>Tinggi Badan (m)</label><br>
												<input type="number" step="any" name="tinggi" min="0" required>
											</div>
											<div class="form-group">
												<label>Berat Badan (kg)</label><br>
												<input type="number" step="any" name="berat" min="0" required>
											</div>
											<div class="form-group">
												<label>Jenis Kelamin: </label><br>
												<select name="gender" required>
													<option value selected ></option>
													<option value="Laki-laki">Laki-laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Riwayat Diabetes Melitus Tipe 1 (Dalam keluarga)</label><br>
												<select name="dm1" required>
													<option value selected ></option>
													<option value="Ada">Ada</option>
													<option value="Tidak">Tidak</option>
												</select>
											</div>
											<div class="form-group">
												<label>Riwayat Diabetes Melitus Tipe 2 (Dalam keluarga)</label><br>
												<select name="dm2" required>
													<option value selected ></option>
													<option value="Ada">Ada</option>
													<option value="Tidak">Tidak</option>
												</select>
											</div>
											<div class="form-group">
												<label>Poliuria (Banyak Kencing)</label><br>
												<select name="poliuria" required>
													<option value selected ></option>
													<option value="Ada">Ada</option>
													<option value="Tidak">Tidak</option>
												</select>
											</div>
											<div class="form-group">
												<label>Polidipsia (Banyak Minum)</label><br>
												<select name="polidipsia" required>
													<option value selected ></option>
													<option value="Ada">Ada</option>
													<option value="Tidak">Tidak</option>
												</select>
											</div>
											<div class="form-group">
												<label>Polifagia (Banyak Makan)</label><br>
												<select name="polifagia" required>
													<option value selected ></option>
													<option value="Ada">Ada</option>
													<option value="Tidak">Tidak</option>
												</select>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-danger">Reset</button>
								</form>
							</div>		            		          
						</div>       		          	
					</section>

					<!-- section 3 -->
					<section id="tm-section-3" class="tm-section">						
						<div class="row mb-4">
							<header class="col-xl-12"><h2 class="tm-text-shadow">Hasil Diagnosa</h2></header>		
						</div>
						
						<?php 
							// if(isset($_POST[])) {
							// 	$nama=$umur=$tinggi=$berat=$gender=$dm1=$dm2=$poliuria=$polidipsia=$polifagia="";
							// }
						?>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="panel panel-primary">
									<div class="panel-body">
										<div class="form-group">
												<label>Nama: </label>
												<b><?php echo $_POST['nama'] ?></b>
										</div>
										<div class="form-group">
												<label>Kategori Usia: </label>
												<b><?php 
												if($_POST['umur'] > 0 && $_POST['umur'] < 15){
													echo "Young";
												}
												else {
													echo "Adult";
												}
												?></b>
										</div>
										<div class="form-group">
											<label>Penyakit:</label>
											<label><b><?php 
												if ($_POST['umur'] > 0 && $_POST['umur'] < 15) {
													if ($_POST['dm1'] == "Tidak" && $_POST['dm2'] == "Ada") {
														if ($_POST['poliuria'] == "Tidak" && $_POST['polidipsia'] == "Tidak" && $_POST['polifagia'] == "Tidak") {
															$penyakit = "Normal";
															echo $penyakit;
														}
														else if ($_POST['poliuria'] == "Ada" || $_POST['polidipsia'] == "Ada" || $_POST['polifagia'] == "Ada") {
															$penyakit = "Diabetes Melitus Tipe 2";
															echo $penyakit;
														}
													}
													else {
														if ($_POST['poliuria'] == "Tidak" && $_POST['polidipsia'] == "Tidak" && $_POST['polifagia'] == "Tidak") {
															$penyakit = "Normal";
															echo $penyakit;
														}
														else if ($_POST['poliuria'] == "Ada" || $_POST['polidipsia'] == "Ada" || $_POST['polifagia'] == "Ada") {
															$penyakit = "Diabetes Melitus Tipe 1";
															echo $penyakit;
														}
													}
												}
												else {
													if ($_POST['dm1'] == "Ada" && $_POST['dm2'] == "Tidak") {
														if ($_POST['poliuria'] == "Tidak" && $_POST['polidipsia'] == "Tidak" && $_POST['polifagia'] == "Tidak") {
															$penyakit = "Normal";
															echo $penyakit;
														}
														else if ($_POST['poliuria'] == "Ada" || $_POST['polidipsia'] == "Ada" || $_POST['polifagia'] == "Ada") {
															$penyakit = "Diabetes Melitus Tipe 1";
															echo $penyakit;
														}
													}
													else {
														if ($_POST['poliuria'] == "Tidak" && $_POST['polidipsia'] == "Tidak" && $_POST['polifagia'] == "Tidak") {
															$penyakit = "Normal";
															echo $penyakit;
														}
														else if ($_POST['poliuria'] == "Ada" || $_POST['polidipsia'] == "Ada" || $_POST['polifagia'] == "Ada") {
															$penyakit = "Diabetes Melitus Tipe 2";
															echo $penyakit;
														}
													}
												}
											?></b></label>
										</div>
										<div class="form-group">
											<label>Saran</label><br>
											<textarea readonly><?php 
												if($penyakit == "Diabetes Melitus Tipe 1") {
													echo "Suntik insulin, mengatur pola makan yang sehat, serta rajin berolahraga";
												}
												else if($penyakit == "Diabetes Melitus Tipe 2") {
													echo "Hindari makanan berkadar glukosa tinggi, olaraga secara teratur, menurunkan dan menjaga berat badan ideal, berhenti merokok, kurangi minuman beralkohol, dan melakukan cek gula darah secara rutin.";
												}
												else {
													echo "Tetap jaga pola hidup sehat, menjaga berat badan ideal, dan melakukan pengecekan gula darah secara rutin";
												}
											?></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>					               
					</section>

					<!-- section 4 -->
					<section id="tm-section-4" class="tm-section">
						<div class="tm-bg-transparent-black tm-contact-box-pad">
							<div class="row mb-4">
								<div class="col-sm-12">
									<header><h2 class="tm-text-shadow">Feedback</h2></header>
								</div>
							</div>
							<div class="row tm-page-4-content">
								<div class="col-md-6 col-sm-12 tm-contact-col">
									<div class="contact_message">
										<form action="#contact" method="post" class="contact-form">
											<div class="form-group">
												<input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required>
											</div>
											<div class="form-group">
												<input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required>
											</div>
											<div class="form-group">
												<textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
											</div>
											<button type="submit" class="btn tm-btn-submit tm-btn ml-auto">Submit</button>
										</form>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 tm-contact-col">
									<div class="tm-address-box">
									</div>
								</div>
							</div>
						</div>
					</section>					
				</div>	<!-- .tm-content -->							
				<footer class="footer-link">
				</footer>
			</div>	<!-- row -->			
		</div>
		<div id="preload-01"></div>
		<div id="preload-02"></div>
		<div id="preload-03"></div>
		<div id="preload-04"></div>

		<script type="text/javascript" src="<?php echo base_url('assets/assets_user/') ?>js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/assets_user/') ?>js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/assets_user/') ?>js/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/assets_user/') ?>slick/slick.min.js"></script> <!-- Slick Carousel -->

		<script>

		var sidebarVisible = false;
		var currentPageID = "#tm-section-1";

		// Setup Carousel
		function setupCarousel() {

			// If current page isn't Carousel page, don't do anything.
			if($('#tm-section-2').css('display') == "none") {
			}
			else {	// If current page is Carousel page, set up the Carousel.

				var slider = $('.tm-img-slider');
				var windowWidth = $(window).width();

				if (slider.hasClass('slick-initialized')) {
					slider.slick('destroy');
				}

				if(windowWidth < 640) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 1,
	              		slidesToScroll: 1
	              	});
				}
				else if(windowWidth < 992) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 2,
	              		slidesToScroll: 1
	              	});
				}
				else {
					// Slick carousel
	              	slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 3,
	              		slidesToScroll: 2
	              	});
				}

				// Init Magnific Popup
				$('.tm-img-slider').magnificPopup({
				  delegate: 'a', // child items selector, by clicking on it popup will open
				  type: 'image',
				  gallery: {enabled:true}
				  // other options
				});
      		}
  		}

  		// Setup Nav
  		function setupNav() {
  			// Add Event Listener to each Nav item
	     	$(".tm-main-nav a").click(function(e){
	     		e.preventDefault();
		    	
		    	var currentNavItem = $(this);
		    	changePage(currentNavItem);
		    	
		    	setupCarousel();
		    	setupFooter();

		    	// Hide the nav on mobile
		    	$("#tmSideBar").removeClass("show");
		    });	    
  		}

  		function changePage(currentNavItem) {
  			// Update Nav items
  			$(".tm-main-nav a").removeClass("active");
     		currentNavItem.addClass("active");

	    	$(currentPageID).hide();

	    	// Show current page
	    	currentPageID = currentNavItem.data("page");
	    	$(currentPageID).fadeIn(1000);

	    	// Change background image
	    	var bgImg = currentNavItem.data("bgImg");
	    	$.backstretch("img/" + bgImg);		    	
  		}

  		// Setup Nav Toggle Button
  		function setupNavToggle() {

			$("#tmMainNavToggle").on("click", function(){
				$(".sidebar").toggleClass("show");
			});
  		}

  		// If there is enough room, stick the footer at the bottom of page content.
  		// If not, place it after the page content
  		function setupFooter() {
  			
  			var padding = 100;
  			var footerPadding = 40;
  			var mainContent = $("section"+currentPageID);
  			var mainContentHeight = mainContent.outerHeight(true);
  			var footer = $(".footer-link");
  			var footerHeight = footer.outerHeight(true);
  			var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
  			var windowHeight = $(window).height();		

  			if(totalPageHeight > windowHeight){
  				$(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
  				footer.css("bottom", footerHeight + "px");  			
  			}
  			else {
  				$(".tm-content").css("margin-bottom", "0");
  				footer.css("bottom", "20px");  				
  			}  			
  		}

  		// Everything is loaded including images.
      	$(window).on("load", function(){

      		// Render the page on modern browser only.
      		if(renderPage) {
				// Remove loader
		      	$('body').addClass('loaded');

		      	// Page transition
		      	var allPages = $(".tm-section");

		      	// Handle click of "Continue", which changes to next page
		      	// The link contains data-nav-link attribute, which holds the nav item ID
		      	// Nav item ID is then used to access and trigger click on the corresponding nav item
		      	var linkToAnotherPage = $("a.tm-btn[data-nav-link]");
			    
			    if(linkToAnotherPage != null) {
			    	
			    	linkToAnotherPage.on("click", function(){
			    		var navItemToHighlight = linkToAnotherPage.data("navLink");
			    		$("a" + navItemToHighlight).click();
			    	});
			    }
		      	
		      	// Hide all pages
		      	allPages.hide();

		      	$("#tm-section-1").fadeIn();

		     	// Set up background first page
		     	var bgImg = $("#tmNavLink1").data("bgImg");
		     	
		     	$.backstretch("img/" + bgImg, {fade: 500});

		     	// Setup Carousel, Nav, and Nav Toggle
			    setupCarousel();
			    setupNav();
			    setupNavToggle();
			    setupFooter();

			    // Resize Carousel upon window resize
			    $(window).resize(function() {
			    	setupCarousel();
			    	setupFooter();
			    });
      		}	      	
		});

		// if ( window.history.replaceState ) {
		// 	window.history.replaceState( null, null, window.location.href );
		// }

		</script>
	</body>
</html>