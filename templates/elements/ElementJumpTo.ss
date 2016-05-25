<% if JumpTo %>
  <div class="boxed-primary">
    <h4>Jump to</h4>
    <nav class="jump-to">
      <ul>
      <% loop $JumpTo %>
        <% if $JumpToTitle && not Empty %>
        <li><a href="#section{$ID}">$JumpToTitle</a></li>
        <% end_if %>
      <% end_loop %>
      </ul>
    </nav>
  </div>
<% end_if %>
