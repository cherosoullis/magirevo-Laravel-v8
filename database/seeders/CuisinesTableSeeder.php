<?php

use Illuminate\Database\Seeder;

class CuisinesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cuisines')->delete();
        
        \DB::table('cuisines')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Ελληνική',
                'slug' => 'elliniki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'Ιταλική',
                'slug' => 'italiki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'Ισπανική',
                'slug' => 'ispaniki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2,
                'name' => 'Γαλλική',
                'slug' => 'galliki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 11,
                'name' => 'Μαροκινή',
                'slug' => 'marokini',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 15,
                'name' => 'Ταϊλανδέζικη',
                'slug' => 'tailandeziki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 5,
                'name' => 'Ινδική',
                'slug' => 'indiki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Κινεζική',
                'slug' => 'kineziki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 4,
                'name' => 'Ιαπωνική',
                'slug' => 'iaponiki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'Περσική',
                'slug' => 'persiki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1,
                'name' => 'Ασιατική',
                'slug' => 'asiatiki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Μεσογειακή',
                'slug' => 'mesogiaki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Πολίτικη',
                'slug' => 'politiki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 9,
                'name' => 'Κυπριακή',
                'slug' => 'kypriaki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 10,
                'name' => 'Λιβανέζικη',
                'slug' => 'livaneziki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}