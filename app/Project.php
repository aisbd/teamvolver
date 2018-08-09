<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['category_id', 'title', 'description'];

    public function designations()
    {
    	return $this->belongsToMany(\Vanguard\Designation::class, 'project_designations');
    }
}
