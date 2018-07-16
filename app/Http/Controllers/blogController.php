<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    function pullBlog () {        
        $jsonUrl = 'https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fmedium.com%2Ffeed%2F%40joeywasin';
        $data = json_decode(file_get_contents($jsonUrl));
        $blog = $data->items[0];

        // dd($blog);

        return view('index', compact('blog'));
    }
}
