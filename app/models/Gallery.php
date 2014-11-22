<?php

class Gallery extends \Eloquent {
	protected $fillable = [];
  public function posts()
  {
    return $this->hasMany('Post');
    return $this->hasMany('Article');
  }
}