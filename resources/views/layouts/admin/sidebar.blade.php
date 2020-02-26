  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     <div class="user-panel text-center" >
          <img src="{{url('public/img/logo.png')}}" class="img-thumbnail" alt="User Image">
          
      </div>

      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
        <li>
          <a href="{{route('admin.mailserver')}}">
            <i class="fa fa-user"></i> <span>Create Mail Server</span>
          </a>
        </li>
        <li>
          <a href="{{route('admin.sesserver')}}">
            <i class="fa fa-user"></i> <span>Create Ses Server</span>
          </a>
        </li>
       
       
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>