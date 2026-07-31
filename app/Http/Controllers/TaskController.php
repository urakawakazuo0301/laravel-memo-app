<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $tasks = $request->user()->tasks()->latest()->get();
       return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request -> validate([
        'title' => 'required|max:255',
        'body' => 'nullable',
       ]);
       $request->user()->tasks()->create($validated);
       return redirect()->route('tasks.index')->with('success', '作成しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $task = $request->user()->tasks()->findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $task = $request->user()->tasks()->findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = $request->user()->tasks()->findOrFail($id);
        
        $validated = $request -> validate([
            'title' => 'required|max:255',
            'body' => 'nullable'
        ]);
        
        $task -> update($validated);
        return redirect()->route('tasks.show', $task)->with('success', '更新しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $task = $request->user()->tasks()->findOrFail($id);
        $task -> delete();
        return redirect()->route('tasks.index')->with('success', '削除しました');//
    }
}
