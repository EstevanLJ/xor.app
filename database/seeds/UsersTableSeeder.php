<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User([
            'name' => 'admin',
            'email' => 'admin@xor.app',
            'password' => Hash::make('admin')
        ]);
        $user->save();

        $user = new App\User([
            'name' => 'Estevan Junges',
            'email' => 'estevanjunges@gmail.com',
            'password' => Hash::make('teste123')
        ]);
        $user->save();
    }
}
