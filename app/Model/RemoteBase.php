<?php
namespace App\Model;
# @Author: Onemax <onemax>
# @Date:   2017-02-13T13:40:27+07:00
# @Email:  hotro@onemax.com.vn
# @Project: Onemax
# @Last modified by:   onemax
# @Last modified time: 2017-02-14T10:56:22+07:00
# @Copyright: Onemax.ltd.co
use Illuminate\Database\Eloquent\Model;
class RemoteBase extends Model
{
    protected $connection = 'sqlsrv';
}
