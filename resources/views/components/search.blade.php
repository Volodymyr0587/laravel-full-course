<div class="m-10">
    <x-form.form-search action="{{ route('blog') }}" method="GET">

        <x-form.form-input-block>
            <x-form.form-label for="search">
                {{ __('Search') }}
            </x-form.form-label>
            <x-form.form-input name="search" id="search" value="{{ request('search') }}" placeholder="{{ __('Search') }}" />
        </x-form.form-input-block>

        <x-form.form-input-block>
            <x-form.form-label for="from_date">
                {{ __('From date') }}
            </x-form.form-label>
            <x-form.form-input name="from_date" id="from_date" value="{{ request('from_date') }}" placeholder="{{ __('From date') }}" />
        </x-form.form-input-block>

        <x-form.form-input-block>
            <x-form.form-label for="to_date">
                {{ __('To date') }}
            </x-form.form-label>
            <x-form.form-input name="to_date" id="to_date" value="{{ request('to_date') }}" placeholder="{{ __('To date') }}" />
        </x-form.form-input-block>

        <x-form.form-input-block>
            <x-form.form-label for="category_id">
                {{ __('Category ID') }}
            </x-form.form-label>
            <x-form.form-select name="category_id" id="category_id" value="{{ request('category_id') }}" :options="[null => __('All categories'), 1 => __('First category'), 2 => __('Second category')]" />
        </x-form.form-input-block>

        <x-form.form-buttons-block>
            <x-button type="submit" class="">
                {{ __('Search') }}
            </x-button>
        </x-form.form-buttons-block>

    </x-form.form-search>
</div>
