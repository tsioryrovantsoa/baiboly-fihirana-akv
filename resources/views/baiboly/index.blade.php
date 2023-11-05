@extends('layout.layout')

@section('title', 'Baiboly')

@section('content')

    <div class="contact-form" style="margin-top:15px;">
        <form method="post" action="{{route('baiboly.send')}}">
            @csrf
            <div>
                <span>
                    <select name="chapter_id" id="chapter_id" class="active textbox">
                        @foreach ($chapters as $chapter)
                            <option value="{{ $chapter->_id }}">{{ $chapter->title }}</option>
                        @endforeach
                    </select>
                </span>
            </div>
            <br>
            <div>
                <span>
                    <input type="number" name="toko" class="active textbox" placeholder="toko">
                </span>
            </div>
            <br>
            <div>
                <span>
                    <input type="number" name="andininy_deb" class="active textbox" placeholder="andininy faha">
                </span>
            </div>
            <br>
            <div>
                <span>
                    <input type="number" name="andininy_fin" class="active textbox" placeholder="hatramin'ny">
                </span>
            </div>
            <div class="clear"></div>
            <div>
                <span><input type="submit" class="" value="sokafy"></span>
            </div>
        </form>
    </div>
@endsection
