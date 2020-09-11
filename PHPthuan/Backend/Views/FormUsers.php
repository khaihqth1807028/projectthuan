
<form method="post" action="<?php echo $action ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="email" name="username" class="form-control" value="<?php echo isset($record->username)? $record->username:'';?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label>Pass</label>
        <input type="password" name="password" class="form-control"<?php if (isset($record->password)):?> placeholder="KO đổi pass thì ko nhâp"<?php else: ?> required <?php endif; ?> />
    </div>


    <div class="form-group">
        <label for="exampleFormControlSelect1">Status</label>
        <select class="form-control" name="status" id="exampleFormControlSelect1">
            <option value="1">Active</option>
            <option value="2">DeActive</option>

        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>