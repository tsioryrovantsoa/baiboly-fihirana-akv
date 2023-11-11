@extends('layout.layout')

@section('title', 'Baiboly')

@section('content')
    <div class="contact-form" style="margin-top:15px;">
        <form method="post" action="{{ route('baiboly.send') }}">
            @csrf
            <div>
                <span>
                    <select name="chapter_id" id="chapter_id" class="active textbox">
                        @foreach ($chapters as $chapter)
                            <option value="{{ $chapter->_id }}" @selected(old('chapter_id') == $chapter->_id)>{{ $chapter->title }}</option>
                        @endforeach
                    </select>
                </span>
            </div>
            <br>
            <div>
                <span>
                    <input type="number" name="toko" class="active textbox" placeholder="toko" value="{{ old('toko') }}" required>
                </span>
            </div>
            <br>
            <div>
                <span>
                    <input type="number" name="andininy_deb" class="active textbox" placeholder="andininy faha"
                        value="{{ old('andininy_deb') }}" required>
                </span>
            </div>
            <br>
            <div>
                <span>
                    <input type="number" name="andininy_fin" class="active textbox" placeholder="hatramin'ny"
                        value="{{ old('andininy_fin') }}" required>
                </span>
            </div>
            <div class="clear"></div>
            <div>
                <span><input type="submit" value="sokafy"></span>
            </div>
        </form>
    </div>
@endsection
