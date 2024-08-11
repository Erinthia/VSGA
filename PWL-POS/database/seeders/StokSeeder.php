<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'stok_id' => 1,
            'barang_id' => 1,
            'username' => 'admin',
            'nama' => 'Administrator',
            'password' => Hash::make('12345')
        ],
        
            
        ];
        DB::table('m_user')->insert($data);
    }
    }
}
// $table->id('stok_id');
// $table->unsignedBigInteger('barang_id')->index();
// $table->unsignedBigInteger('user_id')->index();
// $table->dateTime('stok_tanggal');
// $table->integer('stok_jumlah');
// $table->timestamps();

// $table->foreign('barang_id')->references('barang_id')->on('m_barang');
// $table->foreign('user_id')->references('user_id')->on('m_user');
// });