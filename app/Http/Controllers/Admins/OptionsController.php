<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Options;

class OptionsController extends Controller
{
    //
    public function index(){
        $pageTitle = 'Thiết lập chung';

        return view('admin.options.general', compact(
            'pageTitle'
        ));
    }

    public function postIndex(Request $request){
        $allFields = $request->all();

        if (!empty($allFields)){
            unset($allFields['_token']);

            foreach ($allFields as $field=>$value){
                $option = Options::where('opt_key', $field)->first();

                if (!empty($option)){
                    $option->opt_value = $value;
                    $option->save();
                }
            }
        }

        return back()->with('msg', 'Cập nhật thành công');

    }

    public function header(){

    }

    public function footer(){

    }

    public function home(){

    }

    public function menu(){
        $pageTitle = 'Thiết lập menu';

        return view('admin.options.menu', compact(
            'pageTitle'
        ));
    }

    public function postMenu(Request $request){
        $menuJson = $request->menu_content;
        $option = Options::where('opt_key', 'primary_menu')->first();
        if (!empty($option)){
            $option->opt_value = $menuJson;
            $option->save();
        }

        return back()->with('msg', 'Cập nhật menu thành công');
    }
}
