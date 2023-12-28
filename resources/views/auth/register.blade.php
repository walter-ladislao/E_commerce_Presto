<x-layout>
    <x-navbar/>



    <div class="form-container my-5 py-5">
        <div class="form-body">
            <p class="form-title">Registrati</p>
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="form-text">
                    <label class="form-sub-text" for="name">{{ __('ui.name') }}</label>
                    <input placeholder="{{ __('ui.userName') }}" value="{{old('name')}}" name="name" class="form_style" type="text">
                </div>
                <div class="form-text">
                    <label class="form-sub-text" for="email">Email</label>
                    <input placeholder="Email" name="email" value="{{old('email')}}" id="email" class="form_style" type="email">
                </div>
                <div class="form-text">
                    <label class="form-sub-text" for="password">Password</label>
                    <input placeholder="{{ __('ui.insertPassword') }}" name="password" value="{{old('password')}}" id="password" class="form_style" type="password">
                </div>
                <div class="form-text">
                    <label class="form-sub-text" for="password_confirmation">Conferma password</label>
                    <input placeholder="{{ __('ui.confirmPassword') }}" name="password_confirmation" value="{{old('password')}}" id="password_confirmation" class="form_style" type="password">
                </div>
                <div>
                    <button class="form-btn" type="submit">{{ __('ui.REGISTRATI') }}</button>
                    <p>{{ __('ui.haiaccount') }} <a class="form-link" href="{{route('login')}}">{{ __('ui.accediqui') }}</a></p>

                </div>
            </form>
        </div>
    </div>
</x-layout>






