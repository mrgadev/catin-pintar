@extends('layouts.dashboard')
@section('breadcrumb')
<ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
    <li class="text-sm leading-normal">
      <a class="text-slate-700 underline" href="{{route('admin.dashboard')}}">Dasbor</a>
    </li>
    <li class="text-sm leading-normal before:px-2 before:text-gray-600 before:content-['/']">
        <a class="text-slate-700 underline" href="{{route('admin.kuesioner.index')}}">Kuesioner</a>
    </li>
    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Ubah Data</li>
</ol>
<h6 class="mb-0 font-bold capitalize">Ubah Data</h6>
@endsection