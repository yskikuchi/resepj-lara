<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'shop_id' => 1,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 2,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 3,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 4,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 5,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 6,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 7,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 8,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 9,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 10,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 11,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 12,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 13,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 14,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 15,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 16,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 17,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 18,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 19,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
        ];
        DB::table('images')->insert($param);
        $param = [
            'shop_id' => 20,
            'type' => 'トップ',
            'path' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
        ];
        DB::table('images')->insert($param);
    }
}
