<% if $Image %>
  <% if InternalLink %><a class="element-image-link internal_link" href="$InternalLink.Link" <% if NewWindow %>target="_blank"<% end_if %>><% end_if %>

  <figure class="element-image $Type.Slug<% if $ExtraClass %> $ExtraClass<% end_if %><% if Style %> element-image--$CssStyle<% end_if %>">
    <img class="img-responsive" src="$Image.URL" alt="$Image.Title" />
    <% if Caption %><figcaption class="image_caption">$Caption</figcaption><% end_if %>
    <% if LinkDescription %><div class="link-description">$LinkDescription</div><% end_if %>
  </figure>

  <% if InternalLink %></a><% end_if %>
<% end_if %>
