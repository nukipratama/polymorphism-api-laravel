<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class CandidateController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->query('name');
        $role = $request->query('role');
        $age = $request->query('age');

        $candidates = Candidate::with('recruiters');
        if ($name) $candidates->whereRaw("upper(candidates.name) like '%" . strtoupper($name) . "%'");
        if ($role) $candidates->whereRaw("upper(candidates.role) like '%" . strtoupper($role) . "%'");
        if ($age) $candidates->where("candidates.age", $age);

        $data = $candidates->get();

        return response()->json([
            'code' => HttpFoundationResponse::HTTP_OK,
            'message' => 'success',
            'data' => $data
        ], HttpFoundationResponse::HTTP_OK);
    }
}
