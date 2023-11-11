<?php

namespace App\Http\Controllers\Baiboly;

use App\Http\Controllers\Controller;
use App\Http\Requests\Baiboly\BaibolyGetRequest;
use App\Models\Baiboly\Chapters;
use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class ChapterController extends Controller
{
    public function index()
    {
        return view('baiboly.index', ['chapters' => Chapters::orderBy('title', 'asc')->get()]);
    }
    public function send(BaibolyGetRequest $request)
    {
        $input = ($request->validated());
        exec('python ' . config('baiboly.baiboly_app') . ' ' . $input['chapter_id'] . ' ' . $input['toko'] . ' ' . $input['andininy_deb'] . ' ' . $input['andininy_fin'] . '', $output, $return_var);

        if ($return_var === 0) {
            return back()->with('success', 'Arahabaina')->withInput();
        } else {
            $errorMessage = "";
            foreach ($output as $line) {
                $errorMessage .= $line . "\n";
            }
            return back()->with('error', $errorMessage);
        }
    }
}
