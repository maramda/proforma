<?php
include("includes/connect.php");
$req1 = $bdd->query("SELECT * FROM coordonees");
$req2 = $bdd->query("SELECT * FROM actualite");
$req3 = $bdd->query("SELECT * FROM formation");
$req4 = $bdd->query("SELECT * FROM galerie");
$req5 = $bdd->query("SELECT * FROM utilisateur");
$req6 = $bdd->query("SELECT * FROM formateur");
$donnees2 = $req5->fetch();
 ?>
<!doctype html>
<html class="no-js" lang="en">
    

<!-- Mirrored from goota8517.gootapps.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 00:47:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<style type="text/css" >
.ssmenu{
    width:100px; 
    background-color: 
    rgba(0, 0, 0, 1);
}

}
.blink {
  animation: blink-animation 1s steps(5, start) infinite;
  -webkit-animation: blink-animation 1s steps(5, start) infinite;
}
@keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
@-webkit-keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
     </style>  



<style media="screen" type="text/css">
 #backgroundaudio {
  display: block;
  position: fixed;
  bottom: -43px;
  left: 5px;
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
 }
 #backgroundaudio:hover {
  bottom: 0;
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
 }
 #backgroundaudio audio {
  background: #ffffff;
  padding: 5px;
  display: table-cell;
  vertical-align: middle;
  height: 43px;
  z-index: 9998;
 }
 #backgroundaudio i {
  font-size: 40px;
  display: block;
  background: #ffffff;
  padding: 5px;
  width: 50px;
  float: none;
  margin-bottom: -1px;
  z-index: 9999;
 }
</style>




        <!-- ==============================================
        Title and basic Meta Tags
        =============================================== -->
        <meta charset="utf-8">
        <meta https-equiv="x-ua-compatible" content="ie=edge">
        <title>Acceuil</title>
		<meta name="description" content="ProForma">
		<meta name="keywords" content="ProForma">
		<meta name="author" content="cmsden">
		<link rel="shortcut icon" type="image/jpg" href="images/PF.png">
      

        <!-- ==============================================
        Mobile Metas
        =============================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" type="image/jpg" href="images/Logo.png">
        <link rel="apple-touch-icon" type="image/jpg" href="images/Logo.png">
        <link rel="apple-touch-icon" sizes="72x72" type="image/jpg" href="images/Logo.png">
        <link rel="apple-touch-icon" sizes="114x114" type="image/jpg" href="images/Logo.png">

        <!-- ==============================================
        Fonts
        =============================================== -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro%7cPT+Sans:300,400,600' rel='stylesheet' type='text/css'>





        <!-- Set your favicon -->
        <link rel="icon" href="img/service-ico4.png" type="image/x-icon" />
        <!-- ==============================================
        CSS
        =============================================== -->
         <!-- Stylesheets -->
        
        
        <link rel="stylesheet" href="css2/styles2020.css">
        

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-modal-carousel.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/type.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet"  type='text/css' href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!-- ==============================================
        JS
        =============================================== -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        

    <nav class="navbar navbar-default navbar-fixed-top">
    <!-- Container -->
        <div class="container">
            <!-- Logo and stick navbar -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>   </button>
                <!-- Logo -->
                <a class="navbar-brand" href="#page-top"><img src="images/logo.png" height="50%" width="50%"class="img-responsive" alt="logo" />
                    <div class="logo-title"></div>
                </a>

                <!-- Logo end -->
            </div>
    
            <!-- Navigation links -->
            <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
                
                <ul class="nav navbar-nav">
                    <li class="active"><a href="account.php" class="page-scroll">Compte : </a></li>
					 <li><a class="page-scroll" href="#section-about"><?php echo $donnees2['nom']; ?></a></li>
                                     
                     <li><a class="page-scroll" href="demande.php"> Demander formation</a></li>
                   
                </ul><br>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#section-home" class="page-scroll">Acceuil</a></li>
					                    <li><a class="page-scroll" href="#section-about">A propos</a></li>
                                        <li><a class="page-scroll" href="#section-actualite">Actualité</a></li>
                                        <li><a class="page-scroll" href="#Formations">Formation</a></li>
                                        <li><a class="page-scroll" href="#section-testimonial">Galerie</a></li>
                                        <li><a class="page-scroll" href="#section-formateur">Formateur</a></li>
                                        <li><a class="page-scroll"  href="#section-contact">Contact</a></li>
                                      

                </ul>
            </div><!-- End navigation links -->
        </div> 
        <!-- End container -->
    </nav>


    <!-- section -banner -->
    <div id="section-home" class="section-intro">
        <div class="background-overlay grey"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-caption">
                        <!-- type headline start-->
                        <h1 class="cd-headline clip is-full-width">
                            <span>Proforma</span>
                            <span class="cd-words-wrapper">
                                <b class="is-visible"> <!--<?php echo $donnees1['nom']; ?>--> </b>
                                <b>Un excellent choix de formation</b>
                                <b>Grande flexibilité</b>
								<b>Rejoignez la  bonne formation professionnelle privée </b></span>                            </span>  </h1>
                        <!-- type headline end -->
                        <!-- header social icon start -->
						<div class="footer-link text-center">
                        <ul class="list-inline goo-social-icon">
                             							<li><a href="https://www.facebook.com/proforma.proforma.5/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>                             							<li><a href="https://twitter.com/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> 							
							                            </ul>
						</div>
                        <!-- header media icon end -->
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </div>
    <!-- section banner end -->


   


     <!-- section about start -->
	     <section id="section-about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-wrap">
                      <h2>Qui sommes nous ?</h2>

