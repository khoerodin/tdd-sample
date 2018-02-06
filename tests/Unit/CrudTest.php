<?php

namespace Tests\Unit;

use App\Mahasiswa;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CrudTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        // input data baru
        $mahasiswa = Mahasiswa::create(["nama_mahasiswa" => "Afif","no_tlp" => "081222498686"]);
        
        // cek apakah data tersebut masuk
        $this->assertDatabaseHas('mahasiswa', [
            'nama_mahasiswa' => 'Afif','no_tlp' => "081222498686"
        ]);
        
        // update data
        Mahasiswa::find($mahasiswa->id)->update(["nama_mahasiswa" => "maulana","no_tlp" =>"081222498585"]);
        
        // cek apakah data berhasih diupdate
        $this->assertDatabaseHas('mahasiswa', [
            'nama_mahasiswa' => 'maulana','no_tlp' => "081222498585"
        ]);
        
        // hapus data
        Mahasiswa::destroy($mahasiswa->id);

        // cek apakah data berhasil dihapus
        $this->assertDatabaseMissing('mahasiswa', [
            'nama_mahasiswa' => 'maulana','no_tlp' => "081222498585"
        ]);
    }
}
