<nav class="sidebar">
    <div class="sidebarHeader">
            <img class="sidebarHeader__image" src="{{ asset('assets/sidebar/logo.png') }}" alt="logo">
            <span class="sidebarHeader__text">Rumah Kucing Neko</span>
    </div>
    <ul class="sidebarMenu">
        <li class="sidebarMenu__list" >
            <a href="/admin" class="{{ (request()->is('admin')) ? 'sidebarMenu__items sidebarMenu__items--active' : 'sidebarMenu__items' }}">
                <i class='bx bxs-home sidebarMenu__image'></i>
                <span class="sidebarMenu__text">Dashboard</span>
            </a>
        </li>
        <li class="sidebarMenu__list">
            <a class="{{ (request()->is('admin/content*')) ? ' sidebarMenu__items sidebarMenu__items--active' : 'sidebarMenu__items' }}">
                <i class='bx bx-book-content sidebarMenu__image'></i>
                <span class="sidebarMenu__text">Content</span>
                <i class='bx bx-chevron-right arrow-right'></i>
            </a>
            <ul class="sidebarSubmenu">
                <li><a href="/admin/content-adopt" class="sidebarSubmenu__items">Adopt Cat</a></li>
                <li><a href="/admin/gallery" class="sidebarSubmenu__items">Gallery</a></li>
            </ul>
        </li>
        <li class="sidebarMenu__list">
            <a href="/admin/chat" class="sidebarMenu__items">
                <i class='bx bx-chat sidebarMenu__image' ></i>
                <span class="sidebarMenu__text">Messages</span>
            </a>
        </li>
        <li class="sidebarMenu__list">
            <a href="/admin/customers" class="sidebarMenu__items">
                <i class='bx bxs-user sidebarMenu__image' ></i>
                <span class="sidebarMenu__text">Customers</span>
            </a>
        </li>
        <li class="sidebarMenu__list">
            <a class="sidebarMenu__items">
                <i class='bx bxs-cart sidebarMenu__image' ></i>
                <span class="sidebarMenu__text">Order</span>
                <i class='bx bx-chevron-right arrow-right' ></i>
            </a>
            <ul class="sidebarSubmenu">
                <li><a href="/admin/order-ongoing" class="sidebarSubmenu__items">Ongoing</a></li>
                <li><a href="/admin/order-history" class="sidebarSubmenu__items">History</a></li>
            </ul>
        </li>
        <li class="sidebarMenu__list">
            <a href="/admin/employee-working" class="sidebarMenu__items">
                <i class='bx bx-id-card sidebarMenu__image' ></i>
                <span class="sidebarMenu__text">Employee</span>
            </a>
        </li>
    </ul>
</nav>
