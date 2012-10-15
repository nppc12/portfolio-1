<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    {{HTML::link('/', 'Strona Główna', array('class' =>'brand'))}}
    <ul class="nav">
      <!-- Class active need todo -->
      <li><a href="#">O mnie</a></li>
      <li><a href="#">Wszystkie projekty</a></li>
      <li><a href="#">Wykorzystywane technologie</a></li>
    </ul>
    <script type="text/javascript">
      $(document).ready( function() {
        $('.dropdown-toggle').dropdown();
      });
    </script>
  </div>