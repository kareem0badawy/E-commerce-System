<!DOCTYPE html>
@if (direction() == 'ltr')
<html lang="en" direction="ltr" style="direction: ltr;" >
@else
<html lang="en" direction="rtl" style="direction: rtl;" >
@endif
	<!-- begin::Head -->
	<head>
		<!--begin::Base Path (base relative path for assets of this page) -->
		<base href="../">
		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Updates and statistics">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="{{ asset('adminPanal/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="{{ asset('adminPanal/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="{{ asset('adminPanal/assets/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/nouislider/distribute/nouislider.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/summernote/dist/summernote.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/animate.css/animate.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('adminPanal/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		@if (direction() == 'ltr')
			<link href="{{ asset('adminPanal/assets/css/demo1/style.bundle.css') }}" rel="stylesheet" type="text/css" />
			<!--begin::Layout Skins(used by all pages) -->
			<link href="{{ asset('adminPanal/assets/css/demo1/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('adminPanal/assets/css/demo1/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('adminPanal/assets/css/demo1/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('adminPanal/assets/css/demo1/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />
		@else
			<link href="{{ asset('adminPanal/assets/css/demo1/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('adminPanal/assets/css/demo1/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />

			<link href="{{ asset('adminPanal/assets/css/demo1/skins/header/base/light.rtl.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('adminPanal/assets/css/demo1/skins/header/menu/light.rtl.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('adminPanal/assets/css/demo1/skins/brand/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('adminPanal/assets/css/demo1/skins/aside/dark.rtl.css') }}" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
			<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
			<style>
			*,body,p,h1,h2,h3,h4,h5,h6,span{
				font-family: 'Cairo', sans-serif;
			}
			.bgArabic{
				background-color: #F2F3F8 !important;
			}
			</style>
		@endif

		<!--end::Global Theme Styles -->

		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

		<script src="{{ asset('adminPanal/assets/js/myfunctions.js') }}"></script>

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="{{ asset('adminPanal/assets/media/logos/favicon.ico') }}" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

        <!-- begin:: Page -->
        
        <!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="demo1/index.html">
					<img alt="Logo" src="{{ asset('adminPanal/assets/media/logos/logo-light.png') }}" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">