<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Logueo DQ</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="\vendors\iconic-fonts\flat-icons\flaticon.css">
  <link href="\vendorss\iconic-fonts\font-awesome\css\all.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="\assets\css\bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="\assets\css\jquery-ui.min.css" rel="stylesheet">
  <!-- Foodtech styles -->
  <link href="\assets\css\style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="..\..\favicon.ico">
</head>

<body class="ms-body ms-primary-theme ms-logged-out">
 
  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="..\..\index.html">
        <img src="..\..\assets\img\foodtech\foodtech-logo-216x62.png" alt="logo">
      </a>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard"> <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="..\..\index.html">Foodtech</a> 
          </li>
        </ul>
      </li>
      <!-- /Dashboard -->
      <!-- product -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product"> <span><i class="fa fa-archive fs-16"></i>Menus </span>
        </a>
        <ul id="product" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
          <li> <a href="..\product\productcata.html">Product Catalogue</a> 
          </li>
          <li> <a href="..\product\productlist.html">Product List</a> 
          </li>
          <li> <a href="..\product\productgrid.html">Product Grid</a> 
          </li>
          <li> <a href="..\product\addproduct.html">Add Product</a> 
          </li>
          <li> <a href="..\product\productdetail.html">Product Detail</a> 
          </li>
        </ul>
      </li>
      <!-- product end -->
      <!-- orders -->
      <li class="menu-item">
        <a href="..\orders.html"> <span><i class="fas fa-clipboard-list fs-16"></i>Orders</span>
        </a>
      </li>
      <!-- orders end -->
      <!-- restaurants -->
      <li class="menu-item">
        <a href="..\restaurants.html"> <span><i class="fa fa-tasks fs-16"></i>Restaurants List</span>
        </a>
      </li>
      <!-- restaurants end -->
      <!-- Invoice -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#invoice" aria-expanded="false" aria-controls="invoice"> <span><i class="fas fa-file-invoice fs-16"></i>Invoice </span>
        </a>
        <ul id="invoice" class="collapse" aria-labelledby="invoice" data-parent="#side-nav-accordion">
          <li> <a href="..\invoice\invoicedetail.html">Invoice Detail</a> 
          </li>
          <li> <a href="..\invoice\invoicelist.html">Invoice List</a> 
          </li>
        </ul>
      </li>
      <!-- Invoice end -->
      <!-- customers-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#customer" aria-expanded="false" aria-controls="customer"> <span><i class="fas fa-user-friends fs-16"></i>Customers </span>
        </a>
        <ul id="customer" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
          <li> <a href="..\customer\customersreview.html">Customers Review</a> 
          </li>
          <li> <a href="..\customer\customerlist.html">Customers List</a> 
          </li>
          <li> <a href="..\customer\social.html">Social Activity</a> 
          </li>
        </ul>
      </li>
      <!-- Customers  end -->
      <!-- sales -->
      <li class="menu-item">
        <a href="..\sales.html"> <span><i class="fa fa-briefcase fs-16"></i>Sales</span>
        </a>
      </li>
      <!-- sales end  -->
      <li class="menu-item">
        <a href="..\widgets.html"> <span><i class="material-icons fs-16">widgets</i>Widgets</span>
        </a>
      </li>
      <!-- Basic UI Elements -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements"> <span><i class="material-icons fs-16">filter_list</i>Basic UI Elements</span>
        </a>
        <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
          <li> <a href="..\ui-basic\accordions.html">Accordions</a> 
          </li>
          <li> <a href="..\ui-basic\alerts.html">Alerts</a> 
          </li>
          <li> <a href="..\ui-basic\buttons.html">Buttons</a> 
          </li>
          <li> <a href="..\ui-basic\breadcrumbs.html">Breadcrumbs</a> 
          </li>
          <li> <a href="..\ui-basic\badges.html">Badges</a> 
          </li>
          <li> <a href="..\ui-basic\cards.html">Cards</a> 
          </li>
          <li> <a href="..\ui-basic\progress-bars.html">Progress Bars</a> 
          </li>
          <li> <a href="..\ui-basic\preloaders.html">Pre-loaders</a> 
          </li>
          <li> <a href="..\ui-basic\pagination.html">Pagination</a> 
          </li>
          <li> <a href="..\ui-basic\tabs.html">Tabs</a> 
          </li>
          <li> <a href="..\ui-basic\typography.html">Typography</a> 
          </li>
        </ul>
      </li>
      <!-- /Basic UI Elements -->
      <!-- Advanced UI Elements -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#advanced-elements" aria-expanded="false" aria-controls="advanced-elements"> <span><i class="material-icons fs-16">code</i>Advanced UI Elements</span>
        </a>
        <ul id="advanced-elements" class="collapse" aria-labelledby="advanced-elements" data-parent="#side-nav-accordion">
          <li> <a href="..\ui-advanced\draggables.html">Draggables</a> 
          </li>
          <li> <a href="..\ui-advanced\sliders.html">Sliders</a> 
          </li>
          <li> <a href="..\ui-advanced\modals.html">Modals</a> 
          </li>
          <li> <a href="..\ui-advanced\rating.html">Rating</a> 
          </li>
          <li> <a href="..\ui-advanced\tour.html">Tour</a> 
          </li>
          <li> <a href="..\ui-advanced\cropper.html">Cropper</a> 
          </li>
          <li> <a href="..\ui-advanced\range-slider.html">Range Slider</a> 
          </li>
        </ul>
      </li>
      <!-- /Advanced UI Elements -->
      <li class="menu-item">
        <a href="..\animation.html"> <span><i class="material-icons fs-16">format_paint</i>Animations</span>
        </a>
      </li>
      <!-- Form Elements -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#form-elements" aria-expanded="false" aria-controls="form-elements"> <span><i class="material-icons fs-16">input</i>Form Elements</span>
        </a>
        <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-parent="#side-nav-accordion">
          <li> <a href="..\form\form-elements.html">Form Elements</a> 
          </li>
          <li> <a href="..\form\form-layout.html">Form Layouts</a> 
          </li>
          <li> <a href="..\form\form-validation.html">Form Validation</a> 
          </li>
          <li> <a href="..\form\form-wizard.html">Form Wizard</a> 
          </li>
        </ul>
      </li>
      <!-- /Form Elements -->
      <!-- Charts -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#charts" aria-expanded="false" aria-controls="charts"> <span><i class="material-icons fs-16">equalizer</i>Charts</span>
        </a>
        <ul id="charts" class="collapse" aria-labelledby="charts" data-parent="#side-nav-accordion">
          <li> <a href="..\charts\chartjs.html">Chart JS</a> 
          </li>
          <li> <a href="..\charts\morris-charts.html">Morris Chart</a> 
          </li>
        </ul>
      </li>
      <!-- /Charts -->
      <!-- Tables -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#tables" aria-expanded="false" aria-controls="tables"> <span><i class="material-icons fs-16">tune</i>Tables</span>
        </a>
        <ul id="tables" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
          <li> <a href="..\tables\basic-tables.html">Basic Tables</a> 
          </li>
          <li> <a href="..\tables\data-tables.html">Data tables</a> 
          </li>
        </ul>
      </li>
      <!-- /Tables -->
      <!-- Popups -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#popups" aria-expanded="false" aria-controls="popups"> <span><i class="material-icons fs-16">message</i>Popups</span>
        </a>
        <ul id="popups" class="collapse" aria-labelledby="popups" data-parent="#side-nav-accordion">
          <li> <a href="..\popups\sweet-alerts.html">Sweet Alerts</a> 
          </li>
          <li> <a href="..\popups\toast.html">Toast</a> 
          </li>
        </ul>
      </li>
      <!-- /Popups -->
      <!-- Icons -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#icons" aria-expanded="false" aria-controls="icons"> <span><i class="material-icons fs-16">border_color</i>Icons</span>
        </a>
        <ul id="icons" class="collapse" aria-labelledby="icons" data-parent="#side-nav-accordion">
          <li> <a href="..\icons\fontawesome.html">Fontawesome</a> 
          </li>
          <li> <a href="..\icons\flaticons.html">Flaticons</a> 
          </li>
          <li> <a href="..\icons\materialize.html">Materialize</a> 
          </li>
        </ul>
      </li>
      <!-- /Icons -->
      <!-- Maps -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#maps" aria-expanded="false" aria-controls="maps"> <span><i class="material-icons fs-16">map</i>Maps</span>
        </a>
        <ul id="maps" class="collapse" aria-labelledby="maps" data-parent="#side-nav-accordion">
          <li> <a href="..\maps\google-maps.html">Google Maps</a> 
          </li>
          <li> <a href="..\maps\vector-maps.html">Vector Maps</a> 
          </li>
        </ul>
      </li>
      <!-- /Maps -->
      <!--bonus  Pages -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#bonuspages" aria-expanded="false" aria-controls="bonuspages"> <span><i class="material-icons fs-16">insert_drive_file</i> Bonus Pages</span>
        </a>
        <ul id="bonuspages" class="collapse" aria-labelledby="bonuspages" data-parent="#side-nav-accordion">
          <li> <a href="..\dashboard\web-analytics.html"> Web Analytics </a> 
          </li>
          <li> <a href="..\dashboard\project-management.html">Stock Management</a> 
          </li>
          <li> <a href="..\dashboard\client-management.html">Client Management</a> 
          </li>
        </ul>
      </li>
      <!-- / bonus Pages -->
      <!-- Pages -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages"> <span><i class="material-icons fs-16">insert_drive_file</i>Pages</span>
        </a>
        <ul id="pages" class="collapse" aria-labelledby="pages" data-parent="#side-nav-accordion">
          <li class="menu-item"> <a href="#" class="has-chevron" data-toggle="collapse" data-target="#authentication" aria-expanded="false" aria-controls="authentication">Authentication</a>
            <ul id="authentication" class="collapse" aria-labelledby="authentication" data-parent="#pages">
              <li> <a href="default-login.html">Default Login</a> 
              </li>
              <li> <a href="modal-login.html">Modal Login</a> 
              </li>
              <li> <a href="default-register.html">Default Registration</a> 
              </li>
              <li> <a href="modal-register.html">Modal Registration</a> 
              </li>
              <li> <a href="lock-screen.html">Lock Screen</a> 
              </li>
            </ul>
          </li>
          <li> <a href="coming-soon.html">Coming Soon</a> 
          </li>
          <li> <a href="error.html">Error Page</a> 
          </li>
          <li class="menu-item"> <a href="faq.html"> FAQ </a> 
          </li>
          <li class="menu-item"> <a href="portfolio.html"> Portfolio </a> 
          </li>
          <li class="menu-item"> <a href="user-profile.html"> User Profile </a> 
          </li>
          <li class="menu-item"> <a href="invoice.html"> Invoice </a> 
          </li>
        </ul>
      </li>
      <!-- /Pages -->
      <!-- Apps -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#apps" aria-expanded="false" aria-controls="apps"> <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>
        </a>
        <ul id="apps" class="collapse" aria-labelledby="apps" data-parent="#side-nav-accordion">
          <li> <a href="..\apps\chat.html">Chat</a> 
          </li>
          <li> <a href="..\apps\email.html">Email</a> 
          </li>
          <li> <a href="..\apps\to-do-list.html">To-do List</a> 
          </li>
        </ul>
      </li>
      <!-- /Apps -->
    </ul>
  </aside>
  <!-- Main Content -->
  <main class="body-content">
    <!-- Navigation Bar -->

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper ms-auth">
      <div class="ms-auth-container">
        <div class="ms-auth-col">
          <div class="ms-auth-bg"></div>
        </div>
        <div class="ms-auth-col">
          <div class="ms-auth-form">
            <form class="needs-validation" novalidate="" method="POST" action={{route('logueo')}}>
                    {{ csrf_field() }}
              <h3>Iniciar sesión a la consola del administrador</h3>
              <p>Ingresa correo y contraseña correspondiente</p>
              <div class="mb-3">
                <label for="validationCustom08">Correo</label>
                <div class="input-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required="">
                  <div class="invalid-feedback">Porfavor ingresa un correo.</div>
                </div>
              </div>
              <div class="mb-2">
                <label for="validationCustom09">Contraseña</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required="">
                  <div class="invalid-feedback">Porfavor ingresa una contraseña.</div>
                </div>
              </div>
              <div class="form-group">
               
              </div>
              <button class="btn btn-primary mt-4 d-block w-100" type="submit">Iniciar sesión</button> 
              <p class="mb-0 mt-3 text-center">Regresar a la página <a class="btn-link" href="/"> ----></a> 
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Forgot Password Modal -->
    <div class="modal fade" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12">
      <div class="modal-dialog modal-dialog-centered modal-min" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button> <i class="flaticon-secure-shield d-block"></i>
            <h1>Forgot Password?</h1>
            <p>Enter your email to recover your password</p>
            <form method="post">
              <div class="ms-form-group has-icon">
                <input type="text" placeholder="Email Address" class="form-control" name="forgot-password" value=""> <i class="material-icons">email</i>
              </div>
              <button type="submit" class="btn btn-primary shadow-none">Reset Password</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="\assets\js\jquery-3.3.1.min.js"></script>
  <script src="\assets\js\popper.min.js"></script>
  <script src="\assets\js\bootstrap.min.js"></script>
  <script src="\assets\js\perfect-scrollbar.js">
  </script>
  <script src="\assets\js\jquery-ui.min.js">
  </script>
  <!-- Global Required Scripts End -->
  <!-- Foodtech core JavaScript -->
  <script src="\assets\js\framework.js"></script>
  <!-- Settings -->
  <script src="\assets\js\settings.js"></script>
</body>

</html>