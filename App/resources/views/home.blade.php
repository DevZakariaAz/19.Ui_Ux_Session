@extends('layouts.app')
@section('content')
    <main>
        <section class="flex flex-col items-center px-20 pb-36 w-full bg-white max-md:px-5 max-md:pb-24 max-md:max-w-full">
            <div class="flex z-10 flex-col mt-0 mb-0 w-full max-w-[1110px] max-md:mb-2.5 max-md:max-w-full">
                <nav class="self-center px-20 py-9 max-w-full rounded-2xl shadow-sm bg-zinc-200 bg-opacity-70 w-[750px] max-md:px-5">
                    <ul class="flex gap-5 max-md:flex-col">
                        <li class="flex flex-col w-[22%] max-md:ml-0 max-md:w-full">
                            <button class="flex grow gap-5 max-md:mt-10 focus:outline-none focus:ring-2 focus:ring-slate-400" type="button">
                                <span class="flex flex-col justify-center items-center px-1.5 my-auto bg-white h-[25px] rounded-[100px] w-[25px]">
                                    <span class="flex shrink-0 bg-black h-[13px] rounded-[100px] w-[13px]"></span>
                                </span>
                                <span class="text-2xl font-semibold text-center text-black uppercase">all</span>
                            </button>
                        </li>
                        <li class="flex flex-col ml-5 w-[41%] max-md:ml-0 max-md:w-full">
                            <button class="flex grow gap-5 text-2xl font-semibold text-black uppercase max-md:mt-10 focus:outline-none focus:ring-2 focus:ring-slate-400" type="button">
                                <span class="flex shrink-0 my-auto bg-white h-[25px] rounded-[100px] w-[25px]"></span>
                                <span class="grow shrink w-[114px]">for rent</span>
                            </button>
                        </li>
                        <li class="flex flex-col ml-5 w-[37%] max-md:ml-0 max-md:w-full">
                            <button class="flex grow gap-5 text-2xl font-semibold text-black uppercase max-md:mt-10 focus:outline-none focus:ring-2 focus:ring-slate-400" type="button">
                                <span class="flex shrink-0 my-auto bg-white h-[25px] rounded-[100px] w-[25px]"></span>
                                <span class="grow shrink w-[99px]">for buy</span>
                            </button>
                        </li>
                    </ul>
                </nav>

                <section class="mt-24 max-md:mt-10 max-md:max-w-full">
                    <div class="flex gap-5 max-md:flex-col">
                        <div class="flex flex-col w-[45%] max-md:ml-0 max-md:w-full">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/20315f8cc02056402c517b912336bb9ae36540efd39c1a67035984b0b44efad5?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="Award winning real estate showcase" class="object-contain grow w-full aspect-[0.89] max-md:mt-10 max-md:max-w-full" />
                        </div>
                        <article class="flex flex-col ml-5 w-[55%] max-md:ml-0 max-md:w-full">
                            <div class="flex flex-col self-stretch my-auto w-full max-md:mt-10 max-md:max-w-full">
                                <h2 class="self-start text-5xl font-bold leading-[58px] text-slate-800 max-md:max-w-full max-md:text-4xl max-md:leading-[54px]">
                                    Award winning real estate company in <span class="text-6xl font-extrabold">Morocco</span>
                                </h2>
                                <p class="mt-5 text-lg leading-6 text-stone-300 max-md:max-w-full">
                                    Semper arcu mauris aliquam lacus. Massa erat pharetra scelerisque. Ipsum, turpis facilisis tempor pulvinar in lobortis ornare magna.
                                </p>
                                <div class="flex flex-wrap gap-10 mt-10 leading-tight max-md:mr-2.5">
                                    <div class="flex flex-col flex-1">
                                        <h3 class="text-sm font-bold uppercase text-slate-300">Previous projects</h3>
                                        <p class="mt-2 text-5xl font-light text-slate-800 max-md:text-4xl">34+</p>
                                    </div>
                                    <div class="flex flex-col flex-1">
                                        <h3 class="text-sm font-bold uppercase text-slate-300">years experience</h3>
                                        <p class="mt-2 text-5xl font-light text-slate-800 max-md:text-4xl">20y</p>
                                    </div>
                                    <div class="flex flex-col flex-1">
                                        <h3 class="text-sm font-bold uppercase text-slate-300">Ongoing projects</h3>
                                        <p class="mt-2 text-5xl font-light text-slate-800 max-md:text-4xl">12</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </section>

        <section class="flex flex-col justify-center items-center px-20 py-14 w-full bg-white max-md:px-5 max-md:max-w-full">
            <div class="flex flex-col items-start w-full max-w-[1110px] max-md:max-w-full">
                <h2 class="text-5xl font-bold leading-tight text-slate-800 max-md:text-4xl">Ongoing projects</h2>
                <p class="mt-3 text-lg leading-tight text-stone-300 max-md:max-w-full">
                    Turpis facilisis tempor pulvinar in lobortis ornare magna.
                </p>
                <div class="self-stretch mt-20 max-md:mt-10 max-md:max-w-full">
                    <div class="flex gap-5 max-md:flex-col">
                        <article class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ab56445b0ce61a457e4d3a0f19cad331130e9001a4d23675d5655837b7ba7ea4?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="Project showcase 1" class="object-contain grow w-full aspect-[0.69] max-md:mt-8" />
                        </article>
                        <article class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/1d5e2e47570ed8907c2c05f637f77110209aa2dd4e1190200c0f948a3dbedc52?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="Project showcase 2" class="object-contain grow w-full aspect-[0.69] max-md:mt-8" />
                        </article>
                        <article class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0855e013467f12d710ae116aaaebb002b48717855289c7be2b292cd6a50ed294?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="Project showcase 3" class="object-contain grow w-full aspect-[0.69] max-md:mt-8" />
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
