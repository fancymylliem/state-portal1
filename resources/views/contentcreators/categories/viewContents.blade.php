<div class="container">
    <table class="table">
        <thead>
            <th>Sl No</th>
            <th>Category</th>
            <th>Title</th>
            <th>Operations</th>
        </thead>
        <tbody>
            
            @foreach ($vc as $o)
                @if($o->status===0)
                    <tr>
                        <td>{{$o->order_id}}</td>
                        <td>Government Order</td>
                        <td>{{$o->title}}</td>
                        <td><a class="btn btn-warning" href="viewcontent/{{$id=$o->order_id}}">View</a></td>
                        {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$o->doc_id}}"></a></td> --}}
                    </tr> 
                @endif
            @endforeach
            @foreach ($act as $o)
            @if($o->status===0)
                <tr>
                    <td>{{$o->act_id}}</td>
                    <td>Act</td>
                    <td>{{$o->title}}</td>
                    <td><a class="btn btn-warning" href="viewcontent/{{$id=$o->act_id}}">View</a></td>
                    {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$o->doc_id}}"></a></td> --}}
                </tr> 
            @endif
            @endforeach
            
            @foreach ($doc as $o)
            @if($o->status===0)
                <tr>
                    <td>{{$o->doc_id}}</td>
                    <td>Document</td>
                    <td>{{$o->title}}</td>
                    <td><a class="btn btn-warning" href="viewcontent/{{$id=$o->doc_id}}">View</a></td>
                    {{-- <td><a class="btn btn-danger" href="deleteorder/{{$id=$o->doc_id}}"></a></td> --}}
                </tr> 
            @endif
            @endforeach
       
        </tbody>
    </table>
    
</div>