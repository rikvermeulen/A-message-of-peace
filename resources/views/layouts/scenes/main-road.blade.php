@extends('layouts')

@section('content')
    <main class="index overflow-hidden  m-0 ">
        @include ('layouts.partials.header')
        <section class="">
            <div class="scene pointer-events-auto" id="scene">
                <li class="layer layer-1 z-10" data-depth="0.90" data-depth-y="0.20" style="">
                    <div class="background-layer-1">
                    </div>
                    <div class="button-left">
                        <a class="z-50 text-gray-500 absolute arrow-left" href="{{ route('city-entrance') }}">
                        </a>
                        <span>Go to the City</span>
                    </div>
                    <div class="button-right">
                        <a class="z-50 text-gray-500 absolute arrow-right" href="{{ route('village-entrance') }}">
                        </a>
                        <span>Go to the Village</span>
                    </div>
                </li>
                <li class="layer layer-2 z-0" data-depth="0.10" style="">
                    <img src="{{ asset('/images/sky.jpg') }}" alt="">
                    <div class="background-layer-2">

                    </div>
                </li>
                <li class="layer layer-3 z-20" data-depth="0.60" data-depth-y="0.30" style="">
                    <div class="background-layer-3">

                    </div>
                </li>
            </div>
        </section>
    </main>
    {{--footer--}}
    @include ('layouts.partials.footer')


    <script type="text/javascript">
        var body = document.body;

        body.classList.add("overflow-hidden");

        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }
    </script>

@endsection
