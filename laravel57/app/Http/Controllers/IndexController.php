<?php
/**
 * Created by wenwen<1063440565@qq.com>
 * name: IndexController.php
 * User: Administrator
 * Date: 2018/12/5
 * Time: 10:08
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Models\Admin;
use App\Http\Models\Role;
class IndexController extends Controller {
    public function index(){
        $info=Admin::with('role')->get()->toarray();
        dd($info);
    }
}