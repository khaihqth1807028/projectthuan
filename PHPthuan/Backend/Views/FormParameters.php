
<form style="margin: auto;width: 50%;" method="post" action="<?php echo $action ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo isset($record->name)? $record->name:'';?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Parent</label>
       <select name="parent_id" class="form-control" style="width: 200px;">
           <option value="0">    </option>

           <?php $listParent = $this->ModelReadDropDownCategory();
           ?>

           <?php foreach($listParent as $rows): ?>
               <option <?php if(isset($record->id)&&$record->id==$rows->parent_id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
           <?php endforeach; ?>
       </select>
    </div>
<!--    <div class="form-group">-->
<!--        <label for="exampleFormControlSelect1">Status</label>-->
<!--        <select class="form-control" name="status" id="exampleFormControlSelect1">-->
<!--            <option value="1">1</option>-->
<!--            <option value="2">DeActive</option>-->
<!--        </select>-->
<!--    </div>-->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>