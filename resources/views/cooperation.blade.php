@extends('layouts.app')
@section('title') Courses @endsection




@section('content')
<div class="scroll_header">
    <ul class="nav nav-tabs container d-flex flex-row justify-content-evenly scroll_nav contact_us" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action w-100 active" id="section1-tab" data-bs-toggle="tab" data-bs-target="#section1" type="button" role="tab" aria-controls="section1" aria-selected="true">Անդամակցություն</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section2" type="button" role="tab" aria-controls="section2" aria-selected="false">Ծրագրային համագործակցություն</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane container_section fade show active" id="section1" role="tabpanel" aria-labelledby="section1-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Անդամակցություն</p>
                </div>
            </div>
            <div class="d-flex flex-column directions_applications">
                <div class="row mb-5">
                    <div class="col">
                        <div class="card course_card cooperation_card" style="width: 100%;">
                            <div class="card-body cooperation_body_top">
                                <p class="card-text course_text">Որո՞նք են կանանց իրավունքների խախտմանը նպաստող պայմաններն աշխատավայրում</p>
                            </div>
                            <img src="{{ asset('img/cooperation.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card course_card cooperation_card" style="width: 100%;">
                            <div class="card-body cooperation_body_top">
                              <p class="card-text course_text">Ե՞րբ է լուծվում աշխատանքային պայմանագիրը</p>
                            </div>
                            <img src="{{ asset('img/cooperation1.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card course_card cooperation_card" style="width: 100%;">
                            <div class="card-body cooperation_body_top">
                                <p class="card-text course_text">Ի՞նչ պետք է իմանա աշխատանքի ընդունվելու համար փորձաշրջան անցնող քաղաքացին</p>
                              </div>
                            <img src="{{ asset('img/cooperation2.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card course_card cooperation_card" style="width: 100%;">
                            <div class="card-body cooperation_body_top">
                                <p class="card-text course_text">Ի՞նչ պետք է իմանա աշխատանքի ընդունվելու համար փորձաշրջան անցնող քաղաքացին</p>
                              </div>
                            <img src="{{ asset('img/cooperation1.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <div class="card course_card cooperation_card" style="width: 100%;">
                            <div class="card-body cooperation_body_top">
                                <p class="card-text course_text">Որո՞նք են կանանց իրավունքների խախտմանը նպաստող պայմաններն աշխատավայրում</p>
                            </div>
                            <img src="{{ asset('img/cooperation.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card course_card cooperation_card" style="width: 100%;">
                            <div class="card-body cooperation_body_top">
                              <p class="card-text course_text">Ե՞րբ է լուծվում աշխատանքային պայմանագիրը</p>
                            </div>
                            <img src="{{ asset('img/cooperation1.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card course_card cooperation_card" style="width: 100%;">
                            <div class="card-body cooperation_body_top">
                                <p class="card-text course_text">Ի՞նչ պետք է իմանա աշխատանքի ընդունվելու համար փորձաշրջան անցնող քաղաքացին</p>
                              </div>
                            <img src="{{ asset('img/cooperation2.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane container_section fade" id="section2" role="tabpanel" aria-labelledby="section2-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Ծրագրային համագործակցություն</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="d-flex flex-column mb-5">
                <div class="d-flex report_card">
                   <div class="reports_card_img">
                       <img src="{{ asset('img/defendant.png') }}" alt="report">
                   </div>
                   <div class="reports_card_text">
                        Միջազգային մասնակցության միջոցով Պաշտպանի հաստատությունը մասնակցում է մարդու իրավունքների պաշտպանության ոլորտում միջազգային իրավական չափանիշների ձևավորմանը։ Իր հերթին, Պաշտպանի հաստատությունը խթանում է միջազգային պայմանագրերի վավերացման և միջազգային պայմանագրային նորմերի ազգային մակարդակում ներդրման գործընթացները, ինչպես նաև անկախ գնահատական է տրվում պետության կողմից այդ ուղղությամբ կատարված աշխատանքներին։
                   </div>
                </div>
                <div class="d-flex report_card">
                   <div class="reports_card_img">
                       <img src="{{ asset('img/defendant.png') }}" alt="report">
                   </div>
                   <div class="reports_card_text">
                        Մարդու իրավունքների եվրոպական դատարանի և Եվրոպայի խորհրդի Նախարարների կոմիտեի հետ համագործակցության շրջանակներում, ըստ անհրաժեշտության, Պաշտպանը ներգրավվում է որպես երրորդ կողմ Հայաստանի դեմ քննվող գործերում, ինչպես նաև ներկայացնում է Հայաստանի դեմ դատարանի վճիռների կատարման վերաբերյալ հատուկ դիրքորոշումներ:
                   </div>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col">
                    <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                        <img src="{{ asset('img/image30.png') }}" class="card-img-top" alt="...">
                        <div class="card-body cooperation_body_bottom">
                          <p class="card-text cooperation_text">Որո՞նք են կանանց իրավունքների խախտմանը նպաստող պայմաններն աշխատավայրում</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                        <img src="{{ asset('img/image31.png') }}" class="card-img-top" alt="...">
                        <div class="card-body cooperation_body_bottom">
                          <p class="card-text cooperation_text">Ե՞րբ է լուծվում աշխատանքային պայմանագիրը</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                        <img src="{{ asset('img/image32.png') }}" class="card-img-top" alt="...">
                        <div class="card-body cooperation_body_bottom">
                          <p class="card-text cooperation_text">Ի՞նչ պետք է իմանա աշխատանքի ընդունվելու համար փորձաշրջան անցնող քաղաքացին</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                        <img src="{{ asset('img/image33.png') }}" class="card-img-top" alt="...">
                        <div class="card-body cooperation_body_bottom">
                          <p class="card-text cooperation_text">Ի՞նչ պետք է իմանա աշխատանքի ընդունվելու համար փորձաշրջան անցնող քաղաքացին</p>
                        </div>
                    </div>
                </div>
            </div>
              <div class="row mb-5">
                <div class="col">
                    <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                        <img src="{{ asset('img/image30.png') }}" class="card-img-top" alt="...">
                        <div class="card-body cooperation_body_bottom">
                          <p class="card-text cooperation_text">Որո՞նք են կանանց իրավունքների խախտմանը նպաստող պայմաններն աշխատավայրում</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                        <img src="{{ asset('img/image31.png') }}" class="card-img-top" alt="...">
                        <div class="card-body cooperation_body_bottom">
                          <p class="card-text cooperation_text">Ե՞րբ է լուծվում աշխատանքային պայմանագիրը</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                        <img src="{{ asset('img/image32.png') }}" class="card-img-top" alt="...">
                        <div class="card-body cooperation_body_bottom">
                          <p class="card-text cooperation_text">Ի՞նչ պետք է իմանա աշխատանքի ընդունվելու համար փորձաշրջան անցնող քաղաքացին</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                        <img src="{{ asset('img/image33.png') }}" class="card-img-top" alt="...">
                        <div class="card-body cooperation_body_bottom">
                          <p class="card-text cooperation_text">Ի՞նչ պետք է իմանա աշխատանքի ընդունվելու համար փորձաշրջան անցնող քաղաքացին</p>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        </div>
      </div>
</div>
@endsection
