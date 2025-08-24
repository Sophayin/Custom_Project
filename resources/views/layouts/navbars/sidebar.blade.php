 <!-- <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link " href="{{asset('/')}}">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ route('comp') }}" class="{{ Route::is('comp') ? 'active' : '' }}">
                         <i class="bi bi-circle"></i><span>Alerts</span>
                     </a>
                 </li>
                 <li>
                     <a href="#">
                         <i class="bi bi-circle"></i><span>Accordion</span>
                     </a>
                 </li>
                 <li>
                     <a href="components-badges.html">
                         <i class="bi bi-circle"></i><span>Badges</span>
                     </a>
                 </li>
                 <li>
                     <a href="components-breadcrumbs.html">
                         <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                     </a>
                 </li>
             </ul>
         </li>
     </ul>
 </aside> -->
 <aside id="sidebar" class="sidebar">
     <ul class="sidebar-nav" id="sidebar-nav">
         <li class="nav-item">
             <a wire:navigate class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('comp') || request()->routeIs('accordion') ? '' : 'collapsed' }}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-menu-button-wide"></i>
                 <span>Components</span>
                 <i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav" class="nav-content collapse {{ request()->routeIs('comp') || request()->routeIs('accordion') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                 <li>
                     <a  wire:navigate href="{{ route('comp') }}" class="{{ request()->routeIs('comp') ? 'active' : '' }}">
                         <i class="bi bi-circle"></i>
                         <span>Alerts</span>
                     </a>
                 </li>
                 <li>
                     <a   wire:navigate href="{{ route('accordion') }}" class="{{ request()->routeIs('accordion') ? 'active' : '' }}">
                         <i class="bi bi-circle"></i>
                         <span>Accordion</span>
                     </a>
                 </li>
                 <li>
                     <a  wire:navigate href="#">
                         <i class="bi bi-circle"></i>
                         <span>Badges</span>
                     </a>
                 </li>
                 <li>
                     <a  wire:navigate href="#">
                         <i class="bi bi-circle"></i>
                         <span>Breadcrumbs</span>
                     </a>
                 </li>
             </ul>
         </li>
     </ul>
 </aside>