<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
    $tasks = [
        ['id' => 1, 'title' => 'First task'],
        ['id' => 2, 'title' => 'Second task'],
        ['id' => 3, 'title' => 'Third task'],
    ];

    return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        // Form to create new tasks
    }

    public function store(Request $request)
    {
        // It will store a new task
    }

    public function show($id)
    {
    $task = [
        'id' => $id,
        'title' => 'Sample Task Title',
        'description' => 'This is a description of the task.',
        'created_at' => now()->subDays(2)->format('Y-m-d H:i:s'),
        'updated_at' => now()->subDay()->format('Y-m-d H:i:s'),
        'status' => false,
        'priority' => 'high',
        'assigned_to' => 'John Doe',
    ];

    return view('tasks.show', ['task' => $task]);
    }

    public function edit($id)
    {
        // Form to edit the new task
    }

    public function update(Request $request, $id)
    {
        // Function that will update the task 
    }

    public function destroy($id)
    {
        // Will delete the task
    }
}
