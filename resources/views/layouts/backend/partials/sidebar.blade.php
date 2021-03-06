<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a onclick="document.getElementById('logoutForm').submit();" href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a>
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display:none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            
            <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                <a href="{{ route('admin.category.index') }}">
                    <i class="material-icons col-light-blue">donut_large</i>
                    <span>Category</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
                <a href="{{ route('admin.tag.index') }}">
                    <i class="material-icons col-light-blue">donut_large</i>
                    <span>Tag</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/post*') ? 'active' : '' }}">
                <a href="{{ route('admin.post.index') }}">
                    <i class="material-icons col-light-blue">donut_large</i>
                    <span>Post</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/subscriber*') ? 'active' : '' }}">
                <a href="{{ route('admin.subscriber.index') }}">
                    <i class="material-icons col-light-blue">donut_large</i>
                    <span>Subscriber</span>
                </a>
            </li>


        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>