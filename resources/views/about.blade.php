@extends('layouts.app')
@section('title') About Us @endsection




@section('content')
<div class="scroll_header">
      <ul class="nav nav-tabs container d-flex flex-row justify-content-center scroll_nav about_us" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action active" id="section1-tab" data-bs-toggle="tab" data-bs-target="#section1" type="button" role="tab" aria-controls="section1" aria-selected="true">Պաշտպան</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section2" type="button" role="tab" aria-controls="section2" aria-selected="false">Աշխատակազմ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section3-tab" data-bs-toggle="tab" data-bs-target="#section3" type="button" role="tab" aria-controls="section3" aria-selected="false">ՀՀ Սահմանադրություն</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section4-tab" data-bs-toggle="tab" data-bs-target="#section4" type="button" role="tab" aria-controls="section4" aria-selected="false">Պաշտպանի մասին ՀՀ սահմանադրական օրենքը</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab international-tab" id="section5-tab" data-bs-toggle="tab" data-bs-target="#section5" type="button" role="tab" aria-controls="section5" aria-selected="false">Միջազգային Կոնվենցիոն կարգավիճակներ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab advice-tab" id="section6-tab" data-bs-toggle="tab" data-bs-target="#section6" type="button" role="tab" aria-controls="section6" aria-selected="false">Պաշտպանին առընթեր խորհուրդներ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section7-tab" data-bs-toggle="tab" data-bs-target="#section7" type="button" role="tab" aria-controls="section7" aria-selected="false">Պատմություն</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane container_section_about_us fade show active" id="section1" role="tabpanel" aria-labelledby="section1-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Պաշտպան</p>
                </div>
            </div>
            <div class="d-flex flex-column about_directions_applications directions_applications_small">
                <ul class="nav nav-tabs container d-flex scroll_nav about_as_small" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link custom_list_group_action active" id="section1_1-tab" data-bs-toggle="tab" data-bs-target="#section1_1" type="button" role="tab" aria-controls="section1_1" aria-selected="true">Կենսագրություն</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link custom_list_group_action big_list_tab" id="section1_2-tab" data-bs-toggle="tab" data-bs-target="#section1_2" type="button" role="tab" aria-controls="section1_2" aria-selected="false">Կառույցի իրավական առաքելությունը</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane container_section_about_us fade show active" id="section1_1" role="tabpanel" aria-labelledby="section1_1-tab">
                        <div class="defender_header">
                            <div class="defender_header_1">
                                <img src="{{ asset('img/defender.png') }}" alt="defender">
                            </div>
                            <div class="defender_header_2">
                                <p class="defender_name">Քրիստիննե Գրիգորյան</p>
                                <p class="defender_biography">Կենսագրություն</p>
                                <p class="defender_contacts"> <img src="{{ asset('img/icons/phone.png') }}" alt="phone"> 010 53 02 62 </p>
                                <p class="defender_contacts"> <img src="{{ asset('img/icons/mail.png') }}" alt="mail"> kristinne.grigoryan@ombuds.am </p>
                            </div>
                            <div class="defender_header_3">
                                <div class="holder">
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
                                  <div class="defender_social">
									<p class="fb"><img src="{{ asset('img/icons/fb.png') }}" alt="facebook"> Facebook </p>
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
                              <div class="defender_content_text">
                                <p>
                                    2022թ. հունվարի 24-ին Ազգային ժողովի կողմից ընտրվել է Մարդու իրավունքների պաշտպան և 2022թ. փետրվարի 25-ից անցել պարտականությունների կատարմանը։ <br>
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

                                    ՀՀ Ազգային ժողովի աշխատակազմի օրենսդրության վերլուծության և զարգացման վարչության մասնագետ<br>

                                    2009թ.մարտ-հոկտեմբեր<br>

                                    ՀՀ Ազգային ժողովի աշխատակազմի արտաքին կապերի վարչության թարգամանիչ-իրավաբան<br>

                                    2009-2011թթ․<br>

                                    ՀՀ Ազգային ժողովի աշխատակազմի ղեկավարի օգնական իրավական հարցերով<br>

                                    2011-2014թթ.<br>

                                    ՀՀ Ազգային ժողովի պատգամավորի օգնական (վերջին երկու տարին համատեղությամբ աշխատանք)<br>

                                    2012-2014թթ․<br>
                                    ՀՀ Ազգային ժողովի նախագահի օգնական իրավական հարցերով<br>
                                    2014-2015թթ․<br>

                                    ԱՄՆ ՄԶԳ «Աջակցություն Հայաստանի Ազգային ժողովի ինստիտուցիոնալ կարողությունների զարգացմանը» ծրագրում թիմի ղեկավար (ընթացակարգերի և կանոնակարգերի բարելավման բաղադրիչ)<br>

                                    2015-2018թթ.<br>
                                    ՀՀ արդարադատության նախարարության Միջազգային իրավական համագործակցության վարչության պետ<br>

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

                                    2016-2017թթ-ին որպես ազգային փորձագետ աշխատել է Եվրոպայի Խորհրդի Մարդու իրավունքների Վերստուգող հանձնաժողովի (CDDH) «Քաղաքացիական հասարակության և մարդու իրավունքների պաշտպանության ինստիտուտների» թեմատիկ աշխատանքային խմբում, որն ի թիվս այլնի մշակել է ԵԽ նախարարների կոմիտեի «Եվրոպայում քաղաքացիական հասարակության գործունեության համար բարենպաստ միջավայրի պաշտպանության ու ամրապնդման մասին» 2018թ.  հանձնարարականը (CM/Rec(2018)11)։ Այս աշխատանքային խմբում Ք. Գրիգորյանը մասնակցել է «Օմբուդսմենական հաստատությունների պաշտպանության և խթանման Վենետիկյան սկզբունքների» նախագծի մասնագիտական քննարկումներին։<br>

                                    2019 - 2022թթ. ներկայացրել է կառավարությունը ԵԽ Խոշտանգումների կանխարգելման կոմիտում և ՄԱԿ Խոշտանգումների դեմ կոմիտեում:<br>

                                    2021թ-ին ղեկավարել է ՄԱԿ Մարդու իրավունքների կոմիտեում Քաղաքացիական և քաղաքական իրավունքների մասին դաշնագրի կատարման ՀՀ զեկույցի պաշտպանության հայկական պատվիրակությունը:<br>

                                    2019-2022թթ. ղեկավարել է Եվրոպայի Խորհրդի Կոռուպցիայի դեմ պայքարող երկրների խմբում (ԳՐԵԿՈ) ՀՀ պատվիրակությունը։<br>

                                    2019-2022թթ. իրականացրել է ՏՀԶԿ Արևելյան Եվրոպայի և Կենտրոնական Ասիայի երկրների Հակակոռուպցիոն ցանցում Հայաստանի համակարգողի գործառույթները։<br>

                                    2021-2022թթ. - ղեկավարել է ՀՀ արդարադատության նախարարության համակարգմամբ գործող Անչափահասների արդարադատության բազմաշահառու խորհուրդը։<br>

                                    2016-2022թթ. ներգրավել, կազմակերպել ու համակարգել է Մարդու իրավունքների պաշտպանության ազգային երկու ռազմավարությունների (2017-2019թթ. և 2019-2022թթ.) մշակման և իրականացման գործընթացը՝ պետական բոլոր շահագրգիռ մարմինների, Մարդու իրավունքների պաշտպանի գրասենյակի, քաղաքացիական հասարակության կազմակերպությունների ու միջազգային գործընկերների ներգրավմամբ։<br>

                                    2019-2022թթ. իրականացրել է Մարդու իրավունքների պաշտպանության ազգային ռազմավարության Համակարգող խորհրդի քարտուղարի գործառույթները:<br>

                                    Ակտիվ ներգրավում է ունեցել Ոստիկանության ոլորտի 2020-2022թթ. բարեփոխումների ռազմավարության մշակման և իրականացման աշխատանքներին, այդ թվում՝ Հայաստանում Պարեկային ծառայության ներդրման ծրագրին։<br>

                                    2021թ. Ոստիկանության կրթահամալիրում դասավանդել է «Ոստիկանություն-հասարակություն փոխգործակցություն» առարկան։<br>

                                    ԱՅԼ ՏՎՅԱԼՆԵՐ<br>

                                    Ազատ տիրապետում է ռուսերեն, անգլերեն և ֆրանսերեն լեզուներին, տիրապետում է նաև գերմաներենին և արաբերենին։<br>

                                    Ամուսնացած չէ, անկուսակցական է։
                                </p>
                              </div>
                        </div>
                    </div>
                    <div class="tab-pane container_section_about_us fade" id="section1_2" role="tabpanel" aria-labelledby="section1_2-tab">
                        <div class="defender_header">
                            <div class="defender_header_1_1">
                                <img src="{{ asset('img/defender_1.png') }}" alt="defender">
                            </div>
                            <div class="defender_header_2_1">
                                <div class="holder" id="defender_scales_holder">
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
                        </div>
                        <div class="defender_content">
                            <div class="holder">
                                <div class="audio green-audio-player about_us_defender_player">
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
                              <div class="defender_content_text">
                                <p>
                                    Հայաստանում մարդու իրավունքների պաշտպանի հաստատությունը՝ որպես Օմբուդսմանի և մարդու իրավունքների ազգային և ամենաբարձր «A» միջազգային կարգավիճակ ունեցող հաստատություն, գործում է Փարիզյան և միջազգային սկզբունքներին համապատասխան:

                                    Մարդու իրավունքների պաշտպանն անկախ պաշտոնատար անձ է, որը հետևում է պետական և տեղական ինքնակառավարման մարմինների ու պաշտոնատար անձանց, հանրային ծառայությունների ոլորտում գործող կազմակերպությունների կողմից մարդու իրավունքների և ազատությունների պահպանմանը։ Պաշտպանը նպաստում է նաև խախտված իրավունքների և ազատությունների վերականգնմանը, իրավունքներին ու ազատություններին առնչվող նորմատիվ իրավական ակտերի կատարելագործմանը:

                                    Իր իրավական առաքելության շրջանակներում Մարդու իրավունքների պաշտպանն իրականացնում է անհատական և կոլեկտիվ բողոքների քննարկում, ինչպես նաև սեփական նախաձեռնությամբ հարցի քննարկում։ Պաշտպանն իրականացնում է նաև կոնկրետ բողոքներով ու դեպքերով (սեփական նախաձեռնությամբ) քննարկում, ինչպես նաև կանխարգելիչ աշխատանքներ համակարգային մակարդակում:

                                    Համակարգային մակարդակում կանխարգելիչ աշխատանքները ներառում են, օրինակ՝ Սահմանադրական դատարան դիմելը Ազգային ժողովի որոշումների, Հանրապետության նախագահի հրամանագրերի և կարգադրությունների, Կառավարության և վարչապետի որոշումների, ենթաօրենսդրական նորմատիվ իրավական ակտերի՝ Սահմանադրության 2-րդ գլխով նախատեսված՝ մարդու և քաղաքացու հիմնական իրավունքների և ազատությունների վերաբերյալ դրույթներին համապատասխանության հարցերով: Սահմանադրական դատարանի հետ համագործակցության շրջանակներում Պաշտպանը ներկայացնում է  նաև հատուկ կարծիք (amicus brief) դատարանում քննվող` մարդու իրավունքներին առնչվող գործերի վերաբերյալ։

                                    Նորմատիվ իրավական ակերի կատարելագործմանը նպաստելու  գործառույթի շրջանակում Մարդու իրավունքների պաշտպանը իրավական ակտերում փոփոխություններ և լրացումներ կատարելու վերաբերյալ առաջարկություններ է մշակում և ներկայացնում իրավասու մարմիններին: Հատկանշական է նաև, որ մինչև մարդու իրավունքներին և ազատություններին վերաբերող նորմատիվ իրավական ակտերի նախագծերի ընդունումը, դրանք պետք է ուղղարկվեն Պաշպանին՝ գրավոր կարծիք ներկայացնելու:

                                    Համակարգային խնդիրների լուծման և իրավունքների խախտումների կանխարգելմանն ուղղված աշխատանքի մյուս կարևոր ուղղություններից է իրազեկման աշխատանքների իրականացումը։ Այս համատեքստում Պաշտպանը հրապարակում է տեսանյութեր, տեղեկատվական թերթիկներ, ուղեցույցեր և այլ նյութեր մարդու իրավուքններին առնչվող տարբեր խնդիրների վերաբերյալ:

                                    2015 թվականի սահմանադրական փոփոխություններից և սահմանադրական օրենքի ընդունումից հետո Մարդու իրավունքների պաշտպանը հետևում է նաև հանրային ծառայության ոլորտում (էլեկտրաէներգետիկա, ջերմամատակարարում, գազամատակարարում, ջրամատակարարում, հեռահաղորդակցություն և այլն) գործող կազմակերպությունների  կողմից մարդու իրավունքների և ազատությունների պահպանմանը:  Պաշտպանը քննարկում է նաև պետական և տեղական ինքնակառավարման մարմինների պատվիրակած լիազորություններն իրականացնող կազմակերպությունների կողմից մարդու իրավունքների ենթադրյալ խախտումների վերաբերյալ բողոքները:

                                    Պաշտպանին է վերապահված նաև երկրում մի շարք կոնվենցիոն դրույթների կատարման նկատմամբ անկախ դիտարկումը։ Մասնավորապես, Մարդու իրավուքնների պաշտպանը հանդիսանում է «Խոշտանգումների և այլ դաժան, անմարդկային կամ արժանապատվությունը նվաստացնող վերաբերմունքի կամ պատժի դեմ» ՄԱԿ-ի՝ 1984 թվականի կոնվենցիայի 2002 թվականի դեկտեմբերի 18-ին ընդունած կամընտիր արձանագրությամբ սահմանված կանխարգելման ազգային մեխանիզմը Հայաստանի Հանրապետությունում:

                                    Մարդու իրավուքնների պաշտպանն իրականացնում է նաև «Երեխայի իրավունքների մասին» ՄԱԿ-ի՝ 1989 թվականի նոյեմբերի 20-ին, ինչպես նաև «Հաշմանդամություն ունեցող անձանց իրավունքների մասին» ՄԱԿ-ի՝ 2006 թվականի դեկտեմբերի 13-ին ընդունված կոնվենցիաների դրույթների կիրառության մշտադիտարկում, ինչպես նաև երեխաների և հաշմանդամություն ունեցող անձանց իրավունքների խախտումների կանխարգելում և պաշտպանություն:

                                    Մարդու իրավունքներւի պաշտպանը, յուրաքանչյուր տարի՝ մինչև մարտի 31-ը, հրապարակում և Ազգային ժողովին է ներկայացնում տարեկան հաղորդում՝ նախորդ տարվա իր գործունեության, ինչպես նաև մարդու իրավունքների և ազատություններ պաշտպանության վիճակի մասին: Պաշտպանը` որպես կանխարգելման ազգային մեխանիզմ, յուրաքանչյուր տարվա առաջին եռամսյակի ընթացքում հրապարակում և Ազգային ժողովին է ներկայացնում նաև առանձին զեկույց նախորդ տարվա ընթացքում խոշտանգումների և վատվերաբերմունքի այլ ձևերի կանխարգելմանն ուղղված գործունեության վերաբերյալ: Հասարակական հնչեղություն ունեցող առանձին հարցերի կամ մարդու իրավունքների կոպիտ խախտումների դեպքերում Պաշտպանը հրապարակում է արտահերթ զեկույցներ կամ հաղորդումներ:
                                </p>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane container_section_about_us fade" id="section2" role="tabpanel" aria-labelledby="section2-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Աշխատակազմ</p>
                </div>
            </div>
            <div class="d-flex flex-column about_directions_applications directions_applications">
              <ul class="nav nav-tabs container d-flex   scroll_nav about_as_small" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link custom_list_group_action active" id="section2_1-tab" data-bs-toggle="tab" data-bs-target="#section2_1" type="button" role="tab" aria-controls="section2_1" aria-selected="true">Կառուցվածք</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link custom_list_group_action big_list_tab" id="section2_2-tab" data-bs-toggle="tab" data-bs-target="#section2_2" type="button" role="tab" aria-controls="section2_2" aria-selected="false">Աշխատակիցներ</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link custom_list_group_action big_list_tab" id="section2_3-tab" data-bs-toggle="tab" data-bs-target="#section2_3" type="button" role="tab" aria-controls="section2_3" aria-selected="false">Թափուր աշխատատեղեր</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link custom_list_group_action big_list_tab" id="section2_4-tab" data-bs-toggle="tab" data-bs-target="#section2_4" type="button" role="tab" aria-controls="section2_4" aria-selected="false">Բյուջե</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link custom_list_group_action big_list_tab" id="section2_5-tab" data-bs-toggle="tab" data-bs-target="#section2_5" type="button" role="tab" aria-controls="section2_5" aria-selected="false">Գնումներ</button>
                  </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane container_section_about_us fade show active" id="section2_1" role="tabpanel" aria-labelledby="section2_1-tab">
                      <div class="structure">
                          <hr class="vertical_hr">
                          <div class="structure_header">
                              <p>Հայաստանի Հանրապետության Մարդու իրավունքների Պաշտպան</p>
                          </div>
                          <div class="d-flex flex-column structure_content">
                              <div class="d-flex"><hr class="horizontal_line"><p>Պաշտպանի խորհրդականներ</p></div>
                              <div class="d-flex"><hr class="horizontal_line"><p>Պաշտպանի օգնականներ</p></div>
                              <div class="d-flex"><hr class="horizontal_line"><p>Քրեական արդարադատության ոլորտում և զինված ուժերում մարդու իրավունքների պաշտպանության դեպարտամենտ</p></div>
                              <div class="d-flex"><hr class="horizontal_line"><p>Քարտուղարություն</p></div>
                              <div class="d-flex"><hr class="horizontal_line"><p>Քաղաքացիական, սոցիալ-տնտեսական և մշակութային իրավունքների պաշտպանության դեպարտամենտ</p></div>
                              <div class="d-flex"><hr class="horizontal_line"><p>Հետազոտական և կրթական կենտրոն</p></div>
                              <div class="d-flex"><hr class="horizontal_line">
                                <div class="d-flex structure_div">
                                  <p>Մարզային ստորաբաժանումներ</p>
                                  <hr class="horizontal_line"><p>Շիրակի մարզ</p>
                                  <hr class="horizontal_line"><p>Սյունիքի մարզ</p>
                                  <hr class="horizontal_line"><p>Գեղարքունիքի մարզ</p>
                              </div>
                            </div>
                              <div class="d-flex"><hr class="horizontal_line"><p>Միջազգային համագործակցության վարչություն</p></div>
                              <div class="d-flex"><hr class="horizontal_line"><p>Խոշտանգումների և վատ վերաբերմունքի կանխարգելման վարչություն</p></div>
                              <div class="d-flex"><hr class="horizontal_line"><p>Հանրային կապերի բաժին</p></div>
                              <div class="d-flex"><hr class="horizontal_line"><p>Ներքին աուդիտի բաժին</p></div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane container_section_about_us_card fade" id="section2_2" role="tabpanel" aria-labelledby="section2_2-tab">
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
                  <div class="tab-pane container_section_about_us_card fade" id="section2_3" role="tabpanel" aria-labelledby="section2_3-tab">
                      <div class="d-flex flex-column vacancies mb-5">
                        <p>
                          <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Link with href
                          </a>
                          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-bs-target
                          </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                          <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="tab-pane container_section_about_us fade" id="section2_4" role="tabpanel" aria-labelledby="section2_4-tab">
                    <div class="d-flex flex-column about_directions_applications directions_applications">
                      <div class="report_news d-flex flex-column">
                        <div class="report_news d-flex flex-column">
                          <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                              <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց սպառողների իրավունքների ու պարտականությունների վերաբերյալ
                          </a>
                        </div>
                        <div class="report_news d-flex flex-column">
                          <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                              <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց ուսուցիչների համար «Եկեք սովորենք երեխայի իրավունքները»
                          </a>
                        </div>
                        <div class="report_news d-flex flex-column">
                          <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                              <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">ՈԻՂԵՑՈՒՅՑ Շինարարության թույլտվության տրամադրման կարգի վերաբերյալ
                          </a>
                        </div>
                        <div class="report_news d-flex flex-column">
                          <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                              <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց անձնական օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու կանոնների վերաբերյալ
                          </a>
                        </div>
                        <div class="report_news d-flex flex-column">
                          <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                              <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց պատերազմի հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                          </a>
                        </div>
                        <div class="report_news d-flex flex-column">
                          <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                              <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պարսկերեն. حمایت مدافع حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                          </a>
                        </div>
                        <div class="report_news d-flex flex-column">
                          <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                              <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Արաբերեն. مساندة المدافع عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                          </a>
                        </div>
                        <div class="report_news d-flex flex-column">
                          <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                              <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                          </a>
                        </div>
                        <div class="report_news d-flex flex-column">
                          <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                              <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Իսպաներեն. Asistencia de Defensor de derechos humanos en el marco de Mechanismo Nacional de Prevención
                          </a>
                        </div>
                        <div class="report_news d-flex flex-column">
                          <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                              <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ռուսերեն. Поддержка Защитника прав человека в рамках стауса национального превентивного механизма
                          </a>
                        </div>
                        <div class="report_news d-flex flex-column">
                          <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                              <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ֆրանսերեն. Soutien du Defenseur des droits de l'homme dans les cadres du statut du Mechanisme National de Prevention
                          </a>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="tab-pane container_section_about_us fade" id="section2_5" role="tabpanel" aria-labelledby="section2_5-tab">
                    <div class="report_news d-flex flex-column">
                      <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                          <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Ուղեցույց սպառողների իրավունքների ու պարտականությունների վերաբերյալ
                      </a>
                    </div>
                    <div class="report_news d-flex flex-column">
                      <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                          <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Ուղեցույց ուսուցիչների համար «Եկեք սովորենք երեխայի իրավունքները»
                      </a>
                    </div>
                    <div class="report_news d-flex flex-column">
                      <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                          <img src="{{ asset('img/icons/doc.png') }}" alt="doc">ՈԻՂԵՑՈՒՅՑ Շինարարության թույլտվության տրամադրման կարգի վերաբերյալ
                      </a>
                    </div>
                    <div class="report_news d-flex flex-column">
                      <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                          <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Ուղեցույց անձնական օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու կանոնների վերաբերյալ
                      </a>
                    </div>
                    <div class="report_news d-flex flex-column">
                      <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                          <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Ուղեցույց պատերազմի հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                      </a>
                    </div>
                    <div class="report_news d-flex flex-column">
                      <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                          <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Պարսկերեն. حمایت مدافع حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                      </a>
                    </div>
                    <div class="report_news d-flex flex-column">
                      <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                          <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Արաբերեն. مساندة المدافع عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                      </a>
                    </div>
                    <div class="report_news d-flex flex-column">
                      <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                          <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Մարդու իրավունքների պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                      </a>
                    </div>
                    <div class="report_news d-flex flex-column">
                      <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                          <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Իսպաներեն. Asistencia de Defensor de derechos humanos en el marco de Mechanismo Nacional de Prevención
                      </a>
                    </div>
                    <div class="report_news d-flex flex-column">
                      <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                          <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Ռուսերեն. Поддержка Защитника а прав человека в рамках стауса национального превентивного механизма
                      </a>
                    </div>
                    <div class="report_news d-flex flex-column">
                      <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                          <img src="{{ asset('img/icons/doc.png') }}" alt="doc">Ֆրանսերեն. Soutien du Defenseur des droits de l'homme dans les cadres du statut du Mechanisme National de Prevention
                      </a>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="tab-pane container_section_about_us fade" id="section3" role="tabpanel" aria-labelledby="section3-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>ՀՀ Սահմանադրություն</p>
                </div>
            </div>
           <div class="d-flex flex-column about_directions_applications directions_applications">
            <div class="report_news d-flex flex-column">
                <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց սպառողների իրավունքների ու պարտականությունների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց ուսուցիչների համար «Եկեք սովորենք երեխայի իրավունքները»
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">ՈԻՂԵՑՈՒՅՑ Շինարարության թույլտվության տրամադրման կարգի վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց անձնական օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու կանոնների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց պատերազմի հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պարսկերեն. حمایت مدافع حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Արաբերեն. مساندة المدافع عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Իսպաներեն. Asistencia de Defensor de derechos humanos en el marco de Mechanismo Nacional de Prevención
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ռուսերեն. Поддержка Защитника а прав человека в рамках стауса национального превентивного механизма
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ֆրանսերեն. Soutien du Defenseur des droits de l'homme dans les cadres du statut du Mechanisme National de Prevention
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Կորոնավիրուսի մասին ուղեցույց երեխաների համար
                    </a>
                  </div>
              </div>
           </div>
        </div>
        <div class="tab-pane container_section_about_us fade" id="section4" role="tabpanel" aria-labelledby="section4-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Պաշտպանի մասին ՀՀ սահմանադրական օրենքը</p>
                </div>
            </div>
           <div class="d-flex flex-column about_directions_applications directions_applications">
            <div class="report_news d-flex flex-column">
                <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց սպառողների իրավունքների ու պարտականությունների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց ուսուցիչների համար «Եկեք սովորենք երեխայի իրավունքները»
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">ՈԻՂԵՑՈՒՅՑ Շինարարության թույլտվության տրամադրման կարգի վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց անձնական օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու կանոնների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց պատերազմի հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պարսկերեն. حمایت مدافع حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Արաբերեն. مساندة المدافع عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Իսպաներեն. Asistencia de Defensor de derechos humanos en el marco de Mechanismo Nacional de Prevención
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ռուսերեն. Поддержка Защитника а прав человека в рамках стауса национального превентивного механизма
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ֆրանսերեն. Soutien du Defenseur des droits de l'homme dans les cadres du statut du Mechanisme National de Prevention
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Կորոնավիրուսի մասին ուղեցույց երեխաների համար
                    </a>
                  </div>
              </div>
           </div>
        </div>
        <div class="tab-pane container_section_about_us fade" id="section5" role="tabpanel" aria-labelledby="section5-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Միջազգային Կոնվենցիոն կարգավիճակներ</p>
                </div>
            </div>
           <div class="d-flex flex-column about_directions_applications directions_applications">
            <div class="report_news d-flex flex-column">
                <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց սպառողների իրավունքների ու պարտականությունների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց ուսուցիչների համար «Եկեք սովորենք երեխայի իրավունքները»
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">ՈԻՂԵՑՈՒՅՑ Շինարարության թույլտվության տրամադրման կարգի վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց անձնական օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու կանոնների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց պատերազմի հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պարսկերեն. حمایت مدافع حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Արաբերեն. مساندة المدافع عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Իսպաներեն. Asistencia de Defensor de derechos humanos en el marco de Mechanismo Nacional de Prevención
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ռուսերեն. Поддержка Защитника а прав человека в рамках стауса национального превентивного механизма
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ֆրանսերեն. Soutien du Defenseur des droits de l'homme dans les cadres du statut du Mechanisme National de Prevention
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Կորոնավիրուսի մասին ուղեցույց երեխաների համար
                    </a>
                  </div>
              </div>
           </div>
        </div>
        <div class="tab-pane container_section_about_us fade" id="section6" role="tabpanel" aria-labelledby="section6-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Պաշտպանին առընթեր խորհուրդներ</p>
                </div>
            </div>
           <div class="d-flex flex-column about_directions_applications directions_applications">
            <div class="report_news d-flex flex-column">
                <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց սպառողների իրավունքների ու պարտականությունների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց ուսուցիչների համար «Եկեք սովորենք երեխայի իրավունքները»
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">ՈԻՂԵՑՈՒՅՑ Շինարարության թույլտվության տրամադրման կարգի վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց անձնական օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու կանոնների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց պատերազմի հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պարսկերեն. حمایت مدافع حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Արաբերեն. مساندة المدافع عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Իսպաներեն. Asistencia de Defensor de derechos humanos en el marco de Mechanismo Nacional de Prevención
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ռուսերեն. Поддержка Защитника а прав человека в рамках стауса национального превентивного механизма
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ֆրանսերեն. Soutien du Defenseur des droits de l'homme dans les cadres du statut du Mechanisme National de Prevention
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Կորոնավիրուսի մասին ուղեցույց երեխաների համար
                    </a>
                  </div>
              </div>
           </div>
        </div>
        <div class="tab-pane container_section_about_us fade" id="section7" role="tabpanel" aria-labelledby="section7-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Պատմություն</p>
                </div>
            </div>
           <div class="d-flex flex-column about_directions_applications directions_applications">
            <div class="report_news d-flex flex-column">
                <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց սպառողների իրավունքների ու պարտականությունների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց ուսուցիչների համար «Եկեք սովորենք երեխայի իրավունքները»
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">ՈԻՂԵՑՈՒՅՑ Շինարարության թույլտվության տրամադրման կարգի վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց անձնական օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու կանոնների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց պատերազմի հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պարսկերեն. حمایت مدافع حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Արաբերեն. مساندة المدافع عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Իսպաներեն. Asistencia de Defensor de derechos humanos en el marco de Mechanismo Nacional de Prevención
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ռուսերեն. Поддержка Защитника а прав человека в рамках стауса национального превентивного механизма
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ֆրանսերեն. Soutien du Defenseur des droits de l'homme dans les cadres du statut du Mechanisme National de Prevention
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Կորոնավիրուսի մասին ուղեցույց երեխաների համար
                    </a>
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
