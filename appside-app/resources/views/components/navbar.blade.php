<nav class="navbar navbar-area navbar-expand-lg nav-absolute white nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="/" class="logo">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#appside_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="appside_main_menu">
                <ul class="navbar-nav">
                    
                        <li class="current-menu-item">
                            <a href="/">Home</a>
                        </li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="/blogs">Blog</a></li>
                    
                </ul>
            </div>
            @auth    

                <div class="nav-right-content">
                    <ul>
                        <x-dropdown>
                                <x-slot name="trigger">    
                                    <button class="boxed-btn btn-rounded">
                                        {{auth()->user()->name}}
                                    </button>
                                </x-slot>
                                @admin
                                    <x-dropdown-item
                                        href="/admin/blogs"
                                        :active="request()->is('admin/blogs')"
                                    >
                                        Dashboard
                                    </x-dropdown-item>

                                    <x-dropdown-item
                                        href="/admin/blogs/create"
                                        :active="request()->is('admin/blogs/create')"
                                    >
                                        New Blog
                                    </x-dropdown-item>
                                @endadmin

                                <x-dropdown-item
                                    href="#"
                                    x-data="{}"
                                    @click.prevent="document.querySelector('#logout-form').submit()"
                                >
                                    Log Out
                                </x-dropdown-item>
                                <form id="logout-form" method="POST" action="/logout" class="hidden">
                                    @csrf
                                </form>
 
                        </x-dropdown>
                    </ul>
                </div>
            @else
                <div class="nav-right-content">
                    <ul>
                        <li>
                            <a href="/register"
                                class="text-xs font-bold uppercase {{ request()->is('register') ? 'text-blue-500' : '' }}">
                                Register
                            </a>

                            <a href="/login"
                                class="ml-6 text-xs font-bold uppercase {{ request()->is('login') ? 'text-blue-500' : '' }}">
                                Log In
                            </a>
                        </li>
                    </ul>
                </div>
            @endauth        
        </div>
</nav>

    {{$slot}}