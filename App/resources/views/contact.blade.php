@extends('layouts.app2')

@section('content')
    <main class="flex flex-col justify-center items-center px-16 py-24 w-full bg-white max-md:px-5 max-md:max-w-full">
        <section class="-mb-5 ml-8 w-full max-w-[1110px] max-md:mb-2.5 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col">
            <div class="flex flex-col w-[45%] max-md:ml-0 max-md:w-full">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4bd6b9207deb4354fce74d36431feda15d1f8e7ab3ccf8d94d47488ff7aa9235?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="Contact illustration" class="object-contain grow w-full aspect-[0.89] max-md:mt-10 max-md:max-w-full" />
            </div>
            <div class="flex flex-col ml-5 w-[55%] max-md:ml-0 max-md:w-full">
            <div class="flex flex-col self-stretch my-auto w-full max-md:mt-10 max-md:max-w-full">
                <h2 class="self-start text-5xl font-bold leading-tight text-slate-800 max-md:text-4xl">Contact us</h2>
                <p class="self-start mt-3 text-lg leading-tight text-stone-300 max-md:max-w-full">Turpis facilisis tempor pulvinar in lobortis ornare magna.</p>
                <form class="mt-10">
                <div class="flex flex-wrap gap-8 text-lg leading-tight text-stone-300 max-md:max-w-full">
                    <div class="flex flex-col flex-1 grow shrink-0 basis-0 w-fit">
                    <label for="firstName" class="sr-only">First name</label>
                    <input type="text" id="firstName" class="px-5 py-3.5 bg-white border border-solid border-slate-800 max-md:pr-5" placeholder="First name" />
                    </div>
                    <div class="flex flex-col flex-1 grow shrink-0 basis-0 w-fit">
                    <label for="lastName" class="sr-only">Last name</label>
                    <input type="text" id="lastName" class="px-5 py-3.5 bg-white border border-solid border-slate-800 max-md:pr-5" placeholder="Last name" />
                    </div>
                </div>
                <div class="flex flex-wrap gap-8 mt-5 text-lg leading-tight text-stone-300 max-md:max-w-full">
                    <div class="flex flex-col flex-1 grow shrink-0 basis-0 w-fit">
                    <label for="email" class="sr-only">Email address</label>
                    <input type="email" id="email" class="px-5 py-3.5 bg-white border border-solid border-slate-800 max-md:pr-5" placeholder="Email address" />
                    </div>
                    <div class="flex flex-col flex-1 grow shrink-0 basis-0 w-fit">
                    <label for="phone" class="sr-only">Phone number</label>
                    <input type="tel" id="phone" class="px-5 py-3.5 bg-white border border-solid border-slate-800 max-md:pr-5" placeholder="Phone number" />
                    </div>
                </div>
                <div class="mt-5">
                    <label for="description" class="sr-only">Description</label>
                    <textarea id="description" class="w-full px-5 pt-3.5 pb-20 text-lg leading-tight bg-white border border-solid border-slate-800 text-stone-300 max-md:pr-5 max-md:max-w-full" placeholder="Description"></textarea>
                </div>
                <div class="flex gap-5 mt-10 max-w-full w-[333px]">
                    <button type="submit" class="px-6 py-5 text-sm leading-tight text-white bg-slate-800 max-md:px-5">Get a quote</button>
                    <p class="grow shrink my-auto text-xs opacity-60 text-stone-300 w-[166px]">We don't sell your email and spam</p>
                </div>
                </form>
            </div>
            </div>
        </div>
        </section>
    </main>
@endsection
