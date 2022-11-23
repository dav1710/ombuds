@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/font_awesome/all.min.css') }}" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
@endsection
@section('title')
    Business Rights
@endsection

@section('content')
    <div class="position-relative">
        <ul class="nav nav-tabs container contact_us" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link custom_list_group_action" id="section1-tab" data-bs-toggle="tab"
                    data-bs-target="#section1" type="button" role="tab" aria-controls="section1"
                    aria-selected="true">Նորություններ</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link custom_list_group_action" id="section2-tab" data-bs-toggle="tab"
                    data-bs-target="#section2" type="button" role="tab" aria-controls="section2"
                    aria-selected="false">Իրավական փաստաթղթեր</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane container_section fade show active" id="section0" role="tabpanel"
                aria-labelledby="section0-tab">

                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Գործարարության ոլորտում իրավունքների պաշտպանություն</p>
                    </div>
                </div>
                <div class="torture-audio d-flex flex-column directions_applications torture_directions_applications">
                    <div class="holder">
                        <div class="audio green-audio-player">
                            <div class="loading">
                                <div class="spinner"></div>
                            </div>
                            <div class="play-pause-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                                    <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-icon"
                                        id="playPause" />
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
                                <source src="{{ asset('audio/song.mp3') }}" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                    <div class="holder">
                        <div class="audio green-audio-player">
                            <div class="loading">
                                <div class="spinner"></div>
                            </div>
                            <div class="play-pause-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 18 24">
                                    <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0" class="play-pause-icon"
                                        id="playPause" />
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
                                <source src="{{ asset('audio/song.mp3') }}" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>

                    <p class="soldier_rights_text">
                        Գործարարության պաշտպանությունը Մարդու իրավունքների պաշտպանի գործունեության առանցքային
                        ուղղություններից է, որի հիմնական նպատակը գործարար միջավայրի բարելավումն է, փոքր և միջին բիզնեսի
                        շահերի պաշտպանությունը, հարկային և մաքսային քաղաքականության արդյունավետության բարձրացումը։
                    </p>

                    <p class="soldier_rights_text">
                        Նշվածը խթանող ազդեցություն կարող է ունենալ նաև գործարար միջավայրի զարգացման և տնտեսավարող
                        սուբյեկտների ու պետության միջև գործընկերային հարաբերությունների հաստատման, ազատ տնտեսական
                        մրցակցության խրախուսման, ներդրումային միջավայրի բարելավման, ինչպես նաև սպառողների շահերի
                        պաշտպանության համար։
                    </p>

                    <p class="soldier_rights_text">
                        Հաշվի առնելով վերոնշյալը՝ Մարդու իրավունքների պաշտպանի աշխատակազմում ստեղծվել է Գործարարության
                        ոլորտում իրավունքների պաշտպանության ստորաբաժանումը, որն իրականացնում է գործարարություն իրականացնող
                        անձանց իրավունքների պաշտպանությունը պետական մարմիններից, այդ թվում հարկային և մաքսային անարդյունավետ
                        վարչարարությունից, ինչպես նաև մարդու իրավունքների և ազատությունների պաշտպանությունը հանրային
                        ծառայության ոլորտում գործող կազմակերպություններից։
                    </p>

                    <p class="soldier_rights_text">
                        Գործարարների իրավունքների պաշտպանության համար Պաշտպանի կողմից դիմումներ են հասցեագրվում
                        Սահմանադրական դատարան, ներկայացվում են հատուկ կարծիքներ Սահմանադրական դատարանում գործարարներին
                        առնչվող դիմումների վերաբերյալ, մշակվում են օրենսդրական նախագծեր և այլն։
                        Մարդու իրավունքների պաշտպանին կարող են դիմել այն անձինք, ովքեր տուժել են հարկային կամ մաքսային
                        վարչարարությունից, պետական մարմինների կողմից ցուցաբերած անհավասար մոտեցումից, հավասար բիզնես
                        մրցակցությանը խոչընդոտելուց, պետական մարմինների կայացրած վարչական ակտերից, մաքսային և հարկային
                        մարմինների անհարկի քաշքշուկներից և այլն։
                    </p>
                </div>
            </div>

            <div class="tab-pane container_section fade" id="section1" role="tabpanel" aria-labelledby="section1-tab">

                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Նորություններ</p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col mt-3">
                        <div class="card torture-card position-relative">
                            <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top"
                                alt="...">
                            <div class="card-body torture-card-body">
                                <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է
                                    ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների
                                    հետ</p>
                                <div class="torture-card-date d-flex position-absolute">
                                    <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                    <p>10.06.2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card torture-card position-relative">
                            <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top"
                                alt="...">
                            <div class="card-body torture-card-body">
                                <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է
                                    ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների
                                    հետ</p>
                                <div class="torture-card-date d-flex position-absolute">
                                    <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                    <p>10.06.2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card torture-card position-relative">
                            <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top"
                                alt="...">
                            <div class="card-body torture-card-body">
                                <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է
                                    ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների
                                    հետ</p>
                                <div class="torture-card-date d-flex position-absolute">
                                    <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                    <p>10.06.2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card torture-card position-relative">
                            <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top"
                                alt="...">
                            <div class="card-body torture-card-body">
                                <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է
                                    ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների
                                    հետ</p>
                                <div class="torture-card-date d-flex position-absolute">
                                    <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                    <p>10.06.2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card torture-card position-relative">
                            <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top"
                                alt="...">
                            <div class="card-body torture-card-body">
                                <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է
                                    ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների
                                    հետ</p>
                                <div class="torture-card-date d-flex position-absolute">
                                    <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                    <p>10.06.2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card torture-card position-relative">
                            <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top"
                                alt="...">
                            <div class="card-body torture-card-body">
                                <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է
                                    ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների
                                    հետ</p>
                                <div class="torture-card-date d-flex position-absolute">
                                    <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                    <p>10.06.2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card torture-card position-relative">
                            <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top"
                                alt="...">
                            <div class="card-body torture-card-body">
                                <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է
                                    ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների
                                    հետ</p>
                                <div class="torture-card-date d-flex position-absolute">
                                    <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                    <p>10.06.2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card torture-card position-relative">
                            <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top"
                                alt="...">
                            <div class="card-body torture-card-body">
                                <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է
                                    ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների
                                    հետ</p>
                                <div class="torture-card-date d-flex position-absolute">
                                    <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                    <p>10.06.2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card torture-card position-relative">
                            <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top"
                                alt="...">
                            <div class="card-body torture-card-body">
                                <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է
                                    ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների
                                    հետ</p>
                                <div class="torture-card-date d-flex position-absolute">
                                    <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                    <p>10.06.2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div class="card torture-card position-relative">
                            <img src="{{ asset('img/image40.png') }}" class="card-img-top torture-card-img-top"
                                alt="...">
                            <div class="card-body torture-card-body">
                                <p class="card-text torture-card-text">Քրիստիննե Գրիգորյանն աշխատանքային հանդիպում է
                                    ունեցել Պաշտպանին առընթեր Խոշտանգումների կանխարգելման խորհրդատվական խորհրդի անդամների
                                    հետ</p>
                                <div class="torture-card-date d-flex position-absolute">
                                    <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                    <p>10.06.2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane container_section fade" id="section2" role="tabpanel" aria-labelledby="section2-tab">

                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Իրավական փաստաթղթեր</p>
                    </div>
                </div>

                <div class="d-flex flex-column align-items-center">
                    <a class="report_pdf" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Հայաստանի Հանրապետության օրենքը
                        «Հայաստանի Հանրապետության զինված ուժերի կարգապահական կանոնագիրք» Հայաստանի Հանրապետության օրենքում
                        փոփոխություններ և լրացումներ կատարելու մասին
                    </a>
                    <a class="report_pdf" href="!#">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանի դիրքորոշումը ՀՀ վարչական
                        դատարանի դիմումի հիման վրա՝ «Զինվորական ծառայության և զինծառայողի կարգավիճակի մասին» ՀՀ օրենքի 61-րդ
                        հոդվածի 16-րդ մասի՝ ՀՀ Սահմանադրության համապատասխանությանը հարցը որոշելու վերաբերյալ գործի»
                        կապակցությամբ
                    </a>
                    <a class="report_pdf" href="!#">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">..
                        ..
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/player.js') }}"></script>
    <script src="{{ asset('js/font_awesome/all.min.js') }}"></script>
@endsection
