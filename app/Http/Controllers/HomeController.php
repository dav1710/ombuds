<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function contactUs()
    {
        return view('contact_us');
    }
    public function getContent(Request $request)
    {
        switch ($request->type) {
            case 'home':
                return $content =   '<div id="home-data">
                                        <div id="official-info-block">
                                            <div class="title">
                                                <span class="title-stick"></span>
                                                <h5>' . __('main.official_info') . '</h5>
                                            </div>
                                            <div class="links-block">
                                                <a href="" class="link-item">
                                                    <img src="img/home/official_info.png">
                                                </a>
                                                <a href="" class="link-item">
                                                    <img src="img/home/official_info.png">
                                                </a>
                                                <a href="" class="link-item">
                                                    <img src="img/home/official_info.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div id="accidents-block">
                                            <div class="title">
                                                <span class="title-stick"></span>
                                                <h5>' . __('main.accidents') . '</h5>
                                            </div>
                                            <div class="links-block">
                                                <a href="" class="link-item">
                                                    <img src="img/home/accident.png">
                                                </a>
                                                <a href="" class="link-item">
                                                    <img src="img/home/accident.png">
                                                </a>
                                                <a href="" class="link-item">
                                                    <img src="img/home/accident.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="double-block first-double-block">
                                            <div class="title">
                                                <span class="title-stick"></span>
                                                <h5>' . __('main.weather') . '</h5>
                                            </div>
                                            <div class="links-block">
                                                <a href="" class="link-item">
                                                    <img src="img/home/double.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="double-block">
                                            <div class="title">
                                                <span class="title-stick"></span>
                                                <h5>' . __('main.roads') . '</h5>
                                            </div>
                                            <div class="links-block">
                                                <a href="" class="link-item">
                                                    <img src="img/home/double.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div id="rests-block">
                                            <div class="rest-item">
                                                <img src="img/rests/1.png">
                                            </div>
                                            <div class="rest-item">
                                                <img src="img/rests/2.png">
                                            </div>
                                            <div class="rest-item">
                                                <img src="img/rests/3.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="home-links">
                                        <div class="link-item">
                                            <div class="title">
                                                <span class="title-stick"></span>
                                                <h5>' . __('main.mes_minister') . '</h5>
                                            </div>
                                            <div class="links-block">
                                                <a href="" class="link-item">
                                                    <img src="img/home/minister.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="link-item">
                                            <div class="title">
                                                <span class="title-stick"></span>
                                                <h5>' . __('main.regions') . '</h5>
                                            </div>
                                            <div class="links-block">
                                                <a href="" class="link-item">
                                                    <img src="img/home/regions.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="link-item">
                                            <div class="title">
                                                <span class="title-stick"></span>
                                                <h5>' . __('main.data') . '</h5>
                                            </div>
                                            <div class="links-block">
                                                <a href="" class="link-item">
                                                    <img src="img/home/data.png" style="height: 60px;">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="link-item">
                                            <div class="title">
                                                <span class="title-stick"></span>
                                                <h5>' . __('main.videos') . '</h5>
                                            </div>
                                            <div class="links-block">
                                                <a href="" class="link-item">
                                                    <img src="img/home/variant.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="link-item">
                                            <div class="title">
                                                <span class="title-stick"></span>
                                                <h5>' . __('main.program') . '</h5>
                                            </div>
                                            <div class="links-block">
                                                <a href="" class="link-item">
                                                    <img src="img/home/variant.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="link-item">
                                            <div class="title">
                                                <span class="title-stick"></span>
                                                <h5>' . __('main.newspaper') . '</h5>
                                            </div>
                                            <div class="links-block">
                                                <a href="" class="link-item">
                                                    <img src="img/home/variant.png">
                                                </a>
                                            </div>
                                        </div>
                                    </div>';
                break;
            case 'contact_us':
                return $content = '';
                break;
            case 'leaflets':
                return $content =   '<div class="title">
                                        <span class="title-stick"></span>
                                        <h5>' . __('main.leaflets') . '</h5>
                                    </div>
                                    <div id="content-data-block">
                                        <div class="content-data-item">
                                            <a href="">
                                                <img src="img/icons/pdf.png">
                                                <span>ՍԱՀՄԱՆԱԴՐԱԿԱՆ ԲԱՐԵՓՈԽՈՒՄՆԵՐԻ ՈՒՂՂՈՒԹՅՈՒՆՆԵՐԻ ՎԵՐԱԲԵՐՅԱԼ ԱՌԱՋԱՐԿՆԵՐԻ ՁԵՎԱՉԱՓ - (156 Կբ)</span>
                                            </a>
                                        </div>
                                        <div class="content-data-item">
                                            <a href="">
                                                <img src="img/icons/pdf.png">
                                                <span>ՍԱՀՄԱՆԱԴՐԱԿԱՆ ԲԱՐԵՓՈԽՈՒՄՆԵՐԻ ՈՒՂՂՈՒԹՅՈՒՆՆԵՐԻ ՎԵՐԱԲԵՐՅԱԼ ԱՌԱՋԱՐԿՆԵՐԻ ՁԵՎԱՉԱՓ - (156 Կբ)</span>
                                            </a>
                                        </div>
                                        <div class="content-data-item">
                                            <a href="">
                                                <img src="img/icons/pdf.png">
                                                <span>ՍԱՀՄԱՆԱԴՐԱԿԱՆ ԲԱՐԵՓՈԽՈՒՄՆԵՐԻ ՈՒՂՂՈՒԹՅՈՒՆՆԵՐԻ ՎԵՐԱԲԵՐՅԱԼ ԱՌԱՋԱՐԿՆԵՐԻ ՁԵՎԱՉԱՓ - (156 Կբ)</span>
                                            </a>
                                        </div>
                                        <div class="content-data-item">
                                            <a href="">
                                                <img src="img/icons/pdf.png">
                                                <span>ՍԱՀՄԱՆԱԴՐԱԿԱՆ ԲԱՐԵՓՈԽՈՒՄՆԵՐԻ ՈՒՂՂՈՒԹՅՈՒՆՆԵՐԻ ՎԵՐԱԲԵՐՅԱԼ ԱՌԱՋԱՐԿՆԵՐԻ ՁԵՎԱՉԱՓ - (156 Կբ)</span>
                                            </a>
                                        </div>
                                        <div class="content-data-item">
                                            <a href="">
                                                <img src="img/icons/pdf.png">
                                                <span>ՍԱՀՄԱՆԱԴՐԱԿԱՆ ԲԱՐԵՓՈԽՈՒՄՆԵՐԻ ՈՒՂՂՈՒԹՅՈՒՆՆԵՐԻ ՎԵՐԱԲԵՐՅԱԼ ԱՌԱՋԱՐԿՆԵՐԻ ՁԵՎԱՉԱՓ - (156 Կբ)</span>
                                            </a>
                                        </div>
                                        <div class="content-data-item">
                                            <a href="">
                                                <img src="img/icons/pdf.png">
                                                <span>ՍԱՀՄԱՆԱԴՐԱԿԱՆ ԲԱՐԵՓՈԽՈՒՄՆԵՐԻ ՈՒՂՂՈՒԹՅՈՒՆՆԵՐԻ ՎԵՐԱԲԵՐՅԱԼ ԱՌԱՋԱՐԿՆԵՐԻ ՁԵՎԱՉԱՓ - (156 Կբ)</span>
                                            </a>
                                        </div>
                                        <div class="content-data-item">
                                            <a href="">
                                                <img src="img/icons/pdf.png">
                                                <span>ՍԱՀՄԱՆԱԴՐԱԿԱՆ ԲԱՐԵՓՈԽՈՒՄՆԵՐԻ ՈՒՂՂՈՒԹՅՈՒՆՆԵՐԻ ՎԵՐԱԲԵՐՅԱԼ ԱՌԱՋԱՐԿՆԵՐԻ ՁԵՎԱՉԱՓ - (156 Կբ)</span>
                                            </a>
                                        </div>
                                    </div>';
                break;
            case 'links':
                $links = Link::all();
                $content =  '<div class="title">
                                <span class="title-stick"></span>
                                <h5>' . __('main.useful_links') . '</h5>
                            </div>
                            <div id="links-data-block">';

                            foreach ($links as $key => $link) {
                                $content .= '<div class="links-data-item">
                                                <h5>' . $link->{ 'title_' . app()->getLocale() } . '</h5>
                                                <a href="' . $link->link . '" target="_blank">' .
                                                    $link->name
                                                . '</a>
                                            </div>';
                            }

                $content .= '</div>';
                return $content;
                break;
            default:

        }
    }
}
