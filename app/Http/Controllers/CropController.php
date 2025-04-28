<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use Illuminate\Http\Request;

class CropController extends Controller
{
    public function index(Request $request)
{
    $query = Crop::query();

    if ($request->has('search')) {
         $search = $request->input('search');
         $query->where('name', 'like', '%' . $search . '%')
             ->orWhere('description', 'like', '%' . $search . '%')
             ->orWhere('ideal_conditions', 'like', '%' . $search . '%');
    }

    $crops = $query->latest()->paginate(1000); // preserves search term on next pages
    return view('crops.index', compact('crops'));
}

    
    public function create()
    {
        return view('crops.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'ideal_conditions' => 'required|string',
        ]);

        Crop::create($validated);

        return redirect()->route('crops.index')->with('success', 'Crop added successfully!');
    }

    public function show($id)
    {
        $crop = Crop::findOrFail($id);
        return view('crops.show', compact('crop'));
    }

    public function edit($id)
    {
        $crop = Crop::findOrFail($id);
        return view('crops.edit', compact('crop'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'ideal_conditions' => 'required|string',
        ]);

        $crop = Crop::findOrFail($id);
        $crop->update($validated);

        return redirect()->route('crops.index')->with('success', 'Crop updated successfully!');
    }

    public function destroy(Crop $crop)
    {
        $crop->delete();
        return redirect()->route('crops.index')->with('success', 'Crop deleted successfully!');
    }




}
