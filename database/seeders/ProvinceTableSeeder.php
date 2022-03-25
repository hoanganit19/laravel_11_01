<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('province')->delete();
        
        \DB::table('province')->insert(array (
            0 => 
            array (
                '_code' => 'SG',
                '_name' => 'Hồ Chí Minh',
                'id' => 1,
            ),
            1 => 
            array (
                '_code' => 'HN',
                '_name' => 'Hà Nội',
                'id' => 2,
            ),
            2 => 
            array (
                '_code' => 'DDN',
                '_name' => 'Đà Nẵng',
                'id' => 3,
            ),
            3 => 
            array (
                '_code' => 'BD',
                '_name' => 'Bình Dương',
                'id' => 4,
            ),
            4 => 
            array (
                '_code' => 'DNA',
                '_name' => 'Đồng Nai',
                'id' => 5,
            ),
            5 => 
            array (
                '_code' => 'KH',
                '_name' => 'Khánh Hòa',
                'id' => 6,
            ),
            6 => 
            array (
                '_code' => 'HP',
                '_name' => 'Hải Phòng',
                'id' => 7,
            ),
            7 => 
            array (
                '_code' => 'LA',
                '_name' => 'Long An',
                'id' => 8,
            ),
            8 => 
            array (
                '_code' => 'QNA',
                '_name' => 'Quảng Nam',
                'id' => 9,
            ),
            9 => 
            array (
                '_code' => 'VT',
                '_name' => 'Bà Rịa Vũng Tàu',
                'id' => 10,
            ),
            10 => 
            array (
                '_code' => 'DDL',
                '_name' => 'Đắk Lắk',
                'id' => 11,
            ),
            11 => 
            array (
                '_code' => 'CT',
                '_name' => 'Cần Thơ',
                'id' => 12,
            ),
            12 => 
            array (
                '_code' => 'BTH',
                '_name' => 'Bình Thuận  ',
                'id' => 13,
            ),
            13 => 
            array (
                '_code' => 'LDD',
                '_name' => 'Lâm Đồng',
                'id' => 14,
            ),
            14 => 
            array (
                '_code' => 'TTH',
                '_name' => 'Thừa Thiên Huế',
                'id' => 15,
            ),
            15 => 
            array (
                '_code' => 'KG',
                '_name' => 'Kiên Giang',
                'id' => 16,
            ),
            16 => 
            array (
                '_code' => 'BN',
                '_name' => 'Bắc Ninh',
                'id' => 17,
            ),
            17 => 
            array (
                '_code' => 'QNI',
                '_name' => 'Quảng Ninh',
                'id' => 18,
            ),
            18 => 
            array (
                '_code' => 'TH',
                '_name' => 'Thanh Hóa',
                'id' => 19,
            ),
            19 => 
            array (
                '_code' => 'NA',
                '_name' => 'Nghệ An',
                'id' => 20,
            ),
            20 => 
            array (
                '_code' => 'HD',
                '_name' => 'Hải Dương',
                'id' => 21,
            ),
            21 => 
            array (
                '_code' => 'GL',
                '_name' => 'Gia Lai',
                'id' => 22,
            ),
            22 => 
            array (
                '_code' => 'BP',
                '_name' => 'Bình Phước',
                'id' => 23,
            ),
            23 => 
            array (
                '_code' => 'HY',
                '_name' => 'Hưng Yên',
                'id' => 24,
            ),
            24 => 
            array (
                '_code' => 'BDD',
                '_name' => 'Bình Định',
                'id' => 25,
            ),
            25 => 
            array (
                '_code' => 'TG',
                '_name' => 'Tiền Giang',
                'id' => 26,
            ),
            26 => 
            array (
                '_code' => 'TB',
                '_name' => 'Thái Bình',
                'id' => 27,
            ),
            27 => 
            array (
                '_code' => 'BG',
                '_name' => 'Bắc Giang',
                'id' => 28,
            ),
            28 => 
            array (
                '_code' => 'HB',
                '_name' => 'Hòa Bình',
                'id' => 29,
            ),
            29 => 
            array (
                '_code' => 'AG',
                '_name' => 'An Giang',
                'id' => 30,
            ),
            30 => 
            array (
                '_code' => 'VP',
                '_name' => 'Vĩnh Phúc',
                'id' => 31,
            ),
            31 => 
            array (
                '_code' => 'TNI',
                '_name' => 'Tây Ninh',
                'id' => 32,
            ),
            32 => 
            array (
                '_code' => 'TN',
                '_name' => 'Thái Nguyên',
                'id' => 33,
            ),
            33 => 
            array (
                '_code' => 'LCA',
                '_name' => 'Lào Cai',
                'id' => 34,
            ),
            34 => 
            array (
                '_code' => 'NDD',
                '_name' => 'Nam Định',
                'id' => 35,
            ),
            35 => 
            array (
                '_code' => 'QNG',
                '_name' => 'Quảng Ngãi',
                'id' => 36,
            ),
            36 => 
            array (
                '_code' => 'BTR',
                '_name' => 'Bến Tre',
                'id' => 37,
            ),
            37 => 
            array (
                '_code' => 'DNO',
                '_name' => 'Đắk Nông',
                'id' => 38,
            ),
            38 => 
            array (
                '_code' => 'CM',
                '_name' => 'Cà Mau',
                'id' => 39,
            ),
            39 => 
            array (
                '_code' => 'VL',
                '_name' => 'Vĩnh Long',
                'id' => 40,
            ),
            40 => 
            array (
                '_code' => 'NB',
                '_name' => 'Ninh Bình',
                'id' => 41,
            ),
            41 => 
            array (
                '_code' => 'PT',
                '_name' => 'Phú Thọ',
                'id' => 42,
            ),
            42 => 
            array (
                '_code' => 'NT',
                '_name' => 'Ninh Thuận',
                'id' => 43,
            ),
            43 => 
            array (
                '_code' => 'PY',
                '_name' => 'Phú Yên',
                'id' => 44,
            ),
            44 => 
            array (
                '_code' => 'HNA',
                '_name' => 'Hà Nam',
                'id' => 45,
            ),
            45 => 
            array (
                '_code' => 'HT',
                '_name' => 'Hà Tĩnh',
                'id' => 46,
            ),
            46 => 
            array (
                '_code' => 'DDT',
                '_name' => 'Đồng Tháp',
                'id' => 47,
            ),
            47 => 
            array (
                '_code' => 'ST',
                '_name' => 'Sóc Trăng',
                'id' => 48,
            ),
            48 => 
            array (
                '_code' => 'KT',
                '_name' => 'Kon Tum',
                'id' => 49,
            ),
            49 => 
            array (
                '_code' => 'QB',
                '_name' => 'Quảng Bình',
                'id' => 50,
            ),
            50 => 
            array (
                '_code' => 'QT',
                '_name' => 'Quảng Trị',
                'id' => 51,
            ),
            51 => 
            array (
                '_code' => 'TV',
                '_name' => 'Trà Vinh',
                'id' => 52,
            ),
            52 => 
            array (
                '_code' => 'HGI',
                '_name' => 'Hậu Giang',
                'id' => 53,
            ),
            53 => 
            array (
                '_code' => 'SL',
                '_name' => 'Sơn La',
                'id' => 54,
            ),
            54 => 
            array (
                '_code' => 'BL',
                '_name' => 'Bạc Liêu',
                'id' => 55,
            ),
            55 => 
            array (
                '_code' => 'YB',
                '_name' => 'Yên Bái',
                'id' => 56,
            ),
            56 => 
            array (
                '_code' => 'TQ',
                '_name' => 'Tuyên Quang',
                'id' => 57,
            ),
            57 => 
            array (
                '_code' => 'DDB',
                '_name' => 'Điện Biên',
                'id' => 58,
            ),
            58 => 
            array (
                '_code' => 'LCH',
                '_name' => 'Lai Châu',
                'id' => 59,
            ),
            59 => 
            array (
                '_code' => 'LS',
                '_name' => 'Lạng Sơn',
                'id' => 60,
            ),
            60 => 
            array (
                '_code' => 'HG',
                '_name' => 'Hà Giang',
                'id' => 61,
            ),
            61 => 
            array (
                '_code' => 'BK',
                '_name' => 'Bắc Kạn',
                'id' => 62,
            ),
            62 => 
            array (
                '_code' => 'CB',
                '_name' => 'Cao Bằng',
                'id' => 63,
            ),
        ));
        
        
    }
}