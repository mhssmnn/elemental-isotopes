  <header id="header"
          class="article-header navbar-padding {$CurrentPage.ClassName.Lowercase}-header
                 <% if Style %>header-$CssStyle.Slug<% end_if %>
                 <% if MainImage || Image %> has-image<% end_if %>
                 <% if CurrentPage.HasSubMenu %> subnavbar-padding<% end_if %>">

    <div class="container">

      <% if CurrentPage.HasSubMenu %>
        <% include NavSubMenuXS %>
      <% end_if %>

      $HeaderContent

    </div>
  </header>
