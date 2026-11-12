<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            [
                'full_name' => 'Ginny Alberto',
                'email' => 'ginny@example.com',
                'phone' => '09170000001',
            ],
            [
                'full_name' => 'Jay Park',
                'email' => 'jay@example.com',
                'phone' => '09170000002',
            ],
            [
                'full_name' => 'Jeo Ong',
                'email' => 'jeo@example.com',
                'phone' => '09170000003',
            ],
            [
                'full_name' => 'Kyla Abad',
                'email' => 'kyla@example.com',
                'phone' => '09170000004',
            ],
            [
                'full_name' => 'Jake Yoon',
                'email' => 'jake@example.com',
                'phone' => '09170000005',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                $customer
            );
        }

        $users = [
            ['username' => 'ashley', 'full_name' => 'Ashley Garcia'],
            ['username' => 'jeorella', 'full_name' => 'Jeorella Gatchalian'],
            ['username' => 'rei', 'full_name' => 'Rei Germar'],
            ['username' => 'lierge', 'full_name' => 'Lierge Perey'],
            ['username' => 'jisoo', 'full_name' => 'Jisoo Kim'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['username' => $user['username']],
                $user
            );
        }
    }
}