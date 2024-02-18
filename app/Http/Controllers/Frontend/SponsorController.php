<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\DonationItems;
use App\Models\NonCashDonations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SponsorController extends Controller
{
    //

    public function sponsorPage()
    {
        return view('users.pages.sponsor_page');
    }

    public function eventPage()
    {
        return view('users.pages.event_page');
    }

    public function testimonialPage()
    {
        return view('users.pages.testimonial');
    }

    public function cashDonationPage()
    {
        return view('users.pages.cash_donation');
    }

    public function processCashDonation(Request $request)
    {
        Log::info($request->all());

        $donation = Donation::create([
            'transaction_ref' => rand(100000000, 999999999) . "",
            'donation_type' => 1,
            'total_amount' => $request->amount,
            'frequency' => $request->donateFrequency,
            'donation_interval' => $request->payment_intervals,
            'payment_method' => 1,
            'narration' => 'My Donation'
        ]);

        return redirect()->back()->with('Thank you for your donation');
    }

    public function nonCashDonationPage()
    {
        return view('users.pages.non_cash_donation');
    }

    public function donateNonCash(Request $request)
    {

        $cartItems = $request->all();

        $donation = Donation::create([
            'transaction_ref' => rand(100000000, 999999999) . "",
            'donation_type' => 1,
            'total_amount' => 0,
            'frequency' => 1,
            'donation_interval' => 'Monthly',
            'payment_method' => 1,
            'narration' => 'My Donation'
        ]);

        $totalAmount = 0;

        Log::info($cartItems['cart_items']);

        $data = [];

        foreach ($cartItems['cart_items'] as $key => $cartItem) {

            $dbItem = DonationItems::where('item_name', trim($cartItem['item']))->first();

            $totalAmount += $cartItem['price'];


            Log::info($dbItem);

            if ($dbItem) {

                $data[] = [
                    'items_id' => $dbItem->id,
                    'donation_id' => $donation->id,
                    'quantity' => $cartItem['quantity'],
                    'amount' => $cartItem['price']
                ];
            }
        }

        DB::table('non_cash_donations')->insert($data);

        $donation->total_amount = $totalAmount;
        $donation->save();

        return response()->json(['status' => true, 'message' => "Thank you for successfully donating"]);
    }
}
