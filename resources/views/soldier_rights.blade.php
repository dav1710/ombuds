@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/font_awesome/all.min.css') }}" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('title') Soldier Rights @endsection

@section('content')
<div class="soldier_rights position-relative">
    <ul class="nav nav-tabs container d-flex flex-row justify-content-evenly" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action" id="section1-tab" data-bs-toggle="tab" data-bs-target="#section1" type="button" role="tab" aria-controls="section1" aria-selected="true">Նորություններ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section2" type="button" role="tab" aria-controls="section2" aria-selected="false">Իրավական փաստաթղթեր</button>
        </li>
        <li class="nav-item" role="presentation">
          <button id="big_nav_tab" class="nav-link custom_list_group_action" id="section3-tab" data-bs-toggle="tab" data-bs-target="#section3" type="button" role="tab" aria-controls="section3" aria-selected="false">Պաշտպանին առընթեր խորհուրդ</button>
        </li>
    </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane container_section fade show active" id="section0" role="tabpanel" aria-labelledby="section0-tab">
          <div class="tab-header">
            <div class="d-flex align-items-baseline contact_us_action">
              <div class="line_2"></div>
              <div class="contact_us_action_title">
                  <p>Զինծառայողների և նրանց ընտանիքների անդամների իրավունքների 
                    պաշտպանություն</p>
              </div>
            </div>
          </div>
          <div class="tab-main">
            <div class="torture-audio d-flex flex-column directions_applications torture_directions_applications">
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
                
              
              <img src="{{ asset('img/soldier_scout.png') }}" alt="soldier_scout">

              <p class="soldier_rights_text">
                Մարդու իրավունքնեի պաշտպանի գործունեության առաջնահերթություններից է զինված ուժերում մարդու իրավունքների պաշտպանությունը, ներառյալ՝ զինծառայողներին և նրանց ընտանիքների անդամներին: Պաշտպանի աշխատակազմն ունի մասնագիտական անհրաժեշտ կարողություններ՝ հետևելու զինված ուժերում իրավասու մարմինների ու պաշտոնատար անձանց կողմից մարդու իրավունքների ապահովմանը:
              </p>

              <p class="soldier_rights_text">
                2016 թվականից Պաշտպանի աշխատակազմում ստեղծվեց Քրեադատավարական և զինծառայողների իրավունքների պաշտպանության մասնագիտացված վարչություն։ Արդեն 2017 թվականին հիմնվեց Զինծառայողների և նրանց ընտանիքների անդամների իրավունքների պաշտպանության բաժինը, որը մասնագիտացված ստորաբաժանում է Քրեական արդարադատության ոլորտում և զինված ուժերում մարդու իրավունքների պաշտպանության դեպարտամենտի կազմում:
              </p>

              <p class="soldier_rights_text">
                TEXTER AVELACNEL
              </p>
            </div>
          </div>
        </div>

        <div class="tab-pane container_section fade" id="section1" role="tabpanel" aria-labelledby="section1-tab">
          <div class="tab-header">
            <div class="d-flex align-items-baseline contact_us_action">
              <div class="line_2"></div>
              <div class="contact_us_action_title">
                  <p>Նորություններ</p>
              </div>
            </div>
          </div>

          <div class="tab-main">
            <div class="torture_directions_applications ">
            <div class="row mb-5">
              <div class="col mt-3">
                <div class="card torture-card position-relative">
                    <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top" alt="...">
                    <div class="card-body torture-card-body">
                      <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների հետ</p>
                      <div class="torture-card-date d-flex position-absolute">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col mt-3">
                <div class="card torture-card position-relative">
                    <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top" alt="...">
                    <div class="card-body torture-card-body">
                      <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների հետ</p>
                      <div class="torture-card-date d-flex position-absolute">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col mt-3">
                <div class="card torture-card position-relative">
                    <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top" alt="...">
                    <div class="card-body torture-card-body">
                      <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների հետ</p>
                      <div class="torture-card-date d-flex position-absolute">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col mt-3">
                <div class="card torture-card position-relative">
                    <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top" alt="...">
                    <div class="card-body torture-card-body">
                      <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների հետ</p>
                      <div class="torture-card-date d-flex position-absolute">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col mt-3">
                <div class="card torture-card position-relative">
                    <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top" alt="...">
                    <div class="card-body torture-card-body">
                      <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների հետ</p>
                      <div class="torture-card-date d-flex position-absolute">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col mt-3">
                <div class="card torture-card position-relative">
                    <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top" alt="...">
                    <div class="card-body torture-card-body">
                      <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների հետ</p>
                      <div class="torture-card-date d-flex position-absolute">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col mt-3">
                <div class="card torture-card position-relative">
                    <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top" alt="...">
                    <div class="card-body torture-card-body">
                      <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների հետ</p>
                      <div class="torture-card-date d-flex position-absolute">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col mt-3">
                <div class="card torture-card position-relative">
                    <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top" alt="...">
                    <div class="card-body torture-card-body">
                      <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների հետ</p>
                      <div class="torture-card-date d-flex position-absolute">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col mt-3">
                <div class="card torture-card position-relative">
                    <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top" alt="...">
                    <div class="card-body torture-card-body">
                      <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների հետ</p>
                      <div class="torture-card-date d-flex position-absolute">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col mt-3">
                <div class="card torture-card position-relative">
                    <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top" alt="...">
                    <div class="card-body torture-card-body">
                      <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների հետ</p>
                      <div class="torture-card-date d-flex position-absolute">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>

        <div class="tab-pane container_section fade" id="section2" role="tabpanel" aria-labelledby="section2-tab">
          <div class="tab-header">
            <div class="d-flex align-items-baseline contact_us_action">
              <div class="line_2"></div>
              <div class="contact_us_action_title">
                  <p>Իրավական փաստաթղթեր</p>
              </div>
            </div>
          </div>

          <div class="tab-main">
            <div class="d-flex flex-column align-items-center">
              <a class="report_pdf" href="!#" class="mb-3">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Հայաստանի Հանրապետության օրենքը «Հայաստանի Հանրապետության զինված ուժերի կարգապահական կանոնագիրք» Հայաստանի Հանրապետության օրենքում փոփոխություններ և լրացումներ կատարելու մասին 
              </a>
              <a class="report_pdf" href="!#">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանի դիրքորոշումը ՀՀ վարչական դատարանի դիմումի հիման վրա՝ «Զինվորական ծառայության և զինծառայողի կարգավիճակի մասին» ՀՀ օրենքի 61-րդ հոդվածի 16-րդ մասի՝ ՀՀ Սահմանադրության համապատասխանությանը հարցը որոշելու վերաբերյալ գործի» կապակցությամբ
              </a>
              <a class="report_pdf" href="!#">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">..
                ..
              </a>
            </div>
          </div>
        </div>

        <div class="tab-pane container_section fade" id="section3" role="tabpanel" aria-labelledby="section3-tab">
          <div class="tab-header">
            <div class="d-flex align-items-baseline contact_us_action">
              <div class="line_2"></div>
              <div class="contact_us_action_title">
                  <p>Պաշտպանին առընթեր խորհուրդ</p>
              </div>
            </div>
          </div>

          <div class="tab-main">
            <div class="soldier_rights_audio holder" >
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
  
            <div>
              <p class='soldier_rights_header_text'>
                ՀԱՅԱՍՏԱՆԻ ՀԱՆՐԱՊԵՏՈՒԹՅԱՆ ՄԱՐԴՈՒ ԻՐԱՎՈՒՆՔՆԵՐԻ ՊԱՇՏՊԱՆԻՆ ԱՌԸՆԹԵՐ ԶԻՆՎԱԾ ՈՒԺԵՐՈՒՄ ՄԱՐԴՈՒ ԻՐԱՎՈՒՆՔՆԵՐԻ ՊԱՇՏՊԱՆՈՒԹՅԱՆ ՀԱՐՑԵՐՈՎ ՓՈՐՁԱԳԻՏԱԿԱՆ ԽՈՐՀՈՒՐԴ
              </p>

              <div class="torture-card-date d-flex">
                <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                <p>10.06.2022</p>
              </div>
            </div>

            <p class="soldier_rights_text">
              Մարդու իրավունքների պաշտպանին առընթեր Զինված ուժերում մարդու իրավունքների պաշտպանության հարցերով փորձագիտական խորհրդը ձևավորվել է 2019 թվականի ապրիլի 11-ին: Խորհրդի նպատակն է խորհրդատվական աջակցություն տրամադրել Պաշտպանին` զինծառայողների իրավունքների պաշտպանության գործում: Այն աջակցում է զինված ուժերում և այլ զորքերում մարդու իրավունքների պաշտպանությանը, ներառյալ՝ զինծառայողների և այլ զինապարտների, ինչպես նաև նրանց ընտանիքների անդամների իրավունքների պաշտպանությանն առնչվող խնդիրների վերհանմանը և իրավասու մարմնին դրանց լուծմանն ուղղված առաջարկների ներկայացմանը:
            </p>

            <p class="soldier_rights_text">
              Խորհուրդը կազմավորվում է Պաշտպանի որոշմամբ՝ զինծառայողների իրավունքների պաշտպանության ոլորտում անհրաժեշտ փորձ և գիտելիքներ ունեցող հասարակական կազմակերպությունների ներկայացուցիչներից և անկախ մասնագետներից: Նրանց շարքում են զինծառայողների իրավունքների պաշտպանության ոլորտում իրավաբանի, մանկավարժի, բժշկի, հոգեբանի, սոցիալական աշխատանքի մասնագիտություն կամ համապատասխան աշխատանքային փորձ ունեցող անձինք: Պաշտպանը խորհրդում կարող է ընդգրկել նաև զինվորական ծառայություն անցնող կամ պահեստազորում հաշվառված զինծառայողներ կամ նրանց ընտանիքների անդամներ:
            </p>

            <p class="soldier_rights_text">
              Պաշտպանին առընթեր խորհրդում քննարկվում են զինծառայողների իրավունքների ապահովման վերաբերյալ Պաշտպանի հաղորդումները և զեկույցները, օրենսդրական փոփոխությունների անհրաժեշտությունը և համապատասխան առաջարկությունները, միջազգային և հասարակական կազմակերպությունների զեկույցները, ինչպես նաև ոլորտում առկա համակարգային և հանրային հետաքրքրություն ներկայացնող խնդիրները: Քննարկման առարա է դառնում նաև զինծառայողներին և նրանց ընտանիքների անդամներին սոցիալ-հոգեբանական և իրավական աջակցություն տրամադրելը:
            </p>
          </div>

        </div>
      </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('js/player.js') }}"></script>
  <script src="{{ asset('js/font_awesome/all.min.js') }}"></script>
@endsection
