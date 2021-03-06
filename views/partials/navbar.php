<!-- materialize nav bar.  logo on the left buttons on the right -->
<nav>
    <div class="nav-wrapper navbar">
    <!--logo picture-->
        <a class="brand-logo" href="/"><img src="/img/adlister-logo-small.png"></a>

        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            <li><a href="/ads">Items</a></li>
            <?php if (Auth::check()): ?>
                <li><a href="/user/account">Account</a></li>
                <li><a href="/logout">Log Out</a></li>
                <li><a href="/ads/create">Post New Add</a></li>
            <?php else: ?>
                <li><a href="/user/login">Login</a></li>
                <li><a href="/user/signup">Sign Up</a></li>
            <?php endif; ?>
        </ul>

        <ul class="side-nav" id="mobile-demo">
            <li><a href="/">Home</a></li>
            <li><a href="/ads">Items</a></li>
            <?php if (Auth::check()): ?>
                <li><a href="/user/account">Account</a></li>
                <li><a href="/logout">Log Out</a></li>
                <li><a href="/ads/create">Post New Add</a></li>
            <?php else: ?>
                <li><a href="/user/login">Login</a></li>
                <li><a href="/user/signup">Sign Up</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
