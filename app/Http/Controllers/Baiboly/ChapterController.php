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
        return view('baiboly.index', ['chapters' => Chapters::all()]);
    }
    public function send(BaibolyGetRequest $request)
    {
        $input = ($request->validated());
        exec('python F:\\Projet\\Perso\\baiboly-to-powerpoint\\baiboly.py '.$input['chapter_id'].' '.$input['toko'].' '.$input['andininy_deb'].' '.$input['andininy_fin'].'',$output, $return_var);

        //Process::fromShellCommandline('python F:\\Projet\\Perso\\baiboly-to-powerpoint\\baiboly.py 8220 1 1 10')->run();
        // Chemin vers le fichier Python
        // $pythonScript = ('F:\\Projet\\Perso\\baiboly-to-powerpoint\\baiboly.py');

        // $arguments = [
        //     '8220',  // Remplacez par le premier argument
        //     '1',
        //     '1',
        //     '10'  // Remplacez par le deuxième argument, etc.
        // ];

        // $command = array_merge(["C:\\Users\\tsiory\\AppData\\Local\\Programs\\Python\\Python311\\python.exe", $pythonScript], $arguments);

        // $process = new Process($command);

        // try {
        //     $process->mustRun();

        //     dd($process->getErrorOutput());
        // } catch (ProcessFailedException $exception) {
        //     dd($exception->getMessage());
        // }
    }
}
