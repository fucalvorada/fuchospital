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

	static public function chamdoUserAll() {

		return \DB::table('users')
		->join('chamados', 'users.id', '=', 'chamados.user_id')
		->get();
	}

	static public function chamdoUserView($id) {

		return \DB::table('users as u')
		->join('chamados as c', 'u.id', '=', 'c.user_id')
		->join('respostas as r', 'r.id_chamado', '=', 'c.id')
		->where('c.id', '=', $id)
		->get();
	}
}
