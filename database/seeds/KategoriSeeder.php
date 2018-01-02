<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nama_kategori = [
            'Tas',
            'Dompet',
            'Baju',
            'Lingerie',
            'Sandal/sepatu',
            'Jam Tangan',
            'Ikat Pinggang',
            'Kaca Mata',
            'Aksesoris',
            'Souvenir',
            'Sunday',
            'Kosmetik'
        ];

        foreach ($nama_kategori as $value) {
            DB::table('kategori')->insert([
                'nama_kategori' => $value
            ]);
        }
    }
}
