<div class="col">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-sharp fa-regular fa-folder-grid"></i>Contents
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="tender();">Tenders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="notification();">Notifications</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="charter();">Citizen Charter</a>
              </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#" onclick="scheme();">Scheme</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="form();">Form</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="service();">Service</a>
                </li> --}}
            </ul>
            <div id="content">
                    <h2 id="h">Contents for approval</h2>
                <div id="tender" style="display:none">
                        @include("approver.tabs.navigation.tenderTab")
                </div>
                <div id="noti" style="display:none">
                        @include("approver.tabs.navigation.notificationTab")
                </div>
                <div id="charter" style="display:none">
                        @include("approver.tabs.navigation.tenderTab")
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  function tender(){
      document.getElementById('tender').style.display='block';
      document.getElementById('noti').style.display='none';
      document.getElementById('charter').style.display='none';
      
  }
  
  function notification(){
      document.getElementById('tender').style.display='none';
      document.getElementById('noti').style.display='block';
      document.getElementById('charter').style.display='none';
      
  }
  
  

</script>
