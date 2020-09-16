<?php

use Illuminate\Database\Seeder;

class FoodstaffsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('foodstaffs')->delete();

        \DB::table('foodstaffs')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Αβοκάτο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Αγγουράκι Τουρσί',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Αγγουράκι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Ακτινίδιο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Αλάτι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Αλάτι Θαλασσινό',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Αλεύρι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Αλεύρι Ολικής Άλεσης',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Αμύγδαλα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Ανανά',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Αποξηραμένα Φρούτα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Αρνί Καρέ',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Αρνί Μπούτι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Αρνί Παϊδάκι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Αρνί Σπάλα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Αστακό',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Αυγό',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'Αχλάδι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'Βανίλια Εκχύλισμα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'Βασιλικός',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'Βατόμουρο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'Βερίκοκα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'Βερίκοκα Αποξηραμένα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'Βούτυρο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'Βρώμη',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'Βύσσινο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'Γάλα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'Γάλα Καρύδας',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'Γάλα Χαμηλών Λιπαρών',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'Γαλοπούλα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'Γαλοπούλα Στήθος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'Γαρίδα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'Γάυρος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'Γιαούτρι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'name' => 'Γκούτα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'name' => 'Γκρεϊπ Φρουτ',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'name' => 'Γλιστιρίδα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'name' => 'Γλυκάνισσος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'name' => 'Γραβιέρα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'name' => 'Γρενάδινη',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'name' => 'Δημητριακά',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'name' => 'Δυόσμος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'name' => 'Ελαιόλαδο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'name' => 'Ελιές',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'name' => 'Έμενταλ',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array (
                'id' => 47,
                'name' => 'Κοτόπουλο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array (
                'id' => 48,
                'name' => 'Κοτόπουλο Κόκκαλα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array (
                'id' => 49,
                'name' => 'Κοτόπουλο Στήθος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array (
                'id' => 50,
                'name' => 'Κοτόπουλο Μπούτι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array (
                'id' => 51,
                'name' => 'Κοτόπουλο Στήθος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array (
                'id' => 52,
                'name' => 'Κοτόπουλο Συκοτάκια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array (
                'id' => 53,
                'name' => 'Κότσι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array (
                'id' => 54,
                'name' => 'Κουκιά',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 =>
            array (
                'id' => 55,
                'name' => 'Κουνέλι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 =>
            array (
                'id' => 56,
                'name' => 'Κρεμίδια Φρέσκα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 =>
            array (
                'id' => 57,
                'name' => 'Κλιθαράκι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 =>
            array (
                'id' => 58,
                'name' => 'Λαβράκι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 =>
            array (
                'id' => 59,
                'name' => 'Λαζάνια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 =>
            array (
                'id' => 60,
                'name' => 'Λάχανο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 =>
            array (
                'id' => 61,
                'name' => 'Λεμόνια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 =>
            array (
                'id' => 62,
                'name' => 'Λουκάνικο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 =>
            array (
                'id' => 63,
                'name' => 'Μαγιά',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array (
                'id' => 64,
                'name' => 'Μαγιονέζα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array (
                'id' => 65,
                'name' => 'Μαϊντανός',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array (
                'id' => 66,
                'name' => 'Μανιτάρια Στρογγυλά',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array (
                'id' => 67,
                'name' => 'Μανιτάρι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 =>
            array (
                'id' => 68,
                'name' => 'Μαρμελάδα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 =>
            array (
                'id' => 69,
                'name' => 'Μαρούλι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 =>
            array (
                'id' => 70,
                'name' => 'Μέλι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 =>
            array (
                'id' => 71,
                'name' => 'Μελιτζάνα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array (
                'id' => 73,
                'name' => 'Μήλο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 =>
            array (
                'id' => 74,
                'name' => 'Μοσχάρι Γάλακτος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 =>
            array (
                'id' => 75,
                'name' => 'Βοδινό',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 =>
            array (
                'id' => 76,
                'name' => 'Μοσχάρι Γλώσσα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 =>
            array (
                'id' => 77,
                'name' => 'Μοσχαρίσια Μάγουλα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 =>
            array (
                'id' => 78,
                'name' => 'Μοσχάρι Ουρά',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 =>
            array (
                'id' => 79,
                'name' => 'Μοσχαρίσιο Νουα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 =>
            array (
                'id' => 80,
                'name' => 'Μοσχαρίσιο Φιλέτο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 =>
            array (
                'id' => 81,
                'name' => 'Μοσχαρίσιος Σιδιρόδρομος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 =>
            array (
                'id' => 82,
                'name' => 'Μοτσαρέλα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 =>
            array (
                'id' => 83,
                'name' => 'Μούρο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 =>
            array (
                'id' => 84,
                'name' => 'Μουστάρδα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 =>
            array (
                'id' => 85,
                'name' => 'Μπάμια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array (
                'id' => 86,
                'name' => 'Μπανάνα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array (
                'id' => 87,
                'name' => 'Μπεϊκιν Πάουντερ',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array (
                'id' => 88,
                'name' => 'Μαγειρική Σόδα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array (
                'id' => 89,
                'name' => 'Μπέικον',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array (
                'id' => 90,
                'name' => 'Μπύρα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array (
                'id' => 91,
                'name' => 'Μπρόκολο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array (
                'id' => 92,
                'name' => 'Μύδια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array (
                'id' => 93,
                'name' => 'Μύρτιλο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array (
                'id' => 94,
                'name' => 'Νούντλς',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 =>
            array (
                'id' => 95,
                'name' => 'Ντομάτα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 =>
            array (
                'id' => 96,
                'name' => 'Ντομάτα Πελτές',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array (
                'id' => 97,
                'name' => 'Ντομάτα Κονσέρβα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array (
                'id' => 98,
                'name' => 'Ντοματίνια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array (
                'id' => 99,
                'name' => 'Ξηροί Καρποί',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array (
                'id' => 100,
                'name' => 'Ξίδι Μηλίτη οίνου',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array (
                'id' => 101,
                'name' => 'Ξιφίας',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 =>
            array (
                'id' => 102,
                'name' => 'Ορτύκαι Ολόκληρα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array (
                'id' => 103,
                'name' => 'Παντζάρι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 =>
            array (
                'id' => 104,
                'name' => 'Παξιμάδια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 =>
            array (
                'id' => 105,
                'name' => 'Παπαρδέλες',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array (
                'id' => 106,
                'name' => 'Πάπια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array (
                'id' => 107,
                'name' => 'Πάπρικα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array (
                'id' => 108,
                'name' => 'Παρμεζάνα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array (
                'id' => 109,
                'name' => 'Πατάτα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array (
                'id' => 110,
                'name' => 'Πένες',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array (
                'id' => 111,
                'name' => 'Πέστροφα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array (
                'id' => 112,
                'name' => 'Πιπεριά',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 =>
            array (
                'id' => 113,
                'name' => 'Πίτα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 =>
            array (
                'id' => 114,
                'name' => 'Πορτοκάλι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array (
                'id' => 115,
                'name' => 'Πραλίνα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 =>
            array (
                'id' => 116,
                'name' => 'Προσούτο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 =>
            array (
                'id' => 117,
                'name' => 'Ραντίτσιο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 =>
            array (
                'id' => 118,
                'name' => 'Ραπανάκια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 =>
            array (
                'id' => 119,
                'name' => 'Ρεβίθια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 =>
            array (
                'id' => 120,
                'name' => 'Ρέγγα Παστή',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 =>
            array (
                'id' => 121,
                'name' => 'Ρίγανη Φρέσκια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 =>
            array (
                'id' => 122,
                'name' => 'Ριγκατόνι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 =>
            array (
                'id' => 123,
                'name' => 'Ρικότα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 =>
            array (
                'id' => 124,
                'name' => 'Ροδάκινο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 =>
            array (
                'id' => 125,
                'name' => 'Ρόδι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 =>
            array (
                'id' => 126,
                'name' => 'Ρόκα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 =>
            array (
                'id' => 127,
                'name' => 'Ρομάνο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 =>
            array (
                'id' => 128,
                'name' => 'Ρούμι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 =>
            array (
                'id' => 129,
                'name' => 'Ρύζι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 =>
            array (
                'id' => 130,
                'name' => 'Ρύζι Αρμόριο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 =>
            array (
                'id' => 131,
                'name' => 'Ρύζι Λευκό',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 =>
            array (
                'id' => 132,
                'name' => 'Σακέ',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 =>
            array (
                'id' => 133,
                'name' => 'Σαλάτες',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 =>
            array (
                'id' => 134,
                'name' => 'Σάλτσα Δαμάσκινο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 =>
            array (
                'id' => 135,
                'name' => 'Σάλτσα Μπάρμπεκιου',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 =>
            array (
                'id' => 136,
                'name' => 'Σάλτσα Χοϊσίν',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 =>
            array (
                'id' => 137,
                'name' => 'Σάλτσα Ψαριού',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 =>
            array (
                'id' => 138,
                'name' => 'Σαμπάνια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 =>
            array (
                'id' => 139,
                'name' => 'Σαρδέλα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 =>
            array (
                'id' => 140,
                'name' => 'Σαρδέλα Παστή',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 =>
            array (
                'id' => 141,
                'name' => 'Σάφραν',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 =>
            array (
                'id' => 142,
                'name' => 'Σέλινο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 =>
            array (
                'id' => 143,
                'name' => 'Σελέρι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 =>
            array (
                'id' => 144,
                'name' => 'Σελινόριζα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 =>
            array (
                'id' => 145,
                'name' => 'Σελινόσπορος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 =>
            array (
                'id' => 146,
                'name' => 'Σεσκούλο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 =>
            array (
                'id' => 147,
                'name' => 'Σησαμέλαιο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 =>
            array (
                'id' => 148,
                'name' => 'Σιμιγδάλι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 =>
            array (
                'id' => 149,
                'name' => 'Σινάσπορος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 =>
            array (
                'id' => 150,
                'name' => 'Σιρόπι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 =>
            array (
                'id' => 151,
                'name' => 'Σιτάκε',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 =>
            array (
                'id' => 152,
                'name' => 'Σιτάρι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 =>
            array (
                'id' => 153,
                'name' => 'Σκεπή',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 =>
            array (
                'id' => 154,
                'name' => 'Σκόρδο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 =>
            array (
                'id' => 155,
                'name' => 'Σκορπίνα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 =>
            array (
                'id' => 156,
                'name' => 'Σκουμπρί',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 =>
            array (
                'id' => 157,
                'name' => 'Σκουμπρί Καπνιστό',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 =>
            array (
                'id' => 158,
                'name' => 'Σόγια σώς',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 =>
            array (
                'id' => 159,
                'name' => 'Σοκολάτα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 =>
            array (
                'id' => 160,
                'name' => 'Σοκολάτα Γάλακτος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 =>
            array (
                'id' => 161,
                'name' => 'Σοκολάτα Λευκή',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 =>
            array (
                'id' => 162,
                'name' => 'Σολομός',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 =>
            array (
                'id' => 163,
                'name' => 'Σουπιές',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 =>
            array (
                'id' => 164,
                'name' => 'Σουρίμι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 =>
            array (
                'id' => 165,
                'name' => 'Σουσάμι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 =>
            array (
                'id' => 166,
                'name' => 'Σπαγγέτι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 =>
            array (
                'id' => 167,
                'name' => 'Σπανάκι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 =>
            array (
                'id' => 168,
                'name' => 'Σπαράγγι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 =>
            array (
                'id' => 169,
                'name' => 'Σπόρο Κόλιανδρου',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 =>
            array (
                'id' => 170,
                'name' => 'Σταφίδα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 =>
            array (
                'id' => 171,
                'name' => 'Σταφύλια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 =>
            array (
                'id' => 172,
                'name' => 'Στέβια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 =>
            array (
                'id' => 173,
                'name' => 'Στρείδια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 =>
            array (
                'id' => 174,
                'name' => 'Σύκο Ξερό',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 =>
            array (
                'id' => 175,
                'name' => 'Συκώτι από Μοσχάρι Γάλακτος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 =>
            array (
                'id' => 176,
                'name' => 'Σφολιάτα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 =>
            array (
                'id' => 177,
                'name' => 'Σφυρίδα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 =>
            array (
                'id' => 178,
                'name' => 'Ταλαγάνι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 =>
            array (
                'id' => 179,
                'name' => 'Ταλιατέλες',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 =>
            array (
                'id' => 180,
                'name' => 'Ταμπάσκο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 =>
            array (
                'id' => 181,
                'name' => 'Ταραμάς',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 =>
            array (
                'id' => 182,
                'name' => 'Ταχίνι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 =>
            array (
                'id' => 183,
                'name' => 'Τζίντζερ',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 =>
            array (
                'id' => 184,
                'name' => 'Τόνος',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 =>
            array (
                'id' => 185,
                'name' => 'Τορτίγιες',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 =>
            array (
                'id' => 186,
                'name' => 'Τραχανάς',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 =>
            array (
                'id' => 187,
                'name' => 'Τρούφα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 =>
            array (
                'id' => 188,
                'name' => 'Τσάι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 =>
            array (
                'id' => 189,
                'name' => 'Τσάιβς',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 =>
            array (
                'id' => 190,
                'name' => 'Τσένταρ',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 =>
            array (
                'id' => 191,
                'name' => 'Τσίλι σε Σκόνη',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 =>
            array (
                'id' => 192,
                'name' => 'Τυρί Κρέμα(Cream Cheese)',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 =>
            array (
                'id' => 193,
                'name' => 'Τυρί Μπλέ',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 =>
            array (
                'id' => 194,
                'name' => 'Φάβα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 =>
            array (
                'id' => 195,
                'name' => 'Φακές',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 =>
            array (
                'id' => 196,
                'name' => 'Φασκόμηλο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 =>
            array (
                'id' => 197,
                'name' => 'Φασολάκι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 =>
            array (
                'id' => 198,
                'name' => 'Μπιζέλι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 =>
            array (
                'id' => 199,
                'name' => 'Φασόλια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 =>
            array (
                'id' => 200,
                'name' => 'Φασόλια Μαυρομμάτικα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 =>
            array (
                'id' => 201,
                'name' => 'Φέτα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 =>
            array (
                'id' => 203,
                'name' => 'Φιλέτο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 =>
            array (
                'id' => 204,
                'name' => 'Φινόκιο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 =>
            array (
                'id' => 205,
                'name' => 'Φυστίκι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 =>
            array (
                'id' => 206,
                'name' => 'Φυστίκι Αιγίνης',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 =>
            array (
                'id' => 207,
                'name' => 'Φυστικοβούτυρο',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 =>
            array (
                'id' => 208,
                'name' => 'Φουάγκρα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 =>
            array (
                'id' => 209,
                'name' => 'Φουντούκια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 =>
            array (
                'id' => 210,
                'name' => 'Φράουλα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 =>
            array (
                'id' => 211,
                'name' => 'Φρουκτόζι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 =>
            array (
                'id' => 212,
                'name' => 'Φύλλο Κρούστας',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 =>
            array (
                'id' => 213,
                'name' => 'Χαβιάρι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 =>
            array (
                'id' => 214,
                'name' => 'Χοιρινή Μπριζόλα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 =>
            array (
                'id' => 215,
                'name' => 'Χοιρινή Πανσέτα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 =>
            array (
                'id' => 216,
                'name' => 'Χοιρινό',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 =>
            array (
                'id' => 217,
                'name' => 'Χοιρινό Ψαρονεύρι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 =>
            array (
                'id' => 218,
                'name' => 'Χοιρινός Λαιμός (Λαπάς)',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 =>
            array (
                'id' => 219,
                'name' => 'Χόρτα Άγρια',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 =>
            array (
                'id' => 220,
                'name' => 'Χουρμάς',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 =>
            array (
                'id' => 221,
                'name' => 'Χταπόδι',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 =>
            array (
                'id' => 222,
                'name' => 'Χτενιά',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 =>
            array (
                'id' => 223,
                'name' => 'Χυλόπιττα',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 =>
            array (
                'id' => 224,
                'name' => 'Ψωμί',
                'slug' => NULL,
                'image' => 'foodstaff.png',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
