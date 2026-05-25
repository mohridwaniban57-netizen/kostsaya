<?php

namespace App\Controllers;

class Favorit extends BaseController
{
    public function index()
    {
        return view('favorit/favorit');
    }

    public function detail($id)
    {
        $data = [];

        // DATA MANUAL SEMENTARA

        $kost = [

            1 => [
                'nama' => 'Kost Menteng Residence',
                'lokasi' => 'Jakarta Pusat',
                'harga' => 'Rp 2.500.000 / bulan',
                'fasilitas' => 'AC, WiFi, Parkir'
            ],

            2 => [
                'nama' => 'Wisma Asri Baru',
                'lokasi' => 'Surabaya Selatan',
                'harga' => 'Rp 1.150.000 / bulan',
                'fasilitas' => 'Putri, Dekat Kampus'
            ],

            3 => [
                'nama' => 'Wisma Pusat',
                'lokasi' => 'Bandung',
                'harga' => 'Rp 3.200.000 / bulan',
                'fasilitas' => 'Parkir, AC'
            ],

            4 => [
                'nama' => 'Kost Mawar Indah',
                'lokasi' => 'Malang',
                'harga' => 'Rp 1.800.000 / bulan',
                'fasilitas' => 'AC, WiFi'
            ],

            5 => [
                'nama' => 'Kost Lavender',
                'lokasi' => 'Yogyakarta',
                'harga' => 'Rp 2.100.000 / bulan',
                'fasilitas' => 'WiFi, Laundry'
            ],
             6 => [
                'nama' => 'Elite House',
                'lokasi' => 'Surabaya Barat',
                'harga' => 'Rp 2.700.000 / bulan',
                'fasilitas' => 'AC, Smart TV'
            ],
             7 => [
                'nama' => 'Kost Harmoni',
                'lokasi' => 'Semarang',
                'harga' => 'Rp 1.450.000 / bulan',
                'fasilitas' => 'WiFi, Parkir'
            ],
             8 => [
                'nama' => ' Grand Kost Premium',
                'lokasi' => 'Jakarta Selatan',
                'harga' => 'Rp 3.900.000 / bulan',
                'fasilitas' => 'Gym , AC, WiFi'
            ],
             9 => [
                'nama' => 'Kost Putri Amanah',
                'lokasi' => 'Malang',
                'harga' => 'Rp 1.700.000 / bulan',
                'fasilitas' => 'Putri,CCTV'
            ],
             10 => [
                'nama' => 'Residence 88',
                'lokasi' => 'Bandung',
                'harga' => 'Rp 2.600.000 / bulan',
                'fasilitas' => 'AC, WiFi, Laundry'
            ],

        ];

        $data['kost'] = $kost[$id];

        return view('favorit/detail', $data);
    }
}