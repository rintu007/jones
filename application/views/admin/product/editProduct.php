<?php
/**
 * Created by PhpStorm.
 * User: Olalekan
 * Date: 17/10/2017
 * Time: 5:55 AM
 */
?>
<?php $this->load->view('partials/modalHeader'); ?>
<?php if(isset($response)):?>
    <?php if($response == TRUE):?>
        <script type="text/javascript">
            $(document).ready(function(){
                swal({
                    title: "Success",
                    text: <?php echo json_encode($message)?>,
                    type: "success",
                })
            });
        </script>
    <?php elseif($response == FALSE):?>
        <script>
            $(document).ready(function(){
                swal({
                    title: "Success",
                    text: <?php echo json_encode($message)?>,
                    type: "danger",
                })
            });
        </script>
    <?php endif?>
<?php endif?>

<link href="<?php echo base_url()?>assets/summernote/summernote.css" rel="stylesheet" />
<link href="<?php echo base_url()?>assets/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

<div class="blank">
    <div class="blank-page col-md-6">
        <h4 class="text-center">Edit Product Information</h4>
        <br>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="product_name" value="<?php echo $product->product_name?>">
                <p><?php echo form_error('product_name')?></p>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Product Model</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="product_model" value="<?php echo $product->product_model?>">
                <p><?php echo form_error('product_model')?></p>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Product Description</label>
                <textarea class="summernote" name="product_description"><?php echo $product->product_description?></textarea>
                <p><?php echo form_error('product_description')?></p>
            </div>

            <div class="form-group">
                <label for="eventRegInput1">Current Picture</label> &nbsp;
                <img src="<?php echo base_url($product->product_pictures)?>" style="height:120; width:170;">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Picture</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="product_pictures">
            </div>

            <button type="submit" class="btn btn-success col-md-offset-5">Add Product</button>
        </form>
    </div>
</div>

<?php $this->load->view('partials/modalFooter'); ?>

<script src="<?php echo base_url()?>assets/summernote/summernote.min.js"></script>
<script src="<?php echo base_url()?>assets/select2/js/select2.min.js" type="text/javascript"></script>

<script>

    jQuery(document).ready(function(){

        $('.summernote').summernote({
            height: 240,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });
        // Select2
        $(".select2").select2();

        $(".select2-limiting").select2({
            maximumSelectionLength: 2
        });
    });
</script>
