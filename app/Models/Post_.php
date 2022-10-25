<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

    }
}