@extends('layout.layout')

@section('title', 'Baiboly')

@section('content')
    @if (session()->has('success'))
        <div class="message alert style-1 rounded" style="margin-top: 7px;padding: 12px 38px 14px 18px;">
            {{ session('success') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="success alert style-1 rounded" style="margin-top: 7px;padding: 12px 38px 14px 18px;">
            {{ session('error') }}</div>
    @endif
    <div class="contact-form" style="margin-top:15px;">
        <form method="post" action="{{ route('baiboly.send') }}">
            @csrf
            <div>
                <span>
                    <select name="chapter_id" id="chapter_id" class="active textbox">
                        @foreach ($chapters as $chapter)
                            <option value="{{ $chapter->_id }}">{{ $chapter->title }}</option>
                        @endforeach
                    </select>
                    @error('chapter_id')
                        <h4 style="margin-top: 8px;">{{ $message }}</h4>
                    @enderror
                </span>
            </div>
            <br>
            <div>
                <span>
                    <input type="number" name="toko" class="form-control" placeholder="toko"
                        value="{{ old('toko') }}">
                    @error('toko')
                        <h4 style="margin-top: 8px;">{{ $message }}</h4>
                    @enderror
                </span>
            </div>
            <br>
            <div>
                <span>
                    <input type="number" name="andininy_deb" class="active textbox" placeholder="andininy faha"
                        value="{{ old('andininy_deb') }}">
                    @error('andininy_deb')
                        <h4 style="margin-top: 8px;">{{ $message }}</h4>
                    @enderror
                </span>
            </div>
            <br>
            <div>
                <span>
                    <input type="number" name="andininy_fin" class="active textbox" placeholder="hatramin'ny"
                        value="{{ old('andininy_fin') }}">
                    @error('andininy_fin')
                        <h4 style="margin-top: 8px;">{{ $message }}</h4>
                    @enderror
                </span>
            </div>
            <div class="clear"></div>
            <div>
                <span><input type="submit" class="" value="sokafy"></span>
            </div>
        </form>
    </div>
@endsection