<p>Proforma est un centre de formation professionnelle privé et agrée par le Ministère de la formation professionnelle et de l'emploi.</p>

<p>Proforma est un leader reconnu dans le domaine de la formation professionnelle en Tunisie, sa vocation est de vous garantir une formation de qualité et des compétences acquises.</p>
 
</div>

<div style="padding:4px; border:4px solid #e0e0e0;">
<div style="padding:3px; background-color:#e0e0e0;">
<strong>Identification et analyse des besoins de formations.</strong>
</div>
</div>
<div style="padding:4px; border:4px solid #e0e0e0;">
<div style="padding:3px; background-color:#e0e0e0;">
<strong>Planification et conception de la formation.</strong>
</div>
</div>
<div style="padding:4px; border:4px solid #e0e0e0;">
<div style="padding:3px; background-color:#e0e0e0;">
<strong>Réalisation de la formation.</strong>
</div>
</div>
<div style="padding:4px; border:4px solid #e0e0e0;">
<div style="padding:3px; background-color:#e0e0e0;">
<strong>Evaluation et suivi post-formation.</strong>
</div>
</div>
					   </div>
                </div>
               <!-- <div class="col-md-5">
                    <div class="profile"> 
                        <img src="images/about/about.jpg" alt="profile img" class="img-responsive"></div>
                </div>-->
            </div>
            <!--  row  end -->
        </div>
        <!--  container end -->
    </section>
	    <!-- section about end -->


















    <!--  section services start -->
	    <section id="section-actualite" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><p>Actualite</p>
</h2> </div>
                </div>
            </div>
            <!--  row end -->
            <div class="row">
            <?php while($donnees2 = $req2->fetch()){ ?>
			                <div class="col-md-3 col-sm-6">
                    <div class="service-box active"> 
					<div class="latest-b-image">
                      
                      <img src="<?php echo $donnees['img']; ?>" class="img-responsive" alt="services-image">  
                    </div>

                    <h4><?php echo $donnees2['titre']; ?></h4>
                    <p><?php echo $donnees2['description']; ?></p>
                    </div>
                </div>

            <?php } ?>
                              
                           </div>
            <!--  row end -->
        </div>
        <!--  container end -->
    </section>
	    <!--  section services end -->



        <section id="Formations">

<!-- Parallax Three -->
<div class="parallax parallax-squares">
    <div class="parallax-overlay"></div><h4>
    <div class="intro-text waypoint-element" style="color:white; font-size:160%" >
            Nos Thémes
            
        </div></h4>
    <div class="row waypoint-element" style="
    margin-left: 20px;
