<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">DB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link ha"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Menu</li>
            <li class="nav-item dropdown {{ $type_menu === 'user' ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link ha"><i
                        class="fas fa-users"></i><span>Users</span></a>

            </li>

            <li class="nav-item dropdown {{ $type_menu === 'product' ? 'active' : '' }}">
                <a href="{{ route('product.index') }}" class="nav-link ha"><i
                        class="fas fa-box"></i><span>Product</span></a>

            </li>

            <li class="nav-item dropdown {{ $type_menu === 'transaksi' ? 'active' : '' }}">
                <a href="{{ route('transaksi.index') }}" class="nav-link ha"><i
                        class="fas fa-layer-group"></i><span>Transaksi</span></a>

            </li>


        </ul>
    </aside>
</div>
