<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="row">
  <div class="event-item">
    <?php if (!empty($caption)) : ?>
      <caption><?php print $caption; ?></caption>
    <?php endif; ?>

    <?php foreach ($rows as $row_number => $columns): ?>
      <?php foreach ($columns as $column_number => $item): ?>
          <div <?php if ($column_classes[$row_number][$column_number]): ?> class="<?php print $column_classes[$row_number][$column_number]; ?>"<?php endif; ?>>
            <div class="well">
              <?php print $item; ?>
            </div>
          </div>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </div>
</div>