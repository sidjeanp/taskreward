<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::truncate();

        $user = new User();

        $user->name = 'Sidnei Carlos';
        $user->email = 'sidjeanp@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();

        $user = new User();
        $user->name = 'Ivani Fernandes';
        $user->email = 'ifernandes.saude@ymail.com';
        $user->password = bcrypt('123456');
        $user->save();

        $user = new User();
        $user->name = 'Álvaro Carlos';
        $user->email = 'teteco@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();


    }
}
