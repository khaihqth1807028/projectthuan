
<style>
span.span{
    font-size: 16px;
}

</style>
<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit product</div>
        <div class="panel-body">
            <!-- muon upload duoc file thi phai duoc thuoc tinh enctype="multipart/form-data" -->
            <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"><span class="span">Name</span></div>
                    <div class="col-md-5">
                        <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"><span class="span">Category</span></div>
                    <div class="col-md-5">
                        <select name="category_id" class="form-control" style="width: 200px;">
                            <?php
                            //lay danh muc cap cha
                            $category = $this->modelListCategory();
                            ?>
                            <?php foreach($category as $rows): ?>
                                <option style="background: black;color: white;"  disabled="disabled"<?php if(isset($record->category_id)&&$record->category_id==$rows->id): ?>  <?php endif; ?> value="<?php echo $rows->id;?>"><?php echo $rows->name; ?></option>
                                <?php
                                //lay danh muc cap con
                                $categorySub = $this->modelListCategorySub($rows->id);
                                ?>
                                <?php foreach($categorySub as $rowsSub): ?>
                                    <option <?php if(isset($record->category_id)&&$record->category_id==$rowsSub->id): ?> selected <?php endif; ?> value="<?php echo $rowsSub->id;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowsSub->name; ?></option>
                                <?php endforeach; ?>
                            <?php endforeach; ?>

                        </select>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"><span class="span">price</span></div>
                    <div class="col-md-5">
                        <input type="number" value="<?php echo isset($record->price)?$record->price:"0"; ?>" min="0" name="price" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"><span class="span">Discount</span></div>
                    <div class="col-md-10">
                        <input type="number" value="<?php echo isset($record->discount)?$record->discount:"0"; ?>" name="discount" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"><span class="span">Description</span></div>
                    <div class="col-md-10">
                        <textarea name="description"><?php echo isset($record->description)?$record->description:""; ?></textarea>
                        <script type="text/javascript">CKEDITOR.replace("description");</script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"><span class="span">Content</span></div>
                    <div class="col-md-10">
                        <textarea name="content"><?php echo isset($record->content)?$record->content:""; ?></textarea>
                        <script type="text/javascript">CKEDITOR.replace("content");</script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <input type="checkbox" <?php if(isset($record->hot)&&$record->hot==1): ?> checked <?php endif; ?> id="hot" name="hot"> <label for="hot">Hot</label>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <input type="file" name="photo">
                    </div>
                </div>
                   <?php if (isset($record->photo) && $record->photo !=""&&file_exists("../Assets/Upload/Products/".$record->photo)) ?>
                <div class="row" style="margin-top:5px;">
         
                    <div class="col-md-10">
                        <img style="max-width: 100px;margin-left: 100px" src="../Assets/Upload/Products/<?php echo $record->photo; ?>" alt="">
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
                <!-- end rows -->
            </form>
        </div>
    </div>
</div>