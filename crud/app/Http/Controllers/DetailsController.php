<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DetailsModel;


class DetailsController extends Controller
{
    //
    function selectAll()
    {
        $result = DetailsModel::all();
        return $result;
    }

    function selectById(Request $request)
    {
        $id = $request->input('id');
        $result = DetailsModel::where('id', $id)->get();
        return $result;
    }

    function insert(Request $request)
    {
        $name = $request->input('name');
        $roll = $request->input('roll');
        $city = $request->input('city');
        $phone = $request->input('phone');
        $class = $request->input('class');

        $result = DetailsModel::insert([
            'name' => $name,
            'roll' => $roll,
            'city' => $city,
            'phone' => $phone,
            'class' => $class
        ]);


        if ($result == 1) {
            return "data inserted";
        } else {
            return "data not inserted";
        }
    }

    function delete(Request $request)
    {
        $id = $request->input('id');

        $result = DetailsModel::where('id', $id)->delete();


        if ($result == 1) {
            return "data deleted";
        } else {
            return "data not deleted";
        }
    }

    function update(Request $request)
    {

        $id = $request->input('id');
        $name = $request->input('name');
        $roll = $request->input('roll');
        $city = $request->input('city');
        $phone = $request->input('phone');
        $class = $request->input('class');

        $result = DetailsModel::where('id', $id)->update([
            'name' => $name,
            'roll' => $roll,
            'city' => $city,
            'phone' => $phone,
            'class' => $class
        ]);


        if ($result == 1) {
            return "data updated";
        } else {
            return "data not updated";
        }
    }
}
