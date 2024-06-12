<?php


namespace Models;
use Support\Model;
use Support\Contracts\ModelInterface;

class Job extends Model implements ModelInterface
{
    protected static $fillable = [
        'recuiter_id',
        'title',
        'description',
        'requirments',
        'salary',
        'location'
    ];
    // Add your model logic here
}

?>
