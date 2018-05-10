<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Comment extends Model
{

    protected $fillable = [
    	'user_id', 'comment','product_id',
    ];

    public function getShortContentAttribute(){
    	if(strlen($this->comment)>=60){
    		return substr($this->comment, 0, random_int(60, 150))."...";
    	}else{
    		return $this->comment."...";
    	}
    }

	public function getUserNameAttribute(){
    	$users = DB::table('users')->where('id', $this->user_id)->value('name');
        return $users;
    }
}
