<!-- Layout wrapper-->
<div id="layoutDrawer">
    <!-- Layout navigation-->
    <div id="layoutDrawer_nav">
        <nav class="drawer accordion drawer-light bg-white" id="drawerAccordion">
            <div class="drawer-menu">
                <div class="nav">
                    <div class="drawer-menu-heading">Home</div>
                    <a class="nav-link" href="index.php">
                        <div class="nav-link-icon"><i class="material-icons">home</i></div>
                        Home
                    </a>
                    <!-- Divider-->
                    <div class="drawer-menu-divider"></div>
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseReports2" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="nav-link-icon"><i class="material-icons">dashboard</i></div>
                        Link
                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                    </a>
                    <div class="collapse" id="collapseReports2" aria-labelledby="headingOne" data-bs-parent="#drawerAccordion">
                        <nav class="drawer-menu-nested nav">
                            <a class="nav-link" href="layout-dark.html">Item 1</a>
                            <a class="nav-link" href="layout-light.html">Item 2</a>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- USER LOG-->
            <div class="drawer-footer border-top">
                <div class="d-flex align-items-center">
                    <img style="width: 3rem;" src="assets/image/mcolor.png" alt="">
                    <div class="ms-3">
                        <div class="caption">Logged in as:</div>
                        <!--<div class="small fw-500"><?php echo $_SESSION['user_name']; ?></div>-->
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Layout content-->
    <div id="layoutDrawer_content">
        <!-- Main page content-->
        <main>
            <!-- Main dashboard content-->