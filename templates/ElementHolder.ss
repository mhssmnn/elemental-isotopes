<div id="section{$ID}"
     class="element $ClassName<% if $ExtraClass %> $ExtraClass<% end_if %>">

  <% if not $Form %>
    $Widget
  <% else %>
    $Content
  <% end_if %>