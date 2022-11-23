@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/font_awesome/all.min.css') }}" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
@endsection
@section('title')
    Women Rights
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
            <li class="nav-item" role="presentation">
                <button class="nav-link custom_list_group_action" id="section3-tab" data-bs-toggle="tab"
                    data-bs-target="#section3" type="button" role="tab" aria-controls="section3"
                    aria-selected="false">Պաշտպանին առընթեր խորհուրդ</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane container_section fade show active" id="section0" role="tabpanel"
                aria-labelledby="section0-tab">

                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Կանանց իրավունքների պաշտպանություն</p>
                    </div>
                </div>
                <div class="d-flex flex-column directions_applications">
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
                        Կանանց իրավունքների պաշտպանությունը և կանանց նկատմամբ խտրականության բոլոր ձևերի բացառումը Մարդու
                        իրավունքների պաշտպանի աշխատանքի կարևոր ուղղություններից է:
                    </p>

                    <p class="soldier_rights_text">
                        Այս ոլորտում Պաշտպանի գործունեությունն իրականացվում է ինչպես անհատական դեպքերով կանանց խախտված
                        իրավունքները վերականգնելով կամ հնարավոր խախտումները կանխարգելելով, այնպես էլ համակարգային
                        մակարդակում կանանց իրավունքները խախտող պատճառները վերացնելու միջոցով:
                    </p>

                    <p class="soldier_rights_text">
                        Կանանց իրավունքների պաշտպանության ոլորտի առաջնահերթ ուղղություններից են կանանց նկատմամբ բռնության և
                        ընտանիքում բռնության դեմ պայքարի օրենսդրական և պրակտիկ խնդիրների վերհանումն ու լուծումը, ինչպես նաև
                        ընտանիքում բռնության ենթարկված կանանց իրավունքների վերականգնումն ու նրանց իրավական խորհրդատվության
                        տրամադրումը:
                    </p>

                    <p class="soldier_rights_text">
                        Փորձը վկայում է, որ կանանց իրավունքների խախտումները հաճախ կապված են լինում իրազեկման ու գիտելիքների
                        պակասի հետ, ուստի այս գործում մարդու իրավունքների կրթությունը կամ իրազեկումը նույնպես առաջնահերթ
                        կարևորություն ունի:
                    </p>

                    <p class="soldier_rights_text">
                        Կարևորելով կանանց կարողությունների զարգացումը՝ Պաշտպանը կազմակերպում է կանանց իրավունքների թեմաներով
                        պարբերական վերապատրաստումներ և ուսուցողական բնույթի դասընթացներ ինչպես իր աշխատակազմի, այնպես էլ
                        քաղաքացիական հասարակության ու պետական մարմինների համար: Իրազեկման աշխատանքներ են իրականացվում նաև
                        լայն հանրության շրջանում:
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

                <div class="directions_applications">
                    <div class="news-cards mb-5">
                            <a href=" ">
								<div class="card news-card">
                                <img src="{{ asset('img/image40.png') }}" class="card-img-top news-card-img-top"
                                    alt="...">
                                <div class="card-body news-card-body">
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
                                    <div class="news-card-date">
                                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                        <p>10.06.2022</p>
                                    </div>
                                </div>
                            </div>
							</a>
                            <a href=" ">
								<div class="card news-card">
                                <img src="{{ asset('img/image40.png') }}" class="card-img-top news-card-img-top"
                                    alt="...">
                                <div class="card-body news-card-body">
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
                                    <div class="news-card-date">
                                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                        <p>10.06.2022</p>
                                    </div>
                                </div>
                            </div>
							</a>
                            <a href=" ">
								<div class="card news-card">
                                <img src="{{ asset('img/image40.png') }}" class="card-img-top news-card-img-top"
                                    alt="...">
                                <div class="card-body news-card-body">
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
                                    <div class="news-card-date">
                                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                        <p>10.06.2022</p>
                                    </div>
                                </div>
                            </div>
							</a>
                            <a href=" ">
								<div class="card news-card">
                                <img src="{{ asset('img/image40.png') }}" class="card-img-top news-card-img-top"
                                    alt="...">
                                <div class="card-body news-card-body">
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
                                    <div class="news-card-date">
                                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                        <p>10.06.2022</p>
                                    </div>
                                </div>
                            </div>
							</a>
                            <a href=" ">
								<div class="card news-card">
                                <img src="{{ asset('img/image40.png') }}" class="card-img-top news-card-img-top"
                                    alt="...">
                                <div class="card-body news-card-body">
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
                                    <div class="news-card-date">
                                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                                        <p>10.06.2022</p>
                                    </div>
                                </div>
                            </div>
							</a>

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

                <div class="directions_applications d-flex flex-column align-items-center">
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

            <div class="tab-pane container_section fade" id="section3" role="tabpanel" aria-labelledby="section3-tab">

                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Պաշտպանին առընթեր խորհուրդ</p>
                    </div>
                </div>

                <div class="directions_applications">
                    <div class="holder">
                        <div class="audio green-audio-player">
                            <div class="loading">
                                <div class="spinner"></div>
                            </div>
                            <div class="play-pause-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24"
                                    viewBox="0 0 18 24">
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

                    <div>
                        <p class='soldier_rights_header_text'>
                            ՀԱՅԱՍՏԱՆԻ ՀԱՆՐԱՊԵՏՈՒԹՅԱՆ ՄԱՐԴՈՒ ԻՐԱՎՈՒՆՔՆԵՐԻ ՊԱՇՏՊԱՆԻՆ ԱՌԸՆԹԵՐ ԶԻՆՎԱԾ ՈՒԺԵՐՈՒՄ ՄԱՐԴՈՒ
                            ԻՐԱՎՈՒՆՔՆԵՐԻ
                            ՊԱՇՏՊԱՆՈՒԹՅԱՆ ՀԱՐՑԵՐՈՎ ՓՈՐՁԱԳԻՏԱԿԱՆ ԽՈՐՀՈՒՐԴ
                        </p>

                        <div class="soldier_rights_header_date d-flex">
                            <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                            <p>10.06.2022</p>
                        </div>
                    </div>

                    <p class="soldier_rights_text">
                        Մարդու իրավունքների պաշտպանին առընթեր Զինված ուժերում մարդու իրավունքների պաշտպանության հարցերով
                        փորձագիտական խորհրդը ձևավորվել է 2019 թվականի ապրիլի 11-ին: Խորհրդի նպատակն է խորհրդատվական
                        աջակցություն
                        տրամադրել Պաշտպանին` զինծառայողների իրավունքների պաշտպանության գործում: Այն աջակցում է զինված
                        ուժերում և
                        այլ զորքերում մարդու իրավունքների պաշտպանությանը, ներառյալ՝ զինծառայողների և այլ զինապարտների,
                        ինչպես
                        նաև նրանց ընտանիքների անդամների իրավունքների պաշտպանությանն առնչվող խնդիրների վերհանմանը և իրավասու
                        մարմնին դրանց լուծմանն ուղղված առաջարկների ներկայացմանը:
                    </p>

                    <p class="soldier_rights_text">
                        Խորհուրդը կազմավորվում է Պաշտպանի որոշմամբ՝ զինծառայողների իրավունքների պաշտպանության ոլորտում
                        անհրաժեշտ
                        փորձ և գիտելիքներ ունեցող հասարակական կազմակերպությունների ներկայացուցիչներից և անկախ մասնագետներից:
                        Նրանց շարքում են զինծառայողների իրավունքների պաշտպանության ոլորտում իրավաբանի, մանկավարժի, բժշկի,
                        հոգեբանի, սոցիալական աշխատանքի մասնագիտություն կամ համապատասխան աշխատանքային փորձ ունեցող անձինք:
                        Պաշտպանը խորհրդում կարող է ընդգրկել նաև զինվորական ծառայություն անցնող կամ պահեստազորում հաշվառված
                        զինծառայողներ կամ նրանց ընտանիքների անդամներ:
                    </p>

                    <p class="soldier_rights_text">
                        Պաշտպանին առընթեր խորհրդում քննարկվում են զինծառայողների իրավունքների ապահովման վերաբերյալ Պաշտպանի
                        հաղորդումները և զեկույցները, օրենսդրական փոփոխությունների անհրաժեշտությունը և համապատասխան
                        առաջարկությունները, միջազգային և հասարակական կազմակերպությունների զեկույցները, ինչպես նաև ոլորտում
                        առկա
                        համակարգային և հանրային հետաքրքրություն ներկայացնող խնդիրները: Քննարկման առարա է դառնում նաև
                        զինծառայողներին և նրանց ընտանիքների անդամներին սոցիալ-հոգեբանական և իրավական աջակցություն
                        տրամադրելը:
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
