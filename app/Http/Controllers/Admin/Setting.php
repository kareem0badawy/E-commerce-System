<?php
namespace App\Http\Controllers\Admin;

use App\Model\Setting;
use App\Http\Controllers\Controller;

class Settings extends Controller {
	public function setting() {
		return view('admin.settings.settings', ['title' => trans('admin.settings')]);
	}
	public function setting_save() {
		$data = request()->except(['_token', '_method']);
		Setting::orderBy('id', 'desc')->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect(aurl('settings'));
	}
}