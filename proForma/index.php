<?php
include("includes/connect.php");
$req = $bdd->query("SELECT * FROM info");
$donnees = $req->fetch();
$req2 = $bdd->query("SELECT * FROM actualite");
$req3 = $bdd->query("SELECT * FROM formation");
$req4 = $bdd->query("SELECT * FROM info");

 ?>
<!doctype html>
<html class="no-js" lang="en">
    

<!-- Mirrored from goota8517.gootapps.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 00:47:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <!-- ==============================================
        Title and basic Meta Tags
        =============================================== -->
        <meta charset="utf-8">
        <meta https-equiv="x-ua-compatible" content="ie=edge">
        <title>HI! I AM GooTA</title>
		<meta name="description" content="GooTA">
		<meta name="keywords" content="GooTA">
		<meta name="author" content="cmsden">
		<link rel="shortcut icon" type="image/jpg" href="images/336976.png">
      

        <!-- ==============================================
        Mobile Metas
        =============================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" type="image/jpg" href="images/336976.png">
        <link rel="apple-touch-icon" type="image/jpg" href="images/336976.png">
        <link rel="apple-touch-icon" sizes="72x72" type="image/jpg" href="images/336976.png">
        <link rel="apple-touch-icon" sizes="114x114" type="image/jpg" href="images/336976.png">

        <!-- ==============================================
        Fonts
        =============================================== -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro%7cPT+Sans:300,400,600' rel='stylesheet' type='text/css'>

        <!-- ==============================================
        CSS
        =============================================== -->

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
                <!-- <a class="navbar-brand" href="#page-top"><img src="images/logo.png" class="img-responsive" alt="logo" />
                    <div class="logo-title"></div>
                </a>-->

                <!-- Logo end -->
            </div>
    
            <!-- Navigation links -->
            <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#section-home" class="page-scroll">Acceuil</a></li>
					                    <li><a class="page-scroll" href="#section-about">A propos</a></li>
                                        <li><a class="page-scroll" href="#section-actualite">Actualité</a></li>
                                        <li><a class="page-scroll" href="#section-etudiant">Etudiant</a></li>
                                        <li><a class="page-scroll" href="#section-testimonial">Entreprise</a></li>
                                        <li><a class="page-scroll" href="#section-formateur">Formateur</a></li>
                                        <li><a class="page-scroll" href="#formation">Formation</a></li>
                                       <!-- <li><button type="button" class="btn btn-success btn-lg">
                                        <a  href="signup.php">Inscription</a>
                                        </button></li>-->

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
                            <span>I'm </span>
                            <span class="cd-words-wrapper">
                                <b class="is-visible"><?php echo $donnees['nom']; ?></b>
                                <b>a web designer.</b>
                                <b>a Graphics Designer.</b>
								<b>a Brand Creator.</b>                            </span>  </h1>
                        <!-- type headline end -->
                        <!-- header social icon start -->
						<div class="footer-link text-center">
                        <ul class="list-inline goo-social-icon">
                             							<li><a href="https://www.facebook.com/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>                             							<li><a href="https://twitter.com/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> 							
							                            <li><a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>                             							<li><a href="http://linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>                                                     </ul>
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
                      <h2>ProForma</h2>

<!--<h4>Full-Stack Web Developer</h4>-->

<p>Proforma est un centre de formation professionnelle privé et agrée par le Ministère de la formation professionnelle et de l'emploi.</p>

