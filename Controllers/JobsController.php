<?php
namespace Controllers;

use Models\Job;
class JobsController
{
    public function index() {
        // type your logic here and don't forget to return the value
    }

    public function create() {
        view('create_job');
    }

    public function store() {
        isLoggedIn();


        Job::create([
            'recuiter_id' => 1,
            'title'=> 'Fla7',
            'description' => 'fla7',
            'requirments' => 'fla7',
            'salary' => '30000',
            'location' => 'Fla7een'
        ]);
    }
    public function update($id) {
        // type your logic here and don't forget to return the value
    }
    public function delete($id) {
        // type your logic here and don't forget to return the value
    }

}

?>
