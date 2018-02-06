<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\PerhitunganController;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PerhitunganTest extends TestCase
{
    /**
     * A basic test penjumlahan.
     *
     * @return void
     */
    public function testPenjumlahan()
    {
        $perhitungan = new PerhitunganController();
        $hasil_penjumlahan = $perhitungan->penjumlahan(2,2);
        $this->assertEquals(4, $hasil_penjumlahan);
    }
}
