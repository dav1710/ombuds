@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/font_awesome/all.min.css') }}" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('title') Information Availability @endsection

@section('content')
        <div class="info-tab-pane tab-pane container_section fade show active" id="section0" role="tabpanel" aria-labelledby="section0-tab">
            <div class="d-flex align-items-baseline contact_us_action">
              <div class="line_2"></div>
              <div class="contact_us_action_title">
                  <p>Տեղեկատվության հասանելիություն</p>
              </div>
            </div>
            <div class="d-flex flex-column justify-content-center directions_applications">
              <div style="margin-bottom: 30px;" class="holder" >
                  <div class="audio green-audio-player">
                    <div class="loading">
                      <div class="spinner"></div>
                    </div>
                    <div class="play-pause-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                        <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-icon" id="playPause"/>
                      </svg>
                    </div>
  
                    <div class="controls">
                      <span class="current-time">0:00</span>
                      <div class="slider" data-direction="horizontal">
                        <div class="progress">
                          <div class="pin" id="progress-pin" data-method="rewind"></div>
                        </div>
                      </div>
                      <span class="total-time">0:00</span>
                    </div>
                    <audio crossorigin>
                      <source src="{{ asset('audio/song.mp3')  }}" type="audio/mpeg">
                    </audio>
                  </div>
              </div>
              <div class="holder" >
                  <div class="audio green-audio-player">
                    <div class="loading">
                      <div class="spinner"></div>
                    </div>
                    <div class="play-pause-btn">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                        <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-icon" id="playPause"/>
                      </svg>
                    </div>
  
                    <div class="controls">
                      <span class="current-time">0:00</span>
                      <div class="slider" data-direction="horizontal">
                        <div class="progress">
                          <div class="pin" id="progress-pin" data-method="rewind"></div>
                        </div>
                      </div>
                      <span class="total-time">0:00</span>
                    </div>
                    <audio crossorigin>
                      <source src="{{ asset('audio/song.mp3')  }}" type="audio/mpeg">
                    </audio>
                  </div>
              </div>

              <p class="soldier_rights_text">
                Մարդու իրավունքների պաշտպանի գործունեության կարևոր ուղղություններից է մարդու համար տեղեկատվության հասանելիության ապահովումը։ Պաշտպանի անմիջական ուշադրության ներքո են պետական և տեղական ինքնակառավարման մարմինների կողմից մարդկանց դիմումներին, բողոքներին, նրանց խնդրանքներին պատասխանելու հետ կապված հարցերը: Աշխատանքի այս ուղղությունը ներառում է նաև լրագրողական հարցումներին պատասխան տրամադրելու ապահովումը:
              </p>

              <p class="soldier_rights_text">
                Այս կարևոր ուղղությունը նպատակ ունի շարունակաբար ամրապնդել պետության և քաղաքացիների կապը, նպաստել լրագրողների մասնագիտական աշխատանքի միջոցով տեղեկություններ ստանալու մարդու իրավունքի երաշխավորմանը:
              </p>

              <p class="soldier_rights_text">
                Մարդու իրավունքների պաշտպանի աշխատակազմում վարվում է առանձին վիճակագրություն տեղեկատվության ազատությանոլորտում գրավոր և բանավոր բողոքների վերաբերյալ անհրաժեշտության դեպքում առաջարկներ ներկայացնելու նպատակով:
              </p>

              <p class="soldier_rights_text">
                Օրինակ՝ 2016 թվականին քաղաքացիների դիմումներին կամ բողոքներին չպատասխանելու վերաբերյալ ստացվել է 38 բողոք, 2017 թվականին՝ 46, իսկ 2018 թվականին բողոքների թիվը կրկնակիից ավելի աճել է՝ հասնելով 109-ի։ Այս աճը պայմանավորված է նաև նրանով, որ 2018 թվականի ապրիլ-մայիս ամիսների իրադարձություններից հետո շեշտակիորեն աճել է մարդկանց դիմումների և բողոքների թիվը:
              </p>

              <p class="soldier_rights_text">
                Եթե 2016 թվականին դիմումների հիմնական մասն ուղղված է եղել Պաշտպանության նախարարության, Կառավարության աշխատակազմի և Քննչական կոմիտեի դեմ, ապա 2017 թվականին՝ Ոստիկանության, Դատախազության, Քննչական կոմիտեի, Պաշտպանության նախարարության և Առողջապահության նախարարության դեմ։
              </p>

            </div>
        </div>

@endsection

@section('scripts')
  <script src="{{ asset('js/player.js') }}"></script>
  <script src="{{ asset('js/font_awesome/all.min.js') }}"></script>
@endsection
