<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Holiday;
use App\Jobs\LoadHolidayDataJob;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;

class LoadHolidayData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:load_holiday_data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Load South African Holiday Data from the Holidays Api';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $query_string = 'https://kayaposoft.com/enrico/json/v2.0/?action=getHolidaysForYear&year=2022&country=zaf&holidayType=public_holiday';
        $request = Http::get($query_string);

        if ($request->status() !== 200) {
            return null;
        }
        
        $response = $request->getBody()->getContents();
        $arr = json_decode($response, true);

        foreach($arr as $data){
        $date = $data['date']; 
        $day = $date['day'];
        $month = $date['month'];
        $year = $date['year'];
        
        $final_date = Carbon::createFromDate($year, $month, $day)->format('y-m-d');
                
        $name = $data['name'][0]['text'];
        $holidayType = $data['holidayType'];
        
        Holiday::firstOrCreate([
        'name' => $name,
        'date' => $final_date,
        'holidayType' => $holidayType,

    
       ]);
     
    
    }

    $this->info('All done!');
}
}
