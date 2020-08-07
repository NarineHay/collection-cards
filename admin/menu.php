   <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="../image/hokey1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" class="simple-text logo-mini">
                        Ct
                    </a>
                    <a href="" class="simple-text logo-normal">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="../test/index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                 
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                            <i class="nc-icon nc-notes"></i>
                            <p>
                                Forms
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="formsExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="../test/regular.php">
                                        <span class="sidebar-mini">Rf</span>
                                        <span class="sidebar-normal">Regular Forms</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="../base_checklist/add_base_checklist.php">
                                        <span class="sidebar-mini">BCH</span>
                                        <span class="sidebar-normal">Add Base Checklist</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>
                                Tables
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="tablesExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="../test/regular-table.php">
                                        <span class="sidebar-mini">RT</span>
                                        <span class="sidebar-normal">Regular Tables</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="../test/extended.php">
                                        <span class="sidebar-mini">ET</span>
                                        <span class="sidebar-normal">Extended Tables</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="../test/bootstrap-table.php">
                                        <span class="sidebar-mini">BT</span>
                                        <span class="sidebar-normal">Bootstrap Table</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="../test/datatables.net.php">
                                        <span class="sidebar-mini">DT</span>
                                        <span class="sidebar-normal">DataTables.net</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="../base_checklist/base_checklist.php">
                                        <span class="sidebar-mini">BCH</span>
                                        <span class="sidebar-normal">Base Checklist</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="../base_checklist/sport_type.php">
                                        <span class="sidebar-mini">ST</span>
                                        <span class="sidebar-normal">Sport Type</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="../banner/banner.php">
                                        <span class="sidebar-mini">B</span>
                                        <span class="sidebar-normal">Banner</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?out">
                            <i class="nc-icon nc-button-power"></i>
                            <p>
                               Log Out
                                
                            </p>
                        </a>
                        <!--<div class="collapse " id="pagesExamples">-->
                        <!--    <ul class="nav">-->
                        <!--        <li class="nav-item ">-->
                        <!--            <a class="nav-link" href="../login/login.php">-->
                        <!--                <span class="sidebar-mini">LP</span>-->
                        <!--                <span class="sidebar-normal">Login Page</span>-->
                        <!--            </a>-->
                        <!--        </li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon d-none d-lg-block">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo"> Dashboard PRO </a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
             <!--        <div class="collapse navbar-collapse justify-content-end">
                        <ul class="nav navbar-nav mr-auto">
                            <form class="navbar-form navbar-left navbar-search-form" role="search">
                                <div class="input-group">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Create New Post</a>
                                    <a class="dropdown-item" href="#">Manage Something</a>
                                    <a class="dropdown-item" href="#">Do Nothing</a>
                                    <a class="dropdown-item" href="#">Submit to live</a>
                                    <li class="divider"></li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </ul>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Notification 5</a>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="https://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="nc-icon nc-bullet-list-67"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">
                                        <i class="nc-icon nc-email-85"></i> Messages
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="nc-icon nc-umbrella-13"></i> Help Center
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="nc-icon nc-settings-90"></i> Settings
                                    </a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="nc-icon nc-lock-circle-open"></i> Lock Screen
                                    </a>
                                    <a href="#" class="dropdown-item text-danger">
                                        <i class="nc-icon nc-button-power"></i> Log out
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </nav>
            <?php
            if(isset($_GET['out'])){
                unset($_SESSION['login']);
                ?>
                <script> 
                location.href="../index.php"
               </script>
                <?php
            }
            
            
            ?>