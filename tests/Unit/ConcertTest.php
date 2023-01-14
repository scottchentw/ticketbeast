<?php

namespace Tests\Unit;

use Carbon\Carbon;
use App\Models\Concert;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ConcertTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_get_formatted_date()
    {
        // Create a concert with a known date
        $concert = Concert::factory()->create([
            'date' => Carbon::parse('2016-12-01 8:00pm'),
        ]);

        // Retrieve the formatted date
        $date = $concert->formatted_date;

        // Verify the date is formatted as expected
        $this->assertEquals('December 1, 2016', $date);
    }
}
