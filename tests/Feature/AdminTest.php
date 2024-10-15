<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Caremal;
use App\Models\Shelter;
use App\Models\User;
use Database\Seeders\tb_dokter;

class AdminTest extends TestCase
{
   
    public function test_melihat_homepage(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_akses_artikel_tanpa_login(){
        $response = $this->get('/artikel');
        $response->assertStatus(200);
    }
    
    public function test_admin_melihat_data_shelter_setelah_login(){
        $user = User::find(1); // asumsikan User dengan ID 1 adalah admin
        $this->actingAs($user);
        
        $response = $this->get('/admin/daftarkontak');
        $response->assertStatus(200);
    }
    
    public function test_admin_melihat_data_tanpa_login(){
        $response = $this->get('/admin/daftarkontak');
        $response->assertRedirect(route('login'));
        $response->assertStatus(302);
    }
    public function test_admin_mendaftarkan_dokter(){
        $user = User::find(1); // asumsikan admin
        $this->actingAs($user);
    
        $response = $this->post(route('insert'), [
            'dokter_nama' => "dokter C",
            'dokter_JK' => "Laki laki",
            'dokter_Ttl' => "BWI, 30 Juni 1990",
            'dokter_NIK' => "34456765789",
            'telepon' => "08537234521",
            'alamat'=>"banyuwangi",
            'email' => "dokterc@gmail.com",
            'username' => "doktera1234",
            'password' => "1234567890",
        ]);
       $response->assertStatus(302);
       $response->assertRedirect(route('daftardokter'));
       
    }
    
    // public function test_hapus_dokter(){
    //     $user = User::factory()->create(); // Membuat user
    //     $dokter = Caremal::factory()->create(); // Membuat data dokter menggunakan factory
    
    //     // Menghapus dokter dengan method DELETE
    //     $response = $this->actingAs($user)->delete(route('dokter.destroy', $dokter->id));
    
    //     // Memastikan dokter sudah tidak ada di database
    //     $this->assertDatabaseMissing('tb_dokter', [
    //         'id' => $dokter->id, // Menggunakan nilai variabel
    //     ]);
    
    //     // Memastikan redirect ke halaman daftar dokter
    //     $response->assertRedirect(route('daftardokter'));
    // }
    
    
}
