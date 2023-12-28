<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> AdminLab </title>
    <link rel="stylesheet" href="css_js/bootstrap.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css_js/style.css">
    <!-- Boxicons CDN Link -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <!-- <i class='bx bxl-c-plus-plus icon'></i> -->
        <div class="logo_name">AdminLab</div>
        <i class='bx bx-menu' id="btn" >&#8694;</i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="admin_dashboard.html">
          <!-- <i class='bx bx-grid-alt'></i> -->
          <i class='bx bx-chat' style="font-size:40px;color: red;">&#8284;</i>
          <span class="links_name">&nbsp;Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="donor_list.php">
         <!-- <i class='bx bx-user' ></i> -->
         <i class='bx bx-chat' style="font-size:30px;color: red;">&#8367;</i>
         <span class="links_name">Donors</span>
       </a>
       <span class="tooltip"> Donors</span>
     </li>
     <li>
       <a href="add.html">
         <i class='bx bx-chat' style="font-size:40px;color: red;">&#x2b;</i>
         <span class="links_name">Add</span>
       </a>
       <span class="tooltip">Add</span>
     </li>
     <li>
       <a href="../index.html">
        <i class='bx bx-chat' style="font-size:30px;color: red;">&#10224;</i>
         <span class="links_name">&nbsp;Home</span>
       </a>
       <span class="tooltip">Home</span>
     </li>
     <li>
      <a href="./logout.php">
       <i class='bx bx-chat' style="font-size:30px;color: red;">&#8678;</i>
        <span class="links_name">&nbsp;Logout</span>
      </a>
      <span class="tooltip">Logout</span>
    </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Dashboard</div>
      

<link rel="stylesheet" type="text/css" href="css_js/bootstrapadmin.css">


<div class="grey-bg container-fluid">
  
  <section id="stats-subtitle">
  <div class="container table-responsive py-5"> 
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          

          <th scope="col">id</th>
          <th scope="col">Name</th>
          <th scope="col">Mobile</th>
          <th scope="col">District</th>
          <th scope="col">Blood Group<th>

        </tr>
      </thead>
      <tbody>