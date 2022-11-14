@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/font_awesome/all.min.css') }}" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('title') Decisions @endsection

@section('content')
        <div class="tab-pane decisions-tab container_section fade show">
          <div class="tab-header">
            <div class="d-flex align-items-baseline contact_us_action">
              <div class="line_2"></div>
              <div class="contact_us_action_title">
                  <p>Միպի որոշումներ</p>
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

@endsection

@section('scripts')
  <script src="{{ asset('js/player.js') }}"></script>
  <script src="{{ asset('js/font_awesome/all.min.js') }}"></script>
@endsection
