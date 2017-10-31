<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ LaravelLocalization::getLocalizedURL($locale = null, $url = '/') }}">jodelCMS</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @foreach($menu->toHierarchy() as $node)
                    {!! renderMainMenu($node, $path) !!}
                @endforeach
            </ul>
            <ul class="language_bar_chooser">
                @include('partials.lang-switcher')
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>