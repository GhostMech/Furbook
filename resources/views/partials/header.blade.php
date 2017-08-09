<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <span class="h4">Welcome to </span><h1>Furbook!</h1>
        </div>
        <div class="col-xs-6">
        @if ($_SERVER['REQUEST_URI'] !== '/cats')
        <span class="pull-right"><a href="/cats"><h4>Return to Homepage</h4></a>
            <?php $isBreed = explode('/', $_SERVER['REQUEST_URI']); ?>
            @if ($_SERVER['REQUEST_URI'] !== '/cats/breeds')
                <span class="pull-right"><a href="/cats/breeds"><h5>Return to Cat Breeds</h5></a></span>
            @endif
        @endif
        </div>
    </div>
</div>