<?php

class Post extends \Eloquent {
  // use SoftDeletingTrait;

  // protected $dates = ['deleted_at'];
    protected $fillable = [];
    public function Gallery()
    {
        return $this->belongsTo('Gallery');
    }
}