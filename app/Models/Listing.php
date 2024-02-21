<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Listing
{
    public static function get_all() {
        return [
            [
                'id' => 1,
                'title' => 'title one',
                'description' => 'des 1'
            ],
            [
                'id' => 2,
                'title' => 'title two',
                'description' => 'des 2'
            ]
        ];
    }

    public static function find($id) {
        $all_listing =  self::get_all();
        foreach ($all_listing as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
    }
}
