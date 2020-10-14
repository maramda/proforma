<?php
session_start();
if (empty($_SESSION['id'])) {
header('Location:login.php');
}else{
?>
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/projects-create.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2020 15:46:42 GMT -->
<head>
        <meta charset="utf-8" />
        <title>demande formation </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <!-- dropzone css -->
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
            <?php include("includes/header.php") ?>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <?php include("includes/sidebar.php") ?>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18"> demande formation </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Proforma</a></li>
                                            <li class="breadcrumb-item active"> demande formation </li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Ajouter demande formation </h4>
                                        
                                        

		
                                        <form action="Controller/AjoutDemandeformation.php" method="post">
                                        
                     
									
                                        <span class="input-group-addon"><i class="fa fa-city"></i></span>
                                     <select name="theme" class="form-control" required="required" >
                                        <option value="santé et sécurité au travail">Santé et sécurité au travail</option>
                                        <option value="hygiene">Hygiéne</option>
                                        <option value="electricité">Electricité</option>
                                        <option value="soudage">Soudage</option>
                                        <option value="levage">Levage</option>
                                        <option value="Production">Production</option>
                                        <option value="environnement">Environnement</option>
                                        <option value="comptabilité et finance">Comptabilité et finance</option>
                                        <option value="instrumentation & regulation industrielle">Instrumentation & regulation industrielle</option>
                                        <option value="la formation">La formation</option>
                                        <option value="la gestion des ressources humaine">La gestion des ressources humaine</option>
                                        <option value="marketing et technique commerciale">Marketing et technique commerciale</option>
                                        <option value="achat approvisionnement et gestion de stock">Achat approvisionnement et gestion de stock</option>
                                        <option value="management">Management</option>
                                        <option value="logistique et commerce international">Logistique et commerce international</option>
                                        <option value="habillement et textile">Habillement et textile</option>
                                        <option value="informatique">Informatique</option>
                                        <option value="langues etrangeres">Langues étrangères</option>
                                    </select>
                                    </div>
                                        
                                    <div class="form-group">
                                         <input type="date" class="form-control" id="date" name="date"  placeholder="" >        
                                   </div>

                                   <div class="form-group">
                                      <label for="code">Code</label>
                                      <input type="code" class="form-control" id="code" name="code"  placeholder="Saisissez le code de formation" >        
                                  </div>

                                   <div class="mt-4">
                                      <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Ajouter</button>
                                  </div>					
		                       </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
            <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                 
                <!-- End Page-content -->

                
                <?php include("includes/footer2.php") ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- bootstrap datepicker -->
        <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

        <!-- dropzone plugin -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/projects-create.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Feb 2020 15:46:43 GMT -->
</html>
<?php } ?>