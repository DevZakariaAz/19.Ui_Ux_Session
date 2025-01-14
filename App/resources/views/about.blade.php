@extends('layouts.app2')

@section('content')
<section class="text-center">
    <h2 class="self-center mt-24 text-5xl font-bold leading-tight text-slate-800 max-md:mt-10 max-md:text-4xl">History</h2>
    <p class="self-center mt-3 text-lg leading-tight text-slate-800 max-md:max-w-full">
      Explore the Key Milestones and Significant Events That Shaped Our Journey Through History
    </p>
    <div class="flex shrink-0 mt-24 max-w-full bg-slate-800 h-[67px] w-[1338px] max-md:mt-10"></div>
    <div class="flex flex-wrap gap-10 self-center mt-6 ml-2.5 w-full leading-tight max-w-[1136px] max-md:max-w-full">
      <article class="flex flex-col flex-1">
        <time datetime="2013" class="self-start text-4xl font-black text-slate-300">2013</time>
        <h3 class="mt-5 text-2xl font-semibold text-slate-800">Company created</h3>
      </article>
      <article class="flex flex-col flex-1">
        <time datetime="2022" class="self-start text-4xl font-black text-slate-300">2022</time>
        <h3 class="mt-5 text-2xl font-semibold text-slate-800">Company created</h3>
      </article>
      <article class="flex flex-col flex-1">
        <time datetime="2024" class="self-start text-4xl font-black text-slate-800">2024</time>
        <h3 class="mt-5 text-2xl font-semibold text-slate-800">Company created</h3>
      </article>
    </div>
  </section>

  <section class="flex flex-col items-center px-14 pt-14 pb-32 mt-44 w-full leading-tight bg-white text-slate-800 max-md:px-5 max-md:pb-24 max-md:mt-10 max-md:mr-2.5 max-md:max-w-full">
    <h2 class="text-5xl font-bold text-center max-md:text-4xl">Testimonials</h2>
    <p class="mt-3 text-lg text-center max-md:max-w-full">
      See what our satisfied clients have to say about their experiences and success stories working with us.
    </p>
    <div class="flex gap-5 justify-between items-center self-stretch mt-20 mb-0 text-2xl max-md:mt-10 max-md:mb-2.5 max-md:max-w-full">
      <button aria-label="Previous testimonial" class="focus:outline-none">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a348e37b0da7a8fe85b88a1979de16afa225691939d66d5eafeb44cdf21e9db7?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="" class="object-contain shrink-0 self-stretch my-auto w-8 aspect-square" />
      </button>
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8414d1ed070451c0fbe21bbd24cab07360072f536ca3c37b6dcb7ddda473a2e3?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="Client testimonial background" class="object-contain self-stretch w-full aspect-[1.27] max-md:max-w-full" />
      <article class="flex flex-col items-start self-stretch my-auto max-md:max-w-full">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/08e9893e89551bd761e6ebbd464cac7bbbef0d839cbfd0113bd063596bcc18a3?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="Testimonial quote marks" class="object-contain aspect-[1.79] w-[50px]" />
        <h3 class="self-stretch mt-5 text-3xl font-bold max-md:max-w-full">Dream house isn't dream anymore</h3>
        <p class="self-stretch mt-5 font-light leading-7 max-md:max-w-full">
          Semper arcu mauris aliquam lacus. Massa erat vitae ultrices pharetra scelerisque. Ipsum, turpis facilisis tempor pulvinar.
        </p>
        <p class="mt-5 font-semibold">Brooklyn Simmons</p>
        <p class="mt-1 text-lg">Artist</p>
      </article>
      <button aria-label="Next testimonial" class="focus:outline-none">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f7029c2a56b199372fed112f606d77eebeeab24161d9be193a95da3ee76adca6?placeholderIfAbsent=true&apiKey=4e53a3fa8bb04bc1ba6e0d4cc67e05f7" alt="" class="object-contain shrink-0 self-stretch my-auto w-8 aspect-square" />
      </button>
    </div>
  </section>    
@endsection