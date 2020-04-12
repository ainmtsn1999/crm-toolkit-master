<?php namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\UserModel;
use App\Models\SkripsiModel;

class Admin extends BaseController
{
	const ROLE = 'admin';

	public function index()
	{
		return load_info([
			'routes'=>[
				'/admin/user/',
				'/admin/profile/',
				'/admin/skripsi/',
			],
		]);
	}

	public function profile()
	{
		return (new ProfileModel())->execute($this->login->current_id);
	}

	public function user($id = NULL)
	{
		return (new UserModel())->execute($id);
	}

	public function skripsi($id = NULL)
	{
		return (new SkripsiModel())->execute($id);
	}
}