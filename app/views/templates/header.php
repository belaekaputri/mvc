<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title><?= $data['judul'];?></title>
</head>
<body>
 <style>
    li.nav-item a.nav-link{
      color:BLACK;
      font-family:Courier;
     }
    li.nav-item a.nav-link:hover{
      color:#6b2e2e;
      background-color:white;
      border-radius:10px;
     }
 </style>
    <div class="jumbotron text-center " style="background-image:url(https://images.unsplash.com/photo-1606327054629-64c8b0fd6e4f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80);
        background-size:cover;
        height:300px;
        background-position: 0 -300px;">
   </div>
      <div class="container" style="margin-top:-60px;">
      <nav class="navbar navbar-expand-lg rounded  " style="background-color: #795548;">
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item active ">
              <a class="nav-link " href="<?= BASEURL;?>">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= BASEURL;?>/mylist">MY LIST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL;?>/about">ABOUT</a>
            </li>
          </ul>
        </div>
      </nav>
      </div>
