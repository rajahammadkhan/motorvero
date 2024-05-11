<div>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list pt-4">
                <li class="sidebar-user-panel active">
                    <div class="contact-photo">
                        <div class="profile-usertitle ml-4">
                        </div>
                    </div>
                </li>

                <li>
                    <a href="{{url('/')}}" target="_blank">
                        <i class="fas fa-eye"></i>
                        <span>View Store</span>
                    </a>
                </li>
                @can('dashboard-sidebar')
                    <li>
                        <a href="{{url('admin/dashboard')}}">
                            <i class="fas fa-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                @endcan
                @can('press-sidebar')
                    <li>
                        <a href=" {{route('press_release.index')}}">
                            <i class="fab fa-blogger"></i>
                            <span> Press Release</span>
                        </a>
                    </li>
                @endcan
                @can('blog-sidebar')
                    <li>
                        <a href=" {{route('blog.index')}}">
                            <i class="fab fa-blogger"></i>
                            <span> Blog</span>
                        </a>
                    </li>
                @endcan
{{--                @can('blog-sidebar')--}}
                    <li>
                        <a href=" {{route('expert-review.index')}}">
                            <i class="fab fa-blogger"></i>
                            <span>Expert Review</span>
                        </a>
                    </li>
{{--                @endcan--}}
                @can('event-sidebar')
                    <li>
                        <a href="">
                            <i class="fab fa-blogger"></i>
                            <span> Event</span>
                        </a>
                    </li>
                @endcan
                @can('configuration-sidebar')
                    <li>
                        <a onClick="return false;" class="menu-toggle" href="">
                            <i class="fa fa-cog"></i>
                            <span>Makes / Models</span>
                        </a>
                        <ul class="ml-menu">
                            @can('make-sidebar')
                                <li>
                                    <a href=" {{route('make.index')}}">
                                        <span>Make</span>
                                    </a>
                                </li>
                            @endcan
                            @can('model-sidebar')
                                <li>
                                    <a href=" {{route('model.index')}}">
                                        <span>Model</span>
                                    </a>
                                </li>
                            @endcan

                        </ul>
                    </li>
                @endcan
                @can('car-sidebar')
                    <li>
                        <a onClick="return false;" class="menu-toggle" href="">
                            <i class="fas fa-unlock-alt"></i>
                            <span> Cars </span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href=" {{route('car.create')}}">
                                    <span>Add New Car</span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{route('car.index')}}">
                                    <span>Car List</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan
                @can('setting-sidebar')
                    <li>
                        <a onClick="return false;" class="menu-toggle" href="">
                            <i class="fa fa-cog"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('admin/location') }}">
                                    <span>Location</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/job') }}">
                                    <span>Job</span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{route('career.index')}}">
                                    <span>Career</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('pre-qualified.index')}}">
                                    <span>Pre Qualified</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('request-info.index')}}">
                                    <span>Request Information</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('apply.index')}}">
                                    <span>Apply Now</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('talent.index')}}">
                                    <span>Our Talent</span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{route('contacts.index')}}">
                                    <span>Contact</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('testimonial-sidebar')
                    <li>
                        <a href="{{url('admin/testimonial')}}">
                            <i class="fa fa-quote-left"></i>
                            <span>testimonial</span>
                        </a>
                    </li>
                @endcan
                @can('contact-dealer-sidebar')
                    <li>
                        <a href="{{url('admin/contact-dealer')}}">
                            <i class="fas fa-phone"></i>
                            <span>Contact Dealer</span>
                        </a>
                    </li>
                @endcan
                @can('pending-sidebar')
                    <li>
                        <a href="{{url('admin/approval')}}">
                            <i class="fas fa-user"></i>
                            <span>Pending Approval</span>
                        </a>
                    </li>
                @endcan
                @can('blog-approval-sidebar')
                    <li>
                        <a href="{{url('admin/blog-approval')}}">
                            <i class="fas fa-user"></i>
                            <span>Pending Blog Approval</span>
                        </a>
                    </li>
                @endcan
                @can('reviews-sidebar')
                    <li>
                        <a href="{{url('admin/reviews')}}">
                            <i class=" fa fa-star"></i>
                            <span>Reviews</span>
                        </a>
                    </li>
                @endcan
                @can('newsletter-sidebar')
                    <li>
                        <a href="{{ url('admin/subscriber') }}">
                            <i class="fas fa-newspaper"></i>
                            <span>Newsletter</span>
                        </a>
                    </li>
                @endcan
                @can('roles-and-permission-sidebar')
                    <li>
                        <a onClick="return false;" class="menu-toggle" href="">
                            <i class="fas fa-unlock-alt"></i>
                            <span> Roles | Permission</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href=" {{route('roles.index')}}">
                                    <span>Roles</span>
                                </a>
                            </li>
                            <li>
                                <a href=" {{route('permissions.index')}}">
                                    <span>Permissions</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan
                @can('countries-sidebar')
                    <li>
                        <a href="{{url('admin/countries')}}">
                            <i class="fas fa-user"></i>
                            <span>Countries</span>
                        </a>
                    </li>
                @endcan
                @can('userinfo-sidebar')

                    <li>
                        <a href="{{url('admin/user-info')}}">
                            <i class="fas fa-user"></i>
                            <span>Users</span>
                        </a>
                    </li>
                @endcan
                @can('user-sidebar')
                    <li>
                        <a href="{{url('admin/users')}}">
                            <i class="fas fa-user"></i>
                            <span>Users Management</span>
                        </a>
                    </li>
                @endcan
                @can('my-profile')
                    <li>
                        <a href="{{url('admin/myprofile')}}">
                            <i class="fas fa-user-alt"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href=" {{url('/inbox')}}">
                            <i class="fab fa-blogger"></i>
                            <span>Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href=" {{url('/sell-car-logs')}}">
                            <i class="fab fa-blogger"></i>
                            <span>Sell Car Detail</span>
                        </a>
                    </li>
                @endcan
                <li>
                    <form class="m-0" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="#" :href="route('logout')"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <i class="fas fa-power-off"></i> <span>
                                {{ __('Log Out') }}
                            </span>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <div class="copyright">
            Powered By <a href="https://eliteblue.net/" class="text-dark d-block" target="_blank">Elite Blue
                Technologies</a>
        </div>
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation">
                <a href="#skins" data-toggle="tab" class="active">SKINS</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                <div class="demo-skin">

                    <div class="rightSetting">
                        <p>SIDEBAR MENU COLORS</p>
                        <button type="button"
                                class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light
                        </button>
                        <button type="button"
                                class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark
                        </button>
                    </div>
                    <div class="rightSetting">
                        <p>THEME COLORS</p>
                        <button type="button"
                                class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">Light
                        </button>
                        <button type="button"
                                class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">Dark
                        </button>
                    </div>
                    <div class="rightSetting">
                        <p>SKINS</p>
                        <ul class="demo-choose-skin choose-theme list-unstyled">
                            <li data-theme="black" class="actived">
                                <div class="black-theme"></div>
                            </li>
                            <li data-theme="white">
                                <div class="white-theme white-theme-border"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple-theme"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue-theme"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan-theme"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green-theme"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange-theme"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-green"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-blue"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-purple"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-cyan"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-red"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-lime"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</div>
<style>
    .copyright {
        position: absolute;
        bottom: 0 !important;
        width: 100% !important;
        text-align: center;
        font-size: 13px;
        padding: 15px;
        background: white;
        border-top: 1px solid #f1f2f7;
        z-index: 999;
    }

    .sidebar .menu .list {
        padding-bottom: 80px;
    }
</style>
