<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class AntrianModel extends Model
{
    protected $table = "antrian";
 
    public function getAntrian($id = false)
    {
        if($id === false){
            $request = \Config\Services::request();
            $loktt = $request->uri->getSegment(3);
            return $this->table('antrian')
                        ->where('id_antrian_pelayanan', $loktt)
                        ->selectMax('id_antrian')
                        ->limit(1)
                        ->get()
                        ->getResultArray();

        } else {
            return $this->table('antrian')
                        ->where('id_antrian_loket', $id)
                        ->where('id_antrian_pelayanan', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
     public function getAntrianstatus($id = false)
    {
        if($id === false){
            return $this->table('antrian')
                        ->where('status_antrian', 'berlansung')
                        ->get()
                        ->getResultArray();

        } else {
            return $this->table('antrian')
                        ->where('status_antrian', 'berlansung')
                        ->where('id_antrian_pelayanan', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

      public function getAntrianno($id = false)
    {
        if($id != 0){
          
            return $this->table('antrian')
                        ->where('id_antrian_pelayanan', $id)
                        ->where('status_antrian', 'berlansung')
                        ->selectMin('id_antrian')
                        ->limit(1)
                        ->get()
                        ->getResultArray();

        } else {
            return $this->table('antrian')
                        ->where('id_antrian_loket', $id)
                        ->where('id_antrian_pelayanan', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 



    public function getAntrianlast($id = false)
    {
        if($id != 0){
          
            return $this->table('antrian')
                        ->where('status_antrian', 'berlansung')
                        ->selectMax('id_antrian')
                        ->limit(1)
                        ->get()
                        ->getResultArray();

        } else {
            return $this->table('antrian')
                        ->where('id_antrian_loket', $id)
                        ->where('id_antrian_pelayanan', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insert_antrian($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 

    public function update_antrian($data, $id)
    {
    return $this->db->table($this->table)->update($data, ['id_antrian' => $id]);
    } 

   public function delete_antrian($id)
    {
    return $this->db->table($this->table)->delete(['id_antrian' => $id]);
    } 

    public function update_antrian_data($data, $id)
    {
        $request = \Config\Services::request();
        $rr = $request->uri->getSegment(3);
   $this->db->table($this->table)->update($data, ['id_antrian' => $id]);
   return $this->db->query("UPDATE antrian SET status_antrian = 'berlansung' WHERE id_antrian = ( SELECT MIN(id_antrian) AS min FROM antrian WHERE id_antrian_pelayanan = (select id_antrian_pelayanan from antrian where id_antrian = '" .$id." ') and status_antrian = 'mengantri'   )");
    } 
}