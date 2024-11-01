<p>
  <label for="<?php Echo $this->get_field_id('title') ?>"><?php Echo $this->t('Title:'); ?></label>
  <input type="text" name="<?php Echo $this->get_field_name('title') ?>" id="<?php Echo $this->get_field_id('title') ?>" value="<?php Echo $this->get_option('title') ?>" />
</p>

<p>
  <input type="checkbox" value="yes" name="<?php Echo $this->get_field_name('hide_widget_title') ?>" id="<?php Echo $this->get_field_id('hide_widget_title') ?>" <?php Checked( $this->get_option('hide_widget_title'), 'yes' ); ?>/>
  <label for="<?php Echo $this->get_field_id('hide_widget_title') ?>"><?php Echo $this->t('Hide the widget title.') ?></label>
</p>

<p>
  <input type="checkbox" value="yes" name="<?php Echo $this->get_field_name('replace_widget_title') ?>" id="<?php Echo $this->get_field_id('replace_widget_title') ?>" <?php Checked( $this->get_option('replace_widget_title'), 'yes' ); ?>/>
  <label for="<?php Echo $this->get_field_id('replace_widget_title') ?>"><?php Echo $this->t('Replace the widget title with the title of the parent page if possible.') ?></label>
</p>

<p>
  <label for="<?php Echo $this->get_field_id('orderby'); ?>"><?php _e( 'Sort by:' ) ?></label>
  <select name="<?php Echo $this->get_field_name('orderby') ?>" id="<?php Echo $this->get_field_id('orderby'); ?>">
    <option value="menu_order" <?php selected( $this->get_option('orderby'), 'menu_order' ); ?> ><?php _e('Page order'); ?></option>
    <option value="title" <?php selected( $this->get_option('orderby'), 'title' ); ?> ><?php _e('Page title'); ?></option>
    <option value="ID" <?php selected( $this->get_option('orderby'), 'ID' ); ?> ><?php _e( 'Page ID' ); ?></option>
  </select>
</p>

<p>
  <label for="<?php Echo $this->get_field_id('exclude') ?>"><?php _e( 'Exclude:' ) ?></label>
  <input type="text" value="<?php Echo $this->get_option('exclude') ?>" name="<?php Echo $this->get_field_name('exclude') ?>" id="<?php Echo $this->get_field_id('exclude') ?>"><br />
  <small><?php _e( 'Page IDs, separated by commas.' ); ?></small>
</p>

<p>
  <input type="checkbox" value="yes" name="<?php Echo $this->get_field_name('do_not_show_on_top_leves_without_subs') ?>" id="<?php Echo $this->get_field_id('do_not_show_on_top_leves_without_subs') ?>" <?php checked( $this->get_option('do_not_show_on_top_leves_without_subs'), 'yes' ); ?>/>
  <label for="<?php Echo $this->get_field_id('do_not_show_on_top_leves_without_subs') ?>"><?php Echo $this->t('Do not show this widget on top level pages if there are no sub pages.') ?></label>
</p>

<p>
  <input type="checkbox" value="yes" name="<?php Echo $this->get_field_name('hide_parent_link') ?>" id="<?php Echo $this->get_field_id('hide_parent_link') ?>" <?php checked( $this->get_option('hide_parent_link'), 'yes' ); ?>/>
  <label for="<?php Echo $this->get_field_id('hide_parent_link') ?>"><?php Echo $this->t('Hide link to parant page.') ?></label>
</p>
