<div id="header" class="header navbar-default">
        <!-- begin navbar-header -->
        <div class="navbar-header">
            <a href="{{route('home')}}" class="navbar-brand">
            <span class="navbar-logo"></span> 
            <b>Luis</b>
          </a>
          <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- end navbar-header -->
        
        <!-- begin header-nav -->
        <ul class="navbar-nav navbar-right">
          {{-- <li>
            <form class="navbar-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter keyword" />
                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </li> --}}
          {{-- <li class="dropdown">
            <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
              <i class="fa fa-bell"></i>
              <span class="label">5</span>
            </a>
            <ul class="dropdown-menu media-list dropdown-menu-right">
              <li class="dropdown-header">NOTIFICATIONS (5)</li>
              <li class="media">
                <a href="javascript:;">
                  <div class="media-left">
                    <i class="fa fa-bug media-object bg-silver-darker"></i>
                  </div>
                  <div class="media-body">
                    <h6 class="media-heading">
                      Server Error Reports 
                      <i class="fa fa-exclamation-circle text-danger"></i>
                    </h6>
                    <div class="text-muted f-s-11">3 minutes ago</div>
                  </div>
                </a>
              </li>
              <li class="dropdown-footer text-center">
                <a href="javascript:;">View more</a>
              </li>
            </ul>
          </li> --}}
          <li class="dropdown navbar-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
             {{auth()->user()->name}}
             <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
            </div>
          </li>
        </ul>
        <!-- end header navigation right -->
      </div>