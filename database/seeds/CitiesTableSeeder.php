<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'id' => 1,
                'name' => 'Stockholm',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'id' => 2,
                'name' => 'Glöstorp',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => 3,
                'name' => 'Malmö',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'id' => 4,
                'name' => 'Uppsala',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'id' => 5,
                'name' => 'Västerås',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'id' => 6,
                'name' => 'Örebro',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'created_at' => NULL,
                'id' => 7,
                'name' => 'Linköping',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'created_at' => NULL,
                'id' => 8,
                'name' => 'Helsingborg',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'created_at' => NULL,
                'id' => 9,
                'name' => 'Jönköping',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'created_at' => NULL,
                'id' => 10,
                'name' => 'Norrköping',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'created_at' => NULL,
                'id' => 11,
                'name' => 'Umeå',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'created_at' => NULL,
                'id' => 12,
                'name' => 'Bärstad',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'created_at' => NULL,
                'id' => 13,
                'name' => 'Tunadal',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'created_at' => NULL,
                'id' => 14,
                'name' => 'Gävle',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'created_at' => NULL,
                'id' => 15,
                'name' => 'Borås',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'created_at' => NULL,
                'id' => 16,
                'name' => 'Växjö',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'created_at' => NULL,
                'id' => 17,
                'name' => 'Halmstad',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'created_at' => NULL,
                'id' => 18,
                'name' => 'Luleå',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'created_at' => NULL,
                'id' => 19,
                'name' => 'Östersund',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'created_at' => NULL,
                'id' => 20,
                'name' => 'Trollhättan',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'created_at' => NULL,
                'id' => 21,
                'name' => 'Borlänge',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'created_at' => NULL,
                'id' => 22,
                'name' => 'Falun',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'created_at' => NULL,
                'id' => 23,
                'name' => 'Kalmar',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'created_at' => NULL,
                'id' => 24,
                'name' => 'Kristianstad',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'created_at' => NULL,
                'id' => 25,
                'name' => 'Skellefteå',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'created_at' => NULL,
                'id' => 26,
                'name' => 'Örnsköldsvik',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'created_at' => NULL,
                'id' => 27,
                'name' => 'Nyköping',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'created_at' => NULL,
                'id' => 28,
                'name' => 'Visby',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'created_at' => NULL,
                'id' => 29,
                'name' => 'Vänersborg',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'created_at' => NULL,
                'id' => 30,
                'name' => 'Kirunavaara',
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'created_at' => NULL,
                'id' => 31,
                'name' => 'Fröland',
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'created_at' => NULL,
                'id' => 32,
                'name' => 'Mariestad',
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'created_at' => NULL,
                'id' => 33,
                'name' => 'Bollnäs',
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'created_at' => NULL,
                'id' => 34,
                'name' => 'Älvsbyn',
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'created_at' => NULL,
                'id' => 35,
                'name' => 'Forshaga',
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'created_at' => NULL,
                'id' => 36,
                'name' => 'Lomma',
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'created_at' => NULL,
                'id' => 37,
                'name' => 'Henån',
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'created_at' => NULL,
                'id' => 38,
                'name' => 'Kopparberg',
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'created_at' => NULL,
                'id' => 39,
                'name' => 'Tibro',
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'created_at' => NULL,
                'id' => 40,
                'name' => 'Tidaholm',
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'created_at' => NULL,
                'id' => 41,
                'name' => 'Broby',
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'created_at' => NULL,
                'id' => 42,
                'name' => 'Södertälje',
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'created_at' => NULL,
                'id' => 43,
                'name' => 'Tierp',
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'created_at' => NULL,
                'id' => 44,
                'name' => 'Hammarstrand',
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'created_at' => NULL,
                'id' => 45,
                'name' => 'Motala',
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'created_at' => NULL,
                'id' => 46,
                'name' => 'Hagfors',
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'created_at' => NULL,
                'id' => 47,
                'name' => 'Filipstad',
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'created_at' => NULL,
                'id' => 48,
                'name' => 'Hallsberg',
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'created_at' => NULL,
                'id' => 49,
                'name' => 'Arjeplog',
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'created_at' => NULL,
                'id' => 50,
                'name' => 'Arvika',
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'created_at' => NULL,
                'id' => 51,
                'name' => 'Tanumshede',
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'created_at' => NULL,
                'id' => 52,
                'name' => 'Kalix',
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'created_at' => NULL,
                'id' => 53,
                'name' => 'Hedemora',
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'created_at' => NULL,
                'id' => 54,
                'name' => 'Nossebro',
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'created_at' => NULL,
                'id' => 55,
                'name' => 'Hallstahammar',
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'created_at' => NULL,
                'id' => 56,
                'name' => 'Skurup',
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'created_at' => NULL,
                'id' => 57,
                'name' => 'Vetlanda',
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'created_at' => NULL,
                'id' => 58,
                'name' => 'Ronneby',
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'created_at' => NULL,
                'id' => 59,
                'name' => 'Kungsör',
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'created_at' => NULL,
                'id' => 60,
                'name' => 'Hova',
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'created_at' => NULL,
                'id' => 61,
                'name' => 'Eksjö',
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'created_at' => NULL,
                'id' => 62,
                'name' => 'Eslöv',
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'created_at' => NULL,
                'id' => 63,
                'name' => 'Höganäs',
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'created_at' => NULL,
                'id' => 64,
                'name' => 'Sölvesborg',
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'created_at' => NULL,
                'id' => 65,
                'name' => 'Norsjö',
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'created_at' => NULL,
                'id' => 66,
                'name' => 'Vaxholm',
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'created_at' => NULL,
                'id' => 67,
                'name' => 'Perstorp',
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'created_at' => NULL,
                'id' => 68,
                'name' => 'Leksand',
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'created_at' => NULL,
                'id' => 69,
                'name' => 'Ludvika',
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'created_at' => NULL,
                'id' => 70,
                'name' => 'Vilhelmina',
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'created_at' => NULL,
                'id' => 71,
                'name' => 'Alvesta',
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'created_at' => NULL,
                'id' => 72,
                'name' => 'Valdemarsvik',
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'created_at' => NULL,
                'id' => 73,
                'name' => 'Skillingaryd',
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'created_at' => NULL,
                'id' => 74,
                'name' => 'Alafors',
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'created_at' => NULL,
                'id' => 75,
                'name' => 'Tranås',
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'created_at' => NULL,
                'id' => 76,
                'name' => 'Nykvarn',
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'created_at' => NULL,
                'id' => 77,
                'name' => 'Upplands Väsby',
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'created_at' => NULL,
                'id' => 78,
                'name' => 'Bjurholm',
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'created_at' => NULL,
                'id' => 79,
                'name' => 'Degerfors',
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'created_at' => NULL,
                'id' => 80,
                'name' => 'Sundsvall',
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'created_at' => NULL,
                'id' => 81,
                'name' => 'Ystad',
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'created_at' => NULL,
                'id' => 82,
                'name' => 'Jakobsberg',
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'created_at' => NULL,
                'id' => 83,
                'name' => 'Knivsta',
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'created_at' => NULL,
                'id' => 84,
                'name' => 'Vallentuna',
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'created_at' => NULL,
                'id' => 85,
                'name' => 'Strängnäs',
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'created_at' => NULL,
                'id' => 86,
                'name' => 'Östhammar',
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'created_at' => NULL,
                'id' => 87,
                'name' => 'Hofors',
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'created_at' => NULL,
                'id' => 88,
                'name' => 'Mölndal',
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'created_at' => NULL,
                'id' => 89,
                'name' => 'Simrishamn',
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'created_at' => NULL,
                'id' => 90,
                'name' => 'Bräcke',
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'created_at' => NULL,
                'id' => 91,
                'name' => 'Vansbro',
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'created_at' => NULL,
                'id' => 92,
                'name' => 'Lerum',
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'created_at' => NULL,
                'id' => 93,
                'name' => 'Götene',
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'created_at' => NULL,
                'id' => 94,
                'name' => 'Sollefteå',
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'created_at' => NULL,
                'id' => 95,
                'name' => 'Boden',
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'created_at' => NULL,
                'id' => 96,
                'name' => 'Ed',
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'created_at' => NULL,
                'id' => 97,
                'name' => 'Kungsbacka',
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'created_at' => NULL,
                'id' => 98,
                'name' => 'Åstorp',
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'created_at' => NULL,
                'id' => 99,
                'name' => 'Skärhamn',
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'created_at' => NULL,
                'id' => 100,
                'name' => 'Karlskrona',
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'created_at' => NULL,
                'id' => 101,
                'name' => 'Mörbylånga',
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'created_at' => NULL,
                'id' => 102,
                'name' => 'Tomelilla',
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'created_at' => NULL,
                'id' => 103,
                'name' => 'Vingåker',
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'created_at' => NULL,
                'id' => 104,
                'name' => 'Lysekil',
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'created_at' => NULL,
                'id' => 105,
                'name' => 'Säffle',
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'created_at' => NULL,
                'id' => 106,
                'name' => 'Norberg',
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'created_at' => NULL,
                'id' => 107,
                'name' => 'Skinnskatteberg',
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'created_at' => NULL,
                'id' => 108,
                'name' => 'Falkenberg',
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'created_at' => NULL,
                'id' => 109,
                'name' => 'Söderköping',
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'created_at' => NULL,
                'id' => 110,
                'name' => 'Surahammar',
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'created_at' => NULL,
                'id' => 111,
                'name' => 'Munkfors',
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'created_at' => NULL,
                'id' => 112,
                'name' => 'Bollebygd',
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'created_at' => NULL,
                'id' => 113,
                'name' => 'Gagnef',
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'created_at' => NULL,
                'id' => 114,
                'name' => 'Hyltebruk',
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'created_at' => NULL,
                'id' => 115,
                'name' => 'Ödeshög',
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'created_at' => NULL,
                'id' => 116,
                'name' => 'Torsås',
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'created_at' => NULL,
                'id' => 117,
                'name' => 'Nynäshamn',
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'created_at' => NULL,
                'id' => 118,
                'name' => 'Djursholm',
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'created_at' => NULL,
                'id' => 119,
                'name' => 'Boxholm',
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'created_at' => NULL,
                'id' => 120,
                'name' => 'Bengtsfors',
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'created_at' => NULL,
                'id' => 121,
                'name' => 'Båstad',
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'created_at' => NULL,
                'id' => 122,
                'name' => 'Österbymo',
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'created_at' => NULL,
                'id' => 123,
                'name' => 'Kungsängen',
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'created_at' => NULL,
                'id' => 124,
                'name' => 'Kungälv',
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'created_at' => NULL,
                'id' => 125,
                'name' => 'Älmhult',
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'created_at' => NULL,
                'id' => 126,
                'name' => 'Sorsele',
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'created_at' => NULL,
                'id' => 127,
                'name' => 'Smedjebacken',
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'created_at' => NULL,
                'id' => 128,
                'name' => 'Uddevalla',
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'created_at' => NULL,
                'id' => 129,
                'name' => 'Oxelösund',
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'created_at' => NULL,
                'id' => 130,
                'name' => 'Överkalix',
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'created_at' => NULL,
                'id' => 131,
                'name' => 'Laholm',
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'created_at' => NULL,
                'id' => 132,
                'name' => 'Svalöv',
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'created_at' => NULL,
                'id' => 133,
                'name' => 'Sandviken',
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'created_at' => NULL,
                'id' => 134,
                'name' => 'Nacka',
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'created_at' => NULL,
                'id' => 135,
                'name' => 'Enköping',
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'created_at' => NULL,
                'id' => 136,
                'name' => 'Älvdalen',
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'created_at' => NULL,
                'id' => 137,
                'name' => 'Katrineholm',
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'created_at' => NULL,
                'id' => 138,
                'name' => 'Rättvik',
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'created_at' => NULL,
                'id' => 139,
                'name' => 'Skoghall',
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'created_at' => NULL,
                'id' => 140,
                'name' => 'Sunne',
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'created_at' => NULL,
                'id' => 141,
                'name' => 'Gislaved',
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'created_at' => NULL,
                'id' => 142,
                'name' => 'Tumba',
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'created_at' => NULL,
                'id' => 143,
                'name' => 'Ulricehamn',
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'created_at' => NULL,
                'id' => 144,
                'name' => 'Osby',
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'created_at' => NULL,
                'id' => 145,
                'name' => 'Högsby',
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'created_at' => NULL,
                'id' => 146,
                'name' => 'Munkedal',
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'created_at' => NULL,
                'id' => 147,
                'name' => 'Järpen',
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'created_at' => NULL,
                'id' => 148,
                'name' => 'Lycksele',
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'created_at' => NULL,
                'id' => 149,
                'name' => 'Ljungby',
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'created_at' => NULL,
                'id' => 150,
                'name' => 'Vara',
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'created_at' => NULL,
                'id' => 151,
                'name' => 'Värnamo',
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'created_at' => NULL,
                'id' => 152,
                'name' => 'Emmaboda',
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'created_at' => NULL,
                'id' => 153,
                'name' => 'Nässjö',
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'created_at' => NULL,
                'id' => 154,
                'name' => 'Haparanda',
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'created_at' => NULL,
                'id' => 155,
                'name' => 'Västerhaninge',
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'created_at' => NULL,
                'id' => 156,
                'name' => 'Herrljunga',
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'created_at' => NULL,
                'id' => 157,
                'name' => 'Tranemo',
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'created_at' => NULL,
                'id' => 158,
                'name' => 'Laxå',
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'created_at' => NULL,
                'id' => 159,
                'name' => 'Mölnlycke',
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'created_at' => NULL,
                'id' => 160,
                'name' => 'Storuman',
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'created_at' => NULL,
                'id' => 161,
                'name' => 'Skara',
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'created_at' => NULL,
                'id' => 162,
                'name' => 'Hudiksvall',
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'created_at' => NULL,
                'id' => 163,
                'name' => 'Ljusdal',
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'created_at' => NULL,
                'id' => 164,
                'name' => 'Huddinge',
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'created_at' => NULL,
                'id' => 165,
                'name' => 'Töreboda',
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'created_at' => NULL,
                'id' => 166,
                'name' => 'Svenljunga',
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'created_at' => NULL,
                'id' => 167,
                'name' => 'Lidingö',
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'created_at' => NULL,
                'id' => 168,
                'name' => 'Solna',
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'created_at' => NULL,
                'id' => 169,
                'name' => 'Tyresö',
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'created_at' => NULL,
                'id' => 170,
                'name' => 'Vännäs',
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'created_at' => NULL,
                'id' => 171,
                'name' => 'Örkelljunga',
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'created_at' => NULL,
                'id' => 172,
                'name' => 'Kil',
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'created_at' => NULL,
                'id' => 173,
                'name' => 'Fagersta',
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'created_at' => NULL,
                'id' => 174,
                'name' => 'Åsele',
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'created_at' => NULL,
                'id' => 175,
                'name' => 'Åseda',
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'created_at' => NULL,
                'id' => 176,
                'name' => 'Staffanstorp',
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'created_at' => NULL,
                'id' => 177,
                'name' => 'Ekerö',
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'created_at' => NULL,
                'id' => 178,
                'name' => 'Norrtälje',
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'created_at' => NULL,
                'id' => 179,
                'name' => 'Märsta',
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'created_at' => NULL,
                'id' => 180,
                'name' => 'Markaryd',
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'created_at' => NULL,
                'id' => 181,
                'name' => 'Hällefors',
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'created_at' => NULL,
                'id' => 182,
                'name' => 'Vimmerby',
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'created_at' => NULL,
                'id' => 183,
                'name' => 'Mönsterås',
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'created_at' => NULL,
                'id' => 184,
                'name' => 'Fjugesta',
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'created_at' => NULL,
                'id' => 185,
                'name' => 'Åtvidaberg',
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'created_at' => NULL,
                'id' => 186,
                'name' => 'Kristinehamn',
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'created_at' => NULL,
                'id' => 187,
                'name' => 'Arboga',
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'created_at' => NULL,
                'id' => 188,
                'name' => 'Alingsås',
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'created_at' => NULL,
                'id' => 189,
                'name' => 'Hässleholm',
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'created_at' => NULL,
                'id' => 190,
                'name' => 'Edsbyn',
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'created_at' => NULL,
                'id' => 191,
                'name' => 'Strömstad',
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'created_at' => NULL,
                'id' => 192,
                'name' => 'Strömsund',
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'created_at' => NULL,
                'id' => 193,
                'name' => 'Storfors',
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'created_at' => NULL,
                'id' => 194,
                'name' => 'Årjäng',
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'created_at' => NULL,
                'id' => 195,
                'name' => 'Karlsborg',
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'created_at' => NULL,
                'id' => 196,
                'name' => 'Rönninge',
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'created_at' => NULL,
                'id' => 197,
                'name' => 'Göteborg',
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'created_at' => NULL,
                'id' => 198,
                'name' => 'Vadstena',
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'created_at' => NULL,
                'id' => 199,
                'name' => 'Bergsjö',
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'created_at' => NULL,
                'id' => 200,
                'name' => 'Karlskoga',
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'created_at' => NULL,
                'id' => 201,
                'name' => 'Sollentuna',
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'created_at' => NULL,
                'id' => 202,
                'name' => 'Säter',
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'created_at' => NULL,
                'id' => 203,
                'name' => 'Gnosjö',
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'created_at' => NULL,
                'id' => 204,
                'name' => 'Gnesta',
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'created_at' => NULL,
                'id' => 205,
                'name' => 'Bromölla',
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'created_at' => NULL,
                'id' => 206,
                'name' => 'Nora',
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'created_at' => NULL,
                'id' => 207,
                'name' => 'Gällivare',
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'created_at' => NULL,
                'id' => 208,
                'name' => 'Varberg',
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'created_at' => NULL,
                'id' => 209,
                'name' => 'Ockelbo',
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'created_at' => NULL,
                'id' => 210,
                'name' => 'Öckerö',
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'created_at' => NULL,
                'id' => 211,
                'name' => 'Ängelholm',
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'created_at' => NULL,
                'id' => 212,
                'name' => 'Vindeln',
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'created_at' => NULL,
                'id' => 213,
                'name' => 'Timrå',
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'created_at' => NULL,
                'id' => 214,
                'name' => 'Hörby',
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'created_at' => NULL,
                'id' => 215,
                'name' => 'Höör',
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'created_at' => NULL,
                'id' => 216,
                'name' => 'Sundbyberg',
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'created_at' => NULL,
                'id' => 217,
                'name' => 'Vårgårda',
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'created_at' => NULL,
                'id' => 218,
                'name' => 'Bjuv',
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'created_at' => NULL,
                'id' => 219,
                'name' => 'Svedala',
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'created_at' => NULL,
                'id' => 220,
                'name' => 'Orsa',
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'created_at' => NULL,
                'id' => 221,
                'name' => 'Piteå',
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'created_at' => NULL,
                'id' => 222,
                'name' => 'Arvidsjaur',
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'created_at' => NULL,
                'id' => 223,
                'name' => 'Aneby',
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'created_at' => NULL,
                'id' => 224,
                'name' => 'Falköping',
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'created_at' => NULL,
                'id' => 225,
                'name' => 'Lund',
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'created_at' => NULL,
                'id' => 226,
                'name' => 'Olofström',
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'created_at' => NULL,
                'id' => 227,
                'name' => 'Habo',
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'created_at' => NULL,
                'id' => 228,
                'name' => 'Pajala',
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'created_at' => NULL,
                'id' => 229,
                'name' => 'Skutskär',
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'created_at' => NULL,
                'id' => 230,
                'name' => 'Täby',
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'created_at' => NULL,
                'id' => 231,
                'name' => 'Kävlinge',
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'created_at' => NULL,
                'id' => 232,
                'name' => 'Hultsfred',
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'created_at' => NULL,
                'id' => 233,
                'name' => 'Avesta',
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'created_at' => NULL,
                'id' => 234,
                'name' => 'Ånge',
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'created_at' => NULL,
                'id' => 235,
                'name' => 'Malå',
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'created_at' => NULL,
                'id' => 236,
                'name' => 'Finspång',
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'created_at' => NULL,
                'id' => 237,
                'name' => 'Borgholm',
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'created_at' => NULL,
                'id' => 238,
                'name' => 'Gustavsberg',
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'created_at' => NULL,
                'id' => 239,
                'name' => 'Mullsjö',
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'created_at' => NULL,
                'id' => 240,
                'name' => 'Grästorp',
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'created_at' => NULL,
                'id' => 241,
                'name' => 'Åmål',
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'created_at' => NULL,
                'id' => 242,
                'name' => 'Lindesberg',
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'created_at' => NULL,
                'id' => 243,
                'name' => 'Kinna',
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'created_at' => NULL,
                'id' => 244,
                'name' => 'Sveg',
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'created_at' => NULL,
                'id' => 245,
                'name' => 'Eskilstuna',
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'created_at' => NULL,
                'id' => 246,
                'name' => 'Kumla',
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'created_at' => NULL,
                'id' => 247,
                'name' => 'Köping',
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'created_at' => NULL,
                'id' => 248,
                'name' => 'Trelleborg',
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'created_at' => NULL,
                'id' => 249,
                'name' => 'Grums',
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'created_at' => NULL,
                'id' => 250,
                'name' => 'Mellerud',
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'created_at' => NULL,
                'id' => 251,
                'name' => 'Sala',
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'created_at' => NULL,
                'id' => 252,
                'name' => 'Partille',
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'created_at' => NULL,
                'id' => 253,
                'name' => 'Kramfors',
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'created_at' => NULL,
                'id' => 254,
                'name' => 'Sävsjö',
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'created_at' => NULL,
                'id' => 255,
                'name' => 'Härnösand',
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'created_at' => NULL,
                'id' => 256,
                'name' => 'Skövde',
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'created_at' => NULL,
                'id' => 257,
                'name' => 'Jokkmokk',
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'created_at' => NULL,
                'id' => 258,
                'name' => 'Askersund',
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'created_at' => NULL,
                'id' => 259,
                'name' => 'Robertsfors',
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'created_at' => NULL,
                'id' => 260,
                'name' => 'Kiruna',
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'created_at' => NULL,
                'id' => 261,
                'name' => 'Stenungsund',
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'created_at' => NULL,
                'id' => 262,
                'name' => 'Bålsta',
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'created_at' => NULL,
                'id' => 263,
                'name' => 'Tingsryd',
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'created_at' => NULL,
                'id' => 264,
                'name' => 'Charlottenberg',
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'created_at' => NULL,
                'id' => 265,
                'name' => 'Lidköping',
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'created_at' => NULL,
                'id' => 266,
                'name' => 'Kungshamn',
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'created_at' => NULL,
                'id' => 267,
                'name' => 'Heby',
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'created_at' => NULL,
                'id' => 268,
                'name' => 'Färgelanda',
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'created_at' => NULL,
                'id' => 269,
                'name' => 'Mjölby',
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'created_at' => NULL,
                'id' => 270,
                'name' => 'Åkersberga',
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'created_at' => NULL,
                'id' => 271,
                'name' => 'Lilla Edet',
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'created_at' => NULL,
                'id' => 272,
                'name' => 'Karlstad',
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'created_at' => NULL,
                'id' => 273,
                'name' => 'Lessebo',
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'created_at' => NULL,
                'id' => 274,
                'name' => 'Flen',
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'created_at' => NULL,
                'id' => 275,
                'name' => 'Dorotea',
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'created_at' => NULL,
                'id' => 276,
                'name' => 'Mora',
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'created_at' => NULL,
                'id' => 277,
                'name' => 'Arlöv',
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'created_at' => NULL,
                'id' => 278,
                'name' => 'Krokom',
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'created_at' => NULL,
                'id' => 279,
                'name' => 'Svenstavik',
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'created_at' => NULL,
                'id' => 280,
                'name' => 'Malung',
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'created_at' => NULL,
                'id' => 281,
                'name' => 'Sjöbo',
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'created_at' => NULL,
                'id' => 282,
                'name' => 'Landskrona',
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'created_at' => NULL,
                'id' => 283,
                'name' => 'Nordmaling',
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'created_at' => NULL,
                'id' => 284,
                'name' => 'Västervik',
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'created_at' => NULL,
                'id' => 285,
                'name' => 'Övertorneå',
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'created_at' => NULL,
                'id' => 286,
                'name' => 'Nybro',
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'created_at' => NULL,
                'id' => 287,
                'name' => 'Söderhamn',
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'created_at' => NULL,
                'id' => 288,
                'name' => 'Kisa',
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'created_at' => NULL,
                'id' => 289,
                'name' => 'Hjo',
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'created_at' => NULL,
                'id' => 290,
                'name' => 'Oskarshamn',
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'created_at' => NULL,
                'id' => 291,
                'name' => 'Torsby',
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'created_at' => NULL,
                'id' => 292,
                'name' => 'Vellinge',
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'created_at' => NULL,
                'id' => 293,
                'name' => 'Klippan',
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'created_at' => NULL,
                'id' => 294,
                'name' => 'Trosa',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}