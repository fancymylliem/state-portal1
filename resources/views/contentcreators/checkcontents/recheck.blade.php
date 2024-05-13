<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
    <h5 class="text-secondary fw-bolder">Recheck contents</h5>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Sl No</th>
                <th>Category</th>
                <th>Title</th>
                <th>Remark</th>
                <th>Operation</th>
            </thead>
            <tbody>
                @foreach ($act as $o)
                    @if($o->status ==3)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>Act</td>
                            <td>{{$o->title}}</td>                                                                
                            <td class="text-danger">{{$o->remark}}</td>                                                                
                            <td><a href="viewactdetails/{{$id=$o->act_id}}" class="btn btn-warning">view</a></td>                                                                
                        </tr> 
                    @endif
                @endforeach
                @foreach ($tender as $t)
                    @if($t->status ==3)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>Tender</td>
                            <td>{{$t->title}}</td>                                                                
                            <td class="text-danger">{{$t->remark}}</td>                                                                
                            <td><a href="viewtenderdetails/{{$id=$t->tender_id}}" class="btn btn-warning">view</a></td>                                                                
                        </tr> 
                    @endif
                @endforeach
                @foreach ($notification as $n)
                    @if($n->status ==3)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>Notifications</td>
                            <td>{{$n->title}}</td>                                                                
                            <td class="text-danger">{{$n->remark}}</td>                                                                
                            <td><a href="viewnotificationdetails/{{$id=$n->notification_id}}" class="btn btn-warning">view</a></td>                                                                
                        </tr> 
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>