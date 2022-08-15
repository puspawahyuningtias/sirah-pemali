<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<!--begin::Head-->

<head>
	<base href="">
	<title>Sirah Pemali</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="assets/media/img/logo/logo1.svg" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/myStyle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Header Section-->
		<div class="mb-0" id="home">
			<!--begin::Wrapper-->
			<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg">
				<!--begin::Header-->
				<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex align-items-center justify-content-between">
							<!--begin::Logo-->
							<div class="d-flex align-items-center flex-equal">
								<!--begin::Mobile menu toggle-->
								<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-2hx">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Mobile menu toggle-->
								<!--begin::Logo image-->
								<a href="../../demo1/dist/landing.html">
									<img alt="Logo" src="assets/media/img/logo/logo1.svg" class="logo-default h-30px h-lg-35px" />
									<img alt="Logo" src="assets/media/img/logo/logo2.svg" class="logo-sticky h-25px h-lg-30px" />
								</a>
								<!--end::Logo image-->
							</div>
							<!--end::Logo-->
							<!--begin::Menu wrapper-->
							<div class="d-lg-block" id="kt_header_nav_wrapper">
								<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
									<!--begin::Menu-->
									<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="/">Home</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="/restaurant">Restaurant & Cafe</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 active px-4 px-xxl-6" href="/paket">Paket Wisata</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="https://berita.sirahpemali.id/">Berita</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="/contact">Hubungi Kami</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
							</div>
							<!--end::Menu wrapper-->
							<!--begin::Toolbar-->
							<div class="flex-equal text-end ms-1">
								<a href="/reservation" class="btn btn-primary">Reservasi</a>
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Header Section-->

		<!--begin::Statistics Section-->
		<div class="my-5">
			<!--begin::Wrapper-->
			<div class="bg-white">
				<!--begin::Container-->
				<div class="container my-20">
					<div class="d-flex flex-row reverse">
						<div class="col-md-6">
							<!--begin::Heading-->
							<div class="text-start my-17">
								<!--begin::Title-->
								<h1 class="text-dark mb-5">Nikmati Waktu Disini Lebih Lama</h1>
								<!--end::Title-->
								<!--begin::Sub-title-->
								<div class="fs-5 text-muted fw-bold">
									<p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.
									</p>
								</div>
								<!--end::Sub-title=-->
							</div>
							<!--end::Heading-->
						</div>
						<div class="col-md-6">
							<img src="assets/media/img/gallery/14.png" class="mw-100 rounded-3" alt="" />
						</div>
					</div>
				</div>
				<!--end::Container-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Statistics Section-->
		<div class="py-5" style="background-color:#EEF6F5">
			<div class="container">
				<!--begin::Heading-->
				<div class="text-center my-5">
					<!--begin::Title-->
					<h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Apa si enaknya ngecamp di Wanawisata Sirah Pemali</h3>
					<!--end::Title-->
					<!--begin::Text-->
					<div class="fs-5 text-muted fw-bold">Mengapa Kita harus berkunjung ke Wanawisata Sirah pemali</div>
					<!--end::Text-->
				</div>
				<!--end::Heading-->

				<div class="tns tns-default">
					<!--begin::Slider-->
					<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="3" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
						<!--begin::Item-->
						<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10 mx-5 py-20 mb-10 text-center bg-white rounded shadow-sm">
							<!--begin::Illustration-->
							<img src="assets/media/img/icon/2.png" class="mw-100" alt="" />
							<!--end::Illustration-->
							<div class="mt-10">
								<!--begin::Name-->
								<a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Best Service</a>
								<!--end::Name-->
								<!--begin::Position-->
								<div class="text-muted fs-7 fw-bold mt-1 lh-lg">our service is reliable and convenient, our service is quality.</div>
								<!--begin::Position-->
							</div>
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10 mx-5 py-20 mb-10 text-center bg-white rounded shadow-sm">
							<!--begin::Illustration-->
							<img src="assets/media/img/icon/3.png" class="mw-100" alt="" />
							<!--end::Illustration-->
							<div class="mt-10">
								<!--begin::Name-->
								<a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Price Guarantee</a>
								<!--end::Name-->
								<!--begin::Position-->
								<div class="text-muted fs-7 fw-bold mt-1 lh-lg">our service is reliable and convenient, our service is quality.</div>
								<!--begin::Position-->
							</div>
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10 mx-5 py-20 mb-10 text-center bg-white rounded shadow-sm">
							<!--begin::Illustration-->
							<img src="assets/media/img/icon/1.png" class="mw-100" alt="" />
							<!--end::Illustration-->
							<div class="mt-10">
								<!--begin::Name-->
								<a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Good Facilities</a>
								<!--end::Name-->
								<!--begin::Position-->
								<div class="text-muted fs-7 fw-bold mt-1 lh-lg">our service is reliable and convenient, our service is quality.</div>
								<!--begin::Position-->
							</div>
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10 mx-5 py-20 mb-10 text-center bg-white rounded shadow-sm">
							<!--begin::Illustration-->
							<img src="assets/media/img/icon/2.png" class="mw-100" alt="" />
							<!--end::Illustration-->
							<div class="mt-10">
								<!--begin::Name-->
								<a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Best Service</a>
								<!--end::Name-->
								<!--begin::Position-->
								<div class="text-muted fs-7 fw-bold mt-1 lh-lg">our service is reliable and convenient, our service is quality.</div>
								<!--begin::Position-->
							</div>
						</div>
						<!--end::Item-->
					</div>
					<!--end::Slider-->

					<!--begin::Slider button-->
					<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
						<span class="svg-icon svg-icon-3x">
							<i class="bi bi-chevron-left fs-1"></i>
						</span>
					</button>
					<!--end::Slider button-->

					<!--begin::Slider button-->
					<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
						<span class="svg-icon svg-icon-3x">
							<i class="bi bi-chevron-right fs-1"></i>
						</span>
					</button>
					<!--end::Slider button-->
				</div>
			</div>
		</div>

		<!--begin::How It Works Section-->
		<div class="my-5">
			<!--begin::Container-->
			<div class="container text-center">
				<!--begin::Heading-->
				<div class="text-center my-17">
					<!--begin::Title-->
					<h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Harga Peket Camping di Wanawisata Sirah Pemali</h3>
					<!--end::Title-->
					<!--begin::Text-->
					<div class="fs-5 text-muted fw-bold">We have some solid plans to support your goal of getting fit according to your body goals</div>
					<!--end::Text-->
				</div>
				<!--end::Heading-->
				<div class="tns tns-default">
					<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="3" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev2" data-tns-next-button="#kt_team_slider_next2">
						<!--begin::Item-->
						<div class="d-flex flex-column justify-content-between text-center px-6 pt-5 pt-lg-10 py-20 mx-5 mb-10 text-center rounded shadow-sm text-white" style="background-color: #2C473E;">
							<h1 class="text-white">Archery Outbound</h1>
							<p class="text-muted">Program untuk menigkatkan daya fokus melalui permainan daya fokus panah memanah</p>
							<h1 class="fs-2hx text-white">Rp 150K/pax</h1>
							<div>
								<ul class="text-start text-muted">
									<li class="">Ice Breaking (5 games)</li>
									<li class="">Fun Game (4 games)</li>
									<li class="">Competition Game (3 Games)</li>
									<li class="">Warrior Archery</li>
									<li class="">Makan 1x, Snack</li>
									<li>Sertificate</li>
									<li>Clear Area Outbound</li>
									<li>Tool Activities</li>
									<li>Duration Game : 5 Hours</li>
									<li>Brief Motivation</li>
								</ul>
							</div>
							<div>
								<a href="#" class="text-uppercase btn btn-outline btn-outline-white btn-active-light-white">Book Now</a>
							</div>
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-column justify-content-between text-center px-6 pt-5 pt-lg-10 py-20 mx-5 mb-10 text-center rounded shadow-sm text-white" style="background-color: #2C473E;">
							<h1 class="text-white">Field Trip Program</h1>
							<p class="text-muted">Program untuk explorasi keahlian profesi dengan melihat dan mengamati sebuah proses dan pengolahan alam sekitar</p>
							<h1 class="fs-2hx text-white">Rp 125K/pax</h1>
							<div>
								<ul class="text-start text-muted">
									<li class="">Ice Breaking (5 games)</li>
									<li class="">Fun Game (4 games)</li>
									<li class="">Competition Game (3 Games)</li>
									<li class="">Trip Education (3 Lokasi)</li>
									<li class="">Makan 1x, Snack</li>
									<li>Sertificate</li>
									<li>Asuransi Perjalanan</li>
									<li>Tool Activities</li>
									<li>Duration Game : 7 Hours</li>
									<li>Brief Motivation</li>
								</ul>
							</div>
							<div>
								<a href="#" class="text-uppercase btn btn-outline btn-outline-white btn-active-light-white">Book Now</a>
							</div>
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-column justify-content-between text-center px-6 pt-5 pt-lg-10 py-20 mx-5 mb-10 text-center rounded shadow-sm text-white" style="background-color: #2C473E;">
							<h1 class="text-white">ShareLock Home</h1>
							<p class="text-muted">Program untuk meningkatkan pola berfikir positif, membuat peta pikiran dalam menentuka keputusan yang tepat. </p>
							<h1 class="fs-2hx text-white">Rp 150K/pax</h1>
							<div>
								<ul class="text-start text-muted">
									<li class="">Senam Fun</li>
									<li class="">Ice Breaking (4 games)</li>
									<li class="">21 Games ShareLock Home</li>
									<li class="">Trip Education (3 Lokasi)</li>
									<li class="">Makan 1x, Snack</li>
									<li class="">Mineral Water</li>
									<li class="">Tiket Masuk</li>
									<li class="">Triner dan Instruktur Game</li>
									<li>Foto dan Video</li>
									<li>Brief Motivation</li>
									<li>P3K dan Sertifikat</li>
								</ul>
							</div>
							<div>
								<a href="#" class="text-uppercase btn btn-outline btn-outline-white btn-active-light-white">Book Now</a>
							</div>
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-column justify-content-between text-center px-6 pt-5 pt-lg-10 py-20 mx-5 mb-10 text-center rounded shadow-sm text-white" style="background-color: #2C473E;">
							<h1 class="text-white">Little Farmer</h1>
							<p class="text-muted">Program pembelajaran untuk menghargai alam sekitar dengan langsung mengolah sebuah lahan pertanian </p>
							<h1 class="fs-2hx text-white">Rp 95K/pax</h1>
							<div>
								<ul class="text-start text-muted">
									<li class="">Senam Funsport</li>
									<li class="">Ice Breaking (5 games)</li>
									<li class="">Team Game (5 Games)</li>
									<li class="">Team Building (5 Games)</li>
									<li class="">Makan 1x, Snack</li>
									<li class="">Mineral Water</li>
									<li class="">Tiket Masuk</li>
									<li class="">Instruktur Game</li>
									<li>Foto dan Video</li>
									<li>Brief Motivation</li>
									<li>P3K dan Sertifikat</li>
								</ul>
							</div>
							<div>
								<a href="#" class="text-uppercase btn btn-outline btn-outline-white btn-active-light-white">Book Now</a>
							</div>
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-column justify-content-between text-center px-6 pt-5 pt-lg-10 py-20 mx-5 mb-10 text-center rounded shadow-sm text-white" style="background-color: #2C473E;">
							<h1 class="text-white">Rafting Program</h1>
							<p class="text-muted">Program untuk memacu adrenalin peserta dalam menelusuri air sungai sejauh 4-6 km menggunakan perahu karet (rafting)</p>
							<h1 class="fs-2hx text-white">Rp 300K/pax</h1>
							<div>
								<ul class="text-start text-muted">
									<li class="">Tiket Rafting 4km</li>
									<li class="">Perlengkapan Rafting</li>
									<li class="">Ice Breaking (5 games)</li>
									<li class="">Team Game (5 Games)</li>
									<li class="">Adventure Game (Rafting 14km)</li>
									<li class="">Makan 1x, Snack 2x</li>
									<li class="">Instruktur Game</li>
									<li class="">Asuransi Kecelakaan</li>
									<li>Foto dan Video</li>
									<li>Transportasi Lokal</li>
								</ul>
							</div>
							<div>
								<a href="#" class="text-uppercase btn btn-outline btn-outline-white btn-active-light-white">Book Now</a>
							</div>
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-column justify-content-between text-center px-6 pt-5 pt-lg-10 py-20 mx-5 mb-10 text-center rounded shadow-sm text-white" style="background-color: #2C473E;">
							<h1 class="text-white">Paint Ball Program</h1>
							<p class="text-muted">Program untuk menciptakan pola pikir yang strategis melalui kegiatan simulasi tempur dialam terbuka. Melatih kesolidan</p>
							<h1 class="fs-2hx text-white">Rp 300K/pax</h1>
							<div>
								<ul class="text-start text-muted">
									<li class="">Ice Breaking/Fun Game</li>
									<li class="">Team Game </li>
									<li class="">Warrior Game</li>
									<li class="">Set Game Paint Ball (Per Pax)</li>
									<li class="">Clear Area Outbound</li>
									<li class="">Makan 1x, Snack 1x</li>
									<li class="">Mineral Water 2x (600ml)</li>
									<li class="">Instruksi Game dan Sertificate</li>
									<li>Durasi : 5 Jam</li>
									<li>Free Ticket</li>
								</ul>
							</div>
							<div>
								<a href="#" class="text-uppercase btn btn-outline btn-outline-white btn-active-light-white">Book Now</a>
							</div>
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-column justify-content-between text-center px-6 pt-5 pt-lg-10 py-20 mx-5 mb-10 text-center rounded shadow-sm text-white" style="background-color: #2C473E;">
							<h1 class="text-white">Chalenges Program</h1>
							<p class="text-muted">Program untuk meningkatkan keberanian peserta dengan menyelesaikan permainan menantang keberanian</p>
							<h1 class="fs-2hx text-white">Rp 150K/pax</h1>
							<div>
								<ul class="text-start text-muted">
									<li class="">Motivation Building</li>
									<li class="">Fun Game (6 Games)</li>
									<li class="">Team Game (6 Games)</li>
									<li class="">Team Building (6 Games)</li>
									<li class="">Brief Motivation & Etertain</li>
									<li class="">Personal Chalange</li>
									<li class="">Makan 1x, Snack 1x</li>
									<li class="">Mineral Water 1x</li>
									<li class="">Instruksi Game</li>
									<li class="">Tiket Masuk & Sound System</li>
									<li>Foto, Video, Sertifikat & P3K</li>
								</ul>
							</div>
							<div>
								<a href="#" class="text-uppercase btn btn-outline btn-outline-white btn-active-light-white">Book Now</a>
							</div>
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex flex-column justify-content-between text-center px-6 pt-5 pt-lg-10 py-20 mx-5 mb-10 text-center rounded shadow-sm text-white" style="background-color: #2C473E;">
							<h1 class="text-white">Bambu Raft </h1>
							<p class="text-muted">Program untuk membangun kerjasama tim melalui kegiatan membuat sebuah kapal bambu untuk menyelesaikan permainan diatas air</p>
							<h1 class="fs-2hx text-white">Rp 250K/pax</h1>
							<div>
								<ul class="text-start text-muted">
									<li>Instruktur & Peralatan Game</li>
									<li>Senam Straching</li>
									<li>Fun Sport & Game (3 Games)</li>
									<li>Bambu Raft Game (4 Games)</li>
									<li>Team Building (3 Games)</li>
									<li>Brief Motivation</li>
									<li>Makan 1x, Snack 2x</li>
									<li>Coffe Break 1x</li>
									<li>Asuransi Outbound</li>
									<li>Foto & Video</li>
									<li>Sertifikat & P3K</li>
								</ul>
							</div>
							<div>
								<a href="#" class="text-uppercase btn btn-outline btn-outline-white btn-active-light-white">Book Now</a>
							</div>
						</div>
						<!--end::Item-->
					</div>

					<!--begin::Slider button-->
					<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev2">
						<span class="svg-icon svg-icon-3x">
							<i class="bi bi-chevron-left fs-1"></i>
						</span>
					</button>
					<!--end::Slider button-->

					<!--begin::Slider button-->
					<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next2">
						<span class="svg-icon svg-icon-3x">
							<i class="bi bi-chevron-right fs-1"></i>
						</span>
					</button>
					<!--end::Slider button-->
				</div>
			</div>
			<!--end::Container-->
		</div>
		<!--end::How It Works Section-->

		<!--begin::How It Works Section-->
		<div class="my-5">
			<!--begin::Container-->
			<div class="container text-center">
				<!--begin::Heading-->
				<div class="text-center my-17">
					<!--begin::Title-->
					<h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Banyak orang sudah mencoba</h3>
					<!--end::Title-->
					<!--begin::Text-->
					<div class="fs-5 text-muted fw-bold">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</div>
					<!--end::Text-->
				</div>
				<!--end::Heading-->
				<div class="row justify-content-center">
					<div class="col-md-4">
						<img src="assets/media/img/gallery/paket/1.png" class="mb-9 img-fluid rounded" alt="" />
					</div>
					<div class="col-md-4">
						<img src="assets/media/img/gallery/paket/2.png" class="mb-9 img-fluid rounded" alt="" />
					</div>
					<div class="col-md-4">
						<img src="assets/media/img/gallery/paket/3.png" class="mb-9 img-fluid rounded" alt="" />
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-4">
						<img src="assets/media/img/gallery/paket/4.png" class="mb-9 img-fluid rounded" alt="" />
					</div>
					<div class="col-md-4">
						<img src="assets/media/img/gallery/paket/5.png" class="mb-9 img-fluid rounded" alt="" />
					</div>
					<div class="col-md-4">
						<img src="assets/media/img/gallery/paket/6.png" class="mb-9 img-fluid rounded" alt="" />
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-4">
						<img src="assets/media/img/gallery/paket/7.png" class="mb-9 img-fluid rounded" alt="" />
					</div>
					<div class="col-md-4">
						<img src="assets/media/img/gallery/paket/8.png" class="mb-9 img-fluid rounded" alt="" />
					</div>
					<div class="col-md-4">
						<img src="assets/media/img/gallery/paket/9.png" class="mb-9 img-fluid rounded" alt="" />
					</div>
				</div>
			</div>
			<!--end::Container-->
		</div>
		<!--end::How It Works Section-->

		<!--begin::Statistics Section-->
		<!--begin::Container-->
		<div class="my-5">
			<div class="container my-20" style="background-image: url(assets/media/img/gallery/7.png); background-size: cover;">
				<!--begin::Heading-->
				<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
					<!--begin::Title-->
					<h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-5">Make Your Reservation now</h1>
					<p class="text-white my-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non odio nam ut nunc. Pulvinar nulla mattis ac lacus.
						<br>Eget turpis at ac in ac luctus tellus tortor. Urna ornare gravida nunc sapien id nunc.
					</p>
					<!--end::Title-->
					<!--begin::Action-->
					<a href="#" class="btn btn-primary">Reservation</a>
					<!--end::Action-->
				</div>
				<!--end::Heading-->
			</div>
		</div>
		<!--end::Container-->
		<!--end::Statistics Section-->

		<!--begin::Footer Section-->
		<div class="mb-0">
			<!--begin::Wrapper-->
			<div class="pt-10" style="background-color: #181C29;">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Row-->
					<div class="row py-10 py-lg-20">
						<!--begin::Col-->
						<div class="col-lg-3 pe-lg-16 mb-10 mb-lg-0">
							<!--begin::Block-->
							<div class="rounded mb-3">
								<img alt="Logo" src="assets/media/img/logo/logo1.svg" class="logo-default h-35px h-lg-40px" />
							</div>
							<!--end::Block-->
							<!--begin::Block-->
							<div class="rounded">
								<!--begin::Title-->
								<p class="text-white">Diam facilisi insolens per cu, eos malorum voluptaria ei.</p>
								<!--end::Title-->
							</div>
							<!--end::Block-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-2 pe-lg-16 mb-10 mb-lg-0 text-white">
							<h3 class="text-white">Social Media</h3>
							<p class="d-flex gap-2"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M6.465 0.066C7.638 0.012 8.012 0 11 0C13.988 0 14.362 0.013 15.534 0.066C16.706 0.119 17.506 0.306 18.206 0.577C18.939 0.854 19.604 1.287 20.154 1.847C20.714 2.396 21.146 3.06 21.422 3.794C21.694 4.494 21.88 5.294 21.934 6.464C21.988 7.639 22 8.013 22 11C22 13.988 21.987 14.362 21.934 15.535C21.881 16.705 21.694 17.505 21.422 18.205C21.146 18.9391 20.7133 19.6042 20.154 20.154C19.604 20.714 18.939 21.146 18.206 21.422C17.506 21.694 16.706 21.88 15.536 21.934C14.362 21.988 13.988 22 11 22C8.012 22 7.638 21.987 6.465 21.934C5.295 21.881 4.495 21.694 3.795 21.422C3.06092 21.146 2.39582 20.7133 1.846 20.154C1.28638 19.6047 0.853315 18.9399 0.577 18.206C0.306 17.506 0.12 16.706 0.066 15.536C0.012 14.361 0 13.987 0 11C0 8.012 0.013 7.638 0.066 6.466C0.119 5.294 0.306 4.494 0.577 3.794C0.853723 3.06008 1.28712 2.39531 1.847 1.846C2.39604 1.2865 3.06047 0.853443 3.794 0.577C4.494 0.306 5.294 0.12 6.464 0.066H6.465ZM15.445 2.046C14.285 1.993 13.937 1.982 11 1.982C8.063 1.982 7.715 1.993 6.555 2.046C5.482 2.095 4.9 2.274 4.512 2.425C3.999 2.625 3.632 2.862 3.247 3.247C2.88205 3.60205 2.60118 4.03428 2.425 4.512C2.274 4.9 2.095 5.482 2.046 6.555C1.993 7.715 1.982 8.063 1.982 11C1.982 13.937 1.993 14.285 2.046 15.445C2.095 16.518 2.274 17.1 2.425 17.488C2.601 17.965 2.882 18.398 3.247 18.753C3.602 19.118 4.035 19.399 4.512 19.575C4.9 19.726 5.482 19.905 6.555 19.954C7.715 20.007 8.062 20.018 11 20.018C13.938 20.018 14.285 20.007 15.445 19.954C16.518 19.905 17.1 19.726 17.488 19.575C18.001 19.375 18.368 19.138 18.753 18.753C19.118 18.398 19.399 17.965 19.575 17.488C19.726 17.1 19.905 16.518 19.954 15.445C20.007 14.285 20.018 13.937 20.018 11C20.018 8.063 20.007 7.715 19.954 6.555C19.905 5.482 19.726 4.9 19.575 4.512C19.375 3.999 19.138 3.632 18.753 3.247C18.3979 2.88207 17.9657 2.60121 17.488 2.425C17.1 2.274 16.518 2.095 15.445 2.046ZM9.595 14.391C10.3797 14.7176 11.2534 14.7617 12.0669 14.5157C12.8805 14.2697 13.5834 13.7489 14.0556 13.0422C14.5278 12.3356 14.7401 11.4869 14.656 10.6411C14.572 9.79534 14.197 9.00497 13.595 8.405C13.2112 8.02148 12.7472 7.72781 12.2363 7.54515C11.7255 7.36248 11.1804 7.29536 10.6405 7.34862C10.1006 7.40187 9.57915 7.57418 9.1138 7.85313C8.64845 8.13208 8.25074 8.51074 7.9493 8.96185C7.64786 9.41296 7.45019 9.92529 7.37052 10.462C7.29084 10.9986 7.33115 11.5463 7.48854 12.0655C7.64593 12.5847 7.91648 13.0626 8.28072 13.4647C8.64496 13.8668 9.09382 14.1832 9.595 14.391ZM7.002 7.002C7.52702 6.47697 8.15032 6.0605 8.8363 5.77636C9.52228 5.49222 10.2575 5.34597 11 5.34597C11.7425 5.34597 12.4777 5.49222 13.1637 5.77636C13.8497 6.0605 14.473 6.47697 14.998 7.002C15.523 7.52702 15.9395 8.15032 16.2236 8.8363C16.5078 9.52228 16.654 10.2575 16.654 11C16.654 11.7425 16.5078 12.4777 16.2236 13.1637C15.9395 13.8497 15.523 14.473 14.998 14.998C13.9377 16.0583 12.4995 16.654 11 16.654C9.50046 16.654 8.06234 16.0583 7.002 14.998C5.94166 13.9377 5.34597 12.4995 5.34597 11C5.34597 9.50046 5.94166 8.06234 7.002 7.002ZM17.908 6.188C18.0381 6.06527 18.1423 5.91768 18.2143 5.75397C18.2863 5.59027 18.3248 5.41377 18.3274 5.23493C18.33 5.05609 18.2967 4.87855 18.2295 4.71281C18.1622 4.54707 18.0624 4.39651 17.936 4.27004C17.8095 4.14357 17.6589 4.04376 17.4932 3.97652C17.3275 3.90928 17.1499 3.87598 16.9711 3.87858C16.7922 3.88119 16.6157 3.91965 16.452 3.9917C16.2883 4.06374 16.1407 4.1679 16.018 4.298C15.7793 4.55103 15.6486 4.88712 15.6537 5.23493C15.6588 5.58274 15.7992 5.91488 16.0452 6.16084C16.2911 6.40681 16.6233 6.54723 16.9711 6.5523C17.3189 6.55737 17.655 6.42669 17.908 6.188Z" fill="#6A8E4E" />
								</svg>
								<span>Sirah Pemali</span>
							</p>
							<p class="d-flex gap-2"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M23 11.5704C23 5.1801 17.8515 0 11.5014 0C5.14848 0.00143732 0 5.1801 0 11.5719C0 17.3456 4.2056 22.1319 9.70191 23V14.9151H6.78415V11.5719H9.70479V9.02062C9.70479 6.12155 11.4224 4.52037 14.0484 4.52037C15.3075 4.52037 16.6226 4.74603 16.6226 4.74603V7.59193H15.1724C13.7451 7.59193 13.2995 8.4845 13.2995 9.40008V11.5704H16.4875L15.9787 14.9136H13.2981V22.9986C18.7944 22.1304 23 17.3441 23 11.5704Z" fill="#6A8E4E" />
								</svg><span>Sirah Pemali</span>
							</p>
							<p class="d-flex gap-2"><svg width="25" height="17" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M23.5006 2.51196C23.3647 2.02719 23.1 1.5883 22.7346 1.24196C22.3589 0.884962 21.8984 0.629595 21.3966 0.499959C19.5186 0.00495878 11.9946 0.00495889 11.9946 0.00495889C8.85795 -0.0307285 5.72205 0.126233 2.60462 0.474959C2.10281 0.614172 1.64318 0.875246 1.26662 1.23496C0.896617 1.59096 0.628617 2.02996 0.488617 2.51096C0.15231 4.3227 -0.0110908 6.1623 0.000617183 8.00496C-0.0113828 9.84596 0.151617 11.685 0.488617 13.499C0.625617 13.978 0.892617 14.415 1.26362 14.768C1.63462 15.121 2.09662 15.376 2.60462 15.511C4.50762 16.005 11.9946 16.005 11.9946 16.005C15.1353 16.0407 18.2752 15.8837 21.3966 15.535C21.8984 15.4053 22.3589 15.15 22.7346 14.793C23.1046 14.44 23.3676 14.001 23.4996 13.523C23.8447 11.7119 24.0125 9.87155 24.0006 8.02796C24.0266 6.17656 23.859 4.32752 23.5006 2.51096V2.51196ZM9.60262 11.429V4.58196L15.8626 8.00596L9.60262 11.429Z" fill="#6A8E4E" />
								</svg>
								<span>Sirah Pemali</span>
							</p>
							<p class="d-flex gap-2"><svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M22.706 2.18952C21.871 2.55952 20.974 2.80952 20.031 2.92252C21.004 2.34031 21.7319 1.42398 22.079 0.344518C21.1648 0.887508 20.1643 1.26971 19.121 1.47452C18.4194 0.725384 17.4901 0.228845 16.4773 0.0619924C15.4646 -0.10486 14.4251 0.0673099 13.5202 0.551771C12.6154 1.03623 11.8958 1.80588 11.4732 2.74122C11.0505 3.67656 10.9485 4.72527 11.183 5.72452C9.33069 5.63151 7.51863 5.15007 5.86442 4.31142C4.21022 3.47278 2.75084 2.29568 1.581 0.856519C1.181 1.54652 0.951 2.34652 0.951 3.19852C0.950554 3.96551 1.13943 4.72076 1.50088 5.39725C1.86232 6.07374 2.38516 6.65056 3.023 7.07652C2.28328 7.05298 1.55987 6.8531 0.913 6.49352V6.55352C0.912925 7.62926 1.28503 8.6719 1.96618 9.50451C2.64733 10.3371 3.59557 10.9084 4.65 11.1215C3.96378 11.3072 3.24434 11.3346 2.546 11.2015C2.8435 12.1271 3.423 12.9365 4.20337 13.5164C4.98374 14.0963 5.92592 14.4177 6.898 14.4355C5.24783 15.7309 3.20989 16.4336 1.112 16.4305C0.740381 16.4306 0.369076 16.4089 0 16.3655C2.12948 17.7347 4.60834 18.4613 7.14 18.4585C15.71 18.4585 20.395 11.3605 20.395 5.20452C20.395 5.00452 20.39 4.80252 20.381 4.60252C21.2923 3.94349 22.0789 3.12741 22.704 2.19252L22.706 2.18952Z" fill="#6A8E4E" />
								</svg>
								<span>Sirah Pemali</span>
							</p>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-4 pe-lg-16 mb-10 mb-lg-0 text-white">
							<h3 class="text-white">Contact</h3>
							<div class="d-flex flex-column gap-3">
								<p>Desa Winduaji, Kec. Paguyangan,
									Kabupaten Brebes, Jawa Tengah 52276
								</p>
								<p>+1 (243) 576-98-02</p>
								<p>info@company.com</p>
							</div>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-3 pe-lg-16 mb-10 mb-lg-0 text-white">
							<h3 class="text-white">Instagram</h3>
							<div class="d-flex flex-wrap gap-3">
								<img alt="Logo" src="assets/media/img/gallery/footer/1.png" class="logo-default h-35px h-lg-40px rounded" />
								<img alt="Logo" src="assets/media/img/gallery/footer/2.png" class="logo-default h-35px h-lg-40px rounded" />
								<img alt="Logo" src="assets/media/img/gallery/footer/3.png" class="logo-default h-35px h-lg-40px rounded" />
								<img alt="Logo" src="assets/media/img/gallery/footer/4.png" class="logo-default h-35px h-lg-40px rounded" />
								<img alt="Logo" src="assets/media/img/gallery/footer/5.png" class="logo-default h-35px h-lg-40px rounded" />
								<img alt="Logo" src="assets/media/img/gallery/footer/6.png" class="logo-default h-35px h-lg-40px rounded" />
							</div>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Footer Section-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<script>
			var hostUrl = "assets/";
		</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
		<script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/landing.js"></script>
		<script src="assets/js/custom/pages/company/pricing.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
</body>
<!--end::Body-->
<!--end::Body-->

</html>