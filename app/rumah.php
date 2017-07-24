<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rumah extends Model
{
    //
    public static function boot()
	{
		parent::boot();

		self::updating(function($rumah)
		{
			if ($rumah->< $rumah->borrowed) {
				Session::flash("flash_notification",[
					"level"=>"danger",
					"message"=>"Jumlah buku $rumah->ket harus >= ".$rumah->borrowed]);
				return false;
			}
		});
		self::deleting(function($rumah)
		{
			if ($rumah->borrowLogs()->count() > 0) {
				Session::flash("flash_notification",[
					"level"=>"danger",
					"message"=>"Buku $rumah->ket sudah pernah dipinjam."]);
				return false;
			}
		});
	}
}
