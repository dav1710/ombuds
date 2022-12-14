@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/font_awesome/all.min.css') }}" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
@endsection
@section('title')
    Direction
@endsection

@section('content')
    <div class="scroll_header soldier_rights">
        <ul class="nav nav-tabs container d-flex flex-row justify-content-evenly scroll_nav contact_us" id="myTab"
            role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link custom_list_group_action  active" id="section1-tab" data-bs-toggle="tab"
                    data-bs-target="#section1" type="button" role="tab" aria-controls="section1"
                    aria-selected="true">Դիմումներ և Բողոքներ</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link custom_list_group_action big_list_tab play_audio" id="section2-tab"
                    data-bs-toggle="tab" data-bs-target="#section2" type="button" role="tab" aria-controls="section2"
                    aria-selected="false">Մշտադիտարկման և Անհատական այցեր</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane container_section fade show active" id="section1" role="tabpanel"
                aria-labelledby="section1-tab">

                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Դիմումներ և Բողոքներ</p>
                    </div>
                </div>
                <div class="d-flex flex-column directions_applications">
                    <p>Յուրաքանչյուր ոք ունի Մարդու իրավունքների պաշտպանին դիմելու սահմանադրական իրավունք ՝ ՀՀ
                        քաղաքացիները, օտարերկրացիները, քաղաքացիություն չունեցող և այլ անձինք, ինչպես նաև իրավաբանական
                        անձինք:</p>
                    <p>Ֆիզիկական և իրավաբանական անձինք կարող են դիմել ինչպես փոստի, այնպես էլ Պաշտպանին կամ նրա
                        ներկայացուցչին անձամբ բողոք հանձնելու միջոցով և առցանց եղանակով: Պաշտպանին կարելի է դիմել նաև
                        բանավոր:</p>
                    <p>Եթե կարծում եք, որ պետական կամ տեղական ինքնակառավարման մարմինը, պաշտոնատար անձը, ինչպես նաև
                        պետական և տեղական ինքնակառավարման մարմինների պատվիրակած լիազորություններն իրականացնող
                        կազմակերպությունը խախտել են Սահմանադրությամբ և օրենքներով ամրագրված Ձեր իրավունքը, ապա կարող եք
                        դիմել Մարդու իրավունքների պաշտպանին:</p>
                    <p>Պաշտպանի քննարկմանը ենթակա հարցերի շարքում են նաև հանրային ծառայության ոլորտում գործող
                        կազմակերպությունների կողմից մարդու իրավունքների և ազատությունների ենթադրյալ խախտումները:
                        Այնուամենայինվ, այս պարագայում պետք է առկա լինի տեղեկություն այն մասին, որ տեղի են ունեցել
                        մարդու իրավունքների կամ ազատությունների զանգվածային խախտումներ, կամ այդ խնդիրն ունի հանրային
                        նշանակություն կամ կապված է այնպիսի անձանց շահերի պաշտպանության հետ, որոնք չեն կարող դա
                        իրականացնել ինքնուրույն:</p>
                    <p>Բողոքն ստանալուց հետո 30 օրվա ընթացքում իրականացվում է բողոքի ուսումնասիրություն, որի հիման վրա
                        Պաշտպանը կայացնում է հետևյալ որոշումներից մեկը և ծանուցում բողոք ներկայացրած անձին.</p>
                    <p>1) բողոքը քննարկման ընդունելու մասին.</p>
                    <p>2) բողոքը չքննարկելու մասին.</p>
                    <p>3) բողոք ներկայացրած անձին իր իրավունքների և ազատությունների պաշտպանության հնարավորությունները
                        ներկայացնելու մասին.</p>
                    <p>4) բողոքն այլ մարմնի քննարկմանը փոխանցելու մասին:</p>
                    <p>Բողոքի հիման վրա հարցի քննարկման ընթացակարգ սկսելուց զատ, Պաշտպանը կարող է քննարկում իրականացնել
                        սեփական նախաձեռնությամբ, և օգտվել իրեն վերապահված բոլոր լիազորություններից, որոնք նա
                        իրականացնում է բողոքի քննարկման կապակցությամբ: Մարդու իրավունքների պաշտպանի կողմից սեփական
                        նախաձեռնությամբ հարցի քննարկման ընթացակարգ է նախաձեռնվում, եթե առկա են մարդու իրավունքների
                        զանգվածային խախտումներ, եթե խոսքը վերաբերում է հանրային նշանակություն ունեցող հարցի, եթե խախտվել
                        են այնպիսի անձանց իրավունքներ, որոնք չեն կարող ինքնուրույն իրականացնել իրենց շահերի
                        պաշտպանությունը:
                        Բողոքի կամ սեփական նախաձեռնությամբ սկսված քննարկման արդյունքում Պաշտպանն ընդունում է հետևյալ
                        որոշումներից մեկը.</p>
                    <p>1) մարդու իրավունքների կամ ազատությունների խախտման առկայության մասին,</p>
                    <p>2) մարդու իրավունքների կամ ազատությունների խախտման բացակայության մասին,</p>
                    <a href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Հայաստանի մարդու իրավունքների
                        պաշտպանին առցանց բողոք ներկայացնելու կարգը
                    </a>
                    <a href="!#">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Հայաստանի մարդու իրավունքների
                        պաշտպանի աշխատակազմում բողոքի ուսումնասիրության կարգը
                    </a>
                </div>
            </div>
            <div class="tab-pane container_section fade" id="section2" role="tabpanel" aria-labelledby="section2-tab">

                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Մշտադիտարկման և Անհատական այցեր</p>
                    </div>
                </div>
                <div class="d-flex flex-column directions_applications">
                    <div class="holder">
                        <div class="torture-audio audio green-audio-player">
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
                    <p>Մարդու իրավունքների պաշտպանը կամ նրա իրավասու ներկայացուցիչը բողոքի ուսումնասիրության կամ
                        քննարկման ընթացքում ունի լիազորություն անարգել այցելելու իրավասու պետական կամ տեղական
                        ինքնակառավարման մարմին կամ կազմակերպություն: Բացի այդ, Պաշտպանը՝ միջազգային կոնվենցիոն
                        կարգավիճակների հիմքով, ունի նաև մշտադիտարկման այցեր կատարելու հնարավորություն: Յուրաքանչյուր
                        դեպքում պահպանվում է այցերի գաղտնիությունը՝ դրանք իրականացվում են առանց նախնական իրազեկման:</p>
                    <p>Այս երկու տիպի այցերը տարբերվում են իրականացման հիմքով և նպատակով: Առաջին դեպքում հիմքն անհատական
                        բողոքն է կամ սեփական նախաձեռնությամբ քննարկվող հարցը: Մշտադիտարկման այցի իրականացման հիմքը
                        համապատասխան հաստատություններում բնակվող կամ ազատությունից զրկված անձանց պայմանները և
                        իրավունքների ապահովման վիճակի պարբերական ստուգումն է՝ անկախ անհատական բողոքների առկայությունից:
                    </p>
                    <p>Մշտադիտարկման այցեր են իրականացվում նաև Պաշտպանի՝ «Երեխայի իրավունքների մասին» և
                        «Հաշմանդամություն ունեցող անձանց իրավունքների մասին» ՄԱԿ-ի կոնվենցիաների դրույթների կիրառության
                        մշտադիտարկում իրականացնող ազգային հաստատության մանդատի շրջանակներում: Մշտադիտարկման այցերն
                        իրականացվում են խնամք և պաշտպանություն իրականացնող հաստատություններ:</p>
                    <p>«Մարդու իրավունքների պաշտպանի մասին» Հայաստանի Հանրապետության սահմանադրական օրենքն ուժի մեջ
                        մտնելուց ի վեր միջազգայնորեն ընդունված սկզբունքների հիման վրա որդեգրվել է Պաշտպանի՝ որպես
                        կոնվենցիոն մարմնի և օմբուդսմանի գործառույթների փոխլրացման արդյունավետ մեխանիզմ:</p>
                    <p>Մասնավորապես, այցերի տեսակների նախնական տարանջատումը չի ենթադրում, որ մշտադիտարկման այցերի
                        ընթացքում ուշադրություն չի դարձվում անհատական բողոքներին և դրանցում բարձրացված խնդիրներին:
                        Ավելին, դրանք որոշ առումով ուղենիշ են համարվում մշտադիտարկման այց իրականացնողների համար, որոնք
                        մինչև այցը, ի թիվս այլնի, քննարկում են կոնկրետ հաստատության վերաբերյալ Պաշտպանին հասցեագրված
                        բողոքները: Հատկանշական է, որ մշտադիտարկման այցերի ընթացքում ստացած անհատական բողոքները նույնպես
                        քննարկման առարկա են դարձվում: Հնարավորության դեպքում դրանցում բարձրացված խնդիրները լուծվում են
                        տեղում կամ փոխանցվում են Պաշտպանի աշխատակազմի՝ անհատական բողոքներով զբաղվող կոնկրետ
                        ստորաբաժանմանը:</p>
                </div>
            </div>
        </div>
    </div>
@endsection





@section('scripts')
    <script src="{{ asset('js/player.js') }}"></script>
    <script src="{{ asset('js/font_awesome/all.min.js') }}"></script>
@endsection