">
        <div class="large-12 columns">


            <div class="square-container">

                
                <a href="Production.php"><div class="square-holder square-nine">
                    <div class="square-content">
                        <img src="img/prod.png"  width="65" height="50">
                        <p style="color:white">Production<br></p>
                    </div>
                </div></a>

                <a href="Achatapprovisionnementetgestiondestock.php"><div class="square-holder square-ten">
                    <div class="square-content">
                        <img src="img/BD.png"  width="65" height="50">
                        <p style="color:white">Achat approvisionnement <br>  et gestion de stock </p>
                    </div>
                </div></a>

                <a href="Soudage.php"><div class="square-holder square-zero">
                    <div class="square-content">
                        <img src="img/soudage.png"  width="80" height="50">
                        <p style="color:white">Soudage</p>
                    </div>
                </div></a>


                <a href="Informatique.php"><div class="square-holder square-one">
                     <div class="square-content">
                        <img src="img/im.png" height="80" width="60" >
                        <p style="color:white">Informatique<br> </p>
                    </div>
                </div></a>
                <a href="Habillementettextille.php"><div class="square-holder square-two">
                    <div class="square-content">
                        <img src="img/textile.png" height="60" width="60" >
                        <p style="color:white"> habillement <br>et textile
                        </p>
                    </div>
                </div></a>
                <a href="GRH.php"><div class="square-holder square-three">
                    <div class="square-content">
                        <img src="img/grh.png" height="60" width="60" >
                        <p style="color:white">Gestion des ressources humaines</p>
                    </div>
                </div></a>
                <a href="Management.php"><div class="square-holder square-four">
                    <div class="square-content">
                        <img src="img/management.png" height="60" width="60" >
                        <p style="color:white">Management</p>
                    </div>
                </div></a>

                <a href="Hygiéne.php"><div class="square-holder square-five">
                    <div class="square-content">
                        <img src="img/hygiene.png" height="70" width="80" >
                        <p style="color:white">Hygiéne </p>
                    </div>
                </div></a>
                <a href="Electricité.php"><div class="square-holder square-six">
                    <div class="square-content">
                        <img src="img/electricite.png" height="55" width="65" >
                        <p style="color:white">Electricité</p>
                    </div>
                </div></a>
                <a href="Laformation.php"><div class="square-holder square-seven">
                    <div class="square-content">
                        <img src="img/pro.png" height="60" width="71" >
                        <p style="color:white">La formation</p>
                    </div>
                </div></a>
                

                <a href="LogistiqueetCommerceInternational.php"><div class="square-holder square-eight">
                    <div class="square-content">
                        <img src="img/logistiqueetcommerceinternational.png"  width="50" height="40">
                        <p style="color:white">Logistique <br> et commerce international</p>
                    </div>
                

            </div>        
        </div>
    </div>
</div>

</section>


        <!--<div id="formation">-->


   <!-- Section testimonial start -->
  <section id="section-testimonial" class="parallax1">
	    <div class=""></div>
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
				       <div class="section-heading henry-address">
                          <h2 class="text-center"><p>Galerie</p></h2> 
                       </div>



         <!-- start services area -->
	  <section id="section-services" class="work section-padding">
               <div class="container">
                        <div class="row">
                             <div class="col-sm-12">
                                 <div class="section-heading">
                                      <h2>Nos photos</h2>
                                 </div>
                             </div>
                        </div>
           			
                   <div class="work-inner">
                     <!--<div class="row work-posts">-->
                        <!-- single work area-->
                 
					   <div class="col-md-4 col-sm-4 mix web graphics development">
                           <div class="item">
            
                              <?php while($donnees4 = $req4->fetch()){ ?>
                               <div class="service-box active">
					                 <div class="latest-b-image">
                                         <img src="<?php echo $donnees4['lien']; ?>" class="img-responsive" alt="">
                                     </div>
                               </div>
                               <!--</div>-->

                              <?php } ?>
                            </div>
                                    
                        </div>
                    </div>
               </div>
           <!--</div>-->
    
       </section>
                          
 
                        
    </section>
	    <!-- section testimonial end -->
    



  
