<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $basePath = base_path();
        $items = scandir($basePath);
        $files = [];
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') continue;
            $files[] = [
                'name' => $item,
                'is_dir' => is_dir($basePath . DIRECTORY_SEPARATOR . $item),
            ];
        }
        return view('dashboard', ['files' => $files]);
    }
}
