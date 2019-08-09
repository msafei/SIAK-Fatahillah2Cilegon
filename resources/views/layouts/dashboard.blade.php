<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>SIAK - SMKYPF2</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="{{ asset('assets/images/logo.png') }}">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="{{ asset('assets/images/logo.png') }}">
  
  <!-- style -->
  <link rel="stylesheet" href="{{ asset('assets/animate.css/animate.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/glyphicons/glyphicons.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('assets/material-design-icons/material-design-icons.css') }}" type="text/css" />

  <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="{{ asset('assets/styles/app.css') }}" type="text/css" />
  <!-- endbuild -->
	<link rel="stylesheet" href="{{ asset('assets/styles/font.css') }}" type="text/css" />
	@yield('css')
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

<div id="aside" class="app-aside modal fade nav-expand">
    <div class="left navside black dk" layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        	<div ui-include="'{{ asset('assets/images/logo.svg') }}'"></div>
        	<img src="{{ asset('assets/images/logo.png') }}" alt="." class="hide">
        	<span class="hidden-folded inline">SIAK</span>
        </a>
 
        <!-- / brand -->
      </div>
      <div class="nav-fold">
        	<a href="profile.html">
        	    <span class="pull-left">
        	      <img src="../assets/images/a0.jpg" alt="..." class="w-40 img-circle">
        	    </span>
        	    <span class="clear hidden-folded p-x">
        	      <span class="block _500">Admin</span>
        	      <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
        	    </span>
        	</a>
        </div>
      <div class="hide-scroll" data-flex>
          <nav class="scroll nav-light">
            
              <ul class="nav" ui-nav>
   
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Main</small>
                </li>
                <li>
                  <a href="/home" >
                    <span class="nav-icon">
                      <i class="material-icons">airplay
                      </i>
                    </span>
                    <span class="nav-text">Dashboard</span>
                  </a>
                </li>            
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                      </i>
                    </span>
                    <span class="nav-text">Master</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="/user" >
                        <span class="nav-text">User</span>
                      </a>
                    </li>
                    <li>
                      <a href="contact.html" >
                        <span class="nav-text">Contacts</span>
                      </a>
                    </li>
                    <li>
                      <a href="calendar.html" >
                        <span class="nav-text">Calendar</span>
                      </a>
                    </li>
                  </ul>
                </li>
            
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Help</small>
                </li>
                
                <li class="hidden-folded" >
                  <a href="docs.html" >
                    <span class="nav-text">Documents</span>
                  </a>
                </li>
            
              </ul>
          </nav>
      </div>
     
    </div>
  </div>
  <!-- / -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow">
        <div class="navbar navbar-toggleable-sm flex-row align-items-center">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->
        
@yield('title')
            <!-- / navbar collapse -->
        
            <!-- navbar right -->
            <ul class="nav navbar-nav ml-auto flex-row">
              
              <li class="nav-item dropdown">
                <a class="nav-link p-1 clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-35">
                    <img src="../assets/images/a0.jpg" alt="...">
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-overlay pull-right">
  <a class="dropdown-item" ui-sref="app.page.profile">
    <span>Profile</span>
  </a>
  <a class="dropdown-item" ui-sref="app.page.setting">
    <span>Settings</span>
    <span class="label primary m-l-xs">3/9</span>
  </a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" ui-sref="access.signin">Sign out</a>
</div>
              </li>
              <li class="nav-item hidden-md-up">
                <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                  <i class="material-icons">&#xe5d4;</i>
                </a>
              </li>
            </ul>
            <!-- / navbar right -->
        </div>
    </div>

    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
@yield('content')

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->
  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="{{ asset('libs/jquery/jquery/dist/jquery.js') }}"></script>
<!-- Bootstrap -->
  <script src="{{ asset('libs/jquery/tether/dist/js/tether.min.js') }}"></script>
  <script src="{{ asset('libs/jquery/bootstrap/dist/js/bootstrap.js') }}"></script>
<!-- core -->
  <script src="{{ asset('libs/jquery/underscore/underscore-min.js') }}"></script>
  <script src="{{ asset('libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js') }}"></script>
  <script src="{{ asset('libs/jquery/PACE/pace.min.js') }}"></script>

  <script src="{{ asset('scripts/config.lazyload.js') }}"></script>

  <script src="{{ asset('scripts/palette.js') }}"></script>
  <script src="{{ asset('scripts/ui-load.js') }}"></script>
  <script src="{{ asset('scripts/ui-jp.js') }}"></script>
  <script src="{{ asset('scripts/ui-include.js') }}"></script>
  <script src="{{ asset('scripts/ui-device.js') }}"></script>
  <script src="{{ asset('scripts/ui-form.js') }}"></script>
  <script src="{{ asset('scripts/ui-nav.js') }}"></script>
  <script src="{{ asset('scripts/ui-screenfull.js') }}"></script>
  <script src="{{ asset('scripts/ui-scroll-to.js') }}"></script>
  <script src="{{ asset('scripts/ui-toggle-class.js') }}"></script>

	<script src="scripts/app.js"></script>
	@yield('js')
<!-- endbuild -->
</body>
</html>
