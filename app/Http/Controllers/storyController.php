<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\Story_type;
use App\Models\Tashkel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class storyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskels = Tashkel::get();
        $story_types = Story_type::get();
        $stories = Story::with('storyType', 'taskel')->get(); // افترضنا وجود العلاقات
        return view("theme.index", compact('taskels', 'story_types', 'stories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $taskels = Tashkel::get();
        $story_types = Story_type::get();
        $stories = Story::with('storyType', 'taskel')->get();

        return view("theme.index", compact('taskels', 'story_types', 'stories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation  =  $request->validate([
            "job_title" => "required",
            "type_story" => "required",
            "taskels" => "required|string",
            "summry_story" => "required|string",
        ]);
        //dd($request->all());
        Story::create(
            [
                "job_title" => $request->job_title,
                "storyTypeId" => $request->type_story,
                "taskelId" => $request->taskels,
                "summry" => $request->summry_story,
            ]
        );
    }

    public function generatePdf(Request $request)
    {
        $data = $request->only(['storyTypeId', 'taskelId', 'summry', 'job_title']);

        $storyType = Story_type::find($data['storyTypeId']);
        $tashkel = Tashkel::find($data['taskelId']);

        $pdf = Pdf::loadView('pdf.story', [
            'storyType' => $storyType,
            'tashkel' => $tashkel,
            'summry' => $data['summry'],
            'job_title' => $data['job_title'],
        ]);

        return $pdf->download('story.pdf');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
