<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function addMember(Request $req)
    {
        $member = new Member;

        $member->m_name = $req->m_name;
        $member->m_email = $req->m_email;
        $member->m_address = $req->m_address;

        $member->save();

        return redirect('addMember');
    }

    function viewMember(Request $req)
    {
        $data = Member::paginate(5);
        return view('viewMember', ['members' => $data]);
    }
    function deleteMember($m_id)
    {
        $data = Member::find($m_id);
        $data->delete();
        return redirect('viewMembers');
    }
}
