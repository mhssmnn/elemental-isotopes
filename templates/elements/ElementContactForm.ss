<% include _Title %>

<% if Profile %>
<div class="row">
  <div class="col-sm-4">
  <% with Profile %>
    <div class="grid-item grid-item-borderless person-list-item">
      <% include ProfileSummaryContent ShowContactDetails=1 %>
    </div>
  <% end_with %>
  </div>
  <div class="col-sm-12">
    $Form
  </div>
</div>
<% else %>
  $Form
<% end_if %>

