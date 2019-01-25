<?php
/**
 * Created by wenwen<1063440565@qq.com>
 * name: Role.php
 * User: Administrator
 * Date: 2018/12/5
 * Time: 14:24
 */
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model{
    protected $table='role';
    protected $primaryKey='role_id';
    protected $create_at='create_time';
    protected $update_at='update_time';

    public function admin(){
        return $this->belongsTo('App\Http\Models\Admin','role_admin','admin_id','role_id');
    }

    public function menu(){
        return $this->belongsToMany('App\Http\Models\Menu','role_menu','role_id','menu_id');
    }

    public function permission(){
        return $this->belongsToMany('App\Http\Models\Permission','permission_role','role_id','permission_id');
    }

}