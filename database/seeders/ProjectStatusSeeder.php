<?php

namespace Database\Seeders;

use App\Models\ProjectStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectStatusSeeder extends Seeder
{
    private array $data = [
        [
            'name' => 'Active',
            'color' => '#008000',
            'is_default' => true,
        ],
        [
            'name' => 'Inactive',
            'color' => '#ff0000',
            'is_default' => false,
        ],
        [
            'name' => 'Hold',
            'color' => '#cecece',
            'is_default' => false,
        ],
        [
            'name' => 'Archived',
            'color' => '#ff7f00',
            'is_default' => false,
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $item) {
            ProjectStatus::firstOrCreate($item);
        }
    }
}
