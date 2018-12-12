<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        $tags = ['php','java','laravel','git'];
        foreach ($tags as $index=> $tag)
        {

            Tag::create([
                'name' => $tag,

                // 'password' => Hash::make('tutsplus'),
            ]);
        }
    }
}
