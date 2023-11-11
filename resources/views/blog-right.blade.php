<div class="contact-form" style="margin-top:10px;width:auto">
    <form method="get" action="{{ route('search.index') }}">
        <div>
            <span><input name="search" type="text" class="textbox right" style="width: auto"
                    value="{{ $search ?? ''}}" placeholder="oh : Kristy Velona" autocomplete="off" required></span>
        </div>
        <div>
            <span><input type="submit" value="Karohy"></span>
        </div>
    </form>
</div>
