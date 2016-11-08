<?php
namespace App\Http\Controllers;
class ContactController extends Controller {

    public function index(\Illuminate\Http\Request $request) {
        $kw = $request->get("kw", "");
        return \App\Http\Models\Contact::search($kw)->paginate(10);
    }

}
