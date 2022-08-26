@extends('layouts.app')
@section('styles')
@endsection
@section('title') Report @endsection



@section('content')
<div class="scroll_header">
    <ul class="nav nav-tabs d-flex flex-row justify-content-between scroll_nav reports" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action active" id="section1-tab" data-bs-toggle="tab" data-bs-target="#section1" type="button" role="tab" aria-controls="section1" aria-selected="true">Տարեկան զեկույցներ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section2" type="button" role="tab" aria-controls="section2" aria-selected="false">Արտահերթ զեկույցներ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section3" type="button" role="tab" aria-controls="section2" aria-selected="false">Տարեկան հաղորդումներ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section4" type="button" role="tab" aria-controls="section2" aria-selected="false">ՍԴ Դիմումներ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section5" type="button" role="tab" aria-controls="section2" aria-selected="false">ՍԴ Հատուկ կարծիքներ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section6" type="button" role="tab" aria-controls="section2" aria-selected="false">Օրենսդրական առաջարկներ և կարծիքներ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section7" type="button" role="tab" aria-controls="section2" aria-selected="false">Իրավական վերլուծություններ</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane container_section_reports fade show active" id="section1" role="tabpanel" aria-labelledby="section1-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Տարեկան զեկույցներ</p>
                </div>
            </div>
            <div class="d-flex flex-column directions_applications">
               <div class="d-flex flex-column mb-5">
                 <div class="d-flex report_card">
                    <div class="reports_card_img">
                        <img src="{{ asset('img/report.png') }}" alt="report">
                    </div>
                    <div class="reports_card_text">
                        Մարդու իրավունքների պաշտպանը, յուրաքանչյուր տարի՝ մինչև մարտի 31-ը հրապարակում և Ազգային ժողովին է ներկայացնում տարեկան հաղորդում՝ նախորդ տարվա իր գործունեության, ինչպես նաև մարդու իրավունքների և ազատություններ պաշտպանության վիճակի մասին:
                    </div>
                 </div>
                 <div class="d-flex report_card">
                    <div class="reports_card_img">
                        <img src="{{ asset('img/report.png') }}" alt="report">
                    </div>
                    <div class="reports_card_text">
                        Որպես կանխարգելման ազգային մեխանիզմ՝ Պաշտպանը յուրաքանչյուր տարվա առաջին եռամսյակի ընթացքում հրապարակում և Ազգային ժողովին է ներկայացնում նաև առանձին զեկույց նախորդ տարվա ընթացքում խոշտանգումների և վատ վերաբերմունքի այլ ձևերի կանխարգելմանն ուղղված գործունեության վերաբերյալ:
                    </div>
                 </div>
                 <div class="d-flex report_card">
                    <div class="reports_card_img">
                        <img src="{{ asset('img/report.png') }}" alt="report">
                    </div>
                    <div class="reports_card_text">
                        Տարբեր տարիների տարեկան հաղորդումները և զեկույցները պարունակում են ինչպես առանձին ոլորտներում առկա խնդիրների մասին վերլուծություններ, այնպես էլ դրանց լուծման ուղղված կոնկրետ առաջարկներ:
                    </div>
                 </div>
               </div>
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
        <div class="tab-pane container_section_reports fade" id="section2" role="tabpanel" aria-labelledby="section2-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Արտահերթ զեկույցներ</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
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
        <div class="tab-pane container_section_reports fade" id="section3" role="tabpanel" aria-labelledby="section2-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Տարեկան հաղորդումներ</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
               <a class="report_pdf" href="!#" class="mb-3">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Հայաստանի Հանրապետության մարդու իրավունքների պաշտպանի՝ որպես կանխարգելման ազգային մեխանիզմների 2021 թվականի գործունեության վերաբերյալ» տարեկան զեկույց (սեղմագիր)
               </a>
               <a class="report_pdf" href="!#">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">ՏԱՐԵԿԱՆ ԶԵԿՈՒՅՑ ՀԱՅԱՍՏԱՆԻ ՀԱՆՐԱՊԵՏՈՒԹՅԱՆ ՄԱՐԴՈՒ ԻՐԱՎՈՒՆՔՆԵՐԻ ՊԱՇՏՊԱՆԻ՝ ՈՐՊԵՍ ԿԱՆԽԱՐԳԵԼՄԱՆ ԱԶԳԱՅԻՆ ՄԵԽԱՆԻԶՄԻ 2021 ԹՎԱԿԱՆԻ ԳՈՐԾՈՒՆԵՈՒԹՅԱՆ ՎԵՐԱԲԵՐՅԱԼ
               </a>
               <a class="report_pdf" href="!#">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Արտահերթ հրապարակային զեկույց աշխատանքային իրավունքների մի շարք խնդիրներ՝ ըստ ՀՀ մարդու իրավունքների պաշտպանին ուղղված դիմում-բողոքների քննարկման
               </a>
               <a class="report_pdf" href="!#">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">2021թ․ տարեկան հաղորդում ՀՀ մարդու իրավունքների պաշտպանի գործունեության, մարդու իրավունքների և ազատությունների պաշտպանության վիճակի մասին
               </a>
            </div>
        </div>
        <div class="tab-pane container_section_reports fade" id="section4" role="tabpanel" aria-labelledby="section2-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>ՍԴ Դիմումներ</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="d-flex flex-column mb-5">
                <div class="d-flex report_card">
                   <div class="reports_card_img">
                       <img src="{{ asset('img/report.png') }}" alt="report">
                   </div>
                   <div class="reports_card_text">
                    Մարդու իրավունքների պաշտպանը դիմում է հասցեագրում Սահմանադրական դատարան օրենքների, Ազգային ժողովի որոշումների, Հանրապետության նախագահի հրամանագրերի և կարգադրությունների, Կառավարության և վարչապետի որոշումների, ենթաօրենսդրական նորմատիվ իրավական ակտերի՝ Սահմանադրության 2-րդ գլխով նախատեսված՝ մարդու և քաղաքացու հիմնական իրավունքների և ազատությունների վերաբերյալ դրույթներին համապատասխանության հարցերով:
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
                    <div class="report_news_content">
                        «Ձերբակալված և կալանավորված անձանց պահելու մասին» ՀՀ օրենքի 36-րդ հոդվածի 4-րդ մասի, ՀՀ քրեակատարողական օրենսգրքի 59-րդ հոդվածի 2-րդ մասի և 98-րդ հոդվածի 1-ին մասի, ինչպես նաև ՀՀ կառավարության
                        «Հայաստանի Հանրապետության արդարադատության նախարարության քրեակատարողական ծառայության` կալանավորվածներին պահելու վայրերի և ուղղիչ հիմնարկների ներքին կանոնակարգը հաստատելու մասին» 2006 թվականի
                        օգոստոսի 3-ի թիվ 1543-Ն որոշման 231-րդ կետի 2-րդ պարբերության 2-րդ նախադասության՝ ՀՀ Սահմանադրության 31-րդ հոդվածի 1-ին մասի, 33-րդ հոդվածի 1-ին մասի, 78-րդ և 81-րդ հոդվածների համապատասխանությունն
                        այնքանով, որքանով կալանավորված անձի կամ դատապարտյալի նկատմամբ պատժախուց տեղափոխելը՝ որպես տույժի միջոց կիրառելու դեպքում նա մեխանիկորեն զրկվում է մասնավոր և ընտանեկան կյանքի անձեռնﬗելիության,
                        ինչպես նաև հաղորդակցության ազատության իրավունքից։
                    </div>
                </div>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/doc.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը դիմել է Սահմանադրական դատարան
                </a>
                <div class="d-flex flex-column report_news_text">
                    <div class="report_news_time d-flex align-items-start">
                        <img src="{{ asset('img/calendar.png') }}" alt="calendar">
                        <p>10.06.2022</p>
                    </div>
                    <div class="report_news_content">
                        Դիմումով վիճարկվում է ՀՀ քրեական դատավարության օրենսգրքի 69-րդ հոդվածի 5-րդ մասի, 70-րդ հոդվածի 1-ին մասի 2-րդ կետի և 72-րդ հոդվածի 2-րդ մասի (երրորդ նախադասության)՝
                        ՀՀ Սահմանադրության 67-րդ հոդվածի 2-րդ մասի և 79-րդ հոդվածների համապատասխանությունն այնքանով, որքանով չի ապահովվում հանցագործության համար մեղադրվող անձի՝ անձամբ կամ
                        իր ընտրած փաստաբանի միջոցով պաշտպանվելու իրավունքի լիարժեք իրացումը պաշտպանի պարտադիր մասնակցության ինստիտուտի կիրառության շրջանակներում։
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
                    <div class="report_news_content">
                        «Ձերբակալված և կալանավորված անձանց պահելու մասին» ՀՀ օրենքի 36-րդ հոդվածի 4-րդ մասի, ՀՀ քրեակատարողական օրենսգրքի 59-րդ հոդվածի 2-րդ մասի և 98-րդ հոդվածի 1-ին մասի, ինչպես նաև ՀՀ կառավարության
                        «Հայաստանի Հանրապետության արդարադատության նախարարության քրեակատարողական ծառայության` կալանավորվածներին պահելու վայրերի և ուղղիչ հիմնարկների ներքին կանոնակարգը հաստատելու մասին» 2006 թվականի
                        օգոստոսի 3-ի թիվ 1543-Ն որոշման 231-րդ կետի 2-րդ պարբերության 2-րդ նախադասության՝ ՀՀ Սահմանադրության 31-րդ հոդվածի 1-ին մասի, 33-րդ հոդվածի 1-ին մասի, 78-րդ և 81-րդ հոդվածների համապատասխանությունն
                        այնքանով, որքանով կալանավորված անձի կամ դատապարտյալի նկատմամբ պատժախուց տեղափոխելը՝ որպես տույժի միջոց կիրառելու դեպքում նա մեխանիկորեն զրկվում է մասնավոր և ընտանեկան կյանքի անձեռնﬗելիության,
                        ինչպես նաև հաղորդակցության ազատության իրավունքից։
                    </div>
                </div>
              </div>
            </div>
        </div>
        <div class="tab-pane container_section_reports fade" id="section5" role="tabpanel" aria-labelledby="section2-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>ՍԴ Հատուկ կարծիքներ</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="d-flex flex-column mb-5">
                <div class="d-flex report_card">
                   <div class="reports_card_img">
                       <img src="{{ asset('img/report.png') }}" alt="report">
                   </div>
                   <div class="reports_card_text">
                    Սահմանադրական դատարանի հետ արդյունավետ համագործակցության շրջանակում՝ Պաշտպանին են ներկայացվում սահմանադրականության հարցի որոշման վերաբերյալ դատարանին ուղղված բոլոր դիմումները,
                    որոնց վերաբերյալ ներկայացվում է հատուկ կարծիք (amicus brief)։ Հատուկ կարծիքներն արտահայտում են Մարդու իրավունքների պաշտպանի դիրքորոշումը բարձրացված հարցերի վերաբերյալ:
                    Դրանցում ներառվում են Պաշտպանի կողմից անհատական բողոքների քննարկման, ինչպես նաև մշտադիտարկման արդյունքում իրավունքների և ազատությունների վերաբերյալ իրականացված վերլուծությունները,
                    կոնկրետ հարցի սահմանադրականության մասին միջազգային սկզբունքներ ու չափանիշներ:
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
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/doc.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը դիմել է Սահմանադրական դատարան
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
                    <img src="{{ asset('img/icons/doc.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը դիմել է Սահմանադրական դատարան
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
                    <img src="{{ asset('img/icons/doc.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը դիմել է Սահմանադրական դատարան
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
        <div class="tab-pane container_section_reports fade" id="section6" role="tabpanel" aria-labelledby="section2-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Օրենսդրական առաջարկներ և կարծիքներ</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="d-flex flex-column mb-5">
                <div class="d-flex report_card">
                   <div class="reports_card_img">
                       <img src="{{ asset('img/report.png') }}" alt="report">
                   </div>
                   <div class="reports_card_text">
                    Մինչև մարդու իրավունքներին և ազատություններին վերաբերող նորմատիվ իրավական ակտերի նախագծերի ընդունումը ուղարկվում են Մարդու իրավունքների պաշպանին՝ դրանց վերաբերյալ իրավասու մարմին գրավոր կարծիք ներկայացնելու:
                    Նշվածն իրականացվում է Պաշտպանի՝ մարդու իրավունքներին ու ազատություններին առնչվող նորմատիվ իրավական ակտերի կատարելագործման սահմանադրական լիազորության շրջանակներում: Մարդու իրավունքների պաշտպանը, իրավունքներին
                    ու ազատություններին առնչվող նորմատիվ իրավական ակտերի կատարելագործման սահմանադրական լիազորության շրջանակներում, մշակում և իրավասու մարմինների քննարկմանն է նարկայացնում իրավական ակտերում փոփոխություններ և
                    լրացումներ կատարելու առաջարկություններ: Նախագծերում ներկայացված լուծումները բխում են ինչպես Պաշտպանին հասցեագրված դիմումների քննարկման այնպես էլ մշտադիտարկման այցերի արդյունքներից:
                   </div>
                </div>
              </div>
              <div class="report_news d-flex flex-column">
                <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/doc.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը դիմել է Սահմանադրական դատարան
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/doc.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը դիմել է Սահմանադրական դատարան
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/doc.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը դիմել է Սահմանադրական դատարան
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                    </a>
                  </div>
              </div>
            </div>
        </div>
        <div class="tab-pane container_section_reports fade" id="section7" role="tabpanel" aria-labelledby="section7-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Իրավական վերլուծություններ</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="d-flex flex-column mb-5">
                <div class="d-flex report_card">
                   <div class="reports_card_img">
                       <img src="{{ asset('img/report.png') }}" alt="report">
                   </div>
                   <div class="reports_card_text">
                    Առանձին իրավիճակների կամ դեպքերի ուսումնասիրման արդյունքներով Մարդու իրավուքնների պաշտպանը հրապարակում է իրավական վերլուծություններ: Դրանց նպատակն վեր
                    հանել հանրային նշանակություն ունեցող խնդիրը և տալ դրանց իրավական գնահատական՝ կատարելով ինչպես ներպետական իրավակարգավորումների, այնպես էլ միջազգային փորձի վերլուծություն:
                   </div>
                </div>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                </a>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                </a>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                </a>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                </a>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                </a>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/doc.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը դիմել է Սահմանադրական դատարան
                </a>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/doc.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը դիմել է Սահմանադրական դատարան
                </a>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/doc.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը դիմել է Սահմանադրական դատարան
                </a>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                </a>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                </a>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                </a>
              </div>
              <div class="report_news d-flex flex-column">
                <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                    <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պաշտպանը դիմել է ՍԴ պատժախուց տեղափոխված կալանավորներին և դատապարտյալներին հեռախոսային խոսակցություններից, նամակագրությունից և այլ հաղորդակցությունից զրկման հարցով
                </a>
              </div>
            </div>
        </div>
        </div>
      </div>
</div>
@endsection





@section('scripts')
@endsection
