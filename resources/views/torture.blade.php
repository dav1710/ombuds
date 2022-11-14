@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/font_awesome/all.min.css') }}" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('title') Torture Mechanism @endsection

@section('content')
<div class="torture">
      <ul class="nav nav-tabs container d-flex flex-row justify-content-evenly" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link custom_list_group_action" id="section1-tab" data-bs-toggle="tab" data-bs-target="#section1" type="button" role="tab" aria-controls="section1" aria-selected="true">Նորություններ</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link custom_list_group_action" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section2" type="button" role="tab" aria-controls="section2" aria-selected="false">Մշտադիտարկման այցեր</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link custom_list_group_action" id="section3-tab" data-bs-toggle="tab" data-bs-target="#section3" type="button" role="tab" aria-controls="section3" aria-selected="false">Համագործակցություն</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link custom_list_group_action torture-first active" id="section0-tab" data-bs-toggle="tab" data-bs-target="#section0" type="button" role="tab" aria-controls="section3" aria-selected="false">Սահմանադրական դատարան
              դիմումներ և նախագծեր</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link custom_list_group_action" id="section4-tab" data-bs-toggle="tab" data-bs-target="#section4" type="button" role="tab" aria-controls="section4" aria-selected="false">Տարեկան և արտահերթ զեկույցներ, իրավական վերլուծություններ</button>
          </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane container_section fade show active" id="section0" role="tabpanel" aria-labelledby="section0-tab">
            <div class="tab-header">
              <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Խոշտանգումների կանխարգելման ազգային մեխանիզմ</p>
                </div>
              </div>
            </div>
            <div class="tab-main">
              <div class="d-flex torture_directions_applications flex-column directions_applications">
                <div class="torture-audio">
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
                </div>
        
                
                <div class="position-relative torture-video-player">
                    <iframe class="" src="" frameborder="0"></iframe>
                    <div class="play-pause-btn position-absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="58" height="64" viewBox="0 0 18 24">
                          <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-icon" id="playPause"/>
                        </svg>
                    </div>
                </div>

                <p class="torture_big_text" style="margin-top: 30px">
                  Խոշտանգումների դեմ ՄԱԿ-ի կոնվենցիայի կամընտիր արձանագրությամբ նախատեսվում է ստեղծել կանխարգելման անկախ ազգային մեխանիզմ, որը պետք է օժտված լինի լայն լիազորություններով, ունենա ազատ մուտքի և համապատասխան ուսումնասիրությունների անցկացման հնարավորություն բոլոր այն վայրերում, որտեղ մարդիկ կարող են զրկված լինել ազատությունից:
                  Կամընտիր արձանագրության վավերացումից հետո ՀՀ մարդու իրավունքների պաշտպանը ճանաչվել է կանխարգելման անկախ ազգային մեխանիզմ:
                  Կանխարգելման ազգային մեխանիզմի կարգավիճակով Պաշտպանի գործունեության նպատակն է խոշտանգումների և այլ դաժան, անմարդկային կամ արժանապատվությունը նվաստացնող վերաբերմունքի կանխարգելումն ազատությունից զրկման վայրերում («Մարդու իրավունքների պաշտպանի մասին» ՀՀ սահմանադրական օրենքի 27-րդ հոդված):
                  Մարդու իրավունքների պաշտպանը՝ որպես կանխարգելման ազգային մեխանիզմ իրավասու է՝
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
                    <p>Մշտադիտարկման այցեր</p>
                </div>
              </div>
            </div>

            <div class="tab-main">
              <div class="d-flex flex-column align-items-center">
                <div class="report_news d-flex flex-column">
                  <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                      <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                  </a>
                  <div class="d-flex flex-column report_news_text">
                      <div class="report_news_time d-flex align-items-start">
                          <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                          <p>10.06.2022</p>
                      </div>
                  </div>
                </div>
                <div class="report_news d-flex flex-column">
                  <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                      <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                  </a>
                  <div class="d-flex flex-column report_news_text">
                      <div class="report_news_time d-flex align-items-start">
                          <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                          <p>10.06.2022</p>
                      </div>
                  </div>
                </div>
                <div class="report_news d-flex flex-column">
                  <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                      <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                  </a>
                  <div class="d-flex flex-column report_news_text">
                      <div class="report_news_time d-flex align-items-start">
                          <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                          <p>10.06.2022</p>
                      </div>
                  </div>
                </div>
              </div>

            </div>
        </div>

        <div class="tab-pane container_section fade" id="section3" role="tabpanel" aria-labelledby="section3-tab">
          <div class="tab-header">
            <div class="d-flex align-items-baseline contact_us_action">
              <div class="line_2"></div>
              <div class="contact_us_action_title">
                  <p>Համագործակցություն</p>
              </div>
            </div>
          </div>

          <div class="tab-main">
            <div class="d-flex flex-column align-items-center">
              <a class="report_pdf" href="!#" class="mb-3">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">«2021 թվականին ՀՀ մարդու իրավունքների պաշտպանի գործունեության, մարդու իրավունքների եւ ազատությունների պաշտպանության վիճակի մասին» տարեկան հաղորդում (սեղմագիր)
              </a>
              <a class="report_pdf" href="!#">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">2021թ․ տարեկան հաղորդում ՀՀ մարդու իրավունքների պաշտպանի գործունեության, մարդու իրավունքների և ազատությունների պաշտպանության վիճակի մասին
              </a>
              <a class="report_pdf" href="!#">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">«2021 թվականին ՀՀ մարդու իրավունքների պաշտպանի գործունեության, մարդու իրավունքների եւ ազատությունների պաշտպանության վիճակի մասին» տարեկան հաղորդում (սեղմագիր)
              </a>
              <a class="report_pdf" href="!#">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">2021թ․ տարեկան հաղորդում ՀՀ մարդու իրավունքների պաշտպանի գործունեության, մարդու իրավունքների և ազատությունների պաշտպանության վիճակի մասին
              </a>
            </div>
          </div>
        </div>

        <div class="tab-pane container_section fade" id="section4" role="tabpanel" aria-labelledby="section4-tab">
          <div class="tab-header">
            <div class="d-flex align-items-baseline contact_us_action">
              <div class="line_2"></div>
              <div class="contact_us_action_title">
                  <p>Տարեկան և արտահերթ զեկույցներ, իրավական վերլուծություններ</p>
              </div>
            </div>
          </div>

          <div class="tab-main">
            <div class="d-flex flex-column align-items-center">
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                </a>
                <div class="d-flex flex-column report_news_text">
                    <div class="report_news_time d-flex align-items-start">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                    </div>
                </div>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                </a>
                <div class="d-flex flex-column report_news_text">
                    <div class="report_news_time d-flex align-items-start">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                    </div>
                </div>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                </a>
                <div class="d-flex flex-column report_news_text">
                    <div class="report_news_time d-flex align-items-start">
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
@endsection

@section('scripts')
  <script src="{{ asset('js/player.js') }}"></script>
  <script src="{{ asset('js/font_awesome/all.min.js') }}"></script>
@endsection


