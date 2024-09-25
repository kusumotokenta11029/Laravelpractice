<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
      'title' => '桃太郎',
      'author_id' => 1,
    ];
    DB::table('books')->insert($param);
    $param = [
      'title' => '白雪姫',
      'author_id' => 3,
    ];
    DB::table('books')->insert($param);
    $param = [
      'title' => 'シンデレラ',
      'author_id' => 3,
    ];
    DB::table('books')->insert($param);
    $param = [
      'title' => 'マッチ売りの少女',
      'author_id' => 3,
    ];
    DB::table('books')->insert($param);
    $param = [
      'title' => '3匹の子豚',
      'author_id' => 3,
    ];
    DB::table('books')->insert($param);
    }
}