<p>Proforma est un leader reconnu dans le domaine de la formation professionnelle en Tunisie, sa vocation est de vous garantir une formation de qualité et des compétences acquises.</p>
 
					   </div>
                </div>
                <div class="col-md-5">
                    <div class="profile"> 
                        <img src="images/about/1494755501.jpg" alt="profile img" class="img-responsive"></div>
                </div>
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
                         <img src="<?php echo $donnees2['img']; ?>" class="img-responsive" alt="services-image">  </div>

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

     <!-- start portfolio area -->
	   <!--  <section id="section-portfolio" class="work section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-heading">
                        <h2>PORTFOLIO</h2>
                    </div>
                </div>
            </div>
           			
            <div class="work-inner">
                <div class="row work-posts">-->
                    <!-- single work area-->
					                   <!-- <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/1494839551.jpg" class="work-popup">
                                <img src="images/portfolio/1494839551.jpg" alt="">
                                <div class="portfolio-caption">
                                    <h4>photography</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->
					                   <!-- <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/1494840661.jpg" class="work-popup">
                                <img src="images/portfolio/1494840661.jpg" alt="">
                                <div class="portfolio-caption">
                                    <h4>graphics</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->
					                 <!--   <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/1514120121.jpg" class="work-popup">
                                <img src="images/portfolio/1514120121.jpg" alt="">
                                <div class="portfolio-caption">
                                    <h4>Creative kids</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->
															
               <!-- </div>
            </div>
        </div>
    </section>-->
	    <!-- / end start work area -->


  <!--  section services start -->
  <section id="section-etudiant" class="section-padding">
  
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><p>Etudiant</p>
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
                              
                                <form action="Controller/AjoutContact.php" method="POST" class="form-padding">
                                <div class="col-md-6">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="nom"  class="form-control" required="required" placeholder="Entrez Votre Nom">
										<!--<input type="hidden" name="fromemail" value="info@yourdomain.com"> --> 
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="prenom"  class="form-control" required="required" placeholder="Entrez Votre Prénom">
										<!--<input type="hidden" name="fromemail" value="info@yourdomain.com"> --> 
										<strong><strong class='text-danger'></strong></strong>
                                    </div>

                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="tel" name="tel"  class="form-control" required="required" placeholder="Entrez Votre Numéro ">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="date" name="date_nas"  class="form-control" required="required" placeholder="">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="lieunas"  class="form-control" required="required" placeholder="Entrez Votre Lieu De Naissance">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <select name="region"  class="form-control" required="required">
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
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="adresse"  class="form-control" required="required" placeholder="Entrez Votre Adresse">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="niveaudetude"  class="form-control" required="required" placeholder="Entrez Votre Niveau D'étude">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" name="email"  class="form-control" required="required" placeholder="Email Address">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <label >Sexe :</label>
                                        Homme <input type="radio" value="homme"> Femme <input type="radio" value="femme"> 
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" >Envoyer</button>
                                </form>
                            </div>
                        </div>
            <!--  row end -->
        </div>
        <!--  container end -->
    </section>

   <!-- Section testimonial start -->
   <section id="section-testimonial" class="parallax1">
	  <div class="background-overlay black"></div>
      <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><p>Entreprise</p>
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
                              
                                <form action="Controller/AjoutContact.php" method="POST" class="form-padding">
                                <div class="col-md-6">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="nome"  class="form-control" required="required" placeholder="Entrez Votre Nom">
										<!--<input type="hidden" name="fromemail" value="info@yourdomain.com"> --> 
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="responsable"  class="form-control" required="required" placeholder="Entrez Nom De Responsable">
										<!--<input type="hidden" name="fromemail" value="info@yourdomain.com"> --> 
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="tel" name="tel"  class="form-control" required="required" placeholder="Entrez Votre Numéro ">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="tel" name="code_fiscale"  class="form-control" required="required" placeholder="Entrez Votre Code Fiscale ">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="tel" name="code_postal"  class="form-control" required="required" placeholder="Entrez Votre Code Postal ">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="adresse"  class="form-control" required="required" placeholder="Entrez Votre Adresse">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="tel" name="fax"  class="form-control" required="required" placeholder="Entrez Votre Fax ">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                    
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" name="email"  class="form-control" required="required" placeholder="Email Address">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="url" name="fax"  class="form-control" required="required" placeholder="Entrez Votre Site Web ">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    </di>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" >Envoyer</button>
                                </form>
                            </div>
                        </div>
            <!--  row end -->
        </div>
        <!--  container end -->
        </div>
        <!-- container end -->
    </section>
	    <!-- section testimonial end -->
    

