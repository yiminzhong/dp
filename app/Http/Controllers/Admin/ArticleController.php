<?php

namespace App\Http\Controllers\Admin;




use App\Models\Admin;
use App\Models\Admin\Identity;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function list(){

        $admin = $this->getCurrentUser();

        $article_list =DB::table('articles')
            ->leftJoin('posts', 'articles.posts_id', '=', 'posts.id')->orderBy('articles.id', 'desc');

        $article_list = $article_list->paginate(10);

        $data['lists'] = $article_list;

        $data['tools'] = array(
            array('title' => '新增角色', 'href' => url(''))
        );
        $data['location'] = array(array('title' => '新增招聘启事'));

        return $this->render('article/article_list')->with('admin',$admin)->with('article_list',$article_list);
    }


    public function add($id=0){

        if (!$id || $id==0){
            return self::notice("会话不存在", 2, array(array('title' => '职位管理', 'url' => url('article/article_list'))));
        }

        $admin = $this->getCurrentUser();

        //获取职位

        $posts = Admin\Posts::get();


        if (request()->isMethod('post')) {

            $requestlist = \request()->all();

          

            $title = $requestlist['title'];
            $posts_id = $requestlist['posts'];
            $local = $requestlist['local'];
            $sort = $requestlist['sort'];
            $Keyword = $requestlist['Keyword'];
            $description = $requestlist['description'];
            $editorValue = $requestlist['editorValue'];

            $role = new Admin\Article();
            $role->posts_id = $posts_id;
            $role->sort = $sort;
            $role->local = $local;
            $role->title = $title;
            $role->content = $description;

            $role->company = $editorValue;
            $role->create_id = $admin->id;
            $role->create_name = $admin->name;
            if ($role->save()){
                return ['ok'=>1,'msg'=>"职位新增成功"];
            }else{
                return ['ok'=>2,'msg'=>'职位新增失败'];
            }


        }


        return $this->render('article/article_add')->with('admin',$admin)->with('posts',$posts);
    }

    public function edit($id){

        if (!$id || $id==0){
            return self::notice("会话不存在", 2, array(array('title' => '职位管理', 'url' => url('officeer/office_list'))));
        }
        $admin = $this->getCurrentUser();


        $posts = Admin\Posts::find($id);


        if (\request()->isMethod('post')){

            $request = \request()->all();

            if ($request['post'] == $admin->posts_name){
                return ['ok'=>1];
            }

            if ($request['description'] == $admin->description){
                return ['ok'=>1];
            }

            $posts1 = Admin\Posts::find($id);

            $posts1->posts_name = $request['post'];
            $posts1->description = $request['description'];

            if ($posts1->save()){
                return ['ok'=>1];
            }else{
                return ['ok'=>2];
            }

        }


        return $this->render('officeer/office_edit')->with('admin',$admin)->with('post',$posts);

    }

}
