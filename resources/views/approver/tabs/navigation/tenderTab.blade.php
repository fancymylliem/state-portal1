<table class="table">
    <thead>
        <th>Sl No</th>
        {{-- <th>Category</th> --}}
        <th>Title</th>
        <th>Operations</th>
    </thead>
    <tbody>
        @foreach ($tender as $t)
        @if($t->status===1)
            <tr>
                <td>{{$t->tender_id}}</td>
                {{-- <td>Act</td> --}}
                <td>{{$t->title}}</td>
                <td><a class="btn btn-warning" href="viewtendercontent/{{$id=$t->tender_id}}">View</a></td>
                {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$o->doc_id}}"></a></td> --}}
            </tr> 
        @endif
        @endforeach
    </tbody>
</table>