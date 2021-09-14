<?php


namespace App\Http\Controllers\Admin;


use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Admin;
abstract class Controller extends BaseController {
    use ValidatesRequests;
    public $user;
    //视图
    public function render($viewName) {

        return view()->make('admin.' . $viewName);
    }

    protected function getAdminUserName()
    {
        return $this->getCurrentUser();
    }

    protected function getCurrentUser()
    {
        if(!$this->user){
            $this->user= auth()->user();
        }

        return $this->user;
    }

    /**
     * 跳转到提示页
     * @param string $msg
     * @param int $type  1 成功 2 警告 3 失败
     * @param array $links
     * @return mixed
     */
    protected function notice($msg = '', $type =2, $links = [])
    {
        return $this->jumping($msg,$type,$links);
    }

    protected function success($msg = '',$type=1,$links = [])
    {
        return $this->jumping($msg,$type,$links);
    }

    protected function failed($msg = '',$type=3,$links = [])
    {
        return $this->jumping($msg,$type,$links);
    }

    protected function jumping($msg = '',$type,$links = [])
    {
        return redirect()->route('MainController@jump', [
            'msg'=>$msg,
            'type'=>$type,
            'links'=>$links,
        ]);
    }

}
