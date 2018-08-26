<?php

namespace ElevateDigital\Metatags;

use Illuminate\Database\Eloquent\Collection;

class MetatagCollection extends Collection
{

    public function toHTML()
    {
        $HTMLtags = $this->map(function ($metatag) {
            return $this->getMetatagHTML($metatag);
        });

        return $HTMLtags->implode("\n");
    }

    public function getMetatagHTML($metatag)
    {
        return $metatag->HTML();
    }
}
