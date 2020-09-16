<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ΦΑΓΗΤΑ',
                'slug' => 'fagita',
                'image' => 'categories/y93yREzhCUpsojSo8mlj2zKhfVOXJgAFAiMKchiZ.jpeg',
                'parent_id' => NULL,
                'description' => 'Μαγειρική είναι η διαδικασία της προετοιμασίας τροφίμων με τη χρήση της θερμότητας. Οι τεχνικές μαγειρέματος και τα συστατικά ποικίλλουν ευρέως σε όλο τον κόσμο.',
                'created_at' => '2020-09-02 18:42:20',
                'updated_at' => '2020-09-02 20:39:23',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ΖΑΧΑΡΟΠΛΑΣΤΙΚΗ',
                'slug' => 'zacharoplastiki',
                'image' => 'categories/8a28G42dwXppKphu6arcAZLo9lHvPHUmyQO3nDBO.jpeg',
                'parent_id' => NULL,
                'description' => 'Η ζαχαροπλαστική είναι μία μορφή τέχνης και συγκεκριμένα η τέχνη των γλυκών. Συνδυάζει δεξιοτεχνία και ποιότητα, καθώς δεν είναι εύκολο από όλους να εξειδικευτούν στον τομέα της ζαχαροπλαστικής',
                'created_at' => '2020-09-02 18:44:20',
                'updated_at' => '2020-09-02 18:44:20',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ΡΟΦΗΜΑΤΑ',
                'slug' => 'rofimata',
                'image' => 'categories/SCuvmYn7TPVcvMHjRzK6nQb9dfLbxYfnAbNr1M96.jpeg',
                'parent_id' => NULL,
                'description' => 'Τα ροφήματα είναι υγρά που μπορούν να καταναλωθούν. Εκτός από τις βασικές ανάγκες, τα ροφήματα αποτελούν μέρος του πολιτισμού της ανθρώπινης κοινωνίας.',
                'created_at' => '2020-09-02 18:50:40',
                'updated_at' => '2020-09-04 19:22:41',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Ορεκτικά',
                'slug' => 'orektica',
                'image' => 'categories/ieNZoXAq4vY1hz6xXS4cxZ4k6HpC7km3rtngC7Hg.jpeg',
                'parent_id' => 1,
                'description' => NULL,
                'created_at' => '2020-09-04 19:30:01',
                'updated_at' => '2020-09-04 19:30:01',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Σαλάτες',
                'slug' => 'salates',
                'image' => 'categories/lw8LoKq3sgNYJP5wcj3wNdOt1Yr0rZ2PnIX6zwUS.jpeg',
                'parent_id' => 1,
                'description' => 'Πιάτο για να ελκίει, κανένα μενού δεν είναι πλήρες χωρίς σαλάτα. Υγιείς σαλάτες για ένα πολύ γεμάτο, πολύ μη βαρετό γεύμα.',
                'created_at' => '2020-09-04 19:31:32',
                'updated_at' => '2020-09-04 19:32:11',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Λαχανικά',
                'slug' => 'laxanika',
                'image' => 'categories/xmWStlK2o676JYDbr5SvQcYKy5ESDSBVZa9i7wQH.jpeg',
                'parent_id' => 1,
                'description' => NULL,
                'created_at' => '2020-09-04 19:53:47',
                'updated_at' => '2020-09-04 19:53:47',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Όσπρια',
                'slug' => 'ospria',
                'image' => 'categories/RYCMnOnmjjujin7Wcmy2Sv9w40G0wkWn4RdlewCn.jpeg',
                'parent_id' => 1,
                'description' => '',
                'created_at' => '2020-09-04 20:06:13',
                'updated_at' => '2020-09-04 20:06:13',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Πίτσες',
                'slug' => 'pitses',
                'image' => 'categories/11BNrqLDaZOlSYlUghLiPV5jtKoIFjgKiK0xoxYB.jpeg',
                'parent_id' => 1,
                'description' => '',
                'created_at' => '2020-09-04 20:07:15',
                'updated_at' => '2020-09-04 20:07:15',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Ζυμαρικά',
                'slug' => 'zimarika',
                'image' => 'categories/eQZJosKfvbFA3iAi5ajY445bOS2sc5VJSCew8lCw.jpeg',
                'parent_id' => 1,
                'description' => '',
                'created_at' => '2020-09-04 20:08:15',
                'updated_at' => '2020-09-04 20:08:15',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Ρύζι',
                'slug' => 'rizi',
                'image' => 'categories/qyGUES9mmBNRWSkxl907fm8H7cu6Xr88UtLmEqU2.jpeg',
                'parent_id' => 1,
                'description' => '',
                'created_at' => '2020-09-04 20:13:02',
                'updated_at' => '2020-09-04 20:13:02',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Πουλερικά',
                'slug' => 'poulerika',
                'image' => 'categories/iEl4H5DKtsdaEU5VfrJitAa36XWQYq59FCIHq3mx.jpeg',
                'parent_id' => 1,
                'description' => '',
                'created_at' => '2020-09-04 20:18:13',
                'updated_at' => '2020-09-04 20:18:13',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Ψαρικά',
                'slug' => 'psarika',
                'image' => 'categories/uWbgp4EHNOYOOB5rdyoPuG1KsOCvWpR2mMpKx9m7.jpeg',
                'parent_id' => 1,
                'description' => '',
                'created_at' => '2020-09-04 20:24:20',
                'updated_at' => '2020-09-04 20:24:20',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Θαλασσινά',
                'slug' => 'thalassina',
                'image' => 'categories/WUpt2BuioSWVC4dpMC9YlWpb53GbvGTVmxTykKrU.jpeg',
                'parent_id' => 1,
                'description' => '',
                'created_at' => '2020-09-04 20:25:59',
                'updated_at' => '2020-09-04 20:25:59',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Κρεατικά',
                'slug' => 'kreatika',
                'image' => 'categories/JQ3OajkmL9ujKndpjeeWR7uZAw9Ko04KqEslniu6.jpeg',
                'parent_id' => 1,
                'description' => '',
                'created_at' => '2020-09-04 20:27:43',
                'updated_at' => '2020-09-04 20:27:43',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Ψωμιά',
                'slug' => 'psomia',
                'image' => 'categories/zYPgasPoqkIDDwMOJgYTrJ7zAUI51wlr2hq0jw3K.jpeg',
                'parent_id' => 1,
                'description' => '',
                'created_at' => '2020-09-04 20:50:55',
                'updated_at' => '2020-09-04 20:50:55',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Σούπες',
                'slug' => 'soupes',
                'image' => 'categories/V1XarmO5L6PneLWQx2PQynbBEgRBAOU01tXhWTlU.jpeg',
                'parent_id' => 1,
                'description' => NULL,
                'created_at' => '2020-09-05 05:16:40',
                'updated_at' => '2020-09-05 05:16:40',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Κέικς',
                'slug' => 'keik',
                'image' => 'categories/7weRjqxFTfmjd3Mfv6r51sK3E9AqiYsfpXu7KLYO.jpeg',
                'parent_id' => 2,
                'description' => NULL,
                'created_at' => '2020-09-05 19:19:10',
                'updated_at' => '2020-09-05 19:24:19',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Τούρτες',
                'slug' => 'tourtes',
                'image' => 'categories/mzllHWM5dUt7r5V4JT5zZjjCTN5RLMpLKl6s6Oaf.jpeg',
                'parent_id' => 2,
                'description' => '',
                'created_at' => '2020-09-05 19:21:05',
                'updated_at' => '2020-09-05 19:21:05',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Παγωτά',
                'slug' => 'pagota',
                'image' => 'categories/PnMikjMkBMrqMNIwqqjNFFbBsIzmpYF64xy9eVpY.jpeg',
                'parent_id' => 2,
                'description' => NULL,
                'created_at' => '2020-09-05 19:25:44',
                'updated_at' => '2020-09-05 19:25:44',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Συροπιαστα',
                'slug' => 'in_syrup',
                'image' => 'categories/1bXSbmr8aNDVSFs6YSxcOnx6hE8jUBhqaoXnkXCH.jpeg',
                'parent_id' => 2,
                'description' => '',
                'created_at' => '2020-09-05 19:30:59',
                'updated_at' => '2020-09-05 19:40:37',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Μπισκότα',
                'slug' => 'mpiskota',
                'image' => 'categories/zSxMuu2uu1TuYRjAOALNzHpSXFMTObsgJ9YvkQOP.jpeg',
                'parent_id' => 2,
                'description' => '',
                'created_at' => '2020-09-05 19:33:28',
                'updated_at' => '2020-09-05 19:33:28',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Κρέμες',
                'slug' => 'kremes',
                'image' => 'categories/aEpzMNhtqUSsSaXpu7YV27MuAPHit9ZSbOwNVTMJ.jpeg',
                'parent_id' => 2,
                'description' => '',
                'created_at' => '2020-09-05 19:36:02',
                'updated_at' => '2020-09-05 19:36:02',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Μαρμελάδες',
                'slug' => 'marmelades',
                'image' => 'categories/xzeQ6zcZPNUwpCzeBxZdY7E4cmWhlO0pBaOX2LxS.jpeg',
                'parent_id' => 2,
                'description' => NULL,
                'created_at' => '2020-09-05 19:46:48',
                'updated_at' => '2020-09-05 19:46:48',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Πίττες',
                'slug' => 'pittes',
                'image' => 'categories/NbfNLzwaGERKj1lxmahGBFAP8HwqDuu8RjUqi9bY.jpeg',
                'parent_id' => 2,
                'description' => '',
                'created_at' => '2020-09-05 19:50:39',
                'updated_at' => '2020-09-05 19:50:39',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Smoothies',
                'slug' => 'smoothies',
                'image' => 'categories/wiASgcPtspweX4bLrBSZYq84kc5UrfXnyhGQnHqo.jpeg',
                'parent_id' => 3,
                'description' => '',
                'created_at' => '2020-09-05 19:58:01',
                'updated_at' => '2020-09-06 08:07:04',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Καφέδες',
                'slug' => 'kafedes',
                'image' => 'categories/tt0t4m6o6WEhE9p5G87TPTbTlX7kE3aOgUvyBy9a.jpeg',
                'parent_id' => 3,
                'description' => '',
                'created_at' => '2020-09-05 19:58:36',
                'updated_at' => '2020-09-05 19:58:36',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Κοκτέιλς',
                'slug' => 'coctails',
                'image' => 'categories/ySR9nqtFgvUPF2jsBbpHthbIcxcVkdyp8UftnnDu.jpeg',
                'parent_id' => 3,
                'description' => '',
                'created_at' => '2020-09-05 20:00:23',
                'updated_at' => '2020-09-05 20:03:44',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Χυμοί',
                'slug' => 'xymoi',
                'image' => 'categories/XQecwP8nDcKDq7GVW7JAwFnN8HHUdKLiyDUJWLV0.jpeg',
                'parent_id' => 3,
                'description' => NULL,
                'created_at' => '2020-09-06 08:10:41',
                'updated_at' => '2020-09-06 08:10:41',
            ),
        ));
        
        
    }
}