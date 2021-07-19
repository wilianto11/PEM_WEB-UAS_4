<?php 
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AntrianModel;
 
class Antrian extends Controller
{
 
    public function __construct() {
 
        // Mendeklarasikan class ProductModel menggunakan $this->antrian
        $this->antrian = new AntrianModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }
 
    public function index()
    {
       return view('antrian/index');
    } 
   	

	public function edite()
    {
  		 $data['antrian'] = $this->antrian->getAntrian();
        echo view('antrian/edit2', $data);
		
	}
    


    public function cs()
    {
    // Mengambil value dari form dengan method POST

    	$oke =  date('y-m-d H:i:s'); 
 
    // Membuat array collection yang disiapkan untuk insert ke tablehttps://codeigniter.com/user_guide/database/index.html
   $data = [
        'tanggal_antrian' =>  $oke,
        'status_antrian' => 'mengantri',
        'antrian_waktu_panggil' => null,
        'antrian_waktu_selesai' => null,
        'id_antrian_pelayanan' => '4',
        'id_antrian_loket' => '1'
    ];

     $dataaa = [
        'tanggal_antrian' =>  $oke,
        'status_antrian' => 'berlansung',
        'antrian_waktu_panggil' => null,
        'antrian_waktu_selesai' => null,
        'id_antrian_pelayanan' => '4',
        'id_antrian_loket' => '1'
    ];
    $dataa['antrianstatus'] = $this->antrian->getAntrianstatus('4');
    if ($dataa['antrianstatus'] != null ) {
        $simpan = $this->antrian->insert_antrian($data);
     } else {
        $simpan = $this->antrian->insert_antrian($dataaa);

     }

    

 
    // Jika simpan berhasil, maka ...
    if($simpan)
    {
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Anda telah melakukan pengambilan no antrian, no antrian anda adalah $last_id');
        $data['antrian'] = $this->antrian->getAntrian();
        echo view('antrian/antrian', $data);
        
        
    }
    } 


    public function pg()
    {
    // Mengambil value dari form dengan method POST
    	
    	$oke =  date('y-m-d H:i:s'); 
 
    // Membuat array collection yang disiapkan untuk insert ke table
   $data = [
        'tanggal_antrian' =>  $oke,
        'status_antrian' => 'mengantri',
        'antrian_waktu_panggil' => null,
        'antrian_waktu_selesai' => null,
        'id_antrian_pelayanan' => '5',
        'id_antrian_loket' => '2'
    ];

     $dataaa = [
        'tanggal_antrian' =>  $oke,
        'status_antrian' => 'berlansung',
        'antrian_waktu_panggil' => null,
        'antrian_waktu_selesai' => null,
        'id_antrian_pelayanan' => '5',
        'id_antrian_loket' => '2'
    ];
 
 
    $dataa['antrianstatus'] = $this->antrian->getAntrianstatus('5');
    if ($dataa['antrianstatus'] != null ) {
        $simpan = $this->antrian->insert_antrian($data);
     } else {
        $simpan = $this->antrian->insert_antrian($dataaa);

     }

 
    // Jika simpan berhasil, maka ...
    if($simpan)
    {
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Anda telah melakukan pengambilan no antrian, no antrian anda adalah $last_id');
        $data['antrian'] = $this->antrian->getAntrian();
        echo view('antrian/antrian', $data);
    }
    } 


    public function pb()
    {
    // Mengambil value dari form dengan method POST
    	
    	$oke =  date('y-m-d H:i:s'); 
 
    // Membuat array collection yang disiapkan untuk insert ke table
   $data = [
        'tanggal_antrian' =>  $oke,
        'status_antrian' => 'mengantri',
        'antrian_waktu_panggil' => null,
        'antrian_waktu_selesai' => null,
        'id_antrian_pelayanan' => '6',
        'id_antrian_loket' => '3'
    ];

      $dataaa = [
        'tanggal_antrian' =>  $oke,
        'status_antrian' => 'berlansung',
        'antrian_waktu_panggil' => null,
        'antrian_waktu_selesai' => null,
        'id_antrian_pelayanan' => '6',
        'id_antrian_loket' => '3'
    ];
 
 

    $dataa['antrianstatus'] = $this->antrian->getAntrianstatus('6');
    if ($dataa['antrianstatus'] != null ) {
        $simpan = $this->antrian->insert_antrian($data);
     } else {
        $simpan = $this->antrian->insert_antrian($dataaa);

     }
 
    // Jika simpan berhasil, maka ...
    if($simpan)
    {
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Anda telah melakukan pengambilan no antrian, no antrian anda adalah $last_id');
        $data['antrian'] = $this->antrian->getAntrian();
        echo view('antrian/antrian', $data);
    }
    } 


    public function png()
    {
    // Mengambil value dari form dengan method POST
    	
    	$oke =  date('y-m-d H:i:s'); 
 
    // Membuat array collection yang disiapkan untuk insert ke table
   $data = [
        'tanggal_antrian' =>  $oke,
        'status_antrian' => 'mengantri',
        'antrian_waktu_panggil' => null,
        'antrian_waktu_selesai' => null,
        'id_antrian_pelayanan' => '7',
        'id_antrian_loket' => '4'
    ];
    $dataaa = [
        'tanggal_antrian' =>  $oke,
        'status_antrian' => 'berlansung',
        'antrian_waktu_panggil' => null,
        'antrian_waktu_selesai' => null,
        'id_antrian_pelayanan' => '7',
        'id_antrian_loket' => '4'
    ];
 
 
    $dataa['antrianstatus'] = $this->antrian->getAntrianstatus('7');
    if ($dataa['antrianstatus'] != null ) {
        $simpan = $this->antrian->insert_antrian($data);
     } else {
        $simpan = $this->antrian->insert_antrian($dataaa);

     }

 
    // Jika simpan berhasil, maka ...
    if($simpan)
    {
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Anda telah melakukan pengambilan no antrian, no antrian anda adalah $last_id');
        $data['antrian'] = $this->antrian->getAntrian();
        echo view('antrian/antrian', $data);
    }
    } 


}