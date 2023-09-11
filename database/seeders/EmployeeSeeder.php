<?php

namespace Database\Seeders;

use App\Models\Employees;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            [
                'fullname' => 'Admin',
                'email' => 'admin@admin.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '1',
                'designation' => '1',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],
            [
                'fullname' => 'Vidusha Wijekoon',
                'email' => 'sample@sample.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '1',
                'designation' => '13',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],
            [
                'fullname' => 'Vidusha Wijekoon',
                'email' => 'sample@sample.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '3',
                'designation' => '13',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],
            [
                'fullname' => 'Vidusha Wijekoon',
                'email' => 'sample@sample.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '3',
                'designation' => '13',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],
            [
                'fullname' => 'Vidusha Wijekoon',
                'email' => 'sample@sample.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '3',
                'designation' => '13',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],
            [
                'fullname' => 'Vidusha Wijekoon',
                'email' => 'sample@sample.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '5',
                'designation' => '13',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],
            [
                'fullname' => 'Vidusha Wijekoon',
                'email' => 'sample@sample.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '5',
                'designation' => '13',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],
            [
                'fullname' => 'Vidusha Wijekoon',
                'email' => 'sample@sample.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '3',
                'designation' => '13',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],
            [
                'fullname' => 'Vidusha Wijekoon',
                'email' => 'sample@sample.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '3',
                'designation' => '13',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],
            [
                'fullname' => 'Vidusha Wijekoon',
                'email' => 'sample@sample.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '3',
                'designation' => '13',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],
            [
                'fullname' => 'Vidusha Wijekoon',
                'email' => 'sample@sample.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '9',
                'designation' => '13',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],
            [
                'fullname' => 'Vidusha Wijekoon',
                'email' => 'sample@sample.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '9',
                'designation' => '13',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],
            [
                'fullname' => 'Vidusha Wijekoon',
                'email' => 'sample@sample.com',
                'gender' => '0',
                'birthday' => '2023-09-14',
                'passport_number' => 'N12345678',
                'passport_expiring' => '2023-09-14',
                'visa_type' => '1',
                'visa_expiring' => '2023-09-14',
                'contact_number' => '+9182534586',
                'current_address' => '52/A, Mariyawaththe, Gampola',
                'resident_country' => '213',
                'emergency_number' => '+94812353489',
                'image' => 'uploads/employee/1693751678.png',
                'department' => '9',
                'designation' => '13',
                'join_date' => '2023-09-14',
                'special_note' => 'Our services are: Artificial Intelligence Research and Development, Computer Vision, Surveillance and Safety, Data Management & Analytics',
                'account_status' => '0',
                'year_leaves' => '0',
                'status' => '1',
                'created_by' => '1',
            ],

        ];

        foreach ($array as $value) {
            Employees::create($value);
        }
    }
}
