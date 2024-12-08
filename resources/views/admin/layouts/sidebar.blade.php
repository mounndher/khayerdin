<div class="navbar-bg"></div>
<!-- Navbar Start -->
@include('admin.layouts.navbar')
<!-- Navbar End -->

<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">{{ __('admin.Stisla') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">{{ __('admin.St') }}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">{{ __('Dashboard') }}</li>
            <li class="active">
                <a href="{{ route('dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>{{ __('Dashboard') }}</span></a>
            </li>
            <li class="menu-header">{{ __('Sections') }}</li>
            
            
            
                
            <li class="nav-item dropdown 
           ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>
                        Propriétés </span></a>
                <ul class="dropdown-menu" style="display: none;">
                    
                  
                    <li class=""><a class="nav-link" href="{{ route('admin.listings.index') }}">
                        prdouct</a></li>
                   
                
                </ul>
            </li>

           
            <li class="{{setSidebarActive(['admin.listings.*'])}}"><a class="nav-link" href="{{route('admin.listings.index')}}"><i class="far fa-square"></i> <span>Produit</span></a></li>
            <li class="{{setSidebarActive(['admin.category.*'])}}"><a class="nav-link" href="{{route('admin.category.index')}}"><i class="far fa-square"></i> <span>Category</span></a></li>

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Contact</span></a>
                <ul class="dropdown-menu" style="display: none;">
                    <li class=""><a class="nav-link"
                            href="{{ route('admin.contact-section-setting.index') }}">Section Setting</a></li>
                </ul>
            </li>
            <li class="{{setSidebarActive(['admin.about.*'])}}"><a class="nav-link" href="{{route('admin.about.index')}}"><i class="far fa-square"></i> <span>About</span></a></li>


           
            <li class="menu-header">Settings</li>
            <li class="{"><a class="nav-link" href="{{ route('admin.settings.index') }}"><i
                        class="far fa-square"></i> <span>Settings</span></a></li>
            {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> --}}


        

        </ul>
    </aside>
</div>
