<?php


namespace Models;
use Support\Model;
use Support\Contracts\ModelInterface;

class Job extends Model implements ModelInterface
{
    protected static $fillable = [
        'recuiter_id',
        'job_title',
        'position',
        'Experience_level',
        'description',
        'Employee_type',
        'Offer_salary',
        'location',
    ];

    public function skills($id) {
        return $this->belongsToMany(Skill::class, 'job_skills', 'job_id', 'skill_id', $id);
    }
}

?>
