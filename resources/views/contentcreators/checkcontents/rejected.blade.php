<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
    <h5 class="text-secondary fw-bolder">Rejected contents</h5>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Sl No</th>
                <th>Category</th>
                <th>Title</th>

            </thead>
            <tbody>
                @foreach ($act as $o)
                    @if($o->status ==4)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>Act</td>
                            <td>{{$o->title}}</td>                                                                
                        </tr> 
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>