<!--  section services start -->
<section id="section-testimonial" class="section-padding">
  
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
                        
                          <form action="Controller/AjoutContact.php" method="POST" class="form-padding">
                              <div class="input-group form-group">
                                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                  <input type="text" name="name"  class="form-control" required="required" placeholder="Full Name">
                                  <!--<input type="hidden" name="fromemail" value="info@yourdomain.com"> --> 
                                  <strong><strong class='text-danger'></strong></strong>
                              </div>
                              <div class="input-group form-group">
                                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                  <input type="text" name="email"  class="form-control" required="required" placeholder="Email Address">
                                  <strong><strong class='text-danger'></strong></strong>
                              </div>
                              <div class="input-group form-group">
                                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                  <input type="tel" name="tel"  class="form-control" required="required" placeholder="phone">
                                  <strong><strong class='text-danger'></strong></strong>
                              </div>
                              <div class="form-group">
                                  <textarea id="message" name="msg" cols="30" rows="5" class="textarea-block form-control" placeholder="MESSAGE" required="required"></textarea>
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


   <!-- Section testimonial start -->
   <div id="formation">
   <section id="section-testimonial" class="parallax1">
	  <div class=""></div>
      <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2><p>Formation</p>
</h2> </div>
                </div>
            </div>
            <!--  row end -->
            <section id="section-portfolio" class="work section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="scection-heading">
                        <h2>Nos Thèmes</h2>
                    </div>
                </div>
            </div>
           			
            <div class="work-inner">
                <div class="row work-posts">
                    <!-- single work area-->
					                   <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/sant.png" class="work-popup">
                                <img src="images/portfolio/sant.png" alt="">
                                <div class="portfolio-caption">
                                    <h4>Santé et Sécurité au travail</h4>
                                </div>
                            </a>                        </div>
                    </div>
                    <!-- end single work area -->
					                   <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/hy.png" class="work-popup">
                                <img src="images/portfolio/hy.png" alt="">
                                <div class="portfolio-caption">
                                    <h4>Hygiéne</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/el.png" class="work-popup">
                                <img src="images/portfolio/el.png" alt="">
                                <div class="portfolio-caption">
                                    <h4>Electricité</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/s.png" class="work-popup">
                                <img src="images/portfolio/s.png" alt="">
                                <div class="portfolio-caption">
                                    <h4>Soudage</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/le.png" class="work-popup">
                                <img src="images/portfolio/le.png" alt="">
                                <div class="portfolio-caption">
                                    <h4>Levage</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/pr.png" class="work-popup">
                                <img src="images/portfolio/pr.png" alt="">
                                <div class="portfolio-caption">
                                    <h4>Production</h4>
                                </div>
                            </a>                        </div>
                    </div>
                     <!-- end single work area -->
                     <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/reg.png" class="work-popup">
                                <img src="images/portfolio/reg.png" alt="">
                                <div class="portfolio-caption">
                                    <h4>Instrumentation & regulation industrielle</h4>
                                </div>
                            </a>                        </div>
                    </div>
                   
                     <!-- end single work area -->
                     <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/en.png" class="work-popup">
                                <img src="images/portfolio/en.png" alt="">
                                <div class="portfolio-caption">
                                    <h4>Environnement</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/forma.jpg" class="work-popup">
                                <img src="images/portfolio/forma.jpg" alt="">
                                <div class="portfolio-caption">
                                    <h4>La Formation</h4>
                                </div>
                            </a>                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/cf.png" class="work-popup">
                                <img src="images/portfolio/cf.png" alt="">
                                <div class="portfolio-caption">
                                    <h4>Comptabilité et Finance</h4>
                                </div>
                            </a>                        </div>
                    </div>
                     <!-- end single work area -->
                     <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/li.png" class="work-popup">
                                <img src="images/portfolio/li.png" alt="">
                                <div class="portfolio-caption">
                                    <h4>Logistique et Commerce International</h4>
                                </div>
                            </a>                        </div>
                    </div>
                    
                    <!-- end single work area -->
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/make.jpg" class="work-popup">
                                <img src="images/portfolio/make.jpg" alt="">
                                <div class="portfolio-caption">
                                    <h4>Marketing et technique commerciale</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/gs.png" class="work-popup">
                                <img src="images/portfolio/gs.png" alt="">
                                <div class="portfolio-caption">
                                    <h4>Achat approvisionnement et Gestion de stock</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/mn.jpg" class="work-popup">
                                <img src="images/portfolio/mn.jpg" alt="">
                                <div class="portfolio-caption">
                                    <h4>Management</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                   <!-- end single work area -->
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/grh.jpg" class="work-popup">
                                <img src="images/portfolio/grh.jpg" alt="">
                                <div class="portfolio-caption">
                                    <h4>La gestion des ressources humaine</h4>
                                </div>
                            </a>                        </div>
                    </div>
                    <!-- end single work area -->
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/ht.jpg" class="work-popup">
                                <img src="images/portfolio/ht.jpg" alt="">
                                <div class="portfolio-caption">
                                    <h4>Habillement et Textille</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/inf.png" class="work-popup">
                                <img src="images/portfolio/inf.png" alt="">
                                <div class="portfolio-caption">
                                    <h4>Informatique</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->
                    <div class="col-md-4 col-sm-4 mix web graphics development">
                        <div class="item">
                            <a href="images/portfolio/langue.jpg" class="work-popup">
                                <img src="images/portfolio/langue.jpg" alt="">
                                <div class="portfolio-caption">
                                    <h4>Langues étrangères</h4>
                                </div>
                            </a>                        </div>
                    </div>-->
                    <!-- end single work area -->

					                 
															
               </div>
            </div>
        </div>
    </section>
	    <!-- / end start work area -->
            
                              
                                <!--<form action="Controller/AjoutContact.php" method="POST" class="form-padding">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="name"  class="form-control" required="required" placeholder="Full Name">
										<!-<input type="hidden" name="fromemail" value="info@yourdomain.com">-> 
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" name="email"  class="form-control" required="required" placeholder="Email Address">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="tel" name="tel"  class="form-control" required="required" placeholder="phone">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="message" name="msg" cols="30" rows="5" class="textarea-block form-control" placeholder="MESSAGE" required="required"></textarea>
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" >Send</button>
                                </form> --->
                            </div>
                        </div>
            <!--  row end -->
        </div>
        <!--  container end -->
        </div>
        <!-- container end -->
    </section>
	    <!-- section testimonial end -->
    




    <!-- section contact start -->
	

  

    <!-- section blog start -->
	    <section id="section-premium" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="feature-heading text-center">
                        <h2><p>LATEST BLOG POST</p>
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
                                      <img src="images/blog/1494754937.jpg" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                       <a href="#"> <h4>VARIOUS VERSIONS HAVE EVOLVED</h4></a>      </div>
                                    <!-- blog-content -->
                                    <div class="blog-content">
                                        <span class="blog-info"><a href="#" class="blog-info">Posted by - Admin</a> - <i class="fa fa-clock-o" aria-hidden="true"></i> 24 Dec 2017 </span>
                                        <p><p>It uses a dictionary of over Latin words, combined with a handful of model sentence structures.</p>
