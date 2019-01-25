<?php
/**
 * Created by wenwen<1063440565@qq.com>
 * name: Permission.php
 * User: Administrator
 * Date: 2018/12/5
 * Time: 14:26
 */

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model{
    protected $table='permission';
    protected $primaryKey='permission_id';
    protected $create_at='create_time';
    protected $update_at='update_time';


}