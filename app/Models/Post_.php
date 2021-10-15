<?php

namespace App\Models;



class Post 
{
   private static $blog_posts = [
        [
            "title" =>"Judul Post Pertama",
            "slug" =>"judul-post-pertama",
            "author" => "Amisha Al azis",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad libero necessitatibus facilis officiis omnis est eius placeat ea pariatur neque? Beatae totam doloribus fugit ipsum facere iste omnis numquam quod!
            "
        ],
        [
            "title" =>"Judul Post Kedua",
            "slug" =>"judul-post-kedua",
            "author" => "Park Chanyeol",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit similique adipisci blanditiis hic provident sapiente accusamus tempora incidunt laborum quaerat soluta recusandae, voluptatum voluptate, asperiores voluptates maiores consectetur aut quidem, vel ab excepturi sequi consequatur ratione. Deleniti maiores possimus, quaerat, repellendus facilis animi omnis sit architecto modi magni dolorum eum quos officia perferendis! Neque alias odio repellendus, maiores omnis aut minus nostrum accusantium sunt perspiciatis sapiente nam totam accusamus necessitatibus eaque similique sint, quod eos quia? Quae perferendis animi molestiae obcaecati optio velit excepturi esse minima, recusandae expedita fugiat tenetur dolorum ea consequatur laudantium sed sunt maxime, omnis quod corrupti! A odio, eligendi voluptatum consequatur vel obcaecati! Neque tenetur minima similique sunt accusantium voluptate optio, sed temporibus debitis. Molestiae libero perferendis voluptates non temporibus? Sit deleniti optio asperiores, quibusdam soluta, maxime dolorum possimus modi minima vero, commodi nulla. Itaque neque cupiditate officiis minima quod odio perspiciatis dolores mollitia. Dolore suscipit nobis nisi fugit aperiam nihil sint sed dolorum est eaque sunt explicabo reprehenderit deserunt saepe unde, corporis reiciendis beatae aut similique repellat praesentium quibusdam. Doloremque fugiat quae fuga, sapiente vero accusantium, laboriosam officia eveniet voluptatem rem natus velit quia beatae? Vel dolorem culpa consectetur? Quia quae quo voluptatibus laborum voluptas!"
        ]
        
        ];

        public static function all() 
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug) 
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }
}
