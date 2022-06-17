<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Company::create([
            'name' => 'شركة الأوائل',
            'location' => 'الرياض - السعودية',
            'photo' => 'about.jpg',
            'short_description' => 'أفضل شركة رائدة في كشف تسربات المياه بالرياض',
            'description' => 'تعد شركة كشف تسربات المياه بالرياض من أهم وأكبر الشركات المتخصصة في مجال الكشف عن تسربات المياه، حيث أنها تمتلك القدرة على كشف ومعالجة التسربات المائية التي تصيب أي مبنى بدون حدوث أي تكسير للحوائط والأرضيات والجدران، بفضل الأجهزة الحديثة التي تمتلكها الشركة والتي تساهم في التعرف على مكان التسريب في وقت سريع، كما أن الشركة تقدم تقارير معتمدة للعميل تؤكد وجود تسريب مياه بالمبنى، أدى إلى ارتفاع فاتورة المياه في الشهور الماضية.',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com/sherketalawaael',
            'phone' => '966569920886'
        ]);
    }
}
