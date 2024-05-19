<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   /**
     * Показать профиль для указанного пользователя.
     */
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
	public function phpmyinfo() 
	{
		phpinfo(); 
	}
	public function clientip()
	{
	$agent = request()->useragent();
	$clip = request()->ip();
	return 'ip='.$clip.' Браузер: '.$agent;
	}
	public function dtb()
	{
	$dtb =  \DB::connection()->getDatabaseName();
	return 'БД='.$dtb;
	}
}
