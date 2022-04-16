<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category =
        [
            'ورزشی'=>
            [
                'slug'=>'sport',
                'icon'=>'far fa-futbol',
                'description'=>'A human activity involving physical exertion and skill as the primary focus of the activity'
            ],
            'تاریخی'=>
            [
                'slug'=>'historical',
                'icon'=>'historical',
                'description'=>'History is the study and the documentation of the past.'

            ],
            'سلامتی'=>
            [
                'slug'=>'health',
                'icon'=>'fas fa-heart',
                'description'=>'Health is a state of complete physical, mental, and social well-being and not merely the absence of disease or infirmity.'

            ], 'غذا'=>
            [
                'slug'=>'food',
                'icon'=>'fas fa-hamburger',
                'description'=>'Food is any substance consumed to provide nutritional support for an organism'

            ], 'آموزشی'=>
            [
                'slug'=>'Education',
                'icon'=>'fas fa-atom',
                'description'=>'Education refers to the discipline that is concerned with methods of teaching and learning in schools or school-like environments'

            ], 'انرژی'=>
            [
                'slug'=>'energy',
                'icon'=>'fas fa-atom' ,
                'description'=>'In physics, energy is the quantitative property that is transferred to a body or to a physical system'

            ],
        ];



        foreach ($category as $categoryKey => $categoryDetail) {
        
            category::create([

                'name'=>$categoryKey,
                'slug'=>$categoryDetail['slug'],
                'icon'=>$categoryDetail['icon'],
                'description'=>$categoryDetail['description']
            ]);
            
        }
    }
}