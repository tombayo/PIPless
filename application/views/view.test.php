<?php include('view.header.php'); ?>
	<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <p class="navbar-text">PIPless</p>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="/">Main</a></li>
        <li><a href="?p=json">JSON</a></li>
        <li><a href="?p=json/getdata/demo">JSONdata</a></li>
        <li class="active"><a href="?p=test">Test</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="page-header">
  		<h1>A quick demo</h1>
  	</div>
  	<div class="panel panel-primary">
      <div class="panel-heading"></div>
      <div class="panel-body">
        <p>The data below is loaded by the controller "Test" by calling a private method in the controller "JSON".</p>
      </div>
      <ul class="list-group">        
        <?php 
          foreach ($data['testing'] as $value) {
            echo '<li class="list-group-item">'.$value.'</li>';
          }
        ?>
      </ul>
    </div>
  </div>
<?php include('view.footer.php'); ?>
