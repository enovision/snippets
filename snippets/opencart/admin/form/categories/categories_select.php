<?php

<div class="form-group">
  <label class="col-sm-2 control-label" for="input-category">
          <span data-toggle="tooltip" title="" data-original-title="(Autocomplete)">Categories</span>
   </label>
  <div class="col-sm-10">
    <input type="text" name="category" value="" placeholder="Categories" id="input-category" class="form-control" autocomplete="off">
    <ul class="dropdown-menu" style="top: 35px; left: 15px; display: none;">
      <li data-value="100"><a href="#">DB-depot</a></li>
      <li data-value="101"><a href="#">DB-depot&nbsp;&nbsp;&gt;&nbsp;&nbsp;CNC Vacuum spare parts</a></li>
      <li data-value="96"><a href="#">Scratch Removal</a></li>
      <li data-value="90"><a href="#">Scratch Removal&nbsp;&nbsp;&gt;&nbsp;&nbsp;Scratch Removal Articles</a></li>
      <li data-value="91"><a href="#">Scratch Removal&nbsp;&nbsp;&gt;&nbsp;&nbsp;Scratch Removal Systems</a></li>
    </ul>
    <div id="product-category" class="well well-sm" style="height: 150px; overflow: auto;">
      <div id="product-category93"><i class="fa fa-minus-circle"></i> Windshield Repair &gt; Windshield Repair Articles <input type="hidden" name="product_category[]" value="93">
      </div>
    </div>
  </div>
</div>