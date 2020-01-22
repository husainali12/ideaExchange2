<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\User::class,10)->create();
        factory(App\Expert::class,10)->create();
        factory(App\Category::class,5)->create();
        factory(App\Question::class,10)->create();
        factory(App\UserInterest::class,50)->create();
        factory(App\Answer::class,50)->create()->each(function ($answer){
            return $answer->upvotes()->save(factory(App\UpVote::class)->make());
        });
    }
}
