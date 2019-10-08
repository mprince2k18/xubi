<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Category;
use Carbon\Carbon;
use Alert;
use Image;

class PortfolioController extends Controller
{


    function index()
    {
      $categories         = Category::all();
      $portfolios         = Portfolio::latest()->paginate(5);
      $trashed_portfolios = Portfolio::onlyTrashed()->paginate(5);
      return view('dashboard.portfolio.index',compact('categories','portfolios','trashed_portfolios'));
    }

// create

    function create(Request $request)
    {
      // Portfolio::insert($request->except('_token'));
      $last_inserted_id = Portfolio::insertGetId([
        'portfolio_name'         =>$request->portfolio_name,
        'portfolio_category_id'  =>$request->portfolio_category_id,
        'portfolio_image'        =>$request->portfolio_image,
        'created_at'             =>Carbon::now()
      ]);


      if ($request->hasFile('portfolio_image')) {
        $photo_upload     =  $request ->portfolio_image;
        $photo_extension  =  $photo_upload ->getClientOriginalExtension();
        $photo_name       =  $last_inserted_id . "." . $photo_extension;
        Image::make($photo_upload)->resize(380,355)->save(base_path('public/uploads/portfolio/'.$photo_name),100);
        Portfolio::find($last_inserted_id)->update([
        'portfolio_image'          => $photo_name,
      ]);
      }


      Alert::toast('Portfolio Added Successfully','success');

      return back();
    }

    // edit

    function edit($portfolio_id)
    {
      $categories = Category::all();
      $single_portfolio_edit = Portfolio::find($portfolio_id);
      return view('dashboard.portfolio.edit',compact('categories','single_portfolio_edit'));
    }

    // update

    function update(Request $request)
    {
      if($request->hasFile('portfolio_image')){
        if(Portfolio::find($request->portfolio_id)->portfolio_image=='default.png'){
          $photo_upload     = $request->portfolio_image;
          $photo_extension  =  $photo_upload->getClientOriginalExtension();
          $photo_name       =  $request->portfolio_image . "." . $photo_extension;
          Image::make($photo_upload)->resize(380,355)->save(base_path('public/uploads/portfolio/'.$photo_name),100);
          Portfolio::find($request->portfolio_id)->update([
          'portfolio_image'          => $photo_name,
        ]);
        }

        else {
          //delete photo
          $delete_photo=Portfolio::find($request->portfolio_id)->portfolio_image;
          unlink(base_path('public/uploads/portfolio/'.$delete_photo));
          //update photo
          $photo_upload     = $request->portfolio_image;
          $photo_extension  =  $photo_upload->getClientOriginalExtension();
          $photo_name       =  $request->portfolio_id . "." . $photo_extension;
          Image::make($photo_upload)->resize(380,355)->save(base_path('public/uploads/portfolio/'.$photo_name),100);
          Portfolio::find($request->portfolio_id)->update([
          'portfolio_image'          => $photo_name,
        ]);
        }
      }

      Portfolio::find($request->portfolio_id)->update([
        'portfolio_name'        =>$request->portfolio_name,
        'portfolio_category_id' =>$request->portfolio_category_id,
        'updated_at'            =>Carbon::now(),

      ]);


      Alert::success('Updated', 'Portfolio Updated Succesfully');
      return back()->with('success', 'Portfolio Updated Succesfully');


    }



    // delete

    function delete($portfolio_id)
    {
      Portfolio::findOrFail($portfolio_id)->delete();

      Alert::success('Deleted', 'Portfolio Deleted Succesfully');
      return back()->with('success', 'Portfolio Deleted Succesfully');
    }


    // restore Products
      function restore($portfolio_id){
      Portfolio::onlyTrashed()->where('id',$portfolio_id)->restore();

      Alert::success('Restore', 'Portfolio Restored Succesfully');
      return back()->with('Restore','Restored Successfully');
    }



    // END


}
