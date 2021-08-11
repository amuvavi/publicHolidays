<?php

namespace Tests\Unit;
use App\Console\Commands\LoadHolidayData;
use Illuminate\Support\Testing\Fakes\QueueFake;
use PHPUnit\Framework\TestCase;
use Tests\Unit\Artisan;

class HolidayTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_command_job_passes()
    {
       
        $this->artisan(LoadHolidayData::class);


        $this->assertTrue('All done!');
    }
}
