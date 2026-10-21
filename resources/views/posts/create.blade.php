<h1>New Post</h1>
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <input name="title" value="{{ old('title') }}" placeholder="Title">
    @error('title') <div>{{ $message }}</div> @enderror

    <textarea name="body">{{ old('body') }}</textarea>
    @error('body') <div>{{ $message }}</div> @enderror

    <button type="submit">Save</button>
</form>
```[cite: 9]