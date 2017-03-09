<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Created by PhpStorm.
 * User: johnnyressen
 * Date: 9/03/17
 * Time: 10:11
 */
class createCatalog extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        //fill database with productdata #1
        DB::table('mshop_product')->insert([
                'typeid' => 1,
                'siteid' => 1,
                'code' => 'trainingsbroek',
                'label' => 'Queens grey grit trainingsbroek',
                'config' => '[]',
                'status' => 1,
                'mtime' => date("Y-m-d H:i:s"),
                'ctime' => date("Y-m-d H:i:s"),
                'editor' => 'core:setup',
            ]
        );

        //fill database with mediadata #1
        DB::table('mshop_media')->insert([
                'typeid' => 1,
                'siteid' => 1,
                'domain' => 'product',
                'label' => 'Queens grey grit trainingsbroek',
                'link' => 'https://mosaic02.ztat.net/vgs/media/large/SU/22/2E/03/3C/11/SU222E033-C11@21.jpg',
                'preview' => 'https://mosaic02.ztat.net/vgs/media/detail/SU/22/2E/03/3C/11/SU222E033-C11@21.jpg',
                'mimetype' => 'image/jpeg',
                'status' => 1,
                'mtime' => date("Y-m-d H:i:s"),
                'ctime' => date("Y-m-d H:i:s"),
                'editor' => 'core:setup'
            ]
        );


        //fill database with productdata #2
        DB::table('mshop_product')->insert([
                'typeid' => 1,
                'siteid' => 1,
                'code' => 'trui',
                'label' => 'Trui HARLO – Navy',
                'config' => '[]',
                'status' => 1,
                'mtime' => date("Y-m-d H:i:s"),
                'ctime' => date("Y-m-d H:i:s"),
                'editor' => 'core:setup',
            ]
        );

        //fill database with mediadata #2
        DB::table('mshop_media')->insert([
                'typeid' => 1,
                'siteid' => 1,
                'domain' => 'product',
                'label' => 'Trui HARLO – Navy',
                'link' => 'https://mosaic01.ztat.net/vgs/media/large/SU/22/1I/08/0K/11/SU221I080-K11@19.jpg',
                'preview' => 'https://mosaic01.ztat.net/vgs/media/detail/SU/22/1I/08/0K/11/SU221I080-K11@19.jpg',
                'mimetype' => 'image/jpeg',
                'status' => 1,
                'mtime' => date("Y-m-d H:i:s"),
                'ctime' => date("Y-m-d H:i:s"),
                'editor' => 'core:setup'
            ]
        );

        //fill database with productdata #3
        DB::table('mshop_product')->insert([
                'typeid' => 1,
                'siteid' => 1,
                'code' => 'T-shirt',
                'label' => 'T-Shirt print – Campfire Orange',
                'config' => '[]',
                'status' => 1,
                'mtime' => date("Y-m-d H:i:s"),
                'ctime' => date("Y-m-d H:i:s"),
                'editor' => 'core:setup',
            ]
        );

        //fill database with mediadata #3
        DB::table('mshop_media')->insert([
                'typeid' => 1,
                'siteid' => 1,
                'domain' => 'product',
                'label' => 'T-Shirt print – Campfire Orange',
                'link' => 'https://mosaic02.ztat.net/vgs/media/large/SU/22/2O/0K/XH/11/SU222O0KX-H11@10.jpg',
                'preview' => 'https://mosaic02.ztat.net/vgs/media/detail/SU/22/2O/0K/XH/11/SU222O0KX-H11@10.jpg',
                'mimetype' => 'image/jpeg',
                'status' => 1,
                'mtime' => date("Y-m-d H:i:s"),
                'ctime' => date("Y-m-d H:i:s"),
                'editor' => 'core:setup'
            ]
        );

        //fill database with productdata #4
        DB::table('mshop_product')->insert([
                'typeid' => 1,
                'siteid' => 1,
                'code' => 'shorts',
                'label' => 'Shorts – Petrol Blue',
                'config' => '[]',
                'status' => 1,
                'mtime' => date("Y-m-d H:i:s"),
                'ctime' => date("Y-m-d H:i:s"),
                'editor' => 'core:setup',
            ]
        );

        //fill database with mediadata #4
        DB::table('mshop_media')->insert([
                'typeid' => 1,
                'siteid' => 1,
                'domain' => 'product',
                'label' => 'Shorts – Petrol Blue',
                'link' => 'https://mosaic02.ztat.net/vgs/media/large/SU/22/2F/02/TK/11/SU222F02T-K11@10.jpg',
                'preview' => 'https://mosaic02.ztat.net/vgs/media/detail/SU/22/2F/02/TK/11/SU222F02T-K11@10.jpg',
                'mimetype' => 'image/jpeg',
                'status' => 1,
                'mtime' => date("Y-m-d H:i:s"),
                'ctime' => date("Y-m-d H:i:s"),
                'editor' => 'core:setup'
            ]
        );

        //fill database with productdata #5
        DB::table('mshop_product')->insert([
                'typeid' => 1,
                'siteid' => 1,
                'code' => 'Hoodie',
                'label' => 'Hoodie – Fig',
                'config' => '[]',
                'status' => 1,
                'mtime' => date("Y-m-d H:i:s"),
                'ctime' => date("Y-m-d H:i:s"),
                'editor' => 'core:setup',
            ]
        );

        //fill database with mediadata #5
        DB::table('mshop_media')->insert([
                'typeid' => 1,
                'siteid' => 1,
                'domain' => 'product',
                'label' => 'Hoodie – Fig',
                'link' => 'https://mosaic02.ztat.net/vgs/media/large/SU/22/2S/0D/ZG/11/SU222S0DZ-G11@10.jpg',
                'preview' => 'https://mosaic02.ztat.net/vgs/media/detail/SU/22/2S/0D/ZG/11/SU222S0DZ-G11@10.jpg',
                'mimetype' => 'image/jpeg',
                'status' => 1,
                'mtime' => date("Y-m-d H:i:s"),
                'ctime' => date("Y-m-d H:i:s"),
                'editor' => 'core:setup'
            ]
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }

}