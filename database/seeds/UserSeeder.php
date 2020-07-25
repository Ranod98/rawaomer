<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::Create([
            'first_name'=>'Rawa',
            'last_name'=>'Omer',
            'email'=>'rawa@gmail.com',
            'password'=>bcrypt('1234'),

        ]);


        $user->attachRole('super_admin');

    }//end of run


}//end of seeder
