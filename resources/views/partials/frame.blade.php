<!-- start: header -->
<header class="header">
  <div class="logo-container">
    <a href="../" class="logo">
      <img src="{{asset('octopu/assets/images/logo.png')}}" height="35" alt="Project Manager logo" />
    </a>
    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
      <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
    </div>
  </div>

  <!-- start: search & user box -->
  <div class="header-right">

    <form action="pages-search-results.html" class="search nav-form">
      <div class="input-group input-search">
        <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>

    <span class="separator"></span>

    <ul class="notifications">
      <li>
        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
          <i class="fa fa-tasks"></i>
          <span class="badge">3</span>
        </a>

        <div class="dropdown-menu notification-menu large">
          <div class="notification-title">
            <span class="pull-right label label-default">3</span>
            Pending Tasks
          </div>

          <div class="content">
            <ul>
              <li>
                <p class="clearfix mb-xs">
                  <span class="message pull-left">Web Development</span>
                  <span class="message pull-right text-dark">60%</span>
                </p>
                <div class="progress progress-xs light">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>
              </li>

              <li>
                <p class="clearfix mb-xs">
                  <span class="message pull-left">User Interface Design</span>
                  <span class="message pull-right text-dark">98%</span>
                </p>
                <div class="progress progress-xs light">
                  <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                </div>
              </li>

              <li>
                <p class="clearfix mb-xs">
                  <span class="message pull-left">Back end for the android app</span>
                  <span class="message pull-right text-dark">33%</span>
                </p>
                <div class="progress progress-xs light mb-xs">
                  <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </li>
      <li>
        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
          <i class="fa fa-envelope"></i>
          <span class="badge">4</span>
        </a>

        <div class="dropdown-menu notification-menu">
          <div class="notification-title">
            <span class="pull-right label label-default">12</span>
            Messages
          </div>

          <div class="content">
            <ul>
              <li>
                <a href="#" class="clearfix">
                  <figure class="image">
                    <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
                  </figure>
                  <span class="title">Mr. Kiprop</span>
                  <span class="message">Please submit your ERD diagrams</span>
                </a>
              </li>
              <li>
                <a href="#" class="clearfix">
                  <figure class="image">
                    <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                  </figure>
                  <span class="title">Mr. Biomdo</span>
                  <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                </a>
              </li>


            </ul>

            <hr />

            <div class="text-right">
              <a href="#" class="view-more">View All</a>
            </div>
          </div>
        </div>
      </li>

      <li>
        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
          <i class="fa fa-bell"></i>
          <span class="badge">1</span>
        </a>

        <div class="dropdown-menu notification-menu">
          <div class="notification-title">
            <span class="pull-right label label-default">2</span>
            Alerts
          </div>

          <div class="content">
            <ul>
              <li>
                <a href="#" class="clearfix">
                  <div class="image">
                    <i class="fa fa-thumbs-down bg-danger"></i>
                  </div>
                  <span class="title">The android task is due</span>
                  <span class="message">Just now</span>
                </a>
              </li>
              <li>
                <a href="#" class="clearfix">
                  <div class="image">
                    <i class="fa fa-lock bg-warning"></i>
                  </div>
                  <span class="title">The UI design has been rejected</span>
                  <span class="message">15 minutes ago</span>
                </a>
              </li>

            </ul>

            <hr />

            <div class="text-right">
              <a href="#" class="view-more">View All</a>
            </div>
          </div>
        </div>
      </li>
    </ul>

    <span class="separator"></span>

    <div id="userbox" class="userbox">
      <a href="#" data-toggle="dropdown">
        <figure class="profile-picture">
          <img src="{{asset('octopus/assets/images/!logged-user.jpg')}}" alt="Joseph Doe" class="img-circle" data-lock-picture="{{asset('octopus/assets/images/!logged-user.jpg')}}" />
        </figure>
        <div class="profile-info" data-lock-name="{{ Auth::user()->name }}" data-lock-email="{{ Auth::user()->email }}">
          <span class="name">{{ Auth::user()->name }}</span>
          <span class="role">Administrator</span>
        </div>

        <i class="fa fa-caret-down"></i>
      </a>

      <div class="dropdown-menu">
        <ul class="list-unstyled">
          <li class="divider"></li>
          <li>
            <a role="menuitem" tabindex="-1" href="{{asset('octopus/pages-user-profil.html')}}"><i class="fa fa-user"></i> My Profile</a>
          </li>
          <li>
            <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
          </li>
          <li>
            <a role="menuitem" tabindex="-1" href="{{route('logout')}}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>

          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end: search & user box -->
