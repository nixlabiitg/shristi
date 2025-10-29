<nav class="navbar">
    <div class="container-fluid">

        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>

            <!-- Logo -->
            <a href="dashboard">
                <img src="images/logo/logo-dark.png" width="60" height="60" alt="User" />
            </a>

            <!-- Title -->
            <a href="dashboard" style="color: white;">Shristi International Societty</a>
        </div>


        <!-- ✅ RIGHT SIDE (Search + Bell) -->
        <ul class="nav navbar-nav navbar-right d-flex align-items-center">

            <!-- Search -->
            <li style="padding:10px;">
                <input type="text" class="form-control" placeholder="Search..." 
                       style="height: 35px; min-width: 200px;">
            </li>

            <!-- Bell -->
            <li style="padding-right:15px;">
                <a href="javascript:void(0);" style="position:relative;">
                    <i class="bi bi-bell fs-4 text-white"></i>
                    <span class="badge bg-danger" 
                          style="position:absolute; top:0; right:-5px; font-size:10px;">3</span>
                </a>
            </li>

        </ul>

    </div>
</nav>

<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                   <i class="bi bi-person-circle" style="color: white; font-size: 50px;"></i>
                </div>
                <div class="info-container">
                    <div class="name" aria-expanded="false">Admin</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <?php include('includes/menu.php'); ?>
            <!-- #Menu -->
            <!-- Footer -->
            
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

        <!-- Right Sidebar -->
        <?php include('includes/right_sidebar.php'); ?>
        <!-- #END# Right Sidebar -->

    </section>
