<?php
/**
 * Created by PhpStorm.
 * User: Nick
 * Date: 10.04.2020
 * Time: 1:45
 */

namespace Mage2\Ecommerce\Http\Controllers;


use Illuminate\Http\Request;
use Mage2\Ecommerce\Models\Database\Callback;
use Mage2\Ecommerce\Models\Database\Configuration;
use Mage2\Ecommerce\Models\Database\Page;

class ContactController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', '=', 'kontakty')->first();

        if($page->meta_title != 'null') {
            $meta_title = $page->meta_title;
        }
        else{
            $meta_title = Configuration::getConfiguration('general_site_title');
        }
        if($page->meta_description != 'null') {
            $meta_description = $page->meta_description;
        }
        else{
            $meta_description = Configuration::getConfiguration('general_site_description');
        }
//
        return view('page.contact')
            ->with('meta_title', $meta_title)
            ->with('meta_description', $meta_description)
            ->with('page', $page);
        //->withHeaders(['pragma' => 'public', 'Cache-Control' => 'public, max-age=3600'])
    }

    public function create(Request $request){
        //echo 'works';
//        echo $request;
        return view('modal.callback_form');
    }

    public function store(Request $request){
    //    echo 'works';
        $admin_user_id = '1';

        $contact = new Callback();

        $contact->name = $request['Name'];

        $contact->phone = $request['Phone'];

        $contact->admin_user_id = $admin_user_id;

        $contact->save();

//        $flight = Callback::firstOrCreate(
//            ['name' => $request['Name']],
//            ['phone' => $request['Phone']],
//            ['admin_user_id' => $admin_user_id]
//        );

    //    return view('modal.callback');


        $contact_id = $contact['id'];

        return redirect()->route('contacts.show', $contact['id']);

    }

    public function show($id){

        $callback = Callback::find($id);

        return view('modal.callback_form')
            ->with('name', $callback->name)
            ->with('phone', $callback->phone);
    }
//    public function show($name, $phone){
//        return view('modal.callback')
//            ->with('name', $name)
//            ->with('phone', $phone);
//    }

}