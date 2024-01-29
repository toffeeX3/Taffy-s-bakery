<?php


use App\Models\Ad;
use App\Models\Pics;
use App\Models\Reviews;
use App\Models\Packages;
use App\Models\Products;
use App\Models\Settings;

function get_Settings_value($key)
{
    $data = Settings::where ('key' ,$key) -> first();
    if(isset($data->value)) {
        return $data->value;
    } else {
        return 'empty';
    }
}
function get_Packages($key)
{
    $data = Packages::all();
    return $data;
}
function get_Products($key)
{
    $data = Products::all();
    return $data;
}

function get_Ad()
{
    $data = Ad::all();
    return $data;
}

function get_Review($key)
{
    $data = Reviews::all();
    return $data;
}

