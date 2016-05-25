<article class="{$OrientationClasses} nested-element nested-element--{$ClassName.LowerCase}<% if Style %> {$ClassName.LowerCase}--{$CssStyle}<% end_if %>">
  <<% if GridItem.IsLinked %>a href="$Link"<% else %>div<% end_if %>
    class="grid-item {$ClassName.Slug}-list-item<% if $GridItem.Classes %> $GridItem.Classes<% end_if %>">

    <% if $IsPortrait %>
      $AsGridCell
    <% else %>
      $AsGridRow
    <% end_if %>

  </<% if GridItem.IsLinked %>a<% else %>div<% end_if %>>
</article>
