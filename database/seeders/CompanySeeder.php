<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Post;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tech = [
            [
                'title' => 'Web developer',
                'level' => 'Mid/Senior level',
                'employment' => 'Part time',
                'education' => 'SSCE',
            ], [
                'title' => 'App Developer',
                'level' => 'Mid/Senior level',
                'employment' => 'Part time',
                'education' => 'SSCE',
            ], [
                'title' => 'Data Engineer',
                'level' => 'Mid/Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ], [
                'title' => 'Devops Engineer',
                'level' => 'Mid/Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ], [
                'title' => 'Tester',
                'level' => 'Any level',
                'employment' => 'Part time',
                'education' => 'SSCE',
            ]
        ];
        $marketing = [
            [
            'title' => 'Digital Marketing Professional',
            'level' => 'Senior level',
            'employment' => 'Part time',
            'education' => 'bachelors',
            ], [
                'title' => 'Copywriting/Blogging Professional',
                'level' => 'Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ]
        ];

        $content = [
            [
                'title' => 'Animation Designer',
                'level' => 'Mid/Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ], [
                'title' => 'Illustration Designer',
                'level' => 'Mid/Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ], [
                'title' => 'Graphics/Video Editor',
                'level' => 'Mid/Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ], [
                'title' => 'Jingles/Voiceover Professional',
                'level' => 'Mid/Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ],
        ];

        $campaign = [
            [
                'title' => 'Grassroot Mobilization Specialist',
                'level' => 'Senior level',
                'employment' => 'Part time',
                'education' => 'SSCE',
            ], [
                'title' => 'Online Media Specialist',
                'level' => 'Senior level',
                'employment' => 'Part time',
                'education' => 'SSCE',
            ], [
                'title' => 'Offline Media Specialist',
                'level' => 'Senior level',
                'employment' => 'Part time',
                'education' => 'SSCE',
            ],
        ];

        $finance = [
            [
                'title' => 'Accountant/Economist',
                'level' => 'Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ], [
                'title' => 'Partnerships/Business Development',
                'level' => 'Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ], [
                'title' => 'Budget Preparation Expert',
                'level' => 'Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ]
        ];

        $admin = [
            [
                'title' => 'Human Resource Management',
                'level' => 'Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ], [
                'title' => 'Tech Supervisor',
                'level' => 'Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ],
        ];

        $legal = [
            [
                'title' => 'Legal Expert - Politics',
                'level' => 'Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ], [
                'title' => 'Legal Expert - Generic',
                'level' => 'Senior level',
                'employment' => 'Part time',
                'education' => 'bachelors',
            ]
        ];

        //user id is 2 that has author role
        $companyC = Company::factory()->create([
            'company_category_id' => 1,
            'logo' => 'images/logo/tbn.png',
        ]);
        //user id is 2 that has author role
        $companyF = Company::factory()->create([
            'company_category_id' => 2,
            'logo' => 'images/logo/tbn.png',
        ]);
        //user id is 2 that has author role
        $companyA = Company::factory()->create([
            'company_category_id' => 3,
            'logo' => 'images/logo/tbn.png',
        ]);
        //user id is 2 that has author role
        $companyL = Company::factory()->create([
            'company_category_id' => 4,
            'logo' => 'images/logo/tbn.png',
        ]);
        //user id is 2 that has author role
        $companyT = Company::factory()->create([
            'company_category_id' => 5,
            'logo' => 'images/logo/tbn.png',
        ]);
        //user id is 2 that has author role
        $companyM = Company::factory()->create([
            'company_category_id' => 6,
            'logo' => 'images/logo/tbn.png',
        ]);
        //user id is 2 that has author role
        $companyD = Company::factory()->create([
            'company_category_id' => 7,
            'logo' => 'images/logo/tbn.png',
        ]);

        foreach ($campaign as $index => $detail) {
            $post = Post::factory()->create([
                'company_id' => $companyC->id,
                'job_title' => $detail['title'],
                'job_level' => $detail['level'],
                'employment_type' => $detail['employment'],
                'education_level' => $detail['education'],
            ]);
        }

        foreach ($finance as $index => $detail) {
            $post = Post::factory()->create([
                'company_id' => $companyF->id,
                'job_title' => $detail['title'],
                'job_level' => $detail['level'],
                'employment_type' => $detail['employment'],
                'education_level' => $detail['education'],
            ]);
        }

        foreach ($admin as $index => $detail) {
            $post = Post::factory()->create([
                'company_id' => $companyA->id,
                'job_title' => $detail['title'],
                'job_level' => $detail['level'],
                'employment_type' => $detail['employment'],
                'education_level' => $detail['education'],
            ]);
        }

        foreach ($legal as $index => $detail) {
            $post = Post::factory()->create([
                'company_id' => $companyL->id,
                'job_title' => $detail['title'],
                'job_level' => $detail['level'],
                'employment_type' => $detail['employment'],
                'education_level' => $detail['education'],
            ]);
        }

        foreach ($tech as $index => $detail) {
            $post = Post::factory()->create([
                'company_id' => $companyT->id,
                'job_title' => $detail['title'],
                'job_level' => $detail['level'],
                'employment_type' => $detail['employment'],
                'education_level' => $detail['education'],
            ]);
        }

        foreach ($marketing as $index => $detail) {
            $post = Post::factory()->create([
                'company_id' => $companyM->id,
                'job_title' => $detail['title'],
                'job_level' => $detail['level'],
                'employment_type' => $detail['employment'],
                'education_level' => $detail['education'],
            ]);
        }

        foreach ($content as $index => $detail) {
            $post = Post::factory()->create([
                'company_id' => $companyD->id,
                'job_title' => $detail['title'],
                'job_level' => $detail['level'],
                'employment_type' => $detail['employment'],
                'education_level' => $detail['education'],
            ]);
        }
    }
}
