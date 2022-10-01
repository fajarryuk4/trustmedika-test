<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Exception;

class DoktersController extends Controller
{

    /**
     * Display a listing of the dokters.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $dokters = Dokter::paginate(25);

        return view('dokters.index', compact('dokters'));
    }

    /**
     * Show the form for creating a new dokter.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('dokters.create');
    }

    /**
     * Store a new dokter in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Dokter::create($data);

            return redirect()->route('dokters.dokter.index')
                ->with('success_message', 'Dokter was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified dokter.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $dokter = Dokter::findOrFail($id);

        return view('dokters.show', compact('dokter'));
    }

    /**
     * Show the form for editing the specified dokter.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        

        return view('dokters.edit', compact('dokter'));
    }

    /**
     * Update the specified dokter in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $dokter = Dokter::findOrFail($id);
            $dokter->update($data);

            return redirect()->route('dokters.dokter.index')
                ->with('success_message', 'Dokter was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified dokter from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $dokter = Dokter::findOrFail($id);
            $dokter->delete();

            return redirect()->route('dokters.dokter.index')
                ->with('success_message', 'Dokter was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'pegawai_nomor' => 'nullable|string|min:0|max:255',
            'pegawai_nama' => 'nullable|string|min:0|max:255',
            'pegawai_jenis_kelamin' => 'nullable|string|min:0|max:255',
            'pegawai_sip' => 'nullable|string|min:0|max:255', 
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
