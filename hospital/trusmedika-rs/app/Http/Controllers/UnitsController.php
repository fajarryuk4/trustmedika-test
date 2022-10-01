<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;
use Exception;

class UnitsController extends Controller
{

    /**
     * Display a listing of the units.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $units = Unit::paginate(25);

        return view('units.index', compact('units'));
    }

    /**
     * Show the form for creating a new unit.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('units.create');
    }

    /**
     * Store a new unit in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Unit::create($data);

            return redirect()->route('units.unit.index')
                ->with('success_message', 'Unit was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified unit.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $unit = Unit::findOrFail($id);

        return view('units.show', compact('unit'));
    }

    /**
     * Show the form for editing the specified unit.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        

        return view('units.edit', compact('unit'));
    }

    /**
     * Update the specified unit in the storage.
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
            
            $unit = Unit::findOrFail($id);
            $unit->update($data);

            return redirect()->route('units.unit.index')
                ->with('success_message', 'Unit was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified unit from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $unit = Unit::findOrFail($id);
            $unit->delete();

            return redirect()->route('units.unit.index')
                ->with('success_message', 'Unit was successfully deleted.');
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
                'unit_kode' => 'nullable|string|min:0|max:255',
            'unit_nama' => 'nullable|string|min:0|max:255', 
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
