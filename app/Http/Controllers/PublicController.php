<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\developInte;
use App\Models\event;
use App\Models\importantLink;
use App\Models\jobApplication;
use App\Models\Menu;
use App\Models\mission;
use App\Models\news;
use App\Models\Notice;
use App\Models\page;
use App\Models\photo_gallery;
use App\Models\project;
use App\Models\service;
use App\Models\slider;
use App\Models\slogan;
use App\Models\videoGallery;
use App\Models\websiteSetting;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;

class PublicController extends Controller
{
    public function index()
    {

        $slider = slider::where('status', 1)->orderBy('priority', 'ASC')->get();
        $services = service::where('status', 1)->limit(3)->get();
        $notice = Notice::where('status', 1)->limit(12)->orderBy('priority', 'ASC')->get();
        $slogan = slogan::where('status', 1)->limit(1)->get();
        $card = card::where('status', 1)->limit(2)->orderBy('priority', 'ASC')->get();
        $news = news::where('status', 1)->limit(4)->orderBy('priority', 'ASC')->get();
        $event = event::where('status', 1)->limit(3)->orderBy('priority', 'ASC')->get();
        $imlink = importantLink::where('status', 1)->limit(15)->orderBy('priority', 'ASC')->get();
        $photoin = photo_gallery::where('status', 1)->limit(3)->orderBy('priority', 'ASC')->get();
        $video = videoGallery::where('status', 1)->limit(3)->orderBy('priority', 'ASC')->get();


        return view('publice_page.index', compact('slider', 'services', 'notice', 'slogan', 'card', 'news', 'imlink', 'event','photoin','video'));
    }





    public function all_notice($id)
    {
        $notice = Notice::find($id);
        //  $all_notice = Notice::where('id', '!=', $notice->id)->where('status', 1)->get();

        $all_notice = Notice::where([['id', '!=', $notice->id],['status', 1]])->get();
        return view('publice_page.all_notice',compact('notice','all_notice'));
    }




    public function singaleEvent($id)
    {
        $event = event::find($id);

        return view('publice_page.event_page',compact('event'));

    }


    public function singalePhoto($id)
    {
        $result = photo_gallery::find($id);

        return view('publice_page.photo_page',compact('result'));

    }

    public function singaleCard($id)
    {
        $result = card::find($id);

        return view('publice_page.card_page',compact('result'));

    }



    public function singaleVideo($id)
    {
        $result = videoGallery::find($id);

        return view('publice_page.video_page',compact('result'));

    }

    public function singaleNews($id)
    {
        $news = news::find($id);

        return view('publice_page.singaleNews',compact('news'));

    }

    public function photo_gallery()
    {



        $photoga = photo_gallery::where('status', 1)->get();

        return view('publice_page.photo_gallery',compact('photoga'));
    }

    public function development()
    {
        $devlopment = developInte::where('status', 1)->get();
        return view('publice_page.development_intervention',compact('devlopment'));
    }

    public function mission()
    {
        $devlopment = mission::where('status', 1)->get();
        return view('publice_page.mission_vision',compact('devlopment'));
    }

    public function video_gallery()
    {

        $videoga = videoGallery::where('status', 1)->get();

        return view('publice_page.video_gallery',compact('videoga'));


    }






    public function ongoing()
    {


        $jobApp = project::where('status', 1)->get();
        return view('publice_page.ongoing_project',compact('jobApp'));
    }

    public function complate()
    {
        return view('publice_page.complate_project');
    }


    public function subfolder()
    {
        return view('publice_page.subfolder-img');
    }


    public function educations()
    {
        return view('publice_page.educations');
    }

    public function earlyChildhood()
    {
        return view('publice_page.earlyChildhoodCareDevelopment');
    }


    public function job_applicaton()
    {
        $jobApp = jobApplication::where('status', 1)->get();
        return view('publice_page.job_applicaton',compact('jobApp'));
    }




    public function contact()
    {
        return view('publice_page.contact');
    }

    public function pages($slug){


      $slg = Menu::where('slug',$slug)->first();

      $id = $slg->id;



        $page = page::find($id);

        if (empty($page)){
            return 'plase crate a page';
        }

        return view('publice_page.demo',compact('page','slg'));



    }

}
