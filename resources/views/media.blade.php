@extends('layouts.app')
@section('title') Media @endsection




@section('content')
<div class="scroll_header">
    <ul class="nav nav-tabs container d-flex flex-row justify-content-evenly scroll_nav media_center" id="myTab" role="tablist">
        <li class="nav-item nav_media_item" role="presentation">
          <button class="nav-link custom_list_group_action media_center_btn active" id="section1-tab" data-bs-toggle="tab" data-bs-target="#section1" type="button" role="tab" aria-controls="section1" aria-selected="true">Նորություններ</button>
        </li>
        <li class="nav-item nav_media_item" role="presentation">
          <button class="nav-link custom_list_group_action media_center_btn" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section2" type="button" role="tab" aria-controls="section2" aria-selected="false">Հարցազրույցներ և ելույթներ</button>
        </li>
        <li class="nav-item nav_media_item" role="presentation">
          <button class="nav-link custom_list_group_action media_center_btn" id="section3-tab" data-bs-toggle="tab" data-bs-target="#section3" type="button" role="tab" aria-controls="section3" aria-selected="false">Տեսանյութեր</button>
        </li>
        <li class="nav-item nav_media_item" role="presentation">
          <button class="nav-link custom_list_group_action media_center_btn" id="section4-tab" data-bs-toggle="tab" data-bs-target="#section4" type="button" role="tab" aria-controls="section4" aria-selected="false">Հայտարարություններ</button>
        </li>
        <li class="nav-item nav_media_item" role="presentation">
          <button class="nav-link custom_list_group_action media_center_btn" id="section5-tab" data-bs-toggle="tab" data-bs-target="#section5" type="button" role="tab" aria-controls="section5" aria-selected="false">Հաջողված պատմություններ</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane container_section media_container_section fade show active" id="section1" role="tabpanel" aria-labelledby="section1-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Նորություններ</p>
                </div>
            </div>
            <div class="search_container">
                <form action="{{ route('media_search') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                        <input class="form-control w-25" id="date" name="fromDate" placeholder="MM/DD/YYY" type="date"/>
                        <input class="form-control w-25" id="date" name="toDate" placeholder="MM/DD/YYY" type="date" style="margin-left: 15px"/>
                        <button class="btn btn-success w-25" name="search" type="submit" style="margin-left: 15px">Search</button>
                    </div>
                </form>
            </div>
            <div class="d-flex flex-column directions_applications">
                <div class="row mb-5">
                    @foreach ($query as $value)
                        @if ($value->news_type == 'news')
                            <div class="col-2 mb-5">
                                <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                                    <img src="{{ asset('news/news.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body cooperation_body_bottom">
                                    <p class="card-text cooperation_text">{{ $value->title_am }}</p>
                                    <p class="bottom_date"><img src="{{ asset('img/calendar.png') }}" alt="pdf"> {{ $value->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="tab-pane container_section media_container_section fade" id="section2" role="tabpanel" aria-labelledby="section2-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Հարցազրույցներ և ելույթներ</p>
                </div>
            </div>
            <div class="search_container">
                <form action="{{ route('media_search') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                        <input class="form-control w-25" id="date" name="fromDate" placeholder="MM/DD/YYY" type="date"/>
                        <input class="form-control w-25" id="date" name="toDate" placeholder="MM/DD/YYY" type="date" style="margin-left: 15px"/>
                        <button class="btn btn-success w-25" name="search" type="submit" style="margin-left: 15px">Search</button>
                    </div>
                </form>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="row mb-5">
                @foreach ($query as $value)
                    @if ($value->news_type == 'interviews')
                        <div class="col-2 mb-5">
                            <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                                <img src="{{ asset('news/news.png') }}" class="card-img-top" alt="...">
                                <div class="card-body cooperation_body_bottom">
                                <p class="card-text cooperation_text">{{ $value->title_am }}</p>
                                <p class="bottom_date"><img src="{{ asset('img/calendar.png') }}" alt="pdf"> {{ $value->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        </div>
        <div class="tab-pane container_section media_container_section fade" id="section3" role="tabpanel" aria-labelledby="section3-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Տեսանյութեր</p>
                </div>
            </div>
            <div class="search_container">
                <form action="{{ route('media_search') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                        <input class="form-control w-25" id="date" name="fromDate" placeholder="MM/DD/YYY" type="date"/>
                        <input class="form-control w-25" id="date" name="toDate" placeholder="MM/DD/YYY" type="date" style="margin-left: 15px"/>
                        <button class="btn btn-success w-25" name="search" type="submit" style="margin-left: 15px">Search</button>
                    </div>
                </form>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="row mb-5">
                @foreach ($query as $value)
                    @if ($value->news_type == 'videos')
                        <div class="col-2 mb-5">
                            <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                                <img src="{{ asset('news/news.png') }}" class="card-img-top" alt="...">
                                <div class="card-body cooperation_body_bottom">
                                <p class="card-text cooperation_text">{{ $value->title_am }}</p>
                                <p class="bottom_date"><img src="{{ asset('img/calendar.png') }}" alt="pdf"> {{ $value->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        </div>
        <div class="tab-pane container_section media_container_section fade" id="section4" role="tabpanel" aria-labelledby="section4-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Հայտարարություններ</p>
                </div>
            </div>
            <div class="search_container">
                <form action="{{ route('media_search') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                        <input class="form-control w-25" id="date" name="fromDate" placeholder="MM/DD/YYY" type="date"/>
                        <input class="form-control w-25" id="date" name="toDate" placeholder="MM/DD/YYY" type="date" style="margin-left: 15px"/>
                        <button class="btn btn-success w-25" name="search" type="submit" style="margin-left: 15px">Search</button>
                    </div>
                </form>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="row mb-5">
                @foreach ($query as $value)
                    @if ($value->news_type == 'statements')
                        <div class="col-2 mb-5">
                            <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                                <img src="{{ asset('news/news.png') }}" class="card-img-top" alt="...">
                                <div class="card-body cooperation_body_bottom">
                                <p class="card-text cooperation_text">{{ $value->title_am }}</p>
                                <p class="bottom_date"><img src="{{ asset('img/calendar.png') }}" alt="pdf"> {{ $value->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        </div>
        <div class="tab-pane container_section media_container_section fade" id="section5" role="tabpanel" aria-labelledby="section5-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Հաջողված պատմություններ</p>
                </div>
            </div>
            <div class="search_container">
                {{-- <form action="{{ route('media_search') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                        <input class="form-control w-25" value="{{ now()->addDays(-7)->format('Y-m-d') }}" id="date" name="fromDate" placeholder="MM/DD/YYY" type="date"/>
                        <input class="form-control w-25" value="{{ now()->format('Y-m-d') }}" id="date" name="toDate" placeholder="MM/DD/YYY" type="date" style="margin-left: 15px"/>
                        <button class="btn btn-success w-25" name="search" type="submit" style="margin-left: 15px">Search</button>
                    </div>
                </form> --}}
                <form class="pa__top-sec" action="{{ route('media_search') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="pa__middle-range">
                      <div class="pa__middle-item"><input class="pa__middle-input text" type="text" name="search" placeholder="Search"></div>
                      <div class="pa__middle-item"><input class="pa__middle-input text" type="date" name="fromDate" placeholder="From" onchange="this.className=(this.value!=''?'has-value':'')" ></div>
                      <div class="pa__middle-item"> <input class="pa__middle-input text" type="date" name="toDate" placeholder="To" onchange="this.className=(this.value!=''?'has-value':'')" ></div>
                      <div class="pa__middle-btn"> <button class="btn-accent" name="submit" type="submit">Search</button></div>
                    </div>
                  </form>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="row mb-5">
                @foreach ($query as $value)
                    @if ($value->news_type == 'success_stories')
                        <div class="col-2 mb-5">
                            <div class="card course_card cooperation_card_bottom" style="width: 100%;">
                                <img src="{{ asset('news/news.png') }}" class="card-img-top" alt="...">
                                <div class="card-body cooperation_body_bottom">
                                <p class="card-text cooperation_text">{{ $value->title_am }}</p>
                                <p class="bottom_date"><img src="{{ asset('img/calendar.png') }}" alt="pdf"> {{ $value->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
      </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('button[data-bs-toggle="tab"]').on('show.bs.tab', function(e) {
            localStorage.setItem('activeTab', $(e.target).attr('data-bs-target'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if(activeTab){
            $('#myTab button[data-bs-target="' + activeTab + '"]').tab('show');
        }
    });
    </script>
@endsection
