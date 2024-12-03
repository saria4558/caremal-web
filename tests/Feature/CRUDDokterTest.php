<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Caremal;

use App\Models\Shelter;
use App\Models\User;
use Database\Seeders\tb_dokter;

class CRUDDokterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_admin_masuk_tanpa_login()
    {
        $response = $this->get('/admin/daftardoktor');

        $response->assertStatus(302);
        $response->assertRedirect(route('login')); 
    }

    public function test_admin_melihat_daftar_dokter_setelah_login()
    {
       $user = User::factory()->create();
       $response = $this->actingAs($user)->get('/admin/daftardoktor'); 
       $response->assertStatus(200);
       $response->assertSee("DAFTAR DOKTOR");
    }

    public function test_admin_mendaftarkan_dokter() 
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('insert'), [
            'dokter_nama' => "dokter Apple",
            'dokter_JK' => "Perempuan",
            'dokter_Ttl' => "SBY, 2 Juli 2000",
            'dokter_NIK' => "34456762701",
            'telepon' => "08167892701",
            'alamat'=>"Surabaya",
            'email' => "dokterapple@gmail.com",
            'username' => "dokterapple",
            'password' => "1234567890"
        ]);
        $this->assertDatabaseHas('tb_dokter', [
            'dokter_nama' => "dokter Apple",
        ] );
        $response->assertStatus(302);
        $response->assertRedirect(route('daftardokter'));
    }

    public function test_admin_mendaftarkan_dokter_tanpa_email()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('insert'), [
            'dokter_nama' => "dokter dafa",
            'dokter_JK' => "Laki laki",
            'dokter_Ttl' => "BWI, 25 Juni 1996",
            'dokter_NIK' => "34456761207",
            'telepon' => "08167898907",
            'alamat' => "banyuwangi",
            'username' => "dokterdf1234",
            'password' => "1234567890"
        ]);

        
        $response->assertSessionHasErrors(['email']);
        $response->assertStatus(302);
    }

    // public function test_admin_menghapus_dokter() 
    // {
    //     $dokter = Caremal::find(17);
    //     $user = User::factory()->create();
    //     $dokter=Caremal::factory()->create();
    //     $response = $this->actingAs($user)->delete('deletedata',$dokter->id);
    //     $this->assertDatabaseMissing('tb_dokter',[
    //         'id' => $dokter->id,
    //     ]);
    //     $response->assertStatus(302);
    //     $response->assertRedirect(route('daftardokter'));
    // }

    
    
}
