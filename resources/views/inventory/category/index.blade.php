<x-app-layout>
    <div class="card">
        <div class="card-body">
            <a href="/inventory/category/add" class="btn btn-primary">
                Add category </a>
        </div>
    </div>
    <hr />
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Code
                </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorylist as $category)
            <tr>
                <td>
                    {{$category->id}}
                </td>
                <td>
                    {{$category->name}}
                </td>
                <td>
                    {{$category->code}}
                </td>
                <td>
                    <a href="/inventory/category/edit?categoryId={{$category->id}}" class="btn btn-primary">
                        Edit </a>
                      <a href="/inventory/category/delete?categoryId={{$category->id}}" class="btn btn-warning">
                        Delete
                      </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>