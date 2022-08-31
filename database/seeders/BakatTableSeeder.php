<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BakatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bakats')->insert([
            [
                'bakat' => 'Linguistik',
                'profesi' => 'Penulis, Wartawan, Penyair, Pengacara, pembicara, Politikus',
                'created_at' => new \DateTime,
                'updated_at' => null
            ],
            [
                'bakat' => 'Logika-Matematika',
                'profesi' => 'Akuntan, Dosen/Guru, Matematika, Teknisi, Programmer',
                'created_at' => new \DateTime,
                'updated_at' => null
            ],
            [
                'bakat' => 'Visual-Spasial',
                'profesi' => 'Pelukis, Design, Navigator, Arsitek',
                'created_at' => new \DateTime,
                'updated_at' => null
            ],
            [
                'bakat' => 'Kinestetik',
                'profesi' => 'Aktor/Aktris, Model, Atlet, Penari',
                'created_at' => new \DateTime,
                'updated_at' => null
            ],
            [
                'bakat' => 'Musikal',
                'profesi' => 'Musisi, Seniman, Penyanyi, Budayawan',
                'created_at' => new \DateTime,
                'updated_at' => null
            ],
            [
                'bakat' => 'Interpersonal',
                'profesi' => 'Sosiologi, Public Relation, Pengusaha, Pemuka Agama, Pramuniaga, Para Pendidik',
                'created_at' => new \DateTime,
                'updated_at' => null
            ],
            [
                'bakat' => 'Intrapersonal',
                'profesi' => 'Psikolog, Konselor, Trainer, Motivator',
                'created_at' => new \DateTime,
                'updated_at' => null
            ],
            [
                'bakat' => 'Naturalis',
                'profesi' => 'Antropolog, Arkeolog, Meteorolog, Neorolog',
                'created_at' => new \DateTime,
                'updated_at' => null
            ],
            [
                'bakat' => 'Eksistensial',
                'profesi' => 'Teolog, Filsuf',
                'created_at' => new \DateTime,
                'updated_at' => null
            ],
        ]);
    }
}