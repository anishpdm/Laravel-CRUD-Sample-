<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faculty;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $faculties = Faculty::all();

        return view('viewall',compact('faculties'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }



    public function searchview()
    {
        return view('searchitem');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getName= request('fname');
        $getDes= request('fdes');
        $getContact= request('fcontact');
        $getCollege= request('fcollege');

        $faculty=new Faculty();

        $faculty->fname=$getName;
        $faculty->desc= $getDes;
        $faculty->mob=$getContact;
        $faculty->college= $getCollege;

        $faculty->save();

        echo $getName;
        echo $getDes;
        echo $getContact;

        echo $getCollege;
        return redirect('/viewall');


    }


    public function search(Request $request)
    {

        $search = $request->input('fname');

    // Search in the title and body columns from the posts table
    $faculties = Faculty::query()
        ->where('fname', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the resluts compacted
    return view('searchresult', compact('faculties'));
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculties = Faculty::find($id);


    return view('editfaculty', compact('faculties'));

    }



    public function deleteview($id)
    {
        $faculties = Faculty::find($id);


    return view('deleteview', compact('faculties'));

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
        $faculties = Faculty::find($id);

        

        $getName= request('fname');
        $getDes= request('fdes');
        $getContact= request('fcontact');
        $getCollege= request('fcollege');


        $faculties->fname=$getName;
        $faculties->desc= $getDes;
        $faculties->mob=$getContact;
        $faculties->college= $getCollege;

        $faculties->save();

        return redirect('/viewall');

        // $id = $request->input('fname');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faculties = Faculty::find($id);

        $faculties->delete();
        return redirect('/viewall');

    }
}
