<style>
.card{
    background-image:url("https://i.pinimg.com/564x/85/ab/6a/85ab6a1874a78c739cdfe793813de028.jpg");
    background-size:cover;
}
a.btn{
  border-color:#d48365;
}
</style>

<div class="container">
<div class="jumbotron text-center "style="height:280px; background-color:#79554829;">
<div class="row">
  <div class="col-sm-6 mx-auto ">
    <div class="card rounded ">
      <div class="card-body text-white ">
        <h5 class="card-title"> <?=$data['ls']['status']; ?></h5>
        <p class="card-text"><?= $data['ls']['jadwal']; ?></p>
        <a href="<?=BASEURL;?>/mylist" class="btn btn-primary" style="  background-color:#6b2e2e; border-color:#d48365" >Kembali</a>
      </div>
    </div>
  </div>
</div>
</div>
