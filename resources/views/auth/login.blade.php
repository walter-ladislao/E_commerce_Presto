<x-layout>
    <x-navbar/>
<div class="login-paginate d-flex align-items-center justify-content-center mt-5">
    <div class="form-container">
        <div class="form-body">
            <p class="form-title">{{ __('ui.login') }}</p>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-text">
                    <label class="form-sub-text" for="email">Email</label>
                    <input placeholder="Email" name="email" id="email" class="form_style" type="email">
                </div>
                <div class="form-text">
                    <label class="form-sub-text" for="password">Password</label>
                    <input placeholder="{{ __('ui.insertPassword') }}" name="password" id="password" class="form_style" type="password">
                </div>
                <div>
                    <button class="form-btn" type="submit">{{ __('ui.ACCEDI') }}</button>
                    <p>{{ __('ui.nonHaiUnAccount') }}<a class="form-link" href="{{route('register')}}">{{ __('ui.registratiqui') }}</a></p>

                </div>
            </form>
        </div>
</div>
    </x-layout>
    
    
    