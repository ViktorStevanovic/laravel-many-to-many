<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'Html',
            'Css',
            'Sass',
            'Java-script',
            'Vue-3',
            'MySql',
            'PHP',
            'Laravel',
        ];

        foreach ($technologies as $singleTechnology) {
            $technology = new Technology();
            $technology->name = $singleTechnology;
            $technology->save();
            $technology->slug = Str::slug($technology->id . ' ' . $technology->name);
            $technology->update();
        }
    }
}
