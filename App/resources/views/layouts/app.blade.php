<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Real Estate</title>
</head>
<body>
    <header class="flex flex-col w-full bg-slate-300 max-md:max-w-full">
        <div class="flex relative flex-col items-center px-20 pt-11 pb-44 w-full min-h-[800px] max-md:px-5 max-md:pb-24 max-md:max-w-full">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ceec17403ce996a1f21f0aa7f33b0af4b8d5323ca2a90a80a877c16acddebe13?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="Background hero image" class="object-cover absolute inset-0 size-full" />
            <div class="flex relative flex-col mb-0 w-full max-w-[1110px] max-md:mb-2.5 max-md:max-w-full">
                <nav class="flex flex-wrap gap-5 justify-between w-full uppercase whitespace-nowrap text-slate-800 max-md:max-w-full">
                    <h1 class="text-lg font-bold">Lugar</h1>
                    <ul class="flex gap-10 self-start text-sm">
                        <li><a href="/" class="hover:underline">Home</a></li>
                        <li><a href="about" class="hover:underline">About</a></li>
                        <li><a href="Contact" class="hover:underline">Contact</a></li>
                    </ul>
                </nav>
                <div class="flex flex-wrap gap-6 self-start mt-28 leading-tight max-md:mt-10">
                    <article class="flex flex-col grow shrink-0 items-start basis-0 w-fit max-md:max-w-full">
                        <h2 class="self-stretch text-8xl font-bold leading-[108px] text-slate-800 max-md:max-w-full max-md:text-4xl max-md:leading-[53px]">
                            A home is built with love and dreams
                        </h2>
                        <p class="mt-5 text-lg text-slate-800">
                            Real estate farm that makes your dreams true
                        </p>
                        <div class="flex gap-2.5 mt-8 max-w-full text-sm w-[278px]">
                            <button class="px-6 py-5 text-white bg-slate-800 max-md:px-5 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-400" type="button">
                                About our team
                            </button>
                            <button class="px-6 py-5 text-slate-800 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-400 max-md:px-5" type="button">

                                Contact us
                            </button>
                        </div>
                    </article>
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/1e10435825132c7c17339e1659de114cfedfbdc990f32af5033a0c64ef6e7596?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="" class="object-contain shrink-0 self-start mt-28 aspect-[0.92] w-[23px] max-md:mt-10" />
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="flex flex-col items-center px-16 pt-24 pb-11 w-full bg-slate-800 max-md:px-5 max-md:max-w-full">
        <div class="flex flex-wrap gap-10 w-full max-w-[1080px] max-md:max-w-full">
            <div class="flex flex-col text-sm text-stone-300">
                <h2 class="self-start text-lg font-bold text-white uppercase">Lugar</h2>
                <address class="not-italic">
                    <div class="flex gap-2 mt-3">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e3c88ef568e4d89cba755f4fc9540703a25854fd09d9866f894ba2cb91ebfccd?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="" class="object-contain shrink-0 my-auto w-3.5 aspect-square" />
                        <p>2118 tangier, Morocco</p>
                    </div>
                    <div class="flex gap-2 self-start mt-3">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7e67ba58047fd0c81f7f1c1cabdcce9aa434ff29010326b2987bb4e804a93311?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="" class="object-contain shrink-0 my-auto w-3.5 aspect-square" />
                        <a href="tel:+212123456789" class="hover:underline">+212 123-456789</a>
                    </div>
                    <div class="flex gap-2 mt-3 whitespace-nowrap max-md:mr-2">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/1c2f2076e207c4facb15171f8be0c63351f927585b3e646a4755d53a760d21c0?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="" class="object-contain shrink-0 my-auto w-3.5 aspect-square" />
                        <a href="mailto:example@gmail.com" class="grow shrink w-[132px] hover:underline">example@gmail.com</a>
                    </div>
                </address>
                <p class="mt-36 text-xs max-md:mt-10 max-md:mr-2">Copyright @ 2022 Lugar Inc.</p>
            </div>

            <nav class="flex-auto self-start max-md:max-w-full">
                <div class="flex gap-5 max-md:flex-col">
                    <div class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col text-sm text-stone-300 max-md:mt-10">
                            <h3 class="text-lg font-bold text-white uppercase">Quick links</h3>
                            <ul class="mt-3 space-y-3">
                                <li><a href="#home" class="hover:underline">Home</a></li>
                                <li><a href="#about" class="hover:underline">About</a></li>
                                <li><a href="#contact" class="hover:underline">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col text-sm text-stone-300 max-md:mt-10">
                            <h3 class="text-lg font-bold text-white uppercase">Legal Links</h3>
                            <ul class="mt-3 space-y-3">
                                <li><a href="#terms" class="hover:underline">Terms</a></li>
                                <li><a href="#conditions" class="hover:underline">Conditions</a></li>
                                <li><a href="#policy" class="hover:underline">Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col text-sm text-stone-300 max-md:mt-10">
                            <h3 class="text-lg font-bold text-white uppercase">Social media</h3>
                            <ul class="mt-3 space-y-3">
                                <FILE path="landing-section.html">
                                <li><a href="#facebook" class="hover:underline">Facebook</a></li>
                                <li><a href="#twitter" class="hover:underline">Twitter</a></li>
                                <li><a href="#youtube" class="hover:underline">YouTube</a></li>
                                <li><a href="#linkedin" class="hover:underline">LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </footer>
</body>
</html>
