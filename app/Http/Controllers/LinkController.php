<?php

namespace App\Http\Controllers;

use App\Links;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    public function listLink()
    {
        //$links = Links::paginate(3);
        $links = Links::all(['name','slug']);
        return view('link/listLink')->with('links', $links);
    }

    public function showLink($slug)
    {
        $link = Links::where('slug', '=', $slug)->first();
        return view('link/showLink')->with('link', $link);
    }

    public function addLink()
    {
        return view('link/addLink');
    }

    public function editLink(Request $request, $slug)
    {
        $link = Links::where('slug', '=', $slug)->first();
        if($request->isMethod('post')){

            $parameters = $request->except(['_token']);
            $date = new \DateTime(null);
            $link->name = $parameters['name'];
            $link->link = $parameters['link'];
            $link->description = $parameters['description'];
            $link->slug = $date->format('dmYhis').'-'.Str::slug($parameters['name']);
            $link->save();

            return redirect()->route('listLink')->with('success', 'Item was update with success');
        }
        return view('link/addLink')->with('link', $link);
    }

    public function deleteLink($slug)
    {
        $link = Links::where('slug', '=', $slug);
        $link->delete();

        return redirect()->route('listLink')->with('success', 'Item was remove with success');
    }

    public function createLink(Request $request)
    {
        $parameters = $request->except(['_token']);
        $parameters['slug'] = Str::slug($parameters['name']);
        $date = new \DateTime(null);

        $link = new Links();

        $link->name = $parameters['name'];
        $link->link = $parameters['link'];
        $link->description = $parameters['description'];
        $link->slug = $date->format('dmYhis').'-'.Str::slug($parameters['name']);

        $link->save();

        return redirect()->route('listLink')->with('success', 'Item was added !');
    }
}