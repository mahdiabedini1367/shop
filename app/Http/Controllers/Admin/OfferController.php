<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferRequest;
use App\Http\Requests\OfferUpdateRequest;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{

    public function index()
    {
        return view('admin.offers.index', [
            'offers' => Offer::all()
        ]);
    }


    public function create()
    {
        return view('admin.offers.create');
    }


    public function store(OfferRequest $request)
    {
        //
    }


    public function show(Offer $offer)
    {
        //
    }


    public function edit(Offer $offer)
    {
        return view('admin.offers.edit', [
            'offer' => $offer
        ]);

    }


    public function update(OfferUpdateRequest $request, Offer $offer)
    {
        $codeIsNotUnique = Offer::query()->where('code', $request->get('code'))
                                      ->where('id', '!=', $offer->id)
                                      ->exists();
        if ($codeIsNotUnique){
            return redirect()->back()
                            ->withErrors(['code'=>'کد باید یکتا باشد'])->withInput();
        }


        $offer->update([
            'code' => $request->get('code', $offer->code),
            'starts_at' => $request->get('starts_at', $offer->starts_at),
            'expires_at' => $request->get('expires_at', $offer->expires_at),
        ]);

        return redirect(route('offers.index'));
    }


    public function destroy(Offer $offer)
    {
        //
    }
}
