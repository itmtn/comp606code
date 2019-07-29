<?php require_once("header.php"); ?>

<h1 class="padder">Courses</h1>

<?php include("nav.php"); ?>

<div class="container col-md-4">
        <h2>Course Enrollment</h2>
        <form action="page1a.php" method="post">
            <div class="form-row">  
                <div class="col">
                    <label class="col-form-label" for="dateOfBirth">Date of Birth</label>
                </div>
                <div class="col">
                    <input type="date" name="dateOfBirth" id="dateOfBirth" required="true">
                </div>
            </div>
            <div class="form-row">               
                <label class="col-form-label" for="undergraduateDegrees">Pick the undergraduate degrees you are interested in</label> 
            </div>
            <div class="form-row">
                <select name="undergraduateDegrees" multiple="multiple" size="4" required="true">
                    <option>Bachelor of Business</option>
                    <option>Bachelor of Information Technology</option>
                    <option>Bachelor of Nursing</option>
                    <option>Bachelor of Social Practice</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>



<?php require_once("footer.php"); ?>