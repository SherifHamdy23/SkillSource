<?php
namespace Controllers;

use Models\Job;
class JobsController
{
    public function index() {
        // type your logic here and don't forget to return the value
    }

    public function create() {
        view('job/create');
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

    public function show($id) {
        $job = Job::find($id);
        if (!$job) {
            return view('errors/404');
        }
        return view('job/show', ['job' => $job]);
    }

    public function delete($id) {
        Job::delete($id);
    }

    public function apply($id) {
        // type your logic here and don't forget to return the value
    }

    public function candidates($id) {
        // type your logic here and don't forget to return the value
        return view('job/candidates', ['id' => $id]);
    }
}

?>
