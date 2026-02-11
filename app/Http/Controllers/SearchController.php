<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->q;

        if (!$query) {
            return view('search', ['results' => []]);
        }

        /* $sql = "SELECT * FROM users WHERE name LIKE '%$query%'";
        $results = DB::select($sql); */

        $results = User::where('name', 'LIKE', "%{$query}%")->get();

        return view('search', compact('results'));
    }


}
