<% if $LinkText || $LinkURL %>
<a class="btn btn-primary <%--
     --%>$Type.Slug<% if $ExtraClass %> $ExtraClass<% end_if %> <%--
     --%><% if InternalLink %>internal_link<% else %>external_link<% end_if %>"
   href="<% if InternalLink %>$InternalLink.Link<% else %>$LinkURL<% end_if %>"
   <% if NewWindow %>target="_blank"<% end_if %>>

  <% if LinkText %>$LinkText<% else %>$LinkURL<% end_if %>
  <i class="fa fa-chevron-right"></i>
</a>
<% end_if %>
