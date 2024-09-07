<aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
      <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
      <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
        <img src="{{asset('img/logo-ct.png')}}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
        <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Catin Pintar</span>
      </a>
    </div>

    {{-- <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" /> --}}
    {{-- {{Route::is('admin.dashboard') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : ''}} --}}
    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
        <li class="mt-0.5 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4  transition-colors" href="{{route('admin.dashboard')}}">
            <div class="{{Route::is('admin.dashboard') ? 'bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl' : ''}} mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded {{Route::is('admin.dashboard') ? 'text-white' : 'text-gray-400'}}">home</span>
            </div>
            <span class="ml-1 duration-300  pointer-events-none ease-soft {{Route::is('admin.dashboard') ? 'font-semibold text-slate-700' : ''}}">Dashboard</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('admin.edukasi.index')}}">
            <div class="{{Route::is('admin.edukasi.*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : 'bg-white'}} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded {{Route::is('admin.edukasi.*') ? 'text-white' : 'text-gray-400'}}">school</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft {{Route::is('admin.edukasi.*') ? 'font-semibold text-slate-700' : ''}}">Edukasi</span>
          </a>
          {{-- <ul>
            <li>
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('admin.edukasi.index')}}">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <span class="material-symbols-rounded text-gray-400">school</span>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft ">Edukasi</span>
                  </a>
            </li>
          </ul> --}}
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('admin.kuesioner.index')}}">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg {{Route::is('admin.kuesioner.*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : 'bg-white'}} shadow-soft-2xl bg-center fill-current stroke-0 text-center xl:p-2.5">
                <span class="material-symbols-rounded text-xl {{Route::is('admin.kuesioner.*') ? 'text-white' : 'text-gray-400'}}">query_stats</span>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft {{Route::is('admin.kuesioner.*') ? 'font-semibold text-slate-700' : ''}}">Kuesioner</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('admin.responden.index')}}">
                <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg {{Route::is('admin.responden.*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : 'bg-white'}} shadow-soft-2xl bg-center fill-current stroke-0 text-center xl:p-2.5">
                    <span class="material-symbols-rounded text-xl {{Route::is('admin.responden.*') ? 'text-white' : 'text-gray-400'}}">clinical_notes</span>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft {{Route::is('admin.responden.*') ? 'font-semibold text-slate-700' : ''}}">Responden</span>
            </a>
        </li>

        <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('admin.artikel.index')}}">
                <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg {{Route::is('admin.artikel.*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : 'bg-white'}} shadow-soft-2xl bg-center fill-current stroke-0 text-center xl:p-2.5">
                    <span class="material-symbols-rounded text-xl {{Route::is('admin.artikel.*') ? 'text-white' : 'text-gray-400'}}">post</span>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft {{Route::is('admin.artikel.*') ? 'font-semibold text-slate-700' : ''}}">Artikel</span>
            </a>
        </li>

     
      </ul>
    </div>

    <div class="mx-4">

      <a class="flex items-center gap-2 px-6 py-3 my-4 text-xs font-bold text-center absolute bottom-0 w-fit text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro bg-red-500 hover:bg-red-700 hover:shadow-soft-2xl hover:scale-102" target="_blank" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro-tailwind?ref=sidebarfree">Keluar <span class="material-symbols-rounded">logout</span></a>
      
    </div>
  </aside>
