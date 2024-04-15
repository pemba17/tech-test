<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Welcome to the technical test!
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        We've set up a jetstream application for you. While there is no time limit on the test, please
        feel free to stop after 3 hours if it takes you that long. If you choose to go longer, let us know
        how much time you took. You may or may not complete all of the criteria in the three hours - that's OK!
    </p>

    <p class="mt-6 text-gray-500 leading-relaxed">
        Add whatever seeders, tests, migrations, models, livewire components or blade components that you need.
    </p>
    <p class="mt-6 text-gray-500 leading-relaxed">
        For this test, we've added a very simple Product model. Your job is to allow users to bid on a product.

        Please seed some products, and make a new table that accepts bids for the products. The table should indicate
        which user has bid on a product, and how much their bid is for, as well as an expiration on their offer.
    <p class="mt-6 text-gray-500 leading-relaxed">
        Many users may bid on products. You do not need to display a list of bids, but
        you do need to show a user's current bid against a given product.
    </p>
    <p class="mt-6 text-gray-500 leading-relaxed">
        A user may only hold one active bid at a time, but they may edit their bid price.
    </p>

    <p class="mt-6 text-gray-500 leading-relaxed">
        Finally, add an artisan command that displays the highest bid of a given product. The price should be formatted
        nicely, e.g, "$40.00".
    </p>
</div>
