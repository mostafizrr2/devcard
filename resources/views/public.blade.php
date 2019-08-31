<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.3rdwavemedia.com/devcard/bs4/2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2019 19:28:48 GMT -->

<head>
	<title>DevCard - Bootstrap 4 vCard &amp; Portfolio Template For Developers</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="DevCard Bootstrap 4 Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- FontAwesome JS-->
	<script defer src="devcard/use.fontawesome.com/releases/v5.8.1/js/all.js"
		integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ"
		crossorigin="anonymous"></script>

	<!-- Owl Stylesheets -->
	<link rel="stylesheet" href="devcard/assets/plugins/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="devcard/assets/plugins/owlcarousel/assets/owl.theme.default.min.css">

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="devcard/assets/css/theme-1.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-24707561-56"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-24707561-56');
	</script>

	<!-- Facebook Pixel Code -->
	<script>
		!function (f, b, e, v, n, t, s) {
			if (f.fbq) return; n = f.fbq = function () {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
			n.queue = []; t = b.createElement(e); t.async = !0;
			t.src = v; s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'../../../../connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1506230579705064');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=1506230579705064&amp;ev=PageView&amp;noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->

</head>

<body>

	{{-- <header> --}}
	@include('public.inc.header')
	{{-- </header> --}}
	
	<div class="main-wrapper">
		<!--//main-wrapper-->
		@yield('content')
		<!--//main-wrapper-->
	<footer class="footer text-center py-4">
		<small class="copyright">Copyright &copy; 
			<a href="https://mostafizrahman.com/" target="_blank">Mostafiz Rahman</a>
			All rights reserved
		</small>
	</footer>
	
	</div>


	<!-- Javascript -->
	<script src="devcard/assets/plugins/jquery-3.3.1.min.js"></script>
	<script src="devcard/assets/plugins/popper.min.js"></script>
	<script src="devcard/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="devcard/assets/plugins/owlcarousel/owl.carousel.min.js"></script>
	<script src="devcard/assets/js/testimonials.js"></script>

	<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
	<script src="devcard/assets/js/demo/style-switcher.js"></script>

	<!-- Dark Mode -->
	<script src="devcard/assets/plugins/js-cookie.min.js"></script>
	<script src="devcard/assets/js/dark-mode.js"></script>

</body>

<!-- Mirrored from themes.3rdwavemedia.com/devcard/bs4/2.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2019 19:29:12 GMT -->

</html>