<?php
namespace Database\Seeders;

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
        
        \DB::table('cities')->insert(array(
            0 =>
            array(
                'created_at' => null,
                'id' => 1,
                'name' => 'Stockholm',
                'updated_at' => null,
            ),
            1 =>
            array(
                'created_at' => null,
                'id' => 2,
                'name' => 'Glöstorp',
                'updated_at' => null,
            ),
            2 =>
            array(
                'created_at' => null,
                'id' => 3,
                'name' => 'Malmö',
                'updated_at' => null,
            ),
            3 =>
            array(
                'created_at' => null,
                'id' => 4,
                'name' => 'Uppsala',
                'updated_at' => null,
            ),
            4 =>
            array(
                'created_at' => null,
                'id' => 5,
                'name' => 'Västerås',
                'updated_at' => null,
            ),
            5 =>
            array(
                'created_at' => null,
                'id' => 6,
                'name' => 'Örebro',
                'updated_at' => null,
            ),
            6 =>
            array(
                'created_at' => null,
                'id' => 7,
                'name' => 'Linköping',
                'updated_at' => null,
            ),
            7 =>
            array(
                'created_at' => null,
                'id' => 8,
                'name' => 'Helsingborg',
                'updated_at' => null,
            ),
            8 =>
            array(
                'created_at' => null,
                'id' => 9,
                'name' => 'Jönköping',
                'updated_at' => null,
            ),
            9 =>
            array(
                'created_at' => null,
                'id' => 10,
                'name' => 'Norrköping',
                'updated_at' => null,
            ),
            10 =>
            array(
                'created_at' => null,
                'id' => 11,
                'name' => 'Umeå',
                'updated_at' => null,
            ),
            11 =>
            array(
                'created_at' => null,
                'id' => 12,
                'name' => 'Bärstad',
                'updated_at' => null,
            ),
            12 =>
            array(
                'created_at' => null,
                'id' => 13,
                'name' => 'Tunadal',
                'updated_at' => null,
            ),
            13 =>
            array(
                'created_at' => null,
                'id' => 14,
                'name' => 'Gävle',
                'updated_at' => null,
            ),
            14 =>
            array(
                'created_at' => null,
                'id' => 15,
                'name' => 'Borås',
                'updated_at' => null,
            ),
            15 =>
            array(
                'created_at' => null,
                'id' => 16,
                'name' => 'Växjö',
                'updated_at' => null,
            ),
            16 =>
            array(
                'created_at' => null,
                'id' => 17,
                'name' => 'Halmstad',
                'updated_at' => null,
            ),
            17 =>
            array(
                'created_at' => null,
                'id' => 18,
                'name' => 'Luleå',
                'updated_at' => null,
            ),
            18 =>
            array(
                'created_at' => null,
                'id' => 19,
                'name' => 'Östersund',
                'updated_at' => null,
            ),
            19 =>
            array(
                'created_at' => null,
                'id' => 20,
                'name' => 'Trollhättan',
                'updated_at' => null,
            ),
            20 =>
            array(
                'created_at' => null,
                'id' => 21,
                'name' => 'Borlänge',
                'updated_at' => null,
            ),
            21 =>
            array(
                'created_at' => null,
                'id' => 22,
                'name' => 'Falun',
                'updated_at' => null,
            ),
            22 =>
            array(
                'created_at' => null,
                'id' => 23,
                'name' => 'Kalmar',
                'updated_at' => null,
            ),
            23 =>
            array(
                'created_at' => null,
                'id' => 24,
                'name' => 'Kristianstad',
                'updated_at' => null,
            ),
            24 =>
            array(
                'created_at' => null,
                'id' => 25,
                'name' => 'Skellefteå',
                'updated_at' => null,
            ),
            25 =>
            array(
                'created_at' => null,
                'id' => 26,
                'name' => 'Örnsköldsvik',
                'updated_at' => null,
            ),
            26 =>
            array(
                'created_at' => null,
                'id' => 27,
                'name' => 'Nyköping',
                'updated_at' => null,
            ),
            27 =>
            array(
                'created_at' => null,
                'id' => 28,
                'name' => 'Visby',
                'updated_at' => null,
            ),
            28 =>
            array(
                'created_at' => null,
                'id' => 29,
                'name' => 'Vänersborg',
                'updated_at' => null,
            ),
            29 =>
            array(
                'created_at' => null,
                'id' => 30,
                'name' => 'Kirunavaara',
                'updated_at' => null,
            ),
            30 =>
            array(
                'created_at' => null,
                'id' => 31,
                'name' => 'Fröland',
                'updated_at' => null,
            ),
            31 =>
            array(
                'created_at' => null,
                'id' => 32,
                'name' => 'Mariestad',
                'updated_at' => null,
            ),
            32 =>
            array(
                'created_at' => null,
                'id' => 33,
                'name' => 'Bollnäs',
                'updated_at' => null,
            ),
            33 =>
            array(
                'created_at' => null,
                'id' => 34,
                'name' => 'Älvsbyn',
                'updated_at' => null,
            ),
            34 =>
            array(
                'created_at' => null,
                'id' => 35,
                'name' => 'Forshaga',
                'updated_at' => null,
            ),
            35 =>
            array(
                'created_at' => null,
                'id' => 36,
                'name' => 'Lomma',
                'updated_at' => null,
            ),
            36 =>
            array(
                'created_at' => null,
                'id' => 37,
                'name' => 'Henån',
                'updated_at' => null,
            ),
            37 =>
            array(
                'created_at' => null,
                'id' => 38,
                'name' => 'Kopparberg',
                'updated_at' => null,
            ),
            38 =>
            array(
                'created_at' => null,
                'id' => 39,
                'name' => 'Tibro',
                'updated_at' => null,
            ),
            39 =>
            array(
                'created_at' => null,
                'id' => 40,
                'name' => 'Tidaholm',
                'updated_at' => null,
            ),
            40 =>
            array(
                'created_at' => null,
                'id' => 41,
                'name' => 'Broby',
                'updated_at' => null,
            ),
            41 =>
            array(
                'created_at' => null,
                'id' => 42,
                'name' => 'Södertälje',
                'updated_at' => null,
            ),
            42 =>
            array(
                'created_at' => null,
                'id' => 43,
                'name' => 'Tierp',
                'updated_at' => null,
            ),
            43 =>
            array(
                'created_at' => null,
                'id' => 44,
                'name' => 'Hammarstrand',
                'updated_at' => null,
            ),
            44 =>
            array(
                'created_at' => null,
                'id' => 45,
                'name' => 'Motala',
                'updated_at' => null,
            ),
            45 =>
            array(
                'created_at' => null,
                'id' => 46,
                'name' => 'Hagfors',
                'updated_at' => null,
            ),
            46 =>
            array(
                'created_at' => null,
                'id' => 47,
                'name' => 'Filipstad',
                'updated_at' => null,
            ),
            47 =>
            array(
                'created_at' => null,
                'id' => 48,
                'name' => 'Hallsberg',
                'updated_at' => null,
            ),
            48 =>
            array(
                'created_at' => null,
                'id' => 49,
                'name' => 'Arjeplog',
                'updated_at' => null,
            ),
            49 =>
            array(
                'created_at' => null,
                'id' => 50,
                'name' => 'Arvika',
                'updated_at' => null,
            ),
            50 =>
            array(
                'created_at' => null,
                'id' => 51,
                'name' => 'Tanumshede',
                'updated_at' => null,
            ),
            51 =>
            array(
                'created_at' => null,
                'id' => 52,
                'name' => 'Kalix',
                'updated_at' => null,
            ),
            52 =>
            array(
                'created_at' => null,
                'id' => 53,
                'name' => 'Hedemora',
                'updated_at' => null,
            ),
            53 =>
            array(
                'created_at' => null,
                'id' => 54,
                'name' => 'Nossebro',
                'updated_at' => null,
            ),
            54 =>
            array(
                'created_at' => null,
                'id' => 55,
                'name' => 'Hallstahammar',
                'updated_at' => null,
            ),
            55 =>
            array(
                'created_at' => null,
                'id' => 56,
                'name' => 'Skurup',
                'updated_at' => null,
            ),
            56 =>
            array(
                'created_at' => null,
                'id' => 57,
                'name' => 'Vetlanda',
                'updated_at' => null,
            ),
            57 =>
            array(
                'created_at' => null,
                'id' => 58,
                'name' => 'Ronneby',
                'updated_at' => null,
            ),
            58 =>
            array(
                'created_at' => null,
                'id' => 59,
                'name' => 'Kungsör',
                'updated_at' => null,
            ),
            59 =>
            array(
                'created_at' => null,
                'id' => 60,
                'name' => 'Hova',
                'updated_at' => null,
            ),
            60 =>
            array(
                'created_at' => null,
                'id' => 61,
                'name' => 'Eksjö',
                'updated_at' => null,
            ),
            61 =>
            array(
                'created_at' => null,
                'id' => 62,
                'name' => 'Eslöv',
                'updated_at' => null,
            ),
            62 =>
            array(
                'created_at' => null,
                'id' => 63,
                'name' => 'Höganäs',
                'updated_at' => null,
            ),
            63 =>
            array(
                'created_at' => null,
                'id' => 64,
                'name' => 'Sölvesborg',
                'updated_at' => null,
            ),
            64 =>
            array(
                'created_at' => null,
                'id' => 65,
                'name' => 'Norsjö',
                'updated_at' => null,
            ),
            65 =>
            array(
                'created_at' => null,
                'id' => 66,
                'name' => 'Vaxholm',
                'updated_at' => null,
            ),
            66 =>
            array(
                'created_at' => null,
                'id' => 67,
                'name' => 'Perstorp',
                'updated_at' => null,
            ),
            67 =>
            array(
                'created_at' => null,
                'id' => 68,
                'name' => 'Leksand',
                'updated_at' => null,
            ),
            68 =>
            array(
                'created_at' => null,
                'id' => 69,
                'name' => 'Ludvika',
                'updated_at' => null,
            ),
            69 =>
            array(
                'created_at' => null,
                'id' => 70,
                'name' => 'Vilhelmina',
                'updated_at' => null,
            ),
            70 =>
            array(
                'created_at' => null,
                'id' => 71,
                'name' => 'Alvesta',
                'updated_at' => null,
            ),
            71 =>
            array(
                'created_at' => null,
                'id' => 72,
                'name' => 'Valdemarsvik',
                'updated_at' => null,
            ),
            72 =>
            array(
                'created_at' => null,
                'id' => 73,
                'name' => 'Skillingaryd',
                'updated_at' => null,
            ),
            73 =>
            array(
                'created_at' => null,
                'id' => 74,
                'name' => 'Alafors',
                'updated_at' => null,
            ),
            74 =>
            array(
                'created_at' => null,
                'id' => 75,
                'name' => 'Tranås',
                'updated_at' => null,
            ),
            75 =>
            array(
                'created_at' => null,
                'id' => 76,
                'name' => 'Nykvarn',
                'updated_at' => null,
            ),
            76 =>
            array(
                'created_at' => null,
                'id' => 77,
                'name' => 'Upplands Väsby',
                'updated_at' => null,
            ),
            77 =>
            array(
                'created_at' => null,
                'id' => 78,
                'name' => 'Bjurholm',
                'updated_at' => null,
            ),
            78 =>
            array(
                'created_at' => null,
                'id' => 79,
                'name' => 'Degerfors',
                'updated_at' => null,
            ),
            79 =>
            array(
                'created_at' => null,
                'id' => 80,
                'name' => 'Sundsvall',
                'updated_at' => null,
            ),
            80 =>
            array(
                'created_at' => null,
                'id' => 81,
                'name' => 'Ystad',
                'updated_at' => null,
            ),
            81 =>
            array(
                'created_at' => null,
                'id' => 82,
                'name' => 'Jakobsberg',
                'updated_at' => null,
            ),
            82 =>
            array(
                'created_at' => null,
                'id' => 83,
                'name' => 'Knivsta',
                'updated_at' => null,
            ),
            83 =>
            array(
                'created_at' => null,
                'id' => 84,
                'name' => 'Vallentuna',
                'updated_at' => null,
            ),
            84 =>
            array(
                'created_at' => null,
                'id' => 85,
                'name' => 'Strängnäs',
                'updated_at' => null,
            ),
            85 =>
            array(
                'created_at' => null,
                'id' => 86,
                'name' => 'Östhammar',
                'updated_at' => null,
            ),
            86 =>
            array(
                'created_at' => null,
                'id' => 87,
                'name' => 'Hofors',
                'updated_at' => null,
            ),
            87 =>
            array(
                'created_at' => null,
                'id' => 88,
                'name' => 'Mölndal',
                'updated_at' => null,
            ),
            88 =>
            array(
                'created_at' => null,
                'id' => 89,
                'name' => 'Simrishamn',
                'updated_at' => null,
            ),
            89 =>
            array(
                'created_at' => null,
                'id' => 90,
                'name' => 'Bräcke',
                'updated_at' => null,
            ),
            90 =>
            array(
                'created_at' => null,
                'id' => 91,
                'name' => 'Vansbro',
                'updated_at' => null,
            ),
            91 =>
            array(
                'created_at' => null,
                'id' => 92,
                'name' => 'Lerum',
                'updated_at' => null,
            ),
            92 =>
            array(
                'created_at' => null,
                'id' => 93,
                'name' => 'Götene',
                'updated_at' => null,
            ),
            93 =>
            array(
                'created_at' => null,
                'id' => 94,
                'name' => 'Sollefteå',
                'updated_at' => null,
            ),
            94 =>
            array(
                'created_at' => null,
                'id' => 95,
                'name' => 'Boden',
                'updated_at' => null,
            ),
            95 =>
            array(
                'created_at' => null,
                'id' => 96,
                'name' => 'Ed',
                'updated_at' => null,
            ),
            96 =>
            array(
                'created_at' => null,
                'id' => 97,
                'name' => 'Kungsbacka',
                'updated_at' => null,
            ),
            97 =>
            array(
                'created_at' => null,
                'id' => 98,
                'name' => 'Åstorp',
                'updated_at' => null,
            ),
            98 =>
            array(
                'created_at' => null,
                'id' => 99,
                'name' => 'Skärhamn',
                'updated_at' => null,
            ),
            99 =>
            array(
                'created_at' => null,
                'id' => 100,
                'name' => 'Karlskrona',
                'updated_at' => null,
            ),
            100 =>
            array(
                'created_at' => null,
                'id' => 101,
                'name' => 'Mörbylånga',
                'updated_at' => null,
            ),
            101 =>
            array(
                'created_at' => null,
                'id' => 102,
                'name' => 'Tomelilla',
                'updated_at' => null,
            ),
            102 =>
            array(
                'created_at' => null,
                'id' => 103,
                'name' => 'Vingåker',
                'updated_at' => null,
            ),
            103 =>
            array(
                'created_at' => null,
                'id' => 104,
                'name' => 'Lysekil',
                'updated_at' => null,
            ),
            104 =>
            array(
                'created_at' => null,
                'id' => 105,
                'name' => 'Säffle',
                'updated_at' => null,
            ),
            105 =>
            array(
                'created_at' => null,
                'id' => 106,
                'name' => 'Norberg',
                'updated_at' => null,
            ),
            106 =>
            array(
                'created_at' => null,
                'id' => 107,
                'name' => 'Skinnskatteberg',
                'updated_at' => null,
            ),
            107 =>
            array(
                'created_at' => null,
                'id' => 108,
                'name' => 'Falkenberg',
                'updated_at' => null,
            ),
            108 =>
            array(
                'created_at' => null,
                'id' => 109,
                'name' => 'Söderköping',
                'updated_at' => null,
            ),
            109 =>
            array(
                'created_at' => null,
                'id' => 110,
                'name' => 'Surahammar',
                'updated_at' => null,
            ),
            110 =>
            array(
                'created_at' => null,
                'id' => 111,
                'name' => 'Munkfors',
                'updated_at' => null,
            ),
            111 =>
            array(
                'created_at' => null,
                'id' => 112,
                'name' => 'Bollebygd',
                'updated_at' => null,
            ),
            112 =>
            array(
                'created_at' => null,
                'id' => 113,
                'name' => 'Gagnef',
                'updated_at' => null,
            ),
            113 =>
            array(
                'created_at' => null,
                'id' => 114,
                'name' => 'Hyltebruk',
                'updated_at' => null,
            ),
            114 =>
            array(
                'created_at' => null,
                'id' => 115,
                'name' => 'Ödeshög',
                'updated_at' => null,
            ),
            115 =>
            array(
                'created_at' => null,
                'id' => 116,
                'name' => 'Torsås',
                'updated_at' => null,
            ),
            116 =>
            array(
                'created_at' => null,
                'id' => 117,
                'name' => 'Nynäshamn',
                'updated_at' => null,
            ),
            117 =>
            array(
                'created_at' => null,
                'id' => 118,
                'name' => 'Djursholm',
                'updated_at' => null,
            ),
            118 =>
            array(
                'created_at' => null,
                'id' => 119,
                'name' => 'Boxholm',
                'updated_at' => null,
            ),
            119 =>
            array(
                'created_at' => null,
                'id' => 120,
                'name' => 'Bengtsfors',
                'updated_at' => null,
            ),
            120 =>
            array(
                'created_at' => null,
                'id' => 121,
                'name' => 'Båstad',
                'updated_at' => null,
            ),
            121 =>
            array(
                'created_at' => null,
                'id' => 122,
                'name' => 'Österbymo',
                'updated_at' => null,
            ),
            122 =>
            array(
                'created_at' => null,
                'id' => 123,
                'name' => 'Kungsängen',
                'updated_at' => null,
            ),
            123 =>
            array(
                'created_at' => null,
                'id' => 124,
                'name' => 'Kungälv',
                'updated_at' => null,
            ),
            124 =>
            array(
                'created_at' => null,
                'id' => 125,
                'name' => 'Älmhult',
                'updated_at' => null,
            ),
            125 =>
            array(
                'created_at' => null,
                'id' => 126,
                'name' => 'Sorsele',
                'updated_at' => null,
            ),
            126 =>
            array(
                'created_at' => null,
                'id' => 127,
                'name' => 'Smedjebacken',
                'updated_at' => null,
            ),
            127 =>
            array(
                'created_at' => null,
                'id' => 128,
                'name' => 'Uddevalla',
                'updated_at' => null,
            ),
            128 =>
            array(
                'created_at' => null,
                'id' => 129,
                'name' => 'Oxelösund',
                'updated_at' => null,
            ),
            129 =>
            array(
                'created_at' => null,
                'id' => 130,
                'name' => 'Överkalix',
                'updated_at' => null,
            ),
            130 =>
            array(
                'created_at' => null,
                'id' => 131,
                'name' => 'Laholm',
                'updated_at' => null,
            ),
            131 =>
            array(
                'created_at' => null,
                'id' => 132,
                'name' => 'Svalöv',
                'updated_at' => null,
            ),
            132 =>
            array(
                'created_at' => null,
                'id' => 133,
                'name' => 'Sandviken',
                'updated_at' => null,
            ),
            133 =>
            array(
                'created_at' => null,
                'id' => 134,
                'name' => 'Nacka',
                'updated_at' => null,
            ),
            134 =>
            array(
                'created_at' => null,
                'id' => 135,
                'name' => 'Enköping',
                'updated_at' => null,
            ),
            135 =>
            array(
                'created_at' => null,
                'id' => 136,
                'name' => 'Älvdalen',
                'updated_at' => null,
            ),
            136 =>
            array(
                'created_at' => null,
                'id' => 137,
                'name' => 'Katrineholm',
                'updated_at' => null,
            ),
            137 =>
            array(
                'created_at' => null,
                'id' => 138,
                'name' => 'Rättvik',
                'updated_at' => null,
            ),
            138 =>
            array(
                'created_at' => null,
                'id' => 139,
                'name' => 'Skoghall',
                'updated_at' => null,
            ),
            139 =>
            array(
                'created_at' => null,
                'id' => 140,
                'name' => 'Sunne',
                'updated_at' => null,
            ),
            140 =>
            array(
                'created_at' => null,
                'id' => 141,
                'name' => 'Gislaved',
                'updated_at' => null,
            ),
            141 =>
            array(
                'created_at' => null,
                'id' => 142,
                'name' => 'Tumba',
                'updated_at' => null,
            ),
            142 =>
            array(
                'created_at' => null,
                'id' => 143,
                'name' => 'Ulricehamn',
                'updated_at' => null,
            ),
            143 =>
            array(
                'created_at' => null,
                'id' => 144,
                'name' => 'Osby',
                'updated_at' => null,
            ),
            144 =>
            array(
                'created_at' => null,
                'id' => 145,
                'name' => 'Högsby',
                'updated_at' => null,
            ),
            145 =>
            array(
                'created_at' => null,
                'id' => 146,
                'name' => 'Munkedal',
                'updated_at' => null,
            ),
            146 =>
            array(
                'created_at' => null,
                'id' => 147,
                'name' => 'Järpen',
                'updated_at' => null,
            ),
            147 =>
            array(
                'created_at' => null,
                'id' => 148,
                'name' => 'Lycksele',
                'updated_at' => null,
            ),
            148 =>
            array(
                'created_at' => null,
                'id' => 149,
                'name' => 'Ljungby',
                'updated_at' => null,
            ),
            149 =>
            array(
                'created_at' => null,
                'id' => 150,
                'name' => 'Vara',
                'updated_at' => null,
            ),
            150 =>
            array(
                'created_at' => null,
                'id' => 151,
                'name' => 'Värnamo',
                'updated_at' => null,
            ),
            151 =>
            array(
                'created_at' => null,
                'id' => 152,
                'name' => 'Emmaboda',
                'updated_at' => null,
            ),
            152 =>
            array(
                'created_at' => null,
                'id' => 153,
                'name' => 'Nässjö',
                'updated_at' => null,
            ),
            153 =>
            array(
                'created_at' => null,
                'id' => 154,
                'name' => 'Haparanda',
                'updated_at' => null,
            ),
            154 =>
            array(
                'created_at' => null,
                'id' => 155,
                'name' => 'Västerhaninge',
                'updated_at' => null,
            ),
            155 =>
            array(
                'created_at' => null,
                'id' => 156,
                'name' => 'Herrljunga',
                'updated_at' => null,
            ),
            156 =>
            array(
                'created_at' => null,
                'id' => 157,
                'name' => 'Tranemo',
                'updated_at' => null,
            ),
            157 =>
            array(
                'created_at' => null,
                'id' => 158,
                'name' => 'Laxå',
                'updated_at' => null,
            ),
            158 =>
            array(
                'created_at' => null,
                'id' => 159,
                'name' => 'Mölnlycke',
                'updated_at' => null,
            ),
            159 =>
            array(
                'created_at' => null,
                'id' => 160,
                'name' => 'Storuman',
                'updated_at' => null,
            ),
            160 =>
            array(
                'created_at' => null,
                'id' => 161,
                'name' => 'Skara',
                'updated_at' => null,
            ),
            161 =>
            array(
                'created_at' => null,
                'id' => 162,
                'name' => 'Hudiksvall',
                'updated_at' => null,
            ),
            162 =>
            array(
                'created_at' => null,
                'id' => 163,
                'name' => 'Ljusdal',
                'updated_at' => null,
            ),
            163 =>
            array(
                'created_at' => null,
                'id' => 164,
                'name' => 'Huddinge',
                'updated_at' => null,
            ),
            164 =>
            array(
                'created_at' => null,
                'id' => 165,
                'name' => 'Töreboda',
                'updated_at' => null,
            ),
            165 =>
            array(
                'created_at' => null,
                'id' => 166,
                'name' => 'Svenljunga',
                'updated_at' => null,
            ),
            166 =>
            array(
                'created_at' => null,
                'id' => 167,
                'name' => 'Lidingö',
                'updated_at' => null,
            ),
            167 =>
            array(
                'created_at' => null,
                'id' => 168,
                'name' => 'Solna',
                'updated_at' => null,
            ),
            168 =>
            array(
                'created_at' => null,
                'id' => 169,
                'name' => 'Tyresö',
                'updated_at' => null,
            ),
            169 =>
            array(
                'created_at' => null,
                'id' => 170,
                'name' => 'Vännäs',
                'updated_at' => null,
            ),
            170 =>
            array(
                'created_at' => null,
                'id' => 171,
                'name' => 'Örkelljunga',
                'updated_at' => null,
            ),
            171 =>
            array(
                'created_at' => null,
                'id' => 172,
                'name' => 'Kil',
                'updated_at' => null,
            ),
            172 =>
            array(
                'created_at' => null,
                'id' => 173,
                'name' => 'Fagersta',
                'updated_at' => null,
            ),
            173 =>
            array(
                'created_at' => null,
                'id' => 174,
                'name' => 'Åsele',
                'updated_at' => null,
            ),
            174 =>
            array(
                'created_at' => null,
                'id' => 175,
                'name' => 'Åseda',
                'updated_at' => null,
            ),
            175 =>
            array(
                'created_at' => null,
                'id' => 176,
                'name' => 'Staffanstorp',
                'updated_at' => null,
            ),
            176 =>
            array(
                'created_at' => null,
                'id' => 177,
                'name' => 'Ekerö',
                'updated_at' => null,
            ),
            177 =>
            array(
                'created_at' => null,
                'id' => 178,
                'name' => 'Norrtälje',
                'updated_at' => null,
            ),
            178 =>
            array(
                'created_at' => null,
                'id' => 179,
                'name' => 'Märsta',
                'updated_at' => null,
            ),
            179 =>
            array(
                'created_at' => null,
                'id' => 180,
                'name' => 'Markaryd',
                'updated_at' => null,
            ),
            180 =>
            array(
                'created_at' => null,
                'id' => 181,
                'name' => 'Hällefors',
                'updated_at' => null,
            ),
            181 =>
            array(
                'created_at' => null,
                'id' => 182,
                'name' => 'Vimmerby',
                'updated_at' => null,
            ),
            182 =>
            array(
                'created_at' => null,
                'id' => 183,
                'name' => 'Mönsterås',
                'updated_at' => null,
            ),
            183 =>
            array(
                'created_at' => null,
                'id' => 184,
                'name' => 'Fjugesta',
                'updated_at' => null,
            ),
            184 =>
            array(
                'created_at' => null,
                'id' => 185,
                'name' => 'Åtvidaberg',
                'updated_at' => null,
            ),
            185 =>
            array(
                'created_at' => null,
                'id' => 186,
                'name' => 'Kristinehamn',
                'updated_at' => null,
            ),
            186 =>
            array(
                'created_at' => null,
                'id' => 187,
                'name' => 'Arboga',
                'updated_at' => null,
            ),
            187 =>
            array(
                'created_at' => null,
                'id' => 188,
                'name' => 'Alingsås',
                'updated_at' => null,
            ),
            188 =>
            array(
                'created_at' => null,
                'id' => 189,
                'name' => 'Hässleholm',
                'updated_at' => null,
            ),
            189 =>
            array(
                'created_at' => null,
                'id' => 190,
                'name' => 'Edsbyn',
                'updated_at' => null,
            ),
            190 =>
            array(
                'created_at' => null,
                'id' => 191,
                'name' => 'Strömstad',
                'updated_at' => null,
            ),
            191 =>
            array(
                'created_at' => null,
                'id' => 192,
                'name' => 'Strömsund',
                'updated_at' => null,
            ),
            192 =>
            array(
                'created_at' => null,
                'id' => 193,
                'name' => 'Storfors',
                'updated_at' => null,
            ),
            193 =>
            array(
                'created_at' => null,
                'id' => 194,
                'name' => 'Årjäng',
                'updated_at' => null,
            ),
            194 =>
            array(
                'created_at' => null,
                'id' => 195,
                'name' => 'Karlsborg',
                'updated_at' => null,
            ),
            195 =>
            array(
                'created_at' => null,
                'id' => 196,
                'name' => 'Rönninge',
                'updated_at' => null,
            ),
            196 =>
            array(
                'created_at' => null,
                'id' => 197,
                'name' => 'Göteborg',
                'updated_at' => null,
            ),
            197 =>
            array(
                'created_at' => null,
                'id' => 198,
                'name' => 'Vadstena',
                'updated_at' => null,
            ),
            198 =>
            array(
                'created_at' => null,
                'id' => 199,
                'name' => 'Bergsjö',
                'updated_at' => null,
            ),
            199 =>
            array(
                'created_at' => null,
                'id' => 200,
                'name' => 'Karlskoga',
                'updated_at' => null,
            ),
            200 =>
            array(
                'created_at' => null,
                'id' => 201,
                'name' => 'Sollentuna',
                'updated_at' => null,
            ),
            201 =>
            array(
                'created_at' => null,
                'id' => 202,
                'name' => 'Säter',
                'updated_at' => null,
            ),
            202 =>
            array(
                'created_at' => null,
                'id' => 203,
                'name' => 'Gnosjö',
                'updated_at' => null,
            ),
            203 =>
            array(
                'created_at' => null,
                'id' => 204,
                'name' => 'Gnesta',
                'updated_at' => null,
            ),
            204 =>
            array(
                'created_at' => null,
                'id' => 205,
                'name' => 'Bromölla',
                'updated_at' => null,
            ),
            205 =>
            array(
                'created_at' => null,
                'id' => 206,
                'name' => 'Nora',
                'updated_at' => null,
            ),
            206 =>
            array(
                'created_at' => null,
                'id' => 207,
                'name' => 'Gällivare',
                'updated_at' => null,
            ),
            207 =>
            array(
                'created_at' => null,
                'id' => 208,
                'name' => 'Varberg',
                'updated_at' => null,
            ),
            208 =>
            array(
                'created_at' => null,
                'id' => 209,
                'name' => 'Ockelbo',
                'updated_at' => null,
            ),
            209 =>
            array(
                'created_at' => null,
                'id' => 210,
                'name' => 'Öckerö',
                'updated_at' => null,
            ),
            210 =>
            array(
                'created_at' => null,
                'id' => 211,
                'name' => 'Ängelholm',
                'updated_at' => null,
            ),
            211 =>
            array(
                'created_at' => null,
                'id' => 212,
                'name' => 'Vindeln',
                'updated_at' => null,
            ),
            212 =>
            array(
                'created_at' => null,
                'id' => 213,
                'name' => 'Timrå',
                'updated_at' => null,
            ),
            213 =>
            array(
                'created_at' => null,
                'id' => 214,
                'name' => 'Hörby',
                'updated_at' => null,
            ),
            214 =>
            array(
                'created_at' => null,
                'id' => 215,
                'name' => 'Höör',
                'updated_at' => null,
            ),
            215 =>
            array(
                'created_at' => null,
                'id' => 216,
                'name' => 'Sundbyberg',
                'updated_at' => null,
            ),
            216 =>
            array(
                'created_at' => null,
                'id' => 217,
                'name' => 'Vårgårda',
                'updated_at' => null,
            ),
            217 =>
            array(
                'created_at' => null,
                'id' => 218,
                'name' => 'Bjuv',
                'updated_at' => null,
            ),
            218 =>
            array(
                'created_at' => null,
                'id' => 219,
                'name' => 'Svedala',
                'updated_at' => null,
            ),
            219 =>
            array(
                'created_at' => null,
                'id' => 220,
                'name' => 'Orsa',
                'updated_at' => null,
            ),
            220 =>
            array(
                'created_at' => null,
                'id' => 221,
                'name' => 'Piteå',
                'updated_at' => null,
            ),
            221 =>
            array(
                'created_at' => null,
                'id' => 222,
                'name' => 'Arvidsjaur',
                'updated_at' => null,
            ),
            222 =>
            array(
                'created_at' => null,
                'id' => 223,
                'name' => 'Aneby',
                'updated_at' => null,
            ),
            223 =>
            array(
                'created_at' => null,
                'id' => 224,
                'name' => 'Falköping',
                'updated_at' => null,
            ),
            224 =>
            array(
                'created_at' => null,
                'id' => 225,
                'name' => 'Lund',
                'updated_at' => null,
            ),
            225 =>
            array(
                'created_at' => null,
                'id' => 226,
                'name' => 'Olofström',
                'updated_at' => null,
            ),
            226 =>
            array(
                'created_at' => null,
                'id' => 227,
                'name' => 'Habo',
                'updated_at' => null,
            ),
            227 =>
            array(
                'created_at' => null,
                'id' => 228,
                'name' => 'Pajala',
                'updated_at' => null,
            ),
            228 =>
            array(
                'created_at' => null,
                'id' => 229,
                'name' => 'Skutskär',
                'updated_at' => null,
            ),
            229 =>
            array(
                'created_at' => null,
                'id' => 230,
                'name' => 'Täby',
                'updated_at' => null,
            ),
            230 =>
            array(
                'created_at' => null,
                'id' => 231,
                'name' => 'Kävlinge',
                'updated_at' => null,
            ),
            231 =>
            array(
                'created_at' => null,
                'id' => 232,
                'name' => 'Hultsfred',
                'updated_at' => null,
            ),
            232 =>
            array(
                'created_at' => null,
                'id' => 233,
                'name' => 'Avesta',
                'updated_at' => null,
            ),
            233 =>
            array(
                'created_at' => null,
                'id' => 234,
                'name' => 'Ånge',
                'updated_at' => null,
            ),
            234 =>
            array(
                'created_at' => null,
                'id' => 235,
                'name' => 'Malå',
                'updated_at' => null,
            ),
            235 =>
            array(
                'created_at' => null,
                'id' => 236,
                'name' => 'Finspång',
                'updated_at' => null,
            ),
            236 =>
            array(
                'created_at' => null,
                'id' => 237,
                'name' => 'Borgholm',
                'updated_at' => null,
            ),
            237 =>
            array(
                'created_at' => null,
                'id' => 238,
                'name' => 'Gustavsberg',
                'updated_at' => null,
            ),
            238 =>
            array(
                'created_at' => null,
                'id' => 239,
                'name' => 'Mullsjö',
                'updated_at' => null,
            ),
            239 =>
            array(
                'created_at' => null,
                'id' => 240,
                'name' => 'Grästorp',
                'updated_at' => null,
            ),
            240 =>
            array(
                'created_at' => null,
                'id' => 241,
                'name' => 'Åmål',
                'updated_at' => null,
            ),
            241 =>
            array(
                'created_at' => null,
                'id' => 242,
                'name' => 'Lindesberg',
                'updated_at' => null,
            ),
            242 =>
            array(
                'created_at' => null,
                'id' => 243,
                'name' => 'Kinna',
                'updated_at' => null,
            ),
            243 =>
            array(
                'created_at' => null,
                'id' => 244,
                'name' => 'Sveg',
                'updated_at' => null,
            ),
            244 =>
            array(
                'created_at' => null,
                'id' => 245,
                'name' => 'Eskilstuna',
                'updated_at' => null,
            ),
            245 =>
            array(
                'created_at' => null,
                'id' => 246,
                'name' => 'Kumla',
                'updated_at' => null,
            ),
            246 =>
            array(
                'created_at' => null,
                'id' => 247,
                'name' => 'Köping',
                'updated_at' => null,
            ),
            247 =>
            array(
                'created_at' => null,
                'id' => 248,
                'name' => 'Trelleborg',
                'updated_at' => null,
            ),
            248 =>
            array(
                'created_at' => null,
                'id' => 249,
                'name' => 'Grums',
                'updated_at' => null,
            ),
            249 =>
            array(
                'created_at' => null,
                'id' => 250,
                'name' => 'Mellerud',
                'updated_at' => null,
            ),
            250 =>
            array(
                'created_at' => null,
                'id' => 251,
                'name' => 'Sala',
                'updated_at' => null,
            ),
            251 =>
            array(
                'created_at' => null,
                'id' => 252,
                'name' => 'Partille',
                'updated_at' => null,
            ),
            252 =>
            array(
                'created_at' => null,
                'id' => 253,
                'name' => 'Kramfors',
                'updated_at' => null,
            ),
            253 =>
            array(
                'created_at' => null,
                'id' => 254,
                'name' => 'Sävsjö',
                'updated_at' => null,
            ),
            254 =>
            array(
                'created_at' => null,
                'id' => 255,
                'name' => 'Härnösand',
                'updated_at' => null,
            ),
            255 =>
            array(
                'created_at' => null,
                'id' => 256,
                'name' => 'Skövde',
                'updated_at' => null,
            ),
            256 =>
            array(
                'created_at' => null,
                'id' => 257,
                'name' => 'Jokkmokk',
                'updated_at' => null,
            ),
            257 =>
            array(
                'created_at' => null,
                'id' => 258,
                'name' => 'Askersund',
                'updated_at' => null,
            ),
            258 =>
            array(
                'created_at' => null,
                'id' => 259,
                'name' => 'Robertsfors',
                'updated_at' => null,
            ),
            259 =>
            array(
                'created_at' => null,
                'id' => 260,
                'name' => 'Kiruna',
                'updated_at' => null,
            ),
            260 =>
            array(
                'created_at' => null,
                'id' => 261,
                'name' => 'Stenungsund',
                'updated_at' => null,
            ),
            261 =>
            array(
                'created_at' => null,
                'id' => 262,
                'name' => 'Bålsta',
                'updated_at' => null,
            ),
            262 =>
            array(
                'created_at' => null,
                'id' => 263,
                'name' => 'Tingsryd',
                'updated_at' => null,
            ),
            263 =>
            array(
                'created_at' => null,
                'id' => 264,
                'name' => 'Charlottenberg',
                'updated_at' => null,
            ),
            264 =>
            array(
                'created_at' => null,
                'id' => 265,
                'name' => 'Lidköping',
                'updated_at' => null,
            ),
            265 =>
            array(
                'created_at' => null,
                'id' => 266,
                'name' => 'Kungshamn',
                'updated_at' => null,
            ),
            266 =>
            array(
                'created_at' => null,
                'id' => 267,
                'name' => 'Heby',
                'updated_at' => null,
            ),
            267 =>
            array(
                'created_at' => null,
                'id' => 268,
                'name' => 'Färgelanda',
                'updated_at' => null,
            ),
            268 =>
            array(
                'created_at' => null,
                'id' => 269,
                'name' => 'Mjölby',
                'updated_at' => null,
            ),
            269 =>
            array(
                'created_at' => null,
                'id' => 270,
                'name' => 'Åkersberga',
                'updated_at' => null,
            ),
            270 =>
            array(
                'created_at' => null,
                'id' => 271,
                'name' => 'Lilla Edet',
                'updated_at' => null,
            ),
            271 =>
            array(
                'created_at' => null,
                'id' => 272,
                'name' => 'Karlstad',
                'updated_at' => null,
            ),
            272 =>
            array(
                'created_at' => null,
                'id' => 273,
                'name' => 'Lessebo',
                'updated_at' => null,
            ),
            273 =>
            array(
                'created_at' => null,
                'id' => 274,
                'name' => 'Flen',
                'updated_at' => null,
            ),
            274 =>
            array(
                'created_at' => null,
                'id' => 275,
                'name' => 'Dorotea',
                'updated_at' => null,
            ),
            275 =>
            array(
                'created_at' => null,
                'id' => 276,
                'name' => 'Mora',
                'updated_at' => null,
            ),
            276 =>
            array(
                'created_at' => null,
                'id' => 277,
                'name' => 'Arlöv',
                'updated_at' => null,
            ),
            277 =>
            array(
                'created_at' => null,
                'id' => 278,
                'name' => 'Krokom',
                'updated_at' => null,
            ),
            278 =>
            array(
                'created_at' => null,
                'id' => 279,
                'name' => 'Svenstavik',
                'updated_at' => null,
            ),
            279 =>
            array(
                'created_at' => null,
                'id' => 280,
                'name' => 'Malung',
                'updated_at' => null,
            ),
            280 =>
            array(
                'created_at' => null,
                'id' => 281,
                'name' => 'Sjöbo',
                'updated_at' => null,
            ),
            281 =>
            array(
                'created_at' => null,
                'id' => 282,
                'name' => 'Landskrona',
                'updated_at' => null,
            ),
            282 =>
            array(
                'created_at' => null,
                'id' => 283,
                'name' => 'Nordmaling',
                'updated_at' => null,
            ),
            283 =>
            array(
                'created_at' => null,
                'id' => 284,
                'name' => 'Västervik',
                'updated_at' => null,
            ),
            284 =>
            array(
                'created_at' => null,
                'id' => 285,
                'name' => 'Övertorneå',
                'updated_at' => null,
            ),
            285 =>
            array(
                'created_at' => null,
                'id' => 286,
                'name' => 'Nybro',
                'updated_at' => null,
            ),
            286 =>
            array(
                'created_at' => null,
                'id' => 287,
                'name' => 'Söderhamn',
                'updated_at' => null,
            ),
            287 =>
            array(
                'created_at' => null,
                'id' => 288,
                'name' => 'Kisa',
                'updated_at' => null,
            ),
            288 =>
            array(
                'created_at' => null,
                'id' => 289,
                'name' => 'Hjo',
                'updated_at' => null,
            ),
            289 =>
            array(
                'created_at' => null,
                'id' => 290,
                'name' => 'Oskarshamn',
                'updated_at' => null,
            ),
            290 =>
            array(
                'created_at' => null,
                'id' => 291,
                'name' => 'Torsby',
                'updated_at' => null,
            ),
            291 =>
            array(
                'created_at' => null,
                'id' => 292,
                'name' => 'Vellinge',
                'updated_at' => null,
            ),
            292 =>
            array(
                'created_at' => null,
                'id' => 293,
                'name' => 'Klippan',
                'updated_at' => null,
            ),
            293 =>
            array(
                'created_at' => null,
                'id' => 294,
                'name' => 'Trosa',
                'updated_at' => null,
            ),
        ));
    }
}
