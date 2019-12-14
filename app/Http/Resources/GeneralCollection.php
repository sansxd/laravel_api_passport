<?php

namespace laravelito\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class GeneralCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection;

        // return [
        //     'data' => $this->collection,
        //     'meta' =>
        //     ['version' => '1.0.0',
        //         'API_base_url' => url('/')],
        // ];
    }
}
