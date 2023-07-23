        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="brand-link">
                <img src="{{ asset('user/img/icon-deal.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">FBSO.com</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('storage/users-avatar/' . Auth::user()->avatar) }}"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item {{ Route::is('home') ? 'menu-open' : '' }}">
                            <a href="{{ url('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>




                        {{-- Property Dealer --}}
                        @if (Auth::user()->role_id == '3')
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        My Bookings
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Users Bookings
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        My Appointments
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Users Appointments
                                    </p>
                                </a>
                            </li>

                            <li
                                class="nav-item {{ ((Route::is('propertyRent') ? 'menu-open' : '' || Route::is('createProperty')) ? 'menu-open' : '' || Route::is('Listproperty')) ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ ((Route::is('propertyRent') ? 'active' : '' || Route::is('createProperty')) ? 'active' : '' || Route::is('Listproperty')) ? 'active' : '' }}">
                                    <i class="nav-icon fa fa-building"></i>
                                    <p>
                                        My Properties
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('createProperty') }}"
                                            class="nav-link {{ Route::is('createProperty') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add new Property</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('property/rent') }}"
                                            class="nav-link {{ Route::is('Listproperty') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Rent</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('property/sell') }}"
                                            class="nav-link {{ Route::is('Listproperty') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Sell</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-heart"></i>
                                    <p>
                                        Liked Properties
                                    </p>
                                </a>
                            </li>
                        @endif

                        {{-- Admin --}}
                        @if (Auth::user()->role_id == '1')
                            <li class="nav-item">
                                <a href="{{ url('userscontact') }}" class="nav-link {{ Route::is('userscontact') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Contacts
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item {{ Route::is('users') ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link {{ Route::is('users') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Users
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('/users/admin') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Admin</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/users/agent') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Agents</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/users/user') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Customers</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/users/dealer') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Property dealers</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>

                        {{-- Logout --}}
                        <li class="nav-item">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"
                                class="nav-link">
                                <i class="nav-icon fa fa-sign-out"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
