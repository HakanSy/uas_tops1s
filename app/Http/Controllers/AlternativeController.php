<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alternative;
use App\Models\criteria;
use App\Models\GradeAlternativeCriteria;

class AlternativeController extends Controller
{
    public function index(){
        $alternatives = alternative::where('user_id', '=', auth()->user()->id)->get();        
        return view('alternative', compact('alternatives'));
    }

    public function store(Request $request){
        $newAlternative = $request->except('_token');
        $request->validate([
            'name' => 'required|string',
        ]);
        $newAlternative['user_id'] = auth()->user()->id;
    
        $newAlternative = alternative::create($newAlternative);
    
        $allCriteria = criteria::where('user_id', '=', auth()->user()->id)->get();
        $gradeData = [];
        foreach ($allCriteria as $criterion) {
            array_push($gradeData, [
                'alternative_id' => $newAlternative->id,
                'criteria_id' => $criterion->id,
                'grade' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        $gradeDataa = GradeAlternativeCriteria::insert($gradeData);
    
        // Redirect tanpa notifikasi
        return redirect()->route('alternatives');
    }
    

    public function delete(Request $request){
        $alternative = alternative::find($request->id);
        
        if (!$alternative) {
            return redirect()->route('alternatives')->with('toast_error', 'Alternatif tidak ditemukan.');
        }

        $alternative->delete();

        // Redirect tanpa notifikasi
        return redirect()->route('alternatives');
    }

    public function update(Request $request){
        $oldAlternative = alternative::find($request->id);
        
        if (!$oldAlternative) {
            return redirect()->route('alternatives')->with('toast_error', 'Alternatif tidak ditemukan.');
        }

        $updatedAlternative = $request->except('_token');
        $oldAlternative->update($updatedAlternative);

        // Redirect tanpa notifikasi
        return redirect()->route('alternatives');
    }
}
