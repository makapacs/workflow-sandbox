<?php

?>
        <?php foreach ($view->result as $id => $row): ?>
      <?php
            $path_alias = drupal_get_path_alias('node/'.$row->nid);
            print '<li><a href="'.base_path().$path_alias.'" title="' . $row->node_title . '" ><span class="glyphicon glyphicon-book"></span> '.$row->node_title.'</a>';
            print '</li>';
            ?>
<?php endforeach; ?>
