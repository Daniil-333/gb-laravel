<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getNews(?int $id = null): array
    {
        $faker = Factory::create();
        $data = [];

        if($id)
        {
            return [
                'id' => $id,
                'title' => $faker->jobTitle(),
                'description' => "<strong>" . $faker->text(100) . "</strong>",
                'author' => $faker->userName(),
                'created_at' => now('Asia/Yekaterinburg'),
            ];
        }

        for ($i = 1; $i <= 10; $i++)
        {
            $data[] = [
                'id' => $i,
                'title' => $faker->jobTitle(),
                'description' => $faker->text(100),
                'author' => $faker->userName(),
                'created_at' => now('Asia/Yekaterinburg'),
            ];
        }
        return $data;
    }
    public function getCategories(?int $id = null): array
    {
        $faker = Factory::create();
        $data =[];

        if($id)
        {
            return [
                'id' => $id,
                'title' => $faker->jobTitle(),
                'description' => $faker->text(100),
                'author' => $faker->userName(),
                'created_at' => now('Asia/Yekaterinburg'),
            ];
        }

        for ($i = 1; $i <= 5; $i++)
        {
            $data[] = [
                'id' => $i,
                'title' => $faker->jobTitle(),
                'created_at' => now('Asia/Yekaterinburg'),
            ];
        }
        return $data;
    }
}

