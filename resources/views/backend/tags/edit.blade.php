<x-layouts.master>
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Edit Tag</h3>
            <ol class="breadcrumb mb-4">
                <li><a href="{{ route('tags.index') }}" class="btn btn-danger mx-1">Back to List</a></li>
            </ol>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('tags.update', ['tag' => $tag->id]) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $tag->name) }}" />
                        <label for="name">Tag Name</label>
                        @error('name')
                        <span class="small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </form>
            </div>

        </div>

    </main>
</x-layouts.master>