<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Campaign Strategy',
            'Finance/Fund-Raising',
            'Admin/General Mgmt',
            'Legal',
            'Technology',
            'Marketing/Advertising',
            'Digital Creatives/Multimedia'
        ];
        foreach ($categories as $category) {
            DB::table('company_categories')->insert([
                'category_name' => $category
            ]);
        }
    }
}
