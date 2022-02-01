<nav class="navbar navbar-expand navbar-dark blue-gradient">
    <a href="{{ Auth::id() ? route('quizzes.index') : route('top') }}" class="navbar-brand"><i class="fab fa-linux fa-lg mr-1"></i>LinuQuiz</a>

    <ul class="navbar-nav ml-auto">
    @guest
        <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
        </li>
    @endguest

    @guest
        <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">ログイン</a>
        </li>        
    @endguest
    
    @auth
    <li class="nav-item">
    <a class="nav-link" href="{{ route('quizzes.create') }}"><i class="fas fa-pen mr-1"></i>問題を投稿する</a>
    </li>
    @endauth

    @auth
    <li class="nav-item">
        <button class="btn btn-outline-success btn-sm " form="logout-button" type="submit">ログアウト</button>
    </li>
    
    <form id="logout-button" method="POST" action="{{ route('logout') }}">
    @csrf
    </form>

    @endauth

    </ul>

    </nav>
</nav>