<div class="panel panel-minimal">
  <div class="panel-heading" role="tab">
    <h3 class="panel-title">
      <a class="collapsed" role="button" data-toggle="collapse" href="#collapse{$Pos}" aria-expanded="true" aria-controls="collapse{$Pos}">
        $Title
        <i class="icon-close"></i>
      </a>
    </h3>
  </div>
  <div id="collapse{$Pos}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
    <div class="panel-body">
      $Content.Raw
    </div>
  </div>
</div>
