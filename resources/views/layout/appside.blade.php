
<!-- APP ASIDE ==========-->
<aside id="menubar" class="menubar light">
  <div class="app-user">
    <div class="media">
      <div class="media-body">
        <div class="foldable">
          <h5><a href="{{url('/')}}" class="username">{{Auth::user()->name}}</a></h5>
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">
        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
            <span class="menu-text">Tablero</span>
            
          </a>
        </li>
        
       @if(\Auth::user()->name=='Administrador')
        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-receipt zmdi-hc-lg"></i>
            <span class="menu-text">Registro</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="{{url('admin/user/create')}}"><span class="menu-text">Crear usuario</span></a></li>
            <li><a href="{{url('admin/route/create')}}"><span class="menu-text">Crear cartera</span></a></li>
            <li><a href="{{url('admin/user')}}"><span class="menu-text">Listar usuarios</span></a></li>
          </ul>
        </li>
        @endif

        @if(\Auth::user()->name=='Agente')
        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-assignment-account zmdi-hc-lg"></i>
            <span class="menu-text">Clientes</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="{{url('client/create')}}"><span class="menu-text">Cliente nuevo</span></a></li>
            <li><a href="{{url('client')}}"><span class="menu-text">Mostrar clientes</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-card zmdi-hc-lg"></i>
            <span class="menu-text">Asignación</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="compose.html"><span class="menu-text">Cálculo de monto máximo</span></a></li>
            <li><a href="compose.html"><span class="menu-text">Solicitud</span></a></li>
            <li><a href="compose.html"><span class="menu-text">Validación</span></a></li>
          </ul>
        </li>

        <li class="has-submenu">
          <a href="javascript:void(0)" class="submenu-toggle">
            <i class="menu-icon zmdi zmdi-money zmdi-hc-lg"></i>
            <span class="menu-text">Pagos</span>
            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
          </a>
          <ul class="submenu">
            <li><a href="{{url('payment')}}"><span class="menu-text">Registrar pago</span></a></li>
            <li><a href="{{url('route')}}"><span class="menu-text">Cobros</span></a></li>
            <li><a href="{{url('transaction')}}"><span class="menu-text">Reporte</span></a></li>
          </ul>
        </li>
        <li>
          <a href="{{url('bill')}}">
            <i class="menu-icon zmdi zmdi-money-off zmdi-hc-lg"></i>
            <span class="menu-text">Gastos</span>
          </a>
        </li>
        @endif

        @if(\Auth::user()->name=='Supervisor')
        @endif        
        
        <li class="menu-separator"><hr></li>

        <li>
          <a href="documentation.html">
            <i class="menu-icon zmdi zmdi-file-text zmdi-hc-lg"></i>
            <span class="menu-text">Documentación</span>
          </a>
        </li>

        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
            <span class="menu-text">Ajustes</span>
          </a>
        </li>
      </ul><!-- .app-menu -->
    </div><!-- .menubar-scroll-inner -->
  </div><!-- .menubar-scroll -->
</aside>
<!--========== END app aside -->