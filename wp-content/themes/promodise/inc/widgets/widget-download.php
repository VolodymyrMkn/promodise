<?php
class Promodise_Widget_download extends WP_Widget{
    public function __construct(){
        parent::__construct('promodise_widget_download', 'Promodise - Файловый виджет',[
            'name'=>'Promodise - Файловый виджет',
            'description'=>'Позволяет прикрепиить файл для скачивание',
            'classname' => 'download'
        ]);
    }
    public function form($instance){
        $title = $instance['title'] ?: 'Полезные файлы 1';
        $file_name = $instance['file_name'] ?: 'Название файла 1';
        $file_name_1 = $instance['file_name_1'] ?: 'Название файла 2';
        $file = $instance['file'] ?: 'URL файла 1';
        $file_1 = $instance['file_1'] ?: 'URL файла 2';
 //       print_anyarray($instance);
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
            <input
                type="text"
                class="widefat"
                id="<?php echo $this->get_field_id('title');?>"
                name="<?php echo $this->get_field_name('title');?>"
                value="<?php echo esc_attr($title) ;?>"
            >
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('file_name'); ?>"><?php echo 'Название файла 1:'; ?></label>
            <input class="widefat"
                   id="<?php echo $this->get_field_id('file_name'); ?>"
                   name="<?php echo $this->get_field_name('file_name'); ?>"
                   type="text"
                   value="<?php echo esc_attr($file_name); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('file'); ?>"><?php echo 'Ссылка на файл 1:' ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('file'); ?>"
                   name="<?php echo $this->get_field_name('file'); ?>" type="text"
                   value="<?php echo esc_attr($file); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('file_name_1'); ?>"><?php echo 'Название файла 2:'; ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('file_name_1'); ?>"
                   name="<?php echo $this->get_field_name('file_name_1'); ?>" type="text"
                   value="<?php echo esc_attr($file_name_1); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('file_1'); ?>"><?php echo 'Ссылка на файл 2:'; ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('file_1'); ?>"
                   name="<?php echo $this->get_field_name('file_1'); ?>" type="text"
                   value="<?php echo esc_attr($file_1); ?>">
        </p>
        <?php
    }
    public  function  widget($args, $instance){
        // $args['before_widget'];
        // echo $instance['text'];
        $title = apply_filters('widget_title', $instance['title']);
        $file = $instance['file'];
        $file_name = $instance['file_name'];
        $file_1 = $instance['file_1'];
        $file_name_1 = $instance['file_name_1'];

        echo $args['before_widget']; // выводим что-то перед виджетом
        if (!empty($title)) { // если тайтл не пустой, то выводим, то, что стоит перед тайтлом
            echo $args['before_title'] . $title . $args['after_title']; // сам  $title и после тайтла:  $args['after_title']
        }
        echo '<a target="__blank" href="' . $file . '"><i class="fa fa-file-pdf"></i>' . $file_name . '</a>
              <a target="__blank" href="' . $file_1 . '"><i class="fa fa-file-pdf"></i>' . $file_name_1 . '</a>';
        echo $args['after_widget'];
    }
    public  function  update($new_instance, $old_instance){
        $instance = array();
        $instance['title'] = $new_instance['title'];
        $instance['file_name'] = $new_instance['file_name'];
        $instance['file_name_1'] = $new_instance['file_name_1'];
        $instance['file'] = $new_instance['file'];
        $instance['file_1'] = $new_instance['file_1'];

        return $instance;

    }

}
?>
