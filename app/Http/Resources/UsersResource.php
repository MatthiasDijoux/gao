<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    private $token = null;
    public function __construct($resource, $token = null)
    {
        $this->token = $token;
        parent::__construct($resource);
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        if (isset($this->token)) {
            $role =  new RolesResource($this->roles);

            return [
                'id' => $this->id,
                'name' => $this->username,
                'email' => $this->mail,
                'role' => $role,
                'token' => $this->token,
            ];
        } else {
            return parent::toArray($request);
        }
    }
}
