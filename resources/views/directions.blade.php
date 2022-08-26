@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link
    rel="stylesheet"
    href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"
  />
@endsection




@section('content')
<div class="scroll_header">
    <ul class="nav nav-tabs container d-flex flex-row justify-content-evenly scroll_nav contact_us" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action active" id="section1-tab" data-bs-toggle="tab" data-bs-target="#section1" type="button" role="tab" aria-controls="section1" aria-selected="true">Դիմումներ և Բողոքներ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section2" type="button" role="tab" aria-controls="section2" aria-selected="false">Մշտադիտարկման և Անհատական այցեր</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane container_section fade show active" id="section1" role="tabpanel" aria-labelledby="section1-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Դիմումներ և Բողոքներ</p>
                </div>
            </div>
            <div class="d-flex flex-column directions_applications">
               <p>Յուրաքանչյուր ոք ունի Մարդու իրավունքների պաշտպանին դիմելու սահմանադրական իրավունք ՝ ՀՀ քաղաքացիները, օտարերկրացիները, քաղաքացիություն չունեցող և այլ անձինք, ինչպես նաև իրավաբանական անձինք:</p>
               <p>Ֆիզիկական և իրավաբանական անձինք կարող են դիմել ինչպես փոստի, այնպես էլ Պաշտպանին կամ նրա ներկայացուցչին անձամբ բողոք հանձնելու միջոցով և առցանց եղանակով: Պաշտպանին կարելի է դիմել նաև բանավոր:</p>
               <p>Եթե կարծում եք, որ պետական կամ տեղական ինքնակառավարման մարմինը, պաշտոնատար անձը, ինչպես նաև պետական և տեղական ինքնակառավարման մարմինների պատվիրակած լիազորություններն իրականացնող կազմակերպությունը խախտել են Սահմանադրությամբ և օրենքներով ամրագրված Ձեր իրավունքը, ապա կարող եք դիմել Մարդու իրավունքների պաշտպանին:</p>
               <p>Պաշտպանի քննարկմանը ենթակա հարցերի շարքում են նաև հանրային ծառայության ոլորտում գործող կազմակերպությունների կողմից մարդու իրավունքների և ազատությունների ենթադրյալ խախտումները: Այնուամենայինվ, այս պարագայում պետք է առկա լինի տեղեկություն այն մասին, որ տեղի են ունեցել մարդու իրավունքների կամ ազատությունների զանգվածային խախտումներ, կամ այդ խնդիրն ունի հանրային նշանակություն կամ կապված է այնպիսի անձանց շահերի պաշտպանության հետ, որոնք չեն կարող դա իրականացնել ինքնուրույն:</p>
               <p>Բողոքն ստանալուց հետո 30 օրվա ընթացքում իրականացվում է բողոքի ուսումնասիրություն, որի հիման վրա Պաշտպանը կայացնում է հետևյալ որոշումներից մեկը և ծանուցում բողոք ներկայացրած անձին.</p>
               <p>1) բողոքը քննարկման ընդունելու մասին.</p>
               <p>2) բողոքը չքննարկելու մասին.</p>
               <p>3) բողոք ներկայացրած անձին իր իրավունքների և ազատությունների պաշտպանության հնարավորությունները ներկայացնելու մասին.</p>
               <p>4) բողոքն այլ մարմնի քննարկմանը փոխանցելու մասին:</p>
               <p>Բողոքի հիման վրա հարցի քննարկման ընթացակարգ սկսելուց զատ, Պաշտպանը կարող է քննարկում իրականացնել սեփական նախաձեռնությամբ, և օգտվել իրեն վերապահված բոլոր լիազորություններից, որոնք նա իրականացնում է բողոքի քննարկման կապակցությամբ: Մարդու իրավունքների պաշտպանի կողմից սեփական նախաձեռնությամբ հարցի քննարկման ընթացակարգ է նախաձեռնվում, եթե առկա են մարդու իրավունքների զանգվածային խախտումներ, եթե խոսքը վերաբերում է հանրային նշանակություն ունեցող հարցի, եթե խախտվել են այնպիսի անձանց իրավունքներ, որոնք չեն կարող ինքնուրույն իրականացնել իրենց շահերի պաշտպանությունը:
               Բողոքի կամ սեփական նախաձեռնությամբ սկսված քննարկման արդյունքում Պաշտպանն ընդունում է հետևյալ որոշումներից մեկը.</p>
               <p>1) մարդու իրավունքների կամ ազատությունների խախտման առկայության մասին,</p>
               <p>2) մարդու իրավունքների կամ ազատությունների խախտման բացակայության մասին,</p>
               <a href="!#" class="mb-3">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Հայաստանի մարդու իրավունքների պաշտպանին առցանց բողոք ներկայացնելու կարգը
               </a>
               <a href="!#">
                <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Հայաստանի մարդու իրավունքների պաշտպանի աշխատակազմում բողոքի ուսումնասիրության կարգը
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
            <audio id="player" src="../audio/song.mp3"></audio>
            <div class="player">
              <div class="control">
                <i class="fas fa-play" id="playbtn"></i>
              </div>
              <div class="info">
                <div class="bar">
                  <div id="progress"></div>
                </div>
              </div>

              <div id="current">0:00</div>
            </div>
            <audio id="player" src="../audio/song.mp3"></audio>
            <div class="player">
              <div class="control">
                <i class="fas fa-play" id="playbtn"></i>
              </div>
              <div class="info">
                <div class="bar">
                  <div id="progress"></div>
                </div>
              </div>

              <div id="current">0:00</div>
            </div>
            <p>Մարդու իրավունքների պաշտպանը կամ նրա իրավասու ներկայացուցիչը բողոքի ուսումնասիրության կամ քննարկման ընթացքում ունի լիազորություն անարգել այցելելու իրավասու պետական կամ տեղական ինքնակառավարման մարմին կամ կազմակերպություն: Բացի այդ, Պաշտպանը՝ միջազգային կոնվենցիոն կարգավիճակների հիմքով, ունի նաև մշտադիտարկման այցեր կատարելու հնարավորություն: Յուրաքանչյուր դեպքում պահպանվում է այցերի գաղտնիությունը՝ դրանք իրականացվում են առանց նախնական իրազեկման:</p>
            <p>Այս երկու տիպի այցերը տարբերվում են իրականացման հիմքով և նպատակով: Առաջին դեպքում հիմքն անհատական բողոքն է կամ սեփական նախաձեռնությամբ քննարկվող հարցը: Մշտադիտարկման այցի իրականացման հիմքը համապատասխան հաստատություններում բնակվող կամ ազատությունից զրկված անձանց պայմանները և իրավունքների ապահովման վիճակի պարբերական ստուգումն է՝ անկախ անհատական բողոքների առկայությունից:</p>
            <p>Մշտադիտարկման այցեր են իրականացվում նաև Պաշտպանի՝ «Երեխայի իրավունքների մասին» և «Հաշմանդամություն ունեցող անձանց իրավունքների մասին» ՄԱԿ-ի կոնվենցիաների դրույթների կիրառության մշտադիտարկում իրականացնող ազգային հաստատության մանդատի շրջանակներում: Մշտադիտարկման այցերն իրականացվում են խնամք և պաշտպանություն իրականացնող հաստատություններ:</p>
            <p>«Մարդու իրավունքների պաշտպանի մասին» Հայաստանի Հանրապետության սահմանադրական օրենքն ուժի մեջ մտնելուց ի վեր միջազգայնորեն ընդունված սկզբունքների հիման վրա որդեգրվել է Պաշտպանի՝ որպես կոնվենցիոն մարմնի և օմբուդսմանի գործառույթների փոխլրացման արդյունավետ մեխանիզմ:</p>
            <p>Մասնավորապես, այցերի տեսակների նախնական տարանջատումը չի ենթադրում, որ մշտադիտարկման այցերի ընթացքում ուշադրություն չի դարձվում անհատական բողոքներին և դրանցում բարձրացված խնդիրներին: Ավելին, դրանք որոշ առումով ուղենիշ են համարվում մշտադիտարկման այց իրականացնողների համար, որոնք մինչև այցը, ի թիվս այլնի, քննարկում են կոնկրետ հաստատության վերաբերյալ Պաշտպանին հասցեագրված բողոքները: Հատկանշական է, որ մշտադիտարկման այցերի ընթացքում ստացած անհատական բողոքները նույնպես քննարկման առարկա են դարձվում: Հնարավորության դեպքում դրանցում բարձրացված խնդիրները լուծվում են տեղում կամ փոխանցվում են Պաշտպանի աշխատակազմի՝ անհատական բողոքներով զբաղվող կոնկրետ ստորաբաժանմանը:</p>
           </div>
        </div>
      </div>
    {{-- <div id="list-example" class="list-group container d-flex flex-row scroll_nav contact_us">
        <a class="js-scroll custom_list_group_action active" aria-current="page" href="#section1">Դիմել Պաշտպանին</a>
        <a class="js-scroll custom_list_group_action" href="#section2">Հաճախ տրվող հարցեր</a>
        <a class="js-scroll custom_list_group_action" href="#section3">Հետադարձ կապ</a>
    </div> --}}
      {{-- <section id="section1" class="container_section">
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
      </section> --}}

      {{-- <section id="section2" class="container_section">
        <div class="d-flex align-items-baseline contact_us_action">
            <div class="line_2"></div>
            <div class="contact_us_action_title">
                <p>Հաճախ տրվող հարցեր</p>
            </div>
        </div>
       <div class="contact_us_question">
            <div class="contact_us_question_title">
                <p>Ո՞վ է Մարդու իրավունքների պաշտպանը</p>
            </div>
            <div class="contact_us_question_content">
                <p>
                    Մարդու իրավունքների պաշտպանն անկախ պաշտոնատար անձ է, ով հետեւում է պետական եւ տեղական ինքնակառավարման մարմինների
                    ու պաշտոնատար անձանց, իսկ Մարդու իրավունքների պաշտպանի մասին օրենքով սահմանված դեպքերում` նաեւ կազմակերպությունների
                    կողմից մարդու իրավունքների եւ ազատությունների պահպանմանը, նպաստում է խախտված իրավունքների եւ
                    ազատությունների վերականգնմանը, իրավունքներին ու ազատություններին առնչվող նորմատիվ իրավական ակտերի կատարելագործմանը:
                </p>
            </div>
       </div>
       <div class="contact_us_question_2">
            <div class="contact_us_question_title">
                <p>Արդյո՞ք հնարավոր է ազդել Պաշտպանի որոշումների վրա կամ միջամտել նրա գործունեությանը</p>
            </div>
            <div class="contact_us_question_content">
                <p>
                    Պաշտպանի գործունեությանը միջամտելը, պաշտոնատար անձանց կողմից Պաշտպանի լիազորությունների իրականացմանը խոչընդոտելը,
                    Պաշտպանին սպառնալը, վիրավորանք հասցնելն առաջացնում են պատասխանատվություն՝ օրենքով սահմանված կարգով:
                </p>
            </div>
       </div>
      </section> --}}

      {{-- <section id="section3" class="container_section">
        <div class="d-flex align-items-baseline contact_us_action">
            <div class="line_2"></div>
            <div class="contact_us_action_title">
                <p>Հետադարձ կապ</p>
            </div>
        </div>
        <div class="contact_cards">
            <div class="contact_card_item">
                <div class="card_content d-flex flex-column">
                    <div class="card_item_title">
                        <p>Երևանի աշխատակազմ</p>
                    </div>
                    <div class="card_text">
                        <p><img src="{{ asset('img/icons/work_time.png') }}" alt=""><span> Երկուշաբթի-Ուրբաթ 09։00-18։00</span></p>
                        <p><img src="{{ asset('img/icons/position.png') }}" alt=""><span style="margin-left: 28px !important"> Պուշկինի 56ա, երևան, Հայաստան</span></p>
                        <p> <img src="{{ asset('img/icons/email.png') }}" alt=""><span> ombuds@ombuds.am</span></p>
                        <p>
                            <img src="{{ asset('img/icons/phone-call.png') }}" alt="">
                            <span> +374 10 53 76 51</span><br>
                            <img src="{{ asset('img/icons/whatsapp.png') }}" alt="whatsapp" style="margin-left: 60px;">
                            <img src="{{ asset('img/icons/viber.png') }}" alt="viber">
                            (+37496116100)
                        </p>
                    </div>
                </div>
            </div>
            <div class="contact_card_item">
                <div class="card_content d-flex flex-column">
                    <div class="card_item_title">
                        <p>Սյունիքի մարզային ստորաբաժանում</p>
                    </div>
                    <div class="card_text">
                        <p><img src="{{ asset('img/icons/work_time.png') }}" alt=""><span> Երկուշաբթի-Ուրբաթ 09։00-18։00</span></p>
                        <p><img src="{{ asset('img/icons/position.png') }}" alt=""><span style="margin-left: 28px !important"> Պուշկինի 56ա, երևան, Հայաստան</span></p>
                        <p> <img src="{{ asset('img/icons/email.png') }}" alt=""><span> ombuds@ombuds.am</span></p>
                        <p><img src="{{ asset('img/icons/phone-call.png') }}" alt=""><span> +374 10 53 76 51</span></p>
                    </div>
                </div>
            </div>
            <div class="contact_card_item">
                <div class="card_content d-flex flex-column">
                    <div class="card_item_title">
                        <p>Շիրակի մարզային ստորաբաժանում</p>
                    </div>
                    <div class="card_text">
                        <p><img src="{{ asset('img/icons/work_time.png') }}" alt=""><span> Երկուշաբթի-Ուրբաթ 09։00-18։00</span></p>
                        <p><img src="{{ asset('img/icons/position.png') }}" alt=""><span style="margin-left: 28px !important"> Պուշկինի 56ա, երևան, Հայաստան</span></p>
                        <p> <img src="{{ asset('img/icons/email.png') }}" alt=""><span> ombuds@ombuds.am</span></p>
                        <p><img src="{{ asset('img/icons/phone-call.png') }}" alt=""><span> +374 10 53 76 51</span></p>
                    </div>
                </div>
            </div>
            <div class="contact_card_item">
                <div class="card_content d-flex flex-column">
                    <div class="card_item_title">
                        <p>Գեղարքունիքի մարզային ստորաբաժանում</p>
                    </div>
                    <div class="card_text">
                        <p><img src="{{ asset('img/icons/work_time.png') }}" alt=""><span> Երկուշաբթի-Ուրբաթ 09։00-18։00</span></p>
                        <p><img src="{{ asset('img/icons/position.png') }}" alt=""><span style="margin-left: 28px !important"> Պուշկինի 56ա, երևան, Հայաստան</span></p>
                        <p> <img src="{{ asset('img/icons/email.png') }}" alt=""><span> ombuds@ombuds.am</span></p>
                        <p><img src="{{ asset('img/icons/phone-call.png') }}" alt=""><span> +374 10 53 76 51</span></p>
                    </div>
                </div>
            </div>
            <div class="contact_card_item">
                <div class="card_content d-flex flex-column">
                    <div class="card_item_title">
                        <p>Տավուշի մարզային ստորաբաժանում</p>
                    </div>
                    <div class="card_text">
                        <p><img src="{{ asset('img/icons/work_time.png') }}" alt=""><span> Երկուշաբթի-Ուրբաթ 09։00-18։00</span></p>
                        <p><img src="{{ asset('img/icons/position.png') }}" alt=""><span style="margin-left: 28px !important"> Պուշկինի 56ա, երևան, Հայաստան</span></p>
                        <p> <img src="{{ asset('img/icons/email.png') }}" alt=""><span> ombuds@ombuds.am</span></p>
                        <p><img src="{{ asset('img/icons/phone-call.png') }}" alt=""><span> +374 10 53 76 51</span></p>
                    </div>
                </div>
            </div>
        </div>
      </section> --}}

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
  <script src="{{ asset('js/player.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endsection
