<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function pdfFile()
    {
        $pdf = PDF::loadView('userpdf',["data" => "this is data"]);
        return $pdf->download('userpdf.pdf');
//        $pdf = App::make('dompdf.wrapper');
//        $pdf->loadHTML('<div class="row bg-success">
//        <div class="col-md-5">
//            <p> this is pdf file </p>
//        </div>
//    </div>');
//        return $pdf->stream();
    }
}
