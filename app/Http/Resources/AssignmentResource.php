<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SubjectResource;
use App\Http\Resources\StudentAssignmentResource;

class AssignmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'subject_id' => $this->subject_id,
            'subject' => new SubjectResource($this->subject),
            'student_assignments' => StudentAssignmentResource::collection($this->whenLoaded('studentAssignments')),
            'title' => $this->title,
            'description' => $this->description,
            'due_date' => $this->due_date,
            'due_time' => $this->due_time,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
