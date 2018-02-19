<?php

use Illuminate\Database\Seeder;
use app\User;
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
        DB::table('users')->delete();

        $user = new User();

        $user->name = 'Sidnei Carlos';
        $user->email = 'sidjeanp@gmail.com';
        $user->password = brypt('123456');
        $user->save();

        $user->name = 'Ivani Fernandes';
        $user->email = 'ifernandes.saude@ymail.com';
        $user->password = brypt('123456');
        $user->save();

        $user->name = 'Álvaro Carlos';
        $user->email = 'teteco@gmail.com';
        $user->password = brypt('123456');
        $user->save();


    }
}
