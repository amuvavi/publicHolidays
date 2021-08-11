<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;
use App\Http\Traits\HolidayTrait;
use PDF;

class HolidaysController extends Controller
{
    use HolidayTrait;
}
