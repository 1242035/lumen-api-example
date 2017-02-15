<?php
# @Author: Onemax <onemax>
# @Date:   2017-02-14T10:47:22+07:00
# @Email:  hotro@onemax.com.vn
# @Project: Onemax
# @Last modified by:   onemax
# @Last modified time: 2017-02-14T10:49:11+07:00
# @Copyright: Onemax.ltd.co
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends LocalBase implements Authenticatable
{
    use HasApiTokens, Notifiable;

    /* rest of the model */
}
