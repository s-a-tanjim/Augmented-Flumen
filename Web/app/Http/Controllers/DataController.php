<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class DataController extends Controller
{
  
  public function storeData(Request $request)
  {
    $data = new UserData;
    $data->name = $request->formData['name'];
    $data->location = $request->formData['location'];
    $data->email = $request->formData['email'];
    $data->save();
    return $request->all();
  }
}
