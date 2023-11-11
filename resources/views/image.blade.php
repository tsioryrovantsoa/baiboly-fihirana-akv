<div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
    @foreach ($images as $image)
    <div data-src="{{$image->fichierURL()}}">
        <div class="camera_caption fadeFromBottom">
            <h2>{{$image->titre}}</h2>
            @if ($image->description)
                <p>{{$image->description}}</p>
            @endif
        </div>
    </div>
    @endforeach
</div>
