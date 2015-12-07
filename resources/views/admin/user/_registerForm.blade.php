<div class="text-center mb15">
    <img src="{{asset('images/logo-dark.png')}}" />
</div>
<p class="text-center mb30">Welcome to Urban. Please sign in to your account</p>
<div class="form-inputs">
    <!--input type="hidden" id="token" name="token" class="form-control input-lg" value="{{$token}}" placeholder="Token"-->
    <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email Address">
    <input type="text" id="name" name="name" class="form-control input-lg" placeholder="Name">        
    <input type="text" id="instagram" name="instagram" class="form-control input-lg" placeholder="instagram">

    <?php $locations = \App\Country::lists('Name', 'id'); ?>
    <?php echo Form::select('country_id', $locations, null, array('class' => 'form-control')) ?>
    <input type="text"  class="form-control" id="state" name="state" placeholder="state">
    <?php $locations = \App\City::lists('Name', 'id'); ?>
    <?php echo Form::select('country_id', $locations, null, array('class' => 'form-control')) ?>
    <input type="text" id="address" name="address" class="form-control input-lg" placeholder="address">
    <?php $languages = \App\Language::lists('name', 'id'); ?>
    <?php echo Form::select('language_id', $languages, null, array('class' => 'form-control')) ?> 
    <input type="text"  class="form-control" id="pet" name="pet">
    <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password">
</div>
<button class="btn btn-success btn-block btn-lg mb15" type="submit">
    <span>Sign Up</span>
</button>
<p>
    <a href="extras-signup.html">Create an account</a> ·
    <a href="extras-forgot.html">Forgot your password?</a>
</p>
