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
        Group::create([
            'value' =>3
        ]);
        Group::create([
            'value' =>4
        ]);
        Group::create([
            'value' =>5
        ]);
        Group::create([
            'value' =>6
        ]);
        Group::create([
            'value' =>7
        ]);
        Group::create([
            'value' =>8
        ]);
        Group::create([
            'value' =>9
        ]);
        Group::create([
            'value' =>10
        ]);
        Group::create([
            'value' =>11
        ]);
        Group::create([
            'value' =>12
        ]);
        Group::create([
            'value' =>13
        ]);
        Group::create([
            'value' =>14
        ]);
        Group::create([
            'value' =>15
        ]);
        Group::create([
            'value' =>16
        ]);
        Group::create([
            'value' =>17
        ]);
        Group::create([
            'value' =>18
        ]);
        Group::create([
            'value' =>19
        ]);
        Group::create([
            'value' =>20
        ]);
        Group::create([
            'value' =>21
        ]);
        Group::create([
            'value' =>22
        ]);
        Group::create([
            'value' =>23
        ]);
        Group::create([
            'value' =>24
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
