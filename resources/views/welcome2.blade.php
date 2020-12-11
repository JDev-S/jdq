<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @yield('metas')
    <title>DQ consola</title>
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="\vendorss\iconic-fonts\font-awesome\css\all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="\vendorss\iconic-fonts\flat-icons\flaticon.css">
    <link rel="stylesheet" href="\vendorss\iconic-fonts\cryptocoins\cryptocoins.css">
    <link rel="stylesheet" href="\vendorss\iconic-fonts\cryptocoins\cryptocoins-colors.css">
    @yield('styles')
    <!-- Bootstrap core CSS -->
    <link href="\assets\css\bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="\assets\css\jquery-ui.min.css" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="\assets\css\slick.css" rel="stylesheet">
    <link href="\assets\css\datatables.min.css" rel="stylesheet">
    <!-- Foodtech styles -->
    <link href="\assets\css\style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
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
            <a class="pl-0 ml-0 text-center" href="index.html">
                <img src="\assets\img\foodtech\foodtech-logo-216x62.png" alt="logo">
            </a>
        </div>
        <!-- Navigation -->
        <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
            <!-- Dashboard -->

            <!-- /Dashboard -->
            <!-- product -->

            <!-- product end -->
            <!-- orders -->
            <li class="menu-item">
                <a href="/admin_mensaje"> <span><i class="fas fa-clipboard-list fs-16"></i>Inicio</span>
                </a>
            </li>
            <!-- orders end -->
            <!-- restaurants -->
            <!-- restaurants end -->
            <!-- Invoice -->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard"> <span><i class="fa fa-archive fs-16"></i>Productos</span>
                </a>
                <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">

                    <li> <a href="/admin_alimentos">Listado de productos</a>
                    </li>

                    <li> <a href="/agregar_alimento">Agregar producto</a>
                    </li>

                </ul>
            </li>
            <!-- Invoice end -->
            <!-- customers-->
            <li class="menu-item">
                <a href="#" class="has-chevron" data-toggle="collapse" data-target="#customer" aria-expanded="false" aria-controls="customer"> <span><i class="fa fa-archive fs-16"></i>Categoría </span>
                </a>
                <ul id="customer" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
                    <!--<li> <a href="pages\product\productcata.html">Menu Catalogue</a>
          </li>-->
                    <li> <a href="/admin_categoria">Listado de Categorias</a>
                    </li>
                </ul>
            </li>
            <!-- Customers  end -->
            <!-- sales -->

            <!-- Basic UI Elements -->
            <!-- /Basic UI Elements -->
            <!-- Advanced UI Elements -->
            
            <!-- /Advanced UI Elements -->

            <!-- Form Elements -->


            <li class="menu-item">
                <a href="/cerrar_sesion"> <span><i class="fas fa-clipboard-list fs-16"></i>Cerrar sesion</span>
                </a>
            </li>
            <!-- /Form Elements -->
            <!-- Charts -->

            <!-- /Charts -->
            <!-- Tables -->

            <!-- /Tables -->
            <!-- Popups -->

            <!-- /Popups -->
            <!-- Icons -->

            <!-- /Icons -->
            <!-- Maps -->

            <!-- /Maps -->

            <!-- / bonus Pages -->
            <!-- Pages -->

            <!-- /Pages -->
            <!-- Apps -->

            <!-- /Apps -->
        </ul>
    </aside>
    <!-- Sidebar Right -->
    <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
        <div class="ms-aside-header">
            <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
                <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a>
                </li>
                <li>
                    <button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span>
                    </button>
                </li>
            </ul>
        </div>
        <div class="ms-aside-body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
                    <ul class="ms-activity-log">
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-light"> <i class="flaticon-gear"></i>
                            </div>
                            <h6>Update 1.0.0 Pushed</h6>
                            <span> <i class="material-icons">event</i>1 January, 2020</span>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-success"> <i class="flaticon-tick-inside-circle"></i>
                            </div>
                            <h6>Profile Updated</h6>
                            <span> <i class="material-icons">event</i>4 March, 2018</span>
                            <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-warning"> <i class="flaticon-alert-1"></i>
                            </div>
                            <h6>Your payment is due</h6>
                            <span> <i class="material-icons">event</i>1 January, 2020</span>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-danger"> <i class="flaticon-alert"></i>
                            </div>
                            <h6>Database Error</h6>
                            <span> <i class="material-icons">event</i>4 March, 2018</span>
                            <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-info"> <i class="flaticon-information"></i>
                            </div>
                            <h6>Checkout what's Trending</h6>
                            <span> <i class="material-icons">event</i>1 January, 2020</span>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-secondary"> <i class="flaticon-diamond"></i>
                            </div>
                            <h6>Your Dashboard is ready</h6>
                            <span> <i class="material-icons">event</i>4 March, 2018</span>
                            <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                    </ul> <a href="#" class="btn btn-primary d-block"> View All </a>
                </div>
            </div>
        </div>
    </aside>
    <!-- Main Content -->
    <main class="body-content">
        <!-- Navigation Bar -->
        <nav class="navbar ms-navbar">
            <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft"> <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
            </div>
            <div class="logo-sn logo-sm ms-d-block-sm">
                <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.html"><img src="assets\img\foodtech\foodtech-logo-84x41.png" alt="logo"> </a>
            </div>
            <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

            </ul>
            <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options"> <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
            </div>
        </nav>

        @yield('contenido')

    </main>
    <!-- MODALS -->
    <!-- Quick bar -->
    <aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg">



        <!-- Quick bar Content -->
        <div class="ms-quick-bar-content">

            <div class="ms-quick-bar-header clearfix">
                <h5 class="ms-quick-bar-title float-left">Title</h5>
                <button type="button" class="close ms-toggler" data-target="#ms-quick-bar" data-toggle="hideQuickBar" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="ms-quick-bar-body tab-content">



                <div role="tabpanel" class="tab-pane" id="qa-toDo">
                    <div class="ms-quickbar-container ms-todo-list-container ms-scrollable">

                        <form class="ms-add-task-block">
                            <div class="form-group mx-3 mt-0  fs-14 clearfix">
                                <input type="text" class="form-control fs-14 float-left" id="task-block" name="todo-block" placeholder="Add Task Block" value="">
                                <button type="submit" class="ms-btn-icon bg-primary float-right"><i class="material-icons text-disabled">add</i></button>
                            </div>
                        </form>

                        <ul class="ms-todo-list">
                            <li class="ms-card ms-qa-card ms-deletable">

                                <div class="ms-card-header clearfix">
                                    <h6 class="ms-card-title">Task Block Title</h6>
                                    <button data-toggle="tooltip" data-placement="left" title="Add a Task to this block" class="ms-add-task-to-block ms-btn-icon float-right"> <i class="material-icons text-disabled">add</i> </button>
                                </div>

                                <div class="ms-card-body">
                                    <ul class="ms-list ms-task-block">
                                        <li class="ms-list-item ms-to-do-task ms-deletable">
                                            <label class="ms-checkbox-wrap ms-todo-complete">
                                                <input type="checkbox" value="">
                                                <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span> Task to do </span>
                                            <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                                        </li>
                                        <li class="ms-list-item ms-to-do-task ms-deletable">
                                            <label class="ms-checkbox-wrap ms-todo-complete">
                                                <input type="checkbox" value="">
                                                <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span>Task to do</span>
                                            <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                                        </li>
                                    </ul>
                                </div>

                                <div class="ms-card-footer clearfix">
                                    <a href="#" class="text-disabled mr-2"> <i class="flaticon-archive"> </i> Archive </a>
                                    <a href="#" class="text-disabled  ms-delete-trigger float-right"> <i class="flaticon-trash"> </i> Delete </a>
                                </div>

                            </li>
                        </ul>

                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="qa-reminder">
                    <div class="ms-quickbar-container ms-reminders">

                        <ul class="ms-qa-options">
                            <li> <a href="#" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-bell"></i> New Reminder </a> </li>
                        </ul>

                        <div class="ms-quickbar-container ms-scrollable">

                            <div class="ms-card ms-qa-card ms-deletable">
                                <div class="ms-card-body">
                                    <p> Developer Meeting in Block B </p>
                                    <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Today - 3:45 pm</span>
                                </div>
                                <div class="ms-card-footer clearfix">

                                    <div class="ms-note-editor float-right">
                                        <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                                        <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                                    </div>

                                </div>
                            </div>
                            <div class="ms-card ms-qa-card ms-deletable">
                                <div class="ms-card-body">
                                    <p> Start adding change log to version 2 </p>
                                    <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Tomorrow - 12:00 pm</span>
                                </div>
                                <div class="ms-card-footer clearfix">

                                    <div class="ms-note-editor float-right">
                                        <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                                        <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="qa-notes">

                    <ul class="ms-qa-options">
                        <li> <a href="#" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-sticky-note"></i> New Note </a> </li>
                        <li> <a href="#"> <i class="flaticon-excel"></i> Export to Excel </a> </li>
                    </ul>

                    <div class="ms-quickbar-container ms-scrollable">

                        <div class="ms-card ms-qa-card ms-deletable">
                            <div class="ms-card-header">
                                <h6 class="ms-card-title">Don't forget to check with the designer</h6>
                            </div>
                            <div class="ms-card-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                                    vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
                                </p>
                                <ul class="ms-note-members clearfix mb-0">
                                    <li class="ms-deletable"> <img src="assets\img\people\people-3.jpg" alt="member"> </li>
                                    <li class="ms-deletable"> <img src="assets\img\people\people-5.jpg" alt="member"> </li>
                                </ul>
                            </div>
                            <div class="ms-card-footer clearfix">

                                <div class="dropdown float-left">
                                    <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-share-1"></i> Share
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-menu-header">
                                            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="ms-scrollable ms-dropdown-list ms-members-list">
                                            <a class="media p-2" href="#">
                                                <div class="mr-2 align-self-center">
                                                    <img src="assets\img\people\people-10.jpg" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body">
                                                    <span>John Doe</span>
                                                </div>
                                            </a>
                                            <a class="media p-2" href="#">
                                                <div class="mr-2 align-self-center">
                                                    <img src="assets\img\people\people-9.jpg" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body">
                                                    <span>Raymart Sandiago</span>
                                                </div>
                                            </a>
                                            <a class="media p-2" href="#">
                                                <div class="mr-2 align-self-center">
                                                    <img src="assets\img\people\people-7.jpg" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body">
                                                    <span>Heather Brown</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ms-note-editor float-right">
                                    <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                                    <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                                </div>

                            </div>
                        </div>

                        <div class="ms-card ms-qa-card ms-deletable">
                            <div class="ms-card-header">
                                <h6 class="ms-card-title">Perform the required unit tests</h6>
                            </div>
                            <div class="ms-card-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                                    vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
                                </p>
                                <ul class="ms-note-members clearfix mb-0">
                                    <li class="ms-deletable"> <img src="assets\img\people\people-9.jpg" alt="member"> </li>
                                </ul>
                            </div>
                            <div class="ms-card-footer clearfix">

                                <div class="dropdown float-left">
                                    <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-share-1"></i> Share
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-menu-header">
                                            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="ms-scrollable ms-dropdown-list ms-members-list">
                                            <a class="media p-2" href="#">
                                                <div class="mr-2 align-self-center">
                                                    <img src="assets\img\people\people-10.jpg" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body">
                                                    <span>John Doe</span>
                                                </div>
                                            </a>
                                            <a class="media p-2" href="#">
                                                <div class="mr-2 align-self-center">
                                                    <img src="assets\img\people\people-9.jpg" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body">
                                                    <span>Raymart Sandiago</span>
                                                </div>
                                            </a>
                                            <a class="media p-2" href="#">
                                                <div class="mr-2 align-self-center">
                                                    <img src="assets\img\people\people-7.jpg" class="ms-img-round" alt="people">
                                                </div>
                                                <div class="media-body">
                                                    <span>Heather Brown</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ms-note-editor float-right">
                                    <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                                    <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <div role="tabpanel" class="tab-pane" id="qa-invite">

                    <div class="ms-quickbar-container text-center ms-invite-member">
                        <i class="flaticon-network"></i>
                        <p>Invite Team Members</p>
                        <form>
                            <div class="ms-form-group">
                                <input type="text" placeholder="Member Email" class="form-control" name="invite-email" value="">
                            </div>
                            <div class="ms-form-group">
                                <button type="submit" name="invite-member" class="btn btn-primary w-100">Invite</button>
                            </div>
                        </form>
                    </div>

                </div>

                <div role="tabpanel" class="tab-pane" id="qa-settings">

                    <div class="ms-quickbar-container text-center ms-invite-member">
                        <div class="row">
                            <div class="col-md-12 text-left mb-5">
                                <h4 class="section-title bold">Customize</h4>
                                <div>
                                    <label class="ms-switch">
                                        <input type="checkbox" id="dark-mode">
                                        <span class="ms-switch-slider round"></span>
                                    </label>
                                    <span> Dark Mode </span>
                                </div>
                                <div>
                                    <label class="ms-switch">
                                        <input type="checkbox" id="remove-quickbar">
                                        <span class="ms-switch-slider round"></span>
                                    </label>
                                    <span> Remove Quickbar </span>
                                </div>
                            </div>
                            <div class="col-md-12 text-left">
                                <h4 class="section-title bold">Keyboard Shortcuts</h4>
                                <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
                                <p class="ms-directions mb-0"><code>Alt + (1 -&gt; 6)</code> Open Quick Bar Tab</p>
                                <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </aside>
    <!-- Reminder Modal -->
    <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title has-icon text-white"> New Reminder</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="ms-form-group">
                            <label>Remind me about</label>
                            <textarea class="form-control" name="reminder"></textarea>
                        </div>
                        <div class="ms-form-group"> <span class="ms-option-name fs-14">Repeat Daily</span>
                            <label class="ms-switch float-right">
                                <input type="checkbox"> <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ms-form-group">
                                    <input type="text" class="form-control datepicker" name="reminder-date" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ms-form-group">
                                    <select class="form-control" name="reminder-time">
                                        <option value="">12:00 pm</option>
                                        <option value="">1:00 pm</option>
                                        <option value="">2:00 pm</option>
                                        <option value="">3:00 pm</option>
                                        <option value="">4:00 pm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Notes Modal -->
    <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="ms-form-group">
                            <label>Note Title</label>
                            <input type="text" class="form-control" name="note-title" value="">
                        </div>
                        <div class="ms-form-group">
                            <label>Note Description</label>
                            <textarea class="form-control" name="note-description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
    <!-- Page Specific Scripts Start -->

    <script src="\assets\js\Chart.bundle.min.js">
    </script>
    <script src="\assets\js\widgets.js"> </script>
    <script src="\assets\js\clients.js"> </script>
    <script src="\assets\js\Chart.Financial.js"> </script>
    <script src="\assets\js\d3.v3.min.js">
    </script>
    <script src="\assets\js\topojson.v1.min.js">
    </script>
    <script src="\assets\js\datatables.min.js">
    </script>
    <script src="\assets\js\data-tables.js">
    </script>
    <!-- Page Specific Scripts Finish -->
    <!-- Foodtech core JavaScript -->
    <script src="\assets\js\framework.js"></script>
    <!-- Settings -->
    <script src="\assets\js\settings.js"></script>
    @yield('scripts')
</body>

</html>
