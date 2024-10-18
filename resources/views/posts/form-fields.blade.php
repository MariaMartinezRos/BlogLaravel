<div>
    <x-input-label for="title" :value="__('title')"/>
    <x-text-input id="title" name="title" type="text" value="{{old('title', $post->title)}}"/>

    <x-input-error :messages="$errors->get('title')"/>

{{--    @error('title')--}}
{{--    <br/>--}}
{{--    <small style="color:red">message</small>--}}
{{--    @enderror--}}
</div>





{{--TERMINAR DE COPIAR--}}
<div>
    <x-input-label for="body" :value="('Body')"/>
    <x-textarea id="body" name="body">{{old('title', $post->title)}}</x-textarea>
    <x-input-error :messages="$errors->get('body)"/>
</div>


