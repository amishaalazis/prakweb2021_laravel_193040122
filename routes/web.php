<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Amisha Al azis",
        "email" => "amishaalazis@yahoo.com",
        "image" => "ams.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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
            "author" => "Riki Blabla",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit similique adipisci blanditiis hic provident sapiente accusamus tempora incidunt laborum quaerat soluta recusandae, voluptatum voluptate, asperiores voluptates maiores consectetur aut quidem, vel ab excepturi sequi consequatur ratione. Deleniti maiores possimus, quaerat, repellendus facilis animi omnis sit architecto modi magni dolorum eum quos officia perferendis! Neque alias odio repellendus, maiores omnis aut minus nostrum accusantium sunt perspiciatis sapiente nam totam accusamus necessitatibus eaque similique sint, quod eos quia? Quae perferendis animi molestiae obcaecati optio velit excepturi esse minima, recusandae expedita fugiat tenetur dolorum ea consequatur laudantium sed sunt maxime, omnis quod corrupti! A odio, eligendi voluptatum consequatur vel obcaecati! Neque tenetur minima similique sunt accusantium voluptate optio, sed temporibus debitis. Molestiae libero perferendis voluptates non temporibus? Sit deleniti optio asperiores, quibusdam soluta, maxime dolorum possimus modi minima vero, commodi nulla. Itaque neque cupiditate officiis minima quod odio perspiciatis dolores mollitia. Dolore suscipit nobis nisi fugit aperiam nihil sint sed dolorum est eaque sunt explicabo reprehenderit deserunt saepe unde, corporis reiciendis beatae aut similique repellat praesentium quibusdam. Doloremque fugiat quae fuga, sapiente vero accusantium, laboriosam officia eveniet voluptatem rem natus velit quia beatae? Vel dolorem culpa consectetur? Quia quae quo voluptatibus laborum voluptas!"
        ],
        
        ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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
            "author" => "Riki Blabla",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit similique adipisci blanditiis hic provident sapiente accusamus tempora incidunt laborum quaerat soluta recusandae, voluptatum voluptate, asperiores voluptates maiores consectetur aut quidem, vel ab excepturi sequi consequatur ratione. Deleniti maiores possimus, quaerat, repellendus facilis animi omnis sit architecto modi magni dolorum eum quos officia perferendis! Neque alias odio repellendus, maiores omnis aut minus nostrum accusantium sunt perspiciatis sapiente nam totam accusamus necessitatibus eaque similique sint, quod eos quia? Quae perferendis animi molestiae obcaecati optio velit excepturi esse minima, recusandae expedita fugiat tenetur dolorum ea consequatur laudantium sed sunt maxime, omnis quod corrupti! A odio, eligendi voluptatum consequatur vel obcaecati! Neque tenetur minima similique sunt accusantium voluptate optio, sed temporibus debitis. Molestiae libero perferendis voluptates non temporibus? Sit deleniti optio asperiores, quibusdam soluta, maxime dolorum possimus modi minima vero, commodi nulla. Itaque neque cupiditate officiis minima quod odio perspiciatis dolores mollitia. Dolore suscipit nobis nisi fugit aperiam nihil sint sed dolorum est eaque sunt explicabo reprehenderit deserunt saepe unde, corporis reiciendis beatae aut similique repellat praesentium quibusdam. Doloremque fugiat quae fuga, sapiente vero accusantium, laboriosam officia eveniet voluptatem rem natus velit quia beatae? Vel dolorem culpa consectetur? Quia quae quo voluptatibus laborum voluptas!"
        ],
        
        ];

        $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;

        }
    }
    return view('post', [
        "title" =>"Single Post",
        "post" => $new_post
    ]);
});