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
        <div class="col-sm-10 p-5">
            <h2 class="py-3">Statistieken Indieningen</h2>
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

            <div class="accordion" id="accordion">

                <h2 class="my-5">Laatste Indieningen</h2>
                <?php foreach ($userSubmits as $user): ?>

                <div class="accordion-item">
                    <h3 class="accordion-header" id="heading<?=$user['id']?>">
                        <button class="accordion-button collapsed  <?= $user['completed'] ? "bg-success-subtle" : ""?>" style=";" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $user['id'] ?>" aria-expanded="false" aria-controls="collapse<?= $user['id'] ?>">
                            <?= $user['name'] ?>
                        </button>
                    </h3>
                    <div id="collapse<?= $user['id'] ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $user['id']?>" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <div>
                                <div class="py-2">
                                    <span class="fw-bold">Email:</span>
                                    <span><?= $user['email'] ?></span>
                                </div>
                                <div class="py-2">
                                    <span class="fw-bold">Mobiel Nr:</span>
                                    <span ><?= $user['mobile'] ?></span>
                                </div>
                                <div class="py-2">
                                    <p class="fw-bold mb-1">Extra Informatie:</p>
                                    <p><?= $user['extrainfo'] ?></p>
                                </div>
                                <form action="" method="POST" class="d-flex justify-content-end">
                                    <input type="text" hidden name="id" value="<?= $user['id'] ?>">
                                    <button class="btn btn-<?= !$user['completed'] ? "primary" : "danger" ?>"><?= !$user['completed'] ? "Gecontacteerd" : "Ongedaan maken" ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>

            </div>
    </div>
</div>




<?php
require 'views/partials/footer.php';
?>
