<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index () {

        $users = [
            [
                "name" => "Meno1",
                "vek" => "25"
            ],
            [
                "name" => "Meno2",
                "vek" => "19"
            ],
            [
                "name" => "Meno3",
                "vek" => "17"
            ]
        ];
        return view(
            "dashboard",
            [
                "users" => $users
            ]
        );
    }
}