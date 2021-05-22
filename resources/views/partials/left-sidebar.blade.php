<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>GENERAL</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('branch.index') }}"><i class="fa fa-circle-o"></i> Branch</a></li>
            <li><a href="{{ route('brand-model.index') }}"><i class="fa fa-circle-o"></i> Brand</a></li>
            <li><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i> Category</a></li>
            <li><a href="{{ route('engineer.index') }}"><i class="fa fa-circle-o"></i> Engineers</a></li>
            <li><a href="{{ route('group.index') }}"><i class="fa fa-circle-o"></i> Group</a></li>
            <li><a href="{{ route('position.index') }}"><i class="fa fa-circle-o"></i> Position</a></li>
            <li><a href="{{ route('status.index') }}"><i class="fa fa-circle-o"></i> Status</a></li>
            <li><a href="{{ route('verify.index') }}"><i class="fa fa-circle-o"></i> Verifier</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bell-o"></i> <span>INCIDENT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('incident.index') }}"><i class="fa fa-circle-o"></i> New Incident</a></li>
          </ul>
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-bell-o"></i> <span>PC CHECKING</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> New Incident</a></li>
          </ul>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-hourglass-end"></i> <span>REPORT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i>General report</a></li>
          </ul>
        </li>
</ul>