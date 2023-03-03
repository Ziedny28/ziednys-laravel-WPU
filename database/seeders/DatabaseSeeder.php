<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'Ziedny',
            'username'=>'ziedny',
            'Email'=>'Ziedny@hotmail.com',
            'password'=>bcrypt('password')
        ]);

        User::factory(3)->create();

        // User::create([
        //     'name'=>'Saine',
        //     'Email'=>'Saine@domain.com',
        //     'password'=>bcrypt('hotb')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'title' => 'First Post',
        //     'slug' => 'first-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum repudiandae alias architecto porro itaque, quae ad
        //     corrupti illum quisquam repellendus. Iure dolorem delectus ullam ratione laborum inventore in, tempore est sunt, vero
        //     quos voluptate quo modi illo laboriosam dignissimos esse temporibus iste unde, illum aliquam nisi molestias? Nesciunt
        //     alias, ipsam libero sed maxime sunt sint quo inventore, delectus unde quas animi, minima perferendis. Culpa nobis quod
        //     amet laboriosam illum provident placeat magni?</p>

        //     <p>Repellendus voluptatibus similique dolore beatae perspiciatis rem
        //     assumenda, accusamus repellat vitae quos libero accusantium porro voluptatem? Autem, itaque, incidunt enim quisquam odio
        //     vitae expedita quaerat delectus tenetur, nobis facilis id repellendus ducimus. Quam iure voluptatem non odit natus
        //     minima modi assumenda id molestias quidem, officiis incidunt cumque nesciunt illum, dignissimos dolorem vero est unde
        //     quis laudantium repellat. Praesentium, reprehenderit eveniet repellendus nulla voluptatem minus a, impedit libero vitae,
        //     voluptas accusantium autem saepe maiores </p>",
        // ]);

        // Post::create([
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'title' => 'Second Post',
        //     'slug' => 'second-post',
        //     'excerpt' => 'consequatur sed! Velit sed, molestias magnam quam nisi doloremque aliquid',
        //     'body' => "

        //     <p>consequatur sed! Velit sed, molestias magnam quam nisi doloremque aliquid
        //     corporis! Sapiente velit porro magnam aperiam sequi fuga sit eligendi corrupti! Neque, vero iste veritatis ad obcaecati
        //     natus omnis quis non error quam quos consequuntur porro odit reprehenderit consectetur sed? Quae in accusamus dolorem
        //     quod, nesciunt voluptatibus nulla magnam sapiente repellendus voluptates ipsam aspernatur perferendis, autem sit
        //     corrupti asperiores laudantium qui aliquid fugit. Beatae inventore eius delectus placeat voluptates ullam animi
        //     consectetur optio, velit unde nisi corporis explicabo officiis ex dolor. Ratione, totam quis! Ullam, optio. Eum, illum
        //     fuga. Architecto omnis ad necessitatibus quibusdam voluptas, enim numquam et iusto, atque quisquam at fugit explicabo
        //     harum velit accusamus soluta labore dolorem tempore modi magni consectetur nisi. </p>

        //     <p>Quod quo hic iusto magnam voluptates
        //     consequuntur corrupti sit debitis culpa? Molestiae error earum quisquam possimus voluptatem voluptatibus repellendus
        //     atque amet architecto culpa laborum iure vel, recusandae aliquam assumenda eaque exercitationem repudiandae quas minus
        //     perspiciatis quae sequi ullam similique deserunt. Unde facere, blanditiis praesentium impedit recusandae nihil soluta
        //     incidunt maxime, placeat eligendi deserunt dicta a veniam dolor, quis aspernatur esse quae perferendis veritatis dolorum
        //     quos voluptas! Blanditiis porro explicabo omnis consectetur ullam aperiam hic aliquid ipsa possimus dignissimos. Enim
        //     deleniti aliquam possimus assumenda omnis harum architecto culpa temporibus accusamus fugit accusantium dolores libero
        //     ea vel vitae magni rerum explicabo, eveniet sapiente nostrum obcaecati doloremque debitis placeat. Asperiores odio alias
        //     recusandae natus nihil maxime tempore eligendi illo aliquam explicabo ipsa quaerat, nobis laboriosam fugiat enim dicta
        //     autem accusantium dolor, quibusdam culpa inventore! Earum laboriosam nisi assumenda ex voluptate dolorum tempore iure
        //     possimus quis consequuntur, facilis deleniti,
        //     </p>
        //     ",
        // ]);

        // Post::create([
        //     'category_id' => '2',
        //     'user_id' => '1',
        //     'title' => 'Third Post',
        //     'slug' => 'third-post',
        //     'excerpt' => 'aperiam natus provident eligendi soluta beatae repellat. Corporis nostrum',
        //     'body' => "
        //     <p>aperiam natus provident eligendi soluta beatae repellat. Corporis nostrum
        //     soluta reprehenderit numquam necessitatibus porro ex quasi eum accusantium quos dolorem reiciendis error nobis sint vero
        //     corrupti, doloremque veritatis eos inventore magni esse autem. Quaerat a eligendi eveniet velit at? Doloremque maxime,
        //     suscipit excepturi dolorem fugiat repellat veritatis eveniet, est, necessitatibus deserunt maiores hic mollitia illo
        //     provident recusandae dicta optio quam voluptatem! Praesentium ab similique quae atque ad quaerat id, veniam aliquid ea
        //     natus esse quis doloribus officiis expedita consequuntur iste sint neque, quos fuga dolores soluta! Fuga voluptatem
        //     provident minus animi adipisci neque, a facere laborum, sed eos quos iusto aut corrupti doloremque reiciendis corporis
        //     at harum aliquid eius pariatur enim repellendus cupiditate suscipit incidunt.</p>

        //     <p>Unde blanditiis, doloremque perspiciatis
        //     libero voluptatum ipsum atque, quas dolore doloribus reiciendis earum et labore minima iure? Perspiciatis adipisci
        //     numquam accusamus, odio non eius voluptates assumenda cum sit, nihil officiis, pariatur laborum ducimus autem mollitia
        //     blanditiis esse tempore eum repellat? Maxime rem ad voluptate perspiciatis explicabo culpa est officia nisi? Nam quaerat
        //     quos doloremque officia sunt, ratione rem ipsam sint nobis exercitationem tempora, dolor excepturi vero sed harum vel
        //     iure alias, ex in error cum fuga aspernatur? Sequi, nulla quod.</p>",
        // ]);

        // Post::create([
        //     'category_id' => '2',
        //     'user_id' => '2',
        //     'title' => 'Fourth Post',
        //     'slug' => 'fourth-post',
        //     'excerpt' => 'aperiam natus provident eligendi soluta beatae repellat. Corporis nostrum',
        //     'body' => "
        //     <p>aperiam natus provident eligendi soluta beatae repellat. Corporis nostrum
        //     soluta reprehenderit numquam necessitatibus porro ex quasi eum accusantium quos dolorem reiciendis error nobis sint vero
        //     corrupti, doloremque veritatis eos inventore magni esse autem. Quaerat a eligendi eveniet velit at? Doloremque maxime,
        //     suscipit excepturi dolorem fugiat repellat veritatis eveniet, est, necessitatibus deserunt maiores hic mollitia illo
        //     provident recusandae dicta optio quam voluptatem! Praesentium ab similique quae atque ad quaerat id, veniam aliquid ea
        //     natus esse quis doloribus officiis expedita consequuntur iste sint neque, quos fuga dolores soluta! Fuga voluptatem
        //     provident minus animi adipisci neque, a facere laborum, sed eos quos iusto aut corrupti doloremque reiciendis corporis
        //     at harum aliquid eius pariatur enim repellendus cupiditate suscipit incidunt.</p>

        //     <p>Unde blanditiis, doloremque perspiciatis
        //     libero voluptatum ipsum atque, quas dolore doloribus reiciendis earum et labore minima iure? Perspiciatis adipisci
        //     numquam accusamus, odio non eius voluptates assumenda cum sit, nihil officiis, pariatur laborum ducimus autem mollitia
        //     blanditiis esse tempore eum repellat? Maxime rem ad voluptate perspiciatis explicabo culpa est officia nisi? Nam quaerat
        //     quos doloremque officia sunt, ratione rem ipsam sint nobis exercitationem tempora, dolor excepturi vero sed harum vel
        //     iure alias, ex in error cum fuga aspernatur? Sequi, nulla quod.</p>",
        // ]);

    }
}
