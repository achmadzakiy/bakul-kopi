<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Coffee Shop</title>
</head>

<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo font-bold text-[2rem] text-[#fff] italic">Bakul<span
                class="text-primary">Kopi</span>.</a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Contact</a>
        </div>

        <div class="navbar-extra flex">
            <a href="#" id="search"><i data-feather="search"></i></a>
            {{-- <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </a> --}}
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            {{-- <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
            </a> --}}
            <a href="#" id="hamburger-menu" class="hidden"><i data-feather="menu"></i></a>
            {{-- <a href="#" id="hamburger-menu" class="hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

            </a> --}}
        </div>
    </nav>
    {{-- navbar end --}}

    {{-- hero section start --}}
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
            <p>Sudah menyeduh kopi hari ini?</p>
            <a href="#" class="cta">Beli sekarang</a>
        </main>
    </section>
    {{-- hero section end --}}

    {{-- About session start --}}
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="{{ asset('img/about-us.jpg') }}" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa harus Bakul Kopi?</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam assumenda, porro accusamus
                    perferendis amet dignissimos?</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti quod placeat autem, iste ipsam
                    perspiciatis doloremque et quisquam magni omnis.</p>
            </div>
        </div>
    </section>
    {{-- About session End --}}

    {{-- Menu Section Start --}}
    <section class="menu" id="menu">
        <h2><span>Menu</span> Kami</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius eos cumque, quidem porro aperiam aliquam,
            adipisci sint eveniet, consequatur officiis accusamus minima perferendis explicabo accusantium cum sequi
            nihil voluptatibus. Sunt.</p>

        <div class="row">
            <div class="menu-card">
                <img src="{{ asset('img/menu/menu-kopi.jpg') }}" alt="Espresso">
                <h3 class="menu-card-title">- Espresso -</h3>
                <p class="menu-card-price">IDR 15K</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('img/menu/menu-kopi.jpg') }}" alt="Espresso">
                <h3 class="menu-card-title">- Espresso -</h3>
                <p class="menu-card-price">IDR 15K</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('img/menu/menu-kopi.jpg') }}" alt="Espresso">
                <h3 class="menu-card-title">- Espresso -</h3>
                <p class="menu-card-price">IDR 15K</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('img/menu/menu-kopi.jpg') }}" alt="Espresso">
                <h3 class="menu-card-title">- Espresso -</h3>
                <p class="menu-card-price">IDR 15K</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('img/menu/menu-kopi.jpg') }}" alt="Espresso">
                <h3 class="menu-card-title">- Espresso -</h3>
                <p class="menu-card-price">IDR 15K</p>
            </div>
            <div class="menu-card">
                <img src="{{ asset('img/menu/menu-kopi.jpg') }}" alt="Espresso">
                <h3 class="menu-card-title">- Espresso -</h3>
                <p class="menu-card-price">IDR 15K</p>
            </div>
        </div>
    </section>
    {{-- Menu Section End --}}

    {{-- Contact Section Start --}}
    <section id="contact" class="contact">
        <h2>Kontak<span> Kami</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, blanditiis.</p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.943147399661!2d112.04087887464787!3d-6.897403593101786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77a3d9e3ba08f3%3A0x263e368898dbe8de!2zQ0FGw4kgSU5O!5e0!3m2!1sid!2sid!4v1738231735595!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map">
            </iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg> --}}
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg> --}}
                    <input type="email" placeholder="email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg> --}}
                    <input type="text" placeholder="nohp">
                </div>
                <button type="submit" class="btn">kirim pesan</button>
            </form>
        </div>
    </section>
    {{-- Contact Section End --}}

    {{-- Footer Start --}}
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="credit">
            <p>created by <a href="">achmadzakiyy</a>. | &copy; 2025</p>
        </div>
    </footer>
    {{-- Footer End --}}


    <script>
        feather.replace();
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
