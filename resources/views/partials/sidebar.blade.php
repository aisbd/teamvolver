<nav class="col-md-2 sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a data-toggle="tooltip" data-placement="bottom" title="Dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : ''  }}" href="/dashboard">
                    <i class="fas fa-chart-bar"></i>
                </a>
            </li>

@if(\Auth::user()->type == 'igniter')
            <li class="nav-item">
                <a data-toggle="tooltip" data-placement="bottom" title="Form Team" class="nav-link {{ Request::is('form-team') ? 'active' : ''  }}" href="/form-team">
                    <i class="fas fa-users"></i>
                </a>
            </li>


            <li class="nav-item">
                <a data-toggle="tooltip" data-placement="bottom" title="Gantt"  class="nav-link {{ Request::is('*gantt*') ? 'active' : ''  }}" href="/gantt">
                    <i class="fas fa-sliders-h"></i>
                </a>
            </li>
            
            <li class="nav-item">
                <a data-toggle="tooltip" data-placement="bottom" title="@lang('app.activity_log')"  class="nav-link {{ Request::is('*activity*') ? 'active' : ''  }}" href="/profile/activity">
                    <i class="fas fa-calendar-alt"></i>
                </a>
            </li>
    @else
            
            <li class="nav-item">
                <a data-toggle="tooltip" data-placement="bottom" title="Projects"  class="nav-link {{ Request::is('*projects*') ? 'active' : ''  }}" href="/projects">
                    <i class="fas fa-calendar"></i>
                </a>
            </li>

            <li class="nav-item">
                <a data-toggle="tooltip" data-placement="bottom" title="@lang('app.activity_log')"  class="nav-link {{ Request::is('*activity*') ? 'active' : ''  }}" href="/profile/activity">
                    <i class="fas fa-calendar-alt"></i>
                </a>
            </li>

    @endif
            @permission('users.manage')
            <li class="nav-item">
                <a data-toggle="tooltip" data-placement="bottom" title="@lang('app.users')"  class="nav-link {{ Request::is('user*') ? 'active' : ''  }}" href="{{ route('user.list') }}">
                    <i class="fas fa-users"></i>
                </a>
            </li>
            @endpermission

            @permission('users.activity')
            <li class="nav-item">
                <a data-toggle="tooltip" data-placement="bottom" title="@lang('app.activity_log')"  class="nav-link {{ Request::is('activity*') ? 'active' : ''  }}" href="{{ route('activity.index') }}">
                    <i class="fas fa-server"></i>
                </a>
            </li>
            @endpermission
            <li class="nav-item">
                <a data-toggle="tooltip" data-placement="bottom" title="Logout"  class="nav-link " href="{{ route('auth.logout') }}">
                    <i class="fas fa-power-off"></i>
                </a>
            </li>
{{-- 
            @permission(['roles.manage', 'permissions.manage'])
            <li class="nav-item">
                <span  data-toggle="tooltip" data-placement="bottom" title="@lang('app.roles_and_permissions')"   >
                                <a href="#roles-dropdown"
                   class="nav-link"
                   data-toggle="collapse"
                   aria-expanded="{{ Request::is('role*') || Request::is('permission*') ? 'true' : 'false' }}">
                    <i class="fas fa-users-cog"></i>
                </a>
                </span>

                <ul class="{{ Request::is('role*') || Request::is('permission*') ? '' : 'collapse' }} list-unstyled sub-menu" id="roles-dropdown">
                    @permission('roles.manage')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('role*') ? 'active' : '' }}"
                           href="{{ route('role.index') }}">@lang('app.roles')</a>
                    </li>
                    @endpermission
                    @permission('permissions.manage')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('permission*') ? 'active' : '' }}"
                           href="{{ route('permission.index') }}">@lang('app.permissions')</a>
                    </li>
                    @endpermission
                </ul>
            </li>
            @endpermission

            @permission(['settings.general', 'settings.auth', 'settings.notifications'], false)
            <li class="nav-item">
                <span data-toggle="tooltip" data-placement="bottom" title="@lang('app.activity_log')">
                 <a   href="#settings-dropdown"
                   class="nav-link"
                   data-toggle="collapse"
                   aria-expanded="{{ Request::is('settings*') ? 'true' : 'false' }}">
                    <i class="fas fa-cogs"></i>
                </a>
                </span>

                <ul class="{{ Request::is('settings*') ? '' : 'collapse' }} list-unstyled sub-menu"
                    id="settings-dropdown">

                    @permission('settings.general')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('settings') ? 'active' : ''  }}"
                           href="{{ route('settings.general') }}">
                            @lang('app.general')
                        </a>
                    </li>
                    @endpermission

                    @permission('settings.auth')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('settings/auth*') ? 'active' : ''  }}"
                           href="{{ route('settings.auth') }}">@lang('app.auth_and_registration')</a>
                    </li>
                    @endpermission

                    @permission('settings.notifications')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('settings/notifications*') ? 'active' : ''  }}"
                           href="{{ route('settings.notifications') }}">@lang('app.notifications')</a>
                    </li>
                    @endpermission
                </ul>
            </li>
            @endpermission --}}
        </ul>
    </div>
</nav>

