<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use App\Models\Group;
use App\Models\Client;
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
        Role::create([
            'role'=>'Admin',
        ]);

        Role::create([
            'role'=>'client',
        ]);
        Client::create([
            'name'=>'LHI',
        ]);
        Client::create([
            'name'=>'Bermuda sdn bhd',
        ]);
        User::create([
            'name'=> 'Kasim',
            'email' => 'Kasim@gmail.com',
            'password' => 'icad4922',
            'client_id'=> '1',
            'role_id'=> '1'
        ]);

        User::create([
            'name'=> 'monah',
            'email' => 'mimi@gmail.com',
            'password' => 'icad4922',
            'client_id'=> '2',
            'role_id'=> '2'
        ]);

        Group::create([
            'group' =>1
        ]);
        Group::create([
            'group' =>2
        ]);
        Group::create([
            'group' =>3
        ]);
        Group::create([
            'group' =>4
        ]);
        Group::create([
            'group' =>5
        ]);
        Group::create([
            'group' =>6
        ]);
        Group::create([
            'group' =>7
        ]);
        Group::create([
            'group' =>8
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
        Question::create([
            'question' => 'Must be bold and daring',
            'disc_value' => 'D',
            'group_id' => 3,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be bold and daring',
            'disc_value' => 'S',
            'group_id' => 3,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Loyal and Devoted',
            'disc_value' => 'I',
            'group_id' => 3,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Receptive to Ideas of Others',
            'disc_value' => 'C',
            'group_id' => 4,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Obliging and Helpful',
            'disc_value' => 'S',
            'group_id' => 4,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Cheerful and Joyful',
            'disc_value' => 'I',
            'group_id' => 4,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Precise and Accurate',
            'disc_value' => 'C',
            'group_id' => 5,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be liked by Most People',
            'disc_value' => 'I',
            'group_id' => 5,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Calm and Even Tempered',
            'disc_value' => 'S',
            'group_id' => 5,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Competeitive and Wanting to Win',
            'disc_value' => 'D',
            'group_id' => 6,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Considerate, Caring and Thoughtful',
            'disc_value' => 'S',
            'group_id' => 6,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Orderly and Organised',
            'disc_value' => 'C',
            'group_id' => 6,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Obedient and Dutiful',
            'disc_value' => 'S',
            'group_id' => 7,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Determined and Unconqurable',
            'disc_value' => 'D',
            'group_id' => 7,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Determined and Unconqurable',
            'disc_value' => 'I',
            'group_id' => 7,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Brave, Unafraid and Courages',
            'disc_value' => 'D',
            'group_id' => 8,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Inspiring, Simulating and Motivating',
            'disc_value' => 'I',
            'group_id' => 8,
            'created_by' => 1
        ]);
        Question::create([
            'question' => 'Must be Soft Spoken and Reserved',
            'disc_value' => 'C',
            'group_id' => 8,
            'created_by' => 1
        ]);


    }
}
