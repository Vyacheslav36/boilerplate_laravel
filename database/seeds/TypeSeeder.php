<?php

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
          [
            'name' => 'Труба'
          ],
          [
            'name' => 'Ключ'
          ]
        ];

        foreach ($types as $type) {
            Type::create(array('name' => $type['name']));
        }

    }
}
