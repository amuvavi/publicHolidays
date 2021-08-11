<?php

namespace App\Http\Traits;
use App\Models\Holiday;

use App\Repositories\Contracts\HolidayRepository;

trait HolidayTrait {


   protected $holidays;
    
   public function __construct(HolidayRepository $holidays)
   {
       $this->holidays = $holidays;
   }

   public function index()
   {
       $holidays = $this->holidays->all();

       return  view('welcome', compact('holidays'));
   }


}