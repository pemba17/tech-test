<div>
    <x-dialog-modal wire:model.live="bidProductForm">
        <x-slot name="title">
            {{ __('Bid Product') }}
        </x-slot>
        <x-slot name="content">
            <div class="col-span-6 sm:col-span-4">
                <x-label for="bidAmount" value="{{ __('Amount') }}" />
                <x-input id="bidAmount" type="number" class="mt-1 block w-full" wire:model="bidAmount" required/>
                <x-input-error for="bidAmount" class="mt-2" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="closeBidProductForm" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3" wire:click="save" wire:loading.attr="disabled">
                {{ __('Submit') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Price</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">SKU</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Quantity</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Current Bid</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse($this->products as $product)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{$product->name}}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$product->price}}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$product->SKU}}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$product->quantity}}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            @if($current = $product->bidUser->sortByDesc('updated_at')->first())
                                                <ul>
                                                    <li>Name : {{$current->user->name}}</li>
                                                    <li>Amount : {{$current->bid_amount}}</li>
                                                    <li>Exp Date : {{$current->expiration_date}}</li>
                                                </ul>
                                            @endif
                                        </td>
                                        <td></td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            @if($bidUser = $product->bidUser->where('user_id',auth()->user()->id)->first())
                                                <button type="button" class="text-indigo-600 hover:text-indigo-900" wire:click="editBitAmount({{$bidUser->id}})" wire:loading.attr="disabled">Edit Bid</button>
                                            @else
                                                <button type="button" class="text-indigo-600 hover:text-indigo-900" wire:click="openBidProductForm({{$product->id}})" wire:loading.attr="disabled">Bid Product</button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td>No Products Found</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
