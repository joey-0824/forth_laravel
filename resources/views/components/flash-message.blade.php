@if(session()->has('message'))
    <div x-data="{show: true}" x-show="show" x-init="setTimeout(()=>show=false, 3000)"
        class="fixed top-0 left-1/2 transform -trnaslate-x-1/2 bg-laravel text-white px-48 py-3">
        <p>{{session('message')}}</p>
    </div>
@endif
