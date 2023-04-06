<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User,notifications_setting};
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        $user = User::create([
        	'name' => 'Owner',
        	'email' => 'owner@laundry.com',
        	'status' => 'Active',
          'auth' => 'Owner',
          'password' => bcrypt('owner123456')
        ]);

        // Set role admin
        $role = Role::create(['name' => 'Owner']);
        $user->assignRole('Owner');

        // Set default setting notif
        $notif = notifications_setting::create([
          'user_id'                 => $user->id,
          'telegram_order_masuk'    => 0,
          'telegram_order_selesai'  => 0,
          'email'                   => 0
        ]);
    }
}
