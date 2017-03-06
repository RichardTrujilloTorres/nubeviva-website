<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $fillable = [
    	'title', 
    	'description',
    ];


    /**
    * Publish the cast. 
    *
    * @return null
    */
    public function publish()
    {
    	$this->published = true;
    	// $this->published_at = Carbon::now();
    	$this->save();
    }

    /**
    * Returns the publishing time in human readable format. 
    *
    * @return string
    */
    public function publishedAt()
    {
        if ($this->published) {
            $data = new Carbon($this->published_at);
            return $data->diffForHumans();
        }
    	
        return null;
    }

    /**
    * Retrieves the parts composing the cast. 
    *
    * @return integer
    */
    // public function parts()
    // {
    //     // TODO
    //     return $this->hasMany(Video::class);
    // }

    /**
    * Retrieves the estimated cast duration. 
    *
    * @return integer
    */
    // public function duration()
    // {
    //     // TODO
    //     return 1;
    // }



}
