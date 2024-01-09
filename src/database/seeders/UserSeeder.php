<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 保護者ユーザー１
        User::create([
            'name' => 'Test1',
            'email' => 'Test1@example.com',
            'password' => Hash::make('Test1Test1'),
            'fullname' => '保護者１母',
            'fullname_huri' => 'ほごしゃ１はは',
            'role' => '1',
        ]);

        // 役所ユーザー１
        User::create([
            'name' => 'Test2',
            'email' => 'Test2@example.com',
            'password' => Hash::make('Test2Test2'),
            'fullname' => '役所１',
            'fullname_huri' => 'やくしょ１',
            'role' => '2',
        ]);

        // 支援者ユーザー１
        User::create([
            'name' => 'Test3',
            'email' => 'Test3@example.com',
            'password' => Hash::make('Test3Test3'),
            'fullname' => '支援者１医師',
            'fullname_huri' => 'しえんしゃ１いし',
            'role' => '3',
        ]);

        // 保護者ユーザー２
        User::create([
            'name' => 'Test4',
            'email' => 'Test4@example.com',
            'password' => Hash::make('Test4Test4'),
            'fullname' => '保護者２母',
            'fullname_huri' => 'ほごしゃ２はは',
            'role' => '1',
        ]);

        // 役所ユーザー２
        User::create([
            'name' => 'Test5',
            'email' => 'Test5@example.com',
            'password' => Hash::make('Test5Test5'),
            'fullname' => '役所２',
            'fullname_huri' => 'やくしょ２',
            'role' => '2',
        ]);

        // 支援者ユーザー２
        User::create([
            'name' => 'Test6',
            'email' => 'Test6@example.com',
            'password' => Hash::make('Test6Test6'),
            'fullname' => '支援者２歯科医師',
            'fullname_huri' => 'しえんしゃ２しかいし',
            'role' => '3',
        ]);


        // 保護者ユーザー３
        User::create([
            'name' => 'Test7',
            'email' => 'Test7@example.com',
            'password' => Hash::make('Test7Test7'),
            'fullname' => '保護者３母',
            'fullname_huri' => 'ほごしゃ３はは',
            'role' => '1',
        ]);

        // 役所ユーザー３
        User::create([
            'name' => 'Test8',
            'email' => 'Test8@example.com',
            'password' => Hash::make('Test8Test8'),
            'fullname' => '役所３',
            'fullname_huri' => 'やくしょ３',
            'role' => '2',
        ]);

        // 支援者ユーザー３
        User::create([
            'name' => 'Test9',
            'email' => 'Test9@example.com',
            'password' => Hash::make('Test9Test9'),
            'fullname' => '支援者３助産師',
            'fullname_huri' => 'しえんしゃ３じょさんし',
            'role' => '3',
        ]);
    }
}
