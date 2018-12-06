<?php

use Illuminate\Database\Seeder;
use App\Department;
class MajorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        $majors = ['金融学','保险学','经济学','国际经济与贸易'];
        foreach ($majors as $index=> $major)
        {

            Department::create([
                'department_id' => '1',
                'name' => $major,

                // 'password' => Hash::make('tutsplus'),
            ]);
        }
    }
}
