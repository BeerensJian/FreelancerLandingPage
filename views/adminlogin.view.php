<?php
/**
 * @var array $errors
 */
require 'views/partials/head.php';
?>
    <div class="bg">
        <div class="login-card">

            <form action="/adminlogin" method="post">
                <?php if($errors): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php foreach ($errors as $error): ?>
                            <?= $error ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <img src="../public/images/lock-icon.svg" alt="icon of a lock">
                <label for="password">Password:</label>
                <input type="text" id="password" name="password">
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>
<?php
require 'views/partials/footer.php';
?>