<?php

namespace ElevateDigital\Metatags;

use Illuminate\Database\Eloquent\Model;

class Metatag extends Model
{

    protected $guarded = [];

    /**
     * Get all of the owning meta taggable models.
     */
    public function metataggable()
    {
        return $this->morphTo();
    }

    public function HTML()
    {
        if ($this->name === 'title') {
            return "<title>{$this->content}</title>";
        }

        return "<meta name='{$this->name}' content='{$this->content}'>";
    }

    /**
     * Create a new Eloquent Collection instance.
     * @param  array $models
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(array $models = [])
    {
        return new MetatagCollection($models);
    }
}
