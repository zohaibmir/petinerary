<div class="text-center mb15">
    <img src="{{asset('images/logo-dark.png')}}" />
</div>
<p class="text-center mb30">Welcome to Urban. Please sign in to your account</p>
<div class="form-inputs">
    <input type="hidden" id="token" name="token" class="form-control input-lg" value="{{$token}}" placeholder="Token">
    <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email Address">
    <input type="text" id="name" name="name" class="form-control input-lg" placeholder="Name">
    <input type="text" id="city" name="city" class="form-control input-lg" placeholder="city">
    <input type="text" id="country" name="country" class="form-control input-lg" placeholder="country">
    <input type="text" id="address" name="address" class="form-control input-lg" placeholder="address">
    <input type="text" id="instagram" name="instagram" class="form-control input-lg" placeholder="instagram">
    <input type="text" id="profile_img" name="profile_img" class="form-control input-lg" placeholder="profile_img">
    <input type="text" id="pet" name="pet" class="form-control input-lg" placeholder="pet">
    <input type="text" id="pet_img" name="pet_img" class="form-control input-lg" placeholder="pet_img">
    <input type="text" id="country_id" name="country_id" class="form-control input-lg" placeholder="country_id">
    <input type="text" id="language_id" name="language_id" class="form-control input-lg" placeholder="language_id">
    <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password">
</div>
<button class="btn btn-success btn-block btn-lg mb15" type="submit">
    <span>Sign Up</span>
</button>
<p>
    <a href="extras-signup.html">Create an account</a> ·
    <a href="extras-forgot.html">Forgot your password?</a>
</p>
