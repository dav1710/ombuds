@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/font_awesome/all.min.css') }}" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
@endsection
@section('title')
    Statistics
@endsection

@section('content')
    <div class="statistics info-tab-pane tab-pane container_section">

        <div class="d-flex align-items-baseline contact_us_action">
            <div class="line_2"></div>
            <div class="contact_us_action_title">
                <p>Վիճակագրություն</p>
            </div>
        </div>
        <div class="stat-cards">
            <div class="stat-card card position-relative">
                <img src="{{ asset('img/stat.png') }}" class="card-img-top" alt="...">
                <div class="stat-card-body card-body">
                    <p class="stat-card-text card-text">Այցերի ընդանուր քանակ</p>
                </div>
            </div>
            <div class="stat-card card position-relative">
                <img src="{{ asset('img/stat.png') }}" class="card-img-top" alt="...">
                <div class="stat-card-body card-body">
                    <p class="stat-card-text card-text">Այցերի ընդանուր քանակ</p>
                </div>
            </div>
            <div class="stat-card card position-relative">
                <img src="{{ asset('img/stat.png') }}" class="card-img-top" alt="...">
                <div class="stat-card-body card-body">
                    <p class="stat-card-text card-text">Այցերի ընդանուր քանակ</p>
                </div>
            </div>
            <div class="stat-card card position-relative">
                <img src="{{ asset('img/stat.png') }}" class="card-img-top" alt="...">
                <div class="stat-card-body card-body">
                    <p class="stat-card-text card-text">Այցերի ընդանուր քանակ</p>
                </div>
            </div>
            <div class="stat-card card position-relative">
                <img src="{{ asset('img/stat.png') }}" class="card-img-top" alt="...">
                <div class="stat-card-body card-body">
                    <p class="stat-card-text card-text">Այցերի ընդանուր քանակ</p>
                </div>
            </div>
            <div class="stat-card card position-relative">
                <img src="{{ asset('img/stat.png') }}" class="card-img-top" alt="...">
                <div class="stat-card-body card-body">
                    <p class="stat-card-text card-text">Այցերի ընդանուր քանակ</p>
                </div>
            </div>
            <div class="stat-card card position-relative">
                <img src="{{ asset('img/stat.png') }}" class="card-img-top" alt="...">
                <div class="stat-card-body card-body">
                    <p class="stat-card-text card-text">Այցերի ընդանուր քանակ</p>
                </div>
            </div>
            <div class="stat-card card position-relative">
                <img src="{{ asset('img/stat.png') }}" class="card-img-top" alt="...">
                <div class="stat-card-body card-body">
                    <p class="stat-card-text card-text">Այցերի ընդանուր քանակ</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/player.js') }}"></script>
    <script src="{{ asset('js/font_awesome/all.min.js') }}"></script>
@endsection
