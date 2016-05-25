
  <% include _Title %>

  <% include _HTML %>

  <div class="element-body better-testing-panels">
    <div class="row" role="tablist" aria-multiselectable="true">
      <% loop Items %>
        <% include _AccordionPanel Col=8 %>
        <% if MultipleOf(2) %>
          <div class="clearboth" style="clear:both"></div>
        <% end_if %>
      <% end_loop %>
    </div>
  </div>

