<?php

namespace Database\Seeders;

use App\Models\Story_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class storyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $story = [
            'قصة عامة',
            'قصة خاصة',
        ];
        foreach($story as $item) { 
            Story_type::create(['name' =>$item]);
        }
    }
}
