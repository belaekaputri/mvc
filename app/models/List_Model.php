<?php
class List_Model{
private $table='daftar_harian';
private $db;

public function __construct()
{
    $this->db=new Database;
}

public function getAllMyList(){
    $this->db->query('select  * from ' .$this->table);
    return $this->db->resultSet();
}

public function getListById($id){
    $this->db->query('select  * from ' .$this->table. ' where id=:id ');
    $this->db->bind('id',$id);
    return $this->db->single();
}




public function tambahDataList($data)
{
$query="insert into daftar_harian values('', :jadwal, :status)";
$this->db->query($query);
$this->db->bind('jadwal',$data['jadwal']);
$this->db->bind('status',$data['status']);
$this->db->execute();
return $this->db->rowCount();
}


public function caridata()
{
    $keyword=$_POST['keyword'];
    $query="select * from daftar_harian where jadwal like :keyword ";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
}


public function hapusdata($id)
{
$query="DELETE FROM daftar_harian WHERE id=:id";
$this->db->query($query);
$this->db->bind('id',$id);
$this->db->execute();
return $this->db->rowCount();
}




public function ubahDataList($data)
{
$query="UPDATE daftar_harian SET jadwal= :jadwal, status= :status where id= :id ";
$this->db->query($query);
$this->db->bind('jadwal',$data['jadwal']);
$this->db->bind('status',$data['status']);
$this->db->bind('id',$data['id']);
$this->db->execute();
return $this->db->rowCount();
}






}

?>
