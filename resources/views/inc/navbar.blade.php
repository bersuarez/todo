<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="{{Request::is('/') ? 'active' : ''}}">
                <a href="/">Home</a></li>
            <li class="{{Request::is('/todo/create') ? 'active' : ''}}">
                <a href="todo/create">Create todo</a>
            </li>
        </ul>
    </div>
</nav>