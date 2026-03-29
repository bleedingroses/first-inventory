<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'name' => 'PT Sinar Jaya',
            'contact_person' => '0812121334789',
            'email' => 'ilhamsiilham@gmail.com',
            'phone' => '0812121334789',
            'address' => 'Alamat Ilham',
            'notes' => 'Catatan',
        ]);
        Supplier::create([
            'name' => 'UD Jiwa Muda',
            'contact_person' => '0812121334789',
            'email' => 'ilhamsiilham@gmail.com',
            'phone' => '0812121334789',
            'address' => 'Alamat Ilham',
            'notes' => 'Catatan',
        ]);
        Supplier::create([
            'name' => 'CV Sinar Gemilang',
            'contact_person' => '0812121334789',
            'email' => 'ilhamsiilham@gmail.com',
            'phone' => '0812121334789',
            'address' => 'Alamat Ilham',
            'notes' => 'Catatan',
        ]);
    }
}
