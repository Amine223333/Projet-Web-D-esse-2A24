<?php
  
  include_once 'C:/xampp/htdocs/temp/Model/produit.php';
    include_once '../Controller/produitC.php';
   

    $error = "";

    $produit = null;

    $produitC = new produitC();
  

	$listeproduit=$produitC->afficherproduit(); 



    


    
?>

<?php
    include_once 'C:/xampp/htdocs/temp/Model/produit.php';
    include_once 'C:/xampp/htdocs/temp/Controller/produitC.php';

    $error = "";

    // create product
    $produit = null;

    // create an instance of the controller
    $produitC = new produitC();
  

	

    if (
        isset($_POST["id_produit"]) &&
		isset($_POST["nom_produit"]) &&
        isset($_POST["prix_produit"])&& 
        isset($_POST["quantite_produit"])

    ) {
        if (
           
			!empty($_POST["id_produit"]) &&
            !empty($_POST["nom_produit"]) &&
            !empty($_POST["prix_produit"]) && 
            !empty($_POST["quantite_produit"])
        ) {
            $produit = new produit(
            $_POST["id_produit"],
            $_POST["nom_produit"],
            $_POST["prix_produit"],
            $_POST["quantite_produit"]

            );
            $produitC->ajouterproduit($produit);
            header('Location:gestion_des_produits.php');
        }
        else
            $error = "Missing information";
    }


    
?>




<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Déesse</title>
    <link rel="canonical" href="http://localhost/temp/View/deesse.php" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                       
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/ouss1.png" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Oussama</span></a>
                        </li>
                        
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="http://localhost/temp/View/index.html"
                                class="btn d-grid btn-danger text-white" target="_blank">
                                Déesse</a>
                        </li>
                        <li class="sidebar-item pt-2">
                            
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.html"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion des utlisateurs</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">gestion des evenements</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.html"
                                aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion de commantaires </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-google.html"
                                aria-expanded="false">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion de commandes</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.html"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion de produits</span>
                            </a>
                        </li>
                    
                       
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                   
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <h5 class="m-b-10">Gestion de produits</h5>
                            <div class="white-box">
                                <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/mk2.jpeg"> 
                                            
                                           
                                        
                                    
                                </div>
                                    
                                
                            </div>
                        </div>
                        
                    <!-- Column -->
                    <!-- Column -->
                    
                                    
                                <div class="card-block">
                                                    <div id="error">
                                                        <?php echo $error; ?>
                                                    </div>
                                                    <form action=""     class="form-material" method="POST" >
                                                   
                                                    <div class="form-group form-default">
                                                                <input type="number" name="id_produit" id="id_produit"   class="form-control" required="">
                                                                                                                                <label class="float-label">Id</label>

<span class="form-bar"></span>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="text"  id="nom_produit" name="nom_produit"  class="form-control"required="">
                                                                                                                               <label class="float-label">Nom</label>

 <span class="form-bar"></span>
                                                            </div>
                                                          
                                                            <div class="form-group form-default">
                                                                <input type="number" id="prix_produit" name="prix_produit" class="form-control" required="">
                                                                                                                                <label class="float-label">Prix</label>

<span class="form-bar"></span>
                                                            </div>
                                                            <div class="form-group form-default">
                                                                <input type="number"  id="quantite_produit" name="quantite_produit"  class="form-control"required="">
                                                                                                                                <label class="float-label">Quantite</label>
                                                                                                                                
<span class="form-bar"></span>
                                                            </div>
                                                            <input type="submit" value="Ajouter">
                                                           
                        
                     
                                                        </form>





                                                        <td>
                                                                <form method="POST" action="Ajout_categorie.php">
                                                                    <input class="sidebar-link waves-effect waves-dark sidebar-link" type="submit" name="Cathegorie" value="Cathegorie">
                                                                    
                                                                </form>
                                                            </td>
                                                    </div>
                                    
                                    
                                      
                                    
                                    
                                  
                                    <div class="table-responsive">
                                       
                                                  <table class="table table-hover">
                                         <thead>
                                                <tr>
                                                    <td> ID</td>
                                                    <td>NOM</td>
                                                    <td>PRIX</td>
                                                    <td>QUANTITE</td>
                                                    <td>Modifier</td>
                                                    <td>Supprimer</td>
                                                </tr>
                                         </thead>
                                         <tbody>
                                         <?php
                                                            foreach($listeproduit as $produit){
                                                           
                                                        ?>
                                                        <tr>
                                                            <td>
                                                            <?php echo $produit['id_produit']; ?>
                                                             </td>
                                                            <td>
                                                            <?php echo $produit['nom_produit']; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $produit['prix_produit']; ?>
                                                            </td>
                                                            <td>
                                                            <?php echo $produit['quantite_produit']; ?>
                                                            </td>
                                                        
                                                           
                                                            <td>
                                                                <form method="POST" action="Modifier_produit.php">
                                                                    <input class="btn btn-warning waves-effect waves-light" type="submit" name="Modifier" value="Modifier">
                                                                    <input type="hidden" value=<?PHP echo $produit['id_produit']; ?> name="id_produit">
                                                                </form>
                                                            </td>
                                                            
                                                            <td>
                                                                <a  href="Supprimer_produit.php?id_produit=<?php echo $produit['id_produit']; ?>">  <input class="btn btn-danger waves-effect waves-light" type="submit" value="Supprimer"></a>
                                                            </td>
                                                           
                                                        </tr>
                                                        </tbody>
                                                    <?php } ?>

                                                </table>
                                             
                                                </div>
                                                    
                                                
                                                
                                                           
                                                        </div>
                                                    </div>
                                                    <!-- Main-body end -->
                                                    <div id="styleSelector">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">  <a
                    href="https://www.wrappixel.com/"></a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>




    
                        
                        
</body>

</html>