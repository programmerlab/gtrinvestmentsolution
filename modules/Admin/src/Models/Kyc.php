<?php
namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model as Eloquent; 
use Modules\Admin\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Response;

class Kyc extends Eloquent { 

   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kyc';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['name','email','phone','pan','adhar_number','allData','doc']; // All field of user table here    



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     
  
}
