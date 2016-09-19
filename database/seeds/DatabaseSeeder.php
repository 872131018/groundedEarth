<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => bcrypt('password')
        ]);
        /*
        * Keep a record of the products for the seeder
        */
        DB::table('products')->insert([
            'name' => 'Guitar Man',
            'type' => 'Shirt',
            'link' => 'https://groundedearth.threadless.com/designs/guitar-man',
            'image' => 'guitar.jpg',
            'thumbnail' => '',
            'price' => '$25'
        ]);
        DB::table('products')->insert([
            'name' => 'Space Monkey',
            'type' => 'Shirt',
            'link' => 'https://groundedearth.threadless.com/designs/space-monkey',
            'image' => 'ape.jpg',
            'thumbnail' => '',
            'price' => '$25'
        ]);
        DB::table('products')->insert([
            'name' => 'Buffalo Soldier',
            'type' => 'Shirt',
            'link' => 'https://groundedearth.threadless.com/designs/buffalo-soldier',
            'image' => 'buffalo.jpg',
            'thumbnail' => '',
            'price' => '$25'
        ]);
        DB::table('products')->insert([
            'name' => 'Skullified',
            'type' => 'Shirt',
            'link' => 'https://groundedearth.threadless.com/designs/skullified',
            'image' => 'skully.jpg',
            'thumbnail' => '',
            'price' => '$25'
        ]);
        DB::table('products')->insert([
            'name' => 'Maze Skull',
            'type' => 'Shirt',
            'link' => 'https://groundedearth.threadless.com/designs/maze-skull',
            'image' => 'maze.jpg',
            'thumbnail' => '',
            'price' => '$25'
        ]);
        DB::table('products')->insert([
            'name' => 'Grounded',
            'type' => 'Shirt',
            'link' => 'https://groundedearth.threadless.com/designs/grounded',
            'image' => 'logo.jpg',
            'thumbnail' => '',
            'price' => '$25'
        ]);
        /*
        * This one needs to be reprepped
        */
        DB::table('products')->insert([
            'name' => 'Night Owl',
            'type' => 'Shirt',
            'link' => 'https://groundedearth.threadless.com/designs/night-owl',
            'image' => 'owl.png',
            'thumbnail' => '',
            'price' => '$25'
        ]);
        DB::table('products')->insert([
            'name' => 'Speed Racer',
            'type' => 'Shirt',
            'link' => 'https://groundedearth.threadless.com/designs/speed-racer',
            'image' => 'moto.jpg',
            'thumbnail' => '',
            'price' => '$25'
        ]);
        DB::table('products')->insert([
            'name' => 'Maze Locked',
            'type' => 'Shirt',
            'link' => 'https://groundedearth.threadless.com/designs/maze-locked',
            'image' => 'brain-maze.jpg',
            'thumbnail' => '',
            'price' => '$25'
        ]);
        DB::table('products')->insert([
            'name' => 'Bigfoot Party',
            'type' => 'Shirt',
            'link' => 'https://groundedearth.threadless.com/designs/bigfoot-party',
            'image' => 'sasquatcu.jpg',
            'thumbnail' => '',
            'price' => '$25'
        ]);
    }
}
