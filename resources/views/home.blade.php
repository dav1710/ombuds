@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css?v=' . date('YmdHis')) }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
@endsection

@section('content')
   <div class="home_page">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="slider_custom_button active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="slider_custom_button" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="slider_custom_button" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/Slider.png') }}" class="d-block w-100" alt="...">
            <div class="carousel_title carousel-caption d-none d-md-block">
              <h5>#againstviolance: Awarness raising</h5>
              <h5>#դարձիր_օրինակ</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/Slider.png') }}" class="d-block w-100" alt="...">
            <div class="carousel_title carousel-caption d-none d-md-block">
                <h5>#againstviolance: Awarness raising</h5>
                <h5>#դարձիր_օրինակ</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/Slider.png') }}" class="d-block w-100" alt="...">
            <div class="carousel_title carousel-caption d-none d-md-block">
                <h5>#againstviolance: Awarness raising</h5>
                <h5>#դարձիր_օրինակ</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid home_page_nav">
            <div class="home_nav_link">
                <a href="!#" class="nav-link">ՄԻՋԱԶԳԱՅԻՆ ՀԱՄԱԳՈՐԾԱԿՑՈՒԹՅՈՒՆ</a>
            </div>
            <div class="home_nav_link">
                <a href="!#" class="nav-link">ՄԵԴԻԱԿԵՆՏՐՈՆ</a>
            </div>
            <div class="home_nav_link">
                <a href="!#" class="nav-link">ՄԵՐ ՄԱՍԻՆ</a>
            </div>
      </div>
      <div class="container d-flex justify-content-between home_news">
            <div class="home_news_1 d-flex align-items-center">
                <div class="home_news_1_1"></div>
                <div class="home_news_1_2">
                    <a href="!#" class="link">ՆՈՐՈՒԹՅՈՒՆՆԵՐ</a>
                </div>
            </div>
            <div class="home_news_2 d-flex align-items-center">
                <div class="home_news_2_1"></div>
                <div class="home_news_2_2">
                    <a href="!#" class="link">ՀԱՋՈՂՎԱԾ ՊԱՏՄՈՒԹՅՈՒՆՆԵՐ</a>
                </div>
            </div>
      </div>
      <div class="d-flex align-items-baseline home_action">
            <div class="line"></div>
            <div class="home_action_title">
                <p>ԳՈՐԾՈՒՆԵՈՒԹՅԱՆ ՈՒՂՂՈՒԹՅՈՒՆՆԵՐ</p>
            </div>
       </div>
       <div class="d-flex justify-content-evenly action_directions">
            <div class="d-flex flex-column justify-content-end action_directions_card action_card_1">
                <img src="{{ asset('img/action_1.png') }}" alt="action_1">
                <p class="action_directions_title action_title_1">ԽՈՇՏԱՆԳՈՒՄՆԵՐԻ ԿԱՆԽԱՐԳԵԼՄԱՆ ԱԶԳԱՅԻՆ ՄԵԽԱՆԻԶՄ</p>
            </div>
            <div class="d-flex flex-column justify-content-end action_directions_card action_card_2">
                <img src="{{ asset('img/action_2.png') }}" alt="action_2">
                <p class="action_directions_title action_title_2">ԶԻՆԾԱՌԱՅՈՂՆԵՐԻ ԻՐԱՎՈՒՆՔՆԵՐԻ ՊԱՇՏՊԱՆՈՒԹՅՈՒՆ</p>
            </div>
            <div class="d-flex flex-column justify-content-end action_directions_card action_card_3">
                <img src="{{ asset('img/action_3.png') }}" alt="action_3">
                <p class="action_directions_title action_title_3">ԿԱՆԱՆՑ ԻՐԱՎՈՒՆՔՆԵՐԻ ՊԱՇՏՊԱՆՈՒԹՅՈՒՆ</p>
            </div>
            <div class="d-flex flex-column justify-content-end action_directions_card action_card_4">
                <img src="{{ asset('img/action_4.png') }}" alt="action_4">
                <p class="action_directions_title action_title_4">ԵՐԵԽԱՆԵՐԻ ԻՐԱՎՈՒՆՔՆԵՐԻ ՊԱՇՏՊԱՆՈՒԹՅՈՒՆ</p>
            </div>
            <div class="d-flex flex-column justify-content-end action_directions_card action_card_5">
                <img src="{{ asset('img/action_5.png') }}" alt="action_5">
                <p class="action_directions_title action_title_5">ՀԱՇՄԱՆԴԱՄՈՒԹՅՈՒՆ ՈՒՆԵՑՈՂ ԱՆՁԱՆՑ ԻՐԱՎՈՒՆՔՆԵՐ</p>
            </div>
       </div>
       <div class="container d-flex justify-content-evenly action_directions_icons">
            <div class="d-flex flex-column justify-content-evenly action_directions_icons_card">
                <img src="{{ asset('img/action_icons_1.png') }}" alt="action_icons_1">
                <p class="action_directions_icons_title">ՍԴ ԴԻՄՈՒՄՆԵՐ</p>
            </div>
            <div class="d-flex flex-column justify-content-evenly action_directions_icons_card">
                <img src="{{ asset('img/action_icons_2.png') }}" alt="action_icons_2">
                <p class="action_directions_icons_title">ՎԻՃԱԿԱԳՐՈՒԹՅՈՒՆ</p>
            </div>
            <div class="d-flex flex-column justify-content-evenly action_directions_icons_card">
                <img src="{{ asset('img/action_icons_3.png') }}" alt="action_icons_3" style="width: 68px">
                <p class="action_directions_icons_title">ՕՐԵՆՍԴՐԱԿԱՆ ԱՌԱՋԱՐԿՆԵՐ ԵՎ ԿԱՐԾԻՔՆԵՐ</p>
            </div>
            <div class="d-flex flex-column justify-content-evenly action_directions_icons_card">
                <img src="{{ asset('img/action_icons_4.png') }}" alt="action_icons_4" style="width: 68px">
                <p class="action_directions_icons_title">ԳՈՐԾԱՐԱՐՈՒԹՅԱՆ ՈԼՈՐՏՈՒՄ ԻՐԱՎՈՒՆՔՆԵՐԻ ՊԱՇՏՊԱՆՈՒԹՅՈՒՆ</p>
            </div>
            <div class="d-flex flex-column justify-content-evenly action_directions_icons_card">
                <img src="{{ asset('img/action_icons_5.png') }}" alt="action_icons_5">
                <p class="action_directions_icons_title">ՊԱՇՏՊԱՆԻՆ ԱՌԸՆԹԵՐ ԽՈՐՀՈՒՐԴՆԵՐ</p>
            </div>
            <div class="d-flex flex-column justify-content-evenly action_directions_icons_card">
                <img src="{{ asset('img/action_icons_6.png') }}" alt="action_icons_6" style="width: 70px">
                <p class="action_directions_icons_title">ՄԻՋԱԶԳԱՅԻՆ ԿՈՆՎԵՆՑԻՈՆ ԿԱՐԳԱՎԻՃԱԿՆԵՐ</p>
            </div>
            <div class="d-flex flex-column justify-content-evenly action_directions_icons_card">
                <img src="{{ asset('img/action_icons_7.png') }}" alt="action_icons_7">
                <p class="action_directions_icons_title">ՏԵՂԵԿԱՏՎՈՒԹՅԱՆ ՀԱՍԱՆԵԼԻՈՒԹՅՈՒՆ</p>
            </div>
       </div>
   </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{ asset('js/home.js?v=' . date('YmdHis')) }}"></script>
@endsection
