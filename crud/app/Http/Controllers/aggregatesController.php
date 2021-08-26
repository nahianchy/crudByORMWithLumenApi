<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DetailsModel;


class aggregatesController extends Controller
{
    //


    function count()
    {
        $result = DetailsModel::count();

        return $result;
    }

    function min()
    {
        $result = DetailsModel::min('roll');
        return $result;
    }

    function max()
    {
        $result = DetailsModel::max('roll');
        return $result;
    }

    function avg()
    {
        $result = DetailsModel::avg('roll');
        return $result;
    }
    function sum()
    {
        $result = DetailsModel::sum('roll');
        return $result;
    }
}
