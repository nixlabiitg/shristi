<?php

//Include header page
require_once('lib/header.php');

//If post_id is present
if (!empty($_GET['post_id'])) {
    
    //Database Connection Open
    $conn = new Connection();
    $con  = $conn->Open();

    if ($con) {

        $post_retr_sql = "select * from `post` where `post_id`=:post_id1";

        $pre = $con->prepare($post_retr_sql);

        $pre->bindParam(':post_id1', $_GET['post_id']);

        if($pre->execute())
            $row = $pre->fetch(PDO::FETCH_ASSOC);
        //End of data retrive
    }

    //Close Database Connection
    $conn->Close();
}

//If update_post button click
if (isset($_POST['update_post'])) {
  
    //Include dynamic_func page function
    require_once('lib/dynamic_func.php');

    if (!empty($_FILES['post_img']['name'])) {

        if (update_post($_GET['post_id'], $row['post_img'], $_FILES['post_img']['name'], $_FILES['post_img']['tmp_name'], $_POST['cate_id'], $_POST['sub_cate_id'], $_POST['post_header'], $_POST['posted_by'], $_POST['post_desc']) == "2")
            print "<script>window.location.href='unpublish.php'</script>";
        else if (update_post($_GET['post_id'], $row['post_img'], $_FILES['post_img']['name'], $_FILES['post_img']['tmp_name'], $_POST['cate_id'], $_POST['sub_cate_id'], $_POST['post_header'], $_POST['posted_by'], $_POST['post_desc']) == "4")
            $msg = "Please upload only image file";
        else
            $msg = "Something wrong while adding";
    }
    else {

        if (update_post($_GET['post_id'], 1, 1, 1, $_POST['cate_id'], $_POST['sub_cate_id'], $_POST['post_header'], $_POST['posted_by'], $_POST['post_desc']))
            print "<script>window.location.href='unpublish.php'</script>";
        else
            $msg = "Something wrong while adding";
    }
}
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Post</h2>
            </div>
           <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: right;">
                                <a href="unpublish.php">Un-Publish Post</a> 
                            </h2>
                        </div>
                        <div class="body">
                            <center>
                                <img id="preview" width="100" height="100" src="<?php !empty($row['post_img'])? print $row['post_img']: print '';?>"><br>
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
                                        <select class="form-control" name="cate_id" id="category_id" required>
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

                                                            while ($row_4 = $pre->fetch(PDO::FETCH_ASSOC)){

                                                                if ($row_4['cate_id'] == $row['cate_id'])
                                                                    print "<option value='$row_4[cate_id]' selected> $row_4[cate_name] </option>";
                                                                else
                                                                    print "<option value='$row_4[cate_id]'> $row_4[cate_name] </option>";
                                                            }
                                                        }
                                                    }
                                                    //Close Database Connection
                                                    $conn->Close();
                                                }
                                                catch(PDOException $e){} 
                                            ?>
                                        </select>
                                    </div> 
                                    <div class="col-sm-6" id="div_sub_category_2">
                                        <label class="form-label">Sub-Category</label>
                                        <select class="form-control" name="sub_cate_id" required>
                                            <option></option>
                                            <?php
                                                //Category
                                                try{

                                                    //Database Connection Open
                                                    $conn = new Connection();
                                                    $con  = $conn->Open();

                                                    if ($con) { 

                                                        $sub_cate_retr_sql = "select * from `sub_category` where `cate_id`=:cate_id1";

                                                        $pre = $con->prepare($sub_cate_retr_sql);

                                                        $pre->bindparam(':cate_id1', $row['cate_id']);

                                                        if($pre->execute()){

                                                            while ($row_5 = $pre->fetch(PDO::FETCH_ASSOC)){

                                                                if ($row_5['sub_cate_id'] == $row['sub_cate_id'])
                                                                    print "<option value='$row_5[sub_cate_id]' selected> $row_5[sub_cate_name] </option>";
                                                                else
                                                                    print "<option value='$row_5[sub_cate_id]'> $row_5[sub_cate_name] </option>";
                                                            }
                                                        }
                                                    }
                                                    //Close Database Connection
                                                    $conn->Close();
                                                }
                                                catch(PDOException $e){} 
                                            ?>
                                        </select>
                                    </div>
                                </div> 

                                <div class="row clearfix">
                                     
                                    <div class="col-sm-6">
                                        <label class="form-label">Post Header</label>
                                        <input type="text" class="form-control" value="<?php !empty($row['post_header_name'])? print $row['post_header_name']: print '';?>" name="post_header"> 
                                    </div> 
                                    <div class="col-sm-6">
                                        <label class="form-label">Post Image</label>
                                        <input type="file" name="post_img" id="file" accept="image/*"> 
                                    </div> 
                                </div>

                                <div class="row clearfix">
                                     
                                    <div class="col-sm-12">
                                        <label class="form-label">Post Description</label>
                                        <textarea rows="40" class="ckeditor" name="post_desc" id="editor">
                                            <?php 
                                                !empty($row['post_desc'])? print $row['post_desc']: print '';
                                            ?>
                                        </textarea> 
                                    </div> 
                                </div> 

                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <label class="form-label">Posted By</label>
                                        <input type="text" class="form-control" name="posted_by" value="<?php !empty($row['posted_by'])? print $row['posted_by']: print '';?>" required> 
                                    </div> 
                                </div>
                                                
                                <button class="btn btn-primary waves-effect" type="submit" name="update_post"> Update Post </button>
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

window.URL = window.URL || window.webkitURL || window.mozURL;
document.getElementById('file').onchange = function() {
    var url = URL.createObjectURL(this.files[0]);
    console.log(url);
    document.getElementById('preview').src = url;
};

$(document).ready(function(){

    $("#category_id").change(function(){

        var cate_id = $("#category_id").val();

        $.ajax({

            type: "POST",
            url: "http://droidfeat.com/droidfeat_admin/system/api/sub_category.php",
            data: {
                "cate_id": cate_id
            },
            success: function(data) {

                $("#div_sub_category_2").html(data);
            }
        });
    });
});
</script>