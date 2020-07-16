<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">Tasklist</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
        　　<ul class="navbar-nav mr-auto"></ul>
        　　<ul class="navbar-nav">
        　　    @if (Auth::check()
        　　      <li class="nav-item dropdown">
                    <ul class="dropdown-menu dropdown-menu-right">
                        {{-- ログアウトへのリンク --}}
                        <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                    </ul>
                </li>
              @else
                <ul class="nav navbar-nav navbar-right">
                    {{-- ユーザ登録ページへのリンク --}}
                    <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li><a href="#">Login</a></li>
                </ul>
              @endif
                
        　　  　  <li class="nav-item">{!! link_to_route('tasks.create', '新規作成', [], ['class' => 'nav-link']) !!}</li>
            </ul>
    　　</div>
    </nav>
</header>