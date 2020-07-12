<?php

namespace App\Http\Controllers\Admin;




use App\Models\Admin;
use App\Models\Admin\Identity;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function list(){

        $admin = $this->getCurrentUser();

        $article_list = $oLog = Admin\Article::orderBy('id', 'desc');

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



            if (!isset($requestlist['post']) || !$requestlist['post']){
                return ['ok'=>2,'msg'=>"角色名称不能为空"];
            }


            $posts_name = Admin\Posts::where('posts_name',$requestlist['post'])->first();
            if ($posts_name){
                return ['ok'=>2,'msg'=>"职位已存在"];
            }

            $role = new Admin\Posts();
            $role->posts_name = $requestlist['post'];
            $role->description = isset($requestlist['remark'])?$requestlist['remark']:'';
            $role->creat_name = $admin->name;
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
