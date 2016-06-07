<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $user = new User();
        $user->username = 'dcurran';
        $user->email = 'd.curran0518@gmail.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();

        $user = new User();
        $user->username = 'testUser';
        $user->email = 'test@gmail.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();
    }//end run()

}//end Seeder

?>