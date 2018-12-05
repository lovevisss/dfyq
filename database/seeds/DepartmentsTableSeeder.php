<?php

use Illuminate\Database\Seeder;
use App\Department;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        $departments = ['金融经贸分院','工商分院','财税分院'];
        foreach ($departments as $index=> $department)
        {

            Department::create([
                'name' => $department,

                // 'password' => Hash::make('tutsplus'),
            ]);
        }
    }
}
