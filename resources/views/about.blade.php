@extends('layouts.app')
@section('title')
    About Us
@endsection

@section('content')
    <div class="scroll_header">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link custom_list_group_action active" id="section1-tab" data-bs-toggle="tab"
                    data-bs-target="#section1" type="button" role="tab" aria-controls="section1"
                    aria-selected="true">Պաշտպան</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link custom_list_group_action big_list_tab" id="section2-tab" data-bs-toggle="tab"
                    data-bs-target="#section2" type="button" role="tab" aria-controls="section2"
                    aria-selected="false">Աշխատակազմ</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link custom_list_group_action big_list_tab" id="section3-tab" data-bs-toggle="tab"
                    data-bs-target="#section3" type="button" role="tab" aria-controls="section3"
                    aria-selected="false">ՀՀ Սահմանադրություն</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link custom_list_group_action big_list_tab" id="section4-tab" data-bs-toggle="tab"
                    data-bs-target="#section4" type="button" role="tab" aria-controls="section4"
                    aria-selected="false">Պաշտպանի մասին ՀՀ սահմանադրական օրենքը</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link custom_list_group_action big_list_tab international-tab" id="section5-tab"
                    data-bs-toggle="tab" data-bs-target="#section5" type="button" role="tab" aria-controls="section5"
                    aria-selected="false">Միջազգային Կոնվենցիոն կարգավիճակներ</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link custom_list_group_action big_list_tab advice-tab" id="section6-tab"
                    data-bs-toggle="tab" data-bs-target="#section6" type="button" role="tab" aria-controls="section6"
                    aria-selected="false">Պաշտպանին առընթեր խորհուրդներ</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link custom_list_group_action big_list_tab" id="section7-tab" data-bs-toggle="tab"
                    data-bs-target="#section7" type="button" role="tab" aria-controls="section7"
                    aria-selected="false">Պատմություն</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane container_section_about_us fade show active" id="section1" role="tabpanel"
                aria-labelledby="section1-tab">
                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Պաշտպան</p>
                    </div>
                </div>
                <div class="d-flex flex-column about_directions_applications directions_applications_small">
                    <ul class="nav nav-tabs container d-flex scroll_nav about_as_small" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link custom_list_group_action active" id="section1_1-tab"
                                data-bs-toggle="tab" data-bs-target="#section1_1" type="button" role="tab"
                                aria-controls="section1_1" aria-selected="true">Կենսագրություն</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link custom_list_group_action big_list_tab" id="section1_2-tab"
                                data-bs-toggle="tab" data-bs-target="#section1_2" type="button" role="tab"
                                aria-controls="section1_2" aria-selected="false">Կառույցի իրավական առաքելությունը</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane container_section_about_us fade show active biography-tab-pane"
                            id="section1_1" role="tabpanel" aria-labelledby="section1_1-tab">
                            <div class="defender_header">
                                <div class="defender_header_1">
                                    <img src="{{ asset('img/defender.png') }}" alt="defender">
                                </div>
                                <div class="defender_header_2">
                                    <p class="defender_name">Քրիստիննե Գրիգորյան</p>
                                    <p class="defender_biography">Կենսագրություն</p>
                                    <p class="defender_contacts"> <img src="{{ asset('img/icons/phone.png') }}"
                                            alt="phone"> 010 53 02 62 </p>
                                    <p class="defender_contacts"> <img src="{{ asset('img/icons/mail.png') }}"
                                            alt="mail"> kristinne.grigoryan@ombuds.am </p>
                                </div>
                                <div class="defender_header_3">
                                    <div class="holder">
                                        <div class="audio green-audio-player">
                                            <div class="loading">
                                                <div class="spinner"></div>
                                            </div>
                                            <div class="play-pause-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24"
                                                    viewBox="0 0 18 24">
                                                    <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0"
                                                        class="play-pause-icon" id="playPause" />
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
                                    <div class="defender_social">
                                        <p class="fb"><img src="{{ asset('img/icons/fb.png') }}" alt="facebook">
                                            Facebook </p>
                                        <p><img src="{{ asset('img/icons/tw.png') }}" alt="twitter"> Twitter </p>
                                    </div>
                                </div>
                            </div>
                            <div class="defender_content">
                                <div class="holder">
                                    <div class="audio green-audio-player about_us_defender_player">
                                        <div class="loading">
                                            <div class="spinner"></div>
                                        </div>
                                        <div class="play-pause-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24"
                                                viewBox="0 0 18 24">
                                                <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0"
                                                    class="play-pause-icon" id="playPause" />
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
                                <div class="defender_content_text">
                                    <p>
                                        2022թ. հունվարի 24-ին Ազգային ժողովի կողմից ընտրվել է Մարդու իրավունքների պաշտպան և
                                        2022թ. փետրվարի 25-ից անցել պարտականությունների կատարմանը։ <br>
                                        ԿՐԹՈՒԹՅՈՒՆ <br>
                                        1998-2002թթ.<br>
                                        ԵՊՀ Արևելագիտության ֆակուլտետի Արաբագիտության բաժին<br>
                                        Բակալավրի աստիճան<br>
                                        2002-2004թթ.<br>
                                        ԵՊՀ Արևելագիտության ֆակուլտետի Արաբագիտության բաժին<br>
                                        Մագիստրոսի աստիճան<br>
                                        2006-2008թթ.<br>
                                        Հյուսիսային համալսարանի Իրավագիտության ֆակուլտետ<br>
                                        Բակալավրի աստիճան<br>
                                        ԱՇԽԱՏԱՆՔԱՅԻՆ ԳՈՐԾՈՒՆԵՈՒԹՅՈՒՆ<br>

                                        2004-2009թթ.<br>

                                        ՀՀ Ազգային ժողովի աշխատակազմի օրենսդրության վերլուծության և զարգացման վարչության
                                        մասնագետ<br>

                                        2009թ.մարտ-հոկտեմբեր<br>

                                        ՀՀ Ազգային ժողովի աշխատակազմի արտաքին կապերի վարչության թարգամանիչ-իրավաբան<br>

                                        2009-2011թթ․<br>

                                        ՀՀ Ազգային ժողովի աշխատակազմի ղեկավարի օգնական իրավական հարցերով<br>

                                        2011-2014թթ.<br>

                                        ՀՀ Ազգային ժողովի պատգամավորի օգնական (վերջին երկու տարին համատեղությամբ
                                        աշխատանք)<br>

                                        2012-2014թթ․<br>
                                        ՀՀ Ազգային ժողովի նախագահի օգնական իրավական հարցերով<br>
                                        2014-2015թթ․<br>

                                        ԱՄՆ ՄԶԳ «Աջակցություն Հայաստանի Ազգային ժողովի ինստիտուցիոնալ կարողությունների
                                        զարգացմանը» ծրագրում թիմի ղեկավար (ընթացակարգերի և կանոնակարգերի բարելավման
                                        բաղադրիչ)<br>

                                        2015-2018թթ.<br>
                                        ՀՀ արդարադատության նախարարության Միջազգային իրավական համագործակցության վարչության
                                        պետ<br>

                                        2018-2019թթ.<br>

                                        ՀՀ Առաջին փոխվարչապետի խորհրդական (միջազգային իրավական հարցերով)<br>

                                        2019թ. հունվար-հուլիս<br>

                                        ՀՀ Ազգային ժողովի նախագահի խորհրդական (միջազգային իրավական հարցերով)<br>

                                        2019թ. հուլիս-
                                        2021թ. ապրիլ<br>

                                        Արդարադատության նախարարի տեղակալ<br>

                                        2021թ. ապրիլ –
                                        2022թ. հունվարի 21<br>

                                        Արդարադատության նախարարի առաջին տեղակալ։<br>

                                        ՄԱՍՆԱԳԻՏԱԿԱՆ ՆԵՐԳՐԱՎՎԱԾՈՒԹՅՈՒՆ<br>

                                        2016-2017թթ-ին որպես ազգային փորձագետ աշխատել է Եվրոպայի Խորհրդի Մարդու իրավունքների
                                        Վերստուգող հանձնաժողովի (CDDH) «Քաղաքացիական հասարակության և մարդու իրավունքների
                                        պաշտպանության ինստիտուտների» թեմատիկ աշխատանքային խմբում, որն ի թիվս այլնի մշակել է
                                        ԵԽ նախարարների կոմիտեի «Եվրոպայում քաղաքացիական հասարակության գործունեության համար
                                        բարենպաստ միջավայրի պաշտպանության ու ամրապնդման մասին» 2018թ. հանձնարարականը
                                        (CM/Rec(2018)11)։ Այս աշխատանքային խմբում Ք. Գրիգորյանը մասնակցել է «Օմբուդսմենական
                                        հաստատությունների պաշտպանության և խթանման Վենետիկյան սկզբունքների» նախագծի
                                        մասնագիտական քննարկումներին։<br>

                                        2019 - 2022թթ. ներկայացրել է կառավարությունը ԵԽ Խոշտանգումների կանխարգելման կոմիտում
                                        և ՄԱԿ Խոշտանգումների դեմ կոմիտեում:<br>

                                        2021թ-ին ղեկավարել է ՄԱԿ Մարդու իրավունքների կոմիտեում Քաղաքացիական և քաղաքական
                                        իրավունքների մասին դաշնագրի կատարման ՀՀ զեկույցի պաշտպանության հայկական
                                        պատվիրակությունը:<br>

                                        2019-2022թթ. ղեկավարել է Եվրոպայի Խորհրդի Կոռուպցիայի դեմ պայքարող երկրների խմբում
                                        (ԳՐԵԿՈ) ՀՀ պատվիրակությունը։<br>

                                        2019-2022թթ. իրականացրել է ՏՀԶԿ Արևելյան Եվրոպայի և Կենտրոնական Ասիայի երկրների
                                        Հակակոռուպցիոն ցանցում Հայաստանի համակարգողի գործառույթները։<br>

                                        2021-2022թթ. - ղեկավարել է ՀՀ արդարադատության նախարարության համակարգմամբ գործող
                                        Անչափահասների արդարադատության բազմաշահառու խորհուրդը։<br>

                                        2016-2022թթ. ներգրավել, կազմակերպել ու համակարգել է Մարդու իրավունքների
                                        պաշտպանության ազգային երկու ռազմավարությունների (2017-2019թթ. և 2019-2022թթ.)
                                        մշակման և իրականացման գործընթացը՝ պետական բոլոր շահագրգիռ մարմինների, Մարդու
                                        իրավունքների պաշտպանի գրասենյակի, քաղաքացիական հասարակության կազմակերպությունների ու
                                        միջազգային գործընկերների ներգրավմամբ։<br>

                                        2019-2022թթ. իրականացրել է Մարդու իրավունքների պաշտպանության ազգային ռազմավարության
                                        Համակարգող խորհրդի քարտուղարի գործառույթները:<br>

                                        Ակտիվ ներգրավում է ունեցել Ոստիկանության ոլորտի 2020-2022թթ. բարեփոխումների
                                        ռազմավարության մշակման և իրականացման աշխատանքներին, այդ թվում՝ Հայաստանում Պարեկային
                                        ծառայության ներդրման ծրագրին։<br>

                                        2021թ. Ոստիկանության կրթահամալիրում դասավանդել է «Ոստիկանություն-հասարակություն
                                        փոխգործակցություն» առարկան։<br>

                                        ԱՅԼ ՏՎՅԱԼՆԵՐ<br>

                                        Ազատ տիրապետում է ռուսերեն, անգլերեն և ֆրանսերեն լեզուներին, տիրապետում է նաև
                                        գերմաներենին և արաբերենին։<br>

                                        Ամուսնացած չէ, անկուսակցական է։
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container_section_about_us fade" id="section1_2" role="tabpanel"
                            aria-labelledby="section1_2-tab">
                            <div class="defender_header">
                                <div id="defender_balance_img" class="defender_header_1_1">
                                    <img src="{{ asset('img/defender_1.png') }}" alt="defender">
                                </div>
                                <div class="defender_header_2_1">
                                    <div class="holder" id="defender_scales_holder">
                                        <div class="audio green-audio-player">
                                            <div class="loading">
                                                <div class="spinner"></div>
                                            </div>
                                            <div class="play-pause-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24"
                                                    viewBox="0 0 18 24">
                                                    <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0"
                                                        class="play-pause-icon" id="playPause" />
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
                                </div>
                            </div>
                            <div class="defender_content">
                                <div class="holder">
                                    <div class="audio green-audio-player about_us_defender_player">
                                        <div class="loading">
                                            <div class="spinner"></div>
                                        </div>
                                        <div class="play-pause-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24"
                                                viewBox="0 0 18 24">
                                                <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0"
                                                    class="play-pause-icon" id="playPause" />
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
                                <div class="defender_content_text">
                                    <p>
                                        Հայաստանում մարդու իրավունքների պաշտպանի հաստատությունը՝ որպես Օմբուդսմանի և մարդու
                                        իրավունքների ազգային և ամենաբարձր «A» միջազգային կարգավիճակ ունեցող հաստատություն,
                                        գործում է Փարիզյան և միջազգային սկզբունքներին համապատասխան:

                                        Մարդու իրավունքների պաշտպանն անկախ պաշտոնատար անձ է, որը հետևում է պետական և տեղական
                                        ինքնակառավարման մարմինների ու պաշտոնատար անձանց, հանրային ծառայությունների ոլորտում
                                        գործող կազմակերպությունների կողմից մարդու իրավունքների և ազատությունների պահպանմանը։
                                        Պաշտպանը նպաստում է նաև խախտված իրավունքների և ազատությունների վերականգնմանը,
                                        իրավունքներին ու ազատություններին առնչվող նորմատիվ իրավական ակտերի կատարելագործմանը:

                                        Իր իրավական առաքելության շրջանակներում Մարդու իրավունքների պաշտպանն իրականացնում է
                                        անհատական և կոլեկտիվ բողոքների քննարկում, ինչպես նաև սեփական նախաձեռնությամբ հարցի
                                        քննարկում։ Պաշտպանն իրականացնում է նաև կոնկրետ բողոքներով ու դեպքերով (սեփական
                                        նախաձեռնությամբ) քննարկում, ինչպես նաև կանխարգելիչ աշխատանքներ համակարգային
                                        մակարդակում:

                                        Համակարգային մակարդակում կանխարգելիչ աշխատանքները ներառում են, օրինակ՝ Սահմանադրական
                                        դատարան դիմելը Ազգային ժողովի որոշումների, Հանրապետության նախագահի հրամանագրերի և
                                        կարգադրությունների, Կառավարության և վարչապետի որոշումների, ենթաօրենսդրական նորմատիվ
                                        իրավական ակտերի՝ Սահմանադրության 2-րդ գլխով նախատեսված՝ մարդու և քաղաքացու հիմնական
                                        իրավունքների և ազատությունների վերաբերյալ դրույթներին համապատասխանության հարցերով:
                                        Սահմանադրական դատարանի հետ համագործակցության շրջանակներում Պաշտպանը ներկայացնում է
                                        նաև հատուկ կարծիք (amicus brief) դատարանում քննվող` մարդու իրավունքներին առնչվող
                                        գործերի վերաբերյալ։

                                        Նորմատիվ իրավական ակերի կատարելագործմանը նպաստելու գործառույթի շրջանակում Մարդու
                                        իրավունքների պաշտպանը իրավական ակտերում փոփոխություններ և լրացումներ կատարելու
                                        վերաբերյալ առաջարկություններ է մշակում և ներկայացնում իրավասու մարմիններին:
                                        Հատկանշական է նաև, որ մինչև մարդու իրավունքներին և ազատություններին վերաբերող
                                        նորմատիվ իրավական ակտերի նախագծերի ընդունումը, դրանք պետք է ուղղարկվեն Պաշպանին՝
                                        գրավոր կարծիք ներկայացնելու:

                                        Համակարգային խնդիրների լուծման և իրավունքների խախտումների կանխարգելմանն ուղղված
                                        աշխատանքի մյուս կարևոր ուղղություններից է իրազեկման աշխատանքների իրականացումը։ Այս
                                        համատեքստում Պաշտպանը հրապարակում է տեսանյութեր, տեղեկատվական թերթիկներ, ուղեցույցեր
                                        և այլ նյութեր մարդու իրավուքններին առնչվող տարբեր խնդիրների վերաբերյալ:

                                        2015 թվականի սահմանադրական փոփոխություններից և սահմանադրական օրենքի ընդունումից հետո
                                        Մարդու իրավունքների պաշտպանը հետևում է նաև հանրային ծառայության ոլորտում
                                        (էլեկտրաէներգետիկա, ջերմամատակարարում, գազամատակարարում, ջրամատակարարում,
                                        հեռահաղորդակցություն և այլն) գործող կազմակերպությունների կողմից մարդու իրավունքների
                                        և ազատությունների պահպանմանը: Պաշտպանը քննարկում է նաև պետական և տեղական
                                        ինքնակառավարման մարմինների պատվիրակած լիազորություններն իրականացնող
                                        կազմակերպությունների կողմից մարդու իրավունքների ենթադրյալ խախտումների վերաբերյալ
                                        բողոքները:

                                        Պաշտպանին է վերապահված նաև երկրում մի շարք կոնվենցիոն դրույթների կատարման նկատմամբ
                                        անկախ դիտարկումը։ Մասնավորապես, Մարդու իրավուքնների պաշտպանը հանդիսանում է
                                        «Խոշտանգումների և այլ դաժան, անմարդկային կամ արժանապատվությունը նվաստացնող
                                        վերաբերմունքի կամ պատժի դեմ» ՄԱԿ-ի՝ 1984 թվականի կոնվենցիայի 2002 թվականի դեկտեմբերի
                                        18-ին ընդունած կամընտիր արձանագրությամբ սահմանված կանխարգելման ազգային մեխանիզմը
                                        Հայաստանի Հանրապետությունում:

                                        Մարդու իրավուքնների պաշտպանն իրականացնում է նաև «Երեխայի իրավունքների մասին» ՄԱԿ-ի՝
                                        1989 թվականի նոյեմբերի 20-ին, ինչպես նաև «Հաշմանդամություն ունեցող անձանց
                                        իրավունքների մասին» ՄԱԿ-ի՝ 2006 թվականի դեկտեմբերի 13-ին ընդունված կոնվենցիաների
                                        դրույթների կիրառության մշտադիտարկում, ինչպես նաև երեխաների և հաշմանդամություն
                                        ունեցող անձանց իրավունքների խախտումների կանխարգելում և պաշտպանություն:

                                        Մարդու իրավունքներւի պաշտպանը, յուրաքանչյուր տարի՝ մինչև մարտի 31-ը, հրապարակում և
                                        Ազգային ժողովին է ներկայացնում տարեկան հաղորդում՝ նախորդ տարվա իր գործունեության,
                                        ինչպես նաև մարդու իրավունքների և ազատություններ պաշտպանության վիճակի մասին:
                                        Պաշտպանը` որպես կանխարգելման ազգային մեխանիզմ, յուրաքանչյուր տարվա առաջին եռամսյակի
                                        ընթացքում հրապարակում և Ազգային ժողովին է ներկայացնում նաև առանձին զեկույց նախորդ
                                        տարվա ընթացքում խոշտանգումների և վատվերաբերմունքի այլ ձևերի կանխարգելմանն ուղղված
                                        գործունեության վերաբերյալ: Հասարակական հնչեղություն ունեցող առանձին հարցերի կամ
                                        մարդու իրավունքների կոպիտ խախտումների դեպքերում Պաշտպանը հրապարակում է արտահերթ
                                        զեկույցներ կամ հաղորդումներ:
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane container_section_about_us fade" id="section2" role="tabpanel"
                aria-labelledby="section2-tab">
                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Աշխատակազմ</p>
                    </div>
                </div>
                <div class="d-flex flex-column about_directions_applications directions_applications">
                    <ul class="nav nav-tabs container d-flex   scroll_nav about_as_small" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link custom_list_group_action active" id="section2_1-tab"
                                data-bs-toggle="tab" data-bs-target="#section2_1" type="button" role="tab"
                                aria-controls="section2_1" aria-selected="true">Կառուցվածք</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link custom_list_group_action big_list_tab" id="section2_2-tab"
                                data-bs-toggle="tab" data-bs-target="#section2_2" type="button" role="tab"
                                aria-controls="section2_2" aria-selected="false">Աշխատակիցներ</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link custom_list_group_action big_list_tab" id="section2_3-tab"
                                data-bs-toggle="tab" data-bs-target="#section2_3" type="button" role="tab"
                                aria-controls="section2_3" aria-selected="false">Թափուր աշխատատեղեր</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link custom_list_group_action big_list_tab" id="section2_4-tab"
                                data-bs-toggle="tab" data-bs-target="#section2_4" type="button" role="tab"
                                aria-controls="section2_4" aria-selected="false">Բյուջե</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link custom_list_group_action big_list_tab" id="section2_5-tab"
                                data-bs-toggle="tab" data-bs-target="#section2_5" type="button" role="tab"
                                aria-controls="section2_5" aria-selected="false">Գնումներ</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane structure-tab-pane container_section_about_us fade show active"
                            id="section2_1" role="tabpanel" aria-labelledby="section2_1-tab">
                            <div class="structure">

                                <div class="structure_header">
                                    <p>Հայաստանի Հանրապետության Մարդու իրավունքների Պաշտպան</p>
                                </div>
                                <div class="structure_content">
                                    <div id="structure_content_first" class="d-flex">
                                        <hr class="horizontal_line">
                                        <p>Պաշտպանի խորհրդականներ</p>
                                    </div>
                                    <div class="d-flex">
                                        <hr class="horizontal_line">
                                        <p>Պաշտպանի օգնականներ</p>
                                    </div>
                                    <div class="d-flex">
                                        <hr class="horizontal_line">
                                        <p>Քրեական արդարադատության ոլորտում և զինված ուժերում մարդու իրավունքների
                                            պաշտպանության դեպարտամենտ</p>
                                    </div>
                                    <div class="d-flex">
                                        <hr class="horizontal_line">
                                        <p>Քարտուղարություն</p>
                                    </div>
                                    <div class="d-flex">
                                        <hr class="horizontal_line">
                                        <p>Քաղաքացիական, սոցիալ-տնտեսական և մշակութային իրավունքների պաշտպանության
                                            դեպարտամենտ</p>
                                    </div>
                                    <div class="d-flex">
                                        <hr class="horizontal_line">
                                        <p>Հետազոտական և կրթական կենտրոն</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="structure_div">
                                            <div class="d-flex">
                                                <hr class="horizontal_line">
                                                <p>Մարզային ստորաբաժանումներ</p>
                                            </div>
                                            <div class="d-flex">
                                                <hr class="horizontal_line">
                                                <p>Շիրակի մարզ</p>
                                            </div>
                                            <div class="d-flex">
                                                <hr class="horizontal_line">
                                                <p>Սյունիքի մարզ</p>
                                            </div>
                                            <div class="d-flex">
                                                <hr class="horizontal_line">
                                                <p>Գեղարքունիքի մարզ</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <hr class="horizontal_line">
                                        <p>Միջազգային համագործակցության վարչություն</p>
                                    </div>
                                    <div class="d-flex">
                                        <hr class="horizontal_line">
                                        <p>Խոշտանգումների և վատ վերաբերմունքի կանխարգելման վարչություն</p>
                                    </div>
                                    <div class="d-flex">
                                        <hr class="horizontal_line">
                                        <p>Հանրային կապերի բաժին</p>
                                    </div>
                                    <div class="d-flex">
                                        <hr class="horizontal_line">
                                        <p>Ներքին աուդիտի բաժին</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container_section_about_us_card fade" id="section2_2" role="tabpanel"
                            aria-labelledby="section2_2-tab">
                            <div class="card-deck d-flex flex-wrap">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('img/user.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Անուն Ազգանուն</h5>
                                        <p class="card-text">Պաշտոն</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('img/user.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Անուն Ազգանուն</h5>
                                        <p class="card-text">Պաշտոն</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('img/user.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Անուն Ազգանուն</h5>
                                        <p class="card-text">Պաշտոն</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('img/user.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Անուն Ազգանուն</h5>
                                        <p class="card-text">Պաշտոն</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('img/user.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Անուն Ազգանուն</h5>
                                        <p class="card-text">Պաշտոն</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('img/user.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Անուն Ազգանուն</h5>
                                        <p class="card-text">Պաշտոն</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('img/user.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Անուն Ազգանուն</h5>
                                        <p class="card-text">Պաշտոն</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('img/user.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Անուն Ազգանուն</h5>
                                        <p class="card-text">Պաշտոն</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane container_section_about_us_card fade" id="section2_3" role="tabpanel"
                            aria-labelledby="section2_3-tab">
                            <div class="d-flex flex-column vacancies mb-5">
                                <p>
                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Link with href
                                    </a>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Button with data-bs-target
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        Some placeholder content for the collapse component. This panel is hidden by default
                                        but revealed when the user activates the relevant trigger.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container_section_about_us fade" id="section2_4" role="tabpanel"
                            aria-labelledby="section2_4-tab">
                            <div class="d-flex flex-column about_directions_applications directions_applications">
                                <div class="report_news d-flex flex-column">
                                    <div class="report_news d-flex flex-column">
                                        <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                            <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց
                                            սպառողների իրավունքների ու պարտականությունների վերաբերյալ
                                        </a>
                                    </div>
                                    <div class="report_news d-flex flex-column">
                                        <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                            <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց
                                            ուսուցիչների համար «Եկեք սովորենք երեխայի իրավունքները»
                                        </a>
                                    </div>
                                    <div class="report_news d-flex flex-column">
                                        <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                            <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">ՈԻՂԵՑՈՒՅՑ
                                            Շինարարության թույլտվության տրամադրման կարգի վերաբերյալ
                                        </a>
                                    </div>
                                    <div class="report_news d-flex flex-column">
                                        <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                            <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց անձնական
                                            օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու
                                            կանոնների վերաբերյալ
                                        </a>
                                    </div>
                                    <div class="report_news d-flex flex-column">
                                        <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                            <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց
                                            պատերազմի հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                                        </a>
                                    </div>
                                    <div class="report_news d-flex flex-column">
                                        <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                            <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պարսկերեն. حمایت
                                            مدافع حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                                        </a>
                                    </div>
                                    <div class="report_news d-flex flex-column">
                                        <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                            <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Արաբերեն. مساندة
                                            المدافع عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                                        </a>
                                    </div>
                                    <div class="report_news d-flex flex-column">
                                        <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                            <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Մարդու
                                            իրավունքների պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                                        </a>
                                    </div>
                                    <div class="report_news d-flex flex-column">
                                        <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                            <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Իսպաներեն.
                                            Asistencia de Defensor de derechos humanos en el marco de Mechanismo Nacional de
                                            Prevención
                                        </a>
                                    </div>
                                    <div class="report_news d-flex flex-column">
                                        <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                            <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ռուսերեն.
                                            Поддержка Защитника прав человека в рамках стауса национального превентивного
                                            механизма
                                        </a>
                                    </div>
                                    <div class="report_news d-flex flex-column">
                                        <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                            <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ֆրանսերեն. Soutien
                                            du Defenseur des droits de l'homme dans les cadres du statut du Mechanisme
                                            National de Prevention
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane container_section_about_us fade" id="section2_5" role="tabpanel"
                            aria-labelledby="section2_5-tab">
                            <div class="report_news d-flex flex-column">
                                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                    <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Ուղեցույց սպառողների
                                    իրավունքների ու պարտականությունների վերաբերյալ
                                </a>
                            </div>
                            <div class="report_news d-flex flex-column">
                                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                    <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Ուղեցույց ուսուցիչների
                                    համար «Եկեք սովորենք երեխայի իրավունքները»
                                </a>
                            </div>
                            <div class="report_news d-flex flex-column">
                                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                    <img src="{{ asset('img/icons/doc.png') }}" alt="doc">ՈԻՂԵՑՈՒՅՑ Շինարարության
                                    թույլտվության տրամադրման կարգի վերաբերյալ
                                </a>
                            </div>
                            <div class="report_news d-flex flex-column">
                                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                    <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Ուղեցույց անձնական
                                    օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու կանոնների
                                    վերաբերյալ
                                </a>
                            </div>
                            <div class="report_news d-flex flex-column">
                                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                    <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Ուղեցույց պատերազմի
                                    հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                                </a>
                            </div>
                            <div class="report_news d-flex flex-column">
                                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                    <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Պարսկերեն. حمایت مدافع
                                    حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                                </a>
                            </div>
                            <div class="report_news d-flex flex-column">
                                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                    <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Արաբերեն. مساندة المدافع
                                    عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                                </a>
                            </div>
                            <div class="report_news d-flex flex-column">
                                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                    <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Մարդու իրավունքների
                                    պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                                </a>
                            </div>
                            <div class="report_news d-flex flex-column">
                                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                    <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Իսպաներեն. Asistencia de
                                    Defensor de derechos humanos en el marco de Mechanismo Nacional de Prevención
                                </a>
                            </div>
                            <div class="report_news d-flex flex-column">
                                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                    <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Ռուսերեն. Поддержка
                                    Защитника а прав человека в рамках стауса национального превентивного механизма
                                </a>
                            </div>
                            <div class="report_news d-flex flex-column">
                                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                                    <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Ֆրանսերեն. Soutien du
                                    Defenseur des droits de l'homme dans les cadres du statut du Mechanisme National de
                                    Prevention
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane constitution-pane container_section_about_us fade" id="section3" role="tabpanel"
                aria-labelledby="section3-tab">
                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>ՀՀ Սահմանադրություն</p>
                    </div>
                </div>

                <div class="about_directions_applications directions_applications">
                    <div class="pdf_title">
                        <img src="{{ asset('img/icons/pdf.png') }}">
                        <h4>ՀՀ Սահմանադրություն</h4>
                    </div>
                    <div class="pdf_content">
                        <p>
                            ՀԱՅԱՍՏԱՆԻ ՀԱՆՐԱՊԵՏՈՒԹՅԱՆ ՍԱՀՄԱՆԱԴՐՈՒԹՅԱՆ ՓՈՓՈԽՈՒԹՅՈՒՆՆԵՐ<br>
                            Հոդված 1. 1995 թվականի հուլիսի 5-ի Հայաստանի Հանրապետության Սահմանադրությունը՝ 2005 թվականի
                            փոփոխություններով, շարադրել հետևյալ խմբագրությամբ.<br>
                            «Հայ ժողովուրդը, հիմք ընդունելով Հայաստանի անկախության մասին հռչակագրում հաստատագրված հայոց
                            պետականության հիմնարար սկզբունքները և համազգային նպատակները, իրականացրած ինքնիշխան պետության
                            վերականգնման իր ազատասեր նախնիների սուրբ պատգամը, նվիրված հայրենիքի հզորացմանը և բարգավաճմանը,
                            ապահովելու համար սերունդների ազատությունը, ընդհանուր բարեկեցությունը, քաղաքացիական
                            համերաշխությունը, հավաստելով հավատարմությունը համամարդկային արժեքներին, ընդունում է Հայաստանի
                            Հանրապետության Սահմանադրությունը:<br>
                            Գ Լ ՈՒ Խ 1<br>
                            ՍԱՀՄԱՆԱԴՐԱԿԱՆ ԿԱՐԳԻ ՀԻՄՈՒՆՔՆԵՐԸ<br>
                            Հոդված 1. Հայաստանի Հանրապետությունն ինքնիշխան, ժողովրդավարական, սոցիալական, իրավական պետություն
                            է:<br>
                            Հոդված 2. Հայաստանի Հանրապետությունում իշխանությունը պատկանում է ժողովրդին:<br>
                            Ժողովուրդն իր իշխանությունն իրականացնում է ազատ ընտրությունների, հանրաքվեների, ինչպես նաև
                            Սահմանադրությամբ նախատեսված պետական և տեղական ինքնակառավարման մարմինների ու պաշտոնատար անձանց
                            միջոցով:
                            Իշխանության յուրացումը որևէ կազմակերպության կամ անհատի կողմից հանցագործություն է:<br>
                            Հոդված 3. Մարդը, նրա արժանապատվությունը, հիմնական իրավունքները և ազատությունները<br>
                            1. Հայաստանի Հանրապետությունում մարդը բարձրագույն արժեք է: Մարդու անօտարելի արժանապատվությունն
                            իր իրավունքների և ազատությունների անքակտելի հիմքն է:<br>
                            2. Մարդու և քաղաքացու հիմնական իրավունքների և ազատությունների հարգումն ու պաշտպանությունը
                            հանրային իշխանության պարտականություններն են:<br>
                            3. Հանրային իշխանությունը սահմանափակված է մարդու և քաղաքացու հիմնական իրավունքներով և
                            ազատություններով՝ որպես անմիջականորեն գործող իրավունք:<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane container_section_about_us fade" id="section4" role="tabpanel"
                aria-labelledby="section4-tab">
                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Պաշտպանի մասին ՀՀ սահմանադրական օրենքը</p>
                    </div>
                </div>
                <div class="d-flex flex-column about_directions_applications directions_applications">
                    <div class="pdf_title">
                        <div class="holder">
                            <div class="audio green-audio-player">
                                <div class="loading">
                                    <div class="spinner"></div>
                                </div>
                                <div class="play-pause-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24"
                                        viewBox="0 0 18 24">
                                        <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0"
                                            class="play-pause-icon" id="playPause" />
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
                        <img src="{{ asset('img/icons/pdf.png') }}">
                        <h4>RA Constitutional Law on the Human Rights Defender</h4>
                    </div>
                    <div class="pdf_content">
                        <p>
                            CONSTITUTIONAL LAW OF THE REPUBLIC OF ARMENIA
                            ON THE HUMAN RIGHTS DEFENDER<br>
                            CHAPTER 1. GENERAL PROVISIONS<br>
                            Article 1. Subject matter of the Law<br>
                            This Constitutional Law shall define the powers, procedure and guarantees for the activities of
                            the Human Rights Defender of the Republic of Armenia (hereinafter referred to as "the
                            Defender"), the procedure for election and termination of powers of the Defender, peculiarities
                            of the legal status of persons holding state service positions within the Staff of the Defender
                            (hereinafter referred to as "the state servant"), of appointing them to and dismissing from
                            position, conferring class ranks, organising and managing the state service, as well as other
                            relations pertaining thereto.<br>
                            Article 2. Human Rights Defender<br>
                            1. The Defender is an independent official who observes the maintenance of human rights and
                            freedoms by public and local self-government bodies and officials, and in cases prescribed by
                            this law also by organisations, facilitates the restoration of violated rights and freedoms,
                            improvement of normative legal acts related to rights and freedoms.<br>
                            2. The Defender shall be entrusted with the mandate of the National Preventive Mechanism
                            provided by the Optional Protocol — adopted on 18 December 2002 — to the 1984 UN Convention
                            against Torture and Other Cruel, Inhuman or Degrading Treatment or Punishment (hereinafter
                            referred to as "the National Preventive Mechanism").<br>
                            3. The Defender shall conduct monitoring of the implementation of the provisions of the UN
                            Convention on the Rights of the Child adopted on 20 November 1989, as well as carry out
                            prevention of violations of the rights of the child and the protection thereof.<br>
                            4.The Defender shall conduct monitoring of the implementation of the provisions of the UN
                            Convention on the Rights of Persons with Disabilities (CRPD) adopted on 13 December 2006, as
                            well as carry out prevention of violations of the rights of the persons with disabilities and
                            the protection thereof.<br>
                            Article 3. Principles of the activities of the Defender<br>
                            1. In the course of exercising his or her powers, the Defender shall be guided by the principles
                            of legal equality, impartiality, publicity, transparency and other principles set forth in the
                            Constitution of the Republic of Armenia.<br>

                            Article 4. Restriction on the Defender to engage in other activities<br>

                            1. The Defender may not hold any position not related to his or her status within other public
                            or local self-government bodies, any position within commercial organisations, engage in
                            entrepreneurial activities, and perform other paid work except for scientific, educational and
                            creative activities.<br>

                            2. The Defender may join or otherwise engage in activities of international human rights
                            organisations where it does not contradict the functions reserved to the Defender by the
                            Constitution and this Law, as well as where it does not affect his or her impartiality.<br>

                            3. The Human Rights Defender may not, during his or her term of office, hold membership in any
                            political party or otherwise engage in political activities. The Defender shall be obliged to
                            show political restraint in public speeches.<br>

                            CHAPTER 2. GUARANTEES FOR THE ACTIVITIES OF THE DEFENDER<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane container_section_about_us fade" id="section5" role="tabpanel"
                aria-labelledby="section5-tab">
                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Միջազգային Կոնվենցիոն կարգավիճակներ</p>
                    </div>
                </div>

                <div class="directions_applications">
                    <div class="holder" style="margin-bottom: 30px;">
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


                    <div class="holder" style="margin-bottom: 30px;">
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

                    <div class="report_card">
                        <div class="reports_card_img">
                            <img src="{{ asset('img/search_statistics.png') }}" alt="report">
                        </div>
                        <div class="reports_card_text">
                            Մարդու իրավունքների պաշտպանը, յուրաքանչյուր տարի՝ մինչև մարտի 31-ը հրապարակում և Ազգային ժողովին
                            է ներկայացնում տարեկան հաղորդում՝ նախորդ տարվա իր գործունեության, ինչպես նաև մարդու իրավունքների
                            և ազատություններ պաշտպանության վիճակի մասին:
                        </div>
                    </div>
                    <div class="report_card">
                        <div class="reports_card_img">
                            <img src="{{ asset('img/search_statistics.png') }}" alt="report">
                        </div>
                        <div class="reports_card_text">
                            Մարդու իրավունքների պաշտպանը, յուրաքանչյուր տարի՝ մինչև մարտի 31-ը հրապարակում և Ազգային ժողովին
                            է ներկայացնում տարեկան հաղորդում՝ նախորդ տարվա իր գործունեության, ինչպես նաև մարդու իրավունքների
                            և ազատություններ պաշտպանության վիճակի մասին:
                        </div>
                    </div>
                    <div class="report_card">
                        <div class="reports_card_img">
                            <img src="{{ asset('img/search_statistics.png') }}" alt="report">
                        </div>
                        <div class="reports_card_text">
                            Մարդու իրավունքների պաշտպանը, յուրաքանչյուր տարի՝ մինչև մարտի 31-ը հրապարակում և Ազգային ժողովին
                            է ներկայացնում տարեկան հաղորդում՝ նախորդ տարվա իր գործունեության, ինչպես նաև մարդու իրավունքների
                            և ազատություններ պաշտպանության վիճակի մասին:
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column about_directions_applications directions_applications">
                </div>
            </div>
            <div class="tab-pane container_section_about_us fade" id="section6" role="tabpanel"
                aria-labelledby="section6-tab">
                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Պաշտպանին առընթեր խորհուրդներ</p>
                    </div>
                </div>
                <div class="d-flex flex-column about_directions_applications directions_applications">
                    <p class="soldier_rights_text">
                        One of the important directions of the Human Rights Defender’s work is the cooperation with
                        non-governmental organizations (NGO). Cooperation with NGOs is of fundamental importance for
                        improving the human rights situation in the country and ensuring the rule of law and democracy in
                        general.<br><br>

                        One of the effective platforms for cooperation with NGOs are advisory councils adjunct to the
                        Defender. In this regard, it is noteworthy that the Human Rights Defender can establish advisory
                        councils composed of representatives of NGOs and independent specialists having the necessary
                        experience and knowledge in specific fields of human rights.<br><br>

                        The purpose of the councils is to provide assistance to the Defender in identifying and discussing
                        issues related to the protection of human rights and presenting recommendation to competent
                        authorities.<br><br>

                        In order to effectively solve the issues raised in the mentioned councils, their extended sessions
                        are organized, in which not only the members of the given council participate, but also
                        representatives of competent state bodies and journalists. These sessions are essential platforms
                        where representatives of both NGOs and state bodies have the opportunity to present their positions
                        on discussed issues and come to a common solution.<br><br>

                        There are currently three advisory councils adjunct to the Defender: on prevention of torture, on
                        protection of human rights in armed forces, and on the protection of rights of persons with
                        disabilities.
                    </p>
                </div>
            </div>
            <div class="tab-pane container_section_about_us fade" id="section7" role="tabpanel"
                aria-labelledby="section7-tab">
                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Պատմություն</p>
                    </div>
                </div>
                <div class="d-flex flex-column about_directions_applications directions_applications_small">
                    <ul class="nav nav-tabs container d-flex scroll_nav about_as_small" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link custom_list_group_action active" id="section7_1-tab"
                                data-bs-toggle="tab" data-bs-target="#section7_1" type="button" role="tab"
                                aria-controls="section7_1" aria-selected="true">History of the Institution
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link custom_list_group_action big_list_tab" id="section7_2-tab"
                                data-bs-toggle="tab" data-bs-target="#section7_2" type="button" role="tab"
                                aria-controls="section7_2" aria-selected="false">Former Defenders
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane container_section_about_us fade show active" id="section7_1" role="tabpanel"
                            aria-labelledby="section7_1-tab">
                            <div class="defender_content">
                                <div class="holder">
                                    <div class="audio green-audio-player about_us_defender_player">
                                        <div class="loading">
                                            <div class="spinner"></div>
                                        </div>
                                        <div class="play-pause-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24"
                                                viewBox="0 0 18 24">
                                                <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0"
                                                    class="play-pause-icon" id="playPause" />
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
                                <div class="defender_content_text">
                                    <p>
                                        Հայաստանում մարդու իրավունքների պաշտպանի հաստատությունը՝ որպես Օմբուդսմանի և մարդու
                                        իրավունքների ազգային և ամենաբարձր «A» միջազգային կարգավիճակ ունեցող հաստատություն,
                                        գործում է Փարիզյան և միջազգային սկզբունքներին համապատասխան:

                                        Մարդու իրավունքների պաշտպանն անկախ պաշտոնատար անձ է, որը հետևում է պետական և տեղական
                                        ինքնակառավարման մարմինների ու պաշտոնատար անձանց, հանրային ծառայությունների ոլորտում
                                        գործող կազմակերպությունների կողմից մարդու իրավունքների և ազատությունների պահպանմանը։
                                        Պաշտպանը նպաստում է նաև խախտված իրավունքների և ազատությունների վերականգնմանը,
                                        իրավունքներին ու ազատություններին առնչվող նորմատիվ իրավական ակտերի կատարելագործմանը:

                                        Իր իրավական առաքելության շրջանակներում Մարդու իրավունքների պաշտպանն իրականացնում է
                                        անհատական և կոլեկտիվ բողոքների քննարկում, ինչպես նաև սեփական նախաձեռնությամբ հարցի
                                        քննարկում։ Պաշտպանն իրականացնում է նաև կոնկրետ բողոքներով ու դեպքերով (սեփական
                                        նախաձեռնությամբ) քննարկում, ինչպես նաև կանխարգելիչ աշխատանքներ համակարգային
                                        մակարդակում:

                                        Համակարգային մակարդակում կանխարգելիչ աշխատանքները ներառում են, օրինակ՝ Սահմանադրական
                                        դատարան դիմելը Ազգային ժողովի որոշումների, Հանրապետության նախագահի հրամանագրերի և
                                        կարգադրությունների, Կառավարության և վարչապետի որոշումների, ենթաօրենսդրական նորմատիվ
                                        իրավական ակտերի՝ Սահմանադրության 2-րդ գլխով նախատեսված՝ մարդու և քաղաքացու հիմնական
                                        իրավունքների և ազատությունների վերաբերյալ դրույթներին համապատասխանության հարցերով:
                                        Սահմանադրական դատարանի հետ համագործակցության շրջանակներում Պաշտպանը ներկայացնում է
                                        նաև հատուկ կարծիք (amicus brief) դատարանում քննվող` մարդու իրավունքներին առնչվող
                                        գործերի վերաբերյալ։

                                        Նորմատիվ իրավական ակերի կատարելագործմանը նպաստելու գործառույթի շրջանակում Մարդու
                                        իրավունքների պաշտպանը իրավական ակտերում փոփոխություններ և լրացումներ կատարելու
                                        վերաբերյալ առաջարկություններ է մշակում և ներկայացնում իրավասու մարմիններին:
                                        Հատկանշական է նաև, որ մինչև մարդու իրավունքներին և ազատություններին վերաբերող
                                        նորմատիվ իրավական ակտերի նախագծերի ընդունումը, դրանք պետք է ուղղարկվեն Պաշպանին՝
                                        գրավոր կարծիք ներկայացնելու:

                                        Համակարգային խնդիրների լուծման և իրավունքների խախտումների կանխարգելմանն ուղղված
                                        աշխատանքի մյուս կարևոր ուղղություններից է իրազեկման աշխատանքների իրականացումը։ Այս
                                        համատեքստում Պաշտպանը հրապարակում է տեսանյութեր, տեղեկատվական թերթիկներ, ուղեցույցեր
                                        և այլ նյութեր մարդու իրավուքններին առնչվող տարբեր խնդիրների վերաբերյալ:

                                        2015 թվականի սահմանադրական փոփոխություններից և սահմանադրական օրենքի ընդունումից հետո
                                        Մարդու իրավունքների պաշտպանը հետևում է նաև հանրային ծառայության ոլորտում
                                        (էլեկտրաէներգետիկա, ջերմամատակարարում, գազամատակարարում, ջրամատակարարում,
                                        հեռահաղորդակցություն և այլն) գործող կազմակերպությունների կողմից մարդու իրավունքների
                                        և ազատությունների պահպանմանը: Պաշտպանը քննարկում է նաև պետական և տեղական
                                        ինքնակառավարման մարմինների պատվիրակած լիազորություններն իրականացնող
                                        կազմակերպությունների կողմից մարդու իրավունքների ենթադրյալ խախտումների վերաբերյալ
                                        բողոքները:

                                        Պաշտպանին է վերապահված նաև երկրում մի շարք կոնվենցիոն դրույթների կատարման նկատմամբ
                                        անկախ դիտարկումը։ Մասնավորապես, Մարդու իրավուքնների պաշտպանը հանդիսանում է
                                        «Խոշտանգումների և այլ դաժան, անմարդկային կամ արժանապատվությունը նվաստացնող
                                        վերաբերմունքի կամ պատժի դեմ» ՄԱԿ-ի՝ 1984 թվականի կոնվենցիայի 2002 թվականի դեկտեմբերի
                                        18-ին ընդունած կամընտիր արձանագրությամբ սահմանված կանխարգելման ազգային մեխանիզմը
                                        Հայաստանի Հանրապետությունում:

                                        Մարդու իրավուքնների պաշտպանն իրականացնում է նաև «Երեխայի իրավունքների մասին» ՄԱԿ-ի՝
                                        1989 թվականի նոյեմբերի 20-ին, ինչպես նաև «Հաշմանդամություն ունեցող անձանց
                                        իրավունքների մասին» ՄԱԿ-ի՝ 2006 թվականի դեկտեմբերի 13-ին ընդունված կոնվենցիաների
                                        դրույթների կիրառության մշտադիտարկում, ինչպես նաև երեխաների և հաշմանդամություն
                                        ունեցող անձանց իրավունքների խախտումների կանխարգելում և պաշտպանություն:

                                        Մարդու իրավունքներւի պաշտպանը, յուրաքանչյուր տարի՝ մինչև մարտի 31-ը, հրապարակում և
                                        Ազգային ժողովին է ներկայացնում տարեկան հաղորդում՝ նախորդ տարվա իր գործունեության,
                                        ինչպես նաև մարդու իրավունքների և ազատություններ պաշտպանության վիճակի մասին:
                                        Պաշտպանը` որպես կանխարգելման ազգային մեխանիզմ, յուրաքանչյուր տարվա առաջին եռամսյակի
                                        ընթացքում հրապարակում և Ազգային ժողովին է ներկայացնում նաև առանձին զեկույց նախորդ
                                        տարվա ընթացքում խոշտանգումների և վատվերաբերմունքի այլ ձևերի կանխարգելմանն ուղղված
                                        գործունեության վերաբերյալ: Հասարակական հնչեղություն ունեցող առանձին հարցերի կամ
                                        մարդու իրավունքների կոպիտ խախտումների դեպքերում Պաշտպանը հրապարակում է արտահերթ
                                        զեկույցներ կամ հաղորդումներ:
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container_section_about_us fade" id="section7_2" role="tabpanel"
                            aria-labelledby="section7_2-tab">
                            <div class="defender_header">
                                <div class="defender_header_1">
                                    <img src="{{ asset('img/defender.png') }}" alt="defender">
                                </div>
                                <div class="defender_header_2">
                                    <p class="defender_name">Քրիստիննե Գրիգորյան</p>
                                    <p class="defender_biography">Կենսագրություն</p>
                                    <p class="defender_contacts"> <img src="{{ asset('img/icons/phone.png') }}"
                                            alt="phone"> 010 53 02 62 </p>
                                    <p class="defender_contacts"> <img src="{{ asset('img/icons/mail.png') }}"
                                            alt="mail"> kristinne.grigoryan@ombuds.am </p>
                                </div>
                                <div class="defender_header_3">
                                    <div class="holder">
                                        <div class="audio green-audio-player">
                                            <div class="loading">
                                                <div class="spinner"></div>
                                            </div>
                                            <div class="play-pause-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24"
                                                    viewBox="0 0 18 24">
                                                    <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0"
                                                        class="play-pause-icon" id="playPause" />
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
                                    <div class="defender_social">
                                        <p class="fb"><img src="{{ asset('img/icons/fb.png') }}" alt="facebook">
                                            Facebook </p>
                                        <p><img src="{{ asset('img/icons/tw.png') }}" alt="twitter"> Twitter </p>
                                    </div>
                                </div>
                            </div>
                            <div class="defender_content">
                                <div class="holder">
                                    <div class="audio green-audio-player about_us_defender_player">
                                        <div class="loading">
                                            <div class="spinner"></div>
                                        </div>
                                        <div class="play-pause-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24"
                                                viewBox="0 0 18 24">
                                                <path fill="#566574" fill-rule="evenodd" d="M18 12L0 24V0"
                                                    class="play-pause-icon" id="playPause" />
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
                                <div class="defender_content_text">
                                    <p>
                                        2022թ. հունվարի 24-ին Ազգային ժողովի կողմից ընտրվել է Մարդու իրավունքների պաշտպան և
                                        2022թ. փետրվարի 25-ից անցել պարտականությունների կատարմանը։ <br>
                                        ԿՐԹՈՒԹՅՈՒՆ <br>
                                        1998-2002թթ.<br>
                                        ԵՊՀ Արևելագիտության ֆակուլտետի Արաբագիտության բաժին<br>
                                        Բակալավրի աստիճան<br>
                                        2002-2004թթ.<br>
                                        ԵՊՀ Արևելագիտության ֆակուլտետի Արաբագիտության բաժին<br>
                                        Մագիստրոսի աստիճան<br>
                                        2006-2008թթ.<br>
                                        Հյուսիսային համալսարանի Իրավագիտության ֆակուլտետ<br>
                                        Բակալավրի աստիճան<br>
                                        ԱՇԽԱՏԱՆՔԱՅԻՆ ԳՈՐԾՈՒՆԵՈՒԹՅՈՒՆ<br>

                                        2004-2009թթ.<br>

                                        ՀՀ Ազգային ժողովի աշխատակազմի օրենսդրության վերլուծության և զարգացման վարչության
                                        մասնագետ<br>

                                        2009թ.մարտ-հոկտեմբեր<br>

                                        ՀՀ Ազգային ժողովի աշխատակազմի արտաքին կապերի վարչության թարգամանիչ-իրավաբան<br>

                                        2009-2011թթ․<br>

                                        ՀՀ Ազգային ժողովի աշխատակազմի ղեկավարի օգնական իրավական հարցերով<br>

                                        2011-2014թթ.<br>

                                        ՀՀ Ազգային ժողովի պատգամավորի օգնական (վերջին երկու տարին համատեղությամբ
                                        աշխատանք)<br>

                                        2012-2014թթ․<br>
                                        ՀՀ Ազգային ժողովի նախագահի օգնական իրավական հարցերով<br>
                                        2014-2015թթ․<br>

                                        ԱՄՆ ՄԶԳ «Աջակցություն Հայաստանի Ազգային ժողովի ինստիտուցիոնալ կարողությունների
                                        զարգացմանը» ծրագրում թիմի ղեկավար (ընթացակարգերի և կանոնակարգերի բարելավման
                                        բաղադրիչ)<br>

                                        2015-2018թթ.<br>
                                        ՀՀ արդարադատության նախարարության Միջազգային իրավական համագործակցության վարչության
                                        պետ<br>

                                        2018-2019թթ.<br>

                                        ՀՀ Առաջին փոխվարչապետի խորհրդական (միջազգային իրավական հարցերով)<br>

                                        2019թ. հունվար-հուլիս<br>

                                        ՀՀ Ազգային ժողովի նախագահի խորհրդական (միջազգային իրավական հարցերով)<br>

                                        2019թ. հուլիս-
                                        2021թ. ապրիլ<br>

                                        Արդարադատության նախարարի տեղակալ<br>

                                        2021թ. ապրիլ –
                                        2022թ. հունվարի 21<br>

                                        Արդարադատության նախարարի առաջին տեղակալ։<br>

                                        ՄԱՍՆԱԳԻՏԱԿԱՆ ՆԵՐԳՐԱՎՎԱԾՈՒԹՅՈՒՆ<br>

                                        2016-2017թթ-ին որպես ազգային փորձագետ աշխատել է Եվրոպայի Խորհրդի Մարդու իրավունքների
                                        Վերստուգող հանձնաժողովի (CDDH) «Քաղաքացիական հասարակության և մարդու իրավունքների
                                        պաշտպանության ինստիտուտների» թեմատիկ աշխատանքային խմբում, որն ի թիվս այլնի մշակել է
                                        ԵԽ նախարարների կոմիտեի «Եվրոպայում քաղաքացիական հասարակության գործունեության համար
                                        բարենպաստ միջավայրի պաշտպանության ու ամրապնդման մասին» 2018թ. հանձնարարականը
                                        (CM/Rec(2018)11)։ Այս աշխատանքային խմբում Ք. Գրիգորյանը մասնակցել է «Օմբուդսմենական
                                        հաստատությունների պաշտպանության և խթանման Վենետիկյան սկզբունքների» նախագծի
                                        մասնագիտական քննարկումներին։<br>

                                        2019 - 2022թթ. ներկայացրել է կառավարությունը ԵԽ Խոշտանգումների կանխարգելման կոմիտում
                                        և ՄԱԿ Խոշտանգումների դեմ կոմիտեում:<br>

                                        2021թ-ին ղեկավարել է ՄԱԿ Մարդու իրավունքների կոմիտեում Քաղաքացիական և քաղաքական
                                        իրավունքների մասին դաշնագրի կատարման ՀՀ զեկույցի պաշտպանության հայկական
                                        պատվիրակությունը:<br>

                                        2019-2022թթ. ղեկավարել է Եվրոպայի Խորհրդի Կոռուպցիայի դեմ պայքարող երկրների խմբում
                                        (ԳՐԵԿՈ) ՀՀ պատվիրակությունը։<br>

                                        2019-2022թթ. իրականացրել է ՏՀԶԿ Արևելյան Եվրոպայի և Կենտրոնական Ասիայի երկրների
                                        Հակակոռուպցիոն ցանցում Հայաստանի համակարգողի գործառույթները։<br>

                                        2021-2022թթ. - ղեկավարել է ՀՀ արդարադատության նախարարության համակարգմամբ գործող
                                        Անչափահասների արդարադատության բազմաշահառու խորհուրդը։<br>

                                        2016-2022թթ. ներգրավել, կազմակերպել ու համակարգել է Մարդու իրավունքների
                                        պաշտպանության ազգային երկու ռազմավարությունների (2017-2019թթ. և 2019-2022թթ.)
                                        մշակման և իրականացման գործընթացը՝ պետական բոլոր շահագրգիռ մարմինների, Մարդու
                                        իրավունքների պաշտպանի գրասենյակի, քաղաքացիական հասարակության կազմակերպությունների ու
                                        միջազգային գործընկերների ներգրավմամբ։<br>

                                        2019-2022թթ. իրականացրել է Մարդու իրավունքների պաշտպանության ազգային ռազմավարության
                                        Համակարգող խորհրդի քարտուղարի գործառույթները:<br>

                                        Ակտիվ ներգրավում է ունեցել Ոստիկանության ոլորտի 2020-2022թթ. բարեփոխումների
                                        ռազմավարության մշակման և իրականացման աշխատանքներին, այդ թվում՝ Հայաստանում Պարեկային
                                        ծառայության ներդրման ծրագրին։<br>

                                        2021թ. Ոստիկանության կրթահամալիրում դասավանդել է «Ոստիկանություն-հասարակություն
                                        փոխգործակցություն» առարկան։<br>

                                        ԱՅԼ ՏՎՅԱԼՆԵՐ<br>

                                        Ազատ տիրապետում է ռուսերեն, անգլերեն և ֆրանսերեն լեզուներին, տիրապետում է նաև
                                        գերմաներենին և արաբերենին։<br>

                                        Ամուսնացած չէ, անկուսակցական է։
                                    </p>
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
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/font_awesome/all.min.js') }}"></script>
    @endsection
