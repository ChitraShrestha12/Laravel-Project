<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $school_students = [
            [
                'name' => 'Sita Sharma',
                'class' => 'BBA',
                'address' => 'Lalitpur',
                'phone_number' => '9865231478'
            ],
            [
                'name' => 'Aakash Thapa',
                'class' => 'BCA',
                'address' => 'Bhaktapur',
                'phone_number' => '9854123698'
            ],
            [
                'name' => 'Nisha Gurung',
                'class' => 'BIT',
                'address' => 'Pokhara',
                'phone_number' => '9845632147'
            ],
            [
                'name' => 'Prakash Karki',
                'class' => 'BBS',
                'address' => 'Biratnagar',
                'phone_number' => '9832145698'
            ],
            [
                'name' => 'Anita Rai',
                'class' => 'BCA',
                'address' => 'Dharan',
                'phone_number' => '9823456712'
            ],
            [
                'name' => 'Suman Adhikari',
                'class' => 'BIT',
                'address' => 'Butwal',
                'phone_number' => '9812345678'
            ],
            [
                'name' => 'Kiran Shrestha',
                'class' => 'BBA',
                'address' => 'Hetauda',
                'phone_number' => '9801234567'
            ],
            [
                'name' => 'Manisha Bhandari',
                'class' => 'BBS',
                'address' => 'Janakpur',
                'phone_number' => '9867891234'
            ],
            [
                'name' => 'Deepak Magar',
                'class' => 'BIT',
                'address' => 'Chitwan',
                'phone_number' => '9856789123'
            ]

        ];

        foreach ($school_students as $school_student) {
            student::create($school_student);
        }
    }
}
