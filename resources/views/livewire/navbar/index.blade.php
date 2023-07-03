<div>
    <nav>
        <div class="flex justify-between w-full md:items-center md:px-10 lg:px-20">
            <a href="{{ route('index') }}" class="logo flex items-center pl-5 md:pl-0">
                <img src="../assets/images/logo.svg" class="w-32 h-aut" alt="Logo Image">
            </a>
            <div class="hamburger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-links lg:mr-40">
                <li class=""><a id="button-home" href="{{ route('index') }}"
                        class=" font-vietnam text-base">Home</a></li>
                <li class=""><a id="button-katalog" href="{{ route('index.katalog') }}"
                        class="font-vietnam text-base">Katalog</a></li>
                <li class=""><a id="button-about" href="{{ route('index.about') }}"
                        class="font-vietnam text-base">About</a></li>
                <li class="">
                    <div class="relative md:hidden block">
                        <input type="search" id="searchInput2" oninput="handleSearchInput2(event)"
                            class="peer cursor-pointer relative z-10 h-10 w-10 rounded-full border  border-[#FFB9C5] bg-transparent pl-12 outline-none focus:w-[100%] focus:cursor-text focus:border-white focus:pl-16 focus:pr-4 font-vietnam" />
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-white px-3.5 peer-focus:border-[#FFB9C5] peer-focus:stroke-white"
                            fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <div id="searchResults2" class="search-results cursor-pointer w-40 hidden text-black mt-5"></div>
                    </div>

                </li>
            </ul>
            <div>
                <div class="relative md:block hidden">
                    <input type="search" id="searchInput" oninput="handleSearchInput(event)"
                        class="cursor-pointer relative z-10 w-2 h-10 lg:h-10 lg:w-10 rounded-full border text-[#FFB9C5] border-white bg-transparent pl-12 outline-none focus:w-[100%] focus:cursor-text focus:border-[#FFB9C5] focus:pl-16 focus:pr-4 font-vietnam" />
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-[#FFB9C5] px-3.5 peer-focus:border-[#FFB9C5] peer-focus:stroke-[#FFB9C5]"
                        fill="none" viewBox="0 0 24 24" stroke="#FFB9C5" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
            {{-- ini hasilnya --}}
            <div id="searchResults" class="search-results cursor-pointer w-40 hidden"></div>

        </div>
    </nav>
    <style>
        nav {
            height: 6rem;
            width: 100%;
            background-color: white;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            z-index: 10;
            position: -webkit-sticky;
            position: -moz-sticky;
            position: -o-sticky;
            position: -ms-sticky;
            position: sticky;
        }

        /* styling search */
        .search-results {
            position: absolute;
            top: 87%;
            right: 6%;
            width: 250px;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            max-height: 200px;
            overflow-y: auto;
            border-radius: 5px;
        }

        .search-result {
            padding: 8px 12px;
            cursor: pointer;
        }

        .search-result:hover {
            background-color: #f5f5f5;
        }

        .search-container {
            position: relative;
        }

        /*Styling logo*/
        .logo {
            text-align: center;
        }

        .logo img {}

        /*Styling Links*/
        .nav-links {
            display: flex;
            list-style: none;
            padding: 0 0.7vw;
            gap: 20px;
            align-items: center;
            color: #272727;
        }

        .nav-links li a {
            text-decoration: none;
            margin: 0 0.7vw;
        }

        .nav-links li a:hover {}

        .nav-links li {
            position: relative;
        }

        .nav-links li a::before {
            content: "";
            display: block;
            height: 3px;
            width: var(--before-width, 0%);
            position: absolute;
            transition: all ease-in-out 250ms;
            margin: 25px 0 0 10%;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            background: linear-gradient(to right, #BA2B60, #c6537b, #d27b98);
            border-radius: 12px;
        }

        .nav-links li a:hover::before {
            width: 80%;
        }

        /*Styling Buttons*/
        .login-button {
            background-color: transparent;
            border: 1.5px solid #f2f5f7;
            border-radius: 2em;
            padding: 0.6rem 0.8rem;
            margin-left: 2vw;
            font-size: 1rem;
            cursor: pointer;

        }

        .login-button:hover {
            color: #131418;
            background-color: #f2f5f7;
            border: 1.5px solid #f2f5f7;
            transition: all ease-in-out 350ms;
        }

        .join-button {
            color: #131418;
            background: linear-gradient(to right, #BA2B60, #c6537b, #d27b98);
            border: 1.5px solid #FFB9C5;
            padding: 10px 27px;
            font-size: 1rem;
            cursor: pointer;
            color: white;
        }

        .join-button:hover {
            color: #f2f5f7;
            background-color: transparent;
            border: 1.5px solid #f2f5f7;
            transition: all ease-in-out 350ms;
        }

        /*Styling Hamburger Icon*/
        .hamburger div {
            width: 30px;
            height: 3px;
            background: black;
            margin: 5px;
            transition: all 0.3s ease;
        }

        .hamburger {
            display: none;
        }

        /*Stying for small screens*/
        @media screen and (max-width: 768px) {
            nav {
                z-index: 3;
                position: -webkit-sticky;
                position: -moz-sticky;
                position: -o-sticky;
                position: -ms-sticky;
                position: sticky;

            }
            .search-results {
            position: absolute;
            top: 87%;
            right: 6%;
            width: 250px;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            max-height: 200px;
            overflow-y: auto;
            border-radius: 5px;
            padding: 5px 10px;
        }


            .hamburger {
                display: block;
                position: absolute;
                cursor: pointer;
                right: 5%;
                top: 50%;
                transform: translate(-5%, -50%);
                z-index: 2;
                transition: all 0.7s ease;
            }

            .nav-links {
                position: absolute;
                background: #FFB9C5;
                height: 100vh;
                width: 100%;
                flex-direction: column;
                clip-path: circle(50px at 90% -20%);
                -webkit-clip-path: circle(50px at 90% -10%);
                transition: all 1s ease-out;
                pointer-events: none;
                padding-top: 100px;
                gap: 25px;
                color: white;
                overflow: hidden;
                -webkit-overflow-scrolling: touch;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }

            .nav-links.open {
                clip-path: circle(1000px at 90% -10%);
                -webkit-clip-path: circle(1000px at 90% -10%);
                pointer-events: all;
            }

            .nav-links li {
                opacity: 0;
            }

            .nav-links li:nth-child(1) {
                transition: all 0.5s ease 0.2s;
            }

            .nav-links li:nth-child(2) {
                transition: all 0.5s ease 0.4s;
            }

            .nav-links li:nth-child(3) {
                transition: all 0.5s ease 0.6s;
            }

            .nav-links li:nth-child(4) {
                transition: all 0.5s ease 0.7s;
            }

            .nav-links li:nth-child(5) {
                transition: all 0.5s ease 0.8s;
            }

            .nav-links li:nth-child(6) {
                transition: all 0.5s ease 0.9s;
                margin: 0;
            }

            .nav-links li:nth-child(7) {
                transition: all 0.5s ease 1s;
                margin: 0;
            }

            li.fade {
                opacity: 1;
            }
        }

        /*Animating Hamburger Icon on Click*/
        .toggle .line1 {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .toggle .line2 {
            transition: all 0.7s ease;
            width: 0;
        }

        .toggle .line3 {
            transform: rotate(45deg) translate(-5px, -6px);
        }
    </style>
    <script>
        const hamburger = document.querySelector(".hamburger");
        const navLinks = document.querySelector(".nav-links");
        const links = document.querySelectorAll(".nav-links li");

        hamburger.addEventListener('click', () => {
            //Animate Links
            setTimeout(() => {
                navLinks.classList.toggle("open");
                links.forEach(link => {
                    link.classList.toggle("fade");
                });
            }, 100);

            //Hamburger Animation
            hamburger.classList.toggle("toggle");
        });
    </script>
    {{-- js search --}}
    <script>
        // Handle
        function handleSearchInput2(event) {
            const searchInput2 = event.target.value;
            const searchResults2 = document.getElementById('searchResults2');

            if (searchInput2.trim().length > 0) {
                // ke route ajax
                fetch(`/search?keyword=${encodeURIComponent(searchInput2)}`)
                    .then(response => response.json())
                    .then(data => {
                        // Hapus semua hasil pencarian sebelumnya
                        while (searchResults2.firstChild) {
                            searchResults2.firstChild.remove();
                        }

                        // Tampilkan hasil pencarian
                        data.forEach(result => {
                            const resultItem2 = document.createElement('div');
                            resultItem2.classList.add('search-result2');
                            resultItem2.textContent = result.name;
                            resultItem2.addEventListener('click', () => {
                                window.location.href =
                                    `/detail/${result.slug}`;
                            });
                            searchResults2.appendChild(resultItem2);
                        });

                        searchResults2.classList.remove('hidden');
                    });
            } else {
                // Jika input pencarian kosong, hapus semua hasil pencarian
                while (searchResults2.firstChild) {
                    searchResults2.firstChild.remove();
                }

                searchResults2.classList.add('hidden');
            }
        }
    </script>
    <script>
        // Handle
        function handleSearchInput(event) {
            const searchInput = event.target.value;
            const searchResults = document.getElementById('searchResults');

            if (searchInput.trim().length > 0) {
                // ke route ajax
                fetch(`/search?keyword=${encodeURIComponent(searchInput)}`)
                    .then(response => response.json())
                    .then(data => {
                        // Hapus semua hasil pencarian sebelumnya
                        while (searchResults.firstChild) {
                            searchResults.firstChild.remove();
                        }

                        // Tampilkan hasil pencarian
                        data.forEach(result => {
                            const resultItem = document.createElement('div');
                            resultItem.classList.add('search-result');
                            resultItem.textContent = result.name;
                            resultItem.addEventListener('click', () => {
                                window.location.href =
                                    `/detail/${result.slug}`;
                            });
                            searchResults.appendChild(resultItem);
                        });

                        searchResults.classList.remove('hidden');
                    });
            } else {
                // Jika input pencarian kosong, hapus semua hasil pencarian
                while (searchResults.firstChild) {
                    searchResults.firstChild.remove();
                }

                searchResults.classList.add('hidden');
            }
        }
    </script>

</div>
