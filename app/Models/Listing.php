<?php
namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis maiores pariatur recusandae 
                cupiditate mollitia esse voluptatibus dolorum laborum harum dicta optio, molestiae corporis error incidunt. 
                Nobis repellendus quos voluptatem asperiores!'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis maiores pariatur recusandae 
                cupiditate mollitia esse voluptatibus dolorum laborum harum dicta optio, molestiae corporis error incidunt. 
                Nobis repellendus quos voluptatem asperiores!'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}