@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
@endsection




@section('content')
<div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="300">
    {{-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link custom_list_group_action" href="#section1">Դիմել Պաշտպանին</a>
            </li>
            <li class="nav-item">
              <a class="nav-link custom_list_group_action" href="#section2">Հաճախ տրվող հարցեր</a>
            </li>
            <li class="nav-item">
              <a class="nav-link custom_list_group_action" href="#section3">Հետադարձ կապ</a>
            </li>
          </ul>
        </div>
      </nav> --}}
    <div id="list-example" class="list-group container d-flex flex-row contact_us">
        <a class="list-group-item list-group-item-action custom_list_group_action active" href="#section1">Դիմել Պաշտպանին</a>
        <a class="list-group-item list-group-item-action custom_list_group_action" href="#section2">Հաճախ տրվող հարցեր</a>
        <a class="list-group-item list-group-item-action custom_list_group_action" href="#section3">Հետադարձ կապ</a>
      </div>
      <div id="section1" class="container_section" style="padding:200px 0;">
        <div class="d-flex align-items-baseline contact_us_action">
            <div class="line_2"></div>
            <div class="contact_us_action_title">
                <p>Դիմել Պաշտպանին</p>
            </div>
        </div>
        <div class="d-flex apply_contact_us">
            <div class="apply_contact_us_item">
                <p>Եթե դուք ունեք նույնականացման քարտ</p>
            </div>
            <img src="{{ asset('img/arrow.png') }}" alt="arrow">
            <div class="apply_contact_us_item">
                <img src="{{ asset('img/cart.png') }}" alt="arrow">
                <h3>Տեղադրեք ձեր նույնականացման քարտը սարքի մեջ</h3>
            </div>
            <img src="{{ asset('img/arrow.png') }}" alt="arrow">
            <div class="apply_contact_us_item">
                <a href="!#">
                    <img src="{{ asset('img/login.png') }}" alt="login">Մուտք
                </a>
            </div>
        </div>


        <div class="apply_not_id">
            <div class="apply_not_id_title">
                <p>Եթե Դուք չունեք նույնականացման քարտ</p>
                <img class="arrow_down" src="{{ asset('img/arrow.png') }}" alt="arrow">
            </div>
            <div class="d-flex apply_not_id_form">
                <div class="apply_not_id_form_left">
                    <input type="text" name="full_name" class="apply_name" placeholder="Ամբողջական անուն">
                    <textarea name="message" id="" cols="20" rows="8" class="apply_message" placeholder="Հաղորդագրություն"></textarea>
                </div>
                <div class="apply_not_id_form_right">
                    <div class="apply_not_id_right_container">
                        <input type="text" name="subject" class="apply_subject" placeholder="Թեմա">
                        <input type="text" name="email" class="apply_email" placeholder="Էլեկտրոնային հասցե">
                    </div>
                    <div class="apply_not_id_form_buttons">
                        <label class="apply_file">
                            <input type="file" name="file">
                            <img src="{{ asset('img/attach.png') }}" alt="attach">
                            Կցել ֆայլ
                        </label>
                        <label class="apply_submit">
                            <input type="submit" class="apply_submit_btn">
                            <img src="{{ asset('img/send_apply.png') }}" alt="attach">
                            Ուղարկել
                        </label>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div id="section2" class="container_section">
        <div class="d-flex align-items-baseline contact_us_action">
            <div class="line_2"></div>
            <div class="contact_us_action_title">
                <p>Հաճախ տրվող հարցեր</p>
            </div>
        </div>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      </div>

      <div id="section3" class="container_section" style="padding:200px 0;">
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      </div>

</div>
@endsection





@section('scripts')
<script>
    $(function(){
        $('body').scrollspy({target: ".contact_us"})
    });
    $(document).ready(function(){
    $('a[href^="#"]').click(function(e) {
        e.preventDefault();
        var target = this.hash, $target = $(target);
        $('html, body').stop().animate({
        'scrollTop': $target.offset().top-80
        }, 300, 'swing', function() {
        window.location.hash = target;
        });
    });
});
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endsection
