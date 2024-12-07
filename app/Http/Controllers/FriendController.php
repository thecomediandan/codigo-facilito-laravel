<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FriendController extends Controller
{
    // Bloque refactorizado
    // public function store(Request $request, User $user) {

    //     // Evitamos hacer una solicitud de amistad a usuarios con los que
    //     // estamos relacionados
    //     $from_is = $request->user()->friendFrom()->where('to_id', $user->id)->exists();
    //     $to_is = $request->user()->friendTo()->where('from_id', $user->id)->exists();

    //     //dd($from_is, $to_is);

    //     if ($from_is || $to_is) {
    //         return back();
    //     }

    //     // Evitamos hacer una solicitud con nosotros mismos
    //     if ($request->user()->id === $user->id) {
    //         return back();
    //     }

    //     $request->user()->friendFrom()->attach($user);
    //     return back();
    // }

    public function store(Request $request, User $user) {
        // Utilizamos los metodos ultimamente creados
        if (!$request->user()->isRelated($user)) {
            $request->user()->friendFrom()->attach($user);
        }

        return back();
    }

    public function update(Request $request, User $user) {
        // dd(
        //     $user->id,
        //     $request->user()->friendsPendingTo()->get()
        // );

        $request->user()->friendsPendingTo()->where('from_id', $user->id)->update(['accepted' => true]);
        // $request->user()->friendsPendingTo()->updateExistingPivot($user, ['accepted' => true]);
        return back();
    }
}
