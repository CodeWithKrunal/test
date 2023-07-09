<x-app-layout>

<div>
    <a href="{{ route('contacts.create') }}" class="btn btn-primary">Add Contacts</a>
</div>

<div>
    @if(session()->has("status"))
    <div class="row align-items-center">
        <div class="col">
            <div class="alert alert-{{session()->get("status") === "success"?'primary':'danger'}}"
                 role="alert">
                {{session()->get("message")}}
            </div>
        </div>
    </div>
@endif
</div>

    This is for Contact form DataTables
</x-app-layout>
