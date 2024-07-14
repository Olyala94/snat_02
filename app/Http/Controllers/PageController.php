<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function iceLaser()
    {
        return view('pages.icelaser');
    }

    public function manicurePedicure()
    {
        return view('pages.manicurepedicure');
    }

    public function gelPolish()
    {
        return view('pages.gelpolish');
    }

    public function prostheticNails()
    {
        return view('pages.prostheticnails');
    }

    public function nailArt()
    {
        return view('pages.nailart');
    }

    public function eyelashExtensions()
    {
        return view('pages.eyelashextensions');
    }

    public function eyelashLifting()
    {
        return view('pages.eyelashlifting');
    }

    public function deepliner()
    {
        return view('pages.deepliner');
    }

    public function eyebrowLamination()
    {
        return view('pages.eyebrowlamination');
    }

    public function microblading()
    {
        return view('pages.microblading');
    }

    public function shugaring()
    {
        return view('pages.shugaring');
    }

    public function skinCare()
    {
        return view('pages.skincare');
    }

    public function celluliteMassage()
    {
        return view('pages.cellulitemassage');
    }

    public function rollShape()
    {
        return view('pages.rollshape');
    }

    public function lipColoring()
    {
        return view('pages.lipcoloring');
    }

    public function keratinCare()
    {
        return view('pages.keratincare');
    }

    public function perma()
    {
        return view('pages.perma');
    }

    public function brazilianBlowDry()
    {
        return view('pages.brazilianblowdry');
    }

    public function highlight()
    {
        return view('pages.highlight');
    }

    public function hairDye()
    {
        return view('pages.hairdye');
    }

    public function hairDipDye()
    {
        return view('pages.hairdipdye');
    }

    public function hairCut()
    {
        return view('pages.haircut');
    }

    public function hairExtension()
    {
        return view('pages.hairextension');
    }
    public function bridalHair()
    {
        return view('pages.bridalhair');
    }
    public function policies()
    {
        return view('pages.policies');
    }
}
