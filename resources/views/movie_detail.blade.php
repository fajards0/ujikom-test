@extends('layout.layout')

@section('content')

     <!-- Hero Banner start -->
     <div class="inner-banner p-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="videoplayer">
                        <div id="video" data-img="https://uiparadox.co.uk/templates/vivid/v3/assets/media/banner/img-2.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Start -->
    <div class="page-content">

        <!-- Movie Detail Area Start -->
        <section class="movie-detail p-40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-9 mb-lg-0 mb-24">
                        <div class="name-rating mb-24">
                            <h2 class="h-30 bold color-white ">Demon Slayer: Kimetsu no Yaiba : Season 1</h2>
                            <div class="rating">
                                <span class="h-24 color-white">
                                    4.9
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M16.0001 23.027L21.5334 26.3737C22.5468 26.987 23.7868 26.0803 23.5201 24.9337L22.0534 18.6403L26.9468 14.4003C27.8401 13.627 27.3601 12.1603 26.1868 12.067L19.7468 11.5203L17.2268 5.57367C16.7734 4.49367 15.2268 4.49367 14.7734 5.57367L12.2534 11.507L5.81343 12.0537C4.6401 12.147 4.1601 13.6137 5.05343 14.387L9.94676 18.627L8.4801 24.9203C8.21343 26.067 9.45343 26.9737 10.4668 26.3603L16.0001 23.027Z" fill="#EEAA0F"/>
                                    </svg>
                                </span>
                                <span class="h-24 color-white">(22.6k)</span>
                            </div>
                        </div>
                        <ul class="tag unstyled mb-24">
                            <li>18+</li>
                            <li>HD</li>
                            <li>2029</li>
                            <li>Anime</li>
                            <li>1hr 45m</li>
                        </ul>
                        <h5 class="h-24 color-white mb-16 bold">About the Story</h5>
                        <p class="sec color-white mb-24">Flame Hashira Kyojuro Rengoku receives new orders: Travel to the Mugen Train, where over forty people have <br>
                            gone missing, and conduct an investigation. Leaving the Demon Slayer Corps Headquarters, he sets off on this <br> new mission.
                        </p>

                        <p class="sec color-white mb-16"><span class="color-medium-gray">Staring:</span> Natsuki Hanae, Akari Kito, Hiro Shimono </p>
                        <p class="sec color-white mb-16"><span class="color-medium-gray">Language:</span> Japanese, English, English (India), Español (América Latina)</p>
                        <p class="sec color-white mb-30"><span class="color-medium-gray">Subtitles:</span> Japanese, English</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal" class="cus-btn primary">
                            <i class="far fa-play"></i>
                            Play
                        </a>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-3">
                        <div class="about">
                            <h3 class="h-30 bold color-white mb-24">About</h3>
                            <p class="sec color-white mb-8"><span class="color-medium-gray">Type:</span>Movie</p>
                            <p class="sec color-white mb-8"><span class="color-medium-gray">Director:</span> Bones</p>
                            <p class="sec color-white mb-8"><span class="color-medium-gray">Date aired:</span> Jan 15, 2022</p>
                            <p class="sec color-white mb-8"><span class="color-medium-gray">Status:</span> Completed</p>
                            <p class="sec color-white mb-8"><span class="color-medium-gray">Country:</span> Japan</p>
                            <p class="sec color-white mb-8"><span class="color-medium-gray">Premiered:</span> Winter 2022</p>
                            <p class="sec color-white mb-24"><span class="color-medium-gray">Duration:</span> 120 min</p>
                            <div class="categorie">
                                <p class="sec color-medium-gray">Genre:</p>
                                <ul class="categorie-list unstyled">
                                    <li><a href="">Action</a></li>
                                    <li><a href="">Thriller</a></li>
                                    <li><a href="">Sci-Fi</a></li>
                                    <li><a href="">Cyberpunk</a></li>
                                    <li><a href="">Shounen</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
            </div>
        </section>
        <!-- Movie Detail Area end -->

        <!-- Recently Area Start -->
        <section class="trending p-40">
            <div class="container-fluid">
                <h2 class="h-40 mb-40 bold">Recently Released</h2>
                <div class="card-slider ">
                    <div class="card st-2">
                        <div class="img-block mb-20">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-22.png" alt="">
                            <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                Stream Now
                                <i class="far fa-play"></i>
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="h-24 color-white bold">Demon Slayer</h4>
                            <ul class="tag unstyled">
                                <li>Action</li>
                                <li>2021</li>
                                <li>EP-24</li>
                                <li class="icon"><i class="fas fa-star"></i></li>
                                <li>8.5</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card st-2">
                        <div class="img-block mb-20">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-3.png" alt="">
                            <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                Stream Now
                                <i class="far fa-play"></i>
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="h-24 color-white bold">Hells Paradise</h4>
                            <ul class="tag unstyled">
                                <li>Action</li>
                                <li>2021</li>
                                <li>EP-24</li>
                                <li class="icon"><i class="fas fa-star"></i></li>
                                <li>8.5</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card st-2">
                        <div class="img-block mb-20">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-8.png" alt="">
                            <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                Stream Now
                                <i class="far fa-play"></i>
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="h-24 color-white bold">Fate Stay Night</h4>
                            <ul class="tag unstyled">
                                <li>Action</li>
                                <li>2021</li>
                                <li>EP-24</li>
                                <li class="icon"><i class="fas fa-star"></i></li>
                                <li>8.5</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card st-2">
                        <div class="img-block mb-20">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-9.png" alt="">
                            <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                Stream Now
                                <i class="far fa-play"></i>
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="h-24 color-white bold">Steins Gate</h4>
                            <ul class="tag unstyled">
                                <li>Action</li>
                                <li>2021</li>
                                <li>EP-24</li>
                                <li class="icon"><i class="fas fa-star"></i></li>
                                <li>8.5</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card st-2">
                        <div class="img-block mb-20">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-19.png" alt="">
                            <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn light">
                                Stream Now
                                <i class="far fa-play"></i>
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="h-24 color-white bold">Arcane</h4>
                            <ul class="tag unstyled">
                                <li>Action</li>
                                <li>2021</li>
                                <li>EP-24</li>
                                <li class="icon"><i class="fas fa-star"></i></li>
                                <li>8.5</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Recently Area Start -->

        <!-- Continue Area Start -->
        <section class="continue p-40 pb-0">
            <div class="container-fluid">
                <div class="heading mb-32">
                    <h2 class="h-40 bold">Continue Watching</h2>
                    <a href="https://uiparadox.co.uk/templates/vivid/v3/anime-listing.html" class="light-btn primary">View All <i class="far fa-chevron-right"></i></a>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-lg-6">
                        <div class="item mb-40">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-7.png" alt="">
                            <div class="content">
                                <h4 class="h-24 color-white bold mb-12">Hell’s Paradise</h4>
                                <ul class="tag unstyled">
                                    <li>
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 0.5C15.0938 0.5 16 1.40625 16 2.5V12.5C16 13.625 15.0938 14.5 14 14.5H2C0.875 14.5 0 13.625 0 12.5V2.5C0 1.40625 0.875 0.5 2 0.5H14ZM13.5312 1.5H10.1875L7.1875 4.5H10.5312L13.5312 1.5ZM8.78125 1.5H5.4375L2.4375 4.5H5.78125L8.78125 1.5ZM1 2.5V4.5H1.03125L4.03125 1.5H2C1.4375 1.5 1 1.96875 1 2.5ZM15 12.5V5.5H1V12.5C1 13.0625 1.4375 13.5 2 13.5H14C14.5312 13.5 15 13.0625 15 12.5ZM15 4.5V2.5C15 2.21875 14.875 1.96875 14.6562 1.78125L11.9375 4.5H15ZM6.40625 12.4062C6.15625 12.25 6 11.9688 6 11.6562V7.34375C6 7.0625 6.15625 6.78125 6.40625 6.625C6.6875 6.46875 7 6.46875 7.28125 6.65625L10.5938 8.78125C10.8438 8.9375 11 9.1875 11 9.5C11 9.8125 10.8438 10.0625 10.5938 10.2188L7.28125 12.375C7.125 12.4688 6.96875 12.5 6.8125 12.5C6.6875 12.5 6.53125 12.4688 6.40625 12.4062ZM7 7.65625V11.375L9.84375 9.5L7 7.65625Z" fill="#9EA2A8"/>
                                        </svg>
                                        <p class="color-medium-gray">
                                            Season 02
                                        </p>
                                    </li>
                                    <li>
                                        <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 2.5C17.5312 2.5 18 2.96875 18 3.5C18 4.0625 17.5312 4.5 17 4.5C16.9375 4.5 16.875 4.5 16.8125 4.46875L15.2812 12.875C15.125 13.8125 14.2812 14.5 13.3125 14.5H4.65625C3.6875 14.5 2.84375 13.8125 2.6875 12.875L1.15625 4.46875C1.09375 4.5 1.03125 4.5 1 4.5C0.4375 4.5 0 4.0625 0 3.5C0 2.96875 0.4375 2.5 1 2.5C1.53125 2.5 2 2.96875 2 3.5C2 3.75 1.875 3.96875 1.75 4.125L5.03125 6.75C5.21875 6.90625 5.4375 6.96875 5.65625 6.96875C6 6.96875 6.375 6.75 6.53125 6.40625L8.53125 2.40625C8.21875 2.25 8 1.90625 8 1.5C8 0.96875 8.4375 0.5 9 0.5C9.53125 0.5 10 0.96875 10 1.5C10 1.90625 9.75 2.25 9.4375 2.40625L11.4375 6.40625C11.5938 6.75 11.9688 6.96875 12.3125 6.96875C12.5312 6.96875 12.75 6.90625 12.9375 6.75L16.2188 4.125C16.0938 3.96875 16 3.75 16 3.5C16 2.96875 16.4375 2.5 17 2.5ZM14.3125 12.6875L15.5312 5.96875L13.5625 7.53125C13.2188 7.8125 12.7812 7.96875 12.3125 7.96875C11.5625 7.96875 10.875 7.53125 10.5312 6.84375L9 3.75L7.4375 6.84375C7.09375 7.53125 6.40625 7.96875 5.65625 7.96875C5.1875 7.96875 4.75 7.8125 4.40625 7.53125L2.4375 5.96875L3.65625 12.6875C3.75 13.1562 4.15625 13.5 4.65625 13.5H13.3125C13.8125 13.5 14.2188 13.1562 14.3125 12.6875Z" fill="#9EA2A8"/>
                                        </svg>
                                        <p class="color-medium-gray">
                                            Episode 02
                                        </p>
                                    </li>
                                </ul>
                                <div class="btn-block">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn primary space">
                                        <i class="far fa-play"></i>
                                        Play
                                    </a>
                                    <div class="h-20 color-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                            <path d="M12 20.5C14.1217 20.5 16.1566 19.6571 17.6569 18.1569C19.1571 16.6566 20 14.6217 20 12.5C20 10.3783 19.1571 8.34344 17.6569 6.84315C16.1566 5.34285 14.1217 4.5 12 4.5C9.87827 4.5 7.84344 5.34285 6.34315 6.84315C4.84285 8.34344 4 10.3783 4 12.5C4 14.6217 4.84285 16.6566 6.34315 18.1569C7.84344 19.6571 9.87827 20.5 12 20.5ZM12 2.5C13.3132 2.5 14.6136 2.75866 15.8268 3.2612C17.0401 3.76375 18.1425 4.50035 19.0711 5.42893C19.9997 6.35752 20.7362 7.45991 21.2388 8.67317C21.7413 9.88642 22 11.1868 22 12.5C22 15.1522 20.9464 17.6957 19.0711 19.5711C17.1957 21.4464 14.6522 22.5 12 22.5C6.47 22.5 2 18 2 12.5C2 9.84784 3.05357 7.3043 4.92893 5.42893C6.8043 3.55357 9.34784 2.5 12 2.5ZM12.5 7.5V12.75L17 15.42L16.25 16.65L11 13.5V7.5H12.5Z" fill="#F8F8FF"/>
                                        </svg>
                                        24:30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                        <div class="item mb-40">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-8.png" alt="">
                            <div class="content">
                                <h4 class="h-24 color-white bold mb-12">Fate Stay Night        </h4>
                                <ul class="tag unstyled">
                                    <li>
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 0.5C15.0938 0.5 16 1.40625 16 2.5V12.5C16 13.625 15.0938 14.5 14 14.5H2C0.875 14.5 0 13.625 0 12.5V2.5C0 1.40625 0.875 0.5 2 0.5H14ZM13.5312 1.5H10.1875L7.1875 4.5H10.5312L13.5312 1.5ZM8.78125 1.5H5.4375L2.4375 4.5H5.78125L8.78125 1.5ZM1 2.5V4.5H1.03125L4.03125 1.5H2C1.4375 1.5 1 1.96875 1 2.5ZM15 12.5V5.5H1V12.5C1 13.0625 1.4375 13.5 2 13.5H14C14.5312 13.5 15 13.0625 15 12.5ZM15 4.5V2.5C15 2.21875 14.875 1.96875 14.6562 1.78125L11.9375 4.5H15ZM6.40625 12.4062C6.15625 12.25 6 11.9688 6 11.6562V7.34375C6 7.0625 6.15625 6.78125 6.40625 6.625C6.6875 6.46875 7 6.46875 7.28125 6.65625L10.5938 8.78125C10.8438 8.9375 11 9.1875 11 9.5C11 9.8125 10.8438 10.0625 10.5938 10.2188L7.28125 12.375C7.125 12.4688 6.96875 12.5 6.8125 12.5C6.6875 12.5 6.53125 12.4688 6.40625 12.4062ZM7 7.65625V11.375L9.84375 9.5L7 7.65625Z" fill="#9EA2A8"/>
                                        </svg>
                                        <p class="color-medium-gray">
                                            Season 02
                                        </p>
                                    </li>
                                    <li>
                                        <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 2.5C17.5312 2.5 18 2.96875 18 3.5C18 4.0625 17.5312 4.5 17 4.5C16.9375 4.5 16.875 4.5 16.8125 4.46875L15.2812 12.875C15.125 13.8125 14.2812 14.5 13.3125 14.5H4.65625C3.6875 14.5 2.84375 13.8125 2.6875 12.875L1.15625 4.46875C1.09375 4.5 1.03125 4.5 1 4.5C0.4375 4.5 0 4.0625 0 3.5C0 2.96875 0.4375 2.5 1 2.5C1.53125 2.5 2 2.96875 2 3.5C2 3.75 1.875 3.96875 1.75 4.125L5.03125 6.75C5.21875 6.90625 5.4375 6.96875 5.65625 6.96875C6 6.96875 6.375 6.75 6.53125 6.40625L8.53125 2.40625C8.21875 2.25 8 1.90625 8 1.5C8 0.96875 8.4375 0.5 9 0.5C9.53125 0.5 10 0.96875 10 1.5C10 1.90625 9.75 2.25 9.4375 2.40625L11.4375 6.40625C11.5938 6.75 11.9688 6.96875 12.3125 6.96875C12.5312 6.96875 12.75 6.90625 12.9375 6.75L16.2188 4.125C16.0938 3.96875 16 3.75 16 3.5C16 2.96875 16.4375 2.5 17 2.5ZM14.3125 12.6875L15.5312 5.96875L13.5625 7.53125C13.2188 7.8125 12.7812 7.96875 12.3125 7.96875C11.5625 7.96875 10.875 7.53125 10.5312 6.84375L9 3.75L7.4375 6.84375C7.09375 7.53125 6.40625 7.96875 5.65625 7.96875C5.1875 7.96875 4.75 7.8125 4.40625 7.53125L2.4375 5.96875L3.65625 12.6875C3.75 13.1562 4.15625 13.5 4.65625 13.5H13.3125C13.8125 13.5 14.2188 13.1562 14.3125 12.6875Z" fill="#9EA2A8"/>
                                        </svg>
                                        <p class="color-medium-gray">
                                            Episode 02
                                        </p>
                                    </li>
                                </ul>
                                <div class="btn-block">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn primary space">
                                        <i class="far fa-play"></i>
                                        Play
                                    </a>
                                    <div class="h-20 color-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                            <path d="M12 20.5C14.1217 20.5 16.1566 19.6571 17.6569 18.1569C19.1571 16.6566 20 14.6217 20 12.5C20 10.3783 19.1571 8.34344 17.6569 6.84315C16.1566 5.34285 14.1217 4.5 12 4.5C9.87827 4.5 7.84344 5.34285 6.34315 6.84315C4.84285 8.34344 4 10.3783 4 12.5C4 14.6217 4.84285 16.6566 6.34315 18.1569C7.84344 19.6571 9.87827 20.5 12 20.5ZM12 2.5C13.3132 2.5 14.6136 2.75866 15.8268 3.2612C17.0401 3.76375 18.1425 4.50035 19.0711 5.42893C19.9997 6.35752 20.7362 7.45991 21.2388 8.67317C21.7413 9.88642 22 11.1868 22 12.5C22 15.1522 20.9464 17.6957 19.0711 19.5711C17.1957 21.4464 14.6522 22.5 12 22.5C6.47 22.5 2 18 2 12.5C2 9.84784 3.05357 7.3043 4.92893 5.42893C6.8043 3.55357 9.34784 2.5 12 2.5ZM12.5 7.5V12.75L17 15.42L16.25 16.65L11 13.5V7.5H12.5Z" fill="#F8F8FF"/>
                                        </svg>
                                        24:30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                        <div class="item mb-40">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-9.png" alt="">
                            <div class="content">
                                <h4 class="h-24 color-white bold mb-12">Steins Gate</h4>
                                <ul class="tag unstyled">
                                    <li>
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 0.5C15.0938 0.5 16 1.40625 16 2.5V12.5C16 13.625 15.0938 14.5 14 14.5H2C0.875 14.5 0 13.625 0 12.5V2.5C0 1.40625 0.875 0.5 2 0.5H14ZM13.5312 1.5H10.1875L7.1875 4.5H10.5312L13.5312 1.5ZM8.78125 1.5H5.4375L2.4375 4.5H5.78125L8.78125 1.5ZM1 2.5V4.5H1.03125L4.03125 1.5H2C1.4375 1.5 1 1.96875 1 2.5ZM15 12.5V5.5H1V12.5C1 13.0625 1.4375 13.5 2 13.5H14C14.5312 13.5 15 13.0625 15 12.5ZM15 4.5V2.5C15 2.21875 14.875 1.96875 14.6562 1.78125L11.9375 4.5H15ZM6.40625 12.4062C6.15625 12.25 6 11.9688 6 11.6562V7.34375C6 7.0625 6.15625 6.78125 6.40625 6.625C6.6875 6.46875 7 6.46875 7.28125 6.65625L10.5938 8.78125C10.8438 8.9375 11 9.1875 11 9.5C11 9.8125 10.8438 10.0625 10.5938 10.2188L7.28125 12.375C7.125 12.4688 6.96875 12.5 6.8125 12.5C6.6875 12.5 6.53125 12.4688 6.40625 12.4062ZM7 7.65625V11.375L9.84375 9.5L7 7.65625Z" fill="#9EA2A8"/>
                                        </svg>
                                        <p class="color-medium-gray">
                                            Season 02
                                        </p>
                                    </li>
                                    <li>
                                        <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 2.5C17.5312 2.5 18 2.96875 18 3.5C18 4.0625 17.5312 4.5 17 4.5C16.9375 4.5 16.875 4.5 16.8125 4.46875L15.2812 12.875C15.125 13.8125 14.2812 14.5 13.3125 14.5H4.65625C3.6875 14.5 2.84375 13.8125 2.6875 12.875L1.15625 4.46875C1.09375 4.5 1.03125 4.5 1 4.5C0.4375 4.5 0 4.0625 0 3.5C0 2.96875 0.4375 2.5 1 2.5C1.53125 2.5 2 2.96875 2 3.5C2 3.75 1.875 3.96875 1.75 4.125L5.03125 6.75C5.21875 6.90625 5.4375 6.96875 5.65625 6.96875C6 6.96875 6.375 6.75 6.53125 6.40625L8.53125 2.40625C8.21875 2.25 8 1.90625 8 1.5C8 0.96875 8.4375 0.5 9 0.5C9.53125 0.5 10 0.96875 10 1.5C10 1.90625 9.75 2.25 9.4375 2.40625L11.4375 6.40625C11.5938 6.75 11.9688 6.96875 12.3125 6.96875C12.5312 6.96875 12.75 6.90625 12.9375 6.75L16.2188 4.125C16.0938 3.96875 16 3.75 16 3.5C16 2.96875 16.4375 2.5 17 2.5ZM14.3125 12.6875L15.5312 5.96875L13.5625 7.53125C13.2188 7.8125 12.7812 7.96875 12.3125 7.96875C11.5625 7.96875 10.875 7.53125 10.5312 6.84375L9 3.75L7.4375 6.84375C7.09375 7.53125 6.40625 7.96875 5.65625 7.96875C5.1875 7.96875 4.75 7.8125 4.40625 7.53125L2.4375 5.96875L3.65625 12.6875C3.75 13.1562 4.15625 13.5 4.65625 13.5H13.3125C13.8125 13.5 14.2188 13.1562 14.3125 12.6875Z" fill="#9EA2A8"/>
                                        </svg>
                                        <p class="color-medium-gray">
                                            Episode 02
                                        </p>
                                    </li>
                                </ul>
                                <div class="btn-block">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn primary space">
                                        <i class="far fa-play"></i>
                                        Play
                                    </a>
                                    <div class="h-20 color-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                            <path d="M12 20.5C14.1217 20.5 16.1566 19.6571 17.6569 18.1569C19.1571 16.6566 20 14.6217 20 12.5C20 10.3783 19.1571 8.34344 17.6569 6.84315C16.1566 5.34285 14.1217 4.5 12 4.5C9.87827 4.5 7.84344 5.34285 6.34315 6.84315C4.84285 8.34344 4 10.3783 4 12.5C4 14.6217 4.84285 16.6566 6.34315 18.1569C7.84344 19.6571 9.87827 20.5 12 20.5ZM12 2.5C13.3132 2.5 14.6136 2.75866 15.8268 3.2612C17.0401 3.76375 18.1425 4.50035 19.0711 5.42893C19.9997 6.35752 20.7362 7.45991 21.2388 8.67317C21.7413 9.88642 22 11.1868 22 12.5C22 15.1522 20.9464 17.6957 19.0711 19.5711C17.1957 21.4464 14.6522 22.5 12 22.5C6.47 22.5 2 18 2 12.5C2 9.84784 3.05357 7.3043 4.92893 5.42893C6.8043 3.55357 9.34784 2.5 12 2.5ZM12.5 7.5V12.75L17 15.42L16.25 16.65L11 13.5V7.5H12.5Z" fill="#F8F8FF"/>
                                        </svg>
                                        24:30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                        <div class="item mb-40">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-10.png" alt="">
                            <div class="content">
                                <h4 class="h-24 color-white bold mb-12">Black Bullet</h4>
                                <ul class="tag unstyled">
                                    <li>
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 0.5C15.0938 0.5 16 1.40625 16 2.5V12.5C16 13.625 15.0938 14.5 14 14.5H2C0.875 14.5 0 13.625 0 12.5V2.5C0 1.40625 0.875 0.5 2 0.5H14ZM13.5312 1.5H10.1875L7.1875 4.5H10.5312L13.5312 1.5ZM8.78125 1.5H5.4375L2.4375 4.5H5.78125L8.78125 1.5ZM1 2.5V4.5H1.03125L4.03125 1.5H2C1.4375 1.5 1 1.96875 1 2.5ZM15 12.5V5.5H1V12.5C1 13.0625 1.4375 13.5 2 13.5H14C14.5312 13.5 15 13.0625 15 12.5ZM15 4.5V2.5C15 2.21875 14.875 1.96875 14.6562 1.78125L11.9375 4.5H15ZM6.40625 12.4062C6.15625 12.25 6 11.9688 6 11.6562V7.34375C6 7.0625 6.15625 6.78125 6.40625 6.625C6.6875 6.46875 7 6.46875 7.28125 6.65625L10.5938 8.78125C10.8438 8.9375 11 9.1875 11 9.5C11 9.8125 10.8438 10.0625 10.5938 10.2188L7.28125 12.375C7.125 12.4688 6.96875 12.5 6.8125 12.5C6.6875 12.5 6.53125 12.4688 6.40625 12.4062ZM7 7.65625V11.375L9.84375 9.5L7 7.65625Z" fill="#9EA2A8"/>
                                        </svg>
                                        <p class="color-medium-gray">
                                            Season 02
                                        </p>
                                    </li>
                                    <li>
                                        <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 2.5C17.5312 2.5 18 2.96875 18 3.5C18 4.0625 17.5312 4.5 17 4.5C16.9375 4.5 16.875 4.5 16.8125 4.46875L15.2812 12.875C15.125 13.8125 14.2812 14.5 13.3125 14.5H4.65625C3.6875 14.5 2.84375 13.8125 2.6875 12.875L1.15625 4.46875C1.09375 4.5 1.03125 4.5 1 4.5C0.4375 4.5 0 4.0625 0 3.5C0 2.96875 0.4375 2.5 1 2.5C1.53125 2.5 2 2.96875 2 3.5C2 3.75 1.875 3.96875 1.75 4.125L5.03125 6.75C5.21875 6.90625 5.4375 6.96875 5.65625 6.96875C6 6.96875 6.375 6.75 6.53125 6.40625L8.53125 2.40625C8.21875 2.25 8 1.90625 8 1.5C8 0.96875 8.4375 0.5 9 0.5C9.53125 0.5 10 0.96875 10 1.5C10 1.90625 9.75 2.25 9.4375 2.40625L11.4375 6.40625C11.5938 6.75 11.9688 6.96875 12.3125 6.96875C12.5312 6.96875 12.75 6.90625 12.9375 6.75L16.2188 4.125C16.0938 3.96875 16 3.75 16 3.5C16 2.96875 16.4375 2.5 17 2.5ZM14.3125 12.6875L15.5312 5.96875L13.5625 7.53125C13.2188 7.8125 12.7812 7.96875 12.3125 7.96875C11.5625 7.96875 10.875 7.53125 10.5312 6.84375L9 3.75L7.4375 6.84375C7.09375 7.53125 6.40625 7.96875 5.65625 7.96875C5.1875 7.96875 4.75 7.8125 4.40625 7.53125L2.4375 5.96875L3.65625 12.6875C3.75 13.1562 4.15625 13.5 4.65625 13.5H13.3125C13.8125 13.5 14.2188 13.1562 14.3125 12.6875Z" fill="#9EA2A8"/>
                                        </svg>
                                        <p class="color-medium-gray">
                                            Episode 02
                                        </p>
                                    </li>
                                </ul>
                                <div class="btn-block">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn primary space">
                                        <i class="far fa-play"></i>
                                        Play
                                    </a>
                                    <div class="h-20 color-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                            <path d="M12 20.5C14.1217 20.5 16.1566 19.6571 17.6569 18.1569C19.1571 16.6566 20 14.6217 20 12.5C20 10.3783 19.1571 8.34344 17.6569 6.84315C16.1566 5.34285 14.1217 4.5 12 4.5C9.87827 4.5 7.84344 5.34285 6.34315 6.84315C4.84285 8.34344 4 10.3783 4 12.5C4 14.6217 4.84285 16.6566 6.34315 18.1569C7.84344 19.6571 9.87827 20.5 12 20.5ZM12 2.5C13.3132 2.5 14.6136 2.75866 15.8268 3.2612C17.0401 3.76375 18.1425 4.50035 19.0711 5.42893C19.9997 6.35752 20.7362 7.45991 21.2388 8.67317C21.7413 9.88642 22 11.1868 22 12.5C22 15.1522 20.9464 17.6957 19.0711 19.5711C17.1957 21.4464 14.6522 22.5 12 22.5C6.47 22.5 2 18 2 12.5C2 9.84784 3.05357 7.3043 4.92893 5.42893C6.8043 3.55357 9.34784 2.5 12 2.5ZM12.5 7.5V12.75L17 15.42L16.25 16.65L11 13.5V7.5H12.5Z" fill="#F8F8FF"/>
                                        </svg>
                                        24:30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                        <div class="item mb-40">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-11.png" alt="">
                            <div class="content">
                                <h4 class="h-24 color-white bold mb-12">Chainsawman</h4>
                                <ul class="tag unstyled">
                                    <li>
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 0.5C15.0938 0.5 16 1.40625 16 2.5V12.5C16 13.625 15.0938 14.5 14 14.5H2C0.875 14.5 0 13.625 0 12.5V2.5C0 1.40625 0.875 0.5 2 0.5H14ZM13.5312 1.5H10.1875L7.1875 4.5H10.5312L13.5312 1.5ZM8.78125 1.5H5.4375L2.4375 4.5H5.78125L8.78125 1.5ZM1 2.5V4.5H1.03125L4.03125 1.5H2C1.4375 1.5 1 1.96875 1 2.5ZM15 12.5V5.5H1V12.5C1 13.0625 1.4375 13.5 2 13.5H14C14.5312 13.5 15 13.0625 15 12.5ZM15 4.5V2.5C15 2.21875 14.875 1.96875 14.6562 1.78125L11.9375 4.5H15ZM6.40625 12.4062C6.15625 12.25 6 11.9688 6 11.6562V7.34375C6 7.0625 6.15625 6.78125 6.40625 6.625C6.6875 6.46875 7 6.46875 7.28125 6.65625L10.5938 8.78125C10.8438 8.9375 11 9.1875 11 9.5C11 9.8125 10.8438 10.0625 10.5938 10.2188L7.28125 12.375C7.125 12.4688 6.96875 12.5 6.8125 12.5C6.6875 12.5 6.53125 12.4688 6.40625 12.4062ZM7 7.65625V11.375L9.84375 9.5L7 7.65625Z" fill="#9EA2A8"/>
                                        </svg>
                                        <p class="color-medium-gray">
                                            Season 02
                                        </p>
                                    </li>
                                    <li>
                                        <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 2.5C17.5312 2.5 18 2.96875 18 3.5C18 4.0625 17.5312 4.5 17 4.5C16.9375 4.5 16.875 4.5 16.8125 4.46875L15.2812 12.875C15.125 13.8125 14.2812 14.5 13.3125 14.5H4.65625C3.6875 14.5 2.84375 13.8125 2.6875 12.875L1.15625 4.46875C1.09375 4.5 1.03125 4.5 1 4.5C0.4375 4.5 0 4.0625 0 3.5C0 2.96875 0.4375 2.5 1 2.5C1.53125 2.5 2 2.96875 2 3.5C2 3.75 1.875 3.96875 1.75 4.125L5.03125 6.75C5.21875 6.90625 5.4375 6.96875 5.65625 6.96875C6 6.96875 6.375 6.75 6.53125 6.40625L8.53125 2.40625C8.21875 2.25 8 1.90625 8 1.5C8 0.96875 8.4375 0.5 9 0.5C9.53125 0.5 10 0.96875 10 1.5C10 1.90625 9.75 2.25 9.4375 2.40625L11.4375 6.40625C11.5938 6.75 11.9688 6.96875 12.3125 6.96875C12.5312 6.96875 12.75 6.90625 12.9375 6.75L16.2188 4.125C16.0938 3.96875 16 3.75 16 3.5C16 2.96875 16.4375 2.5 17 2.5ZM14.3125 12.6875L15.5312 5.96875L13.5625 7.53125C13.2188 7.8125 12.7812 7.96875 12.3125 7.96875C11.5625 7.96875 10.875 7.53125 10.5312 6.84375L9 3.75L7.4375 6.84375C7.09375 7.53125 6.40625 7.96875 5.65625 7.96875C5.1875 7.96875 4.75 7.8125 4.40625 7.53125L2.4375 5.96875L3.65625 12.6875C3.75 13.1562 4.15625 13.5 4.65625 13.5H13.3125C13.8125 13.5 14.2188 13.1562 14.3125 12.6875Z" fill="#9EA2A8"/>
                                        </svg>
                                        <p class="color-medium-gray">
                                            Episode 02
                                        </p>
                                    </li>
                                </ul>
                                <div class="btn-block">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn primary space">
                                        <i class="far fa-play"></i>
                                        Play
                                    </a>
                                    <div class="h-20 color-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                            <path d="M12 20.5C14.1217 20.5 16.1566 19.6571 17.6569 18.1569C19.1571 16.6566 20 14.6217 20 12.5C20 10.3783 19.1571 8.34344 17.6569 6.84315C16.1566 5.34285 14.1217 4.5 12 4.5C9.87827 4.5 7.84344 5.34285 6.34315 6.84315C4.84285 8.34344 4 10.3783 4 12.5C4 14.6217 4.84285 16.6566 6.34315 18.1569C7.84344 19.6571 9.87827 20.5 12 20.5ZM12 2.5C13.3132 2.5 14.6136 2.75866 15.8268 3.2612C17.0401 3.76375 18.1425 4.50035 19.0711 5.42893C19.9997 6.35752 20.7362 7.45991 21.2388 8.67317C21.7413 9.88642 22 11.1868 22 12.5C22 15.1522 20.9464 17.6957 19.0711 19.5711C17.1957 21.4464 14.6522 22.5 12 22.5C6.47 22.5 2 18 2 12.5C2 9.84784 3.05357 7.3043 4.92893 5.42893C6.8043 3.55357 9.34784 2.5 12 2.5ZM12.5 7.5V12.75L17 15.42L16.25 16.65L11 13.5V7.5H12.5Z" fill="#F8F8FF"/>
                                        </svg>
                                        24:30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                        <div class="item mb-40">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-12.png" alt="">
                            <div class="content">
                                <h4 class="h-24 color-white bold mb-12">My Hero Academia</h4>
                                <ul class="tag unstyled">
                                    <li>
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 0.5C15.0938 0.5 16 1.40625 16 2.5V12.5C16 13.625 15.0938 14.5 14 14.5H2C0.875 14.5 0 13.625 0 12.5V2.5C0 1.40625 0.875 0.5 2 0.5H14ZM13.5312 1.5H10.1875L7.1875 4.5H10.5312L13.5312 1.5ZM8.78125 1.5H5.4375L2.4375 4.5H5.78125L8.78125 1.5ZM1 2.5V4.5H1.03125L4.03125 1.5H2C1.4375 1.5 1 1.96875 1 2.5ZM15 12.5V5.5H1V12.5C1 13.0625 1.4375 13.5 2 13.5H14C14.5312 13.5 15 13.0625 15 12.5ZM15 4.5V2.5C15 2.21875 14.875 1.96875 14.6562 1.78125L11.9375 4.5H15ZM6.40625 12.4062C6.15625 12.25 6 11.9688 6 11.6562V7.34375C6 7.0625 6.15625 6.78125 6.40625 6.625C6.6875 6.46875 7 6.46875 7.28125 6.65625L10.5938 8.78125C10.8438 8.9375 11 9.1875 11 9.5C11 9.8125 10.8438 10.0625 10.5938 10.2188L7.28125 12.375C7.125 12.4688 6.96875 12.5 6.8125 12.5C6.6875 12.5 6.53125 12.4688 6.40625 12.4062ZM7 7.65625V11.375L9.84375 9.5L7 7.65625Z" fill="#9EA2A8"/>
                                        </svg>
                                        <p class="color-medium-gray">
                                            Season 02
                                        </p>
                                    </li>
                                    <li>
                                        <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 2.5C17.5312 2.5 18 2.96875 18 3.5C18 4.0625 17.5312 4.5 17 4.5C16.9375 4.5 16.875 4.5 16.8125 4.46875L15.2812 12.875C15.125 13.8125 14.2812 14.5 13.3125 14.5H4.65625C3.6875 14.5 2.84375 13.8125 2.6875 12.875L1.15625 4.46875C1.09375 4.5 1.03125 4.5 1 4.5C0.4375 4.5 0 4.0625 0 3.5C0 2.96875 0.4375 2.5 1 2.5C1.53125 2.5 2 2.96875 2 3.5C2 3.75 1.875 3.96875 1.75 4.125L5.03125 6.75C5.21875 6.90625 5.4375 6.96875 5.65625 6.96875C6 6.96875 6.375 6.75 6.53125 6.40625L8.53125 2.40625C8.21875 2.25 8 1.90625 8 1.5C8 0.96875 8.4375 0.5 9 0.5C9.53125 0.5 10 0.96875 10 1.5C10 1.90625 9.75 2.25 9.4375 2.40625L11.4375 6.40625C11.5938 6.75 11.9688 6.96875 12.3125 6.96875C12.5312 6.96875 12.75 6.90625 12.9375 6.75L16.2188 4.125C16.0938 3.96875 16 3.75 16 3.5C16 2.96875 16.4375 2.5 17 2.5ZM14.3125 12.6875L15.5312 5.96875L13.5625 7.53125C13.2188 7.8125 12.7812 7.96875 12.3125 7.96875C11.5625 7.96875 10.875 7.53125 10.5312 6.84375L9 3.75L7.4375 6.84375C7.09375 7.53125 6.40625 7.96875 5.65625 7.96875C5.1875 7.96875 4.75 7.8125 4.40625 7.53125L2.4375 5.96875L3.65625 12.6875C3.75 13.1562 4.15625 13.5 4.65625 13.5H13.3125C13.8125 13.5 14.2188 13.1562 14.3125 12.6875Z" fill="#9EA2A8"/>
                                        </svg>
                                        <p class="color-medium-gray">
                                            Episode 02
                                        </p>
                                    </li>
                                </ul>
                                <div class="btn-block">
                                    <a href="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html" class="cus-btn primary space">
                                        <i class="far fa-play"></i>
                                        Play
                                    </a>
                                    <div class="h-20 color-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                            <path d="M12 20.5C14.1217 20.5 16.1566 19.6571 17.6569 18.1569C19.1571 16.6566 20 14.6217 20 12.5C20 10.3783 19.1571 8.34344 17.6569 6.84315C16.1566 5.34285 14.1217 4.5 12 4.5C9.87827 4.5 7.84344 5.34285 6.34315 6.84315C4.84285 8.34344 4 10.3783 4 12.5C4 14.6217 4.84285 16.6566 6.34315 18.1569C7.84344 19.6571 9.87827 20.5 12 20.5ZM12 2.5C13.3132 2.5 14.6136 2.75866 15.8268 3.2612C17.0401 3.76375 18.1425 4.50035 19.0711 5.42893C19.9997 6.35752 20.7362 7.45991 21.2388 8.67317C21.7413 9.88642 22 11.1868 22 12.5C22 15.1522 20.9464 17.6957 19.0711 19.5711C17.1957 21.4464 14.6522 22.5 12 22.5C6.47 22.5 2 18 2 12.5C2 9.84784 3.05357 7.3043 4.92893 5.42893C6.8043 3.55357 9.34784 2.5 12 2.5ZM12.5 7.5V12.75L17 15.42L16.25 16.65L11 13.5V7.5H12.5Z" fill="#F8F8FF"/>
                                        </svg>
                                        24:30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Continue Area End -->

        <!-- Comment Area Start -->
        <section class="comment p-40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 mb-40">
                        <div class="heading-block mb-32">
                            <div class="title">
                                <h3 class="h-36 color-white">Comments</h3>
                                <div class="list">50</div>
                            </div>
                            <div class="title sec">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33" fill="none">
                                    <path d="M28.2001 5.52877C28.0791 5.27211 27.8208 5.1084 27.537 5.1084H4.81706C4.53332 5.1084 4.2751 5.27211 4.15401 5.52877C4.03301 5.78542 4.07093 6.0888 4.25145 6.30773L12.9853 16.9009V26.6687C12.9853 26.9224 13.1164 27.1579 13.3318 27.2916C13.4499 27.3648 13.5839 27.4018 13.7184 27.4018C13.8295 27.4018 13.941 27.3764 14.0438 27.3255L18.951 24.8933C19.2004 24.7698 19.3581 24.5158 19.3585 24.2375L19.3681 16.9012L28.1025 6.30763C28.2831 6.0888 28.3211 5.78533 28.2001 5.52877ZM18.0699 16.1713C17.9619 16.3022 17.9027 16.4667 17.9025 16.6366L17.8931 23.7815L14.4515 25.4873V16.6376C14.4515 16.4674 14.3924 16.3025 14.2841 16.1713L6.37147 6.57436H25.9825L18.0699 16.1713Z" fill="#9EA2A8"/>
                                  </svg>
                                <h3 class="h-36 color-medium-gray">Popularity</h3>
                            </div>
                        </div>
                        <div class="comment-box  mb-32">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/author/profile-1.png" alt="">
                            <div class="text-block">
                                <div class="top-line mb-8">
                                    <h5 class="h-20 bold color-white">@otaku_obsessed</h5>
                                    <h6 class="color-medium-gray">5 minutes ago</h6>
                                </div>
                                <p class="color-medium-gray sec sm mb-24">Lorem ipsum dolor sit amet consectetur. Blandit luctus nunc nulla ut etiam penatibus gravida fusce. Id viverra erat nisl tincidunt risus elit. Lect diamn on leo volutpat nulla. Aliquet a at iaculis imperdiet diam tincidunt venenatis eget. Urna elementum rhoncus eu tristique lorem.</p>
                                <div class="mb-24">
                                    <div class="botton-row">
                                        <div class="btn-block">
                                            <a href="#"><i class="fal fa-thumbs-up"></i></a>
                                            <span>50K</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="#"><i class="fal fa-thumbs-down"></i></a>
                                            <span>50K</span>
                                        </div>
                                        <div class="btn-block">
                                            <button class=" accordion-button collapsed comment-btn reply-btn" data-bs-toggle="collapse"
                                             data-bs-target="#reply2" aria-expanded="true">Reply <i class="fal fa-reply"></i></button>
                                        </div>
                                    </div>
                                    <div id="reply2" class="accordion-collapse collapse write-reply" data-bs-parent="#accordionExample">
                                        <div class="write-comment-box">
                                            <form action="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html">
                                                <div class="input-group">
                                                    <input type="text" class="form-control p-0 border-0" name="search" required placeholder="Write your comment">
                                                    <button type="submit">Post</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="accordion-button comment-btn collapsed  mb-32 action-btn" data-bs-toggle="collapse" data-bs-target="#reply" aria-expanded="false"
                                 aria-controls="reply"><i class="fa fa-chevron-down"></i> Show 02 Replies</a>
                                <div id="reply" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="extra-comments">
                                        <div class="comment-box  mb-32 sm">
                                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/author/profile-3.png" alt="">
                                            <div class="text-block">
                                                <div class="top-line mb-8">
                                                    <h5 class="h-20 bold color-white">@otaku_obsessed</h5>
                                                    <h6 class="color-medium-gray">5 minutes ago</h6>
                                                </div>
                                                <p class="color-medium-gray sec sm mb-24">Lorem ipsum dolor sit amet consectetur. Blandit luctus nunc nulla ut etiam penatibus gravida fusce. Id viverra erat nisl tincidunt risus eli. Lectur diam non leo volutpat nulla. Aliquet a at iaculis imperdiet diam.</p>
                                                <div class="mb-24">
                                                    <div class="botton-row">
                                                        <div class="btn-block">
                                                            <a href="#"><i class="fal fa-thumbs-up"></i></a>
                                                            <span>50K</span>
                                                        </div>
                                                        <div class="btn-block">
                                                            <a href="#"><i class="fal fa-thumbs-down"></i></a>
                                                            <span>50K</span>
                                                        </div>
                                                        <div class="btn-block">
                                                            <button class=" accordion-button collapsed comment-btn reply-btn" data-bs-toggle="collapse"
                                                             data-bs-target="#reply3" aria-expanded="true">Reply <i class="fal fa-reply"></i></button>
                                                        </div>
                                                    </div>
                                                    <div id="reply3" class="accordion-collapse collapse write-reply" data-bs-parent="#accordionExample">
                                                        <div class="write-comment-box">
                                                            <form action="movie-detail.html">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control p-0 border-0" name="search" required placeholder="Write your comment">
                                                                    <button type="submit">Post</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="comment-box  mb-32 sm">
                                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/author/profile-3.png" alt="">
                                            <div class="text-block">
                                                <div class="top-line mb-8">
                                                    <h5 class="h-20 bold color-white">@otaku_obsessed</h5>
                                                    <h6 class="color-medium-gray">5 minutes ago</h6>
                                                </div>
                                                <p class="color-medium-gray sec sm mb-24">Lorem ipsum dolor sit amet consectetur. Blandit luctus nunc nulla ut etiam penatibus gravida fusce. Id viverra erat nisl tincidunt risus eli. Lectur diam non leo volutpat nulla. Aliquet a at iaculis imperdiet diam.</p>
                                                <div class="mb-24">
                                                    <div class="botton-row">
                                                        <div class="btn-block">
                                                            <a href="#"><i class="fal fa-thumbs-up"></i></a>
                                                            <span>50K</span>
                                                        </div>
                                                        <div class="btn-block">
                                                            <a href="#"><i class="fal fa-thumbs-down"></i></a>
                                                            <span>50K</span>
                                                        </div>
                                                        <div class="btn-block">
                                                            <button class=" accordion-button collapsed comment-btn reply-btn" data-bs-toggle="collapse"
                                                             data-bs-target="#reply4" aria-expanded="true">Reply <i class="fal fa-reply"></i></button>
                                                        </div>
                                                    </div>
                                                    <div id="reply4" class="accordion-collapse collapse write-reply" data-bs-parent="#accordionExample">
                                                        <div class="write-comment-box">
                                                            <form action="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control p-0 border-0" name="search" required placeholder="Write your comment">
                                                                    <button type="submit">Post</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-box  mb-32">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/author/profile-2.png" alt="">
                            <div class="text-block">
                                <div class="top-line mb-8">
                                    <h5 class="h-20 bold color-white">@kawaii_kat</h5>
                                    <h6 class="color-medium-gray">5 minutes ago</h6>
                                </div>
                                <p class="color-medium-gray sec sm mb-24">Lorem ipsum dolor sit amet consectetur. Blandit luctus nunc nulla ut etiam penatibus gravida fusce. Id viverra erat nisl tincidunt risus elit. Lect diamn on leo volutpat nulla. Aliquet a at iaculis imperdiet diam tincidunt venenatis eget. Urna elementum rhoncus eu tristique lorem.</p>
                                <div class="mb-24">
                                    <div class="botton-row">
                                        <div class="btn-block">
                                            <a href="#"><i class="fal fa-thumbs-up"></i></a>
                                            <span>50K</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="#"><i class="fal fa-thumbs-down"></i></a>
                                            <span>50K</span>
                                        </div>
                                        <div class="btn-block">
                                            <button class=" accordion-button collapsed comment-btn reply-btn" data-bs-toggle="collapse"
                                             data-bs-target="#reply5" aria-expanded="true">Reply <i class="fal fa-reply"></i></button>
                                        </div>
                                    </div>
                                    <div id="reply5" class="accordion-collapse collapse write-reply" data-bs-parent="#accordionExample">
                                        <div class="write-comment-box">
                                            <form action="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html">
                                                <div class="input-group">
                                                    <input type="text" class="form-control p-0 border-0" name="search" required placeholder="Write your comment">
                                                    <button type="submit">Post</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="accordion-button comment-btn mb-32 action-btn" data-bs-toggle="collapse" data-bs-target="#reply6" aria-expanded="false" aria-controls="reply"><i class="fa fa-chevron-up"></i> Show 02 Replies</a>
                                <div id="reply6" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="extra-comments">
                                        <div class="comment-box  mb-32 sm">
                                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/author/profile-3.png" alt="">
                                            <div class="text-block">
                                                <div class="top-line mb-8">
                                                    <h5 class="h-20 bold color-white">@otaku_obsessed</h5>
                                                    <h6 class="color-medium-gray">5 minutes ago</h6>
                                                </div>
                                                <p class="color-medium-gray sec sm mb-24">Lorem ipsum dolor sit amet consectetur. Blandit luctus nunc nulla ut etiam penatibus gravida fusce. Id viverra erat nisl tincidunt risus eli. Lectur diam non leo volutpat nulla. Aliquet a at iaculis imperdiet diam.</p>
                                                <div class="mb-24">
                                                    <div class="botton-row">
                                                        <div class="btn-block">
                                                            <a href="#"><i class="fal fa-thumbs-up"></i></a>
                                                            <span>50K</span>
                                                        </div>
                                                        <div class="btn-block">
                                                            <a href="#"><i class="fal fa-thumbs-down"></i></a>
                                                            <span>50K</span>
                                                        </div>
                                                        <div class="btn-block">
                                                            <button class=" accordion-button collapsed comment-btn reply-btn" data-bs-toggle="collapse"
                                                             data-bs-target="#reply7" aria-expanded="true">Reply <i class="fal fa-reply"></i></button>
                                                        </div>
                                                    </div>
                                                    <div id="reply7" class="accordion-collapse collapse write-reply" data-bs-parent="#accordionExample">
                                                        <div class="write-comment-box">
                                                            <form action="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control p-0 border-0" name="search" required placeholder="Write your comment">
                                                                    <button type="submit">Post</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="comment-box  mb-32 sm">
                                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/author/profile-3.png" alt="">
                                            <div class="text-block">
                                                <div class="top-line mb-8">
                                                    <h5 class="h-20 bold color-white">@cosplayqueen</h5>
                                                    <h6 class="color-medium-gray">5 minutes ago</h6>
                                                </div>
                                                <p class="color-medium-gray sec sm mb-24">Lorem ipsum dolor sit amet consectetur. Blandit luctus nunc nulla ut etiam penatibus gravida fusce. Id viverra erat nisl tincidunt risus eli. Lectur diam non leo volutpat nulla. Aliquet a at iaculis imperdiet diam.</p>
                                                <div class="mb-24">
                                                    <div class="botton-row">
                                                        <div class="btn-block">
                                                            <a href="#"><i class="fal fa-thumbs-up"></i></a>
                                                            <span>50K</span>
                                                        </div>
                                                        <div class="btn-block">
                                                            <a href="#"><i class="fal fa-thumbs-down"></i></a>
                                                            <span>50K</span>
                                                        </div>
                                                        <div class="btn-block">
                                                            <button class=" accordion-button collapsed comment-btn reply-btn" data-bs-toggle="collapse"
                                                             data-bs-target="#reply9" aria-expanded="true">Reply <i class="fal fa-reply"></i></button>
                                                        </div>
                                                    </div>
                                                    <div id="reply9" class="accordion-collapse collapse write-reply" data-bs-parent="#accordionExample">
                                                        <div class="write-comment-box">
                                                            <form action="https://uiparadox.co.uk/templates/vivid/v3/movie-detail.html">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control p-0 border-0" name="search" required placeholder="Write your comment">
                                                                    <button type="submit">Post</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-box  mb-32">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/author/profile-2.png" alt="">
                            <div class="text-block">
                                <div class="top-line mb-8">
                                    <h5 class="h-20 bold color-white">@kawaii_kat</h5>
                                    <h6 class="color-medium-gray">5 minutes ago</h6>
                                </div>
                                <p class="color-medium-gray sec sm mb-24">Lorem ipsum dolor sit amet consectetur. Blandit luctus nunc nulla ut etiam penatibus gravida fusce. Id viverra erat nisl tincidunt risus elit. Lect diamn on leo volutpat nulla. Aliquet a at iaculis imperdiet diam tincidunt venenatis eget. Urna elementum rhoncus eu tristique lorem.</p>
                                <div class="mb-24">
                                    <div class="botton-row">
                                        <div class="btn-block">
                                            <a href="#"><i class="fal fa-thumbs-up"></i></a>
                                            <span>50K</span>
                                        </div>
                                        <div class="btn-block">
                                            <a href="#"><i class="fal fa-thumbs-down"></i></a>
                                            <span>50K</span>
                                        </div>
                                        <div class="btn-block">
                                            <button class=" accordion-button collapsed comment-btn reply-btn" data-bs-toggle="collapse"
                                             data-bs-target="#reply10" aria-expanded="true">Reply <i class="fal fa-reply"></i></button>
                                        </div>
                                    </div>
                                    <div id="reply10" class="accordion-collapse collapse write-reply" data-bs-parent="#accordionExample">
                                        <div class="write-comment-box">
                                            <form action="anime-detail.html">
                                                <div class="input-group">
                                                    <input type="text" class="form-control p-0 border-0" name="search" required placeholder="Write your comment">
                                                    <button type="submit">Post</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="more">
                            <a href="#" class="accordion-button comment-btn collapsed  mb-0 action-btn" data-bs-toggle="collapse"
                                data-bs-target="#reply12" aria-expanded="false" aria-controls="reply"> Load More Comments <i class="fa fa-chevron-down"></i>
                            </a>
                            <p class="color-medium-gray">40 of 1500</p>
                        </div>
                        <div id="reply12" class="accordion-collapse collapse mt-32" data-bs-parent="#accordionExample">
                            <div class="extra-comments">
                                <div class="comment-box  mb-32">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/author/profile-1.png" alt="">
                                    <div class="text-block">
                                        <div class="top-line mb-8">
                                            <h5 class="h-20 bold color-white">@kawaii_kat</h5>
                                            <h6 class="color-medium-gray">5 minutes ago</h6>
                                        </div>
                                        <p class="color-medium-gray sec sm mb-24">Lorem ipsum dolor sit amet consectetur. Blandit luctus nunc nulla ut etiam penatibus gravida fusce. Id viverra erat nisl tincidunt risus elit. Lect diamn on leo volutpat nulla. Aliquet a at iaculis imperdiet diam tincidunt venenatis eget. Urna elementum rhoncus eu tristique lorem.</p>
                                        <div class="mb-24">
                                            <div class="botton-row">
                                                <div class="btn-block">
                                                    <a href="#"><i class="fal fa-thumbs-up"></i></a>
                                                    <span>50K</span>
                                                </div>
                                                <div class="btn-block">
                                                    <a href="#"><i class="fal fa-thumbs-down"></i></a>
                                                    <span>50K</span>
                                                </div>
                                                <div class="btn-block">
                                                    <button class=" accordion-button collapsed comment-btn reply-btn" data-bs-toggle="collapse"
                                                     data-bs-target="#reply15" aria-expanded="true">Reply <i class="fal fa-reply"></i></button>
                                                </div>
                                            </div>
                                            <div id="reply15" class="accordion-collapse collapse write-reply" data-bs-parent="#accordionExample">
                                                <div class="write-comment-box">
                                                    <form action="movie-detail.html">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control p-0 border-0" name="search" required placeholder="Write your comment">
                                                            <button type="submit">Post</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-box">
                                    <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/author/profile-2.png" alt="">
                                    <div class="text-block">
                                        <div class="top-line mb-8">
                                            <h5 class="h-20 bold color-white">@kawaii_kat</h5>
                                            <h6 class="color-medium-gray">5 minutes ago</h6>
                                        </div>
                                        <p class="color-medium-gray sec sm mb-24">Lorem ipsum dolor sit amet consectetur. Blandit luctus nunc nulla ut etiam penatibus gravida fusce. Id viverra erat nisl tincidunt risus elit. Lect diamn on leo volutpat nulla. Aliquet a at iaculis imperdiet diam tincidunt venenatis eget. Urna elementum rhoncus eu tristique lorem.</p>
                                        <div class="mb-0">
                                            <div class="botton-row">
                                                <div class="btn-block">
                                                    <a href="#"><i class="fal fa-thumbs-up"></i></a>
                                                    <span>50K</span>
                                                </div>
                                                <div class="btn-block">
                                                    <a href="#"><i class="fal fa-thumbs-down"></i></a>
                                                    <span>50K</span>
                                                </div>
                                                <div class="btn-block">
                                                    <button class=" accordion-button collapsed comment-btn reply-btn" data-bs-toggle="collapse"
                                                     data-bs-target="#reply11" aria-expanded="true">Reply <i class="fal fa-reply"></i></button>
                                                </div>
                                            </div>
                                            <div id="reply11" class="accordion-collapse collapse write-reply" data-bs-parent="#accordionExample">
                                                <div class="write-comment-box">
                                                    <form action="movie-detail.html">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control p-0 border-0" name="search" required placeholder="Write your comment">
                                                            <button type="submit">Post</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="trailer">
                            <img src="https://uiparadox.co.uk/templates/vivid/v3/assets/media/anime-card/img-26.png" alt="">
                            <div class="detail">
                                <h4 class="h-20 bold color-primary mb-8">Coming Soon!</h4>
                                <ul class="timer countdown unstyled data-timer1">
                                    <li>20 <small>Days</small></li>
                                    <li>23 <small>Hrs</small></li>
                                    <li>50 <small>Min</small></li>
                                    <li>34 <small>Sec</small></li>
                                </ul>
                                <h2 class="h-40 bold color-white mb-12">Chainsawman</h2>
                                <p class="color-medium-gray sec mb-40">Lorem ipsum dolor sit amet consectetur. Ligula <br> quam enim ullamcorper pulvinar. Tincidunt felis</p>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal" class="cus-btn primary">
                                    <i class="far fa-play"></i>
                                    Watch Trailer
                                </a>
                            </div>
                        </div>
                        <div class="notification">
                            <h4 class="h-36 bold color-white mb-8">Notifications</h4>
                            <p class="sec color-medium-gray mb-32">Subscribe to our notifications so you get notified about new episodes!</p>
                            <form action="movie-detail.html">
                                <input type="email" id="email" class="form-control mb-32" placeholder="Your email">
                                <button type="submit" class="cus-btn primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="comment-block p-40 pb-0">
                            <h4 class="h-36 bold color-white mb-8">Leave a Comment</h4>
                            <p class="sec color-medium-gray mb-24">Your email will be kept private.</p>
                            <form action="movie-detail.html">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" id="name" class="form-control mb-16" placeholder="Your Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" id="email2" class="form-control mb-16" placeholder="Your email">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="comment" id="comment"  class="form-control mb-30" placeholder="Your Comment"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="checkBox mb-24">
                                            <input type="checkbox" id="comments">
                                            <label for="comments">
                                                Please remember my details for future comments.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="cus-btn primary">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Comment Area End -->

    </div>
    <!-- Main Content End -->

@endsection
