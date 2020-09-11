
<style>


    .bin{
        background: black;
        color: white;

    }

</style>
<h1><b >Thùng Rác</b></h1>
<div class="bin">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col" style="width: 200px;">photo</th>
            <!--        <th scope="col">Password</th>-->
            <th scope="col">name</th>
            <th scope="col" style="width: 200px;">Category</th>
            <th scope="col" style="width: 200px;">Hot</th>
            <th scope="col" style="width: 200px;">Price</th>
            <th scope="col" style="width: 200px;">Discount</th>
            <!--                <th scope="col" style="width: 200px;"></th>--><th></th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($data as $rows):
            ?>
            <tr>
                <th><?php echo $rows->id; ?></th>
                <td style="text-align: center;"><?php if($rows->photo != "" && file_exists("../Assets/Upload/Products/".$rows->photo)): ?>
                        <img style="max-width: 100px" src="../Assets/Upload/Products/<?php echo $rows->photo ?>" alt="">
                    <?php endif ?>
                </td>
                <!--           <td>--><?php //echo $rows->password; ?><!--</td>-->
                <td><?php echo $rows->name; ?></td>
                <td><?php echo $this->getCate($rows->category_id); ?></td>

                <td>  <?php if($rows->hot==1): ?><span class="fa fa-check"></span><?php endif; ?>
                </td>

                <td><?php echo number_format($rows->price); ?>VNĐ</td>
                <td><?php echo $rows->discount; ?>%</td>
                <td><a style="color: red" href="index.php?controller=RycyleBin&action=remove&id=<?php echo $rows->id ?>">Remove</a></td>

            </tr>
        <?php
        endforeach;
        ?>
        </tbody>
        <style>
            .pagination{
                padding: 0px;margin: 0px;
            }
        </style>

    </table>

</div>













