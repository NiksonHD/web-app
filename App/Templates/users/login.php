<h2>Login form</h2>

<?php /** @var \App\Data\ErrorDTO $error */ ?>
<?php if ($errors): ?>
    <p style="color: red">
        <?= $errors->getMassege(); ?>
    </p>
<?php endif; ?>
<form method="post">
    <label>
        Username:   <label/> <input type="text" name="username"/><br>


        <label>
            Password<label/>
            <input type="text" name="password"/><br>

            <label>


                <input type="submit" name="login" value="Login"/>


                </form>





