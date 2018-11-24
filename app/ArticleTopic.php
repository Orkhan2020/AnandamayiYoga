<?php

namespace App;

use App\Traits\{FindBySlug, Localizable};

class ArticleTopic extends Anandamayi
{
	use FindBySlug, Localizable;
	
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        self::deleting(function($topic) {
            $topic->articles()->delete();
        });
    }

    public function articles()
    {
    	return $this->hasMany(Article::class, 'topic_id');
    }
}
