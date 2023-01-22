<?php

namespace Database\Seeders;

use App\Models\TbAdmin;
use Illuminate\Database\Seeder;

class AllUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $directory = [
            [
                'employee_referees_id',
                'username',
                'password',
                'pname',
                'full_name_th',
                'full_name_eng',
                'gender',
                'organization_id', //บุคคลภายนอก=0
                'work_status', //1=work,0=not work
                'tel',
                'email',
                'address',
                'high_education',
                'certificate',
                'year_congrat',
                'institute_name',
                'major',
            ]
        ];
        $admin = [
            [
                'employee_admin_id' => 1,
                'username' => '1234567890123',
                'password' => '1234567890123',
                'status_workadmin' => '1'
            ],
            [
                'employee_admin_id' => 2,
                'username' => '1098765432234',
                'password' => '1098765432234',
                'status_workadmin' => '1'
            ]
        ];
        foreach ($admin as $key => $value) {
            TbAdmin::create($value);
        }
        $users = [
            [
                'employee_id',
                'username',
                'password',
                'pname',
                'full_name_th',
                'full_name_eng',
                'gender',
                'organization_id',
                'work_status', //1=work,0=not work
                'tel',
                'email',
                'address',
                'high_education',
                'certificate',
                'year_congrat',
                'institute_name',
                'major',
                'status_ps',
            ]
        ];
    }
}
