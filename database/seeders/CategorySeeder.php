<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Agenda',
            'Acara Sekolah'
        ];

        foreach ($data as $item) {
            Category::create([
                'name' => $item,
                'slug' => Str::slug($item),
            ]);
        }
    }
}