</p>
                                    </div>
                                    
                                </div>
                            </div>
							
						
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/1494787325.jpg" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                       <a href="#"> <h4> VARIOUS VERSIONS HAVE EVOLVED</h4></a>      </div>
                                    <!-- blog-content -->
                                    <div class="blog-content">
                                        <span class="blog-info"><a href="#" class="blog-info">Posted by - Admin</a> - <i class="fa fa-clock-o" aria-hidden="true"></i> 24 Dec 2017 </span>
                                        <p><p>It uses a dictionary of over Latin words, combined with a handful of model sentence structures.</p>
</p>
                                    </div>
                                    
                                </div>
                            </div>
							
						
                            <div class="col-md-4 col-sm-12 col-xm-12">
                                
                                <div class="latest-b-post">
                                    <div class="latest-b-image">
                                      <img src="images/blog/1494787358.jpg" class="img-responsive" alt="blog-image"> </div>
                                    <!-- blog-headline -->
                                    <div class="blog-headline">
                                       <a href="#"> <h4> VARIOUS VERSIONS HAVE EVOLVED</h4></a>      </div>
                                    <!-- blog-content -->
                                    <div class="blog-content">
                                        <span class="blog-info"><a href="#" class="blog-info">Posted by - Admin</a> - <i class="fa fa-clock-o" aria-hidden="true"></i> 24 Dec 2017 </span>
                                        <p><p>It uses a dictionary of over Latin words, combined with a handful of model sentence structures.</p>
