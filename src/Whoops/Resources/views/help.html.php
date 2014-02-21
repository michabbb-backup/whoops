<?php /* Link to help resources */ ?>
<div class="data-table-container" id="handlers">
  <label>Help</label>
  <ul>
    <li><a href="http://google.com/search?q=<?php echo urlencode(implode('\\', $name).' '.$message) ?>">Google</a></li>
    <li><a href="http://stackoverflow.com/search?q=<?php echo urlencode(implode('\\', $name).' '.$message) ?>">Stack Overflow</a></li>
  </ul>
</div>
