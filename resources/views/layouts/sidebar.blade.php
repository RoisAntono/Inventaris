<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
  <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Inventaris</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ ($active === "dashboard") ? 'active' : '' }}">
  <a class="nav-link" href="/dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
</li>

<!-- Nav Item - Produk -->
<li class="nav-item {{ ($active === "produk") ? 'active' : '' }}">
  <a class="nav-link" href="/produk">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Produk</span></a>
</li>

<!-- Nav Item - Checkout -->
<li class="nav-item {{ ($active === "checkout") ? 'active' : '' }}">
  <a class="nav-link" href="/checkout">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Checkout</span></a>
</li>

<!-- Nav Item - Kategori -->
<li class="nav-item {{ ($active === "kategori") ? 'active' : '' }}">
  <a class="nav-link" href="/kategori">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Kategori</span></a>
</li>

<!-- Divider -->
<!--<hr class="sidebar-divider my-0">-->

<!-- Heading -->
<!--<div class="sidebar-heading">
  Interface
</div>-->

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
      aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Components</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="buttons.html">Buttons</a>
          <a class="collapse-item" href="cards.html">Cards</a>
      </div>
  </div>
</li>