<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;

class ApplicationSubmission extends Model
{
   	protected $guarded = [];

   	const APPROVED = 1;
   	const REJECTED = 2;

   	public function project()
   	{
   		return $this->belongsTo(\Vanguard\Project::class);
   	}

   	public function applicant()
   	{
   		return $this->belongsTo(\Vanguard\User::class, 'user_id');
   	}

   	public function designation()
   	{
   		return $this->belongsTo(\Vanguard\Designation::class);
   	}

   	public function authorize()
   	{
   		return $this->project->user_id == request()->user()->id;
   	}
}
