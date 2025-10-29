<?php

//Include header page
require_once('lib/header.php');

//If sub_category_id is present
if (!empty($_GET['sub_category_id'])) {
    
    //Database Connection Open
    $conn = new Connection();
    $con  = $conn->Open();

    if ($con) {

        $post_retr_sql = "select * from `sub_category` where `sub_cate_id`=:sub_cate_id1";

        $pre = $con->prepare($post_retr_sql);

        $pre->bindParam(':sub_cate_id1', $_GET['sub_category_id']);

        if($pre->execute())
            $row = $pre->fetch(PDO::FETCH_ASSOC);
        //End of data retrive
    }

    //Close Database Connection
    $conn->Close();
}

//If update_sub_category button click
if (isset($_POST['update_sub_category'])) {
  
    //Include dynamic_func page function
    require_once('lib/dynamic_func.php');

    if (update_sub_category($_POST['cate_id'], $_GET['sub_category_id'], $_POST['sub_cate_name']))
        print "<script>window.location.href='all_sub_category.php'</script>";
    else
        $msg = "Something wrong while updating";
}
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Sub-Category</h2>
            </div>
           <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: right;">
                                <a href="sub_category.php">Add Sub-Category</a> 
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
                                        <select class="form-control" name="cate_id" required>
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
                                    <div class="col-sm-6">
                                    </div>
                                </div> 
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label class="form-label">Sub-Category</label>
                                        <input type="text" class="form-control" value="<?php !empty($row['sub_cate_name'])? print $row['sub_cate_name']: print '';?>" name="sub_cate_name" required />
                                    </div>
                                    <div class="col-sm-6"></div>
                                </div>
                                                
                                <button class="btn btn-primary waves-effect" type="submit" name="update_sub_category"> Update Sub-Category </button>
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