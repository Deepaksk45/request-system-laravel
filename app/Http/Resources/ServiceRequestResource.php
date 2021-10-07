<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceRequestResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request
   * @return array
   */
  public function toArray($request) {
    return [
      'id' => $this->id,
      'user_id' => $this->user_id,
      'description' => $this->description,
      'title' => $this->title,
      'status' => $this->status,
      'start_date' => $this->start_date,
      'duration' => $this->duration,
      'assigned_to' => $this->assigned_to,
      'user' => $this->user,
      'created_at' => (string) $this->created_at,
      'updated_at' => (string) $this->updated_at,
    ];
  }
}
