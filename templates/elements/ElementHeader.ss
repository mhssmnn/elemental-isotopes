<header id="header"
        class="header<% if Style %> header-$CssStyle.Slug<% end_if %>">

  <div class="container">
    <div class="header-inner">

      <h2>$Title.Raw</h2>

    <% if $SubTitle %>
      <h3>$SubTitle.Raw</h3>
    <% end_if %>

    <% if $Intro %>
      <p class="intro">$Intro</p>
    <% end_if %>

    </div>

    <% if Image %>
      <img class="header-bg-image" src="$Image.URL">
    <% end_if %>
  </div>
</header>

<% if Image %>
  <style>
    #header {
      background-image: url($Image.URL);
    }
  </style>
<% end_if %>
