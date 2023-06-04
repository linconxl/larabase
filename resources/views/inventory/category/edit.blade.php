<x-app-layout>
    <div class="card">
        <div class="card-body">
            <form method="post" action="/inventory/category/edit-post">
                @csrf
                <input type="hidden" name="id"  value ="{{$category->id }}" >

                <div class="form-group">
                    <label for="">
                        name
                    </label>
                    <input type="text" name="name" class="form-control" value ="{{$category->name }}" required>
                </div>
                <div class="form-group">
                    <label for="">
                        code
                    </label>
                    <input type="text" name="code" class="form-control" value="{{$category->code }}" required>
                </div>
                <button class="btn btn-success">
                Save

                </button>
            </form>
        </div>
    </div>
    im fine
</x-app-layout>