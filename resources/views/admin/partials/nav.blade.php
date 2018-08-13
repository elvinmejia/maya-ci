<div class="nano">
    <div class="nano-content">
        <nav id="menu" class="nav-main" role="navigation">
            <ul class="nav nav-main">
                <!--<li class="nav-active">-->
                <li {{ request()->is('admin') ? 'class=nav-active' : '' }}>
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span>Inicio</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="index.html">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span>User</span>
                    </a>
                </li>--}}
                <li class="nav-parent {{ request()->is('admin/clientes*') ? 'nav-expanded nav-active' : '' }}">
                    <a>
                        <i class="fa fa-copy" aria-hidden="true"></i>
                        <span>Clientes</span>
                    </a>
                    <ul class="nav nav-children">
                        <li {{ request()->is('admin/clientes') ? 'class=nav-active' : '' }}>
                            <a href="{{ route('admin.clientes.index') }}">
                                Ver Clientes
                            </a>
                        </li>
                        {{--<li {{ request()->is('admin/clientes/crear') ? 'class=nav-active' : '' }}>
                            <a href="{{ route('admin.clientes.create')}}">
                                Crear Clientes
                            </a>
                        </li>--}}
                    </ul>
                </li>
                <li class="nav-parent {{ request()->is('admin/mailings*') ? 'nav-expanded nav-active' : '' }}">
                    <a>
                        <i class="fa fa-copy" aria-hidden="true"></i>
                        <span>Mailings</span>
                    </a>
                    <ul class="nav nav-children">
                        <li {{ request()->is('admin/mailings') ? 'class=nav-active' : '' }}>
                            <a href="{{ route('admin.mailing.index') }}">
                                Ver Mailings
                            </a>
                        </li>
                        {{--<li {{ request()->is('admin/clientes/crear') ? 'class=nav-active' : '' }}>
                            <a href="{{ route('admin.clientes.create')}}">
                                Crear Clientes
                            </a>
                        </li>--}}
                    </ul>
                </li>
                {{-- <li class="nav-parent">
                    <a>
                        <i class="fa fa-copy" aria-hidden="true"></i>
                        <span>Noticias</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="javascript:">
                                Ver Noticias
                            </a>
                        </li>
                        <li>
                            <a href="pages-signup.html">
                                Crear Noticias
                            </a>
                        </li>
                    </ul>
                </li>--}}
            </ul>
        </nav>
    </div>
</div>