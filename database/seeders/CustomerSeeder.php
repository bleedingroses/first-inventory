<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Ari Salim',
            'email' => 'arisalim@gmail.com',
            'phone' => '09876543322123',
            'address' => 'Alamat Ari',
            'notes' => 'Catatan',
        ]);
        Customer::create([
            'name' => 'Aji Setiaji',
            'email' => 'ajisetiaji@gmail.com',
            'phone' => '098987668907',
            'address' => 'Alamat Aji',
            'notes' => 'Catatan',
        ]);
        Customer::create([
            'name' => 'Rahman Surahman',
            'email' => 'rahmansurahman@gmail.com',
            'phone' => '08123456789',
            'address' => 'Alamat Rahman',
            'notes' => 'Catatan',
        ]);
        Customer::create([
            'name' => 'Nanang Markonang',
            'email' => 'nanangmarkonang@gmail.com',
            'phone' => '0888776654782',
            'address' => 'Alamat Nanang',
            'notes' => 'Catatan',
        ]);
        Customer::create([
            'name' => 'Iis Setiasih',
            'email' => 'iissetiasih@gmail.com',
            'phone' => '0866778899',
            'address' => 'Alamat Iis',
            'notes' => 'Catatan',
        ]);
        Customer::create([
            'name' => 'Ika Sutika',
            'email' => 'ikasutika@gmail.com',
            'phone' => '081212317819',
            'address' => 'Alamat Ika',
            'notes' => 'Catatan',
        ]);
        Customer::create([
            'name' => 'Karin Makarin',
            'email' => 'karinmakarin@gmail.com',
            'phone' => '082266779267',
            'address' => 'Alamat Karin',
            'notes' => 'Catatan',
        ]);
        Customer::create([
            'name' => 'Mia Turmia',
            'email' => 'miaturmia@gmail.com',
            'phone' => '0123448890012',
            'address' => 'Alamat 1',
            'notes' => 'Catatan',
        ]);
        Customer::create([
            'name' => 'Anas Sukirman',
            'email' => 'anassukirman@gmail.com',
            'phone' => '08128802347902',
            'address' => 'Alamat Anas',
            'notes' => 'Catatan',
        ]);
        Customer::create([
            'name' => 'Putra Putraan',
            'email' => 'putraputraan@gmail.com',
            'phone' => '08128989090389',
            'address' => 'Alamat Putra',
            'notes' => 'Catatan',
        ]);
        Customer::create([
            'name' => 'Faras Yafaras',
            'email' => 'farasyafaras@gmail.com',
            'phone' => '0812909090212',
            'address' => 'Alamat Faras',
            'notes' => 'Catatan',
        ]);
        Customer::create([
            'name' => 'Ilham Siilham',
            'email' => 'ilhamsiilham@gmail.com',
            'phone' => '0812121334789',
            'address' => 'Alamat Ilham',
            'notes' => 'Catatan',
        ]);
    }
}
