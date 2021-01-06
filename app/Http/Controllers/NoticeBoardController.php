<?php

namespace App\Http\Controllers;

use App\Models\NoticeBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class NoticeBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()){
            $notice_board =NoticeBoard ::get();
            return DataTables::of($notice_board)

            ->addcolumn('actions',function($row)
            {
                return '<a href="'.url("notice_board/edit/".$row->id).'" class="btn btn-info float-left">
                    Edit
                </a>
                <form action="'.action("NoticeBoardController@destroy",$row->id).'" method="post" class="float-left ml-2">'.
                    csrf_field().'
                    <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                </form>';
            })
            ->rawColumns(['actions'])
            ->make(true);
        }
        return view('admin_dashboard.notice_board.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_dashboard.notice_board.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'notice_board' => 'required',
        ]);
        $notice_board = new NoticeBoard();
        $notice_board->notice_board = $request->input('notice_board');
        $notice_board->save();
        toast()->success('Notice saved successfully')->timerProgressBar();
        return redirect()->back();
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
        $notice_board = NoticeBoard::find($id);
        return view('admin_dashboard.notice_board.edit', compact('notice_board'));
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
        $request->validate([
            'notice_board' => 'required',
        ]);
        $notice_board =NoticeBoard::find($id)();
        $notice_board->notice_board = $request->input('notice_board');
        $notice_board->save();
        toast()->success('Notice updated successfully')->timerProgressBar();
        return redirect(url('notice_board'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice_board = NoticeBoard::find($id);
        $notice_board->delete();

        return redirect()->back();
    }
}
