<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <div class="avatar"><img class="w-100" src="{{asset( Auth::user()->avatar) }}" alt=""></div>
            <div class="text"> {{ Auth::user()->name }}</div>
        </div>

        <ul class="list-unstyled components">
            <li class="<?=($com == 'home')?"active":""?>">
                <a href="{{ route('admin.home') }}">
                    <i class="glyphicon glyphicon-home"></i>Home
                </a>
            </li>
            <li class="<?=($com == 'pet')?"active":""?>">
                <a href="{{route('admin.pet')}}">
                    <i class="glyphicon glyphicon-briefcase"></i>
                    Pet
                </a>
                {{-- <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-duplicate"></i>
                    Pages
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Page 1</a></li>
                </ul> --}}
            </li>
            <li class="<?=($com == 'species')?"active":""?>">
                <a href="{{route('admin.species')}}">
                    <i class="glyphicon glyphicon-paperclip"></i>
                    Species
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-paperclip"></i>
                    FAQ
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-send"></i>
                    Contact
                </a>
            </li>
        </ul>
        
        <ul class="list-unstyled CTAs">
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </nav>
    <div id="content">
        <button type="button" id="sidebarCollapse" class="toggle btn btn-info navbar-btn">
            <i class="glyphicon glyphicon-align-left"></i>
            <span>Menu</span>
        </button>
        <div class="wrap-content padding50">
            @yield('content')
        </div>
    </div>
</div>