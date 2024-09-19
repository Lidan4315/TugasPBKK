<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Faiq Lid',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur itaque incidunt blanditiis! Dolores rem quibusdam fugiat amet ducimus, nemo iste aperiam, voluptates laborum, sequi voluptas obcaecati laboriosam ullam sint harum.'
            ],
    
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Faiq Lidan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo possimus, officiis odio dicta quam ea atque repudiandae vero, sapiente quo ducimus quasi rem veritatis a quas accusantium consequatur molestias nulla.'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(! $post){
            abort(404);
        }

        return $post;
    }
}