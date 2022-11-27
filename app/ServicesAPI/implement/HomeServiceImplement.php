<?php

namespace App\ServicesAPI\implement;

use App\Models\User;
use App\ServicesAPI\HomeServices;

class HomeServiceImplement implements HomeServices
{

    public function getAll()
    {
        $users = User::all();

       return $users;
    }
}
