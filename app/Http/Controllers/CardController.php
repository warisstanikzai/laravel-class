<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardRequest;
use Illuminate\Http\Request;
use App\Card;
use Illuminate\Support\Facades\Validator;

class CardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::all();

        return view('card.card', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('card.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CardRequest $request)
    {
        $card = Card::create([
            'name' => $request->name
        ]);

        return $card;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $card = Card::find($id);

        return $card;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card = Card::find($id);

        return view('card.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $card = Card::find($id);

        $card->update($request->all());

        return redirect('cards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card = Card::find($id);

        $card->delete();

        return $card;
    }


    /**
     * Get upload a file to folder
     *
     * @param $request
     * @return string
     */
    private function uploadFile($request)
    {
        $file = $request->file('file_path');
        $rand_name = str_random(16);
        $extension = $file->getClientOriginalExtension();
        $file_url = $rand_name . '.' . $extension;
        if ($extension == 'pdf') {
            $file->move(public_path('pdf/'), $file_url);
            $file_url = 'pdf/' . $file_url;
        }

        if ($extension == 'png') {
            $file->move(public_path('png/'), $file_url);
            $file_url = 'png/' . $file_url;
        }

        return $file_url;
    }
}