</header>
<!-- end: header -->

<div class="inner-wrapper">
  <!-- start: sidebar -->
  <aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
      <div class="sidebar-title">
        Navigation
      </div>
      <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
      </div>
    </div>

    <div class="nano">
      <div class="nano-content">
        <nav id="menu" class="nav-main" role="navigation">
          <ul class="nav nav-main">

            <li class="nav-active">
              <a href="http://localhost:8000/home">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <hr class="separator" />

            <div class="sidebar-widget widget-tasks">
              <div class="widget-header">
                <h6>Admin Modules</h6>

                <!--<div class="widget-toggle">+</div>-->

              </div>
              <div class="widget-content">
                <ul class="list-unstyled m-none">
                  <li><a href="{{ route('companies.index') }}">Companies</a></li>
                  <li><a href="{{ route('projects.index') }}">Projects</a></li>
                  <li><a href="{{ route('tasks.index') }}">Tasks</a></li>
                </ul>
              </div>
            </div>

            <hr class="separator" />

<!--
            <li class="nav-parent">
              <a>
                <i class="fa fa-copy" aria-hidden="true"></i>
                <span>Pages</span>
              </a>
              <ul class="nav nav-children">
                <li>
                  <a href="pages-signup.html">
                     Sign Up
                  </a>
                </li>
                <li>
                  <a href="pages-signin.html">
                     Sign In
                  </a>
                </li>
                <li>
                  <a href="pages-recover-password.html">
                     Recover Password
                  </a>
                </li>
                <li>
                  <a href="pages-lock-screen.html">
                     Locked Screen
                  </a>
                </li>
                <li>
                  <a href="pages-user-profile.html">
                     User Profile
                  </a>
                </li>
                <li>
                  <a href="pages-session-timeout.html">
                     Session Timeout
                  </a>
                </li>
                <li>
                  <a href="pages-calendar.html">
                     Calendar
                  </a>
                </li>
                <li>
                  <a href="pages-timeline.html">
                     Timeline
                  </a>
                </li>
                <li>
                  <a href="pages-media-gallery.html">
                     Media Gallery
                  </a>
                </li>
                <li>
                  <a href="pages-invoice.html">
                     Invoice
                  </a>
                </li>
                <li>
                  <a href="pages-blank.html">
                     Blank Page
                  </a>
                </li>
                <li>
                  <a href="pages-404.html">
                     404
                  </a>
                </li>
                <li>
                  <a href="pages-500.html">
                     500
                  </a>
                </li>
                <li>
                  <a href="pages-log-viewer.html">
                     Log Viewer
                  </a>
                </li>
                <li>
                  <a href="pages-search-results.html">
                     Search Results
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-parent">
              <a>
                <i class="fa fa-tasks" aria-hidden="true"></i>
                <span>UI Elements</span>
              </a>
              <ul class="nav nav-children">
                <li>
                  <a href="ui-elements-typography.html">
                     Typography
                  </a>
                </li>
                <li>
                  <a href="ui-elements-icons.html">
                     Icons
                  </a>
                </li>
                <li>
                  <a href="ui-elements-tabs.html">
                     Tabs
                  </a>
                </li>
                <li>
                  <a href="ui-elements-panels.html">
                     Panels
                  </a>
                </li>
                <li>
                  <a href="ui-elements-widgets.html">
                     Widgets
                  </a>
                </li>
                <li>
                  <a href="ui-elements-portlets.html">
                     Portlets
                  </a>
                </li>
                <li>
                  <a href="ui-elements-buttons.html">
                     Buttons
                  </a>
                </li>
                <li>
                  <a href="ui-elements-alerts.html">
                     Alerts
                  </a>
                </li>
                <li>
                  <a href="ui-elements-notifications.html">
                     Notifications
                  </a>
                </li>
                <li>
                  <a href="ui-elements-modals.html">
                     Modals
                  </a>
                </li>
                <li>
                  <a href="ui-elements-lightbox.html">
                     Lightbox
                  </a>
                </li>
                <li>
                  <a href="ui-elements-progressbars.html">
                     Progress Bars
                  </a>
                </li>
                <li>
                  <a href="ui-elements-sliders.html">
                     Sliders
                  </a>
                </li>
                <li>
                  <a href="ui-elements-carousels.html">
                     Carousels
                  </a>
                </li>
                <li>
                  <a href="ui-elements-accordions.html">
                     Accordions
                  </a>
                </li>
                <li>
                  <a href="ui-elements-nestable.html">
                     Nestable
                  </a>
                </li>
                <li>
                  <a href="ui-elements-tree-view.html">
                     Tree View
                  </a>
                </li>
                <li>
                  <a href="ui-elements-grid-system.html">
                     Grid System
                  </a>
                </li>
                <li>
                  <a href="ui-elements-charts.html">
                     Charts
                  </a>
                </li>
                <li>
                  <a href="ui-elements-animations.html">
                     Animations
                  </a>
                </li>
                <li>
                  <a href="ui-elements-extra.html">
                     Extra
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-parent">
              <a>
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                <span>Forms</span>
              </a>
              <ul class="nav nav-children">
                <li>
                  <a href="forms-basic.html">
                     Basic
                  </a>
                </li>
                <li>
                  <a href="forms-advanced.html">
                     Advanced
                  </a>
                </li>
                <li>
                  <a href="forms-validation.html">
                     Validation
                  </a>
                </li>
                <li>
                  <a href="forms-layouts.html">
                     Layouts
                  </a>
                </li>
                <li>
                  <a href="forms-wizard.html">
                     Wizard
                  </a>
                </li>
                <li>
                  <a href="forms-code-editor.html">
                     Code Editor
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-parent">
              <a>
                <i class="fa fa-table" aria-hidden="true"></i>
                <span>Tables</span>
              </a>
              <ul class="nav nav-children">
                <li>
                  <a href="tables-basic.html">
                     Basic
                  </a>
                </li>
                <li>
                  <a href="tables-advanced.html">
                     Advanced
                  </a>
                </li>
                <li>
                  <a href="tables-responsive.html">
                     Responsive
                  </a>
                </li>
                <li>
                  <a href="tables-editable.html">
                     Editable
                  </a>
                </li>
                <li>
                  <a href="tables-ajax.html">
                     Ajax
                  </a>
                </li>
                <li>
                  <a href="tables-pricing.html">
                     Pricing
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-parent">
              <a>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>Maps</span>
              </a>
              <ul class="nav nav-children">
                <li>
                  <a href="maps-google-maps.html">
                     Basic
                  </a>
                </li>
                <li>
                  <a href="maps-google-maps-builder.html">
                     Map Builder
                  </a>
                </li>
                <li>
                  <a href="maps-vector.html">
                     Vector
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-parent">
              <a>
                <i class="fa fa-columns" aria-hidden="true"></i>
                <span>Layouts</span>
              </a>
              <ul class="nav nav-children">
                <li>
                  <a href="layouts-default.html">
                     Default
                  </a>
                </li>
                <li>
                  <a href="layouts-boxed.html">
                     Boxed
                  </a>
                </li>
                <li>
                  <a href="layouts-menu-collapsed.html">
                     Menu Collapsed
                  </a>
                </li>
                <li>
                  <a href="layouts-scroll.html">
                     Scroll
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-parent">
              <a>
                <i class="fa fa-align-left" aria-hidden="true"></i>
                <span>Menu Levels</span>
              </a>
              <ul class="nav nav-children">
                <li>
                  <a>First Level</a>
                </li>
                <li class="nav-parent">
                  <a>Second Level</a>
                  <ul class="nav nav-children">
                    <li class="nav-parent">
                      <a>Third Level</a>
                      <ul class="nav nav-children">
                        <li>
                          <a>Third Level Link #1</a>
                        </li>
                        <li>
                          <a>Third Level Link #2</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a>Second Level Link #1</a>
                    </li>
                    <li>
                      <a>Second Level Link #2</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
-->
            <li>
              <a href="http://localhost:8000" target="_blank">
                <i class="fa fa-external-link" aria-hidden="true"></i>
                <span>Home Page <em class="not-included">(Back to site's Main Page)</em></span>
              </a>
            </li>

          </ul>

        </nav>


        <hr class="separator" />

        <div class="sidebar-widget widget-stats">
          <div class="widget-header">
            <h6>Work Statistics</h6>
            <div class="widget-toggle">+</div>
          </div>
          <div class="widget-content">
            <ul>
              <li>
                <span class="stats-title">Completed Tasks</span>
                <span class="stats-complete">85%</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                    <span class="sr-only">85% Complete</span>
                  </div>
                </div>
              </li>
              <li>
                <span class="stats-title">Pending Tasks</span>
                <span class="stats-complete">70%</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                    <span class="sr-only">70% Complete</span>
                  </div>
                </div>
              </li>
              <hr>
              <li>
                <span class="stats-title">Tasks that have meet their deadline</span>
                <span class="stats-complete">2%</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                    <span class="sr-only">2% Complete</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>

    </div>

  </aside>
  <!-- end: sidebar -->
