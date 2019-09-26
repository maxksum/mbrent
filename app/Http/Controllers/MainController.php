<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Car, Review};
use App\Request as RequestModel;

class MainController extends Controller
{
    public function getMainPage() {
      $reviews = Review::where('condition', 1)->orderBy('id', 'desc')->get();

      $cars = Car::orderBy('id', 'desc')->get();
      $data = [];
      $data['mainpage'] = true;
      $data['cars'] = $cars;
      $data['reviews'] = $reviews;

      return view('pages.home', $data);
    }

    public function getAboutPage() {
      return view('pages.about');
    }

    public function getConditionsPage() {
      return view('pages.conditions');
    }

    public function getAutoPage(Request $request) {
      $car = Car::find($request->id);
      $data = [];
      $data['car'] = $car;

      return view('pages.auto', $data);
    }

    public function addRequest(Request $request) {
      $req = new RequestModel();
      $req->name = $request->name;
      $req->number = $request->number;
      $req->comment = $request->comment;
      $req->car_id = $request->car;
      $req->condition = 0;
      $req->save();

      return redirect()->to("/")->with('status', 'Done');
    }

    public function addReview(Request $request) {
      $req = new Review();
      $req->name = $request->name;
      $req->mail= $request->email;
      $req->text = $request->message;
      $req->condition = 0;
      $req->save();

      return redirect()->to("/about")->with('status', 'Done');
    }

}