<!--  section services start -->
<section id="section-formateur" class="section-padding">
  
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="section-heading">
                  <h2><p>Formateur</p>
</h2> </div>
          </div>
      </div>
      <!--  row end -->
      <div class="row">
      <div class="col-md-10 col-md-offset-1 henry-contact-form">
              <div class="henry-contact-form">
                  <div class="col-md-7 henry-form">
                      <div class="henry-form-area">
                          <div class="henry-form">
                              <h2>Rejoignez-nous dès maintenant!</h2>
                                                              </div>
                        
                          <form action="Ajouter_formateur.php" method="POST" class="form-padding">
                          
                              <div class="input-group form-group">
                                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                  <input type="text" name="nom"  id="nom" class="form-control" required="required" placeholder="Entrez Votre Nom">
                                 
                                  <strong><strong class='text-danger'></strong></strong>
                              </div>
                             
                              <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" name="adresse" id="adresse" class="form-control" required="required" placeholder="Entrez Votre Adresse">
										<strong><strong class='text-danger'></strong></strong>
                              </div>
                              <div class="input-group form-group">
                                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                  <input type="number" name="tel" id="tel" class="form-control" required="required" placeholder="Entrez Votre Numéro De Téléphone">
                                  <strong><strong class='text-danger'></strong></strong>
                              </div>
                              <div class="input-group form-group">
                                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                  <input type="email" name="email" id="email" class="form-control" required="required" placeholder="Entrez Votre Email ">
                                  <!--<input type="hidden" name="fromemail" value="info@yourdomain.com"> --> 
                                  <strong><strong class='text-danger'></strong></strong>
                              </div>
                              <div class="input-group form-group">
                                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                  <input type="number" name="cin" id="cin" class="form-control" required="required" placeholder="Entrez Votre CIN">
                                  <strong><strong class='text-danger'></strong></strong>
                              </div>
                              
                              <div class="input-group form-group">
                                  <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                  <input type="file" name="cv" id="cv"  class="form-control" required="required" accept="image/png, image/jpeg" placeholder="">
                                  <strong><strong class='text-danger'></strong></strong>
                              </div>
                             
                              <button type="submit" class="btn btn-primary btn-lg btn-block" >Envoyer</button>
                          </form>
                      </div>
                  </div>
      <!--  row end -->
  </div>
  <!--  container end -->
</section>
</div>


  
            <!--  row end -->
            <!--div class="row">
            <?php while($donnees3 = $req3->fetch()){ ?>
			                <div class="col-md-3 col-sm-6">
                    <div class="service-box active"> 
					<div class="latest-b-image">
                         <img src="<?php echo $donnees3['code']; ?>" class="img-responsive" alt="services-image">  </div>

                        <h4><?php echo $donnees3['titre']; ?></h4>
                        <p><?php echo $donnees3['duree']; ?></p>
                    </div>
                </div>

            <?php } ?>
                              
                           </div>-->
        </div>
    </section>
	    <!-- / end start work area -->

    <!-- section blog start -->
	    <section id="section-premium" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="feature-heading text-center">
                        <h2><p>Nos partenaires</p>
