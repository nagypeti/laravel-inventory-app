<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

trait UploadImageTrait
{
    public function uploadOneToPublic(UploadedFile $image, string $name) : string
    {
        $folder = '/images/products/';

        $image->storeAs(
            $folder,
            $name . '.' . $image->getClientOriginalExtension(),
            'public'
        );

        return $folder . $name . '.' . $image->getClientOriginalExtension();
    }
}
