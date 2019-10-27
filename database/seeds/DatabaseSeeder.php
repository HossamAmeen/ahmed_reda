<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {
        $this->call([
            UserSeed::class,
        ]);
    //    factory('App\Model\User',8)->create();
       factory('App\Models\Brief',1)->create();
       factory('App\Models\User',15)->create();
       factory('App\Models\News',90)->create();
       factory('App\Models\Service',90)->create();
       factory('App\Models\Question',90)->create();
       factory('App\Models\Gallery',19)->create();
       factory('App\Models\Operation',10)->create();
       factory('App\Models\Drug',15)->create();
         
    

    }
}
