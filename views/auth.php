<div id="login" class="modal fade">
            <div class="modal-dialog">
                <form action="auth.php?action=login" class="modal-content" method="post">
                <?php if($_SERVER['SCRIPT_NAME'] != 'index.php'): ?>
                    <input type="hidden" name="redirect" value="<?=(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>">
                <?php endif;?>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                    <?php if(isset($error)): ?>
                        <div class="alert alert-danger" role="alert"><?=$error ?></div>
                    <?php endif; ?>
                        <input name="email" type="text" placeholder="Email" autofocus <?php if(isset($form) && (isset($form['email']))): ?>
                            <?='value="'.$form['email'].'"'?>
                            <?php endif; ?>>
                        <input name="password" type="password" placeholder="Password">
                    </div>
                    <div class="modal-footer">
                        <input name="submit" type="submit" class="btn" value="Login">
                        <a id="register-btn" class="btn" data-toggle="modal" data-target="#register" data-dismiss="modal">Create Account</a>
                    </div>
                </form><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div id="register" class="modal fade">
            <div class="modal-dialog">
                <form action="auth.php?action=register" class="modal-content" method="post">
                <?php if($_SERVER['SCRIPT_NAME'] != 'index.php'): ?>
                    <input type="hidden" name="redirect" value="<?=(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>">
                <?php endif; ?>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        <h4 class="modal-title">Register</h4>
                    </div>
                    <div class="modal-body">
                        <?php if(isset($error)): ?>
                            <div class="alert alert-danger" role="alert"><?=$error ?></div>
                        <?php endif; ?>
                        <input name="email" type="text" placeholder="Email" autofocus <?php if(isset($form) && (isset($form['email']))): ?>
                            <?='value="'.$form['email'].'"'?>
                            <?php endif; ?>>
                        <input name="password" type="password" placeholder="Password">
                        <input name="password_confirm" type="password" placeholder="Retype Password">
                    </div>
                    <div class="modal-footer">
                        <input name="submit" type="submit" class="btn" value="Register">
                        <a id="login-btn" class="btn" data-toggle="modal" data-target="#login" data-dismiss="modal">Already have an account?</a>
                    </div>
                </form><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

<?php if($show_login): ?>
        <script type="text/javascript">
            $().ready(function(){
                $('#login').modal('show');
            });
        </script>
<?php endif; ?>

<?php if($show_register): ?>
        <script type="text/javascript">
            $().ready(function(){
                $('#register').modal('show');
            });
        </script>
<?php endif; ?>