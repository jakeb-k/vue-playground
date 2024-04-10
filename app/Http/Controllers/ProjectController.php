<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Models\Contact; 
use App\Mail\ContactMail; 
use Inertia\Inertia; 

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Send an email 
     */
    public function email(Request $request){


        $data = $request->validate([
            'name' => 'required|max:80',
            'email' => 'required|email',
            'note' => 'required|max:150'
        ]);

       // The email sending is done using the to method on the Mail facade
        Mail::to('jk_web_dev@outlook.com')->send(new ContactMail($data));
        
        return redirect()->back(); 
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        $project = Project::where('name', $name)->first();

        $projectName = str_replace('_', ' ', $project->name); 

        $techs = explode(',', $project->techs); 

        $desc = explode('+', $project->description); 

        // Check directories for web and mobile
        $webPath = resource_path('js/assets/images/'.$name.'/web');
        $mobilePath = resource_path('js/assets/images/'.$name.'/mobile');

        $webExists = is_dir($webPath);
        $mobileExists = is_dir($mobilePath);


        // Determine the view mode based on the available directories
        if ($webExists && !$mobileExists) {
            $viewMode = 'web';  
        } elseif (!$webExists && $mobileExists) {
            $viewMode = 'mobile';
        } else {
            // Default to web if both exist or neither exists
            $viewMode = 'web';
        }
        
        $items = scandir(resource_path('js/assets/images/'.$name.'/'.$viewMode));
        $itemCount = count($items) - 2;
        
        return Inertia::render('Project',[
            'project'=> $project,
            'projectName'=>$projectName, 
            'techs'=> $techs,
            'desc' => $desc,
            'viewMode'=>$viewMode,
            'itemCount'=>$itemCount
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
