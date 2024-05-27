<footer>
    <section class="db-footer-one">
        <div class="db-container">
            <div class="db-footer-links">
                @foreach ( $footerMenu as $menuItem)
                <div>
                    <h5>{{ $menuItem['title'] }}</h5>
                    <ul>
                        @foreach ( $menuItem['links'] as $item )
                            <li>
                                <a href="{{$item['url']}}">{{$item['text']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="db-footer-two">
        <div class="db-container">
            <a class="db-cta" href="#">sign-up now!</a>
            <div class="db-footer-icons">
                <div>follow us</div>
                <div>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
</footer>
