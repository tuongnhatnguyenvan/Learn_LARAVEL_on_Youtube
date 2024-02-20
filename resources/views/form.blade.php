<form action="/unicode" method="post">
    <div>
        <input type="text" name="name" placeholder="enter your name" />
        <input type="hidden" name="_method" value="Delete" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </div>
    <button type="submit">submit</button>
</form>