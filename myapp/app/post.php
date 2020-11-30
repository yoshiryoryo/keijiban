<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // テーブルを指定したので、コントローラーからインスタンスを呼び出すと、postsテーブルを選択できる
    protected $table = 'posts';
}
