<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <p class="navbar-text">PIPless</p>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo BASE_URL; ?>">Main</a></li>
      <li><a href="<?php echo $url('json'); ?>">JSON</a></li>
      <li><a href="<?php echo $url('json','getdata','demo');?>">JSONdata</a></li>
      <li><a href="<?php echo $url('test'); ?>">Test</a></li>
    </ul>
  </div>
</nav>