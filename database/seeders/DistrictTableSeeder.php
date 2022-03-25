<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('district')->delete();
        
        \DB::table('district')->insert(array (
            0 => 
            array (
                '_name' => 'Bình Chánh',
                '_prefix' => 'Huyện',
                '_province_id' => 1,
                'id' => 1,
            ),
            1 => 
            array (
                '_name' => 'Bình Tân',
                '_prefix' => 'Quận',
                '_province_id' => 1,
                'id' => 2,
            ),
            2 => 
            array (
                '_name' => 'Bình Thạnh',
                '_prefix' => 'Quận',
                '_province_id' => 1,
                'id' => 3,
            ),
            3 => 
            array (
                '_name' => 'Cần Giờ',
                '_prefix' => 'Huyện',
                '_province_id' => 1,
                'id' => 4,
            ),
            4 => 
            array (
                '_name' => 'Củ Chi',
                '_prefix' => 'Huyện',
                '_province_id' => 1,
                'id' => 5,
            ),
            5 => 
            array (
                '_name' => 'Gò Vấp',
                '_prefix' => 'Quận',
                '_province_id' => 1,
                'id' => 6,
            ),
            6 => 
            array (
                '_name' => 'Hóc Môn',
                '_prefix' => 'Huyện',
                '_province_id' => 1,
                'id' => 7,
            ),
            7 => 
            array (
                '_name' => 'Nhà Bè',
                '_prefix' => 'Huyện',
                '_province_id' => 1,
                'id' => 8,
            ),
            8 => 
            array (
                '_name' => 'Phú Nhuận',
                '_prefix' => 'Quận',
                '_province_id' => 1,
                'id' => 9,
            ),
            9 => 
            array (
                '_name' => 'Quận 1',
                '_prefix' => '',
                '_province_id' => 1,
                'id' => 10,
            ),
            10 => 
            array (
                '_name' => 'Quận 10',
                '_prefix' => '',
                '_province_id' => 1,
                'id' => 11,
            ),
            11 => 
            array (
                '_name' => 'Quận 11',
                '_prefix' => '',
                '_province_id' => 1,
                'id' => 12,
            ),
            12 => 
            array (
                '_name' => 'Quận 12',
                '_prefix' => '',
                '_province_id' => 1,
                'id' => 13,
            ),
            13 => 
            array (
                '_name' => 'Quận 2',
                '_prefix' => '',
                '_province_id' => 1,
                'id' => 14,
            ),
            14 => 
            array (
                '_name' => 'Quận 3',
                '_prefix' => '',
                '_province_id' => 1,
                'id' => 15,
            ),
            15 => 
            array (
                '_name' => 'Quận 4',
                '_prefix' => '',
                '_province_id' => 1,
                'id' => 16,
            ),
            16 => 
            array (
                '_name' => 'Quận 5',
                '_prefix' => '',
                '_province_id' => 1,
                'id' => 17,
            ),
            17 => 
            array (
                '_name' => 'Quận 6',
                '_prefix' => '',
                '_province_id' => 1,
                'id' => 18,
            ),
            18 => 
            array (
                '_name' => 'Quận 7',
                '_prefix' => '',
                '_province_id' => 1,
                'id' => 19,
            ),
            19 => 
            array (
                '_name' => 'Quận 8',
                '_prefix' => '',
                '_province_id' => 1,
                'id' => 20,
            ),
            20 => 
            array (
                '_name' => 'Quận 9',
                '_prefix' => '',
                '_province_id' => 1,
                'id' => 21,
            ),
            21 => 
            array (
                '_name' => 'Tân Bình',
                '_prefix' => 'Quận',
                '_province_id' => 1,
                'id' => 22,
            ),
            22 => 
            array (
                '_name' => 'Tân Phú',
                '_prefix' => 'Quận',
                '_province_id' => 1,
                'id' => 23,
            ),
            23 => 
            array (
                '_name' => 'Thủ Đức',
                '_prefix' => 'Quận',
                '_province_id' => 1,
                'id' => 24,
            ),
            24 => 
            array (
                '_name' => 'Ba Đình',
                '_prefix' => 'Quận',
                '_province_id' => 2,
                'id' => 25,
            ),
            25 => 
            array (
                '_name' => 'Ba Vì',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 26,
            ),
            26 => 
            array (
                '_name' => 'Bắc Từ Liêm',
                '_prefix' => 'Quận',
                '_province_id' => 2,
                'id' => 27,
            ),
            27 => 
            array (
                '_name' => 'Cầu Giấy',
                '_prefix' => 'Quận',
                '_province_id' => 2,
                'id' => 28,
            ),
            28 => 
            array (
                '_name' => 'Chương Mỹ',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 29,
            ),
            29 => 
            array (
                '_name' => 'Đan Phượng',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 30,
            ),
            30 => 
            array (
                '_name' => 'Đông Anh',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 31,
            ),
            31 => 
            array (
                '_name' => 'Đống Đa',
                '_prefix' => 'Quận',
                '_province_id' => 2,
                'id' => 32,
            ),
            32 => 
            array (
                '_name' => 'Gia Lâm',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 33,
            ),
            33 => 
            array (
                '_name' => 'Hà Đông',
                '_prefix' => 'Quận',
                '_province_id' => 2,
                'id' => 34,
            ),
            34 => 
            array (
                '_name' => 'Hai Bà Trưng',
                '_prefix' => 'Quận',
                '_province_id' => 2,
                'id' => 35,
            ),
            35 => 
            array (
                '_name' => 'Hoài Đức',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 36,
            ),
            36 => 
            array (
                '_name' => 'Hoàn Kiếm',
                '_prefix' => 'Quận',
                '_province_id' => 2,
                'id' => 37,
            ),
            37 => 
            array (
                '_name' => 'Hoàng Mai',
                '_prefix' => 'Quận',
                '_province_id' => 2,
                'id' => 38,
            ),
            38 => 
            array (
                '_name' => 'Long Biên',
                '_prefix' => 'Quận',
                '_province_id' => 2,
                'id' => 39,
            ),
            39 => 
            array (
                '_name' => 'Mê Linh',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 40,
            ),
            40 => 
            array (
                '_name' => 'Mỹ Đức',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 41,
            ),
            41 => 
            array (
                '_name' => 'Nam Từ Liêm',
                '_prefix' => 'Quận',
                '_province_id' => 2,
                'id' => 42,
            ),
            42 => 
            array (
                '_name' => 'Phú Xuyên',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 43,
            ),
            43 => 
            array (
                '_name' => 'Phúc Thọ',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 44,
            ),
            44 => 
            array (
                '_name' => 'Quốc Oai',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 45,
            ),
            45 => 
            array (
                '_name' => 'Sóc Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 46,
            ),
            46 => 
            array (
                '_name' => 'Sơn Tây',
                '_prefix' => 'Thị xã',
                '_province_id' => 2,
                'id' => 47,
            ),
            47 => 
            array (
                '_name' => 'Tây Hồ',
                '_prefix' => 'Quận',
                '_province_id' => 2,
                'id' => 48,
            ),
            48 => 
            array (
                '_name' => 'Thạch Thất',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 49,
            ),
            49 => 
            array (
                '_name' => 'Thanh Oai',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 50,
            ),
            50 => 
            array (
                '_name' => 'Thanh Trì',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 51,
            ),
            51 => 
            array (
                '_name' => 'Thanh Xuân',
                '_prefix' => 'Quận',
                '_province_id' => 2,
                'id' => 52,
            ),
            52 => 
            array (
                '_name' => 'Thường Tín',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 53,
            ),
            53 => 
            array (
                '_name' => 'Ứng Hòa',
                '_prefix' => 'Huyện',
                '_province_id' => 2,
                'id' => 54,
            ),
            54 => 
            array (
                '_name' => 'Cẩm Lệ',
                '_prefix' => 'Quận',
                '_province_id' => 3,
                'id' => 55,
            ),
            55 => 
            array (
                '_name' => 'Hải Châu',
                '_prefix' => 'Quận',
                '_province_id' => 3,
                'id' => 56,
            ),
            56 => 
            array (
                '_name' => 'Hòa Vang',
                '_prefix' => 'Huyện',
                '_province_id' => 3,
                'id' => 57,
            ),
            57 => 
            array (
                '_name' => 'Hoàng Sa',
                '_prefix' => 'Huyện',
                '_province_id' => 3,
                'id' => 58,
            ),
            58 => 
            array (
                '_name' => 'Liên Chiểu',
                '_prefix' => 'Quận',
                '_province_id' => 3,
                'id' => 59,
            ),
            59 => 
            array (
                '_name' => 'Ngũ Hành Sơn',
                '_prefix' => 'Quận',
                '_province_id' => 3,
                'id' => 60,
            ),
            60 => 
            array (
                '_name' => 'Sơn Trà',
                '_prefix' => 'Quận',
                '_province_id' => 3,
                'id' => 61,
            ),
            61 => 
            array (
                '_name' => 'Thanh Khê',
                '_prefix' => 'Quận',
                '_province_id' => 3,
                'id' => 62,
            ),
            62 => 
            array (
                '_name' => 'Bàu Bàng',
                '_prefix' => 'Huyện',
                '_province_id' => 4,
                'id' => 63,
            ),
            63 => 
            array (
                '_name' => 'Bến Cát',
                '_prefix' => 'Thị xã',
                '_province_id' => 4,
                'id' => 64,
            ),
            64 => 
            array (
                '_name' => 'Dầu Tiếng',
                '_prefix' => 'Huyện',
                '_province_id' => 4,
                'id' => 65,
            ),
            65 => 
            array (
                '_name' => 'Dĩ An',
                '_prefix' => 'Thị xã',
                '_province_id' => 4,
                'id' => 66,
            ),
            66 => 
            array (
                '_name' => 'Phú Giáo',
                '_prefix' => 'Huyện',
                '_province_id' => 4,
                'id' => 67,
            ),
            67 => 
            array (
                '_name' => 'Tân Uyên',
                '_prefix' => 'Huyện',
                '_province_id' => 4,
                'id' => 68,
            ),
            68 => 
            array (
                '_name' => 'Thủ Dầu Một',
                '_prefix' => 'Thị xã',
                '_province_id' => 4,
                'id' => 69,
            ),
            69 => 
            array (
                '_name' => 'Thuận An',
                '_prefix' => 'Huyện',
                '_province_id' => 4,
                'id' => 70,
            ),
            70 => 
            array (
                '_name' => 'Biên Hòa',
                '_prefix' => 'Thành phố',
                '_province_id' => 5,
                'id' => 71,
            ),
            71 => 
            array (
                '_name' => 'Cẩm Mỹ',
                '_prefix' => 'Huyện',
                '_province_id' => 5,
                'id' => 72,
            ),
            72 => 
            array (
                '_name' => 'Định Quán',
                '_prefix' => 'Huyện',
                '_province_id' => 5,
                'id' => 73,
            ),
            73 => 
            array (
                '_name' => 'Long Khánh',
                '_prefix' => 'Thị xã',
                '_province_id' => 5,
                'id' => 74,
            ),
            74 => 
            array (
                '_name' => 'Long Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 5,
                'id' => 75,
            ),
            75 => 
            array (
                '_name' => 'Nhơn Trạch',
                '_prefix' => 'Huyện',
                '_province_id' => 5,
                'id' => 76,
            ),
            76 => 
            array (
                '_name' => 'Tân Phú',
                '_prefix' => 'Quận',
                '_province_id' => 5,
                'id' => 77,
            ),
            77 => 
            array (
                '_name' => 'Thống Nhất',
                '_prefix' => 'Huyện',
                '_province_id' => 5,
                'id' => 78,
            ),
            78 => 
            array (
                '_name' => 'Trảng Bom',
                '_prefix' => 'Huyện',
                '_province_id' => 5,
                'id' => 79,
            ),
            79 => 
            array (
                '_name' => 'Vĩnh Cửu',
                '_prefix' => 'Huyện',
                '_province_id' => 5,
                'id' => 80,
            ),
            80 => 
            array (
                '_name' => 'Xuân Lộc',
                '_prefix' => 'Huyện',
                '_province_id' => 5,
                'id' => 81,
            ),
            81 => 
            array (
                '_name' => 'Cam Lâm',
                '_prefix' => 'Huyện',
                '_province_id' => 6,
                'id' => 82,
            ),
            82 => 
            array (
                '_name' => 'Cam Ranh',
                '_prefix' => 'Thành phố',
                '_province_id' => 6,
                'id' => 83,
            ),
            83 => 
            array (
                '_name' => 'Diên Khánh',
                '_prefix' => 'Huyện',
                '_province_id' => 6,
                'id' => 84,
            ),
            84 => 
            array (
                '_name' => 'Khánh Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 6,
                'id' => 85,
            ),
            85 => 
            array (
                '_name' => 'Khánh Vĩnh',
                '_prefix' => 'Huyện',
                '_province_id' => 6,
                'id' => 86,
            ),
            86 => 
            array (
                '_name' => 'Nha Trang',
                '_prefix' => 'Thành phố',
                '_province_id' => 6,
                'id' => 87,
            ),
            87 => 
            array (
                '_name' => 'Ninh Hòa',
                '_prefix' => 'Thị xã',
                '_province_id' => 6,
                'id' => 88,
            ),
            88 => 
            array (
                '_name' => 'Trường Sa',
                '_prefix' => 'Huyện',
                '_province_id' => 6,
                'id' => 89,
            ),
            89 => 
            array (
                '_name' => 'Vạn Ninh',
                '_prefix' => 'Huyện',
                '_province_id' => 6,
                'id' => 90,
            ),
            90 => 
            array (
                '_name' => 'An Dương',
                '_prefix' => 'Huyện',
                '_province_id' => 7,
                'id' => 91,
            ),
            91 => 
            array (
                '_name' => 'An Lão',
                '_prefix' => 'Huyện',
                '_province_id' => 7,
                'id' => 92,
            ),
            92 => 
            array (
                '_name' => 'Bạch Long Vĩ',
                '_prefix' => 'Huyện',
                '_province_id' => 7,
                'id' => 93,
            ),
            93 => 
            array (
                '_name' => 'Cát Hải',
                '_prefix' => 'Huyện',
                '_province_id' => 7,
                'id' => 94,
            ),
            94 => 
            array (
                '_name' => 'Đồ Sơn',
                '_prefix' => 'Quận',
                '_province_id' => 7,
                'id' => 95,
            ),
            95 => 
            array (
                '_name' => 'Dương Kinh',
                '_prefix' => 'Quận',
                '_province_id' => 7,
                'id' => 96,
            ),
            96 => 
            array (
                '_name' => 'Hải An',
                '_prefix' => 'Quận',
                '_province_id' => 7,
                'id' => 97,
            ),
            97 => 
            array (
                '_name' => 'Hồng Bàng',
                '_prefix' => 'Quận',
                '_province_id' => 7,
                'id' => 98,
            ),
            98 => 
            array (
                '_name' => 'Kiến An',
                '_prefix' => 'Quận',
                '_province_id' => 7,
                'id' => 99,
            ),
            99 => 
            array (
                '_name' => 'Kiến Thụy',
                '_prefix' => 'Huyện',
                '_province_id' => 7,
                'id' => 100,
            ),
            100 => 
            array (
                '_name' => 'Lê Chân',
                '_prefix' => 'Quận',
                '_province_id' => 7,
                'id' => 101,
            ),
            101 => 
            array (
                '_name' => 'Ngô Quyền',
                '_prefix' => 'Quận',
                '_province_id' => 7,
                'id' => 102,
            ),
            102 => 
            array (
                '_name' => 'Thủy Nguyên',
                '_prefix' => 'Huyện',
                '_province_id' => 7,
                'id' => 103,
            ),
            103 => 
            array (
                '_name' => 'Tiên Lãng',
                '_prefix' => 'Huyện',
                '_province_id' => 7,
                'id' => 104,
            ),
            104 => 
            array (
                '_name' => 'Vĩnh Bảo',
                '_prefix' => 'Huyện',
                '_province_id' => 7,
                'id' => 105,
            ),
            105 => 
            array (
                '_name' => 'Bến Lức',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 106,
            ),
            106 => 
            array (
                '_name' => 'Cần Đước',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 107,
            ),
            107 => 
            array (
                '_name' => 'Cần Giuộc',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 108,
            ),
            108 => 
            array (
                '_name' => 'Châu Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 109,
            ),
            109 => 
            array (
                '_name' => 'Đức Hòa',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 110,
            ),
            110 => 
            array (
                '_name' => 'Đức Huệ',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 111,
            ),
            111 => 
            array (
                '_name' => 'Kiến Tường',
                '_prefix' => 'Thị xã',
                '_province_id' => 8,
                'id' => 112,
            ),
            112 => 
            array (
                '_name' => 'Mộc Hóa',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 113,
            ),
            113 => 
            array (
                '_name' => 'Tân An',
                '_prefix' => 'Thành phố',
                '_province_id' => 8,
                'id' => 114,
            ),
            114 => 
            array (
                '_name' => 'Tân Hưng',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 115,
            ),
            115 => 
            array (
                '_name' => 'Tân Thạnh',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 116,
            ),
            116 => 
            array (
                '_name' => 'Tân Trụ',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 117,
            ),
            117 => 
            array (
                '_name' => 'Thạnh Hóa',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 118,
            ),
            118 => 
            array (
                '_name' => 'Thủ Thừa',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 119,
            ),
            119 => 
            array (
                '_name' => 'Vĩnh Hưng',
                '_prefix' => 'Huyện',
                '_province_id' => 8,
                'id' => 120,
            ),
            120 => 
            array (
                '_name' => 'Bắc Trà My',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 121,
            ),
            121 => 
            array (
                '_name' => 'Đại Lộc',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 122,
            ),
            122 => 
            array (
                '_name' => 'Điện Bàn',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 123,
            ),
            123 => 
            array (
                '_name' => 'Đông Giang',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 124,
            ),
            124 => 
            array (
                '_name' => 'Duy Xuyên',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 125,
            ),
            125 => 
            array (
                '_name' => 'Hiệp Đức',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 126,
            ),
            126 => 
            array (
                '_name' => 'Hội An',
                '_prefix' => 'Thành phố',
                '_province_id' => 9,
                'id' => 127,
            ),
            127 => 
            array (
                '_name' => 'Nam Giang',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 128,
            ),
            128 => 
            array (
                '_name' => 'Nam Trà My',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 129,
            ),
            129 => 
            array (
                '_name' => 'Nông Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 130,
            ),
            130 => 
            array (
                '_name' => 'Núi Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 131,
            ),
            131 => 
            array (
                '_name' => 'Phú Ninh',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 132,
            ),
            132 => 
            array (
                '_name' => 'Phước Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 133,
            ),
            133 => 
            array (
                '_name' => 'Quế Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 134,
            ),
            134 => 
            array (
                '_name' => 'Tam Kỳ',
                '_prefix' => 'Thành phố',
                '_province_id' => 9,
                'id' => 135,
            ),
            135 => 
            array (
                '_name' => 'Tây Giang',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 136,
            ),
            136 => 
            array (
                '_name' => 'Thăng Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 137,
            ),
            137 => 
            array (
                '_name' => 'Tiên Phước',
                '_prefix' => 'Huyện',
                '_province_id' => 9,
                'id' => 138,
            ),
            138 => 
            array (
                '_name' => 'Bà Rịa',
                '_prefix' => 'Thị xã',
                '_province_id' => 10,
                'id' => 139,
            ),
            139 => 
            array (
                '_name' => 'Châu Đức',
                '_prefix' => 'Huyện',
                '_province_id' => 10,
                'id' => 140,
            ),
            140 => 
            array (
                '_name' => 'Côn Đảo',
                '_prefix' => 'Huyện',
                '_province_id' => 10,
                'id' => 141,
            ),
            141 => 
            array (
                '_name' => 'Đất Đỏ',
                '_prefix' => 'Huyện',
                '_province_id' => 10,
                'id' => 142,
            ),
            142 => 
            array (
                '_name' => 'Long Điền',
                '_prefix' => 'Huyện',
                '_province_id' => 10,
                'id' => 143,
            ),
            143 => 
            array (
                '_name' => 'Tân Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 10,
                'id' => 144,
            ),
            144 => 
            array (
                '_name' => 'Vũng Tàu',
                '_prefix' => 'Thành phố',
                '_province_id' => 10,
                'id' => 145,
            ),
            145 => 
            array (
                '_name' => 'Xuyên Mộc',
                '_prefix' => 'Huyện',
                '_province_id' => 10,
                'id' => 146,
            ),
            146 => 
            array (
                '_name' => 'Buôn Đôn',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 147,
            ),
            147 => 
            array (
                '_name' => 'Buôn Hồ',
                '_prefix' => 'Thị xã',
                '_province_id' => 11,
                'id' => 148,
            ),
            148 => 
            array (
                '_name' => 'Buôn Ma Thuột',
                '_prefix' => 'Thành phố',
                '_province_id' => 11,
                'id' => 149,
            ),
            149 => 
            array (
                '_name' => 'Cư Kuin',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 150,
            ),
            150 => 
            array (
                '_name' => 'Cư M\'gar',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 151,
            ),
            151 => 
            array (
                '_name' => 'Ea H\'Leo',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 152,
            ),
            152 => 
            array (
                '_name' => 'Ea Kar',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 153,
            ),
            153 => 
            array (
                '_name' => 'Ea Súp',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 154,
            ),
            154 => 
            array (
                '_name' => 'Krông Ana',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 155,
            ),
            155 => 
            array (
                '_name' => 'Krông Bông',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 156,
            ),
            156 => 
            array (
                '_name' => 'Krông Buk',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 157,
            ),
            157 => 
            array (
                '_name' => 'Krông Năng',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 158,
            ),
            158 => 
            array (
                '_name' => 'Krông Pắc',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 159,
            ),
            159 => 
            array (
                '_name' => 'Lăk',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 160,
            ),
            160 => 
            array (
                '_name' => 'M\'Đrăk',
                '_prefix' => 'Huyện',
                '_province_id' => 11,
                'id' => 161,
            ),
            161 => 
            array (
                '_name' => ' Thới Lai',
                '_prefix' => 'Huyện',
                '_province_id' => 12,
                'id' => 162,
            ),
            162 => 
            array (
                '_name' => 'Bình Thủy',
                '_prefix' => 'Quận',
                '_province_id' => 12,
                'id' => 163,
            ),
            163 => 
            array (
                '_name' => 'Cái Răng',
                '_prefix' => 'Quận',
                '_province_id' => 12,
                'id' => 164,
            ),
            164 => 
            array (
                '_name' => 'Cờ Đỏ',
                '_prefix' => 'Huyện',
                '_province_id' => 12,
                'id' => 165,
            ),
            165 => 
            array (
                '_name' => 'Ninh Kiều',
                '_prefix' => 'Quận',
                '_province_id' => 12,
                'id' => 166,
            ),
            166 => 
            array (
                '_name' => 'Ô Môn',
                '_prefix' => 'Quận',
                '_province_id' => 12,
                'id' => 167,
            ),
            167 => 
            array (
                '_name' => 'Phong Điền',
                '_prefix' => 'Huyện',
                '_province_id' => 12,
                'id' => 168,
            ),
            168 => 
            array (
                '_name' => 'Thốt Nốt',
                '_prefix' => 'Quận',
                '_province_id' => 12,
                'id' => 169,
            ),
            169 => 
            array (
                '_name' => 'Vĩnh Thạnh',
                '_prefix' => 'Huyện',
                '_province_id' => 12,
                'id' => 170,
            ),
            170 => 
            array (
                '_name' => 'Bắc Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 13,
                'id' => 171,
            ),
            171 => 
            array (
                '_name' => 'Đảo Phú Quý',
                '_prefix' => 'Huyện',
                '_province_id' => 13,
                'id' => 172,
            ),
            172 => 
            array (
                '_name' => 'Đức Linh',
                '_prefix' => 'Huyện',
                '_province_id' => 13,
                'id' => 173,
            ),
            173 => 
            array (
                '_name' => 'Hàm Tân',
                '_prefix' => 'Huyện',
                '_province_id' => 13,
                'id' => 174,
            ),
            174 => 
            array (
                '_name' => 'Hàm Thuận Bắc',
                '_prefix' => 'Huyện',
                '_province_id' => 13,
                'id' => 175,
            ),
            175 => 
            array (
                '_name' => 'Hàm Thuận Nam',
                '_prefix' => 'Huyện',
                '_province_id' => 13,
                'id' => 176,
            ),
            176 => 
            array (
                '_name' => 'La Gi',
                '_prefix' => 'Thị xã',
                '_province_id' => 13,
                'id' => 177,
            ),
            177 => 
            array (
                '_name' => 'Phan Thiết',
                '_prefix' => 'Thành phố',
                '_province_id' => 13,
                'id' => 178,
            ),
            178 => 
            array (
                '_name' => 'Tánh Linh',
                '_prefix' => 'Huyện',
                '_province_id' => 13,
                'id' => 179,
            ),
            179 => 
            array (
                '_name' => 'Tuy Phong',
                '_prefix' => 'Huyện',
                '_province_id' => 13,
                'id' => 180,
            ),
            180 => 
            array (
                '_name' => 'Bảo Lâm',
                '_prefix' => 'Huyện',
                '_province_id' => 14,
                'id' => 181,
            ),
            181 => 
            array (
                '_name' => 'Bảo Lộc',
                '_prefix' => 'Thành phố',
                '_province_id' => 14,
                'id' => 182,
            ),
            182 => 
            array (
                '_name' => 'Cát Tiên',
                '_prefix' => 'Huyện',
                '_province_id' => 14,
                'id' => 183,
            ),
            183 => 
            array (
                '_name' => 'Đạ Huoai',
                '_prefix' => 'Huyện',
                '_province_id' => 14,
                'id' => 184,
            ),
            184 => 
            array (
                '_name' => 'Đà Lạt',
                '_prefix' => 'Thành phố',
                '_province_id' => 14,
                'id' => 185,
            ),
            185 => 
            array (
                '_name' => 'Đạ Tẻh',
                '_prefix' => 'Huyện',
                '_province_id' => 14,
                'id' => 186,
            ),
            186 => 
            array (
                '_name' => 'Đam Rông',
                '_prefix' => 'Huyện',
                '_province_id' => 14,
                'id' => 187,
            ),
            187 => 
            array (
                '_name' => 'Di Linh',
                '_prefix' => 'Huyện',
                '_province_id' => 14,
                'id' => 188,
            ),
            188 => 
            array (
                '_name' => 'Đơn Dương',
                '_prefix' => 'Huyện',
                '_province_id' => 14,
                'id' => 189,
            ),
            189 => 
            array (
                '_name' => 'Đức Trọng',
                '_prefix' => 'Huyện',
                '_province_id' => 14,
                'id' => 190,
            ),
            190 => 
            array (
                '_name' => 'Lạc Dương',
                '_prefix' => 'Huyện',
                '_province_id' => 14,
                'id' => 191,
            ),
            191 => 
            array (
                '_name' => 'Lâm Hà',
                '_prefix' => 'Huyện',
                '_province_id' => 14,
                'id' => 192,
            ),
            192 => 
            array (
                '_name' => 'A Lưới',
                '_prefix' => 'Huyện',
                '_province_id' => 15,
                'id' => 193,
            ),
            193 => 
            array (
                '_name' => 'Huế',
                '_prefix' => 'Thành phố',
                '_province_id' => 15,
                'id' => 194,
            ),
            194 => 
            array (
                '_name' => 'Hương Thủy',
                '_prefix' => 'Thị xã',
                '_province_id' => 15,
                'id' => 195,
            ),
            195 => 
            array (
                '_name' => 'Hương Trà',
                '_prefix' => 'Huyện',
                '_province_id' => 15,
                'id' => 196,
            ),
            196 => 
            array (
                '_name' => 'Nam Đông',
                '_prefix' => 'Huyện',
                '_province_id' => 15,
                'id' => 197,
            ),
            197 => 
            array (
                '_name' => 'Phong Điền',
                '_prefix' => 'Huyện',
                '_province_id' => 15,
                'id' => 198,
            ),
            198 => 
            array (
                '_name' => 'Phú Lộc',
                '_prefix' => 'Huyện',
                '_province_id' => 15,
                'id' => 199,
            ),
            199 => 
            array (
                '_name' => 'Phú Vang',
                '_prefix' => 'Huyện',
                '_province_id' => 15,
                'id' => 200,
            ),
            200 => 
            array (
                '_name' => 'Quảng Điền',
                '_prefix' => 'Huyện',
                '_province_id' => 15,
                'id' => 201,
            ),
            201 => 
            array (
                '_name' => 'An Biên',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 202,
            ),
            202 => 
            array (
                '_name' => 'An Minh',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 203,
            ),
            203 => 
            array (
                '_name' => 'Châu Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 204,
            ),
            204 => 
            array (
                '_name' => 'Giang Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 205,
            ),
            205 => 
            array (
                '_name' => 'Giồng Riềng',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 206,
            ),
            206 => 
            array (
                '_name' => 'Gò Quao',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 207,
            ),
            207 => 
            array (
                '_name' => 'Hà Tiên',
                '_prefix' => 'Thị xã',
                '_province_id' => 16,
                'id' => 208,
            ),
            208 => 
            array (
                '_name' => 'Hòn Đất',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 209,
            ),
            209 => 
            array (
                '_name' => 'Kiên Hải',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 210,
            ),
            210 => 
            array (
                '_name' => 'Kiên Lương',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 211,
            ),
            211 => 
            array (
                '_name' => 'Phú Quốc',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 212,
            ),
            212 => 
            array (
                '_name' => 'Rạch Giá',
                '_prefix' => 'Thành phố',
                '_province_id' => 16,
                'id' => 213,
            ),
            213 => 
            array (
                '_name' => 'Tân Hiệp',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 214,
            ),
            214 => 
            array (
                '_name' => 'U minh Thượng',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 215,
            ),
            215 => 
            array (
                '_name' => 'Vĩnh Thuận',
                '_prefix' => 'Huyện',
                '_province_id' => 16,
                'id' => 216,
            ),
            216 => 
            array (
                '_name' => 'Bắc Ninh',
                '_prefix' => 'Thành phố',
                '_province_id' => 17,
                'id' => 217,
            ),
            217 => 
            array (
                '_name' => 'Gia Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 17,
                'id' => 218,
            ),
            218 => 
            array (
                '_name' => 'Lương Tài',
                '_prefix' => 'Huyện',
                '_province_id' => 17,
                'id' => 219,
            ),
            219 => 
            array (
                '_name' => 'Quế Võ',
                '_prefix' => 'Huyện',
                '_province_id' => 17,
                'id' => 220,
            ),
            220 => 
            array (
                '_name' => 'Thuận Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 17,
                'id' => 221,
            ),
            221 => 
            array (
                '_name' => 'Tiên Du',
                '_prefix' => 'Huyện',
                '_province_id' => 17,
                'id' => 222,
            ),
            222 => 
            array (
                '_name' => 'Từ Sơn',
                '_prefix' => 'Thị xã',
                '_province_id' => 17,
                'id' => 223,
            ),
            223 => 
            array (
                '_name' => 'Yên Phong',
                '_prefix' => 'Huyện',
                '_province_id' => 17,
                'id' => 224,
            ),
            224 => 
            array (
                '_name' => 'Ba Chẽ',
                '_prefix' => 'Huyện',
                '_province_id' => 18,
                'id' => 225,
            ),
            225 => 
            array (
                '_name' => 'Bình Liêu',
                '_prefix' => 'Huyện',
                '_province_id' => 18,
                'id' => 226,
            ),
            226 => 
            array (
                '_name' => 'Cẩm Phả',
                '_prefix' => 'Thành phố',
                '_province_id' => 18,
                'id' => 227,
            ),
            227 => 
            array (
                '_name' => 'Cô Tô',
                '_prefix' => 'Huyện',
                '_province_id' => 18,
                'id' => 228,
            ),
            228 => 
            array (
                '_name' => 'Đầm Hà',
                '_prefix' => 'Huyện',
                '_province_id' => 18,
                'id' => 229,
            ),
            229 => 
            array (
                '_name' => 'Đông Triều',
                '_prefix' => 'Huyện',
                '_province_id' => 18,
                'id' => 230,
            ),
            230 => 
            array (
                '_name' => 'Hạ Long',
                '_prefix' => 'Thành phố',
                '_province_id' => 18,
                'id' => 231,
            ),
            231 => 
            array (
                '_name' => 'Hải Hà',
                '_prefix' => 'Huyện',
                '_province_id' => 18,
                'id' => 232,
            ),
            232 => 
            array (
                '_name' => 'Hoành Bồ',
                '_prefix' => 'Huyện',
                '_province_id' => 18,
                'id' => 233,
            ),
            233 => 
            array (
                '_name' => 'Móng Cái',
                '_prefix' => 'Thành phố',
                '_province_id' => 18,
                'id' => 234,
            ),
            234 => 
            array (
                '_name' => 'Quảng Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 18,
                'id' => 235,
            ),
            235 => 
            array (
                '_name' => 'Tiên Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 18,
                'id' => 236,
            ),
            236 => 
            array (
                '_name' => 'Uông Bí',
                '_prefix' => 'Thị xã',
                '_province_id' => 18,
                'id' => 237,
            ),
            237 => 
            array (
                '_name' => 'Vân Đồn',
                '_prefix' => 'Huyện',
                '_province_id' => 18,
                'id' => 238,
            ),
            238 => 
            array (
                '_name' => 'Bá Thước',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 239,
            ),
            239 => 
            array (
                '_name' => 'Bỉm Sơn',
                '_prefix' => 'Thị xã',
                '_province_id' => 19,
                'id' => 240,
            ),
            240 => 
            array (
                '_name' => 'Cẩm Thủy',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 241,
            ),
            241 => 
            array (
                '_name' => 'Đông Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 242,
            ),
            242 => 
            array (
                '_name' => 'Hà Trung',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 243,
            ),
            243 => 
            array (
                '_name' => 'Hậu Lộc',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 244,
            ),
            244 => 
            array (
                '_name' => 'Hoằng Hóa',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 245,
            ),
            245 => 
            array (
                '_name' => 'Lang Chánh',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 246,
            ),
            246 => 
            array (
                '_name' => 'Mường Lát',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 247,
            ),
            247 => 
            array (
                '_name' => 'Nga Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 248,
            ),
            248 => 
            array (
                '_name' => 'Ngọc Lặc',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 249,
            ),
            249 => 
            array (
                '_name' => 'Như Thanh',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 250,
            ),
            250 => 
            array (
                '_name' => 'Như Xuân',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 251,
            ),
            251 => 
            array (
                '_name' => 'Nông Cống',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 252,
            ),
            252 => 
            array (
                '_name' => 'Quan Hóa',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 253,
            ),
            253 => 
            array (
                '_name' => 'Quan Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 254,
            ),
            254 => 
            array (
                '_name' => 'Quảng Xương',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 255,
            ),
            255 => 
            array (
                '_name' => 'Sầm Sơn',
                '_prefix' => 'Thị xã',
                '_province_id' => 19,
                'id' => 256,
            ),
            256 => 
            array (
                '_name' => 'Thạch Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 257,
            ),
            257 => 
            array (
                '_name' => 'Thanh Hóa',
                '_prefix' => 'Thành phố',
                '_province_id' => 19,
                'id' => 258,
            ),
            258 => 
            array (
                '_name' => 'Thiệu Hóa',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 259,
            ),
            259 => 
            array (
                '_name' => 'Thọ Xuân',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 260,
            ),
            260 => 
            array (
                '_name' => 'Thường Xuân',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 261,
            ),
            261 => 
            array (
                '_name' => 'Tĩnh Gia',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 262,
            ),
            262 => 
            array (
                '_name' => 'Triệu Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 263,
            ),
            263 => 
            array (
                '_name' => 'Vĩnh Lộc',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 264,
            ),
            264 => 
            array (
                '_name' => 'Yên Định',
                '_prefix' => 'Huyện',
                '_province_id' => 19,
                'id' => 265,
            ),
            265 => 
            array (
                '_name' => 'Anh Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 266,
            ),
            266 => 
            array (
                '_name' => 'Con Cuông',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 267,
            ),
            267 => 
            array (
                '_name' => 'Cửa Lò',
                '_prefix' => 'Thị xã',
                '_province_id' => 20,
                'id' => 268,
            ),
            268 => 
            array (
                '_name' => 'Diễn Châu',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 269,
            ),
            269 => 
            array (
                '_name' => 'Đô Lương',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 270,
            ),
            270 => 
            array (
                '_name' => 'Hoàng Mai',
                '_prefix' => 'Thị xã',
                '_province_id' => 20,
                'id' => 271,
            ),
            271 => 
            array (
                '_name' => 'Hưng Nguyên',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 272,
            ),
            272 => 
            array (
                '_name' => 'Kỳ Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 273,
            ),
            273 => 
            array (
                '_name' => 'Nam Đàn',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 274,
            ),
            274 => 
            array (
                '_name' => 'Nghi Lộc',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 275,
            ),
            275 => 
            array (
                '_name' => 'Nghĩa Đàn',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 276,
            ),
            276 => 
            array (
                '_name' => 'Quế Phong',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 277,
            ),
            277 => 
            array (
                '_name' => 'Quỳ Châu',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 278,
            ),
            278 => 
            array (
                '_name' => 'Quỳ Hợp',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 279,
            ),
            279 => 
            array (
                '_name' => 'Quỳnh Lưu',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 280,
            ),
            280 => 
            array (
                '_name' => 'Tân Kỳ',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 281,
            ),
            281 => 
            array (
                '_name' => 'Thái Hòa',
                '_prefix' => 'Thị xã',
                '_province_id' => 20,
                'id' => 282,
            ),
            282 => 
            array (
                '_name' => 'Thanh Chương',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 283,
            ),
            283 => 
            array (
                '_name' => 'Tương Dương',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 284,
            ),
            284 => 
            array (
                '_name' => 'Vinh',
                '_prefix' => 'Thành phố',
                '_province_id' => 20,
                'id' => 285,
            ),
            285 => 
            array (
                '_name' => 'Yên Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 20,
                'id' => 286,
            ),
            286 => 
            array (
                '_name' => 'Bình Giang',
                '_prefix' => 'Huyện',
                '_province_id' => 21,
                'id' => 287,
            ),
            287 => 
            array (
                '_name' => 'Cẩm Giàng',
                '_prefix' => 'Huyện',
                '_province_id' => 21,
                'id' => 288,
            ),
            288 => 
            array (
                '_name' => 'Chí Linh',
                '_prefix' => 'Thị xã',
                '_province_id' => 21,
                'id' => 289,
            ),
            289 => 
            array (
                '_name' => 'Gia Lộc',
                '_prefix' => 'Huyện',
                '_province_id' => 21,
                'id' => 290,
            ),
            290 => 
            array (
                '_name' => 'Hải Dương',
                '_prefix' => 'Thành phố',
                '_province_id' => 21,
                'id' => 291,
            ),
            291 => 
            array (
                '_name' => 'Kim Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 21,
                'id' => 292,
            ),
            292 => 
            array (
                '_name' => 'Kinh Môn',
                '_prefix' => 'Huyện',
                '_province_id' => 21,
                'id' => 293,
            ),
            293 => 
            array (
                '_name' => 'Nam Sách',
                '_prefix' => 'Huyện',
                '_province_id' => 21,
                'id' => 294,
            ),
            294 => 
            array (
                '_name' => 'Ninh Giang',
                '_prefix' => 'Huyện',
                '_province_id' => 21,
                'id' => 295,
            ),
            295 => 
            array (
                '_name' => 'Thanh Hà',
                '_prefix' => 'Huyện',
                '_province_id' => 21,
                'id' => 296,
            ),
            296 => 
            array (
                '_name' => 'Thanh Miện',
                '_prefix' => 'Huyện',
                '_province_id' => 21,
                'id' => 297,
            ),
            297 => 
            array (
                '_name' => 'Tứ Kỳ',
                '_prefix' => 'Huyện',
                '_province_id' => 21,
                'id' => 298,
            ),
            298 => 
            array (
                '_name' => 'An Khê',
                '_prefix' => 'Thị xã',
                '_province_id' => 22,
                'id' => 299,
            ),
            299 => 
            array (
                '_name' => 'AYun Pa',
                '_prefix' => 'Thị xã',
                '_province_id' => 22,
                'id' => 300,
            ),
            300 => 
            array (
                '_name' => 'Chư Păh',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 301,
            ),
            301 => 
            array (
                '_name' => 'Chư Pưh',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 302,
            ),
            302 => 
            array (
                '_name' => 'Chư Sê',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 303,
            ),
            303 => 
            array (
                '_name' => 'ChưPRông',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 304,
            ),
            304 => 
            array (
                '_name' => 'Đăk Đoa',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 305,
            ),
            305 => 
            array (
                '_name' => 'Đăk Pơ',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 306,
            ),
            306 => 
            array (
                '_name' => 'Đức Cơ',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 307,
            ),
            307 => 
            array (
                '_name' => 'Ia Grai',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 308,
            ),
            308 => 
            array (
                '_name' => 'Ia Pa',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 309,
            ),
            309 => 
            array (
                '_name' => 'KBang',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 310,
            ),
            310 => 
            array (
                '_name' => 'Kông Chro',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 311,
            ),
            311 => 
            array (
                '_name' => 'Krông Pa',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 312,
            ),
            312 => 
            array (
                '_name' => 'Mang Yang',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 313,
            ),
            313 => 
            array (
                '_name' => 'Phú Thiện',
                '_prefix' => 'Huyện',
                '_province_id' => 22,
                'id' => 314,
            ),
            314 => 
            array (
                '_name' => 'Plei Ku',
                '_prefix' => 'Thành phố',
                '_province_id' => 22,
                'id' => 315,
            ),
            315 => 
            array (
                '_name' => 'Bình Long',
                '_prefix' => 'Thị xã',
                '_province_id' => 23,
                'id' => 316,
            ),
            316 => 
            array (
                '_name' => 'Bù Đăng',
                '_prefix' => 'Huyện',
                '_province_id' => 23,
                'id' => 317,
            ),
            317 => 
            array (
                '_name' => 'Bù Đốp',
                '_prefix' => 'Huyện',
                '_province_id' => 23,
                'id' => 318,
            ),
            318 => 
            array (
                '_name' => 'Bù Gia Mập',
                '_prefix' => 'Huyện',
                '_province_id' => 23,
                'id' => 319,
            ),
            319 => 
            array (
                '_name' => 'Chơn Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 23,
                'id' => 320,
            ),
            320 => 
            array (
                '_name' => 'Đồng Phú',
                '_prefix' => 'Huyện',
                '_province_id' => 23,
                'id' => 321,
            ),
            321 => 
            array (
                '_name' => 'Đồng Xoài',
                '_prefix' => 'Thị xã',
                '_province_id' => 23,
                'id' => 322,
            ),
            322 => 
            array (
                '_name' => 'Hớn Quản',
                '_prefix' => 'Huyện',
                '_province_id' => 23,
                'id' => 323,
            ),
            323 => 
            array (
                '_name' => 'Lộc Ninh',
                '_prefix' => 'Huyện',
                '_province_id' => 23,
                'id' => 324,
            ),
            324 => 
            array (
                '_name' => 'Phú Riềng',
                '_prefix' => 'Huyện',
                '_province_id' => 23,
                'id' => 325,
            ),
            325 => 
            array (
                '_name' => 'Phước Long',
                '_prefix' => 'Thị xã',
                '_province_id' => 23,
                'id' => 326,
            ),
            326 => 
            array (
                '_name' => 'Ân Thi',
                '_prefix' => 'Huyện',
                '_province_id' => 24,
                'id' => 327,
            ),
            327 => 
            array (
                '_name' => 'Hưng Yên',
                '_prefix' => 'Thành phố',
                '_province_id' => 24,
                'id' => 328,
            ),
            328 => 
            array (
                '_name' => 'Khoái Châu',
                '_prefix' => 'Huyện',
                '_province_id' => 24,
                'id' => 329,
            ),
            329 => 
            array (
                '_name' => 'Kim Động',
                '_prefix' => 'Huyện',
                '_province_id' => 24,
                'id' => 330,
            ),
            330 => 
            array (
                '_name' => 'Mỹ Hào',
                '_prefix' => 'Huyện',
                '_province_id' => 24,
                'id' => 331,
            ),
            331 => 
            array (
                '_name' => 'Phù Cừ',
                '_prefix' => 'Huyện',
                '_province_id' => 24,
                'id' => 332,
            ),
            332 => 
            array (
                '_name' => 'Tiên Lữ',
                '_prefix' => 'Huyện',
                '_province_id' => 24,
                'id' => 333,
            ),
            333 => 
            array (
                '_name' => 'Văn Giang',
                '_prefix' => 'Huyện',
                '_province_id' => 24,
                'id' => 334,
            ),
            334 => 
            array (
                '_name' => 'Văn Lâm',
                '_prefix' => 'Huyện',
                '_province_id' => 24,
                'id' => 335,
            ),
            335 => 
            array (
                '_name' => 'Yên Mỹ',
                '_prefix' => 'Huyện',
                '_province_id' => 24,
                'id' => 336,
            ),
            336 => 
            array (
                '_name' => 'An Lão',
                '_prefix' => 'Huyện',
                '_province_id' => 25,
                'id' => 337,
            ),
            337 => 
            array (
                '_name' => 'An Nhơn',
                '_prefix' => 'Huyện',
                '_province_id' => 25,
                'id' => 338,
            ),
            338 => 
            array (
                '_name' => 'Hoài Ân',
                '_prefix' => 'Huyện',
                '_province_id' => 25,
                'id' => 339,
            ),
            339 => 
            array (
                '_name' => 'Hoài Nhơn',
                '_prefix' => 'Huyện',
                '_province_id' => 25,
                'id' => 340,
            ),
            340 => 
            array (
                '_name' => 'Phù Cát',
                '_prefix' => 'Huyện',
                '_province_id' => 25,
                'id' => 341,
            ),
            341 => 
            array (
                '_name' => 'Phù Mỹ',
                '_prefix' => 'Huyện',
                '_province_id' => 25,
                'id' => 342,
            ),
            342 => 
            array (
                '_name' => 'Quy Nhơn',
                '_prefix' => 'Thành phố',
                '_province_id' => 25,
                'id' => 343,
            ),
            343 => 
            array (
                '_name' => 'Tây Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 25,
                'id' => 344,
            ),
            344 => 
            array (
                '_name' => 'Tuy Phước',
                '_prefix' => 'Huyện',
                '_province_id' => 25,
                'id' => 345,
            ),
            345 => 
            array (
                '_name' => 'Vân Canh',
                '_prefix' => 'Huyện',
                '_province_id' => 25,
                'id' => 346,
            ),
            346 => 
            array (
                '_name' => 'Vĩnh Thạnh',
                '_prefix' => 'Huyện',
                '_province_id' => 25,
                'id' => 347,
            ),
            347 => 
            array (
                '_name' => 'Cái Bè',
                '_prefix' => 'Huyện',
                '_province_id' => 26,
                'id' => 348,
            ),
            348 => 
            array (
                '_name' => 'Cai Lậy',
                '_prefix' => 'Thị xã',
                '_province_id' => 26,
                'id' => 349,
            ),
            349 => 
            array (
                '_name' => 'Châu Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 26,
                'id' => 350,
            ),
            350 => 
            array (
                '_name' => 'Chợ Gạo',
                '_prefix' => 'Huyện',
                '_province_id' => 26,
                'id' => 351,
            ),
            351 => 
            array (
                '_name' => 'Gò Công',
                '_prefix' => 'Thị xã',
                '_province_id' => 26,
                'id' => 352,
            ),
            352 => 
            array (
                '_name' => 'Gò Công Đông',
                '_prefix' => 'Huyện',
                '_province_id' => 26,
                'id' => 353,
            ),
            353 => 
            array (
                '_name' => 'Gò Công Tây',
                '_prefix' => 'Huyện',
                '_province_id' => 26,
                'id' => 354,
            ),
            354 => 
            array (
                '_name' => 'Huyện Cai Lậy',
                '_prefix' => 'Huyện',
                '_province_id' => 26,
                'id' => 355,
            ),
            355 => 
            array (
                '_name' => 'Mỹ Tho',
                '_prefix' => 'Thành phố',
                '_province_id' => 26,
                'id' => 356,
            ),
            356 => 
            array (
                '_name' => 'Tân Phú Đông',
                '_prefix' => 'Huyện',
                '_province_id' => 26,
                'id' => 357,
            ),
            357 => 
            array (
                '_name' => 'Tân Phước',
                '_prefix' => 'Huyện',
                '_province_id' => 26,
                'id' => 358,
            ),
            358 => 
            array (
                '_name' => 'Đông Hưng',
                '_prefix' => 'Huyện',
                '_province_id' => 27,
                'id' => 359,
            ),
            359 => 
            array (
                '_name' => 'Hưng Hà',
                '_prefix' => 'Huyện',
                '_province_id' => 27,
                'id' => 360,
            ),
            360 => 
            array (
                '_name' => 'Kiến Xương',
                '_prefix' => 'Huyện',
                '_province_id' => 27,
                'id' => 361,
            ),
            361 => 
            array (
                '_name' => 'Quỳnh Phụ',
                '_prefix' => 'Huyện',
                '_province_id' => 27,
                'id' => 362,
            ),
            362 => 
            array (
                '_name' => 'Thái Bình',
                '_prefix' => 'Thành phố',
                '_province_id' => 27,
                'id' => 363,
            ),
            363 => 
            array (
                '_name' => 'Thái Thuỵ',
                '_prefix' => 'Huyện',
                '_province_id' => 27,
                'id' => 364,
            ),
            364 => 
            array (
                '_name' => 'Tiền Hải',
                '_prefix' => 'Huyện',
                '_province_id' => 27,
                'id' => 365,
            ),
            365 => 
            array (
                '_name' => 'Vũ Thư',
                '_prefix' => 'Huyện',
                '_province_id' => 27,
                'id' => 366,
            ),
            366 => 
            array (
                '_name' => 'Bắc Giang',
                '_prefix' => 'Thành phố',
                '_province_id' => 28,
                'id' => 367,
            ),
            367 => 
            array (
                '_name' => 'Hiệp Hòa',
                '_prefix' => 'Huyện',
                '_province_id' => 28,
                'id' => 368,
            ),
            368 => 
            array (
                '_name' => 'Lạng Giang',
                '_prefix' => 'Huyện',
                '_province_id' => 28,
                'id' => 369,
            ),
            369 => 
            array (
                '_name' => 'Lục Nam',
                '_prefix' => 'Huyện',
                '_province_id' => 28,
                'id' => 370,
            ),
            370 => 
            array (
                '_name' => 'Lục Ngạn',
                '_prefix' => 'Huyện',
                '_province_id' => 28,
                'id' => 371,
            ),
            371 => 
            array (
                '_name' => 'Sơn Động',
                '_prefix' => 'Huyện',
                '_province_id' => 28,
                'id' => 372,
            ),
            372 => 
            array (
                '_name' => 'Tân Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 28,
                'id' => 373,
            ),
            373 => 
            array (
                '_name' => 'Việt Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 28,
                'id' => 374,
            ),
            374 => 
            array (
                '_name' => 'Yên Dũng',
                '_prefix' => 'Huyện',
                '_province_id' => 28,
                'id' => 375,
            ),
            375 => 
            array (
                '_name' => 'Yên Thế',
                '_prefix' => 'Huyện',
                '_province_id' => 28,
                'id' => 376,
            ),
            376 => 
            array (
                '_name' => 'Cao Phong',
                '_prefix' => 'Huyện',
                '_province_id' => 29,
                'id' => 377,
            ),
            377 => 
            array (
                '_name' => 'Đà Bắc',
                '_prefix' => 'Huyện',
                '_province_id' => 29,
                'id' => 378,
            ),
            378 => 
            array (
                '_name' => 'Hòa Bình',
                '_prefix' => 'Thành phố',
                '_province_id' => 29,
                'id' => 379,
            ),
            379 => 
            array (
                '_name' => 'Kim Bôi',
                '_prefix' => 'Huyện',
                '_province_id' => 29,
                'id' => 380,
            ),
            380 => 
            array (
                '_name' => 'Kỳ Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 29,
                'id' => 381,
            ),
            381 => 
            array (
                '_name' => 'Lạc Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 29,
                'id' => 382,
            ),
            382 => 
            array (
                '_name' => 'Lạc Thủy',
                '_prefix' => 'Huyện',
                '_province_id' => 29,
                'id' => 383,
            ),
            383 => 
            array (
                '_name' => 'Lương Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 29,
                'id' => 384,
            ),
            384 => 
            array (
                '_name' => 'Mai Châu',
                '_prefix' => 'Huyện',
                '_province_id' => 29,
                'id' => 385,
            ),
            385 => 
            array (
                '_name' => 'Tân Lạc',
                '_prefix' => 'Huyện',
                '_province_id' => 29,
                'id' => 386,
            ),
            386 => 
            array (
                '_name' => 'Yên Thủy',
                '_prefix' => 'Huyện',
                '_province_id' => 29,
                'id' => 387,
            ),
            387 => 
            array (
                '_name' => 'An Phú',
                '_prefix' => 'Huyện',
                '_province_id' => 30,
                'id' => 388,
            ),
            388 => 
            array (
                '_name' => 'Châu Đốc',
                '_prefix' => 'Thị xã',
                '_province_id' => 30,
                'id' => 389,
            ),
            389 => 
            array (
                '_name' => 'Châu Phú',
                '_prefix' => 'Huyện',
                '_province_id' => 30,
                'id' => 390,
            ),
            390 => 
            array (
                '_name' => 'Châu Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 30,
                'id' => 391,
            ),
            391 => 
            array (
                '_name' => 'Chợ Mới',
                '_prefix' => 'Huyện',
                '_province_id' => 30,
                'id' => 392,
            ),
            392 => 
            array (
                '_name' => 'Long Xuyên',
                '_prefix' => 'Thành phố',
                '_province_id' => 30,
                'id' => 393,
            ),
            393 => 
            array (
                '_name' => 'Phú Tân',
                '_prefix' => 'Huyện',
                '_province_id' => 30,
                'id' => 394,
            ),
            394 => 
            array (
                '_name' => 'Tân Châu',
                '_prefix' => 'Thị xã',
                '_province_id' => 30,
                'id' => 395,
            ),
            395 => 
            array (
                '_name' => 'Thoại Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 30,
                'id' => 396,
            ),
            396 => 
            array (
                '_name' => 'Tịnh Biên',
                '_prefix' => 'Huyện',
                '_province_id' => 30,
                'id' => 397,
            ),
            397 => 
            array (
                '_name' => 'Tri Tôn',
                '_prefix' => 'Huyện',
                '_province_id' => 30,
                'id' => 398,
            ),
            398 => 
            array (
                '_name' => 'Bình Xuyên',
                '_prefix' => 'Huyện',
                '_province_id' => 31,
                'id' => 399,
            ),
            399 => 
            array (
                '_name' => 'Lập Thạch',
                '_prefix' => 'Huyện',
                '_province_id' => 31,
                'id' => 400,
            ),
            400 => 
            array (
                '_name' => 'Phúc Yên',
                '_prefix' => 'Thị xã',
                '_province_id' => 31,
                'id' => 401,
            ),
            401 => 
            array (
                '_name' => 'Sông Lô',
                '_prefix' => 'Huyện',
                '_province_id' => 31,
                'id' => 402,
            ),
            402 => 
            array (
                '_name' => 'Tam Đảo',
                '_prefix' => 'Huyện',
                '_province_id' => 31,
                'id' => 403,
            ),
            403 => 
            array (
                '_name' => 'Tam Dương',
                '_prefix' => 'Huyện',
                '_province_id' => 31,
                'id' => 404,
            ),
            404 => 
            array (
                '_name' => 'Vĩnh Tường',
                '_prefix' => 'Huyện',
                '_province_id' => 31,
                'id' => 405,
            ),
            405 => 
            array (
                '_name' => 'Vĩnh Yên',
                '_prefix' => 'Thành phố',
                '_province_id' => 31,
                'id' => 406,
            ),
            406 => 
            array (
                '_name' => 'Yên Lạc',
                '_prefix' => 'Huyện',
                '_province_id' => 31,
                'id' => 407,
            ),
            407 => 
            array (
                '_name' => 'Bến Cầu',
                '_prefix' => 'Huyện',
                '_province_id' => 32,
                'id' => 408,
            ),
            408 => 
            array (
                '_name' => 'Châu Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 32,
                'id' => 409,
            ),
            409 => 
            array (
                '_name' => 'Dương Minh Châu',
                '_prefix' => 'Huyện',
                '_province_id' => 32,
                'id' => 410,
            ),
            410 => 
            array (
                '_name' => 'Gò Dầu',
                '_prefix' => 'Huyện',
                '_province_id' => 32,
                'id' => 411,
            ),
            411 => 
            array (
                '_name' => 'Hòa Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 32,
                'id' => 412,
            ),
            412 => 
            array (
                '_name' => 'Tân Biên',
                '_prefix' => 'Huyện',
                '_province_id' => 32,
                'id' => 413,
            ),
            413 => 
            array (
                '_name' => 'Tân Châu',
                '_prefix' => 'Huyện',
                '_province_id' => 32,
                'id' => 414,
            ),
            414 => 
            array (
                '_name' => 'Tây Ninh',
                '_prefix' => 'Thị xã',
                '_province_id' => 32,
                'id' => 415,
            ),
            415 => 
            array (
                '_name' => 'Trảng Bàng',
                '_prefix' => 'Huyện',
                '_province_id' => 32,
                'id' => 416,
            ),
            416 => 
            array (
                '_name' => 'Đại Từ',
                '_prefix' => 'Huyện',
                '_province_id' => 33,
                'id' => 417,
            ),
            417 => 
            array (
                '_name' => 'Định Hóa',
                '_prefix' => 'Huyện',
                '_province_id' => 33,
                'id' => 418,
            ),
            418 => 
            array (
                '_name' => 'Đồng Hỷ',
                '_prefix' => 'Huyện',
                '_province_id' => 33,
                'id' => 419,
            ),
            419 => 
            array (
                '_name' => 'Phổ Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 33,
                'id' => 420,
            ),
            420 => 
            array (
                '_name' => 'Phú Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 33,
                'id' => 421,
            ),
            421 => 
            array (
                '_name' => 'Phú Lương',
                '_prefix' => 'Huyện',
                '_province_id' => 33,
                'id' => 422,
            ),
            422 => 
            array (
                '_name' => 'Sông Công',
                '_prefix' => 'Thị xã',
                '_province_id' => 33,
                'id' => 423,
            ),
            423 => 
            array (
                '_name' => 'Thái Nguyên',
                '_prefix' => 'Thành phố',
                '_province_id' => 33,
                'id' => 424,
            ),
            424 => 
            array (
                '_name' => 'Võ Nhai',
                '_prefix' => 'Huyện',
                '_province_id' => 33,
                'id' => 425,
            ),
            425 => 
            array (
                '_name' => 'Bắc Hà',
                '_prefix' => 'Huyện',
                '_province_id' => 34,
                'id' => 426,
            ),
            426 => 
            array (
                '_name' => 'Bảo Thắng',
                '_prefix' => 'Huyện',
                '_province_id' => 34,
                'id' => 427,
            ),
            427 => 
            array (
                '_name' => 'Bảo Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 34,
                'id' => 428,
            ),
            428 => 
            array (
                '_name' => 'Bát Xát',
                '_prefix' => 'Huyện',
                '_province_id' => 34,
                'id' => 429,
            ),
            429 => 
            array (
                '_name' => 'Lào Cai',
                '_prefix' => 'Thành phố',
                '_province_id' => 34,
                'id' => 430,
            ),
            430 => 
            array (
                '_name' => 'Mường Khương',
                '_prefix' => 'Huyện',
                '_province_id' => 34,
                'id' => 431,
            ),
            431 => 
            array (
                '_name' => 'Sa Pa',
                '_prefix' => 'Huyện',
                '_province_id' => 34,
                'id' => 432,
            ),
            432 => 
            array (
                '_name' => 'Văn Bàn',
                '_prefix' => 'Huyện',
                '_province_id' => 34,
                'id' => 433,
            ),
            433 => 
            array (
                '_name' => 'Xi Ma Cai',
                '_prefix' => 'Huyện',
                '_province_id' => 34,
                'id' => 434,
            ),
            434 => 
            array (
                '_name' => 'Giao Thủy',
                '_prefix' => 'Huyện',
                '_province_id' => 35,
                'id' => 435,
            ),
            435 => 
            array (
                '_name' => 'Hải Hậu',
                '_prefix' => 'Huyện',
                '_province_id' => 35,
                'id' => 436,
            ),
            436 => 
            array (
                '_name' => 'Mỹ Lộc',
                '_prefix' => 'Huyện',
                '_province_id' => 35,
                'id' => 437,
            ),
            437 => 
            array (
                '_name' => 'Nam Định',
                '_prefix' => 'Thành phố',
                '_province_id' => 35,
                'id' => 438,
            ),
            438 => 
            array (
                '_name' => 'Nam Trực',
                '_prefix' => 'Huyện',
                '_province_id' => 35,
                'id' => 439,
            ),
            439 => 
            array (
                '_name' => 'Nghĩa Hưng',
                '_prefix' => 'Huyện',
                '_province_id' => 35,
                'id' => 440,
            ),
            440 => 
            array (
                '_name' => 'Trực Ninh',
                '_prefix' => 'Huyện',
                '_province_id' => 35,
                'id' => 441,
            ),
            441 => 
            array (
                '_name' => 'Vụ Bản',
                '_prefix' => 'Huyện',
                '_province_id' => 35,
                'id' => 442,
            ),
            442 => 
            array (
                '_name' => 'Xuân Trường',
                '_prefix' => 'Huyện',
                '_province_id' => 35,
                'id' => 443,
            ),
            443 => 
            array (
                '_name' => 'Ý Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 35,
                'id' => 444,
            ),
            444 => 
            array (
                '_name' => 'Ba Tơ',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 445,
            ),
            445 => 
            array (
                '_name' => 'Bình Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 446,
            ),
            446 => 
            array (
                '_name' => 'Đức Phổ',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 447,
            ),
            447 => 
            array (
                '_name' => 'Lý Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 448,
            ),
            448 => 
            array (
                '_name' => 'Minh Long',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 449,
            ),
            449 => 
            array (
                '_name' => 'Mộ Đức',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 450,
            ),
            450 => 
            array (
                '_name' => 'Nghĩa Hành',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 451,
            ),
            451 => 
            array (
                '_name' => 'Quảng Ngãi',
                '_prefix' => 'Thành phố',
                '_province_id' => 36,
                'id' => 452,
            ),
            452 => 
            array (
                '_name' => 'Sơn Hà',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 453,
            ),
            453 => 
            array (
                '_name' => 'Sơn Tây',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 454,
            ),
            454 => 
            array (
                '_name' => 'Sơn Tịnh',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 455,
            ),
            455 => 
            array (
                '_name' => 'Tây Trà',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 456,
            ),
            456 => 
            array (
                '_name' => 'Trà Bồng',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 457,
            ),
            457 => 
            array (
                '_name' => 'Tư Nghĩa',
                '_prefix' => 'Huyện',
                '_province_id' => 36,
                'id' => 458,
            ),
            458 => 
            array (
                '_name' => 'Ba Tri',
                '_prefix' => 'Huyện',
                '_province_id' => 37,
                'id' => 459,
            ),
            459 => 
            array (
                '_name' => 'Bến Tre',
                '_prefix' => 'Thành phố',
                '_province_id' => 37,
                'id' => 460,
            ),
            460 => 
            array (
                '_name' => 'Bình Đại',
                '_prefix' => 'Huyện',
                '_province_id' => 37,
                'id' => 461,
            ),
            461 => 
            array (
                '_name' => 'Châu Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 37,
                'id' => 462,
            ),
            462 => 
            array (
                '_name' => 'Chợ Lách',
                '_prefix' => 'Huyện',
                '_province_id' => 37,
                'id' => 463,
            ),
            463 => 
            array (
                '_name' => 'Giồng Trôm',
                '_prefix' => 'Huyện',
                '_province_id' => 37,
                'id' => 464,
            ),
            464 => 
            array (
                '_name' => 'Mỏ Cày Bắc',
                '_prefix' => 'Huyện',
                '_province_id' => 37,
                'id' => 465,
            ),
            465 => 
            array (
                '_name' => 'Mỏ Cày Nam',
                '_prefix' => 'Huyện',
                '_province_id' => 37,
                'id' => 466,
            ),
            466 => 
            array (
                '_name' => 'Thạnh Phú',
                '_prefix' => 'Huyện',
                '_province_id' => 37,
                'id' => 467,
            ),
            467 => 
            array (
                '_name' => 'Cư Jút',
                '_prefix' => 'Huyện',
                '_province_id' => 38,
                'id' => 468,
            ),
            468 => 
            array (
                '_name' => 'Dăk GLong',
                '_prefix' => 'Huyện',
                '_province_id' => 38,
                'id' => 469,
            ),
            469 => 
            array (
                '_name' => 'Dăk Mil',
                '_prefix' => 'Huyện',
                '_province_id' => 38,
                'id' => 470,
            ),
            470 => 
            array (
                '_name' => 'Dăk R\'Lấp',
                '_prefix' => 'Huyện',
                '_province_id' => 38,
                'id' => 471,
            ),
            471 => 
            array (
                '_name' => 'Dăk Song',
                '_prefix' => 'Huyện',
                '_province_id' => 38,
                'id' => 472,
            ),
            472 => 
            array (
                '_name' => 'Gia Nghĩa',
                '_prefix' => 'Thị xã',
                '_province_id' => 38,
                'id' => 473,
            ),
            473 => 
            array (
                '_name' => 'Krông Nô',
                '_prefix' => 'Huyện',
                '_province_id' => 38,
                'id' => 474,
            ),
            474 => 
            array (
                '_name' => 'Tuy Đức',
                '_prefix' => 'Huyện',
                '_province_id' => 38,
                'id' => 475,
            ),
            475 => 
            array (
                '_name' => 'Cà Mau',
                '_prefix' => 'Thành phố',
                '_province_id' => 39,
                'id' => 476,
            ),
            476 => 
            array (
                '_name' => 'Cái Nước',
                '_prefix' => 'Huyện',
                '_province_id' => 39,
                'id' => 477,
            ),
            477 => 
            array (
                '_name' => 'Đầm Dơi',
                '_prefix' => 'Huyện',
                '_province_id' => 39,
                'id' => 478,
            ),
            478 => 
            array (
                '_name' => 'Năm Căn',
                '_prefix' => 'Huyện',
                '_province_id' => 39,
                'id' => 479,
            ),
            479 => 
            array (
                '_name' => 'Ngọc Hiển',
                '_prefix' => 'Huyện',
                '_province_id' => 39,
                'id' => 480,
            ),
            480 => 
            array (
                '_name' => 'Phú Tân',
                '_prefix' => 'Huyện',
                '_province_id' => 39,
                'id' => 481,
            ),
            481 => 
            array (
                '_name' => 'Thới Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 39,
                'id' => 482,
            ),
            482 => 
            array (
                '_name' => 'Trần Văn Thời',
                '_prefix' => 'Huyện',
                '_province_id' => 39,
                'id' => 483,
            ),
            483 => 
            array (
                '_name' => 'U Minh',
                '_prefix' => 'Huyện',
                '_province_id' => 39,
                'id' => 484,
            ),
            484 => 
            array (
                '_name' => 'Bình Minh',
                '_prefix' => 'Huyện',
                '_province_id' => 40,
                'id' => 485,
            ),
            485 => 
            array (
                '_name' => 'Bình Tân',
                '_prefix' => 'Quận',
                '_province_id' => 40,
                'id' => 486,
            ),
            486 => 
            array (
                '_name' => 'Long Hồ',
                '_prefix' => 'Huyện',
                '_province_id' => 40,
                'id' => 487,
            ),
            487 => 
            array (
                '_name' => 'Mang Thít',
                '_prefix' => 'Huyện',
                '_province_id' => 40,
                'id' => 488,
            ),
            488 => 
            array (
                '_name' => 'Tam Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 40,
                'id' => 489,
            ),
            489 => 
            array (
                '_name' => 'Trà Ôn',
                '_prefix' => 'Huyện',
                '_province_id' => 40,
                'id' => 490,
            ),
            490 => 
            array (
                '_name' => 'Vĩnh Long',
                '_prefix' => 'Thành phố',
                '_province_id' => 40,
                'id' => 491,
            ),
            491 => 
            array (
                '_name' => 'Vũng Liêm',
                '_prefix' => 'Huyện',
                '_province_id' => 40,
                'id' => 492,
            ),
            492 => 
            array (
                '_name' => 'Gia Viễn',
                '_prefix' => 'Huyện',
                '_province_id' => 41,
                'id' => 493,
            ),
            493 => 
            array (
                '_name' => 'Hoa Lư',
                '_prefix' => 'Huyện',
                '_province_id' => 41,
                'id' => 494,
            ),
            494 => 
            array (
                '_name' => 'Kim Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 41,
                'id' => 495,
            ),
            495 => 
            array (
                '_name' => 'Nho Quan',
                '_prefix' => 'Huyện',
                '_province_id' => 41,
                'id' => 496,
            ),
            496 => 
            array (
                '_name' => 'Ninh Bình',
                '_prefix' => 'Thành phố',
                '_province_id' => 41,
                'id' => 497,
            ),
            497 => 
            array (
                '_name' => 'Tam Điệp',
                '_prefix' => 'Thị xã',
                '_province_id' => 41,
                'id' => 498,
            ),
            498 => 
            array (
                '_name' => 'Yên Khánh',
                '_prefix' => 'Huyện',
                '_province_id' => 41,
                'id' => 499,
            ),
            499 => 
            array (
                '_name' => 'Yên Mô',
                '_prefix' => 'Huyện',
                '_province_id' => 41,
                'id' => 500,
            ),
        ));
        \DB::table('district')->insert(array (
            0 => 
            array (
                '_name' => 'Cẩm Khê',
                '_prefix' => 'Huyện',
                '_province_id' => 42,
                'id' => 501,
            ),
            1 => 
            array (
                '_name' => 'Đoan Hùng',
                '_prefix' => 'Huyện',
                '_province_id' => 42,
                'id' => 502,
            ),
            2 => 
            array (
                '_name' => 'Hạ Hòa',
                '_prefix' => 'Huyện',
                '_province_id' => 42,
                'id' => 503,
            ),
            3 => 
            array (
                '_name' => 'Lâm Thao',
                '_prefix' => 'Huyện',
                '_province_id' => 42,
                'id' => 504,
            ),
            4 => 
            array (
                '_name' => 'Phù Ninh',
                '_prefix' => 'Huyện',
                '_province_id' => 42,
                'id' => 505,
            ),
            5 => 
            array (
                '_name' => 'Phú Thọ',
                '_prefix' => 'Thị xã',
                '_province_id' => 42,
                'id' => 506,
            ),
            6 => 
            array (
                '_name' => 'Tam Nông',
                '_prefix' => 'Huyện',
                '_province_id' => 42,
                'id' => 507,
            ),
            7 => 
            array (
                '_name' => 'Tân Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 42,
                'id' => 508,
            ),
            8 => 
            array (
                '_name' => 'Thanh Ba',
                '_prefix' => 'Huyện',
                '_province_id' => 42,
                'id' => 509,
            ),
            9 => 
            array (
                '_name' => 'Thanh Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 42,
                'id' => 510,
            ),
            10 => 
            array (
                '_name' => 'Thanh Thủy',
                '_prefix' => 'Huyện',
                '_province_id' => 42,
                'id' => 511,
            ),
            11 => 
            array (
                '_name' => 'Việt Trì',
                '_prefix' => 'Thành phố',
                '_province_id' => 42,
                'id' => 512,
            ),
            12 => 
            array (
                '_name' => 'Yên Lập',
                '_prefix' => 'Huyện',
                '_province_id' => 42,
                'id' => 513,
            ),
            13 => 
            array (
                '_name' => 'Bác Ái',
                '_prefix' => 'Huyện',
                '_province_id' => 43,
                'id' => 514,
            ),
            14 => 
            array (
                '_name' => 'Ninh Hải',
                '_prefix' => 'Huyện',
                '_province_id' => 43,
                'id' => 515,
            ),
            15 => 
            array (
                '_name' => 'Ninh Phước',
                '_prefix' => 'Huyện',
                '_province_id' => 43,
                'id' => 516,
            ),
            16 => 
            array (
                '_name' => 'Ninh Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 43,
                'id' => 517,
            ),
            17 => 
            array (
                '_name' => 'Phan Rang - Tháp Chàm',
                '_prefix' => 'Thành phố',
                '_province_id' => 43,
                'id' => 518,
            ),
            18 => 
            array (
                '_name' => 'Thuận Bắc',
                '_prefix' => 'Huyện',
                '_province_id' => 43,
                'id' => 519,
            ),
            19 => 
            array (
                '_name' => 'Thuận Nam',
                '_prefix' => 'Huyện',
                '_province_id' => 43,
                'id' => 520,
            ),
            20 => 
            array (
                '_name' => 'Đông Hòa',
                '_prefix' => 'Huyện',
                '_province_id' => 44,
                'id' => 521,
            ),
            21 => 
            array (
                '_name' => 'Đồng Xuân',
                '_prefix' => 'Huyện',
                '_province_id' => 44,
                'id' => 522,
            ),
            22 => 
            array (
                '_name' => 'Phú Hòa',
                '_prefix' => 'Huyện',
                '_province_id' => 44,
                'id' => 523,
            ),
            23 => 
            array (
                '_name' => 'Sơn Hòa',
                '_prefix' => 'Huyện',
                '_province_id' => 44,
                'id' => 524,
            ),
            24 => 
            array (
                '_name' => 'Sông Cầu',
                '_prefix' => 'Thị xã',
                '_province_id' => 44,
                'id' => 525,
            ),
            25 => 
            array (
                '_name' => 'Sông Hinh',
                '_prefix' => 'Huyện',
                '_province_id' => 44,
                'id' => 526,
            ),
            26 => 
            array (
                '_name' => 'Tây Hòa',
                '_prefix' => 'Huyện',
                '_province_id' => 44,
                'id' => 527,
            ),
            27 => 
            array (
                '_name' => 'Tuy An',
                '_prefix' => 'Huyện',
                '_province_id' => 44,
                'id' => 528,
            ),
            28 => 
            array (
                '_name' => 'Tuy Hòa',
                '_prefix' => 'Thành phố',
                '_province_id' => 44,
                'id' => 529,
            ),
            29 => 
            array (
                '_name' => 'Bình Lục',
                '_prefix' => 'Huyện',
                '_province_id' => 45,
                'id' => 530,
            ),
            30 => 
            array (
                '_name' => 'Duy Tiên',
                '_prefix' => 'Huyện',
                '_province_id' => 45,
                'id' => 531,
            ),
            31 => 
            array (
                '_name' => 'Kim Bảng',
                '_prefix' => 'Huyện',
                '_province_id' => 45,
                'id' => 532,
            ),
            32 => 
            array (
                '_name' => 'Lý Nhân',
                '_prefix' => 'Huyện',
                '_province_id' => 45,
                'id' => 533,
            ),
            33 => 
            array (
                '_name' => 'Phủ Lý',
                '_prefix' => 'Thành phố',
                '_province_id' => 45,
                'id' => 534,
            ),
            34 => 
            array (
                '_name' => 'Thanh Liêm',
                '_prefix' => 'Huyện',
                '_province_id' => 45,
                'id' => 535,
            ),
            35 => 
            array (
                '_name' => 'Cẩm Xuyên',
                '_prefix' => 'Huyện',
                '_province_id' => 46,
                'id' => 536,
            ),
            36 => 
            array (
                '_name' => 'Can Lộc',
                '_prefix' => 'Huyện',
                '_province_id' => 46,
                'id' => 537,
            ),
            37 => 
            array (
                '_name' => 'Đức Thọ',
                '_prefix' => 'Huyện',
                '_province_id' => 46,
                'id' => 538,
            ),
            38 => 
            array (
                '_name' => 'Hà Tĩnh',
                '_prefix' => 'Thành phố',
                '_province_id' => 46,
                'id' => 539,
            ),
            39 => 
            array (
                '_name' => 'Hồng Lĩnh',
                '_prefix' => 'Thị xã',
                '_province_id' => 46,
                'id' => 540,
            ),
            40 => 
            array (
                '_name' => 'Hương Khê',
                '_prefix' => 'Huyện',
                '_province_id' => 46,
                'id' => 541,
            ),
            41 => 
            array (
                '_name' => 'Hương Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 46,
                'id' => 542,
            ),
            42 => 
            array (
                '_name' => 'Kỳ Anh',
                '_prefix' => 'Huyện',
                '_province_id' => 46,
                'id' => 543,
            ),
            43 => 
            array (
                '_name' => 'Lộc Hà',
                '_prefix' => 'Huyện',
                '_province_id' => 46,
                'id' => 544,
            ),
            44 => 
            array (
                '_name' => 'Nghi Xuân',
                '_prefix' => 'Huyện',
                '_province_id' => 46,
                'id' => 545,
            ),
            45 => 
            array (
                '_name' => 'Thạch Hà',
                '_prefix' => 'Huyện',
                '_province_id' => 46,
                'id' => 546,
            ),
            46 => 
            array (
                '_name' => 'Vũ Quang',
                '_prefix' => 'Huyện',
                '_province_id' => 46,
                'id' => 547,
            ),
            47 => 
            array (
                '_name' => 'Cao Lãnh',
                '_prefix' => 'Thành phố',
                '_province_id' => 47,
                'id' => 548,
            ),
            48 => 
            array (
                '_name' => 'Châu Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 47,
                'id' => 549,
            ),
            49 => 
            array (
                '_name' => 'Hồng Ngự',
                '_prefix' => 'Thị xã',
                '_province_id' => 47,
                'id' => 550,
            ),
            50 => 
            array (
                '_name' => 'Huyện Cao Lãnh',
                '_prefix' => 'Huyện',
                '_province_id' => 47,
                'id' => 551,
            ),
            51 => 
            array (
                '_name' => 'Huyện Hồng Ngự',
                '_prefix' => 'Huyện',
                '_province_id' => 47,
                'id' => 552,
            ),
            52 => 
            array (
                '_name' => 'Lai Vung',
                '_prefix' => 'Huyện',
                '_province_id' => 47,
                'id' => 553,
            ),
            53 => 
            array (
                '_name' => 'Lấp Vò',
                '_prefix' => 'Huyện',
                '_province_id' => 47,
                'id' => 554,
            ),
            54 => 
            array (
                '_name' => 'Sa Đéc',
                '_prefix' => 'Thị xã',
                '_province_id' => 47,
                'id' => 555,
            ),
            55 => 
            array (
                '_name' => 'Tam Nông',
                '_prefix' => 'Huyện',
                '_province_id' => 47,
                'id' => 556,
            ),
            56 => 
            array (
                '_name' => 'Tân Hồng',
                '_prefix' => 'Huyện',
                '_province_id' => 47,
                'id' => 557,
            ),
            57 => 
            array (
                '_name' => 'Thanh Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 47,
                'id' => 558,
            ),
            58 => 
            array (
                '_name' => 'Tháp Mười',
                '_prefix' => 'Huyện',
                '_province_id' => 47,
                'id' => 559,
            ),
            59 => 
            array (
                '_name' => 'Châu Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 48,
                'id' => 560,
            ),
            60 => 
            array (
                '_name' => 'Cù Lao Dung',
                '_prefix' => 'Huyện',
                '_province_id' => 48,
                'id' => 561,
            ),
            61 => 
            array (
                '_name' => 'Kế Sách',
                '_prefix' => 'Huyện',
                '_province_id' => 48,
                'id' => 562,
            ),
            62 => 
            array (
                '_name' => 'Long Phú',
                '_prefix' => 'Huyện',
                '_province_id' => 48,
                'id' => 563,
            ),
            63 => 
            array (
                '_name' => 'Mỹ Tú',
                '_prefix' => 'Huyện',
                '_province_id' => 48,
                'id' => 564,
            ),
            64 => 
            array (
                '_name' => 'Mỹ Xuyên',
                '_prefix' => 'Huyện',
                '_province_id' => 48,
                'id' => 565,
            ),
            65 => 
            array (
                '_name' => 'Ngã Năm',
                '_prefix' => 'Huyện',
                '_province_id' => 48,
                'id' => 566,
            ),
            66 => 
            array (
                '_name' => 'Sóc Trăng',
                '_prefix' => 'Thành phố',
                '_province_id' => 48,
                'id' => 567,
            ),
            67 => 
            array (
                '_name' => 'Thạnh Trị',
                '_prefix' => 'Huyện',
                '_province_id' => 48,
                'id' => 568,
            ),
            68 => 
            array (
                '_name' => 'Trần Đề',
                '_prefix' => 'Huyện',
                '_province_id' => 48,
                'id' => 569,
            ),
            69 => 
            array (
                '_name' => 'Vĩnh Châu',
                '_prefix' => 'Huyện',
                '_province_id' => 48,
                'id' => 570,
            ),
            70 => 
            array (
                '_name' => 'Đăk Glei',
                '_prefix' => 'Huyện',
                '_province_id' => 49,
                'id' => 571,
            ),
            71 => 
            array (
                '_name' => 'Đăk Hà',
                '_prefix' => 'Huyện',
                '_province_id' => 49,
                'id' => 572,
            ),
            72 => 
            array (
                '_name' => 'Đăk Tô',
                '_prefix' => 'Huyện',
                '_province_id' => 49,
                'id' => 573,
            ),
            73 => 
            array (
                '_name' => 'Ia H\'Drai',
                '_prefix' => 'Huyện',
                '_province_id' => 49,
                'id' => 574,
            ),
            74 => 
            array (
                '_name' => 'Kon Plông',
                '_prefix' => 'Huyện',
                '_province_id' => 49,
                'id' => 575,
            ),
            75 => 
            array (
                '_name' => 'Kon Rẫy',
                '_prefix' => 'Huyện',
                '_province_id' => 49,
                'id' => 576,
            ),
            76 => 
            array (
                '_name' => 'KonTum',
                '_prefix' => 'Thành phố',
                '_province_id' => 49,
                'id' => 577,
            ),
            77 => 
            array (
                '_name' => 'Ngọc Hồi',
                '_prefix' => 'Huyện',
                '_province_id' => 49,
                'id' => 578,
            ),
            78 => 
            array (
                '_name' => 'Sa Thầy',
                '_prefix' => 'Huyện',
                '_province_id' => 49,
                'id' => 579,
            ),
            79 => 
            array (
                '_name' => 'Tu Mơ Rông',
                '_prefix' => 'Huyện',
                '_province_id' => 49,
                'id' => 580,
            ),
            80 => 
            array (
                '_name' => 'Ba Đồn',
                '_prefix' => 'Thị xã',
                '_province_id' => 50,
                'id' => 581,
            ),
            81 => 
            array (
                '_name' => 'Bố Trạch',
                '_prefix' => 'Huyện',
                '_province_id' => 50,
                'id' => 582,
            ),
            82 => 
            array (
                '_name' => 'Đồng Hới',
                '_prefix' => 'Thành phố',
                '_province_id' => 50,
                'id' => 583,
            ),
            83 => 
            array (
                '_name' => 'Lệ Thủy',
                '_prefix' => 'Huyện',
                '_province_id' => 50,
                'id' => 584,
            ),
            84 => 
            array (
                '_name' => 'Minh Hóa',
                '_prefix' => 'Huyện',
                '_province_id' => 50,
                'id' => 585,
            ),
            85 => 
            array (
                '_name' => 'Quảng Ninh',
                '_prefix' => 'Huyện',
                '_province_id' => 50,
                'id' => 586,
            ),
            86 => 
            array (
                '_name' => 'Quảng Trạch',
                '_prefix' => 'Huyện',
                '_province_id' => 50,
                'id' => 587,
            ),
            87 => 
            array (
                '_name' => 'Tuyên Hóa',
                '_prefix' => 'Huyện',
                '_province_id' => 50,
                'id' => 588,
            ),
            88 => 
            array (
                '_name' => 'Cam Lộ',
                '_prefix' => 'Huyện',
                '_province_id' => 51,
                'id' => 589,
            ),
            89 => 
            array (
                '_name' => 'Đa Krông',
                '_prefix' => 'Huyện',
                '_province_id' => 51,
                'id' => 590,
            ),
            90 => 
            array (
                '_name' => 'Đảo Cồn cỏ',
                '_prefix' => 'Huyện',
                '_province_id' => 51,
                'id' => 591,
            ),
            91 => 
            array (
                '_name' => 'Đông Hà',
                '_prefix' => 'Thành phố',
                '_province_id' => 51,
                'id' => 592,
            ),
            92 => 
            array (
                '_name' => 'Gio Linh',
                '_prefix' => 'Huyện',
                '_province_id' => 51,
                'id' => 593,
            ),
            93 => 
            array (
                '_name' => 'Hải Lăng',
                '_prefix' => 'Huyện',
                '_province_id' => 51,
                'id' => 594,
            ),
            94 => 
            array (
                '_name' => 'Hướng Hóa',
                '_prefix' => 'Huyện',
                '_province_id' => 51,
                'id' => 595,
            ),
            95 => 
            array (
                '_name' => 'Quảng Trị',
                '_prefix' => 'Thị xã',
                '_province_id' => 51,
                'id' => 596,
            ),
            96 => 
            array (
                '_name' => 'Triệu Phong',
                '_prefix' => 'Huyện',
                '_province_id' => 51,
                'id' => 597,
            ),
            97 => 
            array (
                '_name' => 'Vĩnh Linh',
                '_prefix' => 'Huyện',
                '_province_id' => 51,
                'id' => 598,
            ),
            98 => 
            array (
                '_name' => 'Càng Long',
                '_prefix' => 'Huyện',
                '_province_id' => 52,
                'id' => 599,
            ),
            99 => 
            array (
                '_name' => 'Cầu Kè',
                '_prefix' => 'Huyện',
                '_province_id' => 52,
                'id' => 600,
            ),
            100 => 
            array (
                '_name' => 'Cầu Ngang',
                '_prefix' => 'Huyện',
                '_province_id' => 52,
                'id' => 601,
            ),
            101 => 
            array (
                '_name' => 'Châu Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 52,
                'id' => 602,
            ),
            102 => 
            array (
                '_name' => 'Duyên Hải',
                '_prefix' => 'Huyện',
                '_province_id' => 52,
                'id' => 603,
            ),
            103 => 
            array (
                '_name' => 'Tiểu Cần',
                '_prefix' => 'Huyện',
                '_province_id' => 52,
                'id' => 604,
            ),
            104 => 
            array (
                '_name' => 'Trà Cú',
                '_prefix' => 'Huyện',
                '_province_id' => 52,
                'id' => 605,
            ),
            105 => 
            array (
                '_name' => 'Trà Vinh',
                '_prefix' => 'Thành phố',
                '_province_id' => 52,
                'id' => 606,
            ),
            106 => 
            array (
                '_name' => 'Châu Thành',
                '_prefix' => 'Huyện',
                '_province_id' => 53,
                'id' => 607,
            ),
            107 => 
            array (
                '_name' => 'Châu Thành A',
                '_prefix' => 'Huyện',
                '_province_id' => 53,
                'id' => 608,
            ),
            108 => 
            array (
                '_name' => 'Long Mỹ',
                '_prefix' => 'Huyện',
                '_province_id' => 53,
                'id' => 609,
            ),
            109 => 
            array (
                '_name' => 'Ngã Bảy',
                '_prefix' => 'Thị xã',
                '_province_id' => 53,
                'id' => 610,
            ),
            110 => 
            array (
                '_name' => 'Phụng Hiệp',
                '_prefix' => 'Huyện',
                '_province_id' => 53,
                'id' => 611,
            ),
            111 => 
            array (
                '_name' => 'Vị Thanh',
                '_prefix' => 'Thành phố',
                '_province_id' => 53,
                'id' => 612,
            ),
            112 => 
            array (
                '_name' => 'Vị Thủy',
                '_prefix' => 'Huyện',
                '_province_id' => 53,
                'id' => 613,
            ),
            113 => 
            array (
                '_name' => 'Bắc Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 54,
                'id' => 614,
            ),
            114 => 
            array (
                '_name' => 'Mai Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 54,
                'id' => 615,
            ),
            115 => 
            array (
                '_name' => 'Mộc Châu',
                '_prefix' => 'Huyện',
                '_province_id' => 54,
                'id' => 616,
            ),
            116 => 
            array (
                '_name' => 'Mường La',
                '_prefix' => 'Huyện',
                '_province_id' => 54,
                'id' => 617,
            ),
            117 => 
            array (
                '_name' => 'Phù Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 54,
                'id' => 618,
            ),
            118 => 
            array (
                '_name' => 'Quỳnh Nhai',
                '_prefix' => 'Huyện',
                '_province_id' => 54,
                'id' => 619,
            ),
            119 => 
            array (
                '_name' => 'Sơn La',
                '_prefix' => 'Thành phố',
                '_province_id' => 54,
                'id' => 620,
            ),
            120 => 
            array (
                '_name' => 'Sông Mã',
                '_prefix' => 'Huyện',
                '_province_id' => 54,
                'id' => 621,
            ),
            121 => 
            array (
                '_name' => 'Sốp Cộp',
                '_prefix' => 'Huyện',
                '_province_id' => 54,
                'id' => 622,
            ),
            122 => 
            array (
                '_name' => 'Thuận Châu',
                '_prefix' => 'Huyện',
                '_province_id' => 54,
                'id' => 623,
            ),
            123 => 
            array (
                '_name' => 'Vân Hồ',
                '_prefix' => 'Huyện',
                '_province_id' => 54,
                'id' => 624,
            ),
            124 => 
            array (
                '_name' => 'Yên Châu',
                '_prefix' => 'Huyện',
                '_province_id' => 54,
                'id' => 625,
            ),
            125 => 
            array (
                '_name' => 'Bạc Liêu',
                '_prefix' => 'Thành phố',
                '_province_id' => 55,
                'id' => 626,
            ),
            126 => 
            array (
                '_name' => 'Đông Hải',
                '_prefix' => 'Huyện',
                '_province_id' => 55,
                'id' => 627,
            ),
            127 => 
            array (
                '_name' => 'Giá Rai',
                '_prefix' => 'Huyện',
                '_province_id' => 55,
                'id' => 628,
            ),
            128 => 
            array (
                '_name' => 'Hòa Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 55,
                'id' => 629,
            ),
            129 => 
            array (
                '_name' => 'Hồng Dân',
                '_prefix' => 'Huyện',
                '_province_id' => 55,
                'id' => 630,
            ),
            130 => 
            array (
                '_name' => 'Phước Long',
                '_prefix' => 'Huyện',
                '_province_id' => 55,
                'id' => 631,
            ),
            131 => 
            array (
                '_name' => 'Vĩnh Lợi',
                '_prefix' => 'Huyện',
                '_province_id' => 55,
                'id' => 632,
            ),
            132 => 
            array (
                '_name' => 'Lục Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 56,
                'id' => 633,
            ),
            133 => 
            array (
                '_name' => 'Mù Cang Chải',
                '_prefix' => 'Huyện',
                '_province_id' => 56,
                'id' => 634,
            ),
            134 => 
            array (
                '_name' => 'Nghĩa Lộ',
                '_prefix' => 'Thị xã',
                '_province_id' => 56,
                'id' => 635,
            ),
            135 => 
            array (
                '_name' => 'Trạm Tấu',
                '_prefix' => 'Huyện',
                '_province_id' => 56,
                'id' => 636,
            ),
            136 => 
            array (
                '_name' => 'Trấn Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 56,
                'id' => 637,
            ),
            137 => 
            array (
                '_name' => 'Văn Chấn',
                '_prefix' => 'Huyện',
                '_province_id' => 56,
                'id' => 638,
            ),
            138 => 
            array (
                '_name' => 'Văn Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 56,
                'id' => 639,
            ),
            139 => 
            array (
                '_name' => 'Yên Bái',
                '_prefix' => 'Thành phố',
                '_province_id' => 56,
                'id' => 640,
            ),
            140 => 
            array (
                '_name' => 'Yên Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 56,
                'id' => 641,
            ),
            141 => 
            array (
                '_name' => 'Chiêm Hóa',
                '_prefix' => 'Huyện',
                '_province_id' => 57,
                'id' => 642,
            ),
            142 => 
            array (
                '_name' => 'Hàm Yên',
                '_prefix' => 'Huyện',
                '_province_id' => 57,
                'id' => 643,
            ),
            143 => 
            array (
                '_name' => 'Lâm Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 57,
                'id' => 644,
            ),
            144 => 
            array (
                '_name' => 'Na Hang',
                '_prefix' => 'Huyện',
                '_province_id' => 57,
                'id' => 645,
            ),
            145 => 
            array (
                '_name' => 'Sơn Dương',
                '_prefix' => 'Huyện',
                '_province_id' => 57,
                'id' => 646,
            ),
            146 => 
            array (
                '_name' => 'Tuyên Quang',
                '_prefix' => 'Thành phố',
                '_province_id' => 57,
                'id' => 647,
            ),
            147 => 
            array (
                '_name' => 'Yên Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 57,
                'id' => 648,
            ),
            148 => 
            array (
                '_name' => 'Điện Biên',
                '_prefix' => 'Huyện',
                '_province_id' => 58,
                'id' => 649,
            ),
            149 => 
            array (
                '_name' => 'Điện Biên Đông',
                '_prefix' => 'Huyện',
                '_province_id' => 58,
                'id' => 650,
            ),
            150 => 
            array (
                '_name' => 'Điện Biên Phủ',
                '_prefix' => 'Thành phố',
                '_province_id' => 58,
                'id' => 651,
            ),
            151 => 
            array (
                '_name' => 'Mường Ảng',
                '_prefix' => 'Huyện',
                '_province_id' => 58,
                'id' => 652,
            ),
            152 => 
            array (
                '_name' => 'Mường Chà',
                '_prefix' => 'Huyện',
                '_province_id' => 58,
                'id' => 653,
            ),
            153 => 
            array (
                '_name' => 'Mường Lay',
                '_prefix' => 'Thị xã',
                '_province_id' => 58,
                'id' => 654,
            ),
            154 => 
            array (
                '_name' => 'Mường Nhé',
                '_prefix' => 'Huyện',
                '_province_id' => 58,
                'id' => 655,
            ),
            155 => 
            array (
                '_name' => 'Nậm Pồ',
                '_prefix' => 'Huyện',
                '_province_id' => 58,
                'id' => 656,
            ),
            156 => 
            array (
                '_name' => 'Tủa Chùa',
                '_prefix' => 'Huyện',
                '_province_id' => 58,
                'id' => 657,
            ),
            157 => 
            array (
                '_name' => 'Tuần Giáo',
                '_prefix' => 'Huyện',
                '_province_id' => 58,
                'id' => 658,
            ),
            158 => 
            array (
                '_name' => 'Lai Châu',
                '_prefix' => 'Thị xã',
                '_province_id' => 59,
                'id' => 659,
            ),
            159 => 
            array (
                '_name' => 'Mường Tè',
                '_prefix' => 'Huyện',
                '_province_id' => 59,
                'id' => 660,
            ),
            160 => 
            array (
                '_name' => 'Nậm Nhùn',
                '_prefix' => 'Huyện',
                '_province_id' => 59,
                'id' => 661,
            ),
            161 => 
            array (
                '_name' => 'Phong Thổ',
                '_prefix' => 'Huyện',
                '_province_id' => 59,
                'id' => 662,
            ),
            162 => 
            array (
                '_name' => 'Sìn Hồ',
                '_prefix' => 'Huyện',
                '_province_id' => 59,
                'id' => 663,
            ),
            163 => 
            array (
                '_name' => 'Tam Đường',
                '_prefix' => 'Huyện',
                '_province_id' => 59,
                'id' => 664,
            ),
            164 => 
            array (
                '_name' => 'Tân Uyên',
                '_prefix' => 'Huyện',
                '_province_id' => 59,
                'id' => 665,
            ),
            165 => 
            array (
                '_name' => 'Than Uyên',
                '_prefix' => 'Huyện',
                '_province_id' => 59,
                'id' => 666,
            ),
            166 => 
            array (
                '_name' => 'Bắc Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 60,
                'id' => 667,
            ),
            167 => 
            array (
                '_name' => 'Bình Gia',
                '_prefix' => 'Huyện',
                '_province_id' => 60,
                'id' => 668,
            ),
            168 => 
            array (
                '_name' => 'Cao Lộc',
                '_prefix' => 'Huyện',
                '_province_id' => 60,
                'id' => 669,
            ),
            169 => 
            array (
                '_name' => 'Chi Lăng',
                '_prefix' => 'Huyện',
                '_province_id' => 60,
                'id' => 670,
            ),
            170 => 
            array (
                '_name' => 'Đình Lập',
                '_prefix' => 'Huyện',
                '_province_id' => 60,
                'id' => 671,
            ),
            171 => 
            array (
                '_name' => 'Hữu Lũng',
                '_prefix' => 'Huyện',
                '_province_id' => 60,
                'id' => 672,
            ),
            172 => 
            array (
                '_name' => 'Lạng Sơn',
                '_prefix' => 'Thành phố',
                '_province_id' => 60,
                'id' => 673,
            ),
            173 => 
            array (
                '_name' => 'Lộc Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 60,
                'id' => 674,
            ),
            174 => 
            array (
                '_name' => 'Tràng Định',
                '_prefix' => 'Huyện',
                '_province_id' => 60,
                'id' => 675,
            ),
            175 => 
            array (
                '_name' => 'Văn Lãng',
                '_prefix' => 'Huyện',
                '_province_id' => 60,
                'id' => 676,
            ),
            176 => 
            array (
                '_name' => 'Văn Quan',
                '_prefix' => 'Huyện',
                '_province_id' => 60,
                'id' => 677,
            ),
            177 => 
            array (
                '_name' => 'Bắc Mê',
                '_prefix' => 'Huyện',
                '_province_id' => 61,
                'id' => 678,
            ),
            178 => 
            array (
                '_name' => 'Bắc Quang',
                '_prefix' => 'Huyện',
                '_province_id' => 61,
                'id' => 679,
            ),
            179 => 
            array (
                '_name' => 'Đồng Văn',
                '_prefix' => 'Huyện',
                '_province_id' => 61,
                'id' => 680,
            ),
            180 => 
            array (
                '_name' => 'Hà Giang',
                '_prefix' => 'Thành phố',
                '_province_id' => 61,
                'id' => 681,
            ),
            181 => 
            array (
                '_name' => 'Hoàng Su Phì',
                '_prefix' => 'Huyện',
                '_province_id' => 61,
                'id' => 682,
            ),
            182 => 
            array (
                '_name' => 'Mèo Vạc',
                '_prefix' => 'Huyện',
                '_province_id' => 61,
                'id' => 683,
            ),
            183 => 
            array (
                '_name' => 'Quản Bạ',
                '_prefix' => 'Huyện',
                '_province_id' => 61,
                'id' => 684,
            ),
            184 => 
            array (
                '_name' => 'Quang Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 61,
                'id' => 685,
            ),
            185 => 
            array (
                '_name' => 'Vị Xuyên',
                '_prefix' => 'Huyện',
                '_province_id' => 61,
                'id' => 686,
            ),
            186 => 
            array (
                '_name' => 'Xín Mần',
                '_prefix' => 'Huyện',
                '_province_id' => 61,
                'id' => 687,
            ),
            187 => 
            array (
                '_name' => 'Yên Minh',
                '_prefix' => 'Huyện',
                '_province_id' => 61,
                'id' => 688,
            ),
            188 => 
            array (
                '_name' => 'Ba Bể',
                '_prefix' => 'Huyện',
                '_province_id' => 62,
                'id' => 689,
            ),
            189 => 
            array (
                '_name' => 'Bắc Kạn',
                '_prefix' => 'Thị xã',
                '_province_id' => 62,
                'id' => 690,
            ),
            190 => 
            array (
                '_name' => 'Bạch Thông',
                '_prefix' => 'Huyện',
                '_province_id' => 62,
                'id' => 691,
            ),
            191 => 
            array (
                '_name' => 'Chợ Đồn',
                '_prefix' => 'Huyện',
                '_province_id' => 62,
                'id' => 692,
            ),
            192 => 
            array (
                '_name' => 'Chợ Mới',
                '_prefix' => 'Huyện',
                '_province_id' => 62,
                'id' => 693,
            ),
            193 => 
            array (
                '_name' => 'Na Rì',
                '_prefix' => 'Huyện',
                '_province_id' => 62,
                'id' => 694,
            ),
            194 => 
            array (
                '_name' => 'Ngân Sơn',
                '_prefix' => 'Huyện',
                '_province_id' => 62,
                'id' => 695,
            ),
            195 => 
            array (
                '_name' => 'Pác Nặm',
                '_prefix' => 'Huyện',
                '_province_id' => 62,
                'id' => 696,
            ),
            196 => 
            array (
                '_name' => 'Bảo Lạc',
                '_prefix' => 'Huyện',
                '_province_id' => 63,
                'id' => 697,
            ),
            197 => 
            array (
                '_name' => 'Bảo Lâm',
                '_prefix' => 'Huyện',
                '_province_id' => 63,
                'id' => 698,
            ),
            198 => 
            array (
                '_name' => 'Cao Bằng',
                '_prefix' => 'Thị xã',
                '_province_id' => 63,
                'id' => 699,
            ),
            199 => 
            array (
                '_name' => 'Hạ Lang',
                '_prefix' => 'Huyện',
                '_province_id' => 63,
                'id' => 700,
            ),
            200 => 
            array (
                '_name' => 'Hà Quảng',
                '_prefix' => 'Huyện',
                '_province_id' => 63,
                'id' => 701,
            ),
            201 => 
            array (
                '_name' => 'Hòa An',
                '_prefix' => 'Huyện',
                '_province_id' => 63,
                'id' => 702,
            ),
            202 => 
            array (
                '_name' => 'Nguyên Bình',
                '_prefix' => 'Huyện',
                '_province_id' => 63,
                'id' => 703,
            ),
            203 => 
            array (
                '_name' => 'Phục Hòa',
                '_prefix' => 'Huyện',
                '_province_id' => 63,
                'id' => 704,
            ),
            204 => 
            array (
                '_name' => 'Quảng Uyên',
                '_prefix' => 'Huyện',
                '_province_id' => 63,
                'id' => 705,
            ),
            205 => 
            array (
                '_name' => 'Thạch An',
                '_prefix' => 'Huyện',
                '_province_id' => 63,
                'id' => 706,
            ),
            206 => 
            array (
                '_name' => 'Thông Nông',
                '_prefix' => 'Huyện',
                '_province_id' => 63,
                'id' => 707,
            ),
            207 => 
            array (
                '_name' => 'Trà Lĩnh',
                '_prefix' => 'Huyện',
                '_province_id' => 63,
                'id' => 708,
            ),
            208 => 
            array (
                '_name' => 'Trùng Khánh',
                '_prefix' => 'Huyện',
                '_province_id' => 63,
                'id' => 709,
            ),
        ));
        
        
    }
}