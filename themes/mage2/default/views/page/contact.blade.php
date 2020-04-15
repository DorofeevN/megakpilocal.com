@extends('layouts.app')

@section('meta_title')
    {{ $meta_title }}
@endsection

@section('meta_description')
    {{ $meta_description }}
@endsection

@section('content')
    <div class="bread-crumbs">
        <a href="/">
            <img src="{{ asset('client/images/icons/home.png') }}" alt="">
        </a>
        <span class="bread-crumbs__sep">»</span>
        <span>{{ $page->name }}</span>
    </div>

    <div class="contacts">
        <div class="contacts__title">
            {{ $page->name }}
        </div>
        <div class="contacts__wrapper">
            <div class="contacts__info">
                <div class="contacts__info-text">
                    {!! $page->content !!}
                </div>
                {{--<div class="contacts__info-social">--}}
                    {{--<div class="footer__social">--}}
                        {{--<a href="{{ $social['magazine_facebook'] }}" class="footer__social-link" target="_blank">--}}
                            {{--<svg viewBox="0 0 100 100" class="icon" aria-label="facebook">--}}
                                {{--<use xlink:href="{{ asset('client/images/svg/symbols.svg#svg-facebook-f') }}"></use>--}}
                            {{--</svg>--}}
                        {{--</a>--}}
                        {{--<a href="{{ $social['magazine_google_plus'] }}" class="footer__social-link" aria-label="google plus" target="_blank">--}}
                            {{--<svg viewBox="0 0 100 100" class="icon">--}}
                                {{--<use xlink:href="{{ asset('client/images/svg/symbols.svg#svg-google-plus-g') }}"></use>--}}
                            {{--</svg>--}}
                        {{--</a>--}}
                        {{--<a href="{{ $social['magazine_twitter'] }}" class="footer__social-link" aria-label="twitter" target="_blank">--}}
                            {{--<svg viewBox="0 0 100 100" class="icon">--}}
                                {{--<use xlink:href="{{ asset('client/images/svg/symbols.svg#svg-twitter') }}"></use>--}}
                            {{--</svg>--}}
                        {{--</a>--}}
                        {{--<a href="{{ $social['magazine_instagram'] }}" class="footer__social-link" aria-label="twitter" target="_blank">--}}
                            {{--<svg viewBox="0 0 100 100" class="icon">--}}
                                {{--<use xlink:href="{{ asset('client/images/svg/symbols.svg#svg-instagram') }}"></use>--}}
                            {{--</svg>--}}
                        {{--</a>--}}
                        {{--<a href="{{ $social['magazine_pinterest'] }}" class="footer__social-link" aria-label="twitter" target="_blank">--}}
                            {{--<svg viewBox="0 0 100 100" class="icon">--}}
                                {{--<use xlink:href="{{ asset('client/images/svg/symbols.svg#svg-pinterest-p') }}"></use>--}}
                            {{--</svg>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>


                    <div class="call-request" onclick="call_back_form(event, this)" data-route="{{ route('contacts.create') }}">
                        <i class="fa fa-phone"></i>
                    </div>
                    </div>
            <div class="contacts__map">
                <div id="map"></div>
            </div>
        </div>
    </div>



@endsection

@push('scripts')
    {{--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCxIc5kgIpXcZhD-TOsnCSxwcer6934xc&callback=initMap"></script>--}}
    <link rel="stylesheet" href="{{ asset('client/css/call-request.css') }}"/>
    <script>
        $(function() {
{{--//show go-top button--}}
//             $(window).scroll(function () {
//                 if ($(this).scrollTop() > 300) $(".call-request").fadeIn(600);
//                 else $(".call-request").fadeOut(600);
//             });
//go to top function

//             $(".call-request").on("click", function (e) {
//                 var route = $(this).data('contacts/callback');
//
//                 var call_back_modal = $.extend(true, {}, crud);
//
//                 call_back_modal.setSettingsModal({
//                     width: '50%',
//                     height: '25%',
//                 });
//
//                 call_back_modal.action(e, 'call_back_modal', route, 'Пропарсить файл');

            // });

        });



        function call_back_form(e, elem) {
            var route = $(elem).data('route');

            var call_back_modal = $.extend(true, {}, crud);

            call_back_modal.setSettingsModal({
                width: '600',
                height: '450'
            });

            call_back_modal.action(e, 'call_back_modal', route, 'Обратный звонок');
        }

</script>
@endpush
