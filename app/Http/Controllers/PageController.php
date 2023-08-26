<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{


    public function getUsers()
    {
        return  [
            1 => [
                "name" => "Abdul Rehman",
                "Role" => "web developer",
                "City" => "RawalPindi"
            ],
            2 => [
                "name" => "haider",
                "Role" => "web developer",
                "City" => "RawalPindi"
            ]
        ];
    }
    public function showUsers()
    {

        $array = $this->getUsers();

        return view("test", [
            "users" => $array
        ]);
    }
    public function showUser($id)
    {
        $users = $this->getUsers();
        abort_if(!isset($users[$id]), 404);
        $user = $users[$id];
        return view("singleUser", [
            "user" => $user
        ]);
    }




    public function show()
    {
        return view("home");
    }
    public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view("contact");
    }
    public function error()
    {
        return view("404");
    }
    public function pList()
    {
        return view("property-list");
    }
    public function pType()
    {
        return view("property-type");
    }
    public function testimonial()
    {
        return view("testimonial");
    }
}
