<div class="sidebar" data-color="white" data-active-color="danger">
  <div class="logo">
    <a href="{{route('admin.home')}}" class="simple-text logo-mini">
      <div class="logo-image-small">
        <img src="{{asset('assets/img/logo-small.png')}}">
      </div>
      <!-- <p>CT</p> -->
    </a>
    <a href="{{route('admin.home')}}" class="simple-text logo-normal">
      Laravel Admin
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="{{route('admin.home')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a data-toggle="collapse" href="#componentsExamples" class="collapsed" aria-expanded="false">
              <i class="nc-icon nc-single-02"></i>
              <p>User Management
               <b class="caret"></b>
             </p>
           </a>
           <div class="collapse" id="componentsExamples" aria-expanded="false" style="height: 0px;">
            <ul class="nav">
              <li>
                <a href="{{route('admin.users.index')}}">
                  <span class="sidebar-mini">U</span>
                  <span class="sidebar-normal">Users</span>
                </a>
              </li>
              <li>
                <a href="{{route('admin.roles.index')}}">
                  <span class="sidebar-mini">R</span>
                  <span class="sidebar-normal">Roles</span>
                </a>
              </li>
              <li>
                <a href="{{route('admin.permissions.index')}}">
                  <span class="sidebar-mini">P</span>
                  <span class="sidebar-normal">Permissions</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>