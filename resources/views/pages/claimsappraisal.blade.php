@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image head-title mb-3" style="background-image: url('{{ asset('media/photos/services/02.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear"
                        data-class="animated fadeInDown">@lang('frontend.claimsappraisal.title')</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="content bg-white">
        <div class="content content-boxed">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="row">
                        <article class="story">
                            <div class="row gutters-tiny items-push js-gallery push img-fluid-100 js-gallery-enabled">
                                <div class="col-12 animated fadeIn d-flex justify-content-center">
                                    <div class="">
                                        <img class="img-mh-450" src="{{ asset('media/photos/services/02.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                {{-- <strong class="font-size-h4">@lang('frontend.about.title1')</strong> --}}
                                {{-- <p class="font-size-sm">
                                <span class="text-primary">Barbara Scott</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                            </p> --}}
                                <p class="">
                                    &nbsp; &nbsp; &nbsp; @lang('frontend.claimsappraisal.content')
                                </p>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50"
                        data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.claimsappraisal.ach') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/02_01.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">@lang('frontend.Automotive_Claims_Handling.title')</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50"
                        data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.claimsappraisal.tpas') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/02_02.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">@lang('frontend.Third_Party_Administration_Service.title')</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50"
                        data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.claimsappraisal.aas') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/02_03.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">@lang('frontend.Accident_Appraisal_Services.title')</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50"
                        data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.claimsappraisal.ba') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/02_04.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">@lang('frontend.Bodyshop_Appraisal.title') </h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50"
                        data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="{{ route('service.claimsappraisal.ga') }}">
                            <img class="img-fluid" src="{{ asset('media/photos/services/02_05.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">@lang('frontend.Garage_Appraisal.title')</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 js-appear-enabled animated fadeIn invisible" data-toggle="appear" data-offset="50"
                        data-class="animated fadeIn">
                        <a class="block block-rounded block-link-pop" href="#">
                            <img class="img-fluid" src="{{ asset('media/photos/services/02_05.jpg') }}" alt="">
                            <div class="block-content">
                                <h4 class="mb-1">&nbsp;</h4>
                                {{-- <p class="font-size-sm">
                                    <span class="text-primary">Carl Wells</span> on July 16, 2019 · <em class="text-muted">10 min</em>
                                </p> --}}
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
@endsection
