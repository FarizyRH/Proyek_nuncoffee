<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Feedback = Feedback::with('user')->get();
        return view('feedback.index', compact('Feedback'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
       $validated=$request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
       ]);

        $feedback = new Feedback($validated);
        $feedback->user_id = $request->user() ? $request->user()->id : null; // Jika user opsional
        $feedback->save();

    //    return $this->hasMany(Feedback::class);
    //    $request->user()->feedback()->create($validated);
    //    return redirect()->route('feedback.index')->with('success','Feedback berhasil dikirim!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        $Feedback = Feedback::findOrFail($feedback->id);
        return view('feedback.edit',compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
       ]);

       $feedback = Feedback::findOrFail($feedback->id);
       $request->user()->feedback()->update($validated);

       return redirect()->route('feedback.index')->with('success',
       'Feedback berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->route('feedback.index')->with('success', 'Feedback berhasil dihapus!');
    }
}
