<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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

		$post = new Post(
			[
				'content' => 'Lorem ipsum',
				'likes' => 100
			]
		);
		// $post->save();

        return view(
            "dashboard",
            [
                "users" => $users,
				"posts" => Post::orderBy('likes', 'DESC')->get(),
            ]
        );
    }
}