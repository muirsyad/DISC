<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Admin;
use App\Models\Group;
use App\Models\Question;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=> 'Kasim',
            'email' => 'Kasim@gmail.com',
            'no-tel' => '0172716395',
            'password' => 'abc123',
            'role_id'=> '1'
        ]);

        User::create([
            'name'=> 'Mikarim',
            'email' => 'mikarim@gmail.com',
            'no-tel' => '0672716395',
            'password' => 'abc123',
            'role_id'=> '1'
        ]);

        Group::create([
            'value' =>1
        ]);
        Group::create([
            'value' =>2
        ]);
        Question::create([
            'question' => 'Must be able to follow through',
            'disc_value' => 'S',
            'group_id' => 1,
            'created_by' => 1
        ]);

        Question::create([
            'question' => 'Must be able to persuade and Convince',
            'disc_value' => 'I',
            'group_id' => 1,
            'created_by' => 1
        ]);

        Question::create([
            'question' => 'Must be humble and moddest',
            'disc_value' => 'C',
            'group_id' => 1,
            'created_by' => 1
        ]);

        Question::create([
            'question' => 'Must be able to attract others',
            'disc_value' => 'I',
            'group_id' => 2,
            'created_by' => 1
        ]);

        Question::create([
            'question' => 'Must be Cooperactive and agreeable',
            'disc_value' => 'C',
            'group_id' => 2,
            'created_by' => 1
        ]);

        Question::create([
            'question' => 'Must be friendly to other',
            'disc_value' => 'S',
            'group_id' => 2,
            'created_by' => 1
        ]);


    }
}
