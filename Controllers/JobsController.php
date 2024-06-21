<?php
namespace Controllers;

use Models\Job;
use Models\Skill;
use Models\User;
use Support\Request;

class JobsController
{
    public function index() {
        // type your logic here and don't forget to return the value
        view('job/index', ['jobs' => Job::all()]);
    }

    public function create() {
        view('job/create');
    }

    public function store() {
        isLoggedIn();

        echo '<pre>'.print_r($_POST, true).'</pre>';
        $skills = $_POST['Skills'];
        // echo '<pre>'.print_r($skills, true).'</pre>';
        $skill_ids = [];
        Job::create([
            'recuiter_id' => auth()->id,
            'job_title' => $_POST['Job_title'],
            'description' => $_POST['Description'],
            'Offer_salary' => (int) $_POST['Offer_salary'],
            'location' => $_POST['Location'],
            'Employee_type' => $_POST['Employee_type'],
            'Experience_level' => $_POST['Experience'],
            'position' => $_POST['Position'],
        
        ]);
        
        // $job_id = Job::lastInsertedId();
        // foreach ($skills as $skill_name) {
        //     $skill = Skill::findOrInsert('skill_name', $skill_name);
        //     $skill_ids[] = $skill['id'];
        // }
        // echo '<pre>'.print_r($skill_ids, true).'</pre>';
        // Job::attach('job_skills', 'job_id', 'skill_id', $job_id, $skill_ids[0]);
        echo auth()->id;
    }
    public function update($id) {
        // type your logic here and don't forget to return the value
    }

    public function show($id) {
        $job = Job::find($id);
        if (!$job) {
            return view('errors/404');
        }
        return view('job/show', ['job' => Job::first($job)]);
    }

    public function delete($id) {
        Job::delete($id);
    }


    public function apply($id) {
        if (Job::exists('id', $id))
            Job::attach('applications', 'job_id', 'job_seeker_id', $id, auth()->id);
        else
            return view('errors/404', ['message' => 'Job not found']);
    }
    public function candidates($id) {
        // type your logic here and don't forget to return the value
        return view('job/candidates', ['id' => $id]);
    }
}

?>
