<?php

namespace App\Http\Controllers;

use App\CarBrand;
use App\City;
use App\Color;
use App\Condition;
use App\Country;
use App\Currency;
use App\DeviceBrand;
use App\DeviceProcessor;
use App\Unit;

class ConstantController extends Controller
{
    //
    public function index()
    {
        $currencies = Currency::all();
        $units = Unit::all();
        $deviceBrands = DeviceBrand::all();
        $deviceProcessors = DeviceProcessor::all();
        $carBrands = CarBrand::all();
        $colors = Color::all();
        $conditions = Condition::all();
        $cities = City::all();
        $countries = Country::whereIn('name', ['Afghanistan', 'Sweden', 'Iran'])->get();

        return [
            'currencies' => $currencies,
            'units' => $units,
            'deviceBrands' => $deviceBrands,
            'deviceProcessors' => $deviceProcessors,
            'carBrands' => $carBrands,
            'colors' => $colors,
            'conditions' => $conditions,
            'cities' => $cities,
            'countries' => $countries
        ];
    }
}
