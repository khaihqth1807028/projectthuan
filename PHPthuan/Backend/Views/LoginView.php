



<div class="container" style="margin-top:40px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form method="post" id="loginform" action="index.php?controller=Login&action=loginPost">
                        <div class="row" style="margin-top:5px;">

                            <div class="col-md-2">Email</div>

                            <?php  ?>
                            <div class="col-md-9"><input name="username" id="username" type="email" name="username"  class="form-control"></div>
                        </div>
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2">Password</div>
                            <div class="col-md-9"><input name="password" id="password" type="password" name="password"  class="form-control"></div>
                        </div>
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-9"><input id="submit" name="submit" type="submit" value="Login" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>