</h2> 
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="feature-wrap">
                        <div class="row">
                        <!-- blog start -->
						
					
                        <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/Soretras.jpg" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                        <h4>Soretras</h4>
                                        </div>
                                   
                                    
                                </div>
                            </div>
							
						
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/Flasch.jpg" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                      <h4> Flasch</h4>     </div>
                                    
                                    
                                </div>
                            </div>
							
						
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/Sonotrak.jpg" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                        <h4>Sonotrak </h4>
                                        </div>
                                   
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/GOLDEN_TULIP.jpg" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                        <h4>Golden Tulip </h4>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/topx.jpg" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                        <h4>Topx peintures </h4>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                           
                            
                            
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/POLYCLINIQUE_ERRACHID.jpg" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                        <h4>Polyclinique Errachid </h4>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/export_frigoconfort.jpg" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                        <h4>Export Frigoconfort </h4>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/SCPC.png" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                        <h4>SCPC Chimie </h4>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/SOFPINCE.jpg" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                        <h4>SOFPINCE </h4>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/CERAM.png" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                        <h4>CERAM </h4>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/SOFAP.png" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                        <h4>SOFAP </h4>
                                    </div>
                                   
                                    
                                </div>
                            </div>
							<div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/Hammami_Groupe.png" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                        <h4>Hammami pour le batiment </h4>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/Exist.jpg" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                        <h4>Exist   </h4>
                                    </div>
                                   
                                    
                                </div>
                            
                            </div>
                            
                   <!-- blog end -->
                           
                           
                        </div>
                    </div>
                    <!--  feature wrap end -->
                </div>
                <!--  col end -->
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
	     
    <!--  container end -->
    
                        <!-- caorusel inner end -->
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
						   <li data-target="#testimonial-carousel" data-slide-to="" class="active"></li>
						   <li data-target="#testimonial-carousel" data-slide-to="" ></li>
                       </ol>
                    </div>
					
                    <!-- caorusel slide end -->
                </div>
            </div>
            <!-- Row end -->
        </div>
        <!-- container end -->
    </section>
	    <!-- section testimonial end -->
    
    <!-- section contact start -->
	
    <section id="section-contact" class="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading contact-heading">
                        <h2 class="text-center">Contact</h2> 
                    </div>
                </div>
                <div class="col-md-10 col-md-offset-1 henry-contact-form">
                    <div class="henry-contact-form">
                        <div class="col-md-7 henry-form">
                            <div class="henry-form-area">
                                <div class="henry-form">
                                    <h2>Contactez-nous</h2>
									                                </div>
                              
                                <form action="Ajouter_contact.php" method="POST" class="form-padding">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="nom" id="nom"  class="form-control" required="required" placeholder="Entrez Votre Nom">
										<!--<input type="hidden" name="fromemail" value="info@yourdomain.com"> --> 
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="number" name="telephone" id="telephone" class="form-control" required="required" placeholder="Entrez Votre Numéro">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="mail" id="mail"  class="form-control" required="required" placeholder="Entrez Votre Email">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    
                                    <div class="form-group">
                                        <textarea id="msg" name="msg" cols="30" rows="5" class="textarea-block form-control" placeholder="Message" required="required"></textarea>
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" >Envoyer</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 henry-address">
                            <div class="henry-address">
                                <h2>Adresse</h2>
                            </div>
                            <div class="calling-address">
							<?php while($donnees1 = $req1->fetch()){ ?>
                                <i class="fa fa-phone"></i> <span>
                                <?php echo $donnees1['tel']; ?>
                                </span> <br>
                                <i class="fa fa-fax"></i> <span>
                                <?php echo $donnees1['fax']; ?>
                                </span> <br>
                                <i class="fa fa-phone"></i> <span>
                                <?php echo $donnees1['fixe']; ?>
                                </span> <br>
                                <i class="fa fa-envelope-square"></i> <span>
                                <?php echo $donnees1['email']; ?>
                                </span> <br>
                                <i class="fa fa-map-marker "></i> <span>
                                <?php echo $donnees1['adresse']; ?></span><br>
                                <i class="fa fa-phone "></i> <span>
                                <?php echo $donnees1['code_postal']; ?>
                            <?php } ?>
                            </span>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	    <!-- section contact end -->

    <!-- section footer start -->
   
   <footer id="section-footer">
      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-link text-center">
                    <!-- footer social media -->
                        <ul class="list-inline social-icon">
                        	<li><a href="https://www.facebook.com/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>                             							<li><a href="https://twitter.com/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> 							
                        </ul>
                        <p class="copy"><span>� Copyright 2020. ProForma - All Rights Reserved.</span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- container end -->
    </footer>
    <!-- section footer end -->


       <!-- ==============================================
        JS
        =============================================== -->

        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/type-headline.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
		
			
    </body>


<!-- Mirrored from goota8517.gootapps.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 00:48:03 GMT -->
</html>

