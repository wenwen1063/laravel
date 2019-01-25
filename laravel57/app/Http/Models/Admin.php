<?php
/**
 * Created by wenwen<1063440565@qq.com>
 * name: Admin.php
 * User: Administrator
 * Date: 2018/12/5
 * Time: 10:11
 */
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';
    protected $create_at = 'create_time';
    protected $update_at = 'update_time';

    public function role()
    {
        return $this->belongsToMany('App\Http\Models\Role', 'role_admin', 'admin_id', 'role_id');
    }


}
