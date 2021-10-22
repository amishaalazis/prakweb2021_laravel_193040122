<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Amisha Al azis',
            'email' => 'amishaalazis@yahoo.com',
            'password' => bcrypt('12345') 
        ]);
        User::create([
            'name' => 'Park Chanyeol',
            'email' => 'pcy@yahoo.com',
            'password' => bcrypt('54321') 
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit? Repudiandae earum, doloremque, aliquam accusamus molestiae voluptates nisi illo aspernatur cumque doloribus sint eius sunt deserunt voluptatem harum a esse commodi hic reiciendis? Fuga sit ex perferendis atque pariatur ad, accusamus repudiandae eius, quasi quis tempore non expedita error fugit explicabo aspernatur delectus veniam doloribus ab vel nemo illum animi. Asperiores, cupiditate quaerat. </p><p>Labore blanditiis explicabo iure placeat illo soluta consequatur? Hic, dolore. Sed cumque quidem rem et officia consectetur optio totam quaerat adipisci est corporis ut tempora distinctio recusandae nostrum minus dolor voluptatibus, sint sequi dicta deleniti. Ad cumque non consectetur consequuntur nostrum, natus nisi delectus repellat minima laudantium fugit expedita, exercitationem quod quidem quaerat quae. Possimus doloremque nisi, voluptates magni voluptatem quam mollitia quaerat ex libero distinctio accusantium molestias repudiandae labore aspernatur?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit? Repudiandae earum, doloremque, aliquam accusamus molestiae voluptates nisi illo aspernatur cumque doloribus sint eius sunt deserunt voluptatem harum a esse commodi hic reiciendis? Fuga sit ex perferendis atque pariatur ad, accusamus repudiandae eius, quasi quis tempore non expedita error fugit explicabo aspernatur delectus veniam doloribus ab vel nemo illum animi. Asperiores, cupiditate quaerat. </p><p>Labore blanditiis explicabo iure placeat illo soluta consequatur? Hic, dolore. Sed cumque quidem rem et officia consectetur optio totam quaerat adipisci est corporis ut tempora distinctio recusandae nostrum minus dolor voluptatibus, sint sequi dicta deleniti. Ad cumque non consectetur consequuntur nostrum, natus nisi delectus repellat minima laudantium fugit expedita, exercitationem quod quidem quaerat quae. Possimus doloremque nisi, voluptates magni voluptatem quam mollitia quaerat ex libero distinctio accusantium molestias repudiandae labore aspernatur?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit? Repudiandae earum, doloremque, aliquam accusamus molestiae voluptates nisi illo aspernatur cumque doloribus sint eius sunt deserunt voluptatem harum a esse commodi hic reiciendis? Fuga sit ex perferendis atque pariatur ad, accusamus repudiandae eius, quasi quis tempore non expedita error fugit explicabo aspernatur delectus veniam doloribus ab vel nemo illum animi. Asperiores, cupiditate quaerat. </p><p>Labore blanditiis explicabo iure placeat illo soluta consequatur? Hic, dolore. Sed cumque quidem rem et officia consectetur optio totam quaerat adipisci est corporis ut tempora distinctio recusandae nostrum minus dolor voluptatibus, sint sequi dicta deleniti. Ad cumque non consectetur consequuntur nostrum, natus nisi delectus repellat minima laudantium fugit expedita, exercitationem quod quidem quaerat quae. Possimus doloremque nisi, voluptates magni voluptatem quam mollitia quaerat ex libero distinctio accusantium molestias repudiandae labore aspernatur?</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Consectetur modi debitis velit, quam nulla nam! Dolores natus illo deserunt dolor deleniti libero est provident, quas odit? Repudiandae earum, doloremque, aliquam accusamus molestiae voluptates nisi illo aspernatur cumque doloribus sint eius sunt deserunt voluptatem harum a esse commodi hic reiciendis? Fuga sit ex perferendis atque pariatur ad, accusamus repudiandae eius, quasi quis tempore non expedita error fugit explicabo aspernatur delectus veniam doloribus ab vel nemo illum animi. Asperiores, cupiditate quaerat. </p><p>Labore blanditiis explicabo iure placeat illo soluta consequatur? Hic, dolore. Sed cumque quidem rem et officia consectetur optio totam quaerat adipisci est corporis ut tempora distinctio recusandae nostrum minus dolor voluptatibus, sint sequi dicta deleniti. Ad cumque non consectetur consequuntur nostrum, natus nisi delectus repellat minima laudantium fugit expedita, exercitationem quod quidem quaerat quae. Possimus doloremque nisi, voluptates magni voluptatem quam mollitia quaerat ex libero distinctio accusantium molestias repudiandae labore aspernatur?</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);


    }
}
