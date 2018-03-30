<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use avaa\User;
class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
    	factory(User::class,15)->create();
        
    }
}
