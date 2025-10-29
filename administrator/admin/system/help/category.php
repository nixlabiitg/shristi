<?php

//Include header page
require_once('lib/header.php');

//If add_category button click
if (isset($_POST['add_category'])) {
  
    //Include dynamic page function
    require_once('lib/dynamic_func.php');

    if (add_category($_POST['category']) == "2")
        $msg = "Category has been added successfully.";
    else if (add_category($_POST['category']) == "5")
        $msg = "Category already registered.";
    else
        $msg = "Something wrong while registering";
}
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Category</h2>
            </div>
           <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: right;">
                                <a href="all_category.php">All Category</a> 
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
                            <form id="form_validate" method="POST" autocomplete="off">

                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label class="form-label">Category</label>
                                        <input type="text" class="form-control" name="category" required>
                                    </div> 
                                    <div class="col-sm-6">
                                    </div> 
                                </div>
                                                
                                <button class="btn btn-primary waves-effect" type="submit" name="add_category">Add Category</button>
                            
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