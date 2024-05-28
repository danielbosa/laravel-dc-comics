<header class="">
    <div>
        <div class="db-container db-d-flex">
            <div class="db-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
            </div>
            <ul>
                @foreach ( $headerOptions as $option)
                    <li>
                        <a href="{{$option['link']}}">{{$option['name']}}</a>
                    </li>
                @endforeach
            </ul>
            <div class="db-input">
                <input type="search" id="search" name="search" placeholder="Search">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </div>
    </div>
</header>
