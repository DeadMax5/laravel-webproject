<?php

namespace Database\Seeders;

use App\Models\Tashkel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tashkelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tashkel =[
            'مكتب رئيس المجلس',
            'الدائرة الادارية والمالية',
            'الدائرة القانوية',
            ' دائرة البحوث والدراسات ',
            '  دائرة التطوير الاداري',
            '  دائرة التنسيقق والمتابعة',
            ' مديرية تكنولوجيا المعلومات ',
            '  مديرية التدقيق والرقابة المالية',
            ' قسم العقود ',
            ' قسم الاعلام والعلاقات العامة ',
            ' قسم   ادارة الجودة وتقيم الاداء ',
            ' قسم التصاريح  الامنية ',

        ];

        foreach($tashkel as $item) { 
            Tashkel::create(['name'=>$item]);
        }
    }
}
