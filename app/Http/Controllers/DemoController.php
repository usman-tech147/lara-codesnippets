<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DemoController extends Controller
{


    public function registrationForm()
    {
        return view('registration_form');
    }

    public function submitFormData(Request $request)
    {

        $rules =
            array(
                'first_name' => 'required|string|max:20',
                'last_name' => 'required|string|max:20',
                'email' => 'required|string|email',
                'password' => 'required|min:3|confirmed',
                'security_question' => 'required|not_in:default',
                'secrete_answer' => 'required',
            );

        $error = Validator::make($request->all(), $rules);
        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()]);
        }

        return response()->json(['success' => 'Registration done successfully']);

    }


//    public function searchApartments()
//    {
//        $data = ['lhr','kr','pes','ed', 'lh','karachi', 'eden'];
//        return response()->json(['data' => $data]);
//    }

    public function searchApartments(Request $request)
    {

        $data = array('lhr', 'kr', 'pes', 'ed', 'lh', 'karachi', 'eden');
//        $searchword = $request->get('query');
//        $matches = array_filter($data,
//            function ($var) use ($searchword) {
//                return preg_match("/\b$searchword\b/i", $var);
//            });


        $output = '<ul class="dropdown-menu">';
        foreach ($data as $row) {
            $output .= '<li><a href="#">' . $row . '</a></li>';
        }
        $output .= '</ul>';

        return response()->json(['data' => $output]);

//        return $matches;
    }


}
