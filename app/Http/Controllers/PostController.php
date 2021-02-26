<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      //  $users = DB::select('select * from users where active = ?', [1]);

        //return view('user.index', ['users' => $users]);
        //$results = DB::select('select * from users where id = :id', ['id' => 1]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Post();
        $post->title='sss';
        $post->body='laravel body';
        $post->save();


        //DB::insert('insert into users (id, name) values (?, ?)', [1, 'Marc']);
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
        //
       /* $affected = DB::update(
            'update users set votes = 100 where name = ?',
            ['Anita']
        );*/
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function contact(){
      //  return view('layouts.contact')->with('id',$id);
    return view('layouts.post');
    }
    public function contactPost($id,$name,$pass){
        //  return view('layouts.contact')->with('id',$id);
        return view('layouts.contact',compact('id','name','pass'));
    }
    public function peopleContact(){
        $people=['james','d','das'];
        return view('layouts.contactFunParameter',compact('people'));
    }
    public function savePost(){
        $post=new Post();
        $post->title='sss';
        $post->body='laravel body';
        $post->save();

    }
    public function findPost(){
        $post =Post::all()->where('title','=','sss');
        DB::table('posts')->pluck('title');

        foreach ($post as $body)
            return '<h1>'.$body->body;
    }
public function deletePost(){
        Post::all()->find(1)->delete();
    }
}
