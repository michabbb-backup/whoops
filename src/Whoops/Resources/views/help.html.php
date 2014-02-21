<?php /* Link to help resources */ ?>
<div class="details">
  <div class="data-table-container">
    <label>Help</label>
    <p>
      Search on
      <a href="http://google.com/search?q=<?php echo urlencode(implode('\\', $name).' '.$message) ?>">Google</a>,
      <a href="http://stackoverflow.com/search?q=<?php echo urlencode(implode('\\', $name).' '.$message) ?>">Stack Overflow</a>.
    </p>
  </div>
</div>