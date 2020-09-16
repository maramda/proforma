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
        <title>Ajouter Etudiant </title>
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
                                    <h4 class="mb-0 font-size-18">Ajouter Etudiant </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">proforma2</a></li>
                                            <li class="breadcrumb-item active">Ajouter Etudiant </li>
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
                                        <h4 class="card-title mb-4">Ajouter Etudiant </h4>
                                        
                                        

		
    <form action="Controller/ajouteretudiant.php" method="post">
                     
									
            
                                        
                
            <div class="form-group">
                <label for="nom">Nom </label>
                <input type="text" class="form-control" id="nom"  name="nom" 
                placeholder="Saisissez votre nom " >
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom"  
                placeholder="Saisissez votre prenom" >        
            </div>

            <div class="form-group">
                <label for="tel">Téléphone</label>
                <input type="number" class="form-control" id="tel" name="tel"  
                placeholder="Saisissez votre téléphone" >        
            </div>
            
            <div class="form-group">
                <label for="date_nas">Date de naissance</label>
                <input type="date" class="form-control" id="date_nas" name="date_nas"  
                 >        
            </div>

            <div class="form-group">
                <label for="lieunas">Lieu de naissance</label>
                <input type="text" class="form-control" id="lieunas" name="lieunas"  
                placeholder="Saisissez votre lieu de naissance" >        
            </div>
            <div class="from-group">
                <label for="region">Region :</label>
                     <select name="region" id="region">
                          <option value="bizerte">Bizerte</option>
                          <option value="beja">Beja</option>
                          <option value="Jendouba">Jendouba</option>
                          <option value="tunis">Tunis</option>
                          <option value="nabeul">Nabeul</option>
                          <option value="zaghouane">Zaghouane</option>
                          <option value="siliana">Siliana</option>
                          <option value="kef">Kef</option>
                          <option value="sousse">Sousse</option>
                          <option value="kairouan">Kairouan</option>
                          <option value="gasrine">Gasrine</option>
                          <option value="monastir">Monastir</option>
                          <option value="mahdia">Mahdia</option>
                          <option value="sfax">Sfax</option>
                          <option value="sidi bouzid">Sidi Bouzid</option>
                          <option value="gafsa">Gafsa</option>
                          <option value="gabes">Gabes</option>
                          <option value="tozeur">Tozeur</option>
                          <option value="Jerba">Jerba</option>
                          <option value="medenine">Medenine</option>
                          <option value="kebili">Kebili</option>
                          <option value="tataouine">Tataouine</option>
                     </select>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse"  
                placeholder="Saisissez votre adresse" >        
            </div>

            <div class="form-group">
                <label for="niveaudetude">Niveau d'étude</label>
                <input type="text" class="form-control" id="niveaudetude" name="niveaudetude"  
                placeholder="Saisissez votre niveau d'étude" >        
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" 
                placeholder="Saisissez votre Email" >        
            </div>
            
            <div class="form-group">
                <label for="sexe">Sexe :</label>
                <input type="radio" name="sexe" value="homme" id="homme" /> 
                <label for="homme">Etre homme</label>
                <input type="radio" name="sexe" value="femme" id="femme" />
                <label for="femme">Etre femme</label>
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