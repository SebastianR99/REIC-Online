<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Titles;
use App\Models\Articles;
use App\Models\Chapters;
use App\Models\Observations;
use App\Models\Questions;
use Illuminate\Support\Facades\Auth;


class LawController extends Controller
{
    public function getTitles(){
        return view('titles');
    }
    //
    public function getComplete(){
        $titulos = DB::table('articles')
        ->join('chapters','articles.article_chapter', '=', 'chapters.chapter_id')
        ->join('titles','chapters.chapter_title', '=', 'titles.title_id')
        ->select('articles.*','chapters.*','titles.*')
        ->get();
        return view('complete',array('titulos'=>$titulos));
    }
    public function getTitulo1(){
        $titulos = DB::table('articles')
                     ->join('chapters','articles.article_chapter', '=', 'chapters.chapter_id')
                     ->join('titles','chapters.chapter_title', '=', 'titles.title_id')
                     ->select('articles.*','chapters.*','titles.*')
                     ->where('titles.title_id',1)
                     ->get();
        return view('titulo1',array('titulos'=>$titulos));
    }
    public function getTitulo2(){
        $titulos = DB::table('articles')
                     ->join('chapters','articles.article_chapter', '=', 'chapters.chapter_id')
                     ->join('titles','chapters.chapter_title', '=', 'titles.title_id')
                     ->select('articles.*','chapters.*','titles.*')
                     ->where('titles.title_id',2)
                     ->get();
        return view('titulo2',array('titulos'=>$titulos));
    }
    public function getTitulo3(){
        $titulos = DB::table('articles')
        ->join('chapters','articles.article_chapter', '=', 'chapters.chapter_id')
        ->join('titles','chapters.chapter_title', '=', 'titles.title_id')
        ->select('articles.*','chapters.*','titles.*')
        ->where('titles.title_id',3)
        ->get();
        return view('titulo3',array('titulos'=>$titulos));
    }
    public function getTitulo4(){
        $titulos = DB::table('articles')
                     ->join('chapters','articles.article_chapter', '=', 'chapters.chapter_id')
                     ->join('titles','chapters.chapter_title', '=', 'titles.title_id')
                     ->select('articles.*','chapters.*','titles.*')
                     ->where('titles.title_id',4)
                     ->get();
        return view('titulo4',array('titulos'=>$titulos));
    }
    public function getTitulo5(){
        $titulos = DB::table('articles')
        ->join('chapters','articles.article_chapter', '=', 'chapters.chapter_id')
        ->join('titles','chapters.chapter_title', '=', 'titles.title_id')
        ->select('articles.*','chapters.*','titles.*')
        ->where('titles.title_id',5)
        ->get();
        return view('titulo5',array('titulos'=>$titulos));
    }
    public function getTitulo6(){
        $titulos = DB::table('articles')
        ->join('chapters','articles.article_chapter', '=', 'chapters.chapter_id')
        ->join('titles','chapters.chapter_title', '=', 'titles.title_id')
        ->select('articles.*','chapters.*','titles.*')
        ->where('titles.title_id',6)
        ->get();
        return view('titulo6',array('titulos'=>$titulos));
    }

    public function getAbout()
    {
        return view('about');
    }

    public function indexNo()
    {
        return view('no.indexno');
    }

    public function getObservations()
    {
        $observations = DB::table('observations')
        ->join('users','observations.observation_user', '=', 'users.id')
        ->join('titles','observations.title_observations', '=', 'titles.title_id')
        ->select('observations.*','users.*','titles.*')
        ->get();
        return view('observations',array('arrayObservations'=>$observations));
    }

    public function getQuestions()
    {
        $questions = DB::table('questions')
        ->join('users','questions.question_user', '=', 'users.id')
        ->select('questions.*','users.name')
        ->get();
        return view('questions',array('arrayQuestions'=>$questions));
    }
    
    public function getRedactar(Request $request)
    {
        $user_id = Auth::id();
        $titulo = $request->titulo;
        $arreglo =array(
            'user_id'=>$user_id,
            'titulo'=>$titulo
        );
        return view('redactar',array('arreglo'=>$arreglo));
    }

    public function postObservations(Request $request)
    {
        $usuario = intval($request->user_id);
        $titulo =  intval($request->title_id);
        $observation = new Observations();
        $observation->observation_user=$usuario;
        $observation->title_observations=$titulo;
        $observation->observation_content=$request->content;
        $observation->save();
        return redirect(url('/observations-show'));
    }

    public function getRedactarco()
    {
        $user_id = Auth::id();
        $arreglo =array(
            'user_id'=>$user_id,
        );
        return view('redactarco',array('arreglo'=>$arreglo));
    }

    public function postQuestions(Request $request)
    {
        $usuario = intval($request->user_id);
        $question = new Questions();
        $question->question_user=$usuario;
        $question->question_content=$request->content;
        $question->save();
        return redirect(url('/questions-show'));
    }

    public function postSearch(Request $request)
    {
        
        if($request->busqueda == 1)
        {
            $content = strtoupper($request->content);
            $search = titles::where('title_name','like','%'.$content.'%') 
                              ->orWhere('title_des','like','%'.$content.'%')
                              ->get();
            return view('search-title',array('arraySearch'=>$search));
        }
        elseif ($request->busqueda == 2)
        {
            $content = strtoupper($request->content);
            $search = DB::table('chapters')
                          ->join('titles','chapters.chapter_title', '=', 'titles.title_id')
                          ->select('chapters.*','titles.*')
                          ->where('chapter_name','like','%'.$content.'%') 
                          ->orWhere('chapter_des','like','%'.$content.'%')
                          ->get();
            return view('search-chapter',array('arraySearch'=>$search));
        }
        elseif ($request->busqueda == 3)
        {
            $content = strtoupper($request->content);
            $search = DB::table('articles')
                        ->join('chapters','articles.article_chapter', '=', 'chapters.chapter_id')
                        ->join('titles','chapters.chapter_title', '=', 'titles.title_id')
                        ->select('articles.*','chapters.*','titles.*')
                        ->where('article_name','like','%'.$content.'%') 
                        ->get();
            return view('search-article',array('arraySearch'=>$search));
        }
        elseif ($request->busqueda == 4)
        {
            $search = DB::table('articles')
                        ->join('chapters','articles.article_chapter', '=', 'chapters.chapter_id')
                        ->join('titles','chapters.chapter_title', '=', 'titles.title_id')
                        ->select('articles.*','chapters.*','titles.*')
                        ->where('article_content','like','%'.$request->content.'%') 
                        ->get();
            return view('search-word',array('arraySearch'=>$search));
        }

    }

}
