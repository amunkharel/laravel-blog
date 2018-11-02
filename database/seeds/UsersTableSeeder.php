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
        $user = App\User::create([
            'name' => 'Amun Kharel',
            'email' => 'akharel@unm.edu',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'about' => 'Lorem ipsum, dolor sit amet consectetur
             adipisicing elit. Quidem est consequuntur sunt repellat enim
              quas quo labore dolorum sapiente assumenda, ab aut quia magni n
              esciunt repellendus? Dolorem excepturi commodi vero.',
            'facebook' =>'facebook.com',
            'youtube' => 'youtube.com',
            'avatar' => 'uploads/avatars/1.png'
        ]);
    }
}
