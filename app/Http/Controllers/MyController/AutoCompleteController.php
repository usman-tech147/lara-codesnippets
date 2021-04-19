<?php

namespace App\Http\Controllers\MyController;

use App\Http\Controllers\Controller;
use App\Models\M_Portfolio;
use App\Models\M_Postal_Code;
use App\Models\M_Prefecture;
use App\Models\M_Property;
use App\Models\M_Regional_Office;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutoCompleteController extends Controller
{
    public function index()
    {

        $data = M_Postal_Code::find(2)->regional_offices;
        dd($data);

        return view('welcome');
    }

    function fetch(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = DB::table('countries')
                ->where('name', 'LIKE', "%{$query}%")
                ->get(['id','name']);
            return $data;
        }

//        return response()->json(['data' => $request->get('query')]);
    }
}
