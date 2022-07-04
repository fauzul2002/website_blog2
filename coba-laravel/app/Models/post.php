<?php

namespace App\Models;

class post
{
   private static $blog_post =[
        [
            "title" => "Mie aceh",
            "slug" => "judul-post-pertama",
            "author" => "fauzul shalis",
            "body" => "Mie Aceh merupakan masakan mie pedas khas dari Aceh. Mie yang berwarna kuning dan tebal ditambah dengan irisan daging sapi, daging kambing, maupun makanan laut (udang dan cumi) yang disajikan dengan sup sejenis kari yang gurih dan pedas. Mie Aceh sendiri ada dua jenis, yaitu Mie Aceh Goreng (bentuknya kering dan digoreng) serta Mie Aceh kuah (bentuknya seperti sup). Mie aceh dilengkapi dengan irisan bawang goreng dan 
            disajikan bersama emping, potongan bawang merah, ketimun, dan jeruk nipis. Mie aceh adalah masakan daerah yang sudah menyebar di Indonesia, banyak warung makan aceh yang menjual mie aceh dan menjadi favorit bagi masyakat Indonesia. Jika dilihat dari sejarahnya, kuliner Aceh tidak lepas dari pengaruh budaya lokal masyarakat Aceh sendiri yang digabungkan dengan budaya asing yang akhirnya membentuk wilayah Aceh di masa lalu. Terlebih lagi Aceh di zaman dahulu terkenal 
            sebagai pintu atau pelabuhan utama di wilayah Sumatera dan sekitarnya."
        ],
        [
            "title" => "Kuah plik ",
            "slug" => "judul-post-kedua",
            "author" => "rahmat siddiq",
            "body" => "Kuah Pliek U adalah makanan tradisional sejenis masakan bersantan yang khas dari daerah Aceh. Makanan satu ini sekilas hampir mirip dengan Gulai hanya saja isinya berupa sayuran dan kuahnya terbuat dari bahan khusus. Kuah Pliek U merupakan salah satu makanan tradisional yang cukup terkenal di daerah Aceh, khususnya di daerah pesisir timur Aceh. Selain dikonsumsi sehari-hari, Kuah Pliek U juga sering disajikan pada acara-acara tertentu 
            dan menjadi salah satu menu special yang digemari oleh warga di sana.Konon Kuah Pliek U sudah menjadi makanan favorit masyarakat Aceh sejak jaman dahulu. Nama Kuah Pliek U diambil dari salah satu bumbu dasar dalam membuat makanan ini yaitu “Pliek U” atau yang lebih dikenal dengan Patarana. Pliek u sendiri merupakan sisa kelapa yang minyaknya sudah diperas. Di masyarakat pedesaan Aceh, minyak kelapa ini biasanya dijadikan minyak goreng yang disebut dengan “Minyeuk Reutik”. Sedangkan sisa atau ampasnya dijemur dan dijadikan pliek u. 
            Pliek u ini kemudian gunakan masyarakat sebagai bumbu dasar dari Kuah Pliek U."
        ],
    ];

    public static function all()
    {
        return self::$blog_post;
    }
    
    public static function find($slug)
    {
        $posts = self::$blog_post;
        $post=[];
        foreach($posts as $p) {
            if($post["slug"]===$slug){
                $post = $p;
            }
        }
    
        return $post;
    }
}