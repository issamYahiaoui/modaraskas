<?php

namespace App\Http\Controllers;

use abdullahobaid\mobilywslaraval\Mobily;
use App\Contact;
use App\Message;
use App\SmsSended;
use App\TemplateSMS;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SmsController extends Controller
{
    public function __construct()
    {
        $newMessages = Message::where('read', 0)->get();
        \view()->share([
            'newMessages' => $newMessages
        ]);
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.sms.sms')->with([
            'title' => __('sms.sms'),
            'active' => 'sms'
        ]);
    }

    public function myContacts()
    {
        return view('admin.sms.myContacts')->with([
            'title' => __('sms.myContacts'),
            'active' => 'myContacts'
        ]);
    }

    public function addContact(Request $request)
    {
        Contact::create([
            'name' => $request->get('name'),
            'phone' => $request->get('phone')
        ]);
        Session::Flash('success', __('dashboard.success'));
        return redirect()->back();
    }

    public function editContact(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->update([
            'name' => $request->get('name'),
            'phone' => $request->get('phone')
        ]);
        Session::Flash('success', __('dashboard.success'));
        return redirect()->back();
    }

    public function deleteContact(Request $request, $id)
    {
        Contact::destroy($id);
        Session::Flash('success', __('dashboard.success'));
        return redirect()->back();
    }

    public function sendSms(Request $request)
    {
        $ids = explode(",", $request->get('ids'));
        if ($request->get('templateSms') == 0) {
            $msg = $request->get('message');
        } else {
            $template = TemplateSMS::find($request->get('templateSms'));
            $msg = $template->message;
        }

        foreach ($ids as $i) {
            if (substr_count($i, "user") > 0) {
                $i = str_replace('user', '', $i);
                $user = User::find($i);
                $phone = $user->phone;

            } elseif (substr_count($i, "contact") > 0) {
                $i = str_replace('contact', '', $i);
                $contact = Contact::find($i);
                $phone = $contact->phone;
            }

            $response = Mobily::Send($phone, $msg);
            if ($response == true) {
                SmsSended::create([
                    'content' => $msg,
                    'phone' => $phone,
                    'user_id' => auth()->id()
                ]);
            }
        }

        return response()->json([
            'success' => __('dashboard.success')
        ]);

    }

    public function templateSms()
    {
        return view('admin.sms.templateSms')->with([
            'templates' => TemplateSMS::all(),
            'title' => __('sms.templateSms'),
            'active' => 'template'
        ]);
    }

    public function addTemplateSms(Request $request)
    {
        TemplateSMS::create([
            'subject' => $request->get('subject'),
            'message' => $request->get('message')
        ]);
        Session::Flash('success', __('dashboard.success'));
        return redirect()->back();
    }

    public function editTemplateSms(Request $request, $id)
    {
        TemplateSMS::find($id)->update([
            'subject' => $request->get('subject'),
            'message' => $request->get('message')
        ]);
        Session::Flash('success', __('dashboard.success'));
        return redirect()->back();
    }

    public function deleteTemplateSms($id)
    {
        TemplateSMS::destroy($id);
        Session::Flash('success', __('dashboard.success'));
        return redirect()->back();
    }


}
