<?php
class MyList extends Controller{
    public function index(){
    $data['judul']="Daftar List";
    $data['ls']=$this->model('List_Model')->getAllMyList();
    $this->view('templates/header',$data);
    $this->view('mylist/index',$data);
    $this->view('templates/footer');
   }


public function tambah(){
    if($this->model('List_model')->tambahDataList($_POST)>0){
        Flasher::setFlash('berhasil','ditambahkan','light');

        header('Location:'.BASEURL.'/mylist');
        exit;
    }else{
          Flasher::setFlash('gagal','ditambahkan','danger');
          header('Location:'.BASEURL.'/mylist');
          exit;
}
}




 public function detail($id){
 $data['judul']="Detail List";
 $data['ls']=$this->model('List_Model')->getListById($id);
 $this->view('templates/header');
 $this->view('mylist/detail',$data);
 $this->view('templates/footer');
}



public function cari(){
    $data['ls']=$this->model('List_Model')->caridata();
    $this->view('templates/header');
    $this->view('mylist/index',$data);
    $this->view('templates/footer');
}









public function hapus($id)
{
    if($this->model('List_Model')->hapusdata($id)>0){
        Flasher::setFlash('berhasil','dihapus','light');
        header('Location:'.BASEURL.'/mylist');
        exit;
    }else{
        Flasher::setFlash('gagal','dihapus','danger');
        header('Location:'.BASEURL.'/mylist');
        exit;
}
}

public function getubah(){
echo json_encode($this->model(List_Model)->getListById($_POST['id']));

}



public function ubah(){
    if($this->model('List_Model')->ubahDataList($_POST)>0){
        Flasher::setFlash('berhasil','diedit','light');

        header('Location:'.BASEURL.'/mylist');
        exit;
    }else{
          Flasher::setFlash('gagal','diedit','danger');
          header('Location:'.BASEURL.'/mylist');
          exit;
}
}




















}





?>
