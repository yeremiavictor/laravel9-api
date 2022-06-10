<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    //define property
    public $status;
    public $message;

    /**
    * __construct
    *
    *@param mixed $status
    *@param mixed $message
    *@param mixed $resource
    *@return void
    */
    public function __construct($status, $message, $resource)
    {
        parrent::__construct($resource);
        $this->status = $status;
        $this->message = $message;
    }

    /**
     * Transform the resource into an array
     * 
     * @param \Illuminate\Http\Request $request
     * @return array
     */

    public function toArray($request)
    {
        return [
            'success'   => $this->status,
            'message'   => $this->message,
            'data'      =>$this->resource
        ];
    }
}
