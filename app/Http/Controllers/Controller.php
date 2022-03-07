<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getJson()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/1') ;
        $response->json('comments');
        echo '<pre>';
        return $response;
    }



    public function  getCategories( ):array
    {
        return ["space","animals","sport","nature","finance","life"];
    }

    public function getNews(?int $id= null): array
    {
        $faker = Factory::create();

        $data = [];
        $statusList = ["DRAFT", "ACTIVE", "BLOCKED"];
        $categoryNews = $this->getCategories();
        if($id){

            return [
                'id'     => $id,
                'category'=>$categoryNews[(mt_rand(0,5))],
                'title'  => $faker->jobTitle(),
                'author' => $faker->userName(),
                'image'  => $faker->imageUrl(250,170),
                'status' => $statusList[mt_rand(0,2)],
                'description'=>$faker->text(100)
            ];
        }
        for ($i=0; $i<10; $i++){
            $data[] = [
                'id'     => $i+1,
                'category'=>$categoryNews[(mt_rand(0,5))],
                'title'  => $faker->jobTitle(),
                'author' => $faker->userName(),
                'image'  => $faker->imageUrl(250,170),
                'status' => $statusList[mt_rand(0,2)],
                'description'=>$faker->text(100)
            ];
        }

        return $data;
    }

    public function getCategoryId(string $cat):array
    {
        $data = [];
        $categories = $this->getNews();

        foreach ($categories as $category){
            if($cat == $category['category']){
//                dd( $cat);
                $data[] = [
                    'id'     => $category['id'],
                    'category'=>$category['category'],
                    'title'  => $category['title'],
                    'author' => $category['author'],
                    'image'  => $category['image'],
                    'status' => $category['status'],
                    'description'=>$category['description'],
                ];
            }

        }
//dd($data);
        return $data;
    }

}
