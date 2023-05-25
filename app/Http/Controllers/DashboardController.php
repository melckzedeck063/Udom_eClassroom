<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
            return  inertia(
                'Index/Dashboard',
                [
                    "message" => "Hello cive classrom"
                ]
            );
    }

    public function course(){
        return  inertia(
            'Index/Course',
            [
                "message" => "Hello cive classrom"
            ]
        );
}


}
