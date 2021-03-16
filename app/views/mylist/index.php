<style>
.table-light td, .table-light th, .table-light thead th {
    border-color: #795548;
}
h1.display-1{
  font-size:30px;
}

</style>


<div class="container">
<!-- Button trigger modal -->
<div class="jumbotron  h-100 "style="background-color:#79554829;">

    <?php/* echo "<br>";
    $tgl=date('l, d-m-Y');
    echo $tgl. "<br>";*/
    ?>

  <div class="row">
     <div class="col-lg-12 mt-n5">
       <?php Flasher::flash();?>
     </div>
  </div>
<center><h1 class="display-1  " style="color:#6b2e2e;">To-do List</h1></center>
<button type="button" class="btn  mt-3 text-white" data-toggle="modal" data-target="#formModal" style="margin: 0 auto; background-color:#795548;">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
  <path d="M.5 3l.04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
  <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
</svg>
Tambah
</button>


<form action="<?=BASEURL;?>/mylist/cari" method="post">
<div class="input-group mb-3 w-50 mt-2">
  <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2" name="keyword" id="keyword" autocomplete="off">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit" id="tombolcari">Cari</button>
  </div>
</div>
</form>



<div class="table-responsive">
  <table class="table table-bordered  " style="width:700px;">
  <thead>
    <tr class="judul text-center " style="background-color:#795548;">
      <th scope="col">MyList</th>
      <th scope="col" >Status</th>
      <th scope="col" >Handle</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data['ls'] as $ls):?>
    <tr class="table-light ">
      <td><?= $ls['jadwal']; ?></td>
      <td class="text-center"><?= $ls['status']; ?></td>
      <td class="text-center">
      <div class="btn-group  ">

          <a href="<?=BASEURL;?>/mylist/detail/<?=$ls['id'];?>" class="btn btn-outline-primary  " tabindex="-1" role="button" >
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
          <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
          <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
          <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
          </svg>
         </a>

          <a href="<?=BASEURL;?>/mylist/ubah/<?=$ls['id'];?>" class="btn btn-outline-success tampilModalUbah " tabindex="-1" data-toggle="modal" data-target="#formModal" data-id="<?=$ls['id'];?>" >
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
          </a>

          <a href="<?=BASEURL;?>/mylist/hapus/<?=$ls['id'];?>"class="btn btn-outline-danger  " tabindex="-1" role="button" onclick="return confirm('Apakah Ingin Menghapus Data Ini ?');" >
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
          </svg>
          </a>
      </div>

       </td>
    </tr>

    <?php endforeach;?>

  </tbody>
  </table>
  </div>
</div>
</div>




<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">To-do List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
         <form action="<?=BASEURL;?>/mylist/tambah" method="post">
         <input type="hidden" name="id" id="id">

         <div class="form-group">
         <label for="jadwal">Jadwal</label>
         <input type="text" class="form-control" id="jadwal" name="jadwal" autocomplete="off">
         </div>


         <div class="form-group">
         <label for="jadwal">Status</label>
         <input type="text" class="form-control" id="status" name="status" autocomplete="off">
         </div>



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>

      </form>
      </div>



    </div>
  </div>
</div>
