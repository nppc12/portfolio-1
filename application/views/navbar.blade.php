<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    {{HTML::link('/', 'Strona Główna', array('class' =>'brand'))}}
    <ul class="nav">
      <!-- Class active need todo -->
      <li><a href="#">O mnie</a></li>
      <li><a href="#">Wszystkie projekty</a></li>
      <li><a href="#">Wykorzystywane technologie</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          MOCK
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Mock</a></li>
          <li><a href="#">Mock</a></li>
        </ul>
      </li>
    </ul>
    <script type="text/javascript">
      $(document).ready( function() {
        $('.dropdown-toggle').dropdown();
      });
    </script>
  </div>