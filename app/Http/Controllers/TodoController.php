<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::latest()->get();
    }
    public function store(Request $request)
    {
       // Log::info('request',$request->all());
        Todo::create([
        'text'=>$request->text
        ]);
        return response()->json(['message' => 'Todo successfully created.'], 200, []);

    }
    public function destroy($id)
    {
        Todo::findOrFail($id)->delete();
        return response()->json([ 'message' => 'Todo successfully deleted.'], 200, []);
    }
    public function markAsDone($id)
    {
        $todo=Todo::findOrFail($id);
        $todo->done=true;
        $todo->save();
        return response()->json(['message' => 'Todo successfully marked as done.'], 200, []);
    }
    public function markAsUndone($id)
    {
        $todo=Todo::findOrFail($id);
        $todo->done=false;
        $todo->save();
        return response()->json(['message' => 'Todo successfully marked as undone.'], 200, []);
    }
    public function update(Request $request)
    {
        $todo=Todo::findOrFail($request->id);
        $todo->text=$request->get('text');
        $todo->save();
        return response()->json(['message' => 'Todo successfully updated .'], 200, []);
    }
}
