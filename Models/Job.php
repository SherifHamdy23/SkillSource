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
        return static::hasMany( 'job_skills', 'job_id', $id);
    }

    public function candidates($id) {
        return static::hasMany('candidates',  'job_id',  $id);
    }

    public function recuiter() {
        return static::belongsTo('users', 'id', $this->id);
    }

    public function comments() {
        return static::hasMany('comments', 'job_id', $this->id);
    }
}

?>
