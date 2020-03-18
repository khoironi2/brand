<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css') ?>">

	<title>BRAND DIGITAL</title>
</head>

<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">
				<img height="60px" src="<?= base_url('assets/img/Icon ionic-logo-buffer.png') ?>">
				LOGO BRAND

			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">


				<div class="navbar-nav navhover ml-auto">

					<a style="color: white;" class=" nav-link active" href="#product">PRODUCTS <span class="sr-only">(current)</span></a>
					<a style="color: white;" class="nav-item nav-link" href="#">CLIENT</a>
					<a style="color: white;" class="nav-item nav-link" href="#">CONTACT</a>

				</div>
			</div>
		</div>
	</nav>


	<section class="slider">

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p class="top">BINGUNG BUAT SURAT PENGANTAR PERJALANAN DINAS ?</p>
					<p class="midle">GAMPANG KOK</p>
					<p class="bottom">BUAT SURAT BISA HANYA DENGAN SEKALI KLIK !</p>
					<a href="<?= base_url('welcome/sendEmailTomember') ?>">
						<button type="button" class="btn btn-light">DOWNLOAD</button></a>

				</div>
				<div class="col-md-2">
					<img class="mr-auto" src="img/Group 21.png" alt="">
				</div>
			</div>

		</div>

	</section>


	<section class="lihat">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<p class="top">Lihat Produk di <span>Perusahaan</span> Kami</p>
					<p class="bottom">Saat ini kami telah mengembangkan beberapa produk di bidang pendidikan,
						pariwisata dan pemerintahan</p>
				</div>
				<div class="col-md-3">
					<a href="#product"><button type="button" class="btn btn-light">LIHAT PRODUK</button></a>
				</div>
			</div>
		</div>
	</section>


	<section id="product" class="product">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col">
					<h3>PRODUCT</h3>

				</div>
			</div>
			<div class="row mb-5 justify-content-center">
				<ul id="tabs" class="nav justify-content-center">
					<li class="nav-item">
						<a href="#" name="#tab1" class="badge badge-warning">ALL</a>
					</li>
					<li class="nav-item">
						<a href="#" name="#tab2" class="badge badge-warning">SPK</a>
					</li>
					<li class="nav-item">
						<a href="#" name="#tab3" class="badge badge-warning">DESIGN GRAPHIC</a>
					</li>
					<li class="nav-item">
						<a href="#" name="#tab4" class="badge badge-warning">MANAGEMENT DATA</a>
					</li>
				</ul>

			</div>
			<div id="content">
				<div id="tab1" class="row justify-content-center">
					<?php foreach ($product as $p) : ?>
						<div class="col-md-4 items">
							<div class="card">
								<img src="<?php echo $p->url_img; ?>" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title"><?php echo $p->nama_p; ?></h5>
									<p class="card-text"><?php echo $p->namajp; ?> 9 Terjual <div class="spinner-grow spinner-grow-sm" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</p>

									<a href="<?php echo base_url('welcome/product/') . $p->idp ?>" class="btn btn-primary">DOWNLOAD</a>
									<button type="button" class="btn btn-outline-warning">DEMO</button>

								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>

				<div id="tab2" class="row justify-content-center">
					<div class="col-md-4 items">
						<div class="card ">
							<img src="img/campaign-creators-OGOWDVLbMSc-unsplash.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">SISTEM PAKAR PENYAKIT GINJAL</h5>
								<p class="card-text">EXPERT SYSTEM</p>
								<a href="product.html" class="btn btn-primary">DOWNLOAD</a>
								<button type="button" class="btn btn-success">
									Terjual <span class="badge badge-light">9</span>
								</button>
							</div>
						</div>
					</div>
				</div>


				<div id="tab3" class="row justify-content-center">
					<div class="col-md-4 items">
						<div class="card ">
							<img src="img/boxed-water-is-better-7mr6Yx-8WLc-unsplash.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">SUSU PASCASARJANA</h5>
								<p class="card-text">Product Design</p>
								<a href="#" class="btn btn-primary">DOWNLOAD</a>
								<button type="button" class="btn btn-success">
									Terjual <span class="badge badge-light">9</span>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div id="tab4" class="row justify-content-center">

					<div class="col-md-4 items">
						<div class="card ">
							<img src="img/campaign-creators-OGOWDVLbMSc-unsplash.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">SURAT PENGANTAR PERJALANAN DINAS </h5>
								<p class="card-text">MANAGEMENT DATA</p>
								<a href="#" class="btn btn-primary">DOWNLOAD</a>
								<button type="button" class="btn btn-success">
									Terjual <span class="badge badge-light">9</span>
								</button>
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>
	</section>


	<section class="carapesan">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<h4>CARA PEMESANAN</h4>
				</div>
			</div>
		</div>

	</section>



	<section class="testimonial">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<h4>TESTIMONIAL</h4>
				</div>
			</div>
		</div>

	</section>

	<section class="contact">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<h1>CONTACT</h1>
				</div>
			</div>

			<div class="row mt-5 justify-content-center">
				<div class="col-lg contactitem">
					<img src="img/Group 22.png" alt="Logo Brand">
					<h2>LOGO BRAND</h2>
					<p>Service Produk dan Layanan Teknologi Informasi</p>
					<p>admin@corporate.com
						<br>Phone: 0823445789
					</p>

				</div>

				<div class="col-lg contactitem">
					<h2>INFORMASI</h2>
					<p><a href="">Karir</a>
						<br><a href="">Contact</a></p>

				</div>

				<div class="col-lg contactitem">
					<h2>PAGE</h2>
					<p><a href="">Terms and conditions</a>
						<br><a href="">Privacy policy</a>
						<br><a href="">Blog</a>
					</p>

				</div>

			</div>
		</div>

	</section>


	<footer>
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<p>Copyright © 2020 | <a href=""> <span>Brand Name</span> </a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script>
		function resetTabs() {
			$("#content > div").hide(); //Hide all content
			$("#tabs a").attr("id", ""); //Reset id's      
		}

		var myUrl = window.location.href; //get URL
		var myUrlTab = myUrl.substring(myUrl.indexOf("#")); // For localhost/tabs.html#tab2, myUrlTab = #tab2     
		var myUrlTabName = myUrlTab.substring(0, 4); // For the above example, myUrlTabName = #tab

		(function() {
			$("#content > div").hide(); // Initially hide all content
			$("#tabs li:first a").attr("id", "current"); // Activate first tab
			$("#content > div:first").fadeIn(); // Show first tab content

			$("#tabs a").on("click", function(e) {
				e.preventDefault();
				if ($(this).attr("id") == "current") { //detection for current tab
					return
				} else {
					resetTabs();
					$(this).attr("id", "current"); // Activate this
					$($(this).attr('name')).fadeIn(); // Show content for current tab
				}
			});

			for (i = 1; i <= $("#tabs li").length; i++) {
				if (myUrlTab == myUrlTabName + i) {
					resetTabs();
					$("a[name='" + myUrlTab + "']").attr("id", "current"); // Activate url tab
					$(myUrlTab).fadeIn(); // Show url tab content        
				}
			}
		})()
	</script>
</body>

</html>