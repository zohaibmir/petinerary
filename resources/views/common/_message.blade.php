<div data-alert class="alert-box radius {{ $type ? ' ' . $type : '' }}-message">
    {{ $message }}
    @foreach ($errors->all() as $error)
    <br>    {{ $error }}     
    @endforeach
    <a href="#" class="close">&times;</a>
</div>	