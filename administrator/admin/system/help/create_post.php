<?php

//Include header page
require_once('lib/header.php');

//If create_post button click
if (isset($_POST['create_post'])) {
  
    //Include dynamic_func page function
    require_once('lib/dynamic_func.php');

    if (create_post($_FILES['post_img']['name'], $_FILES['post_img']['tmp_name'], $_POST['cate_id'], $_POST['sub_cate_id'], $_POST['post_header'], $_POST['posted_by'], $_POST['post_desc'], $_POST['labels']) == 2)
        $msg = "Post has been created successfully.";
    else if (create_post($_FILES['post_img']['name'], $_FILES['post_img']['tmp_name'], $_POST['cate_id'], $_POST['sub_cate_id'], $_POST['post_header'], $_POST['posted_by'], $_POST['post_desc'], $_POST['labels']) == 4)
        $msg = "Please upload only image file";
    else
        $msg = "Something wrong while adding";
}
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Create Post</h2>
            </div>
           <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: right;">
                                <a href="unpublish.php">Unpublish Post</a> 
                            </h2>
                        </div>
                        <div class="body">
                            <center>
                                <font>
                                    <?php 

                                      if (!empty($msg))
                                        print $msg; //Message print 
                                    ?>   
                                </font>
                            </center><br>
                            <form method="POST" autocomplete="off" enctype="multipart/form-data">

                                <div class="row clearfix">
                                     
                                    <div class="col-sm-6">
                                        <label class="form-label">Category</label>
                                        <select class="form-control" name="cate_id" id="cate_id" required>
                                            <option></option>
                                            <?php
                                                //Category
                                                try{

                                                    //Database Connection Open
                                                    $conn = new Connection();
                                                    $con  = $conn->Open();

                                                    if ($con) { 

                                                        $category_retr_sql = "select * from `category`";

                                                        $pre = $con->prepare($category_retr_sql);

                                                        if($pre->execute()){

                                                            while ($row = $pre->fetch(PDO::FETCH_ASSOC))
                                                                print "<option value='$row[cate_id]'> $row[cate_name] </option>";
                                                        }
                                                    }
                                                    //Close Database Connection
                                                    $conn->Close();
                                                }
                                                catch(PDOException $e){} 
                                            ?>
                                        </select>
                                    </div> 
                                    <div class="col-sm-6">
                                    </div>
                                </div>  

                                <div class="row clearfix">
                                     
                                    <div class="col-sm-6" id="div_sub_cate">
                                        <label class="form-label">Sub Category</label>
                                        <select class="form-control" name="sub_cate_id" id="sub_cate_id" required>
                                            <option></option>
                                        </select>
                                    </div> 
                                    <div class="col-sm-6">
                                    </div>
                                </div> 

                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label class="form-label">Post Header</label>
                                        <input type="text" class="form-control" name="post_header" required> 
                                    </div> 
                                    <div class="col-sm-6">
                                    </div> 
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label class="form-label">Posted By</label>
                                        <input type="text" class="form-control" name="posted_by" required> 
                                    </div> 
                                    <div class="col-sm-6">
                                    </div> 
                                </div>

                                <div class="row clearfix">
                                     
                                    <div class="col-sm-6">
                                        <label class="form-label">Post Image</label>
                                        <input type="file" name="post_img" accept="image/*" required> 
                                    </div> 
                                    <div class="col-sm-6">
                                    </div> 
                                </div> 

                                <div class="row clearfix">
                                     
                                    <div class="col-sm-6">
                                        <label class="form-label">Post Description</label>
                                        <textarea rows="40" class="ckeditor" name="post_desc" id="editor"></textarea> 
                                    </div> 
                                    <div class="col-sm-6">
                                        
                                    </div> 
                                </div> 
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label class="form-label">Labels</label>
                                        <input type="text" class="form-control" name="labels" required> 
                                    </div> 
                                    <div class="col-sm-6">
                                    </div> 
                                </div>            
                                <button class="btn btn-primary waves-effect" type="submit" name="create_post">Create Post</button>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->
        </div>
    </section>
<?php

//Include footer page
require_once('lib/footer.php');
?>

<script>
$(document).ready(function(){

    $("#cate_id").change(function(){

        var cate_id = $("#cate_id").val();

        $.ajax({

            type: "POST",
            url: "api/sub_category.php",
            // url: "http://droidfeat.com/droidfeat_admin/system/api/sub_category.php",            
            data: {
                "cate_id": cate_id
            },
            success: function(data) {

                $("#div_sub_cate").html(data);
            }
        });
    });
});

</script>
