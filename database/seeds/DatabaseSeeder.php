<?php

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
//        DB::table('users')->insert([
//            'name' => str_random(10),
//            'email' => str_random(5) . '@email.com',
//            'password' => bcrypt('password')
//        ]);

        factory(App\User::class, 1)->create()->each(function ($u) {
            $u->posts->save(factory(App\Post::class, 1)->create()->each(function ($u) {
                $u->comments->save(factory(App\Comment::class, 5)->create());
            }));
        });

    }
}
