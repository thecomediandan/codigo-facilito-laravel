<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PageController extends Controller
{
    public function dashboard(Request $request) {
        //dd($request->all());
        // Obtenemos información del usuario en sesión
        //dd($request->user()->id);
        //dd($request->get('for-my'));

        // ! Importante: Usar el metoto friends sin parentesis, es solo una preparacion de la consulta
        // ! y no el resultado como tal, tambien si utilizamos el metodo friends() sin get() no nos 
        // ! devuelve la arreglo de Usuarios y solo nos mostrara informacion del metodo        
        //dd($request->user()->friends()->wherePivot('accepted', true)->get());

        // dd(
        //     $request->user()->friendsConfirmedFrom()->get(),
        //     $request->user()->friendsConfirmedTo()->get());

        if ($request->get('for-my')) {
            // $posts = Post::where('user_id', $request->user()->id)->get();

            $user = $request->user();
            // Bloque refactorizado
            // $friends_from_ids = $user->friendsConfirmedFrom()->pluck('users.id');
            // $friends_to_ids = $user->friendsConfirmedTo()->pluck('users.id');

            // $friends_ids = $friends_from_ids->merge($friends_to_ids)->push($user->id);

            // Al mergear metodos de consultas crean una tabla anónima con el id de los amigos
            // en el metodo friends, por eso en el metodo plunk() solo se pasa el campo 'id'
            $friends_ids = $user->friends()->pluck('id')->push($user->id);

            // dump($friends_ids);

            //$posts = $request->user()->posts()->latest()->get();

            $posts = Post::with('user')->whereIn('user_id', $friends_ids)->latest()->get();
        } else {
            // Antes de la verificacion de rendimiento
            //$posts = Post::all()->sortByDesc('created_at');
            // Con with evitamos consulta por USER por cada POST y hacer N+1 consultas y
            // anticipamos la consulta y traemos todos los usuarios de manera eficiente(eager load).
            // with() debe ir siempre antes de traer informacion de la base de datos, por eso se omite
            // el metodo all() porque a este metodo no se lo puede modificar el resultado
            $posts = Post::with('user')->latest()->get(); 
        }
        // latest() es la forma abrv. de orderBy('created_at', 'desc')
        //$posts = Post::latest()->get(); "otra manera"
        //return view('dashboard', ['posts' => $posts]); "otra manera"
        return view('dashboard', compact('posts'));
    }

    public function profile(User $user) {

        $posts = $user->posts()->get()->sortByDesc('created_at');
        return view('profile', compact('user', 'posts'));
    }

    public function status(Request $request) {
        $user = $request->user();
        
        // Solicitudes pendientes
        $sent = $user->friendsPendingFrom;
        $request = $user->friendsPendingTo;
        $friends = $user->friends();

        return view('status', compact('request', 'sent', 'friends'));
    }
}
