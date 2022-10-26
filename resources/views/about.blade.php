@extends('layouts.app')
@section('title') About Us @endsection




@section('content')
<div class="scroll_header">
    <ul class="nav nav-tabs container d-flex flex-row justify-content-center scroll_nav about_us" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action w-100 active" id="section1-tab" data-bs-toggle="tab" data-bs-target="#section1" type="button" role="tab" aria-controls="section1" aria-selected="true">Պաշտպան</button>
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
          <button class="nav-link custom_list_group_action big_list_tab" id="section5-tab" data-bs-toggle="tab" data-bs-target="#section5" type="button" role="tab" aria-controls="section5" aria-selected="false">Միջազգային Կոնվենցիոն կարգավիճակներ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link custom_list_group_action big_list_tab" id="section6-tab" data-bs-toggle="tab" data-bs-target="#section6" type="button" role="tab" aria-controls="section6" aria-selected="false">Պաշտպանին առընթեր խորհուրդներ</button>
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
            <div class="d-flex directions_applications_small">
                <ul class="nav nav-tabs container d-flex flex-row justify-content-start scroll_nav about_as_small" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link custom_list_group_action w-100 active" id="section1-tab" data-bs-toggle="tab" data-bs-target="#section1" type="button" role="tab" aria-controls="section1" aria-selected="true">Կենսագրություն</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link custom_list_group_action big_list_tab" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section2" type="button" role="tab" aria-controls="section2" aria-selected="false">Կառույցի իրավական առաքելությունը</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane container_section_about_us fade" id="section2" role="tabpanel" aria-labelledby="section2-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Աշխատակազմ</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
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
        <div class="tab-pane container_section_about_us fade" id="section3" role="tabpanel" aria-labelledby="section3-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>ՀՀ Սահմանադրություն</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
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
           <div class="d-flex flex-column directions_applications">
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
           <div class="d-flex flex-column directions_applications">
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
           <div class="d-flex flex-column directions_applications">
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
           <div class="d-flex flex-column directions_applications">
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
