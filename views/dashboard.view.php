<?php
/**
 * @var int $day
 * @var int $week
 * @var int $month
 * @var array $userSubmits
 */

require 'views/partials/head.php';
?>
<div class="vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <form class="ms-auto" action="">
                    <button class="btn btn-outline-light">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container pt-2">
    <h2 class="py-4">Statistieken Indieningen</h2>
    <div class="row row-cols-3">
        <div class="col test">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Vandaag
                    </h5>
                    <div class="card-text">
                        Inzendingen: <?= $day ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="col test">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Week
                    </h5>
                    <div class="card-text">
                        Inzendingen: <?= $week ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="col test">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Maand
                    </h5>
                    <div class="card-text">
                        Inzendingen: <?= $month ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="accordion" id="accordion">

        <h2 class="my-5">Laatste Indieningen</h2>
        <?php foreach ($userSubmits as $user): ?>

            <div class="accordion-item">
                <h3 class="accordion-header" id="heading<?= $user['id'] ?>">
                    <button class="accordion-button collapsed  <?= $user['completed'] ? "bg-lightgreen" : "" ?>"
                            style=";" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse<?= $user['id'] ?>" aria-expanded="false"
                            aria-controls="collapse<?= $user['id'] ?>">
                        <?= $user['name'] ?>
                    </button>
                </h3>
                <div id="collapse<?= $user['id'] ?>" class="accordion-collapse collapse"
                     aria-labelledby="heading<?= $user['id'] ?>" data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <div>
                            <div class="py-2">
                                <span class="fw-bold">Email:</span>
                                <span><?= $user['email'] ?></span>
                            </div>
                            <div class="py-2">
                                <span class="fw-bold">Mobiel Nr:</span>
                                <span><?= $user['mobile'] ?></span>
                            </div>
                            <div class="py-2">
                                <p class="fw-bold mb-1">Extra Informatie:</p>
                                <p><?= $user['extrainfo'] ?></p>
                            </div>
                            <form action="/admin/dashboard" method="POST" class="d-flex justify-content-end">
                                <input type="text" hidden name="id" value="<?= $user['id'] ?>">
                                <button class="btn btn-<?= !$user['completed'] ? "primary" : "danger" ?>"><?= !$user['completed'] ? "Gecontacteerd" : "Ongedaan maken" ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php
        // pagination component
        require "views/components/pagination.php"
        ?>


    </div>
</div>
</div>


<?php
require 'views/partials/footer.php';
?>
