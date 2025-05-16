<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    public function index() {
        $user = "ashley.magcamit";
        $password =  "admin12345678910";

        Log::info('BlogController index =====> START');
        Log::debug('BlogController index =====> START' .  'user: ' . $user . ' ' .  'password: ' . $password);
        Log::notice('BlogController index =====> START');
        Log::warning('BlogController index =====> START');
        Log::error('BlogController index =====> START');
        Log::critical('BlogController index =====> START');
        Log::alert('BlogController index =====> START');
        Log::emergency('BlogController index =====> START');
        Log::info('BlogController index =====> END');

        return view('admin.adminProfile');
    }

    public function retrieveBlogs() {

        // $blogs = ['Sample1', 'Sample2', 'Sample3'];
        $blogs = [
            [
                'title' => 'Title 1',
                'body' => 'Body 1',
                'status' => '1'
            ],
            [
                'title' => 'Title 2',
                'body' => 'Body 2',
                'status' => '0'
            ],
            [
                'title' => 'Title 3',
                'body' => 'Body 3',
                'status' => '1'
            ],
            [
                'title' => 'Title 4',
                'body' => 'Body 4',
                'status' => '0'
            ],
            [
                'title' => 'Title 5',
                'body' => 'Body 5',
                'status' => '1'
            ],
            [
                'title' => 'Title 6',
                'body' => 'Body 6',
                'status' => '0'
            ],
        ];
        return view('Templates.blogs', compact('blogs'));
    }
}

