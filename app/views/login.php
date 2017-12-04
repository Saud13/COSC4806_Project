<?php require_once '../app/views/templates/headerPublic.php' ?>

<div class="row">
    <div class="col">
        <h2>Login Form</h2>
        <form class="form-horizontal" 
              action="<?= USER_LOGIN ?>" 
              method="post">
            <fieldset>
                <div class="form-group">
                    <label for="username" 
                           class="control-label">Username</label>
                    <input type="text" 
                           class="form-control" 
                           name="username" 
                           placeholder="Username"/></div>

                <div class="form-group">
                    <label for="password" 
                           class="control-label">Password</label>
                    <input type="password" 
                           class="form-control"
                           name="password"
                           placeholder="Password"/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<?php require_once '../app/views/templates/footer.php' ?>