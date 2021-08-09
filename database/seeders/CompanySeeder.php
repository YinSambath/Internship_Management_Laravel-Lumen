<?php
namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::truncate();

        $companies = [
            [ 
                'company' => 'Institute of Technology of Cambodia',
                'address'  => 'Russian Conf, Norodom Blvd, Phnom Penh',
                'phone' => '023 880 370',
                'h_p' => '023 982 404',
                'e_mail' => 'info@itc.edu.kh',
                'web' => 'www.itc.edu.kh',
                'title' => 'Internship',
                'training_field' => 'Web developer'
            ],
            [
                'company' => 'Asia Euro University',
                'address'  => 'kammpuch Krum Blvd Teuk Laak I, Khan Toul Kok, Phnom Penh-Kingdom of Cambodia',
                'phone' => '015 720 072',
                'h_p' => '023 998 124',
                'e_mail' => 'info@aeu.edu.kh',
                'web' => 'info@aeu.edu.kh',
                'title' => 'Internship',
                'training_field' => 'Web developer'
            ]
        ];

        foreach ($companies as $company) 
        {
            Company::create([
                'company' => $company['company'],
                'address' => $company['address'], 
                'phone' => $company['phone'], 
                'h_p' => $company['h_p'], 
                'e_mail' => $company['e_mail'], 
                'web' => $company['web'], 
                'title' => $company['title'], 
                'training_field' => $company['training_field']
            ]);
        }
    }
}
