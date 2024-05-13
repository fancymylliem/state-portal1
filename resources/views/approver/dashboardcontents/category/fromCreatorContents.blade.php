<div class="col">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-sharp fa-regular fa-folder-grid"></i>Contents
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="act();">Acts</a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="govOrder();">Government Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="doc();">Documents</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="scheme();">Scheme</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="form();">Form</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="service();">Service</a>
                </li>
            </ul>
            <div id="content">
                    <h2 id="h">Contents for approval</h2>
                <div id="gov" style="display:none">
                        @include("approver.tabs.category.govorderTab")
                </div>
                <div id="act" style="display:none">
                        @include("approver.tabs.category.actTab")
                </div>
                <div id="doc" style="display:none">
                        @include("approver.tabs.category.docTab")
                </div>
                <div id="scheme" style="display:none">
                        @include("approver.tabs.category.schemeTab")
                </div>
                <div id="form" style="display:none">
                        @include("approver.tabs.category.formTab")
                </div>
                <div id="service" style="display:none">
                        {{-- @include("approver.tabs.category.seviceTab") --}}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  function govOrder(){
      document.getElementById('h').style.display='none';
      document.getElementById('gov').style.display='block';
      document.getElementById('act').style.display='none';
      document.getElementById('doc').style.display='none';
      document.getElementById('scheme').style.display='none';
      document.getElementById('form').style.display='none';
      document.getElementById('service').style.display='none';
  }
  function act(){
      document.getElementById('h').style.display='none';
      document.getElementById('gov').style.display='none';
      document.getElementById('act').style.display='block';
      document.getElementById('doc').style.display='none';
      document.getElementById('scheme').style.display='none';
      document.getElementById('form').style.display='none';
      document.getElementById('service').style.display='none';
  }
  
  function doc(){
      document.getElementById('h').style.display='none';
      document.getElementById('gov').style.display='none';
      document.getElementById('act').style.display='none';
      document.getElementById('doc').style.display='block';
      document.getElementById('scheme').style.display='none';
      document.getElementById('form').style.display='none';
      document.getElementById('service').style.display='none';
  }
  function scheme(){
      document.getElementById('h').style.display='none';
      document.getElementById('gov').style.display='none';
      document.getElementById('act').style.display='none';
      document.getElementById('doc').style.display='none';
      document.getElementById('scheme').style.display='block';
      document.getElementById('form').style.display='none';
      document.getElementById('service').style.display='none';
  }
  function form(){
      document.getElementById('h').style.display='none';
      document.getElementById('gov').style.display='none';
      document.getElementById('act').style.display='none';
      document.getElementById('doc').style.display='none';
      document.getElementById('scheme').style.display='none';
      document.getElementById('form').style.display='block';
      document.getElementById('service').style.display='none';
  }
  function service(){
      document.getElementById('h').style.display='none';
      document.getElementById('gov').style.display='none';
      document.getElementById('act').style.display='none';
      document.getElementById('doc').style.display='none';
      document.getElementById('scheme').style.display='none';
      document.getElementById('form').style.display='none';
      document.getElementById('service').style.display='block';
  }

</script>
{{-- <div class="col-xl-6">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-sharp fa-regular fa-folder-grid"></i>Contents
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="govOrder();">Government Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="act();">Acts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="doc();">Documents</a>
                </li>
            </ul>
            <div id="content">
                    <h2 id="h">Contents for approval</h2>
                <div id="gov" style="display:none">
                        @include("approver.tabs.govorderTab")
                </div>
                <div id="act" style="display:none">
                        @include("approver.tabs.actTab")
                </div>
                <div id="doc" style="display:none">
                        @include("approver.tabs.docTab")
                </div>
            </div>
        </div>
    </div>
</div> --}}