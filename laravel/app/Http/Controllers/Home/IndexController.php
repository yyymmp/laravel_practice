<?php

namespace App\Http\Controllers\Home;

use App\Home\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Home\Member; //引入模型
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    //
    public function save(){
        $member = new Member();  //将数据表映射到模型
        // 将字段映射到属性
        $member->name = 'test';
        $member->email = 'test@gamil.com';
        $member->age = 15;
        // 将记录映射到实例
        if ($member->save()){
            return 'save success';
        }
    }
    public function save2(Request $request){
        if ($request->getMethod() == "POST") {
            $member = new Member();  //将数据表映射到模型
            $data = $request->all();
            $member->create($data);
        }
        return view('home/index');
    }
    public function sel(Request $request){
        $res = Member::find(3); //根据主键查询信息  结果集是对象
        $data = $res -> toArray();  // 转为数组
        var_dump($data);
        $data = Member::where('id','>',3)->get();
        var_dump($data -> toArray());
    }
    public function update(Request $request){
//        dd($request->route('id'));  //获取路由参数
        $member = Member::find($request->route('id'));
        $member -> name = "up";
        $member -> save();
        Member::where('id','=',1)->update(['age'=>89]);
    }
    public function del(Request $request){
        $member = Member::find(1);
        if ($member -> delete()){
            return "del success";
        }
    }
    public function vali(Request $request){
        if ($request->getMethod() == 'POST'){
            // 验证
            $this->validate($request, [
                'name' => 'required|unique:member|max:255',
                'email' => 'required',
                'age' => 'required',
            ]);
            // 文章内容是符合规则的，存入数据库
        }
        return view('home.index');
    }
    public function upload(Request $request){
        if($request -> getMethod() == "POST"){
            if ($request->hasFile('txt') && $request->file('txt')->isValid()){  //判断是否有此文件和合法性
                $file = $request->file('txt');
//                dd($file->getClientMimeType());  //获取文件类型
                $path = time().'.'.$file->getClientOriginalExtension();
                $file->move('./upload',$path); //移动文件 点上后缀名 提供浏览器访问的话 放在public'下
                //存入数据库
                $data = $request -> all();
                $data['avatar'] = './upload/'.$path;
                $res = Member::create($data);
                if($res){
                    return "上传成功";
                }
                return "文件上传失败".$request->file('txt')->getErrorMessage();
            }
            return "文件上传失败".$request->file('txt')->getErrorMessage();
        }
        return view('home.upload');
    }
    public function page(){
        $users = DB::table('member')->simplePaginate(3);
        dd($users->count);
        dd($users -> currentPage());
        return view('home.page', ['users' => $users]);
    }
    public function cap(Request $request){
        if ($request -> getMethod() == 'POST'){
            // 验证
            $this->validate($request, [
                'captcha' => 'required|captcha'
            ]);
            echo  "通过验证";
        }
        return view('home.cap');
    }
    public function res(Request $request){
        if (request()->ajax()) {
            $data = DB::table('member')->get();
            return response()->json($data); //响应json
//            return true  不可以响应bool值
        }
        return view('home.aj');
    }
    public function link(){
        $data = DB::table('article')->join('author','article.author_id','=','author.id')
            ->select('article.*','author.name as aname')
            ->get();
        return response()->json($data);
    }
    public function relate(){
        $data = Article::get();
        foreach ( $data as $k => $v ){
            echo  $v->author->name."<br/>";
        }
    }
    public function many(){
        $data = Article::get();
        foreach ( $data as $k => $v ){
           echo '文章:'.$v->article_name;
           echo '评论:';
           foreach ($v->comment as $value){
               echo ($value -> comment);
           }
           echo '<br>';
        }
    }
    public function mtom(){
        $data = Article::get();
        foreach ( $data as $k => $v ){
            echo '文章:'.$v->article_name;
            echo '关键词:';
            foreach ($v->keyword as $value){   //$v->keyword获取每篇文章下的所有关键词
                echo ($value -> keyword);  //$value 相当于一个关键词表模型  取出对应字段 取出每个关键词
            }
            echo '<br>';
        }
    }

}
