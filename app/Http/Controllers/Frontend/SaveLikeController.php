<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Route;
use Session;
use DB;
class SaveLikeController extends Controller
{
    public function LikePost(Request $request){
        if(auth()->check()){
            $data = [
                'reference_type' => $request->type,
                'reference_id' => $request->id,
                'user_id' => Auth::user()->id,
                'type' => $request->reaction,
            ];
            $wow =  DB::table('reactions')->insert($data);
            if($wow){
                $like =  DB::table('reactions')
                    ->where('type',$request->reaction)
                    ->where('reference_type',$request->type)
                    ->where('reference_id',$request->id)->get();
                return count($like);
            }
        }else{
            return 'false';
        }
    }

    public function DislikePost(Request $request){

        if(\auth()->check()){
            DB::table('reactions')
                ->where('type',$request->reaction)
                ->where('user_id',auth()->user()->id)
                ->where('reference_type',$request->type)
                ->where('reference_id',$request->id)->delete();
            $like =  DB::table('reactions')
                ->where('type',$request->reaction)
                ->where('reference_type',$request->type)
                ->where('reference_id',$request->id)->get();

            return count($like);

        }else{
            return 'ffalse';
        }
    }

}
