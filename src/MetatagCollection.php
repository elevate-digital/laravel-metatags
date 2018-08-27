<?php

namespace ElevateDigital\Metatags;

use Illuminate\Database\Eloquent\Collection;

class MetatagCollection extends Collection
{

    public function toHTML()
    {
        $HTMLtags = $this->map(function ($metatag) {
            return $metatag->toHTML();
        });

        return $HTMLtags->implode("\n");
    }
}
