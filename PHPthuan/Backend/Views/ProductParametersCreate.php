

<form method="post" action="<?php echo $action ?>">
    <h1>Thêm thuôc tính</h1>
    <!-- rows -->

    <div class="row" style="margin-top:5px;">
        <div class="col-md-2">Tên thuộc tính</div>
        <div class="col-md-10">
            <select name="para_id[]"  multiple="multiple">
                <?php
                //lay danh muc cap cha
                $parameter = $this->modelListParameter();
                ?>
                <?php foreach($parameter as $rows): ?>
                    <option style="background: black; color: white;" disabled="disabled"  value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                    <?php  $parameterNoChecked = $this->modelListParameterNoCheck($rows->id);
                    foreach ($parameterNoChecked as $item) :
                        ?>
                        <option name="para_id[]" selected value="<?php echo $item->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $item->name; ?></option>
                    <?php endforeach; ?>
                    <?php
                    //lay danh muc cap con
                    $parameterSub = $this->modelListParameterSub($rows->id);
                    ?>
                    <?php foreach($parameterSub as $rowsSub): ?>
                        <option name="" disabled="disabled" selected value="<?php echo $rowsSub->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowsSub->name; ?></option>

                <?php endforeach; ?>
                <?php endforeach; ?>

            </select>


        </div>
    </div>
    <!-- end rows -->
<!--    <div class="form-group">-->
<!--        <label for="exampleFormControlSelect1">Status</label>-->
<!--        <select class="form-control" name="status" id="exampleFormControlSelect1">-->
<!--            <option value="1">1</option>-->
<!--            <option value="2">2</option>-->
<!---->
<!--        </select>-->
<!--    </div>-->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>