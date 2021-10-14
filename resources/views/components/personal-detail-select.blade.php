<div>
    <select name="{{ $selectType }}" id="{{ $selectType }}"
            class="custom-select fh5co_contact_text_box js-example-basic-single @error( $selectType ) is-invalid @enderror">
        <option value="">{{ __('Choose') }}</option>
        @foreach( $getOptions() as $value => $option)
            <option value="{{ $value }}">{{ $option }}</option>
        @endforeach
    </select>
    @error( $selectType )
    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
    @enderror
</div>
