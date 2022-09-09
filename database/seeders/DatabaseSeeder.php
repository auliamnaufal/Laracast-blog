<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        $user = User::factory()->create([
            'name' => 'Naufal Aulia'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

//        $user = User::factory()->create();

//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'excerpt' => 'Excerpt for my post',
//            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repellat unde nemo amet? Beatae vel fugiat, recusandae ex reiciendis ea quos ut fuga minus aspernatur culpa aut laudantium exercitationem deleniti? Dignissimos voluptas et consequuntur atque nisi sed reiciendis nulla, velit ut cum at voluptatem labore odit unde fugiat magni voluptates maxime, odio quae. Nobis et expedita in quod. In, officia? Beatae expedita dolores dolore harum maiores, vero quos repellendus porro recusandae saepe deleniti ratione dolor voluptatum sed tempora nobis. Beatae libero explicabo minus, ipsum eos dictaassumenda nulla voluptatum dolorum. Incidunt velit exercitationem veritatis aspernatur odio doloribus qui eos minus corrupti? Ab, iste totam asperiores perferendis vel nesciunt incidunt, animi, voluptatibus non magna cupiditate officia necessitatibus ex cum. Iste.</p>',
//            'slug' => 'my-family-post'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'excerpt' => 'Excerpt for my post',
//            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repellat unde nemo amet? Beatae vel fugiat, recusandae ex reiciendis ea quos ut fuga minus aspernatur culpa aut laudantium exercitationem deleniti? Dignissimos voluptas et consequuntur atque nisi sed reiciendis nulla, velit ut cum at voluptatem labore odit unde fugiat magni voluptates maxime, odio quae. Nobis et expedita in quod. In, officia? Beatae expedita dolores dolore harum maiores, vero quos repellendus porro recusandae saepe deleniti ratione dolor voluptatum sed tempora nobis. Beatae libero explicabo minus, ipsum eos dictaassumenda nulla voluptatum dolorum. Incidunt velit exercitationem veritatis aspernatur odio doloribus qui eos minus corrupti? Ab, iste totam asperiores perferendis vel nesciunt incidunt, animi, voluptatibus non magna cupiditate officia necessitatibus ex cum. Iste.</p>',
//            'slug' => 'my-work-post'
//        ]);


    }
}
