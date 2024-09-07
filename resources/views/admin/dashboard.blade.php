@extends('layouts.dashboard')
@section('breadcrumb')
<ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
    <li class="text-sm leading-normal">
       {{date('j F Y')}}
    </li>
</ol>
<h6 class="mb-0 font-bold capitalize">Howdy, User!</h6>
@endsection
@section('main')
    <!-- row 1 -->
    <div class="-mx-3 grid lg:grid-cols-3">
        <!-- card1 -->
        <div class="px-3 mb-6 ">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl border-1 border-gray-500">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-jakarta-sans text-sm font-semibold leading-normal">Total Responden</p>
                    <h5 class="mb-0 font-bold">
                      10
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <span class="material-symbols-rounded text-xl relative top-3.5 text-white">clinical_notes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card2 -->
        <div class="px-3 mb-6 ">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-jakarta-sans text-sm font-semibold leading-normal">Total Kuesioner</p>
                    <h5 class="mb-0 font-bold">
                      3
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <span class="material-symbols-rounded text-xl relative top-3.5 text-white">query_stats</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card3 -->
        <div class="px-3 mb-6 ">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-jakarta-sans text-sm font-semibold leading-normal">Total Artikel</p>
                    <h5 class="mb-0 font-bold">
                        25
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                    <span class="material-symbols-rounded text-xl relative top-3.5 text-white">description</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    {{-- Row 2: Statistics --}}
    <h1 class="text-xl font-semibold px-3">Statistik Responden</h1>
    <div class="grid lg:grid-cols-3 my-5">
        {{-- Card #1 --}}
        <div class="px-3 mb-6 ">
            <div class="flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
                <h3 class="font-medium">Berdasarkan Rentang Umur</h3>

            </div>
        </div>
    </div>
@endsection