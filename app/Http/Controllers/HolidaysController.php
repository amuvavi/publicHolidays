<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;
use App\Http\Traits\HolidayTrait;
use PDF;

class HolidaysController extends Controller
{
    use HolidayTrait;
    
    public function createPDF() {

        $holidays = $this->holidays->all();
    
        view()->share('holidays', $holidays);
        $pdf = PDF::loadView('welcome',  $holidays);
    
        return $pdf->download('pdf_file.pdf');
    }
      
}
