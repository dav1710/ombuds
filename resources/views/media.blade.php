@extends('layouts.app')
@section('title')
    Media
@endsection

@section('content')
    <div class="scroll_header" id="media">
        <ul class="nav nav-tabs container d-flex flex-row justify-content-evenly scroll_nav media_center" id="myTab"
            role="tablist">
            <li class="nav-item nav_media_item" role="presentation">
                <button class="nav-link custom_list_group_action media_center_btn active" id="section1-tab"
                    data-bs-toggle="tab" data-bs-target="#section1" type="button" role="tab" aria-controls="section1"
                    aria-selected="true">Նորություններ</button>
            </li>
            <li class="nav-item nav_media_item" role="presentation">
                <button class="nav-link custom_list_group_action media_center_btn" id="section2-tab" data-bs-toggle="tab"
                    data-bs-target="#section2" type="button" role="tab" aria-controls="section2"
                    aria-selected="false">Հարցազրույցներ և ելույթներ</button>
            </li>
            <li class="nav-item nav_media_item" role="presentation">
                <button class="nav-link custom_list_group_action media_center_btn" id="section3-tab" data-bs-toggle="tab"
                    data-bs-target="#section3" type="button" role="tab" aria-controls="section3"
                    aria-selected="false">Տեսանյութեր</button>
            </li>
            <li class="nav-item nav_media_item" role="presentation">
                <button class="nav-link custom_list_group_action media_center_btn" id="section4-tab" data-bs-toggle="tab"
                    data-bs-target="#section4" type="button" role="tab" aria-controls="section4"
                    aria-selected="false">Հայտարարություններ</button>
            </li>
            <li class="nav-item nav_media_item" role="presentation">
                <button class="nav-link custom_list_group_action media_center_btn" id="section5-tab" data-bs-toggle="tab"
                    data-bs-target="#section5" type="button" role="tab" aria-controls="section5"
                    aria-selected="false">Հաջողված պատմություններ</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane container_section media_container_section fade show active" id="section1" role="tabpanel"
                aria-labelledby="section1-tab">
                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Նորություններ</p>
                    </div>
                </div>
                <div class="directions_applications">
                    <div class="news_search_block">
                        <div id="search-block" class="vertical-center">
                            <form action="" method="get" id="search-form">
                                @csrf
                                <a href="">
                                    <img src="{{ asset('img/search.png') }}">
                                </a>
                                <input type="text" class="" name="search" id="search-key"
                                    placeholder="{{ __('main.search') }}"
                                    onfocus="if (this.placeholder == '{{ __('main.search') }}') {this.placeholder = '';}"
                                    onblur="if (this.placeholder == '') {this.placeholder = '{{ __('main.search') }}';}">
                            </form>
                        </div>

                        <form action="search" class="news_search_form">
							@csrf
							<div class="news_search_form_block_1 d-flex">
								<img src="{{ asset('img/calendar_white.png') }}">
								<span>Archive</span>
							</div>

							<div class="news_search_form_block_2 d-flex">
								<input type="date" value="2000-01-01" name="date_start" id="date_start">
								<span>To</span>
								<input type="date" name="date_end" id="date_end">
							</div>

							<button type="submit">
								<img src="{{ asset('img/search.png') }}">
								<span>Search</span>
							</button>
						</form>

                    </div>

                    <div class="news-cards mb-5">
                        <a href=" ">
                            <div class="card news-card">
                                <img src="{{ asset('img/image40.png') }}" class="card-img-top news-card-img-top"
                                    alt="...">
                                <div class="card-body news-card-body">
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
            <div class="tab-pane container_section media_container_section fade" id="section2" role="tabpanel"
                aria-labelledby="section2-tab">
                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Հարցազրույցներ և ելույթներ</p>
                    </div>
                </div>
                <div class="directions_applications">
					<div class="news_search_block">
                        <div id="search-block" class="vertical-center">
                            <form action="" method="get" id="search-form">
                                @csrf
                                <a href="">
                                    <img src="{{ asset('img/search.png') }}">
                                </a>
                                <input type="text" class="" name="search" id="search-key"
                                    placeholder="{{ __('main.search') }}"
                                    onfocus="if (this.placeholder == '{{ __('main.search') }}') {this.placeholder = '';}"
                                    onblur="if (this.placeholder == '') {this.placeholder = '{{ __('main.search') }}';}">
                            </form>
                        </div>

                        <form action="search" class="news_search_form">
							@csrf
							<div class="news_search_form_block_1 d-flex">
								<img src="{{ asset('img/calendar_white.png') }}">
								<span>Archive</span>
							</div>

							<div class="news_search_form_block_2 d-flex">
								<input type="date" value="2000-01-01" name="date_start" id="date_start">
								<span>To</span>
								<input type="date" name="date_end" id="date_end">
							</div>

							<button type="submit">
								<img src="{{ asset('img/search.png') }}">
								<span>Search</span>
							</button>
						</form>

                    </div>
                    <div class="news-cards mb-5">
                        <a href=" ">
                            <div class="card news-card">
                                <img src="{{ asset('img/image40.png') }}" class="card-img-top news-card-img-top"
                                    alt="...">
                                <div class="card-body news-card-body">
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
            <div class="tab-pane container_section media_container_section fade" id="section3" role="tabpanel"
                aria-labelledby="section3-tab">
                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Տեսանյութեր</p>
                    </div>
                </div>
                <div class="directions_applications">
					<div class="news_search_block">
                        <div id="search-block" class="vertical-center">
                            <form action="" method="get" id="search-form">
                                @csrf
                                <a href="">
                                    <img src="{{ asset('img/search.png') }}">
                                </a>
                                <input type="text" class="" name="search" id="search-key"
                                    placeholder="{{ __('main.search') }}"
                                    onfocus="if (this.placeholder == '{{ __('main.search') }}') {this.placeholder = '';}"
                                    onblur="if (this.placeholder == '') {this.placeholder = '{{ __('main.search') }}';}">
                            </form>
                        </div>

                        <form action="search" class="news_search_form">
							@csrf
							<div class="news_search_form_block_1 d-flex">
								<img src="{{ asset('img/calendar_white.png') }}">
								<span>Archive</span>
							</div>

							<div class="news_search_form_block_2 d-flex">
								<input type="date" value="2000-01-01" name="date_start" id="date_start">
								<span>To</span>
								<input type="date" name="date_end" id="date_end">
							</div>

							<button type="submit">
								<img src="{{ asset('img/search.png') }}">
								<span>Search</span>
							</button>
						</form>

                    </div>
                    <div class="news-cards mb-5">
                        <a href=" ">
                            <div class="card news-card">
                                <img src="{{ asset('img/image40.png') }}" class="card-img-top news-card-img-top"
                                    alt="...">
                                <div class="card-body news-card-body">
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
            <div class="tab-pane container_section media_container_section fade" id="section4" role="tabpanel"
                aria-labelledby="section4-tab">
                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Հայտարարություններ</p>
                    </div>
                </div>
                <div class="directions_applications">
					<div class="news_search_block">
                        <div id="search-block" class="vertical-center">
                            <form action="" method="get" id="search-form">
                                @csrf
                                <a href="">
                                    <img src="{{ asset('img/search.png') }}">
                                </a>
                                <input type="text" class="" name="search" id="search-key"
                                    placeholder="{{ __('main.search') }}"
                                    onfocus="if (this.placeholder == '{{ __('main.search') }}') {this.placeholder = '';}"
                                    onblur="if (this.placeholder == '') {this.placeholder = '{{ __('main.search') }}';}">
                            </form>
                        </div>

                        <form action="search" class="news_search_form">
							@csrf
							<div class="news_search_form_block_1 d-flex">
								<img src="{{ asset('img/calendar_white.png') }}">
								<span>Archive</span>
							</div>

							<div class="news_search_form_block_2 d-flex">
								<input type="date" value="2000-01-01" name="date_start" id="date_start">
								<span>To</span>
								<input type="date" name="date_end" id="date_end">
							</div>

							<button type="submit">
								<img src="{{ asset('img/search.png') }}">
								<span>Search</span>
							</button>
						</form>

                    </div>
                    <div class="news-cards mb-5">
                        <a href=" ">
                            <div class="card news-card">
                                <img src="{{ asset('img/image40.png') }}" class="card-img-top news-card-img-top"
                                    alt="...">
                                <div class="card-body news-card-body">
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
            <div class="tab-pane container_section media_container_section fade" id="section5" role="tabpanel"
                aria-labelledby="section5-tab">
                <div class="d-flex align-items-baseline contact_us_action">
                    <div class="line_2"></div>
                    <div class="contact_us_action_title">
                        <p>Հաջողված պատմություններ</p>
                    </div>
                </div>
                <div class="directions_applications">
					<div class="news_search_block">
                        <div id="search-block" class="vertical-center">
                            <form action="" method="get" id="search-form">
                                @csrf
                                <a href="">
                                    <img src="{{ asset('img/search.png') }}">
                                </a>
                                <input type="text" class="" name="search" id="search-key"
                                    placeholder="{{ __('main.search') }}"
                                    onfocus="if (this.placeholder == '{{ __('main.search') }}') {this.placeholder = '';}"
                                    onblur="if (this.placeholder == '') {this.placeholder = '{{ __('main.search') }}';}">
                            </form>
                        </div>

                        <form action="search" class="news_search_form">
							@csrf
							<div class="news_search_form_block_1 d-flex">
								<img src="{{ asset('img/calendar_white.png') }}">
								<span>Archive</span>
							</div>

							<div class="news_search_form_block_2 d-flex">
								<input type="date" value="2000-01-01" name="date_start" id="date_start">
								<span>To</span>
								<input type="date" name="date_end" id="date_end">
							</div>

							<button type="submit">
								<img src="{{ asset('img/search.png') }}">
								<span>Search</span>
							</button>
						</form>

                    </div>
                    <div class="news-cards mb-5">
                        <a href=" ">
                            <div class="card news-card">
                                <img src="{{ asset('img/image40.png') }}" class="card-img-top news-card-img-top"
                                    alt="...">
                                <div class="card-body news-card-body">
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
                                    <p class="card-text news-card-text">Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը
                                        մասնակցել է «2020թ. 44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած
                                        անձանց և նրանց ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի
                                        ներկայացմանը: Մարդու իրավունքների պաշտպան Քրիստիննե Գրիգորյանը մասնակցել է «2020թ.
                                        44-օրյա պատերազմական գործողությունների ընթացքում անհայտ կորած անձանց և նրանց
                                        ընտանիքների անդամների իրավունքների վիճակը» խորագրով զեկույցի ներկայացմանը</p>
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
        </div>
    </div>
@endsection
