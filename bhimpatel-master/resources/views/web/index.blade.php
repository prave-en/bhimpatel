<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('asset-web/css/styles.css')}}">
        <title>Bhim Patel</title>
    </head>
    <body>        
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">
                    Bhim Patel
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#blogs" class="nav__link">Blogs</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>

                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>
        <main class="l-main">
            <section id="home" class="home">
                <div class="hero-section">
                    <h1>Hello, I am <br />
                    <span>Bhim <br /> Patel</span>
                    <br />
                    <span>W</span>elcome to my personal blog
                    <br /> 
                    <a href="#" class="btn">About me</a></h1>
                </div>
                <div>
                    <img src="https://images.pexels.com/photos/35537/child-children-girl-happy.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                </div>
            </section>
            <section id="about">
                <div class="about-section">
                    <h1>About Me</h1>
                    <div class="about-me">
                        <div class="about-me-img">
                            <img src="https://images.pexels.com/photos/3074949/pexels-photo-3074949.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                        </div>
                        <div class="about-me-text">
                            <h2>Hi ,I'm Bhim Patel</h2>
                            <br />
                            <p>{!!  nl2br($profile->intro ) !!}
                            </p>
                            <br />
                            <div class="about-list">
                                <div>
                                    <p><b>Name :</b>{{ $profile->full_name }}</p>
                                    <p><b>Date of birth :</b>{{ $profile->dob }}</p>
                                    <p><b>Nationality :</b> Nepali</p>
                                    <p><b>Work Status :</b> Developer</p>
                                </div>
                                <div>
                                    <p><b>Phone :</b>{{ $profile->phone }}</p>
                                    <p><b>Email :</b> {{ $profile->email }}</p>
                                    <p><b>Address :</b> Ghorahi, Dang</p>
                                    <p><b>Freelancer :</b> Available</p>
                                </div>
                            </div>
                            <br />
                            <button>
                                <i class='bx bxs-cloud-download'></i>&nbsp
                                Download My CV
                            </button>
                        </div>
                
                    </div>
                    
                </div>
            </section>
            <section id="blogs">
                    <div class="travel">
                        <h1>My Blogs</h1>
                        <div class="travel-container">
                            <div class="travel-section">
                                @foreach($blogs as $blog)
                                <div class="travel-img">

                                    @foreach ($blog->images as $image)
                                    @if($image->is_featured == 1)
                                    <div>
                                        <img src=" {{ asset('/blogs/'.$image->image) }} ">
                                    </div>
                                    @endif
                                    @endforeach

                                    <div class="travel-text">
                                        <p class="line-one">{!!  nl2br($blog->short_description ) !!}</p>
                                    </div>
                                </div>
                                @endforeach 
                            </div>
                            <div class="Latest-news-section">
                                <div class="Latest-news">
                                    <h2>Latest news</h2>
                                    @foreach($blog_latest as $blog)
                                    <div class="latest-news-card">
                                        <div>
                                            <p class="latest-news-text">{!!  nl2br($blog->short_description ) !!}</p>
                                            <p class="line-two">Photo &nbsp&nbsp {{ $blog->created_at->diffForHumans() }}</p>
                                        </div>
                                        @foreach ($blog->images as $image)
                                            @if($image->is_featured == 1)
                                        <div>
                                            <img src=" {{ asset('/blogs/'.$image->image) }} ">
                                        </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    @endforeach
                                    <hr />
                                    <div class="latest-news-card">
                                        <div>
                                            <p class="latest-news-text">Premier League players join  charity..</p>
                                            <p class="line-two">Photo &nbsp&nbsp 10 Minutes ago</p>
                                        </div>
                                        <div>
                                            <img src="https://www.bootstrapdash.com/demo/world-time/assets/images/travel/Travel_2.png">
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="latest-news-card">
                                        <div>
                                            <p class="latest-news-text">UK Athletics board changed  stance on..</p>
                                            <p class="line-two">Photo &nbsp&nbsp 10 Minutes ago</p>
                                        </div>
                                        <div>
                                            <img src="https://www.bootstrapdash.com/demo/world-time/assets/images/travel/Travel_3.png">
                                        </div>
                                    </div>
                
                                </div>
                                <div class="Trending-section">
                                    <h2>Trending</h2>
                                      @foreach($blog_trending as $blog)
                                    <div>
                                        @foreach ($blog->images as $image)
                                            @if($image->is_featured == 1)
                                                <img src=" {{ asset('/blogs/'.$image->image) }} ">
                                            @endif
                                        @endforeach    
                                        <p class="line-one">{!!  nl2br($blog->short_description ) !!}</p>
                                        <p class="line-two">Photo &nbsp&nbsp {{ $blog->created_at->diffForHumans() }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>    
                    </div>
            </section>
            <section id="contact" class="footer-container">
                <h1>Any Queries ?</h1>
                <p>Feel Free To Contact Me Any Time</p>
                <div class="footer-section">
                    <div class="form-section">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Subject">
                        <textarea rows="10" cols="65" placeholder="Message"></textarea>
                        <button>
                            <i class='bx bxs-paper-plane'></i>
                            Send Message</button>
                    </div>
                    <div class="address-section">
                        <h3>Let's talk about everything!</h3>
                        <p>Actually, I am here to show you through my own experiments exactly how you can easily start designing with basic understanding of HTML and CSS.</p>
                        <div class="address-icon">
                            <p>Phone:</p>
                            <span><i class='bx bxs-phone'></i>&nbsp&nbsp
                            {{ $profile->phone }}</span>
                        </div>
                        <div class="address-icon">
                            <p>Email:</p>
                            <span><i class='bx bxs-envelope'></i>&nbsp&nbsp
                             {{ $profile->email }}</span>
                        </div>
                        <div class="address-icon">
                            <p>Adress:</p>
                            <span><i class='bx bxs-map'></i>&nbsp&nbsp
                            {{ $profile->address }}</span>
                        </div> 
                        <div class="address-icon">
                            <p>Skybe:</p>
                            <span><i class='bx bxl-skype'></i>&nbsp&nbsp
                            Patel.Bhim</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <p class="copy-right">&#169; 2021 Bhim Patel, Are Right All Resereved.</p>
        </footer>
        

        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="{{asset('asset-web/js/main.js')}}"></script>
    </body>
</html>