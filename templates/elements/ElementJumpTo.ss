<% if JumpTo %>
  <div class="boxed-primary">
    <h4>Jump to</h4>
    <nav class="jump-to">
      <ul>
      <% loop $JumpTo %>
        <% if not $HideTitle %>
        <li><a href="#section{$ID}">$Title</a></li>
        <% end_if %>
      <% end_loop %>
      </ul>
    </nav>
  </div>
<% end_if %>
