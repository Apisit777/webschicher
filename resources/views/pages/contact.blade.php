@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')
    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/wasuta-building.png') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">@lang('frontend.menu.contact_us')</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="content bg-white">
        <div class="content content-boxed">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    {{-- <div class="row">
                        <p>@lang('frontend.contact.content')</p>
                    </div> --}}
                    <div class="row col-12">
                        <div class="col-md-5">
                            <div class="col-md-12" style="height: 450px">
                                <div class="block block-rounded">
                                    <div class="options-container">
                                        <img width="100%" height="450px" src="{{ asset('media/photos/wasuta-building.png') }}"  />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="col-md-12">
                                <iframe
                                    height="450"
                                    width="100%"
                                    frameborder="0" style="border:0"
                                    src="https://www.google.com/maps/embed/v1/place?&q=13.742263,100.634524&zoom=18&key=AIzaSyDMeQHn11UvPNJ_yXUIdopsE3TzhTWU580" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-12">
                            <div class=" block-rounded">
                                {{-- <div class="block-header block-header-default">
                                    <h3 class="block-title">Address</h3>
                                </div> --}}
                                <div class="block-content row">
                                    <address class="font-size-18 col-md-3">
                                        <div class="font-size-h4 mb-1">สำนักงานใหญ่</div>
                                        1168 ถนนพระราม 9<br>
                                        เขตสวนหลวง แขวงสวนหลวง<br>
                                        กรุงเทพมหานคร 10250<br><br>
                                        {{-- <i class="fa fa-phone"></i> 02-057-1292<br> --}}
                                        <i class="fa fa-envelope-o"></i> <a href="mailto:markawan@schicher.com">markawan@schicher.com</a>
                                    </address>
                                    <address class="font-size-18 col-md-3">
                                        <div class="font-size-h4 mb-1">เวลาทำการ</div>
                                        วันจันทร์ถึงศุกร์<br>
                                        10.00น. ถึง 19.00น.​<br><br>
                                        {{-- <i class="fa fa-phone"></i> 02-057-1292<br> --}}
                                        {{-- <i class="fa fa-envelope-o"></i> <a href="mailto:markawan@schicher.com">markawan@schicher.com</a> --}}
                                    </address>
                                    <address class="font-size-18 col-md-3">
                                        <div class="font-size-h4 mb-1">Call Center</div>
                                        ตลอด 24 ชั่วโมง.​<br><br>
                                        <a href="tel:020571292"><i class="fa fa-phone"></i> 02-057-1292</a><br>
                                        {{-- <i class="fa fa-envelope-o"></i> <a href="mailto:markawan@schicher.com">markawan@schicher.com</a> --}}
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')
@endsection
