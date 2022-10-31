<?php

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
        User::factory(3)->create();
        // $this->call(UserSeeder::class);
        // User::create([
        //     'name' => 'Iqbal Nuryana',
        //     'email' => 'iqbale@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Nuryana',
        //     'email' => 'yana@gmail.com',
        //     'password' => bcrypt('67890')
        // ]);



        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia dolore commodi quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia dolore commodi quasi, dolorem ducimus libero quo id pariatur repellendus? Vel eaque quod doloremque distinctio sapiente qui voluptate corporis, nesciunt repudiandae vitae veniam mollitia</p><p> necessitatibus dicta quasi? Animi, voluptatibus. Molestias ut officiis a accusamus. Pariatur, id excepturi autem perferendis in perspiciatis earum consequuntur corporis illo ea, ratione </p><p>voluptatibus totam dicta iure odio ad quibusdam. Magnam temporibus officiis fugiat tempore, incidunt qui quam illo quae illum dolore modi repellat iusto quo deleniti hic itaque impedit quasi dolores distinctio, reprehenderit, sapiente repudiandae. Aliquid, est? Maiores ratione asperiores temporibus dolorem, earum molestiae dolore amet.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia dolore commodi quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia dolore commodi quasi, dolorem ducimus libero quo id pariatur repellendus? Vel eaque quod doloremque distinctio sapiente qui voluptate corporis, nesciunt repudiandae vitae veniam mollitia</p><p> necessitatibus dicta quasi? Animi, voluptatibus. Molestias ut officiis a accusamus. Pariatur, id excepturi autem perferendis in perspiciatis earum consequuntur corporis illo ea, ratione </p><p>voluptatibus totam dicta iure odio ad quibusdam. Magnam temporibus officiis fugiat tempore, incidunt qui quam illo quae illum dolore modi repellat iusto quo deleniti hic itaque impedit quasi dolores distinctio, reprehenderit, sapiente repudiandae. Aliquid, est? Maiores ratione asperiores temporibus dolorem, earum molestiae dolore amet.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia dolore commodi quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia dolore commodi quasi, dolorem ducimus libero quo id pariatur repellendus? Vel eaque quod doloremque distinctio sapiente qui voluptate corporis, nesciunt repudiandae vitae veniam mollitia</p><p> necessitatibus dicta quasi? Animi, voluptatibus. Molestias ut officiis a accusamus. Pariatur, id excepturi autem perferendis in perspiciatis earum consequuntur corporis illo ea, ratione </p><p>voluptatibus totam dicta iure odio ad quibusdam. Magnam temporibus officiis fugiat tempore, incidunt qui quam illo quae illum dolore modi repellat iusto quo deleniti hic itaque impedit quasi dolores distinctio, reprehenderit, sapiente repudiandae. Aliquid, est? Maiores ratione asperiores temporibus dolorem, earum molestiae dolore amet.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia dolore commodi quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia dolore commodi quasi, dolorem ducimus libero quo id pariatur repellendus? Vel eaque quod doloremque distinctio sapiente qui voluptate corporis, nesciunt repudiandae vitae veniam mollitia</p><p> necessitatibus dicta quasi? Animi, voluptatibus. Molestias ut officiis a accusamus. Pariatur, id excepturi autem perferendis in perspiciatis earum consequuntur corporis illo ea, ratione </p><p>voluptatibus totam dicta iure odio ad quibusdam. Magnam temporibus officiis fugiat tempore, incidunt qui quam illo quae illum dolore modi repellat iusto quo deleniti hic itaque impedit quasi dolores distinctio, reprehenderit, sapiente repudiandae. Aliquid, est? Maiores ratione asperiores temporibus dolorem, earum molestiae dolore amet.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}