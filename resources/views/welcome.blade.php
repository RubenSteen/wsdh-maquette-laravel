@php
  $projects = collect([
    ['view' => 'kop-beatrixstraat'],
  ]);
@endphp

<x-layout>
    <div class="mx-auto h-[1080px] w-[1920px] bg-gray-100">
        <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
        <div class="mx-auto">
            
            <div class="flex pl-[50px] pr-[50px]">
                <div class="h-[1080px] w-[966px] mr-[50px]">
                  <img class="" src="{{ asset('storage/maquette_kaal.jpg') }}">
                </div>
                <div class="bg-white w-[804px]">
                  <div class="bg-white">
                    @foreach ($projects as $project)
                      @php $view = $project['view']; @endphp
                      @include("projects.$view") 
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
