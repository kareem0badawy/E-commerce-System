<?php
if (!function_exists('setting')) {
	function setting() {
		return \App\Model\Setting::orderBy('id', 'desc')->first();
	}
}

if (!function_exists('aurl')) {
    function aurl($url=null) {
        return url('admin/'.$url);
    }
}


if (!function_exists('admin')) {
    function admin() {
        return auth()->guard('admin');
    }
}


if (!function_exists('active_menu')) {
	function active_menu($link) {
		if (preg_match('/'.$link.'/i', Request::segment(2))) {
			return ['kt-menu__item--open','kt-menu__item--active', 'nav-link','display:block'];
		} else {
			return ['', '','',''];
		}
	}
}


// Ues this function in Middleware Lang
if (!function_exists('lang')) {
	function lang() {
		if (session()->has('lang')) {
			return session('lang');
		} else {
			return setting()->main_lang;
		}
	}
}

if (!function_exists('direction')) {
	function direction() {
		if (session()->has('lang')) {
			if (session('lang') == 'ar') {
				return 'rtl';
			} else {
				return 'ltr';
			}
		} else {
			return 'ltr';
		}
	}
}


if (!function_exists('datatable_lang')) {
	function datatable_lang() {
		return ['sProcessing' => trans('admin.sProcessing'),
			'sLengthMenu'        => trans('admin.sLengthMenu'),
			'sZeroRecords'       => trans('admin.sZeroRecords'),
			'sEmptyTable'        => trans('admin.sEmptyTable'),
			'sInfo'              => trans('admin.sInfo'),
			'sInfoEmpty'         => trans('admin.sInfoEmpty'),
			'sInfoFiltered'      => trans('admin.sInfoFiltered'),
			'sInfoPostFix'       => trans('admin.sInfoPostFix'),
			'sSearch'            => trans('admin.sSearch'),
			'sUrl'               => trans('admin.sUrl'),
			'sInfoThousands'     => trans('admin.sInfoThousands'),
			'sLoadingRecords'    => trans('admin.sLoadingRecords'),
			'oPaginate'          => [
				'sFirst'            => trans('admin.sFirst'),
				'sLast'             => trans('admin.sLast'),
				'sNext'             => trans('admin.sNext'),
				'sPrevious'         => trans('admin.sPrevious'),
			],
			'oAria'            => [
				'sSortAscending'  => trans('admin.sSortAscending'),
				'sSortDescending' => trans('admin.sSortDescending'),
			],
		];
	}

/////// Validate Helper Functions ///////

if (!function_exists('up')) {
	function up() {
		return new \App\Http\Controllers\UploadController;
	}
}


if (!function_exists('validate_image')) {
	function validate_image($extension = null) {
		if ($extension === null) {
			return 'image|mimes:jpg,jpeg,png,gif,bmp';
		} else {
			return 'image|mimes:'.$extension;
		}
	}
}
/////// Validate Helper Functions ///////
}

