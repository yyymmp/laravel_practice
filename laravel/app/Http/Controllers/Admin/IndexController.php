<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function index(Request $request){
        $id = $request -> get("id",10086);
        dd($request->all()); //获取所有参数
        return "控制器路由".$id;
    }

    public function insert(){
        echo  time();
        $data = [
            "name" => "jlz",
            "age" => 100,
            "email" => 'jlz@gmail.com'
        ];
        //当插入多条数据时，使用二维数据即可
        $db =  DB::table("member");
        /**
        try{
            $ins = $db->insert($data);
        }catch (\Exception $exception){
            var_dump($exception->getMessage());
            return;
        }
        if ($ins){
            echo "success";
        }else{
            echo "fail";
        }
         */
        //只允许插入一条
        $id = $db->insertGetId($data);
        echo  "自增id：".$id;
    }

    public function update(){
        $db =  DB::table("member");
        $up = $db->where('id','=','2')->update(["name" => "john",]);
        $db->where('id','=','2')->increment('age');
        $db->where('id','=','2')->increment('age',5); //一次递增5
    }

    public function select(){
        DB::enableQueryLog();
        $db =  DB::table("member");
        /**
        $res = $db->get();  //返回的是对象
        foreach ($res as $user){
            echo  $user->name.'--'.$user->age.'--'.$user->email.'</br>';
        }
        echo 'or</br>';
        $res = $db->where('id','>',1)->orWhere('name','=','kobe')->get();
        foreach ($res as $user){
            echo  $user->name.'--'.$user->age.'--'.$user->email.'</br>';
        }
        $sql = DB::getQueryLog();
        $query = end($sql);
//        dd($query);
        var_dump($query);
        $row = $db->first();
        echo  $row->name.'--'.$row->age.'--'.$row->email.'</br>';
        $row = $db->find(2);
        echo  $row->name.'--'.$row->age.'--'.$row->email.'</br>';
        $email = $db->where('id',1)->value('email');
        var_dump($email);
         * */
//        $res = $db->select(['name','email'])->get();
//        $sql = DB::getQueryLog();
//        $query = end($sql);
//        dd($query);
//        $res = $db->orderBy('age','desc')->get();
//        dd($res);
//        $res = $db->limit(2)->offset(2)->get();
//        foreach ($res as $user){
//            echo  $user->name.'--'.$user->age.'--'.$user->email.'</br>';
//        }
//        $id = $db->where('id','1')->delete();
//        $db->delete(2);
//        DB::statement('drop table users');
//        $age = 19;
        return view('admin.s');
//        foreach ($res as $user){
//            echo  $user->name.'--'.$user->age.'--'.$user->email.'</br>';
//        }
    }

    public function view(){
        $title = '<span style="color: red">文章</span>';
        $intro = '文章一的简介';
        $arr = compact('title','intro');
        return view('admin.welcome',compact('title','intro'));
//        return view('admin/welcome',[
//            'name'=>'jlz',
//            'email' => 'jlz@gmail.com',
//            'date' => date('Y-m-d H:i')
//        ]);
//        return view('admin.welcome');
    }
    public function ps(){
        return view('admin.s');
    }

}


