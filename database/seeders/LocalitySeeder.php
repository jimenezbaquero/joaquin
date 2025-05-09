<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalitySeeder extends Seeder
{
    public function run()
    {
        DB::table('localities')->delete();
        
        DB::table('localities')->insert([
            0 =>
                [
                    'id' => 1,
                    'province_id' => 1,
                    'name' => 'Alegría-Dulantzi',
                ],
            1 =>
                [
                    'id' => 2,
                    'province_id' => 1,
                    'name' => 'Amurrio',
                ],
            2 =>
                [
                    'id' => 3,
                    'province_id' => 1,
                    'name' => 'Añana',
                ],
            3 =>
                [
                    'id' => 4,
                    'province_id' => 1,
                    'name' => 'Aramaio',
                ],
            4 =>
                [
                    'id' => 5,
                    'province_id' => 1,
                    'name' => 'Armiñón',
                ],
            5 =>
                [
                    'id' => 6,
                    'province_id' => 1,
                    'name' => 'Arraia-Maeztu',
                ],
            6 =>
                [
                    'id' => 7,
                    'province_id' => 1,
                    'name' => 'Arrazua-Ubarrundia',
                ],
            7 =>
                [
                    'id' => 8,
                    'province_id' => 1,
                    'name' => 'Artziniega',
                ],
            8 =>
                [
                    'id' => 9,
                    'province_id' => 1,
                    'name' => 'Asparrena',
                ],
            9 =>
                [
                    'id' => 10,
                    'province_id' => 1,
                    'name' => 'Ayala/Aiara',
                ],
            10 =>
                [
                    'id' => 11,
                    'province_id' => 1,
                    'name' => 'Baños de Ebro/Mañueta',
                ],
            11 =>
                [
                    'id' => 12,
                    'province_id' => 1,
                    'name' => 'Barrundia',
                ],
            12 =>
                [
                    'id' => 13,
                    'province_id' => 1,
                    'name' => 'Berantevilla',
                ],
            13 =>
                [
                    'id' => 14,
                    'province_id' => 1,
                    'name' => 'Bernedo',
                ],
            14 =>
                [
                    'id' => 15,
                    'province_id' => 1,
                    'name' => 'Campezo/Kanpezu',
                ],
            15 =>
                [
                    'id' => 16,
                    'province_id' => 1,
                    'name' => 'Elburgo/Burgelu',
                ],
            16 =>
                [
                    'id' => 17,
                    'province_id' => 1,
                    'name' => 'Elciego',
                ],
            17 =>
                [
                    'id' => 18,
                    'province_id' => 1,
                    'name' => 'Elvillar/Bilar',
                ],
            18 =>
                [
                    'id' => 19,
                    'province_id' => 1,
                    'name' => 'Erriberagoitia/Ribera Alta',
                ],
            19 =>
                [
                    'id' => 20,
                    'province_id' => 1,
                    'name' => 'Harana/Valle de Arana',
                ],
            20 =>
                [
                    'id' => 21,
                    'province_id' => 1,
                    'name' => 'Iruña Oka/Iruña de Oca',
                ],
            21 =>
                [
                    'id' => 22,
                    'province_id' => 1,
                    'name' => 'Iruraiz-Gauna',
                ],
            22 =>
                [
                    'id' => 23,
                    'province_id' => 1,
                    'name' => 'Kripan',
                ],
            23 =>
                [
                    'id' => 24,
                    'province_id' => 1,
                    'name' => 'Kuartango',
                ],
            24 =>
                [
                    'id' => 25,
                    'province_id' => 1,
                    'name' => 'Labastida/Bastida',
                ],
            25 =>
                [
                    'id' => 26,
                    'province_id' => 1,
                    'name' => 'Lagrán',
                ],
            26 =>
                [
                    'id' => 27,
                    'province_id' => 1,
                    'name' => 'Laguardia',
                ],
            27 =>
                [
                    'id' => 28,
                    'province_id' => 1,
                    'name' => 'Lanciego/Lantziego',
                ],
            28 =>
                [
                    'id' => 29,
                    'province_id' => 1,
                    'name' => 'Lantarón',
                ],
            29 =>
                [
                    'id' => 30,
                    'province_id' => 1,
                    'name' => 'Lapuebla de Labarca',
                ],
            30 =>
                [
                    'id' => 31,
                    'province_id' => 1,
                    'name' => 'Laudio/Llodio',
                ],
            31 =>
                [
                    'id' => 32,
                    'province_id' => 1,
                    'name' => 'Legutio',
                ],
            32 =>
                [
                    'id' => 33,
                    'province_id' => 1,
                    'name' => 'Leza',
                ],
            33 =>
                [
                    'id' => 34,
                    'province_id' => 1,
                    'name' => 'Moreda de Álava',
                ],
            34 =>
                [
                    'id' => 35,
                    'province_id' => 1,
                    'name' => 'Navaridas',
                ],
            35 =>
                [
                    'id' => 36,
                    'province_id' => 1,
                    'name' => 'Okondo',
                ],
            36 =>
                [
                    'id' => 37,
                    'province_id' => 1,
                    'name' => 'Oyón-Oion',
                ],
            37 =>
                [
                    'id' => 38,
                    'province_id' => 1,
                    'name' => 'Peñacerrada-Urizaharra',
                ],
            38 =>
                [
                    'id' => 39,
                    'province_id' => 1,
                    'name' => 'Ribera Baja/Erribera Beitia',
                ],
            39 =>
                [
                    'id' => 40,
                    'province_id' => 1,
                    'name' => 'Salvatierra/Agurain',
                ],
            40 =>
                [
                    'id' => 41,
                    'province_id' => 1,
                    'name' => 'Samaniego',
                ],
            41 =>
                [
                    'id' => 42,
                    'province_id' => 1,
                    'name' => 'San Millán/Donemiliaga',
                ],
            42 =>
                [
                    'id' => 43,
                    'province_id' => 1,
                    'name' => 'Urkabustaiz',
                ],
            43 =>
                [
                    'id' => 44,
                    'province_id' => 1,
                    'name' => 'Valdegovía/Gaubea',
                ],
            44 =>
                [
                    'id' => 45,
                    'province_id' => 1,
                    'name' => 'Villabuena de Álava/Eskuernaga',
                ],
            45 =>
                [
                    'id' => 46,
                    'province_id' => 1,
                    'name' => 'Vitoria-Gasteiz',
                ],
            46 =>
                [
                    'id' => 47,
                    'province_id' => 1,
                    'name' => 'Yécora/Iekora',
                ],
            47 =>
                [
                    'id' => 48,
                    'province_id' => 1,
                    'name' => 'Zalduondo',
                ],
            48 =>
                [
                    'id' => 49,
                    'province_id' => 1,
                    'name' => 'Zambrana',
                ],
            49 =>
                [
                    'id' => 50,
                    'province_id' => 1,
                    'name' => 'Zigoitia',
                ],
            50 =>
                [
                    'id' => 51,
                    'province_id' => 1,
                    'name' => 'Zuia',
                ],
            51 =>
                [
                    'id' => 52,
                    'province_id' => 2,
                    'name' => 'Abengibre',
                ],
            52 =>
                [
                    'id' => 53,
                    'province_id' => 2,
                    'name' => 'Alatoz',
                ],
            53 =>
                [
                    'id' => 54,
                    'province_id' => 2,
                    'name' => 'Albacete',
                ],
            54 =>
                [
                    'id' => 55,
                    'province_id' => 2,
                    'name' => 'Albatana',
                ],
            55 =>
                [
                    'id' => 56,
                    'province_id' => 2,
                    'name' => 'Alborea',
                ],
            56 =>
                [
                    'id' => 57,
                    'province_id' => 2,
                    'name' => 'Alcadozo',
                ],
            57 =>
                [
                    'id' => 58,
                    'province_id' => 2,
                    'name' => 'Alcalá del Júcar',
                ],
            58 =>
                [
                    'id' => 59,
                    'province_id' => 2,
                    'name' => 'Alcaraz',
                ],
            59 =>
                [
                    'id' => 60,
                    'province_id' => 2,
                    'name' => 'Almansa',
                ],
            60 =>
                [
                    'id' => 61,
                    'province_id' => 2,
                    'name' => 'Alpera',
                ],
            61 =>
                [
                    'id' => 62,
                    'province_id' => 2,
                    'name' => 'Ayna',
                ],
            62 =>
                [
                    'id' => 63,
                    'province_id' => 2,
                    'name' => 'Balazote',
                ],
            63 =>
                [
                    'id' => 64,
                    'province_id' => 2,
                    'name' => 'Ballestero, El',
                ],
            64 =>
                [
                    'id' => 65,
                    'province_id' => 2,
                    'name' => 'Balsa de Ves',
                ],
            65 =>
                [
                    'id' => 66,
                    'province_id' => 2,
                    'name' => 'Barrax',
                ],
            66 =>
                [
                    'id' => 67,
                    'province_id' => 2,
                    'name' => 'Bienservida',
                ],
            67 =>
                [
                    'id' => 68,
                    'province_id' => 2,
                    'name' => 'Bogarra',
                ],
            68 =>
                [
                    'id' => 69,
                    'province_id' => 2,
                    'name' => 'Bonete',
                ],
            69 =>
                [
                    'id' => 70,
                    'province_id' => 2,
                    'name' => 'Bonillo, El',
                ],
            70 =>
                [
                    'id' => 71,
                    'province_id' => 2,
                    'name' => 'Carcelén',
                ],
            71 =>
                [
                    'id' => 72,
                    'province_id' => 2,
                    'name' => 'Casas de Juan Núñez',
                ],
            72 =>
                [
                    'id' => 73,
                    'province_id' => 2,
                    'name' => 'Casas de Lázaro',
                ],
            73 =>
                [
                    'id' => 74,
                    'province_id' => 2,
                    'name' => 'Casas de Ves',
                ],
            74 =>
                [
                    'id' => 75,
                    'province_id' => 2,
                    'name' => 'Casas-Ibáñez',
                ],
            75 =>
                [
                    'id' => 76,
                    'province_id' => 2,
                    'name' => 'Caudete',
                ],
            76 =>
                [
                    'id' => 77,
                    'province_id' => 2,
                    'name' => 'Cenizate',
                ],
            77 =>
                [
                    'id' => 78,
                    'province_id' => 2,
                    'name' => 'Chinchilla de Monte-Aragón',
                ],
            78 =>
                [
                    'id' => 79,
                    'province_id' => 2,
                    'name' => 'Corral-Rubio',
                ],
            79 =>
                [
                    'id' => 80,
                    'province_id' => 2,
                    'name' => 'Cotillas',
                ],
            80 =>
                [
                    'id' => 81,
                    'province_id' => 2,
                    'name' => 'Elche de la Sierra',
                ],
            81 =>
                [
                    'id' => 82,
                    'province_id' => 2,
                    'name' => 'Férez',
                ],
            82 =>
                [
                    'id' => 83,
                    'province_id' => 2,
                    'name' => 'Fuensanta',
                ],
            83 =>
                [
                    'id' => 84,
                    'province_id' => 2,
                    'name' => 'Fuente-Álamo',
                ],
            84 =>
                [
                    'id' => 85,
                    'province_id' => 2,
                    'name' => 'Fuentealbilla',
                ],
            85 =>
                [
                    'id' => 86,
                    'province_id' => 2,
                    'name' => 'Gineta, La',
                ],
            86 =>
                [
                    'id' => 87,
                    'province_id' => 2,
                    'name' => 'Golosalvo',
                ],
            87 =>
                [
                    'id' => 88,
                    'province_id' => 2,
                    'name' => 'Hellín',
                ],
            88 =>
                [
                    'id' => 89,
                    'province_id' => 2,
                    'name' => 'Herrera, La',
                ],
            89 =>
                [
                    'id' => 90,
                    'province_id' => 2,
                    'name' => 'Higueruela',
                ],
            90 =>
                [
                    'id' => 91,
                    'province_id' => 2,
                    'name' => 'Hoya-Gonzalo',
                ],
            91 =>
                [
                    'id' => 92,
                    'province_id' => 2,
                    'name' => 'Jorquera',
                ],
            92 =>
                [
                    'id' => 93,
                    'province_id' => 2,
                    'name' => 'Letur',
                ],
            93 =>
                [
                    'id' => 94,
                    'province_id' => 2,
                    'name' => 'Lezuza',
                ],
            94 =>
                [
                    'id' => 95,
                    'province_id' => 2,
                    'name' => 'Liétor',
                ],
            95 =>
                [
                    'id' => 96,
                    'province_id' => 2,
                    'name' => 'Madrigueras',
                ],
            96 =>
                [
                    'id' => 97,
                    'province_id' => 2,
                    'name' => 'Mahora',
                ],
            97 =>
                [
                    'id' => 98,
                    'province_id' => 2,
                    'name' => 'Masegoso',
                ],
            98 =>
                [
                    'id' => 99,
                    'province_id' => 2,
                    'name' => 'Minaya',
                ],
            99 =>
                [
                    'id' => 100,
                    'province_id' => 2,
                    'name' => 'Molinicos',
                ],
            100 =>
                [
                    'id' => 101,
                    'province_id' => 2,
                    'name' => 'Montalvos',
                ],
            101 =>
                [
                    'id' => 102,
                    'province_id' => 2,
                    'name' => 'Montealegre del Castillo',
                ],
            102 =>
                [
                    'id' => 103,
                    'province_id' => 2,
                    'name' => 'Motilleja',
                ],
            103 =>
                [
                    'id' => 104,
                    'province_id' => 2,
                    'name' => 'Munera',
                ],
            104 =>
                [
                    'id' => 105,
                    'province_id' => 2,
                    'name' => 'Navas de Jorquera',
                ],
            105 =>
                [
                    'id' => 106,
                    'province_id' => 2,
                    'name' => 'Nerpio',
                ],
            106 =>
                [
                    'id' => 107,
                    'province_id' => 2,
                    'name' => 'Ontur',
                ],
            107 =>
                [
                    'id' => 108,
                    'province_id' => 2,
                    'name' => 'Ossa de Montiel',
                ],
            108 =>
                [
                    'id' => 109,
                    'province_id' => 2,
                    'name' => 'Paterna del Madera',
                ],
            109 =>
                [
                    'id' => 110,
                    'province_id' => 2,
                    'name' => 'Peñas de San Pedro',
                ],
            110 =>
                [
                    'id' => 111,
                    'province_id' => 2,
                    'name' => 'Peñascosa',
                ],
            111 =>
                [
                    'id' => 112,
                    'province_id' => 2,
                    'name' => 'Pétrola',
                ],
            112 =>
                [
                    'id' => 113,
                    'province_id' => 2,
                    'name' => 'Povedilla',
                ],
            113 =>
                [
                    'id' => 114,
                    'province_id' => 2,
                    'name' => 'Pozo Cañada',
                ],
            114 =>
                [
                    'id' => 115,
                    'province_id' => 2,
                    'name' => 'Pozohondo',
                ],
            115 =>
                [
                    'id' => 116,
                    'province_id' => 2,
                    'name' => 'Pozo-Lorente',
                ],
            116 =>
                [
                    'id' => 117,
                    'province_id' => 2,
                    'name' => 'Pozuelo',
                ],
            117 =>
                [
                    'id' => 118,
                    'province_id' => 2,
                    'name' => 'Recueja, La',
                ],
            118 =>
                [
                    'id' => 119,
                    'province_id' => 2,
                    'name' => 'Riópar',
                ],
            119 =>
                [
                    'id' => 120,
                    'province_id' => 2,
                    'name' => 'Robledo',
                ],
            120 =>
                [
                    'id' => 121,
                    'province_id' => 2,
                    'name' => 'Roda, La',
                ],
            121 =>
                [
                    'id' => 122,
                    'province_id' => 2,
                    'name' => 'Salobre',
                ],
            122 =>
                [
                    'id' => 123,
                    'province_id' => 2,
                    'name' => 'San Pedro',
                ],
            123 =>
                [
                    'id' => 124,
                    'province_id' => 2,
                    'name' => 'Socovos',
                ],
            124 =>
                [
                    'id' => 125,
                    'province_id' => 2,
                    'name' => 'Tarazona de la Mancha',
                ],
            125 =>
                [
                    'id' => 126,
                    'province_id' => 2,
                    'name' => 'Tobarra',
                ],
            126 =>
                [
                    'id' => 127,
                    'province_id' => 2,
                    'name' => 'Valdeganga',
                ],
            127 =>
                [
                    'id' => 128,
                    'province_id' => 2,
                    'name' => 'Vianos',
                ],
            128 =>
                [
                    'id' => 129,
                    'province_id' => 2,
                    'name' => 'Villa de Ves',
                ],
            129 =>
                [
                    'id' => 130,
                    'province_id' => 2,
                    'name' => 'Villalgordo del Júcar',
                ],
            130 =>
                [
                    'id' => 131,
                    'province_id' => 2,
                    'name' => 'Villamalea',
                ],
            131 =>
                [
                    'id' => 132,
                    'province_id' => 2,
                    'name' => 'Villapalacios',
                ],
            132 =>
                [
                    'id' => 133,
                    'province_id' => 2,
                    'name' => 'Villarrobledo',
                ],
            133 =>
                [
                    'id' => 134,
                    'province_id' => 2,
                    'name' => 'Villatoya',
                ],
            134 =>
                [
                    'id' => 135,
                    'province_id' => 2,
                    'name' => 'Villavaliente',
                ],
            135 =>
                [
                    'id' => 136,
                    'province_id' => 2,
                    'name' => 'Villaverde de Guadalimar',
                ],
            136 =>
                [
                    'id' => 137,
                    'province_id' => 2,
                    'name' => 'Viveros',
                ],
            137 =>
                [
                    'id' => 138,
                    'province_id' => 2,
                    'name' => 'Yeste',
                ],
            138 =>
                [
                    'id' => 139,
                    'province_id' => 3,
                    'name' => 'Adsubia',
                ],
            139 =>
                [
                    'id' => 140,
                    'province_id' => 3,
                    'name' => 'Agost',
                ],
            140 =>
                [
                    'id' => 141,
                    'province_id' => 3,
                    'name' => 'Agres',
                ],
            141 =>
                [
                    'id' => 142,
                    'province_id' => 3,
                    'name' => 'Aigües',
                ],
            142 =>
                [
                    'id' => 143,
                    'province_id' => 3,
                    'name' => 'Albatera',
                ],
            143 =>
                [
                    'id' => 144,
                    'province_id' => 3,
                    'name' => 'Alcalalí',
                ],
            144 =>
                [
                    'id' => 145,
                    'province_id' => 3,
                    'name' => 'Alcocer de Planes',
                ],
            145 =>
                [
                    'id' => 146,
                    'province_id' => 3,
                    'name' => 'Alcoleja',
                ],
            146 =>
                [
                    'id' => 147,
                    'province_id' => 3,
                    'name' => 'Alcoy/Alcoi',
                ],
            147 =>
                [
                    'id' => 148,
                    'province_id' => 3,
                    'name' => 'Alfafara',
                ],
            148 =>
                [
                    'id' => 149,
                    'province_id' => 3,
                    'name' => 'Alfàs del Pi, l\'',
                ],
            149 =>
                [
                    'id' => 150,
                    'province_id' => 3,
                    'name' => 'Algorfa',
                ],
            150 =>
                [
                    'id' => 151,
                    'province_id' => 3,
                    'name' => 'Algueña',
                ],
            151 =>
                [
                    'id' => 152,
                    'province_id' => 3,
                    'name' => 'Alicante/Alacant',
                ],
            152 =>
                [
                    'id' => 153,
                    'province_id' => 3,
                    'name' => 'Almoradí',
                ],
            153 =>
                [
                    'id' => 154,
                    'province_id' => 3,
                    'name' => 'Almudaina',
                ],
            154 =>
                [
                    'id' => 155,
                    'province_id' => 3,
                    'name' => 'Alqueria d\'Asnar, l\'',
                ],
            155 =>
                [
                    'id' => 156,
                    'province_id' => 3,
                    'name' => 'Altea',
                ],
            156 =>
                [
                    'id' => 157,
                    'province_id' => 3,
                    'name' => 'Aspe',
                ],
            157 =>
                [
                    'id' => 158,
                    'province_id' => 3,
                    'name' => 'Balones',
                ],
            158 =>
                [
                    'id' => 159,
                    'province_id' => 3,
                    'name' => 'Banyeres de Mariola',
                ],
            159 =>
                [
                    'id' => 160,
                    'province_id' => 3,
                    'name' => 'Benasau',
                ],
            160 =>
                [
                    'id' => 161,
                    'province_id' => 3,
                    'name' => 'Beneixama',
                ],
            161 =>
                [
                    'id' => 162,
                    'province_id' => 3,
                    'name' => 'Benejúzar',
                ],
            162 =>
                [
                    'id' => 163,
                    'province_id' => 3,
                    'name' => 'Benferri',
                ],
            163 =>
                [
                    'id' => 164,
                    'province_id' => 3,
                    'name' => 'Beniarbeig',
                ],
            164 =>
                [
                    'id' => 165,
                    'province_id' => 3,
                    'name' => 'Beniardá',
                ],
            165 =>
                [
                    'id' => 166,
                    'province_id' => 3,
                    'name' => 'Beniarrés',
                ],
            166 =>
                [
                    'id' => 167,
                    'province_id' => 3,
                    'name' => 'Benidoleig',
                ],
            167 =>
                [
                    'id' => 168,
                    'province_id' => 3,
                    'name' => 'Benidorm',
                ],
            168 =>
                [
                    'id' => 169,
                    'province_id' => 3,
                    'name' => 'Benifallim',
                ],
            169 =>
                [
                    'id' => 170,
                    'province_id' => 3,
                    'name' => 'Benifato',
                ],
            170 =>
                [
                    'id' => 171,
                    'province_id' => 3,
                    'name' => 'Benigembla',
                ],
            171 =>
                [
                    'id' => 172,
                    'province_id' => 3,
                    'name' => 'Benijófar',
                ],
            172 =>
                [
                    'id' => 173,
                    'province_id' => 3,
                    'name' => 'Benilloba',
                ],
            173 =>
                [
                    'id' => 174,
                    'province_id' => 3,
                    'name' => 'Benillup',
                ],
            174 =>
                [
                    'id' => 175,
                    'province_id' => 3,
                    'name' => 'Benimantell',
                ],
            175 =>
                [
                    'id' => 176,
                    'province_id' => 3,
                    'name' => 'Benimarfull',
                ],
            176 =>
                [
                    'id' => 177,
                    'province_id' => 3,
                    'name' => 'Benimassot',
                ],
            177 =>
                [
                    'id' => 178,
                    'province_id' => 3,
                    'name' => 'Benimeli',
                ],
            178 =>
                [
                    'id' => 179,
                    'province_id' => 3,
                    'name' => 'Benissa',
                ],
            179 =>
                [
                    'id' => 180,
                    'province_id' => 3,
                    'name' => 'Benitachell/Poble Nou de Benitatxell, el',
                ],
            180 =>
                [
                    'id' => 181,
                    'province_id' => 3,
                    'name' => 'Biar',
                ],
            181 =>
                [
                    'id' => 182,
                    'province_id' => 3,
                    'name' => 'Bigastro',
                ],
            182 =>
                [
                    'id' => 183,
                    'province_id' => 3,
                    'name' => 'Bolulla',
                ],
            183 =>
                [
                    'id' => 184,
                    'province_id' => 3,
                    'name' => 'Busot',
                ],
            184 =>
                [
                    'id' => 185,
                    'province_id' => 3,
                    'name' => 'Callosa de Segura',
                ],
            185 =>
                [
                    'id' => 186,
                    'province_id' => 3,
                    'name' => 'Callosa d\'En Sarrià',
                ],
            186 =>
                [
                    'id' => 187,
                    'province_id' => 3,
                    'name' => 'Calp',
                ],
            187 =>
                [
                    'id' => 188,
                    'province_id' => 3,
                    'name' => 'Campello, el',
                ],
            188 =>
                [
                    'id' => 189,
                    'province_id' => 3,
                    'name' => 'Campo de Mirra',
                ],
            189 =>
                [
                    'id' => 190,
                    'province_id' => 3,
                    'name' => 'Cañada',
                ],
            190 =>
                [
                    'id' => 191,
                    'province_id' => 3,
                    'name' => 'Castalla',
                ],
            191 =>
                [
                    'id' => 192,
                    'province_id' => 3,
                    'name' => 'Castell de Castells',
                ],
            192 =>
                [
                    'id' => 193,
                    'province_id' => 3,
                    'name' => 'Castell de Guadalest, el',
                ],
            193 =>
                [
                    'id' => 194,
                    'province_id' => 3,
                    'name' => 'Catral',
                ],
            194 =>
                [
                    'id' => 195,
                    'province_id' => 3,
                    'name' => 'Cocentaina',
                ],
            195 =>
                [
                    'id' => 196,
                    'province_id' => 3,
                    'name' => 'Confrides',
                ],
            196 =>
                [
                    'id' => 197,
                    'province_id' => 3,
                    'name' => 'Cox',
                ],
            197 =>
                [
                    'id' => 198,
                    'province_id' => 3,
                    'name' => 'Crevillent',
                ],
            198 =>
                [
                    'id' => 199,
                    'province_id' => 3,
                    'name' => 'Daya Nueva',
                ],
            199 =>
                [
                    'id' => 200,
                    'province_id' => 3,
                    'name' => 'Daya Vieja',
                ],
            200 =>
                [
                    'id' => 201,
                    'province_id' => 3,
                    'name' => 'Dénia',
                ],
            201 =>
                [
                    'id' => 202,
                    'province_id' => 3,
                    'name' => 'Dolores',
                ],
            202 =>
                [
                    'id' => 203,
                    'province_id' => 3,
                    'name' => 'Elche/Elx',
                ],
            203 =>
                [
                    'id' => 204,
                    'province_id' => 3,
                    'name' => 'Elda',
                ],
            204 =>
                [
                    'id' => 205,
                    'province_id' => 3,
                    'name' => 'Facheca',
                ],
            205 =>
                [
                    'id' => 206,
                    'province_id' => 3,
                    'name' => 'Famorca',
                ],
            206 =>
                [
                    'id' => 207,
                    'province_id' => 3,
                    'name' => 'Finestrat',
                ],
            207 =>
                [
                    'id' => 208,
                    'province_id' => 3,
                    'name' => 'Fondó de les Neus, el/Hondón de las Nieves',
                ],
            208 =>
                [
                    'id' => 209,
                    'province_id' => 3,
                    'name' => 'Formentera del Segura',
                ],
            209 =>
                [
                    'id' => 210,
                    'province_id' => 3,
                    'name' => 'Gaianes',
                ],
            210 =>
                [
                    'id' => 211,
                    'province_id' => 3,
                    'name' => 'Gata de Gorgos',
                ],
            211 =>
                [
                    'id' => 212,
                    'province_id' => 3,
                    'name' => 'Gorga',
                ],
            212 =>
                [
                    'id' => 213,
                    'province_id' => 3,
                    'name' => 'Granja de Rocamora',
                ],
            213 =>
                [
                    'id' => 214,
                    'province_id' => 3,
                    'name' => 'Guardamar del Segura',
                ],
            214 =>
                [
                    'id' => 215,
                    'province_id' => 3,
                    'name' => 'Hondón de los Frailes',
                ],
            215 =>
                [
                    'id' => 216,
                    'province_id' => 3,
                    'name' => 'Ibi',
                ],
            216 =>
                [
                    'id' => 217,
                    'province_id' => 3,
                    'name' => 'Jacarilla',
                ],
            217 =>
                [
                    'id' => 218,
                    'province_id' => 3,
                    'name' => 'Jávea/Xàbia',
                ],
            218 =>
                [
                    'id' => 219,
                    'province_id' => 3,
                    'name' => 'Jijona/Xixona',
                ],
            219 =>
                [
                    'id' => 220,
                    'province_id' => 3,
                    'name' => 'Llíber',
                ],
            220 =>
                [
                    'id' => 221,
                    'province_id' => 3,
                    'name' => 'Lorcha/Orxa, l\'',
                ],
            221 =>
                [
                    'id' => 222,
                    'province_id' => 3,
                    'name' => 'Millena',
                ],
            222 =>
                [
                    'id' => 223,
                    'province_id' => 3,
                    'name' => 'Monforte del Cid',
                ],
            223 =>
                [
                    'id' => 224,
                    'province_id' => 3,
                    'name' => 'Monóvar/Monòver',
                ],
            224 =>
                [
                    'id' => 225,
                    'province_id' => 3,
                    'name' => 'Montesinos, Los',
                ],
            225 =>
                [
                    'id' => 226,
                    'province_id' => 3,
                    'name' => 'Murla',
                ],
            226 =>
                [
                    'id' => 227,
                    'province_id' => 3,
                    'name' => 'Muro de Alcoy',
                ],
            227 =>
                [
                    'id' => 228,
                    'province_id' => 3,
                    'name' => 'Mutxamel',
                ],
            228 =>
                [
                    'id' => 229,
                    'province_id' => 3,
                    'name' => 'Novelda',
                ],
            229 =>
                [
                    'id' => 230,
                    'province_id' => 3,
                    'name' => 'Nucia, la',
                ],
            230 =>
                [
                    'id' => 231,
                    'province_id' => 3,
                    'name' => 'Ondara',
                ],
            231 =>
                [
                    'id' => 232,
                    'province_id' => 3,
                    'name' => 'Onil',
                ],
            232 =>
                [
                    'id' => 233,
                    'province_id' => 3,
                    'name' => 'Orba',
                ],
            233 =>
                [
                    'id' => 234,
                    'province_id' => 3,
                    'name' => 'Orihuela',
                ],
            234 =>
                [
                    'id' => 235,
                    'province_id' => 3,
                    'name' => 'Orxeta',
                ],
            235 =>
                [
                    'id' => 236,
                    'province_id' => 3,
                    'name' => 'Parcent',
                ],
            236 =>
                [
                    'id' => 237,
                    'province_id' => 3,
                    'name' => 'Pedreguer',
                ],
            237 =>
                [
                    'id' => 238,
                    'province_id' => 3,
                    'name' => 'Pego',
                ],
            238 =>
                [
                    'id' => 239,
                    'province_id' => 3,
                    'name' => 'Penàguila',
                ],
            239 =>
                [
                    'id' => 240,
                    'province_id' => 3,
                    'name' => 'Petrer',
                ],
            240 =>
                [
                    'id' => 241,
                    'province_id' => 3,
                    'name' => 'Pilar de la Horadada',
                ],
            241 =>
                [
                    'id' => 242,
                    'province_id' => 3,
                    'name' => 'Pinós, el/Pinoso',
                ],
            242 =>
                [
                    'id' => 243,
                    'province_id' => 3,
                    'name' => 'Planes',
                ],
            243 =>
                [
                    'id' => 244,
                    'province_id' => 3,
                    'name' => 'Poblets, els',
                ],
            244 =>
                [
                    'id' => 245,
                    'province_id' => 3,
                    'name' => 'Polop',
                ],
            245 =>
                [
                    'id' => 246,
                    'province_id' => 3,
                    'name' => 'Quatretondeta',
                ],
            246 =>
                [
                    'id' => 247,
                    'province_id' => 3,
                    'name' => 'Rafal',
                ],
            247 =>
                [
                    'id' => 248,
                    'province_id' => 3,
                    'name' => 'Ràfol d\'Almúnia, El',
                ],
            248 =>
                [
                    'id' => 249,
                    'province_id' => 3,
                    'name' => 'Redován',
                ],
            249 =>
                [
                    'id' => 250,
                    'province_id' => 3,
                    'name' => 'Relleu',
                ],
            250 =>
                [
                    'id' => 251,
                    'province_id' => 3,
                    'name' => 'Rojales',
                ],
            251 =>
                [
                    'id' => 252,
                    'province_id' => 3,
                    'name' => 'Romana, la',
                ],
            252 =>
                [
                    'id' => 253,
                    'province_id' => 3,
                    'name' => 'Sagra',
                ],
            253 =>
                [
                    'id' => 254,
                    'province_id' => 3,
                    'name' => 'Salinas',
                ],
            254 =>
                [
                    'id' => 255,
                    'province_id' => 3,
                    'name' => 'San Fulgencio',
                ],
            255 =>
                [
                    'id' => 256,
                    'province_id' => 3,
                    'name' => 'San Isidro',
                ],
            256 =>
                [
                    'id' => 257,
                    'province_id' => 3,
                    'name' => 'San Miguel de Salinas',
                ],
            257 =>
                [
                    'id' => 258,
                    'province_id' => 3,
                    'name' => 'San Vicente del Raspeig/Sant Vicent del Raspeig',
                ],
            258 =>
                [
                    'id' => 259,
                    'province_id' => 3,
                    'name' => 'Sanet y Negrals',
                ],
            259 =>
                [
                    'id' => 260,
                    'province_id' => 3,
                    'name' => 'Sant Joan d\'Alacant',
                ],
            260 =>
                [
                    'id' => 261,
                    'province_id' => 3,
                    'name' => 'Santa Pola',
                ],
            261 =>
                [
                    'id' => 262,
                    'province_id' => 3,
                    'name' => 'Sax',
                ],
            262 =>
                [
                    'id' => 263,
                    'province_id' => 3,
                    'name' => 'Sella',
                ],
            263 =>
                [
                    'id' => 264,
                    'province_id' => 3,
                    'name' => 'Senija',
                ],
            264 =>
                [
                    'id' => 265,
                    'province_id' => 3,
                    'name' => 'Tàrbena',
                ],
            265 =>
                [
                    'id' => 266,
                    'province_id' => 3,
                    'name' => 'Teulada',
                ],
            266 =>
                [
                    'id' => 267,
                    'province_id' => 3,
                    'name' => 'Tibi',
                ],
            267 =>
                [
                    'id' => 268,
                    'province_id' => 3,
                    'name' => 'Tollos',
                ],
            268 =>
                [
                    'id' => 269,
                    'province_id' => 3,
                    'name' => 'Tormos',
                ],
            269 =>
                [
                    'id' => 270,
                    'province_id' => 3,
                    'name' => 'Torremanzanas/Torre de les Maçanes, la',
                ],
            270 =>
                [
                    'id' => 271,
                    'province_id' => 3,
                    'name' => 'Torrevieja',
                ],
            271 =>
                [
                    'id' => 272,
                    'province_id' => 3,
                    'name' => 'Vall d\'Alcalà, la',
                ],
            272 =>
                [
                    'id' => 273,
                    'province_id' => 3,
                    'name' => 'Vall de Gallinera',
                ],
            273 =>
                [
                    'id' => 274,
                    'province_id' => 3,
                    'name' => 'Vall de Laguar, la',
                ],
            274 =>
                [
                    'id' => 275,
                    'province_id' => 3,
                    'name' => 'Vall d\'Ebo, la',
                ],
            275 =>
                [
                    'id' => 276,
                    'province_id' => 3,
                    'name' => 'Verger, el',
                ],
            276 =>
                [
                    'id' => 277,
                    'province_id' => 3,
                    'name' => 'Villajoyosa/Vila Joiosa, la',
                ],
            277 =>
                [
                    'id' => 278,
                    'province_id' => 3,
                    'name' => 'Villena',
                ],
            278 =>
                [
                    'id' => 279,
                    'province_id' => 3,
                    'name' => 'Xaló',
                ],
            279 =>
                [
                    'id' => 280,
                    'province_id' => 4,
                    'name' => 'Abla',
                ],
            280 =>
                [
                    'id' => 281,
                    'province_id' => 4,
                    'name' => 'Abrucena',
                ],
            281 =>
                [
                    'id' => 282,
                    'province_id' => 4,
                    'name' => 'Adra',
                ],
            282 =>
                [
                    'id' => 283,
                    'province_id' => 4,
                    'name' => 'Albánchez',
                ],
            283 =>
                [
                    'id' => 284,
                    'province_id' => 4,
                    'name' => 'Alboloduy',
                ],
            284 =>
                [
                    'id' => 285,
                    'province_id' => 4,
                    'name' => 'Albox',
                ],
            285 =>
                [
                    'id' => 286,
                    'province_id' => 4,
                    'name' => 'Alcolea',
                ],
            286 =>
                [
                    'id' => 287,
                    'province_id' => 4,
                    'name' => 'Alcóntar',
                ],
            287 =>
                [
                    'id' => 288,
                    'province_id' => 4,
                    'name' => 'Alcudia de Monteagud',
                ],
            288 =>
                [
                    'id' => 289,
                    'province_id' => 4,
                    'name' => 'Alhabia',
                ],
            289 =>
                [
                    'id' => 290,
                    'province_id' => 4,
                    'name' => 'Alhama de Almería',
                ],
            290 =>
                [
                    'id' => 291,
                    'province_id' => 4,
                    'name' => 'Alicún',
                ],
            291 =>
                [
                    'id' => 292,
                    'province_id' => 4,
                    'name' => 'Almería',
                ],
            292 =>
                [
                    'id' => 293,
                    'province_id' => 4,
                    'name' => 'Almócita',
                ],
            293 =>
                [
                    'id' => 294,
                    'province_id' => 4,
                    'name' => 'Alsodux',
                ],
            294 =>
                [
                    'id' => 295,
                    'province_id' => 4,
                    'name' => 'Antas',
                ],
            295 =>
                [
                    'id' => 296,
                    'province_id' => 4,
                    'name' => 'Arboleas',
                ],
            296 =>
                [
                    'id' => 297,
                    'province_id' => 4,
                    'name' => 'Armuña de Almanzora',
                ],
            297 =>
                [
                    'id' => 298,
                    'province_id' => 4,
                    'name' => 'Bacares',
                ],
            298 =>
                [
                    'id' => 299,
                    'province_id' => 4,
                    'name' => 'Bayárcal',
                ],
            299 =>
                [
                    'id' => 300,
                    'province_id' => 4,
                    'name' => 'Bayarque',
                ],
            300 =>
                [
                    'id' => 301,
                    'province_id' => 4,
                    'name' => 'Bédar',
                ],
            301 =>
                [
                    'id' => 302,
                    'province_id' => 4,
                    'name' => 'Beires',
                ],
            302 =>
                [
                    'id' => 303,
                    'province_id' => 4,
                    'name' => 'Benahadux',
                ],
            303 =>
                [
                    'id' => 304,
                    'province_id' => 4,
                    'name' => 'Benitagla',
                ],
            304 =>
                [
                    'id' => 305,
                    'province_id' => 4,
                    'name' => 'Benizalón',
                ],
            305 =>
                [
                    'id' => 306,
                    'province_id' => 4,
                    'name' => 'Bentarique',
                ],
            306 =>
                [
                    'id' => 307,
                    'province_id' => 4,
                    'name' => 'Berja',
                ],
            307 =>
                [
                    'id' => 308,
                    'province_id' => 4,
                    'name' => 'Canjáyar',
                ],
            308 =>
                [
                    'id' => 309,
                    'province_id' => 4,
                    'name' => 'Cantoria',
                ],
            309 =>
                [
                    'id' => 310,
                    'province_id' => 4,
                    'name' => 'Carboneras',
                ],
            310 =>
                [
                    'id' => 311,
                    'province_id' => 4,
                    'name' => 'Castro de Filabres',
                ],
            311 =>
                [
                    'id' => 312,
                    'province_id' => 4,
                    'name' => 'Chercos',
                ],
            312 =>
                [
                    'id' => 313,
                    'province_id' => 4,
                    'name' => 'Chirivel',
                ],
            313 =>
                [
                    'id' => 314,
                    'province_id' => 4,
                    'name' => 'Cóbdar',
                ],
            314 =>
                [
                    'id' => 315,
                    'province_id' => 4,
                    'name' => 'Cuevas del Almanzora',
                ],
            315 =>
                [
                    'id' => 316,
                    'province_id' => 4,
                    'name' => 'Dalías',
                ],
            316 =>
                [
                    'id' => 317,
                    'province_id' => 4,
                    'name' => 'Ejido, El',
                ],
            317 =>
                [
                    'id' => 318,
                    'province_id' => 4,
                    'name' => 'Enix',
                ],
            318 =>
                [
                    'id' => 319,
                    'province_id' => 4,
                    'name' => 'Felix',
                ],
            319 =>
                [
                    'id' => 320,
                    'province_id' => 4,
                    'name' => 'Fines',
                ],
            320 =>
                [
                    'id' => 321,
                    'province_id' => 4,
                    'name' => 'Fiñana',
                ],
            321 =>
                [
                    'id' => 322,
                    'province_id' => 4,
                    'name' => 'Fondón',
                ],
            322 =>
                [
                    'id' => 323,
                    'province_id' => 4,
                    'name' => 'Gádor',
                ],
            323 =>
                [
                    'id' => 324,
                    'province_id' => 4,
                    'name' => 'Gallardos, Los',
                ],
            324 =>
                [
                    'id' => 325,
                    'province_id' => 4,
                    'name' => 'Garrucha',
                ],
            325 =>
                [
                    'id' => 326,
                    'province_id' => 4,
                    'name' => 'Gérgal',
                ],
            326 =>
                [
                    'id' => 327,
                    'province_id' => 4,
                    'name' => 'Huécija',
                ],
            327 =>
                [
                    'id' => 328,
                    'province_id' => 4,
                    'name' => 'Huércal de Almería',
                ],
            328 =>
                [
                    'id' => 329,
                    'province_id' => 4,
                    'name' => 'Huércal-Overa',
                ],
            329 =>
                [
                    'id' => 330,
                    'province_id' => 4,
                    'name' => 'Illar',
                ],
            330 =>
                [
                    'id' => 331,
                    'province_id' => 4,
                    'name' => 'Instinción',
                ],
            331 =>
                [
                    'id' => 332,
                    'province_id' => 4,
                    'name' => 'Laroya',
                ],
            332 =>
                [
                    'id' => 333,
                    'province_id' => 4,
                    'name' => 'Láujar de Andarax',
                ],
            333 =>
                [
                    'id' => 334,
                    'province_id' => 4,
                    'name' => 'Líjar',
                ],
            334 =>
                [
                    'id' => 335,
                    'province_id' => 4,
                    'name' => 'Lubrín',
                ],
            335 =>
                [
                    'id' => 336,
                    'province_id' => 4,
                    'name' => 'Lucainena de las Torres',
                ],
            336 =>
                [
                    'id' => 337,
                    'province_id' => 4,
                    'name' => 'Lúcar',
                ],
            337 =>
                [
                    'id' => 338,
                    'province_id' => 4,
                    'name' => 'Macael',
                ],
            338 =>
                [
                    'id' => 339,
                    'province_id' => 4,
                    'name' => 'María',
                ],
            339 =>
                [
                    'id' => 340,
                    'province_id' => 4,
                    'name' => 'Mojácar',
                ],
            340 =>
                [
                    'id' => 341,
                    'province_id' => 4,
                    'name' => 'Mojonera, La',
                ],
            341 =>
                [
                    'id' => 342,
                    'province_id' => 4,
                    'name' => 'Nacimiento',
                ],
            342 =>
                [
                    'id' => 343,
                    'province_id' => 4,
                    'name' => 'Níjar',
                ],
            343 =>
                [
                    'id' => 344,
                    'province_id' => 4,
                    'name' => 'Ohanes',
                ],
            344 =>
                [
                    'id' => 345,
                    'province_id' => 4,
                    'name' => 'Olula de Castro',
                ],
            345 =>
                [
                    'id' => 346,
                    'province_id' => 4,
                    'name' => 'Olula del Río',
                ],
            346 =>
                [
                    'id' => 347,
                    'province_id' => 4,
                    'name' => 'Oria',
                ],
            347 =>
                [
                    'id' => 348,
                    'province_id' => 4,
                    'name' => 'Padules',
                ],
            348 =>
                [
                    'id' => 349,
                    'province_id' => 4,
                    'name' => 'Partaloa',
                ],
            349 =>
                [
                    'id' => 350,
                    'province_id' => 4,
                    'name' => 'Paterna del Río',
                ],
            350 =>
                [
                    'id' => 351,
                    'province_id' => 4,
                    'name' => 'Pechina',
                ],
            351 =>
                [
                    'id' => 352,
                    'province_id' => 4,
                    'name' => 'Pulpí',
                ],
            352 =>
                [
                    'id' => 353,
                    'province_id' => 4,
                    'name' => 'Purchena',
                ],
            353 =>
                [
                    'id' => 354,
                    'province_id' => 4,
                    'name' => 'Rágol',
                ],
            354 =>
                [
                    'id' => 355,
                    'province_id' => 4,
                    'name' => 'Rioja',
                ],
            355 =>
                [
                    'id' => 356,
                    'province_id' => 4,
                    'name' => 'Roquetas de Mar',
                ],
            356 =>
                [
                    'id' => 357,
                    'province_id' => 4,
                    'name' => 'Santa Cruz de Marchena',
                ],
            357 =>
                [
                    'id' => 358,
                    'province_id' => 4,
                    'name' => 'Santa Fe de Mondújar',
                ],
            358 =>
                [
                    'id' => 359,
                    'province_id' => 4,
                    'name' => 'Senés',
                ],
            359 =>
                [
                    'id' => 360,
                    'province_id' => 4,
                    'name' => 'Serón',
                ],
            360 =>
                [
                    'id' => 361,
                    'province_id' => 4,
                    'name' => 'Sierro',
                ],
            361 =>
                [
                    'id' => 362,
                    'province_id' => 4,
                    'name' => 'Somontín',
                ],
            362 =>
                [
                    'id' => 363,
                    'province_id' => 4,
                    'name' => 'Sorbas',
                ],
            363 =>
                [
                    'id' => 364,
                    'province_id' => 4,
                    'name' => 'Suflí',
                ],
            364 =>
                [
                    'id' => 365,
                    'province_id' => 4,
                    'name' => 'Tabernas',
                ],
            365 =>
                [
                    'id' => 366,
                    'province_id' => 4,
                    'name' => 'Taberno',
                ],
            366 =>
                [
                    'id' => 367,
                    'province_id' => 4,
                    'name' => 'Tahal',
                ],
            367 =>
                [
                    'id' => 368,
                    'province_id' => 4,
                    'name' => 'Terque',
                ],
            368 =>
                [
                    'id' => 369,
                    'province_id' => 4,
                    'name' => 'Tíjola',
                ],
            369 =>
                [
                    'id' => 370,
                    'province_id' => 4,
                    'name' => 'Tres Villas, Las',
                ],
            370 =>
                [
                    'id' => 371,
                    'province_id' => 4,
                    'name' => 'Turre',
                ],
            371 =>
                [
                    'id' => 372,
                    'province_id' => 4,
                    'name' => 'Turrillas',
                ],
            372 =>
                [
                    'id' => 373,
                    'province_id' => 4,
                    'name' => 'Uleila del Campo',
                ],
            373 =>
                [
                    'id' => 374,
                    'province_id' => 4,
                    'name' => 'Urrácal',
                ],
            374 =>
                [
                    'id' => 375,
                    'province_id' => 4,
                    'name' => 'Velefique',
                ],
            375 =>
                [
                    'id' => 376,
                    'province_id' => 4,
                    'name' => 'Vélez-Blanco',
                ],
            376 =>
                [
                    'id' => 377,
                    'province_id' => 4,
                    'name' => 'Vélez-Rubio',
                ],
            377 =>
                [
                    'id' => 378,
                    'province_id' => 4,
                    'name' => 'Vera',
                ],
            378 =>
                [
                    'id' => 379,
                    'province_id' => 4,
                    'name' => 'Viator',
                ],
            379 =>
                [
                    'id' => 380,
                    'province_id' => 4,
                    'name' => 'Vícar',
                ],
            380 =>
                [
                    'id' => 381,
                    'province_id' => 4,
                    'name' => 'Zurgena',
                ],
            381 =>
                [
                    'id' => 382,
                    'province_id' => 5,
                    'name' => 'Adanero',
                ],
            382 =>
                [
                    'id' => 383,
                    'province_id' => 5,
                    'name' => 'Adrada, La',
                ],
            383 =>
                [
                    'id' => 384,
                    'province_id' => 5,
                    'name' => 'Albornos',
                ],
            384 =>
                [
                    'id' => 385,
                    'province_id' => 5,
                    'name' => 'Aldeanueva de Santa Cruz',
                ],
            385 =>
                [
                    'id' => 386,
                    'province_id' => 5,
                    'name' => 'Aldeaseca',
                ],
            386 =>
                [
                    'id' => 387,
                    'province_id' => 5,
                    'name' => 'Aldehuela, La',
                ],
            387 =>
                [
                    'id' => 388,
                    'province_id' => 5,
                    'name' => 'Amavida',
                ],
            388 =>
                [
                    'id' => 389,
                    'province_id' => 5,
                    'name' => 'Arenal, El',
                ],
            389 =>
                [
                    'id' => 390,
                    'province_id' => 5,
                    'name' => 'Arenas de San Pedro',
                ],
            390 =>
                [
                    'id' => 391,
                    'province_id' => 5,
                    'name' => 'Arevalillo',
                ],
            391 =>
                [
                    'id' => 392,
                    'province_id' => 5,
                    'name' => 'Arévalo',
                ],
            392 =>
                [
                    'id' => 393,
                    'province_id' => 5,
                    'name' => 'Aveinte',
                ],
            393 =>
                [
                    'id' => 394,
                    'province_id' => 5,
                    'name' => 'Avellaneda',
                ],
            394 =>
                [
                    'id' => 395,
                    'province_id' => 5,
                    'name' => 'Ávila',
                ],
            395 =>
                [
                    'id' => 396,
                    'province_id' => 5,
                    'name' => 'Barco de Ávila, El',
                ],
            396 =>
                [
                    'id' => 397,
                    'province_id' => 5,
                    'name' => 'Barraco, El',
                ],
            397 =>
                [
                    'id' => 398,
                    'province_id' => 5,
                    'name' => 'Barromán',
                ],
            398 =>
                [
                    'id' => 399,
                    'province_id' => 5,
                    'name' => 'Becedas',
                ],
            399 =>
                [
                    'id' => 400,
                    'province_id' => 5,
                    'name' => 'Becedillas',
                ],
            400 =>
                [
                    'id' => 401,
                    'province_id' => 5,
                    'name' => 'Bercial de Zapardiel',
                ],
            401 =>
                [
                    'id' => 402,
                    'province_id' => 5,
                    'name' => 'Berlanas, Las',
                ],
            402 =>
                [
                    'id' => 403,
                    'province_id' => 5,
                    'name' => 'Bernuy-Zapardiel',
                ],
            403 =>
                [
                    'id' => 404,
                    'province_id' => 5,
                    'name' => 'Berrocalejo de Aragona',
                ],
            404 =>
                [
                    'id' => 405,
                    'province_id' => 5,
                    'name' => 'Blascomillán',
                ],
            405 =>
                [
                    'id' => 406,
                    'province_id' => 5,
                    'name' => 'Blasconuño de Matacabras',
                ],
            406 =>
                [
                    'id' => 407,
                    'province_id' => 5,
                    'name' => 'Blascosancho',
                ],
            407 =>
                [
                    'id' => 408,
                    'province_id' => 5,
                    'name' => 'Bohodón, El',
                ],
            408 =>
                [
                    'id' => 409,
                    'province_id' => 5,
                    'name' => 'Bohoyo',
                ],
            409 =>
                [
                    'id' => 410,
                    'province_id' => 5,
                    'name' => 'Bonilla de la Sierra',
                ],
            410 =>
                [
                    'id' => 411,
                    'province_id' => 5,
                    'name' => 'Brabos',
                ],
            411 =>
                [
                    'id' => 412,
                    'province_id' => 5,
                    'name' => 'Bularros',
                ],
            412 =>
                [
                    'id' => 413,
                    'province_id' => 5,
                    'name' => 'Burgohondo',
                ],
            413 =>
                [
                    'id' => 414,
                    'province_id' => 5,
                    'name' => 'Cabezas de Alambre',
                ],
            414 =>
                [
                    'id' => 415,
                    'province_id' => 5,
                    'name' => 'Cabezas del Pozo',
                ],
            415 =>
                [
                    'id' => 416,
                    'province_id' => 5,
                    'name' => 'Cabezas del Villar',
                ],
            416 =>
                [
                    'id' => 417,
                    'province_id' => 5,
                    'name' => 'Cabizuela',
                ],
            417 =>
                [
                    'id' => 418,
                    'province_id' => 5,
                    'name' => 'Canales',
                ],
            418 =>
                [
                    'id' => 419,
                    'province_id' => 5,
                    'name' => 'Candeleda',
                ],
            419 =>
                [
                    'id' => 420,
                    'province_id' => 5,
                    'name' => 'Cantiveros',
                ],
            420 =>
                [
                    'id' => 421,
                    'province_id' => 5,
                    'name' => 'Cardeñosa',
                ],
            421 =>
                [
                    'id' => 422,
                    'province_id' => 5,
                    'name' => 'Carrera, La',
                ],
            422 =>
                [
                    'id' => 423,
                    'province_id' => 5,
                    'name' => 'Casas del Puerto',
                ],
            423 =>
                [
                    'id' => 424,
                    'province_id' => 5,
                    'name' => 'Casasola',
                ],
            424 =>
                [
                    'id' => 425,
                    'province_id' => 5,
                    'name' => 'Casavieja',
                ],
            425 =>
                [
                    'id' => 426,
                    'province_id' => 5,
                    'name' => 'Casillas',
                ],
            426 =>
                [
                    'id' => 427,
                    'province_id' => 5,
                    'name' => 'Castellanos de Zapardiel',
                ],
            427 =>
                [
                    'id' => 428,
                    'province_id' => 5,
                    'name' => 'Cebreros',
                ],
            428 =>
                [
                    'id' => 429,
                    'province_id' => 5,
                    'name' => 'Cepeda la Mora',
                ],
            429 =>
                [
                    'id' => 430,
                    'province_id' => 5,
                    'name' => 'Chamartín',
                ],
            430 =>
                [
                    'id' => 431,
                    'province_id' => 5,
                    'name' => 'Cillán',
                ],
            431 =>
                [
                    'id' => 432,
                    'province_id' => 5,
                    'name' => 'Cisla',
                ],
            432 =>
                [
                    'id' => 433,
                    'province_id' => 5,
                    'name' => 'Colilla, La',
                ],
            433 =>
                [
                    'id' => 434,
                    'province_id' => 5,
                    'name' => 'Collado de Contreras',
                ],
            434 =>
                [
                    'id' => 435,
                    'province_id' => 5,
                    'name' => 'Collado del Mirón',
                ],
            435 =>
                [
                    'id' => 436,
                    'province_id' => 5,
                    'name' => 'Constanzana',
                ],
            436 =>
                [
                    'id' => 437,
                    'province_id' => 5,
                    'name' => 'Crespos',
                ],
            437 =>
                [
                    'id' => 438,
                    'province_id' => 5,
                    'name' => 'Cuevas del Valle',
                ],
            438 =>
                [
                    'id' => 439,
                    'province_id' => 5,
                    'name' => 'Diego del Carpio',
                ],
            439 =>
                [
                    'id' => 440,
                    'province_id' => 5,
                    'name' => 'Donjimeno',
                ],
            440 =>
                [
                    'id' => 441,
                    'province_id' => 5,
                    'name' => 'Donvidas',
                ],
            441 =>
                [
                    'id' => 442,
                    'province_id' => 5,
                    'name' => 'Espinosa de los Caballeros',
                ],
            442 =>
                [
                    'id' => 443,
                    'province_id' => 5,
                    'name' => 'Flores de Ávila',
                ],
            443 =>
                [
                    'id' => 444,
                    'province_id' => 5,
                    'name' => 'Fontiveros',
                ],
            444 =>
                [
                    'id' => 445,
                    'province_id' => 5,
                    'name' => 'Fresnedilla',
                ],
            445 =>
                [
                    'id' => 446,
                    'province_id' => 5,
                    'name' => 'Fresno, El',
                ],
            446 =>
                [
                    'id' => 447,
                    'province_id' => 5,
                    'name' => 'Fuente el Saúz',
                ],
            447 =>
                [
                    'id' => 448,
                    'province_id' => 5,
                    'name' => 'Fuentes de Año',
                ],
            448 =>
                [
                    'id' => 449,
                    'province_id' => 5,
                    'name' => 'Gallegos de Altamiros',
                ],
            449 =>
                [
                    'id' => 450,
                    'province_id' => 5,
                    'name' => 'Gallegos de Sobrinos',
                ],
            450 =>
                [
                    'id' => 451,
                    'province_id' => 5,
                    'name' => 'Garganta del Villar',
                ],
            451 =>
                [
                    'id' => 452,
                    'province_id' => 5,
                    'name' => 'Gavilanes',
                ],
            452 =>
                [
                    'id' => 453,
                    'province_id' => 5,
                    'name' => 'Gemuño',
                ],
            453 =>
                [
                    'id' => 454,
                    'province_id' => 5,
                    'name' => 'Gil García',
                ],
            454 =>
                [
                    'id' => 455,
                    'province_id' => 5,
                    'name' => 'Gilbuena',
                ],
            455 =>
                [
                    'id' => 456,
                    'province_id' => 5,
                    'name' => 'Gimialcón',
                ],
            456 =>
                [
                    'id' => 457,
                    'province_id' => 5,
                    'name' => 'Gotarrendura',
                ],
            457 =>
                [
                    'id' => 458,
                    'province_id' => 5,
                    'name' => 'Grandes y San Martín',
                ],
            458 =>
                [
                    'id' => 459,
                    'province_id' => 5,
                    'name' => 'Guisando',
                ],
            459 =>
                [
                    'id' => 460,
                    'province_id' => 5,
                    'name' => 'Gutierre-Muñoz',
                ],
            460 =>
                [
                    'id' => 461,
                    'province_id' => 5,
                    'name' => 'Hernansancho',
                ],
            461 =>
                [
                    'id' => 462,
                    'province_id' => 5,
                    'name' => 'Herradón de Pinares',
                ],
            462 =>
                [
                    'id' => 463,
                    'province_id' => 5,
                    'name' => 'Herreros de Suso',
                ],
            463 =>
                [
                    'id' => 464,
                    'province_id' => 5,
                    'name' => 'Higuera de las Dueñas',
                ],
            464 =>
                [
                    'id' => 465,
                    'province_id' => 5,
                    'name' => 'Hija de Dios, La',
                ],
            465 =>
                [
                    'id' => 466,
                    'province_id' => 5,
                    'name' => 'Horcajada, La',
                ],
            466 =>
                [
                    'id' => 467,
                    'province_id' => 5,
                    'name' => 'Horcajo de las Torres',
                ],
            467 =>
                [
                    'id' => 468,
                    'province_id' => 5,
                    'name' => 'Hornillo, El',
                ],
            468 =>
                [
                    'id' => 469,
                    'province_id' => 5,
                    'name' => 'Hoyo de Pinares, El',
                ],
            469 =>
                [
                    'id' => 470,
                    'province_id' => 5,
                    'name' => 'Hoyocasero',
                ],
            470 =>
                [
                    'id' => 471,
                    'province_id' => 5,
                    'name' => 'Hoyorredondo',
                ],
            471 =>
                [
                    'id' => 472,
                    'province_id' => 5,
                    'name' => 'Hoyos de Miguel Muñoz',
                ],
            472 =>
                [
                    'id' => 473,
                    'province_id' => 5,
                    'name' => 'Hoyos del Collado',
                ],
            473 =>
                [
                    'id' => 474,
                    'province_id' => 5,
                    'name' => 'Hoyos del Espino',
                ],
            474 =>
                [
                    'id' => 475,
                    'province_id' => 5,
                    'name' => 'Hurtumpascual',
                ],
            475 =>
                [
                    'id' => 476,
                    'province_id' => 5,
                    'name' => 'Junciana',
                ],
            476 =>
                [
                    'id' => 477,
                    'province_id' => 5,
                    'name' => 'Langa',
                ],
            477 =>
                [
                    'id' => 478,
                    'province_id' => 5,
                    'name' => 'Lanzahíta',
                ],
            478 =>
                [
                    'id' => 479,
                    'province_id' => 5,
                    'name' => 'Llanos de Tormes, Los',
                ],
            479 =>
                [
                    'id' => 480,
                    'province_id' => 5,
                    'name' => 'Losar del Barco, El',
                ],
            480 =>
                [
                    'id' => 481,
                    'province_id' => 5,
                    'name' => 'Madrigal de las Altas Torres',
                ],
            481 =>
                [
                    'id' => 482,
                    'province_id' => 5,
                    'name' => 'Maello',
                ],
            482 =>
                [
                    'id' => 483,
                    'province_id' => 5,
                    'name' => 'Malpartida de Corneja',
                ],
            483 =>
                [
                    'id' => 484,
                    'province_id' => 5,
                    'name' => 'Mamblas',
                ],
            484 =>
                [
                    'id' => 485,
                    'province_id' => 5,
                    'name' => 'Mancera de Arriba',
                ],
            485 =>
                [
                    'id' => 486,
                    'province_id' => 5,
                    'name' => 'Manjabálago',
                ],
            486 =>
                [
                    'id' => 487,
                    'province_id' => 5,
                    'name' => 'Marlín',
                ],
            487 =>
                [
                    'id' => 488,
                    'province_id' => 5,
                    'name' => 'Martiherrero',
                ],
            488 =>
                [
                    'id' => 489,
                    'province_id' => 5,
                    'name' => 'Martínez',
                ],
            489 =>
                [
                    'id' => 490,
                    'province_id' => 5,
                    'name' => 'Mediana de Voltoya',
                ],
            490 =>
                [
                    'id' => 491,
                    'province_id' => 5,
                    'name' => 'Medinilla',
                ],
            491 =>
                [
                    'id' => 492,
                    'province_id' => 5,
                    'name' => 'Mengamuñoz',
                ],
            492 =>
                [
                    'id' => 493,
                    'province_id' => 5,
                    'name' => 'Mesegar de Corneja',
                ],
            493 =>
                [
                    'id' => 494,
                    'province_id' => 5,
                    'name' => 'Mijares',
                ],
            494 =>
                [
                    'id' => 495,
                    'province_id' => 5,
                    'name' => 'Mingorría',
                ],
            495 =>
                [
                    'id' => 496,
                    'province_id' => 5,
                    'name' => 'Mirón, El',
                ],
            496 =>
                [
                    'id' => 497,
                    'province_id' => 5,
                    'name' => 'Mironcillo',
                ],
            497 =>
                [
                    'id' => 498,
                    'province_id' => 5,
                    'name' => 'Mirueña de los Infanzones',
                ],
            498 =>
                [
                    'id' => 499,
                    'province_id' => 5,
                    'name' => 'Mombeltrán',
                ],
            499 =>
                [
                    'id' => 500,
                    'province_id' => 5,
                    'name' => 'Monsalupe',
                ],
        ]);
        \DB::table('localities')->insert([
            0 =>
                [
                    'id' => 501,
                    'province_id' => 5,
                    'name' => 'Moraleja de Matacabras',
                ],
            1 =>
                [
                    'id' => 502,
                    'province_id' => 5,
                    'name' => 'Muñana',
                ],
            2 =>
                [
                    'id' => 503,
                    'province_id' => 5,
                    'name' => 'Muñico',
                ],
            3 =>
                [
                    'id' => 504,
                    'province_id' => 5,
                    'name' => 'Muñogalindo',
                ],
            4 =>
                [
                    'id' => 505,
                    'province_id' => 5,
                    'name' => 'Muñogrande',
                ],
            5 =>
                [
                    'id' => 506,
                    'province_id' => 5,
                    'name' => 'Muñomer del Peco',
                ],
            6 =>
                [
                    'id' => 507,
                    'province_id' => 5,
                    'name' => 'Muñopepe',
                ],
            7 =>
                [
                    'id' => 508,
                    'province_id' => 5,
                    'name' => 'Muñosancho',
                ],
            8 =>
                [
                    'id' => 509,
                    'province_id' => 5,
                    'name' => 'Muñotello',
                ],
            9 =>
                [
                    'id' => 510,
                    'province_id' => 5,
                    'name' => 'Narrillos del Álamo',
                ],
            10 =>
                [
                    'id' => 511,
                    'province_id' => 5,
                    'name' => 'Narrillos del Rebollar',
                ],
            11 =>
                [
                    'id' => 512,
                    'province_id' => 5,
                    'name' => 'Narros de Saldueña',
                ],
            12 =>
                [
                    'id' => 513,
                    'province_id' => 5,
                    'name' => 'Narros del Castillo',
                ],
            13 =>
                [
                    'id' => 514,
                    'province_id' => 5,
                    'name' => 'Narros del Puerto',
                ],
            14 =>
                [
                    'id' => 515,
                    'province_id' => 5,
                    'name' => 'Nava de Arévalo',
                ],
            15 =>
                [
                    'id' => 516,
                    'province_id' => 5,
                    'name' => 'Nava del Barco',
                ],
            16 =>
                [
                    'id' => 517,
                    'province_id' => 5,
                    'name' => 'Navacepedilla de Corneja',
                ],
            17 =>
                [
                    'id' => 518,
                    'province_id' => 5,
                    'name' => 'Navadijos',
                ],
            18 =>
                [
                    'id' => 519,
                    'province_id' => 5,
                    'name' => 'Navaescurial',
                ],
            19 =>
                [
                    'id' => 520,
                    'province_id' => 5,
                    'name' => 'Navahondilla',
                ],
            20 =>
                [
                    'id' => 521,
                    'province_id' => 5,
                    'name' => 'Navalacruz',
                ],
            21 =>
                [
                    'id' => 522,
                    'province_id' => 5,
                    'name' => 'Navalmoral',
                ],
            22 =>
                [
                    'id' => 523,
                    'province_id' => 5,
                    'name' => 'Navalonguilla',
                ],
            23 =>
                [
                    'id' => 524,
                    'province_id' => 5,
                    'name' => 'Navalosa',
                ],
            24 =>
                [
                    'id' => 525,
                    'province_id' => 5,
                    'name' => 'Navalperal de Pinares',
                ],
            25 =>
                [
                    'id' => 526,
                    'province_id' => 5,
                    'name' => 'Navalperal de Tormes',
                ],
            26 =>
                [
                    'id' => 527,
                    'province_id' => 5,
                    'name' => 'Navaluenga',
                ],
            27 =>
                [
                    'id' => 528,
                    'province_id' => 5,
                    'name' => 'Navaquesera',
                ],
            28 =>
                [
                    'id' => 529,
                    'province_id' => 5,
                    'name' => 'Navarredonda de Gredos',
                ],
            29 =>
                [
                    'id' => 530,
                    'province_id' => 5,
                    'name' => 'Navarredondilla',
                ],
            30 =>
                [
                    'id' => 531,
                    'province_id' => 5,
                    'name' => 'Navarrevisca',
                ],
            31 =>
                [
                    'id' => 532,
                    'province_id' => 5,
                    'name' => 'Navas del Marqués, Las',
                ],
            32 =>
                [
                    'id' => 533,
                    'province_id' => 5,
                    'name' => 'Navatalgordo',
                ],
            33 =>
                [
                    'id' => 534,
                    'province_id' => 5,
                    'name' => 'Navatejares',
                ],
            34 =>
                [
                    'id' => 535,
                    'province_id' => 5,
                    'name' => 'Neila de San Miguel',
                ],
            35 =>
                [
                    'id' => 536,
                    'province_id' => 5,
                    'name' => 'Niharra',
                ],
            36 =>
                [
                    'id' => 537,
                    'province_id' => 5,
                    'name' => 'Ojos-Albos',
                ],
            37 =>
                [
                    'id' => 538,
                    'province_id' => 5,
                    'name' => 'Orbita',
                ],
            38 =>
                [
                    'id' => 539,
                    'province_id' => 5,
                    'name' => 'Oso, El',
                ],
            39 =>
                [
                    'id' => 540,
                    'province_id' => 5,
                    'name' => 'Padiernos',
                ],
            40 =>
                [
                    'id' => 541,
                    'province_id' => 5,
                    'name' => 'Pajares de Adaja',
                ],
            41 =>
                [
                    'id' => 542,
                    'province_id' => 5,
                    'name' => 'Palacios de Goda',
                ],
            42 =>
                [
                    'id' => 543,
                    'province_id' => 5,
                    'name' => 'Papatrigo',
                ],
            43 =>
                [
                    'id' => 544,
                    'province_id' => 5,
                    'name' => 'Parral, El',
                ],
            44 =>
                [
                    'id' => 545,
                    'province_id' => 5,
                    'name' => 'Pascualcobo',
                ],
            45 =>
                [
                    'id' => 546,
                    'province_id' => 5,
                    'name' => 'Pedro Bernardo',
                ],
            46 =>
                [
                    'id' => 547,
                    'province_id' => 5,
                    'name' => 'Pedro-Rodríguez',
                ],
            47 =>
                [
                    'id' => 548,
                    'province_id' => 5,
                    'name' => 'Peguerinos',
                ],
            48 =>
                [
                    'id' => 549,
                    'province_id' => 5,
                    'name' => 'Peñalba de Ávila',
                ],
            49 =>
                [
                    'id' => 550,
                    'province_id' => 5,
                    'name' => 'Piedrahíta',
                ],
            50 =>
                [
                    'id' => 551,
                    'province_id' => 5,
                    'name' => 'Piedralaves',
                ],
            51 =>
                [
                    'id' => 552,
                    'province_id' => 5,
                    'name' => 'Poveda',
                ],
            52 =>
                [
                    'id' => 553,
                    'province_id' => 5,
                    'name' => 'Poyales del Hoyo',
                ],
            53 =>
                [
                    'id' => 554,
                    'province_id' => 5,
                    'name' => 'Pozanco',
                ],
            54 =>
                [
                    'id' => 555,
                    'province_id' => 5,
                    'name' => 'Pradosegar',
                ],
            55 =>
                [
                    'id' => 556,
                    'province_id' => 5,
                    'name' => 'Puerto Castilla',
                ],
            56 =>
                [
                    'id' => 557,
                    'province_id' => 5,
                    'name' => 'Rasueros',
                ],
            57 =>
                [
                    'id' => 558,
                    'province_id' => 5,
                    'name' => 'Riocabado',
                ],
            58 =>
                [
                    'id' => 559,
                    'province_id' => 5,
                    'name' => 'Riofrío',
                ],
            59 =>
                [
                    'id' => 560,
                    'province_id' => 5,
                    'name' => 'Rivilla de Barajas',
                ],
            60 =>
                [
                    'id' => 561,
                    'province_id' => 5,
                    'name' => 'Salobral',
                ],
            61 =>
                [
                    'id' => 562,
                    'province_id' => 5,
                    'name' => 'Salvadiós',
                ],
            62 =>
                [
                    'id' => 563,
                    'province_id' => 5,
                    'name' => 'San Bartolomé de Béjar',
                ],
            63 =>
                [
                    'id' => 564,
                    'province_id' => 5,
                    'name' => 'San Bartolomé de Corneja',
                ],
            64 =>
                [
                    'id' => 565,
                    'province_id' => 5,
                    'name' => 'San Bartolomé de Pinares',
                ],
            65 =>
                [
                    'id' => 566,
                    'province_id' => 5,
                    'name' => 'San Esteban de los Patos',
                ],
            66 =>
                [
                    'id' => 567,
                    'province_id' => 5,
                    'name' => 'San Esteban de Zapardiel',
                ],
            67 =>
                [
                    'id' => 568,
                    'province_id' => 5,
                    'name' => 'San Esteban del Valle',
                ],
            68 =>
                [
                    'id' => 569,
                    'province_id' => 5,
                    'name' => 'San García de Ingelmos',
                ],
            69 =>
                [
                    'id' => 570,
                    'province_id' => 5,
                    'name' => 'San Juan de Gredos',
                ],
            70 =>
                [
                    'id' => 571,
                    'province_id' => 5,
                    'name' => 'San Juan de la Encinilla',
                ],
            71 =>
                [
                    'id' => 572,
                    'province_id' => 5,
                    'name' => 'San Juan de la Nava',
                ],
            72 =>
                [
                    'id' => 573,
                    'province_id' => 5,
                    'name' => 'San Juan del Molinillo',
                ],
            73 =>
                [
                    'id' => 574,
                    'province_id' => 5,
                    'name' => 'San Juan del Olmo',
                ],
            74 =>
                [
                    'id' => 575,
                    'province_id' => 5,
                    'name' => 'San Lorenzo de Tormes',
                ],
            75 =>
                [
                    'id' => 576,
                    'province_id' => 5,
                    'name' => 'San Martín de la Vega del Alberche',
                ],
            76 =>
                [
                    'id' => 577,
                    'province_id' => 5,
                    'name' => 'San Martín del Pimpollar',
                ],
            77 =>
                [
                    'id' => 578,
                    'province_id' => 5,
                    'name' => 'San Miguel de Corneja',
                ],
            78 =>
                [
                    'id' => 579,
                    'province_id' => 5,
                    'name' => 'San Miguel de Serrezuela',
                ],
            79 =>
                [
                    'id' => 580,
                    'province_id' => 5,
                    'name' => 'San Pascual',
                ],
            80 =>
                [
                    'id' => 581,
                    'province_id' => 5,
                    'name' => 'San Pedro del Arroyo',
                ],
            81 =>
                [
                    'id' => 582,
                    'province_id' => 5,
                    'name' => 'San Vicente de Arévalo',
                ],
            82 =>
                [
                    'id' => 583,
                    'province_id' => 5,
                    'name' => 'Sanchidrián',
                ],
            83 =>
                [
                    'id' => 584,
                    'province_id' => 5,
                    'name' => 'Sanchorreja',
                ],
            84 =>
                [
                    'id' => 585,
                    'province_id' => 5,
                    'name' => 'Santa Cruz de Pinares',
                ],
            85 =>
                [
                    'id' => 586,
                    'province_id' => 5,
                    'name' => 'Santa Cruz del Valle',
                ],
            86 =>
                [
                    'id' => 587,
                    'province_id' => 5,
                    'name' => 'Santa María de los Caballeros',
                ],
            87 =>
                [
                    'id' => 588,
                    'province_id' => 5,
                    'name' => 'Santa María del Arroyo',
                ],
            88 =>
                [
                    'id' => 589,
                    'province_id' => 5,
                    'name' => 'Santa María del Berrocal',
                ],
            89 =>
                [
                    'id' => 590,
                    'province_id' => 5,
                    'name' => 'Santa María del Cubillo',
                ],
            90 =>
                [
                    'id' => 591,
                    'province_id' => 5,
                    'name' => 'Santa María del Tiétar',
                ],
            91 =>
                [
                    'id' => 592,
                    'province_id' => 5,
                    'name' => 'Santiago del Collado',
                ],
            92 =>
                [
                    'id' => 593,
                    'province_id' => 5,
                    'name' => 'Santiago del Tormes',
                ],
            93 =>
                [
                    'id' => 594,
                    'province_id' => 5,
                    'name' => 'Santo Domingo de las Posadas',
                ],
            94 =>
                [
                    'id' => 595,
                    'province_id' => 5,
                    'name' => 'Santo Tomé de Zabarcos',
                ],
            95 =>
                [
                    'id' => 596,
                    'province_id' => 5,
                    'name' => 'Serrada, La',
                ],
            96 =>
                [
                    'id' => 597,
                    'province_id' => 5,
                    'name' => 'Serranillos',
                ],
            97 =>
                [
                    'id' => 598,
                    'province_id' => 5,
                    'name' => 'Sigeres',
                ],
            98 =>
                [
                    'id' => 599,
                    'province_id' => 5,
                    'name' => 'Sinlabajos',
                ],
            99 =>
                [
                    'id' => 600,
                    'province_id' => 5,
                    'name' => 'Solana de Ávila',
                ],
            100 =>
                [
                    'id' => 601,
                    'province_id' => 5,
                    'name' => 'Solana de Rioalmar',
                ],
            101 =>
                [
                    'id' => 602,
                    'province_id' => 5,
                    'name' => 'Solosancho',
                ],
            102 =>
                [
                    'id' => 603,
                    'province_id' => 5,
                    'name' => 'Sotalbo',
                ],
            103 =>
                [
                    'id' => 604,
                    'province_id' => 5,
                    'name' => 'Sotillo de la Adrada',
                ],
            104 =>
                [
                    'id' => 605,
                    'province_id' => 5,
                    'name' => 'Tiemblo, El',
                ],
            105 =>
                [
                    'id' => 606,
                    'province_id' => 5,
                    'name' => 'Tiñosillos',
                ],
            106 =>
                [
                    'id' => 607,
                    'province_id' => 5,
                    'name' => 'Tolbaños',
                ],
            107 =>
                [
                    'id' => 608,
                    'province_id' => 5,
                    'name' => 'Tormellas',
                ],
            108 =>
                [
                    'id' => 609,
                    'province_id' => 5,
                    'name' => 'Tornadizos de Ávila',
                ],
            109 =>
                [
                    'id' => 610,
                    'province_id' => 5,
                    'name' => 'Torre, La',
                ],
            110 =>
                [
                    'id' => 611,
                    'province_id' => 5,
                    'name' => 'Tórtoles',
                ],
            111 =>
                [
                    'id' => 612,
                    'province_id' => 5,
                    'name' => 'Umbrías',
                ],
            112 =>
                [
                    'id' => 613,
                    'province_id' => 5,
                    'name' => 'Vadillo de la Sierra',
                ],
            113 =>
                [
                    'id' => 614,
                    'province_id' => 5,
                    'name' => 'Valdecasa',
                ],
            114 =>
                [
                    'id' => 615,
                    'province_id' => 5,
                    'name' => 'Vega de Santa María',
                ],
            115 =>
                [
                    'id' => 616,
                    'province_id' => 5,
                    'name' => 'Velayos',
                ],
            116 =>
                [
                    'id' => 617,
                    'province_id' => 5,
                    'name' => 'Villaflor',
                ],
            117 =>
                [
                    'id' => 618,
                    'province_id' => 5,
                    'name' => 'Villafranca de la Sierra',
                ],
            118 =>
                [
                    'id' => 619,
                    'province_id' => 5,
                    'name' => 'Villanueva de Ávila',
                ],
            119 =>
                [
                    'id' => 620,
                    'province_id' => 5,
                    'name' => 'Villanueva de Gómez',
                ],
            120 =>
                [
                    'id' => 621,
                    'province_id' => 5,
                    'name' => 'Villanueva del Aceral',
                ],
            121 =>
                [
                    'id' => 622,
                    'province_id' => 5,
                    'name' => 'Villanueva del Campillo',
                ],
            122 =>
                [
                    'id' => 623,
                    'province_id' => 5,
                    'name' => 'Villar de Corneja',
                ],
            123 =>
                [
                    'id' => 624,
                    'province_id' => 5,
                    'name' => 'Villarejo del Valle',
                ],
            124 =>
                [
                    'id' => 625,
                    'province_id' => 5,
                    'name' => 'Villatoro',
                ],
            125 =>
                [
                    'id' => 626,
                    'province_id' => 5,
                    'name' => 'Viñegra de Moraña',
                ],
            126 =>
                [
                    'id' => 627,
                    'province_id' => 5,
                    'name' => 'Vita',
                ],
            127 =>
                [
                    'id' => 628,
                    'province_id' => 5,
                    'name' => 'Zapardiel de la Cañada',
                ],
            128 =>
                [
                    'id' => 629,
                    'province_id' => 5,
                    'name' => 'Zapardiel de la Ribera',
                ],
            129 =>
                [
                    'id' => 630,
                    'province_id' => 6,
                    'name' => 'Acedera',
                ],
            130 =>
                [
                    'id' => 631,
                    'province_id' => 6,
                    'name' => 'Aceuchal',
                ],
            131 =>
                [
                    'id' => 632,
                    'province_id' => 6,
                    'name' => 'Ahillones',
                ],
            132 =>
                [
                    'id' => 633,
                    'province_id' => 6,
                    'name' => 'Alange',
                ],
            133 =>
                [
                    'id' => 634,
                    'province_id' => 6,
                    'name' => 'Albuera, La',
                ],
            134 =>
                [
                    'id' => 635,
                    'province_id' => 6,
                    'name' => 'Alburquerque',
                ],
            135 =>
                [
                    'id' => 636,
                    'province_id' => 6,
                    'name' => 'Alconchel',
                ],
            136 =>
                [
                    'id' => 637,
                    'province_id' => 6,
                    'name' => 'Alconera',
                ],
            137 =>
                [
                    'id' => 638,
                    'province_id' => 6,
                    'name' => 'Aljucén',
                ],
            138 =>
                [
                    'id' => 639,
                    'province_id' => 6,
                    'name' => 'Almendral',
                ],
            139 =>
                [
                    'id' => 640,
                    'province_id' => 6,
                    'name' => 'Almendralejo',
                ],
            140 =>
                [
                    'id' => 641,
                    'province_id' => 6,
                    'name' => 'Arroyo de San Serván',
                ],
            141 =>
                [
                    'id' => 642,
                    'province_id' => 6,
                    'name' => 'Atalaya',
                ],
            142 =>
                [
                    'id' => 643,
                    'province_id' => 6,
                    'name' => 'Azuaga',
                ],
            143 =>
                [
                    'id' => 644,
                    'province_id' => 6,
                    'name' => 'Badajoz',
                ],
            144 =>
                [
                    'id' => 645,
                    'province_id' => 6,
                    'name' => 'Barcarrota',
                ],
            145 =>
                [
                    'id' => 646,
                    'province_id' => 6,
                    'name' => 'Baterno',
                ],
            146 =>
                [
                    'id' => 647,
                    'province_id' => 6,
                    'name' => 'Benquerencia de la Serena',
                ],
            147 =>
                [
                    'id' => 648,
                    'province_id' => 6,
                    'name' => 'Berlanga',
                ],
            148 =>
                [
                    'id' => 649,
                    'province_id' => 6,
                    'name' => 'Bienvenida',
                ],
            149 =>
                [
                    'id' => 650,
                    'province_id' => 6,
                    'name' => 'Bodonal de la Sierra',
                ],
            150 =>
                [
                    'id' => 651,
                    'province_id' => 6,
                    'name' => 'Burguillos del Cerro',
                ],
            151 =>
                [
                    'id' => 652,
                    'province_id' => 6,
                    'name' => 'Cabeza del Buey',
                ],
            152 =>
                [
                    'id' => 653,
                    'province_id' => 6,
                    'name' => 'Cabeza la Vaca',
                ],
            153 =>
                [
                    'id' => 654,
                    'province_id' => 6,
                    'name' => 'Calamonte',
                ],
            154 =>
                [
                    'id' => 655,
                    'province_id' => 6,
                    'name' => 'Calera de León',
                ],
            155 =>
                [
                    'id' => 656,
                    'province_id' => 6,
                    'name' => 'Calzadilla de los Barros',
                ],
            156 =>
                [
                    'id' => 657,
                    'province_id' => 6,
                    'name' => 'Campanario',
                ],
            157 =>
                [
                    'id' => 658,
                    'province_id' => 6,
                    'name' => 'Campillo de Llerena',
                ],
            158 =>
                [
                    'id' => 659,
                    'province_id' => 6,
                    'name' => 'Capilla',
                ],
            159 =>
                [
                    'id' => 660,
                    'province_id' => 6,
                    'name' => 'Carmonita',
                ],
            160 =>
                [
                    'id' => 661,
                    'province_id' => 6,
                    'name' => 'Carrascalejo, El',
                ],
            161 =>
                [
                    'id' => 662,
                    'province_id' => 6,
                    'name' => 'Casas de Don Pedro',
                ],
            162 =>
                [
                    'id' => 663,
                    'province_id' => 6,
                    'name' => 'Casas de Reina',
                ],
            163 =>
                [
                    'id' => 664,
                    'province_id' => 6,
                    'name' => 'Castilblanco',
                ],
            164 =>
                [
                    'id' => 665,
                    'province_id' => 6,
                    'name' => 'Castuera',
                ],
            165 =>
                [
                    'id' => 666,
                    'province_id' => 6,
                    'name' => 'Cheles',
                ],
            166 =>
                [
                    'id' => 667,
                    'province_id' => 6,
                    'name' => 'Codosera, La',
                ],
            167 =>
                [
                    'id' => 668,
                    'province_id' => 6,
                    'name' => 'Cordobilla de Lácara',
                ],
            168 =>
                [
                    'id' => 669,
                    'province_id' => 6,
                    'name' => 'Coronada, La',
                ],
            169 =>
                [
                    'id' => 670,
                    'province_id' => 6,
                    'name' => 'Corte de Peleas',
                ],
            170 =>
                [
                    'id' => 671,
                    'province_id' => 6,
                    'name' => 'Cristina',
                ],
            171 =>
                [
                    'id' => 672,
                    'province_id' => 6,
                    'name' => 'Don Álvaro',
                ],
            172 =>
                [
                    'id' => 673,
                    'province_id' => 6,
                    'name' => 'Don Benito',
                ],
            173 =>
                [
                    'id' => 674,
                    'province_id' => 6,
                    'name' => 'Entrín Bajo',
                ],
            174 =>
                [
                    'id' => 675,
                    'province_id' => 6,
                    'name' => 'Esparragalejo',
                ],
            175 =>
                [
                    'id' => 676,
                    'province_id' => 6,
                    'name' => 'Esparragosa de la Serena',
                ],
            176 =>
                [
                    'id' => 677,
                    'province_id' => 6,
                    'name' => 'Esparragosa de Lares',
                ],
            177 =>
                [
                    'id' => 678,
                    'province_id' => 6,
                    'name' => 'Feria',
                ],
            178 =>
                [
                    'id' => 679,
                    'province_id' => 6,
                    'name' => 'Fregenal de la Sierra',
                ],
            179 =>
                [
                    'id' => 680,
                    'province_id' => 6,
                    'name' => 'Fuenlabrada de los Montes',
                ],
            180 =>
                [
                    'id' => 681,
                    'province_id' => 6,
                    'name' => 'Fuente de Cantos',
                ],
            181 =>
                [
                    'id' => 682,
                    'province_id' => 6,
                    'name' => 'Fuente del Arco',
                ],
            182 =>
                [
                    'id' => 683,
                    'province_id' => 6,
                    'name' => 'Fuente del Maestre',
                ],
            183 =>
                [
                    'id' => 684,
                    'province_id' => 6,
                    'name' => 'Fuentes de León',
                ],
            184 =>
                [
                    'id' => 685,
                    'province_id' => 6,
                    'name' => 'Garbayuela',
                ],
            185 =>
                [
                    'id' => 686,
                    'province_id' => 6,
                    'name' => 'Garlitos',
                ],
            186 =>
                [
                    'id' => 687,
                    'province_id' => 6,
                    'name' => 'Garrovilla, La',
                ],
            187 =>
                [
                    'id' => 688,
                    'province_id' => 6,
                    'name' => 'Granja de Torrehermosa',
                ],
            188 =>
                [
                    'id' => 689,
                    'province_id' => 6,
                    'name' => 'Guareña',
                ],
            189 =>
                [
                    'id' => 690,
                    'province_id' => 6,
                    'name' => 'Haba, La',
                ],
            190 =>
                [
                    'id' => 691,
                    'province_id' => 6,
                    'name' => 'Helechosa de los Montes',
                ],
            191 =>
                [
                    'id' => 692,
                    'province_id' => 6,
                    'name' => 'Herrera del Duque',
                ],
            192 =>
                [
                    'id' => 693,
                    'province_id' => 6,
                    'name' => 'Higuera de la Serena',
                ],
            193 =>
                [
                    'id' => 694,
                    'province_id' => 6,
                    'name' => 'Higuera de Llerena',
                ],
            194 =>
                [
                    'id' => 695,
                    'province_id' => 6,
                    'name' => 'Higuera de Vargas',
                ],
            195 =>
                [
                    'id' => 696,
                    'province_id' => 6,
                    'name' => 'Higuera la Real',
                ],
            196 =>
                [
                    'id' => 697,
                    'province_id' => 6,
                    'name' => 'Hinojosa del Valle',
                ],
            197 =>
                [
                    'id' => 698,
                    'province_id' => 6,
                    'name' => 'Hornachos',
                ],
            198 =>
                [
                    'id' => 699,
                    'province_id' => 6,
                    'name' => 'Jerez de los Caballeros',
                ],
            199 =>
                [
                    'id' => 700,
                    'province_id' => 6,
                    'name' => 'Lapa, La',
                ],
            200 =>
                [
                    'id' => 701,
                    'province_id' => 6,
                    'name' => 'Llera',
                ],
            201 =>
                [
                    'id' => 702,
                    'province_id' => 6,
                    'name' => 'Llerena',
                ],
            202 =>
                [
                    'id' => 703,
                    'province_id' => 6,
                    'name' => 'Lobón',
                ],
            203 =>
                [
                    'id' => 704,
                    'province_id' => 6,
                    'name' => 'Magacela',
                ],
            204 =>
                [
                    'id' => 705,
                    'province_id' => 6,
                    'name' => 'Maguilla',
                ],
            205 =>
                [
                    'id' => 706,
                    'province_id' => 6,
                    'name' => 'Malcocinado',
                ],
            206 =>
                [
                    'id' => 707,
                    'province_id' => 6,
                    'name' => 'Malpartida de la Serena',
                ],
            207 =>
                [
                    'id' => 708,
                    'province_id' => 6,
                    'name' => 'Manchita',
                ],
            208 =>
                [
                    'id' => 709,
                    'province_id' => 6,
                    'name' => 'Medellín',
                ],
            209 =>
                [
                    'id' => 710,
                    'province_id' => 6,
                    'name' => 'Medina de las Torres',
                ],
            210 =>
                [
                    'id' => 711,
                    'province_id' => 6,
                    'name' => 'Mengabril',
                ],
            211 =>
                [
                    'id' => 712,
                    'province_id' => 6,
                    'name' => 'Mérida',
                ],
            212 =>
                [
                    'id' => 713,
                    'province_id' => 6,
                    'name' => 'Mirandilla',
                ],
            213 =>
                [
                    'id' => 714,
                    'province_id' => 6,
                    'name' => 'Monesterio',
                ],
            214 =>
                [
                    'id' => 715,
                    'province_id' => 6,
                    'name' => 'Montemolín',
                ],
            215 =>
                [
                    'id' => 716,
                    'province_id' => 6,
                    'name' => 'Monterrubio de la Serena',
                ],
            216 =>
                [
                    'id' => 717,
                    'province_id' => 6,
                    'name' => 'Montijo',
                ],
            217 =>
                [
                    'id' => 718,
                    'province_id' => 6,
                    'name' => 'Morera, La',
                ],
            218 =>
                [
                    'id' => 719,
                    'province_id' => 6,
                    'name' => 'Nava de Santiago, La',
                ],
            219 =>
                [
                    'id' => 720,
                    'province_id' => 6,
                    'name' => 'Navalvillar de Pela',
                ],
            220 =>
                [
                    'id' => 721,
                    'province_id' => 6,
                    'name' => 'Nogales',
                ],
            221 =>
                [
                    'id' => 722,
                    'province_id' => 6,
                    'name' => 'Oliva de la Frontera',
                ],
            222 =>
                [
                    'id' => 723,
                    'province_id' => 6,
                    'name' => 'Oliva de Mérida',
                ],
            223 =>
                [
                    'id' => 724,
                    'province_id' => 6,
                    'name' => 'Olivenza',
                ],
            224 =>
                [
                    'id' => 725,
                    'province_id' => 6,
                    'name' => 'Orellana de la Sierra',
                ],
            225 =>
                [
                    'id' => 726,
                    'province_id' => 6,
                    'name' => 'Orellana la Vieja',
                ],
            226 =>
                [
                    'id' => 727,
                    'province_id' => 6,
                    'name' => 'Palomas',
                ],
            227 =>
                [
                    'id' => 728,
                    'province_id' => 6,
                    'name' => 'Parra, La',
                ],
            228 =>
                [
                    'id' => 729,
                    'province_id' => 6,
                    'name' => 'Peñalsordo',
                ],
            229 =>
                [
                    'id' => 730,
                    'province_id' => 6,
                    'name' => 'Peraleda del Zaucejo',
                ],
            230 =>
                [
                    'id' => 731,
                    'province_id' => 6,
                    'name' => 'Puebla de Alcocer',
                ],
            231 =>
                [
                    'id' => 732,
                    'province_id' => 6,
                    'name' => 'Puebla de la Calzada',
                ],
            232 =>
                [
                    'id' => 733,
                    'province_id' => 6,
                    'name' => 'Puebla de la Reina',
                ],
            233 =>
                [
                    'id' => 734,
                    'province_id' => 6,
                    'name' => 'Puebla de Obando',
                ],
            234 =>
                [
                    'id' => 735,
                    'province_id' => 6,
                    'name' => 'Puebla de Sancho Pérez',
                ],
            235 =>
                [
                    'id' => 736,
                    'province_id' => 6,
                    'name' => 'Puebla del Maestre',
                ],
            236 =>
                [
                    'id' => 737,
                    'province_id' => 6,
                    'name' => 'Puebla del Prior',
                ],
            237 =>
                [
                    'id' => 738,
                    'province_id' => 6,
                    'name' => 'Pueblonuevo del Guadiana',
                ],
            238 =>
                [
                    'id' => 739,
                    'province_id' => 6,
                    'name' => 'Quintana de la Serena',
                ],
            239 =>
                [
                    'id' => 740,
                    'province_id' => 6,
                    'name' => 'Reina',
                ],
            240 =>
                [
                    'id' => 741,
                    'province_id' => 6,
                    'name' => 'Rena',
                ],
            241 =>
                [
                    'id' => 742,
                    'province_id' => 6,
                    'name' => 'Retamal de Llerena',
                ],
            242 =>
                [
                    'id' => 743,
                    'province_id' => 6,
                    'name' => 'Ribera del Fresno',
                ],
            243 =>
                [
                    'id' => 744,
                    'province_id' => 6,
                    'name' => 'Risco',
                ],
            244 =>
                [
                    'id' => 745,
                    'province_id' => 6,
                    'name' => 'Roca de la Sierra, La',
                ],
            245 =>
                [
                    'id' => 746,
                    'province_id' => 6,
                    'name' => 'Salvaleón',
                ],
            246 =>
                [
                    'id' => 747,
                    'province_id' => 6,
                    'name' => 'Salvatierra de los Barros',
                ],
            247 =>
                [
                    'id' => 748,
                    'province_id' => 6,
                    'name' => 'San Pedro de Mérida',
                ],
            248 =>
                [
                    'id' => 749,
                    'province_id' => 6,
                    'name' => 'San Vicente de Alcántara',
                ],
            249 =>
                [
                    'id' => 750,
                    'province_id' => 6,
                    'name' => 'Sancti-Spíritus',
                ],
            250 =>
                [
                    'id' => 751,
                    'province_id' => 6,
                    'name' => 'Santa Amalia',
                ],
            251 =>
                [
                    'id' => 752,
                    'province_id' => 6,
                    'name' => 'Santa Marta',
                ],
            252 =>
                [
                    'id' => 753,
                    'province_id' => 6,
                    'name' => 'Santos de Maimona, Los',
                ],
            253 =>
                [
                    'id' => 754,
                    'province_id' => 6,
                    'name' => 'Segura de León',
                ],
            254 =>
                [
                    'id' => 755,
                    'province_id' => 6,
                    'name' => 'Siruela',
                ],
            255 =>
                [
                    'id' => 756,
                    'province_id' => 6,
                    'name' => 'Solana de los Barros',
                ],
            256 =>
                [
                    'id' => 757,
                    'province_id' => 6,
                    'name' => 'Talarrubias',
                ],
            257 =>
                [
                    'id' => 758,
                    'province_id' => 6,
                    'name' => 'Talavera la Real',
                ],
            258 =>
                [
                    'id' => 759,
                    'province_id' => 6,
                    'name' => 'Táliga',
                ],
            259 =>
                [
                    'id' => 760,
                    'province_id' => 6,
                    'name' => 'Tamurejo',
                ],
            260 =>
                [
                    'id' => 761,
                    'province_id' => 6,
                    'name' => 'Torre de Miguel Sesmero',
                ],
            261 =>
                [
                    'id' => 762,
                    'province_id' => 6,
                    'name' => 'Torremayor',
                ],
            262 =>
                [
                    'id' => 763,
                    'province_id' => 6,
                    'name' => 'Torremejía',
                ],
            263 =>
                [
                    'id' => 764,
                    'province_id' => 6,
                    'name' => 'Trasierra',
                ],
            264 =>
                [
                    'id' => 765,
                    'province_id' => 6,
                    'name' => 'Trujillanos',
                ],
            265 =>
                [
                    'id' => 766,
                    'province_id' => 6,
                    'name' => 'Usagre',
                ],
            266 =>
                [
                    'id' => 767,
                    'province_id' => 6,
                    'name' => 'Valdecaballeros',
                ],
            267 =>
                [
                    'id' => 768,
                    'province_id' => 6,
                    'name' => 'Valdelacalzada',
                ],
            268 =>
                [
                    'id' => 769,
                    'province_id' => 6,
                    'name' => 'Valdetorres',
                ],
            269 =>
                [
                    'id' => 770,
                    'province_id' => 6,
                    'name' => 'Valencia de las Torres',
                ],
            270 =>
                [
                    'id' => 771,
                    'province_id' => 6,
                    'name' => 'Valencia del Mombuey',
                ],
            271 =>
                [
                    'id' => 772,
                    'province_id' => 6,
                    'name' => 'Valencia del Ventoso',
                ],
            272 =>
                [
                    'id' => 773,
                    'province_id' => 6,
                    'name' => 'Valle de la Serena',
                ],
            273 =>
                [
                    'id' => 774,
                    'province_id' => 6,
                    'name' => 'Valle de Matamoros',
                ],
            274 =>
                [
                    'id' => 775,
                    'province_id' => 6,
                    'name' => 'Valle de Santa Ana',
                ],
            275 =>
                [
                    'id' => 776,
                    'province_id' => 6,
                    'name' => 'Valverde de Burguillos',
                ],
            276 =>
                [
                    'id' => 777,
                    'province_id' => 6,
                    'name' => 'Valverde de Leganés',
                ],
            277 =>
                [
                    'id' => 778,
                    'province_id' => 6,
                    'name' => 'Valverde de Llerena',
                ],
            278 =>
                [
                    'id' => 779,
                    'province_id' => 6,
                    'name' => 'Valverde de Mérida',
                ],
            279 =>
                [
                    'id' => 780,
                    'province_id' => 6,
                    'name' => 'Villafranca de los Barros',
                ],
            280 =>
                [
                    'id' => 781,
                    'province_id' => 6,
                    'name' => 'Villagarcía de la Torre',
                ],
            281 =>
                [
                    'id' => 782,
                    'province_id' => 6,
                    'name' => 'Villagonzalo',
                ],
            282 =>
                [
                    'id' => 783,
                    'province_id' => 6,
                    'name' => 'Villalba de los Barros',
                ],
            283 =>
                [
                    'id' => 784,
                    'province_id' => 6,
                    'name' => 'Villanueva de la Serena',
                ],
            284 =>
                [
                    'id' => 785,
                    'province_id' => 6,
                    'name' => 'Villanueva del Fresno',
                ],
            285 =>
                [
                    'id' => 786,
                    'province_id' => 6,
                    'name' => 'Villar de Rena',
                ],
            286 =>
                [
                    'id' => 787,
                    'province_id' => 6,
                    'name' => 'Villar del Rey',
                ],
            287 =>
                [
                    'id' => 788,
                    'province_id' => 6,
                    'name' => 'Villarta de los Montes',
                ],
            288 =>
                [
                    'id' => 789,
                    'province_id' => 6,
                    'name' => 'Zafra',
                ],
            289 =>
                [
                    'id' => 790,
                    'province_id' => 6,
                    'name' => 'Zahínos',
                ],
            290 =>
                [
                    'id' => 791,
                    'province_id' => 6,
                    'name' => 'Zalamea de la Serena',
                ],
            291 =>
                [
                    'id' => 792,
                    'province_id' => 6,
                    'name' => 'Zarza, La',
                ],
            292 =>
                [
                    'id' => 793,
                    'province_id' => 6,
                    'name' => 'Zarza-Capilla',
                ],
            293 =>
                [
                    'id' => 794,
                    'province_id' => 7,
                    'name' => 'Alaior',
                ],
            294 =>
                [
                    'id' => 795,
                    'province_id' => 7,
                    'name' => 'Alaró',
                ],
            295 =>
                [
                    'id' => 796,
                    'province_id' => 7,
                    'name' => 'Alcúdia',
                ],
            296 =>
                [
                    'id' => 797,
                    'province_id' => 7,
                    'name' => 'Algaida',
                ],
            297 =>
                [
                    'id' => 798,
                    'province_id' => 7,
                    'name' => 'Andratx',
                ],
            298 =>
                [
                    'id' => 799,
                    'province_id' => 7,
                    'name' => 'Ariany',
                ],
            299 =>
                [
                    'id' => 800,
                    'province_id' => 7,
                    'name' => 'Artà',
                ],
            300 =>
                [
                    'id' => 801,
                    'province_id' => 7,
                    'name' => 'Banyalbufar',
                ],
            301 =>
                [
                    'id' => 802,
                    'province_id' => 7,
                    'name' => 'Binissalem',
                ],
            302 =>
                [
                    'id' => 803,
                    'province_id' => 7,
                    'name' => 'Búger',
                ],
            303 =>
                [
                    'id' => 804,
                    'province_id' => 7,
                    'name' => 'Bunyola',
                ],
            304 =>
                [
                    'id' => 805,
                    'province_id' => 7,
                    'name' => 'Calvià',
                ],
            305 =>
                [
                    'id' => 806,
                    'province_id' => 7,
                    'name' => 'Campanet',
                ],
            306 =>
                [
                    'id' => 807,
                    'province_id' => 7,
                    'name' => 'Campos',
                ],
            307 =>
                [
                    'id' => 808,
                    'province_id' => 7,
                    'name' => 'Capdepera',
                ],
            308 =>
                [
                    'id' => 809,
                    'province_id' => 7,
                    'name' => 'Castell, Es',
                ],
            309 =>
                [
                    'id' => 810,
                    'province_id' => 7,
                    'name' => 'Ciutadella de Menorca',
                ],
            310 =>
                [
                    'id' => 811,
                    'province_id' => 7,
                    'name' => 'Consell',
                ],
            311 =>
                [
                    'id' => 812,
                    'province_id' => 7,
                    'name' => 'Costitx',
                ],
            312 =>
                [
                    'id' => 813,
                    'province_id' => 7,
                    'name' => 'Deyá',
                ],
            313 =>
                [
                    'id' => 814,
                    'province_id' => 7,
                    'name' => 'Eivissa',
                ],
            314 =>
                [
                    'id' => 815,
                    'province_id' => 7,
                    'name' => 'Escorca',
                ],
            315 =>
                [
                    'id' => 816,
                    'province_id' => 7,
                    'name' => 'Esporles',
                ],
            316 =>
                [
                    'id' => 817,
                    'province_id' => 7,
                    'name' => 'Estellencs',
                ],
            317 =>
                [
                    'id' => 818,
                    'province_id' => 7,
                    'name' => 'Felanitx',
                ],
            318 =>
                [
                    'id' => 819,
                    'province_id' => 7,
                    'name' => 'Ferreries',
                ],
            319 =>
                [
                    'id' => 820,
                    'province_id' => 7,
                    'name' => 'Formentera',
                ],
            320 =>
                [
                    'id' => 821,
                    'province_id' => 7,
                    'name' => 'Fornalutx',
                ],
            321 =>
                [
                    'id' => 822,
                    'province_id' => 7,
                    'name' => 'Inca',
                ],
            322 =>
                [
                    'id' => 823,
                    'province_id' => 7,
                    'name' => 'Lloret de Vistalegre',
                ],
            323 =>
                [
                    'id' => 824,
                    'province_id' => 7,
                    'name' => 'Lloseta',
                ],
            324 =>
                [
                    'id' => 825,
                    'province_id' => 7,
                    'name' => 'Llubí',
                ],
            325 =>
                [
                    'id' => 826,
                    'province_id' => 7,
                    'name' => 'Llucmajor',
                ],
            326 =>
                [
                    'id' => 827,
                    'province_id' => 7,
                    'name' => 'Manacor',
                ],
            327 =>
                [
                    'id' => 828,
                    'province_id' => 7,
                    'name' => 'Mancor de la Vall',
                ],
            328 =>
                [
                    'id' => 829,
                    'province_id' => 7,
                    'name' => 'Maó',
                ],
            329 =>
                [
                    'id' => 830,
                    'province_id' => 7,
                    'name' => 'Maria de la Salut',
                ],
            330 =>
                [
                    'id' => 831,
                    'province_id' => 7,
                    'name' => 'Marratxí',
                ],
            331 =>
                [
                    'id' => 832,
                    'province_id' => 7,
                    'name' => 'Mercadal, Es',
                ],
            332 =>
                [
                    'id' => 833,
                    'province_id' => 7,
                    'name' => 'Migjorn Gran, Es',
                ],
            333 =>
                [
                    'id' => 834,
                    'province_id' => 7,
                    'name' => 'Montuïri',
                ],
            334 =>
                [
                    'id' => 835,
                    'province_id' => 7,
                    'name' => 'Muro',
                ],
            335 =>
                [
                    'id' => 836,
                    'province_id' => 7,
                    'name' => 'Palma',
                ],
            336 =>
                [
                    'id' => 837,
                    'province_id' => 7,
                    'name' => 'Petra',
                ],
            337 =>
                [
                    'id' => 838,
                    'province_id' => 7,
                    'name' => 'Pobla, Sa',
                ],
            338 =>
                [
                    'id' => 839,
                    'province_id' => 7,
                    'name' => 'Pollença',
                ],
            339 =>
                [
                    'id' => 840,
                    'province_id' => 7,
                    'name' => 'Porreres',
                ],
            340 =>
                [
                    'id' => 841,
                    'province_id' => 7,
                    'name' => 'Puigpunyent',
                ],
            341 =>
                [
                    'id' => 842,
                    'province_id' => 7,
                    'name' => 'Salines, Ses',
                ],
            342 =>
                [
                    'id' => 843,
                    'province_id' => 7,
                    'name' => 'Sant Antoni de Portmany',
                ],
            343 =>
                [
                    'id' => 844,
                    'province_id' => 7,
                    'name' => 'Sant Joan',
                ],
            344 =>
                [
                    'id' => 845,
                    'province_id' => 7,
                    'name' => 'Sant Joan de Labritja',
                ],
            345 =>
                [
                    'id' => 846,
                    'province_id' => 7,
                    'name' => 'Sant Josep de sa Talaia',
                ],
            346 =>
                [
                    'id' => 847,
                    'province_id' => 7,
                    'name' => 'Sant Llorenç des Cardassar',
                ],
            347 =>
                [
                    'id' => 848,
                    'province_id' => 7,
                    'name' => 'Sant Lluís',
                ],
            348 =>
                [
                    'id' => 849,
                    'province_id' => 7,
                    'name' => 'Santa Eugènia',
                ],
            349 =>
                [
                    'id' => 850,
                    'province_id' => 7,
                    'name' => 'Santa Eulalia del Río',
                ],
            350 =>
                [
                    'id' => 851,
                    'province_id' => 7,
                    'name' => 'Santa Margalida',
                ],
            351 =>
                [
                    'id' => 852,
                    'province_id' => 7,
                    'name' => 'Santa María del Camí',
                ],
            352 =>
                [
                    'id' => 853,
                    'province_id' => 7,
                    'name' => 'Santanyí',
                ],
            353 =>
                [
                    'id' => 854,
                    'province_id' => 7,
                    'name' => 'Selva',
                ],
            354 =>
                [
                    'id' => 855,
                    'province_id' => 7,
                    'name' => 'Sencelles',
                ],
            355 =>
                [
                    'id' => 856,
                    'province_id' => 7,
                    'name' => 'Sineu',
                ],
            356 =>
                [
                    'id' => 857,
                    'province_id' => 7,
                    'name' => 'Sóller',
                ],
            357 =>
                [
                    'id' => 858,
                    'province_id' => 7,
                    'name' => 'Son Servera',
                ],
            358 =>
                [
                    'id' => 859,
                    'province_id' => 7,
                    'name' => 'Valldemossa',
                ],
            359 =>
                [
                    'id' => 860,
                    'province_id' => 7,
                    'name' => 'Vilafranca de Bonany',
                ],
            360 =>
                [
                    'id' => 861,
                    'province_id' => 8,
                    'name' => 'Abrera',
                ],
            361 =>
                [
                    'id' => 862,
                    'province_id' => 8,
                    'name' => 'Aguilar de Segarra',
                ],
            362 =>
                [
                    'id' => 863,
                    'province_id' => 8,
                    'name' => 'Aiguafreda',
                ],
            363 =>
                [
                    'id' => 864,
                    'province_id' => 8,
                    'name' => 'Alella',
                ],
            364 =>
                [
                    'id' => 865,
                    'province_id' => 8,
                    'name' => 'Alpens',
                ],
            365 =>
                [
                    'id' => 866,
                    'province_id' => 8,
                    'name' => 'Ametlla del Vallès, L\'',
                ],
            366 =>
                [
                    'id' => 867,
                    'province_id' => 8,
                    'name' => 'Arenys de Mar',
                ],
            367 =>
                [
                    'id' => 868,
                    'province_id' => 8,
                    'name' => 'Arenys de Munt',
                ],
            368 =>
                [
                    'id' => 869,
                    'province_id' => 8,
                    'name' => 'Argençola',
                ],
            369 =>
                [
                    'id' => 870,
                    'province_id' => 8,
                    'name' => 'Argentona',
                ],
            370 =>
                [
                    'id' => 871,
                    'province_id' => 8,
                    'name' => 'Artés',
                ],
            371 =>
                [
                    'id' => 872,
                    'province_id' => 8,
                    'name' => 'Avià',
                ],
            372 =>
                [
                    'id' => 873,
                    'province_id' => 8,
                    'name' => 'Avinyó',
                ],
            373 =>
                [
                    'id' => 874,
                    'province_id' => 8,
                    'name' => 'Avinyonet del Penedès',
                ],
            374 =>
                [
                    'id' => 875,
                    'province_id' => 8,
                    'name' => 'Badalona',
                ],
            375 =>
                [
                    'id' => 876,
                    'province_id' => 8,
                    'name' => 'Badia del Vallès',
                ],
            376 =>
                [
                    'id' => 877,
                    'province_id' => 8,
                    'name' => 'Bagà',
                ],
            377 =>
                [
                    'id' => 878,
                    'province_id' => 8,
                    'name' => 'Balenyà',
                ],
            378 =>
                [
                    'id' => 879,
                    'province_id' => 8,
                    'name' => 'Balsareny',
                ],
            379 =>
                [
                    'id' => 880,
                    'province_id' => 8,
                    'name' => 'Barberà del Vallès',
                ],
            380 =>
                [
                    'id' => 881,
                    'province_id' => 8,
                    'name' => 'Barcelona',
                ],
            381 =>
                [
                    'id' => 882,
                    'province_id' => 8,
                    'name' => 'Begues',
                ],
            382 =>
                [
                    'id' => 883,
                    'province_id' => 8,
                    'name' => 'Bellprat',
                ],
            383 =>
                [
                    'id' => 884,
                    'province_id' => 8,
                    'name' => 'Berga',
                ],
            384 =>
                [
                    'id' => 885,
                    'province_id' => 8,
                    'name' => 'Bigues i Riells',
                ],
            385 =>
                [
                    'id' => 886,
                    'province_id' => 8,
                    'name' => 'Borredà',
                ],
            386 =>
                [
                    'id' => 887,
                    'province_id' => 8,
                    'name' => 'Bruc, El',
                ],
            387 =>
                [
                    'id' => 888,
                    'province_id' => 8,
                    'name' => 'Brull, El',
                ],
            388 =>
                [
                    'id' => 889,
                    'province_id' => 8,
                    'name' => 'Cabanyes, Les',
                ],
            389 =>
                [
                    'id' => 890,
                    'province_id' => 8,
                    'name' => 'Cabrera d\'Anoia',
                ],
            390 =>
                [
                    'id' => 891,
                    'province_id' => 8,
                    'name' => 'Cabrera de Mar',
                ],
            391 =>
                [
                    'id' => 892,
                    'province_id' => 8,
                    'name' => 'Cabrils',
                ],
            392 =>
                [
                    'id' => 893,
                    'province_id' => 8,
                    'name' => 'Calaf',
                ],
            393 =>
                [
                    'id' => 894,
                    'province_id' => 8,
                    'name' => 'Calders',
                ],
            394 =>
                [
                    'id' => 895,
                    'province_id' => 8,
                    'name' => 'Caldes de Montbui',
                ],
            395 =>
                [
                    'id' => 896,
                    'province_id' => 8,
                    'name' => 'Caldes d\'Estrac',
                ],
            396 =>
                [
                    'id' => 897,
                    'province_id' => 8,
                    'name' => 'Calella',
                ],
            397 =>
                [
                    'id' => 898,
                    'province_id' => 8,
                    'name' => 'Calldetenes',
                ],
            398 =>
                [
                    'id' => 899,
                    'province_id' => 8,
                    'name' => 'Callús',
                ],
            399 =>
                [
                    'id' => 900,
                    'province_id' => 8,
                    'name' => 'Calonge de Segarra',
                ],
            400 =>
                [
                    'id' => 901,
                    'province_id' => 8,
                    'name' => 'Campins',
                ],
            401 =>
                [
                    'id' => 902,
                    'province_id' => 8,
                    'name' => 'Canet de Mar',
                ],
            402 =>
                [
                    'id' => 903,
                    'province_id' => 8,
                    'name' => 'Canovelles',
                ],
            403 =>
                [
                    'id' => 904,
                    'province_id' => 8,
                    'name' => 'Cànoves i Samalús',
                ],
            404 =>
                [
                    'id' => 905,
                    'province_id' => 8,
                    'name' => 'Canyelles',
                ],
            405 =>
                [
                    'id' => 906,
                    'province_id' => 8,
                    'name' => 'Capellades',
                ],
            406 =>
                [
                    'id' => 907,
                    'province_id' => 8,
                    'name' => 'Capolat',
                ],
            407 =>
                [
                    'id' => 908,
                    'province_id' => 8,
                    'name' => 'Cardedeu',
                ],
            408 =>
                [
                    'id' => 909,
                    'province_id' => 8,
                    'name' => 'Cardona',
                ],
            409 =>
                [
                    'id' => 910,
                    'province_id' => 8,
                    'name' => 'Carme',
                ],
            410 =>
                [
                    'id' => 911,
                    'province_id' => 8,
                    'name' => 'Casserres',
                ],
            411 =>
                [
                    'id' => 912,
                    'province_id' => 8,
                    'name' => 'Castell de l\'Areny',
                ],
            412 =>
                [
                    'id' => 913,
                    'province_id' => 8,
                    'name' => 'Castellar de n\'Hug',
                ],
            413 =>
                [
                    'id' => 914,
                    'province_id' => 8,
                    'name' => 'Castellar del Riu',
                ],
            414 =>
                [
                    'id' => 915,
                    'province_id' => 8,
                    'name' => 'Castellar del Vallès',
                ],
            415 =>
                [
                    'id' => 916,
                    'province_id' => 8,
                    'name' => 'Castellbell i el Vilar',
                ],
            416 =>
                [
                    'id' => 917,
                    'province_id' => 8,
                    'name' => 'Castellbisbal',
                ],
            417 =>
                [
                    'id' => 918,
                    'province_id' => 8,
                    'name' => 'Castellcir',
                ],
            418 =>
                [
                    'id' => 919,
                    'province_id' => 8,
                    'name' => 'Castelldefels',
                ],
            419 =>
                [
                    'id' => 920,
                    'province_id' => 8,
                    'name' => 'Castellet i la Gornal',
                ],
            420 =>
                [
                    'id' => 921,
                    'province_id' => 8,
                    'name' => 'Castellfollit de Riubregós',
                ],
            421 =>
                [
                    'id' => 922,
                    'province_id' => 8,
                    'name' => 'Castellfollit del Boix',
                ],
            422 =>
                [
                    'id' => 923,
                    'province_id' => 8,
                    'name' => 'Castellgalí',
                ],
            423 =>
                [
                    'id' => 924,
                    'province_id' => 8,
                    'name' => 'Castellnou de Bages',
                ],
            424 =>
                [
                    'id' => 925,
                    'province_id' => 8,
                    'name' => 'Castellolí',
                ],
            425 =>
                [
                    'id' => 926,
                    'province_id' => 8,
                    'name' => 'Castellterçol',
                ],
            426 =>
                [
                    'id' => 927,
                    'province_id' => 8,
                    'name' => 'Castellví de la Marca',
                ],
            427 =>
                [
                    'id' => 928,
                    'province_id' => 8,
                    'name' => 'Castellví de Rosanes',
                ],
            428 =>
                [
                    'id' => 929,
                    'province_id' => 8,
                    'name' => 'Centelles',
                ],
            429 =>
                [
                    'id' => 930,
                    'province_id' => 8,
                    'name' => 'Cercs',
                ],
            430 =>
                [
                    'id' => 931,
                    'province_id' => 8,
                    'name' => 'Cerdanyola del Vallès',
                ],
            431 =>
                [
                    'id' => 932,
                    'province_id' => 8,
                    'name' => 'Cervelló',
                ],
            432 =>
                [
                    'id' => 933,
                    'province_id' => 8,
                    'name' => 'Collbató',
                ],
            433 =>
                [
                    'id' => 934,
                    'province_id' => 8,
                    'name' => 'Collsuspina',
                ],
            434 =>
                [
                    'id' => 935,
                    'province_id' => 8,
                    'name' => 'Copons',
                ],
            435 =>
                [
                    'id' => 936,
                    'province_id' => 8,
                    'name' => 'Corbera de Llobregat',
                ],
            436 =>
                [
                    'id' => 937,
                    'province_id' => 8,
                    'name' => 'Cornellà de Llobregat',
                ],
            437 =>
                [
                    'id' => 938,
                    'province_id' => 8,
                    'name' => 'Cubelles',
                ],
            438 =>
                [
                    'id' => 939,
                    'province_id' => 8,
                    'name' => 'Dosrius',
                ],
            439 =>
                [
                    'id' => 940,
                    'province_id' => 8,
                    'name' => 'Esparreguera',
                ],
            440 =>
                [
                    'id' => 941,
                    'province_id' => 8,
                    'name' => 'Esplugues de Llobregat',
                ],
            441 =>
                [
                    'id' => 942,
                    'province_id' => 8,
                    'name' => 'Espunyola, L\'',
                ],
            442 =>
                [
                    'id' => 943,
                    'province_id' => 8,
                    'name' => 'Estany, L\'',
                ],
            443 =>
                [
                    'id' => 944,
                    'province_id' => 8,
                    'name' => 'Figaró-Montmany',
                ],
            444 =>
                [
                    'id' => 945,
                    'province_id' => 8,
                    'name' => 'Fígols',
                ],
            445 =>
                [
                    'id' => 946,
                    'province_id' => 8,
                    'name' => 'Fogars de la Selva',
                ],
            446 =>
                [
                    'id' => 947,
                    'province_id' => 8,
                    'name' => 'Fogars de Montclús',
                ],
            447 =>
                [
                    'id' => 948,
                    'province_id' => 8,
                    'name' => 'Folgueroles',
                ],
            448 =>
                [
                    'id' => 949,
                    'province_id' => 8,
                    'name' => 'Fonollosa',
                ],
            449 =>
                [
                    'id' => 950,
                    'province_id' => 8,
                    'name' => 'Font-rubí',
                ],
            450 =>
                [
                    'id' => 951,
                    'province_id' => 8,
                    'name' => 'Franqueses del Vallès, Les',
                ],
            451 =>
                [
                    'id' => 952,
                    'province_id' => 8,
                    'name' => 'Gaià',
                ],
            452 =>
                [
                    'id' => 953,
                    'province_id' => 8,
                    'name' => 'Gallifa',
                ],
            453 =>
                [
                    'id' => 954,
                    'province_id' => 8,
                    'name' => 'Garriga, La',
                ],
            454 =>
                [
                    'id' => 955,
                    'province_id' => 8,
                    'name' => 'Gavà',
                ],
            455 =>
                [
                    'id' => 956,
                    'province_id' => 8,
                    'name' => 'Gelida',
                ],
            456 =>
                [
                    'id' => 957,
                    'province_id' => 8,
                    'name' => 'Gironella',
                ],
            457 =>
                [
                    'id' => 958,
                    'province_id' => 8,
                    'name' => 'Gisclareny',
                ],
            458 =>
                [
                    'id' => 959,
                    'province_id' => 8,
                    'name' => 'Granada, La',
                ],
            459 =>
                [
                    'id' => 960,
                    'province_id' => 8,
                    'name' => 'Granera',
                ],
            460 =>
                [
                    'id' => 961,
                    'province_id' => 8,
                    'name' => 'Granollers',
                ],
            461 =>
                [
                    'id' => 962,
                    'province_id' => 8,
                    'name' => 'Gualba',
                ],
            462 =>
                [
                    'id' => 963,
                    'province_id' => 8,
                    'name' => 'Guardiola de Berguedà',
                ],
            463 =>
                [
                    'id' => 964,
                    'province_id' => 8,
                    'name' => 'Gurb',
                ],
            464 =>
                [
                    'id' => 965,
                    'province_id' => 8,
                    'name' => 'Hospitalet de Llobregat, L\'',
                ],
            465 =>
                [
                    'id' => 966,
                    'province_id' => 8,
                    'name' => 'Hostalets de Pierola, Els',
                ],
            466 =>
                [
                    'id' => 967,
                    'province_id' => 8,
                    'name' => 'Igualada',
                ],
            467 =>
                [
                    'id' => 968,
                    'province_id' => 8,
                    'name' => 'Jorba',
                ],
            468 =>
                [
                    'id' => 969,
                    'province_id' => 8,
                    'name' => 'Llacuna, La',
                ],
            469 =>
                [
                    'id' => 970,
                    'province_id' => 8,
                    'name' => 'Llagosta, La',
                ],
            470 =>
                [
                    'id' => 971,
                    'province_id' => 8,
                    'name' => 'Lliçà d\'Amunt',
                ],
            471 =>
                [
                    'id' => 972,
                    'province_id' => 8,
                    'name' => 'Lliçà de Vall',
                ],
            472 =>
                [
                    'id' => 973,
                    'province_id' => 8,
                    'name' => 'Llinars del Vallès',
                ],
            473 =>
                [
                    'id' => 974,
                    'province_id' => 8,
                    'name' => 'Lluçà',
                ],
            474 =>
                [
                    'id' => 975,
                    'province_id' => 8,
                    'name' => 'Malgrat de Mar',
                ],
            475 =>
                [
                    'id' => 976,
                    'province_id' => 8,
                    'name' => 'Malla',
                ],
            476 =>
                [
                    'id' => 977,
                    'province_id' => 8,
                    'name' => 'Manlleu',
                ],
            477 =>
                [
                    'id' => 978,
                    'province_id' => 8,
                    'name' => 'Manresa',
                ],
            478 =>
                [
                    'id' => 979,
                    'province_id' => 8,
                    'name' => 'Marganell',
                ],
            479 =>
                [
                    'id' => 980,
                    'province_id' => 8,
                    'name' => 'Martorell',
                ],
            480 =>
                [
                    'id' => 981,
                    'province_id' => 8,
                    'name' => 'Martorelles',
                ],
            481 =>
                [
                    'id' => 982,
                    'province_id' => 8,
                    'name' => 'Masies de Roda, Les',
                ],
            482 =>
                [
                    'id' => 983,
                    'province_id' => 8,
                    'name' => 'Masies de Voltregà, Les',
                ],
            483 =>
                [
                    'id' => 984,
                    'province_id' => 8,
                    'name' => 'Masnou, El',
                ],
            484 =>
                [
                    'id' => 985,
                    'province_id' => 8,
                    'name' => 'Masquefa',
                ],
            485 =>
                [
                    'id' => 986,
                    'province_id' => 8,
                    'name' => 'Matadepera',
                ],
            486 =>
                [
                    'id' => 987,
                    'province_id' => 8,
                    'name' => 'Mataró',
                ],
            487 =>
                [
                    'id' => 988,
                    'province_id' => 8,
                    'name' => 'Mediona',
                ],
            488 =>
                [
                    'id' => 989,
                    'province_id' => 8,
                    'name' => 'Moià',
                ],
            489 =>
                [
                    'id' => 990,
                    'province_id' => 8,
                    'name' => 'Molins de Rei',
                ],
            490 =>
                [
                    'id' => 991,
                    'province_id' => 8,
                    'name' => 'Mollet del Vallès',
                ],
            491 =>
                [
                    'id' => 992,
                    'province_id' => 8,
                    'name' => 'Monistrol de Calders',
                ],
            492 =>
                [
                    'id' => 993,
                    'province_id' => 8,
                    'name' => 'Monistrol de Montserrat',
                ],
            493 =>
                [
                    'id' => 994,
                    'province_id' => 8,
                    'name' => 'Montcada i Reixac',
                ],
            494 =>
                [
                    'id' => 995,
                    'province_id' => 8,
                    'name' => 'Montclar',
                ],
            495 =>
                [
                    'id' => 996,
                    'province_id' => 8,
                    'name' => 'Montesquiu',
                ],
            496 =>
                [
                    'id' => 997,
                    'province_id' => 8,
                    'name' => 'Montgat',
                ],
            497 =>
                [
                    'id' => 998,
                    'province_id' => 8,
                    'name' => 'Montmajor',
                ],
            498 =>
                [
                    'id' => 999,
                    'province_id' => 8,
                    'name' => 'Montmaneu',
                ],
            499 =>
                [
                    'id' => 1000,
                    'province_id' => 8,
                    'name' => 'Montmeló',
                ],
        ]);
        \DB::table('localities')->insert([
            0 =>
                [
                    'id' => 1001,
                    'province_id' => 8,
                    'name' => 'Montornès del Vallès',
                ],
            1 =>
                [
                    'id' => 1002,
                    'province_id' => 8,
                    'name' => 'Montseny',
                ],
            2 =>
                [
                    'id' => 1003,
                    'province_id' => 8,
                    'name' => 'Muntanyola',
                ],
            3 =>
                [
                    'id' => 1004,
                    'province_id' => 8,
                    'name' => 'Mura',
                ],
            4 =>
                [
                    'id' => 1005,
                    'province_id' => 8,
                    'name' => 'Navarcles',
                ],
            5 =>
                [
                    'id' => 1006,
                    'province_id' => 8,
                    'name' => 'Navàs',
                ],
            6 =>
                [
                    'id' => 1007,
                    'province_id' => 8,
                    'name' => 'Nou de Berguedà, La',
                ],
            7 =>
                [
                    'id' => 1008,
                    'province_id' => 8,
                    'name' => 'Òdena',
                ],
            8 =>
                [
                    'id' => 1009,
                    'province_id' => 8,
                    'name' => 'Olèrdola',
                ],
            9 =>
                [
                    'id' => 1010,
                    'province_id' => 8,
                    'name' => 'Olesa de Bonesvalls',
                ],
            10 =>
                [
                    'id' => 1011,
                    'province_id' => 8,
                    'name' => 'Olesa de Montserrat',
                ],
            11 =>
                [
                    'id' => 1012,
                    'province_id' => 8,
                    'name' => 'Olivella',
                ],
            12 =>
                [
                    'id' => 1013,
                    'province_id' => 8,
                    'name' => 'Olost',
                ],
            13 =>
                [
                    'id' => 1014,
                    'province_id' => 8,
                    'name' => 'Olvan',
                ],
            14 =>
                [
                    'id' => 1015,
                    'province_id' => 8,
                    'name' => 'Orís',
                ],
            15 =>
                [
                    'id' => 1016,
                    'province_id' => 8,
                    'name' => 'Oristà',
                ],
            16 =>
                [
                    'id' => 1017,
                    'province_id' => 8,
                    'name' => 'Orpí',
                ],
            17 =>
                [
                    'id' => 1018,
                    'province_id' => 8,
                    'name' => 'Òrrius',
                ],
            18 =>
                [
                    'id' => 1019,
                    'province_id' => 8,
                    'name' => 'Pacs del Penedès',
                ],
            19 =>
                [
                    'id' => 1020,
                    'province_id' => 8,
                    'name' => 'Palafolls',
                ],
            20 =>
                [
                    'id' => 1021,
                    'province_id' => 8,
                    'name' => 'Palau-solità i Plegamans',
                ],
            21 =>
                [
                    'id' => 1022,
                    'province_id' => 8,
                    'name' => 'Pallejà',
                ],
            22 =>
                [
                    'id' => 1023,
                    'province_id' => 8,
                    'name' => 'Palma de Cervelló, La',
                ],
            23 =>
                [
                    'id' => 1024,
                    'province_id' => 8,
                    'name' => 'Papiol, El',
                ],
            24 =>
                [
                    'id' => 1025,
                    'province_id' => 8,
                    'name' => 'Parets del Vallès',
                ],
            25 =>
                [
                    'id' => 1026,
                    'province_id' => 8,
                    'name' => 'Perafita',
                ],
            26 =>
                [
                    'id' => 1027,
                    'province_id' => 8,
                    'name' => 'Piera',
                ],
            27 =>
                [
                    'id' => 1028,
                    'province_id' => 8,
                    'name' => 'Pineda de Mar',
                ],
            28 =>
                [
                    'id' => 1029,
                    'province_id' => 8,
                    'name' => 'Pla del Penedès, El',
                ],
            29 =>
                [
                    'id' => 1030,
                    'province_id' => 8,
                    'name' => 'Pobla de Claramunt, La',
                ],
            30 =>
                [
                    'id' => 1031,
                    'province_id' => 8,
                    'name' => 'Pobla de Lillet, La',
                ],
            31 =>
                [
                    'id' => 1032,
                    'province_id' => 8,
                    'name' => 'Polinyà',
                ],
            32 =>
                [
                    'id' => 1033,
                    'province_id' => 8,
                    'name' => 'Pont de Vilomara i Rocafort, El',
                ],
            33 =>
                [
                    'id' => 1034,
                    'province_id' => 8,
                    'name' => 'Pontons',
                ],
            34 =>
                [
                    'id' => 1035,
                    'province_id' => 8,
                    'name' => 'Prat de Llobregat, El',
                ],
            35 =>
                [
                    'id' => 1036,
                    'province_id' => 8,
                    'name' => 'Prats de Lluçanès',
                ],
            36 =>
                [
                    'id' => 1037,
                    'province_id' => 8,
                    'name' => 'Prats de Rei, Els',
                ],
            37 =>
                [
                    'id' => 1038,
                    'province_id' => 8,
                    'name' => 'Premià de Dalt',
                ],
            38 =>
                [
                    'id' => 1039,
                    'province_id' => 8,
                    'name' => 'Premià de Mar',
                ],
            39 =>
                [
                    'id' => 1040,
                    'province_id' => 8,
                    'name' => 'Puigdàlber',
                ],
            40 =>
                [
                    'id' => 1041,
                    'province_id' => 8,
                    'name' => 'Puig-reig',
                ],
            41 =>
                [
                    'id' => 1042,
                    'province_id' => 8,
                    'name' => 'Pujalt',
                ],
            42 =>
                [
                    'id' => 1043,
                    'province_id' => 8,
                    'name' => 'Quar, La',
                ],
            43 =>
                [
                    'id' => 1044,
                    'province_id' => 8,
                    'name' => 'Rajadell',
                ],
            44 =>
                [
                    'id' => 1045,
                    'province_id' => 8,
                    'name' => 'Rellinars',
                ],
            45 =>
                [
                    'id' => 1046,
                    'province_id' => 8,
                    'name' => 'Ripollet',
                ],
            46 =>
                [
                    'id' => 1047,
                    'province_id' => 8,
                    'name' => 'Roca del Vallès, La',
                ],
            47 =>
                [
                    'id' => 1048,
                    'province_id' => 8,
                    'name' => 'Roda de Ter',
                ],
            48 =>
                [
                    'id' => 1049,
                    'province_id' => 8,
                    'name' => 'Rubí',
                ],
            49 =>
                [
                    'id' => 1050,
                    'province_id' => 8,
                    'name' => 'Rubió',
                ],
            50 =>
                [
                    'id' => 1051,
                    'province_id' => 8,
                    'name' => 'Rupit i Pruit',
                ],
            51 =>
                [
                    'id' => 1052,
                    'province_id' => 8,
                    'name' => 'Sabadell',
                ],
            52 =>
                [
                    'id' => 1053,
                    'province_id' => 8,
                    'name' => 'Sagàs',
                ],
            53 =>
                [
                    'id' => 1054,
                    'province_id' => 8,
                    'name' => 'Saldes',
                ],
            54 =>
                [
                    'id' => 1055,
                    'province_id' => 8,
                    'name' => 'Sallent',
                ],
            55 =>
                [
                    'id' => 1056,
                    'province_id' => 8,
                    'name' => 'Sant Adrià de Besòs',
                ],
            56 =>
                [
                    'id' => 1057,
                    'province_id' => 8,
                    'name' => 'Sant Agustí de Lluçanès',
                ],
            57 =>
                [
                    'id' => 1058,
                    'province_id' => 8,
                    'name' => 'Sant Andreu de la Barca',
                ],
            58 =>
                [
                    'id' => 1059,
                    'province_id' => 8,
                    'name' => 'Sant Andreu de Llavaneres',
                ],
            59 =>
                [
                    'id' => 1060,
                    'province_id' => 8,
                    'name' => 'Sant Antoni de Vilamajor',
                ],
            60 =>
                [
                    'id' => 1061,
                    'province_id' => 8,
                    'name' => 'Sant Bartomeu del Grau',
                ],
            61 =>
                [
                    'id' => 1062,
                    'province_id' => 8,
                    'name' => 'Sant Boi de Llobregat',
                ],
            62 =>
                [
                    'id' => 1063,
                    'province_id' => 8,
                    'name' => 'Sant Boi de Lluçanès',
                ],
            63 =>
                [
                    'id' => 1064,
                    'province_id' => 8,
                    'name' => 'Sant Cebrià de Vallalta',
                ],
            64 =>
                [
                    'id' => 1065,
                    'province_id' => 8,
                    'name' => 'Sant Celoni',
                ],
            65 =>
                [
                    'id' => 1066,
                    'province_id' => 8,
                    'name' => 'Sant Climent de Llobregat',
                ],
            66 =>
                [
                    'id' => 1067,
                    'province_id' => 8,
                    'name' => 'Sant Cugat del Vallès',
                ],
            67 =>
                [
                    'id' => 1068,
                    'province_id' => 8,
                    'name' => 'Sant Cugat Sesgarrigues',
                ],
            68 =>
                [
                    'id' => 1069,
                    'province_id' => 8,
                    'name' => 'Sant Esteve de Palautordera',
                ],
            69 =>
                [
                    'id' => 1070,
                    'province_id' => 8,
                    'name' => 'Sant Esteve Sesrovires',
                ],
            70 =>
                [
                    'id' => 1071,
                    'province_id' => 8,
                    'name' => 'Sant Feliu de Codines',
                ],
            71 =>
                [
                    'id' => 1072,
                    'province_id' => 8,
                    'name' => 'Sant Feliu de Llobregat',
                ],
            72 =>
                [
                    'id' => 1073,
                    'province_id' => 8,
                    'name' => 'Sant Feliu Sasserra',
                ],
            73 =>
                [
                    'id' => 1074,
                    'province_id' => 8,
                    'name' => 'Sant Fost de Campsentelles',
                ],
            74 =>
                [
                    'id' => 1075,
                    'province_id' => 8,
                    'name' => 'Sant Fruitós de Bages',
                ],
            75 =>
                [
                    'id' => 1076,
                    'province_id' => 8,
                    'name' => 'Sant Hipòlit de Voltregà',
                ],
            76 =>
                [
                    'id' => 1077,
                    'province_id' => 8,
                    'name' => 'Sant Iscle de Vallalta',
                ],
            77 =>
                [
                    'id' => 1078,
                    'province_id' => 8,
                    'name' => 'Sant Jaume de Frontanyà',
                ],
            78 =>
                [
                    'id' => 1079,
                    'province_id' => 8,
                    'name' => 'Sant Joan de Vilatorrada',
                ],
            79 =>
                [
                    'id' => 1080,
                    'province_id' => 8,
                    'name' => 'Sant Joan Despí',
                ],
            80 =>
                [
                    'id' => 1081,
                    'province_id' => 8,
                    'name' => 'Sant Julià de Cerdanyola',
                ],
            81 =>
                [
                    'id' => 1082,
                    'province_id' => 8,
                    'name' => 'Sant Julià de Vilatorta',
                ],
            82 =>
                [
                    'id' => 1083,
                    'province_id' => 8,
                    'name' => 'Sant Just Desvern',
                ],
            83 =>
                [
                    'id' => 1084,
                    'province_id' => 8,
                    'name' => 'Sant Llorenç d\'Hortons',
                ],
            84 =>
                [
                    'id' => 1085,
                    'province_id' => 8,
                    'name' => 'Sant Llorenç Savall',
                ],
            85 =>
                [
                    'id' => 1086,
                    'province_id' => 8,
                    'name' => 'Sant Martí d\'Albars',
                ],
            86 =>
                [
                    'id' => 1087,
                    'province_id' => 8,
                    'name' => 'Sant Martí de Centelles',
                ],
            87 =>
                [
                    'id' => 1088,
                    'province_id' => 8,
                    'name' => 'Sant Martí de Tous',
                ],
            88 =>
                [
                    'id' => 1089,
                    'province_id' => 8,
                    'name' => 'Sant Martí Sarroca',
                ],
            89 =>
                [
                    'id' => 1090,
                    'province_id' => 8,
                    'name' => 'Sant Martí Sesgueioles',
                ],
            90 =>
                [
                    'id' => 1091,
                    'province_id' => 8,
                    'name' => 'Sant Mateu de Bages',
                ],
            91 =>
                [
                    'id' => 1092,
                    'province_id' => 8,
                    'name' => 'Sant Pere de Ribes',
                ],
            92 =>
                [
                    'id' => 1093,
                    'province_id' => 8,
                    'name' => 'Sant Pere de Riudebitlles',
                ],
            93 =>
                [
                    'id' => 1094,
                    'province_id' => 8,
                    'name' => 'Sant Pere de Torelló',
                ],
            94 =>
                [
                    'id' => 1095,
                    'province_id' => 8,
                    'name' => 'Sant Pere de Vilamajor',
                ],
            95 =>
                [
                    'id' => 1096,
                    'province_id' => 8,
                    'name' => 'Sant Pere Sallavinera',
                ],
            96 =>
                [
                    'id' => 1097,
                    'province_id' => 8,
                    'name' => 'Sant Pol de Mar',
                ],
            97 =>
                [
                    'id' => 1098,
                    'province_id' => 8,
                    'name' => 'Sant Quintí de Mediona',
                ],
            98 =>
                [
                    'id' => 1099,
                    'province_id' => 8,
                    'name' => 'Sant Quirze de Besora',
                ],
            99 =>
                [
                    'id' => 1100,
                    'province_id' => 8,
                    'name' => 'Sant Quirze del Vallès',
                ],
            100 =>
                [
                    'id' => 1101,
                    'province_id' => 8,
                    'name' => 'Sant Quirze Safaja',
                ],
            101 =>
                [
                    'id' => 1102,
                    'province_id' => 8,
                    'name' => 'Sant Sadurní d\'Anoia',
                ],
            102 =>
                [
                    'id' => 1103,
                    'province_id' => 8,
                    'name' => 'Sant Sadurní d\'Osormort',
                ],
            103 =>
                [
                    'id' => 1104,
                    'province_id' => 8,
                    'name' => 'Sant Salvador de Guardiola',
                ],
            104 =>
                [
                    'id' => 1105,
                    'province_id' => 8,
                    'name' => 'Sant Vicenç de Castellet',
                ],
            105 =>
                [
                    'id' => 1106,
                    'province_id' => 8,
                    'name' => 'Sant Vicenç de Montalt',
                ],
            106 =>
                [
                    'id' => 1107,
                    'province_id' => 8,
                    'name' => 'Sant Vicenç de Torelló',
                ],
            107 =>
                [
                    'id' => 1108,
                    'province_id' => 8,
                    'name' => 'Sant Vicenç dels Horts',
                ],
            108 =>
                [
                    'id' => 1109,
                    'province_id' => 8,
                    'name' => 'Santa Cecília de Voltregà',
                ],
            109 =>
                [
                    'id' => 1110,
                    'province_id' => 8,
                    'name' => 'Santa Coloma de Cervelló',
                ],
            110 =>
                [
                    'id' => 1111,
                    'province_id' => 8,
                    'name' => 'Santa Coloma de Gramenet',
                ],
            111 =>
                [
                    'id' => 1112,
                    'province_id' => 8,
                    'name' => 'Santa Eugènia de Berga',
                ],
            112 =>
                [
                    'id' => 1113,
                    'province_id' => 8,
                    'name' => 'Santa Eulàlia de Riuprimer',
                ],
            113 =>
                [
                    'id' => 1114,
                    'province_id' => 8,
                    'name' => 'Santa Eulàlia de Ronçana',
                ],
            114 =>
                [
                    'id' => 1115,
                    'province_id' => 8,
                    'name' => 'Santa Fe del Penedès',
                ],
            115 =>
                [
                    'id' => 1116,
                    'province_id' => 8,
                    'name' => 'Santa Margarida de Montbui',
                ],
            116 =>
                [
                    'id' => 1117,
                    'province_id' => 8,
                    'name' => 'Santa Margarida i els Monjos',
                ],
            117 =>
                [
                    'id' => 1118,
                    'province_id' => 8,
                    'name' => 'Santa Maria de Besora',
                ],
            118 =>
                [
                    'id' => 1119,
                    'province_id' => 8,
                    'name' => 'Santa Maria de Corcó',
                ],
            119 =>
                [
                    'id' => 1120,
                    'province_id' => 8,
                    'name' => 'Santa Maria de Martorelles',
                ],
            120 =>
                [
                    'id' => 1121,
                    'province_id' => 8,
                    'name' => 'Santa Maria de Merlès',
                ],
            121 =>
                [
                    'id' => 1122,
                    'province_id' => 8,
                    'name' => 'Santa Maria de Miralles',
                ],
            122 =>
                [
                    'id' => 1123,
                    'province_id' => 8,
                    'name' => 'Santa Maria de Palautordera',
                ],
            123 =>
                [
                    'id' => 1124,
                    'province_id' => 8,
                    'name' => 'Santa Maria d\'Oló',
                ],
            124 =>
                [
                    'id' => 1125,
                    'province_id' => 8,
                    'name' => 'Santa Perpètua de Mogoda',
                ],
            125 =>
                [
                    'id' => 1126,
                    'province_id' => 8,
                    'name' => 'Santa Susanna',
                ],
            126 =>
                [
                    'id' => 1127,
                    'province_id' => 8,
                    'name' => 'Santpedor',
                ],
            127 =>
                [
                    'id' => 1128,
                    'province_id' => 8,
                    'name' => 'Sentmenat',
                ],
            128 =>
                [
                    'id' => 1129,
                    'province_id' => 8,
                    'name' => 'Seva',
                ],
            129 =>
                [
                    'id' => 1130,
                    'province_id' => 8,
                    'name' => 'Sitges',
                ],
            130 =>
                [
                    'id' => 1131,
                    'province_id' => 8,
                    'name' => 'Sobremunt',
                ],
            131 =>
                [
                    'id' => 1132,
                    'province_id' => 8,
                    'name' => 'Sora',
                ],
            132 =>
                [
                    'id' => 1133,
                    'province_id' => 8,
                    'name' => 'Subirats',
                ],
            133 =>
                [
                    'id' => 1134,
                    'province_id' => 8,
                    'name' => 'Súria',
                ],
            134 =>
                [
                    'id' => 1135,
                    'province_id' => 8,
                    'name' => 'Tagamanent',
                ],
            135 =>
                [
                    'id' => 1136,
                    'province_id' => 8,
                    'name' => 'Talamanca',
                ],
            136 =>
                [
                    'id' => 1137,
                    'province_id' => 8,
                    'name' => 'Taradell',
                ],
            137 =>
                [
                    'id' => 1138,
                    'province_id' => 8,
                    'name' => 'Tavèrnoles',
                ],
            138 =>
                [
                    'id' => 1139,
                    'province_id' => 8,
                    'name' => 'Tavertet',
                ],
            139 =>
                [
                    'id' => 1140,
                    'province_id' => 8,
                    'name' => 'Teià',
                ],
            140 =>
                [
                    'id' => 1141,
                    'province_id' => 8,
                    'name' => 'Terrassa',
                ],
            141 =>
                [
                    'id' => 1142,
                    'province_id' => 8,
                    'name' => 'Tiana',
                ],
            142 =>
                [
                    'id' => 1143,
                    'province_id' => 8,
                    'name' => 'Tona',
                ],
            143 =>
                [
                    'id' => 1144,
                    'province_id' => 8,
                    'name' => 'Tordera',
                ],
            144 =>
                [
                    'id' => 1145,
                    'province_id' => 8,
                    'name' => 'Torelló',
                ],
            145 =>
                [
                    'id' => 1146,
                    'province_id' => 8,
                    'name' => 'Torre de Claramunt, La',
                ],
            146 =>
                [
                    'id' => 1147,
                    'province_id' => 8,
                    'name' => 'Torrelavit',
                ],
            147 =>
                [
                    'id' => 1148,
                    'province_id' => 8,
                    'name' => 'Torrelles de Foix',
                ],
            148 =>
                [
                    'id' => 1149,
                    'province_id' => 8,
                    'name' => 'Torrelles de Llobregat',
                ],
            149 =>
                [
                    'id' => 1150,
                    'province_id' => 8,
                    'name' => 'Ullastrell',
                ],
            150 =>
                [
                    'id' => 1151,
                    'province_id' => 8,
                    'name' => 'Vacarisses',
                ],
            151 =>
                [
                    'id' => 1152,
                    'province_id' => 8,
                    'name' => 'Vallbona d\'Anoia',
                ],
            152 =>
                [
                    'id' => 1153,
                    'province_id' => 8,
                    'name' => 'Vallcebre',
                ],
            153 =>
                [
                    'id' => 1154,
                    'province_id' => 8,
                    'name' => 'Vallgorguina',
                ],
            154 =>
                [
                    'id' => 1155,
                    'province_id' => 8,
                    'name' => 'Vallirana',
                ],
            155 =>
                [
                    'id' => 1156,
                    'province_id' => 8,
                    'name' => 'Vallromanes',
                ],
            156 =>
                [
                    'id' => 1157,
                    'province_id' => 8,
                    'name' => 'Veciana',
                ],
            157 =>
                [
                    'id' => 1158,
                    'province_id' => 8,
                    'name' => 'Vic',
                ],
            158 =>
                [
                    'id' => 1159,
                    'province_id' => 8,
                    'name' => 'Vilada',
                ],
            159 =>
                [
                    'id' => 1160,
                    'province_id' => 8,
                    'name' => 'Viladecans',
                ],
            160 =>
                [
                    'id' => 1161,
                    'province_id' => 8,
                    'name' => 'Viladecavalls',
                ],
            161 =>
                [
                    'id' => 1162,
                    'province_id' => 8,
                    'name' => 'Vilafranca del Penedès',
                ],
            162 =>
                [
                    'id' => 1163,
                    'province_id' => 8,
                    'name' => 'Vilalba Sasserra',
                ],
            163 =>
                [
                    'id' => 1164,
                    'province_id' => 8,
                    'name' => 'Vilanova de Sau',
                ],
            164 =>
                [
                    'id' => 1165,
                    'province_id' => 8,
                    'name' => 'Vilanova del Camí',
                ],
            165 =>
                [
                    'id' => 1166,
                    'province_id' => 8,
                    'name' => 'Vilanova del Vallès',
                ],
            166 =>
                [
                    'id' => 1167,
                    'province_id' => 8,
                    'name' => 'Vilanova i la Geltrú',
                ],
            167 =>
                [
                    'id' => 1168,
                    'province_id' => 8,
                    'name' => 'Vilassar de Dalt',
                ],
            168 =>
                [
                    'id' => 1169,
                    'province_id' => 8,
                    'name' => 'Vilassar de Mar',
                ],
            169 =>
                [
                    'id' => 1170,
                    'province_id' => 8,
                    'name' => 'Vilobí del Penedès',
                ],
            170 =>
                [
                    'id' => 1171,
                    'province_id' => 8,
                    'name' => 'Viver i Serrateix',
                ],
            171 =>
                [
                    'id' => 1172,
                    'province_id' => 9,
                    'name' => 'Abajas',
                ],
            172 =>
                [
                    'id' => 1173,
                    'province_id' => 9,
                    'name' => 'Adrada de Haza',
                ],
            173 =>
                [
                    'id' => 1174,
                    'province_id' => 9,
                    'name' => 'Aguas Cándidas',
                ],
            174 =>
                [
                    'id' => 1175,
                    'province_id' => 9,
                    'name' => 'Aguilar de Bureba',
                ],
            175 =>
                [
                    'id' => 1176,
                    'province_id' => 9,
                    'name' => 'Albillos',
                ],
            176 =>
                [
                    'id' => 1177,
                    'province_id' => 9,
                    'name' => 'Alcocero de Mola',
                ],
            177 =>
                [
                    'id' => 1178,
                    'province_id' => 9,
                    'name' => 'Alfoz de Bricia',
                ],
            178 =>
                [
                    'id' => 1179,
                    'province_id' => 9,
                    'name' => 'Alfoz de Quintanadueñas',
                ],
            179 =>
                [
                    'id' => 1180,
                    'province_id' => 9,
                    'name' => 'Alfoz de Santa Gadea',
                ],
            180 =>
                [
                    'id' => 1181,
                    'province_id' => 9,
                    'name' => 'Altable',
                ],
            181 =>
                [
                    'id' => 1182,
                    'province_id' => 9,
                    'name' => 'Altos, Los',
                ],
            182 =>
                [
                    'id' => 1183,
                    'province_id' => 9,
                    'name' => 'Ameyugo',
                ],
            183 =>
                [
                    'id' => 1184,
                    'province_id' => 9,
                    'name' => 'Anguix',
                ],
            184 =>
                [
                    'id' => 1185,
                    'province_id' => 9,
                    'name' => 'Aranda de Duero',
                ],
            185 =>
                [
                    'id' => 1186,
                    'province_id' => 9,
                    'name' => 'Arandilla',
                ],
            186 =>
                [
                    'id' => 1187,
                    'province_id' => 9,
                    'name' => 'Arauzo de Miel',
                ],
            187 =>
                [
                    'id' => 1188,
                    'province_id' => 9,
                    'name' => 'Arauzo de Salce',
                ],
            188 =>
                [
                    'id' => 1189,
                    'province_id' => 9,
                    'name' => 'Arauzo de Torre',
                ],
            189 =>
                [
                    'id' => 1190,
                    'province_id' => 9,
                    'name' => 'Arcos',
                ],
            190 =>
                [
                    'id' => 1191,
                    'province_id' => 9,
                    'name' => 'Arenillas de Riopisuerga',
                ],
            191 =>
                [
                    'id' => 1192,
                    'province_id' => 9,
                    'name' => 'Arija',
                ],
            192 =>
                [
                    'id' => 1193,
                    'province_id' => 9,
                    'name' => 'Arlanzón',
                ],
            193 =>
                [
                    'id' => 1194,
                    'province_id' => 9,
                    'name' => 'Arraya de Oca',
                ],
            194 =>
                [
                    'id' => 1195,
                    'province_id' => 9,
                    'name' => 'Atapuerca',
                ],
            195 =>
                [
                    'id' => 1196,
                    'province_id' => 9,
                    'name' => 'Ausines, Los',
                ],
            196 =>
                [
                    'id' => 1197,
                    'province_id' => 9,
                    'name' => 'Avellanosa de Muñó',
                ],
            197 =>
                [
                    'id' => 1198,
                    'province_id' => 9,
                    'name' => 'Bahabón de Esgueva',
                ],
            198 =>
                [
                    'id' => 1199,
                    'province_id' => 9,
                    'name' => 'Balbases, Los',
                ],
            199 =>
                [
                    'id' => 1200,
                    'province_id' => 9,
                    'name' => 'Baños de Valdearados',
                ],
            200 =>
                [
                    'id' => 1201,
                    'province_id' => 9,
                    'name' => 'Bañuelos de Bureba',
                ],
            201 =>
                [
                    'id' => 1202,
                    'province_id' => 9,
                    'name' => 'Barbadillo de Herreros',
                ],
            202 =>
                [
                    'id' => 1203,
                    'province_id' => 9,
                    'name' => 'Barbadillo del Mercado',
                ],
            203 =>
                [
                    'id' => 1204,
                    'province_id' => 9,
                    'name' => 'Barbadillo del Pez',
                ],
            204 =>
                [
                    'id' => 1205,
                    'province_id' => 9,
                    'name' => 'Barrio de Muñó',
                ],
            205 =>
                [
                    'id' => 1206,
                    'province_id' => 9,
                    'name' => 'Barrios de Bureba, Los',
                ],
            206 =>
                [
                    'id' => 1207,
                    'province_id' => 9,
                    'name' => 'Barrios de Colina',
                ],
            207 =>
                [
                    'id' => 1208,
                    'province_id' => 9,
                    'name' => 'Basconcillos del Tozo',
                ],
            208 =>
                [
                    'id' => 1209,
                    'province_id' => 9,
                    'name' => 'Bascuñana',
                ],
            209 =>
                [
                    'id' => 1210,
                    'province_id' => 9,
                    'name' => 'Belbimbre',
                ],
            210 =>
                [
                    'id' => 1211,
                    'province_id' => 9,
                    'name' => 'Belorado',
                ],
            211 =>
                [
                    'id' => 1212,
                    'province_id' => 9,
                    'name' => 'Berberana',
                ],
            212 =>
                [
                    'id' => 1213,
                    'province_id' => 9,
                    'name' => 'Berlangas de Roa',
                ],
            213 =>
                [
                    'id' => 1214,
                    'province_id' => 9,
                    'name' => 'Berzosa de Bureba',
                ],
            214 =>
                [
                    'id' => 1215,
                    'province_id' => 9,
                    'name' => 'Bozoó',
                ],
            215 =>
                [
                    'id' => 1216,
                    'province_id' => 9,
                    'name' => 'Brazacorta',
                ],
            216 =>
                [
                    'id' => 1217,
                    'province_id' => 9,
                    'name' => 'Briviesca',
                ],
            217 =>
                [
                    'id' => 1218,
                    'province_id' => 9,
                    'name' => 'Bugedo',
                ],
            218 =>
                [
                    'id' => 1219,
                    'province_id' => 9,
                    'name' => 'Buniel',
                ],
            219 =>
                [
                    'id' => 1220,
                    'province_id' => 9,
                    'name' => 'Burgos',
                ],
            220 =>
                [
                    'id' => 1221,
                    'province_id' => 9,
                    'name' => 'Busto de Bureba',
                ],
            221 =>
                [
                    'id' => 1222,
                    'province_id' => 9,
                    'name' => 'Cabañes de Esgueva',
                ],
            222 =>
                [
                    'id' => 1223,
                    'province_id' => 9,
                    'name' => 'Cabezón de la Sierra',
                ],
            223 =>
                [
                    'id' => 1224,
                    'province_id' => 9,
                    'name' => 'Caleruega',
                ],
            224 =>
                [
                    'id' => 1225,
                    'province_id' => 9,
                    'name' => 'Campillo de Aranda',
                ],
            225 =>
                [
                    'id' => 1226,
                    'province_id' => 9,
                    'name' => 'Campolara',
                ],
            226 =>
                [
                    'id' => 1227,
                    'province_id' => 9,
                    'name' => 'Canicosa de la Sierra',
                ],
            227 =>
                [
                    'id' => 1228,
                    'province_id' => 9,
                    'name' => 'Cantabrana',
                ],
            228 =>
                [
                    'id' => 1229,
                    'province_id' => 9,
                    'name' => 'Carazo',
                ],
            229 =>
                [
                    'id' => 1230,
                    'province_id' => 9,
                    'name' => 'Carcedo de Bureba',
                ],
            230 =>
                [
                    'id' => 1231,
                    'province_id' => 9,
                    'name' => 'Carcedo de Burgos',
                ],
            231 =>
                [
                    'id' => 1232,
                    'province_id' => 9,
                    'name' => 'Cardeñadijo',
                ],
            232 =>
                [
                    'id' => 1233,
                    'province_id' => 9,
                    'name' => 'Cardeñajimeno',
                ],
            233 =>
                [
                    'id' => 1234,
                    'province_id' => 9,
                    'name' => 'Cardeñuela Riopico',
                ],
            234 =>
                [
                    'id' => 1235,
                    'province_id' => 9,
                    'name' => 'Carrias',
                ],
            235 =>
                [
                    'id' => 1236,
                    'province_id' => 9,
                    'name' => 'Cascajares de Bureba',
                ],
            236 =>
                [
                    'id' => 1237,
                    'province_id' => 9,
                    'name' => 'Cascajares de la Sierra',
                ],
            237 =>
                [
                    'id' => 1238,
                    'province_id' => 9,
                    'name' => 'Castellanos de Castro',
                ],
            238 =>
                [
                    'id' => 1239,
                    'province_id' => 9,
                    'name' => 'Castil de Peones',
                ],
            239 =>
                [
                    'id' => 1240,
                    'province_id' => 9,
                    'name' => 'Castildelgado',
                ],
            240 =>
                [
                    'id' => 1241,
                    'province_id' => 9,
                    'name' => 'Castrillo de la Reina',
                ],
            241 =>
                [
                    'id' => 1242,
                    'province_id' => 9,
                    'name' => 'Castrillo de la Vega',
                ],
            242 =>
                [
                    'id' => 1243,
                    'province_id' => 9,
                    'name' => 'Castrillo de Riopisuerga',
                ],
            243 =>
                [
                    'id' => 1244,
                    'province_id' => 9,
                    'name' => 'Castrillo del Val',
                ],
            244 =>
                [
                    'id' => 1245,
                    'province_id' => 9,
                    'name' => 'Castrillo Matajudíos',
                ],
            245 =>
                [
                    'id' => 1246,
                    'province_id' => 9,
                    'name' => 'Castrojeriz',
                ],
            246 =>
                [
                    'id' => 1247,
                    'province_id' => 9,
                    'name' => 'Cavia',
                ],
            247 =>
                [
                    'id' => 1248,
                    'province_id' => 9,
                    'name' => 'Cayuela',
                ],
            248 =>
                [
                    'id' => 1249,
                    'province_id' => 9,
                    'name' => 'Cebrecos',
                ],
            249 =>
                [
                    'id' => 1250,
                    'province_id' => 9,
                    'name' => 'Celada del Camino',
                ],
            250 =>
                [
                    'id' => 1251,
                    'province_id' => 9,
                    'name' => 'Cerezo de Río Tirón',
                ],
            251 =>
                [
                    'id' => 1252,
                    'province_id' => 9,
                    'name' => 'Cerratón de Juarros',
                ],
            252 =>
                [
                    'id' => 1253,
                    'province_id' => 9,
                    'name' => 'Ciadoncha',
                ],
            253 =>
                [
                    'id' => 1254,
                    'province_id' => 9,
                    'name' => 'Cillaperlata',
                ],
            254 =>
                [
                    'id' => 1255,
                    'province_id' => 9,
                    'name' => 'Cilleruelo de Abajo',
                ],
            255 =>
                [
                    'id' => 1256,
                    'province_id' => 9,
                    'name' => 'Cilleruelo de Arriba',
                ],
            256 =>
                [
                    'id' => 1257,
                    'province_id' => 9,
                    'name' => 'Ciruelos de Cervera',
                ],
            257 =>
                [
                    'id' => 1258,
                    'province_id' => 9,
                    'name' => 'Cogollos',
                ],
            258 =>
                [
                    'id' => 1259,
                    'province_id' => 9,
                    'name' => 'Condado de Treviño',
                ],
            259 =>
                [
                    'id' => 1260,
                    'province_id' => 9,
                    'name' => 'Contreras',
                ],
            260 =>
                [
                    'id' => 1261,
                    'province_id' => 9,
                    'name' => 'Coruña del Conde',
                ],
            261 =>
                [
                    'id' => 1262,
                    'province_id' => 9,
                    'name' => 'Covarrubias',
                ],
            262 =>
                [
                    'id' => 1263,
                    'province_id' => 9,
                    'name' => 'Cubillo del Campo',
                ],
            263 =>
                [
                    'id' => 1264,
                    'province_id' => 9,
                    'name' => 'Cubo de Bureba',
                ],
            264 =>
                [
                    'id' => 1265,
                    'province_id' => 9,
                    'name' => 'Cueva de Roa, La',
                ],
            265 =>
                [
                    'id' => 1266,
                    'province_id' => 9,
                    'name' => 'Cuevas de San Clemente',
                ],
            266 =>
                [
                    'id' => 1267,
                    'province_id' => 9,
                    'name' => 'Encío',
                ],
            267 =>
                [
                    'id' => 1268,
                    'province_id' => 9,
                    'name' => 'Espinosa de Cervera',
                ],
            268 =>
                [
                    'id' => 1269,
                    'province_id' => 9,
                    'name' => 'Espinosa de los Monteros',
                ],
            269 =>
                [
                    'id' => 1270,
                    'province_id' => 9,
                    'name' => 'Espinosa del Camino',
                ],
            270 =>
                [
                    'id' => 1271,
                    'province_id' => 9,
                    'name' => 'Estépar',
                ],
            271 =>
                [
                    'id' => 1272,
                    'province_id' => 9,
                    'name' => 'Fontioso',
                ],
            272 =>
                [
                    'id' => 1273,
                    'province_id' => 9,
                    'name' => 'Frandovínez',
                ],
            273 =>
                [
                    'id' => 1274,
                    'province_id' => 9,
                    'name' => 'Fresneda de la Sierra Tirón',
                ],
            274 =>
                [
                    'id' => 1275,
                    'province_id' => 9,
                    'name' => 'Fresneña',
                ],
            275 =>
                [
                    'id' => 1276,
                    'province_id' => 9,
                    'name' => 'Fresnillo de las Dueñas',
                ],
            276 =>
                [
                    'id' => 1277,
                    'province_id' => 9,
                    'name' => 'Fresno de Río Tirón',
                ],
            277 =>
                [
                    'id' => 1278,
                    'province_id' => 9,
                    'name' => 'Fresno de Rodilla',
                ],
            278 =>
                [
                    'id' => 1279,
                    'province_id' => 9,
                    'name' => 'Frías',
                ],
            279 =>
                [
                    'id' => 1280,
                    'province_id' => 9,
                    'name' => 'Fuentebureba',
                ],
            280 =>
                [
                    'id' => 1281,
                    'province_id' => 9,
                    'name' => 'Fuentecén',
                ],
            281 =>
                [
                    'id' => 1282,
                    'province_id' => 9,
                    'name' => 'Fuentelcésped',
                ],
            282 =>
                [
                    'id' => 1283,
                    'province_id' => 9,
                    'name' => 'Fuentelisendo',
                ],
            283 =>
                [
                    'id' => 1284,
                    'province_id' => 9,
                    'name' => 'Fuentemolinos',
                ],
            284 =>
                [
                    'id' => 1285,
                    'province_id' => 9,
                    'name' => 'Fuentenebro',
                ],
            285 =>
                [
                    'id' => 1286,
                    'province_id' => 9,
                    'name' => 'Fuentespina',
                ],
            286 =>
                [
                    'id' => 1287,
                    'province_id' => 9,
                    'name' => 'Galbarros',
                ],
            287 =>
                [
                    'id' => 1288,
                    'province_id' => 9,
                    'name' => 'Gallega, La',
                ],
            288 =>
                [
                    'id' => 1289,
                    'province_id' => 9,
                    'name' => 'Grijalba',
                ],
            289 =>
                [
                    'id' => 1290,
                    'province_id' => 9,
                    'name' => 'Grisaleña',
                ],
            290 =>
                [
                    'id' => 1291,
                    'province_id' => 9,
                    'name' => 'Gumiel de Izán',
                ],
            291 =>
                [
                    'id' => 1292,
                    'province_id' => 9,
                    'name' => 'Gumiel de Mercado',
                ],
            292 =>
                [
                    'id' => 1293,
                    'province_id' => 9,
                    'name' => 'Hacinas',
                ],
            293 =>
                [
                    'id' => 1294,
                    'province_id' => 9,
                    'name' => 'Haza',
                ],
            294 =>
                [
                    'id' => 1295,
                    'province_id' => 9,
                    'name' => 'Hontanas',
                ],
            295 =>
                [
                    'id' => 1296,
                    'province_id' => 9,
                    'name' => 'Hontangas',
                ],
            296 =>
                [
                    'id' => 1297,
                    'province_id' => 9,
                    'name' => 'Hontoria de la Cantera',
                ],
            297 =>
                [
                    'id' => 1298,
                    'province_id' => 9,
                    'name' => 'Hontoria de Valdearados',
                ],
            298 =>
                [
                    'id' => 1299,
                    'province_id' => 9,
                    'name' => 'Hontoria del Pinar',
                ],
            299 =>
                [
                    'id' => 1300,
                    'province_id' => 9,
                    'name' => 'Hormazas, Las',
                ],
            300 =>
                [
                    'id' => 1301,
                    'province_id' => 9,
                    'name' => 'Hornillos del Camino',
                ],
            301 =>
                [
                    'id' => 1302,
                    'province_id' => 9,
                    'name' => 'Horra, La',
                ],
            302 =>
                [
                    'id' => 1303,
                    'province_id' => 9,
                    'name' => 'Hortigüela',
                ],
            303 =>
                [
                    'id' => 1304,
                    'province_id' => 9,
                    'name' => 'Hoyales de Roa',
                ],
            304 =>
                [
                    'id' => 1305,
                    'province_id' => 9,
                    'name' => 'Huérmeces',
                ],
            305 =>
                [
                    'id' => 1306,
                    'province_id' => 9,
                    'name' => 'Huerta de Arriba',
                ],
            306 =>
                [
                    'id' => 1307,
                    'province_id' => 9,
                    'name' => 'Huerta de Rey',
                ],
            307 =>
                [
                    'id' => 1308,
                    'province_id' => 9,
                    'name' => 'Humada',
                ],
            308 =>
                [
                    'id' => 1309,
                    'province_id' => 9,
                    'name' => 'Hurones',
                ],
            309 =>
                [
                    'id' => 1310,
                    'province_id' => 9,
                    'name' => 'Ibeas de Juarros',
                ],
            310 =>
                [
                    'id' => 1311,
                    'province_id' => 9,
                    'name' => 'Ibrillos',
                ],
            311 =>
                [
                    'id' => 1312,
                    'province_id' => 9,
                    'name' => 'Iglesiarrubia',
                ],
            312 =>
                [
                    'id' => 1313,
                    'province_id' => 9,
                    'name' => 'Iglesias',
                ],
            313 =>
                [
                    'id' => 1314,
                    'province_id' => 9,
                    'name' => 'Isar',
                ],
            314 =>
                [
                    'id' => 1315,
                    'province_id' => 9,
                    'name' => 'Itero del Castillo',
                ],
            315 =>
                [
                    'id' => 1316,
                    'province_id' => 9,
                    'name' => 'Jaramillo de la Fuente',
                ],
            316 =>
                [
                    'id' => 1317,
                    'province_id' => 9,
                    'name' => 'Jaramillo Quemado',
                ],
            317 =>
                [
                    'id' => 1318,
                    'province_id' => 9,
                    'name' => 'Junta de Traslaloma',
                ],
            318 =>
                [
                    'id' => 1319,
                    'province_id' => 9,
                    'name' => 'Junta de Villalba de Losa',
                ],
            319 =>
                [
                    'id' => 1320,
                    'province_id' => 9,
                    'name' => 'Jurisdicción de Lara',
                ],
            320 =>
                [
                    'id' => 1321,
                    'province_id' => 9,
                    'name' => 'Jurisdicción de San Zadornil',
                ],
            321 =>
                [
                    'id' => 1322,
                    'province_id' => 9,
                    'name' => 'Lerma',
                ],
            322 =>
                [
                    'id' => 1323,
                    'province_id' => 9,
                    'name' => 'Llano de Bureba',
                ],
            323 =>
                [
                    'id' => 1324,
                    'province_id' => 9,
                    'name' => 'Madrigal del Monte',
                ],
            324 =>
                [
                    'id' => 1325,
                    'province_id' => 9,
                    'name' => 'Madrigalejo del Monte',
                ],
            325 =>
                [
                    'id' => 1326,
                    'province_id' => 9,
                    'name' => 'Mahamud',
                ],
            326 =>
                [
                    'id' => 1327,
                    'province_id' => 9,
                    'name' => 'Mambrilla de Castrejón',
                ],
            327 =>
                [
                    'id' => 1328,
                    'province_id' => 9,
                    'name' => 'Mambrillas de Lara',
                ],
            328 =>
                [
                    'id' => 1329,
                    'province_id' => 9,
                    'name' => 'Mamolar',
                ],
            329 =>
                [
                    'id' => 1330,
                    'province_id' => 9,
                    'name' => 'Manciles',
                ],
            330 =>
                [
                    'id' => 1331,
                    'province_id' => 9,
                    'name' => 'Mazuela',
                ],
            331 =>
                [
                    'id' => 1332,
                    'province_id' => 9,
                    'name' => 'Mecerreyes',
                ],
            332 =>
                [
                    'id' => 1333,
                    'province_id' => 9,
                    'name' => 'Medina de Pomar',
                ],
            333 =>
                [
                    'id' => 1334,
                    'province_id' => 9,
                    'name' => 'Melgar de Fernamental',
                ],
            334 =>
                [
                    'id' => 1335,
                    'province_id' => 9,
                    'name' => 'Merindad de Cuesta-Urria',
                ],
            335 =>
                [
                    'id' => 1336,
                    'province_id' => 9,
                    'name' => 'Merindad de Montija',
                ],
            336 =>
                [
                    'id' => 1337,
                    'province_id' => 9,
                    'name' => 'Merindad de Río Ubierna',
                ],
            337 =>
                [
                    'id' => 1338,
                    'province_id' => 9,
                    'name' => 'Merindad de Sotoscueva',
                ],
            338 =>
                [
                    'id' => 1339,
                    'province_id' => 9,
                    'name' => 'Merindad de Valdeporres',
                ],
            339 =>
                [
                    'id' => 1340,
                    'province_id' => 9,
                    'name' => 'Merindad de Valdivielso',
                ],
            340 =>
                [
                    'id' => 1341,
                    'province_id' => 9,
                    'name' => 'Milagros',
                ],
            341 =>
                [
                    'id' => 1342,
                    'province_id' => 9,
                    'name' => 'Miranda de Ebro',
                ],
            342 =>
                [
                    'id' => 1343,
                    'province_id' => 9,
                    'name' => 'Miraveche',
                ],
            343 =>
                [
                    'id' => 1344,
                    'province_id' => 9,
                    'name' => 'Modúbar de la Emparedada',
                ],
            344 =>
                [
                    'id' => 1345,
                    'province_id' => 9,
                    'name' => 'Monasterio de la Sierra',
                ],
            345 =>
                [
                    'id' => 1346,
                    'province_id' => 9,
                    'name' => 'Monasterio de Rodilla',
                ],
            346 =>
                [
                    'id' => 1347,
                    'province_id' => 9,
                    'name' => 'Moncalvillo',
                ],
            347 =>
                [
                    'id' => 1348,
                    'province_id' => 9,
                    'name' => 'Monterrubio de la Demanda',
                ],
            348 =>
                [
                    'id' => 1349,
                    'province_id' => 9,
                    'name' => 'Montorio',
                ],
            349 =>
                [
                    'id' => 1350,
                    'province_id' => 9,
                    'name' => 'Moradillo de Roa',
                ],
            350 =>
                [
                    'id' => 1351,
                    'province_id' => 9,
                    'name' => 'Nava de Roa',
                ],
            351 =>
                [
                    'id' => 1352,
                    'province_id' => 9,
                    'name' => 'Navas de Bureba',
                ],
            352 =>
                [
                    'id' => 1353,
                    'province_id' => 9,
                    'name' => 'Nebreda',
                ],
            353 =>
                [
                    'id' => 1354,
                    'province_id' => 9,
                    'name' => 'Neila',
                ],
            354 =>
                [
                    'id' => 1355,
                    'province_id' => 9,
                    'name' => 'Olmedillo de Roa',
                ],
            355 =>
                [
                    'id' => 1356,
                    'province_id' => 9,
                    'name' => 'Olmillos de Muñó',
                ],
            356 =>
                [
                    'id' => 1357,
                    'province_id' => 9,
                    'name' => 'Oña',
                ],
            357 =>
                [
                    'id' => 1358,
                    'province_id' => 9,
                    'name' => 'Oquillas',
                ],
            358 =>
                [
                    'id' => 1359,
                    'province_id' => 9,
                    'name' => 'Orbaneja Riopico',
                ],
            359 =>
                [
                    'id' => 1360,
                    'province_id' => 9,
                    'name' => 'Padilla de Abajo',
                ],
            360 =>
                [
                    'id' => 1361,
                    'province_id' => 9,
                    'name' => 'Padilla de Arriba',
                ],
            361 =>
                [
                    'id' => 1362,
                    'province_id' => 9,
                    'name' => 'Padrones de Bureba',
                ],
            362 =>
                [
                    'id' => 1363,
                    'province_id' => 9,
                    'name' => 'Palacios de la Sierra',
                ],
            363 =>
                [
                    'id' => 1364,
                    'province_id' => 9,
                    'name' => 'Palacios de Riopisuerga',
                ],
            364 =>
                [
                    'id' => 1365,
                    'province_id' => 9,
                    'name' => 'Palazuelos de la Sierra',
                ],
            365 =>
                [
                    'id' => 1366,
                    'province_id' => 9,
                    'name' => 'Palazuelos de Muñó',
                ],
            366 =>
                [
                    'id' => 1367,
                    'province_id' => 9,
                    'name' => 'Pampliega',
                ],
            367 =>
                [
                    'id' => 1368,
                    'province_id' => 9,
                    'name' => 'Pancorbo',
                ],
            368 =>
                [
                    'id' => 1369,
                    'province_id' => 9,
                    'name' => 'Pardilla',
                ],
            369 =>
                [
                    'id' => 1370,
                    'province_id' => 9,
                    'name' => 'Partido de la Sierra en Tobalina',
                ],
            370 =>
                [
                    'id' => 1371,
                    'province_id' => 9,
                    'name' => 'Pedrosa de Duero',
                ],
            371 =>
                [
                    'id' => 1372,
                    'province_id' => 9,
                    'name' => 'Pedrosa de Río Úrbel',
                ],
            372 =>
                [
                    'id' => 1373,
                    'province_id' => 9,
                    'name' => 'Pedrosa del Páramo',
                ],
            373 =>
                [
                    'id' => 1374,
                    'province_id' => 9,
                    'name' => 'Pedrosa del Príncipe',
                ],
            374 =>
                [
                    'id' => 1375,
                    'province_id' => 9,
                    'name' => 'Peñaranda de Duero',
                ],
            375 =>
                [
                    'id' => 1376,
                    'province_id' => 9,
                    'name' => 'Peral de Arlanza',
                ],
            376 =>
                [
                    'id' => 1377,
                    'province_id' => 9,
                    'name' => 'Piérnigas',
                ],
            377 =>
                [
                    'id' => 1378,
                    'province_id' => 9,
                    'name' => 'Pineda de la Sierra',
                ],
            378 =>
                [
                    'id' => 1379,
                    'province_id' => 9,
                    'name' => 'Pineda Trasmonte',
                ],
            379 =>
                [
                    'id' => 1380,
                    'province_id' => 9,
                    'name' => 'Pinilla de los Barruecos',
                ],
            380 =>
                [
                    'id' => 1381,
                    'province_id' => 9,
                    'name' => 'Pinilla de los Moros',
                ],
            381 =>
                [
                    'id' => 1382,
                    'province_id' => 9,
                    'name' => 'Pinilla Trasmonte',
                ],
            382 =>
                [
                    'id' => 1383,
                    'province_id' => 9,
                    'name' => 'Poza de la Sal',
                ],
            383 =>
                [
                    'id' => 1384,
                    'province_id' => 9,
                    'name' => 'Prádanos de Bureba',
                ],
            384 =>
                [
                    'id' => 1385,
                    'province_id' => 9,
                    'name' => 'Pradoluengo',
                ],
            385 =>
                [
                    'id' => 1386,
                    'province_id' => 9,
                    'name' => 'Presencio',
                ],
            386 =>
                [
                    'id' => 1387,
                    'province_id' => 9,
                    'name' => 'Puebla de Arganzón, La',
                ],
            387 =>
                [
                    'id' => 1388,
                    'province_id' => 9,
                    'name' => 'Puentedura',
                ],
            388 =>
                [
                    'id' => 1389,
                    'province_id' => 9,
                    'name' => 'Quemada',
                ],
            389 =>
                [
                    'id' => 1390,
                    'province_id' => 9,
                    'name' => 'Quintana del Pidio',
                ],
            390 =>
                [
                    'id' => 1391,
                    'province_id' => 9,
                    'name' => 'Quintanabureba',
                ],
            391 =>
                [
                    'id' => 1392,
                    'province_id' => 9,
                    'name' => 'Quintanaélez',
                ],
            392 =>
                [
                    'id' => 1393,
                    'province_id' => 9,
                    'name' => 'Quintanaortuño',
                ],
            393 =>
                [
                    'id' => 1394,
                    'province_id' => 9,
                    'name' => 'Quintanapalla',
                ],
            394 =>
                [
                    'id' => 1395,
                    'province_id' => 9,
                    'name' => 'Quintanar de la Sierra',
                ],
            395 =>
                [
                    'id' => 1396,
                    'province_id' => 9,
                    'name' => 'Quintanavides',
                ],
            396 =>
                [
                    'id' => 1397,
                    'province_id' => 9,
                    'name' => 'Quintanilla de la Mata',
                ],
            397 =>
                [
                    'id' => 1398,
                    'province_id' => 9,
                    'name' => 'Quintanilla del Agua y Tordueles',
                ],
            398 =>
                [
                    'id' => 1399,
                    'province_id' => 9,
                    'name' => 'Quintanilla del Coco',
                ],
            399 =>
                [
                    'id' => 1400,
                    'province_id' => 9,
                    'name' => 'Quintanilla San García',
                ],
            400 =>
                [
                    'id' => 1401,
                    'province_id' => 9,
                    'name' => 'Quintanilla Vivar',
                ],
            401 =>
                [
                    'id' => 1402,
                    'province_id' => 9,
                    'name' => 'Quintanillas, Las',
                ],
            402 =>
                [
                    'id' => 1403,
                    'province_id' => 9,
                    'name' => 'Rabanera del Pinar',
                ],
            403 =>
                [
                    'id' => 1404,
                    'province_id' => 9,
                    'name' => 'Rábanos',
                ],
            404 =>
                [
                    'id' => 1405,
                    'province_id' => 9,
                    'name' => 'Rabé de las Calzadas',
                ],
            405 =>
                [
                    'id' => 1406,
                    'province_id' => 9,
                    'name' => 'Rebolledo de la Torre',
                ],
            406 =>
                [
                    'id' => 1407,
                    'province_id' => 9,
                    'name' => 'Redecilla del Camino',
                ],
            407 =>
                [
                    'id' => 1408,
                    'province_id' => 9,
                    'name' => 'Redecilla del Campo',
                ],
            408 =>
                [
                    'id' => 1409,
                    'province_id' => 9,
                    'name' => 'Regumiel de la Sierra',
                ],
            409 =>
                [
                    'id' => 1410,
                    'province_id' => 9,
                    'name' => 'Reinoso',
                ],
            410 =>
                [
                    'id' => 1411,
                    'province_id' => 9,
                    'name' => 'Retuerta',
                ],
            411 =>
                [
                    'id' => 1412,
                    'province_id' => 9,
                    'name' => 'Revilla del Campo',
                ],
            412 =>
                [
                    'id' => 1413,
                    'province_id' => 9,
                    'name' => 'Revilla Vallejera',
                ],
            413 =>
                [
                    'id' => 1414,
                    'province_id' => 9,
                    'name' => 'Revilla y Ahedo, La',
                ],
            414 =>
                [
                    'id' => 1415,
                    'province_id' => 9,
                    'name' => 'Revillarruz',
                ],
            415 =>
                [
                    'id' => 1416,
                    'province_id' => 9,
                    'name' => 'Rezmondo',
                ],
            416 =>
                [
                    'id' => 1417,
                    'province_id' => 9,
                    'name' => 'Riocavado de la Sierra',
                ],
            417 =>
                [
                    'id' => 1418,
                    'province_id' => 9,
                    'name' => 'Roa',
                ],
            418 =>
                [
                    'id' => 1419,
                    'province_id' => 9,
                    'name' => 'Rojas',
                ],
            419 =>
                [
                    'id' => 1420,
                    'province_id' => 9,
                    'name' => 'Royuela de Río Franco',
                ],
            420 =>
                [
                    'id' => 1421,
                    'province_id' => 9,
                    'name' => 'Rubena',
                ],
            421 =>
                [
                    'id' => 1422,
                    'province_id' => 9,
                    'name' => 'Rublacedo de Abajo',
                ],
            422 =>
                [
                    'id' => 1423,
                    'province_id' => 9,
                    'name' => 'Rucandio',
                ],
            423 =>
                [
                    'id' => 1424,
                    'province_id' => 9,
                    'name' => 'Salas de Bureba',
                ],
            424 =>
                [
                    'id' => 1425,
                    'province_id' => 9,
                    'name' => 'Salas de los Infantes',
                ],
            425 =>
                [
                    'id' => 1426,
                    'province_id' => 9,
                    'name' => 'Saldaña de Burgos',
                ],
            426 =>
                [
                    'id' => 1427,
                    'province_id' => 9,
                    'name' => 'Salinillas de Bureba',
                ],
            427 =>
                [
                    'id' => 1428,
                    'province_id' => 9,
                    'name' => 'San Adrián de Juarros',
                ],
            428 =>
                [
                    'id' => 1429,
                    'province_id' => 9,
                    'name' => 'San Juan del Monte',
                ],
            429 =>
                [
                    'id' => 1430,
                    'province_id' => 9,
                    'name' => 'San Mamés de Burgos',
                ],
            430 =>
                [
                    'id' => 1431,
                    'province_id' => 9,
                    'name' => 'San Martín de Rubiales',
                ],
            431 =>
                [
                    'id' => 1432,
                    'province_id' => 9,
                    'name' => 'San Millán de Lara',
                ],
            432 =>
                [
                    'id' => 1433,
                    'province_id' => 9,
                    'name' => 'San Vicente del Valle',
                ],
            433 =>
                [
                    'id' => 1434,
                    'province_id' => 9,
                    'name' => 'Santa Cecilia',
                ],
            434 =>
                [
                    'id' => 1435,
                    'province_id' => 9,
                    'name' => 'Santa Cruz de la Salceda',
                ],
            435 =>
                [
                    'id' => 1436,
                    'province_id' => 9,
                    'name' => 'Santa Cruz del Valle Urbión',
                ],
            436 =>
                [
                    'id' => 1437,
                    'province_id' => 9,
                    'name' => 'Santa Gadea del Cid',
                ],
            437 =>
                [
                    'id' => 1438,
                    'province_id' => 9,
                    'name' => 'Santa Inés',
                ],
            438 =>
                [
                    'id' => 1439,
                    'province_id' => 9,
                    'name' => 'Santa María del Campo',
                ],
            439 =>
                [
                    'id' => 1440,
                    'province_id' => 9,
                    'name' => 'Santa María del Invierno',
                ],
            440 =>
                [
                    'id' => 1441,
                    'province_id' => 9,
                    'name' => 'Santa María del Mercadillo',
                ],
            441 =>
                [
                    'id' => 1442,
                    'province_id' => 9,
                    'name' => 'Santa María Rivarredonda',
                ],
            442 =>
                [
                    'id' => 1443,
                    'province_id' => 9,
                    'name' => 'Santa Olalla de Bureba',
                ],
            443 =>
                [
                    'id' => 1444,
                    'province_id' => 9,
                    'name' => 'Santibáñez de Esgueva',
                ],
            444 =>
                [
                    'id' => 1445,
                    'province_id' => 9,
                    'name' => 'Santibáñez del Val',
                ],
            445 =>
                [
                    'id' => 1446,
                    'province_id' => 9,
                    'name' => 'Santo Domingo de Silos',
                ],
            446 =>
                [
                    'id' => 1447,
                    'province_id' => 9,
                    'name' => 'Sargentes de la Lora',
                ],
            447 =>
                [
                    'id' => 1448,
                    'province_id' => 9,
                    'name' => 'Sarracín',
                ],
            448 =>
                [
                    'id' => 1449,
                    'province_id' => 9,
                    'name' => 'Sasamón',
                ],
            449 =>
                [
                    'id' => 1450,
                    'province_id' => 9,
                    'name' => 'Sequera de Haza, La',
                ],
            450 =>
                [
                    'id' => 1451,
                    'province_id' => 9,
                    'name' => 'Solarana',
                ],
            451 =>
                [
                    'id' => 1452,
                    'province_id' => 9,
                    'name' => 'Sordillos',
                ],
            452 =>
                [
                    'id' => 1453,
                    'province_id' => 9,
                    'name' => 'Sotillo de la Ribera',
                ],
            453 =>
                [
                    'id' => 1454,
                    'province_id' => 9,
                    'name' => 'Sotragero',
                ],
            454 =>
                [
                    'id' => 1455,
                    'province_id' => 9,
                    'name' => 'Sotresgudo',
                ],
            455 =>
                [
                    'id' => 1456,
                    'province_id' => 9,
                    'name' => 'Susinos del Páramo',
                ],
            456 =>
                [
                    'id' => 1457,
                    'province_id' => 9,
                    'name' => 'Tamarón',
                ],
            457 =>
                [
                    'id' => 1458,
                    'province_id' => 9,
                    'name' => 'Tardajos',
                ],
            458 =>
                [
                    'id' => 1459,
                    'province_id' => 9,
                    'name' => 'Tejada',
                ],
            459 =>
                [
                    'id' => 1460,
                    'province_id' => 9,
                    'name' => 'Terradillos de Esgueva',
                ],
            460 =>
                [
                    'id' => 1461,
                    'province_id' => 9,
                    'name' => 'Tinieblas de la Sierra',
                ],
            461 =>
                [
                    'id' => 1462,
                    'province_id' => 9,
                    'name' => 'Tobar',
                ],
            462 =>
                [
                    'id' => 1463,
                    'province_id' => 9,
                    'name' => 'Tordómar',
                ],
            463 =>
                [
                    'id' => 1464,
                    'province_id' => 9,
                    'name' => 'Torrecilla del Monte',
                ],
            464 =>
                [
                    'id' => 1465,
                    'province_id' => 9,
                    'name' => 'Torregalindo',
                ],
            465 =>
                [
                    'id' => 1466,
                    'province_id' => 9,
                    'name' => 'Torrelara',
                ],
            466 =>
                [
                    'id' => 1467,
                    'province_id' => 9,
                    'name' => 'Torrepadre',
                ],
            467 =>
                [
                    'id' => 1468,
                    'province_id' => 9,
                    'name' => 'Torresandino',
                ],
            468 =>
                [
                    'id' => 1469,
                    'province_id' => 9,
                    'name' => 'Tórtoles de Esgueva',
                ],
            469 =>
                [
                    'id' => 1470,
                    'province_id' => 9,
                    'name' => 'Tosantos',
                ],
            470 =>
                [
                    'id' => 1471,
                    'province_id' => 9,
                    'name' => 'Trespaderne',
                ],
            471 =>
                [
                    'id' => 1472,
                    'province_id' => 9,
                    'name' => 'Tubilla del Agua',
                ],
            472 =>
                [
                    'id' => 1473,
                    'province_id' => 9,
                    'name' => 'Tubilla del Lago',
                ],
            473 =>
                [
                    'id' => 1474,
                    'province_id' => 9,
                    'name' => 'Úrbel del Castillo',
                ],
            474 =>
                [
                    'id' => 1475,
                    'province_id' => 9,
                    'name' => 'Vadocondes',
                ],
            475 =>
                [
                    'id' => 1476,
                    'province_id' => 9,
                    'name' => 'Valdeande',
                ],
            476 =>
                [
                    'id' => 1477,
                    'province_id' => 9,
                    'name' => 'Valdezate',
                ],
            477 =>
                [
                    'id' => 1478,
                    'province_id' => 9,
                    'name' => 'Valdorros',
                ],
            478 =>
                [
                    'id' => 1479,
                    'province_id' => 9,
                    'name' => 'Vallarta de Bureba',
                ],
            479 =>
                [
                    'id' => 1480,
                    'province_id' => 9,
                    'name' => 'Valle de las Navas',
                ],
            480 =>
                [
                    'id' => 1481,
                    'province_id' => 9,
                    'name' => 'Valle de Losa',
                ],
            481 =>
                [
                    'id' => 1482,
                    'province_id' => 9,
                    'name' => 'Valle de Manzanedo',
                ],
            482 =>
                [
                    'id' => 1483,
                    'province_id' => 9,
                    'name' => 'Valle de Mena',
                ],
            483 =>
                [
                    'id' => 1484,
                    'province_id' => 9,
                    'name' => 'Valle de Oca',
                ],
            484 =>
                [
                    'id' => 1485,
                    'province_id' => 9,
                    'name' => 'Valle de Santibáñez',
                ],
            485 =>
                [
                    'id' => 1486,
                    'province_id' => 9,
                    'name' => 'Valle de Sedano',
                ],
            486 =>
                [
                    'id' => 1487,
                    'province_id' => 9,
                    'name' => 'Valle de Tobalina',
                ],
            487 =>
                [
                    'id' => 1488,
                    'province_id' => 9,
                    'name' => 'Valle de Valdebezana',
                ],
            488 =>
                [
                    'id' => 1489,
                    'province_id' => 9,
                    'name' => 'Valle de Valdelaguna',
                ],
            489 =>
                [
                    'id' => 1490,
                    'province_id' => 9,
                    'name' => 'Valle de Valdelucio',
                ],
            490 =>
                [
                    'id' => 1491,
                    'province_id' => 9,
                    'name' => 'Valle de Zamanzas',
                ],
            491 =>
                [
                    'id' => 1492,
                    'province_id' => 9,
                    'name' => 'Vallejera',
                ],
            492 =>
                [
                    'id' => 1493,
                    'province_id' => 9,
                    'name' => 'Valles de Palenzuela',
                ],
            493 =>
                [
                    'id' => 1494,
                    'province_id' => 9,
                    'name' => 'Valluércanes',
                ],
            494 =>
                [
                    'id' => 1495,
                    'province_id' => 9,
                    'name' => 'Valmala',
                ],
            495 =>
                [
                    'id' => 1496,
                    'province_id' => 9,
                    'name' => 'Vid de Bureba, La',
                ],
            496 =>
                [
                    'id' => 1497,
                    'province_id' => 9,
                    'name' => 'Vid y Barrios, La',
                ],
            497 =>
                [
                    'id' => 1498,
                    'province_id' => 9,
                    'name' => 'Vileña',
                ],
            498 =>
                [
                    'id' => 1499,
                    'province_id' => 9,
                    'name' => 'Villadiego',
                ],
            499 =>
                [
                    'id' => 1500,
                    'province_id' => 9,
                    'name' => 'Villaescusa de Roa',
                ],
        ]);
        \DB::table('localities')->insert([
            0 =>
                [
                    'id' => 1501,
                    'province_id' => 9,
                    'name' => 'Villaescusa la Sombría',
                ],
            1 =>
                [
                    'id' => 1502,
                    'province_id' => 9,
                    'name' => 'Villaespasa',
                ],
            2 =>
                [
                    'id' => 1503,
                    'province_id' => 9,
                    'name' => 'Villafranca Montes de Oca',
                ],
            3 =>
                [
                    'id' => 1504,
                    'province_id' => 9,
                    'name' => 'Villafruela',
                ],
            4 =>
                [
                    'id' => 1505,
                    'province_id' => 9,
                    'name' => 'Villagalijo',
                ],
            5 =>
                [
                    'id' => 1506,
                    'province_id' => 9,
                    'name' => 'Villagonzalo Pedernales',
                ],
            6 =>
                [
                    'id' => 1507,
                    'province_id' => 9,
                    'name' => 'Villahoz',
                ],
            7 =>
                [
                    'id' => 1508,
                    'province_id' => 9,
                    'name' => 'Villalba de Duero',
                ],
            8 =>
                [
                    'id' => 1509,
                    'province_id' => 9,
                    'name' => 'Villalbilla de Burgos',
                ],
            9 =>
                [
                    'id' => 1510,
                    'province_id' => 9,
                    'name' => 'Villalbilla de Gumiel',
                ],
            10 =>
                [
                    'id' => 1511,
                    'province_id' => 9,
                    'name' => 'Villaldemiro',
                ],
            11 =>
                [
                    'id' => 1512,
                    'province_id' => 9,
                    'name' => 'Villalmanzo',
                ],
            12 =>
                [
                    'id' => 1513,
                    'province_id' => 9,
                    'name' => 'Villamayor de los Montes',
                ],
            13 =>
                [
                    'id' => 1514,
                    'province_id' => 9,
                    'name' => 'Villamayor de Treviño',
                ],
            14 =>
                [
                    'id' => 1515,
                    'province_id' => 9,
                    'name' => 'Villambistia',
                ],
            15 =>
                [
                    'id' => 1516,
                    'province_id' => 9,
                    'name' => 'Villamedianilla',
                ],
            16 =>
                [
                    'id' => 1517,
                    'province_id' => 9,
                    'name' => 'Villamiel de la Sierra',
                ],
            17 =>
                [
                    'id' => 1518,
                    'province_id' => 9,
                    'name' => 'Villangómez',
                ],
            18 =>
                [
                    'id' => 1519,
                    'province_id' => 9,
                    'name' => 'Villanueva de Argaño',
                ],
            19 =>
                [
                    'id' => 1520,
                    'province_id' => 9,
                    'name' => 'Villanueva de Carazo',
                ],
            20 =>
                [
                    'id' => 1521,
                    'province_id' => 9,
                    'name' => 'Villanueva de Gumiel',
                ],
            21 =>
                [
                    'id' => 1522,
                    'province_id' => 9,
                    'name' => 'Villanueva de Teba',
                ],
            22 =>
                [
                    'id' => 1523,
                    'province_id' => 9,
                    'name' => 'Villaquirán de la Puebla',
                ],
            23 =>
                [
                    'id' => 1524,
                    'province_id' => 9,
                    'name' => 'Villaquirán de los Infantes',
                ],
            24 =>
                [
                    'id' => 1525,
                    'province_id' => 9,
                    'name' => 'Villarcayo de Merindad de Castilla la Vieja',
                ],
            25 =>
                [
                    'id' => 1526,
                    'province_id' => 9,
                    'name' => 'Villariezo',
                ],
            26 =>
                [
                    'id' => 1527,
                    'province_id' => 9,
                    'name' => 'Villasandino',
                ],
            27 =>
                [
                    'id' => 1528,
                    'province_id' => 9,
                    'name' => 'Villasur de Herreros',
                ],
            28 =>
                [
                    'id' => 1529,
                    'province_id' => 9,
                    'name' => 'Villatuelda',
                ],
            29 =>
                [
                    'id' => 1530,
                    'province_id' => 9,
                    'name' => 'Villaverde del Monte',
                ],
            30 =>
                [
                    'id' => 1531,
                    'province_id' => 9,
                    'name' => 'Villaverde-Mogina',
                ],
            31 =>
                [
                    'id' => 1532,
                    'province_id' => 9,
                    'name' => 'Villayerno Morquillas',
                ],
            32 =>
                [
                    'id' => 1533,
                    'province_id' => 9,
                    'name' => 'Villazopeque',
                ],
            33 =>
                [
                    'id' => 1534,
                    'province_id' => 9,
                    'name' => 'Villegas',
                ],
            34 =>
                [
                    'id' => 1535,
                    'province_id' => 9,
                    'name' => 'Villoruebo',
                ],
            35 =>
                [
                    'id' => 1536,
                    'province_id' => 9,
                    'name' => 'Viloria de Rioja',
                ],
            36 =>
                [
                    'id' => 1537,
                    'province_id' => 9,
                    'name' => 'Vilviestre del Pinar',
                ],
            37 =>
                [
                    'id' => 1538,
                    'province_id' => 9,
                    'name' => 'Vizcaínos',
                ],
            38 =>
                [
                    'id' => 1539,
                    'province_id' => 9,
                    'name' => 'Zael',
                ],
            39 =>
                [
                    'id' => 1540,
                    'province_id' => 9,
                    'name' => 'Zarzosa de Río Pisuerga',
                ],
            40 =>
                [
                    'id' => 1541,
                    'province_id' => 9,
                    'name' => 'Zazuar',
                ],
            41 =>
                [
                    'id' => 1542,
                    'province_id' => 9,
                    'name' => 'Zuñeda',
                ],
            42 =>
                [
                    'id' => 1543,
                    'province_id' => 10,
                    'name' => 'Abadía',
                ],
            43 =>
                [
                    'id' => 1544,
                    'province_id' => 10,
                    'name' => 'Abertura',
                ],
            44 =>
                [
                    'id' => 1545,
                    'province_id' => 10,
                    'name' => 'Acebo',
                ],
            45 =>
                [
                    'id' => 1546,
                    'province_id' => 10,
                    'name' => 'Acehúche',
                ],
            46 =>
                [
                    'id' => 1547,
                    'province_id' => 10,
                    'name' => 'Aceituna',
                ],
            47 =>
                [
                    'id' => 1548,
                    'province_id' => 10,
                    'name' => 'Ahigal',
                ],
            48 =>
                [
                    'id' => 1549,
                    'province_id' => 10,
                    'name' => 'Alagón del Río',
                ],
            49 =>
                [
                    'id' => 1550,
                    'province_id' => 10,
                    'name' => 'Albalá',
                ],
            50 =>
                [
                    'id' => 1551,
                    'province_id' => 10,
                    'name' => 'Alcántara',
                ],
            51 =>
                [
                    'id' => 1552,
                    'province_id' => 10,
                    'name' => 'Alcollarín',
                ],
            52 =>
                [
                    'id' => 1553,
                    'province_id' => 10,
                    'name' => 'Alcuéscar',
                ],
            53 =>
                [
                    'id' => 1554,
                    'province_id' => 10,
                    'name' => 'Aldea del Cano',
                ],
            54 =>
                [
                    'id' => 1555,
                    'province_id' => 10,
                    'name' => 'Aldea del Obispo, La',
                ],
            55 =>
                [
                    'id' => 1556,
                    'province_id' => 10,
                    'name' => 'Aldeacentenera',
                ],
            56 =>
                [
                    'id' => 1557,
                    'province_id' => 10,
                    'name' => 'Aldeanueva de la Vera',
                ],
            57 =>
                [
                    'id' => 1558,
                    'province_id' => 10,
                    'name' => 'Aldeanueva del Camino',
                ],
            58 =>
                [
                    'id' => 1559,
                    'province_id' => 10,
                    'name' => 'Aldehuela de Jerte',
                ],
            59 =>
                [
                    'id' => 1560,
                    'province_id' => 10,
                    'name' => 'Alía',
                ],
            60 =>
                [
                    'id' => 1561,
                    'province_id' => 10,
                    'name' => 'Aliseda',
                ],
            61 =>
                [
                    'id' => 1562,
                    'province_id' => 10,
                    'name' => 'Almaraz',
                ],
            62 =>
                [
                    'id' => 1563,
                    'province_id' => 10,
                    'name' => 'Almoharín',
                ],
            63 =>
                [
                    'id' => 1564,
                    'province_id' => 10,
                    'name' => 'Arroyo de la Luz',
                ],
            64 =>
                [
                    'id' => 1565,
                    'province_id' => 10,
                    'name' => 'Arroyomolinos',
                ],
            65 =>
                [
                    'id' => 1566,
                    'province_id' => 10,
                    'name' => 'Arroyomolinos de la Vera',
                ],
            66 =>
                [
                    'id' => 1567,
                    'province_id' => 10,
                    'name' => 'Baños de Montemayor',
                ],
            67 =>
                [
                    'id' => 1568,
                    'province_id' => 10,
                    'name' => 'Barrado',
                ],
            68 =>
                [
                    'id' => 1569,
                    'province_id' => 10,
                    'name' => 'Belvís de Monroy',
                ],
            69 =>
                [
                    'id' => 1570,
                    'province_id' => 10,
                    'name' => 'Benquerencia',
                ],
            70 =>
                [
                    'id' => 1571,
                    'province_id' => 10,
                    'name' => 'Berrocalejo',
                ],
            71 =>
                [
                    'id' => 1572,
                    'province_id' => 10,
                    'name' => 'Berzocana',
                ],
            72 =>
                [
                    'id' => 1573,
                    'province_id' => 10,
                    'name' => 'Bohonal de Ibor',
                ],
            73 =>
                [
                    'id' => 1574,
                    'province_id' => 10,
                    'name' => 'Botija',
                ],
            74 =>
                [
                    'id' => 1575,
                    'province_id' => 10,
                    'name' => 'Brozas',
                ],
            75 =>
                [
                    'id' => 1576,
                    'province_id' => 10,
                    'name' => 'Cabañas del Castillo',
                ],
            76 =>
                [
                    'id' => 1577,
                    'province_id' => 10,
                    'name' => 'Cabezabellosa',
                ],
            77 =>
                [
                    'id' => 1578,
                    'province_id' => 10,
                    'name' => 'Cabezuela del Valle',
                ],
            78 =>
                [
                    'id' => 1579,
                    'province_id' => 10,
                    'name' => 'Cabrero',
                ],
            79 =>
                [
                    'id' => 1580,
                    'province_id' => 10,
                    'name' => 'Cáceres',
                ],
            80 =>
                [
                    'id' => 1581,
                    'province_id' => 10,
                    'name' => 'Cachorrilla',
                ],
            81 =>
                [
                    'id' => 1582,
                    'province_id' => 10,
                    'name' => 'Cadalso',
                ],
            82 =>
                [
                    'id' => 1583,
                    'province_id' => 10,
                    'name' => 'Calzadilla',
                ],
            83 =>
                [
                    'id' => 1584,
                    'province_id' => 10,
                    'name' => 'Caminomorisco',
                ],
            84 =>
                [
                    'id' => 1585,
                    'province_id' => 10,
                    'name' => 'Campillo de Deleitosa',
                ],
            85 =>
                [
                    'id' => 1586,
                    'province_id' => 10,
                    'name' => 'Campo Lugar',
                ],
            86 =>
                [
                    'id' => 1587,
                    'province_id' => 10,
                    'name' => 'Cañamero',
                ],
            87 =>
                [
                    'id' => 1588,
                    'province_id' => 10,
                    'name' => 'Cañaveral',
                ],
            88 =>
                [
                    'id' => 1589,
                    'province_id' => 10,
                    'name' => 'Carbajo',
                ],
            89 =>
                [
                    'id' => 1590,
                    'province_id' => 10,
                    'name' => 'Carcaboso',
                ],
            90 =>
                [
                    'id' => 1591,
                    'province_id' => 10,
                    'name' => 'Carrascalejo',
                ],
            91 =>
                [
                    'id' => 1592,
                    'province_id' => 10,
                    'name' => 'Casar de Cáceres',
                ],
            92 =>
                [
                    'id' => 1593,
                    'province_id' => 10,
                    'name' => 'Casar de Palomero',
                ],
            93 =>
                [
                    'id' => 1594,
                    'province_id' => 10,
                    'name' => 'Casares de las Hurdes',
                ],
            94 =>
                [
                    'id' => 1595,
                    'province_id' => 10,
                    'name' => 'Casas de Don Antonio',
                ],
            95 =>
                [
                    'id' => 1596,
                    'province_id' => 10,
                    'name' => 'Casas de Don Gómez',
                ],
            96 =>
                [
                    'id' => 1597,
                    'province_id' => 10,
                    'name' => 'Casas de Millán',
                ],
            97 =>
                [
                    'id' => 1598,
                    'province_id' => 10,
                    'name' => 'Casas de Miravete',
                ],
            98 =>
                [
                    'id' => 1599,
                    'province_id' => 10,
                    'name' => 'Casas del Castañar',
                ],
            99 =>
                [
                    'id' => 1600,
                    'province_id' => 10,
                    'name' => 'Casas del Monte',
                ],
            100 =>
                [
                    'id' => 1601,
                    'province_id' => 10,
                    'name' => 'Casatejada',
                ],
            101 =>
                [
                    'id' => 1602,
                    'province_id' => 10,
                    'name' => 'Casillas de Coria',
                ],
            102 =>
                [
                    'id' => 1603,
                    'province_id' => 10,
                    'name' => 'Castañar de Ibor',
                ],
            103 =>
                [
                    'id' => 1604,
                    'province_id' => 10,
                    'name' => 'Ceclavín',
                ],
            104 =>
                [
                    'id' => 1605,
                    'province_id' => 10,
                    'name' => 'Cedillo',
                ],
            105 =>
                [
                    'id' => 1606,
                    'province_id' => 10,
                    'name' => 'Cerezo',
                ],
            106 =>
                [
                    'id' => 1607,
                    'province_id' => 10,
                    'name' => 'Cilleros',
                ],
            107 =>
                [
                    'id' => 1608,
                    'province_id' => 10,
                    'name' => 'Collado',
                ],
            108 =>
                [
                    'id' => 1609,
                    'province_id' => 10,
                    'name' => 'Conquista de la Sierra',
                ],
            109 =>
                [
                    'id' => 1610,
                    'province_id' => 10,
                    'name' => 'Coria',
                ],
            110 =>
                [
                    'id' => 1611,
                    'province_id' => 10,
                    'name' => 'Cuacos de Yuste',
                ],
            111 =>
                [
                    'id' => 1612,
                    'province_id' => 10,
                    'name' => 'Cumbre, La',
                ],
            112 =>
                [
                    'id' => 1613,
                    'province_id' => 10,
                    'name' => 'Deleitosa',
                ],
            113 =>
                [
                    'id' => 1614,
                    'province_id' => 10,
                    'name' => 'Descargamaría',
                ],
            114 =>
                [
                    'id' => 1615,
                    'province_id' => 10,
                    'name' => 'Eljas',
                ],
            115 =>
                [
                    'id' => 1616,
                    'province_id' => 10,
                    'name' => 'Escurial',
                ],
            116 =>
                [
                    'id' => 1617,
                    'province_id' => 10,
                    'name' => 'Fresnedoso de Ibor',
                ],
            117 =>
                [
                    'id' => 1618,
                    'province_id' => 10,
                    'name' => 'Galisteo',
                ],
            118 =>
                [
                    'id' => 1619,
                    'province_id' => 10,
                    'name' => 'Garciaz',
                ],
            119 =>
                [
                    'id' => 1620,
                    'province_id' => 10,
                    'name' => 'Garganta, La',
                ],
            120 =>
                [
                    'id' => 1621,
                    'province_id' => 10,
                    'name' => 'Garganta la Olla',
                ],
            121 =>
                [
                    'id' => 1622,
                    'province_id' => 10,
                    'name' => 'Gargantilla',
                ],
            122 =>
                [
                    'id' => 1623,
                    'province_id' => 10,
                    'name' => 'Gargüera',
                ],
            123 =>
                [
                    'id' => 1624,
                    'province_id' => 10,
                    'name' => 'Garrovillas de Alconétar',
                ],
            124 =>
                [
                    'id' => 1625,
                    'province_id' => 10,
                    'name' => 'Garvín',
                ],
            125 =>
                [
                    'id' => 1626,
                    'province_id' => 10,
                    'name' => 'Gata',
                ],
            126 =>
                [
                    'id' => 1627,
                    'province_id' => 10,
                    'name' => 'Gordo, El',
                ],
            127 =>
                [
                    'id' => 1628,
                    'province_id' => 10,
                    'name' => 'Granja, La',
                ],
            128 =>
                [
                    'id' => 1629,
                    'province_id' => 10,
                    'name' => 'Guadalupe',
                ],
            129 =>
                [
                    'id' => 1630,
                    'province_id' => 10,
                    'name' => 'Guijo de Coria',
                ],
            130 =>
                [
                    'id' => 1631,
                    'province_id' => 10,
                    'name' => 'Guijo de Galisteo',
                ],
            131 =>
                [
                    'id' => 1632,
                    'province_id' => 10,
                    'name' => 'Guijo de Granadilla',
                ],
            132 =>
                [
                    'id' => 1633,
                    'province_id' => 10,
                    'name' => 'Guijo de Santa Bárbara',
                ],
            133 =>
                [
                    'id' => 1634,
                    'province_id' => 10,
                    'name' => 'Herguijuela',
                ],
            134 =>
                [
                    'id' => 1635,
                    'province_id' => 10,
                    'name' => 'Hernán-Pérez',
                ],
            135 =>
                [
                    'id' => 1636,
                    'province_id' => 10,
                    'name' => 'Herrera de Alcántara',
                ],
            136 =>
                [
                    'id' => 1637,
                    'province_id' => 10,
                    'name' => 'Herreruela',
                ],
            137 =>
                [
                    'id' => 1638,
                    'province_id' => 10,
                    'name' => 'Hervás',
                ],
            138 =>
                [
                    'id' => 1639,
                    'province_id' => 10,
                    'name' => 'Higuera',
                ],
            139 =>
                [
                    'id' => 1640,
                    'province_id' => 10,
                    'name' => 'Hinojal',
                ],
            140 =>
                [
                    'id' => 1641,
                    'province_id' => 10,
                    'name' => 'Holguera',
                ],
            141 =>
                [
                    'id' => 1642,
                    'province_id' => 10,
                    'name' => 'Hoyos',
                ],
            142 =>
                [
                    'id' => 1643,
                    'province_id' => 10,
                    'name' => 'Huélaga',
                ],
            143 =>
                [
                    'id' => 1644,
                    'province_id' => 10,
                    'name' => 'Ibahernando',
                ],
            144 =>
                [
                    'id' => 1645,
                    'province_id' => 10,
                    'name' => 'Jaraicejo',
                ],
            145 =>
                [
                    'id' => 1646,
                    'province_id' => 10,
                    'name' => 'Jaraíz de la Vera',
                ],
            146 =>
                [
                    'id' => 1647,
                    'province_id' => 10,
                    'name' => 'Jarandilla de la Vera',
                ],
            147 =>
                [
                    'id' => 1648,
                    'province_id' => 10,
                    'name' => 'Jarilla',
                ],
            148 =>
                [
                    'id' => 1649,
                    'province_id' => 10,
                    'name' => 'Jerte',
                ],
            149 =>
                [
                    'id' => 1650,
                    'province_id' => 10,
                    'name' => 'Ladrillar',
                ],
            150 =>
                [
                    'id' => 1651,
                    'province_id' => 10,
                    'name' => 'Logrosán',
                ],
            151 =>
                [
                    'id' => 1652,
                    'province_id' => 10,
                    'name' => 'Losar de la Vera',
                ],
            152 =>
                [
                    'id' => 1653,
                    'province_id' => 10,
                    'name' => 'Madrigal de la Vera',
                ],
            153 =>
                [
                    'id' => 1654,
                    'province_id' => 10,
                    'name' => 'Madrigalejo',
                ],
            154 =>
                [
                    'id' => 1655,
                    'province_id' => 10,
                    'name' => 'Madroñera',
                ],
            155 =>
                [
                    'id' => 1656,
                    'province_id' => 10,
                    'name' => 'Majadas',
                ],
            156 =>
                [
                    'id' => 1657,
                    'province_id' => 10,
                    'name' => 'Malpartida de Cáceres',
                ],
            157 =>
                [
                    'id' => 1658,
                    'province_id' => 10,
                    'name' => 'Malpartida de Plasencia',
                ],
            158 =>
                [
                    'id' => 1659,
                    'province_id' => 10,
                    'name' => 'Marchagaz',
                ],
            159 =>
                [
                    'id' => 1660,
                    'province_id' => 10,
                    'name' => 'Mata de Alcántara',
                ],
            160 =>
                [
                    'id' => 1661,
                    'province_id' => 10,
                    'name' => 'Membrío',
                ],
            161 =>
                [
                    'id' => 1662,
                    'province_id' => 10,
                    'name' => 'Mesas de Ibor',
                ],
            162 =>
                [
                    'id' => 1663,
                    'province_id' => 10,
                    'name' => 'Miajadas',
                ],
            163 =>
                [
                    'id' => 1664,
                    'province_id' => 10,
                    'name' => 'Millanes',
                ],
            164 =>
                [
                    'id' => 1665,
                    'province_id' => 10,
                    'name' => 'Mirabel',
                ],
            165 =>
                [
                    'id' => 1666,
                    'province_id' => 10,
                    'name' => 'Mohedas de Granadilla',
                ],
            166 =>
                [
                    'id' => 1667,
                    'province_id' => 10,
                    'name' => 'Monroy',
                ],
            167 =>
                [
                    'id' => 1668,
                    'province_id' => 10,
                    'name' => 'Montánchez',
                ],
            168 =>
                [
                    'id' => 1669,
                    'province_id' => 10,
                    'name' => 'Montehermoso',
                ],
            169 =>
                [
                    'id' => 1670,
                    'province_id' => 10,
                    'name' => 'Moraleja',
                ],
            170 =>
                [
                    'id' => 1671,
                    'province_id' => 10,
                    'name' => 'Morcillo',
                ],
            171 =>
                [
                    'id' => 1672,
                    'province_id' => 10,
                    'name' => 'Navaconcejo',
                ],
            172 =>
                [
                    'id' => 1673,
                    'province_id' => 10,
                    'name' => 'Navalmoral de la Mata',
                ],
            173 =>
                [
                    'id' => 1674,
                    'province_id' => 10,
                    'name' => 'Navalvillar de Ibor',
                ],
            174 =>
                [
                    'id' => 1675,
                    'province_id' => 10,
                    'name' => 'Navas del Madroño',
                ],
            175 =>
                [
                    'id' => 1676,
                    'province_id' => 10,
                    'name' => 'Navezuelas',
                ],
            176 =>
                [
                    'id' => 1677,
                    'province_id' => 10,
                    'name' => 'Nuñomoral',
                ],
            177 =>
                [
                    'id' => 1678,
                    'province_id' => 10,
                    'name' => 'Oliva de Plasencia',
                ],
            178 =>
                [
                    'id' => 1679,
                    'province_id' => 10,
                    'name' => 'Palomero',
                ],
            179 =>
                [
                    'id' => 1680,
                    'province_id' => 10,
                    'name' => 'Pasarón de la Vera',
                ],
            180 =>
                [
                    'id' => 1681,
                    'province_id' => 10,
                    'name' => 'Pedroso de Acim',
                ],
            181 =>
                [
                    'id' => 1682,
                    'province_id' => 10,
                    'name' => 'Peraleda de la Mata',
                ],
            182 =>
                [
                    'id' => 1683,
                    'province_id' => 10,
                    'name' => 'Peraleda de San Román',
                ],
            183 =>
                [
                    'id' => 1684,
                    'province_id' => 10,
                    'name' => 'Perales del Puerto',
                ],
            184 =>
                [
                    'id' => 1685,
                    'province_id' => 10,
                    'name' => 'Pescueza',
                ],
            185 =>
                [
                    'id' => 1686,
                    'province_id' => 10,
                    'name' => 'Pesga, La',
                ],
            186 =>
                [
                    'id' => 1687,
                    'province_id' => 10,
                    'name' => 'Piedras Albas',
                ],
            187 =>
                [
                    'id' => 1688,
                    'province_id' => 10,
                    'name' => 'Pinofranqueado',
                ],
            188 =>
                [
                    'id' => 1689,
                    'province_id' => 10,
                    'name' => 'Piornal',
                ],
            189 =>
                [
                    'id' => 1690,
                    'province_id' => 10,
                    'name' => 'Plasencia',
                ],
            190 =>
                [
                    'id' => 1691,
                    'province_id' => 10,
                    'name' => 'Plasenzuela',
                ],
            191 =>
                [
                    'id' => 1692,
                    'province_id' => 10,
                    'name' => 'Portaje',
                ],
            192 =>
                [
                    'id' => 1693,
                    'province_id' => 10,
                    'name' => 'Portezuelo',
                ],
            193 =>
                [
                    'id' => 1694,
                    'province_id' => 10,
                    'name' => 'Pozuelo de Zarzón',
                ],
            194 =>
                [
                    'id' => 1695,
                    'province_id' => 10,
                    'name' => 'Puerto de Santa Cruz',
                ],
            195 =>
                [
                    'id' => 1696,
                    'province_id' => 10,
                    'name' => 'Rebollar',
                ],
            196 =>
                [
                    'id' => 1697,
                    'province_id' => 10,
                    'name' => 'Riolobos',
                ],
            197 =>
                [
                    'id' => 1698,
                    'province_id' => 10,
                    'name' => 'Robledillo de Gata',
                ],
            198 =>
                [
                    'id' => 1699,
                    'province_id' => 10,
                    'name' => 'Robledillo de la Vera',
                ],
            199 =>
                [
                    'id' => 1700,
                    'province_id' => 10,
                    'name' => 'Robledillo de Trujillo',
                ],
            200 =>
                [
                    'id' => 1701,
                    'province_id' => 10,
                    'name' => 'Robledollano',
                ],
            201 =>
                [
                    'id' => 1702,
                    'province_id' => 10,
                    'name' => 'Romangordo',
                ],
            202 =>
                [
                    'id' => 1703,
                    'province_id' => 10,
                    'name' => 'Rosalejo',
                ],
            203 =>
                [
                    'id' => 1704,
                    'province_id' => 10,
                    'name' => 'Ruanes',
                ],
            204 =>
                [
                    'id' => 1705,
                    'province_id' => 10,
                    'name' => 'Salorino',
                ],
            205 =>
                [
                    'id' => 1706,
                    'province_id' => 10,
                    'name' => 'Salvatierra de Santiago',
                ],
            206 =>
                [
                    'id' => 1707,
                    'province_id' => 10,
                    'name' => 'San Martín de Trevejo',
                ],
            207 =>
                [
                    'id' => 1708,
                    'province_id' => 10,
                    'name' => 'Santa Ana',
                ],
            208 =>
                [
                    'id' => 1709,
                    'province_id' => 10,
                    'name' => 'Santa Cruz de la Sierra',
                ],
            209 =>
                [
                    'id' => 1710,
                    'province_id' => 10,
                    'name' => 'Santa Cruz de Paniagua',
                ],
            210 =>
                [
                    'id' => 1711,
                    'province_id' => 10,
                    'name' => 'Santa Marta de Magasca',
                ],
            211 =>
                [
                    'id' => 1712,
                    'province_id' => 10,
                    'name' => 'Santiago de Alcántara',
                ],
            212 =>
                [
                    'id' => 1713,
                    'province_id' => 10,
                    'name' => 'Santiago del Campo',
                ],
            213 =>
                [
                    'id' => 1714,
                    'province_id' => 10,
                    'name' => 'Santibáñez el Alto',
                ],
            214 =>
                [
                    'id' => 1715,
                    'province_id' => 10,
                    'name' => 'Santibáñez el Bajo',
                ],
            215 =>
                [
                    'id' => 1716,
                    'province_id' => 10,
                    'name' => 'Saucedilla',
                ],
            216 =>
                [
                    'id' => 1717,
                    'province_id' => 10,
                    'name' => 'Segura de Toro',
                ],
            217 =>
                [
                    'id' => 1718,
                    'province_id' => 10,
                    'name' => 'Serradilla',
                ],
            218 =>
                [
                    'id' => 1719,
                    'province_id' => 10,
                    'name' => 'Serrejón',
                ],
            219 =>
                [
                    'id' => 1720,
                    'province_id' => 10,
                    'name' => 'Sierra de Fuentes',
                ],
            220 =>
                [
                    'id' => 1721,
                    'province_id' => 10,
                    'name' => 'Talaván',
                ],
            221 =>
                [
                    'id' => 1722,
                    'province_id' => 10,
                    'name' => 'Talaveruela de la Vera',
                ],
            222 =>
                [
                    'id' => 1723,
                    'province_id' => 10,
                    'name' => 'Talayuela',
                ],
            223 =>
                [
                    'id' => 1724,
                    'province_id' => 10,
                    'name' => 'Tejeda de Tiétar',
                ],
            224 =>
                [
                    'id' => 1725,
                    'province_id' => 10,
                    'name' => 'Toril',
                ],
            225 =>
                [
                    'id' => 1726,
                    'province_id' => 10,
                    'name' => 'Tornavacas',
                ],
            226 =>
                [
                    'id' => 1727,
                    'province_id' => 10,
                    'name' => 'Torno, El',
                ],
            227 =>
                [
                    'id' => 1728,
                    'province_id' => 10,
                    'name' => 'Torre de Don Miguel',
                ],
            228 =>
                [
                    'id' => 1729,
                    'province_id' => 10,
                    'name' => 'Torre de Santa María',
                ],
            229 =>
                [
                    'id' => 1730,
                    'province_id' => 10,
                    'name' => 'Torrecilla de los Ángeles',
                ],
            230 =>
                [
                    'id' => 1731,
                    'province_id' => 10,
                    'name' => 'Torrecillas de la Tiesa',
                ],
            231 =>
                [
                    'id' => 1732,
                    'province_id' => 10,
                    'name' => 'Torrejón el Rubio',
                ],
            232 =>
                [
                    'id' => 1733,
                    'province_id' => 10,
                    'name' => 'Torrejoncillo',
                ],
            233 =>
                [
                    'id' => 1734,
                    'province_id' => 10,
                    'name' => 'Torremenga',
                ],
            234 =>
                [
                    'id' => 1735,
                    'province_id' => 10,
                    'name' => 'Torremocha',
                ],
            235 =>
                [
                    'id' => 1736,
                    'province_id' => 10,
                    'name' => 'Torreorgaz',
                ],
            236 =>
                [
                    'id' => 1737,
                    'province_id' => 10,
                    'name' => 'Torrequemada',
                ],
            237 =>
                [
                    'id' => 1738,
                    'province_id' => 10,
                    'name' => 'Trujillo',
                ],
            238 =>
                [
                    'id' => 1739,
                    'province_id' => 10,
                    'name' => 'Valdastillas',
                ],
            239 =>
                [
                    'id' => 1740,
                    'province_id' => 10,
                    'name' => 'Valdecañas de Tajo',
                ],
            240 =>
                [
                    'id' => 1741,
                    'province_id' => 10,
                    'name' => 'Valdefuentes',
                ],
            241 =>
                [
                    'id' => 1742,
                    'province_id' => 10,
                    'name' => 'Valdehúncar',
                ],
            242 =>
                [
                    'id' => 1743,
                    'province_id' => 10,
                    'name' => 'Valdelacasa de Tajo',
                ],
            243 =>
                [
                    'id' => 1744,
                    'province_id' => 10,
                    'name' => 'Valdemorales',
                ],
            244 =>
                [
                    'id' => 1745,
                    'province_id' => 10,
                    'name' => 'Valdeobispo',
                ],
            245 =>
                [
                    'id' => 1746,
                    'province_id' => 10,
                    'name' => 'Valencia de Alcántara',
                ],
            246 =>
                [
                    'id' => 1747,
                    'province_id' => 10,
                    'name' => 'Valverde de la Vera',
                ],
            247 =>
                [
                    'id' => 1748,
                    'province_id' => 10,
                    'name' => 'Valverde del Fresno',
                ],
            248 =>
                [
                    'id' => 1749,
                    'province_id' => 10,
                    'name' => 'Vegaviana',
                ],
            249 =>
                [
                    'id' => 1750,
                    'province_id' => 10,
                    'name' => 'Viandar de la Vera',
                ],
            250 =>
                [
                    'id' => 1751,
                    'province_id' => 10,
                    'name' => 'Villa del Campo',
                ],
            251 =>
                [
                    'id' => 1752,
                    'province_id' => 10,
                    'name' => 'Villa del Rey',
                ],
            252 =>
                [
                    'id' => 1753,
                    'province_id' => 10,
                    'name' => 'Villamesías',
                ],
            253 =>
                [
                    'id' => 1754,
                    'province_id' => 10,
                    'name' => 'Villamiel',
                ],
            254 =>
                [
                    'id' => 1755,
                    'province_id' => 10,
                    'name' => 'Villanueva de la Sierra',
                ],
            255 =>
                [
                    'id' => 1756,
                    'province_id' => 10,
                    'name' => 'Villanueva de la Vera',
                ],
            256 =>
                [
                    'id' => 1757,
                    'province_id' => 10,
                    'name' => 'Villar de Plasencia',
                ],
            257 =>
                [
                    'id' => 1758,
                    'province_id' => 10,
                    'name' => 'Villar del Pedroso',
                ],
            258 =>
                [
                    'id' => 1759,
                    'province_id' => 10,
                    'name' => 'Villasbuenas de Gata',
                ],
            259 =>
                [
                    'id' => 1760,
                    'province_id' => 10,
                    'name' => 'Zarza de Granadilla',
                ],
            260 =>
                [
                    'id' => 1761,
                    'province_id' => 10,
                    'name' => 'Zarza de Montánchez',
                ],
            261 =>
                [
                    'id' => 1762,
                    'province_id' => 10,
                    'name' => 'Zarza la Mayor',
                ],
            262 =>
                [
                    'id' => 1763,
                    'province_id' => 10,
                    'name' => 'Zorita',
                ],
            263 =>
                [
                    'id' => 1764,
                    'province_id' => 11,
                    'name' => 'Alcalá de los Gazules',
                ],
            264 =>
                [
                    'id' => 1765,
                    'province_id' => 11,
                    'name' => 'Alcalá del Valle',
                ],
            265 =>
                [
                    'id' => 1766,
                    'province_id' => 11,
                    'name' => 'Algar',
                ],
            266 =>
                [
                    'id' => 1767,
                    'province_id' => 11,
                    'name' => 'Algeciras',
                ],
            267 =>
                [
                    'id' => 1768,
                    'province_id' => 11,
                    'name' => 'Algodonales',
                ],
            268 =>
                [
                    'id' => 1769,
                    'province_id' => 11,
                    'name' => 'Arcos de la Frontera',
                ],
            269 =>
                [
                    'id' => 1770,
                    'province_id' => 11,
                    'name' => 'Barbate',
                ],
            270 =>
                [
                    'id' => 1771,
                    'province_id' => 11,
                    'name' => 'Barrios, Los',
                ],
            271 =>
                [
                    'id' => 1772,
                    'province_id' => 11,
                    'name' => 'Benalup-Casas Viejas',
                ],
            272 =>
                [
                    'id' => 1773,
                    'province_id' => 11,
                    'name' => 'Benaocaz',
                ],
            273 =>
                [
                    'id' => 1774,
                    'province_id' => 11,
                    'name' => 'Bornos',
                ],
            274 =>
                [
                    'id' => 1775,
                    'province_id' => 11,
                    'name' => 'Bosque, El',
                ],
            275 =>
                [
                    'id' => 1776,
                    'province_id' => 11,
                    'name' => 'Cádiz',
                ],
            276 =>
                [
                    'id' => 1777,
                    'province_id' => 11,
                    'name' => 'Castellar de la Frontera',
                ],
            277 =>
                [
                    'id' => 1778,
                    'province_id' => 11,
                    'name' => 'Chiclana de la Frontera',
                ],
            278 =>
                [
                    'id' => 1779,
                    'province_id' => 11,
                    'name' => 'Chipiona',
                ],
            279 =>
                [
                    'id' => 1780,
                    'province_id' => 11,
                    'name' => 'Conil de la Frontera',
                ],
            280 =>
                [
                    'id' => 1781,
                    'province_id' => 11,
                    'name' => 'Espera',
                ],
            281 =>
                [
                    'id' => 1782,
                    'province_id' => 11,
                    'name' => 'Gastor, El',
                ],
            282 =>
                [
                    'id' => 1783,
                    'province_id' => 11,
                    'name' => 'Grazalema',
                ],
            283 =>
                [
                    'id' => 1784,
                    'province_id' => 11,
                    'name' => 'Jerez de la Frontera',
                ],
            284 =>
                [
                    'id' => 1785,
                    'province_id' => 11,
                    'name' => 'Jimena de la Frontera',
                ],
            285 =>
                [
                    'id' => 1786,
                    'province_id' => 11,
                    'name' => 'Línea de la Concepción, La',
                ],
            286 =>
                [
                    'id' => 1787,
                    'province_id' => 11,
                    'name' => 'Medina-Sidonia',
                ],
            287 =>
                [
                    'id' => 1788,
                    'province_id' => 11,
                    'name' => 'Olvera',
                ],
            288 =>
                [
                    'id' => 1789,
                    'province_id' => 11,
                    'name' => 'Paterna de Rivera',
                ],
            289 =>
                [
                    'id' => 1790,
                    'province_id' => 11,
                    'name' => 'Prado del Rey',
                ],
            290 =>
                [
                    'id' => 1791,
                    'province_id' => 11,
                    'name' => 'Puerto de Santa María, El',
                ],
            291 =>
                [
                    'id' => 1792,
                    'province_id' => 11,
                    'name' => 'Puerto Real',
                ],
            292 =>
                [
                    'id' => 1793,
                    'province_id' => 11,
                    'name' => 'Puerto Serrano',
                ],
            293 =>
                [
                    'id' => 1794,
                    'province_id' => 11,
                    'name' => 'Rota',
                ],
            294 =>
                [
                    'id' => 1795,
                    'province_id' => 11,
                    'name' => 'San Fernando',
                ],
            295 =>
                [
                    'id' => 1796,
                    'province_id' => 11,
                    'name' => 'San José del Valle',
                ],
            296 =>
                [
                    'id' => 1797,
                    'province_id' => 11,
                    'name' => 'San Roque',
                ],
            297 =>
                [
                    'id' => 1798,
                    'province_id' => 11,
                    'name' => 'Sanlúcar de Barrameda',
                ],
            298 =>
                [
                    'id' => 1799,
                    'province_id' => 11,
                    'name' => 'Setenil de las Bodegas',
                ],
            299 =>
                [
                    'id' => 1800,
                    'province_id' => 11,
                    'name' => 'Tarifa',
                ],
            300 =>
                [
                    'id' => 1801,
                    'province_id' => 11,
                    'name' => 'Torre Alháquime',
                ],
            301 =>
                [
                    'id' => 1802,
                    'province_id' => 11,
                    'name' => 'Trebujena',
                ],
            302 =>
                [
                    'id' => 1803,
                    'province_id' => 11,
                    'name' => 'Ubrique',
                ],
            303 =>
                [
                    'id' => 1804,
                    'province_id' => 11,
                    'name' => 'Vejer de la Frontera',
                ],
            304 =>
                [
                    'id' => 1805,
                    'province_id' => 11,
                    'name' => 'Villaluenga del Rosario',
                ],
            305 =>
                [
                    'id' => 1806,
                    'province_id' => 11,
                    'name' => 'Villamartín',
                ],
            306 =>
                [
                    'id' => 1807,
                    'province_id' => 11,
                    'name' => 'Zahara',
                ],
            307 =>
                [
                    'id' => 1808,
                    'province_id' => 12,
                    'name' => 'Aín',
                ],
            308 =>
                [
                    'id' => 1809,
                    'province_id' => 12,
                    'name' => 'Albocàsser',
                ],
            309 =>
                [
                    'id' => 1810,
                    'province_id' => 12,
                    'name' => 'Alcalà de Xivert',
                ],
            310 =>
                [
                    'id' => 1811,
                    'province_id' => 12,
                    'name' => 'Alcora, l\'',
                ],
            311 =>
                [
                    'id' => 1812,
                    'province_id' => 12,
                    'name' => 'Alcudia de Veo',
                ],
            312 =>
                [
                    'id' => 1813,
                    'province_id' => 12,
                    'name' => 'Alfondeguilla',
                ],
            313 =>
                [
                    'id' => 1814,
                    'province_id' => 12,
                    'name' => 'Algimia de Almonacid',
                ],
            314 =>
                [
                    'id' => 1815,
                    'province_id' => 12,
                    'name' => 'Almazora/Almassora',
                ],
            315 =>
                [
                    'id' => 1816,
                    'province_id' => 12,
                    'name' => 'Almedíjar',
                ],
            316 =>
                [
                    'id' => 1817,
                    'province_id' => 12,
                    'name' => 'Almenara',
                ],
            317 =>
                [
                    'id' => 1818,
                    'province_id' => 12,
                    'name' => 'Alquerías del Niño Perdido',
                ],
            318 =>
                [
                    'id' => 1819,
                    'province_id' => 12,
                    'name' => 'Altura',
                ],
            319 =>
                [
                    'id' => 1820,
                    'province_id' => 12,
                    'name' => 'Arañuel',
                ],
            320 =>
                [
                    'id' => 1821,
                    'province_id' => 12,
                    'name' => 'Ares del Maestrat',
                ],
            321 =>
                [
                    'id' => 1822,
                    'province_id' => 12,
                    'name' => 'Argelita',
                ],
            322 =>
                [
                    'id' => 1823,
                    'province_id' => 12,
                    'name' => 'Artana',
                ],
            323 =>
                [
                    'id' => 1824,
                    'province_id' => 12,
                    'name' => 'Atzeneta del Maestrat',
                ],
            324 =>
                [
                    'id' => 1825,
                    'province_id' => 12,
                    'name' => 'Ayódar',
                ],
            325 =>
                [
                    'id' => 1826,
                    'province_id' => 12,
                    'name' => 'Azuébar',
                ],
            326 =>
                [
                    'id' => 1827,
                    'province_id' => 12,
                    'name' => 'Barracas',
                ],
            327 =>
                [
                    'id' => 1828,
                    'province_id' => 12,
                    'name' => 'Bejís',
                ],
            328 =>
                [
                    'id' => 1829,
                    'province_id' => 12,
                    'name' => 'Benafer',
                ],
            329 =>
                [
                    'id' => 1830,
                    'province_id' => 12,
                    'name' => 'Benafigos',
                ],
            330 =>
                [
                    'id' => 1831,
                    'province_id' => 12,
                    'name' => 'Benasal',
                ],
            331 =>
                [
                    'id' => 1832,
                    'province_id' => 12,
                    'name' => 'Benicarló',
                ],
            332 =>
                [
                    'id' => 1833,
                    'province_id' => 12,
                    'name' => 'Benicasim/Benicàssim',
                ],
            333 =>
                [
                    'id' => 1834,
                    'province_id' => 12,
                    'name' => 'Benlloch',
                ],
            334 =>
                [
                    'id' => 1835,
                    'province_id' => 12,
                    'name' => 'Betxí',
                ],
            335 =>
                [
                    'id' => 1836,
                    'province_id' => 12,
                    'name' => 'Borriana/Burriana',
                ],
            336 =>
                [
                    'id' => 1837,
                    'province_id' => 12,
                    'name' => 'Borriol',
                ],
            337 =>
                [
                    'id' => 1838,
                    'province_id' => 12,
                    'name' => 'Cabanes',
                ],
            338 =>
                [
                    'id' => 1839,
                    'province_id' => 12,
                    'name' => 'Càlig',
                ],
            339 =>
                [
                    'id' => 1840,
                    'province_id' => 12,
                    'name' => 'Canet lo Roig',
                ],
            340 =>
                [
                    'id' => 1841,
                    'province_id' => 12,
                    'name' => 'Castell de Cabres',
                ],
            341 =>
                [
                    'id' => 1842,
                    'province_id' => 12,
                    'name' => 'Castellfort',
                ],
            342 =>
                [
                    'id' => 1843,
                    'province_id' => 12,
                    'name' => 'Castellnovo',
                ],
            343 =>
                [
                    'id' => 1844,
                    'province_id' => 12,
                    'name' => 'Castellón de la Plana/Castelló de la Plana',
                ],
            344 =>
                [
                    'id' => 1845,
                    'province_id' => 12,
                    'name' => 'Castillo de Villamalefa',
                ],
            345 =>
                [
                    'id' => 1846,
                    'province_id' => 12,
                    'name' => 'Catí',
                ],
            346 =>
                [
                    'id' => 1847,
                    'province_id' => 12,
                    'name' => 'Caudiel',
                ],
            347 =>
                [
                    'id' => 1848,
                    'province_id' => 12,
                    'name' => 'Cervera del Maestre',
                ],
            348 =>
                [
                    'id' => 1849,
                    'province_id' => 12,
                    'name' => 'Chert/Xert',
                ],
            349 =>
                [
                    'id' => 1850,
                    'province_id' => 12,
                    'name' => 'Chilches/Xilxes',
                ],
            350 =>
                [
                    'id' => 1851,
                    'province_id' => 12,
                    'name' => 'Chodos/Xodos',
                ],
            351 =>
                [
                    'id' => 1852,
                    'province_id' => 12,
                    'name' => 'Chóvar',
                ],
            352 =>
                [
                    'id' => 1853,
                    'province_id' => 12,
                    'name' => 'Cinctorres',
                ],
            353 =>
                [
                    'id' => 1854,
                    'province_id' => 12,
                    'name' => 'Cirat',
                ],
            354 =>
                [
                    'id' => 1855,
                    'province_id' => 12,
                    'name' => 'Cortes de Arenoso',
                ],
            355 =>
                [
                    'id' => 1856,
                    'province_id' => 12,
                    'name' => 'Costur',
                ],
            356 =>
                [
                    'id' => 1857,
                    'province_id' => 12,
                    'name' => 'Coves de Vinromà, les',
                ],
            357 =>
                [
                    'id' => 1858,
                    'province_id' => 12,
                    'name' => 'Culla',
                ],
            358 =>
                [
                    'id' => 1859,
                    'province_id' => 12,
                    'name' => 'Eslida',
                ],
            359 =>
                [
                    'id' => 1860,
                    'province_id' => 12,
                    'name' => 'Espadilla',
                ],
            360 =>
                [
                    'id' => 1861,
                    'province_id' => 12,
                    'name' => 'Fanzara',
                ],
            361 =>
                [
                    'id' => 1862,
                    'province_id' => 12,
                    'name' => 'Figueroles',
                ],
            362 =>
                [
                    'id' => 1863,
                    'province_id' => 12,
                    'name' => 'Forcall',
                ],
            363 =>
                [
                    'id' => 1864,
                    'province_id' => 12,
                    'name' => 'Fuente la Reina',
                ],
            364 =>
                [
                    'id' => 1865,
                    'province_id' => 12,
                    'name' => 'Fuentes de Ayódar',
                ],
            365 =>
                [
                    'id' => 1866,
                    'province_id' => 12,
                    'name' => 'Gaibiel',
                ],
            366 =>
                [
                    'id' => 1867,
                    'province_id' => 12,
                    'name' => 'Geldo',
                ],
            367 =>
                [
                    'id' => 1868,
                    'province_id' => 12,
                    'name' => 'Herbés',
                ],
            368 =>
                [
                    'id' => 1869,
                    'province_id' => 12,
                    'name' => 'Higueras',
                ],
            369 =>
                [
                    'id' => 1870,
                    'province_id' => 12,
                    'name' => 'Jana, la',
                ],
            370 =>
                [
                    'id' => 1871,
                    'province_id' => 12,
                    'name' => 'Jérica',
                ],
            371 =>
                [
                    'id' => 1872,
                    'province_id' => 12,
                    'name' => 'Llosa, la',
                ],
            372 =>
                [
                    'id' => 1873,
                    'province_id' => 12,
                    'name' => 'Lucena del Cid',
                ],
            373 =>
                [
                    'id' => 1874,
                    'province_id' => 12,
                    'name' => 'Ludiente',
                ],
            374 =>
                [
                    'id' => 1875,
                    'province_id' => 12,
                    'name' => 'Mata de Morella, la',
                ],
            375 =>
                [
                    'id' => 1876,
                    'province_id' => 12,
                    'name' => 'Matet',
                ],
            376 =>
                [
                    'id' => 1877,
                    'province_id' => 12,
                    'name' => 'Moncofa',
                ],
            377 =>
                [
                    'id' => 1878,
                    'province_id' => 12,
                    'name' => 'Montán',
                ],
            378 =>
                [
                    'id' => 1879,
                    'province_id' => 12,
                    'name' => 'Montanejos',
                ],
            379 =>
                [
                    'id' => 1880,
                    'province_id' => 12,
                    'name' => 'Morella',
                ],
            380 =>
                [
                    'id' => 1881,
                    'province_id' => 12,
                    'name' => 'Navajas',
                ],
            381 =>
                [
                    'id' => 1882,
                    'province_id' => 12,
                    'name' => 'Nules',
                ],
            382 =>
                [
                    'id' => 1883,
                    'province_id' => 12,
                    'name' => 'Olocau del Rey',
                ],
            383 =>
                [
                    'id' => 1884,
                    'province_id' => 12,
                    'name' => 'Onda',
                ],
            384 =>
                [
                    'id' => 1885,
                    'province_id' => 12,
                    'name' => 'Oropesa del Mar/Orpesa',
                ],
            385 =>
                [
                    'id' => 1886,
                    'province_id' => 12,
                    'name' => 'Palanques',
                ],
            386 =>
                [
                    'id' => 1887,
                    'province_id' => 12,
                    'name' => 'Pavías',
                ],
            387 =>
                [
                    'id' => 1888,
                    'province_id' => 12,
                    'name' => 'Peníscola/Peñíscola',
                ],
            388 =>
                [
                    'id' => 1889,
                    'province_id' => 12,
                    'name' => 'Pina de Montalgrao',
                ],
            389 =>
                [
                    'id' => 1890,
                    'province_id' => 12,
                    'name' => 'Pobla de Benifassà, la',
                ],
            390 =>
                [
                    'id' => 1891,
                    'province_id' => 12,
                    'name' => 'Pobla Tornesa, la',
                ],
            391 =>
                [
                    'id' => 1892,
                    'province_id' => 12,
                    'name' => 'Portell de Morella',
                ],
            392 =>
                [
                    'id' => 1893,
                    'province_id' => 12,
                    'name' => 'Puebla de Arenoso',
                ],
            393 =>
                [
                    'id' => 1894,
                    'province_id' => 12,
                    'name' => 'Ribesalbes',
                ],
            394 =>
                [
                    'id' => 1895,
                    'province_id' => 12,
                    'name' => 'Rossell',
                ],
            395 =>
                [
                    'id' => 1896,
                    'province_id' => 12,
                    'name' => 'Sacañet',
                ],
            396 =>
                [
                    'id' => 1897,
                    'province_id' => 12,
                    'name' => 'Salzadella, la',
                ],
            397 =>
                [
                    'id' => 1898,
                    'province_id' => 12,
                    'name' => 'San Rafael del Río',
                ],
            398 =>
                [
                    'id' => 1899,
                    'province_id' => 12,
                    'name' => 'Sant Joan de Moró',
                ],
            399 =>
                [
                    'id' => 1900,
                    'province_id' => 12,
                    'name' => 'Sant Jordi/San Jorge',
                ],
            400 =>
                [
                    'id' => 1901,
                    'province_id' => 12,
                    'name' => 'Sant Mateu',
                ],
            401 =>
                [
                    'id' => 1902,
                    'province_id' => 12,
                    'name' => 'Santa Magdalena de Pulpis',
                ],
            402 =>
                [
                    'id' => 1903,
                    'province_id' => 12,
                    'name' => 'Sarratella',
                ],
            403 =>
                [
                    'id' => 1904,
                    'province_id' => 12,
                    'name' => 'Segorbe',
                ],
            404 =>
                [
                    'id' => 1905,
                    'province_id' => 12,
                    'name' => 'Sierra Engarcerán',
                ],
            405 =>
                [
                    'id' => 1906,
                    'province_id' => 12,
                    'name' => 'Soneja',
                ],
            406 =>
                [
                    'id' => 1907,
                    'province_id' => 12,
                    'name' => 'Sot de Ferrer',
                ],
            407 =>
                [
                    'id' => 1908,
                    'province_id' => 12,
                    'name' => 'Sueras/Suera',
                ],
            408 =>
                [
                    'id' => 1909,
                    'province_id' => 12,
                    'name' => 'Tales',
                ],
            409 =>
                [
                    'id' => 1910,
                    'province_id' => 12,
                    'name' => 'Teresa',
                ],
            410 =>
                [
                    'id' => 1911,
                    'province_id' => 12,
                    'name' => 'Tírig',
                ],
            411 =>
                [
                    'id' => 1912,
                    'province_id' => 12,
                    'name' => 'Todolella',
                ],
            412 =>
                [
                    'id' => 1913,
                    'province_id' => 12,
                    'name' => 'Toga',
                ],
            413 =>
                [
                    'id' => 1914,
                    'province_id' => 12,
                    'name' => 'Torás',
                ],
            414 =>
                [
                    'id' => 1915,
                    'province_id' => 12,
                    'name' => 'Toro, El',
                ],
            415 =>
                [
                    'id' => 1916,
                    'province_id' => 12,
                    'name' => 'Torralba del Pinar',
                ],
            416 =>
                [
                    'id' => 1917,
                    'province_id' => 12,
                    'name' => 'Torre d\'En Besora, la',
                ],
            417 =>
                [
                    'id' => 1918,
                    'province_id' => 12,
                    'name' => 'Torre d\'en Doménec, la',
                ],
            418 =>
                [
                    'id' => 1919,
                    'province_id' => 12,
                    'name' => 'Torreblanca',
                ],
            419 =>
                [
                    'id' => 1920,
                    'province_id' => 12,
                    'name' => 'Torrechiva',
                ],
            420 =>
                [
                    'id' => 1921,
                    'province_id' => 12,
                    'name' => 'Traiguera',
                ],
            421 =>
                [
                    'id' => 1922,
                    'province_id' => 12,
                    'name' => 'Useras/Useres, les',
                ],
            422 =>
                [
                    'id' => 1923,
                    'province_id' => 12,
                    'name' => 'Vall d\'Alba',
                ],
            423 =>
                [
                    'id' => 1924,
                    'province_id' => 12,
                    'name' => 'Vall de Almonacid',
                ],
            424 =>
                [
                    'id' => 1925,
                    'province_id' => 12,
                    'name' => 'Vall d\'Uixó, la',
                ],
            425 =>
                [
                    'id' => 1926,
                    'province_id' => 12,
                    'name' => 'Vallat',
                ],
            426 =>
                [
                    'id' => 1927,
                    'province_id' => 12,
                    'name' => 'Vallibona',
                ],
            427 =>
                [
                    'id' => 1928,
                    'province_id' => 12,
                    'name' => 'Vilafamés',
                ],
            428 =>
                [
                    'id' => 1929,
                    'province_id' => 12,
                    'name' => 'Vilanova d\'Alcolea',
                ],
            429 =>
                [
                    'id' => 1930,
                    'province_id' => 12,
                    'name' => 'Vilar de Canes',
                ],
            430 =>
                [
                    'id' => 1931,
                    'province_id' => 12,
                    'name' => 'Vila-real',
                ],
            431 =>
                [
                    'id' => 1932,
                    'province_id' => 12,
                    'name' => 'Vilavella, la',
                ],
            432 =>
                [
                    'id' => 1933,
                    'province_id' => 12,
                    'name' => 'Villafranca del Cid/Vilafranca',
                ],
            433 =>
                [
                    'id' => 1934,
                    'province_id' => 12,
                    'name' => 'Villahermosa del Río',
                ],
            434 =>
                [
                    'id' => 1935,
                    'province_id' => 12,
                    'name' => 'Villamalur',
                ],
            435 =>
                [
                    'id' => 1936,
                    'province_id' => 12,
                    'name' => 'Villanueva de Viver',
                ],
            436 =>
                [
                    'id' => 1937,
                    'province_id' => 12,
                    'name' => 'Villores',
                ],
            437 =>
                [
                    'id' => 1938,
                    'province_id' => 12,
                    'name' => 'Vinaròs',
                ],
            438 =>
                [
                    'id' => 1939,
                    'province_id' => 12,
                    'name' => 'Vistabella del Maestrazgo',
                ],
            439 =>
                [
                    'id' => 1940,
                    'province_id' => 12,
                    'name' => 'Viver',
                ],
            440 =>
                [
                    'id' => 1941,
                    'province_id' => 12,
                    'name' => 'Zorita del Maestrazgo',
                ],
            441 =>
                [
                    'id' => 1942,
                    'province_id' => 12,
                    'name' => 'Zucaina',
                ],
            442 =>
                [
                    'id' => 1943,
                    'province_id' => 13,
                    'name' => 'Abenójar',
                ],
            443 =>
                [
                    'id' => 1944,
                    'province_id' => 13,
                    'name' => 'Agudo',
                ],
            444 =>
                [
                    'id' => 1945,
                    'province_id' => 13,
                    'name' => 'Alamillo',
                ],
            445 =>
                [
                    'id' => 1946,
                    'province_id' => 13,
                    'name' => 'Albaladejo',
                ],
            446 =>
                [
                    'id' => 1947,
                    'province_id' => 13,
                    'name' => 'Alcázar de San Juan',
                ],
            447 =>
                [
                    'id' => 1948,
                    'province_id' => 13,
                    'name' => 'Alcoba',
                ],
            448 =>
                [
                    'id' => 1949,
                    'province_id' => 13,
                    'name' => 'Alcolea de Calatrava',
                ],
            449 =>
                [
                    'id' => 1950,
                    'province_id' => 13,
                    'name' => 'Alcubillas',
                ],
            450 =>
                [
                    'id' => 1951,
                    'province_id' => 13,
                    'name' => 'Aldea del Rey',
                ],
            451 =>
                [
                    'id' => 1952,
                    'province_id' => 13,
                    'name' => 'Alhambra',
                ],
            452 =>
                [
                    'id' => 1953,
                    'province_id' => 13,
                    'name' => 'Almadén',
                ],
            453 =>
                [
                    'id' => 1954,
                    'province_id' => 13,
                    'name' => 'Almadenejos',
                ],
            454 =>
                [
                    'id' => 1955,
                    'province_id' => 13,
                    'name' => 'Almagro',
                ],
            455 =>
                [
                    'id' => 1956,
                    'province_id' => 13,
                    'name' => 'Almedina',
                ],
            456 =>
                [
                    'id' => 1957,
                    'province_id' => 13,
                    'name' => 'Almodóvar del Campo',
                ],
            457 =>
                [
                    'id' => 1958,
                    'province_id' => 13,
                    'name' => 'Almuradiel',
                ],
            458 =>
                [
                    'id' => 1959,
                    'province_id' => 13,
                    'name' => 'Anchuras',
                ],
            459 =>
                [
                    'id' => 1960,
                    'province_id' => 13,
                    'name' => 'Arenales de San Gregorio',
                ],
            460 =>
                [
                    'id' => 1961,
                    'province_id' => 13,
                    'name' => 'Arenas de San Juan',
                ],
            461 =>
                [
                    'id' => 1962,
                    'province_id' => 13,
                    'name' => 'Argamasilla de Alba',
                ],
            462 =>
                [
                    'id' => 1963,
                    'province_id' => 13,
                    'name' => 'Argamasilla de Calatrava',
                ],
            463 =>
                [
                    'id' => 1964,
                    'province_id' => 13,
                    'name' => 'Arroba de los Montes',
                ],
            464 =>
                [
                    'id' => 1965,
                    'province_id' => 13,
                    'name' => 'Ballesteros de Calatrava',
                ],
            465 =>
                [
                    'id' => 1966,
                    'province_id' => 13,
                    'name' => 'Bolaños de Calatrava',
                ],
            466 =>
                [
                    'id' => 1967,
                    'province_id' => 13,
                    'name' => 'Brazatortas',
                ],
            467 =>
                [
                    'id' => 1968,
                    'province_id' => 13,
                    'name' => 'Cabezarados',
                ],
            468 =>
                [
                    'id' => 1969,
                    'province_id' => 13,
                    'name' => 'Cabezarrubias del Puerto',
                ],
            469 =>
                [
                    'id' => 1970,
                    'province_id' => 13,
                    'name' => 'Calzada de Calatrava',
                ],
            470 =>
                [
                    'id' => 1971,
                    'province_id' => 13,
                    'name' => 'Campo de Criptana',
                ],
            471 =>
                [
                    'id' => 1972,
                    'province_id' => 13,
                    'name' => 'Cañada de Calatrava',
                ],
            472 =>
                [
                    'id' => 1973,
                    'province_id' => 13,
                    'name' => 'Caracuel de Calatrava',
                ],
            473 =>
                [
                    'id' => 1974,
                    'province_id' => 13,
                    'name' => 'Carrión de Calatrava',
                ],
            474 =>
                [
                    'id' => 1975,
                    'province_id' => 13,
                    'name' => 'Carrizosa',
                ],
            475 =>
                [
                    'id' => 1976,
                    'province_id' => 13,
                    'name' => 'Castellar de Santiago',
                ],
            476 =>
                [
                    'id' => 1977,
                    'province_id' => 13,
                    'name' => 'Chillón',
                ],
            477 =>
                [
                    'id' => 1978,
                    'province_id' => 13,
                    'name' => 'Ciudad Real',
                ],
            478 =>
                [
                    'id' => 1979,
                    'province_id' => 13,
                    'name' => 'Corral de Calatrava',
                ],
            479 =>
                [
                    'id' => 1980,
                    'province_id' => 13,
                    'name' => 'Cortijos, Los',
                ],
            480 =>
                [
                    'id' => 1981,
                    'province_id' => 13,
                    'name' => 'Cózar',
                ],
            481 =>
                [
                    'id' => 1982,
                    'province_id' => 13,
                    'name' => 'Daimiel',
                ],
            482 =>
                [
                    'id' => 1983,
                    'province_id' => 13,
                    'name' => 'Fernán Caballero',
                ],
            483 =>
                [
                    'id' => 1984,
                    'province_id' => 13,
                    'name' => 'Fontanarejo',
                ],
            484 =>
                [
                    'id' => 1985,
                    'province_id' => 13,
                    'name' => 'Fuencaliente',
                ],
            485 =>
                [
                    'id' => 1986,
                    'province_id' => 13,
                    'name' => 'Fuenllana',
                ],
            486 =>
                [
                    'id' => 1987,
                    'province_id' => 13,
                    'name' => 'Fuente el Fresno',
                ],
            487 =>
                [
                    'id' => 1988,
                    'province_id' => 13,
                    'name' => 'Granátula de Calatrava',
                ],
            488 =>
                [
                    'id' => 1989,
                    'province_id' => 13,
                    'name' => 'Guadalmez',
                ],
            489 =>
                [
                    'id' => 1990,
                    'province_id' => 13,
                    'name' => 'Herencia',
                ],
            490 =>
                [
                    'id' => 1991,
                    'province_id' => 13,
                    'name' => 'Hinojosas de Calatrava',
                ],
            491 =>
                [
                    'id' => 1992,
                    'province_id' => 13,
                    'name' => 'Horcajo de los Montes',
                ],
            492 =>
                [
                    'id' => 1993,
                    'province_id' => 13,
                    'name' => 'Labores, Las',
                ],
            493 =>
                [
                    'id' => 1994,
                    'province_id' => 13,
                    'name' => 'Llanos del Caudillo',
                ],
            494 =>
                [
                    'id' => 1995,
                    'province_id' => 13,
                    'name' => 'Luciana',
                ],
            495 =>
                [
                    'id' => 1996,
                    'province_id' => 13,
                    'name' => 'Malagón',
                ],
            496 =>
                [
                    'id' => 1997,
                    'province_id' => 13,
                    'name' => 'Manzanares',
                ],
            497 =>
                [
                    'id' => 1998,
                    'province_id' => 13,
                    'name' => 'Membrilla',
                ],
            498 =>
                [
                    'id' => 1999,
                    'province_id' => 13,
                    'name' => 'Mestanza',
                ],
            499 =>
                [
                    'id' => 2000,
                    'province_id' => 13,
                    'name' => 'Miguelturra',
                ],
        ]);
        \DB::table('localities')->insert([
            0 =>
                [
                    'id' => 2001,
                    'province_id' => 13,
                    'name' => 'Montiel',
                ],
            1 =>
                [
                    'id' => 2002,
                    'province_id' => 13,
                    'name' => 'Moral de Calatrava',
                ],
            2 =>
                [
                    'id' => 2003,
                    'province_id' => 13,
                    'name' => 'Navalpino',
                ],
            3 =>
                [
                    'id' => 2004,
                    'province_id' => 13,
                    'name' => 'Navas de Estena',
                ],
            4 =>
                [
                    'id' => 2005,
                    'province_id' => 13,
                    'name' => 'Pedro Muñoz',
                ],
            5 =>
                [
                    'id' => 2006,
                    'province_id' => 13,
                    'name' => 'Picón',
                ],
            6 =>
                [
                    'id' => 2007,
                    'province_id' => 13,
                    'name' => 'Piedrabuena',
                ],
            7 =>
                [
                    'id' => 2008,
                    'province_id' => 13,
                    'name' => 'Poblete',
                ],
            8 =>
                [
                    'id' => 2009,
                    'province_id' => 13,
                    'name' => 'Porzuna',
                ],
            9 =>
                [
                    'id' => 2010,
                    'province_id' => 13,
                    'name' => 'Pozuelo de Calatrava',
                ],
            10 =>
                [
                    'id' => 2011,
                    'province_id' => 13,
                    'name' => 'Pozuelos de Calatrava, Los',
                ],
            11 =>
                [
                    'id' => 2012,
                    'province_id' => 13,
                    'name' => 'Puebla de Don Rodrigo',
                ],
            12 =>
                [
                    'id' => 2013,
                    'province_id' => 13,
                    'name' => 'Puebla del Príncipe',
                ],
            13 =>
                [
                    'id' => 2014,
                    'province_id' => 13,
                    'name' => 'Puerto Lápice',
                ],
            14 =>
                [
                    'id' => 2015,
                    'province_id' => 13,
                    'name' => 'Puertollano',
                ],
            15 =>
                [
                    'id' => 2016,
                    'province_id' => 13,
                    'name' => 'Retuerta del Bullaque',
                ],
            16 =>
                [
                    'id' => 2017,
                    'province_id' => 13,
                    'name' => 'Robledo, El',
                ],
            17 =>
                [
                    'id' => 2018,
                    'province_id' => 13,
                    'name' => 'Ruidera',
                ],
            18 =>
                [
                    'id' => 2019,
                    'province_id' => 13,
                    'name' => 'Saceruela',
                ],
            19 =>
                [
                    'id' => 2020,
                    'province_id' => 13,
                    'name' => 'San Carlos del Valle',
                ],
            20 =>
                [
                    'id' => 2021,
                    'province_id' => 13,
                    'name' => 'San Lorenzo de Calatrava',
                ],
            21 =>
                [
                    'id' => 2022,
                    'province_id' => 13,
                    'name' => 'Santa Cruz de los Cáñamos',
                ],
            22 =>
                [
                    'id' => 2023,
                    'province_id' => 13,
                    'name' => 'Santa Cruz de Mudela',
                ],
            23 =>
                [
                    'id' => 2024,
                    'province_id' => 13,
                    'name' => 'Socuéllamos',
                ],
            24 =>
                [
                    'id' => 2025,
                    'province_id' => 13,
                    'name' => 'Solana, La',
                ],
            25 =>
                [
                    'id' => 2026,
                    'province_id' => 13,
                    'name' => 'Solana del Pino',
                ],
            26 =>
                [
                    'id' => 2027,
                    'province_id' => 13,
                    'name' => 'Terrinches',
                ],
            27 =>
                [
                    'id' => 2028,
                    'province_id' => 13,
                    'name' => 'Tomelloso',
                ],
            28 =>
                [
                    'id' => 2029,
                    'province_id' => 13,
                    'name' => 'Torralba de Calatrava',
                ],
            29 =>
                [
                    'id' => 2030,
                    'province_id' => 13,
                    'name' => 'Torre de Juan Abad',
                ],
            30 =>
                [
                    'id' => 2031,
                    'province_id' => 13,
                    'name' => 'Torrenueva',
                ],
            31 =>
                [
                    'id' => 2032,
                    'province_id' => 13,
                    'name' => 'Valdemanco del Esteras',
                ],
            32 =>
                [
                    'id' => 2033,
                    'province_id' => 13,
                    'name' => 'Valdepeñas',
                ],
            33 =>
                [
                    'id' => 2034,
                    'province_id' => 13,
                    'name' => 'Valenzuela de Calatrava',
                ],
            34 =>
                [
                    'id' => 2035,
                    'province_id' => 13,
                    'name' => 'Villahermosa',
                ],
            35 =>
                [
                    'id' => 2036,
                    'province_id' => 13,
                    'name' => 'Villamanrique',
                ],
            36 =>
                [
                    'id' => 2037,
                    'province_id' => 13,
                    'name' => 'Villamayor de Calatrava',
                ],
            37 =>
                [
                    'id' => 2038,
                    'province_id' => 13,
                    'name' => 'Villanueva de la Fuente',
                ],
            38 =>
                [
                    'id' => 2039,
                    'province_id' => 13,
                    'name' => 'Villanueva de los Infantes',
                ],
            39 =>
                [
                    'id' => 2040,
                    'province_id' => 13,
                    'name' => 'Villanueva de San Carlos',
                ],
            40 =>
                [
                    'id' => 2041,
                    'province_id' => 13,
                    'name' => 'Villar del Pozo',
                ],
            41 =>
                [
                    'id' => 2042,
                    'province_id' => 13,
                    'name' => 'Villarrubia de los Ojos',
                ],
            42 =>
                [
                    'id' => 2043,
                    'province_id' => 13,
                    'name' => 'Villarta de San Juan',
                ],
            43 =>
                [
                    'id' => 2044,
                    'province_id' => 13,
                    'name' => 'Viso del Marqués',
                ],
            44 =>
                [
                    'id' => 2045,
                    'province_id' => 14,
                    'name' => 'Adamuz',
                ],
            45 =>
                [
                    'id' => 2046,
                    'province_id' => 14,
                    'name' => 'Aguilar de la Frontera',
                ],
            46 =>
                [
                    'id' => 2047,
                    'province_id' => 14,
                    'name' => 'Alcaracejos',
                ],
            47 =>
                [
                    'id' => 2048,
                    'province_id' => 14,
                    'name' => 'Almedinilla',
                ],
            48 =>
                [
                    'id' => 2049,
                    'province_id' => 14,
                    'name' => 'Almodóvar del Río',
                ],
            49 =>
                [
                    'id' => 2050,
                    'province_id' => 14,
                    'name' => 'Añora',
                ],
            50 =>
                [
                    'id' => 2051,
                    'province_id' => 14,
                    'name' => 'Baena',
                ],
            51 =>
                [
                    'id' => 2052,
                    'province_id' => 14,
                    'name' => 'Belalcázar',
                ],
            52 =>
                [
                    'id' => 2053,
                    'province_id' => 14,
                    'name' => 'Belmez',
                ],
            53 =>
                [
                    'id' => 2054,
                    'province_id' => 14,
                    'name' => 'Benamejí',
                ],
            54 =>
                [
                    'id' => 2055,
                    'province_id' => 14,
                    'name' => 'Blázquez, Los',
                ],
            55 =>
                [
                    'id' => 2056,
                    'province_id' => 14,
                    'name' => 'Bujalance',
                ],
            56 =>
                [
                    'id' => 2057,
                    'province_id' => 14,
                    'name' => 'Cabra',
                ],
            57 =>
                [
                    'id' => 2058,
                    'province_id' => 14,
                    'name' => 'Cañete de las Torres',
                ],
            58 =>
                [
                    'id' => 2059,
                    'province_id' => 14,
                    'name' => 'Carcabuey',
                ],
            59 =>
                [
                    'id' => 2060,
                    'province_id' => 14,
                    'name' => 'Cardeña',
                ],
            60 =>
                [
                    'id' => 2061,
                    'province_id' => 14,
                    'name' => 'Carlota, La',
                ],
            61 =>
                [
                    'id' => 2062,
                    'province_id' => 14,
                    'name' => 'Carpio, El',
                ],
            62 =>
                [
                    'id' => 2063,
                    'province_id' => 14,
                    'name' => 'Castro del Río',
                ],
            63 =>
                [
                    'id' => 2064,
                    'province_id' => 14,
                    'name' => 'Conquista',
                ],
            64 =>
                [
                    'id' => 2065,
                    'province_id' => 14,
                    'name' => 'Córdoba',
                ],
            65 =>
                [
                    'id' => 2066,
                    'province_id' => 14,
                    'name' => 'Doña Mencía',
                ],
            66 =>
                [
                    'id' => 2067,
                    'province_id' => 14,
                    'name' => 'Dos Torres',
                ],
            67 =>
                [
                    'id' => 2068,
                    'province_id' => 14,
                    'name' => 'Encinas Reales',
                ],
            68 =>
                [
                    'id' => 2069,
                    'province_id' => 14,
                    'name' => 'Espejo',
                ],
            69 =>
                [
                    'id' => 2070,
                    'province_id' => 14,
                    'name' => 'Espiel',
                ],
            70 =>
                [
                    'id' => 2071,
                    'province_id' => 14,
                    'name' => 'Fernán-Núñez',
                ],
            71 =>
                [
                    'id' => 2072,
                    'province_id' => 14,
                    'name' => 'Fuente la Lancha',
                ],
            72 =>
                [
                    'id' => 2073,
                    'province_id' => 14,
                    'name' => 'Fuente Obejuna',
                ],
            73 =>
                [
                    'id' => 2074,
                    'province_id' => 14,
                    'name' => 'Fuente Palmera',
                ],
            74 =>
                [
                    'id' => 2075,
                    'province_id' => 14,
                    'name' => 'Fuente-Tójar',
                ],
            75 =>
                [
                    'id' => 2076,
                    'province_id' => 14,
                    'name' => 'Granjuela, La',
                ],
            76 =>
                [
                    'id' => 2077,
                    'province_id' => 14,
                    'name' => 'Guadalcázar',
                ],
            77 =>
                [
                    'id' => 2078,
                    'province_id' => 14,
                    'name' => 'Guijo, El',
                ],
            78 =>
                [
                    'id' => 2079,
                    'province_id' => 14,
                    'name' => 'Hinojosa del Duque',
                ],
            79 =>
                [
                    'id' => 2080,
                    'province_id' => 14,
                    'name' => 'Hornachuelos',
                ],
            80 =>
                [
                    'id' => 2081,
                    'province_id' => 14,
                    'name' => 'Iznájar',
                ],
            81 =>
                [
                    'id' => 2082,
                    'province_id' => 14,
                    'name' => 'Lucena',
                ],
            82 =>
                [
                    'id' => 2083,
                    'province_id' => 14,
                    'name' => 'Luque',
                ],
            83 =>
                [
                    'id' => 2084,
                    'province_id' => 14,
                    'name' => 'Montalbán de Córdoba',
                ],
            84 =>
                [
                    'id' => 2085,
                    'province_id' => 14,
                    'name' => 'Montemayor',
                ],
            85 =>
                [
                    'id' => 2086,
                    'province_id' => 14,
                    'name' => 'Montilla',
                ],
            86 =>
                [
                    'id' => 2087,
                    'province_id' => 14,
                    'name' => 'Montoro',
                ],
            87 =>
                [
                    'id' => 2088,
                    'province_id' => 14,
                    'name' => 'Monturque',
                ],
            88 =>
                [
                    'id' => 2089,
                    'province_id' => 14,
                    'name' => 'Moriles',
                ],
            89 =>
                [
                    'id' => 2090,
                    'province_id' => 14,
                    'name' => 'Nueva Carteya',
                ],
            90 =>
                [
                    'id' => 2091,
                    'province_id' => 14,
                    'name' => 'Obejo',
                ],
            91 =>
                [
                    'id' => 2092,
                    'province_id' => 14,
                    'name' => 'Palenciana',
                ],
            92 =>
                [
                    'id' => 2093,
                    'province_id' => 14,
                    'name' => 'Palma del Río',
                ],
            93 =>
                [
                    'id' => 2094,
                    'province_id' => 14,
                    'name' => 'Pedro Abad',
                ],
            94 =>
                [
                    'id' => 2095,
                    'province_id' => 14,
                    'name' => 'Pedroche',
                ],
            95 =>
                [
                    'id' => 2096,
                    'province_id' => 14,
                    'name' => 'Peñarroya-Pueblonuevo',
                ],
            96 =>
                [
                    'id' => 2097,
                    'province_id' => 14,
                    'name' => 'Posadas',
                ],
            97 =>
                [
                    'id' => 2098,
                    'province_id' => 14,
                    'name' => 'Pozoblanco',
                ],
            98 =>
                [
                    'id' => 2099,
                    'province_id' => 14,
                    'name' => 'Priego de Córdoba',
                ],
            99 =>
                [
                    'id' => 2100,
                    'province_id' => 14,
                    'name' => 'Puente Genil',
                ],
            100 =>
                [
                    'id' => 2101,
                    'province_id' => 14,
                    'name' => 'Rambla, La',
                ],
            101 =>
                [
                    'id' => 2102,
                    'province_id' => 14,
                    'name' => 'Rute',
                ],
            102 =>
                [
                    'id' => 2103,
                    'province_id' => 14,
                    'name' => 'San Sebastián de los Ballesteros',
                ],
            103 =>
                [
                    'id' => 2104,
                    'province_id' => 14,
                    'name' => 'Santa Eufemia',
                ],
            104 =>
                [
                    'id' => 2105,
                    'province_id' => 14,
                    'name' => 'Santaella',
                ],
            105 =>
                [
                    'id' => 2106,
                    'province_id' => 14,
                    'name' => 'Torrecampo',
                ],
            106 =>
                [
                    'id' => 2107,
                    'province_id' => 14,
                    'name' => 'Valenzuela',
                ],
            107 =>
                [
                    'id' => 2108,
                    'province_id' => 14,
                    'name' => 'Valsequillo',
                ],
            108 =>
                [
                    'id' => 2109,
                    'province_id' => 14,
                    'name' => 'Victoria, La',
                ],
            109 =>
                [
                    'id' => 2110,
                    'province_id' => 14,
                    'name' => 'Villa del Río',
                ],
            110 =>
                [
                    'id' => 2111,
                    'province_id' => 14,
                    'name' => 'Villafranca de Córdoba',
                ],
            111 =>
                [
                    'id' => 2112,
                    'province_id' => 14,
                    'name' => 'Villaharta',
                ],
            112 =>
                [
                    'id' => 2113,
                    'province_id' => 14,
                    'name' => 'Villanueva de Córdoba',
                ],
            113 =>
                [
                    'id' => 2114,
                    'province_id' => 14,
                    'name' => 'Villanueva del Duque',
                ],
            114 =>
                [
                    'id' => 2115,
                    'province_id' => 14,
                    'name' => 'Villanueva del Rey',
                ],
            115 =>
                [
                    'id' => 2116,
                    'province_id' => 14,
                    'name' => 'Villaralto',
                ],
            116 =>
                [
                    'id' => 2117,
                    'province_id' => 14,
                    'name' => 'Villaviciosa de Córdoba',
                ],
            117 =>
                [
                    'id' => 2118,
                    'province_id' => 14,
                    'name' => 'Viso, El',
                ],
            118 =>
                [
                    'id' => 2119,
                    'province_id' => 14,
                    'name' => 'Zuheros',
                ],
            119 =>
                [
                    'id' => 2120,
                    'province_id' => 15,
                    'name' => 'Abegondo',
                ],
            120 =>
                [
                    'id' => 2121,
                    'province_id' => 15,
                    'name' => 'Ames',
                ],
            121 =>
                [
                    'id' => 2122,
                    'province_id' => 15,
                    'name' => 'Aranga',
                ],
            122 =>
                [
                    'id' => 2123,
                    'province_id' => 15,
                    'name' => 'Ares',
                ],
            123 =>
                [
                    'id' => 2124,
                    'province_id' => 15,
                    'name' => 'Arteixo',
                ],
            124 =>
                [
                    'id' => 2125,
                    'province_id' => 15,
                    'name' => 'Arzúa',
                ],
            125 =>
                [
                    'id' => 2126,
                    'province_id' => 15,
                    'name' => 'Baña, A',
                ],
            126 =>
                [
                    'id' => 2127,
                    'province_id' => 15,
                    'name' => 'Bergondo',
                ],
            127 =>
                [
                    'id' => 2128,
                    'province_id' => 15,
                    'name' => 'Betanzos',
                ],
            128 =>
                [
                    'id' => 2129,
                    'province_id' => 15,
                    'name' => 'Boimorto',
                ],
            129 =>
                [
                    'id' => 2130,
                    'province_id' => 15,
                    'name' => 'Boiro',
                ],
            130 =>
                [
                    'id' => 2131,
                    'province_id' => 15,
                    'name' => 'Boqueixón',
                ],
            131 =>
                [
                    'id' => 2132,
                    'province_id' => 15,
                    'name' => 'Brión',
                ],
            132 =>
                [
                    'id' => 2133,
                    'province_id' => 15,
                    'name' => 'Cabana de Bergantiños',
                ],
            133 =>
                [
                    'id' => 2134,
                    'province_id' => 15,
                    'name' => 'Cabanas',
                ],
            134 =>
                [
                    'id' => 2135,
                    'province_id' => 15,
                    'name' => 'Camariñas',
                ],
            135 =>
                [
                    'id' => 2136,
                    'province_id' => 15,
                    'name' => 'Cambre',
                ],
            136 =>
                [
                    'id' => 2137,
                    'province_id' => 15,
                    'name' => 'Capela, A',
                ],
            137 =>
                [
                    'id' => 2138,
                    'province_id' => 15,
                    'name' => 'Carballo',
                ],
            138 =>
                [
                    'id' => 2139,
                    'province_id' => 15,
                    'name' => 'Cariño',
                ],
            139 =>
                [
                    'id' => 2140,
                    'province_id' => 15,
                    'name' => 'Carnota',
                ],
            140 =>
                [
                    'id' => 2141,
                    'province_id' => 15,
                    'name' => 'Carral',
                ],
            141 =>
                [
                    'id' => 2142,
                    'province_id' => 15,
                    'name' => 'Cedeira',
                ],
            142 =>
                [
                    'id' => 2143,
                    'province_id' => 15,
                    'name' => 'Cee',
                ],
            143 =>
                [
                    'id' => 2144,
                    'province_id' => 15,
                    'name' => 'Cerceda',
                ],
            144 =>
                [
                    'id' => 2145,
                    'province_id' => 15,
                    'name' => 'Cerdido',
                ],
            145 =>
                [
                    'id' => 2146,
                    'province_id' => 15,
                    'name' => 'Cesuras',
                ],
            146 =>
                [
                    'id' => 2147,
                    'province_id' => 15,
                    'name' => 'Coirós',
                ],
            147 =>
                [
                    'id' => 2148,
                    'province_id' => 15,
                    'name' => 'Corcubión',
                ],
            148 =>
                [
                    'id' => 2149,
                    'province_id' => 15,
                    'name' => 'Coristanco',
                ],
            149 =>
                [
                    'id' => 2150,
                    'province_id' => 15,
                    'name' => 'Coruña, A',
                ],
            150 =>
                [
                    'id' => 2151,
                    'province_id' => 15,
                    'name' => 'Culleredo',
                ],
            151 =>
                [
                    'id' => 2152,
                    'province_id' => 15,
                    'name' => 'Curtis',
                ],
            152 =>
                [
                    'id' => 2153,
                    'province_id' => 15,
                    'name' => 'Dodro',
                ],
            153 =>
                [
                    'id' => 2154,
                    'province_id' => 15,
                    'name' => 'Dumbría',
                ],
            154 =>
                [
                    'id' => 2155,
                    'province_id' => 15,
                    'name' => 'Fene',
                ],
            155 =>
                [
                    'id' => 2156,
                    'province_id' => 15,
                    'name' => 'Ferrol',
                ],
            156 =>
                [
                    'id' => 2157,
                    'province_id' => 15,
                    'name' => 'Fisterra',
                ],
            157 =>
                [
                    'id' => 2158,
                    'province_id' => 15,
                    'name' => 'Frades',
                ],
            158 =>
                [
                    'id' => 2159,
                    'province_id' => 15,
                    'name' => 'Irixoa',
                ],
            159 =>
                [
                    'id' => 2160,
                    'province_id' => 15,
                    'name' => 'Laracha, A',
                ],
            160 =>
                [
                    'id' => 2161,
                    'province_id' => 15,
                    'name' => 'Laxe',
                ],
            161 =>
                [
                    'id' => 2162,
                    'province_id' => 15,
                    'name' => 'Lousame',
                ],
            162 =>
                [
                    'id' => 2163,
                    'province_id' => 15,
                    'name' => 'Malpica de Bergantiños',
                ],
            163 =>
                [
                    'id' => 2164,
                    'province_id' => 15,
                    'name' => 'Mañón',
                ],
            164 =>
                [
                    'id' => 2165,
                    'province_id' => 15,
                    'name' => 'Mazaricos',
                ],
            165 =>
                [
                    'id' => 2166,
                    'province_id' => 15,
                    'name' => 'Melide',
                ],
            166 =>
                [
                    'id' => 2167,
                    'province_id' => 15,
                    'name' => 'Mesía',
                ],
            167 =>
                [
                    'id' => 2168,
                    'province_id' => 15,
                    'name' => 'Miño',
                ],
            168 =>
                [
                    'id' => 2169,
                    'province_id' => 15,
                    'name' => 'Moeche',
                ],
            169 =>
                [
                    'id' => 2170,
                    'province_id' => 15,
                    'name' => 'Monfero',
                ],
            170 =>
                [
                    'id' => 2171,
                    'province_id' => 15,
                    'name' => 'Mugardos',
                ],
            171 =>
                [
                    'id' => 2172,
                    'province_id' => 15,
                    'name' => 'Muros',
                ],
            172 =>
                [
                    'id' => 2173,
                    'province_id' => 15,
                    'name' => 'Muxía',
                ],
            173 =>
                [
                    'id' => 2174,
                    'province_id' => 15,
                    'name' => 'Narón',
                ],
            174 =>
                [
                    'id' => 2175,
                    'province_id' => 15,
                    'name' => 'Neda',
                ],
            175 =>
                [
                    'id' => 2176,
                    'province_id' => 15,
                    'name' => 'Negreira',
                ],
            176 =>
                [
                    'id' => 2177,
                    'province_id' => 15,
                    'name' => 'Noia',
                ],
            177 =>
                [
                    'id' => 2178,
                    'province_id' => 15,
                    'name' => 'Oleiros',
                ],
            178 =>
                [
                    'id' => 2179,
                    'province_id' => 15,
                    'name' => 'Ordes',
                ],
            179 =>
                [
                    'id' => 2180,
                    'province_id' => 15,
                    'name' => 'Oroso',
                ],
            180 =>
                [
                    'id' => 2181,
                    'province_id' => 15,
                    'name' => 'Ortigueira',
                ],
            181 =>
                [
                    'id' => 2182,
                    'province_id' => 15,
                    'name' => 'Outes',
                ],
            182 =>
                [
                    'id' => 2183,
                    'province_id' => 15,
                    'name' => 'Oza dos Ríos',
                ],
            183 =>
                [
                    'id' => 2184,
                    'province_id' => 15,
                    'name' => 'Paderne',
                ],
            184 =>
                [
                    'id' => 2185,
                    'province_id' => 15,
                    'name' => 'Padrón',
                ],
            185 =>
                [
                    'id' => 2186,
                    'province_id' => 15,
                    'name' => 'Pino, O',
                ],
            186 =>
                [
                    'id' => 2187,
                    'province_id' => 15,
                    'name' => 'Pobra do Caramiñal, A',
                ],
            187 =>
                [
                    'id' => 2188,
                    'province_id' => 15,
                    'name' => 'Ponteceso',
                ],
            188 =>
                [
                    'id' => 2189,
                    'province_id' => 15,
                    'name' => 'Pontedeume',
                ],
            189 =>
                [
                    'id' => 2190,
                    'province_id' => 15,
                    'name' => 'Pontes de García Rodríguez, As',
                ],
            190 =>
                [
                    'id' => 2191,
                    'province_id' => 15,
                    'name' => 'Porto do Son',
                ],
            191 =>
                [
                    'id' => 2192,
                    'province_id' => 15,
                    'name' => 'Rianxo',
                ],
            192 =>
                [
                    'id' => 2193,
                    'province_id' => 15,
                    'name' => 'Ribeira',
                ],
            193 =>
                [
                    'id' => 2194,
                    'province_id' => 15,
                    'name' => 'Rois',
                ],
            194 =>
                [
                    'id' => 2195,
                    'province_id' => 15,
                    'name' => 'Sada',
                ],
            195 =>
                [
                    'id' => 2196,
                    'province_id' => 15,
                    'name' => 'San Sadurniño',
                ],
            196 =>
                [
                    'id' => 2197,
                    'province_id' => 15,
                    'name' => 'Santa Comba',
                ],
            197 =>
                [
                    'id' => 2198,
                    'province_id' => 15,
                    'name' => 'Santiago de Compostela',
                ],
            198 =>
                [
                    'id' => 2199,
                    'province_id' => 15,
                    'name' => 'Santiso',
                ],
            199 =>
                [
                    'id' => 2200,
                    'province_id' => 15,
                    'name' => 'Sobrado',
                ],
            200 =>
                [
                    'id' => 2201,
                    'province_id' => 15,
                    'name' => 'Somozas, As',
                ],
            201 =>
                [
                    'id' => 2202,
                    'province_id' => 15,
                    'name' => 'Teo',
                ],
            202 =>
                [
                    'id' => 2203,
                    'province_id' => 15,
                    'name' => 'Toques',
                ],
            203 =>
                [
                    'id' => 2204,
                    'province_id' => 15,
                    'name' => 'Tordoia',
                ],
            204 =>
                [
                    'id' => 2205,
                    'province_id' => 15,
                    'name' => 'Touro',
                ],
            205 =>
                [
                    'id' => 2206,
                    'province_id' => 15,
                    'name' => 'Trazo',
                ],
            206 =>
                [
                    'id' => 2207,
                    'province_id' => 15,
                    'name' => 'Val do Dubra',
                ],
            207 =>
                [
                    'id' => 2208,
                    'province_id' => 15,
                    'name' => 'Valdoviño',
                ],
            208 =>
                [
                    'id' => 2209,
                    'province_id' => 15,
                    'name' => 'Vedra',
                ],
            209 =>
                [
                    'id' => 2210,
                    'province_id' => 15,
                    'name' => 'Vilarmaior',
                ],
            210 =>
                [
                    'id' => 2211,
                    'province_id' => 15,
                    'name' => 'Vilasantar',
                ],
            211 =>
                [
                    'id' => 2212,
                    'province_id' => 15,
                    'name' => 'Vimianzo',
                ],
            212 =>
                [
                    'id' => 2213,
                    'province_id' => 15,
                    'name' => 'Zas',
                ],
            213 =>
                [
                    'id' => 2214,
                    'province_id' => 16,
                    'name' => 'Abia de la Obispalía',
                ],
            214 =>
                [
                    'id' => 2215,
                    'province_id' => 16,
                    'name' => 'Acebrón, El',
                ],
            215 =>
                [
                    'id' => 2216,
                    'province_id' => 16,
                    'name' => 'Alarcón',
                ],
            216 =>
                [
                    'id' => 2217,
                    'province_id' => 16,
                    'name' => 'Albaladejo del Cuende',
                ],
            217 =>
                [
                    'id' => 2218,
                    'province_id' => 16,
                    'name' => 'Albalate de las Nogueras',
                ],
            218 =>
                [
                    'id' => 2219,
                    'province_id' => 16,
                    'name' => 'Albendea',
                ],
            219 =>
                [
                    'id' => 2220,
                    'province_id' => 16,
                    'name' => 'Alberca de Záncara, La',
                ],
            220 =>
                [
                    'id' => 2221,
                    'province_id' => 16,
                    'name' => 'Alcalá de la Vega',
                ],
            221 =>
                [
                    'id' => 2222,
                    'province_id' => 16,
                    'name' => 'Alcantud',
                ],
            222 =>
                [
                    'id' => 2223,
                    'province_id' => 16,
                    'name' => 'Alcázar del Rey',
                ],
            223 =>
                [
                    'id' => 2224,
                    'province_id' => 16,
                    'name' => 'Alcohujate',
                ],
            224 =>
                [
                    'id' => 2225,
                    'province_id' => 16,
                    'name' => 'Alconchel de la Estrella',
                ],
            225 =>
                [
                    'id' => 2226,
                    'province_id' => 16,
                    'name' => 'Algarra',
                ],
            226 =>
                [
                    'id' => 2227,
                    'province_id' => 16,
                    'name' => 'Aliaguilla',
                ],
            227 =>
                [
                    'id' => 2228,
                    'province_id' => 16,
                    'name' => 'Almarcha, La',
                ],
            228 =>
                [
                    'id' => 2229,
                    'province_id' => 16,
                    'name' => 'Almendros',
                ],
            229 =>
                [
                    'id' => 2230,
                    'province_id' => 16,
                    'name' => 'Almodóvar del Pinar',
                ],
            230 =>
                [
                    'id' => 2231,
                    'province_id' => 16,
                    'name' => 'Almonacid del Marquesado',
                ],
            231 =>
                [
                    'id' => 2232,
                    'province_id' => 16,
                    'name' => 'Altarejos',
                ],
            232 =>
                [
                    'id' => 2233,
                    'province_id' => 16,
                    'name' => 'Arandilla del Arroyo',
                ],
            233 =>
                [
                    'id' => 2234,
                    'province_id' => 16,
                    'name' => 'Arcas del Villar',
                ],
            234 =>
                [
                    'id' => 2235,
                    'province_id' => 16,
                    'name' => 'Arcos de la Sierra',
                ],
            235 =>
                [
                    'id' => 2236,
                    'province_id' => 16,
                    'name' => 'Arguisuelas',
                ],
            236 =>
                [
                    'id' => 2237,
                    'province_id' => 16,
                    'name' => 'Arrancacepas',
                ],
            237 =>
                [
                    'id' => 2238,
                    'province_id' => 16,
                    'name' => 'Atalaya del Cañavate',
                ],
            238 =>
                [
                    'id' => 2239,
                    'province_id' => 16,
                    'name' => 'Barajas de Melo',
                ],
            239 =>
                [
                    'id' => 2240,
                    'province_id' => 16,
                    'name' => 'Barchín del Hoyo',
                ],
            240 =>
                [
                    'id' => 2241,
                    'province_id' => 16,
                    'name' => 'Bascuñana de San Pedro',
                ],
            241 =>
                [
                    'id' => 2242,
                    'province_id' => 16,
                    'name' => 'Beamud',
                ],
            242 =>
                [
                    'id' => 2243,
                    'province_id' => 16,
                    'name' => 'Belinchón',
                ],
            243 =>
                [
                    'id' => 2244,
                    'province_id' => 16,
                    'name' => 'Belmonte',
                ],
            244 =>
                [
                    'id' => 2245,
                    'province_id' => 16,
                    'name' => 'Belmontejo',
                ],
            245 =>
                [
                    'id' => 2246,
                    'province_id' => 16,
                    'name' => 'Beteta',
                ],
            246 =>
                [
                    'id' => 2247,
                    'province_id' => 16,
                    'name' => 'Boniches',
                ],
            247 =>
                [
                    'id' => 2248,
                    'province_id' => 16,
                    'name' => 'Buciegas',
                ],
            248 =>
                [
                    'id' => 2249,
                    'province_id' => 16,
                    'name' => 'Buenache de Alarcón',
                ],
            249 =>
                [
                    'id' => 2250,
                    'province_id' => 16,
                    'name' => 'Buenache de la Sierra',
                ],
            250 =>
                [
                    'id' => 2251,
                    'province_id' => 16,
                    'name' => 'Buendía',
                ],
            251 =>
                [
                    'id' => 2252,
                    'province_id' => 16,
                    'name' => 'Campillo de Altobuey',
                ],
            252 =>
                [
                    'id' => 2253,
                    'province_id' => 16,
                    'name' => 'Campillos-Paravientos',
                ],
            253 =>
                [
                    'id' => 2254,
                    'province_id' => 16,
                    'name' => 'Campillos-Sierra',
                ],
            254 =>
                [
                    'id' => 2255,
                    'province_id' => 16,
                    'name' => 'Campos del Paraíso',
                ],
            255 =>
                [
                    'id' => 2256,
                    'province_id' => 16,
                    'name' => 'Canalejas del Arroyo',
                ],
            256 =>
                [
                    'id' => 2257,
                    'province_id' => 16,
                    'name' => 'Cañada del Hoyo',
                ],
            257 =>
                [
                    'id' => 2258,
                    'province_id' => 16,
                    'name' => 'Cañada Juncosa',
                ],
            258 =>
                [
                    'id' => 2259,
                    'province_id' => 16,
                    'name' => 'Cañamares',
                ],
            259 =>
                [
                    'id' => 2260,
                    'province_id' => 16,
                    'name' => 'Cañavate, El',
                ],
            260 =>
                [
                    'id' => 2261,
                    'province_id' => 16,
                    'name' => 'Cañaveras',
                ],
            261 =>
                [
                    'id' => 2262,
                    'province_id' => 16,
                    'name' => 'Cañaveruelas',
                ],
            262 =>
                [
                    'id' => 2263,
                    'province_id' => 16,
                    'name' => 'Cañete',
                ],
            263 =>
                [
                    'id' => 2264,
                    'province_id' => 16,
                    'name' => 'Cañizares',
                ],
            264 =>
                [
                    'id' => 2265,
                    'province_id' => 16,
                    'name' => 'Carboneras de Guadazaón',
                ],
            265 =>
                [
                    'id' => 2266,
                    'province_id' => 16,
                    'name' => 'Cardenete',
                ],
            266 =>
                [
                    'id' => 2267,
                    'province_id' => 16,
                    'name' => 'Carrascosa',
                ],
            267 =>
                [
                    'id' => 2268,
                    'province_id' => 16,
                    'name' => 'Carrascosa de Haro',
                ],
            268 =>
                [
                    'id' => 2269,
                    'province_id' => 16,
                    'name' => 'Casas de Benítez',
                ],
            269 =>
                [
                    'id' => 2270,
                    'province_id' => 16,
                    'name' => 'Casas de Fernando Alonso',
                ],
            270 =>
                [
                    'id' => 2271,
                    'province_id' => 16,
                    'name' => 'Casas de Garcimolina',
                ],
            271 =>
                [
                    'id' => 2272,
                    'province_id' => 16,
                    'name' => 'Casas de Guijarro',
                ],
            272 =>
                [
                    'id' => 2273,
                    'province_id' => 16,
                    'name' => 'Casas de Haro',
                ],
            273 =>
                [
                    'id' => 2274,
                    'province_id' => 16,
                    'name' => 'Casas de los Pinos',
                ],
            274 =>
                [
                    'id' => 2275,
                    'province_id' => 16,
                    'name' => 'Casasimarro',
                ],
            275 =>
                [
                    'id' => 2276,
                    'province_id' => 16,
                    'name' => 'Castejón',
                ],
            276 =>
                [
                    'id' => 2277,
                    'province_id' => 16,
                    'name' => 'Castillejo de Iniesta',
                ],
            277 =>
                [
                    'id' => 2278,
                    'province_id' => 16,
                    'name' => 'Castillejo-Sierra',
                ],
            278 =>
                [
                    'id' => 2279,
                    'province_id' => 16,
                    'name' => 'Castillo de Garcimuñoz',
                ],
            279 =>
                [
                    'id' => 2280,
                    'province_id' => 16,
                    'name' => 'Castillo-Albaráñez',
                ],
            280 =>
                [
                    'id' => 2281,
                    'province_id' => 16,
                    'name' => 'Cervera del Llano',
                ],
            281 =>
                [
                    'id' => 2282,
                    'province_id' => 16,
                    'name' => 'Chillarón de Cuenca',
                ],
            282 =>
                [
                    'id' => 2283,
                    'province_id' => 16,
                    'name' => 'Chumillas',
                ],
            283 =>
                [
                    'id' => 2284,
                    'province_id' => 16,
                    'name' => 'Cierva, La',
                ],
            284 =>
                [
                    'id' => 2285,
                    'province_id' => 16,
                    'name' => 'Cuenca',
                ],
            285 =>
                [
                    'id' => 2286,
                    'province_id' => 16,
                    'name' => 'Cueva del Hierro',
                ],
            286 =>
                [
                    'id' => 2287,
                    'province_id' => 16,
                    'name' => 'Enguídanos',
                ],
            287 =>
                [
                    'id' => 2288,
                    'province_id' => 16,
                    'name' => 'Fresneda de Altarejos',
                ],
            288 =>
                [
                    'id' => 2289,
                    'province_id' => 16,
                    'name' => 'Fresneda de la Sierra',
                ],
            289 =>
                [
                    'id' => 2290,
                    'province_id' => 16,
                    'name' => 'Frontera, La',
                ],
            290 =>
                [
                    'id' => 2291,
                    'province_id' => 16,
                    'name' => 'Fuente de Pedro Naharro',
                ],
            291 =>
                [
                    'id' => 2292,
                    'province_id' => 16,
                    'name' => 'Fuentelespino de Haro',
                ],
            292 =>
                [
                    'id' => 2293,
                    'province_id' => 16,
                    'name' => 'Fuentelespino de Moya',
                ],
            293 =>
                [
                    'id' => 2294,
                    'province_id' => 16,
                    'name' => 'Fuentenava de Jábaga',
                ],
            294 =>
                [
                    'id' => 2295,
                    'province_id' => 16,
                    'name' => 'Fuentes',
                ],
            295 =>
                [
                    'id' => 2296,
                    'province_id' => 16,
                    'name' => 'Fuertescusa',
                ],
            296 =>
                [
                    'id' => 2297,
                    'province_id' => 16,
                    'name' => 'Gabaldón',
                ],
            297 =>
                [
                    'id' => 2298,
                    'province_id' => 16,
                    'name' => 'Garaballa',
                ],
            298 =>
                [
                    'id' => 2299,
                    'province_id' => 16,
                    'name' => 'Gascueña',
                ],
            299 =>
                [
                    'id' => 2300,
                    'province_id' => 16,
                    'name' => 'Graja de Campalbo',
                ],
            300 =>
                [
                    'id' => 2301,
                    'province_id' => 16,
                    'name' => 'Graja de Iniesta',
                ],
            301 =>
                [
                    'id' => 2302,
                    'province_id' => 16,
                    'name' => 'Henarejos',
                ],
            302 =>
                [
                    'id' => 2303,
                    'province_id' => 16,
                    'name' => 'Herrumblar, El',
                ],
            303 =>
                [
                    'id' => 2304,
                    'province_id' => 16,
                    'name' => 'Hinojosa, La',
                ],
            304 =>
                [
                    'id' => 2305,
                    'province_id' => 16,
                    'name' => 'Hinojosos, Los',
                ],
            305 =>
                [
                    'id' => 2306,
                    'province_id' => 16,
                    'name' => 'Hito, El',
                ],
            306 =>
                [
                    'id' => 2307,
                    'province_id' => 16,
                    'name' => 'Honrubia',
                ],
            307 =>
                [
                    'id' => 2308,
                    'province_id' => 16,
                    'name' => 'Hontanaya',
                ],
            308 =>
                [
                    'id' => 2309,
                    'province_id' => 16,
                    'name' => 'Hontecillas',
                ],
            309 =>
                [
                    'id' => 2310,
                    'province_id' => 16,
                    'name' => 'Horcajo de Santiago',
                ],
            310 =>
                [
                    'id' => 2311,
                    'province_id' => 16,
                    'name' => 'Huélamo',
                ],
            311 =>
                [
                    'id' => 2312,
                    'province_id' => 16,
                    'name' => 'Huelves',
                ],
            312 =>
                [
                    'id' => 2313,
                    'province_id' => 16,
                    'name' => 'Huérguina',
                ],
            313 =>
                [
                    'id' => 2314,
                    'province_id' => 16,
                    'name' => 'Huerta de la Obispalía',
                ],
            314 =>
                [
                    'id' => 2315,
                    'province_id' => 16,
                    'name' => 'Huerta del Marquesado',
                ],
            315 =>
                [
                    'id' => 2316,
                    'province_id' => 16,
                    'name' => 'Huete',
                ],
            316 =>
                [
                    'id' => 2317,
                    'province_id' => 16,
                    'name' => 'Iniesta',
                ],
            317 =>
                [
                    'id' => 2318,
                    'province_id' => 16,
                    'name' => 'Laguna del Marquesado',
                ],
            318 =>
                [
                    'id' => 2319,
                    'province_id' => 16,
                    'name' => 'Lagunaseca',
                ],
            319 =>
                [
                    'id' => 2320,
                    'province_id' => 16,
                    'name' => 'Landete',
                ],
            320 =>
                [
                    'id' => 2321,
                    'province_id' => 16,
                    'name' => 'Ledaña',
                ],
            321 =>
                [
                    'id' => 2322,
                    'province_id' => 16,
                    'name' => 'Leganiel',
                ],
            322 =>
                [
                    'id' => 2323,
                    'province_id' => 16,
                    'name' => 'Majadas, Las',
                ],
            323 =>
                [
                    'id' => 2324,
                    'province_id' => 16,
                    'name' => 'Mariana',
                ],
            324 =>
                [
                    'id' => 2325,
                    'province_id' => 16,
                    'name' => 'Masegosa',
                ],
            325 =>
                [
                    'id' => 2326,
                    'province_id' => 16,
                    'name' => 'Mesas, Las',
                ],
            326 =>
                [
                    'id' => 2327,
                    'province_id' => 16,
                    'name' => 'Minglanilla',
                ],
            327 =>
                [
                    'id' => 2328,
                    'province_id' => 16,
                    'name' => 'Mira',
                ],
            328 =>
                [
                    'id' => 2329,
                    'province_id' => 16,
                    'name' => 'Monreal del Llano',
                ],
            329 =>
                [
                    'id' => 2330,
                    'province_id' => 16,
                    'name' => 'Montalbanejo',
                ],
            330 =>
                [
                    'id' => 2331,
                    'province_id' => 16,
                    'name' => 'Montalbo',
                ],
            331 =>
                [
                    'id' => 2332,
                    'province_id' => 16,
                    'name' => 'Monteagudo de las Salinas',
                ],
            332 =>
                [
                    'id' => 2333,
                    'province_id' => 16,
                    'name' => 'Mota de Altarejos',
                ],
            333 =>
                [
                    'id' => 2334,
                    'province_id' => 16,
                    'name' => 'Mota del Cuervo',
                ],
            334 =>
                [
                    'id' => 2335,
                    'province_id' => 16,
                    'name' => 'Motilla del Palancar',
                ],
            335 =>
                [
                    'id' => 2336,
                    'province_id' => 16,
                    'name' => 'Moya',
                ],
            336 =>
                [
                    'id' => 2337,
                    'province_id' => 16,
                    'name' => 'Narboneta',
                ],
            337 =>
                [
                    'id' => 2338,
                    'province_id' => 16,
                    'name' => 'Olivares de Júcar',
                ],
            338 =>
                [
                    'id' => 2339,
                    'province_id' => 16,
                    'name' => 'Olmeda de la Cuesta',
                ],
            339 =>
                [
                    'id' => 2340,
                    'province_id' => 16,
                    'name' => 'Olmeda del Rey',
                ],
            340 =>
                [
                    'id' => 2341,
                    'province_id' => 16,
                    'name' => 'Olmedilla de Alarcón',
                ],
            341 =>
                [
                    'id' => 2342,
                    'province_id' => 16,
                    'name' => 'Olmedilla de Eliz',
                ],
            342 =>
                [
                    'id' => 2343,
                    'province_id' => 16,
                    'name' => 'Osa de la Vega',
                ],
            343 =>
                [
                    'id' => 2344,
                    'province_id' => 16,
                    'name' => 'Pajarón',
                ],
            344 =>
                [
                    'id' => 2345,
                    'province_id' => 16,
                    'name' => 'Pajaroncillo',
                ],
            345 =>
                [
                    'id' => 2346,
                    'province_id' => 16,
                    'name' => 'Palomares del Campo',
                ],
            346 =>
                [
                    'id' => 2347,
                    'province_id' => 16,
                    'name' => 'Palomera',
                ],
            347 =>
                [
                    'id' => 2348,
                    'province_id' => 16,
                    'name' => 'Paracuellos',
                ],
            348 =>
                [
                    'id' => 2349,
                    'province_id' => 16,
                    'name' => 'Paredes',
                ],
            349 =>
                [
                    'id' => 2350,
                    'province_id' => 16,
                    'name' => 'Parra de las Vegas, La',
                ],
            350 =>
                [
                    'id' => 2351,
                    'province_id' => 16,
                    'name' => 'Pedernoso, El',
                ],
            351 =>
                [
                    'id' => 2352,
                    'province_id' => 16,
                    'name' => 'Pedroñeras, Las',
                ],
            352 =>
                [
                    'id' => 2353,
                    'province_id' => 16,
                    'name' => 'Peral, El',
                ],
            353 =>
                [
                    'id' => 2354,
                    'province_id' => 16,
                    'name' => 'Peraleja, La',
                ],
            354 =>
                [
                    'id' => 2355,
                    'province_id' => 16,
                    'name' => 'Pesquera, La',
                ],
            355 =>
                [
                    'id' => 2356,
                    'province_id' => 16,
                    'name' => 'Picazo, El',
                ],
            356 =>
                [
                    'id' => 2357,
                    'province_id' => 16,
                    'name' => 'Pinarejo',
                ],
            357 =>
                [
                    'id' => 2358,
                    'province_id' => 16,
                    'name' => 'Pineda de Gigüela',
                ],
            358 =>
                [
                    'id' => 2359,
                    'province_id' => 16,
                    'name' => 'Piqueras del Castillo',
                ],
            359 =>
                [
                    'id' => 2360,
                    'province_id' => 16,
                    'name' => 'Portalrubio de Guadamejud',
                ],
            360 =>
                [
                    'id' => 2361,
                    'province_id' => 16,
                    'name' => 'Portilla',
                ],
            361 =>
                [
                    'id' => 2362,
                    'province_id' => 16,
                    'name' => 'Poyatos',
                ],
            362 =>
                [
                    'id' => 2363,
                    'province_id' => 16,
                    'name' => 'Pozoamargo',
                ],
            363 =>
                [
                    'id' => 2364,
                    'province_id' => 16,
                    'name' => 'Pozorrubielos de la Mancha',
                ],
            364 =>
                [
                    'id' => 2365,
                    'province_id' => 16,
                    'name' => 'Pozorrubio',
                ],
            365 =>
                [
                    'id' => 2366,
                    'province_id' => 16,
                    'name' => 'Pozuelo, El',
                ],
            366 =>
                [
                    'id' => 2367,
                    'province_id' => 16,
                    'name' => 'Priego',
                ],
            367 =>
                [
                    'id' => 2368,
                    'province_id' => 16,
                    'name' => 'Provencio, El',
                ],
            368 =>
                [
                    'id' => 2369,
                    'province_id' => 16,
                    'name' => 'Puebla de Almenara',
                ],
            369 =>
                [
                    'id' => 2370,
                    'province_id' => 16,
                    'name' => 'Puebla del Salvador',
                ],
            370 =>
                [
                    'id' => 2371,
                    'province_id' => 16,
                    'name' => 'Quintanar del Rey',
                ],
            371 =>
                [
                    'id' => 2372,
                    'province_id' => 16,
                    'name' => 'Rada de Haro',
                ],
            372 =>
                [
                    'id' => 2373,
                    'province_id' => 16,
                    'name' => 'Reíllo',
                ],
            373 =>
                [
                    'id' => 2374,
                    'province_id' => 16,
                    'name' => 'Rozalén del Monte',
                ],
            374 =>
                [
                    'id' => 2375,
                    'province_id' => 16,
                    'name' => 'Saceda-Trasierra',
                ],
            375 =>
                [
                    'id' => 2376,
                    'province_id' => 16,
                    'name' => 'Saelices',
                ],
            376 =>
                [
                    'id' => 2377,
                    'province_id' => 16,
                    'name' => 'Salinas del Manzano',
                ],
            377 =>
                [
                    'id' => 2378,
                    'province_id' => 16,
                    'name' => 'Salmeroncillos',
                ],
            378 =>
                [
                    'id' => 2379,
                    'province_id' => 16,
                    'name' => 'Salvacañete',
                ],
            379 =>
                [
                    'id' => 2380,
                    'province_id' => 16,
                    'name' => 'San Clemente',
                ],
            380 =>
                [
                    'id' => 2381,
                    'province_id' => 16,
                    'name' => 'San Lorenzo de la Parrilla',
                ],
            381 =>
                [
                    'id' => 2382,
                    'province_id' => 16,
                    'name' => 'San Martín de Boniches',
                ],
            382 =>
                [
                    'id' => 2383,
                    'province_id' => 16,
                    'name' => 'San Pedro Palmiches',
                ],
            383 =>
                [
                    'id' => 2384,
                    'province_id' => 16,
                    'name' => 'Santa Cruz de Moya',
                ],
            384 =>
                [
                    'id' => 2385,
                    'province_id' => 16,
                    'name' => 'Santa María de los Llanos',
                ],
            385 =>
                [
                    'id' => 2386,
                    'province_id' => 16,
                    'name' => 'Santa María del Campo Rus',
                ],
            386 =>
                [
                    'id' => 2387,
                    'province_id' => 16,
                    'name' => 'Santa María del Val',
                ],
            387 =>
                [
                    'id' => 2388,
                    'province_id' => 16,
                    'name' => 'Sisante',
                ],
            388 =>
                [
                    'id' => 2389,
                    'province_id' => 16,
                    'name' => 'Solera de Gabaldón',
                ],
            389 =>
                [
                    'id' => 2390,
                    'province_id' => 16,
                    'name' => 'Sotorribas',
                ],
            390 =>
                [
                    'id' => 2391,
                    'province_id' => 16,
                    'name' => 'Talayuelas',
                ],
            391 =>
                [
                    'id' => 2392,
                    'province_id' => 16,
                    'name' => 'Tarancón',
                ],
            392 =>
                [
                    'id' => 2393,
                    'province_id' => 16,
                    'name' => 'Tébar',
                ],
            393 =>
                [
                    'id' => 2394,
                    'province_id' => 16,
                    'name' => 'Tejadillos',
                ],
            394 =>
                [
                    'id' => 2395,
                    'province_id' => 16,
                    'name' => 'Tinajas',
                ],
            395 =>
                [
                    'id' => 2396,
                    'province_id' => 16,
                    'name' => 'Torralba',
                ],
            396 =>
                [
                    'id' => 2397,
                    'province_id' => 16,
                    'name' => 'Torrejoncillo del Rey',
                ],
            397 =>
                [
                    'id' => 2398,
                    'province_id' => 16,
                    'name' => 'Torrubia del Campo',
                ],
            398 =>
                [
                    'id' => 2399,
                    'province_id' => 16,
                    'name' => 'Torrubia del Castillo',
                ],
            399 =>
                [
                    'id' => 2400,
                    'province_id' => 16,
                    'name' => 'Tragacete',
                ],
            400 =>
                [
                    'id' => 2401,
                    'province_id' => 16,
                    'name' => 'Tresjuncos',
                ],
            401 =>
                [
                    'id' => 2402,
                    'province_id' => 16,
                    'name' => 'Tribaldos',
                ],
            402 =>
                [
                    'id' => 2403,
                    'province_id' => 16,
                    'name' => 'Uclés',
                ],
            403 =>
                [
                    'id' => 2404,
                    'province_id' => 16,
                    'name' => 'Uña',
                ],
            404 =>
                [
                    'id' => 2405,
                    'province_id' => 16,
                    'name' => 'Valdecolmenas, Los',
                ],
            405 =>
                [
                    'id' => 2406,
                    'province_id' => 16,
                    'name' => 'Valdemeca',
                ],
            406 =>
                [
                    'id' => 2407,
                    'province_id' => 16,
                    'name' => 'Valdemorillo de la Sierra',
                ],
            407 =>
                [
                    'id' => 2408,
                    'province_id' => 16,
                    'name' => 'Valdemoro-Sierra',
                ],
            408 =>
                [
                    'id' => 2409,
                    'province_id' => 16,
                    'name' => 'Valdeolivas',
                ],
            409 =>
                [
                    'id' => 2410,
                    'province_id' => 16,
                    'name' => 'Valdetórtola',
                ],
            410 =>
                [
                    'id' => 2411,
                    'province_id' => 16,
                    'name' => 'Valeras, Las',
                ],
            411 =>
                [
                    'id' => 2412,
                    'province_id' => 16,
                    'name' => 'Valhermoso de la Fuente',
                ],
            412 =>
                [
                    'id' => 2413,
                    'province_id' => 16,
                    'name' => 'Valle de Altomira, El',
                ],
            413 =>
                [
                    'id' => 2414,
                    'province_id' => 16,
                    'name' => 'Valsalobre',
                ],
            414 =>
                [
                    'id' => 2415,
                    'province_id' => 16,
                    'name' => 'Valverde de Júcar',
                ],
            415 =>
                [
                    'id' => 2416,
                    'province_id' => 16,
                    'name' => 'Valverdejo',
                ],
            416 =>
                [
                    'id' => 2417,
                    'province_id' => 16,
                    'name' => 'Vara de Rey',
                ],
            417 =>
                [
                    'id' => 2418,
                    'province_id' => 16,
                    'name' => 'Vega del Codorno',
                ],
            418 =>
                [
                    'id' => 2419,
                    'province_id' => 16,
                    'name' => 'Vellisca',
                ],
            419 =>
                [
                    'id' => 2420,
                    'province_id' => 16,
                    'name' => 'Villaconejos de Trabaque',
                ],
            420 =>
                [
                    'id' => 2421,
                    'province_id' => 16,
                    'name' => 'Villaescusa de Haro',
                ],
            421 =>
                [
                    'id' => 2422,
                    'province_id' => 16,
                    'name' => 'Villagarcía del Llano',
                ],
            422 =>
                [
                    'id' => 2423,
                    'province_id' => 16,
                    'name' => 'Villalba de la Sierra',
                ],
            423 =>
                [
                    'id' => 2424,
                    'province_id' => 16,
                    'name' => 'Villalba del Rey',
                ],
            424 =>
                [
                    'id' => 2425,
                    'province_id' => 16,
                    'name' => 'Villalgordo del Marquesado',
                ],
            425 =>
                [
                    'id' => 2426,
                    'province_id' => 16,
                    'name' => 'Villalpardo',
                ],
            426 =>
                [
                    'id' => 2427,
                    'province_id' => 16,
                    'name' => 'Villamayor de Santiago',
                ],
            427 =>
                [
                    'id' => 2428,
                    'province_id' => 16,
                    'name' => 'Villanueva de Guadamejud',
                ],
            428 =>
                [
                    'id' => 2429,
                    'province_id' => 16,
                    'name' => 'Villanueva de la Jara',
                ],
            429 =>
                [
                    'id' => 2430,
                    'province_id' => 16,
                    'name' => 'Villar de Cañas',
                ],
            430 =>
                [
                    'id' => 2431,
                    'province_id' => 16,
                    'name' => 'Villar de Domingo García',
                ],
            431 =>
                [
                    'id' => 2432,
                    'province_id' => 16,
                    'name' => 'Villar de la Encina',
                ],
            432 =>
                [
                    'id' => 2433,
                    'province_id' => 16,
                    'name' => 'Villar de Olalla',
                ],
            433 =>
                [
                    'id' => 2434,
                    'province_id' => 16,
                    'name' => 'Villar del Humo',
                ],
            434 =>
                [
                    'id' => 2435,
                    'province_id' => 16,
                    'name' => 'Villar del Infantado',
                ],
            435 =>
                [
                    'id' => 2436,
                    'province_id' => 16,
                    'name' => 'Villar y Velasco',
                ],
            436 =>
                [
                    'id' => 2437,
                    'province_id' => 16,
                    'name' => 'Villarejo de Fuentes',
                ],
            437 =>
                [
                    'id' => 2438,
                    'province_id' => 16,
                    'name' => 'Villarejo de la Peñuela',
                ],
            438 =>
                [
                    'id' => 2439,
                    'province_id' => 16,
                    'name' => 'Villarejo-Periesteban',
                ],
            439 =>
                [
                    'id' => 2440,
                    'province_id' => 16,
                    'name' => 'Villares del Saz',
                ],
            440 =>
                [
                    'id' => 2441,
                    'province_id' => 16,
                    'name' => 'Villarrubio',
                ],
            441 =>
                [
                    'id' => 2442,
                    'province_id' => 16,
                    'name' => 'Villarta',
                ],
            442 =>
                [
                    'id' => 2443,
                    'province_id' => 16,
                    'name' => 'Villas de la Ventosa',
                ],
            443 =>
                [
                    'id' => 2444,
                    'province_id' => 16,
                    'name' => 'Villaverde y Pasaconsol',
                ],
            444 =>
                [
                    'id' => 2445,
                    'province_id' => 16,
                    'name' => 'Víllora',
                ],
            445 =>
                [
                    'id' => 2446,
                    'province_id' => 16,
                    'name' => 'Vindel',
                ],
            446 =>
                [
                    'id' => 2447,
                    'province_id' => 16,
                    'name' => 'Yémeda',
                ],
            447 =>
                [
                    'id' => 2448,
                    'province_id' => 16,
                    'name' => 'Zafra de Záncara',
                ],
            448 =>
                [
                    'id' => 2449,
                    'province_id' => 16,
                    'name' => 'Zafrilla',
                ],
            449 =>
                [
                    'id' => 2450,
                    'province_id' => 16,
                    'name' => 'Zarza de Tajo',
                ],
            450 =>
                [
                    'id' => 2451,
                    'province_id' => 16,
                    'name' => 'Zarzuela',
                ],
            451 =>
                [
                    'id' => 2452,
                    'province_id' => 17,
                    'name' => 'Agullana',
                ],
            452 =>
                [
                    'id' => 2453,
                    'province_id' => 17,
                    'name' => 'Aiguaviva',
                ],
            453 =>
                [
                    'id' => 2454,
                    'province_id' => 17,
                    'name' => 'Albanyà',
                ],
            454 =>
                [
                    'id' => 2455,
                    'province_id' => 17,
                    'name' => 'Albons',
                ],
            455 =>
                [
                    'id' => 2456,
                    'province_id' => 17,
                    'name' => 'Alp',
                ],
            456 =>
                [
                    'id' => 2457,
                    'province_id' => 17,
                    'name' => 'Amer',
                ],
            457 =>
                [
                    'id' => 2458,
                    'province_id' => 17,
                    'name' => 'Anglès',
                ],
            458 =>
                [
                    'id' => 2459,
                    'province_id' => 17,
                    'name' => 'Arbúcies',
                ],
            459 =>
                [
                    'id' => 2460,
                    'province_id' => 17,
                    'name' => 'Argelaguer',
                ],
            460 =>
                [
                    'id' => 2461,
                    'province_id' => 17,
                    'name' => 'Armentera, L\'',
                ],
            461 =>
                [
                    'id' => 2462,
                    'province_id' => 17,
                    'name' => 'Avinyonet de Puigventós',
                ],
            462 =>
                [
                    'id' => 2463,
                    'province_id' => 17,
                    'name' => 'Banyoles',
                ],
            463 =>
                [
                    'id' => 2464,
                    'province_id' => 17,
                    'name' => 'Bàscara',
                ],
            464 =>
                [
                    'id' => 2465,
                    'province_id' => 17,
                    'name' => 'Begur',
                ],
            465 =>
                [
                    'id' => 2466,
                    'province_id' => 17,
                    'name' => 'Bellcaire d\'Empordà',
                ],
            466 =>
                [
                    'id' => 2467,
                    'province_id' => 17,
                    'name' => 'Besalú',
                ],
            467 =>
                [
                    'id' => 2468,
                    'province_id' => 17,
                    'name' => 'Bescanó',
                ],
            468 =>
                [
                    'id' => 2469,
                    'province_id' => 17,
                    'name' => 'Beuda',
                ],
            469 =>
                [
                    'id' => 2470,
                    'province_id' => 17,
                    'name' => 'Bisbal d\'Empordà, La',
                ],
            470 =>
                [
                    'id' => 2471,
                    'province_id' => 17,
                    'name' => 'Biure',
                ],
            471 =>
                [
                    'id' => 2472,
                    'province_id' => 17,
                    'name' => 'Blanes',
                ],
            472 =>
                [
                    'id' => 2473,
                    'province_id' => 17,
                    'name' => 'Boadella i les Escaules',
                ],
            473 =>
                [
                    'id' => 2474,
                    'province_id' => 17,
                    'name' => 'Bolvir',
                ],
            474 =>
                [
                    'id' => 2475,
                    'province_id' => 17,
                    'name' => 'Bordils',
                ],
            475 =>
                [
                    'id' => 2476,
                    'province_id' => 17,
                    'name' => 'Borrassà',
                ],
            476 =>
                [
                    'id' => 2477,
                    'province_id' => 17,
                    'name' => 'Breda',
                ],
            477 =>
                [
                    'id' => 2478,
                    'province_id' => 17,
                    'name' => 'Brunyola',
                ],
            478 =>
                [
                    'id' => 2479,
                    'province_id' => 17,
                    'name' => 'Cabanelles',
                ],
            479 =>
                [
                    'id' => 2480,
                    'province_id' => 17,
                    'name' => 'Cabanes',
                ],
            480 =>
                [
                    'id' => 2481,
                    'province_id' => 17,
                    'name' => 'Cadaqués',
                ],
            481 =>
                [
                    'id' => 2482,
                    'province_id' => 17,
                    'name' => 'Caldes de Malavella',
                ],
            482 =>
                [
                    'id' => 2483,
                    'province_id' => 17,
                    'name' => 'Calonge',
                ],
            483 =>
                [
                    'id' => 2484,
                    'province_id' => 17,
                    'name' => 'Camós',
                ],
            484 =>
                [
                    'id' => 2485,
                    'province_id' => 17,
                    'name' => 'Campdevànol',
                ],
            485 =>
                [
                    'id' => 2486,
                    'province_id' => 17,
                    'name' => 'Campelles',
                ],
            486 =>
                [
                    'id' => 2487,
                    'province_id' => 17,
                    'name' => 'Campllong',
                ],
            487 =>
                [
                    'id' => 2488,
                    'province_id' => 17,
                    'name' => 'Camprodon',
                ],
            488 =>
                [
                    'id' => 2489,
                    'province_id' => 17,
                    'name' => 'Canet d\'Adri',
                ],
            489 =>
                [
                    'id' => 2490,
                    'province_id' => 17,
                    'name' => 'Cantallops',
                ],
            490 =>
                [
                    'id' => 2491,
                    'province_id' => 17,
                    'name' => 'Capmany',
                ],
            491 =>
                [
                    'id' => 2492,
                    'province_id' => 17,
                    'name' => 'Cassà de la Selva',
                ],
            492 =>
                [
                    'id' => 2493,
                    'province_id' => 17,
                    'name' => 'Castellfollit de la Roca',
                ],
            493 =>
                [
                    'id' => 2494,
                    'province_id' => 17,
                    'name' => 'Castelló d\'Empúries',
                ],
            494 =>
                [
                    'id' => 2495,
                    'province_id' => 17,
                    'name' => 'Castell-Platja d\'Aro',
                ],
            495 =>
                [
                    'id' => 2496,
                    'province_id' => 17,
                    'name' => 'Cellera de Ter, La',
                ],
            496 =>
                [
                    'id' => 2497,
                    'province_id' => 17,
                    'name' => 'Celrà',
                ],
            497 =>
                [
                    'id' => 2498,
                    'province_id' => 17,
                    'name' => 'Cervià de Ter',
                ],
            498 =>
                [
                    'id' => 2499,
                    'province_id' => 17,
                    'name' => 'Cistella',
                ],
            499 =>
                [
                    'id' => 2500,
                    'province_id' => 17,
                    'name' => 'Colera',
                ],
        ]);
        \DB::table('localities')->insert([
            0 =>
                [
                    'id' => 2501,
                    'province_id' => 17,
                    'name' => 'Colomers',
                ],
            1 =>
                [
                    'id' => 2502,
                    'province_id' => 17,
                    'name' => 'Corçà',
                ],
            2 =>
                [
                    'id' => 2503,
                    'province_id' => 17,
                    'name' => 'Cornellà del Terri',
                ],
            3 =>
                [
                    'id' => 2504,
                    'province_id' => 17,
                    'name' => 'Crespià',
                ],
            4 =>
                [
                    'id' => 2505,
                    'province_id' => 17,
                    'name' => 'Cruïlles, Monells i Sant Sadurní de l\'Heura',
                ],
            5 =>
                [
                    'id' => 2506,
                    'province_id' => 17,
                    'name' => 'Darnius',
                ],
            6 =>
                [
                    'id' => 2507,
                    'province_id' => 17,
                    'name' => 'Das',
                ],
            7 =>
                [
                    'id' => 2508,
                    'province_id' => 17,
                    'name' => 'Escala, L\'',
                ],
            8 =>
                [
                    'id' => 2509,
                    'province_id' => 17,
                    'name' => 'Espinelves',
                ],
            9 =>
                [
                    'id' => 2510,
                    'province_id' => 17,
                    'name' => 'Espolla',
                ],
            10 =>
                [
                    'id' => 2511,
                    'province_id' => 17,
                    'name' => 'Esponellà',
                ],
            11 =>
                [
                    'id' => 2512,
                    'province_id' => 17,
                    'name' => 'Far d\'Empordà, El',
                ],
            12 =>
                [
                    'id' => 2513,
                    'province_id' => 17,
                    'name' => 'Figueres',
                ],
            13 =>
                [
                    'id' => 2514,
                    'province_id' => 17,
                    'name' => 'Flaçà',
                ],
            14 =>
                [
                    'id' => 2515,
                    'province_id' => 17,
                    'name' => 'Foixà',
                ],
            15 =>
                [
                    'id' => 2516,
                    'province_id' => 17,
                    'name' => 'Fontanals de Cerdanya',
                ],
            16 =>
                [
                    'id' => 2517,
                    'province_id' => 17,
                    'name' => 'Fontanilles',
                ],
            17 =>
                [
                    'id' => 2518,
                    'province_id' => 17,
                    'name' => 'Fontcoberta',
                ],
            18 =>
                [
                    'id' => 2519,
                    'province_id' => 17,
                    'name' => 'Forallac',
                ],
            19 =>
                [
                    'id' => 2520,
                    'province_id' => 17,
                    'name' => 'Fornells de la Selva',
                ],
            20 =>
                [
                    'id' => 2521,
                    'province_id' => 17,
                    'name' => 'Fortià',
                ],
            21 =>
                [
                    'id' => 2522,
                    'province_id' => 17,
                    'name' => 'Garrigàs',
                ],
            22 =>
                [
                    'id' => 2523,
                    'province_id' => 17,
                    'name' => 'Garrigoles',
                ],
            23 =>
                [
                    'id' => 2524,
                    'province_id' => 17,
                    'name' => 'Garriguella',
                ],
            24 =>
                [
                    'id' => 2525,
                    'province_id' => 17,
                    'name' => 'Ger',
                ],
            25 =>
                [
                    'id' => 2526,
                    'province_id' => 17,
                    'name' => 'Girona',
                ],
            26 =>
                [
                    'id' => 2527,
                    'province_id' => 17,
                    'name' => 'Gombrèn',
                ],
            27 =>
                [
                    'id' => 2528,
                    'province_id' => 17,
                    'name' => 'Gualta',
                ],
            28 =>
                [
                    'id' => 2529,
                    'province_id' => 17,
                    'name' => 'Guils de Cerdanya',
                ],
            29 =>
                [
                    'id' => 2530,
                    'province_id' => 17,
                    'name' => 'Hostalric',
                ],
            30 =>
                [
                    'id' => 2531,
                    'province_id' => 17,
                    'name' => 'Isòvol',
                ],
            31 =>
                [
                    'id' => 2532,
                    'province_id' => 17,
                    'name' => 'Jafre',
                ],
            32 =>
                [
                    'id' => 2533,
                    'province_id' => 17,
                    'name' => 'Jonquera, La',
                ],
            33 =>
                [
                    'id' => 2534,
                    'province_id' => 17,
                    'name' => 'Juià',
                ],
            34 =>
                [
                    'id' => 2535,
                    'province_id' => 17,
                    'name' => 'Lladó',
                ],
            35 =>
                [
                    'id' => 2536,
                    'province_id' => 17,
                    'name' => 'Llagostera',
                ],
            36 =>
                [
                    'id' => 2537,
                    'province_id' => 17,
                    'name' => 'Llambilles',
                ],
            37 =>
                [
                    'id' => 2538,
                    'province_id' => 17,
                    'name' => 'Llanars',
                ],
            38 =>
                [
                    'id' => 2539,
                    'province_id' => 17,
                    'name' => 'Llançà',
                ],
            39 =>
                [
                    'id' => 2540,
                    'province_id' => 17,
                    'name' => 'Llers',
                ],
            40 =>
                [
                    'id' => 2541,
                    'province_id' => 17,
                    'name' => 'Llívia',
                ],
            41 =>
                [
                    'id' => 2542,
                    'province_id' => 17,
                    'name' => 'Lloret de Mar',
                ],
            42 =>
                [
                    'id' => 2543,
                    'province_id' => 17,
                    'name' => 'Llosses, Les',
                ],
            43 =>
                [
                    'id' => 2544,
                    'province_id' => 17,
                    'name' => 'Maçanet de Cabrenys',
                ],
            44 =>
                [
                    'id' => 2545,
                    'province_id' => 17,
                    'name' => 'Maçanet de la Selva',
                ],
            45 =>
                [
                    'id' => 2546,
                    'province_id' => 17,
                    'name' => 'Madremanya',
                ],
            46 =>
                [
                    'id' => 2547,
                    'province_id' => 17,
                    'name' => 'Maià de Montcal',
                ],
            47 =>
                [
                    'id' => 2548,
                    'province_id' => 17,
                    'name' => 'Masarac',
                ],
            48 =>
                [
                    'id' => 2549,
                    'province_id' => 17,
                    'name' => 'Massanes',
                ],
            49 =>
                [
                    'id' => 2550,
                    'province_id' => 17,
                    'name' => 'Meranges',
                ],
            50 =>
                [
                    'id' => 2551,
                    'province_id' => 17,
                    'name' => 'Mieres',
                ],
            51 =>
                [
                    'id' => 2552,
                    'province_id' => 17,
                    'name' => 'Mollet de Peralada',
                ],
            52 =>
                [
                    'id' => 2553,
                    'province_id' => 17,
                    'name' => 'Molló',
                ],
            53 =>
                [
                    'id' => 2554,
                    'province_id' => 17,
                    'name' => 'Montagut i Oix',
                ],
            54 =>
                [
                    'id' => 2555,
                    'province_id' => 17,
                    'name' => 'Mont-ras',
                ],
            55 =>
                [
                    'id' => 2556,
                    'province_id' => 17,
                    'name' => 'Navata',
                ],
            56 =>
                [
                    'id' => 2557,
                    'province_id' => 17,
                    'name' => 'Ogassa',
                ],
            57 =>
                [
                    'id' => 2558,
                    'province_id' => 17,
                    'name' => 'Olot',
                ],
            58 =>
                [
                    'id' => 2559,
                    'province_id' => 17,
                    'name' => 'Ordis',
                ],
            59 =>
                [
                    'id' => 2560,
                    'province_id' => 17,
                    'name' => 'Osor',
                ],
            60 =>
                [
                    'id' => 2561,
                    'province_id' => 17,
                    'name' => 'Palafrugell',
                ],
            61 =>
                [
                    'id' => 2562,
                    'province_id' => 17,
                    'name' => 'Palamós',
                ],
            62 =>
                [
                    'id' => 2563,
                    'province_id' => 17,
                    'name' => 'Palau de Santa Eulàlia',
                ],
            63 =>
                [
                    'id' => 2564,
                    'province_id' => 17,
                    'name' => 'Palau-sator',
                ],
            64 =>
                [
                    'id' => 2565,
                    'province_id' => 17,
                    'name' => 'Palau-saverdera',
                ],
            65 =>
                [
                    'id' => 2566,
                    'province_id' => 17,
                    'name' => 'Palol de Revardit',
                ],
            66 =>
                [
                    'id' => 2567,
                    'province_id' => 17,
                    'name' => 'Pals',
                ],
            67 =>
                [
                    'id' => 2568,
                    'province_id' => 17,
                    'name' => 'Pardines',
                ],
            68 =>
                [
                    'id' => 2569,
                    'province_id' => 17,
                    'name' => 'Parlavà',
                ],
            69 =>
                [
                    'id' => 2570,
                    'province_id' => 17,
                    'name' => 'Pau',
                ],
            70 =>
                [
                    'id' => 2571,
                    'province_id' => 17,
                    'name' => 'Pedret i Marzà',
                ],
            71 =>
                [
                    'id' => 2572,
                    'province_id' => 17,
                    'name' => 'Pera, La',
                ],
            72 =>
                [
                    'id' => 2573,
                    'province_id' => 17,
                    'name' => 'Peralada',
                ],
            73 =>
                [
                    'id' => 2574,
                    'province_id' => 17,
                    'name' => 'Planes d\'Hostoles, Les',
                ],
            74 =>
                [
                    'id' => 2575,
                    'province_id' => 17,
                    'name' => 'Planoles',
                ],
            75 =>
                [
                    'id' => 2576,
                    'province_id' => 17,
                    'name' => 'Pont de Molins',
                ],
            76 =>
                [
                    'id' => 2577,
                    'province_id' => 17,
                    'name' => 'Pontós',
                ],
            77 =>
                [
                    'id' => 2578,
                    'province_id' => 17,
                    'name' => 'Porqueres',
                ],
            78 =>
                [
                    'id' => 2579,
                    'province_id' => 17,
                    'name' => 'Port de la Selva, El',
                ],
            79 =>
                [
                    'id' => 2580,
                    'province_id' => 17,
                    'name' => 'Portbou',
                ],
            80 =>
                [
                    'id' => 2581,
                    'province_id' => 17,
                    'name' => 'Preses, Les',
                ],
            81 =>
                [
                    'id' => 2582,
                    'province_id' => 17,
                    'name' => 'Puigcerdà',
                ],
            82 =>
                [
                    'id' => 2583,
                    'province_id' => 17,
                    'name' => 'Quart',
                ],
            83 =>
                [
                    'id' => 2584,
                    'province_id' => 17,
                    'name' => 'Queralbs',
                ],
            84 =>
                [
                    'id' => 2585,
                    'province_id' => 17,
                    'name' => 'Rabós',
                ],
            85 =>
                [
                    'id' => 2586,
                    'province_id' => 17,
                    'name' => 'Regencós',
                ],
            86 =>
                [
                    'id' => 2587,
                    'province_id' => 17,
                    'name' => 'Ribes de Freser',
                ],
            87 =>
                [
                    'id' => 2588,
                    'province_id' => 17,
                    'name' => 'Riells i Viabrea',
                ],
            88 =>
                [
                    'id' => 2589,
                    'province_id' => 17,
                    'name' => 'Ripoll',
                ],
            89 =>
                [
                    'id' => 2590,
                    'province_id' => 17,
                    'name' => 'Riudarenes',
                ],
            90 =>
                [
                    'id' => 2591,
                    'province_id' => 17,
                    'name' => 'Riudaura',
                ],
            91 =>
                [
                    'id' => 2592,
                    'province_id' => 17,
                    'name' => 'Riudellots de la Selva',
                ],
            92 =>
                [
                    'id' => 2593,
                    'province_id' => 17,
                    'name' => 'Riumors',
                ],
            93 =>
                [
                    'id' => 2594,
                    'province_id' => 17,
                    'name' => 'Roses',
                ],
            94 =>
                [
                    'id' => 2595,
                    'province_id' => 17,
                    'name' => 'Rupià',
                ],
            95 =>
                [
                    'id' => 2596,
                    'province_id' => 17,
                    'name' => 'Sales de Llierca',
                ],
            96 =>
                [
                    'id' => 2597,
                    'province_id' => 17,
                    'name' => 'Salt',
                ],
            97 =>
                [
                    'id' => 2598,
                    'province_id' => 17,
                    'name' => 'Sant Andreu Salou',
                ],
            98 =>
                [
                    'id' => 2599,
                    'province_id' => 17,
                    'name' => 'Sant Aniol de Finestres',
                ],
            99 =>
                [
                    'id' => 2600,
                    'province_id' => 17,
                    'name' => 'Sant Climent Sescebes',
                ],
            100 =>
                [
                    'id' => 2601,
                    'province_id' => 17,
                    'name' => 'Sant Feliu de Buixalleu',
                ],
            101 =>
                [
                    'id' => 2602,
                    'province_id' => 17,
                    'name' => 'Sant Feliu de Guíxols',
                ],
            102 =>
                [
                    'id' => 2603,
                    'province_id' => 17,
                    'name' => 'Sant Feliu de Pallerols',
                ],
            103 =>
                [
                    'id' => 2604,
                    'province_id' => 17,
                    'name' => 'Sant Ferriol',
                ],
            104 =>
                [
                    'id' => 2605,
                    'province_id' => 17,
                    'name' => 'Sant Gregori',
                ],
            105 =>
                [
                    'id' => 2606,
                    'province_id' => 17,
                    'name' => 'Sant Hilari Sacalm',
                ],
            106 =>
                [
                    'id' => 2607,
                    'province_id' => 17,
                    'name' => 'Sant Jaume de Llierca',
                ],
            107 =>
                [
                    'id' => 2608,
                    'province_id' => 17,
                    'name' => 'Sant Joan de les Abadesses',
                ],
            108 =>
                [
                    'id' => 2609,
                    'province_id' => 17,
                    'name' => 'Sant Joan de Mollet',
                ],
            109 =>
                [
                    'id' => 2610,
                    'province_id' => 17,
                    'name' => 'Sant Joan les Fonts',
                ],
            110 =>
                [
                    'id' => 2611,
                    'province_id' => 17,
                    'name' => 'Sant Jordi Desvalls',
                ],
            111 =>
                [
                    'id' => 2612,
                    'province_id' => 17,
                    'name' => 'Sant Julià de Ramis',
                ],
            112 =>
                [
                    'id' => 2613,
                    'province_id' => 17,
                    'name' => 'Sant Julià del Llor i Bonmatí',
                ],
            113 =>
                [
                    'id' => 2614,
                    'province_id' => 17,
                    'name' => 'Sant Llorenç de la Muga',
                ],
            114 =>
                [
                    'id' => 2615,
                    'province_id' => 17,
                    'name' => 'Sant Martí de Llémena',
                ],
            115 =>
                [
                    'id' => 2616,
                    'province_id' => 17,
                    'name' => 'Sant Martí Vell',
                ],
            116 =>
                [
                    'id' => 2617,
                    'province_id' => 17,
                    'name' => 'Sant Miquel de Campmajor',
                ],
            117 =>
                [
                    'id' => 2618,
                    'province_id' => 17,
                    'name' => 'Sant Miquel de Fluvià',
                ],
            118 =>
                [
                    'id' => 2619,
                    'province_id' => 17,
                    'name' => 'Sant Mori',
                ],
            119 =>
                [
                    'id' => 2620,
                    'province_id' => 17,
                    'name' => 'Sant Pau de Segúries',
                ],
            120 =>
                [
                    'id' => 2621,
                    'province_id' => 17,
                    'name' => 'Sant Pere Pescador',
                ],
            121 =>
                [
                    'id' => 2622,
                    'province_id' => 17,
                    'name' => 'Santa Coloma de Farners',
                ],
            122 =>
                [
                    'id' => 2623,
                    'province_id' => 17,
                    'name' => 'Santa Cristina d\'Aro',
                ],
            123 =>
                [
                    'id' => 2624,
                    'province_id' => 17,
                    'name' => 'Santa Llogaia d\'Àlguema',
                ],
            124 =>
                [
                    'id' => 2625,
                    'province_id' => 17,
                    'name' => 'Santa Pau',
                ],
            125 =>
                [
                    'id' => 2626,
                    'province_id' => 17,
                    'name' => 'Sarrià de Ter',
                ],
            126 =>
                [
                    'id' => 2627,
                    'province_id' => 17,
                    'name' => 'Saus, Camallera i Llampaies',
                ],
            127 =>
                [
                    'id' => 2628,
                    'province_id' => 17,
                    'name' => 'Selva de Mar, La',
                ],
            128 =>
                [
                    'id' => 2629,
                    'province_id' => 17,
                    'name' => 'Serinyà',
                ],
            129 =>
                [
                    'id' => 2630,
                    'province_id' => 17,
                    'name' => 'Serra de Daró',
                ],
            130 =>
                [
                    'id' => 2631,
                    'province_id' => 17,
                    'name' => 'Setcases',
                ],
            131 =>
                [
                    'id' => 2632,
                    'province_id' => 17,
                    'name' => 'Sils',
                ],
            132 =>
                [
                    'id' => 2633,
                    'province_id' => 17,
                    'name' => 'Siurana',
                ],
            133 =>
                [
                    'id' => 2634,
                    'province_id' => 17,
                    'name' => 'Susqueda',
                ],
            134 =>
                [
                    'id' => 2635,
                    'province_id' => 17,
                    'name' => 'Tallada d\'Empordà, La',
                ],
            135 =>
                [
                    'id' => 2636,
                    'province_id' => 17,
                    'name' => 'Terrades',
                ],
            136 =>
                [
                    'id' => 2637,
                    'province_id' => 17,
                    'name' => 'Torrent',
                ],
            137 =>
                [
                    'id' => 2638,
                    'province_id' => 17,
                    'name' => 'Torroella de Fluvià',
                ],
            138 =>
                [
                    'id' => 2639,
                    'province_id' => 17,
                    'name' => 'Torroella de Montgrí',
                ],
            139 =>
                [
                    'id' => 2640,
                    'province_id' => 17,
                    'name' => 'Tortellà',
                ],
            140 =>
                [
                    'id' => 2641,
                    'province_id' => 17,
                    'name' => 'Toses',
                ],
            141 =>
                [
                    'id' => 2642,
                    'province_id' => 17,
                    'name' => 'Tossa de Mar',
                ],
            142 =>
                [
                    'id' => 2643,
                    'province_id' => 17,
                    'name' => 'Ullà',
                ],
            143 =>
                [
                    'id' => 2644,
                    'province_id' => 17,
                    'name' => 'Ullastret',
                ],
            144 =>
                [
                    'id' => 2645,
                    'province_id' => 17,
                    'name' => 'Ultramort',
                ],
            145 =>
                [
                    'id' => 2646,
                    'province_id' => 17,
                    'name' => 'Urús',
                ],
            146 =>
                [
                    'id' => 2647,
                    'province_id' => 17,
                    'name' => 'Vajol, La',
                ],
            147 =>
                [
                    'id' => 2648,
                    'province_id' => 17,
                    'name' => 'Vall de Bianya, La',
                ],
            148 =>
                [
                    'id' => 2649,
                    'province_id' => 17,
                    'name' => 'Vall d\'en Bas, La',
                ],
            149 =>
                [
                    'id' => 2650,
                    'province_id' => 17,
                    'name' => 'Vallfogona de Ripollès',
                ],
            150 =>
                [
                    'id' => 2651,
                    'province_id' => 17,
                    'name' => 'Vall-llobrega',
                ],
            151 =>
                [
                    'id' => 2652,
                    'province_id' => 17,
                    'name' => 'Ventalló',
                ],
            152 =>
                [
                    'id' => 2653,
                    'province_id' => 17,
                    'name' => 'Verges',
                ],
            153 =>
                [
                    'id' => 2654,
                    'province_id' => 17,
                    'name' => 'Vidrà',
                ],
            154 =>
                [
                    'id' => 2655,
                    'province_id' => 17,
                    'name' => 'Vidreres',
                ],
            155 =>
                [
                    'id' => 2656,
                    'province_id' => 17,
                    'name' => 'Vilabertran',
                ],
            156 =>
                [
                    'id' => 2657,
                    'province_id' => 17,
                    'name' => 'Vilablareix',
                ],
            157 =>
                [
                    'id' => 2658,
                    'province_id' => 17,
                    'name' => 'Viladamat',
                ],
            158 =>
                [
                    'id' => 2659,
                    'province_id' => 17,
                    'name' => 'Viladasens',
                ],
            159 =>
                [
                    'id' => 2660,
                    'province_id' => 17,
                    'name' => 'Vilademuls',
                ],
            160 =>
                [
                    'id' => 2661,
                    'province_id' => 17,
                    'name' => 'Viladrau',
                ],
            161 =>
                [
                    'id' => 2662,
                    'province_id' => 17,
                    'name' => 'Vilafant',
                ],
            162 =>
                [
                    'id' => 2663,
                    'province_id' => 17,
                    'name' => 'Vilajuïga',
                ],
            163 =>
                [
                    'id' => 2664,
                    'province_id' => 17,
                    'name' => 'Vilallonga de Ter',
                ],
            164 =>
                [
                    'id' => 2665,
                    'province_id' => 17,
                    'name' => 'Vilamacolum',
                ],
            165 =>
                [
                    'id' => 2666,
                    'province_id' => 17,
                    'name' => 'Vilamalla',
                ],
            166 =>
                [
                    'id' => 2667,
                    'province_id' => 17,
                    'name' => 'Vilamaniscle',
                ],
            167 =>
                [
                    'id' => 2668,
                    'province_id' => 17,
                    'name' => 'Vilanant',
                ],
            168 =>
                [
                    'id' => 2669,
                    'province_id' => 17,
                    'name' => 'Vila-sacra',
                ],
            169 =>
                [
                    'id' => 2670,
                    'province_id' => 17,
                    'name' => 'Vilaür',
                ],
            170 =>
                [
                    'id' => 2671,
                    'province_id' => 17,
                    'name' => 'Vilobí d\'Onyar',
                ],
            171 =>
                [
                    'id' => 2672,
                    'province_id' => 17,
                    'name' => 'Vilopriu',
                ],
            172 =>
                [
                    'id' => 2673,
                    'province_id' => 18,
                    'name' => 'Agrón',
                ],
            173 =>
                [
                    'id' => 2674,
                    'province_id' => 18,
                    'name' => 'Alamedilla',
                ],
            174 =>
                [
                    'id' => 2675,
                    'province_id' => 18,
                    'name' => 'Albolote',
                ],
            175 =>
                [
                    'id' => 2676,
                    'province_id' => 18,
                    'name' => 'Albondón',
                ],
            176 =>
                [
                    'id' => 2677,
                    'province_id' => 18,
                    'name' => 'Albuñán',
                ],
            177 =>
                [
                    'id' => 2678,
                    'province_id' => 18,
                    'name' => 'Albuñol',
                ],
            178 =>
                [
                    'id' => 2679,
                    'province_id' => 18,
                    'name' => 'Albuñuelas',
                ],
            179 =>
                [
                    'id' => 2680,
                    'province_id' => 18,
                    'name' => 'Aldeire',
                ],
            180 =>
                [
                    'id' => 2681,
                    'province_id' => 18,
                    'name' => 'Alfacar',
                ],
            181 =>
                [
                    'id' => 2682,
                    'province_id' => 18,
                    'name' => 'Algarinejo',
                ],
            182 =>
                [
                    'id' => 2683,
                    'province_id' => 18,
                    'name' => 'Alhama de Granada',
                ],
            183 =>
                [
                    'id' => 2684,
                    'province_id' => 18,
                    'name' => 'Alhendín',
                ],
            184 =>
                [
                    'id' => 2685,
                    'province_id' => 18,
                    'name' => 'Alicún de Ortega',
                ],
            185 =>
                [
                    'id' => 2686,
                    'province_id' => 18,
                    'name' => 'Almegíjar',
                ],
            186 =>
                [
                    'id' => 2687,
                    'province_id' => 18,
                    'name' => 'Almuñécar',
                ],
            187 =>
                [
                    'id' => 2688,
                    'province_id' => 18,
                    'name' => 'Alpujarra de la Sierra',
                ],
            188 =>
                [
                    'id' => 2689,
                    'province_id' => 18,
                    'name' => 'Alquife',
                ],
            189 =>
                [
                    'id' => 2690,
                    'province_id' => 18,
                    'name' => 'Arenas del Rey',
                ],
            190 =>
                [
                    'id' => 2691,
                    'province_id' => 18,
                    'name' => 'Armilla',
                ],
            191 =>
                [
                    'id' => 2692,
                    'province_id' => 18,
                    'name' => 'Atarfe',
                ],
            192 =>
                [
                    'id' => 2693,
                    'province_id' => 18,
                    'name' => 'Baza',
                ],
            193 =>
                [
                    'id' => 2694,
                    'province_id' => 18,
                    'name' => 'Beas de Granada',
                ],
            194 =>
                [
                    'id' => 2695,
                    'province_id' => 18,
                    'name' => 'Beas de Guadix',
                ],
            195 =>
                [
                    'id' => 2696,
                    'province_id' => 18,
                    'name' => 'Benalúa',
                ],
            196 =>
                [
                    'id' => 2697,
                    'province_id' => 18,
                    'name' => 'Benalúa de las Villas',
                ],
            197 =>
                [
                    'id' => 2698,
                    'province_id' => 18,
                    'name' => 'Benamaurel',
                ],
            198 =>
                [
                    'id' => 2699,
                    'province_id' => 18,
                    'name' => 'Bérchules',
                ],
            199 =>
                [
                    'id' => 2700,
                    'province_id' => 18,
                    'name' => 'Bubión',
                ],
            200 =>
                [
                    'id' => 2701,
                    'province_id' => 18,
                    'name' => 'Busquístar',
                ],
            201 =>
                [
                    'id' => 2702,
                    'province_id' => 18,
                    'name' => 'Cacín',
                ],
            202 =>
                [
                    'id' => 2703,
                    'province_id' => 18,
                    'name' => 'Cádiar',
                ],
            203 =>
                [
                    'id' => 2704,
                    'province_id' => 18,
                    'name' => 'Cájar',
                ],
            204 =>
                [
                    'id' => 2705,
                    'province_id' => 18,
                    'name' => 'Calahorra, La',
                ],
            205 =>
                [
                    'id' => 2706,
                    'province_id' => 18,
                    'name' => 'Calicasas',
                ],
            206 =>
                [
                    'id' => 2707,
                    'province_id' => 18,
                    'name' => 'Campotéjar',
                ],
            207 =>
                [
                    'id' => 2708,
                    'province_id' => 18,
                    'name' => 'Caniles',
                ],
            208 =>
                [
                    'id' => 2709,
                    'province_id' => 18,
                    'name' => 'Cáñar',
                ],
            209 =>
                [
                    'id' => 2710,
                    'province_id' => 18,
                    'name' => 'Capileira',
                ],
            210 =>
                [
                    'id' => 2711,
                    'province_id' => 18,
                    'name' => 'Carataunas',
                ],
            211 =>
                [
                    'id' => 2712,
                    'province_id' => 18,
                    'name' => 'Cástaras',
                ],
            212 =>
                [
                    'id' => 2713,
                    'province_id' => 18,
                    'name' => 'Castilléjar',
                ],
            213 =>
                [
                    'id' => 2714,
                    'province_id' => 18,
                    'name' => 'Castril',
                ],
            214 =>
                [
                    'id' => 2715,
                    'province_id' => 18,
                    'name' => 'Cenes de la Vega',
                ],
            215 =>
                [
                    'id' => 2716,
                    'province_id' => 18,
                    'name' => 'Chauchina',
                ],
            216 =>
                [
                    'id' => 2717,
                    'province_id' => 18,
                    'name' => 'Chimeneas',
                ],
            217 =>
                [
                    'id' => 2718,
                    'province_id' => 18,
                    'name' => 'Churriana de la Vega',
                ],
            218 =>
                [
                    'id' => 2719,
                    'province_id' => 18,
                    'name' => 'Cijuela',
                ],
            219 =>
                [
                    'id' => 2720,
                    'province_id' => 18,
                    'name' => 'Cogollos de Guadix',
                ],
            220 =>
                [
                    'id' => 2721,
                    'province_id' => 18,
                    'name' => 'Cogollos de la Vega',
                ],
            221 =>
                [
                    'id' => 2722,
                    'province_id' => 18,
                    'name' => 'Colomera',
                ],
            222 =>
                [
                    'id' => 2723,
                    'province_id' => 18,
                    'name' => 'Cortes de Baza',
                ],
            223 =>
                [
                    'id' => 2724,
                    'province_id' => 18,
                    'name' => 'Cortes y Graena',
                ],
            224 =>
                [
                    'id' => 2725,
                    'province_id' => 18,
                    'name' => 'Cuevas del Campo',
                ],
            225 =>
                [
                    'id' => 2726,
                    'province_id' => 18,
                    'name' => 'Cúllar',
                ],
            226 =>
                [
                    'id' => 2727,
                    'province_id' => 18,
                    'name' => 'Cúllar Vega',
                ],
            227 =>
                [
                    'id' => 2728,
                    'province_id' => 18,
                    'name' => 'Darro',
                ],
            228 =>
                [
                    'id' => 2729,
                    'province_id' => 18,
                    'name' => 'Dehesas de Guadix',
                ],
            229 =>
                [
                    'id' => 2730,
                    'province_id' => 18,
                    'name' => 'Deifontes',
                ],
            230 =>
                [
                    'id' => 2731,
                    'province_id' => 18,
                    'name' => 'Diezma',
                ],
            231 =>
                [
                    'id' => 2732,
                    'province_id' => 18,
                    'name' => 'Dílar',
                ],
            232 =>
                [
                    'id' => 2733,
                    'province_id' => 18,
                    'name' => 'Dólar',
                ],
            233 =>
                [
                    'id' => 2734,
                    'province_id' => 18,
                    'name' => 'Dúdar',
                ],
            234 =>
                [
                    'id' => 2735,
                    'province_id' => 18,
                    'name' => 'Dúrcal',
                ],
            235 =>
                [
                    'id' => 2736,
                    'province_id' => 18,
                    'name' => 'Escúzar',
                ],
            236 =>
                [
                    'id' => 2737,
                    'province_id' => 18,
                    'name' => 'Ferreira',
                ],
            237 =>
                [
                    'id' => 2738,
                    'province_id' => 18,
                    'name' => 'Fonelas',
                ],
            238 =>
                [
                    'id' => 2739,
                    'province_id' => 18,
                    'name' => 'Freila',
                ],
            239 =>
                [
                    'id' => 2740,
                    'province_id' => 18,
                    'name' => 'Fuente Vaqueros',
                ],
            240 =>
                [
                    'id' => 2741,
                    'province_id' => 18,
                    'name' => 'Gabias, Las',
                ],
            241 =>
                [
                    'id' => 2742,
                    'province_id' => 18,
                    'name' => 'Galera',
                ],
            242 =>
                [
                    'id' => 2743,
                    'province_id' => 18,
                    'name' => 'Gobernador',
                ],
            243 =>
                [
                    'id' => 2744,
                    'province_id' => 18,
                    'name' => 'Gójar',
                ],
            244 =>
                [
                    'id' => 2745,
                    'province_id' => 18,
                    'name' => 'Gor',
                ],
            245 =>
                [
                    'id' => 2746,
                    'province_id' => 18,
                    'name' => 'Gorafe',
                ],
            246 =>
                [
                    'id' => 2747,
                    'province_id' => 18,
                    'name' => 'Granada',
                ],
            247 =>
                [
                    'id' => 2748,
                    'province_id' => 18,
                    'name' => 'Guadahortuna',
                ],
            248 =>
                [
                    'id' => 2749,
                    'province_id' => 18,
                    'name' => 'Guadix',
                ],
            249 =>
                [
                    'id' => 2750,
                    'province_id' => 18,
                    'name' => 'Guajares, Los',
                ],
            250 =>
                [
                    'id' => 2751,
                    'province_id' => 18,
                    'name' => 'Gualchos',
                ],
            251 =>
                [
                    'id' => 2752,
                    'province_id' => 18,
                    'name' => 'Güejar Sierra',
                ],
            252 =>
                [
                    'id' => 2753,
                    'province_id' => 18,
                    'name' => 'Güevéjar',
                ],
            253 =>
                [
                    'id' => 2754,
                    'province_id' => 18,
                    'name' => 'Huélago',
                ],
            254 =>
                [
                    'id' => 2755,
                    'province_id' => 18,
                    'name' => 'Huéneja',
                ],
            255 =>
                [
                    'id' => 2756,
                    'province_id' => 18,
                    'name' => 'Huéscar',
                ],
            256 =>
                [
                    'id' => 2757,
                    'province_id' => 18,
                    'name' => 'Huétor de Santillán',
                ],
            257 =>
                [
                    'id' => 2758,
                    'province_id' => 18,
                    'name' => 'Huétor Tájar',
                ],
            258 =>
                [
                    'id' => 2759,
                    'province_id' => 18,
                    'name' => 'Huétor Vega',
                ],
            259 =>
                [
                    'id' => 2760,
                    'province_id' => 18,
                    'name' => 'Illora',
                ],
            260 =>
                [
                    'id' => 2761,
                    'province_id' => 18,
                    'name' => 'Itrabo',
                ],
            261 =>
                [
                    'id' => 2762,
                    'province_id' => 18,
                    'name' => 'Iznalloz',
                ],
            262 =>
                [
                    'id' => 2763,
                    'province_id' => 18,
                    'name' => 'Jayena',
                ],
            263 =>
                [
                    'id' => 2764,
                    'province_id' => 18,
                    'name' => 'Jerez del Marquesado',
                ],
            264 =>
                [
                    'id' => 2765,
                    'province_id' => 18,
                    'name' => 'Jete',
                ],
            265 =>
                [
                    'id' => 2766,
                    'province_id' => 18,
                    'name' => 'Jun',
                ],
            266 =>
                [
                    'id' => 2767,
                    'province_id' => 18,
                    'name' => 'Juviles',
                ],
            267 =>
                [
                    'id' => 2768,
                    'province_id' => 18,
                    'name' => 'Láchar',
                ],
            268 =>
                [
                    'id' => 2769,
                    'province_id' => 18,
                    'name' => 'Lanjarón',
                ],
            269 =>
                [
                    'id' => 2770,
                    'province_id' => 18,
                    'name' => 'Lanteira',
                ],
            270 =>
                [
                    'id' => 2771,
                    'province_id' => 18,
                    'name' => 'Lecrín',
                ],
            271 =>
                [
                    'id' => 2772,
                    'province_id' => 18,
                    'name' => 'Lentegí',
                ],
            272 =>
                [
                    'id' => 2773,
                    'province_id' => 18,
                    'name' => 'Lobras',
                ],
            273 =>
                [
                    'id' => 2774,
                    'province_id' => 18,
                    'name' => 'Loja',
                ],
            274 =>
                [
                    'id' => 2775,
                    'province_id' => 18,
                    'name' => 'Lugros',
                ],
            275 =>
                [
                    'id' => 2776,
                    'province_id' => 18,
                    'name' => 'Lújar',
                ],
            276 =>
                [
                    'id' => 2777,
                    'province_id' => 18,
                    'name' => 'Malahá, La',
                ],
            277 =>
                [
                    'id' => 2778,
                    'province_id' => 18,
                    'name' => 'Maracena',
                ],
            278 =>
                [
                    'id' => 2779,
                    'province_id' => 18,
                    'name' => 'Marchal',
                ],
            279 =>
                [
                    'id' => 2780,
                    'province_id' => 18,
                    'name' => 'Moclín',
                ],
            280 =>
                [
                    'id' => 2781,
                    'province_id' => 18,
                    'name' => 'Molvízar',
                ],
            281 =>
                [
                    'id' => 2782,
                    'province_id' => 18,
                    'name' => 'Monachil',
                ],
            282 =>
                [
                    'id' => 2783,
                    'province_id' => 18,
                    'name' => 'Montefrío',
                ],
            283 =>
                [
                    'id' => 2784,
                    'province_id' => 18,
                    'name' => 'Montejícar',
                ],
            284 =>
                [
                    'id' => 2785,
                    'province_id' => 18,
                    'name' => 'Montillana',
                ],
            285 =>
                [
                    'id' => 2786,
                    'province_id' => 18,
                    'name' => 'Moraleda de Zafayona',
                ],
            286 =>
                [
                    'id' => 2787,
                    'province_id' => 18,
                    'name' => 'Morelábor',
                ],
            287 =>
                [
                    'id' => 2788,
                    'province_id' => 18,
                    'name' => 'Motril',
                ],
            288 =>
                [
                    'id' => 2789,
                    'province_id' => 18,
                    'name' => 'Murtas',
                ],
            289 =>
                [
                    'id' => 2790,
                    'province_id' => 18,
                    'name' => 'Nevada',
                ],
            290 =>
                [
                    'id' => 2791,
                    'province_id' => 18,
                    'name' => 'Nigüelas',
                ],
            291 =>
                [
                    'id' => 2792,
                    'province_id' => 18,
                    'name' => 'Nívar',
                ],
            292 =>
                [
                    'id' => 2793,
                    'province_id' => 18,
                    'name' => 'Ogíjares',
                ],
            293 =>
                [
                    'id' => 2794,
                    'province_id' => 18,
                    'name' => 'Orce',
                ],
            294 =>
                [
                    'id' => 2795,
                    'province_id' => 18,
                    'name' => 'Órgiva',
                ],
            295 =>
                [
                    'id' => 2796,
                    'province_id' => 18,
                    'name' => 'Otívar',
                ],
            296 =>
                [
                    'id' => 2797,
                    'province_id' => 18,
                    'name' => 'Otura',
                ],
            297 =>
                [
                    'id' => 2798,
                    'province_id' => 18,
                    'name' => 'Padul',
                ],
            298 =>
                [
                    'id' => 2799,
                    'province_id' => 18,
                    'name' => 'Pampaneira',
                ],
            299 =>
                [
                    'id' => 2800,
                    'province_id' => 18,
                    'name' => 'Pedro Martínez',
                ],
            300 =>
                [
                    'id' => 2801,
                    'province_id' => 18,
                    'name' => 'Peligros',
                ],
            301 =>
                [
                    'id' => 2802,
                    'province_id' => 18,
                    'name' => 'Peza, La',
                ],
            302 =>
                [
                    'id' => 2803,
                    'province_id' => 18,
                    'name' => 'Pinar, El',
                ],
            303 =>
                [
                    'id' => 2804,
                    'province_id' => 18,
                    'name' => 'Pinos Genil',
                ],
            304 =>
                [
                    'id' => 2805,
                    'province_id' => 18,
                    'name' => 'Pinos Puente',
                ],
            305 =>
                [
                    'id' => 2806,
                    'province_id' => 18,
                    'name' => 'Píñar',
                ],
            306 =>
                [
                    'id' => 2807,
                    'province_id' => 18,
                    'name' => 'Polícar',
                ],
            307 =>
                [
                    'id' => 2808,
                    'province_id' => 18,
                    'name' => 'Polopos',
                ],
            308 =>
                [
                    'id' => 2809,
                    'province_id' => 18,
                    'name' => 'Pórtugos',
                ],
            309 =>
                [
                    'id' => 2810,
                    'province_id' => 18,
                    'name' => 'Puebla de Don Fadrique',
                ],
            310 =>
                [
                    'id' => 2811,
                    'province_id' => 18,
                    'name' => 'Pulianas',
                ],
            311 =>
                [
                    'id' => 2812,
                    'province_id' => 18,
                    'name' => 'Purullena',
                ],
            312 =>
                [
                    'id' => 2813,
                    'province_id' => 18,
                    'name' => 'Quéntar',
                ],
            313 =>
                [
                    'id' => 2814,
                    'province_id' => 18,
                    'name' => 'Rubite',
                ],
            314 =>
                [
                    'id' => 2815,
                    'province_id' => 18,
                    'name' => 'Salar',
                ],
            315 =>
                [
                    'id' => 2816,
                    'province_id' => 18,
                    'name' => 'Salobreña',
                ],
            316 =>
                [
                    'id' => 2817,
                    'province_id' => 18,
                    'name' => 'Santa Cruz del Comercio',
                ],
            317 =>
                [
                    'id' => 2818,
                    'province_id' => 18,
                    'name' => 'Santa Fe',
                ],
            318 =>
                [
                    'id' => 2819,
                    'province_id' => 18,
                    'name' => 'Soportújar',
                ],
            319 =>
                [
                    'id' => 2820,
                    'province_id' => 18,
                    'name' => 'Sorvilán',
                ],
            320 =>
                [
                    'id' => 2821,
                    'province_id' => 18,
                    'name' => 'Taha, La',
                ],
            321 =>
                [
                    'id' => 2822,
                    'province_id' => 18,
                    'name' => 'Torre-Cardela',
                ],
            322 =>
                [
                    'id' => 2823,
                    'province_id' => 18,
                    'name' => 'Torvizcón',
                ],
            323 =>
                [
                    'id' => 2824,
                    'province_id' => 18,
                    'name' => 'Trevélez',
                ],
            324 =>
                [
                    'id' => 2825,
                    'province_id' => 18,
                    'name' => 'Turón',
                ],
            325 =>
                [
                    'id' => 2826,
                    'province_id' => 18,
                    'name' => 'Ugíjar',
                ],
            326 =>
                [
                    'id' => 2827,
                    'province_id' => 18,
                    'name' => 'Valle, El',
                ],
            327 =>
                [
                    'id' => 2828,
                    'province_id' => 18,
                    'name' => 'Valle del Zalabí',
                ],
            328 =>
                [
                    'id' => 2829,
                    'province_id' => 18,
                    'name' => 'Válor',
                ],
            329 =>
                [
                    'id' => 2830,
                    'province_id' => 18,
                    'name' => 'Vegas del Genil',
                ],
            330 =>
                [
                    'id' => 2831,
                    'province_id' => 18,
                    'name' => 'Vélez de Benaudalla',
                ],
            331 =>
                [
                    'id' => 2832,
                    'province_id' => 18,
                    'name' => 'Ventas de Huelma',
                ],
            332 =>
                [
                    'id' => 2833,
                    'province_id' => 18,
                    'name' => 'Villamena',
                ],
            333 =>
                [
                    'id' => 2834,
                    'province_id' => 18,
                    'name' => 'Villanueva de las Torres',
                ],
            334 =>
                [
                    'id' => 2835,
                    'province_id' => 18,
                    'name' => 'Villanueva Mesía',
                ],
            335 =>
                [
                    'id' => 2836,
                    'province_id' => 18,
                    'name' => 'Víznar',
                ],
            336 =>
                [
                    'id' => 2837,
                    'province_id' => 18,
                    'name' => 'Zafarraya',
                ],
            337 =>
                [
                    'id' => 2838,
                    'province_id' => 18,
                    'name' => 'Zagra',
                ],
            338 =>
                [
                    'id' => 2839,
                    'province_id' => 18,
                    'name' => 'Zubia, La',
                ],
            339 =>
                [
                    'id' => 2840,
                    'province_id' => 18,
                    'name' => 'Zújar',
                ],
            340 =>
                [
                    'id' => 2841,
                    'province_id' => 19,
                    'name' => 'Abánades',
                ],
            341 =>
                [
                    'id' => 2842,
                    'province_id' => 19,
                    'name' => 'Ablanque',
                ],
            342 =>
                [
                    'id' => 2843,
                    'province_id' => 19,
                    'name' => 'Adobes',
                ],
            343 =>
                [
                    'id' => 2844,
                    'province_id' => 19,
                    'name' => 'Alaminos',
                ],
            344 =>
                [
                    'id' => 2845,
                    'province_id' => 19,
                    'name' => 'Alarilla',
                ],
            345 =>
                [
                    'id' => 2846,
                    'province_id' => 19,
                    'name' => 'Albalate de Zorita',
                ],
            346 =>
                [
                    'id' => 2847,
                    'province_id' => 19,
                    'name' => 'Albares',
                ],
            347 =>
                [
                    'id' => 2848,
                    'province_id' => 19,
                    'name' => 'Albendiego',
                ],
            348 =>
                [
                    'id' => 2849,
                    'province_id' => 19,
                    'name' => 'Alcocer',
                ],
            349 =>
                [
                    'id' => 2850,
                    'province_id' => 19,
                    'name' => 'Alcolea de las Peñas',
                ],
            350 =>
                [
                    'id' => 2851,
                    'province_id' => 19,
                    'name' => 'Alcolea del Pinar',
                ],
            351 =>
                [
                    'id' => 2852,
                    'province_id' => 19,
                    'name' => 'Alcoroches',
                ],
            352 =>
                [
                    'id' => 2853,
                    'province_id' => 19,
                    'name' => 'Aldeanueva de Guadalajara',
                ],
            353 =>
                [
                    'id' => 2854,
                    'province_id' => 19,
                    'name' => 'Algar de Mesa',
                ],
            354 =>
                [
                    'id' => 2855,
                    'province_id' => 19,
                    'name' => 'Algora',
                ],
            355 =>
                [
                    'id' => 2856,
                    'province_id' => 19,
                    'name' => 'Alhóndiga',
                ],
            356 =>
                [
                    'id' => 2857,
                    'province_id' => 19,
                    'name' => 'Alique',
                ],
            357 =>
                [
                    'id' => 2858,
                    'province_id' => 19,
                    'name' => 'Almadrones',
                ],
            358 =>
                [
                    'id' => 2859,
                    'province_id' => 19,
                    'name' => 'Almoguera',
                ],
            359 =>
                [
                    'id' => 2860,
                    'province_id' => 19,
                    'name' => 'Almonacid de Zorita',
                ],
            360 =>
                [
                    'id' => 2861,
                    'province_id' => 19,
                    'name' => 'Alocén',
                ],
            361 =>
                [
                    'id' => 2862,
                    'province_id' => 19,
                    'name' => 'Alovera',
                ],
            362 =>
                [
                    'id' => 2863,
                    'province_id' => 19,
                    'name' => 'Alustante',
                ],
            363 =>
                [
                    'id' => 2864,
                    'province_id' => 19,
                    'name' => 'Angón',
                ],
            364 =>
                [
                    'id' => 2865,
                    'province_id' => 19,
                    'name' => 'Anguita',
                ],
            365 =>
                [
                    'id' => 2866,
                    'province_id' => 19,
                    'name' => 'Anquela del Ducado',
                ],
            366 =>
                [
                    'id' => 2867,
                    'province_id' => 19,
                    'name' => 'Anquela del Pedregal',
                ],
            367 =>
                [
                    'id' => 2868,
                    'province_id' => 19,
                    'name' => 'Aranzueque',
                ],
            368 =>
                [
                    'id' => 2869,
                    'province_id' => 19,
                    'name' => 'Arbancón',
                ],
            369 =>
                [
                    'id' => 2870,
                    'province_id' => 19,
                    'name' => 'Arbeteta',
                ],
            370 =>
                [
                    'id' => 2871,
                    'province_id' => 19,
                    'name' => 'Argecilla',
                ],
            371 =>
                [
                    'id' => 2872,
                    'province_id' => 19,
                    'name' => 'Armallones',
                ],
            372 =>
                [
                    'id' => 2873,
                    'province_id' => 19,
                    'name' => 'Armuña de Tajuña',
                ],
            373 =>
                [
                    'id' => 2874,
                    'province_id' => 19,
                    'name' => 'Arroyo de las Fraguas',
                ],
            374 =>
                [
                    'id' => 2875,
                    'province_id' => 19,
                    'name' => 'Atanzón',
                ],
            375 =>
                [
                    'id' => 2876,
                    'province_id' => 19,
                    'name' => 'Atienza',
                ],
            376 =>
                [
                    'id' => 2877,
                    'province_id' => 19,
                    'name' => 'Auñón',
                ],
            377 =>
                [
                    'id' => 2878,
                    'province_id' => 19,
                    'name' => 'Azuqueca de Henares',
                ],
            378 =>
                [
                    'id' => 2879,
                    'province_id' => 19,
                    'name' => 'Baides',
                ],
            379 =>
                [
                    'id' => 2880,
                    'province_id' => 19,
                    'name' => 'Baños de Tajo',
                ],
            380 =>
                [
                    'id' => 2881,
                    'province_id' => 19,
                    'name' => 'Bañuelos',
                ],
            381 =>
                [
                    'id' => 2882,
                    'province_id' => 19,
                    'name' => 'Barriopedro',
                ],
            382 =>
                [
                    'id' => 2883,
                    'province_id' => 19,
                    'name' => 'Berninches',
                ],
            383 =>
                [
                    'id' => 2884,
                    'province_id' => 19,
                    'name' => 'Bodera, La',
                ],
            384 =>
                [
                    'id' => 2885,
                    'province_id' => 19,
                    'name' => 'Brihuega',
                ],
            385 =>
                [
                    'id' => 2886,
                    'province_id' => 19,
                    'name' => 'Budia',
                ],
            386 =>
                [
                    'id' => 2887,
                    'province_id' => 19,
                    'name' => 'Bujalaro',
                ],
            387 =>
                [
                    'id' => 2888,
                    'province_id' => 19,
                    'name' => 'Bustares',
                ],
            388 =>
                [
                    'id' => 2889,
                    'province_id' => 19,
                    'name' => 'Cabanillas del Campo',
                ],
            389 =>
                [
                    'id' => 2890,
                    'province_id' => 19,
                    'name' => 'Campillo de Dueñas',
                ],
            390 =>
                [
                    'id' => 2891,
                    'province_id' => 19,
                    'name' => 'Campillo de Ranas',
                ],
            391 =>
                [
                    'id' => 2892,
                    'province_id' => 19,
                    'name' => 'Campisábalos',
                ],
            392 =>
                [
                    'id' => 2893,
                    'province_id' => 19,
                    'name' => 'Canredondo',
                ],
            393 =>
                [
                    'id' => 2894,
                    'province_id' => 19,
                    'name' => 'Cantalojas',
                ],
            394 =>
                [
                    'id' => 2895,
                    'province_id' => 19,
                    'name' => 'Cañizar',
                ],
            395 =>
                [
                    'id' => 2896,
                    'province_id' => 19,
                    'name' => 'Cardoso de la Sierra, El',
                ],
            396 =>
                [
                    'id' => 2897,
                    'province_id' => 19,
                    'name' => 'Casa de Uceda',
                ],
            397 =>
                [
                    'id' => 2898,
                    'province_id' => 19,
                    'name' => 'Casar, El',
                ],
            398 =>
                [
                    'id' => 2899,
                    'province_id' => 19,
                    'name' => 'Casas de San Galindo',
                ],
            399 =>
                [
                    'id' => 2900,
                    'province_id' => 19,
                    'name' => 'Caspueñas',
                ],
            400 =>
                [
                    'id' => 2901,
                    'province_id' => 19,
                    'name' => 'Castejón de Henares',
                ],
            401 =>
                [
                    'id' => 2902,
                    'province_id' => 19,
                    'name' => 'Castellar de la Muela',
                ],
            402 =>
                [
                    'id' => 2903,
                    'province_id' => 19,
                    'name' => 'Castilforte',
                ],
            403 =>
                [
                    'id' => 2904,
                    'province_id' => 19,
                    'name' => 'Castilnuevo',
                ],
            404 =>
                [
                    'id' => 2905,
                    'province_id' => 19,
                    'name' => 'Cendejas de Enmedio',
                ],
            405 =>
                [
                    'id' => 2906,
                    'province_id' => 19,
                    'name' => 'Cendejas de la Torre',
                ],
            406 =>
                [
                    'id' => 2907,
                    'province_id' => 19,
                    'name' => 'Centenera',
                ],
            407 =>
                [
                    'id' => 2908,
                    'province_id' => 19,
                    'name' => 'Checa',
                ],
            408 =>
                [
                    'id' => 2909,
                    'province_id' => 19,
                    'name' => 'Chequilla',
                ],
            409 =>
                [
                    'id' => 2910,
                    'province_id' => 19,
                    'name' => 'Chillarón del Rey',
                ],
            410 =>
                [
                    'id' => 2911,
                    'province_id' => 19,
                    'name' => 'Chiloeches',
                ],
            411 =>
                [
                    'id' => 2912,
                    'province_id' => 19,
                    'name' => 'Cifuentes',
                ],
            412 =>
                [
                    'id' => 2913,
                    'province_id' => 19,
                    'name' => 'Cincovillas',
                ],
            413 =>
                [
                    'id' => 2914,
                    'province_id' => 19,
                    'name' => 'Ciruelas',
                ],
            414 =>
                [
                    'id' => 2915,
                    'province_id' => 19,
                    'name' => 'Ciruelos del Pinar',
                ],
            415 =>
                [
                    'id' => 2916,
                    'province_id' => 19,
                    'name' => 'Cobeta',
                ],
            416 =>
                [
                    'id' => 2917,
                    'province_id' => 19,
                    'name' => 'Cogollor',
                ],
            417 =>
                [
                    'id' => 2918,
                    'province_id' => 19,
                    'name' => 'Cogolludo',
                ],
            418 =>
                [
                    'id' => 2919,
                    'province_id' => 19,
                    'name' => 'Condemios de Abajo',
                ],
            419 =>
                [
                    'id' => 2920,
                    'province_id' => 19,
                    'name' => 'Condemios de Arriba',
                ],
            420 =>
                [
                    'id' => 2921,
                    'province_id' => 19,
                    'name' => 'Congostrina',
                ],
            421 =>
                [
                    'id' => 2922,
                    'province_id' => 19,
                    'name' => 'Copernal',
                ],
            422 =>
                [
                    'id' => 2923,
                    'province_id' => 19,
                    'name' => 'Corduente',
                ],
            423 =>
                [
                    'id' => 2924,
                    'province_id' => 19,
                    'name' => 'Cubillo de Uceda, El',
                ],
            424 =>
                [
                    'id' => 2925,
                    'province_id' => 19,
                    'name' => 'Driebes',
                ],
            425 =>
                [
                    'id' => 2926,
                    'province_id' => 19,
                    'name' => 'Durón',
                ],
            426 =>
                [
                    'id' => 2927,
                    'province_id' => 19,
                    'name' => 'Embid',
                ],
            427 =>
                [
                    'id' => 2928,
                    'province_id' => 19,
                    'name' => 'Escamilla',
                ],
            428 =>
                [
                    'id' => 2929,
                    'province_id' => 19,
                    'name' => 'Escariche',
                ],
            429 =>
                [
                    'id' => 2930,
                    'province_id' => 19,
                    'name' => 'Escopete',
                ],
            430 =>
                [
                    'id' => 2931,
                    'province_id' => 19,
                    'name' => 'Espinosa de Henares',
                ],
            431 =>
                [
                    'id' => 2932,
                    'province_id' => 19,
                    'name' => 'Esplegares',
                ],
            432 =>
                [
                    'id' => 2933,
                    'province_id' => 19,
                    'name' => 'Establés',
                ],
            433 =>
                [
                    'id' => 2934,
                    'province_id' => 19,
                    'name' => 'Estriégana',
                ],
            434 =>
                [
                    'id' => 2935,
                    'province_id' => 19,
                    'name' => 'Fontanar',
                ],
            435 =>
                [
                    'id' => 2936,
                    'province_id' => 19,
                    'name' => 'Fuembellida',
                ],
            436 =>
                [
                    'id' => 2937,
                    'province_id' => 19,
                    'name' => 'Fuencemillán',
                ],
            437 =>
                [
                    'id' => 2938,
                    'province_id' => 19,
                    'name' => 'Fuentelahiguera de Albatages',
                ],
            438 =>
                [
                    'id' => 2939,
                    'province_id' => 19,
                    'name' => 'Fuentelencina',
                ],
            439 =>
                [
                    'id' => 2940,
                    'province_id' => 19,
                    'name' => 'Fuentelsaz',
                ],
            440 =>
                [
                    'id' => 2941,
                    'province_id' => 19,
                    'name' => 'Fuentelviejo',
                ],
            441 =>
                [
                    'id' => 2942,
                    'province_id' => 19,
                    'name' => 'Fuentenovilla',
                ],
            442 =>
                [
                    'id' => 2943,
                    'province_id' => 19,
                    'name' => 'Gajanejos',
                ],
            443 =>
                [
                    'id' => 2944,
                    'province_id' => 19,
                    'name' => 'Galápagos',
                ],
            444 =>
                [
                    'id' => 2945,
                    'province_id' => 19,
                    'name' => 'Galve de Sorbe',
                ],
            445 =>
                [
                    'id' => 2946,
                    'province_id' => 19,
                    'name' => 'Gascueña de Bornova',
                ],
            446 =>
                [
                    'id' => 2947,
                    'province_id' => 19,
                    'name' => 'Guadalajara',
                ],
            447 =>
                [
                    'id' => 2948,
                    'province_id' => 19,
                    'name' => 'Henche',
                ],
            448 =>
                [
                    'id' => 2949,
                    'province_id' => 19,
                    'name' => 'Heras de Ayuso',
                ],
            449 =>
                [
                    'id' => 2950,
                    'province_id' => 19,
                    'name' => 'Herrería',
                ],
            450 =>
                [
                    'id' => 2951,
                    'province_id' => 19,
                    'name' => 'Hiendelaencina',
                ],
            451 =>
                [
                    'id' => 2952,
                    'province_id' => 19,
                    'name' => 'Hijes',
                ],
            452 =>
                [
                    'id' => 2953,
                    'province_id' => 19,
                    'name' => 'Hita',
                ],
            453 =>
                [
                    'id' => 2954,
                    'province_id' => 19,
                    'name' => 'Hombrados',
                ],
            454 =>
                [
                    'id' => 2955,
                    'province_id' => 19,
                    'name' => 'Hontoba',
                ],
            455 =>
                [
                    'id' => 2956,
                    'province_id' => 19,
                    'name' => 'Horche',
                ],
            456 =>
                [
                    'id' => 2957,
                    'province_id' => 19,
                    'name' => 'Hortezuela de Océn',
                ],
            457 =>
                [
                    'id' => 2958,
                    'province_id' => 19,
                    'name' => 'Huerce, La',
                ],
            458 =>
                [
                    'id' => 2959,
                    'province_id' => 19,
                    'name' => 'Huérmeces del Cerro',
                ],
            459 =>
                [
                    'id' => 2960,
                    'province_id' => 19,
                    'name' => 'Huertahernando',
                ],
            460 =>
                [
                    'id' => 2961,
                    'province_id' => 19,
                    'name' => 'Hueva',
                ],
            461 =>
                [
                    'id' => 2962,
                    'province_id' => 19,
                    'name' => 'Humanes',
                ],
            462 =>
                [
                    'id' => 2963,
                    'province_id' => 19,
                    'name' => 'Illana',
                ],
            463 =>
                [
                    'id' => 2964,
                    'province_id' => 19,
                    'name' => 'Iniéstola',
                ],
            464 =>
                [
                    'id' => 2965,
                    'province_id' => 19,
                    'name' => 'Inviernas, Las',
                ],
            465 =>
                [
                    'id' => 2966,
                    'province_id' => 19,
                    'name' => 'Irueste',
                ],
            466 =>
                [
                    'id' => 2967,
                    'province_id' => 19,
                    'name' => 'Jadraque',
                ],
            467 =>
                [
                    'id' => 2968,
                    'province_id' => 19,
                    'name' => 'Jirueque',
                ],
            468 =>
                [
                    'id' => 2969,
                    'province_id' => 19,
                    'name' => 'Ledanca',
                ],
            469 =>
                [
                    'id' => 2970,
                    'province_id' => 19,
                    'name' => 'Loranca de Tajuña',
                ],
            470 =>
                [
                    'id' => 2971,
                    'province_id' => 19,
                    'name' => 'Lupiana',
                ],
            471 =>
                [
                    'id' => 2972,
                    'province_id' => 19,
                    'name' => 'Luzaga',
                ],
            472 =>
                [
                    'id' => 2973,
                    'province_id' => 19,
                    'name' => 'Luzón',
                ],
            473 =>
                [
                    'id' => 2974,
                    'province_id' => 19,
                    'name' => 'Majaelrayo',
                ],
            474 =>
                [
                    'id' => 2975,
                    'province_id' => 19,
                    'name' => 'Málaga del Fresno',
                ],
            475 =>
                [
                    'id' => 2976,
                    'province_id' => 19,
                    'name' => 'Malaguilla',
                ],
            476 =>
                [
                    'id' => 2977,
                    'province_id' => 19,
                    'name' => 'Mandayona',
                ],
            477 =>
                [
                    'id' => 2978,
                    'province_id' => 19,
                    'name' => 'Mantiel',
                ],
            478 =>
                [
                    'id' => 2979,
                    'province_id' => 19,
                    'name' => 'Maranchón',
                ],
            479 =>
                [
                    'id' => 2980,
                    'province_id' => 19,
                    'name' => 'Marchamalo',
                ],
            480 =>
                [
                    'id' => 2981,
                    'province_id' => 19,
                    'name' => 'Masegoso de Tajuña',
                ],
            481 =>
                [
                    'id' => 2982,
                    'province_id' => 19,
                    'name' => 'Matarrubia',
                ],
            482 =>
                [
                    'id' => 2983,
                    'province_id' => 19,
                    'name' => 'Matillas',
                ],
            483 =>
                [
                    'id' => 2984,
                    'province_id' => 19,
                    'name' => 'Mazarete',
                ],
            484 =>
                [
                    'id' => 2985,
                    'province_id' => 19,
                    'name' => 'Mazuecos',
                ],
            485 =>
                [
                    'id' => 2986,
                    'province_id' => 19,
                    'name' => 'Medranda',
                ],
            486 =>
                [
                    'id' => 2987,
                    'province_id' => 19,
                    'name' => 'Megina',
                ],
            487 =>
                [
                    'id' => 2988,
                    'province_id' => 19,
                    'name' => 'Membrillera',
                ],
            488 =>
                [
                    'id' => 2989,
                    'province_id' => 19,
                    'name' => 'Miedes de Atienza',
                ],
            489 =>
                [
                    'id' => 2990,
                    'province_id' => 19,
                    'name' => 'Mierla, La',
                ],
            490 =>
                [
                    'id' => 2991,
                    'province_id' => 19,
                    'name' => 'Millana',
                ],
            491 =>
                [
                    'id' => 2992,
                    'province_id' => 19,
                    'name' => 'Milmarcos',
                ],
            492 =>
                [
                    'id' => 2993,
                    'province_id' => 19,
                    'name' => 'Miñosa, La',
                ],
            493 =>
                [
                    'id' => 2994,
                    'province_id' => 19,
                    'name' => 'Mirabueno',
                ],
            494 =>
                [
                    'id' => 2995,
                    'province_id' => 19,
                    'name' => 'Miralrío',
                ],
            495 =>
                [
                    'id' => 2996,
                    'province_id' => 19,
                    'name' => 'Mochales',
                ],
            496 =>
                [
                    'id' => 2997,
                    'province_id' => 19,
                    'name' => 'Mohernando',
                ],
            497 =>
                [
                    'id' => 2998,
                    'province_id' => 19,
                    'name' => 'Molina de Aragón',
                ],
            498 =>
                [
                    'id' => 2999,
                    'province_id' => 19,
                    'name' => 'Monasterio',
                ],
            499 =>
                [
                    'id' => 3000,
                    'province_id' => 19,
                    'name' => 'Mondéjar',
                ],
        ]);
        \DB::table('localities')->insert([
            0 =>
                [
                    'id' => 3001,
                    'province_id' => 19,
                    'name' => 'Montarrón',
                ],
            1 =>
                [
                    'id' => 3002,
                    'province_id' => 19,
                    'name' => 'Moratilla de los Meleros',
                ],
            2 =>
                [
                    'id' => 3003,
                    'province_id' => 19,
                    'name' => 'Morenilla',
                ],
            3 =>
                [
                    'id' => 3004,
                    'province_id' => 19,
                    'name' => 'Muduex',
                ],
            4 =>
                [
                    'id' => 3005,
                    'province_id' => 19,
                    'name' => 'Navas de Jadraque, Las',
                ],
            5 =>
                [
                    'id' => 3006,
                    'province_id' => 19,
                    'name' => 'Negredo',
                ],
            6 =>
                [
                    'id' => 3007,
                    'province_id' => 19,
                    'name' => 'Ocentejo',
                ],
            7 =>
                [
                    'id' => 3008,
                    'province_id' => 19,
                    'name' => 'Olivar, El',
                ],
            8 =>
                [
                    'id' => 3009,
                    'province_id' => 19,
                    'name' => 'Olmeda de Cobeta',
                ],
            9 =>
                [
                    'id' => 3010,
                    'province_id' => 19,
                    'name' => 'Olmeda de Jadraque, La',
                ],
            10 =>
                [
                    'id' => 3011,
                    'province_id' => 19,
                    'name' => 'Ordial, El',
                ],
            11 =>
                [
                    'id' => 3012,
                    'province_id' => 19,
                    'name' => 'Orea',
                ],
            12 =>
                [
                    'id' => 3013,
                    'province_id' => 19,
                    'name' => 'Pálmaces de Jadraque',
                ],
            13 =>
                [
                    'id' => 3014,
                    'province_id' => 19,
                    'name' => 'Pardos',
                ],
            14 =>
                [
                    'id' => 3015,
                    'province_id' => 19,
                    'name' => 'Paredes de Sigüenza',
                ],
            15 =>
                [
                    'id' => 3016,
                    'province_id' => 19,
                    'name' => 'Pareja',
                ],
            16 =>
                [
                    'id' => 3017,
                    'province_id' => 19,
                    'name' => 'Pastrana',
                ],
            17 =>
                [
                    'id' => 3018,
                    'province_id' => 19,
                    'name' => 'Pedregal, El',
                ],
            18 =>
                [
                    'id' => 3019,
                    'province_id' => 19,
                    'name' => 'Peñalén',
                ],
            19 =>
                [
                    'id' => 3020,
                    'province_id' => 19,
                    'name' => 'Peñalver',
                ],
            20 =>
                [
                    'id' => 3021,
                    'province_id' => 19,
                    'name' => 'Peralejos de las Truchas',
                ],
            21 =>
                [
                    'id' => 3022,
                    'province_id' => 19,
                    'name' => 'Peralveche',
                ],
            22 =>
                [
                    'id' => 3023,
                    'province_id' => 19,
                    'name' => 'Pinilla de Jadraque',
                ],
            23 =>
                [
                    'id' => 3024,
                    'province_id' => 19,
                    'name' => 'Pinilla de Molina',
                ],
            24 =>
                [
                    'id' => 3025,
                    'province_id' => 19,
                    'name' => 'Pioz',
                ],
            25 =>
                [
                    'id' => 3026,
                    'province_id' => 19,
                    'name' => 'Piqueras',
                ],
            26 =>
                [
                    'id' => 3027,
                    'province_id' => 19,
                    'name' => 'Pobo de Dueñas, El',
                ],
            27 =>
                [
                    'id' => 3028,
                    'province_id' => 19,
                    'name' => 'Poveda de la Sierra',
                ],
            28 =>
                [
                    'id' => 3029,
                    'province_id' => 19,
                    'name' => 'Pozo de Almoguera',
                ],
            29 =>
                [
                    'id' => 3030,
                    'province_id' => 19,
                    'name' => 'Pozo de Guadalajara',
                ],
            30 =>
                [
                    'id' => 3031,
                    'province_id' => 19,
                    'name' => 'Prádena de Atienza',
                ],
            31 =>
                [
                    'id' => 3032,
                    'province_id' => 19,
                    'name' => 'Prados Redondos',
                ],
            32 =>
                [
                    'id' => 3033,
                    'province_id' => 19,
                    'name' => 'Puebla de Beleña',
                ],
            33 =>
                [
                    'id' => 3034,
                    'province_id' => 19,
                    'name' => 'Puebla de Valles',
                ],
            34 =>
                [
                    'id' => 3035,
                    'province_id' => 19,
                    'name' => 'Quer',
                ],
            35 =>
                [
                    'id' => 3036,
                    'province_id' => 19,
                    'name' => 'Rebollosa de Jadraque',
                ],
            36 =>
                [
                    'id' => 3037,
                    'province_id' => 19,
                    'name' => 'Recuenco, El',
                ],
            37 =>
                [
                    'id' => 3038,
                    'province_id' => 19,
                    'name' => 'Renera',
                ],
            38 =>
                [
                    'id' => 3039,
                    'province_id' => 19,
                    'name' => 'Retiendas',
                ],
            39 =>
                [
                    'id' => 3040,
                    'province_id' => 19,
                    'name' => 'Riba de Saelices',
                ],
            40 =>
                [
                    'id' => 3041,
                    'province_id' => 19,
                    'name' => 'Rillo de Gallo',
                ],
            41 =>
                [
                    'id' => 3042,
                    'province_id' => 19,
                    'name' => 'Riofrío del Llano',
                ],
            42 =>
                [
                    'id' => 3043,
                    'province_id' => 19,
                    'name' => 'Robledillo de Mohernando',
                ],
            43 =>
                [
                    'id' => 3044,
                    'province_id' => 19,
                    'name' => 'Robledo de Corpes',
                ],
            44 =>
                [
                    'id' => 3045,
                    'province_id' => 19,
                    'name' => 'Romanillos de Atienza',
                ],
            45 =>
                [
                    'id' => 3046,
                    'province_id' => 19,
                    'name' => 'Romanones',
                ],
            46 =>
                [
                    'id' => 3047,
                    'province_id' => 19,
                    'name' => 'Rueda de la Sierra',
                ],
            47 =>
                [
                    'id' => 3048,
                    'province_id' => 19,
                    'name' => 'Sacecorbo',
                ],
            48 =>
                [
                    'id' => 3049,
                    'province_id' => 19,
                    'name' => 'Sacedón',
                ],
            49 =>
                [
                    'id' => 3050,
                    'province_id' => 19,
                    'name' => 'Saelices de la Sal',
                ],
            50 =>
                [
                    'id' => 3051,
                    'province_id' => 19,
                    'name' => 'Salmerón',
                ],
            51 =>
                [
                    'id' => 3052,
                    'province_id' => 19,
                    'name' => 'San Andrés del Congosto',
                ],
            52 =>
                [
                    'id' => 3053,
                    'province_id' => 19,
                    'name' => 'San Andrés del Rey',
                ],
            53 =>
                [
                    'id' => 3054,
                    'province_id' => 19,
                    'name' => 'Santiuste',
                ],
            54 =>
                [
                    'id' => 3055,
                    'province_id' => 19,
                    'name' => 'Saúca',
                ],
            55 =>
                [
                    'id' => 3056,
                    'province_id' => 19,
                    'name' => 'Sayatón',
                ],
            56 =>
                [
                    'id' => 3057,
                    'province_id' => 19,
                    'name' => 'Selas',
                ],
            57 =>
                [
                    'id' => 3058,
                    'province_id' => 19,
                    'name' => 'Semillas',
                ],
            58 =>
                [
                    'id' => 3059,
                    'province_id' => 19,
                    'name' => 'Setiles',
                ],
            59 =>
                [
                    'id' => 3060,
                    'province_id' => 19,
                    'name' => 'Sienes',
                ],
            60 =>
                [
                    'id' => 3061,
                    'province_id' => 19,
                    'name' => 'Sigüenza',
                ],
            61 =>
                [
                    'id' => 3062,
                    'province_id' => 19,
                    'name' => 'Solanillos del Extremo',
                ],
            62 =>
                [
                    'id' => 3063,
                    'province_id' => 19,
                    'name' => 'Somolinos',
                ],
            63 =>
                [
                    'id' => 3064,
                    'province_id' => 19,
                    'name' => 'Sotillo, El',
                ],
            64 =>
                [
                    'id' => 3065,
                    'province_id' => 19,
                    'name' => 'Sotodosos',
                ],
            65 =>
                [
                    'id' => 3066,
                    'province_id' => 19,
                    'name' => 'Tamajón',
                ],
            66 =>
                [
                    'id' => 3067,
                    'province_id' => 19,
                    'name' => 'Taragudo',
                ],
            67 =>
                [
                    'id' => 3068,
                    'province_id' => 19,
                    'name' => 'Taravilla',
                ],
            68 =>
                [
                    'id' => 3069,
                    'province_id' => 19,
                    'name' => 'Tartanedo',
                ],
            69 =>
                [
                    'id' => 3070,
                    'province_id' => 19,
                    'name' => 'Tendilla',
                ],
            70 =>
                [
                    'id' => 3071,
                    'province_id' => 19,
                    'name' => 'Terzaga',
                ],
            71 =>
                [
                    'id' => 3072,
                    'province_id' => 19,
                    'name' => 'Tierzo',
                ],
            72 =>
                [
                    'id' => 3073,
                    'province_id' => 19,
                    'name' => 'Toba, La',
                ],
            73 =>
                [
                    'id' => 3074,
                    'province_id' => 19,
                    'name' => 'Tordellego',
                ],
            74 =>
                [
                    'id' => 3075,
                    'province_id' => 19,
                    'name' => 'Tordelrábano',
                ],
            75 =>
                [
                    'id' => 3076,
                    'province_id' => 19,
                    'name' => 'Tordesilos',
                ],
            76 =>
                [
                    'id' => 3077,
                    'province_id' => 19,
                    'name' => 'Torija',
                ],
            77 =>
                [
                    'id' => 3078,
                    'province_id' => 19,
                    'name' => 'Torre del Burgo',
                ],
            78 =>
                [
                    'id' => 3079,
                    'province_id' => 19,
                    'name' => 'Torrecuadrada de Molina',
                ],
            79 =>
                [
                    'id' => 3080,
                    'province_id' => 19,
                    'name' => 'Torrecuadradilla',
                ],
            80 =>
                [
                    'id' => 3081,
                    'province_id' => 19,
                    'name' => 'Torrejón del Rey',
                ],
            81 =>
                [
                    'id' => 3082,
                    'province_id' => 19,
                    'name' => 'Torremocha de Jadraque',
                ],
            82 =>
                [
                    'id' => 3083,
                    'province_id' => 19,
                    'name' => 'Torremocha del Campo',
                ],
            83 =>
                [
                    'id' => 3084,
                    'province_id' => 19,
                    'name' => 'Torremocha del Pinar',
                ],
            84 =>
                [
                    'id' => 3085,
                    'province_id' => 19,
                    'name' => 'Torremochuela',
                ],
            85 =>
                [
                    'id' => 3086,
                    'province_id' => 19,
                    'name' => 'Torrubia',
                ],
            86 =>
                [
                    'id' => 3087,
                    'province_id' => 19,
                    'name' => 'Tórtola de Henares',
                ],
            87 =>
                [
                    'id' => 3088,
                    'province_id' => 19,
                    'name' => 'Tortuera',
                ],
            88 =>
                [
                    'id' => 3089,
                    'province_id' => 19,
                    'name' => 'Tortuero',
                ],
            89 =>
                [
                    'id' => 3090,
                    'province_id' => 19,
                    'name' => 'Traíd',
                ],
            90 =>
                [
                    'id' => 3091,
                    'province_id' => 19,
                    'name' => 'Trijueque',
                ],
            91 =>
                [
                    'id' => 3092,
                    'province_id' => 19,
                    'name' => 'Trillo',
                ],
            92 =>
                [
                    'id' => 3093,
                    'province_id' => 19,
                    'name' => 'Uceda',
                ],
            93 =>
                [
                    'id' => 3094,
                    'province_id' => 19,
                    'name' => 'Ujados',
                ],
            94 =>
                [
                    'id' => 3095,
                    'province_id' => 19,
                    'name' => 'Utande',
                ],
            95 =>
                [
                    'id' => 3096,
                    'province_id' => 19,
                    'name' => 'Valdarachas',
                ],
            96 =>
                [
                    'id' => 3097,
                    'province_id' => 19,
                    'name' => 'Valdearenas',
                ],
            97 =>
                [
                    'id' => 3098,
                    'province_id' => 19,
                    'name' => 'Valdeavellano',
                ],
            98 =>
                [
                    'id' => 3099,
                    'province_id' => 19,
                    'name' => 'Valdeaveruelo',
                ],
            99 =>
                [
                    'id' => 3100,
                    'province_id' => 19,
                    'name' => 'Valdeconcha',
                ],
            100 =>
                [
                    'id' => 3101,
                    'province_id' => 19,
                    'name' => 'Valdegrudas',
                ],
            101 =>
                [
                    'id' => 3102,
                    'province_id' => 19,
                    'name' => 'Valdelcubo',
                ],
            102 =>
                [
                    'id' => 3103,
                    'province_id' => 19,
                    'name' => 'Valdenuño Fernández',
                ],
            103 =>
                [
                    'id' => 3104,
                    'province_id' => 19,
                    'name' => 'Valdepeñas de la Sierra',
                ],
            104 =>
                [
                    'id' => 3105,
                    'province_id' => 19,
                    'name' => 'Valderrebollo',
                ],
            105 =>
                [
                    'id' => 3106,
                    'province_id' => 19,
                    'name' => 'Valdesotos',
                ],
            106 =>
                [
                    'id' => 3107,
                    'province_id' => 19,
                    'name' => 'Valfermoso de Tajuña',
                ],
            107 =>
                [
                    'id' => 3108,
                    'province_id' => 19,
                    'name' => 'Valhermoso',
                ],
            108 =>
                [
                    'id' => 3109,
                    'province_id' => 19,
                    'name' => 'Valtablado del Río',
                ],
            109 =>
                [
                    'id' => 3110,
                    'province_id' => 19,
                    'name' => 'Valverde de los Arroyos',
                ],
            110 =>
                [
                    'id' => 3111,
                    'province_id' => 19,
                    'name' => 'Viana de Jadraque',
                ],
            111 =>
                [
                    'id' => 3112,
                    'province_id' => 19,
                    'name' => 'Villanueva de Alcorón',
                ],
            112 =>
                [
                    'id' => 3113,
                    'province_id' => 19,
                    'name' => 'Villanueva de Argecilla',
                ],
            113 =>
                [
                    'id' => 3114,
                    'province_id' => 19,
                    'name' => 'Villanueva de la Torre',
                ],
            114 =>
                [
                    'id' => 3115,
                    'province_id' => 19,
                    'name' => 'Villares de Jadraque',
                ],
            115 =>
                [
                    'id' => 3116,
                    'province_id' => 19,
                    'name' => 'Villaseca de Henares',
                ],
            116 =>
                [
                    'id' => 3117,
                    'province_id' => 19,
                    'name' => 'Villaseca de Uceda',
                ],
            117 =>
                [
                    'id' => 3118,
                    'province_id' => 19,
                    'name' => 'Villel de Mesa',
                ],
            118 =>
                [
                    'id' => 3119,
                    'province_id' => 19,
                    'name' => 'Viñuelas',
                ],
            119 =>
                [
                    'id' => 3120,
                    'province_id' => 19,
                    'name' => 'Yebes',
                ],
            120 =>
                [
                    'id' => 3121,
                    'province_id' => 19,
                    'name' => 'Yebra',
                ],
            121 =>
                [
                    'id' => 3122,
                    'province_id' => 19,
                    'name' => 'Yélamos de Abajo',
                ],
            122 =>
                [
                    'id' => 3123,
                    'province_id' => 19,
                    'name' => 'Yélamos de Arriba',
                ],
            123 =>
                [
                    'id' => 3124,
                    'province_id' => 19,
                    'name' => 'Yunquera de Henares',
                ],
            124 =>
                [
                    'id' => 3125,
                    'province_id' => 19,
                    'name' => 'Yunta, La',
                ],
            125 =>
                [
                    'id' => 3126,
                    'province_id' => 19,
                    'name' => 'Zaorejas',
                ],
            126 =>
                [
                    'id' => 3127,
                    'province_id' => 19,
                    'name' => 'Zarzuela de Jadraque',
                ],
            127 =>
                [
                    'id' => 3128,
                    'province_id' => 19,
                    'name' => 'Zorita de los Canes',
                ],
            128 =>
                [
                    'id' => 3129,
                    'province_id' => 20,
                    'name' => 'Abaltzisketa',
                ],
            129 =>
                [
                    'id' => 3130,
                    'province_id' => 20,
                    'name' => 'Aduna',
                ],
            130 =>
                [
                    'id' => 3131,
                    'province_id' => 20,
                    'name' => 'Aia',
                ],
            131 =>
                [
                    'id' => 3132,
                    'province_id' => 20,
                    'name' => 'Aizarnazabal',
                ],
            132 =>
                [
                    'id' => 3133,
                    'province_id' => 20,
                    'name' => 'Albiztur',
                ],
            133 =>
                [
                    'id' => 3134,
                    'province_id' => 20,
                    'name' => 'Alegia',
                ],
            134 =>
                [
                    'id' => 3135,
                    'province_id' => 20,
                    'name' => 'Alkiza',
                ],
            135 =>
                [
                    'id' => 3136,
                    'province_id' => 20,
                    'name' => 'Altzaga',
                ],
            136 =>
                [
                    'id' => 3137,
                    'province_id' => 20,
                    'name' => 'Altzo',
                ],
            137 =>
                [
                    'id' => 3138,
                    'province_id' => 20,
                    'name' => 'Amezketa',
                ],
            138 =>
                [
                    'id' => 3139,
                    'province_id' => 20,
                    'name' => 'Andoain',
                ],
            139 =>
                [
                    'id' => 3140,
                    'province_id' => 20,
                    'name' => 'Anoeta',
                ],
            140 =>
                [
                    'id' => 3141,
                    'province_id' => 20,
                    'name' => 'Antzuola',
                ],
            141 =>
                [
                    'id' => 3142,
                    'province_id' => 20,
                    'name' => 'Arama',
                ],
            142 =>
                [
                    'id' => 3143,
                    'province_id' => 20,
                    'name' => 'Aretxabaleta',
                ],
            143 =>
                [
                    'id' => 3144,
                    'province_id' => 20,
                    'name' => 'Arrasate/Mondragón',
                ],
            144 =>
                [
                    'id' => 3145,
                    'province_id' => 20,
                    'name' => 'Asteasu',
                ],
            145 =>
                [
                    'id' => 3146,
                    'province_id' => 20,
                    'name' => 'Astigarraga',
                ],
            146 =>
                [
                    'id' => 3147,
                    'province_id' => 20,
                    'name' => 'Ataun',
                ],
            147 =>
                [
                    'id' => 3148,
                    'province_id' => 20,
                    'name' => 'Azkoitia',
                ],
            148 =>
                [
                    'id' => 3149,
                    'province_id' => 20,
                    'name' => 'Azpeitia',
                ],
            149 =>
                [
                    'id' => 3150,
                    'province_id' => 20,
                    'name' => 'Baliarrain',
                ],
            150 =>
                [
                    'id' => 3151,
                    'province_id' => 20,
                    'name' => 'Beasain',
                ],
            151 =>
                [
                    'id' => 3152,
                    'province_id' => 20,
                    'name' => 'Beizama',
                ],
            152 =>
                [
                    'id' => 3153,
                    'province_id' => 20,
                    'name' => 'Belauntza',
                ],
            153 =>
                [
                    'id' => 3154,
                    'province_id' => 20,
                    'name' => 'Berastegi',
                ],
            154 =>
                [
                    'id' => 3155,
                    'province_id' => 20,
                    'name' => 'Bergara',
                ],
            155 =>
                [
                    'id' => 3156,
                    'province_id' => 20,
                    'name' => 'Berrobi',
                ],
            156 =>
                [
                    'id' => 3157,
                    'province_id' => 20,
                    'name' => 'Bidegoian',
                ],
            157 =>
                [
                    'id' => 3158,
                    'province_id' => 20,
                    'name' => 'Deba',
                ],
            158 =>
                [
                    'id' => 3159,
                    'province_id' => 20,
                    'name' => 'Donostia-San Sebastián',
                ],
            159 =>
                [
                    'id' => 3160,
                    'province_id' => 20,
                    'name' => 'Eibar',
                ],
            160 =>
                [
                    'id' => 3161,
                    'province_id' => 20,
                    'name' => 'Elduain',
                ],
            161 =>
                [
                    'id' => 3162,
                    'province_id' => 20,
                    'name' => 'Elgeta',
                ],
            162 =>
                [
                    'id' => 3163,
                    'province_id' => 20,
                    'name' => 'Elgoibar',
                ],
            163 =>
                [
                    'id' => 3164,
                    'province_id' => 20,
                    'name' => 'Errenteria',
                ],
            164 =>
                [
                    'id' => 3165,
                    'province_id' => 20,
                    'name' => 'Errezil',
                ],
            165 =>
                [
                    'id' => 3166,
                    'province_id' => 20,
                    'name' => 'Eskoriatza',
                ],
            166 =>
                [
                    'id' => 3167,
                    'province_id' => 20,
                    'name' => 'Ezkio-Itsaso',
                ],
            167 =>
                [
                    'id' => 3168,
                    'province_id' => 20,
                    'name' => 'Gabiria',
                ],
            168 =>
                [
                    'id' => 3169,
                    'province_id' => 20,
                    'name' => 'Gaintza',
                ],
            169 =>
                [
                    'id' => 3170,
                    'province_id' => 20,
                    'name' => 'Gaztelu',
                ],
            170 =>
                [
                    'id' => 3171,
                    'province_id' => 20,
                    'name' => 'Getaria',
                ],
            171 =>
                [
                    'id' => 3172,
                    'province_id' => 20,
                    'name' => 'Hernani',
                ],
            172 =>
                [
                    'id' => 3173,
                    'province_id' => 20,
                    'name' => 'Hernialde',
                ],
            173 =>
                [
                    'id' => 3174,
                    'province_id' => 20,
                    'name' => 'Hondarribia',
                ],
            174 =>
                [
                    'id' => 3175,
                    'province_id' => 20,
                    'name' => 'Ibarra',
                ],
            175 =>
                [
                    'id' => 3176,
                    'province_id' => 20,
                    'name' => 'Idiazabal',
                ],
            176 =>
                [
                    'id' => 3177,
                    'province_id' => 20,
                    'name' => 'Ikaztegieta',
                ],
            177 =>
                [
                    'id' => 3178,
                    'province_id' => 20,
                    'name' => 'Irun',
                ],
            178 =>
                [
                    'id' => 3179,
                    'province_id' => 20,
                    'name' => 'Irura',
                ],
            179 =>
                [
                    'id' => 3180,
                    'province_id' => 20,
                    'name' => 'Itsasondo',
                ],
            180 =>
                [
                    'id' => 3181,
                    'province_id' => 20,
                    'name' => 'Larraul',
                ],
            181 =>
                [
                    'id' => 3182,
                    'province_id' => 20,
                    'name' => 'Lasarte-Oria',
                ],
            182 =>
                [
                    'id' => 3183,
                    'province_id' => 20,
                    'name' => 'Lazkao',
                ],
            183 =>
                [
                    'id' => 3184,
                    'province_id' => 20,
                    'name' => 'Leaburu',
                ],
            184 =>
                [
                    'id' => 3185,
                    'province_id' => 20,
                    'name' => 'Legazpi',
                ],
            185 =>
                [
                    'id' => 3186,
                    'province_id' => 20,
                    'name' => 'Legorreta',
                ],
            186 =>
                [
                    'id' => 3187,
                    'province_id' => 20,
                    'name' => 'Leintz-Gatzaga',
                ],
            187 =>
                [
                    'id' => 3188,
                    'province_id' => 20,
                    'name' => 'Lezo',
                ],
            188 =>
                [
                    'id' => 3189,
                    'province_id' => 20,
                    'name' => 'Lizartza',
                ],
            189 =>
                [
                    'id' => 3190,
                    'province_id' => 20,
                    'name' => 'Mendaro',
                ],
            190 =>
                [
                    'id' => 3191,
                    'province_id' => 20,
                    'name' => 'Mutiloa',
                ],
            191 =>
                [
                    'id' => 3192,
                    'province_id' => 20,
                    'name' => 'Mutriku',
                ],
            192 =>
                [
                    'id' => 3193,
                    'province_id' => 20,
                    'name' => 'Oiartzun',
                ],
            193 =>
                [
                    'id' => 3194,
                    'province_id' => 20,
                    'name' => 'Olaberria',
                ],
            194 =>
                [
                    'id' => 3195,
                    'province_id' => 20,
                    'name' => 'Oñati',
                ],
            195 =>
                [
                    'id' => 3196,
                    'province_id' => 20,
                    'name' => 'Ordizia',
                ],
            196 =>
                [
                    'id' => 3197,
                    'province_id' => 20,
                    'name' => 'Orendain',
                ],
            197 =>
                [
                    'id' => 3198,
                    'province_id' => 20,
                    'name' => 'Orexa',
                ],
            198 =>
                [
                    'id' => 3199,
                    'province_id' => 20,
                    'name' => 'Orio',
                ],
            199 =>
                [
                    'id' => 3200,
                    'province_id' => 20,
                    'name' => 'Ormaiztegi',
                ],
            200 =>
                [
                    'id' => 3201,
                    'province_id' => 20,
                    'name' => 'Pasaia',
                ],
            201 =>
                [
                    'id' => 3202,
                    'province_id' => 20,
                    'name' => 'Segura',
                ],
            202 =>
                [
                    'id' => 3203,
                    'province_id' => 20,
                    'name' => 'Soraluze/Placencia de las Armas',
                ],
            203 =>
                [
                    'id' => 3204,
                    'province_id' => 20,
                    'name' => 'Tolosa',
                ],
            204 =>
                [
                    'id' => 3205,
                    'province_id' => 20,
                    'name' => 'Urnieta',
                ],
            205 =>
                [
                    'id' => 3206,
                    'province_id' => 20,
                    'name' => 'Urretxu',
                ],
            206 =>
                [
                    'id' => 3207,
                    'province_id' => 20,
                    'name' => 'Usurbil',
                ],
            207 =>
                [
                    'id' => 3208,
                    'province_id' => 20,
                    'name' => 'Villabona',
                ],
            208 =>
                [
                    'id' => 3209,
                    'province_id' => 20,
                    'name' => 'Zaldibia',
                ],
            209 =>
                [
                    'id' => 3210,
                    'province_id' => 20,
                    'name' => 'Zarautz',
                ],
            210 =>
                [
                    'id' => 3211,
                    'province_id' => 20,
                    'name' => 'Zegama',
                ],
            211 =>
                [
                    'id' => 3212,
                    'province_id' => 20,
                    'name' => 'Zerain',
                ],
            212 =>
                [
                    'id' => 3213,
                    'province_id' => 20,
                    'name' => 'Zestoa',
                ],
            213 =>
                [
                    'id' => 3214,
                    'province_id' => 20,
                    'name' => 'Zizurkil',
                ],
            214 =>
                [
                    'id' => 3215,
                    'province_id' => 20,
                    'name' => 'Zumaia',
                ],
            215 =>
                [
                    'id' => 3216,
                    'province_id' => 20,
                    'name' => 'Zumarraga',
                ],
            216 =>
                [
                    'id' => 3217,
                    'province_id' => 21,
                    'name' => 'Alájar',
                ],
            217 =>
                [
                    'id' => 3218,
                    'province_id' => 21,
                    'name' => 'Aljaraque',
                ],
            218 =>
                [
                    'id' => 3219,
                    'province_id' => 21,
                    'name' => 'Almendro, El',
                ],
            219 =>
                [
                    'id' => 3220,
                    'province_id' => 21,
                    'name' => 'Almonaster la Real',
                ],
            220 =>
                [
                    'id' => 3221,
                    'province_id' => 21,
                    'name' => 'Almonte',
                ],
            221 =>
                [
                    'id' => 3222,
                    'province_id' => 21,
                    'name' => 'Alosno',
                ],
            222 =>
                [
                    'id' => 3223,
                    'province_id' => 21,
                    'name' => 'Aracena',
                ],
            223 =>
                [
                    'id' => 3224,
                    'province_id' => 21,
                    'name' => 'Aroche',
                ],
            224 =>
                [
                    'id' => 3225,
                    'province_id' => 21,
                    'name' => 'Arroyomolinos de León',
                ],
            225 =>
                [
                    'id' => 3226,
                    'province_id' => 21,
                    'name' => 'Ayamonte',
                ],
            226 =>
                [
                    'id' => 3227,
                    'province_id' => 21,
                    'name' => 'Beas',
                ],
            227 =>
                [
                    'id' => 3228,
                    'province_id' => 21,
                    'name' => 'Berrocal',
                ],
            228 =>
                [
                    'id' => 3229,
                    'province_id' => 21,
                    'name' => 'Bollullos Par del Condado',
                ],
            229 =>
                [
                    'id' => 3230,
                    'province_id' => 21,
                    'name' => 'Bonares',
                ],
            230 =>
                [
                    'id' => 3231,
                    'province_id' => 21,
                    'name' => 'Cabezas Rubias',
                ],
            231 =>
                [
                    'id' => 3232,
                    'province_id' => 21,
                    'name' => 'Cala',
                ],
            232 =>
                [
                    'id' => 3233,
                    'province_id' => 21,
                    'name' => 'Calañas',
                ],
            233 =>
                [
                    'id' => 3234,
                    'province_id' => 21,
                    'name' => 'Campillo, El',
                ],
            234 =>
                [
                    'id' => 3235,
                    'province_id' => 21,
                    'name' => 'Campofrío',
                ],
            235 =>
                [
                    'id' => 3236,
                    'province_id' => 21,
                    'name' => 'Cañaveral de León',
                ],
            236 =>
                [
                    'id' => 3237,
                    'province_id' => 21,
                    'name' => 'Cartaya',
                ],
            237 =>
                [
                    'id' => 3238,
                    'province_id' => 21,
                    'name' => 'Castaño del Robledo',
                ],
            238 =>
                [
                    'id' => 3239,
                    'province_id' => 21,
                    'name' => 'Cerro de Andévalo, El',
                ],
            239 =>
                [
                    'id' => 3240,
                    'province_id' => 21,
                    'name' => 'Chucena',
                ],
            240 =>
                [
                    'id' => 3241,
                    'province_id' => 21,
                    'name' => 'Corteconcepción',
                ],
            241 =>
                [
                    'id' => 3242,
                    'province_id' => 21,
                    'name' => 'Cortegana',
                ],
            242 =>
                [
                    'id' => 3243,
                    'province_id' => 21,
                    'name' => 'Cortelazor',
                ],
            243 =>
                [
                    'id' => 3244,
                    'province_id' => 21,
                    'name' => 'Cumbres de Enmedio',
                ],
            244 =>
                [
                    'id' => 3245,
                    'province_id' => 21,
                    'name' => 'Cumbres de San Bartolomé',
                ],
            245 =>
                [
                    'id' => 3246,
                    'province_id' => 21,
                    'name' => 'Cumbres Mayores',
                ],
            246 =>
                [
                    'id' => 3247,
                    'province_id' => 21,
                    'name' => 'Encinasola',
                ],
            247 =>
                [
                    'id' => 3248,
                    'province_id' => 21,
                    'name' => 'Escacena del Campo',
                ],
            248 =>
                [
                    'id' => 3249,
                    'province_id' => 21,
                    'name' => 'Fuenteheridos',
                ],
            249 =>
                [
                    'id' => 3250,
                    'province_id' => 21,
                    'name' => 'Galaroza',
                ],
            250 =>
                [
                    'id' => 3251,
                    'province_id' => 21,
                    'name' => 'Gibraleón',
                ],
            251 =>
                [
                    'id' => 3252,
                    'province_id' => 21,
                    'name' => 'Granada de Río-Tinto, La',
                ],
            252 =>
                [
                    'id' => 3253,
                    'province_id' => 21,
                    'name' => 'Granado, El',
                ],
            253 =>
                [
                    'id' => 3254,
                    'province_id' => 21,
                    'name' => 'Higuera de la Sierra',
                ],
            254 =>
                [
                    'id' => 3255,
                    'province_id' => 21,
                    'name' => 'Hinojales',
                ],
            255 =>
                [
                    'id' => 3256,
                    'province_id' => 21,
                    'name' => 'Hinojos',
                ],
            256 =>
                [
                    'id' => 3257,
                    'province_id' => 21,
                    'name' => 'Huelva',
                ],
            257 =>
                [
                    'id' => 3258,
                    'province_id' => 21,
                    'name' => 'Isla Cristina',
                ],
            258 =>
                [
                    'id' => 3259,
                    'province_id' => 21,
                    'name' => 'Jabugo',
                ],
            259 =>
                [
                    'id' => 3260,
                    'province_id' => 21,
                    'name' => 'Lepe',
                ],
            260 =>
                [
                    'id' => 3261,
                    'province_id' => 21,
                    'name' => 'Linares de la Sierra',
                ],
            261 =>
                [
                    'id' => 3262,
                    'province_id' => 21,
                    'name' => 'Lucena del Puerto',
                ],
            262 =>
                [
                    'id' => 3263,
                    'province_id' => 21,
                    'name' => 'Manzanilla',
                ],
            263 =>
                [
                    'id' => 3264,
                    'province_id' => 21,
                    'name' => 'Marines, Los',
                ],
            264 =>
                [
                    'id' => 3265,
                    'province_id' => 21,
                    'name' => 'Minas de Riotinto',
                ],
            265 =>
                [
                    'id' => 3266,
                    'province_id' => 21,
                    'name' => 'Moguer',
                ],
            266 =>
                [
                    'id' => 3267,
                    'province_id' => 21,
                    'name' => 'Nava, La',
                ],
            267 =>
                [
                    'id' => 3268,
                    'province_id' => 21,
                    'name' => 'Nerva',
                ],
            268 =>
                [
                    'id' => 3269,
                    'province_id' => 21,
                    'name' => 'Niebla',
                ],
            269 =>
                [
                    'id' => 3270,
                    'province_id' => 21,
                    'name' => 'Palma del Condado, La',
                ],
            270 =>
                [
                    'id' => 3271,
                    'province_id' => 21,
                    'name' => 'Palos de la Frontera',
                ],
            271 =>
                [
                    'id' => 3272,
                    'province_id' => 21,
                    'name' => 'Paterna del Campo',
                ],
            272 =>
                [
                    'id' => 3273,
                    'province_id' => 21,
                    'name' => 'Paymogo',
                ],
            273 =>
                [
                    'id' => 3274,
                    'province_id' => 21,
                    'name' => 'Puebla de Guzmán',
                ],
            274 =>
                [
                    'id' => 3275,
                    'province_id' => 21,
                    'name' => 'Puerto Moral',
                ],
            275 =>
                [
                    'id' => 3276,
                    'province_id' => 21,
                    'name' => 'Punta Umbría',
                ],
            276 =>
                [
                    'id' => 3277,
                    'province_id' => 21,
                    'name' => 'Rociana del Condado',
                ],
            277 =>
                [
                    'id' => 3278,
                    'province_id' => 21,
                    'name' => 'Rosal de la Frontera',
                ],
            278 =>
                [
                    'id' => 3279,
                    'province_id' => 21,
                    'name' => 'San Bartolomé de la Torre',
                ],
            279 =>
                [
                    'id' => 3280,
                    'province_id' => 21,
                    'name' => 'San Juan del Puerto',
                ],
            280 =>
                [
                    'id' => 3281,
                    'province_id' => 21,
                    'name' => 'San Silvestre de Guzmán',
                ],
            281 =>
                [
                    'id' => 3282,
                    'province_id' => 21,
                    'name' => 'Sanlúcar de Guadiana',
                ],
            282 =>
                [
                    'id' => 3283,
                    'province_id' => 21,
                    'name' => 'Santa Ana la Real',
                ],
            283 =>
                [
                    'id' => 3284,
                    'province_id' => 21,
                    'name' => 'Santa Bárbara de Casa',
                ],
            284 =>
                [
                    'id' => 3285,
                    'province_id' => 21,
                    'name' => 'Santa Olalla del Cala',
                ],
            285 =>
                [
                    'id' => 3286,
                    'province_id' => 21,
                    'name' => 'Trigueros',
                ],
            286 =>
                [
                    'id' => 3287,
                    'province_id' => 21,
                    'name' => 'Valdelarco',
                ],
            287 =>
                [
                    'id' => 3288,
                    'province_id' => 21,
                    'name' => 'Valverde del Camino',
                ],
            288 =>
                [
                    'id' => 3289,
                    'province_id' => 21,
                    'name' => 'Villablanca',
                ],
            289 =>
                [
                    'id' => 3290,
                    'province_id' => 21,
                    'name' => 'Villalba del Alcor',
                ],
            290 =>
                [
                    'id' => 3291,
                    'province_id' => 21,
                    'name' => 'Villanueva de las Cruces',
                ],
            291 =>
                [
                    'id' => 3292,
                    'province_id' => 21,
                    'name' => 'Villanueva de los Castillejos',
                ],
            292 =>
                [
                    'id' => 3293,
                    'province_id' => 21,
                    'name' => 'Villarrasa',
                ],
            293 =>
                [
                    'id' => 3294,
                    'province_id' => 21,
                    'name' => 'Zalamea la Real',
                ],
            294 =>
                [
                    'id' => 3295,
                    'province_id' => 21,
                    'name' => 'Zufre',
                ],
            295 =>
                [
                    'id' => 3296,
                    'province_id' => 22,
                    'name' => 'Abiego',
                ],
            296 =>
                [
                    'id' => 3297,
                    'province_id' => 22,
                    'name' => 'Abizanda',
                ],
            297 =>
                [
                    'id' => 3298,
                    'province_id' => 22,
                    'name' => 'Adahuesca',
                ],
            298 =>
                [
                    'id' => 3299,
                    'province_id' => 22,
                    'name' => 'Agüero',
                ],
            299 =>
                [
                    'id' => 3300,
                    'province_id' => 22,
                    'name' => 'Aínsa-Sobrarbe',
                ],
            300 =>
                [
                    'id' => 3301,
                    'province_id' => 22,
                    'name' => 'Aisa',
                ],
            301 =>
                [
                    'id' => 3302,
                    'province_id' => 22,
                    'name' => 'Albalate de Cinca',
                ],
            302 =>
                [
                    'id' => 3303,
                    'province_id' => 22,
                    'name' => 'Albalatillo',
                ],
            303 =>
                [
                    'id' => 3304,
                    'province_id' => 22,
                    'name' => 'Albelda',
                ],
            304 =>
                [
                    'id' => 3305,
                    'province_id' => 22,
                    'name' => 'Albero Alto',
                ],
            305 =>
                [
                    'id' => 3306,
                    'province_id' => 22,
                    'name' => 'Albero Bajo',
                ],
            306 =>
                [
                    'id' => 3307,
                    'province_id' => 22,
                    'name' => 'Alberuela de Tubo',
                ],
            307 =>
                [
                    'id' => 3308,
                    'province_id' => 22,
                    'name' => 'Alcalá de Gurrea',
                ],
            308 =>
                [
                    'id' => 3309,
                    'province_id' => 22,
                    'name' => 'Alcalá del Obispo',
                ],
            309 =>
                [
                    'id' => 3310,
                    'province_id' => 22,
                    'name' => 'Alcampell',
                ],
            310 =>
                [
                    'id' => 3311,
                    'province_id' => 22,
                    'name' => 'Alcolea de Cinca',
                ],
            311 =>
                [
                    'id' => 3312,
                    'province_id' => 22,
                    'name' => 'Alcubierre',
                ],
            312 =>
                [
                    'id' => 3313,
                    'province_id' => 22,
                    'name' => 'Alerre',
                ],
            313 =>
                [
                    'id' => 3314,
                    'province_id' => 22,
                    'name' => 'Alfántega',
                ],
            314 =>
                [
                    'id' => 3315,
                    'province_id' => 22,
                    'name' => 'Almudévar',
                ],
            315 =>
                [
                    'id' => 3316,
                    'province_id' => 22,
                    'name' => 'Almunia de San Juan',
                ],
            316 =>
                [
                    'id' => 3317,
                    'province_id' => 22,
                    'name' => 'Almuniente',
                ],
            317 =>
                [
                    'id' => 3318,
                    'province_id' => 22,
                    'name' => 'Alquézar',
                ],
            318 =>
                [
                    'id' => 3319,
                    'province_id' => 22,
                    'name' => 'Altorricón',
                ],
            319 =>
                [
                    'id' => 3320,
                    'province_id' => 22,
                    'name' => 'Angüés',
                ],
            320 =>
                [
                    'id' => 3321,
                    'province_id' => 22,
                    'name' => 'Ansó',
                ],
            321 =>
                [
                    'id' => 3322,
                    'province_id' => 22,
                    'name' => 'Antillón',
                ],
            322 =>
                [
                    'id' => 3323,
                    'province_id' => 22,
                    'name' => 'Aragüés del Puerto',
                ],
            323 =>
                [
                    'id' => 3324,
                    'province_id' => 22,
                    'name' => 'Arén',
                ],
            324 =>
                [
                    'id' => 3325,
                    'province_id' => 22,
                    'name' => 'Argavieso',
                ],
            325 =>
                [
                    'id' => 3326,
                    'province_id' => 22,
                    'name' => 'Arguis',
                ],
            326 =>
                [
                    'id' => 3327,
                    'province_id' => 22,
                    'name' => 'Ayerbe',
                ],
            327 =>
                [
                    'id' => 3328,
                    'province_id' => 22,
                    'name' => 'Azanuy-Alins',
                ],
            328 =>
                [
                    'id' => 3329,
                    'province_id' => 22,
                    'name' => 'Azara',
                ],
            329 =>
                [
                    'id' => 3330,
                    'province_id' => 22,
                    'name' => 'Azlor',
                ],
            330 =>
                [
                    'id' => 3331,
                    'province_id' => 22,
                    'name' => 'Baélls',
                ],
            331 =>
                [
                    'id' => 3332,
                    'province_id' => 22,
                    'name' => 'Bailo',
                ],
            332 =>
                [
                    'id' => 3333,
                    'province_id' => 22,
                    'name' => 'Baldellou',
                ],
            333 =>
                [
                    'id' => 3334,
                    'province_id' => 22,
                    'name' => 'Ballobar',
                ],
            334 =>
                [
                    'id' => 3335,
                    'province_id' => 22,
                    'name' => 'Banastás',
                ],
            335 =>
                [
                    'id' => 3336,
                    'province_id' => 22,
                    'name' => 'Barbastro',
                ],
            336 =>
                [
                    'id' => 3337,
                    'province_id' => 22,
                    'name' => 'Barbués',
                ],
            337 =>
                [
                    'id' => 3338,
                    'province_id' => 22,
                    'name' => 'Barbuñales',
                ],
            338 =>
                [
                    'id' => 3339,
                    'province_id' => 22,
                    'name' => 'Bárcabo',
                ],
            339 =>
                [
                    'id' => 3340,
                    'province_id' => 22,
                    'name' => 'Belver de Cinca',
                ],
            340 =>
                [
                    'id' => 3341,
                    'province_id' => 22,
                    'name' => 'Benabarre',
                ],
            341 =>
                [
                    'id' => 3342,
                    'province_id' => 22,
                    'name' => 'Benasque',
                ],
            342 =>
                [
                    'id' => 3343,
                    'province_id' => 22,
                    'name' => 'Berbegal',
                ],
            343 =>
                [
                    'id' => 3344,
                    'province_id' => 22,
                    'name' => 'Bielsa',
                ],
            344 =>
                [
                    'id' => 3345,
                    'province_id' => 22,
                    'name' => 'Bierge',
                ],
            345 =>
                [
                    'id' => 3346,
                    'province_id' => 22,
                    'name' => 'Biescas',
                ],
            346 =>
                [
                    'id' => 3347,
                    'province_id' => 22,
                    'name' => 'Binaced',
                ],
            347 =>
                [
                    'id' => 3348,
                    'province_id' => 22,
                    'name' => 'Binéfar',
                ],
            348 =>
                [
                    'id' => 3349,
                    'province_id' => 22,
                    'name' => 'Bisaurri',
                ],
            349 =>
                [
                    'id' => 3350,
                    'province_id' => 22,
                    'name' => 'Biscarrués',
                ],
            350 =>
                [
                    'id' => 3351,
                    'province_id' => 22,
                    'name' => 'Blecua y Torres',
                ],
            351 =>
                [
                    'id' => 3352,
                    'province_id' => 22,
                    'name' => 'Boltaña',
                ],
            352 =>
                [
                    'id' => 3353,
                    'province_id' => 22,
                    'name' => 'Bonansa',
                ],
            353 =>
                [
                    'id' => 3354,
                    'province_id' => 22,
                    'name' => 'Borau',
                ],
            354 =>
                [
                    'id' => 3355,
                    'province_id' => 22,
                    'name' => 'Broto',
                ],
            355 =>
                [
                    'id' => 3356,
                    'province_id' => 22,
                    'name' => 'Caldearenas',
                ],
            356 =>
                [
                    'id' => 3357,
                    'province_id' => 22,
                    'name' => 'Campo',
                ],
            357 =>
                [
                    'id' => 3358,
                    'province_id' => 22,
                    'name' => 'Camporrélls',
                ],
            358 =>
                [
                    'id' => 3359,
                    'province_id' => 22,
                    'name' => 'Canal de Berdún',
                ],
            359 =>
                [
                    'id' => 3360,
                    'province_id' => 22,
                    'name' => 'Candasnos',
                ],
            360 =>
                [
                    'id' => 3361,
                    'province_id' => 22,
                    'name' => 'Canfranc',
                ],
            361 =>
                [
                    'id' => 3362,
                    'province_id' => 22,
                    'name' => 'Capdesaso',
                ],
            362 =>
                [
                    'id' => 3363,
                    'province_id' => 22,
                    'name' => 'Capella',
                ],
            363 =>
                [
                    'id' => 3364,
                    'province_id' => 22,
                    'name' => 'Casbas de Huesca',
                ],
            364 =>
                [
                    'id' => 3365,
                    'province_id' => 22,
                    'name' => 'Castejón de Monegros',
                ],
            365 =>
                [
                    'id' => 3366,
                    'province_id' => 22,
                    'name' => 'Castejón de Sos',
                ],
            366 =>
                [
                    'id' => 3367,
                    'province_id' => 22,
                    'name' => 'Castejón del Puente',
                ],
            367 =>
                [
                    'id' => 3368,
                    'province_id' => 22,
                    'name' => 'Castelflorite',
                ],
            368 =>
                [
                    'id' => 3369,
                    'province_id' => 22,
                    'name' => 'Castiello de Jaca',
                ],
            369 =>
                [
                    'id' => 3370,
                    'province_id' => 22,
                    'name' => 'Castigaleu',
                ],
            370 =>
                [
                    'id' => 3371,
                    'province_id' => 22,
                    'name' => 'Castillazuelo',
                ],
            371 =>
                [
                    'id' => 3372,
                    'province_id' => 22,
                    'name' => 'Castillonroy',
                ],
            372 =>
                [
                    'id' => 3373,
                    'province_id' => 22,
                    'name' => 'Chalamera',
                ],
            373 =>
                [
                    'id' => 3374,
                    'province_id' => 22,
                    'name' => 'Chía',
                ],
            374 =>
                [
                    'id' => 3375,
                    'province_id' => 22,
                    'name' => 'Chimillas',
                ],
            375 =>
                [
                    'id' => 3376,
                    'province_id' => 22,
                    'name' => 'Colungo',
                ],
            376 =>
                [
                    'id' => 3377,
                    'province_id' => 22,
                    'name' => 'Esplús',
                ],
            377 =>
                [
                    'id' => 3378,
                    'province_id' => 22,
                    'name' => 'Estada',
                ],
            378 =>
                [
                    'id' => 3379,
                    'province_id' => 22,
                    'name' => 'Estadilla',
                ],
            379 =>
                [
                    'id' => 3380,
                    'province_id' => 22,
                    'name' => 'Estopiñán del Castillo',
                ],
            380 =>
                [
                    'id' => 3381,
                    'province_id' => 22,
                    'name' => 'Fago',
                ],
            381 =>
                [
                    'id' => 3382,
                    'province_id' => 22,
                    'name' => 'Fanlo',
                ],
            382 =>
                [
                    'id' => 3383,
                    'province_id' => 22,
                    'name' => 'Fiscal',
                ],
            383 =>
                [
                    'id' => 3384,
                    'province_id' => 22,
                    'name' => 'Fonz',
                ],
            384 =>
                [
                    'id' => 3385,
                    'province_id' => 22,
                    'name' => 'Foradada del Toscar',
                ],
            385 =>
                [
                    'id' => 3386,
                    'province_id' => 22,
                    'name' => 'Fraga',
                ],
            386 =>
                [
                    'id' => 3387,
                    'province_id' => 22,
                    'name' => 'Fueva, La',
                ],
            387 =>
                [
                    'id' => 3388,
                    'province_id' => 22,
                    'name' => 'Gistaín',
                ],
            388 =>
                [
                    'id' => 3389,
                    'province_id' => 22,
                    'name' => 'Grado, El',
                ],
            389 =>
                [
                    'id' => 3390,
                    'province_id' => 22,
                    'name' => 'Grañén',
                ],
            390 =>
                [
                    'id' => 3391,
                    'province_id' => 22,
                    'name' => 'Graus',
                ],
            391 =>
                [
                    'id' => 3392,
                    'province_id' => 22,
                    'name' => 'Gurrea de Gállego',
                ],
            392 =>
                [
                    'id' => 3393,
                    'province_id' => 22,
                    'name' => 'Hoz de Jaca',
                ],
            393 =>
                [
                    'id' => 3394,
                    'province_id' => 22,
                    'name' => 'Hoz y Costean',
                ],
            394 =>
                [
                    'id' => 3395,
                    'province_id' => 22,
                    'name' => 'Huerto',
                ],
            395 =>
                [
                    'id' => 3396,
                    'province_id' => 22,
                    'name' => 'Huesca',
                ],
            396 =>
                [
                    'id' => 3397,
                    'province_id' => 22,
                    'name' => 'Ibieca',
                ],
            397 =>
                [
                    'id' => 3398,
                    'province_id' => 22,
                    'name' => 'Igriés',
                ],
            398 =>
                [
                    'id' => 3399,
                    'province_id' => 22,
                    'name' => 'Ilche',
                ],
            399 =>
                [
                    'id' => 3400,
                    'province_id' => 22,
                    'name' => 'Isábena',
                ],
            400 =>
                [
                    'id' => 3401,
                    'province_id' => 22,
                    'name' => 'Jaca',
                ],
            401 =>
                [
                    'id' => 3402,
                    'province_id' => 22,
                    'name' => 'Jasa',
                ],
            402 =>
                [
                    'id' => 3403,
                    'province_id' => 22,
                    'name' => 'Labuerda',
                ],
            403 =>
                [
                    'id' => 3404,
                    'province_id' => 22,
                    'name' => 'Laluenga',
                ],
            404 =>
                [
                    'id' => 3405,
                    'province_id' => 22,
                    'name' => 'Lalueza',
                ],
            405 =>
                [
                    'id' => 3406,
                    'province_id' => 22,
                    'name' => 'Lanaja',
                ],
            406 =>
                [
                    'id' => 3407,
                    'province_id' => 22,
                    'name' => 'Laperdiguera',
                ],
            407 =>
                [
                    'id' => 3408,
                    'province_id' => 22,
                    'name' => 'Lascellas-Ponzano',
                ],
            408 =>
                [
                    'id' => 3409,
                    'province_id' => 22,
                    'name' => 'Lascuarre',
                ],
            409 =>
                [
                    'id' => 3410,
                    'province_id' => 22,
                    'name' => 'Laspaúles',
                ],
            410 =>
                [
                    'id' => 3411,
                    'province_id' => 22,
                    'name' => 'Laspuña',
                ],
            411 =>
                [
                    'id' => 3412,
                    'province_id' => 22,
                    'name' => 'Loarre',
                ],
            412 =>
                [
                    'id' => 3413,
                    'province_id' => 22,
                    'name' => 'Loporzano',
                ],
            413 =>
                [
                    'id' => 3414,
                    'province_id' => 22,
                    'name' => 'Loscorrales',
                ],
            414 =>
                [
                    'id' => 3415,
                    'province_id' => 22,
                    'name' => 'Lupiñén-Ortilla',
                ],
            415 =>
                [
                    'id' => 3416,
                    'province_id' => 22,
                    'name' => 'Monesma y Cajigar',
                ],
            416 =>
                [
                    'id' => 3417,
                    'province_id' => 22,
                    'name' => 'Monflorite-Lascasas',
                ],
            417 =>
                [
                    'id' => 3418,
                    'province_id' => 22,
                    'name' => 'Montanuy',
                ],
            418 =>
                [
                    'id' => 3419,
                    'province_id' => 22,
                    'name' => 'Monzón',
                ],
            419 =>
                [
                    'id' => 3420,
                    'province_id' => 22,
                    'name' => 'Naval',
                ],
            420 =>
                [
                    'id' => 3421,
                    'province_id' => 22,
                    'name' => 'Novales',
                ],
            421 =>
                [
                    'id' => 3422,
                    'province_id' => 22,
                    'name' => 'Nueno',
                ],
            422 =>
                [
                    'id' => 3423,
                    'province_id' => 22,
                    'name' => 'Olvena',
                ],
            423 =>
                [
                    'id' => 3424,
                    'province_id' => 22,
                    'name' => 'Ontiñena',
                ],
            424 =>
                [
                    'id' => 3425,
                    'province_id' => 22,
                    'name' => 'Osso de Cinca',
                ],
            425 =>
                [
                    'id' => 3426,
                    'province_id' => 22,
                    'name' => 'Palo',
                ],
            426 =>
                [
                    'id' => 3427,
                    'province_id' => 22,
                    'name' => 'Panticosa',
                ],
            427 =>
                [
                    'id' => 3428,
                    'province_id' => 22,
                    'name' => 'Peñalba',
                ],
            428 =>
                [
                    'id' => 3429,
                    'province_id' => 22,
                    'name' => 'Peñas de Riglos, Las',
                ],
            429 =>
                [
                    'id' => 3430,
                    'province_id' => 22,
                    'name' => 'Peralta de Alcofea',
                ],
            430 =>
                [
                    'id' => 3431,
                    'province_id' => 22,
                    'name' => 'Peralta de Calasanz',
                ],
            431 =>
                [
                    'id' => 3432,
                    'province_id' => 22,
                    'name' => 'Peraltilla',
                ],
            432 =>
                [
                    'id' => 3433,
                    'province_id' => 22,
                    'name' => 'Perarrúa',
                ],
            433 =>
                [
                    'id' => 3434,
                    'province_id' => 22,
                    'name' => 'Pertusa',
                ],
            434 =>
                [
                    'id' => 3435,
                    'province_id' => 22,
                    'name' => 'Piracés',
                ],
            435 =>
                [
                    'id' => 3436,
                    'province_id' => 22,
                    'name' => 'Plan',
                ],
            436 =>
                [
                    'id' => 3437,
                    'province_id' => 22,
                    'name' => 'Poleñino',
                ],
            437 =>
                [
                    'id' => 3438,
                    'province_id' => 22,
                    'name' => 'Pozán de Vero',
                ],
            438 =>
                [
                    'id' => 3439,
                    'province_id' => 22,
                    'name' => 'Puebla de Castro, La',
                ],
            439 =>
                [
                    'id' => 3440,
                    'province_id' => 22,
                    'name' => 'Puente de Montañana',
                ],
            440 =>
                [
                    'id' => 3441,
                    'province_id' => 22,
                    'name' => 'Puente la Reina de Jaca',
                ],
            441 =>
                [
                    'id' => 3442,
                    'province_id' => 22,
                    'name' => 'Puértolas',
                ],
            442 =>
                [
                    'id' => 3443,
                    'province_id' => 22,
                    'name' => 'Pueyo de Araguás, El',
                ],
            443 =>
                [
                    'id' => 3444,
                    'province_id' => 22,
                    'name' => 'Pueyo de Santa Cruz',
                ],
            444 =>
                [
                    'id' => 3445,
                    'province_id' => 22,
                    'name' => 'Quicena',
                ],
            445 =>
                [
                    'id' => 3446,
                    'province_id' => 22,
                    'name' => 'Robres',
                ],
            446 =>
                [
                    'id' => 3447,
                    'province_id' => 22,
                    'name' => 'Sabiñánigo',
                ],
            447 =>
                [
                    'id' => 3448,
                    'province_id' => 22,
                    'name' => 'Sahún',
                ],
            448 =>
                [
                    'id' => 3449,
                    'province_id' => 22,
                    'name' => 'Salas Altas',
                ],
            449 =>
                [
                    'id' => 3450,
                    'province_id' => 22,
                    'name' => 'Salas Bajas',
                ],
            450 =>
                [
                    'id' => 3451,
                    'province_id' => 22,
                    'name' => 'Salillas',
                ],
            451 =>
                [
                    'id' => 3452,
                    'province_id' => 22,
                    'name' => 'Sallent de Gállego',
                ],
            452 =>
                [
                    'id' => 3453,
                    'province_id' => 22,
                    'name' => 'San Esteban de Litera',
                ],
            453 =>
                [
                    'id' => 3454,
                    'province_id' => 22,
                    'name' => 'San Juan de Plan',
                ],
            454 =>
                [
                    'id' => 3455,
                    'province_id' => 22,
                    'name' => 'San Miguel del Cinca',
                ],
            455 =>
                [
                    'id' => 3456,
                    'province_id' => 22,
                    'name' => 'Sangarrén',
                ],
            456 =>
                [
                    'id' => 3457,
                    'province_id' => 22,
                    'name' => 'Santa Cilia',
                ],
            457 =>
                [
                    'id' => 3458,
                    'province_id' => 22,
                    'name' => 'Santa Cruz de la Serós',
                ],
            458 =>
                [
                    'id' => 3459,
                    'province_id' => 22,
                    'name' => 'Santa María de Dulcis',
                ],
            459 =>
                [
                    'id' => 3460,
                    'province_id' => 22,
                    'name' => 'Santaliestra y San Quílez',
                ],
            460 =>
                [
                    'id' => 3461,
                    'province_id' => 22,
                    'name' => 'Sariñena',
                ],
            461 =>
                [
                    'id' => 3462,
                    'province_id' => 22,
                    'name' => 'Secastilla',
                ],
            462 =>
                [
                    'id' => 3463,
                    'province_id' => 22,
                    'name' => 'Seira',
                ],
            463 =>
                [
                    'id' => 3464,
                    'province_id' => 22,
                    'name' => 'Sena',
                ],
            464 =>
                [
                    'id' => 3465,
                    'province_id' => 22,
                    'name' => 'Senés de Alcubierre',
                ],
            465 =>
                [
                    'id' => 3466,
                    'province_id' => 22,
                    'name' => 'Sesa',
                ],
            466 =>
                [
                    'id' => 3467,
                    'province_id' => 22,
                    'name' => 'Sesué',
                ],
            467 =>
                [
                    'id' => 3468,
                    'province_id' => 22,
                    'name' => 'Siétamo',
                ],
            468 =>
                [
                    'id' => 3469,
                    'province_id' => 22,
                    'name' => 'Sopeira',
                ],
            469 =>
                [
                    'id' => 3470,
                    'province_id' => 22,
                    'name' => 'Sotonera, La',
                ],
            470 =>
                [
                    'id' => 3471,
                    'province_id' => 22,
                    'name' => 'Tamarite de Litera',
                ],
            471 =>
                [
                    'id' => 3472,
                    'province_id' => 22,
                    'name' => 'Tardienta',
                ],
            472 =>
                [
                    'id' => 3473,
                    'province_id' => 22,
                    'name' => 'Tella-Sin',
                ],
            473 =>
                [
                    'id' => 3474,
                    'province_id' => 22,
                    'name' => 'Tierz',
                ],
            474 =>
                [
                    'id' => 3475,
                    'province_id' => 22,
                    'name' => 'Tolva',
                ],
            475 =>
                [
                    'id' => 3476,
                    'province_id' => 22,
                    'name' => 'Torla',
                ],
            476 =>
                [
                    'id' => 3477,
                    'province_id' => 22,
                    'name' => 'Torralba de Aragón',
                ],
            477 =>
                [
                    'id' => 3478,
                    'province_id' => 22,
                    'name' => 'Torre la Ribera',
                ],
            478 =>
                [
                    'id' => 3479,
                    'province_id' => 22,
                    'name' => 'Torrente de Cinca',
                ],
            479 =>
                [
                    'id' => 3480,
                    'province_id' => 22,
                    'name' => 'Torres de Alcanadre',
                ],
            480 =>
                [
                    'id' => 3481,
                    'province_id' => 22,
                    'name' => 'Torres de Barbués',
                ],
            481 =>
                [
                    'id' => 3482,
                    'province_id' => 22,
                    'name' => 'Tramaced',
                ],
            482 =>
                [
                    'id' => 3483,
                    'province_id' => 22,
                    'name' => 'Valfarta',
                ],
            483 =>
                [
                    'id' => 3484,
                    'province_id' => 22,
                    'name' => 'Valle de Bardají',
                ],
            484 =>
                [
                    'id' => 3485,
                    'province_id' => 22,
                    'name' => 'Valle de Hecho',
                ],
            485 =>
                [
                    'id' => 3486,
                    'province_id' => 22,
                    'name' => 'Valle de Lierp',
                ],
            486 =>
                [
                    'id' => 3487,
                    'province_id' => 22,
                    'name' => 'Velilla de Cinca',
                ],
            487 =>
                [
                    'id' => 3488,
                    'province_id' => 22,
                    'name' => 'Vencillón',
                ],
            488 =>
                [
                    'id' => 3489,
                    'province_id' => 22,
                    'name' => 'Veracruz',
                ],
            489 =>
                [
                    'id' => 3490,
                    'province_id' => 22,
                    'name' => 'Viacamp y Litera',
                ],
            490 =>
                [
                    'id' => 3491,
                    'province_id' => 22,
                    'name' => 'Vicién',
                ],
            491 =>
                [
                    'id' => 3492,
                    'province_id' => 22,
                    'name' => 'Villanova',
                ],
            492 =>
                [
                    'id' => 3493,
                    'province_id' => 22,
                    'name' => 'Villanúa',
                ],
            493 =>
                [
                    'id' => 3494,
                    'province_id' => 22,
                    'name' => 'Villanueva de Sigena',
                ],
            494 =>
                [
                    'id' => 3495,
                    'province_id' => 22,
                    'name' => 'Yebra de Basa',
                ],
            495 =>
                [
                    'id' => 3496,
                    'province_id' => 22,
                    'name' => 'Yésero',
                ],
            496 =>
                [
                    'id' => 3497,
                    'province_id' => 22,
                    'name' => 'Zaidín',
                ],
            497 =>
                [
                    'id' => 3498,
                    'province_id' => 23,
                    'name' => 'Albanchez de Mágina',
                ],
            498 =>
                [
                    'id' => 3499,
                    'province_id' => 23,
                    'name' => 'Alcalá la Real',
                ],
            499 =>
                [
                    'id' => 3500,
                    'province_id' => 23,
                    'name' => 'Alcaudete',
                ],
        ]);
        \DB::table('localities')->insert([
            0 =>
                [
                    'id' => 3501,
                    'province_id' => 23,
                    'name' => 'Aldeaquemada',
                ],
            1 =>
                [
                    'id' => 3502,
                    'province_id' => 23,
                    'name' => 'Andújar',
                ],
            2 =>
                [
                    'id' => 3503,
                    'province_id' => 23,
                    'name' => 'Arjona',
                ],
            3 =>
                [
                    'id' => 3504,
                    'province_id' => 23,
                    'name' => 'Arjonilla',
                ],
            4 =>
                [
                    'id' => 3505,
                    'province_id' => 23,
                    'name' => 'Arquillos',
                ],
            5 =>
                [
                    'id' => 3506,
                    'province_id' => 23,
                    'name' => 'Arroyo del Ojanco',
                ],
            6 =>
                [
                    'id' => 3507,
                    'province_id' => 23,
                    'name' => 'Baeza',
                ],
            7 =>
                [
                    'id' => 3508,
                    'province_id' => 23,
                    'name' => 'Bailén',
                ],
            8 =>
                [
                    'id' => 3509,
                    'province_id' => 23,
                    'name' => 'Baños de la Encina',
                ],
            9 =>
                [
                    'id' => 3510,
                    'province_id' => 23,
                    'name' => 'Beas de Segura',
                ],
            10 =>
                [
                    'id' => 3511,
                    'province_id' => 23,
                    'name' => 'Bedmar y Garcíez',
                ],
            11 =>
                [
                    'id' => 3512,
                    'province_id' => 23,
                    'name' => 'Begíjar',
                ],
            12 =>
                [
                    'id' => 3513,
                    'province_id' => 23,
                    'name' => 'Bélmez de la Moraleda',
                ],
            13 =>
                [
                    'id' => 3514,
                    'province_id' => 23,
                    'name' => 'Benatae',
                ],
            14 =>
                [
                    'id' => 3515,
                    'province_id' => 23,
                    'name' => 'Cabra del Santo Cristo',
                ],
            15 =>
                [
                    'id' => 3516,
                    'province_id' => 23,
                    'name' => 'Cambil',
                ],
            16 =>
                [
                    'id' => 3517,
                    'province_id' => 23,
                    'name' => 'Campillo de Arenas',
                ],
            17 =>
                [
                    'id' => 3518,
                    'province_id' => 23,
                    'name' => 'Canena',
                ],
            18 =>
                [
                    'id' => 3519,
                    'province_id' => 23,
                    'name' => 'Carboneros',
                ],
            19 =>
                [
                    'id' => 3520,
                    'province_id' => 23,
                    'name' => 'Cárcheles',
                ],
            20 =>
                [
                    'id' => 3521,
                    'province_id' => 23,
                    'name' => 'Carolina, La',
                ],
            21 =>
                [
                    'id' => 3522,
                    'province_id' => 23,
                    'name' => 'Castellar',
                ],
            22 =>
                [
                    'id' => 3523,
                    'province_id' => 23,
                    'name' => 'Castillo de Locubín',
                ],
            23 =>
                [
                    'id' => 3524,
                    'province_id' => 23,
                    'name' => 'Cazalilla',
                ],
            24 =>
                [
                    'id' => 3525,
                    'province_id' => 23,
                    'name' => 'Cazorla',
                ],
            25 =>
                [
                    'id' => 3526,
                    'province_id' => 23,
                    'name' => 'Chiclana de Segura',
                ],
            26 =>
                [
                    'id' => 3527,
                    'province_id' => 23,
                    'name' => 'Chilluévar',
                ],
            27 =>
                [
                    'id' => 3528,
                    'province_id' => 23,
                    'name' => 'Escañuela',
                ],
            28 =>
                [
                    'id' => 3529,
                    'province_id' => 23,
                    'name' => 'Espelúy',
                ],
            29 =>
                [
                    'id' => 3530,
                    'province_id' => 23,
                    'name' => 'Frailes',
                ],
            30 =>
                [
                    'id' => 3531,
                    'province_id' => 23,
                    'name' => 'Fuensanta de Martos',
                ],
            31 =>
                [
                    'id' => 3532,
                    'province_id' => 23,
                    'name' => 'Fuerte del Rey',
                ],
            32 =>
                [
                    'id' => 3533,
                    'province_id' => 23,
                    'name' => 'Génave',
                ],
            33 =>
                [
                    'id' => 3534,
                    'province_id' => 23,
                    'name' => 'Guardia de Jaén, La',
                ],
            34 =>
                [
                    'id' => 3535,
                    'province_id' => 23,
                    'name' => 'Guarromán',
                ],
            35 =>
                [
                    'id' => 3536,
                    'province_id' => 23,
                    'name' => 'Higuera de Calatrava',
                ],
            36 =>
                [
                    'id' => 3537,
                    'province_id' => 23,
                    'name' => 'Hinojares',
                ],
            37 =>
                [
                    'id' => 3538,
                    'province_id' => 23,
                    'name' => 'Hornos',
                ],
            38 =>
                [
                    'id' => 3539,
                    'province_id' => 23,
                    'name' => 'Huelma',
                ],
            39 =>
                [
                    'id' => 3540,
                    'province_id' => 23,
                    'name' => 'Huesa',
                ],
            40 =>
                [
                    'id' => 3541,
                    'province_id' => 23,
                    'name' => 'Ibros',
                ],
            41 =>
                [
                    'id' => 3542,
                    'province_id' => 23,
                    'name' => 'Iruela, La',
                ],
            42 =>
                [
                    'id' => 3543,
                    'province_id' => 23,
                    'name' => 'Iznatoraf',
                ],
            43 =>
                [
                    'id' => 3544,
                    'province_id' => 23,
                    'name' => 'Jabalquinto',
                ],
            44 =>
                [
                    'id' => 3545,
                    'province_id' => 23,
                    'name' => 'Jaén',
                ],
            45 =>
                [
                    'id' => 3546,
                    'province_id' => 23,
                    'name' => 'Jamilena',
                ],
            46 =>
                [
                    'id' => 3547,
                    'province_id' => 23,
                    'name' => 'Jimena',
                ],
            47 =>
                [
                    'id' => 3548,
                    'province_id' => 23,
                    'name' => 'Jódar',
                ],
            48 =>
                [
                    'id' => 3549,
                    'province_id' => 23,
                    'name' => 'Lahiguera',
                ],
            49 =>
                [
                    'id' => 3550,
                    'province_id' => 23,
                    'name' => 'Larva',
                ],
            50 =>
                [
                    'id' => 3551,
                    'province_id' => 23,
                    'name' => 'Linares',
                ],
            51 =>
                [
                    'id' => 3552,
                    'province_id' => 23,
                    'name' => 'Lopera',
                ],
            52 =>
                [
                    'id' => 3553,
                    'province_id' => 23,
                    'name' => 'Lupión',
                ],
            53 =>
                [
                    'id' => 3554,
                    'province_id' => 23,
                    'name' => 'Mancha Real',
                ],
            54 =>
                [
                    'id' => 3555,
                    'province_id' => 23,
                    'name' => 'Marmolejo',
                ],
            55 =>
                [
                    'id' => 3556,
                    'province_id' => 23,
                    'name' => 'Martos',
                ],
            56 =>
                [
                    'id' => 3557,
                    'province_id' => 23,
                    'name' => 'Mengíbar',
                ],
            57 =>
                [
                    'id' => 3558,
                    'province_id' => 23,
                    'name' => 'Montizón',
                ],
            58 =>
                [
                    'id' => 3559,
                    'province_id' => 23,
                    'name' => 'Navas de San Juan',
                ],
            59 =>
                [
                    'id' => 3560,
                    'province_id' => 23,
                    'name' => 'Noalejo',
                ],
            60 =>
                [
                    'id' => 3561,
                    'province_id' => 23,
                    'name' => 'Orcera',
                ],
            61 =>
                [
                    'id' => 3562,
                    'province_id' => 23,
                    'name' => 'Peal de Becerro',
                ],
            62 =>
                [
                    'id' => 3563,
                    'province_id' => 23,
                    'name' => 'Pegalajar',
                ],
            63 =>
                [
                    'id' => 3564,
                    'province_id' => 23,
                    'name' => 'Porcuna',
                ],
            64 =>
                [
                    'id' => 3565,
                    'province_id' => 23,
                    'name' => 'Pozo Alcón',
                ],
            65 =>
                [
                    'id' => 3566,
                    'province_id' => 23,
                    'name' => 'Puente de Génave',
                ],
            66 =>
                [
                    'id' => 3567,
                    'province_id' => 23,
                    'name' => 'Puerta de Segura, La',
                ],
            67 =>
                [
                    'id' => 3568,
                    'province_id' => 23,
                    'name' => 'Quesada',
                ],
            68 =>
                [
                    'id' => 3569,
                    'province_id' => 23,
                    'name' => 'Rus',
                ],
            69 =>
                [
                    'id' => 3570,
                    'province_id' => 23,
                    'name' => 'Sabiote',
                ],
            70 =>
                [
                    'id' => 3571,
                    'province_id' => 23,
                    'name' => 'Santa Elena',
                ],
            71 =>
                [
                    'id' => 3572,
                    'province_id' => 23,
                    'name' => 'Santiago de Calatrava',
                ],
            72 =>
                [
                    'id' => 3573,
                    'province_id' => 23,
                    'name' => 'Santiago-Pontones',
                ],
            73 =>
                [
                    'id' => 3574,
                    'province_id' => 23,
                    'name' => 'Santisteban del Puerto',
                ],
            74 =>
                [
                    'id' => 3575,
                    'province_id' => 23,
                    'name' => 'Santo Tomé',
                ],
            75 =>
                [
                    'id' => 3576,
                    'province_id' => 23,
                    'name' => 'Segura de la Sierra',
                ],
            76 =>
                [
                    'id' => 3577,
                    'province_id' => 23,
                    'name' => 'Siles',
                ],
            77 =>
                [
                    'id' => 3578,
                    'province_id' => 23,
                    'name' => 'Sorihuela del Guadalimar',
                ],
            78 =>
                [
                    'id' => 3579,
                    'province_id' => 23,
                    'name' => 'Torre del Campo',
                ],
            79 =>
                [
                    'id' => 3580,
                    'province_id' => 23,
                    'name' => 'Torreblascopedro',
                ],
            80 =>
                [
                    'id' => 3581,
                    'province_id' => 23,
                    'name' => 'Torredonjimeno',
                ],
            81 =>
                [
                    'id' => 3582,
                    'province_id' => 23,
                    'name' => 'Torreperogil',
                ],
            82 =>
                [
                    'id' => 3583,
                    'province_id' => 23,
                    'name' => 'Torres',
                ],
            83 =>
                [
                    'id' => 3584,
                    'province_id' => 23,
                    'name' => 'Torres de Albánchez',
                ],
            84 =>
                [
                    'id' => 3585,
                    'province_id' => 23,
                    'name' => 'Úbeda',
                ],
            85 =>
                [
                    'id' => 3586,
                    'province_id' => 23,
                    'name' => 'Valdepeñas de Jaén',
                ],
            86 =>
                [
                    'id' => 3587,
                    'province_id' => 23,
                    'name' => 'Vilches',
                ],
            87 =>
                [
                    'id' => 3588,
                    'province_id' => 23,
                    'name' => 'Villacarrillo',
                ],
            88 =>
                [
                    'id' => 3589,
                    'province_id' => 23,
                    'name' => 'Villanueva de la Reina',
                ],
            89 =>
                [
                    'id' => 3590,
                    'province_id' => 23,
                    'name' => 'Villanueva del Arzobispo',
                ],
            90 =>
                [
                    'id' => 3591,
                    'province_id' => 23,
                    'name' => 'Villardompardo',
                ],
            91 =>
                [
                    'id' => 3592,
                    'province_id' => 23,
                    'name' => 'Villares, Los',
                ],
            92 =>
                [
                    'id' => 3593,
                    'province_id' => 23,
                    'name' => 'Villarrodrigo',
                ],
            93 =>
                [
                    'id' => 3594,
                    'province_id' => 23,
                    'name' => 'Villatorres',
                ],
            94 =>
                [
                    'id' => 3595,
                    'province_id' => 24,
                    'name' => 'Acebedo',
                ],
            95 =>
                [
                    'id' => 3596,
                    'province_id' => 24,
                    'name' => 'Algadefe',
                ],
            96 =>
                [
                    'id' => 3597,
                    'province_id' => 24,
                    'name' => 'Alija del Infantado',
                ],
            97 =>
                [
                    'id' => 3598,
                    'province_id' => 24,
                    'name' => 'Almanza',
                ],
            98 =>
                [
                    'id' => 3599,
                    'province_id' => 24,
                    'name' => 'Antigua, La',
                ],
            99 =>
                [
                    'id' => 3600,
                    'province_id' => 24,
                    'name' => 'Ardón',
                ],
            100 =>
                [
                    'id' => 3601,
                    'province_id' => 24,
                    'name' => 'Arganza',
                ],
            101 =>
                [
                    'id' => 3602,
                    'province_id' => 24,
                    'name' => 'Astorga',
                ],
            102 =>
                [
                    'id' => 3603,
                    'province_id' => 24,
                    'name' => 'Balboa',
                ],
            103 =>
                [
                    'id' => 3604,
                    'province_id' => 24,
                    'name' => 'Bañeza, La',
                ],
            104 =>
                [
                    'id' => 3605,
                    'province_id' => 24,
                    'name' => 'Barjas',
                ],
            105 =>
                [
                    'id' => 3606,
                    'province_id' => 24,
                    'name' => 'Barrios de Luna, Los',
                ],
            106 =>
                [
                    'id' => 3607,
                    'province_id' => 24,
                    'name' => 'Bembibre',
                ],
            107 =>
                [
                    'id' => 3608,
                    'province_id' => 24,
                    'name' => 'Benavides',
                ],
            108 =>
                [
                    'id' => 3609,
                    'province_id' => 24,
                    'name' => 'Benuza',
                ],
            109 =>
                [
                    'id' => 3610,
                    'province_id' => 24,
                    'name' => 'Bercianos del Páramo',
                ],
            110 =>
                [
                    'id' => 3611,
                    'province_id' => 24,
                    'name' => 'Bercianos del Real Camino',
                ],
            111 =>
                [
                    'id' => 3612,
                    'province_id' => 24,
                    'name' => 'Berlanga del Bierzo',
                ],
            112 =>
                [
                    'id' => 3613,
                    'province_id' => 24,
                    'name' => 'Boca de Huérgano',
                ],
            113 =>
                [
                    'id' => 3614,
                    'province_id' => 24,
                    'name' => 'Boñar',
                ],
            114 =>
                [
                    'id' => 3615,
                    'province_id' => 24,
                    'name' => 'Borrenes',
                ],
            115 =>
                [
                    'id' => 3616,
                    'province_id' => 24,
                    'name' => 'Brazuelo',
                ],
            116 =>
                [
                    'id' => 3617,
                    'province_id' => 24,
                    'name' => 'Burgo Ranero, El',
                ],
            117 =>
                [
                    'id' => 3618,
                    'province_id' => 24,
                    'name' => 'Burón',
                ],
            118 =>
                [
                    'id' => 3619,
                    'province_id' => 24,
                    'name' => 'Bustillo del Páramo',
                ],
            119 =>
                [
                    'id' => 3620,
                    'province_id' => 24,
                    'name' => 'Cabañas Raras',
                ],
            120 =>
                [
                    'id' => 3621,
                    'province_id' => 24,
                    'name' => 'Cabreros del Río',
                ],
            121 =>
                [
                    'id' => 3622,
                    'province_id' => 24,
                    'name' => 'Cabrillanes',
                ],
            122 =>
                [
                    'id' => 3623,
                    'province_id' => 24,
                    'name' => 'Cacabelos',
                ],
            123 =>
                [
                    'id' => 3624,
                    'province_id' => 24,
                    'name' => 'Calzada del Coto',
                ],
            124 =>
                [
                    'id' => 3625,
                    'province_id' => 24,
                    'name' => 'Campazas',
                ],
            125 =>
                [
                    'id' => 3626,
                    'province_id' => 24,
                    'name' => 'Campo de Villavidel',
                ],
            126 =>
                [
                    'id' => 3627,
                    'province_id' => 24,
                    'name' => 'Camponaraya',
                ],
            127 =>
                [
                    'id' => 3628,
                    'province_id' => 24,
                    'name' => 'Candín',
                ],
            128 =>
                [
                    'id' => 3629,
                    'province_id' => 24,
                    'name' => 'Cármenes',
                ],
            129 =>
                [
                    'id' => 3630,
                    'province_id' => 24,
                    'name' => 'Carracedelo',
                ],
            130 =>
                [
                    'id' => 3631,
                    'province_id' => 24,
                    'name' => 'Carrizo',
                ],
            131 =>
                [
                    'id' => 3632,
                    'province_id' => 24,
                    'name' => 'Carrocera',
                ],
            132 =>
                [
                    'id' => 3633,
                    'province_id' => 24,
                    'name' => 'Carucedo',
                ],
            133 =>
                [
                    'id' => 3634,
                    'province_id' => 24,
                    'name' => 'Castilfalé',
                ],
            134 =>
                [
                    'id' => 3635,
                    'province_id' => 24,
                    'name' => 'Castrillo de Cabrera',
                ],
            135 =>
                [
                    'id' => 3636,
                    'province_id' => 24,
                    'name' => 'Castrillo de la Valduerna',
                ],
            136 =>
                [
                    'id' => 3637,
                    'province_id' => 24,
                    'name' => 'Castrocalbón',
                ],
            137 =>
                [
                    'id' => 3638,
                    'province_id' => 24,
                    'name' => 'Castrocontrigo',
                ],
            138 =>
                [
                    'id' => 3639,
                    'province_id' => 24,
                    'name' => 'Castropodame',
                ],
            139 =>
                [
                    'id' => 3640,
                    'province_id' => 24,
                    'name' => 'Castrotierra de Valmadrigal',
                ],
            140 =>
                [
                    'id' => 3641,
                    'province_id' => 24,
                    'name' => 'Cea',
                ],
            141 =>
                [
                    'id' => 3642,
                    'province_id' => 24,
                    'name' => 'Cebanico',
                ],
            142 =>
                [
                    'id' => 3643,
                    'province_id' => 24,
                    'name' => 'Cebrones del Río',
                ],
            143 =>
                [
                    'id' => 3644,
                    'province_id' => 24,
                    'name' => 'Chozas de Abajo',
                ],
            144 =>
                [
                    'id' => 3645,
                    'province_id' => 24,
                    'name' => 'Cimanes de la Vega',
                ],
            145 =>
                [
                    'id' => 3646,
                    'province_id' => 24,
                    'name' => 'Cimanes del Tejar',
                ],
            146 =>
                [
                    'id' => 3647,
                    'province_id' => 24,
                    'name' => 'Cistierna',
                ],
            147 =>
                [
                    'id' => 3648,
                    'province_id' => 24,
                    'name' => 'Congosto',
                ],
            148 =>
                [
                    'id' => 3649,
                    'province_id' => 24,
                    'name' => 'Corbillos de los Oteros',
                ],
            149 =>
                [
                    'id' => 3650,
                    'province_id' => 24,
                    'name' => 'Corullón',
                ],
            150 =>
                [
                    'id' => 3651,
                    'province_id' => 24,
                    'name' => 'Crémenes',
                ],
            151 =>
                [
                    'id' => 3652,
                    'province_id' => 24,
                    'name' => 'Cuadros',
                ],
            152 =>
                [
                    'id' => 3653,
                    'province_id' => 24,
                    'name' => 'Cubillas de los Oteros',
                ],
            153 =>
                [
                    'id' => 3654,
                    'province_id' => 24,
                    'name' => 'Cubillas de Rueda',
                ],
            154 =>
                [
                    'id' => 3655,
                    'province_id' => 24,
                    'name' => 'Cubillos del Sil',
                ],
            155 =>
                [
                    'id' => 3656,
                    'province_id' => 24,
                    'name' => 'Destriana',
                ],
            156 =>
                [
                    'id' => 3657,
                    'province_id' => 24,
                    'name' => 'Encinedo',
                ],
            157 =>
                [
                    'id' => 3658,
                    'province_id' => 24,
                    'name' => 'Ercina, La',
                ],
            158 =>
                [
                    'id' => 3659,
                    'province_id' => 24,
                    'name' => 'Escobar de Campos',
                ],
            159 =>
                [
                    'id' => 3660,
                    'province_id' => 24,
                    'name' => 'Fabero',
                ],
            160 =>
                [
                    'id' => 3661,
                    'province_id' => 24,
                    'name' => 'Folgoso de la Ribera',
                ],
            161 =>
                [
                    'id' => 3662,
                    'province_id' => 24,
                    'name' => 'Fresno de la Vega',
                ],
            162 =>
                [
                    'id' => 3663,
                    'province_id' => 24,
                    'name' => 'Fuentes de Carbajal',
                ],
            163 =>
                [
                    'id' => 3664,
                    'province_id' => 24,
                    'name' => 'Garrafe de Torío',
                ],
            164 =>
                [
                    'id' => 3665,
                    'province_id' => 24,
                    'name' => 'Gordaliza del Pino',
                ],
            165 =>
                [
                    'id' => 3666,
                    'province_id' => 24,
                    'name' => 'Gordoncillo',
                ],
            166 =>
                [
                    'id' => 3667,
                    'province_id' => 24,
                    'name' => 'Gradefes',
                ],
            167 =>
                [
                    'id' => 3668,
                    'province_id' => 24,
                    'name' => 'Grajal de Campos',
                ],
            168 =>
                [
                    'id' => 3669,
                    'province_id' => 24,
                    'name' => 'Gusendos de los Oteros',
                ],
            169 =>
                [
                    'id' => 3670,
                    'province_id' => 24,
                    'name' => 'Hospital de Órbigo',
                ],
            170 =>
                [
                    'id' => 3671,
                    'province_id' => 24,
                    'name' => 'Igüeña',
                ],
            171 =>
                [
                    'id' => 3672,
                    'province_id' => 24,
                    'name' => 'Izagre',
                ],
            172 =>
                [
                    'id' => 3673,
                    'province_id' => 24,
                    'name' => 'Joarilla de las Matas',
                ],
            173 =>
                [
                    'id' => 3674,
                    'province_id' => 24,
                    'name' => 'Laguna Dalga',
                ],
            174 =>
                [
                    'id' => 3675,
                    'province_id' => 24,
                    'name' => 'Laguna de Negrillos',
                ],
            175 =>
                [
                    'id' => 3676,
                    'province_id' => 24,
                    'name' => 'León',
                ],
            176 =>
                [
                    'id' => 3677,
                    'province_id' => 24,
                    'name' => 'Llamas de la Ribera',
                ],
            177 =>
                [
                    'id' => 3678,
                    'province_id' => 24,
                    'name' => 'Lucillo',
                ],
            178 =>
                [
                    'id' => 3679,
                    'province_id' => 24,
                    'name' => 'Luyego',
                ],
            179 =>
                [
                    'id' => 3680,
                    'province_id' => 24,
                    'name' => 'Magaz de Cepeda',
                ],
            180 =>
                [
                    'id' => 3681,
                    'province_id' => 24,
                    'name' => 'Mansilla de las Mulas',
                ],
            181 =>
                [
                    'id' => 3682,
                    'province_id' => 24,
                    'name' => 'Mansilla Mayor',
                ],
            182 =>
                [
                    'id' => 3683,
                    'province_id' => 24,
                    'name' => 'Maraña',
                ],
            183 =>
                [
                    'id' => 3684,
                    'province_id' => 24,
                    'name' => 'Matadeón de los Oteros',
                ],
            184 =>
                [
                    'id' => 3685,
                    'province_id' => 24,
                    'name' => 'Matallana de Torío',
                ],
            185 =>
                [
                    'id' => 3686,
                    'province_id' => 24,
                    'name' => 'Matanza',
                ],
            186 =>
                [
                    'id' => 3687,
                    'province_id' => 24,
                    'name' => 'Molinaseca',
                ],
            187 =>
                [
                    'id' => 3688,
                    'province_id' => 24,
                    'name' => 'Murias de Paredes',
                ],
            188 =>
                [
                    'id' => 3689,
                    'province_id' => 24,
                    'name' => 'Noceda del Bierzo',
                ],
            189 =>
                [
                    'id' => 3690,
                    'province_id' => 24,
                    'name' => 'Oencia',
                ],
            190 =>
                [
                    'id' => 3691,
                    'province_id' => 24,
                    'name' => 'Omañas, Las',
                ],
            191 =>
                [
                    'id' => 3692,
                    'province_id' => 24,
                    'name' => 'Onzonilla',
                ],
            192 =>
                [
                    'id' => 3693,
                    'province_id' => 24,
                    'name' => 'Oseja de Sajambre',
                ],
            193 =>
                [
                    'id' => 3694,
                    'province_id' => 24,
                    'name' => 'Pajares de los Oteros',
                ],
            194 =>
                [
                    'id' => 3695,
                    'province_id' => 24,
                    'name' => 'Palacios de la Valduerna',
                ],
            195 =>
                [
                    'id' => 3696,
                    'province_id' => 24,
                    'name' => 'Palacios del Sil',
                ],
            196 =>
                [
                    'id' => 3697,
                    'province_id' => 24,
                    'name' => 'Páramo del Sil',
                ],
            197 =>
                [
                    'id' => 3698,
                    'province_id' => 24,
                    'name' => 'Peranzanes',
                ],
            198 =>
                [
                    'id' => 3699,
                    'province_id' => 24,
                    'name' => 'Pobladura de Pelayo García',
                ],
            199 =>
                [
                    'id' => 3700,
                    'province_id' => 24,
                    'name' => 'Pola de Gordón, La',
                ],
            200 =>
                [
                    'id' => 3701,
                    'province_id' => 24,
                    'name' => 'Ponferrada',
                ],
            201 =>
                [
                    'id' => 3702,
                    'province_id' => 24,
                    'name' => 'Posada de Valdeón',
                ],
            202 =>
                [
                    'id' => 3703,
                    'province_id' => 24,
                    'name' => 'Pozuelo del Páramo',
                ],
            203 =>
                [
                    'id' => 3704,
                    'province_id' => 24,
                    'name' => 'Prado de la Guzpeña',
                ],
            204 =>
                [
                    'id' => 3705,
                    'province_id' => 24,
                    'name' => 'Priaranza del Bierzo',
                ],
            205 =>
                [
                    'id' => 3706,
                    'province_id' => 24,
                    'name' => 'Prioro',
                ],
            206 =>
                [
                    'id' => 3707,
                    'province_id' => 24,
                    'name' => 'Puebla de Lillo',
                ],
            207 =>
                [
                    'id' => 3708,
                    'province_id' => 24,
                    'name' => 'Puente de Domingo Flórez',
                ],
            208 =>
                [
                    'id' => 3709,
                    'province_id' => 24,
                    'name' => 'Quintana del Castillo',
                ],
            209 =>
                [
                    'id' => 3710,
                    'province_id' => 24,
                    'name' => 'Quintana del Marco',
                ],
            210 =>
                [
                    'id' => 3711,
                    'province_id' => 24,
                    'name' => 'Quintana y Congosto',
                ],
            211 =>
                [
                    'id' => 3712,
                    'province_id' => 24,
                    'name' => 'Regueras de Arriba',
                ],
            212 =>
                [
                    'id' => 3713,
                    'province_id' => 24,
                    'name' => 'Reyero',
                ],
            213 =>
                [
                    'id' => 3714,
                    'province_id' => 24,
                    'name' => 'Riaño',
                ],
            214 =>
                [
                    'id' => 3715,
                    'province_id' => 24,
                    'name' => 'Riego de la Vega',
                ],
            215 =>
                [
                    'id' => 3716,
                    'province_id' => 24,
                    'name' => 'Riello',
                ],
            216 =>
                [
                    'id' => 3717,
                    'province_id' => 24,
                    'name' => 'Rioseco de Tapia',
                ],
            217 =>
                [
                    'id' => 3718,
                    'province_id' => 24,
                    'name' => 'Robla, La',
                ],
            218 =>
                [
                    'id' => 3719,
                    'province_id' => 24,
                    'name' => 'Roperuelos del Páramo',
                ],
            219 =>
                [
                    'id' => 3720,
                    'province_id' => 24,
                    'name' => 'Sabero',
                ],
            220 =>
                [
                    'id' => 3721,
                    'province_id' => 24,
                    'name' => 'Sahagún',
                ],
            221 =>
                [
                    'id' => 3722,
                    'province_id' => 24,
                    'name' => 'San Adrián del Valle',
                ],
            222 =>
                [
                    'id' => 3723,
                    'province_id' => 24,
                    'name' => 'San Andrés del Rabanedo',
                ],
            223 =>
                [
                    'id' => 3724,
                    'province_id' => 24,
                    'name' => 'San Cristóbal de la Polantera',
                ],
            224 =>
                [
                    'id' => 3725,
                    'province_id' => 24,
                    'name' => 'San Emiliano',
                ],
            225 =>
                [
                    'id' => 3726,
                    'province_id' => 24,
                    'name' => 'San Esteban de Nogales',
                ],
            226 =>
                [
                    'id' => 3727,
                    'province_id' => 24,
                    'name' => 'San Justo de la Vega',
                ],
            227 =>
                [
                    'id' => 3728,
                    'province_id' => 24,
                    'name' => 'San Millán de los Caballeros',
                ],
            228 =>
                [
                    'id' => 3729,
                    'province_id' => 24,
                    'name' => 'San Pedro Bercianos',
                ],
            229 =>
                [
                    'id' => 3730,
                    'province_id' => 24,
                    'name' => 'Sancedo',
                ],
            230 =>
                [
                    'id' => 3731,
                    'province_id' => 24,
                    'name' => 'Santa Colomba de Curueño',
                ],
            231 =>
                [
                    'id' => 3732,
                    'province_id' => 24,
                    'name' => 'Santa Colomba de Somoza',
                ],
            232 =>
                [
                    'id' => 3733,
                    'province_id' => 24,
                    'name' => 'Santa Cristina de Valmadrigal',
                ],
            233 =>
                [
                    'id' => 3734,
                    'province_id' => 24,
                    'name' => 'Santa Elena de Jamuz',
                ],
            234 =>
                [
                    'id' => 3735,
                    'province_id' => 24,
                    'name' => 'Santa María de la Isla',
                ],
            235 =>
                [
                    'id' => 3736,
                    'province_id' => 24,
                    'name' => 'Santa María de Ordás',
                ],
            236 =>
                [
                    'id' => 3737,
                    'province_id' => 24,
                    'name' => 'Santa María del Monte de Cea',
                ],
            237 =>
                [
                    'id' => 3738,
                    'province_id' => 24,
                    'name' => 'Santa María del Páramo',
                ],
            238 =>
                [
                    'id' => 3739,
                    'province_id' => 24,
                    'name' => 'Santa Marina del Rey',
                ],
            239 =>
                [
                    'id' => 3740,
                    'province_id' => 24,
                    'name' => 'Santas Martas',
                ],
            240 =>
                [
                    'id' => 3741,
                    'province_id' => 24,
                    'name' => 'Santiago Millas',
                ],
            241 =>
                [
                    'id' => 3742,
                    'province_id' => 24,
                    'name' => 'Santovenia de la Valdoncina',
                ],
            242 =>
                [
                    'id' => 3743,
                    'province_id' => 24,
                    'name' => 'Sariegos',
                ],
            243 =>
                [
                    'id' => 3744,
                    'province_id' => 24,
                    'name' => 'Sena de Luna',
                ],
            244 =>
                [
                    'id' => 3745,
                    'province_id' => 24,
                    'name' => 'Sobrado',
                ],
            245 =>
                [
                    'id' => 3746,
                    'province_id' => 24,
                    'name' => 'Soto de la Vega',
                ],
            246 =>
                [
                    'id' => 3747,
                    'province_id' => 24,
                    'name' => 'Soto y Amío',
                ],
            247 =>
                [
                    'id' => 3748,
                    'province_id' => 24,
                    'name' => 'Toral de los Guzmanes',
                ],
            248 =>
                [
                    'id' => 3749,
                    'province_id' => 24,
                    'name' => 'Toral de los Vados',
                ],
            249 =>
                [
                    'id' => 3750,
                    'province_id' => 24,
                    'name' => 'Toreno',
                ],
            250 =>
                [
                    'id' => 3751,
                    'province_id' => 24,
                    'name' => 'Torre del Bierzo',
                ],
            251 =>
                [
                    'id' => 3752,
                    'province_id' => 24,
                    'name' => 'Trabadelo',
                ],
            252 =>
                [
                    'id' => 3753,
                    'province_id' => 24,
                    'name' => 'Truchas',
                ],
            253 =>
                [
                    'id' => 3754,
                    'province_id' => 24,
                    'name' => 'Turcia',
                ],
            254 =>
                [
                    'id' => 3755,
                    'province_id' => 24,
                    'name' => 'Urdiales del Páramo',
                ],
            255 =>
                [
                    'id' => 3756,
                    'province_id' => 24,
                    'name' => 'Val de San Lorenzo',
                ],
            256 =>
                [
                    'id' => 3757,
                    'province_id' => 24,
                    'name' => 'Valdefresno',
                ],
            257 =>
                [
                    'id' => 3758,
                    'province_id' => 24,
                    'name' => 'Valdefuentes del Páramo',
                ],
            258 =>
                [
                    'id' => 3759,
                    'province_id' => 24,
                    'name' => 'Valdelugueros',
                ],
            259 =>
                [
                    'id' => 3760,
                    'province_id' => 24,
                    'name' => 'Valdemora',
                ],
            260 =>
                [
                    'id' => 3761,
                    'province_id' => 24,
                    'name' => 'Valdepiélago',
                ],
            261 =>
                [
                    'id' => 3762,
                    'province_id' => 24,
                    'name' => 'Valdepolo',
                ],
            262 =>
                [
                    'id' => 3763,
                    'province_id' => 24,
                    'name' => 'Valderas',
                ],
            263 =>
                [
                    'id' => 3764,
                    'province_id' => 24,
                    'name' => 'Valderrey',
                ],
            264 =>
                [
                    'id' => 3765,
                    'province_id' => 24,
                    'name' => 'Valderrueda',
                ],
            265 =>
                [
                    'id' => 3766,
                    'province_id' => 24,
                    'name' => 'Valdesamario',
                ],
            266 =>
                [
                    'id' => 3767,
                    'province_id' => 24,
                    'name' => 'Valdevimbre',
                ],
            267 =>
                [
                    'id' => 3768,
                    'province_id' => 24,
                    'name' => 'Valencia de Don Juan',
                ],
            268 =>
                [
                    'id' => 3769,
                    'province_id' => 24,
                    'name' => 'Vallecillo',
                ],
            269 =>
                [
                    'id' => 3770,
                    'province_id' => 24,
                    'name' => 'Valverde de la Virgen',
                ],
            270 =>
                [
                    'id' => 3771,
                    'province_id' => 24,
                    'name' => 'Valverde-Enrique',
                ],
            271 =>
                [
                    'id' => 3772,
                    'province_id' => 24,
                    'name' => 'Vecilla, La',
                ],
            272 =>
                [
                    'id' => 3773,
                    'province_id' => 24,
                    'name' => 'Vega de Espinareda',
                ],
            273 =>
                [
                    'id' => 3774,
                    'province_id' => 24,
                    'name' => 'Vega de Infanzones',
                ],
            274 =>
                [
                    'id' => 3775,
                    'province_id' => 24,
                    'name' => 'Vega de Valcarce',
                ],
            275 =>
                [
                    'id' => 3776,
                    'province_id' => 24,
                    'name' => 'Vegacervera',
                ],
            276 =>
                [
                    'id' => 3777,
                    'province_id' => 24,
                    'name' => 'Vegaquemada',
                ],
            277 =>
                [
                    'id' => 3778,
                    'province_id' => 24,
                    'name' => 'Vegas del Condado',
                ],
            278 =>
                [
                    'id' => 3779,
                    'province_id' => 24,
                    'name' => 'Villablino',
                ],
            279 =>
                [
                    'id' => 3780,
                    'province_id' => 24,
                    'name' => 'Villabraz',
                ],
            280 =>
                [
                    'id' => 3781,
                    'province_id' => 24,
                    'name' => 'Villadangos del Páramo',
                ],
            281 =>
                [
                    'id' => 3782,
                    'province_id' => 24,
                    'name' => 'Villademor de la Vega',
                ],
            282 =>
                [
                    'id' => 3783,
                    'province_id' => 24,
                    'name' => 'Villafranca del Bierzo',
                ],
            283 =>
                [
                    'id' => 3784,
                    'province_id' => 24,
                    'name' => 'Villagatón',
                ],
            284 =>
                [
                    'id' => 3785,
                    'province_id' => 24,
                    'name' => 'Villamandos',
                ],
            285 =>
                [
                    'id' => 3786,
                    'province_id' => 24,
                    'name' => 'Villamanín',
                ],
            286 =>
                [
                    'id' => 3787,
                    'province_id' => 24,
                    'name' => 'Villamañán',
                ],
            287 =>
                [
                    'id' => 3788,
                    'province_id' => 24,
                    'name' => 'Villamartín de Don Sancho',
                ],
            288 =>
                [
                    'id' => 3789,
                    'province_id' => 24,
                    'name' => 'Villamejil',
                ],
            289 =>
                [
                    'id' => 3790,
                    'province_id' => 24,
                    'name' => 'Villamol',
                ],
            290 =>
                [
                    'id' => 3791,
                    'province_id' => 24,
                    'name' => 'Villamontán de la Valduerna',
                ],
            291 =>
                [
                    'id' => 3792,
                    'province_id' => 24,
                    'name' => 'Villamoratiel de las Matas',
                ],
            292 =>
                [
                    'id' => 3793,
                    'province_id' => 24,
                    'name' => 'Villanueva de las Manzanas',
                ],
            293 =>
                [
                    'id' => 3794,
                    'province_id' => 24,
                    'name' => 'Villaobispo de Otero',
                ],
            294 =>
                [
                    'id' => 3795,
                    'province_id' => 24,
                    'name' => 'Villaornate y Castro',
                ],
            295 =>
                [
                    'id' => 3796,
                    'province_id' => 24,
                    'name' => 'Villaquejida',
                ],
            296 =>
                [
                    'id' => 3797,
                    'province_id' => 24,
                    'name' => 'Villaquilambre',
                ],
            297 =>
                [
                    'id' => 3798,
                    'province_id' => 24,
                    'name' => 'Villarejo de Órbigo',
                ],
            298 =>
                [
                    'id' => 3799,
                    'province_id' => 24,
                    'name' => 'Villares de Órbigo',
                ],
            299 =>
                [
                    'id' => 3800,
                    'province_id' => 24,
                    'name' => 'Villasabariego',
                ],
            300 =>
                [
                    'id' => 3801,
                    'province_id' => 24,
                    'name' => 'Villaselán',
                ],
            301 =>
                [
                    'id' => 3802,
                    'province_id' => 24,
                    'name' => 'Villaturiel',
                ],
            302 =>
                [
                    'id' => 3803,
                    'province_id' => 24,
                    'name' => 'Villazala',
                ],
            303 =>
                [
                    'id' => 3804,
                    'province_id' => 24,
                    'name' => 'Villazanzo de Valderaduey',
                ],
            304 =>
                [
                    'id' => 3805,
                    'province_id' => 24,
                    'name' => 'Zotes del Páramo',
                ],
            305 =>
                [
                    'id' => 3806,
                    'province_id' => 25,
                    'name' => 'Abella de la Conca',
                ],
            306 =>
                [
                    'id' => 3807,
                    'province_id' => 25,
                    'name' => 'Àger',
                ],
            307 =>
                [
                    'id' => 3808,
                    'province_id' => 25,
                    'name' => 'Agramunt',
                ],
            308 =>
                [
                    'id' => 3809,
                    'province_id' => 25,
                    'name' => 'Aitona',
                ],
            309 =>
                [
                    'id' => 3810,
                    'province_id' => 25,
                    'name' => 'Alamús, Els',
                ],
            310 =>
                [
                    'id' => 3811,
                    'province_id' => 25,
                    'name' => 'Alàs i Cerc',
                ],
            311 =>
                [
                    'id' => 3812,
                    'province_id' => 25,
                    'name' => 'Albagés, L\'',
                ],
            312 =>
                [
                    'id' => 3813,
                    'province_id' => 25,
                    'name' => 'Albatàrrec',
                ],
            313 =>
                [
                    'id' => 3814,
                    'province_id' => 25,
                    'name' => 'Albesa',
                ],
            314 =>
                [
                    'id' => 3815,
                    'province_id' => 25,
                    'name' => 'Albi, L\'',
                ],
            315 =>
                [
                    'id' => 3816,
                    'province_id' => 25,
                    'name' => 'Alcanó',
                ],
            316 =>
                [
                    'id' => 3817,
                    'province_id' => 25,
                    'name' => 'Alcarràs',
                ],
            317 =>
                [
                    'id' => 3818,
                    'province_id' => 25,
                    'name' => 'Alcoletge',
                ],
            318 =>
                [
                    'id' => 3819,
                    'province_id' => 25,
                    'name' => 'Alfarràs',
                ],
            319 =>
                [
                    'id' => 3820,
                    'province_id' => 25,
                    'name' => 'Alfés',
                ],
            320 =>
                [
                    'id' => 3821,
                    'province_id' => 25,
                    'name' => 'Algerri',
                ],
            321 =>
                [
                    'id' => 3822,
                    'province_id' => 25,
                    'name' => 'Alguaire',
                ],
            322 =>
                [
                    'id' => 3823,
                    'province_id' => 25,
                    'name' => 'Alins',
                ],
            323 =>
                [
                    'id' => 3824,
                    'province_id' => 25,
                    'name' => 'Almacelles',
                ],
            324 =>
                [
                    'id' => 3825,
                    'province_id' => 25,
                    'name' => 'Almatret',
                ],
            325 =>
                [
                    'id' => 3826,
                    'province_id' => 25,
                    'name' => 'Almenar',
                ],
            326 =>
                [
                    'id' => 3827,
                    'province_id' => 25,
                    'name' => 'Alòs de Balaguer',
                ],
            327 =>
                [
                    'id' => 3828,
                    'province_id' => 25,
                    'name' => 'Alpicat',
                ],
            328 =>
                [
                    'id' => 3829,
                    'province_id' => 25,
                    'name' => 'Alt Àneu',
                ],
            329 =>
                [
                    'id' => 3830,
                    'province_id' => 25,
                    'name' => 'Anglesola',
                ],
            330 =>
                [
                    'id' => 3831,
                    'province_id' => 25,
                    'name' => 'Arbeca',
                ],
            331 =>
                [
                    'id' => 3832,
                    'province_id' => 25,
                    'name' => 'Arres',
                ],
            332 =>
                [
                    'id' => 3833,
                    'province_id' => 25,
                    'name' => 'Arsèguel',
                ],
            333 =>
                [
                    'id' => 3834,
                    'province_id' => 25,
                    'name' => 'Artesa de Lleida',
                ],
            334 =>
                [
                    'id' => 3835,
                    'province_id' => 25,
                    'name' => 'Artesa de Segre',
                ],
            335 =>
                [
                    'id' => 3836,
                    'province_id' => 25,
                    'name' => 'Aspa',
                ],
            336 =>
                [
                    'id' => 3837,
                    'province_id' => 25,
                    'name' => 'Avellanes i Santa Linya, Les',
                ],
            337 =>
                [
                    'id' => 3838,
                    'province_id' => 25,
                    'name' => 'Baix Pallars',
                ],
            338 =>
                [
                    'id' => 3839,
                    'province_id' => 25,
                    'name' => 'Balaguer',
                ],
            339 =>
                [
                    'id' => 3840,
                    'province_id' => 25,
                    'name' => 'Barbens',
                ],
            340 =>
                [
                    'id' => 3841,
                    'province_id' => 25,
                    'name' => 'Baronia de Rialb, La',
                ],
            341 =>
                [
                    'id' => 3842,
                    'province_id' => 25,
                    'name' => 'Bassella',
                ],
            342 =>
                [
                    'id' => 3843,
                    'province_id' => 25,
                    'name' => 'Bausen',
                ],
            343 =>
                [
                    'id' => 3844,
                    'province_id' => 25,
                    'name' => 'Belianes',
                ],
            344 =>
                [
                    'id' => 3845,
                    'province_id' => 25,
                    'name' => 'Bellaguarda',
                ],
            345 =>
                [
                    'id' => 3846,
                    'province_id' => 25,
                    'name' => 'Bellcaire d\'Urgell',
                ],
            346 =>
                [
                    'id' => 3847,
                    'province_id' => 25,
                    'name' => 'Bell-lloc d\'Urgell',
                ],
            347 =>
                [
                    'id' => 3848,
                    'province_id' => 25,
                    'name' => 'Bellmunt d\'Urgell',
                ],
            348 =>
                [
                    'id' => 3849,
                    'province_id' => 25,
                    'name' => 'Bellpuig',
                ],
            349 =>
                [
                    'id' => 3850,
                    'province_id' => 25,
                    'name' => 'Bellver de Cerdanya',
                ],
            350 =>
                [
                    'id' => 3851,
                    'province_id' => 25,
                    'name' => 'Bellvís',
                ],
            351 =>
                [
                    'id' => 3852,
                    'province_id' => 25,
                    'name' => 'Benavent de Segrià',
                ],
            352 =>
                [
                    'id' => 3853,
                    'province_id' => 25,
                    'name' => 'Biosca',
                ],
            353 =>
                [
                    'id' => 3854,
                    'province_id' => 25,
                    'name' => 'Bòrdes, Es',
                ],
            354 =>
                [
                    'id' => 3855,
                    'province_id' => 25,
                    'name' => 'Borges Blanques, Les',
                ],
            355 =>
                [
                    'id' => 3856,
                    'province_id' => 25,
                    'name' => 'Bossòst',
                ],
            356 =>
                [
                    'id' => 3857,
                    'province_id' => 25,
                    'name' => 'Bovera',
                ],
            357 =>
                [
                    'id' => 3858,
                    'province_id' => 25,
                    'name' => 'Cabanabona',
                ],
            358 =>
                [
                    'id' => 3859,
                    'province_id' => 25,
                    'name' => 'Cabó',
                ],
            359 =>
                [
                    'id' => 3860,
                    'province_id' => 25,
                    'name' => 'Camarasa',
                ],
            360 =>
                [
                    'id' => 3861,
                    'province_id' => 25,
                    'name' => 'Canejan',
                ],
            361 =>
                [
                    'id' => 3862,
                    'province_id' => 25,
                    'name' => 'Castell de Mur',
                ],
            362 =>
                [
                    'id' => 3863,
                    'province_id' => 25,
                    'name' => 'Castellar de la Ribera',
                ],
            363 =>
                [
                    'id' => 3864,
                    'province_id' => 25,
                    'name' => 'Castelldans',
                ],
            364 =>
                [
                    'id' => 3865,
                    'province_id' => 25,
                    'name' => 'Castellnou de Seana',
                ],
            365 =>
                [
                    'id' => 3866,
                    'province_id' => 25,
                    'name' => 'Castelló de Farfanya',
                ],
            366 =>
                [
                    'id' => 3867,
                    'province_id' => 25,
                    'name' => 'Castellserà',
                ],
            367 =>
                [
                    'id' => 3868,
                    'province_id' => 25,
                    'name' => 'Cava',
                ],
            368 =>
                [
                    'id' => 3869,
                    'province_id' => 25,
                    'name' => 'Cervera',
                ],
            369 =>
                [
                    'id' => 3870,
                    'province_id' => 25,
                    'name' => 'Cervià de les Garrigues',
                ],
            370 =>
                [
                    'id' => 3871,
                    'province_id' => 25,
                    'name' => 'Ciutadilla',
                ],
            371 =>
                [
                    'id' => 3872,
                    'province_id' => 25,
                    'name' => 'Clariana de Cardener',
                ],
            372 =>
                [
                    'id' => 3873,
                    'province_id' => 25,
                    'name' => 'Cogul, El',
                ],
            373 =>
                [
                    'id' => 3874,
                    'province_id' => 25,
                    'name' => 'Coll de Nargó',
                ],
            374 =>
                [
                    'id' => 3875,
                    'province_id' => 25,
                    'name' => 'Coma i la Pedra, La',
                ],
            375 =>
                [
                    'id' => 3876,
                    'province_id' => 25,
                    'name' => 'Conca de Dalt',
                ],
            376 =>
                [
                    'id' => 3877,
                    'province_id' => 25,
                    'name' => 'Corbins',
                ],
            377 =>
                [
                    'id' => 3878,
                    'province_id' => 25,
                    'name' => 'Cubells',
                ],
            378 =>
                [
                    'id' => 3879,
                    'province_id' => 25,
                    'name' => 'Espluga Calba, L\'',
                ],
            379 =>
                [
                    'id' => 3880,
                    'province_id' => 25,
                    'name' => 'Espot',
                ],
            380 =>
                [
                    'id' => 3881,
                    'province_id' => 25,
                    'name' => 'Estamariu',
                ],
            381 =>
                [
                    'id' => 3882,
                    'province_id' => 25,
                    'name' => 'Estaràs',
                ],
            382 =>
                [
                    'id' => 3883,
                    'province_id' => 25,
                    'name' => 'Esterri d\'Àneu',
                ],
            383 =>
                [
                    'id' => 3884,
                    'province_id' => 25,
                    'name' => 'Esterri de Cardós',
                ],
            384 =>
                [
                    'id' => 3885,
                    'province_id' => 25,
                    'name' => 'Farrera',
                ],
            385 =>
                [
                    'id' => 3886,
                    'province_id' => 25,
                    'name' => 'Fígols i Alinyà',
                ],
            386 =>
                [
                    'id' => 3887,
                    'province_id' => 25,
                    'name' => 'Floresta, La',
                ],
            387 =>
                [
                    'id' => 3888,
                    'province_id' => 25,
                    'name' => 'Fondarella',
                ],
            388 =>
                [
                    'id' => 3889,
                    'province_id' => 25,
                    'name' => 'Foradada',
                ],
            389 =>
                [
                    'id' => 3890,
                    'province_id' => 25,
                    'name' => 'Fuliola, La',
                ],
            390 =>
                [
                    'id' => 3891,
                    'province_id' => 25,
                    'name' => 'Fulleda',
                ],
            391 =>
                [
                    'id' => 3892,
                    'province_id' => 25,
                    'name' => 'Gavet de la Conca',
                ],
            392 =>
                [
                    'id' => 3893,
                    'province_id' => 25,
                    'name' => 'Gimenells i el Pla de la Font',
                ],
            393 =>
                [
                    'id' => 3894,
                    'province_id' => 25,
                    'name' => 'Golmés',
                ],
            394 =>
                [
                    'id' => 3895,
                    'province_id' => 25,
                    'name' => 'Gósol',
                ],
            395 =>
                [
                    'id' => 3896,
                    'province_id' => 25,
                    'name' => 'Granadella, La',
                ],
            396 =>
                [
                    'id' => 3897,
                    'province_id' => 25,
                    'name' => 'Granja d\'Escarp, La',
                ],
            397 =>
                [
                    'id' => 3898,
                    'province_id' => 25,
                    'name' => 'Granyanella',
                ],
            398 =>
                [
                    'id' => 3899,
                    'province_id' => 25,
                    'name' => 'Granyena de les Garrigues',
                ],
            399 =>
                [
                    'id' => 3900,
                    'province_id' => 25,
                    'name' => 'Granyena de Segarra',
                ],
            400 =>
                [
                    'id' => 3901,
                    'province_id' => 25,
                    'name' => 'Guimerà',
                ],
            401 =>
                [
                    'id' => 3902,
                    'province_id' => 25,
                    'name' => 'Guingueta d\'Àneu, La',
                ],
            402 =>
                [
                    'id' => 3903,
                    'province_id' => 25,
                    'name' => 'Guissona',
                ],
            403 =>
                [
                    'id' => 3904,
                    'province_id' => 25,
                    'name' => 'Guixers',
                ],
            404 =>
                [
                    'id' => 3905,
                    'province_id' => 25,
                    'name' => 'Isona i Conca Dellà',
                ],
            405 =>
                [
                    'id' => 3906,
                    'province_id' => 25,
                    'name' => 'Ivars de Noguera',
                ],
            406 =>
                [
                    'id' => 3907,
                    'province_id' => 25,
                    'name' => 'Ivars d\'Urgell',
                ],
            407 =>
                [
                    'id' => 3908,
                    'province_id' => 25,
                    'name' => 'Ivorra',
                ],
            408 =>
                [
                    'id' => 3909,
                    'province_id' => 25,
                    'name' => 'Josa i Tuixén',
                ],
            409 =>
                [
                    'id' => 3910,
                    'province_id' => 25,
                    'name' => 'Juncosa',
                ],
            410 =>
                [
                    'id' => 3911,
                    'province_id' => 25,
                    'name' => 'Juneda',
                ],
            411 =>
                [
                    'id' => 3912,
                    'province_id' => 25,
                    'name' => 'Les',
                ],
            412 =>
                [
                    'id' => 3913,
                    'province_id' => 25,
                    'name' => 'Linyola',
                ],
            413 =>
                [
                    'id' => 3914,
                    'province_id' => 25,
                    'name' => 'Lladorre',
                ],
            414 =>
                [
                    'id' => 3915,
                    'province_id' => 25,
                    'name' => 'Lladurs',
                ],
            415 =>
                [
                    'id' => 3916,
                    'province_id' => 25,
                    'name' => 'Llardecans',
                ],
            416 =>
                [
                    'id' => 3917,
                    'province_id' => 25,
                    'name' => 'Llavorsí',
                ],
            417 =>
                [
                    'id' => 3918,
                    'province_id' => 25,
                    'name' => 'Lleida',
                ],
            418 =>
                [
                    'id' => 3919,
                    'province_id' => 25,
                    'name' => 'Lles de Cerdanya',
                ],
            419 =>
                [
                    'id' => 3920,
                    'province_id' => 25,
                    'name' => 'Llimiana',
                ],
            420 =>
                [
                    'id' => 3921,
                    'province_id' => 25,
                    'name' => 'Llobera',
                ],
            421 =>
                [
                    'id' => 3922,
                    'province_id' => 25,
                    'name' => 'Maials',
                ],
            422 =>
                [
                    'id' => 3923,
                    'province_id' => 25,
                    'name' => 'Maldà',
                ],
            423 =>
                [
                    'id' => 3924,
                    'province_id' => 25,
                    'name' => 'Massalcoreig',
                ],
            424 =>
                [
                    'id' => 3925,
                    'province_id' => 25,
                    'name' => 'Massoteres',
                ],
            425 =>
                [
                    'id' => 3926,
                    'province_id' => 25,
                    'name' => 'Menàrguens',
                ],
            426 =>
                [
                    'id' => 3927,
                    'province_id' => 25,
                    'name' => 'Miralcamp',
                ],
            427 =>
                [
                    'id' => 3928,
                    'province_id' => 25,
                    'name' => 'Mollerussa',
                ],
            428 =>
                [
                    'id' => 3929,
                    'province_id' => 25,
                    'name' => 'Molsosa, La',
                ],
            429 =>
                [
                    'id' => 3930,
                    'province_id' => 25,
                    'name' => 'Montellà i Martinet',
                ],
            430 =>
                [
                    'id' => 3931,
                    'province_id' => 25,
                    'name' => 'Montferrer i Castellbò',
                ],
            431 =>
                [
                    'id' => 3932,
                    'province_id' => 25,
                    'name' => 'Montgai',
                ],
            432 =>
                [
                    'id' => 3933,
                    'province_id' => 25,
                    'name' => 'Montoliu de Lleida',
                ],
            433 =>
                [
                    'id' => 3934,
                    'province_id' => 25,
                    'name' => 'Montoliu de Segarra',
                ],
            434 =>
                [
                    'id' => 3935,
                    'province_id' => 25,
                    'name' => 'Montornès de Segarra',
                ],
            435 =>
                [
                    'id' => 3936,
                    'province_id' => 25,
                    'name' => 'Nalec',
                ],
            436 =>
                [
                    'id' => 3937,
                    'province_id' => 25,
                    'name' => 'Naut Aran',
                ],
            437 =>
                [
                    'id' => 3938,
                    'province_id' => 25,
                    'name' => 'Navès',
                ],
            438 =>
                [
                    'id' => 3939,
                    'province_id' => 25,
                    'name' => 'Odèn',
                ],
            439 =>
                [
                    'id' => 3940,
                    'province_id' => 25,
                    'name' => 'Oliana',
                ],
            440 =>
                [
                    'id' => 3941,
                    'province_id' => 25,
                    'name' => 'Oliola',
                ],
            441 =>
                [
                    'id' => 3942,
                    'province_id' => 25,
                    'name' => 'Olius',
                ],
            442 =>
                [
                    'id' => 3943,
                    'province_id' => 25,
                    'name' => 'Oluges, Les',
                ],
            443 =>
                [
                    'id' => 3944,
                    'province_id' => 25,
                    'name' => 'Omellons, Els',
                ],
            444 =>
                [
                    'id' => 3945,
                    'province_id' => 25,
                    'name' => 'Omells de na Gaia, Els',
                ],
            445 =>
                [
                    'id' => 3946,
                    'province_id' => 25,
                    'name' => 'Organyà',
                ],
            446 =>
                [
                    'id' => 3947,
                    'province_id' => 25,
                    'name' => 'Os de Balaguer',
                ],
            447 =>
                [
                    'id' => 3948,
                    'province_id' => 25,
                    'name' => 'Ossó de Sió',
                ],
            448 =>
                [
                    'id' => 3949,
                    'province_id' => 25,
                    'name' => 'Palau d\'Anglesola, El',
                ],
            449 =>
                [
                    'id' => 3950,
                    'province_id' => 25,
                    'name' => 'Penelles',
                ],
            450 =>
                [
                    'id' => 3951,
                    'province_id' => 25,
                    'name' => 'Peramola',
                ],
            451 =>
                [
                    'id' => 3952,
                    'province_id' => 25,
                    'name' => 'Pinell de Solsonès',
                ],
            452 =>
                [
                    'id' => 3953,
                    'province_id' => 25,
                    'name' => 'Pinós',
                ],
            453 =>
                [
                    'id' => 3954,
                    'province_id' => 25,
                    'name' => 'Plans de Sió, Els',
                ],
            454 =>
                [
                    'id' => 3955,
                    'province_id' => 25,
                    'name' => 'Poal, El',
                ],
            455 =>
                [
                    'id' => 3956,
                    'province_id' => 25,
                    'name' => 'Pobla de Cérvoles, La',
                ],
            456 =>
                [
                    'id' => 3957,
                    'province_id' => 25,
                    'name' => 'Pobla de Segur, La',
                ],
            457 =>
                [
                    'id' => 3958,
                    'province_id' => 25,
                    'name' => 'Pont de Bar, El',
                ],
            458 =>
                [
                    'id' => 3959,
                    'province_id' => 25,
                    'name' => 'Pont de Suert, El',
                ],
            459 =>
                [
                    'id' => 3960,
                    'province_id' => 25,
                    'name' => 'Ponts',
                ],
            460 =>
                [
                    'id' => 3961,
                    'province_id' => 25,
                    'name' => 'Portella, La',
                ],
            461 =>
                [
                    'id' => 3962,
                    'province_id' => 25,
                    'name' => 'Prats i Sansor',
                ],
            462 =>
                [
                    'id' => 3963,
                    'province_id' => 25,
                    'name' => 'Preixana',
                ],
            463 =>
                [
                    'id' => 3964,
                    'province_id' => 25,
                    'name' => 'Preixens',
                ],
            464 =>
                [
                    'id' => 3965,
                    'province_id' => 25,
                    'name' => 'Prullans',
                ],
            465 =>
                [
                    'id' => 3966,
                    'province_id' => 25,
                    'name' => 'Puiggròs',
                ],
            466 =>
                [
                    'id' => 3967,
                    'province_id' => 25,
                    'name' => 'Puigverd d\'Agramunt',
                ],
            467 =>
                [
                    'id' => 3968,
                    'province_id' => 25,
                    'name' => 'Puigverd de Lleida',
                ],
            468 =>
                [
                    'id' => 3969,
                    'province_id' => 25,
                    'name' => 'Rialp',
                ],
            469 =>
                [
                    'id' => 3970,
                    'province_id' => 25,
                    'name' => 'Ribera d\'Ondara',
                ],
            470 =>
                [
                    'id' => 3971,
                    'province_id' => 25,
                    'name' => 'Ribera d\'Urgellet',
                ],
            471 =>
                [
                    'id' => 3972,
                    'province_id' => 25,
                    'name' => 'Riner',
                ],
            472 =>
                [
                    'id' => 3973,
                    'province_id' => 25,
                    'name' => 'Riu de Cerdanya',
                ],
            473 =>
                [
                    'id' => 3974,
                    'province_id' => 25,
                    'name' => 'Rosselló',
                ],
            474 =>
                [
                    'id' => 3975,
                    'province_id' => 25,
                    'name' => 'Salàs de Pallars',
                ],
            475 =>
                [
                    'id' => 3976,
                    'province_id' => 25,
                    'name' => 'Sanaüja',
                ],
            476 =>
                [
                    'id' => 3977,
                    'province_id' => 25,
                    'name' => 'Sant Esteve de la Sarga',
                ],
            477 =>
                [
                    'id' => 3978,
                    'province_id' => 25,
                    'name' => 'Sant Guim de Freixenet',
                ],
            478 =>
                [
                    'id' => 3979,
                    'province_id' => 25,
                    'name' => 'Sant Guim de la Plana',
                ],
            479 =>
                [
                    'id' => 3980,
                    'province_id' => 25,
                    'name' => 'Sant Llorenç de Morunys',
                ],
            480 =>
                [
                    'id' => 3981,
                    'province_id' => 25,
                    'name' => 'Sant Martí de Riucorb',
                ],
            481 =>
                [
                    'id' => 3982,
                    'province_id' => 25,
                    'name' => 'Sant Ramon',
                ],
            482 =>
                [
                    'id' => 3983,
                    'province_id' => 25,
                    'name' => 'Sarroca de Bellera',
                ],
            483 =>
                [
                    'id' => 3984,
                    'province_id' => 25,
                    'name' => 'Sarroca de Lleida',
                ],
            484 =>
                [
                    'id' => 3985,
                    'province_id' => 25,
                    'name' => 'Senterada',
                ],
            485 =>
                [
                    'id' => 3986,
                    'province_id' => 25,
                    'name' => 'Sentiu de Sió, La',
                ],
            486 =>
                [
                    'id' => 3987,
                    'province_id' => 25,
                    'name' => 'Seròs',
                ],
            487 =>
                [
                    'id' => 3988,
                    'province_id' => 25,
                    'name' => 'Seu d\'Urgell, La',
                ],
            488 =>
                [
                    'id' => 3989,
                    'province_id' => 25,
                    'name' => 'Sidamon',
                ],
            489 =>
                [
                    'id' => 3990,
                    'province_id' => 25,
                    'name' => 'Soleràs, El',
                ],
            490 =>
                [
                    'id' => 3991,
                    'province_id' => 25,
                    'name' => 'Solsona',
                ],
            491 =>
                [
                    'id' => 3992,
                    'province_id' => 25,
                    'name' => 'Soriguera',
                ],
            492 =>
                [
                    'id' => 3993,
                    'province_id' => 25,
                    'name' => 'Sort',
                ],
            493 =>
                [
                    'id' => 3994,
                    'province_id' => 25,
                    'name' => 'Soses',
                ],
            494 =>
                [
                    'id' => 3995,
                    'province_id' => 25,
                    'name' => 'Sudanell',
                ],
            495 =>
                [
                    'id' => 3996,
                    'province_id' => 25,
                    'name' => 'Sunyer',
                ],
            496 =>
                [
                    'id' => 3997,
                    'province_id' => 25,
                    'name' => 'Talarn',
                ],
            497 =>
                [
                    'id' => 3998,
                    'province_id' => 25,
                    'name' => 'Talavera',
                ],
            498 =>
                [
                    'id' => 3999,
                    'province_id' => 25,
                    'name' => 'Tàrrega',
                ],
            499 =>
                [
                    'id' => 4000,
                    'province_id' => 25,
                    'name' => 'Tarrés',
                ],
        ]);
        \DB::table('localities')->insert([
            0 =>
                [
                    'id' => 4001,
                    'province_id' => 25,
                    'name' => 'Tarroja de Segarra',
                ],
            1 =>
                [
                    'id' => 4002,
                    'province_id' => 25,
                    'name' => 'Térmens',
                ],
            2 =>
                [
                    'id' => 4003,
                    'province_id' => 25,
                    'name' => 'Tírvia',
                ],
            3 =>
                [
                    'id' => 4004,
                    'province_id' => 25,
                    'name' => 'Tiurana',
                ],
            4 =>
                [
                    'id' => 4005,
                    'province_id' => 25,
                    'name' => 'Torà',
                ],
            5 =>
                [
                    'id' => 4006,
                    'province_id' => 25,
                    'name' => 'Torms, Els',
                ],
            6 =>
                [
                    'id' => 4007,
                    'province_id' => 25,
                    'name' => 'Tornabous',
                ],
            7 =>
                [
                    'id' => 4008,
                    'province_id' => 25,
                    'name' => 'Torre de Cabdella, La',
                ],
            8 =>
                [
                    'id' => 4009,
                    'province_id' => 25,
                    'name' => 'Torrebesses',
                ],
            9 =>
                [
                    'id' => 4010,
                    'province_id' => 25,
                    'name' => 'Torrefarrera',
                ],
            10 =>
                [
                    'id' => 4011,
                    'province_id' => 25,
                    'name' => 'Torrefeta i Florejacs',
                ],
            11 =>
                [
                    'id' => 4012,
                    'province_id' => 25,
                    'name' => 'Torregrossa',
                ],
            12 =>
                [
                    'id' => 4013,
                    'province_id' => 25,
                    'name' => 'Torrelameu',
                ],
            13 =>
                [
                    'id' => 4014,
                    'province_id' => 25,
                    'name' => 'Torres de Segre',
                ],
            14 =>
                [
                    'id' => 4015,
                    'province_id' => 25,
                    'name' => 'Torre-serona',
                ],
            15 =>
                [
                    'id' => 4016,
                    'province_id' => 25,
                    'name' => 'Tremp',
                ],
            16 =>
                [
                    'id' => 4017,
                    'province_id' => 25,
                    'name' => 'Vall de Boí, La',
                ],
            17 =>
                [
                    'id' => 4018,
                    'province_id' => 25,
                    'name' => 'Vall de Cardós',
                ],
            18 =>
                [
                    'id' => 4019,
                    'province_id' => 25,
                    'name' => 'Vallbona de les Monges',
                ],
            19 =>
                [
                    'id' => 4020,
                    'province_id' => 25,
                    'name' => 'Vallfogona de Balaguer',
                ],
            20 =>
                [
                    'id' => 4021,
                    'province_id' => 25,
                    'name' => 'Valls d\'Aguilar, Les',
                ],
            21 =>
                [
                    'id' => 4022,
                    'province_id' => 25,
                    'name' => 'Valls de Valira, Les',
                ],
            22 =>
                [
                    'id' => 4023,
                    'province_id' => 25,
                    'name' => 'Vansa i Fórnols, La',
                ],
            23 =>
                [
                    'id' => 4024,
                    'province_id' => 25,
                    'name' => 'Verdú',
                ],
            24 =>
                [
                    'id' => 4025,
                    'province_id' => 25,
                    'name' => 'Vielha e Mijaran',
                ],
            25 =>
                [
                    'id' => 4026,
                    'province_id' => 25,
                    'name' => 'Vilagrassa',
                ],
            26 =>
                [
                    'id' => 4027,
                    'province_id' => 25,
                    'name' => 'Vilaller',
                ],
            27 =>
                [
                    'id' => 4028,
                    'province_id' => 25,
                    'name' => 'Vilamòs',
                ],
            28 =>
                [
                    'id' => 4029,
                    'province_id' => 25,
                    'name' => 'Vilanova de Bellpuig',
                ],
            29 =>
                [
                    'id' => 4030,
                    'province_id' => 25,
                    'name' => 'Vilanova de la Barca',
                ],
            30 =>
                [
                    'id' => 4031,
                    'province_id' => 25,
                    'name' => 'Vilanova de l\'Aguda',
                ],
            31 =>
                [
                    'id' => 4032,
                    'province_id' => 25,
                    'name' => 'Vilanova de Meià',
                ],
            32 =>
                [
                    'id' => 4033,
                    'province_id' => 25,
                    'name' => 'Vilanova de Segrià',
                ],
            33 =>
                [
                    'id' => 4034,
                    'province_id' => 25,
                    'name' => 'Vila-sana',
                ],
            34 =>
                [
                    'id' => 4035,
                    'province_id' => 25,
                    'name' => 'Vilosell, El',
                ],
            35 =>
                [
                    'id' => 4036,
                    'province_id' => 25,
                    'name' => 'Vinaixa',
                ],
            36 =>
                [
                    'id' => 4037,
                    'province_id' => 26,
                    'name' => 'Ábalos',
                ],
            37 =>
                [
                    'id' => 4038,
                    'province_id' => 26,
                    'name' => 'Agoncillo',
                ],
            38 =>
                [
                    'id' => 4039,
                    'province_id' => 26,
                    'name' => 'Aguilar del Río Alhama',
                ],
            39 =>
                [
                    'id' => 4040,
                    'province_id' => 26,
                    'name' => 'Ajamil de Cameros',
                ],
            40 =>
                [
                    'id' => 4041,
                    'province_id' => 26,
                    'name' => 'Albelda de Iregua',
                ],
            41 =>
                [
                    'id' => 4042,
                    'province_id' => 26,
                    'name' => 'Alberite',
                ],
            42 =>
                [
                    'id' => 4043,
                    'province_id' => 26,
                    'name' => 'Alcanadre',
                ],
            43 =>
                [
                    'id' => 4044,
                    'province_id' => 26,
                    'name' => 'Aldeanueva de Ebro',
                ],
            44 =>
                [
                    'id' => 4045,
                    'province_id' => 26,
                    'name' => 'Alesanco',
                ],
            45 =>
                [
                    'id' => 4046,
                    'province_id' => 26,
                    'name' => 'Alesón',
                ],
            46 =>
                [
                    'id' => 4047,
                    'province_id' => 26,
                    'name' => 'Alfaro',
                ],
            47 =>
                [
                    'id' => 4048,
                    'province_id' => 26,
                    'name' => 'Almarza de Cameros',
                ],
            48 =>
                [
                    'id' => 4049,
                    'province_id' => 26,
                    'name' => 'Anguciana',
                ],
            49 =>
                [
                    'id' => 4050,
                    'province_id' => 26,
                    'name' => 'Anguiano',
                ],
            50 =>
                [
                    'id' => 4051,
                    'province_id' => 26,
                    'name' => 'Arenzana de Abajo',
                ],
            51 =>
                [
                    'id' => 4052,
                    'province_id' => 26,
                    'name' => 'Arenzana de Arriba',
                ],
            52 =>
                [
                    'id' => 4053,
                    'province_id' => 26,
                    'name' => 'Arnedillo',
                ],
            53 =>
                [
                    'id' => 4054,
                    'province_id' => 26,
                    'name' => 'Arnedo',
                ],
            54 =>
                [
                    'id' => 4055,
                    'province_id' => 26,
                    'name' => 'Arrúbal',
                ],
            55 =>
                [
                    'id' => 4056,
                    'province_id' => 26,
                    'name' => 'Ausejo',
                ],
            56 =>
                [
                    'id' => 4057,
                    'province_id' => 26,
                    'name' => 'Autol',
                ],
            57 =>
                [
                    'id' => 4058,
                    'province_id' => 26,
                    'name' => 'Azofra',
                ],
            58 =>
                [
                    'id' => 4059,
                    'province_id' => 26,
                    'name' => 'Badarán',
                ],
            59 =>
                [
                    'id' => 4060,
                    'province_id' => 26,
                    'name' => 'Bañares',
                ],
            60 =>
                [
                    'id' => 4061,
                    'province_id' => 26,
                    'name' => 'Baños de Río Tobía',
                ],
            61 =>
                [
                    'id' => 4062,
                    'province_id' => 26,
                    'name' => 'Baños de Rioja',
                ],
            62 =>
                [
                    'id' => 4063,
                    'province_id' => 26,
                    'name' => 'Berceo',
                ],
            63 =>
                [
                    'id' => 4064,
                    'province_id' => 26,
                    'name' => 'Bergasa',
                ],
            64 =>
                [
                    'id' => 4065,
                    'province_id' => 26,
                    'name' => 'Bergasillas Bajera',
                ],
            65 =>
                [
                    'id' => 4066,
                    'province_id' => 26,
                    'name' => 'Bezares',
                ],
            66 =>
                [
                    'id' => 4067,
                    'province_id' => 26,
                    'name' => 'Bobadilla',
                ],
            67 =>
                [
                    'id' => 4068,
                    'province_id' => 26,
                    'name' => 'Brieva de Cameros',
                ],
            68 =>
                [
                    'id' => 4069,
                    'province_id' => 26,
                    'name' => 'Briñas',
                ],
            69 =>
                [
                    'id' => 4070,
                    'province_id' => 26,
                    'name' => 'Briones',
                ],
            70 =>
                [
                    'id' => 4071,
                    'province_id' => 26,
                    'name' => 'Cabezón de Cameros',
                ],
            71 =>
                [
                    'id' => 4072,
                    'province_id' => 26,
                    'name' => 'Calahorra',
                ],
            72 =>
                [
                    'id' => 4073,
                    'province_id' => 26,
                    'name' => 'Camprovín',
                ],
            73 =>
                [
                    'id' => 4074,
                    'province_id' => 26,
                    'name' => 'Canales de la Sierra',
                ],
            74 =>
                [
                    'id' => 4075,
                    'province_id' => 26,
                    'name' => 'Canillas de Río Tuerto',
                ],
            75 =>
                [
                    'id' => 4076,
                    'province_id' => 26,
                    'name' => 'Cañas',
                ],
            76 =>
                [
                    'id' => 4077,
                    'province_id' => 26,
                    'name' => 'Cárdenas',
                ],
            77 =>
                [
                    'id' => 4078,
                    'province_id' => 26,
                    'name' => 'Casalarreina',
                ],
            78 =>
                [
                    'id' => 4079,
                    'province_id' => 26,
                    'name' => 'Castañares de Rioja',
                ],
            79 =>
                [
                    'id' => 4080,
                    'province_id' => 26,
                    'name' => 'Castroviejo',
                ],
            80 =>
                [
                    'id' => 4081,
                    'province_id' => 26,
                    'name' => 'Cellorigo',
                ],
            81 =>
                [
                    'id' => 4082,
                    'province_id' => 26,
                    'name' => 'Cenicero',
                ],
            82 =>
                [
                    'id' => 4083,
                    'province_id' => 26,
                    'name' => 'Cervera del Río Alhama',
                ],
            83 =>
                [
                    'id' => 4084,
                    'province_id' => 26,
                    'name' => 'Cidamón',
                ],
            84 =>
                [
                    'id' => 4085,
                    'province_id' => 26,
                    'name' => 'Cihuri',
                ],
            85 =>
                [
                    'id' => 4086,
                    'province_id' => 26,
                    'name' => 'Cirueña',
                ],
            86 =>
                [
                    'id' => 4087,
                    'province_id' => 26,
                    'name' => 'Clavijo',
                ],
            87 =>
                [
                    'id' => 4088,
                    'province_id' => 26,
                    'name' => 'Cordovín',
                ],
            88 =>
                [
                    'id' => 4089,
                    'province_id' => 26,
                    'name' => 'Corera',
                ],
            89 =>
                [
                    'id' => 4090,
                    'province_id' => 26,
                    'name' => 'Cornago',
                ],
            90 =>
                [
                    'id' => 4091,
                    'province_id' => 26,
                    'name' => 'Corporales',
                ],
            91 =>
                [
                    'id' => 4092,
                    'province_id' => 26,
                    'name' => 'Cuzcurrita de Río Tirón',
                ],
            92 =>
                [
                    'id' => 4093,
                    'province_id' => 26,
                    'name' => 'Daroca de Rioja',
                ],
            93 =>
                [
                    'id' => 4094,
                    'province_id' => 26,
                    'name' => 'Enciso',
                ],
            94 =>
                [
                    'id' => 4095,
                    'province_id' => 26,
                    'name' => 'Entrena',
                ],
            95 =>
                [
                    'id' => 4096,
                    'province_id' => 26,
                    'name' => 'Estollo',
                ],
            96 =>
                [
                    'id' => 4097,
                    'province_id' => 26,
                    'name' => 'Ezcaray',
                ],
            97 =>
                [
                    'id' => 4098,
                    'province_id' => 26,
                    'name' => 'Foncea',
                ],
            98 =>
                [
                    'id' => 4099,
                    'province_id' => 26,
                    'name' => 'Fonzaleche',
                ],
            99 =>
                [
                    'id' => 4100,
                    'province_id' => 26,
                    'name' => 'Fuenmayor',
                ],
            100 =>
                [
                    'id' => 4101,
                    'province_id' => 26,
                    'name' => 'Galbárruli',
                ],
            101 =>
                [
                    'id' => 4102,
                    'province_id' => 26,
                    'name' => 'Galilea',
                ],
            102 =>
                [
                    'id' => 4103,
                    'province_id' => 26,
                    'name' => 'Gallinero de Cameros',
                ],
            103 =>
                [
                    'id' => 4104,
                    'province_id' => 26,
                    'name' => 'Gimileo',
                ],
            104 =>
                [
                    'id' => 4105,
                    'province_id' => 26,
                    'name' => 'Grañón',
                ],
            105 =>
                [
                    'id' => 4106,
                    'province_id' => 26,
                    'name' => 'Grávalos',
                ],
            106 =>
                [
                    'id' => 4107,
                    'province_id' => 26,
                    'name' => 'Haro',
                ],
            107 =>
                [
                    'id' => 4108,
                    'province_id' => 26,
                    'name' => 'Herce',
                ],
            108 =>
                [
                    'id' => 4109,
                    'province_id' => 26,
                    'name' => 'Herramélluri',
                ],
            109 =>
                [
                    'id' => 4110,
                    'province_id' => 26,
                    'name' => 'Hervías',
                ],
            110 =>
                [
                    'id' => 4111,
                    'province_id' => 26,
                    'name' => 'Hormilla',
                ],
            111 =>
                [
                    'id' => 4112,
                    'province_id' => 26,
                    'name' => 'Hormilleja',
                ],
            112 =>
                [
                    'id' => 4113,
                    'province_id' => 26,
                    'name' => 'Hornillos de Cameros',
                ],
            113 =>
                [
                    'id' => 4114,
                    'province_id' => 26,
                    'name' => 'Hornos de Moncalvillo',
                ],
            114 =>
                [
                    'id' => 4115,
                    'province_id' => 26,
                    'name' => 'Huércanos',
                ],
            115 =>
                [
                    'id' => 4116,
                    'province_id' => 26,
                    'name' => 'Igea',
                ],
            116 =>
                [
                    'id' => 4117,
                    'province_id' => 26,
                    'name' => 'Jalón de Cameros',
                ],
            117 =>
                [
                    'id' => 4118,
                    'province_id' => 26,
                    'name' => 'Laguna de Cameros',
                ],
            118 =>
                [
                    'id' => 4119,
                    'province_id' => 26,
                    'name' => 'Lagunilla del Jubera',
                ],
            119 =>
                [
                    'id' => 4120,
                    'province_id' => 26,
                    'name' => 'Lardero',
                ],
            120 =>
                [
                    'id' => 4121,
                    'province_id' => 26,
                    'name' => 'Ledesma de la Cogolla',
                ],
            121 =>
                [
                    'id' => 4122,
                    'province_id' => 26,
                    'name' => 'Leiva',
                ],
            122 =>
                [
                    'id' => 4123,
                    'province_id' => 26,
                    'name' => 'Leza de Río Leza',
                ],
            123 =>
                [
                    'id' => 4124,
                    'province_id' => 26,
                    'name' => 'Logroño',
                ],
            124 =>
                [
                    'id' => 4125,
                    'province_id' => 26,
                    'name' => 'Lumbreras',
                ],
            125 =>
                [
                    'id' => 4126,
                    'province_id' => 26,
                    'name' => 'Manjarrés',
                ],
            126 =>
                [
                    'id' => 4127,
                    'province_id' => 26,
                    'name' => 'Mansilla de la Sierra',
                ],
            127 =>
                [
                    'id' => 4128,
                    'province_id' => 26,
                    'name' => 'Manzanares de Rioja',
                ],
            128 =>
                [
                    'id' => 4129,
                    'province_id' => 26,
                    'name' => 'Matute',
                ],
            129 =>
                [
                    'id' => 4130,
                    'province_id' => 26,
                    'name' => 'Medrano',
                ],
            130 =>
                [
                    'id' => 4131,
                    'province_id' => 26,
                    'name' => 'Munilla',
                ],
            131 =>
                [
                    'id' => 4132,
                    'province_id' => 26,
                    'name' => 'Murillo de Río Leza',
                ],
            132 =>
                [
                    'id' => 4133,
                    'province_id' => 26,
                    'name' => 'Muro de Aguas',
                ],
            133 =>
                [
                    'id' => 4134,
                    'province_id' => 26,
                    'name' => 'Muro en Cameros',
                ],
            134 =>
                [
                    'id' => 4135,
                    'province_id' => 26,
                    'name' => 'Nájera',
                ],
            135 =>
                [
                    'id' => 4136,
                    'province_id' => 26,
                    'name' => 'Nalda',
                ],
            136 =>
                [
                    'id' => 4137,
                    'province_id' => 26,
                    'name' => 'Navajún',
                ],
            137 =>
                [
                    'id' => 4138,
                    'province_id' => 26,
                    'name' => 'Navarrete',
                ],
            138 =>
                [
                    'id' => 4139,
                    'province_id' => 26,
                    'name' => 'Nestares',
                ],
            139 =>
                [
                    'id' => 4140,
                    'province_id' => 26,
                    'name' => 'Nieva de Cameros',
                ],
            140 =>
                [
                    'id' => 4141,
                    'province_id' => 26,
                    'name' => 'Ochánduri',
                ],
            141 =>
                [
                    'id' => 4142,
                    'province_id' => 26,
                    'name' => 'Ocón',
                ],
            142 =>
                [
                    'id' => 4143,
                    'province_id' => 26,
                    'name' => 'Ojacastro',
                ],
            143 =>
                [
                    'id' => 4144,
                    'province_id' => 26,
                    'name' => 'Ollauri',
                ],
            144 =>
                [
                    'id' => 4145,
                    'province_id' => 26,
                    'name' => 'Ortigosa de Cameros',
                ],
            145 =>
                [
                    'id' => 4146,
                    'province_id' => 26,
                    'name' => 'Pazuengos',
                ],
            146 =>
                [
                    'id' => 4147,
                    'province_id' => 26,
                    'name' => 'Pedroso',
                ],
            147 =>
                [
                    'id' => 4148,
                    'province_id' => 26,
                    'name' => 'Pinillos',
                ],
            148 =>
                [
                    'id' => 4149,
                    'province_id' => 26,
                    'name' => 'Pradejón',
                ],
            149 =>
                [
                    'id' => 4150,
                    'province_id' => 26,
                    'name' => 'Pradillo',
                ],
            150 =>
                [
                    'id' => 4151,
                    'province_id' => 26,
                    'name' => 'Préjano',
                ],
            151 =>
                [
                    'id' => 4152,
                    'province_id' => 26,
                    'name' => 'Quel',
                ],
            152 =>
                [
                    'id' => 4153,
                    'province_id' => 26,
                    'name' => 'Rabanera',
                ],
            153 =>
                [
                    'id' => 4154,
                    'province_id' => 26,
                    'name' => 'Rasillo de Cameros, El',
                ],
            154 =>
                [
                    'id' => 4155,
                    'province_id' => 26,
                    'name' => 'Redal, El',
                ],
            155 =>
                [
                    'id' => 4156,
                    'province_id' => 26,
                    'name' => 'Ribafrecha',
                ],
            156 =>
                [
                    'id' => 4157,
                    'province_id' => 26,
                    'name' => 'Rincón de Soto',
                ],
            157 =>
                [
                    'id' => 4158,
                    'province_id' => 26,
                    'name' => 'Robres del Castillo',
                ],
            158 =>
                [
                    'id' => 4159,
                    'province_id' => 26,
                    'name' => 'Rodezno',
                ],
            159 =>
                [
                    'id' => 4160,
                    'province_id' => 26,
                    'name' => 'Sajazarra',
                ],
            160 =>
                [
                    'id' => 4161,
                    'province_id' => 26,
                    'name' => 'San Asensio',
                ],
            161 =>
                [
                    'id' => 4162,
                    'province_id' => 26,
                    'name' => 'San Millán de la Cogolla',
                ],
            162 =>
                [
                    'id' => 4163,
                    'province_id' => 26,
                    'name' => 'San Millán de Yécora',
                ],
            163 =>
                [
                    'id' => 4164,
                    'province_id' => 26,
                    'name' => 'San Román de Cameros',
                ],
            164 =>
                [
                    'id' => 4165,
                    'province_id' => 26,
                    'name' => 'San Torcuato',
                ],
            165 =>
                [
                    'id' => 4166,
                    'province_id' => 26,
                    'name' => 'San Vicente de la Sonsierra',
                ],
            166 =>
                [
                    'id' => 4167,
                    'province_id' => 26,
                    'name' => 'Santa Coloma',
                ],
            167 =>
                [
                    'id' => 4168,
                    'province_id' => 26,
                    'name' => 'Santa Engracia del Jubera',
                ],
            168 =>
                [
                    'id' => 4169,
                    'province_id' => 26,
                    'name' => 'Santa Eulalia Bajera',
                ],
            169 =>
                [
                    'id' => 4170,
                    'province_id' => 26,
                    'name' => 'Santo Domingo de la Calzada',
                ],
            170 =>
                [
                    'id' => 4171,
                    'province_id' => 26,
                    'name' => 'Santurde de Rioja',
                ],
            171 =>
                [
                    'id' => 4172,
                    'province_id' => 26,
                    'name' => 'Santurdejo',
                ],
            172 =>
                [
                    'id' => 4173,
                    'province_id' => 26,
                    'name' => 'Sojuela',
                ],
            173 =>
                [
                    'id' => 4174,
                    'province_id' => 26,
                    'name' => 'Sorzano',
                ],
            174 =>
                [
                    'id' => 4175,
                    'province_id' => 26,
                    'name' => 'Sotés',
                ],
            175 =>
                [
                    'id' => 4176,
                    'province_id' => 26,
                    'name' => 'Soto en Cameros',
                ],
            176 =>
                [
                    'id' => 4177,
                    'province_id' => 26,
                    'name' => 'Terroba',
                ],
            177 =>
                [
                    'id' => 4178,
                    'province_id' => 26,
                    'name' => 'Tirgo',
                ],
            178 =>
                [
                    'id' => 4179,
                    'province_id' => 26,
                    'name' => 'Tobía',
                ],
            179 =>
                [
                    'id' => 4180,
                    'province_id' => 26,
                    'name' => 'Tormantos',
                ],
            180 =>
                [
                    'id' => 4181,
                    'province_id' => 26,
                    'name' => 'Torre en Cameros',
                ],
            181 =>
                [
                    'id' => 4182,
                    'province_id' => 26,
                    'name' => 'Torrecilla en Cameros',
                ],
            182 =>
                [
                    'id' => 4183,
                    'province_id' => 26,
                    'name' => 'Torrecilla sobre Alesanco',
                ],
            183 =>
                [
                    'id' => 4184,
                    'province_id' => 26,
                    'name' => 'Torremontalbo',
                ],
            184 =>
                [
                    'id' => 4185,
                    'province_id' => 26,
                    'name' => 'Treviana',
                ],
            185 =>
                [
                    'id' => 4186,
                    'province_id' => 26,
                    'name' => 'Tricio',
                ],
            186 =>
                [
                    'id' => 4187,
                    'province_id' => 26,
                    'name' => 'Tudelilla',
                ],
            187 =>
                [
                    'id' => 4188,
                    'province_id' => 26,
                    'name' => 'Uruñuela',
                ],
            188 =>
                [
                    'id' => 4189,
                    'province_id' => 26,
                    'name' => 'Valdemadera',
                ],
            189 =>
                [
                    'id' => 4190,
                    'province_id' => 26,
                    'name' => 'Valgañón',
                ],
            190 =>
                [
                    'id' => 4191,
                    'province_id' => 26,
                    'name' => 'Ventosa',
                ],
            191 =>
                [
                    'id' => 4192,
                    'province_id' => 26,
                    'name' => 'Ventrosa',
                ],
            192 =>
                [
                    'id' => 4193,
                    'province_id' => 26,
                    'name' => 'Viguera',
                ],
            193 =>
                [
                    'id' => 4194,
                    'province_id' => 26,
                    'name' => 'Villalba de Rioja',
                ],
            194 =>
                [
                    'id' => 4195,
                    'province_id' => 26,
                    'name' => 'Villalobar de Rioja',
                ],
            195 =>
                [
                    'id' => 4196,
                    'province_id' => 26,
                    'name' => 'Villamediana de Iregua',
                ],
            196 =>
                [
                    'id' => 4197,
                    'province_id' => 26,
                    'name' => 'Villanueva de Cameros',
                ],
            197 =>
                [
                    'id' => 4198,
                    'province_id' => 26,
                    'name' => 'Villar de Arnedo, El',
                ],
            198 =>
                [
                    'id' => 4199,
                    'province_id' => 26,
                    'name' => 'Villar de Torre',
                ],
            199 =>
                [
                    'id' => 4200,
                    'province_id' => 26,
                    'name' => 'Villarejo',
                ],
            200 =>
                [
                    'id' => 4201,
                    'province_id' => 26,
                    'name' => 'Villarroya',
                ],
            201 =>
                [
                    'id' => 4202,
                    'province_id' => 26,
                    'name' => 'Villarta-Quintana',
                ],
            202 =>
                [
                    'id' => 4203,
                    'province_id' => 26,
                    'name' => 'Villavelayo',
                ],
            203 =>
                [
                    'id' => 4204,
                    'province_id' => 26,
                    'name' => 'Villaverde de Rioja',
                ],
            204 =>
                [
                    'id' => 4205,
                    'province_id' => 26,
                    'name' => 'Villoslada de Cameros',
                ],
            205 =>
                [
                    'id' => 4206,
                    'province_id' => 26,
                    'name' => 'Viniegra de Abajo',
                ],
            206 =>
                [
                    'id' => 4207,
                    'province_id' => 26,
                    'name' => 'Viniegra de Arriba',
                ],
            207 =>
                [
                    'id' => 4208,
                    'province_id' => 26,
                    'name' => 'Zarratón',
                ],
            208 =>
                [
                    'id' => 4209,
                    'province_id' => 26,
                    'name' => 'Zarzosa',
                ],
            209 =>
                [
                    'id' => 4210,
                    'province_id' => 26,
                    'name' => 'Zorraquín',
                ],
            210 =>
                [
                    'id' => 4211,
                    'province_id' => 27,
                    'name' => 'Abadín',
                ],
            211 =>
                [
                    'id' => 4212,
                    'province_id' => 27,
                    'name' => 'Alfoz',
                ],
            212 =>
                [
                    'id' => 4213,
                    'province_id' => 27,
                    'name' => 'Antas de Ulla',
                ],
            213 =>
                [
                    'id' => 4214,
                    'province_id' => 27,
                    'name' => 'Baleira',
                ],
            214 =>
                [
                    'id' => 4215,
                    'province_id' => 27,
                    'name' => 'Baralla',
                ],
            215 =>
                [
                    'id' => 4216,
                    'province_id' => 27,
                    'name' => 'Barreiros',
                ],
            216 =>
                [
                    'id' => 4217,
                    'province_id' => 27,
                    'name' => 'Becerreá',
                ],
            217 =>
                [
                    'id' => 4218,
                    'province_id' => 27,
                    'name' => 'Begonte',
                ],
            218 =>
                [
                    'id' => 4219,
                    'province_id' => 27,
                    'name' => 'Bóveda',
                ],
            219 =>
                [
                    'id' => 4220,
                    'province_id' => 27,
                    'name' => 'Burela',
                ],
            220 =>
                [
                    'id' => 4221,
                    'province_id' => 27,
                    'name' => 'Carballedo',
                ],
            221 =>
                [
                    'id' => 4222,
                    'province_id' => 27,
                    'name' => 'Castro de Rei',
                ],
            222 =>
                [
                    'id' => 4223,
                    'province_id' => 27,
                    'name' => 'Castroverde',
                ],
            223 =>
                [
                    'id' => 4224,
                    'province_id' => 27,
                    'name' => 'Cervantes',
                ],
            224 =>
                [
                    'id' => 4225,
                    'province_id' => 27,
                    'name' => 'Cervo',
                ],
            225 =>
                [
                    'id' => 4226,
                    'province_id' => 27,
                    'name' => 'Chantada',
                ],
            226 =>
                [
                    'id' => 4227,
                    'province_id' => 27,
                    'name' => 'Corgo, O',
                ],
            227 =>
                [
                    'id' => 4228,
                    'province_id' => 27,
                    'name' => 'Cospeito',
                ],
            228 =>
                [
                    'id' => 4229,
                    'province_id' => 27,
                    'name' => 'Folgoso do Courel',
                ],
            229 =>
                [
                    'id' => 4230,
                    'province_id' => 27,
                    'name' => 'Fonsagrada, A',
                ],
            230 =>
                [
                    'id' => 4231,
                    'province_id' => 27,
                    'name' => 'Foz',
                ],
            231 =>
                [
                    'id' => 4232,
                    'province_id' => 27,
                    'name' => 'Friol',
                ],
            232 =>
                [
                    'id' => 4233,
                    'province_id' => 27,
                    'name' => 'Guitiriz',
                ],
            233 =>
                [
                    'id' => 4234,
                    'province_id' => 27,
                    'name' => 'Guntín',
                ],
            234 =>
                [
                    'id' => 4235,
                    'province_id' => 27,
                    'name' => 'Incio, O',
                ],
            235 =>
                [
                    'id' => 4236,
                    'province_id' => 27,
                    'name' => 'Láncara',
                ],
            236 =>
                [
                    'id' => 4237,
                    'province_id' => 27,
                    'name' => 'Lourenzá',
                ],
            237 =>
                [
                    'id' => 4238,
                    'province_id' => 27,
                    'name' => 'Lugo',
                ],
            238 =>
                [
                    'id' => 4239,
                    'province_id' => 27,
                    'name' => 'Meira',
                ],
            239 =>
                [
                    'id' => 4240,
                    'province_id' => 27,
                    'name' => 'Mondoñedo',
                ],
            240 =>
                [
                    'id' => 4241,
                    'province_id' => 27,
                    'name' => 'Monforte de Lemos',
                ],
            241 =>
                [
                    'id' => 4242,
                    'province_id' => 27,
                    'name' => 'Monterroso',
                ],
            242 =>
                [
                    'id' => 4243,
                    'province_id' => 27,
                    'name' => 'Muras',
                ],
            243 =>
                [
                    'id' => 4244,
                    'province_id' => 27,
                    'name' => 'Navia de Suarna',
                ],
            244 =>
                [
                    'id' => 4245,
                    'province_id' => 27,
                    'name' => 'Negueira de Muñiz',
                ],
            245 =>
                [
                    'id' => 4246,
                    'province_id' => 27,
                    'name' => 'Nogais, As',
                ],
            246 =>
                [
                    'id' => 4247,
                    'province_id' => 27,
                    'name' => 'Ourol',
                ],
            247 =>
                [
                    'id' => 4248,
                    'province_id' => 27,
                    'name' => 'Outeiro de Rei',
                ],
            248 =>
                [
                    'id' => 4249,
                    'province_id' => 27,
                    'name' => 'Palas de Rei',
                ],
            249 =>
                [
                    'id' => 4250,
                    'province_id' => 27,
                    'name' => 'Pantón',
                ],
            250 =>
                [
                    'id' => 4251,
                    'province_id' => 27,
                    'name' => 'Paradela',
                ],
            251 =>
                [
                    'id' => 4252,
                    'province_id' => 27,
                    'name' => 'Páramo, O',
                ],
            252 =>
                [
                    'id' => 4253,
                    'province_id' => 27,
                    'name' => 'Pastoriza, A',
                ],
            253 =>
                [
                    'id' => 4254,
                    'province_id' => 27,
                    'name' => 'Pedrafita do Cebreiro',
                ],
            254 =>
                [
                    'id' => 4255,
                    'province_id' => 27,
                    'name' => 'Pobra do Brollón, A',
                ],
            255 =>
                [
                    'id' => 4256,
                    'province_id' => 27,
                    'name' => 'Pol',
                ],
            256 =>
                [
                    'id' => 4257,
                    'province_id' => 27,
                    'name' => 'Pontenova, A',
                ],
            257 =>
                [
                    'id' => 4258,
                    'province_id' => 27,
                    'name' => 'Portomarín',
                ],
            258 =>
                [
                    'id' => 4259,
                    'province_id' => 27,
                    'name' => 'Quiroga',
                ],
            259 =>
                [
                    'id' => 4260,
                    'province_id' => 27,
                    'name' => 'Rábade',
                ],
            260 =>
                [
                    'id' => 4261,
                    'province_id' => 27,
                    'name' => 'Ribadeo',
                ],
            261 =>
                [
                    'id' => 4262,
                    'province_id' => 27,
                    'name' => 'Ribas de Sil',
                ],
            262 =>
                [
                    'id' => 4263,
                    'province_id' => 27,
                    'name' => 'Ribeira de Piquín',
                ],
            263 =>
                [
                    'id' => 4264,
                    'province_id' => 27,
                    'name' => 'Riotorto',
                ],
            264 =>
                [
                    'id' => 4265,
                    'province_id' => 27,
                    'name' => 'Samos',
                ],
            265 =>
                [
                    'id' => 4266,
                    'province_id' => 27,
                    'name' => 'Sarria',
                ],
            266 =>
                [
                    'id' => 4267,
                    'province_id' => 27,
                    'name' => 'Saviñao, O',
                ],
            267 =>
                [
                    'id' => 4268,
                    'province_id' => 27,
                    'name' => 'Sober',
                ],
            268 =>
                [
                    'id' => 4269,
                    'province_id' => 27,
                    'name' => 'Taboada',
                ],
            269 =>
                [
                    'id' => 4270,
                    'province_id' => 27,
                    'name' => 'Trabada',
                ],
            270 =>
                [
                    'id' => 4271,
                    'province_id' => 27,
                    'name' => 'Triacastela',
                ],
            271 =>
                [
                    'id' => 4272,
                    'province_id' => 27,
                    'name' => 'Valadouro, O',
                ],
            272 =>
                [
                    'id' => 4273,
                    'province_id' => 27,
                    'name' => 'Vicedo, O',
                ],
            273 =>
                [
                    'id' => 4274,
                    'province_id' => 27,
                    'name' => 'Vilalba',
                ],
            274 =>
                [
                    'id' => 4275,
                    'province_id' => 27,
                    'name' => 'Viveiro',
                ],
            275 =>
                [
                    'id' => 4276,
                    'province_id' => 27,
                    'name' => 'Xermade',
                ],
            276 =>
                [
                    'id' => 4277,
                    'province_id' => 27,
                    'name' => 'Xove',
                ],
            277 =>
                [
                    'id' => 4278,
                    'province_id' => 28,
                    'name' => 'Acebeda, La',
                ],
            278 =>
                [
                    'id' => 4279,
                    'province_id' => 28,
                    'name' => 'Ajalvir',
                ],
            279 =>
                [
                    'id' => 4280,
                    'province_id' => 28,
                    'name' => 'Alameda del Valle',
                ],
            280 =>
                [
                    'id' => 4281,
                    'province_id' => 28,
                    'name' => 'Álamo, El',
                ],
            281 =>
                [
                    'id' => 4282,
                    'province_id' => 28,
                    'name' => 'Alcalá de Henares',
                ],
            282 =>
                [
                    'id' => 4283,
                    'province_id' => 28,
                    'name' => 'Alcobendas',
                ],
            283 =>
                [
                    'id' => 4284,
                    'province_id' => 28,
                    'name' => 'Alcorcón',
                ],
            284 =>
                [
                    'id' => 4285,
                    'province_id' => 28,
                    'name' => 'Aldea del Fresno',
                ],
            285 =>
                [
                    'id' => 4286,
                    'province_id' => 28,
                    'name' => 'Algete',
                ],
            286 =>
                [
                    'id' => 4287,
                    'province_id' => 28,
                    'name' => 'Alpedrete',
                ],
            287 =>
                [
                    'id' => 4288,
                    'province_id' => 28,
                    'name' => 'Ambite',
                ],
            288 =>
                [
                    'id' => 4289,
                    'province_id' => 28,
                    'name' => 'Anchuelo',
                ],
            289 =>
                [
                    'id' => 4290,
                    'province_id' => 28,
                    'name' => 'Aranjuez',
                ],
            290 =>
                [
                    'id' => 4291,
                    'province_id' => 28,
                    'name' => 'Arganda del Rey',
                ],
            291 =>
                [
                    'id' => 4292,
                    'province_id' => 28,
                    'name' => 'Arroyomolinos',
                ],
            292 =>
                [
                    'id' => 4293,
                    'province_id' => 28,
                    'name' => 'Atazar, El',
                ],
            293 =>
                [
                    'id' => 4294,
                    'province_id' => 28,
                    'name' => 'Batres',
                ],
            294 =>
                [
                    'id' => 4295,
                    'province_id' => 28,
                    'name' => 'Becerril de la Sierra',
                ],
            295 =>
                [
                    'id' => 4296,
                    'province_id' => 28,
                    'name' => 'Belmonte de Tajo',
                ],
            296 =>
                [
                    'id' => 4297,
                    'province_id' => 28,
                    'name' => 'Berrueco, El',
                ],
            297 =>
                [
                    'id' => 4298,
                    'province_id' => 28,
                    'name' => 'Berzosa del Lozoya',
                ],
            298 =>
                [
                    'id' => 4299,
                    'province_id' => 28,
                    'name' => 'Boadilla del Monte',
                ],
            299 =>
                [
                    'id' => 4300,
                    'province_id' => 28,
                    'name' => 'Boalo, El',
                ],
            300 =>
                [
                    'id' => 4301,
                    'province_id' => 28,
                    'name' => 'Braojos',
                ],
            301 =>
                [
                    'id' => 4302,
                    'province_id' => 28,
                    'name' => 'Brea de Tajo',
                ],
            302 =>
                [
                    'id' => 4303,
                    'province_id' => 28,
                    'name' => 'Brunete',
                ],
            303 =>
                [
                    'id' => 4304,
                    'province_id' => 28,
                    'name' => 'Buitrago del Lozoya',
                ],
            304 =>
                [
                    'id' => 4305,
                    'province_id' => 28,
                    'name' => 'Bustarviejo',
                ],
            305 =>
                [
                    'id' => 4306,
                    'province_id' => 28,
                    'name' => 'Cabanillas de la Sierra',
                ],
            306 =>
                [
                    'id' => 4307,
                    'province_id' => 28,
                    'name' => 'Cabrera, La',
                ],
            307 =>
                [
                    'id' => 4308,
                    'province_id' => 28,
                    'name' => 'Cadalso de los Vidrios',
                ],
            308 =>
                [
                    'id' => 4309,
                    'province_id' => 28,
                    'name' => 'Camarma de Esteruelas',
                ],
            309 =>
                [
                    'id' => 4310,
                    'province_id' => 28,
                    'name' => 'Campo Real',
                ],
            310 =>
                [
                    'id' => 4311,
                    'province_id' => 28,
                    'name' => 'Canencia',
                ],
            311 =>
                [
                    'id' => 4312,
                    'province_id' => 28,
                    'name' => 'Carabaña',
                ],
            312 =>
                [
                    'id' => 4313,
                    'province_id' => 28,
                    'name' => 'Casarrubuelos',
                ],
            313 =>
                [
                    'id' => 4314,
                    'province_id' => 28,
                    'name' => 'Cenicientos',
                ],
            314 =>
                [
                    'id' => 4315,
                    'province_id' => 28,
                    'name' => 'Cercedilla',
                ],
            315 =>
                [
                    'id' => 4316,
                    'province_id' => 28,
                    'name' => 'Cervera de Buitrago',
                ],
            316 =>
                [
                    'id' => 4317,
                    'province_id' => 28,
                    'name' => 'Chapinería',
                ],
            317 =>
                [
                    'id' => 4318,
                    'province_id' => 28,
                    'name' => 'Chinchón',
                ],
            318 =>
                [
                    'id' => 4319,
                    'province_id' => 28,
                    'name' => 'Ciempozuelos',
                ],
            319 =>
                [
                    'id' => 4320,
                    'province_id' => 28,
                    'name' => 'Cobeña',
                ],
            320 =>
                [
                    'id' => 4321,
                    'province_id' => 28,
                    'name' => 'Collado Mediano',
                ],
            321 =>
                [
                    'id' => 4322,
                    'province_id' => 28,
                    'name' => 'Collado Villalba',
                ],
            322 =>
                [
                    'id' => 4323,
                    'province_id' => 28,
                    'name' => 'Colmenar de Oreja',
                ],
            323 =>
                [
                    'id' => 4324,
                    'province_id' => 28,
                    'name' => 'Colmenar del Arroyo',
                ],
            324 =>
                [
                    'id' => 4325,
                    'province_id' => 28,
                    'name' => 'Colmenar Viejo',
                ],
            325 =>
                [
                    'id' => 4326,
                    'province_id' => 28,
                    'name' => 'Colmenarejo',
                ],
            326 =>
                [
                    'id' => 4327,
                    'province_id' => 28,
                    'name' => 'Corpa',
                ],
            327 =>
                [
                    'id' => 4328,
                    'province_id' => 28,
                    'name' => 'Coslada',
                ],
            328 =>
                [
                    'id' => 4329,
                    'province_id' => 28,
                    'name' => 'Cubas de la Sagra',
                ],
            329 =>
                [
                    'id' => 4330,
                    'province_id' => 28,
                    'name' => 'Daganzo de Arriba',
                ],
            330 =>
                [
                    'id' => 4331,
                    'province_id' => 28,
                    'name' => 'Escorial, El',
                ],
            331 =>
                [
                    'id' => 4332,
                    'province_id' => 28,
                    'name' => 'Estremera',
                ],
            332 =>
                [
                    'id' => 4333,
                    'province_id' => 28,
                    'name' => 'Fresnedillas de la Oliva',
                ],
            333 =>
                [
                    'id' => 4334,
                    'province_id' => 28,
                    'name' => 'Fresno de Torote',
                ],
            334 =>
                [
                    'id' => 4335,
                    'province_id' => 28,
                    'name' => 'Fuenlabrada',
                ],
            335 =>
                [
                    'id' => 4336,
                    'province_id' => 28,
                    'name' => 'Fuente el Saz de Jarama',
                ],
            336 =>
                [
                    'id' => 4337,
                    'province_id' => 28,
                    'name' => 'Fuentidueña de Tajo',
                ],
            337 =>
                [
                    'id' => 4338,
                    'province_id' => 28,
                    'name' => 'Galapagar',
                ],
            338 =>
                [
                    'id' => 4339,
                    'province_id' => 28,
                    'name' => 'Garganta de los Montes',
                ],
            339 =>
                [
                    'id' => 4340,
                    'province_id' => 28,
                    'name' => 'Gargantilla del Lozoya y Pinilla de Buitrago',
                ],
            340 =>
                [
                    'id' => 4341,
                    'province_id' => 28,
                    'name' => 'Gascones',
                ],
            341 =>
                [
                    'id' => 4342,
                    'province_id' => 28,
                    'name' => 'Getafe',
                ],
            342 =>
                [
                    'id' => 4343,
                    'province_id' => 28,
                    'name' => 'Griñón',
                ],
            343 =>
                [
                    'id' => 4344,
                    'province_id' => 28,
                    'name' => 'Guadalix de la Sierra',
                ],
            344 =>
                [
                    'id' => 4345,
                    'province_id' => 28,
                    'name' => 'Guadarrama',
                ],
            345 =>
                [
                    'id' => 4346,
                    'province_id' => 28,
                    'name' => 'Hiruela, La',
                ],
            346 =>
                [
                    'id' => 4347,
                    'province_id' => 28,
                    'name' => 'Horcajo de la Sierra-Aoslos',
                ],
            347 =>
                [
                    'id' => 4348,
                    'province_id' => 28,
                    'name' => 'Horcajuelo de la Sierra',
                ],
            348 =>
                [
                    'id' => 4349,
                    'province_id' => 28,
                    'name' => 'Hoyo de Manzanares',
                ],
            349 =>
                [
                    'id' => 4350,
                    'province_id' => 28,
                    'name' => 'Humanes de Madrid',
                ],
            350 =>
                [
                    'id' => 4351,
                    'province_id' => 28,
                    'name' => 'Leganés',
                ],
            351 =>
                [
                    'id' => 4352,
                    'province_id' => 28,
                    'name' => 'Loeches',
                ],
            352 =>
                [
                    'id' => 4353,
                    'province_id' => 28,
                    'name' => 'Lozoya',
                ],
            353 =>
                [
                    'id' => 4354,
                    'province_id' => 28,
                    'name' => 'Lozoyuela-Navas-Sieteiglesias',
                ],
            354 =>
                [
                    'id' => 4355,
                    'province_id' => 28,
                    'name' => 'Madarcos',
                ],
            355 =>
                [
                    'id' => 4356,
                    'province_id' => 28,
                    'name' => 'Madrid',
                ],
            356 =>
                [
                    'id' => 4357,
                    'province_id' => 28,
                    'name' => 'Majadahonda',
                ],
            357 =>
                [
                    'id' => 4358,
                    'province_id' => 28,
                    'name' => 'Manzanares el Real',
                ],
            358 =>
                [
                    'id' => 4359,
                    'province_id' => 28,
                    'name' => 'Meco',
                ],
            359 =>
                [
                    'id' => 4360,
                    'province_id' => 28,
                    'name' => 'Mejorada del Campo',
                ],
            360 =>
                [
                    'id' => 4361,
                    'province_id' => 28,
                    'name' => 'Miraflores de la Sierra',
                ],
            361 =>
                [
                    'id' => 4362,
                    'province_id' => 28,
                    'name' => 'Molar, El',
                ],
            362 =>
                [
                    'id' => 4363,
                    'province_id' => 28,
                    'name' => 'Molinos, Los',
                ],
            363 =>
                [
                    'id' => 4364,
                    'province_id' => 28,
                    'name' => 'Montejo de la Sierra',
                ],
            364 =>
                [
                    'id' => 4365,
                    'province_id' => 28,
                    'name' => 'Moraleja de Enmedio',
                ],
            365 =>
                [
                    'id' => 4366,
                    'province_id' => 28,
                    'name' => 'Moralzarzal',
                ],
            366 =>
                [
                    'id' => 4367,
                    'province_id' => 28,
                    'name' => 'Morata de Tajuña',
                ],
            367 =>
                [
                    'id' => 4368,
                    'province_id' => 28,
                    'name' => 'Móstoles',
                ],
            368 =>
                [
                    'id' => 4369,
                    'province_id' => 28,
                    'name' => 'Navacerrada',
                ],
            369 =>
                [
                    'id' => 4370,
                    'province_id' => 28,
                    'name' => 'Navalafuente',
                ],
            370 =>
                [
                    'id' => 4371,
                    'province_id' => 28,
                    'name' => 'Navalagamella',
                ],
            371 =>
                [
                    'id' => 4372,
                    'province_id' => 28,
                    'name' => 'Navalcarnero',
                ],
            372 =>
                [
                    'id' => 4373,
                    'province_id' => 28,
                    'name' => 'Navarredonda y San Mamés',
                ],
            373 =>
                [
                    'id' => 4374,
                    'province_id' => 28,
                    'name' => 'Navas del Rey',
                ],
            374 =>
                [
                    'id' => 4375,
                    'province_id' => 28,
                    'name' => 'Nuevo Baztán',
                ],
            375 =>
                [
                    'id' => 4376,
                    'province_id' => 28,
                    'name' => 'Olmeda de las Fuentes',
                ],
            376 =>
                [
                    'id' => 4377,
                    'province_id' => 28,
                    'name' => 'Orusco de Tajuña',
                ],
            377 =>
                [
                    'id' => 4378,
                    'province_id' => 28,
                    'name' => 'Paracuellos de Jarama',
                ],
            378 =>
                [
                    'id' => 4379,
                    'province_id' => 28,
                    'name' => 'Parla',
                ],
            379 =>
                [
                    'id' => 4380,
                    'province_id' => 28,
                    'name' => 'Patones',
                ],
            380 =>
                [
                    'id' => 4381,
                    'province_id' => 28,
                    'name' => 'Pedrezuela',
                ],
            381 =>
                [
                    'id' => 4382,
                    'province_id' => 28,
                    'name' => 'Pelayos de la Presa',
                ],
            382 =>
                [
                    'id' => 4383,
                    'province_id' => 28,
                    'name' => 'Perales de Tajuña',
                ],
            383 =>
                [
                    'id' => 4384,
                    'province_id' => 28,
                    'name' => 'Pezuela de las Torres',
                ],
            384 =>
                [
                    'id' => 4385,
                    'province_id' => 28,
                    'name' => 'Pinilla del Valle',
                ],
            385 =>
                [
                    'id' => 4386,
                    'province_id' => 28,
                    'name' => 'Pinto',
                ],
            386 =>
                [
                    'id' => 4387,
                    'province_id' => 28,
                    'name' => 'Piñuécar-Gandullas',
                ],
            387 =>
                [
                    'id' => 4388,
                    'province_id' => 28,
                    'name' => 'Pozuelo de Alarcón',
                ],
            388 =>
                [
                    'id' => 4389,
                    'province_id' => 28,
                    'name' => 'Pozuelo del Rey',
                ],
            389 =>
                [
                    'id' => 4390,
                    'province_id' => 28,
                    'name' => 'Prádena del Rincón',
                ],
            390 =>
                [
                    'id' => 4391,
                    'province_id' => 28,
                    'name' => 'Puebla de la Sierra',
                ],
            391 =>
                [
                    'id' => 4392,
                    'province_id' => 28,
                    'name' => 'Puentes Viejas',
                ],
            392 =>
                [
                    'id' => 4393,
                    'province_id' => 28,
                    'name' => 'Quijorna',
                ],
            393 =>
                [
                    'id' => 4394,
                    'province_id' => 28,
                    'name' => 'Rascafría',
                ],
            394 =>
                [
                    'id' => 4395,
                    'province_id' => 28,
                    'name' => 'Redueña',
                ],
            395 =>
                [
                    'id' => 4396,
                    'province_id' => 28,
                    'name' => 'Ribatejada',
                ],
            396 =>
                [
                    'id' => 4397,
                    'province_id' => 28,
                    'name' => 'Rivas-Vaciamadrid',
                ],
            397 =>
                [
                    'id' => 4398,
                    'province_id' => 28,
                    'name' => 'Robledillo de la Jara',
                ],
            398 =>
                [
                    'id' => 4399,
                    'province_id' => 28,
                    'name' => 'Robledo de Chavela',
                ],
            399 =>
                [
                    'id' => 4400,
                    'province_id' => 28,
                    'name' => 'Robregordo',
                ],
            400 =>
                [
                    'id' => 4401,
                    'province_id' => 28,
                    'name' => 'Rozas de Madrid, Las',
                ],
            401 =>
                [
                    'id' => 4402,
                    'province_id' => 28,
                    'name' => 'Rozas de Puerto Real',
                ],
            402 =>
                [
                    'id' => 4403,
                    'province_id' => 28,
                    'name' => 'San Agustín del Guadalix',
                ],
            403 =>
                [
                    'id' => 4404,
                    'province_id' => 28,
                    'name' => 'San Fernando de Henares',
                ],
            404 =>
                [
                    'id' => 4405,
                    'province_id' => 28,
                    'name' => 'San Lorenzo de El Escorial',
                ],
            405 =>
                [
                    'id' => 4406,
                    'province_id' => 28,
                    'name' => 'San Martín de la Vega',
                ],
            406 =>
                [
                    'id' => 4407,
                    'province_id' => 28,
                    'name' => 'San Martín de Valdeiglesias',
                ],
            407 =>
                [
                    'id' => 4408,
                    'province_id' => 28,
                    'name' => 'San Sebastián de los Reyes',
                ],
            408 =>
                [
                    'id' => 4409,
                    'province_id' => 28,
                    'name' => 'Santa María de la Alameda',
                ],
            409 =>
                [
                    'id' => 4410,
                    'province_id' => 28,
                    'name' => 'Santorcaz',
                ],
            410 =>
                [
                    'id' => 4411,
                    'province_id' => 28,
                    'name' => 'Santos de la Humosa, Los',
                ],
            411 =>
                [
                    'id' => 4412,
                    'province_id' => 28,
                    'name' => 'Serna del Monte, La',
                ],
            412 =>
                [
                    'id' => 4413,
                    'province_id' => 28,
                    'name' => 'Serranillos del Valle',
                ],
            413 =>
                [
                    'id' => 4414,
                    'province_id' => 28,
                    'name' => 'Sevilla la Nueva',
                ],
            414 =>
                [
                    'id' => 4415,
                    'province_id' => 28,
                    'name' => 'Somosierra',
                ],
            415 =>
                [
                    'id' => 4416,
                    'province_id' => 28,
                    'name' => 'Soto del Real',
                ],
            416 =>
                [
                    'id' => 4417,
                    'province_id' => 28,
                    'name' => 'Talamanca de Jarama',
                ],
            417 =>
                [
                    'id' => 4418,
                    'province_id' => 28,
                    'name' => 'Tielmes',
                ],
            418 =>
                [
                    'id' => 4419,
                    'province_id' => 28,
                    'name' => 'Titulcia',
                ],
            419 =>
                [
                    'id' => 4420,
                    'province_id' => 28,
                    'name' => 'Torrejón de Ardoz',
                ],
            420 =>
                [
                    'id' => 4421,
                    'province_id' => 28,
                    'name' => 'Torrejón de la Calzada',
                ],
            421 =>
                [
                    'id' => 4422,
                    'province_id' => 28,
                    'name' => 'Torrejón de Velasco',
                ],
            422 =>
                [
                    'id' => 4423,
                    'province_id' => 28,
                    'name' => 'Torrelaguna',
                ],
            423 =>
                [
                    'id' => 4424,
                    'province_id' => 28,
                    'name' => 'Torrelodones',
                ],
            424 =>
                [
                    'id' => 4425,
                    'province_id' => 28,
                    'name' => 'Torremocha de Jarama',
                ],
            425 =>
                [
                    'id' => 4426,
                    'province_id' => 28,
                    'name' => 'Torres de la Alameda',
                ],
            426 =>
                [
                    'id' => 4427,
                    'province_id' => 28,
                    'name' => 'Tres Cantos',
                ],
            427 =>
                [
                    'id' => 4428,
                    'province_id' => 28,
                    'name' => 'Valdaracete',
                ],
            428 =>
                [
                    'id' => 4429,
                    'province_id' => 28,
                    'name' => 'Valdeavero',
                ],
            429 =>
                [
                    'id' => 4430,
                    'province_id' => 28,
                    'name' => 'Valdelaguna',
                ],
            430 =>
                [
                    'id' => 4431,
                    'province_id' => 28,
                    'name' => 'Valdemanco',
                ],
            431 =>
                [
                    'id' => 4432,
                    'province_id' => 28,
                    'name' => 'Valdemaqueda',
                ],
            432 =>
                [
                    'id' => 4433,
                    'province_id' => 28,
                    'name' => 'Valdemorillo',
                ],
            433 =>
                [
                    'id' => 4434,
                    'province_id' => 28,
                    'name' => 'Valdemoro',
                ],
            434 =>
                [
                    'id' => 4435,
                    'province_id' => 28,
                    'name' => 'Valdeolmos-Alalpardo',
                ],
            435 =>
                [
                    'id' => 4436,
                    'province_id' => 28,
                    'name' => 'Valdepiélagos',
                ],
            436 =>
                [
                    'id' => 4437,
                    'province_id' => 28,
                    'name' => 'Valdetorres de Jarama',
                ],
            437 =>
                [
                    'id' => 4438,
                    'province_id' => 28,
                    'name' => 'Valdilecha',
                ],
            438 =>
                [
                    'id' => 4439,
                    'province_id' => 28,
                    'name' => 'Valverde de Alcalá',
                ],
            439 =>
                [
                    'id' => 4440,
                    'province_id' => 28,
                    'name' => 'Velilla de San Antonio',
                ],
            440 =>
                [
                    'id' => 4441,
                    'province_id' => 28,
                    'name' => 'Vellón, El',
                ],
            441 =>
                [
                    'id' => 4442,
                    'province_id' => 28,
                    'name' => 'Venturada',
                ],
            442 =>
                [
                    'id' => 4443,
                    'province_id' => 28,
                    'name' => 'Villa del Prado',
                ],
            443 =>
                [
                    'id' => 4444,
                    'province_id' => 28,
                    'name' => 'Villaconejos',
                ],
            444 =>
                [
                    'id' => 4445,
                    'province_id' => 28,
                    'name' => 'Villalbilla',
                ],
            445 =>
                [
                    'id' => 4446,
                    'province_id' => 28,
                    'name' => 'Villamanrique de Tajo',
                ],
            446 =>
                [
                    'id' => 4447,
                    'province_id' => 28,
                    'name' => 'Villamanta',
                ],
            447 =>
                [
                    'id' => 4448,
                    'province_id' => 28,
                    'name' => 'Villamantilla',
                ],
            448 =>
                [
                    'id' => 4449,
                    'province_id' => 28,
                    'name' => 'Villanueva de la Cañada',
                ],
            449 =>
                [
                    'id' => 4450,
                    'province_id' => 28,
                    'name' => 'Villanueva de Perales',
                ],
            450 =>
                [
                    'id' => 4451,
                    'province_id' => 28,
                    'name' => 'Villanueva del Pardillo',
                ],
            451 =>
                [
                    'id' => 4452,
                    'province_id' => 28,
                    'name' => 'Villar del Olmo',
                ],
            452 =>
                [
                    'id' => 4453,
                    'province_id' => 28,
                    'name' => 'Villarejo de Salvanés',
                ],
            453 =>
                [
                    'id' => 4454,
                    'province_id' => 28,
                    'name' => 'Villaviciosa de Odón',
                ],
            454 =>
                [
                    'id' => 4455,
                    'province_id' => 28,
                    'name' => 'Villavieja del Lozoya',
                ],
            455 =>
                [
                    'id' => 4456,
                    'province_id' => 28,
                    'name' => 'Zarzalejo',
                ],
            456 =>
                [
                    'id' => 4457,
                    'province_id' => 29,
                    'name' => 'Alameda',
                ],
            457 =>
                [
                    'id' => 4458,
                    'province_id' => 29,
                    'name' => 'Alcaucín',
                ],
            458 =>
                [
                    'id' => 4459,
                    'province_id' => 29,
                    'name' => 'Alfarnate',
                ],
            459 =>
                [
                    'id' => 4460,
                    'province_id' => 29,
                    'name' => 'Alfarnatejo',
                ],
            460 =>
                [
                    'id' => 4461,
                    'province_id' => 29,
                    'name' => 'Algarrobo',
                ],
            461 =>
                [
                    'id' => 4462,
                    'province_id' => 29,
                    'name' => 'Algatocín',
                ],
            462 =>
                [
                    'id' => 4463,
                    'province_id' => 29,
                    'name' => 'Alhaurín de la Torre',
                ],
            463 =>
                [
                    'id' => 4464,
                    'province_id' => 29,
                    'name' => 'Alhaurín el Grande',
                ],
            464 =>
                [
                    'id' => 4465,
                    'province_id' => 29,
                    'name' => 'Almáchar',
                ],
            465 =>
                [
                    'id' => 4466,
                    'province_id' => 29,
                    'name' => 'Almargen',
                ],
            466 =>
                [
                    'id' => 4467,
                    'province_id' => 29,
                    'name' => 'Almogía',
                ],
            467 =>
                [
                    'id' => 4468,
                    'province_id' => 29,
                    'name' => 'Álora',
                ],
            468 =>
                [
                    'id' => 4469,
                    'province_id' => 29,
                    'name' => 'Alozaina',
                ],
            469 =>
                [
                    'id' => 4470,
                    'province_id' => 29,
                    'name' => 'Alpandeire',
                ],
            470 =>
                [
                    'id' => 4471,
                    'province_id' => 29,
                    'name' => 'Antequera',
                ],
            471 =>
                [
                    'id' => 4472,
                    'province_id' => 29,
                    'name' => 'Árchez',
                ],
            472 =>
                [
                    'id' => 4473,
                    'province_id' => 29,
                    'name' => 'Archidona',
                ],
            473 =>
                [
                    'id' => 4474,
                    'province_id' => 29,
                    'name' => 'Ardales',
                ],
            474 =>
                [
                    'id' => 4475,
                    'province_id' => 29,
                    'name' => 'Arenas',
                ],
            475 =>
                [
                    'id' => 4476,
                    'province_id' => 29,
                    'name' => 'Arriate',
                ],
            476 =>
                [
                    'id' => 4477,
                    'province_id' => 29,
                    'name' => 'Atajate',
                ],
            477 =>
                [
                    'id' => 4478,
                    'province_id' => 29,
                    'name' => 'Benadalid',
                ],
            478 =>
                [
                    'id' => 4479,
                    'province_id' => 29,
                    'name' => 'Benahavís',
                ],
            479 =>
                [
                    'id' => 4480,
                    'province_id' => 29,
                    'name' => 'Benalauría',
                ],
            480 =>
                [
                    'id' => 4481,
                    'province_id' => 29,
                    'name' => 'Benalmádena',
                ],
            481 =>
                [
                    'id' => 4482,
                    'province_id' => 29,
                    'name' => 'Benamargosa',
                ],
            482 =>
                [
                    'id' => 4483,
                    'province_id' => 29,
                    'name' => 'Benamocarra',
                ],
            483 =>
                [
                    'id' => 4484,
                    'province_id' => 29,
                    'name' => 'Benaoján',
                ],
            484 =>
                [
                    'id' => 4485,
                    'province_id' => 29,
                    'name' => 'Benarrabá',
                ],
            485 =>
                [
                    'id' => 4486,
                    'province_id' => 29,
                    'name' => 'Borge, El',
                ],
            486 =>
                [
                    'id' => 4487,
                    'province_id' => 29,
                    'name' => 'Burgo, El',
                ],
            487 =>
                [
                    'id' => 4488,
                    'province_id' => 29,
                    'name' => 'Campillos',
                ],
            488 =>
                [
                    'id' => 4489,
                    'province_id' => 29,
                    'name' => 'Canillas de Aceituno',
                ],
            489 =>
                [
                    'id' => 4490,
                    'province_id' => 29,
                    'name' => 'Canillas de Albaida',
                ],
            490 =>
                [
                    'id' => 4491,
                    'province_id' => 29,
                    'name' => 'Cañete la Real',
                ],
            491 =>
                [
                    'id' => 4492,
                    'province_id' => 29,
                    'name' => 'Carratraca',
                ],
            492 =>
                [
                    'id' => 4493,
                    'province_id' => 29,
                    'name' => 'Cartajima',
                ],
            493 =>
                [
                    'id' => 4494,
                    'province_id' => 29,
                    'name' => 'Cártama',
                ],
            494 =>
                [
                    'id' => 4495,
                    'province_id' => 29,
                    'name' => 'Casabermeja',
                ],
            495 =>
                [
                    'id' => 4496,
                    'province_id' => 29,
                    'name' => 'Casarabonela',
                ],
            496 =>
                [
                    'id' => 4497,
                    'province_id' => 29,
                    'name' => 'Casares',
                ],
            497 =>
                [
                    'id' => 4498,
                    'province_id' => 29,
                    'name' => 'Coín',
                ],
            498 =>
                [
                    'id' => 4499,
                    'province_id' => 29,
                    'name' => 'Colmenar',
                ],
            499 =>
                [
                    'id' => 4500,
                    'province_id' => 29,
                    'name' => 'Comares',
                ],
        ]);
        \DB::table('localities')->insert([
            0 =>
                [
                    'id' => 4501,
                    'province_id' => 29,
                    'name' => 'Cómpeta',
                ],
            1 =>
                [
                    'id' => 4502,
                    'province_id' => 29,
                    'name' => 'Cortes de la Frontera',
                ],
            2 =>
                [
                    'id' => 4503,
                    'province_id' => 29,
                    'name' => 'Cuevas Bajas',
                ],
            3 =>
                [
                    'id' => 4504,
                    'province_id' => 29,
                    'name' => 'Cuevas de San Marcos',
                ],
            4 =>
                [
                    'id' => 4505,
                    'province_id' => 29,
                    'name' => 'Cuevas del Becerro',
                ],
            5 =>
                [
                    'id' => 4506,
                    'province_id' => 29,
                    'name' => 'Cútar',
                ],
            6 =>
                [
                    'id' => 4507,
                    'province_id' => 29,
                    'name' => 'Estepona',
                ],
            7 =>
                [
                    'id' => 4508,
                    'province_id' => 29,
                    'name' => 'Faraján',
                ],
            8 =>
                [
                    'id' => 4509,
                    'province_id' => 29,
                    'name' => 'Frigiliana',
                ],
            9 =>
                [
                    'id' => 4510,
                    'province_id' => 29,
                    'name' => 'Fuengirola',
                ],
            10 =>
                [
                    'id' => 4511,
                    'province_id' => 29,
                    'name' => 'Fuente de Piedra',
                ],
            11 =>
                [
                    'id' => 4512,
                    'province_id' => 29,
                    'name' => 'Gaucín',
                ],
            12 =>
                [
                    'id' => 4513,
                    'province_id' => 29,
                    'name' => 'Genalguacil',
                ],
            13 =>
                [
                    'id' => 4514,
                    'province_id' => 29,
                    'name' => 'Guaro',
                ],
            14 =>
                [
                    'id' => 4515,
                    'province_id' => 29,
                    'name' => 'Humilladero',
                ],
            15 =>
                [
                    'id' => 4516,
                    'province_id' => 29,
                    'name' => 'Igualeja',
                ],
            16 =>
                [
                    'id' => 4517,
                    'province_id' => 29,
                    'name' => 'Istán',
                ],
            17 =>
                [
                    'id' => 4518,
                    'province_id' => 29,
                    'name' => 'Iznate',
                ],
            18 =>
                [
                    'id' => 4519,
                    'province_id' => 29,
                    'name' => 'Jimera de Líbar',
                ],
            19 =>
                [
                    'id' => 4520,
                    'province_id' => 29,
                    'name' => 'Jubrique',
                ],
            20 =>
                [
                    'id' => 4521,
                    'province_id' => 29,
                    'name' => 'Júzcar',
                ],
            21 =>
                [
                    'id' => 4522,
                    'province_id' => 29,
                    'name' => 'Macharaviaya',
                ],
            22 =>
                [
                    'id' => 4523,
                    'province_id' => 29,
                    'name' => 'Málaga',
                ],
            23 =>
                [
                    'id' => 4524,
                    'province_id' => 29,
                    'name' => 'Manilva',
                ],
            24 =>
                [
                    'id' => 4525,
                    'province_id' => 29,
                    'name' => 'Marbella',
                ],
            25 =>
                [
                    'id' => 4526,
                    'province_id' => 29,
                    'name' => 'Mijas',
                ],
            26 =>
                [
                    'id' => 4527,
                    'province_id' => 29,
                    'name' => 'Moclinejo',
                ],
            27 =>
                [
                    'id' => 4528,
                    'province_id' => 29,
                    'name' => 'Mollina',
                ],
            28 =>
                [
                    'id' => 4529,
                    'province_id' => 29,
                    'name' => 'Monda',
                ],
            29 =>
                [
                    'id' => 4530,
                    'province_id' => 29,
                    'name' => 'Montejaque',
                ],
            30 =>
                [
                    'id' => 4531,
                    'province_id' => 29,
                    'name' => 'Nerja',
                ],
            31 =>
                [
                    'id' => 4532,
                    'province_id' => 29,
                    'name' => 'Ojén',
                ],
            32 =>
                [
                    'id' => 4533,
                    'province_id' => 29,
                    'name' => 'Parauta',
                ],
            33 =>
                [
                    'id' => 4534,
                    'province_id' => 29,
                    'name' => 'Periana',
                ],
            34 =>
                [
                    'id' => 4535,
                    'province_id' => 29,
                    'name' => 'Pizarra',
                ],
            35 =>
                [
                    'id' => 4536,
                    'province_id' => 29,
                    'name' => 'Pujerra',
                ],
            36 =>
                [
                    'id' => 4537,
                    'province_id' => 29,
                    'name' => 'Rincón de la Victoria',
                ],
            37 =>
                [
                    'id' => 4538,
                    'province_id' => 29,
                    'name' => 'Riogordo',
                ],
            38 =>
                [
                    'id' => 4539,
                    'province_id' => 29,
                    'name' => 'Ronda',
                ],
            39 =>
                [
                    'id' => 4540,
                    'province_id' => 29,
                    'name' => 'Salares',
                ],
            40 =>
                [
                    'id' => 4541,
                    'province_id' => 29,
                    'name' => 'Sayalonga',
                ],
            41 =>
                [
                    'id' => 4542,
                    'province_id' => 29,
                    'name' => 'Sedella',
                ],
            42 =>
                [
                    'id' => 4543,
                    'province_id' => 29,
                    'name' => 'Sierra de Yeguas',
                ],
            43 =>
                [
                    'id' => 4544,
                    'province_id' => 29,
                    'name' => 'Teba',
                ],
            44 =>
                [
                    'id' => 4545,
                    'province_id' => 29,
                    'name' => 'Tolox',
                ],
            45 =>
                [
                    'id' => 4546,
                    'province_id' => 29,
                    'name' => 'Torremolinos',
                ],
            46 =>
                [
                    'id' => 4547,
                    'province_id' => 29,
                    'name' => 'Torrox',
                ],
            47 =>
                [
                    'id' => 4548,
                    'province_id' => 29,
                    'name' => 'Totalán',
                ],
            48 =>
                [
                    'id' => 4549,
                    'province_id' => 29,
                    'name' => 'Valle de Abdalajís',
                ],
            49 =>
                [
                    'id' => 4550,
                    'province_id' => 29,
                    'name' => 'Vélez-Málaga',
                ],
            50 =>
                [
                    'id' => 4551,
                    'province_id' => 29,
                    'name' => 'Villanueva de Algaidas',
                ],
            51 =>
                [
                    'id' => 4552,
                    'province_id' => 29,
                    'name' => 'Villanueva de la Concepción',
                ],
            52 =>
                [
                    'id' => 4553,
                    'province_id' => 29,
                    'name' => 'Villanueva de Tapia',
                ],
            53 =>
                [
                    'id' => 4554,
                    'province_id' => 29,
                    'name' => 'Villanueva del Rosario',
                ],
            54 =>
                [
                    'id' => 4555,
                    'province_id' => 29,
                    'name' => 'Villanueva del Trabuco',
                ],
            55 =>
                [
                    'id' => 4556,
                    'province_id' => 29,
                    'name' => 'Viñuela',
                ],
            56 =>
                [
                    'id' => 4557,
                    'province_id' => 29,
                    'name' => 'Yunquera',
                ],
            57 =>
                [
                    'id' => 4558,
                    'province_id' => 30,
                    'name' => 'Abanilla',
                ],
            58 =>
                [
                    'id' => 4559,
                    'province_id' => 30,
                    'name' => 'Abarán',
                ],
            59 =>
                [
                    'id' => 4560,
                    'province_id' => 30,
                    'name' => 'Águilas',
                ],
            60 =>
                [
                    'id' => 4561,
                    'province_id' => 30,
                    'name' => 'Albudeite',
                ],
            61 =>
                [
                    'id' => 4562,
                    'province_id' => 30,
                    'name' => 'Alcantarilla',
                ],
            62 =>
                [
                    'id' => 4563,
                    'province_id' => 30,
                    'name' => 'Alcázares, Los',
                ],
            63 =>
                [
                    'id' => 4564,
                    'province_id' => 30,
                    'name' => 'Aledo',
                ],
            64 =>
                [
                    'id' => 4565,
                    'province_id' => 30,
                    'name' => 'Alguazas',
                ],
            65 =>
                [
                    'id' => 4566,
                    'province_id' => 30,
                    'name' => 'Alhama de Murcia',
                ],
            66 =>
                [
                    'id' => 4567,
                    'province_id' => 30,
                    'name' => 'Archena',
                ],
            67 =>
                [
                    'id' => 4568,
                    'province_id' => 30,
                    'name' => 'Beniel',
                ],
            68 =>
                [
                    'id' => 4569,
                    'province_id' => 30,
                    'name' => 'Blanca',
                ],
            69 =>
                [
                    'id' => 4570,
                    'province_id' => 30,
                    'name' => 'Bullas',
                ],
            70 =>
                [
                    'id' => 4571,
                    'province_id' => 30,
                    'name' => 'Calasparra',
                ],
            71 =>
                [
                    'id' => 4572,
                    'province_id' => 30,
                    'name' => 'Campos del Río',
                ],
            72 =>
                [
                    'id' => 4573,
                    'province_id' => 30,
                    'name' => 'Caravaca de la Cruz',
                ],
            73 =>
                [
                    'id' => 4574,
                    'province_id' => 30,
                    'name' => 'Cartagena',
                ],
            74 =>
                [
                    'id' => 4575,
                    'province_id' => 30,
                    'name' => 'Cehegín',
                ],
            75 =>
                [
                    'id' => 4576,
                    'province_id' => 30,
                    'name' => 'Ceutí',
                ],
            76 =>
                [
                    'id' => 4577,
                    'province_id' => 30,
                    'name' => 'Cieza',
                ],
            77 =>
                [
                    'id' => 4578,
                    'province_id' => 30,
                    'name' => 'Fortuna',
                ],
            78 =>
                [
                    'id' => 4579,
                    'province_id' => 30,
                    'name' => 'Fuente Álamo de Murcia',
                ],
            79 =>
                [
                    'id' => 4580,
                    'province_id' => 30,
                    'name' => 'Jumilla',
                ],
            80 =>
                [
                    'id' => 4581,
                    'province_id' => 30,
                    'name' => 'Librilla',
                ],
            81 =>
                [
                    'id' => 4582,
                    'province_id' => 30,
                    'name' => 'Lorca',
                ],
            82 =>
                [
                    'id' => 4583,
                    'province_id' => 30,
                    'name' => 'Lorquí',
                ],
            83 =>
                [
                    'id' => 4584,
                    'province_id' => 30,
                    'name' => 'Mazarrón',
                ],
            84 =>
                [
                    'id' => 4585,
                    'province_id' => 30,
                    'name' => 'Molina de Segura',
                ],
            85 =>
                [
                    'id' => 4586,
                    'province_id' => 30,
                    'name' => 'Moratalla',
                ],
            86 =>
                [
                    'id' => 4587,
                    'province_id' => 30,
                    'name' => 'Mula',
                ],
            87 =>
                [
                    'id' => 4588,
                    'province_id' => 30,
                    'name' => 'Murcia',
                ],
            88 =>
                [
                    'id' => 4589,
                    'province_id' => 30,
                    'name' => 'Ojós',
                ],
            89 =>
                [
                    'id' => 4590,
                    'province_id' => 30,
                    'name' => 'Pliego',
                ],
            90 =>
                [
                    'id' => 4591,
                    'province_id' => 30,
                    'name' => 'Puerto Lumbreras',
                ],
            91 =>
                [
                    'id' => 4592,
                    'province_id' => 30,
                    'name' => 'Ricote',
                ],
            92 =>
                [
                    'id' => 4593,
                    'province_id' => 30,
                    'name' => 'San Javier',
                ],
            93 =>
                [
                    'id' => 4594,
                    'province_id' => 30,
                    'name' => 'San Pedro del Pinatar',
                ],
            94 =>
                [
                    'id' => 4595,
                    'province_id' => 30,
                    'name' => 'Santomera',
                ],
            95 =>
                [
                    'id' => 4596,
                    'province_id' => 30,
                    'name' => 'Torre-Pacheco',
                ],
            96 =>
                [
                    'id' => 4597,
                    'province_id' => 30,
                    'name' => 'Torres de Cotillas, Las',
                ],
            97 =>
                [
                    'id' => 4598,
                    'province_id' => 30,
                    'name' => 'Totana',
                ],
            98 =>
                [
                    'id' => 4599,
                    'province_id' => 30,
                    'name' => 'Ulea',
                ],
            99 =>
                [
                    'id' => 4600,
                    'province_id' => 30,
                    'name' => 'Unión, La',
                ],
            100 =>
                [
                    'id' => 4601,
                    'province_id' => 30,
                    'name' => 'Villanueva del Río Segura',
                ],
            101 =>
                [
                    'id' => 4602,
                    'province_id' => 30,
                    'name' => 'Yecla',
                ],
            102 =>
                [
                    'id' => 4603,
                    'province_id' => 31,
                    'name' => 'Abáigar',
                ],
            103 =>
                [
                    'id' => 4604,
                    'province_id' => 31,
                    'name' => 'Abárzuza',
                ],
            104 =>
                [
                    'id' => 4605,
                    'province_id' => 31,
                    'name' => 'Abaurregaina/Abaurrea Alta',
                ],
            105 =>
                [
                    'id' => 4606,
                    'province_id' => 31,
                    'name' => 'Abaurrepea/Abaurrea Baja',
                ],
            106 =>
                [
                    'id' => 4607,
                    'province_id' => 31,
                    'name' => 'Aberin',
                ],
            107 =>
                [
                    'id' => 4608,
                    'province_id' => 31,
                    'name' => 'Ablitas',
                ],
            108 =>
                [
                    'id' => 4609,
                    'province_id' => 31,
                    'name' => 'Adiós',
                ],
            109 =>
                [
                    'id' => 4610,
                    'province_id' => 31,
                    'name' => 'Aguilar de Codés',
                ],
            110 =>
                [
                    'id' => 4611,
                    'province_id' => 31,
                    'name' => 'Aibar/Oibar',
                ],
            111 =>
                [
                    'id' => 4612,
                    'province_id' => 31,
                    'name' => 'Allín',
                ],
            112 =>
                [
                    'id' => 4613,
                    'province_id' => 31,
                    'name' => 'Allo',
                ],
            113 =>
                [
                    'id' => 4614,
                    'province_id' => 31,
                    'name' => 'Altsasu/Alsasua',
                ],
            114 =>
                [
                    'id' => 4615,
                    'province_id' => 31,
                    'name' => 'Améscoa Baja',
                ],
            115 =>
                [
                    'id' => 4616,
                    'province_id' => 31,
                    'name' => 'Ancín',
                ],
            116 =>
                [
                    'id' => 4617,
                    'province_id' => 31,
                    'name' => 'Andosilla',
                ],
            117 =>
                [
                    'id' => 4618,
                    'province_id' => 31,
                    'name' => 'Ansoáin/Antsoain',
                ],
            118 =>
                [
                    'id' => 4619,
                    'province_id' => 31,
                    'name' => 'Anue',
                ],
            119 =>
                [
                    'id' => 4620,
                    'province_id' => 31,
                    'name' => 'Añorbe',
                ],
            120 =>
                [
                    'id' => 4621,
                    'province_id' => 31,
                    'name' => 'Aoiz/Agoitz',
                ],
            121 =>
                [
                    'id' => 4622,
                    'province_id' => 31,
                    'name' => 'Araitz',
                ],
            122 =>
                [
                    'id' => 4623,
                    'province_id' => 31,
                    'name' => 'Arakil',
                ],
            123 =>
                [
                    'id' => 4624,
                    'province_id' => 31,
                    'name' => 'Aranarache',
                ],
            124 =>
                [
                    'id' => 4625,
                    'province_id' => 31,
                    'name' => 'Aranguren',
                ],
            125 =>
                [
                    'id' => 4626,
                    'province_id' => 31,
                    'name' => 'Arano',
                ],
            126 =>
                [
                    'id' => 4627,
                    'province_id' => 31,
                    'name' => 'Arantza',
                ],
            127 =>
                [
                    'id' => 4628,
                    'province_id' => 31,
                    'name' => 'Aras',
                ],
            128 =>
                [
                    'id' => 4629,
                    'province_id' => 31,
                    'name' => 'Arbizu',
                ],
            129 =>
                [
                    'id' => 4630,
                    'province_id' => 31,
                    'name' => 'Arce/Artzi',
                ],
            130 =>
                [
                    'id' => 4631,
                    'province_id' => 31,
                    'name' => 'Arcos, Los',
                ],
            131 =>
                [
                    'id' => 4632,
                    'province_id' => 31,
                    'name' => 'Arellano',
                ],
            132 =>
                [
                    'id' => 4633,
                    'province_id' => 31,
                    'name' => 'Areso',
                ],
            133 =>
                [
                    'id' => 4634,
                    'province_id' => 31,
                    'name' => 'Arguedas',
                ],
            134 =>
                [
                    'id' => 4635,
                    'province_id' => 31,
                    'name' => 'Aria',
                ],
            135 =>
                [
                    'id' => 4636,
                    'province_id' => 31,
                    'name' => 'Aribe',
                ],
            136 =>
                [
                    'id' => 4637,
                    'province_id' => 31,
                    'name' => 'Armañanzas',
                ],
            137 =>
                [
                    'id' => 4638,
                    'province_id' => 31,
                    'name' => 'Arróniz',
                ],
            138 =>
                [
                    'id' => 4639,
                    'province_id' => 31,
                    'name' => 'Arruazu',
                ],
            139 =>
                [
                    'id' => 4640,
                    'province_id' => 31,
                    'name' => 'Artajona',
                ],
            140 =>
                [
                    'id' => 4641,
                    'province_id' => 31,
                    'name' => 'Artazu',
                ],
            141 =>
                [
                    'id' => 4642,
                    'province_id' => 31,
                    'name' => 'Atez',
                ],
            142 =>
                [
                    'id' => 4643,
                    'province_id' => 31,
                    'name' => 'Auritz/Burguete',
                ],
            143 =>
                [
                    'id' => 4644,
                    'province_id' => 31,
                    'name' => 'Ayegui/Aiegi',
                ],
            144 =>
                [
                    'id' => 4645,
                    'province_id' => 31,
                    'name' => 'Azagra',
                ],
            145 =>
                [
                    'id' => 4646,
                    'province_id' => 31,
                    'name' => 'Azuelo',
                ],
            146 =>
                [
                    'id' => 4647,
                    'province_id' => 31,
                    'name' => 'Bakaiku',
                ],
            147 =>
                [
                    'id' => 4648,
                    'province_id' => 31,
                    'name' => 'Barañain',
                ],
            148 =>
                [
                    'id' => 4649,
                    'province_id' => 31,
                    'name' => 'Barásoain',
                ],
            149 =>
                [
                    'id' => 4650,
                    'province_id' => 31,
                    'name' => 'Barbarin',
                ],
            150 =>
                [
                    'id' => 4651,
                    'province_id' => 31,
                    'name' => 'Bargota',
                ],
            151 =>
                [
                    'id' => 4652,
                    'province_id' => 31,
                    'name' => 'Barillas',
                ],
            152 =>
                [
                    'id' => 4653,
                    'province_id' => 31,
                    'name' => 'Basaburua',
                ],
            153 =>
                [
                    'id' => 4654,
                    'province_id' => 31,
                    'name' => 'Baztan',
                ],
            154 =>
                [
                    'id' => 4655,
                    'province_id' => 31,
                    'name' => 'Beintza-Labaien',
                ],
            155 =>
                [
                    'id' => 4656,
                    'province_id' => 31,
                    'name' => 'Beire',
                ],
            156 =>
                [
                    'id' => 4657,
                    'province_id' => 31,
                    'name' => 'Belascoáin',
                ],
            157 =>
                [
                    'id' => 4658,
                    'province_id' => 31,
                    'name' => 'Bera',
                ],
            158 =>
                [
                    'id' => 4659,
                    'province_id' => 31,
                    'name' => 'Berbinzana',
                ],
            159 =>
                [
                    'id' => 4660,
                    'province_id' => 31,
                    'name' => 'Beriáin',
                ],
            160 =>
                [
                    'id' => 4661,
                    'province_id' => 31,
                    'name' => 'Berrioplano',
                ],
            161 =>
                [
                    'id' => 4662,
                    'province_id' => 31,
                    'name' => 'Berriozar',
                ],
            162 =>
                [
                    'id' => 4663,
                    'province_id' => 31,
                    'name' => 'Bertizarana',
                ],
            163 =>
                [
                    'id' => 4664,
                    'province_id' => 31,
                    'name' => 'Betelu',
                ],
            164 =>
                [
                    'id' => 4665,
                    'province_id' => 31,
                    'name' => 'Bidaurreta',
                ],
            165 =>
                [
                    'id' => 4666,
                    'province_id' => 31,
                    'name' => 'Biurrun-Olcoz',
                ],
            166 =>
                [
                    'id' => 4667,
                    'province_id' => 31,
                    'name' => 'Buñuel',
                ],
            167 =>
                [
                    'id' => 4668,
                    'province_id' => 31,
                    'name' => 'Burgui/Burgi',
                ],
            168 =>
                [
                    'id' => 4669,
                    'province_id' => 31,
                    'name' => 'Burlada/Burlata',
                ],
            169 =>
                [
                    'id' => 4670,
                    'province_id' => 31,
                    'name' => 'Busto, El',
                ],
            170 =>
                [
                    'id' => 4671,
                    'province_id' => 31,
                    'name' => 'Cabanillas',
                ],
            171 =>
                [
                    'id' => 4672,
                    'province_id' => 31,
                    'name' => 'Cabredo',
                ],
            172 =>
                [
                    'id' => 4673,
                    'province_id' => 31,
                    'name' => 'Cadreita',
                ],
            173 =>
                [
                    'id' => 4674,
                    'province_id' => 31,
                    'name' => 'Caparroso',
                ],
            174 =>
                [
                    'id' => 4675,
                    'province_id' => 31,
                    'name' => 'Cárcar',
                ],
            175 =>
                [
                    'id' => 4676,
                    'province_id' => 31,
                    'name' => 'Carcastillo',
                ],
            176 =>
                [
                    'id' => 4677,
                    'province_id' => 31,
                    'name' => 'Cascante',
                ],
            177 =>
                [
                    'id' => 4678,
                    'province_id' => 31,
                    'name' => 'Cáseda',
                ],
            178 =>
                [
                    'id' => 4679,
                    'province_id' => 31,
                    'name' => 'Castejón',
                ],
            179 =>
                [
                    'id' => 4680,
                    'province_id' => 31,
                    'name' => 'Castillonuevo',
                ],
            180 =>
                [
                    'id' => 4681,
                    'province_id' => 31,
                    'name' => 'Cendea de Olza/Oltza Zendea',
                ],
            181 =>
                [
                    'id' => 4682,
                    'province_id' => 31,
                    'name' => 'Cintruénigo',
                ],
            182 =>
                [
                    'id' => 4683,
                    'province_id' => 31,
                    'name' => 'Cirauqui/Zirauki',
                ],
            183 =>
                [
                    'id' => 4684,
                    'province_id' => 31,
                    'name' => 'Ciriza',
                ],
            184 =>
                [
                    'id' => 4685,
                    'province_id' => 31,
                    'name' => 'Cizur',
                ],
            185 =>
                [
                    'id' => 4686,
                    'province_id' => 31,
                    'name' => 'Corella',
                ],
            186 =>
                [
                    'id' => 4687,
                    'province_id' => 31,
                    'name' => 'Cortes',
                ],
            187 =>
                [
                    'id' => 4688,
                    'province_id' => 31,
                    'name' => 'Desojo',
                ],
            188 =>
                [
                    'id' => 4689,
                    'province_id' => 31,
                    'name' => 'Dicastillo',
                ],
            189 =>
                [
                    'id' => 4690,
                    'province_id' => 31,
                    'name' => 'Donamaria',
                ],
            190 =>
                [
                    'id' => 4691,
                    'province_id' => 31,
                    'name' => 'Doneztebe/Santesteban',
                ],
            191 =>
                [
                    'id' => 4692,
                    'province_id' => 31,
                    'name' => 'Echarri',
                ],
            192 =>
                [
                    'id' => 4693,
                    'province_id' => 31,
                    'name' => 'Egüés',
                ],
            193 =>
                [
                    'id' => 4694,
                    'province_id' => 31,
                    'name' => 'Elgorriaga',
                ],
            194 =>
                [
                    'id' => 4695,
                    'province_id' => 31,
                    'name' => 'Enériz/Eneritz',
                ],
            195 =>
                [
                    'id' => 4696,
                    'province_id' => 31,
                    'name' => 'Eratsun',
                ],
            196 =>
                [
                    'id' => 4697,
                    'province_id' => 31,
                    'name' => 'Ergoiena',
                ],
            197 =>
                [
                    'id' => 4698,
                    'province_id' => 31,
                    'name' => 'Erro',
                ],
            198 =>
                [
                    'id' => 4699,
                    'province_id' => 31,
                    'name' => 'Eslava',
                ],
            199 =>
                [
                    'id' => 4700,
                    'province_id' => 31,
                    'name' => 'Esparza de Salazar',
                ],
            200 =>
                [
                    'id' => 4701,
                    'province_id' => 31,
                    'name' => 'Espronceda',
                ],
            201 =>
                [
                    'id' => 4702,
                    'province_id' => 31,
                    'name' => 'Estella/Lizarra',
                ],
            202 =>
                [
                    'id' => 4703,
                    'province_id' => 31,
                    'name' => 'Esteribar',
                ],
            203 =>
                [
                    'id' => 4704,
                    'province_id' => 31,
                    'name' => 'Etayo',
                ],
            204 =>
                [
                    'id' => 4705,
                    'province_id' => 31,
                    'name' => 'Etxalar',
                ],
            205 =>
                [
                    'id' => 4706,
                    'province_id' => 31,
                    'name' => 'Etxarri-Aranatz',
                ],
            206 =>
                [
                    'id' => 4707,
                    'province_id' => 31,
                    'name' => 'Etxauri',
                ],
            207 =>
                [
                    'id' => 4708,
                    'province_id' => 31,
                    'name' => 'Eulate',
                ],
            208 =>
                [
                    'id' => 4709,
                    'province_id' => 31,
                    'name' => 'Ezcabarte',
                ],
            209 =>
                [
                    'id' => 4710,
                    'province_id' => 31,
                    'name' => 'Ezcároz/Ezkaroze',
                ],
            210 =>
                [
                    'id' => 4711,
                    'province_id' => 31,
                    'name' => 'Ezkurra',
                ],
            211 =>
                [
                    'id' => 4712,
                    'province_id' => 31,
                    'name' => 'Ezprogui',
                ],
            212 =>
                [
                    'id' => 4713,
                    'province_id' => 31,
                    'name' => 'Falces',
                ],
            213 =>
                [
                    'id' => 4714,
                    'province_id' => 31,
                    'name' => 'Fitero',
                ],
            214 =>
                [
                    'id' => 4715,
                    'province_id' => 31,
                    'name' => 'Fontellas',
                ],
            215 =>
                [
                    'id' => 4716,
                    'province_id' => 31,
                    'name' => 'Funes',
                ],
            216 =>
                [
                    'id' => 4717,
                    'province_id' => 31,
                    'name' => 'Fustiñana',
                ],
            217 =>
                [
                    'id' => 4718,
                    'province_id' => 31,
                    'name' => 'Galar',
                ],
            218 =>
                [
                    'id' => 4719,
                    'province_id' => 31,
                    'name' => 'Gallipienzo/Galipentzu',
                ],
            219 =>
                [
                    'id' => 4720,
                    'province_id' => 31,
                    'name' => 'Gallués/Galoze',
                ],
            220 =>
                [
                    'id' => 4721,
                    'province_id' => 31,
                    'name' => 'Garaioa',
                ],
            221 =>
                [
                    'id' => 4722,
                    'province_id' => 31,
                    'name' => 'Garde',
                ],
            222 =>
                [
                    'id' => 4723,
                    'province_id' => 31,
                    'name' => 'Garínoain',
                ],
            223 =>
                [
                    'id' => 4724,
                    'province_id' => 31,
                    'name' => 'Garralda',
                ],
            224 =>
                [
                    'id' => 4725,
                    'province_id' => 31,
                    'name' => 'Genevilla',
                ],
            225 =>
                [
                    'id' => 4726,
                    'province_id' => 31,
                    'name' => 'Goizueta',
                ],
            226 =>
                [
                    'id' => 4727,
                    'province_id' => 31,
                    'name' => 'Goñi',
                ],
            227 =>
                [
                    'id' => 4728,
                    'province_id' => 31,
                    'name' => 'Güesa/Gorza',
                ],
            228 =>
                [
                    'id' => 4729,
                    'province_id' => 31,
                    'name' => 'Guesálaz/Gesalatz',
                ],
            229 =>
                [
                    'id' => 4730,
                    'province_id' => 31,
                    'name' => 'Guirguillano',
                ],
            230 =>
                [
                    'id' => 4731,
                    'province_id' => 31,
                    'name' => 'Hiriberri/Villanueva de Aezkoa',
                ],
            231 =>
                [
                    'id' => 4732,
                    'province_id' => 31,
                    'name' => 'Huarte/Uharte',
                ],
            232 =>
                [
                    'id' => 4733,
                    'province_id' => 31,
                    'name' => 'Ibargoiti',
                ],
            233 =>
                [
                    'id' => 4734,
                    'province_id' => 31,
                    'name' => 'Igantzi',
                ],
            234 =>
                [
                    'id' => 4735,
                    'province_id' => 31,
                    'name' => 'Igúzquiza',
                ],
            235 =>
                [
                    'id' => 4736,
                    'province_id' => 31,
                    'name' => 'Imotz',
                ],
            236 =>
                [
                    'id' => 4737,
                    'province_id' => 31,
                    'name' => 'Irañeta',
                ],
            237 =>
                [
                    'id' => 4738,
                    'province_id' => 31,
                    'name' => 'Irurtzun',
                ],
            238 =>
                [
                    'id' => 4739,
                    'province_id' => 31,
                    'name' => 'Isaba/Izaba',
                ],
            239 =>
                [
                    'id' => 4740,
                    'province_id' => 31,
                    'name' => 'Ituren',
                ],
            240 =>
                [
                    'id' => 4741,
                    'province_id' => 31,
                    'name' => 'Iturmendi',
                ],
            241 =>
                [
                    'id' => 4742,
                    'province_id' => 31,
                    'name' => 'Iza/Itza',
                ],
            242 =>
                [
                    'id' => 4743,
                    'province_id' => 31,
                    'name' => 'Izagaondoa',
                ],
            243 =>
                [
                    'id' => 4744,
                    'province_id' => 31,
                    'name' => 'Izalzu/Itzaltzu',
                ],
            244 =>
                [
                    'id' => 4745,
                    'province_id' => 31,
                    'name' => 'Jaurrieta',
                ],
            245 =>
                [
                    'id' => 4746,
                    'province_id' => 31,
                    'name' => 'Javier',
                ],
            246 =>
                [
                    'id' => 4747,
                    'province_id' => 31,
                    'name' => 'Juslapeña',
                ],
            247 =>
                [
                    'id' => 4748,
                    'province_id' => 31,
                    'name' => 'Lakuntza',
                ],
            248 =>
                [
                    'id' => 4749,
                    'province_id' => 31,
                    'name' => 'Lana',
                ],
            249 =>
                [
                    'id' => 4750,
                    'province_id' => 31,
                    'name' => 'Lantz',
                ],
            250 =>
                [
                    'id' => 4751,
                    'province_id' => 31,
                    'name' => 'Lapoblación',
                ],
            251 =>
                [
                    'id' => 4752,
                    'province_id' => 31,
                    'name' => 'Larraga',
                ],
            252 =>
                [
                    'id' => 4753,
                    'province_id' => 31,
                    'name' => 'Larraona',
                ],
            253 =>
                [
                    'id' => 4754,
                    'province_id' => 31,
                    'name' => 'Larraun',
                ],
            254 =>
                [
                    'id' => 4755,
                    'province_id' => 31,
                    'name' => 'Lazagurría',
                ],
            255 =>
                [
                    'id' => 4756,
                    'province_id' => 31,
                    'name' => 'Leache',
                ],
            256 =>
                [
                    'id' => 4757,
                    'province_id' => 31,
                    'name' => 'Legarda',
                ],
            257 =>
                [
                    'id' => 4758,
                    'province_id' => 31,
                    'name' => 'Legaria',
                ],
            258 =>
                [
                    'id' => 4759,
                    'province_id' => 31,
                    'name' => 'Leitza',
                ],
            259 =>
                [
                    'id' => 4760,
                    'province_id' => 31,
                    'name' => 'Lekunberri',
                ],
            260 =>
                [
                    'id' => 4761,
                    'province_id' => 31,
                    'name' => 'Leoz/Leotz',
                ],
            261 =>
                [
                    'id' => 4762,
                    'province_id' => 31,
                    'name' => 'Lerga',
                ],
            262 =>
                [
                    'id' => 4763,
                    'province_id' => 31,
                    'name' => 'Lerín',
                ],
            263 =>
                [
                    'id' => 4764,
                    'province_id' => 31,
                    'name' => 'Lesaka',
                ],
            264 =>
                [
                    'id' => 4765,
                    'province_id' => 31,
                    'name' => 'Lezáun',
                ],
            265 =>
                [
                    'id' => 4766,
                    'province_id' => 31,
                    'name' => 'Liédena',
                ],
            266 =>
                [
                    'id' => 4767,
                    'province_id' => 31,
                    'name' => 'Lizoáin-Arriasgoiti',
                ],
            267 =>
                [
                    'id' => 4768,
                    'province_id' => 31,
                    'name' => 'Lodosa',
                ],
            268 =>
                [
                    'id' => 4769,
                    'province_id' => 31,
                    'name' => 'Lónguida/Longida',
                ],
            269 =>
                [
                    'id' => 4770,
                    'province_id' => 31,
                    'name' => 'Lumbier',
                ],
            270 =>
                [
                    'id' => 4771,
                    'province_id' => 31,
                    'name' => 'Luquin',
                ],
            271 =>
                [
                    'id' => 4772,
                    'province_id' => 31,
                    'name' => 'Luzaide/Valcarlos',
                ],
            272 =>
                [
                    'id' => 4773,
                    'province_id' => 31,
                    'name' => 'Mañeru',
                ],
            273 =>
                [
                    'id' => 4774,
                    'province_id' => 31,
                    'name' => 'Marañón',
                ],
            274 =>
                [
                    'id' => 4775,
                    'province_id' => 31,
                    'name' => 'Marcilla',
                ],
            275 =>
                [
                    'id' => 4776,
                    'province_id' => 31,
                    'name' => 'Mélida',
                ],
            276 =>
                [
                    'id' => 4777,
                    'province_id' => 31,
                    'name' => 'Mendavia',
                ],
            277 =>
                [
                    'id' => 4778,
                    'province_id' => 31,
                    'name' => 'Mendaza',
                ],
            278 =>
                [
                    'id' => 4779,
                    'province_id' => 31,
                    'name' => 'Mendigorría',
                ],
            279 =>
                [
                    'id' => 4780,
                    'province_id' => 31,
                    'name' => 'Metauten',
                ],
            280 =>
                [
                    'id' => 4781,
                    'province_id' => 31,
                    'name' => 'Milagro',
                ],
            281 =>
                [
                    'id' => 4782,
                    'province_id' => 31,
                    'name' => 'Mirafuentes',
                ],
            282 =>
                [
                    'id' => 4783,
                    'province_id' => 31,
                    'name' => 'Miranda de Arga',
                ],
            283 =>
                [
                    'id' => 4784,
                    'province_id' => 31,
                    'name' => 'Monreal',
                ],
            284 =>
                [
                    'id' => 4785,
                    'province_id' => 31,
                    'name' => 'Monteagudo',
                ],
            285 =>
                [
                    'id' => 4786,
                    'province_id' => 31,
                    'name' => 'Morentin',
                ],
            286 =>
                [
                    'id' => 4787,
                    'province_id' => 31,
                    'name' => 'Mues',
                ],
            287 =>
                [
                    'id' => 4788,
                    'province_id' => 31,
                    'name' => 'Murchante',
                ],
            288 =>
                [
                    'id' => 4789,
                    'province_id' => 31,
                    'name' => 'Murieta',
                ],
            289 =>
                [
                    'id' => 4790,
                    'province_id' => 31,
                    'name' => 'Murillo el Cuende',
                ],
            290 =>
                [
                    'id' => 4791,
                    'province_id' => 31,
                    'name' => 'Murillo el Fruto',
                ],
            291 =>
                [
                    'id' => 4792,
                    'province_id' => 31,
                    'name' => 'Muruzábal',
                ],
            292 =>
                [
                    'id' => 4793,
                    'province_id' => 31,
                    'name' => 'Navascués',
                ],
            293 =>
                [
                    'id' => 4794,
                    'province_id' => 31,
                    'name' => 'Nazar',
                ],
            294 =>
                [
                    'id' => 4795,
                    'province_id' => 31,
                    'name' => 'Noáin (Valle de Elorz)/Noain (Elortzibar)',
                ],
            295 =>
                [
                    'id' => 4796,
                    'province_id' => 31,
                    'name' => 'Obanos',
                ],
            296 =>
                [
                    'id' => 4797,
                    'province_id' => 31,
                    'name' => 'Ochagavía',
                ],
            297 =>
                [
                    'id' => 4798,
                    'province_id' => 31,
                    'name' => 'Oco',
                ],
            298 =>
                [
                    'id' => 4799,
                    'province_id' => 31,
                    'name' => 'Odieta',
                ],
            299 =>
                [
                    'id' => 4800,
                    'province_id' => 31,
                    'name' => 'Oitz',
                ],
            300 =>
                [
                    'id' => 4801,
                    'province_id' => 31,
                    'name' => 'Olaibar',
                ],
            301 =>
                [
                    'id' => 4802,
                    'province_id' => 31,
                    'name' => 'Olazti/Olazagutía',
                ],
            302 =>
                [
                    'id' => 4803,
                    'province_id' => 31,
                    'name' => 'Olejua',
                ],
            303 =>
                [
                    'id' => 4804,
                    'province_id' => 31,
                    'name' => 'Olite/Erriberri',
                ],
            304 =>
                [
                    'id' => 4805,
                    'province_id' => 31,
                    'name' => 'Ollo',
                ],
            305 =>
                [
                    'id' => 4806,
                    'province_id' => 31,
                    'name' => 'Olóriz',
                ],
            306 =>
                [
                    'id' => 4807,
                    'province_id' => 31,
                    'name' => 'Orbaitzeta',
                ],
            307 =>
                [
                    'id' => 4808,
                    'province_id' => 31,
                    'name' => 'Orbara',
                ],
            308 =>
                [
                    'id' => 4809,
                    'province_id' => 31,
                    'name' => 'Orísoain',
                ],
            309 =>
                [
                    'id' => 4810,
                    'province_id' => 31,
                    'name' => 'Orkoien',
                ],
            310 =>
                [
                    'id' => 4811,
                    'province_id' => 31,
                    'name' => 'Oronz',
                ],
            311 =>
                [
                    'id' => 4812,
                    'province_id' => 31,
                    'name' => 'Oroz-Betelu',
                ],
            312 =>
                [
                    'id' => 4813,
                    'province_id' => 31,
                    'name' => 'Orreaga/Roncesvalles',
                ],
            313 =>
                [
                    'id' => 4814,
                    'province_id' => 31,
                    'name' => 'Oteiza',
                ],
            314 =>
                [
                    'id' => 4815,
                    'province_id' => 31,
                    'name' => 'Pamplona/Iruña',
                ],
            315 =>
                [
                    'id' => 4816,
                    'province_id' => 31,
                    'name' => 'Peralta/Azkoien',
                ],
            316 =>
                [
                    'id' => 4817,
                    'province_id' => 31,
                    'name' => 'Petilla de Aragón',
                ],
            317 =>
                [
                    'id' => 4818,
                    'province_id' => 31,
                    'name' => 'Piedramillera',
                ],
            318 =>
                [
                    'id' => 4819,
                    'province_id' => 31,
                    'name' => 'Pitillas',
                ],
            319 =>
                [
                    'id' => 4820,
                    'province_id' => 31,
                    'name' => 'Puente la Reina/Gares',
                ],
            320 =>
                [
                    'id' => 4821,
                    'province_id' => 31,
                    'name' => 'Pueyo',
                ],
            321 =>
                [
                    'id' => 4822,
                    'province_id' => 31,
                    'name' => 'Ribaforada',
                ],
            322 =>
                [
                    'id' => 4823,
                    'province_id' => 31,
                    'name' => 'Romanzado',
                ],
            323 =>
                [
                    'id' => 4824,
                    'province_id' => 31,
                    'name' => 'Roncal/Erronkari',
                ],
            324 =>
                [
                    'id' => 4825,
                    'province_id' => 31,
                    'name' => 'Sada',
                ],
            325 =>
                [
                    'id' => 4826,
                    'province_id' => 31,
                    'name' => 'Saldías',
                ],
            326 =>
                [
                    'id' => 4827,
                    'province_id' => 31,
                    'name' => 'Salinas de Oro',
                ],
            327 =>
                [
                    'id' => 4828,
                    'province_id' => 31,
                    'name' => 'San Adrián',
                ],
            328 =>
                [
                    'id' => 4829,
                    'province_id' => 31,
                    'name' => 'San Martín de Unx',
                ],
            329 =>
                [
                    'id' => 4830,
                    'province_id' => 31,
                    'name' => 'Sangüesa/Zangoza',
                ],
            330 =>
                [
                    'id' => 4831,
                    'province_id' => 31,
                    'name' => 'Sansol',
                ],
            331 =>
                [
                    'id' => 4832,
                    'province_id' => 31,
                    'name' => 'Santacara',
                ],
            332 =>
                [
                    'id' => 4833,
                    'province_id' => 31,
                    'name' => 'Sarriés/Sartze',
                ],
            333 =>
                [
                    'id' => 4834,
                    'province_id' => 31,
                    'name' => 'Sartaguda',
                ],
            334 =>
                [
                    'id' => 4835,
                    'province_id' => 31,
                    'name' => 'Sesma',
                ],
            335 =>
                [
                    'id' => 4836,
                    'province_id' => 31,
                    'name' => 'Sorlada',
                ],
            336 =>
                [
                    'id' => 4837,
                    'province_id' => 31,
                    'name' => 'Sunbilla',
                ],
            337 =>
                [
                    'id' => 4838,
                    'province_id' => 31,
                    'name' => 'Tafalla',
                ],
            338 =>
                [
                    'id' => 4839,
                    'province_id' => 31,
                    'name' => 'Tiebas-Muruarte de Reta',
                ],
            339 =>
                [
                    'id' => 4840,
                    'province_id' => 31,
                    'name' => 'Tirapu',
                ],
            340 =>
                [
                    'id' => 4841,
                    'province_id' => 31,
                    'name' => 'Torralba del Río',
                ],
            341 =>
                [
                    'id' => 4842,
                    'province_id' => 31,
                    'name' => 'Torres del Río',
                ],
            342 =>
                [
                    'id' => 4843,
                    'province_id' => 31,
                    'name' => 'Tudela',
                ],
            343 =>
                [
                    'id' => 4844,
                    'province_id' => 31,
                    'name' => 'Tulebras',
                ],
            344 =>
                [
                    'id' => 4845,
                    'province_id' => 31,
                    'name' => 'Ucar',
                ],
            345 =>
                [
                    'id' => 4846,
                    'province_id' => 31,
                    'name' => 'Uharte-Arakil',
                ],
            346 =>
                [
                    'id' => 4847,
                    'province_id' => 31,
                    'name' => 'Ujué',
                ],
            347 =>
                [
                    'id' => 4848,
                    'province_id' => 31,
                    'name' => 'Ultzama',
                ],
            348 =>
                [
                    'id' => 4849,
                    'province_id' => 31,
                    'name' => 'Unciti',
                ],
            349 =>
                [
                    'id' => 4850,
                    'province_id' => 31,
                    'name' => 'Unzué',
                ],
            350 =>
                [
                    'id' => 4851,
                    'province_id' => 31,
                    'name' => 'Urdazubi/Urdax',
                ],
            351 =>
                [
                    'id' => 4852,
                    'province_id' => 31,
                    'name' => 'Urdiain',
                ],
            352 =>
                [
                    'id' => 4853,
                    'province_id' => 31,
                    'name' => 'Urraul Alto',
                ],
            353 =>
                [
                    'id' => 4854,
                    'province_id' => 31,
                    'name' => 'Urraul Bajo',
                ],
            354 =>
                [
                    'id' => 4855,
                    'province_id' => 31,
                    'name' => 'Urrotz',
                ],
            355 =>
                [
                    'id' => 4856,
                    'province_id' => 31,
                    'name' => 'Urroz-Villa',
                ],
            356 =>
                [
                    'id' => 4857,
                    'province_id' => 31,
                    'name' => 'Urzainqui',
                ],
            357 =>
                [
                    'id' => 4858,
                    'province_id' => 31,
                    'name' => 'Uterga',
                ],
            358 =>
                [
                    'id' => 4859,
                    'province_id' => 31,
                    'name' => 'Uztárroz/Uztarroze',
                ],
            359 =>
                [
                    'id' => 4860,
                    'province_id' => 31,
                    'name' => 'Valle de Yerri/Deierri',
                ],
            360 =>
                [
                    'id' => 4861,
                    'province_id' => 31,
                    'name' => 'Valtierra',
                ],
            361 =>
                [
                    'id' => 4862,
                    'province_id' => 31,
                    'name' => 'Viana',
                ],
            362 =>
                [
                    'id' => 4863,
                    'province_id' => 31,
                    'name' => 'Vidángoz/Bidankoze',
                ],
            363 =>
                [
                    'id' => 4864,
                    'province_id' => 31,
                    'name' => 'Villafranca',
                ],
            364 =>
                [
                    'id' => 4865,
                    'province_id' => 31,
                    'name' => 'Villamayor de Monjardín',
                ],
            365 =>
                [
                    'id' => 4866,
                    'province_id' => 31,
                    'name' => 'Villatuerta',
                ],
            366 =>
                [
                    'id' => 4867,
                    'province_id' => 31,
                    'name' => 'Villava/Atarrabia',
                ],
            367 =>
                [
                    'id' => 4868,
                    'province_id' => 31,
                    'name' => 'Yesa',
                ],
            368 =>
                [
                    'id' => 4869,
                    'province_id' => 31,
                    'name' => 'Zabalza/Zabaltza',
                ],
            369 =>
                [
                    'id' => 4870,
                    'province_id' => 31,
                    'name' => 'Ziordia',
                ],
            370 =>
                [
                    'id' => 4871,
                    'province_id' => 31,
                    'name' => 'Zizur Mayor/Zizur Nagusia',
                ],
            371 =>
                [
                    'id' => 4872,
                    'province_id' => 31,
                    'name' => 'Zubieta',
                ],
            372 =>
                [
                    'id' => 4873,
                    'province_id' => 31,
                    'name' => 'Zugarramurdi',
                ],
            373 =>
                [
                    'id' => 4874,
                    'province_id' => 31,
                    'name' => 'Zúñiga',
                ],
            374 =>
                [
                    'id' => 4875,
                    'province_id' => 32,
                    'name' => 'Allariz',
                ],
            375 =>
                [
                    'id' => 4876,
                    'province_id' => 32,
                    'name' => 'Amoeiro',
                ],
            376 =>
                [
                    'id' => 4877,
                    'province_id' => 32,
                    'name' => 'Arnoia, A',
                ],
            377 =>
                [
                    'id' => 4878,
                    'province_id' => 32,
                    'name' => 'Avión',
                ],
            378 =>
                [
                    'id' => 4879,
                    'province_id' => 32,
                    'name' => 'Baltar',
                ],
            379 =>
                [
                    'id' => 4880,
                    'province_id' => 32,
                    'name' => 'Bande',
                ],
            380 =>
                [
                    'id' => 4881,
                    'province_id' => 32,
                    'name' => 'Baños de Molgas',
                ],
            381 =>
                [
                    'id' => 4882,
                    'province_id' => 32,
                    'name' => 'Barbadás',
                ],
            382 =>
                [
                    'id' => 4883,
                    'province_id' => 32,
                    'name' => 'Barco de Valdeorras, O',
                ],
            383 =>
                [
                    'id' => 4884,
                    'province_id' => 32,
                    'name' => 'Beade',
                ],
            384 =>
                [
                    'id' => 4885,
                    'province_id' => 32,
                    'name' => 'Beariz',
                ],
            385 =>
                [
                    'id' => 4886,
                    'province_id' => 32,
                    'name' => 'Blancos, Os',
                ],
            386 =>
                [
                    'id' => 4887,
                    'province_id' => 32,
                    'name' => 'Boborás',
                ],
            387 =>
                [
                    'id' => 4888,
                    'province_id' => 32,
                    'name' => 'Bola, A',
                ],
            388 =>
                [
                    'id' => 4889,
                    'province_id' => 32,
                    'name' => 'Bolo, O',
                ],
            389 =>
                [
                    'id' => 4890,
                    'province_id' => 32,
                    'name' => 'Calvos de Randín',
                ],
            390 =>
                [
                    'id' => 4891,
                    'province_id' => 32,
                    'name' => 'Carballeda de Avia',
                ],
            391 =>
                [
                    'id' => 4892,
                    'province_id' => 32,
                    'name' => 'Carballeda de Valdeorras',
                ],
            392 =>
                [
                    'id' => 4893,
                    'province_id' => 32,
                    'name' => 'Carballiño, O',
                ],
            393 =>
                [
                    'id' => 4894,
                    'province_id' => 32,
                    'name' => 'Cartelle',
                ],
            394 =>
                [
                    'id' => 4895,
                    'province_id' => 32,
                    'name' => 'Castrelo de Miño',
                ],
            395 =>
                [
                    'id' => 4896,
                    'province_id' => 32,
                    'name' => 'Castrelo do Val',
                ],
            396 =>
                [
                    'id' => 4897,
                    'province_id' => 32,
                    'name' => 'Castro Caldelas',
                ],
            397 =>
                [
                    'id' => 4898,
                    'province_id' => 32,
                    'name' => 'Celanova',
                ],
            398 =>
                [
                    'id' => 4899,
                    'province_id' => 32,
                    'name' => 'Cenlle',
                ],
            399 =>
                [
                    'id' => 4900,
                    'province_id' => 32,
                    'name' => 'Chandrexa de Queixa',
                ],
            400 =>
                [
                    'id' => 4901,
                    'province_id' => 32,
                    'name' => 'Coles',
                ],
            401 =>
                [
                    'id' => 4902,
                    'province_id' => 32,
                    'name' => 'Cortegada',
                ],
            402 =>
                [
                    'id' => 4903,
                    'province_id' => 32,
                    'name' => 'Cualedro',
                ],
            403 =>
                [
                    'id' => 4904,
                    'province_id' => 32,
                    'name' => 'Entrimo',
                ],
            404 =>
                [
                    'id' => 4905,
                    'province_id' => 32,
                    'name' => 'Esgos',
                ],
            405 =>
                [
                    'id' => 4906,
                    'province_id' => 32,
                    'name' => 'Gomesende',
                ],
            406 =>
                [
                    'id' => 4907,
                    'province_id' => 32,
                    'name' => 'Gudiña, A',
                ],
            407 =>
                [
                    'id' => 4908,
                    'province_id' => 32,
                    'name' => 'Irixo, O',
                ],
            408 =>
                [
                    'id' => 4909,
                    'province_id' => 32,
                    'name' => 'Larouco',
                ],
            409 =>
                [
                    'id' => 4910,
                    'province_id' => 32,
                    'name' => 'Laza',
                ],
            410 =>
                [
                    'id' => 4911,
                    'province_id' => 32,
                    'name' => 'Leiro',
                ],
            411 =>
                [
                    'id' => 4912,
                    'province_id' => 32,
                    'name' => 'Lobeira',
                ],
            412 =>
                [
                    'id' => 4913,
                    'province_id' => 32,
                    'name' => 'Lobios',
                ],
            413 =>
                [
                    'id' => 4914,
                    'province_id' => 32,
                    'name' => 'Maceda',
                ],
            414 =>
                [
                    'id' => 4915,
                    'province_id' => 32,
                    'name' => 'Manzaneda',
                ],
            415 =>
                [
                    'id' => 4916,
                    'province_id' => 32,
                    'name' => 'Maside',
                ],
            416 =>
                [
                    'id' => 4917,
                    'province_id' => 32,
                    'name' => 'Melón',
                ],
            417 =>
                [
                    'id' => 4918,
                    'province_id' => 32,
                    'name' => 'Merca, A',
                ],
            418 =>
                [
                    'id' => 4919,
                    'province_id' => 32,
                    'name' => 'Mezquita, A',
                ],
            419 =>
                [
                    'id' => 4920,
                    'province_id' => 32,
                    'name' => 'Montederramo',
                ],
            420 =>
                [
                    'id' => 4921,
                    'province_id' => 32,
                    'name' => 'Monterrei',
                ],
            421 =>
                [
                    'id' => 4922,
                    'province_id' => 32,
                    'name' => 'Muíños',
                ],
            422 =>
                [
                    'id' => 4923,
                    'province_id' => 32,
                    'name' => 'Nogueira de Ramuín',
                ],
            423 =>
                [
                    'id' => 4924,
                    'province_id' => 32,
                    'name' => 'Oímbra',
                ],
            424 =>
                [
                    'id' => 4925,
                    'province_id' => 32,
                    'name' => 'Ourense',
                ],
            425 =>
                [
                    'id' => 4926,
                    'province_id' => 32,
                    'name' => 'Paderne de Allariz',
                ],
            426 =>
                [
                    'id' => 4927,
                    'province_id' => 32,
                    'name' => 'Padrenda',
                ],
            427 =>
                [
                    'id' => 4928,
                    'province_id' => 32,
                    'name' => 'Parada de Sil',
                ],
            428 =>
                [
                    'id' => 4929,
                    'province_id' => 32,
                    'name' => 'Pereiro de Aguiar, O',
                ],
            429 =>
                [
                    'id' => 4930,
                    'province_id' => 32,
                    'name' => 'Peroxa, A',
                ],
            430 =>
                [
                    'id' => 4931,
                    'province_id' => 32,
                    'name' => 'Petín',
                ],
            431 =>
                [
                    'id' => 4932,
                    'province_id' => 32,
                    'name' => 'Piñor',
                ],
            432 =>
                [
                    'id' => 4933,
                    'province_id' => 32,
                    'name' => 'Pobra de Trives, A',
                ],
            433 =>
                [
                    'id' => 4934,
                    'province_id' => 32,
                    'name' => 'Pontedeva',
                ],
            434 =>
                [
                    'id' => 4935,
                    'province_id' => 32,
                    'name' => 'Porqueira',
                ],
            435 =>
                [
                    'id' => 4936,
                    'province_id' => 32,
                    'name' => 'Punxín',
                ],
            436 =>
                [
                    'id' => 4937,
                    'province_id' => 32,
                    'name' => 'Quintela de Leirado',
                ],
            437 =>
                [
                    'id' => 4938,
                    'province_id' => 32,
                    'name' => 'Rairiz de Veiga',
                ],
            438 =>
                [
                    'id' => 4939,
                    'province_id' => 32,
                    'name' => 'Ramirás',
                ],
            439 =>
                [
                    'id' => 4940,
                    'province_id' => 32,
                    'name' => 'Ribadavia',
                ],
            440 =>
                [
                    'id' => 4941,
                    'province_id' => 32,
                    'name' => 'Riós',
                ],
            441 =>
                [
                    'id' => 4942,
                    'province_id' => 32,
                    'name' => 'Rúa, A',
                ],
            442 =>
                [
                    'id' => 4943,
                    'province_id' => 32,
                    'name' => 'Rubiá',
                ],
            443 =>
                [
                    'id' => 4944,
                    'province_id' => 32,
                    'name' => 'San Amaro',
                ],
            444 =>
                [
                    'id' => 4945,
                    'province_id' => 32,
                    'name' => 'San Cibrao das Viñas',
                ],
            445 =>
                [
                    'id' => 4946,
                    'province_id' => 32,
                    'name' => 'San Cristovo de Cea',
                ],
            446 =>
                [
                    'id' => 4947,
                    'province_id' => 32,
                    'name' => 'San Xoán de Río',
                ],
            447 =>
                [
                    'id' => 4948,
                    'province_id' => 32,
                    'name' => 'Sandiás',
                ],
            448 =>
                [
                    'id' => 4949,
                    'province_id' => 32,
                    'name' => 'Sarreaus',
                ],
            449 =>
                [
                    'id' => 4950,
                    'province_id' => 32,
                    'name' => 'Taboadela',
                ],
            450 =>
                [
                    'id' => 4951,
                    'province_id' => 32,
                    'name' => 'Teixeira, A',
                ],
            451 =>
                [
                    'id' => 4952,
                    'province_id' => 32,
                    'name' => 'Toén',
                ],
            452 =>
                [
                    'id' => 4953,
                    'province_id' => 32,
                    'name' => 'Trasmiras',
                ],
            453 =>
                [
                    'id' => 4954,
                    'province_id' => 32,
                    'name' => 'Veiga, A',
                ],
            454 =>
                [
                    'id' => 4955,
                    'province_id' => 32,
                    'name' => 'Verea',
                ],
            455 =>
                [
                    'id' => 4956,
                    'province_id' => 32,
                    'name' => 'Verín',
                ],
            456 =>
                [
                    'id' => 4957,
                    'province_id' => 32,
                    'name' => 'Viana do Bolo',
                ],
            457 =>
                [
                    'id' => 4958,
                    'province_id' => 32,
                    'name' => 'Vilamarín',
                ],
            458 =>
                [
                    'id' => 4959,
                    'province_id' => 32,
                    'name' => 'Vilamartín de Valdeorras',
                ],
            459 =>
                [
                    'id' => 4960,
                    'province_id' => 32,
                    'name' => 'Vilar de Barrio',
                ],
            460 =>
                [
                    'id' => 4961,
                    'province_id' => 32,
                    'name' => 'Vilar de Santos',
                ],
            461 =>
                [
                    'id' => 4962,
                    'province_id' => 32,
                    'name' => 'Vilardevós',
                ],
            462 =>
                [
                    'id' => 4963,
                    'province_id' => 32,
                    'name' => 'Vilariño de Conso',
                ],
            463 =>
                [
                    'id' => 4964,
                    'province_id' => 32,
                    'name' => 'Xinzo de Limia',
                ],
            464 =>
                [
                    'id' => 4965,
                    'province_id' => 32,
                    'name' => 'Xunqueira de Ambía',
                ],
            465 =>
                [
                    'id' => 4966,
                    'province_id' => 32,
                    'name' => 'Xunqueira de Espadanedo',
                ],
            466 =>
                [
                    'id' => 4967,
                    'province_id' => 33,
                    'name' => 'Allande',
                ],
            467 =>
                [
                    'id' => 4968,
                    'province_id' => 33,
                    'name' => 'Aller',
                ],
            468 =>
                [
                    'id' => 4969,
                    'province_id' => 33,
                    'name' => 'Amieva',
                ],
            469 =>
                [
                    'id' => 4970,
                    'province_id' => 33,
                    'name' => 'Avilés',
                ],
            470 =>
                [
                    'id' => 4971,
                    'province_id' => 33,
                    'name' => 'Belmonte de Miranda',
                ],
            471 =>
                [
                    'id' => 4972,
                    'province_id' => 33,
                    'name' => 'Bimenes',
                ],
            472 =>
                [
                    'id' => 4973,
                    'province_id' => 33,
                    'name' => 'Boal',
                ],
            473 =>
                [
                    'id' => 4974,
                    'province_id' => 33,
                    'name' => 'Cabrales',
                ],
            474 =>
                [
                    'id' => 4975,
                    'province_id' => 33,
                    'name' => 'Cabranes',
                ],
            475 =>
                [
                    'id' => 4976,
                    'province_id' => 33,
                    'name' => 'Candamo',
                ],
            476 =>
                [
                    'id' => 4977,
                    'province_id' => 33,
                    'name' => 'Cangas de Onís',
                ],
            477 =>
                [
                    'id' => 4978,
                    'province_id' => 33,
                    'name' => 'Cangas del Narcea',
                ],
            478 =>
                [
                    'id' => 4979,
                    'province_id' => 33,
                    'name' => 'Caravia',
                ],
            479 =>
                [
                    'id' => 4980,
                    'province_id' => 33,
                    'name' => 'Carreño',
                ],
            480 =>
                [
                    'id' => 4981,
                    'province_id' => 33,
                    'name' => 'Caso',
                ],
            481 =>
                [
                    'id' => 4982,
                    'province_id' => 33,
                    'name' => 'Castrillón',
                ],
            482 =>
                [
                    'id' => 4983,
                    'province_id' => 33,
                    'name' => 'Castropol',
                ],
            483 =>
                [
                    'id' => 4984,
                    'province_id' => 33,
                    'name' => 'Coaña',
                ],
            484 =>
                [
                    'id' => 4985,
                    'province_id' => 33,
                    'name' => 'Colunga',
                ],
            485 =>
                [
                    'id' => 4986,
                    'province_id' => 33,
                    'name' => 'Corvera de Asturias',
                ],
            486 =>
                [
                    'id' => 4987,
                    'province_id' => 33,
                    'name' => 'Cudillero',
                ],
            487 =>
                [
                    'id' => 4988,
                    'province_id' => 33,
                    'name' => 'Degaña',
                ],
            488 =>
                [
                    'id' => 4989,
                    'province_id' => 33,
                    'name' => 'Franco, El',
                ],
            489 =>
                [
                    'id' => 4990,
                    'province_id' => 33,
                    'name' => 'Gijón',
                ],
            490 =>
                [
                    'id' => 4991,
                    'province_id' => 33,
                    'name' => 'Gozón',
                ],
            491 =>
                [
                    'id' => 4992,
                    'province_id' => 33,
                    'name' => 'Grado',
                ],
            492 =>
                [
                    'id' => 4993,
                    'province_id' => 33,
                    'name' => 'Grandas de Salime',
                ],
            493 =>
                [
                    'id' => 4994,
                    'province_id' => 33,
                    'name' => 'Ibias',
                ],
            494 =>
                [
                    'id' => 4995,
                    'province_id' => 33,
                    'name' => 'Illano',
                ],
            495 =>
                [
                    'id' => 4996,
                    'province_id' => 33,
                    'name' => 'Illas',
                ],
            496 =>
                [
                    'id' => 4997,
                    'province_id' => 33,
                    'name' => 'Langreo',
                ],
            497 =>
                [
                    'id' => 4998,
                    'province_id' => 33,
                    'name' => 'Laviana',
                ],
            498 =>
                [
                    'id' => 4999,
                    'province_id' => 33,
                    'name' => 'Lena',
                ],
            499 =>
                [
                    'id' => 5000,
                    'province_id' => 33,
                    'name' => 'Llanera',
                ],
        ]);
        \DB::table('localities')->insert(array(
            0 =>
                [
                    'id' => 5001,
                    'province_id' => 33,
                    'name' => 'Llanes',
                ],
            1 =>
                [
                    'id' => 5002,
                    'province_id' => 33,
                    'name' => 'Mieres',
                ],
            2 =>
                [
                    'id' => 5003,
                    'province_id' => 33,
                    'name' => 'Morcín',
                ],
            3 =>
                [
                    'id' => 5004,
                    'province_id' => 33,
                    'name' => 'Muros de Nalón',
                ],
            4 =>
                [
                    'id' => 5005,
                    'province_id' => 33,
                    'name' => 'Nava',
                ],
            5 =>
                [
                    'id' => 5006,
                    'province_id' => 33,
                    'name' => 'Navia',
                ],
            6 =>
                [
                    'id' => 5007,
                    'province_id' => 33,
                    'name' => 'Noreña',
                ],
            7 =>
                [
                    'id' => 5008,
                    'province_id' => 33,
                    'name' => 'Onís',
                ],
            8 =>
                [
                    'id' => 5009,
                    'province_id' => 33,
                    'name' => 'Oviedo',
                ],
            9 =>
                [
                    'id' => 5010,
                    'province_id' => 33,
                    'name' => 'Parres',
                ],
            10 =>
                [
                    'id' => 5011,
                    'province_id' => 33,
                    'name' => 'Peñamellera Alta',
                ],
            11 =>
                [
                    'id' => 5012,
                    'province_id' => 33,
                    'name' => 'Peñamellera Baja',
                ],
            12 =>
                [
                    'id' => 5013,
                    'province_id' => 33,
                    'name' => 'Pesoz',
                ],
            13 =>
                [
                    'id' => 5014,
                    'province_id' => 33,
                    'name' => 'Piloña',
                ],
            14 =>
                [
                    'id' => 5015,
                    'province_id' => 33,
                    'name' => 'Ponga',
                ],
            15 =>
                [
                    'id' => 5016,
                    'province_id' => 33,
                    'name' => 'Pravia',
                ],
            16 =>
                [
                    'id' => 5017,
                    'province_id' => 33,
                    'name' => 'Proaza',
                ],
            17 =>
                [
                    'id' => 5018,
                    'province_id' => 33,
                    'name' => 'Quirós',
                ],
            18 =>
                [
                    'id' => 5019,
                    'province_id' => 33,
                    'name' => 'Regueras, Las',
                ],
            19 =>
                [
                    'id' => 5020,
                    'province_id' => 33,
                    'name' => 'Ribadedeva',
                ],
            20 =>
                [
                    'id' => 5021,
                    'province_id' => 33,
                    'name' => 'Ribadesella',
                ],
            21 =>
                [
                    'id' => 5022,
                    'province_id' => 33,
                    'name' => 'Ribera de Arriba',
                ],
            22 =>
                [
                    'id' => 5023,
                    'province_id' => 33,
                    'name' => 'Riosa',
                ],
            23 =>
                [
                    'id' => 5024,
                    'province_id' => 33,
                    'name' => 'Salas',
                ],
            24 =>
                [
                    'id' => 5025,
                    'province_id' => 33,
                    'name' => 'San Martín de Oscos',
                ],
            25 =>
                [
                    'id' => 5026,
                    'province_id' => 33,
                    'name' => 'San Martín del Rey Aurelio',
                ],
            26 =>
                [
                    'id' => 5027,
                    'province_id' => 33,
                    'name' => 'San Tirso de Abres',
                ],
            27 =>
                [
                    'id' => 5028,
                    'province_id' => 33,
                    'name' => 'Santa Eulalia de Oscos',
                ],
            28 =>
                [
                    'id' => 5029,
                    'province_id' => 33,
                    'name' => 'Santo Adriano',
                ],
            29 =>
                [
                    'id' => 5030,
                    'province_id' => 33,
                    'name' => 'Sariego',
                ],
            30 =>
                [
                    'id' => 5031,
                    'province_id' => 33,
                    'name' => 'Siero',
                ],
            31 =>
                [
                    'id' => 5032,
                    'province_id' => 33,
                    'name' => 'Sobrescobio',
                ],
            32 =>
                [
                    'id' => 5033,
                    'province_id' => 33,
                    'name' => 'Somiedo',
                ],
            33 =>
                [
                    'id' => 5034,
                    'province_id' => 33,
                    'name' => 'Soto del Barco',
                ],
            34 =>
                [
                    'id' => 5035,
                    'province_id' => 33,
                    'name' => 'Tapia de Casariego',
                ],
            35 =>
                [
                    'id' => 5036,
                    'province_id' => 33,
                    'name' => 'Taramundi',
                ],
            36 =>
                [
                    'id' => 5037,
                    'province_id' => 33,
                    'name' => 'Teverga',
                ],
            37 =>
                [
                    'id' => 5038,
                    'province_id' => 33,
                    'name' => 'Tineo',
                ],
            38 =>
                [
                    'id' => 5039,
                    'province_id' => 33,
                    'name' => 'Valdés',
                ],
            39 =>
                [
                    'id' => 5040,
                    'province_id' => 33,
                    'name' => 'Vegadeo',
                ],
            40 =>
                [
                    'id' => 5041,
                    'province_id' => 33,
                    'name' => 'Villanueva de Oscos',
                ],
            41 =>
                [
                    'id' => 5042,
                    'province_id' => 33,
                    'name' => 'Villaviciosa',
                ],
            42 =>
                [
                    'id' => 5043,
                    'province_id' => 33,
                    'name' => 'Villayón',
                ],
            43 =>
                [
                    'id' => 5044,
                    'province_id' => 33,
                    'name' => 'Yernes y Tameza',
                ],
            44 =>
                [
                    'id' => 5045,
                    'province_id' => 34,
                    'name' => 'Abarca de Campos',
                ],
            45 =>
                [
                    'id' => 5046,
                    'province_id' => 34,
                    'name' => 'Abia de las Torres',
                ],
            46 =>
                [
                    'id' => 5047,
                    'province_id' => 34,
                    'name' => 'Aguilar de Campoo',
                ],
            47 =>
                [
                    'id' => 5048,
                    'province_id' => 34,
                    'name' => 'Alar del Rey',
                ],
            48 =>
                [
                    'id' => 5049,
                    'province_id' => 34,
                    'name' => 'Alba de Cerrato',
                ],
            49 =>
                [
                    'id' => 5050,
                    'province_id' => 34,
                    'name' => 'Amayuelas de Arriba',
                ],
            50 =>
                [
                    'id' => 5051,
                    'province_id' => 34,
                    'name' => 'Ampudia',
                ],
            51 =>
                [
                    'id' => 5052,
                    'province_id' => 34,
                    'name' => 'Amusco',
                ],
            52 =>
                [
                    'id' => 5053,
                    'province_id' => 34,
                    'name' => 'Antigüedad',
                ],
            53 =>
                [
                    'id' => 5054,
                    'province_id' => 34,
                    'name' => 'Arconada',
                ],
            54 =>
                [
                    'id' => 5055,
                    'province_id' => 34,
                    'name' => 'Astudillo',
                ],
            55 =>
                [
                    'id' => 5056,
                    'province_id' => 34,
                    'name' => 'Autilla del Pino',
                ],
            56 =>
                [
                    'id' => 5057,
                    'province_id' => 34,
                    'name' => 'Autillo de Campos',
                ],
            57 =>
                [
                    'id' => 5058,
                    'province_id' => 34,
                    'name' => 'Ayuela',
                ],
            58 =>
                [
                    'id' => 5059,
                    'province_id' => 34,
                    'name' => 'Baltanás',
                ],
            59 =>
                [
                    'id' => 5060,
                    'province_id' => 34,
                    'name' => 'Baquerín de Campos',
                ],
            60 =>
                [
                    'id' => 5061,
                    'province_id' => 34,
                    'name' => 'Bárcena de Campos',
                ],
            61 =>
                [
                    'id' => 5062,
                    'province_id' => 34,
                    'name' => 'Barruelo de Santullán',
                ],
            62 =>
                [
                    'id' => 5063,
                    'province_id' => 34,
                    'name' => 'Báscones de Ojeda',
                ],
            63 =>
                [
                    'id' => 5064,
                    'province_id' => 34,
                    'name' => 'Becerril de Campos',
                ],
            64 =>
                [
                    'id' => 5065,
                    'province_id' => 34,
                    'name' => 'Belmonte de Campos',
                ],
            65 =>
                [
                    'id' => 5066,
                    'province_id' => 34,
                    'name' => 'Berzosilla',
                ],
            66 =>
                [
                    'id' => 5067,
                    'province_id' => 34,
                    'name' => 'Boada de Campos',
                ],
            67 =>
                [
                    'id' => 5068,
                    'province_id' => 34,
                    'name' => 'Boadilla de Rioseco',
                ],
            68 =>
                [
                    'id' => 5069,
                    'province_id' => 34,
                    'name' => 'Boadilla del Camino',
                ],
            69 =>
                [
                    'id' => 5070,
                    'province_id' => 34,
                    'name' => 'Brañosera',
                ],
            70 =>
                [
                    'id' => 5071,
                    'province_id' => 34,
                    'name' => 'Buenavista de Valdavia',
                ],
            71 =>
                [
                    'id' => 5072,
                    'province_id' => 34,
                    'name' => 'Bustillo de la Vega',
                ],
            72 =>
                [
                    'id' => 5073,
                    'province_id' => 34,
                    'name' => 'Bustillo del Páramo de Carrión',
                ],
            73 =>
                [
                    'id' => 5074,
                    'province_id' => 34,
                    'name' => 'Calahorra de Boedo',
                ],
            74 =>
                [
                    'id' => 5075,
                    'province_id' => 34,
                    'name' => 'Calzada de los Molinos',
                ],
            75 =>
                [
                    'id' => 5076,
                    'province_id' => 34,
                    'name' => 'Capillas',
                ],
            76 =>
                [
                    'id' => 5077,
                    'province_id' => 34,
                    'name' => 'Cardeñosa de Volpejera',
                ],
            77 =>
                [
                    'id' => 5078,
                    'province_id' => 34,
                    'name' => 'Carrión de los Condes',
                ],
            78 =>
                [
                    'id' => 5079,
                    'province_id' => 34,
                    'name' => 'Castil de Vela',
                ],
            79 =>
                [
                    'id' => 5080,
                    'province_id' => 34,
                    'name' => 'Castrejón de la Peña',
                ],
            80 =>
                [
                    'id' => 5081,
                    'province_id' => 34,
                    'name' => 'Castrillo de Don Juan',
                ],
            81 =>
                [
                    'id' => 5082,
                    'province_id' => 34,
                    'name' => 'Castrillo de Onielo',
                ],
            82 =>
                [
                    'id' => 5083,
                    'province_id' => 34,
                    'name' => 'Castrillo de Villavega',
                ],
            83 =>
                [
                    'id' => 5084,
                    'province_id' => 34,
                    'name' => 'Castromocho',
                ],
            84 =>
                [
                    'id' => 5085,
                    'province_id' => 34,
                    'name' => 'Cervatos de la Cueza',
                ],
            85 =>
                [
                    'id' => 5086,
                    'province_id' => 34,
                    'name' => 'Cervera de Pisuerga',
                ],
            86 =>
                [
                    'id' => 5087,
                    'province_id' => 34,
                    'name' => 'Cevico de la Torre',
                ],
            87 =>
                [
                    'id' => 5088,
                    'province_id' => 34,
                    'name' => 'Cevico Navero',
                ],
            88 =>
                [
                    'id' => 5089,
                    'province_id' => 34,
                    'name' => 'Cisneros',
                ],
            89 =>
                [
                    'id' => 5090,
                    'province_id' => 34,
                    'name' => 'Cobos de Cerrato',
                ],
            90 =>
                [
                    'id' => 5091,
                    'province_id' => 34,
                    'name' => 'Collazos de Boedo',
                ],
            91 =>
                [
                    'id' => 5092,
                    'province_id' => 34,
                    'name' => 'Congosto de Valdavia',
                ],
            92 =>
                [
                    'id' => 5093,
                    'province_id' => 34,
                    'name' => 'Cordovilla la Real',
                ],
            93 =>
                [
                    'id' => 5094,
                    'province_id' => 34,
                    'name' => 'Cubillas de Cerrato',
                ],
            94 =>
                [
                    'id' => 5095,
                    'province_id' => 34,
                    'name' => 'Dehesa de Montejo',
                ],
            95 =>
                [
                    'id' => 5096,
                    'province_id' => 34,
                    'name' => 'Dehesa de Romanos',
                ],
            96 =>
                [
                    'id' => 5097,
                    'province_id' => 34,
                    'name' => 'Dueñas',
                ],
            97 =>
                [
                    'id' => 5098,
                    'province_id' => 34,
                    'name' => 'Espinosa de Cerrato',
                ],
            98 =>
                [
                    'id' => 5099,
                    'province_id' => 34,
                    'name' => 'Espinosa de Villagonzalo',
                ],
            99 =>
                [
                    'id' => 5100,
                    'province_id' => 34,
                    'name' => 'Frechilla',
                ],
            100 =>
                [
                    'id' => 5101,
                    'province_id' => 34,
                    'name' => 'Fresno del Río',
                ],
            101 =>
                [
                    'id' => 5102,
                    'province_id' => 34,
                    'name' => 'Frómista',
                ],
            102 =>
                [
                    'id' => 5103,
                    'province_id' => 34,
                    'name' => 'Fuentes de Nava',
                ],
            103 =>
                [
                    'id' => 5104,
                    'province_id' => 34,
                    'name' => 'Fuentes de Valdepero',
                ],
            104 =>
                [
                    'id' => 5105,
                    'province_id' => 34,
                    'name' => 'Grijota',
                ],
            105 =>
                [
                    'id' => 5106,
                    'province_id' => 34,
                    'name' => 'Guardo',
                ],
            106 =>
                [
                    'id' => 5107,
                    'province_id' => 34,
                    'name' => 'Guaza de Campos',
                ],
            107 =>
                [
                    'id' => 5108,
                    'province_id' => 34,
                    'name' => 'Hérmedes de Cerrato',
                ],
            108 =>
                [
                    'id' => 5109,
                    'province_id' => 34,
                    'name' => 'Herrera de Pisuerga',
                ],
            109 =>
                [
                    'id' => 5110,
                    'province_id' => 34,
                    'name' => 'Herrera de Valdecañas',
                ],
            110 =>
                [
                    'id' => 5111,
                    'province_id' => 34,
                    'name' => 'Hontoria de Cerrato',
                ],
            111 =>
                [
                    'id' => 5112,
                    'province_id' => 34,
                    'name' => 'Hornillos de Cerrato',
                ],
            112 =>
                [
                    'id' => 5113,
                    'province_id' => 34,
                    'name' => 'Husillos',
                ],
            113 =>
                [
                    'id' => 5114,
                    'province_id' => 34,
                    'name' => 'Itero de la Vega',
                ],
            114 =>
                [
                    'id' => 5115,
                    'province_id' => 34,
                    'name' => 'Lagartos',
                ],
            115 =>
                [
                    'id' => 5116,
                    'province_id' => 34,
                    'name' => 'Lantadilla',
                ],
            116 =>
                [
                    'id' => 5117,
                    'province_id' => 34,
                    'name' => 'Ledigos',
                ],
            117 =>
                [
                    'id' => 5118,
                    'province_id' => 34,
                    'name' => 'Loma de Ucieza',
                ],
            118 =>
                [
                    'id' => 5119,
                    'province_id' => 34,
                    'name' => 'Lomas',
                ],
            119 =>
                [
                    'id' => 5120,
                    'province_id' => 34,
                    'name' => 'Magaz de Pisuerga',
                ],
            120 =>
                [
                    'id' => 5121,
                    'province_id' => 34,
                    'name' => 'Manquillos',
                ],
            121 =>
                [
                    'id' => 5122,
                    'province_id' => 34,
                    'name' => 'Mantinos',
                ],
            122 =>
                [
                    'id' => 5123,
                    'province_id' => 34,
                    'name' => 'Marcilla de Campos',
                ],
            123 =>
                [
                    'id' => 5124,
                    'province_id' => 34,
                    'name' => 'Mazariegos',
                ],
            124 =>
                [
                    'id' => 5125,
                    'province_id' => 34,
                    'name' => 'Mazuecos de Valdeginate',
                ],
            125 =>
                [
                    'id' => 5126,
                    'province_id' => 34,
                    'name' => 'Melgar de Yuso',
                ],
            126 =>
                [
                    'id' => 5127,
                    'province_id' => 34,
                    'name' => 'Meneses de Campos',
                ],
            127 =>
                [
                    'id' => 5128,
                    'province_id' => 34,
                    'name' => 'Micieces de Ojeda',
                ],
            128 =>
                [
                    'id' => 5129,
                    'province_id' => 34,
                    'name' => 'Monzón de Campos',
                ],
            129 =>
                [
                    'id' => 5130,
                    'province_id' => 34,
                    'name' => 'Moratinos',
                ],
            130 =>
                [
                    'id' => 5131,
                    'province_id' => 34,
                    'name' => 'Mudá',
                ],
            131 =>
                [
                    'id' => 5132,
                    'province_id' => 34,
                    'name' => 'Nogal de las Huertas',
                ],
            132 =>
                [
                    'id' => 5133,
                    'province_id' => 34,
                    'name' => 'Olea de Boedo',
                ],
            133 =>
                [
                    'id' => 5134,
                    'province_id' => 34,
                    'name' => 'Olmos de Ojeda',
                ],
            134 =>
                [
                    'id' => 5135,
                    'province_id' => 34,
                    'name' => 'Osornillo',
                ],
            135 =>
                [
                    'id' => 5136,
                    'province_id' => 34,
                    'name' => 'Osorno la Mayor',
                ],
            136 =>
                [
                    'id' => 5137,
                    'province_id' => 34,
                    'name' => 'Palencia',
                ],
            137 =>
                [
                    'id' => 5138,
                    'province_id' => 34,
                    'name' => 'Palenzuela',
                ],
            138 =>
                [
                    'id' => 5139,
                    'province_id' => 34,
                    'name' => 'Páramo de Boedo',
                ],
            139 =>
                [
                    'id' => 5140,
                    'province_id' => 34,
                    'name' => 'Paredes de Nava',
                ],
            140 =>
                [
                    'id' => 5141,
                    'province_id' => 34,
                    'name' => 'Payo de Ojeda',
                ],
            141 =>
                [
                    'id' => 5142,
                    'province_id' => 34,
                    'name' => 'Pedraza de Campos',
                ],
            142 =>
                [
                    'id' => 5143,
                    'province_id' => 34,
                    'name' => 'Pedrosa de la Vega',
                ],
            143 =>
                [
                    'id' => 5144,
                    'province_id' => 34,
                    'name' => 'Perales',
                ],
            144 =>
                [
                    'id' => 5145,
                    'province_id' => 34,
                    'name' => 'Pernía, La',
                ],
            145 =>
                [
                    'id' => 5146,
                    'province_id' => 34,
                    'name' => 'Pino del Río',
                ],
            146 =>
                [
                    'id' => 5147,
                    'province_id' => 34,
                    'name' => 'Piña de Campos',
                ],
            147 =>
                [
                    'id' => 5148,
                    'province_id' => 34,
                    'name' => 'Población de Arroyo',
                ],
            148 =>
                [
                    'id' => 5149,
                    'province_id' => 34,
                    'name' => 'Población de Campos',
                ],
            149 =>
                [
                    'id' => 5150,
                    'province_id' => 34,
                    'name' => 'Población de Cerrato',
                ],
            150 =>
                [
                    'id' => 5151,
                    'province_id' => 34,
                    'name' => 'Polentinos',
                ],
            151 =>
                [
                    'id' => 5152,
                    'province_id' => 34,
                    'name' => 'Pomar de Valdivia',
                ],
            152 =>
                [
                    'id' => 5153,
                    'province_id' => 34,
                    'name' => 'Poza de la Vega',
                ],
            153 =>
                [
                    'id' => 5154,
                    'province_id' => 34,
                    'name' => 'Pozo de Urama',
                ],
            154 =>
                [
                    'id' => 5155,
                    'province_id' => 34,
                    'name' => 'Prádanos de Ojeda',
                ],
            155 =>
                [
                    'id' => 5156,
                    'province_id' => 34,
                    'name' => 'Puebla de Valdavia, La',
                ],
            156 =>
                [
                    'id' => 5157,
                    'province_id' => 34,
                    'name' => 'Quintana del Puente',
                ],
            157 =>
                [
                    'id' => 5158,
                    'province_id' => 34,
                    'name' => 'Quintanilla de Onsoña',
                ],
            158 =>
                [
                    'id' => 5159,
                    'province_id' => 34,
                    'name' => 'Reinoso de Cerrato',
                ],
            159 =>
                [
                    'id' => 5160,
                    'province_id' => 34,
                    'name' => 'Renedo de la Vega',
                ],
            160 =>
                [
                    'id' => 5161,
                    'province_id' => 34,
                    'name' => 'Requena de Campos',
                ],
            161 =>
                [
                    'id' => 5162,
                    'province_id' => 34,
                    'name' => 'Respenda de la Peña',
                ],
            162 =>
                [
                    'id' => 5163,
                    'province_id' => 34,
                    'name' => 'Revenga de Campos',
                ],
            163 =>
                [
                    'id' => 5164,
                    'province_id' => 34,
                    'name' => 'Revilla de Collazos',
                ],
            164 =>
                [
                    'id' => 5165,
                    'province_id' => 34,
                    'name' => 'Ribas de Campos',
                ],
            165 =>
                [
                    'id' => 5166,
                    'province_id' => 34,
                    'name' => 'Riberos de la Cueza',
                ],
            166 =>
                [
                    'id' => 5167,
                    'province_id' => 34,
                    'name' => 'Saldaña',
                ],
            167 =>
                [
                    'id' => 5168,
                    'province_id' => 34,
                    'name' => 'Salinas de Pisuerga',
                ],
            168 =>
                [
                    'id' => 5169,
                    'province_id' => 34,
                    'name' => 'San Cebrián de Campos',
                ],
            169 =>
                [
                    'id' => 5170,
                    'province_id' => 34,
                    'name' => 'San Cebrián de Mudá',
                ],
            170 =>
                [
                    'id' => 5171,
                    'province_id' => 34,
                    'name' => 'San Cristóbal de Boedo',
                ],
            171 =>
                [
                    'id' => 5172,
                    'province_id' => 34,
                    'name' => 'San Mamés de Campos',
                ],
            172 =>
                [
                    'id' => 5173,
                    'province_id' => 34,
                    'name' => 'San Román de la Cuba',
                ],
            173 =>
                [
                    'id' => 5174,
                    'province_id' => 34,
                    'name' => 'Santa Cecilia del Alcor',
                ],
            174 =>
                [
                    'id' => 5175,
                    'province_id' => 34,
                    'name' => 'Santa Cruz de Boedo',
                ],
            175 =>
                [
                    'id' => 5176,
                    'province_id' => 34,
                    'name' => 'Santervás de la Vega',
                ],
            176 =>
                [
                    'id' => 5177,
                    'province_id' => 34,
                    'name' => 'Santibáñez de Ecla',
                ],
            177 =>
                [
                    'id' => 5178,
                    'province_id' => 34,
                    'name' => 'Santibáñez de la Peña',
                ],
            178 =>
                [
                    'id' => 5179,
                    'province_id' => 34,
                    'name' => 'Santoyo',
                ],
            179 =>
                [
                    'id' => 5180,
                    'province_id' => 34,
                    'name' => 'Serna, La',
                ],
            180 =>
                [
                    'id' => 5181,
                    'province_id' => 34,
                    'name' => 'Soto de Cerrato',
                ],
            181 =>
                [
                    'id' => 5182,
                    'province_id' => 34,
                    'name' => 'Sotobañado y Priorato',
                ],
            182 =>
                [
                    'id' => 5183,
                    'province_id' => 34,
                    'name' => 'Tabanera de Cerrato',
                ],
            183 =>
                [
                    'id' => 5184,
                    'province_id' => 34,
                    'name' => 'Tabanera de Valdavia',
                ],
            184 =>
                [
                    'id' => 5185,
                    'province_id' => 34,
                    'name' => 'Támara de Campos',
                ],
            185 =>
                [
                    'id' => 5186,
                    'province_id' => 34,
                    'name' => 'Tariego de Cerrato',
                ],
            186 =>
                [
                    'id' => 5187,
                    'province_id' => 34,
                    'name' => 'Torquemada',
                ],
            187 =>
                [
                    'id' => 5188,
                    'province_id' => 34,
                    'name' => 'Torremormojón',
                ],
            188 =>
                [
                    'id' => 5189,
                    'province_id' => 34,
                    'name' => 'Triollo',
                ],
            189 =>
                [
                    'id' => 5190,
                    'province_id' => 34,
                    'name' => 'Valbuena de Pisuerga',
                ],
            190 =>
                [
                    'id' => 5191,
                    'province_id' => 34,
                    'name' => 'Valdeolmillos',
                ],
            191 =>
                [
                    'id' => 5192,
                    'province_id' => 34,
                    'name' => 'Valderrábano',
                ],
            192 =>
                [
                    'id' => 5193,
                    'province_id' => 34,
                    'name' => 'Valde-Ucieza',
                ],
            193 =>
                [
                    'id' => 5194,
                    'province_id' => 34,
                    'name' => 'Valle de Cerrato',
                ],
            194 =>
                [
                    'id' => 5195,
                    'province_id' => 34,
                    'name' => 'Valle del Retortillo',
                ],
            195 =>
                [
                    'id' => 5196,
                    'province_id' => 34,
                    'name' => 'Velilla del Río Carrión',
                ],
            196 =>
                [
                    'id' => 5197,
                    'province_id' => 34,
                    'name' => 'Venta de Baños',
                ],
            197 =>
                [
                    'id' => 5198,
                    'province_id' => 34,
                    'name' => 'Vertavillo',
                ],
            198 =>
                [
                    'id' => 5199,
                    'province_id' => 34,
                    'name' => 'Vid de Ojeda, La',
                ],
            199 =>
                [
                    'id' => 5200,
                    'province_id' => 34,
                    'name' => 'Villabasta de Valdavia',
                ],
            200 =>
                [
                    'id' => 5201,
                    'province_id' => 34,
                    'name' => 'Villacidaler',
                ],
            201 =>
                [
                    'id' => 5202,
                    'province_id' => 34,
                    'name' => 'Villaconancio',
                ],
            202 =>
                [
                    'id' => 5203,
                    'province_id' => 34,
                    'name' => 'Villada',
                ],
            203 =>
                [
                    'id' => 5204,
                    'province_id' => 34,
                    'name' => 'Villaeles de Valdavia',
                ],
            204 =>
                [
                    'id' => 5205,
                    'province_id' => 34,
                    'name' => 'Villahán',
                ],
            205 =>
                [
                    'id' => 5206,
                    'province_id' => 34,
                    'name' => 'Villaherreros',
                ],
            206 =>
                [
                    'id' => 5207,
                    'province_id' => 34,
                    'name' => 'Villalaco',
                ],
            207 =>
                [
                    'id' => 5208,
                    'province_id' => 34,
                    'name' => 'Villalba de Guardo',
                ],
            208 =>
                [
                    'id' => 5209,
                    'province_id' => 34,
                    'name' => 'Villalcázar de Sirga',
                ],
            209 =>
                [
                    'id' => 5210,
                    'province_id' => 34,
                    'name' => 'Villalcón',
                ],
            210 =>
                [
                    'id' => 5211,
                    'province_id' => 34,
                    'name' => 'Villalobón',
                ],
            211 =>
                [
                    'id' => 5212,
                    'province_id' => 34,
                    'name' => 'Villaluenga de la Vega',
                ],
            212 =>
                [
                    'id' => 5213,
                    'province_id' => 34,
                    'name' => 'Villamartín de Campos',
                ],
            213 =>
                [
                    'id' => 5214,
                    'province_id' => 34,
                    'name' => 'Villamediana',
                ],
            214 =>
                [
                    'id' => 5215,
                    'province_id' => 34,
                    'name' => 'Villameriel',
                ],
            215 =>
                [
                    'id' => 5216,
                    'province_id' => 34,
                    'name' => 'Villamoronta',
                ],
            216 =>
                [
                    'id' => 5217,
                    'province_id' => 34,
                    'name' => 'Villamuera de la Cueza',
                ],
            217 =>
                [
                    'id' => 5218,
                    'province_id' => 34,
                    'name' => 'Villamuriel de Cerrato',
                ],
            218 =>
                [
                    'id' => 5219,
                    'province_id' => 34,
                    'name' => 'Villanueva del Rebollar',
                ],
            219 =>
                [
                    'id' => 5220,
                    'province_id' => 34,
                    'name' => 'Villanuño de Valdavia',
                ],
            220 =>
                [
                    'id' => 5221,
                    'province_id' => 34,
                    'name' => 'Villaprovedo',
                ],
            221 =>
                [
                    'id' => 5222,
                    'province_id' => 34,
                    'name' => 'Villarmentero de Campos',
                ],
            222 =>
                [
                    'id' => 5223,
                    'province_id' => 34,
                    'name' => 'Villarrabé',
                ],
            223 =>
                [
                    'id' => 5224,
                    'province_id' => 34,
                    'name' => 'Villarramiel',
                ],
            224 =>
                [
                    'id' => 5225,
                    'province_id' => 34,
                    'name' => 'Villasarracino',
                ],
            225 =>
                [
                    'id' => 5226,
                    'province_id' => 34,
                    'name' => 'Villasila de Valdavia',
                ],
            226 =>
                [
                    'id' => 5227,
                    'province_id' => 34,
                    'name' => 'Villaturde',
                ],
            227 =>
                [
                    'id' => 5228,
                    'province_id' => 34,
                    'name' => 'Villaumbrales',
                ],
            228 =>
                [
                    'id' => 5229,
                    'province_id' => 34,
                    'name' => 'Villaviudas',
                ],
            229 =>
                [
                    'id' => 5230,
                    'province_id' => 34,
                    'name' => 'Villerías de Campos',
                ],
            230 =>
                [
                    'id' => 5231,
                    'province_id' => 34,
                    'name' => 'Villodre',
                ],
            231 =>
                [
                    'id' => 5232,
                    'province_id' => 34,
                    'name' => 'Villodrigo',
                ],
            232 =>
                [
                    'id' => 5233,
                    'province_id' => 34,
                    'name' => 'Villoldo',
                ],
            233 =>
                [
                    'id' => 5234,
                    'province_id' => 34,
                    'name' => 'Villota del Páramo',
                ],
            234 =>
                [
                    'id' => 5235,
                    'province_id' => 34,
                    'name' => 'Villovieco',
                ],
            235 =>
                [
                    'id' => 5236,
                    'province_id' => 35,
                    'name' => 'Agaete',
                ],
            236 =>
                [
                    'id' => 5237,
                    'province_id' => 35,
                    'name' => 'Agüimes',
                ],
            237 =>
                [
                    'id' => 5238,
                    'province_id' => 35,
                    'name' => 'Aldea de San Nicolás, La',
                ],
            238 =>
                [
                    'id' => 5239,
                    'province_id' => 35,
                    'name' => 'Antigua',
                ],
            239 =>
                [
                    'id' => 5240,
                    'province_id' => 35,
                    'name' => 'Arrecife',
                ],
            240 =>
                [
                    'id' => 5241,
                    'province_id' => 35,
                    'name' => 'Artenara',
                ],
            241 =>
                [
                    'id' => 5242,
                    'province_id' => 35,
                    'name' => 'Arucas',
                ],
            242 =>
                [
                    'id' => 5243,
                    'province_id' => 35,
                    'name' => 'Betancuria',
                ],
            243 =>
                [
                    'id' => 5244,
                    'province_id' => 35,
                    'name' => 'Firgas',
                ],
            244 =>
                [
                    'id' => 5245,
                    'province_id' => 35,
                    'name' => 'Gáldar',
                ],
            245 =>
                [
                    'id' => 5246,
                    'province_id' => 35,
                    'name' => 'Haría',
                ],
            246 =>
                [
                    'id' => 5247,
                    'province_id' => 35,
                    'name' => 'Ingenio',
                ],
            247 =>
                [
                    'id' => 5248,
                    'province_id' => 35,
                    'name' => 'Mogán',
                ],
            248 =>
                [
                    'id' => 5249,
                    'province_id' => 35,
                    'name' => 'Moya',
                ],
            249 =>
                [
                    'id' => 5250,
                    'province_id' => 35,
                    'name' => 'Oliva, La',
                ],
            250 =>
                [
                    'id' => 5251,
                    'province_id' => 35,
                    'name' => 'Pájara',
                ],
            251 =>
                [
                    'id' => 5252,
                    'province_id' => 35,
                    'name' => 'Palmas de Gran Canaria, Las',
                ],
            252 =>
                [
                    'id' => 5253,
                    'province_id' => 35,
                    'name' => 'Puerto del Rosario',
                ],
            253 =>
                [
                    'id' => 5254,
                    'province_id' => 35,
                    'name' => 'San Bartolomé',
                ],
            254 =>
                [
                    'id' => 5255,
                    'province_id' => 35,
                    'name' => 'San Bartolomé de Tirajana',
                ],
            255 =>
                [
                    'id' => 5256,
                    'province_id' => 35,
                    'name' => 'Santa Brígida',
                ],
            256 =>
                [
                    'id' => 5257,
                    'province_id' => 35,
                    'name' => 'Santa Lucía de Tirajana',
                ],
            257 =>
                [
                    'id' => 5258,
                    'province_id' => 35,
                    'name' => 'Santa María de Guía de Gran Canaria',
                ],
            258 =>
                [
                    'id' => 5259,
                    'province_id' => 35,
                    'name' => 'Teguise',
                ],
            259 =>
                [
                    'id' => 5260,
                    'province_id' => 35,
                    'name' => 'Tejeda',
                ],
            260 =>
                [
                    'id' => 5261,
                    'province_id' => 35,
                    'name' => 'Telde',
                ],
            261 =>
                [
                    'id' => 5262,
                    'province_id' => 35,
                    'name' => 'Teror',
                ],
            262 =>
                [
                    'id' => 5263,
                    'province_id' => 35,
                    'name' => 'Tías',
                ],
            263 =>
                [
                    'id' => 5264,
                    'province_id' => 35,
                    'name' => 'Tinajo',
                ],
            264 =>
                [
                    'id' => 5265,
                    'province_id' => 35,
                    'name' => 'Tuineje',
                ],
            265 =>
                [
                    'id' => 5266,
                    'province_id' => 35,
                    'name' => 'Valleseco',
                ],
            266 =>
                [
                    'id' => 5267,
                    'province_id' => 35,
                    'name' => 'Valsequillo de Gran Canaria',
                ],
            267 =>
                [
                    'id' => 5268,
                    'province_id' => 35,
                    'name' => 'Vega de San Mateo',
                ],
            268 =>
                [
                    'id' => 5269,
                    'province_id' => 35,
                    'name' => 'Yaiza',
                ],
            269 =>
                [
                    'id' => 5270,
                    'province_id' => 36,
                    'name' => 'Agolada',
                ],
            270 =>
                [
                    'id' => 5271,
                    'province_id' => 36,
                    'name' => 'Arbo',
                ],
            271 =>
                [
                    'id' => 5272,
                    'province_id' => 36,
                    'name' => 'Baiona',
                ],
            272 =>
                [
                    'id' => 5273,
                    'province_id' => 36,
                    'name' => 'Barro',
                ],
            273 =>
                [
                    'id' => 5274,
                    'province_id' => 36,
                    'name' => 'Bueu',
                ],
            274 =>
                [
                    'id' => 5275,
                    'province_id' => 36,
                    'name' => 'Caldas de Reis',
                ],
            275 =>
                [
                    'id' => 5276,
                    'province_id' => 36,
                    'name' => 'Cambados',
                ],
            276 =>
                [
                    'id' => 5277,
                    'province_id' => 36,
                    'name' => 'Campo Lameiro',
                ],
            277 =>
                [
                    'id' => 5278,
                    'province_id' => 36,
                    'name' => 'Cangas',
                ],
            278 =>
                [
                    'id' => 5279,
                    'province_id' => 36,
                    'name' => 'Cañiza, A',
                ],
            279 =>
                [
                    'id' => 5280,
                    'province_id' => 36,
                    'name' => 'Catoira',
                ],
            280 =>
                [
                    'id' => 5281,
                    'province_id' => 36,
                    'name' => 'Cerdedo',
                ],
            281 =>
                [
                    'id' => 5282,
                    'province_id' => 36,
                    'name' => 'Cotobade',
                ],
            282 =>
                [
                    'id' => 5283,
                    'province_id' => 36,
                    'name' => 'Covelo',
                ],
            283 =>
                [
                    'id' => 5284,
                    'province_id' => 36,
                    'name' => 'Crecente',
                ],
            284 =>
                [
                    'id' => 5285,
                    'province_id' => 36,
                    'name' => 'Cuntis',
                ],
            285 =>
                [
                    'id' => 5286,
                    'province_id' => 36,
                    'name' => 'Dozón',
                ],
            286 =>
                [
                    'id' => 5287,
                    'province_id' => 36,
                    'name' => 'Estrada, A',
                ],
            287 =>
                [
                    'id' => 5288,
                    'province_id' => 36,
                    'name' => 'Forcarei',
                ],
            288 =>
                [
                    'id' => 5289,
                    'province_id' => 36,
                    'name' => 'Fornelos de Montes',
                ],
            289 =>
                [
                    'id' => 5290,
                    'province_id' => 36,
                    'name' => 'Gondomar',
                ],
            290 =>
                [
                    'id' => 5291,
                    'province_id' => 36,
                    'name' => 'Grove, O',
                ],
            291 =>
                [
                    'id' => 5292,
                    'province_id' => 36,
                    'name' => 'Guarda, A',
                ],
            292 =>
                [
                    'id' => 5293,
                    'province_id' => 36,
                    'name' => 'Illa de Arousa, A',
                ],
            293 =>
                [
                    'id' => 5294,
                    'province_id' => 36,
                    'name' => 'Lalín',
                ],
            294 =>
                [
                    'id' => 5295,
                    'province_id' => 36,
                    'name' => 'Lama, A',
                ],
            295 =>
                [
                    'id' => 5296,
                    'province_id' => 36,
                    'name' => 'Marín',
                ],
            296 =>
                [
                    'id' => 5297,
                    'province_id' => 36,
                    'name' => 'Meaño',
                ],
            297 =>
                [
                    'id' => 5298,
                    'province_id' => 36,
                    'name' => 'Meis',
                ],
            298 =>
                [
                    'id' => 5299,
                    'province_id' => 36,
                    'name' => 'Moaña',
                ],
            299 =>
                [
                    'id' => 5300,
                    'province_id' => 36,
                    'name' => 'Mondariz',
                ],
            300 =>
                [
                    'id' => 5301,
                    'province_id' => 36,
                    'name' => 'Mondariz-Balneario',
                ],
            301 =>
                [
                    'id' => 5302,
                    'province_id' => 36,
                    'name' => 'Moraña',
                ],
            302 =>
                [
                    'id' => 5303,
                    'province_id' => 36,
                    'name' => 'Mos',
                ],
            303 =>
                [
                    'id' => 5304,
                    'province_id' => 36,
                    'name' => 'Neves, As',
                ],
            304 =>
                [
                    'id' => 5305,
                    'province_id' => 36,
                    'name' => 'Nigrán',
                ],
            305 =>
                [
                    'id' => 5306,
                    'province_id' => 36,
                    'name' => 'Oia',
                ],
            306 =>
                [
                    'id' => 5307,
                    'province_id' => 36,
                    'name' => 'Pazos de Borbén',
                ],
            307 =>
                [
                    'id' => 5308,
                    'province_id' => 36,
                    'name' => 'Poio',
                ],
            308 =>
                [
                    'id' => 5309,
                    'province_id' => 36,
                    'name' => 'Ponte Caldelas',
                ],
            309 =>
                [
                    'id' => 5310,
                    'province_id' => 36,
                    'name' => 'Ponteareas',
                ],
            310 =>
                [
                    'id' => 5311,
                    'province_id' => 36,
                    'name' => 'Pontecesures',
                ],
            311 =>
                [
                    'id' => 5312,
                    'province_id' => 36,
                    'name' => 'Pontevedra',
                ],
            312 =>
                [
                    'id' => 5313,
                    'province_id' => 36,
                    'name' => 'Porriño, O',
                ],
            313 =>
                [
                    'id' => 5314,
                    'province_id' => 36,
                    'name' => 'Portas',
                ],
            314 =>
                [
                    'id' => 5315,
                    'province_id' => 36,
                    'name' => 'Redondela',
                ],
            315 =>
                [
                    'id' => 5316,
                    'province_id' => 36,
                    'name' => 'Ribadumia',
                ],
            316 =>
                [
                    'id' => 5317,
                    'province_id' => 36,
                    'name' => 'Rodeiro',
                ],
            317 =>
                [
                    'id' => 5318,
                    'province_id' => 36,
                    'name' => 'Rosal, O',
                ],
            318 =>
                [
                    'id' => 5319,
                    'province_id' => 36,
                    'name' => 'Salceda de Caselas',
                ],
            319 =>
                [
                    'id' => 5320,
                    'province_id' => 36,
                    'name' => 'Salvaterra de Miño',
                ],
            320 =>
                [
                    'id' => 5321,
                    'province_id' => 36,
                    'name' => 'Sanxenxo',
                ],
            321 =>
                [
                    'id' => 5322,
                    'province_id' => 36,
                    'name' => 'Silleda',
                ],
            322 =>
                [
                    'id' => 5323,
                    'province_id' => 36,
                    'name' => 'Soutomaior',
                ],
            323 =>
                [
                    'id' => 5324,
                    'province_id' => 36,
                    'name' => 'Tomiño',
                ],
            324 =>
                [
                    'id' => 5325,
                    'province_id' => 36,
                    'name' => 'Tui',
                ],
            325 =>
                [
                    'id' => 5326,
                    'province_id' => 36,
                    'name' => 'Valga',
                ],
            326 =>
                [
                    'id' => 5327,
                    'province_id' => 36,
                    'name' => 'Vigo',
                ],
            327 =>
                [
                    'id' => 5328,
                    'province_id' => 36,
                    'name' => 'Vila de Cruces',
                ],
            328 =>
                [
                    'id' => 5329,
                    'province_id' => 36,
                    'name' => 'Vilaboa',
                ],
            329 =>
                [
                    'id' => 5330,
                    'province_id' => 36,
                    'name' => 'Vilagarcía de Arousa',
                ],
            330 =>
                [
                    'id' => 5331,
                    'province_id' => 36,
                    'name' => 'Vilanova de Arousa',
                ],
            331 =>
                [
                    'id' => 5332,
                    'province_id' => 37,
                    'name' => 'Abusejo',
                ],
            332 =>
                [
                    'id' => 5333,
                    'province_id' => 37,
                    'name' => 'Agallas',
                ],
            333 =>
                [
                    'id' => 5334,
                    'province_id' => 37,
                    'name' => 'Ahigal de los Aceiteros',
                ],
            334 =>
                [
                    'id' => 5335,
                    'province_id' => 37,
                    'name' => 'Ahigal de Villarino',
                ],
            335 =>
                [
                    'id' => 5336,
                    'province_id' => 37,
                    'name' => 'Alameda de Gardón, La',
                ],
            336 =>
                [
                    'id' => 5337,
                    'province_id' => 37,
                    'name' => 'Alamedilla, La',
                ],
            337 =>
                [
                    'id' => 5338,
                    'province_id' => 37,
                    'name' => 'Alaraz',
                ],
            338 =>
                [
                    'id' => 5339,
                    'province_id' => 37,
                    'name' => 'Alba de Tormes',
                ],
            339 =>
                [
                    'id' => 5340,
                    'province_id' => 37,
                    'name' => 'Alba de Yeltes',
                ],
            340 =>
                [
                    'id' => 5341,
                    'province_id' => 37,
                    'name' => 'Alberca, La',
                ],
            341 =>
                [
                    'id' => 5342,
                    'province_id' => 37,
                    'name' => 'Alberguería de Argañán, La',
                ],
            342 =>
                [
                    'id' => 5343,
                    'province_id' => 37,
                    'name' => 'Alconada',
                ],
            343 =>
                [
                    'id' => 5344,
                    'province_id' => 37,
                    'name' => 'Aldea del Obispo',
                ],
            344 =>
                [
                    'id' => 5345,
                    'province_id' => 37,
                    'name' => 'Aldeacipreste',
                ],
            345 =>
                [
                    'id' => 5346,
                    'province_id' => 37,
                    'name' => 'Aldeadávila de la Ribera',
                ],
            346 =>
                [
                    'id' => 5347,
                    'province_id' => 37,
                    'name' => 'Aldealengua',
                ],
            347 =>
                [
                    'id' => 5348,
                    'province_id' => 37,
                    'name' => 'Aldeanueva de Figueroa',
                ],
            348 =>
                [
                    'id' => 5349,
                    'province_id' => 37,
                    'name' => 'Aldeanueva de la Sierra',
                ],
            349 =>
                [
                    'id' => 5350,
                    'province_id' => 37,
                    'name' => 'Aldearrodrigo',
                ],
            350 =>
                [
                    'id' => 5351,
                    'province_id' => 37,
                    'name' => 'Aldearrubia',
                ],
            351 =>
                [
                    'id' => 5352,
                    'province_id' => 37,
                    'name' => 'Aldeaseca de Alba',
                ],
            352 =>
                [
                    'id' => 5353,
                    'province_id' => 37,
                    'name' => 'Aldeaseca de la Frontera',
                ],
            353 =>
                [
                    'id' => 5354,
                    'province_id' => 37,
                    'name' => 'Aldeatejada',
                ],
            354 =>
                [
                    'id' => 5355,
                    'province_id' => 37,
                    'name' => 'Aldeavieja de Tormes',
                ],
            355 =>
                [
                    'id' => 5356,
                    'province_id' => 37,
                    'name' => 'Aldehuela de la Bóveda',
                ],
            356 =>
                [
                    'id' => 5357,
                    'province_id' => 37,
                    'name' => 'Aldehuela de Yeltes',
                ],
            357 =>
                [
                    'id' => 5358,
                    'province_id' => 37,
                    'name' => 'Almenara de Tormes',
                ],
            358 =>
                [
                    'id' => 5359,
                    'province_id' => 37,
                    'name' => 'Almendra',
                ],
            359 =>
                [
                    'id' => 5360,
                    'province_id' => 37,
                    'name' => 'Anaya de Alba',
                ],
            360 =>
                [
                    'id' => 5361,
                    'province_id' => 37,
                    'name' => 'Añover de Tormes',
                ],
            361 =>
                [
                    'id' => 5362,
                    'province_id' => 37,
                    'name' => 'Arabayona de Mógica',
                ],
            362 =>
                [
                    'id' => 5363,
                    'province_id' => 37,
                    'name' => 'Arapiles',
                ],
            363 =>
                [
                    'id' => 5364,
                    'province_id' => 37,
                    'name' => 'Arcediano',
                ],
            364 =>
                [
                    'id' => 5365,
                    'province_id' => 37,
                    'name' => 'Arco, El',
                ],
            365 =>
                [
                    'id' => 5366,
                    'province_id' => 37,
                    'name' => 'Armenteros',
                ],
            366 =>
                [
                    'id' => 5367,
                    'province_id' => 37,
                    'name' => 'Atalaya, La',
                ],
            367 =>
                [
                    'id' => 5368,
                    'province_id' => 37,
                    'name' => 'Babilafuente',
                ],
            368 =>
                [
                    'id' => 5369,
                    'province_id' => 37,
                    'name' => 'Bañobárez',
                ],
            369 =>
                [
                    'id' => 5370,
                    'province_id' => 37,
                    'name' => 'Barbadillo',
                ],
            370 =>
                [
                    'id' => 5371,
                    'province_id' => 37,
                    'name' => 'Barbalos',
                ],
            371 =>
                [
                    'id' => 5372,
                    'province_id' => 37,
                    'name' => 'Barceo',
                ],
            372 =>
                [
                    'id' => 5373,
                    'province_id' => 37,
                    'name' => 'Barruecopardo',
                ],
            373 =>
                [
                    'id' => 5374,
                    'province_id' => 37,
                    'name' => 'Bastida, La',
                ],
            374 =>
                [
                    'id' => 5375,
                    'province_id' => 37,
                    'name' => 'Béjar',
                ],
            375 =>
                [
                    'id' => 5376,
                    'province_id' => 37,
                    'name' => 'Beleña',
                ],
            376 =>
                [
                    'id' => 5377,
                    'province_id' => 37,
                    'name' => 'Bermellar',
                ],
            377 =>
                [
                    'id' => 5378,
                    'province_id' => 37,
                    'name' => 'Berrocal de Huebra',
                ],
            378 =>
                [
                    'id' => 5379,
                    'province_id' => 37,
                    'name' => 'Berrocal de Salvatierra',
                ],
            379 =>
                [
                    'id' => 5380,
                    'province_id' => 37,
                    'name' => 'Boada',
                ],
            380 =>
                [
                    'id' => 5381,
                    'province_id' => 37,
                    'name' => 'Bodón, El',
                ],
            381 =>
                [
                    'id' => 5382,
                    'province_id' => 37,
                    'name' => 'Bogajo',
                ],
            382 =>
                [
                    'id' => 5383,
                    'province_id' => 37,
                    'name' => 'Bouza, La',
                ],
            383 =>
                [
                    'id' => 5384,
                    'province_id' => 37,
                    'name' => 'Bóveda del Río Almar',
                ],
            384 =>
                [
                    'id' => 5385,
                    'province_id' => 37,
                    'name' => 'Brincones',
                ],
            385 =>
                [
                    'id' => 5386,
                    'province_id' => 37,
                    'name' => 'Buenamadre',
                ],
            386 =>
                [
                    'id' => 5387,
                    'province_id' => 37,
                    'name' => 'Buenavista',
                ],
            387 =>
                [
                    'id' => 5388,
                    'province_id' => 37,
                    'name' => 'Cabaco, El',
                ],
            388 =>
                [
                    'id' => 5389,
                    'province_id' => 37,
                    'name' => 'Cabeza de Béjar, La',
                ],
            389 =>
                [
                    'id' => 5390,
                    'province_id' => 37,
                    'name' => 'Cabeza del Caballo',
                ],
            390 =>
                [
                    'id' => 5391,
                    'province_id' => 37,
                    'name' => 'Cabezabellosa de la Calzada',
                ],
            391 =>
                [
                    'id' => 5392,
                    'province_id' => 37,
                    'name' => 'Cabrerizos',
                ],
            392 =>
                [
                    'id' => 5393,
                    'province_id' => 37,
                    'name' => 'Cabrillas',
                ],
            393 =>
                [
                    'id' => 5394,
                    'province_id' => 37,
                    'name' => 'Calvarrasa de Abajo',
                ],
            394 =>
                [
                    'id' => 5395,
                    'province_id' => 37,
                    'name' => 'Calvarrasa de Arriba',
                ],
            395 =>
                [
                    'id' => 5396,
                    'province_id' => 37,
                    'name' => 'Calzada de Béjar, La',
                ],
            396 =>
                [
                    'id' => 5397,
                    'province_id' => 37,
                    'name' => 'Calzada de Don Diego',
                ],
            397 =>
                [
                    'id' => 5398,
                    'province_id' => 37,
                    'name' => 'Calzada de Valdunciel',
                ],
            398 =>
                [
                    'id' => 5399,
                    'province_id' => 37,
                    'name' => 'Campillo de Azaba',
                ],
            399 =>
                [
                    'id' => 5400,
                    'province_id' => 37,
                    'name' => 'Campo de Peñaranda, El',
                ],
            400 =>
                [
                    'id' => 5401,
                    'province_id' => 37,
                    'name' => 'Candelario',
                ],
            401 =>
                [
                    'id' => 5402,
                    'province_id' => 37,
                    'name' => 'Canillas de Abajo',
                ],
            402 =>
                [
                    'id' => 5403,
                    'province_id' => 37,
                    'name' => 'Cantagallo',
                ],
            403 =>
                [
                    'id' => 5404,
                    'province_id' => 37,
                    'name' => 'Cantalapiedra',
                ],
            404 =>
                [
                    'id' => 5405,
                    'province_id' => 37,
                    'name' => 'Cantalpino',
                ],
            405 =>
                [
                    'id' => 5406,
                    'province_id' => 37,
                    'name' => 'Cantaracillo',
                ],
            406 =>
                [
                    'id' => 5407,
                    'province_id' => 37,
                    'name' => 'Carbajosa de la Sagrada',
                ],
            407 =>
                [
                    'id' => 5408,
                    'province_id' => 37,
                    'name' => 'Carpio de Azaba',
                ],
            408 =>
                [
                    'id' => 5409,
                    'province_id' => 37,
                    'name' => 'Carrascal de Barregas',
                ],
            409 =>
                [
                    'id' => 5410,
                    'province_id' => 37,
                    'name' => 'Carrascal del Obispo',
                ],
            410 =>
                [
                    'id' => 5411,
                    'province_id' => 37,
                    'name' => 'Casafranca',
                ],
            411 =>
                [
                    'id' => 5412,
                    'province_id' => 37,
                    'name' => 'Casas del Conde, Las',
                ],
            412 =>
                [
                    'id' => 5413,
                    'province_id' => 37,
                    'name' => 'Casillas de Flores',
                ],
            413 =>
                [
                    'id' => 5414,
                    'province_id' => 37,
                    'name' => 'Castellanos de Moriscos',
                ],
            414 =>
                [
                    'id' => 5415,
                    'province_id' => 37,
                    'name' => 'Castellanos de Villiquera',
                ],
            415 =>
                [
                    'id' => 5416,
                    'province_id' => 37,
                    'name' => 'Castillejo de Martín Viejo',
                ],
            416 =>
                [
                    'id' => 5417,
                    'province_id' => 37,
                    'name' => 'Castraz',
                ],
            417 =>
                [
                    'id' => 5418,
                    'province_id' => 37,
                    'name' => 'Cepeda',
                ],
            418 =>
                [
                    'id' => 5419,
                    'province_id' => 37,
                    'name' => 'Cereceda de la Sierra',
                ],
            419 =>
                [
                    'id' => 5420,
                    'province_id' => 37,
                    'name' => 'Cerezal de Peñahorcada',
                ],
            420 =>
                [
                    'id' => 5421,
                    'province_id' => 37,
                    'name' => 'Cerralbo',
                ],
            421 =>
                [
                    'id' => 5422,
                    'province_id' => 37,
                    'name' => 'Cerro, El',
                ],
            422 =>
                [
                    'id' => 5423,
                    'province_id' => 37,
                    'name' => 'Cespedosa de Tormes',
                ]
            )
        );
    }
}
       