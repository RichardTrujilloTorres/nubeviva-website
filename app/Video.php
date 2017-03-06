<?php

namespace App;

use App\Cast;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
    	'title', 
    	'description',
    	];

    /**
    * Video-Cast relationship. 
    *
    * @return \Illuminate\Database\Eloquent\Relations\Relation
    */
    public function cast()
    {
    	return $this->belongsTo(Cast::class);
    }

    /**
    * Refer by uid. 
    *
    * @return mixed
    */
    public function getRouteKeyName()
    {
        return 'uid';
    }

    /**
    * Determine video visibility. No video is visible unless assigned to a cast. 
    *
    * @return boolean
    */
    public function isPublished()
    {
    	// No assigned to any cast. 
    	if (! $this->cast()) {
    		return false;
    	}

    	return $this->cast()->published === 'true';
    }

   	/**
   	* Composes the thumbnail full url. 
   	*
   	* @return string
   	*/
    public function getThumnailUrl()
    {
    	return $this->getUrl().'/images/'.$this->thumbnail;
    }

    /**
   	* Composes the video full url. 
   	*
   	* @return string
   	*/
    public function getVideo()
    {
    	return $this->getUrl().'/videos/'.$this->filename;
    }

    /**
   	* Gets the video AWS bucket url. 
   	*
   	* @return string
   	*/
    public function getUrl()
    {
    	// TODO: AWS bucket url
    	return null;
    }

    //
}
