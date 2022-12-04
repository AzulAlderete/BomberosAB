    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMINISTRACION</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        CRUD
      </div>

      <!-- Nav Item - Charts BOCA DE AGUA -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('bocaagua.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span> Boca de Agua</span></a>
      </li>
       <!-- Nav Item - Charts HERRAMIENTA -->
       <li class="nav-item">
        <a class="nav-link" href="{{ route('herramienta.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Herramientas</span></a>
      </li>
       <!-- Nav Item - Charts INSUMO -->
       <li class="nav-item">
        <a class="nav-link" href="{{ route('insumo.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Insumos</span></a>
      <!-- Nav Item - Charts PERSONAL -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('personal.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
         
          <span>Personal</span></a>
      </li>
      <!-- Nav Item - Charts SINIESTRO -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('siniestro.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Siniestros</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('servicio.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Servicios</span></a>
      </li>
          <!-- Nav Item - Charts VEHICULO -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('vehiculo.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Vehiculos</span></a>
      </li>

    </ul>
    <!-- End of Sidebar -->