<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request
   * @return array
   */
  public function toArray($request) {
    return [
      'id'              => $this->id,
      'name'            => $this->name,
      'email'           => $this->email,
      'role'            => $this->role,
      'updated_at'      => (string) $this->updated_at,
      'created_at'      => (string) $this->created_at,
      'serviceRequests' => $this->serviceRequests,
    ];
  }
}