</p>
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
	
    <!-- section features end -->
    
     <!-- Section testimonial start -->
	      <section id="section-testimonial" class="parallax1">
	  <div class=""></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				<div class="section-heading henry-address">
                        <h2 class="text-center"><p>Nos Partenaires</p></h2> 
                </div>
                <div class="carousel slide" id="testimonial-carousel">
                    <div class="carousel-inner">
                            
						<div class="item active">  
                            <div><img src="images/testimonials/1494668163.jpg" class="img-responsive  img-circle marginAutoLR testimonial-img" alt="testimonials-image"> </div>
                            <h4>Exist</h4>
                            <div><img src="images/testimonials/1494668163.jpg" class="img-responsive  img-circle marginAutoLR testimonial-img" alt="testimonials-image"> </div>
                            <h4>Flasch</h4>
                        </div>
            </p>
                                
                                
 </p>
                                
								<div class="item"> <div> <img src="images/testimonials/1494665984.jpg" class="img-responsive  img-circle marginAutoLR testimonial-img" alt="testimonials-image"> </div>
                                <h4>Yogo</h4>
                                <div> <img src="images/testimonials/1494665984.jpg" class="img-responsive  img-circle marginAutoLR testimonial-img" alt="testimonials-image"> </div>
                                <h4>Batteries Nour</h4>
                               
 
                                <h5> <strong></strong></h5> </div>
								                            <!-- item end -->
							
                        </div>
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
                              
                                <form action="Controller/AjoutContact.php" method="POST" class="form-padding">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="nom"  class="form-control" required="required" placeholder="Entrez Votre Nom">
										<!--<input type="hidden" name="fromemail" value="info@yourdomain.com"> --> 
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" name="email"  class="form-control" required="required" placeholder="Entrez Votre Email">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="tel" name="tel"  class="form-control" required="required" placeholder="Entrez Votre Numéro">
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="message" name="msg" cols="30" rows="5" class="textarea-block form-control" placeholder="MESSAGE" required="required"></textarea>
										<strong><strong class='text-danger'></strong></strong>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" >Envoyer</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 henry-address">
                            <div class="henry-address">
                                <h2>Adresse</h2>
                                
</p>
                            </div>
                            <div class="calling-address">
							<?php while($donnees4 = $req4->fetch()){ ?>
                                <i class="fa fa-phone henry-phone"></i> <span>
                                <?php echo $donnees4['tel']; ?>
                                </span> <br>
                                <i class="fa fa-envelope henry-phone"></i> <span>
                                <?php echo $donnees4['email']; ?>
                                </span> <br>
                                <i class="fa fa-map-marker henry-phone"></i> <span>
                                <?php echo $donnees4['adresse']; ?>
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
							                            <li><a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>                             							<li><a href="http://linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>                                                     </ul>
                        <p class="copy"><span>� Copyright 2020. GooTA - All Rights Reserved.</span></p>
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
