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
    return view ('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view ('about',[
        "title" => "About",
        "name" => "Iqbal Nuryana",
        "email" => "iqbale@gmail.com",
        "image" => "profile.jpeg"
    ]);
});


Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Iqbal",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam neque illum, ea officia vitae alias facere mollitia. Deleniti deserunt iusto, omnis enim numquam est ab? Dolorem debitis odit fugit, voluptatibus cum iure sunt, molestias, labore iste optio enim corporis facilis quidem possimus neque assumenda ipsum voluptate! Architecto ratione ut in suscipit. Dolorem, harum similique esse vel laudantium eos consequuntur consectetur sed delectus distinctio reiciendis voluptas atque quidem qui dignissimos molestiae quis quo ullam ipsam beatae impedit recusandae ut! Quas, veritatis?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nuryana",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, ducimus? Blanditiis excepturi praesentium iste, quia voluptatibus aut consequatur beatae repellendus dolore voluptatem, quasi laudantium dolores nostrum nulla eius odio totam impedit non accusamus sit. Tenetur omnis dolorum qui ipsam! Commodi accusantium optio nemo minima praesentium sapiente harum odio ullam, placeat repellendus consequuntur reprehenderit sint sequi eaque voluptate qui veniam, consectetur cupiditate nobis dignissimos atque neque. Tempore nisi quam omnis, eum quasi iste ex perferendis, fuga quo qui veniam consequuntur eligendi. Rem corporis quasi obcaecati error modi enim nulla laborum non, consequuntur repellendus tempora quia, architecto dolor. Enim, ipsa perspiciatis. Tempore?"
        ],
    ];  

    return view ('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Iqbal",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam neque illum, ea officia vitae alias facere mollitia. Deleniti deserunt iusto, omnis enim numquam est ab? Dolorem debitis odit fugit, voluptatibus cum iure sunt, molestias, labore iste optio enim corporis facilis quidem possimus neque assumenda ipsum voluptate! Architecto ratione ut in suscipit. Dolorem, harum similique esse vel laudantium eos consequuntur consectetur sed delectus distinctio reiciendis voluptas atque quidem qui dignissimos molestiae quis quo ullam ipsam beatae impedit recusandae ut! Quas, veritatis?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nuryana",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, ducimus? Blanditiis excepturi praesentium iste, quia voluptatibus aut consequatur beatae repellendus dolore voluptatem, quasi laudantium dolores nostrum nulla eius odio totam impedit non accusamus sit. Tenetur omnis dolorum qui ipsam! Commodi accusantium optio nemo minima praesentium sapiente harum odio ullam, placeat repellendus consequuntur reprehenderit sint sequi eaque voluptate qui veniam, consectetur cupiditate nobis dignissimos atque neque. Tempore nisi quam omnis, eum quasi iste ex perferendis, fuga quo qui veniam consequuntur eligendi. Rem corporis quasi obcaecati error modi enim nulla laborum non, consequuntur repellendus tempora quia, architecto dolor. Enim, ipsa perspiciatis. Tempore?"
        ],
    ]; 

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post' ,[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});