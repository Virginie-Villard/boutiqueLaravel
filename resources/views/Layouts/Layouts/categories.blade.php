{{--@see : + https://www.youtube.com/watch?v=9aUvEgY6N_I --}}
{{--@see : + https://appdividend.com/2022/01/21/laravel-many-to-many-relationship/ --}}
{{--@see : https://laravel.sillo.org/cours-laravel-8-les-bases-formulaires-et-middlewares/ --}}
{{--@see : https://laracasts.com/discuss/channels/laravel/how-to-pass-multiple-variables-in-to-a-view-using-controller --}}
{{--@see : + https://laravel.sillo.org/cours-laravel-8-les-donnees-la-relation-nn/ --}}


<p>
    Choose Categories :
</p>

    <div id="categoriesChoice">

        @foreach($categories as $category)

            <input type="checkbox" name="{{ $category->name }}"> value="{{ $category->id }}"
                {{ $category->name }}
            <input>
            <label for="{{  }}"> {{  }} </label>

    </div>

    <input type="submit"> Validate Categories </input>
