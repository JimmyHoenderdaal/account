<div class="flex flex-wrap gap-5">
    <div class="flex-1">
        <h3 class="font-bold text-gray-700">@lang('Default billing address')</h3>
        <div class="text-gray-700" v-if="data.customer.addresses.find(a => a.default_billing == true)">
            <ul>
                <li>@{{ (billing = data.customer.addresses.find(a => a.default_billing == true)).firstname }} @{{ billing.lastname }}</li>
                <li>@{{ billing.street[0] }} @{{ billing.street[1] }} @{{ billing.street[2] }}</li>
                <li>@{{ billing.postcode }} @{{ billing.city }} @{{ billing.country_code }}</li>
                <li>T: @{{ billing.telephone }}</li>
            </ul>
            @isset($edit)
                <a :href="'/account/address/'+billing.id" class="underline hover:no-underline text-neutral">@lang('Change billing address')</a>
            @endisset
        </div>

        <x-rapidez::button v-else href="/account/address/new" class="mt-5">
            @lang('Add billing address')
        </x-rapidez::button>
    </div>
    <div class="flex-1">
        <h3 class="font-bold text-gray-700">@lang('Default shipping address')</h3>
        <div class="text-gray-700" v-if="data.customer.addresses.find(a => a.default_shipping == true)">
            <ul>
                <li>@{{ (shipping = data.customer.addresses.find(a => a.default_shipping == true)).firstname }} @{{ shipping.lastname }}</li>
                <li>@{{ shipping.street[0] }} @{{ shipping.street[1] }} @{{ shipping.street[2] }}</li>
                <li>@{{ shipping.postcode }} @{{ shipping.city }} @{{ shipping.country_code }}</li>
                <li>T: @{{ shipping.telephone }}<br></li>
            </ul>
            @isset($edit)
                <a :href="'/account/address/'+shipping.id" class="underline hover:no-underline text-neutral">@lang('Change shipping address')</a>
            @endisset
        </div>

        <x-rapidez::button v-else href="/account/address/new" class="mt-5">
            @lang('Add shipping address')
        </x-rapidez::button>
    </div>
</div>
