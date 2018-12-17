<?php

namespace App\Nova;

use Illuminate\Http\Request;

class StorePhotos
{
    public function __invoke(Request $request, $model)
    {
        return [
            'photo' => $request->photo->store('/', 'cloudinary'),
            'photo_name' => $request->photo->getClientOriginalName(),
            'photo_size' => $request->photo->getSize(),
        ];
    }
}
