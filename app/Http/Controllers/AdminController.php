<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Review, Client, Car, Service, Order};
use App\Request as RequestModel;

use DB;

class AdminController extends Controller
{
    public function getAdminDashbordPage(Request $request) {
      $requestscount = RequestModel::where('condition', 0)->count();
      $reviewscount = Review::where('condition', 0)->count();
      $cars = Car::all();
      $date = \Carbon\Carbon::now();
      $firstdate = $date->format('F');
      $seconddate = $date->subMonth()->format('F');
      $thirddate = $date->subMonth()->format('F');
      foreach($cars as $car) {
        $orders = Order::where('condition', 1)->where('car_id', $car->id)->orderBy('id', 'desc')->get();
        $services = Service::where('car_id', $car->id)->get();
        $first = 0;
        $second = 0;
        $third = 0;
        foreach($orders as $order) {
          if ($order->created_at->format('F') == $firstdate) {
            $first += $order->sum;
          }
          if ($order->created_at->format('F') == $seconddate) {
            $second += $order->sum;
          }
          if ($order->created_at->format('F') == $thirddate) {
            $third += $order->sum;
          }
        }
        foreach($services as $service) {
          if ($service->created_at->format('F') == $firstdate) {
            $first -= $service->sum;
          }
          if ($order->created_at->format('F') == $seconddate) {
            $second -= $order->sum;
          }
          if ($order->created_at->format('F') == $thirddate) {
            $third -= $order->sum;
          }
        }
        $car->first = $first;
        $car->second = $second;
        $car->third = $third;
      }
      //$test = RequestModel::find(3);
      //$testtwo = $test->created_at->format('F');
      $data = [];
      $data['reviewscount'] = $reviewscount;
      $data['requestscount'] = $requestscount;
      $data['cars'] = $cars;
      $data['first'] = $firstdate;
      $data['second'] = $seconddate;
      $data['third'] = $thirddate;

      return view('pages.admin.dashbord', $data);
    }

    public function getAdminClients(Request $request) {
      if (isset($request->search)) {
        if ($request->search !== "") {
          $clients = Client::where('name','like', '%' . $request->search . '%')->orWhere('surname', 'like', '%' . $request->search . '%')->orWhere('number', 'like', '%' . $request->search . '%')->orderBy('id', 'desc')->get();
        }
      } else {
        $clients = Client::orderBy('id', 'desc')->get();
      }
      $data = [];
      $data['clients'] = $clients;

      if (isset($request->edit)) {
        $data['edit'] = $request->edit;
      } else {
        $data['edit'] = 0;
      }

      if (isset($request->search)) {
        if ($request->search !== "") {
          $data['searchquery'] = $request->search;
        }
      }

      return view('pages.admin.clients', $data);
    }

    public function getAdminCarsPage(Request $request) {
      $cars = Car::orderBy('id', 'desc')->get();
      $data = [];
      $data['cars'] = $cars;

      return view('pages.admin.cars', $data);
    }

    public function getAdminCarPage(Request $request) {
      $car = Car::find($request->id);
      $services = Service::where('car_id', $car->id)->orderBy('id', 'desc')->get();
      $orders = Order::where('car_id', $car->id)->orderBy('id', 'desc')->get();

      foreach($orders as $order) {
        $order->clientinfo = Client::where('id', $order->client_id)->get();
        $order->date = \Carbon\Carbon::parse($order->created_at)->format('d.m.Y');
      }

      foreach($services as $service) {
        $service->date = \Carbon\Carbon::parse($service->created_at)->format('d.m.Y');
      }

      $data = [];
      $data['orders'] = $orders;
      $data['services'] = $services;
      $data['car'] = $car;

      return view('pages.admin.car', $data);
    }

    public function acceptRequest(Request $request) {
      $req = RequestModel::find($request->id);
      $req->condition = 1;
      $req->save();

      return redirect()->to("/admin/requests");
    }

    public function getAdminRequestsPage(Request $request) {
      $requests = RequestModel::orderBy('id', 'desc')->get();

      foreach($requests as $request) {
        $request->carinfo = Car::where('id', $request->car_id)->get();
        $request->date = \Carbon\Carbon::parse($request->created_at)->format('d.m.Y H:i');
      }

      $data = [];
      $data['requests'] = $requests;

      return view('pages.admin.requests', $data);
    }

    public function getAdminReviewsPage(Request $request) {
      $reviews = Review::orderBy('id', 'desc')->get();
      $data = [];
      $data['reviews'] = $reviews;

      return view('pages.admin.reviews', $data);
    }

    public function getAdminOrdersPage(Request $request) {
      $orders = Order::orderBy('id', 'desc')->get();

      foreach($orders as $order) {
        $order->clientinfo = Client::where('id', $order->client_id)->get();
        $order->carinfo = Car::where('id', $order->car_id)->get();
        $order->date = \Carbon\Carbon::parse($order->created_at)->format('d.m.Y');
      }

      $data = [];
      $data['orders'] = $orders;

      return view('pages.admin.orders', $data);
    }

    public function createOrder(Request $request) {
      if (isset($request->createorder)) {
        if ($request->createorder == true) {
          $client = Client::where('number', $request->number)->where('surname', $request->surname)->first();
          $car = Car::where('id', $request->selectedcar)->first();
          $neworder = new Order();
          $neworder->car_id = $request->selectedcar;
          $neworder->amount = $request->amount;
          $neworder->sum = $request->amount * $car->cost;
          $neworder->condition = 0;

          if (empty($client)) {
              $newclient = new Client();
              $newclient->name = $request->name;
              $newclient->surname = $request->surname;
              $newclient->mail = $request->email;
              $newclient->number = $request->number;
              $newclient->save();
              $neworder->client_id = $newclient->id;
          } else {
              $neworder->client_id = $client->id;
          }
          $neworder->save();
          return redirect()->to("/admin/orders");
        }
      } else {
        $cars = Car::all();
        $data = [];
        $data['cars'] = $cars;

        return view('pages.admin.create', $data);
      }


    }

    public function createService(Request $request) {
      if (isset($request->createservice)) {
        if ($request->createservice == true) {
          $service = new Service();
          $service->car_id = $request->selectedcar;
          $service->sum = $request->sum;
          $service->mileage = $request->mileage;
          $service->description = $request->desc;
          $service->save();

          return redirect()->to("/admin");
        }
      } else {
        $cars = Car::all();
        $data = [];
        $data['cars'] = $cars;
        return view('pages.admin.service', $data);
      }

    }

    public function confirmReview(Request $request) {
      $review = Review::find($request->id);
      $review->condition = 1;
      $review->save();

      return redirect()->to("/admin/reviews");
    }

    public function deleteReview(Request $request) {
      $review = Review::find($request->id);
      $review->delete();

      return redirect()->to("/admin/reviews");
    }

    public function saveComment(Request $request) {
      $client = Client::find($request->id);
      $client->comment = $request->comment;
      $client->save();
    }

    public function closeOrder(Request $request) {
      $order = Order::find($request->id);
      $order->condition = 1;
      $order->save();

      return redirect()->to("/admin/orders");
    }
}
