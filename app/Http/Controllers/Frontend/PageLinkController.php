<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class PageLinkController extends Controller
{
    
    public function about(){
        return view('frontend.pages.aboutus.aboutus');
    }



    public function ourTeam(){
        return view('frontend.pages.ourTeam.ourTeam');
    }
    public function ourService(){
            return view('frontend.pages.ourService.ourService');
        }
    public function remortMonitoring(){
            return view('frontend.pages.ourService.remortMonitoring');
        }
    public function directSupport(){
            return view('frontend.pages.ourService.directSupport');
        }
    public function emergencyResponse(){
            return view('frontend.pages.ourService.emergencyResponse');
        }
    public function campusAmbassador(){
            return view('frontend.pages.campusAmbass.campusAmbass');
        } 
    public function imageGallery(){
            return view('frontend.pages.newsBlog.imageGallery');
        }
    public function quiz(){
            return view('frontend.pages.quiz.quiz');
        }
    public function videoGallery(){
            return view('frontend.pages.newsBlog.videoGallery');
        }


    public function testPage(){
        return view('frontend.pages.testPage');
    }    
}