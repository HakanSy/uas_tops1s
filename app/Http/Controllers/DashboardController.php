<?php
namespace App\Http\Controllers;

use App\Models\criteria;
use App\Models\alternative;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $criteriaCount = criteria::where('user_id', $userId)->count();
        $alternativesCount = alternative::where('user_id', $userId)->count();

        return view('dashboard', compact('criteriaCount', 'alternativesCount'));
    }
}
