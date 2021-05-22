<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Master-page</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ ('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ ('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ ('bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ ('dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ ('dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="{{ ('bower_components/morris.js/morris.css') }}">
  <link rel="stylesheet" href="{{ ('bower_components/jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet" href="{{ ('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ ('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    @include('partials.header')
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
      @include('partials.left-sidebar')
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content">
        @yield('content')
    </section>
  </div>
<div>
  <footer class="main-footer">
    @include('partials.footer')
  </footer>
</div>
  <aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->
        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>
            <p>
              Some information about this general settings option
            </p>
          </div>
          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>
            <p>
              Other sets of options are available
            </p>
          </div>
          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>
            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
        </form>
      </div>
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>

<script src="{{ ('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ ('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ ('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ ('bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ ('bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ ('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ ('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ ('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ ('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ ('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ ('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ ('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ ('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ ('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ ('dist/js/demo.js') }}"></script>
<!-- checkall for branch -->
 <script>
    $(document).ready(function(){
    $("#tablecheckallbranch #checkall").click(function () {
            if ($("#tablecheckallbranch #checkall").is(':checked')) {
                $("#tablecheckallbranch input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#tablecheckallbranch input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
        
        $("[data-toggle=tooltip]").tooltip();
    });
 </script>
 <!-- checkall for brand-model -->
 <script>
    $(document).ready(function(){
    $("#tablecheckallbrand #checkall").click(function () {
            if ($("#tablecheckallbrand #checkall").is(':checked')) {
                $("#tablecheckallbrand input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#tablecheckallbrand input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
        
        $("[data-toggle=tooltip]").tooltip();
    });
 </script>
 <!-- check all for engineers -->
 <script>
    $(document).ready(function(){
    $("#tablecheckallengineer #checkall").click(function () {
            if ($("#tablecheckallengineer #checkall").is(':checked')) {
                $("#tablecheckallengineer input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#tablecheckallengineer input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
        
        $("[data-toggle=tooltip]").tooltip();
    });
 </script>
 <!-- check all for group -->
 <script>
    $(document).ready(function(){
    $("#tablecheckallgroup #checkall").click(function () {
            if ($("#tablecheckallgroup #checkall").is(':checked')) {
                $("#tablecheckallgroup input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#tablecheckallgroup input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
        
        $("[data-toggle=tooltip]").tooltip();
    });
 </script>
 <!-- check all for incident -->
 <script>
    $(document).ready(function(){
    $("#tablecheckallincident #checkall").click(function () {
            if ($("#tablecheckallincident #checkall").is(':checked')) {
                $("#tablecheckallincident input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#tablecheckallincident input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
        
        $("[data-toggle=tooltip]").tooltip();
    });
 </script>
 <!-- check all for position -->
 <script>
    $(document).ready(function(){
    $("#tablecheckallposition #checkall").click(function () {
            if ($("#tablecheckallposition #checkall").is(':checked')) {
                $("#tablecheckallposition input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#tablecheckallposition input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
        
        $("[data-toggle=tooltip]").tooltip();
    });
 </script>
 <!-- check all for verifier -->
 <script>
    $(document).ready(function(){
    $("#tablecheckallverifier #checkall").click(function () {
            if ($("#tablecheckallverifier #checkall").is(':checked')) {
                $("#tablecheckallverifier input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#tablecheckallverifier input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });
        
        $("[data-toggle=tooltip]").tooltip();
    });
 </script>
 <!-- check all for status -->
 <script>
  $(document).ready(function(){
  $("#tablecheckallstatus #checkall").click(function () {
          if ($("#tablecheckallstatus #checkall").is(':checked')) {
              $("#tablecheckallstatus input[type=checkbox]").each(function () {
                  $(this).prop("checked", true);
              });

          } else {
              $("#tablecheckallstatus input[type=checkbox]").each(function () {
                  $(this).prop("checked", false);
              });
          }
      });
      
      $("[data-toggle=tooltip]").tooltip();
  });
 </script>
<!-- check all for category -->
<script>
  $(document).ready(function(){
  $("#tablecheckallcategory #checkall").click(function () {
          if ($("#tablecheckallcategory #checkall").is(':checked')) {
              $("#tablecheckallcategory input[type=checkbox]").each(function () {
                  $(this).prop("checked", true);
              });

          } else {
              $("#tablecheckallcategory input[type=checkbox]").each(function () {
                  $(this).prop("checked", false);
              });
          }
      });
      
      $("[data-toggle=tooltip]").tooltip();
  });
 </script>
 
<!-- Engineer alert and delete data -->
 
</body>
</html>
