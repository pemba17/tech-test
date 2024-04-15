<?php

namespace App\Livewire;

use App\Models\BidUser;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Product;
use Carbon\Carbon;

class Products extends Component
{
    public ?bool $bidProductForm = false;
    public $product;
    public $bidUser;

    #[Validate(['required','numeric'])]
    public $bidAmount;

    #[Computed]
    public function products()
    {
        return Product::all();
    }

    public function updatedBidProductForm()
    {
        $this->resetErrorBag();
        $this->resetAll();
    }

    public function openBidProductForm(Product $product): void
    {
        $this->product = $product;
        $this->bidProductForm = true;
    }

    public function closeBidProductForm(): void
    {
        $this->resetErrorBag();
        $this->resetAll();
    }

    public function editBitAmount(BidUser $bidUser)
    {
        $this->bidUser = $bidUser;
        $this->product = $bidUser->product;
        $this->bidAmount = $this->bidUser->bid_amount;
        $this->bidProductForm = true;
    }

    public function save(): void
    {
        $this->validate();
        # now save to bid users table
        BidUser::updateOrCreate(
            [
                'id' => $this->bidUser->id ?? null
            ],
            [
            'product_id' => $this->product->id,
            'user_id' => auth()->user()->id,
            'bid_amount' => $this->bidAmount,
            'expiration_date' => Carbon::now()->addDay()
        ]);
        $this->resetAll();
    }

    public function resetAll(): void
    {
        $this->reset('bidAmount','bidProductForm','product','bidUser');
    }

    public function render()
    {
        return view('livewire.products');
    }
}
