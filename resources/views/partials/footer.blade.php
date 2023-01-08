<footer>
    <div class="container">
        <div class="list-footer">
            <nav>
                <h3>DC COMICS</h3>
                <ul>
                    <li><a class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}"
                            href="{{ Route('characters') }}">characters</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}"
                            href="{{ Route('comics') }}">comics</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}"
                            href="{{ Route('movies') }}">movies</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}"
                            href="{{ Route('tv') }}">tv</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}"
                            href="{{ Route('games') }}">games</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}"
                            href="{{ Route('videos') }}">videos</a></li>
                    <li><a class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}"
                            href="{{ Route('news') }}">news</a></li>
                </ul>
                <h3>SHOP</h3>
                <ul>
                    <li>
                        <a href="#">Shop Dc</a>
                    </li>
                    <li>
                        <a href="#">Shop DC Collectibles</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="list-footer">
            <nav>
                <h3>DC</h3>
                <ul>
                    <li>
                        <a href="#">Terms Of Use</a>
                    </li>
                    <li>
                        <a href="#">Privacy policy(New)</a>
                    </li>
                    <li>
                        <a href="#">Ad Choices</a>
                    </li>
                    <li>
                        <a href="#">Adverstising</a>
                    </li>
                    <li>
                        <a href="#">Jobs</a>
                    </li>
                    <li>
                        <a href="#">Subscription</a>
                    </li>
                    <li>
                        <a href="#">Talent Workshop</a>
                    </li>
                    <li>
                        <a href="#">CPSC Certificates</a>
                    </li>
                    <li>
                        <a href="#">Ratings</a>
                    </li>
                    <li>
                        <a href="#">Shop Help</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="list-footer">
            <nav>
                <h3>SITES</h3>
                <ul>
                    <li>
                        <a href="#">DC</a>
                    </li>
                    <li>
                        <a href="#">MAD Magazine</a>
                    </li>
                    <li>
                        <a href="#">DC Kids</a>
                    </li>
                    <li>
                        <a href="#">DC Universe</a>
                    </li>
                    <li>
                        <a href="#">DC Power Visa</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
