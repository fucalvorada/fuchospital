<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Chamado extends Model
{


	static public function chamdoUser( $id) {

		return \DB::table('users')
		->join('chamados', 'users.id', '=', 'chamados.user_id')
		->where('chamados.user_id', '=', $id)
		->get();
	}
}
 