<?php

namespace App\Models\Traits;

trait HasImageSrcAttribute
{
    public function getImageSrAttribute(): string
    {
        if (strpos($this->image, 'http') === 0) {
            return $this->image;
        }

        return url('').'/storage/'.$this->image;
    }
}
