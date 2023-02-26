<?php

namespace App\Http\Controllers;

class FileController extends Controller
{
    static string $CV_FOLDER = "resources/pdf/";

    public function downloadCV()
    {
        if(session()->has('locale') && session('locale') == "fr"){
            $file_name = "CV - Francais.pdf";
        }
        else{
            $file_name = "CV - English.pdf";
        }

        return redirect(FileController::$CV_FOLDER.$file_name);
    }
}
