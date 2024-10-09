<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $groups = User::find($user_id)->groups;
        return view('group.index', compact('groups'));        
    }
    
    public function show(Group $group) 
    {
        $members = $group->users;
        // 全ユーザーを取得（メンバー追加のため）
        $allUsers = User::all();
        return view('group.show', compact('group', 'members', 'allUsers')); 
    
    }
    public function create()
    {
        return view('group.create');
    }
    
    public function store(Request $request) 
    { 
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|integer|in:1,2,3'
        ]);        // グループの作成
        $group = new Group(); 
        $group->name = $request->name; 
        $group->status = $request->status;
        $group->save(); 
        
        // グループ作成者を追加する
        $group->users()->attach(Auth::id());
        
        return redirect()->route('group.index')->with('success', 'グループが作成されました。');
    }
    
    public function addMember(Request $request, Group $group)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);
    
        // すでにグループに属しているかチェック
        if ($group->users()->where('user_id', $request->user_id)->exists()) {
            return redirect()->route('group.show', $group->id)
                             ->withErrors(['user_id' => '既に登録されています。']);
        }
    
        // ユーザーをグループに追加
        $group->users()->attach($request->user_id);
    
        return redirect()->route('group.show', $group->id)
                         ->with('success', 'メンバーが追加されました。');
    }

}
