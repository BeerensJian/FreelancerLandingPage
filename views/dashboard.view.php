<?php
require 'views/partials/head.php';
// Todo: display stats in the home page of the dashboard (forms submits, day, week, month, record visitors?)
// another page for blogposts maybe?
// allow users to submit reviews and make a page where the admin can choose which reviews to show or hide certain reviews?
?>
<div class="container-fluid vh-100">
    <div class="row h-100">
        <div class="col-sm-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class="col-sm-9">col-sm-3</div>
    </div>
</div>




<?php
require 'views/partials/footer.php';
?>
