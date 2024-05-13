<table class="table">
    <thead>
        <th>Sl No</th>
        {{-- <th>Category</th> --}}
        <th>Title</th>
        <th>Operations</th>
    </thead>
    <tbody>
        
        @foreach ($form as $f)
        @if($f->status===1)
            <tr>
                <td>{{$f->form_id}}</td>
                {{-- <td>Document</td> --}}
                <td>{{$f->title}}</td>
                <td><a class="btn btn-warning" href="viewdoccontent/{{$did=$f->form_id}}">View</a></td>
                {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$f->doc_id}}"></a></td> --}}
            </tr> 
        @endif
        @endforeach
    </tbody>
</table>