
  <% include _Title %>

  <% include _HTML %>

  <div class="element-body">
    <div class="row" role="tablist" aria-multiselectable="true">
      <% loop Items %>
        <% include ElementConcertina_Item %>
      <% end_loop %>
    </div>
  </div>
