<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 2, //default author by user seeder class
            'company_category_id' => 1,
            'logo' => 'images/companies/logos/',
            'title' => 'TakeBackNaija',
            'description' => 'TAKEBACKNAIJA, a movement aimed at selecting and electing the most suitable candidates in all executive offices in government. We tend to go from Local government areas to States and up to the Presidential level to selecting and endorsing preferred candidates that are fit to carry out the tasks before them.',
            'website' => 'https://www.takebacknaija.org.ng',
            'cover_img' => 'nocover',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ];
    }
}
