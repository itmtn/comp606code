<?php require_once("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h1 class="padder">User Preferences</h1>
  
  <?php 
  
  include("nav.php");
  
  // the layout of this form is created using the bootstrap framework - see https://getbootstrap.com/docs/4.0/components/forms/
  // the important points are that action and method must be set and a subtmit button must be used by the form
  // all input fields must have a name attributed.  The name attribute is used by the $_POST array
  
  
  ?>

    <div class="container col-md-4">
        <h2>Your Preferences</h2>
        <form action="page1a.php" method="post">
            <div class="form-row">
                <div class="col">
                    <label class="col-form-label" for="backgroundColor">Background Color</label> 
                </div>
                <div class="col">
                    <input name="backgroundColor" id="backgroundColor" type="color" value="#ffffff">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label class="col-form-label" for="headingColor">Heading Color</label>
                </div>
                <div class="col">
                    <input name="headingColor" id="headingColor" type="color" value="#000000"> 
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

  <?php require_once("footer.php"); ?>
</body>
</html>
