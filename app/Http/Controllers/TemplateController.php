<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('frontend.home');
    }


    public function thankyou(){
        $name = request('name');
        $age = request('age') ?? request('agelb');
        $gender = request('gender') ?? 1;
        $weight = request('weightkg') ?? (request('weightlbs')/2.2046);
        $heightft = request('heightft');
        $heightinch = request('heightinch');
        $secondheight = $heightft + ($heightinch/12);
        error_log(request('weightlbs'));
        error_log($heightft);
        error_log($heightinch);
        error_log($secondheight);
        $height = request('heightcm') ?? ($secondheight*30.48);
        $bmi = ($weight/($height*$height))*10000;
        //$bodyfat = (-44.988) + (0.503 * $age) + (10.689 * $gender) + (3.172 * $bmi) - (0.026 * ($bmi*$bmi)) + (0.181 * $bmi * $gender) - (0.02 * $bmi * $age) - (0.005 * $bmi*$bmi * $gender) + (0.00021 * $bmi*$bmi * $age);
        $bodyfat = 1.20 * $bmi + 0.23 * $age - 16.2 ; 
        $multiplier;
        
        switch ($bodyfat) {
            case ($bodyfat>=10 && $bodyfat<=14):
                $multiplier = 1;
                break;
            
            case ($bodyfat>=15 && $bodyfat<=20):
                $multiplier = 0.95;
                break;

            case ($bodyfat>=21 && $bodyfat<=28):
                $multiplier = 0.9;
                break;

            case ($bodyfat>28):
                $multiplier = 0.85;
                error_log("greater than 28");
                break;

            default:
                $multiplier = 1;
                break;
        }
        $calories= $weight * $gender * 24 * $multiplier *1.65;
        error_log($bodyfat);
        error_log($bmi);
        error_log($gender);
        
        return view('frontend.thankyou')->with('calories',"$calories");
    }
}
