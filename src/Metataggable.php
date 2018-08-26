<?php

namespace ElevateDigital\Metatags;

trait Metataggable
{

    public function getMetatag(string $name)
    {
        return $this->metatags()->where('name', $name);
    }

    /**
     * Get all of the meta tags
     */
    public function metatags()
    {
        return $this->morphMany(Metatag::class, 'metataggable')
                    ->orderBy('order');
    }

}
