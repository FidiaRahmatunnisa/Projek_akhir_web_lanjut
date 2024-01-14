<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('produk')->insert([
        //     'nama_barang'=>'coca',
        //     'harga_barang'=>'Rp10.000'
        // ]);

        $produks = [
            [

                'nama_barang'=>'Bintang zero Radler',
                'harga_barang'=>'Rp12.000',
                'foto_produk'=>'kaleng1.jpeg'
            ],
            [

                'nama_barang'=>'Bintang Zero',
                'harga_barang'=>'RP10.000',
                'foto_produk'=> 'kaleng2.jpg'
            ],
            [

                'nama_barang'=>'Minuman Cincau',
                'harga_barang'=>'Rp8.000',
                'foto_produk'=>'kaleng4.jpg'
            ],
            [

                'nama_barang'=>'Lasegar Rasa Jeruk',
                'harga_barang'=>'Rp7.000',
                'foto_produk'=>'kaleng5.jpg'
            ],
            [

                'nama_barang'=>'Green Sands',
                'harga_barang'=>'Rp7.500',
                'foto_produk'=>'kaleng6.jpg'
            ],
            [

                'nama_barang'=>'Polaris Coffee cream',
                'harga_barang'=>'Rp15.000',
                'foto_produk'=>'kaleng8.jpg'
            ],
            [

                'nama_barang'=>'Ace Orange',
                'harga_barang'=>'Rp9.000',
                'foto_produk'=>'kaleng9.png'
            ]
        ];
        foreach($produks as $produk){
            Produk::create($produk);
        }
    }
}
