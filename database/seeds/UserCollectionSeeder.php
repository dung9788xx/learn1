<?php

use Illuminate\Database\Seeder;

class UserCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 100)->create();
        factory(App\Room::class,10)->create()->each(function ($room){
            $room->room_user()->save(factory(App\Room_User_Table::class)->make());
            $room->room_user()->save(new \App\Room_User_Table(['user_id'=>rand(51,99)]));
        });
        factory(\App\Message::class,10000)->create();



    }
}
