<?php

namespace App\Http\Controllers;
use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $position = Position::where('enable', '=', 1)->paginate(4);
        $data = array(
            'position' => $position
        );
        return view('position',$data );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formcreateposition' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'position_name' => 'required|alpha',
        
        ]);
        $position = new Position;
        $position->position_name = $request->position_name ;
        $position->Department_ID = $request->Department_ID;
        $position->Remark = $request->Remark;
        $position->save();
        return redirect('position');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id !== '') {
            $position = Position::find($id);
            $data = array(
                'position' => $position
            );
            return view('formposition',$data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'position_name' => 'required|alpha',
        
        ]);
        $position =  Position::find($id);
        $position->position_name = $request->position_name;
        $position->Department_ID = $request->Department_ID;
        $position->Remark = $request->Remark;
        $position->save();
        return redirect('position'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position = Position::find($id);
        $position->enable =0;
        $position->save();
        return redirect('position'); 
    }
}
