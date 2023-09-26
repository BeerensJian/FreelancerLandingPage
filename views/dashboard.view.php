<?php
require 'views/partials/head.php';
// Todo: display stats in the home page of the dashboard (forms submits, day, week, month, record visitors?)
// another page for blogposts maybe?
// allow users to submit reviews and make a page where the admin can choose which reviews to show or hide certain reviews?
?>
<div class="container-fluid vh-100">
    <div class="row h-100">
        <div class="col-sm-2">
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
        <div class="col-sm-10 p-3">
            <h3 class="py-3">Statistieken Indieningen</h3>
            <div class="row row-cols-3">
                <div class="col test">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Vandaag
                            </h5>
                            <div class="card-text">
                                Inzendingen: 10
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col test">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Deze maand
                            </h5>
                            <div class="card-text">
                                Inzendingen: 10
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col test">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Totaal
                            </h5>
                            <div class="card-text">
                                Inzendingen: 10
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordeon" id="user-list-accordeon">
                <div class="accordeon-item">
                    <h3 class="accordeon-header">
                        <button class="accordeon-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Kate Scarlett
                        </button>
                        finish this
                    </h3>
                </div>
            </div>
    </div>
</div>




<?php
require 'views/partials/footer.php';
?>
