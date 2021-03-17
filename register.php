<?php
 include('includes/header.php');
 include('includes/navbar.php');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
 integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
 crossorigin="anonymous">


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="post">

      <div class="modal-body">
     
     
      <div class="form-group">
    <label>User Name</label>
    <input type="text"  name="username" class="form-control" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email"  name="email" class="form-control" placeholder="enter email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password"  name="password" class="form-control" placeholder="enter password">
  </div>
  <div class="form-group">
    <label>contact number</label>
    <input type="number"  name="contact number" class="form-control" placeholder="enter contact number">
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>