<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah, dan nilai perkuliahan.',
                'teknologi' => 'Laravel & Bootstrap',
                'image' => 'project1.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'E-Commerce SEO Optimization',
                'description' => 'Apliaksi Optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'PHP & Google Serach Console',
                'image' => 'project2.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Reading Cover & Branding',
                'description' => 'Perancangan element grafis personal branding dan design sampul buku rekayasa web',
                'teknologi' => 'Figma & Canva',
                'image' => 'project3.jpg',
                'status' => 'Selesai',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}