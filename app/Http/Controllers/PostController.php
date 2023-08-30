<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    /**
     * Display a listing of posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = DB::table('posts')
                    ->join('users' , 'posts.user_id' , '=' , 'users.id')
                    ->select('posts.*','users.name')
                    ->get();
        return view( 'post.index' , [ 'posts' => $posts ] );
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('post.create');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->all();
        $post['name'] = ucfirst( strtolower( $post['name'] ) ); //Viết hoa ký tự đầu của tên và chuyển đổi các ký tự còn lại sang chữ thường
        $user = User::firstOrCreate(['name' => $post['name']]); //Lấy dữ liệu trong bảng users nếu tồn tại hoặc tạo và lấy dữ liệu nếu không tồn tại
        DB::insert('insert into posts (title, description, type, img, user_id) value (?, ?, ?, ?, ?)' , [$post['title'] , $post['description'] , $post['type'] , $post['img'], $user->id] );
        return view('post.status' , ['status' => 'created']);
    }

    /**
     * Receive a post ID from form and redirect into function detail 
     * 
     * @param \Illuminate\Http\Request $id
     * @return function detail($id)
     */
    public function detailID(Request $request){
        $id = $request->id;
        return redirect()->route('detail' , ['id' => $id]);
    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id) {
        $post = Post::findOrFail($id);
        $user = User::find($post->user_id);
        return view('post.detail' , ['post' => $post , 'user' => $user['name']]);
    }

    /**
     * Show a form for receiving a post ID that needs to edit
     * 
     * @return view
     */
    public function editID() {
        return view('post.editID');
    }

    /**
     * Redirect to edit form corresponding to post ID
     * 
     * @param $request['id']
     * @return editContent form
     */
    public function updateID(Request $request) {
        $id = $request->id;
        return redirect()->route('editContent' , ['id' => $id]);
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editContent($id) {

        $post = Post::findOrFail($id);
        return view('post.editContent' , ['post' => $post]);
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateContent(Request $request, $id) {
        $post = $request->all();
        $num = DB::table('posts')
                   ->where('id' , '=' , $id)
                   ->update([
                        'title' => $post['title'],
                        'description' => $post['description'],
                        'type' => $post['type'],
                        'img' =>$post['img'],
                   ]);
        return view('post.status' , ['status' => 'updated']);
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        $post = Post::findOrFail($id);
        DB::table('posts')
            ->delete($id);
        return view('post.status' , ['status' => 'deleted']);
    }
}
