<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PestAlert;

class PestAlertController extends Controller
{
    public function index(Request $request)
    {
        $location = $request->input('location');
        $crop = $request->input('crop');
        $sortBy = $request->input('sort_by');

        $query = PestAlert::query();

        if ($location) {
            $query->where('location', 'like', "%$location%");
        }

        if ($crop) {
            $query->where('crop', 'like', "%$crop%");
        }

        // Sorting
        if ($sortBy === 'date-desc') {
            $query->orderBy('created_at', 'desc');
        } elseif ($sortBy === 'date-asc') {
            $query->orderBy('created_at', 'asc');
        } elseif ($sortBy === 'severity') {
            $query->orderBy('severity', 'desc'); // or asc, depending on your design
        }

        $alerts = $query->get();

        return view('pest_alerts.index', compact('alerts', 'location', 'crop', 'sortBy'));
    }

    public function filter(Request $request)
    {
        $location = $request->input('location');
        $crop = $request->input('crop');
        $severity = $request->input('severity');
        $sortBy = $request->input('sort_by');

        $query = PestAlert::query();

        if ($location) {
            $query->where('location', $location);
        }

        if ($crop) {
            $query->where('crop', $crop);
        }

        if ($severity) {
            $query->where('severity', $severity);
        }

        // Sorting
        if ($sortBy === 'date-desc') {
            $query->orderBy('created_at', 'desc');
        } elseif ($sortBy === 'date-asc') {
            $query->orderBy('created_at', 'asc');
        } elseif ($sortBy === 'severity') {
            $query->orderBy('severity', 'desc'); // or asc based on use-case
        }

        $alerts = $query->get();

        return view('pest_alerts.index', compact('alerts', 'location', 'crop', 'severity', 'sortBy'));
    }
}
