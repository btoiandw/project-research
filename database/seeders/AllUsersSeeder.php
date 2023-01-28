<?php

namespace Database\Seeders;

use App\Models\TbAdmin;
use App\Models\TbDirector;
use App\Models\User;
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
        $directer = [
            [
                'employee_referees_id' => 1,
                'employee_id' => 4, //บุคคลภายนอก = 0
                'username' => '1234345678902',
                'password' => '1234345678902',
                'pname' => 'ผศ.ดร.',
                'full_name_th' => 'ฆัมภิชา ตันติสันติสม',
                'full_name_eng' => 'Khumphicha Tantisantisom',
                'gender' => 'หญิง',
                'organization_id' => '30',
                'work_status' => '1', //1=work,0=not work
                'tel' => '067-1234567',
                'email' => 'mana@gmail.com',
                'address' => 'ม.4 ต.นครชุม อ.เมือง จ.กำแพงเพชร 62000',
                'high_education' => 'ปริญญาตรี',
                'certificate' => 'วิทยาศาสตร์บัณฑิต',
                'year_congrat' => '2537',
                'institute_name' => 'มหาวิทยาลัยราชภัฏกำแพงเพชร',
                'major' => 'เทคโนโลยีสารสนเทศ',
            ],
            [
                'employee_referees_id' => 2,
                'employee_id' => 0, //บุคคลภายนอก = 0
                'username' => '1231234567890',
                'password' => '1231234567890',
                'pname' => 'ผศ.',
                'full_name_th' => 'อภินันท์ ธรรมธีระศิษฏ์',
                'full_name_eng' => 'apinan thamteerasit',
                'gender' => 'ชาย',
                'organization_id' => 0,
                'work_status' => '1', //1=work,0=not work
                'tel' => '067-1234567',
                'email' => 'abhinant.th@gmail.com',
                'address' => 'ม.4 ต.นครชุม อ.เมือง จ.กำแพงเพชร 62000',
                'high_education' => 'ปริญญาตรี',
                'certificate' => 'วิทยาศาสตร์บัณฑิต',
                'year_congrat' => '2537',
                'institute_name' => 'มหาวิทยาลัยราชภัฏกำแพงเพชร',
                'major' => 'เทคโนโลยีสารสนเทศ',
            ],
            [
                'employee_referees_id' => 3,
                'employee_id' => 0, //บุคคลภายนอก = 0
                'username' => '1987654654230',
                'password' => '1987654654230',
                'pname' => 'ผศ.ดร.',
                'full_name_th' => 'อังคณา ตาเสนา',
                'full_name_eng' => 'ANGKANA TASENA',
                'gender' => 'ชาย',
                'organization_id' => 0,
                'work_status' => '1', //1=work,0=not work
                'tel' => '067-1234567',
                'email' => 'nunazaa157@gmail.com',
                'address' => 'ม.4 ต.นครชุม อ.เมือง จ.กำแพงเพชร 62000',
                'high_education' => 'ปริญญาตรี',
                'certificate' => 'วิทยาศาสตร์บัณฑิต',
                'year_congrat' => '2537',
                'institute_name' => 'มหาวิทยาลัยราชภัฏกำแพงเพชร',
                'major' => 'เทคโนโลยีสารสนเทศ',
            ]
        ];
        foreach ($directer as $key => $idt) {
            TbDirector::create($idt);
        }
        $admin = [
            [
                'employee_admin_id' => 1,
                'employee_id' => 1, //บุคคลภายนอก = 0
                'username' => '1234567890123',
                'password' => '1234567890123',
                'status_workadmin' => '1'
            ],
            [
                'employee_admin_id' => 2,
                'employee_id' => 3, //บุคคลภายนอก = 0
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
                'employee_id' => 1,
                'username' => '1234567890123',
                'password' => '1234567890123',
                'pname' => 'นางสาว',
                'full_name_th' => 'พัชราวรรณ เกิดพันธ์',
                'full_name_eng' => 'Patcharawan Gedpun',
                'gender' => 'หญิง',
                'organization_id' => 30,
                'work_status' => '1', //1=work,0=not work
                'tel' => '067-1234567',
                'email' => 'biw@gmail.com',
                'address' => '3/7 ม.6 ต.สระแก้ว อ.เมือง จ.กำแพงเพชร 62000',
                'high_education' => 'ปริญญาตรี',
                'certificate' => 'วิทยาศาสตร์บัณฑิต',
                'year_congrat' => '2555',
                'institute_name' => 'มหาวิทยาลัยราชภัฏกำแพงเพชร',
                'major' => 'เทคโนโลยีสารสนเทศ',
                'status_ps' => 'โสด',
            ],
            [
                'employee_id' => 2,
                'username' => '1098767854321',
                'password' => '1098767854321',
                'pname' => 'นาย',
                'full_name_th' => 'มานะ มานี่',
                'full_name_eng' => 'Mana Mani',
                'gender' => 'ชาย',
                'organization_id' => 30,
                'work_status' => '1', //1=work,0=not work
                'tel' => '067-1234567',
                'email' => 'mana@gmail.com',
                'address' => 'ม.6 ต.สระแก้ว อ.เมือง จ.กำแพงเพชร 62000',
                'high_education' => 'ปริญญาตรี',
                'certificate' => 'วิทยาศาสตร์บัณฑิต',
                'year_congrat' => '2555',
                'institute_name' => 'มหาวิทยาลัยราชภัฏกำแพงเพชร',
                'major' => 'เทคโนโลยีสารสนเทศ',
                'status_ps' => 'โสด',
            ],
            [
                'employee_id' => 3,
                'username' => '1098765432234',
                'password' => '1098765432234',
                'pname' => 'นางสาว',
                'full_name_th' => 'มริสา การะเวก',
                'full_name_eng' => 'Marisa Karawek',
                'gender' => 'หญิง',
                'organization_id' => 30,
                'work_status' => '1', //1=work,0=not work
                'tel' => '067-1234567',
                'email' => 'marisa26112541@gmail.com',
                'address' => 'ม.4 ต.นครชุม อ.เมือง จ.กำแพงเพชร 62000',
                'high_education' => 'ปริญญาตรี',
                'certificate' => 'วิทยาศาสตร์บัณฑิต',
                'year_congrat' => '2537',
                'institute_name' => 'มหาวิทยาลัยราชภัฏกำแพงเพชร',
                'major' => 'เทคโนโลยีสารสนเทศ',
                'status_ps' => 'โสด',
            ],
            [
                'employee_id' => 4,
                'username' => '1234345678902',
                'password' => '1234345678902',
                'pname' => 'ผศ.ดร.',
                'full_name_th' => 'ฆัมภิชา ตันติสันติสม',
                'full_name_eng' => 'Khumphicha Tantisantisom',
                'gender' => 'หญิง',
                'organization_id' => 30,
                'work_status' => '1', //1=work,0=not work
                'tel' => '067-1234567',
                'email' => 'khumphicha@gmail.com',
                'address' => 'ม.4 ต.นครชุม อ.เมือง จ.กำแพงเพชร 62000',
                'high_education' => 'ปริญญาตรี',
                'certificate' => 'วิทยาศาสตร์บัณฑิต',
                'year_congrat' => '2563',
                'institute_name' => 'มหาวิทยาลัยราชภัฏกำแพงเพชร',
                'major' => 'เทคโนโลยีสารสนเทศ',
                'status_ps' => 'สมรส',
            ]

        ];
        foreach ($users as $key => $item) {
            User::create($item);
        }
    }
}
