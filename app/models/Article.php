<?php

class Article extends \Eloquent {
  use SoftDeletingTrait;

  protected $dates = ['deleted_at'];
	protected $fillable = [];
    public function Gallery()
    {
        return $this->belongsTo('Gallery');
    }
}